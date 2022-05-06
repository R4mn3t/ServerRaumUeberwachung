<?php

/* ***********************************************************
 * This file was automatically generated on 2021-05-06.      *
 *                                                           *
 * PHP Bindings Version 2.1.29                               *
 *                                                           *
 * If you have a bugfix for this file and want to commit it, *
 * please fix the bug in the generator. You can find a link  *
 * to the generators git repository on tinkerforge.com       *
 *************************************************************/

namespace Tinkerforge;

require_once(__DIR__ . '/IPConnection.php');

/**
 * Detects inclination of Bricklet (tilt switch open/closed)
 */
class BrickletTilt extends Device
{

    /**
     * This callback provides the current tilt state. It is called every time the
     * state changes.
     * 
     * See BrickletTilt::getTiltState() for a description of the states.
     */
    const CALLBACK_TILT_STATE = 5;


    /**
     * @internal
     */
    const FUNCTION_GET_TILT_STATE = 1;

    /**
     * @internal
     */
    const FUNCTION_ENABLE_TILT_STATE_CALLBACK = 2;

    /**
     * @internal
     */
    const FUNCTION_DISABLE_TILT_STATE_CALLBACK = 3;

    /**
     * @internal
     */
    const FUNCTION_IS_TILT_STATE_CALLBACK_ENABLED = 4;

    /**
     * @internal
     */
    const FUNCTION_GET_IDENTITY = 255;

    const TILT_STATE_CLOSED = 0;
    const TILT_STATE_OPEN = 1;
    const TILT_STATE_CLOSED_VIBRATING = 2;

    const DEVICE_IDENTIFIER = 239;

    const DEVICE_DISPLAY_NAME = 'Tilt Bricklet';

    /**
     * Creates an object with the unique device ID $uid. This object can
     * then be added to the IP connection.
     *
     * @param string $uid
     */
    public function __construct($uid, $ipcon)
    {
        parent::__construct($uid, $ipcon, self::DEVICE_IDENTIFIER, self::DEVICE_DISPLAY_NAME);

        $this->api_version = array(2, 0, 0);

        $this->response_expected[self::FUNCTION_GET_TILT_STATE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_ENABLE_TILT_STATE_CALLBACK] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_DISABLE_TILT_STATE_CALLBACK] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_IS_TILT_STATE_CALLBACK_ENABLED] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_IDENTITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;

        $this->callback_wrappers[self::CALLBACK_TILT_STATE] = array(9, 'callbackWrapperTiltState');

        $ipcon->addDevice($this);
    }

    /**
     * @internal
     * @param string $header
     * @param string $data
     */
    public function handleCallback($header, $data)
    {
        $wrapper = $this->callback_wrappers[$header['function_id']];

        if (8 + strlen($data) !== $wrapper[0]) {
            return; // Silently ignoring callback with wrong length
        }

        call_user_func(array($this, $wrapper[1]), $data);
    }

    /**
     * Returns the current tilt state. The state can either be
     * 
     * * 0 = Closed: The ball in the tilt switch closes the circuit.
     * * 1 = Open: The ball in the tilt switch does not close the circuit.
     * * 2 = Closed Vibrating: The tilt switch is in motion (rapid change between open and close).
     * 
     * .. image:: /Images/Bricklets/bricklet_tilt_mechanics.jpg
     *    :scale: 100 %
     *    :alt: Tilt states
     *    :align: center
     *    :target: ../../_images/Bricklets/bricklet_tilt_mechanics.jpg
     * 
     * 
     * @return int
     */
    public function getTiltState()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_TILT_STATE, $payload, 9);

        $payload = unpack('C1state', $data);

        return $payload['state'];
    }

    /**
     * Enables the BrickletTilt::CALLBACK_TILT_STATE callback.
     * 
     * 
     * @return void
     */
    public function enableTiltStateCallback()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_ENABLE_TILT_STATE_CALLBACK, $payload, 0);
    }

    /**
     * Disables the BrickletTilt::CALLBACK_TILT_STATE callback.
     * 
     * 
     * @return void
     */
    public function disableTiltStateCallback()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_DISABLE_TILT_STATE_CALLBACK, $payload, 0);
    }

    /**
     * Returns *true* if the BrickletTilt::CALLBACK_TILT_STATE callback is enabled.
     * 
     * 
     * @return bool
     */
    public function isTiltStateCallbackEnabled()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_IS_TILT_STATE_CALLBACK_ENABLED, $payload, 9);

        $payload = unpack('C1enabled', $data);

        return (bool)$payload['enabled'];
    }

    /**
     * Returns the UID, the UID where the Bricklet is connected to,
     * the position, the hardware and firmware version as well as the
     * device identifier.
     * 
     * The position can be 'a', 'b', 'c', 'd', 'e', 'f', 'g' or 'h' (Bricklet Port).
     * A Bricklet connected to an :ref:`Isolator Bricklet <isolator_bricklet>` is always at
     * position 'z'.
     * 
     * The device identifier numbers can be found :ref:`here <device_identifier>`.
     * |device_identifier_constant|
     * 
     * 
     * @return array
     */
    public function getIdentity()
    {
        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_IDENTITY, $payload, 33);

        $payload = unpack('c8uid/c8connected_uid/c1position/C3hardware_version/C3firmware_version/v1device_identifier', $data);

        $ret['uid'] = IPConnection::implodeUnpackedString($payload, 'uid', 8);
        $ret['connected_uid'] = IPConnection::implodeUnpackedString($payload, 'connected_uid', 8);
        $ret['position'] = chr($payload['position']);
        $ret['hardware_version'] = IPConnection::collectUnpackedArray($payload, 'hardware_version', 3);
        $ret['firmware_version'] = IPConnection::collectUnpackedArray($payload, 'firmware_version', 3);
        $ret['device_identifier'] = $payload['device_identifier'];

        return $ret;
    }

    /**
     * Registers the given $function with the given $callback_id. The optional
     * $user_data will be passed as the last parameter to the $function.
     *
     * @param int $callback_id
     * @param callable $function
     * @param mixed $user_data
     *
     * @return void
     */
    public function registerCallback($callback_id, $function, $user_data = NULL)
    {
        if (!is_callable($function)) {
            throw new \Exception('Function is not callable');
        }

        $this->registered_callbacks[$callback_id] = $function;
        $this->registered_callback_user_data[$callback_id] = $user_data;
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperTiltState($data)
    {
        $payload = unpack('C1state', $data);

        if (array_key_exists(self::CALLBACK_TILT_STATE, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_TILT_STATE];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_TILT_STATE];

            call_user_func($function, $payload['state'], $user_data);
        }
    }
}

?>
