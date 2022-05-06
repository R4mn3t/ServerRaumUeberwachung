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
 * Controls remote mains switches
 */
class BrickletRemoteSwitch extends Device
{

    /**
     * This callback is triggered whenever the switching state changes
     * from busy to ready, see BrickletRemoteSwitch::getSwitchingState().
     */
    const CALLBACK_SWITCHING_DONE = 3;


    /**
     * @internal
     */
    const FUNCTION_SWITCH_SOCKET = 1;

    /**
     * @internal
     */
    const FUNCTION_GET_SWITCHING_STATE = 2;

    /**
     * @internal
     */
    const FUNCTION_SET_REPEATS = 4;

    /**
     * @internal
     */
    const FUNCTION_GET_REPEATS = 5;

    /**
     * @internal
     */
    const FUNCTION_SWITCH_SOCKET_A = 6;

    /**
     * @internal
     */
    const FUNCTION_SWITCH_SOCKET_B = 7;

    /**
     * @internal
     */
    const FUNCTION_DIM_SOCKET_B = 8;

    /**
     * @internal
     */
    const FUNCTION_SWITCH_SOCKET_C = 9;

    /**
     * @internal
     */
    const FUNCTION_GET_IDENTITY = 255;

    const SWITCH_TO_OFF = 0;
    const SWITCH_TO_ON = 1;
    const SWITCHING_STATE_READY = 0;
    const SWITCHING_STATE_BUSY = 1;

    const DEVICE_IDENTIFIER = 235;

    const DEVICE_DISPLAY_NAME = 'Remote Switch Bricklet';

    /**
     * Creates an object with the unique device ID $uid. This object can
     * then be added to the IP connection.
     *
     * @param string $uid
     */
    public function __construct($uid, $ipcon)
    {
        parent::__construct($uid, $ipcon, self::DEVICE_IDENTIFIER, self::DEVICE_DISPLAY_NAME);

        $this->api_version = array(2, 0, 1);

        $this->response_expected[self::FUNCTION_SWITCH_SOCKET] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_SWITCHING_STATE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_REPEATS] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_REPEATS] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SWITCH_SOCKET_A] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_SWITCH_SOCKET_B] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_DIM_SOCKET_B] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_SWITCH_SOCKET_C] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_IDENTITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;

        $this->callback_wrappers[self::CALLBACK_SWITCHING_DONE] = array(8, 'callbackWrapperSwitchingDone');

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
     * This function is deprecated, use BrickletRemoteSwitch::switchSocketA() instead.
     * 
     * @param int $house_code
     * @param int $receiver_code
     * @param int $switch_to
     * 
     * @return void
     */
    public function switchSocket($house_code, $receiver_code, $switch_to)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $house_code);
        $payload .= pack('C', $receiver_code);
        $payload .= pack('C', $switch_to);

        $this->sendRequest(self::FUNCTION_SWITCH_SOCKET, $payload, 0);
    }

    /**
     * Returns the current switching state. If the current state is busy, the
     * Bricklet is currently sending a code to switch a socket. It will not
     * accept any requests to switch sockets until the state changes to ready.
     * 
     * How long the switching takes is dependent on the number of repeats, see
     * BrickletRemoteSwitch::setRepeats().
     * 
     * 
     * @return int
     */
    public function getSwitchingState()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_SWITCHING_STATE, $payload, 9);

        $payload = unpack('C1state', $data);

        return $payload['state'];
    }

    /**
     * Sets the number of times the code is sent when one of the switch socket
     * functions is called. The repeats basically correspond to the amount of time
     * that a button of the remote is pressed.
     * 
     * Some dimmers are controlled by the length of a button pressed,
     * this can be simulated by increasing the repeats.
     * 
     * @param int $repeats
     * 
     * @return void
     */
    public function setRepeats($repeats)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $repeats);

        $this->sendRequest(self::FUNCTION_SET_REPEATS, $payload, 0);
    }

    /**
     * Returns the number of repeats as set by BrickletRemoteSwitch::setRepeats().
     * 
     * 
     * @return int
     */
    public function getRepeats()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_REPEATS, $payload, 9);

        $payload = unpack('C1repeats', $data);

        return $payload['repeats'];
    }

    /**
     * To switch a type A socket you have to give the house code, receiver code and the
     * state (on or off) you want to switch to.
     * 
     * A detailed description on how you can figure out the house and receiver code
     * can be found :ref:`here <remote_switch_bricklet_type_a_house_and_receiver_code>`.
     * 
     * .. versionadded:: 2.0.1$nbsp;(Plugin)
     * 
     * @param int $house_code
     * @param int $receiver_code
     * @param int $switch_to
     * 
     * @return void
     */
    public function switchSocketA($house_code, $receiver_code, $switch_to)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $house_code);
        $payload .= pack('C', $receiver_code);
        $payload .= pack('C', $switch_to);

        $this->sendRequest(self::FUNCTION_SWITCH_SOCKET_A, $payload, 0);
    }

    /**
     * To switch a type B socket you have to give the address, unit and the state
     * (on or off) you want to switch to.
     * 
     * To switch all devices with the same address use 255 for the unit.
     * 
     * A detailed description on how you can teach a socket the address and unit can
     * be found :ref:`here <remote_switch_bricklet_type_b_address_and_unit>`.
     * 
     * .. versionadded:: 2.0.1$nbsp;(Plugin)
     * 
     * @param int $address
     * @param int $unit
     * @param int $switch_to
     * 
     * @return void
     */
    public function switchSocketB($address, $unit, $switch_to)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $address);
        $payload .= pack('C', $unit);
        $payload .= pack('C', $switch_to);

        $this->sendRequest(self::FUNCTION_SWITCH_SOCKET_B, $payload, 0);
    }

    /**
     * To control a type B dimmer you have to give the address, unit and the
     * dim value you want to set the dimmer to.
     * 
     * A detailed description on how you can teach a dimmer the address and unit can
     * be found :ref:`here <remote_switch_bricklet_type_b_address_and_unit>`.
     * 
     * .. versionadded:: 2.0.1$nbsp;(Plugin)
     * 
     * @param int $address
     * @param int $unit
     * @param int $dim_value
     * 
     * @return void
     */
    public function dimSocketB($address, $unit, $dim_value)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $address);
        $payload .= pack('C', $unit);
        $payload .= pack('C', $dim_value);

        $this->sendRequest(self::FUNCTION_DIM_SOCKET_B, $payload, 0);
    }

    /**
     * To switch a type C socket you have to give the system code, device code and the
     * state (on or off) you want to switch to.
     * 
     * A detailed description on how you can figure out the system and device code
     * can be found :ref:`here <remote_switch_bricklet_type_c_system_and_device_code>`.
     * 
     * .. versionadded:: 2.0.1$nbsp;(Plugin)
     * 
     * @param string $system_code
     * @param int $device_code
     * @param int $switch_to
     * 
     * @return void
     */
    public function switchSocketC($system_code, $device_code, $switch_to)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('c', ord($system_code));
        $payload .= pack('C', $device_code);
        $payload .= pack('C', $switch_to);

        $this->sendRequest(self::FUNCTION_SWITCH_SOCKET_C, $payload, 0);
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
    public function callbackWrapperSwitchingDone($data)
    {

        if (array_key_exists(self::CALLBACK_SWITCHING_DONE, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_SWITCHING_DONE];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_SWITCHING_DONE];

            call_user_func($function, $user_data);
        }
    }
}

?>
