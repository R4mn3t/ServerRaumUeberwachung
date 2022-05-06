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
 * Capacitive touch sensor for 12 electrodes
 */
class BrickletMultiTouch extends Device
{

    /**
     * Returns the current touch state, see BrickletMultiTouch::getTouchState() for
     * information about the state.
     * 
     * This callback is triggered every time the touch state changes.
     */
    const CALLBACK_TOUCH_STATE = 5;


    /**
     * @internal
     */
    const FUNCTION_GET_TOUCH_STATE = 1;

    /**
     * @internal
     */
    const FUNCTION_RECALIBRATE = 2;

    /**
     * @internal
     */
    const FUNCTION_SET_ELECTRODE_CONFIG = 3;

    /**
     * @internal
     */
    const FUNCTION_GET_ELECTRODE_CONFIG = 4;

    /**
     * @internal
     */
    const FUNCTION_SET_ELECTRODE_SENSITIVITY = 6;

    /**
     * @internal
     */
    const FUNCTION_GET_ELECTRODE_SENSITIVITY = 7;

    /**
     * @internal
     */
    const FUNCTION_GET_IDENTITY = 255;


    const DEVICE_IDENTIFIER = 234;

    const DEVICE_DISPLAY_NAME = 'Multi Touch Bricklet';

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

        $this->response_expected[self::FUNCTION_GET_TOUCH_STATE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_RECALIBRATE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_SET_ELECTRODE_CONFIG] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_ELECTRODE_CONFIG] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ELECTRODE_SENSITIVITY] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_ELECTRODE_SENSITIVITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_IDENTITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;

        $this->callback_wrappers[self::CALLBACK_TOUCH_STATE] = array(10, 'callbackWrapperTouchState');

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
     * Returns the current touch state. The state is given as a bitfield.
     * 
     * Bits 0 to 11 represent the 12 electrodes and bit 12 represents
     * the proximity.
     * 
     * If an electrode is touched, the corresponding bit is *true*. If
     * a hand or similar is in proximity to the electrodes, bit 12 is
     * *true*.
     * 
     * Example: The state 4103 = 0x1007 = 0b1000000000111 means that
     * electrodes 0, 1 and 2 are touched and that something is in the
     * proximity of the electrodes.
     * 
     * The proximity is activated with a distance of 1-2cm. An electrode
     * is already counted as touched if a finger is nearly touching the
     * electrode. This means that you can put a piece of paper or foil
     * or similar on top of a electrode to build a touch panel with
     * a professional look.
     * 
     * 
     * @return int
     */
    public function getTouchState()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_TOUCH_STATE, $payload, 10);

        $payload = unpack('v1state', $data);

        return $payload['state'];
    }

    /**
     * Recalibrates the electrodes. Call this function whenever you changed
     * or moved you electrodes.
     * 
     * 
     * @return void
     */
    public function recalibrate()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_RECALIBRATE, $payload, 0);
    }

    /**
     * Enables/disables electrodes with a bitfield (see BrickletMultiTouch::getTouchState()).
     * 
     * *True* enables the electrode, *false* disables the electrode. A
     * disabled electrode will always return *false* as its state. If you
     * don't need all electrodes you can disable the electrodes that are
     * not needed.
     * 
     * It is recommended that you disable the proximity bit (bit 12) if
     * the proximity feature is not needed. This will reduce the amount of
     * traffic that is produced by the BrickletMultiTouch::CALLBACK_TOUCH_STATE callback.
     * 
     * Disabling electrodes will also reduce power consumption.
     * 
     * Default: 8191 = 0x1FFF = 0b1111111111111 (all electrodes and proximity feature enabled)
     * 
     * @param int $enabled_electrodes
     * 
     * @return void
     */
    public function setElectrodeConfig($enabled_electrodes)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $enabled_electrodes);

        $this->sendRequest(self::FUNCTION_SET_ELECTRODE_CONFIG, $payload, 0);
    }

    /**
     * Returns the electrode configuration, as set by BrickletMultiTouch::setElectrodeConfig().
     * 
     * 
     * @return int
     */
    public function getElectrodeConfig()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ELECTRODE_CONFIG, $payload, 10);

        $payload = unpack('v1enabled_electrodes', $data);

        return $payload['enabled_electrodes'];
    }

    /**
     * Sets the sensitivity of the electrodes. An electrode with a high sensitivity
     * will register a touch earlier then an electrode with a low sensitivity.
     * 
     * If you build a big electrode you might need to decrease the sensitivity, since
     * the area that can be charged will get bigger. If you want to be able to
     * activate an electrode from further away you need to increase the sensitivity.
     * 
     * After a new sensitivity is set, you likely want to call BrickletMultiTouch::recalibrate()
     * to calibrate the electrodes with the newly defined sensitivity.
     * 
     * @param int $sensitivity
     * 
     * @return void
     */
    public function setElectrodeSensitivity($sensitivity)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $sensitivity);

        $this->sendRequest(self::FUNCTION_SET_ELECTRODE_SENSITIVITY, $payload, 0);
    }

    /**
     * Returns the current sensitivity, as set by BrickletMultiTouch::setElectrodeSensitivity().
     * 
     * 
     * @return int
     */
    public function getElectrodeSensitivity()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ELECTRODE_SENSITIVITY, $payload, 9);

        $payload = unpack('C1sensitivity', $data);

        return $payload['sensitivity'];
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
    public function callbackWrapperTouchState($data)
    {
        $payload = unpack('v1state', $data);

        if (array_key_exists(self::CALLBACK_TOUCH_STATE, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_TOUCH_STATE];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_TOUCH_STATE];

            call_user_func($function, $payload['state'], $user_data);
        }
    }
}

?>
