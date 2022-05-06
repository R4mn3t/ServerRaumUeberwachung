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
 * Two relays to switch AC/DC devices
 */
class BrickletDualRelay extends Device
{

    /**
     * This callback is triggered whenever a monoflop timer reaches 0. The
     * parameter contain the relay (1 or 2) and the current state of the relay
     * (the state after the monoflop).
     */
    const CALLBACK_MONOFLOP_DONE = 5;


    /**
     * @internal
     */
    const FUNCTION_SET_STATE = 1;

    /**
     * @internal
     */
    const FUNCTION_GET_STATE = 2;

    /**
     * @internal
     */
    const FUNCTION_SET_MONOFLOP = 3;

    /**
     * @internal
     */
    const FUNCTION_GET_MONOFLOP = 4;

    /**
     * @internal
     */
    const FUNCTION_SET_SELECTED_STATE = 6;

    /**
     * @internal
     */
    const FUNCTION_GET_IDENTITY = 255;


    const DEVICE_IDENTIFIER = 26;

    const DEVICE_DISPLAY_NAME = 'Dual Relay Bricklet';

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

        $this->response_expected[self::FUNCTION_SET_STATE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_STATE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_MONOFLOP] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_MONOFLOP] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_SELECTED_STATE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_IDENTITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;

        $this->callback_wrappers[self::CALLBACK_MONOFLOP_DONE] = array(10, 'callbackWrapperMonoflopDone');

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
     * Sets the state of the relays, *true* means on and *false* means off.
     * For example: (true, false) turns relay 1 on and relay 2 off.
     * 
     * If you just want to set one of the relays and don't know the current state
     * of the other relay, you can get the state with BrickletDualRelay::getState() or you
     * can use BrickletDualRelay::setSelectedState().
     * 
     * All running monoflop timers will be aborted if this function is called.
     * 
     * @param bool $relay1
     * @param bool $relay2
     * 
     * @return void
     */
    public function setState($relay1, $relay2)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', intval((bool)$relay1));
        $payload .= pack('C', intval((bool)$relay2));

        $this->sendRequest(self::FUNCTION_SET_STATE, $payload, 0);
    }

    /**
     * Returns the state of the relays, *true* means on and *false* means off.
     * 
     * 
     * @return array
     */
    public function getState()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_STATE, $payload, 10);

        $payload = unpack('C1relay1/C1relay2', $data);

        $ret['relay1'] = (bool)$payload['relay1'];
        $ret['relay2'] = (bool)$payload['relay2'];

        return $ret;
    }

    /**
     * The first parameter can be 1 or 2 (relay 1 or relay 2). The second parameter
     * is the desired state of the relay (*true* means on and *false* means off).
     * The third parameter indicates the time that the relay should hold
     * the state.
     * 
     * If this function is called with the parameters (1, true, 1500):
     * Relay 1 will turn on and in 1.5s it will turn off again.
     * 
     * A monoflop can be used as a failsafe mechanism. For example: Lets assume you
     * have a RS485 bus and a Dual Relay Bricklet connected to one of the slave
     * stacks. You can now call this function every second, with a time parameter
     * of two seconds. The relay will be on all the time. If now the RS485
     * connection is lost, the relay will turn off in at most two seconds.
     * 
     * @param int $relay
     * @param bool $state
     * @param int $time
     * 
     * @return void
     */
    public function setMonoflop($relay, $state, $time)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $relay);
        $payload .= pack('C', intval((bool)$state));
        $payload .= pack('V', $time);

        $this->sendRequest(self::FUNCTION_SET_MONOFLOP, $payload, 0);
    }

    /**
     * Returns (for the given relay) the current state and the time as set by
     * BrickletDualRelay::setMonoflop() as well as the remaining time until the state flips.
     * 
     * If the timer is not running currently, the remaining time will be returned
     * as 0.
     * 
     * @param int $relay
     * 
     * @return array
     */
    public function getMonoflop($relay)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('C', $relay);

        $data = $this->sendRequest(self::FUNCTION_GET_MONOFLOP, $payload, 17);

        $payload = unpack('C1state/V1time/V1time_remaining', $data);

        $ret['state'] = (bool)$payload['state'];
        $ret['time'] = IPConnection::fixUnpackedUInt32($payload, 'time');
        $ret['time_remaining'] = IPConnection::fixUnpackedUInt32($payload, 'time_remaining');

        return $ret;
    }

    /**
     * Sets the state of the selected relay (1 or 2), *true* means on and *false* means off.
     * 
     * A running monoflop timer for the selected relay will be aborted if this function is called.
     * 
     * The other relay remains untouched.
     * 
     * @param int $relay
     * @param bool $state
     * 
     * @return void
     */
    public function setSelectedState($relay, $state)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $relay);
        $payload .= pack('C', intval((bool)$state));

        $this->sendRequest(self::FUNCTION_SET_SELECTED_STATE, $payload, 0);
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
    public function callbackWrapperMonoflopDone($data)
    {
        $payload = unpack('C1relay/C1state', $data);
        $payload['state'] = (bool)$payload['state'];

        if (array_key_exists(self::CALLBACK_MONOFLOP_DONE, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_MONOFLOP_DONE];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_MONOFLOP_DONE];

            call_user_func($function, $payload['relay'], $payload['state'], $user_data);
        }
    }
}

?>
