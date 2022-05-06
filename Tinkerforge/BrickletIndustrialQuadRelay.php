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
 * 4 galvanically isolated solid state relays
 */
class BrickletIndustrialQuadRelay extends Device
{

    /**
     * This callback is triggered whenever a monoflop timer reaches 0. The
     * parameters contain the involved pins and the current value of the pins
     * (the value after the monoflop).
     */
    const CALLBACK_MONOFLOP_DONE = 8;


    /**
     * @internal
     */
    const FUNCTION_SET_VALUE = 1;

    /**
     * @internal
     */
    const FUNCTION_GET_VALUE = 2;

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
    const FUNCTION_SET_GROUP = 5;

    /**
     * @internal
     */
    const FUNCTION_GET_GROUP = 6;

    /**
     * @internal
     */
    const FUNCTION_GET_AVAILABLE_FOR_GROUP = 7;

    /**
     * @internal
     */
    const FUNCTION_SET_SELECTED_VALUES = 9;

    /**
     * @internal
     */
    const FUNCTION_GET_IDENTITY = 255;


    const DEVICE_IDENTIFIER = 225;

    const DEVICE_DISPLAY_NAME = 'Industrial Quad Relay Bricklet';

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

        $this->response_expected[self::FUNCTION_SET_VALUE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_VALUE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_MONOFLOP] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_MONOFLOP] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_GROUP] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_GROUP] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_AVAILABLE_FOR_GROUP] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_SELECTED_VALUES] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_IDENTITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;

        $this->callback_wrappers[self::CALLBACK_MONOFLOP_DONE] = array(12, 'callbackWrapperMonoflopDone');

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
     * Sets the output value with a bitmask (16bit). A 1 in the bitmask means relay
     * closed and a 0 means relay open.
     * 
     * For example: The value 3 or 0b0011 will close the relay of pins 0-1 and open
     * the other pins.
     * 
     * If no groups are used (see BrickletIndustrialQuadRelay::setGroup()), the pins correspond to the
     * markings on the Industrial Quad Relay Bricklet.
     * 
     * If groups are used, the pins correspond to the element in the group.
     * Element 1 in the group will get pins 0-3, element 2 pins 4-7, element 3
     * pins 8-11 and element 4 pins 12-15.
     * 
     * All running monoflop timers will be aborted if this function is called.
     * 
     * @param int $value_mask
     * 
     * @return void
     */
    public function setValue($value_mask)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $value_mask);

        $this->sendRequest(self::FUNCTION_SET_VALUE, $payload, 0);
    }

    /**
     * Returns the bitmask as set by BrickletIndustrialQuadRelay::setValue().
     * 
     * 
     * @return int
     */
    public function getValue()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_VALUE, $payload, 10);

        $payload = unpack('v1value_mask', $data);

        return $payload['value_mask'];
    }

    /**
     * Configures a monoflop of the pins specified by the first parameter
     * bitmask.
     * 
     * The second parameter is a bitmask with the desired value of the specified
     * pins. A 1 in the bitmask means relay closed and a 0 means relay open.
     * 
     * The third parameter indicates the time that the pins should hold
     * the value.
     * 
     * If this function is called with the parameters (9, 1, 1500) or
     * (0b1001, 0b0001, 1500): Pin 0 will close and pin 3 will open. In 1.5s pin 0
     * will open and pin 3 will close again.
     * 
     * A monoflop can be used as a fail-safe mechanism. For example: Lets assume you
     * have a RS485 bus and a Quad Relay Bricklet connected to one of the slave
     * stacks. You can now call this function every second, with a time parameter
     * of two seconds and pin 0 closed. Pin 0 will be closed all the time. If now
     * the RS485 connection is lost, then pin 0 will be opened in at most two seconds.
     * 
     * @param int $selection_mask
     * @param int $value_mask
     * @param int $time
     * 
     * @return void
     */
    public function setMonoflop($selection_mask, $value_mask, $time)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $selection_mask);
        $payload .= pack('v', $value_mask);
        $payload .= pack('V', $time);

        $this->sendRequest(self::FUNCTION_SET_MONOFLOP, $payload, 0);
    }

    /**
     * Returns (for the given pin) the current value and the time as set by
     * BrickletIndustrialQuadRelay::setMonoflop() as well as the remaining time until the value flips.
     * 
     * If the timer is not running currently, the remaining time will be returned
     * as 0.
     * 
     * @param int $pin
     * 
     * @return array
     */
    public function getMonoflop($pin)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('C', $pin);

        $data = $this->sendRequest(self::FUNCTION_GET_MONOFLOP, $payload, 18);

        $payload = unpack('v1value/V1time/V1time_remaining', $data);

        $ret['value'] = $payload['value'];
        $ret['time'] = IPConnection::fixUnpackedUInt32($payload, 'time');
        $ret['time_remaining'] = IPConnection::fixUnpackedUInt32($payload, 'time_remaining');

        return $ret;
    }

    /**
     * Sets a group of Quad Relay Bricklets that should work together. You can
     * find Bricklets that can be grouped together with BrickletIndustrialQuadRelay::getAvailableForGroup().
     * 
     * The group consists of 4 elements. Element 1 in the group will get pins 0-3,
     * element 2 pins 4-7, element 3 pins 8-11 and element 4 pins 12-15.
     * 
     * Each element can either be one of the ports ('a' to 'd') or 'n' if it should
     * not be used.
     * 
     * For example: If you have two Quad Relay Bricklets connected to port A and
     * port B respectively, you could call with ``array('a', 'b', 'n', 'n')``.
     * 
     * Now the pins on the Quad Relay on port A are assigned to 0-3 and the
     * pins on the Quad Relay on port B are assigned to 4-7. It is now possible
     * to call BrickletIndustrialQuadRelay::setValue() and control two Bricklets at the same time.
     * 
     * @param string[] $group
     * 
     * @return void
     */
    public function setGroup($group)
    {
        $this->checkValidity();

        $payload = '';
        for ($i = 0; $i < count($group) && $i < 4; $i++) {
            $payload .= pack('c', ord($group[$i]));
        }
        for ($i = count($group); $i < 4; $i++) {
            $payload .= pack('c', 0);
        }

        $this->sendRequest(self::FUNCTION_SET_GROUP, $payload, 0);
    }

    /**
     * Returns the group as set by BrickletIndustrialQuadRelay::setGroup()
     * 
     * 
     * @return array
     */
    public function getGroup()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_GROUP, $payload, 12);

        $payload = unpack('c4group', $data);

        return IPConnection::collectUnpackedCharArray($payload, 'group', 4);
    }

    /**
     * Returns a bitmask of ports that are available for grouping. For example the
     * value 5 or 0b0101 means: Port A and port C are connected to Bricklets that
     * can be grouped together.
     * 
     * 
     * @return int
     */
    public function getAvailableForGroup()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_AVAILABLE_FOR_GROUP, $payload, 9);

        $payload = unpack('C1available', $data);

        return $payload['available'];
    }

    /**
     * Sets the output value with a bitmask, according to the selection mask.
     * The bitmask is 16 bit long, *true* refers to a closed relay and
     * *false* refers to an open relay.
     * 
     * For example: The values (3, 1) or (0b0011, 0b0001) will close the relay of
     * pin 0, open the relay of pin 1 and leave the others untouched.
     * 
     * If no groups are used (see BrickletIndustrialQuadRelay::setGroup()), the pins correspond to the
     * markings on the Industrial Quad Relay Bricklet.
     * 
     * If groups are used, the pins correspond to the element in the group.
     * Element 1 in the group will get pins 0-3, element 2 pins 4-7, element 3
     * pins 8-11 and element 4 pins 12-15.
     * 
     * Running monoflop timers for the selected relays will be aborted if this function
     * is called.
     * 
     * @param int $selection_mask
     * @param int $value_mask
     * 
     * @return void
     */
    public function setSelectedValues($selection_mask, $value_mask)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $selection_mask);
        $payload .= pack('v', $value_mask);

        $this->sendRequest(self::FUNCTION_SET_SELECTED_VALUES, $payload, 0);
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
        $payload = unpack('v1selection_mask/v1value_mask', $data);

        if (array_key_exists(self::CALLBACK_MONOFLOP_DONE, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_MONOFLOP_DONE];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_MONOFLOP_DONE];

            call_user_func($function, $payload['selection_mask'], $payload['value_mask'], $user_data);
        }
    }
}

?>
