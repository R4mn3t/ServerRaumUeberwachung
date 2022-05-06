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
 * 4-channel digital input/output
 */
class BrickletIO4 extends Device
{

    /**
     * This callback is triggered whenever a change of the voltage level is detected
     * on pins where the interrupt was activated with BrickletIO4::setInterrupt().
     * 
     * The values are a bitmask that specifies which interrupts occurred
     * and the current value bitmask.
     * 
     * For example:
     * 
     * * (1, 1) or (0b0001, 0b0001) means that an interrupt on pin 0 occurred and
     *   currently pin 0 is high and pins 1-3 are low.
     * * (9, 14) or (0b1001, 0b1110) means that interrupts on pins 0 and 3
     *   occurred and currently pin 0 is low and pins 1-3 are high.
     */
    const CALLBACK_INTERRUPT = 9;

    /**
     * This callback is triggered whenever a monoflop timer reaches 0. The
     * parameters contain the involved pins and the current value of the pins
     * (the value after the monoflop).
     */
    const CALLBACK_MONOFLOP_DONE = 12;


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
    const FUNCTION_SET_CONFIGURATION = 3;

    /**
     * @internal
     */
    const FUNCTION_GET_CONFIGURATION = 4;

    /**
     * @internal
     */
    const FUNCTION_SET_DEBOUNCE_PERIOD = 5;

    /**
     * @internal
     */
    const FUNCTION_GET_DEBOUNCE_PERIOD = 6;

    /**
     * @internal
     */
    const FUNCTION_SET_INTERRUPT = 7;

    /**
     * @internal
     */
    const FUNCTION_GET_INTERRUPT = 8;

    /**
     * @internal
     */
    const FUNCTION_SET_MONOFLOP = 10;

    /**
     * @internal
     */
    const FUNCTION_GET_MONOFLOP = 11;

    /**
     * @internal
     */
    const FUNCTION_SET_SELECTED_VALUES = 13;

    /**
     * @internal
     */
    const FUNCTION_GET_EDGE_COUNT = 14;

    /**
     * @internal
     */
    const FUNCTION_SET_EDGE_COUNT_CONFIG = 15;

    /**
     * @internal
     */
    const FUNCTION_GET_EDGE_COUNT_CONFIG = 16;

    /**
     * @internal
     */
    const FUNCTION_GET_IDENTITY = 255;

    const DIRECTION_IN = 'i';
    const DIRECTION_OUT = 'o';
    const EDGE_TYPE_RISING = 0;
    const EDGE_TYPE_FALLING = 1;
    const EDGE_TYPE_BOTH = 2;

    const DEVICE_IDENTIFIER = 29;

    const DEVICE_DISPLAY_NAME = 'IO-4 Bricklet';

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

        $this->response_expected[self::FUNCTION_SET_VALUE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_VALUE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_CONFIGURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_DEBOUNCE_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_DEBOUNCE_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_INTERRUPT] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_INTERRUPT] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_MONOFLOP] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_MONOFLOP] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_SELECTED_VALUES] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_EDGE_COUNT] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_EDGE_COUNT_CONFIG] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_EDGE_COUNT_CONFIG] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_IDENTITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;

        $this->callback_wrappers[self::CALLBACK_INTERRUPT] = array(10, 'callbackWrapperInterrupt');
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
     * Sets the output value (high or low) with a bitmask (4bit). A 1 in the bitmask
     * means high and a 0 in the bitmask means low.
     * 
     * For example: The value 3 or 0b0011 will turn the pins 0-1 high and the
     * pins 2-3 low.
     * 
     * All running monoflop timers will be aborted if this function is called.
     * 
     * <note>
     *  This function does nothing for pins that are configured as input.
     *  Pull-up resistors can be switched on with BrickletIO4::setConfiguration().
     * </note>
     * 
     * @param int $value_mask
     * 
     * @return void
     */
    public function setValue($value_mask)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $value_mask);

        $this->sendRequest(self::FUNCTION_SET_VALUE, $payload, 0);
    }

    /**
     * Returns a bitmask of the values that are currently measured.
     * This function works if the pin is configured to input
     * as well as if it is configured to output.
     * 
     * 
     * @return int
     */
    public function getValue()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_VALUE, $payload, 9);

        $payload = unpack('C1value_mask', $data);

        return $payload['value_mask'];
    }

    /**
     * Configures the value and direction of the specified pins. Possible directions
     * are 'i' and 'o' for input and output.
     * 
     * If the direction is configured as output, the value is either high or low
     * (set as *true* or *false*).
     * 
     * If the direction is configured as input, the value is either pull-up or
     * default (set as *true* or *false*).
     * 
     * For example:
     * 
     * * (15, 'i', true) or (0b1111, 'i', true) will set all pins of as input pull-up.
     * * (8, 'i', false) or (0b1000, 'i', false) will set pin 3 of as input default (floating if nothing is connected).
     * * (3, 'o', false) or (0b0011, 'o', false) will set pins 0 and 1 as output low.
     * * (4, 'o', true) or (0b0100, 'o', true) will set pin 2 of as output high.
     * 
     * Running monoflop timers for the specified pins will be aborted if this
     * function is called.
     * 
     * @param int $selection_mask
     * @param string $direction
     * @param bool $value
     * 
     * @return void
     */
    public function setConfiguration($selection_mask, $direction, $value)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $selection_mask);
        $payload .= pack('c', ord($direction));
        $payload .= pack('C', intval((bool)$value));

        $this->sendRequest(self::FUNCTION_SET_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns a value bitmask and a direction bitmask. A 1 in the direction bitmask
     * means input and a 0 in the bitmask means output.
     * 
     * For example: A return value of (3, 5) or (0b0011, 0b0101) for direction and
     * value means that:
     * 
     * * pin 0 is configured as input pull-up,
     * * pin 1 is configured as input default,
     * * pin 2 is configured as output high and
     * * pin 3 is are configured as output low.
     * 
     * 
     * @return array
     */
    public function getConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_CONFIGURATION, $payload, 10);

        $payload = unpack('C1direction_mask/C1value_mask', $data);

        $ret['direction_mask'] = $payload['direction_mask'];
        $ret['value_mask'] = $payload['value_mask'];

        return $ret;
    }

    /**
     * Sets the debounce period of the BrickletIO4::CALLBACK_INTERRUPT callback.
     * 
     * For example: If you set this value to 100, you will get the interrupt
     * maximal every 100ms. This is necessary if something that bounces is
     * connected to the IO-4 Bricklet, such as a button.
     * 
     * @param int $debounce
     * 
     * @return void
     */
    public function setDebouncePeriod($debounce)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $debounce);

        $this->sendRequest(self::FUNCTION_SET_DEBOUNCE_PERIOD, $payload, 0);
    }

    /**
     * Returns the debounce period as set by BrickletIO4::setDebouncePeriod().
     * 
     * 
     * @return int
     */
    public function getDebouncePeriod()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_DEBOUNCE_PERIOD, $payload, 12);

        $payload = unpack('V1debounce', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'debounce');
    }

    /**
     * Sets the pins on which an interrupt is activated with a bitmask.
     * Interrupts are triggered on changes of the voltage level of the pin,
     * i.e. changes from high to low and low to high.
     * 
     * For example: An interrupt bitmask of 10 or 0b1010 will enable the interrupt for
     * pins 1 and 3.
     * 
     * The interrupt is delivered with the BrickletIO4::CALLBACK_INTERRUPT callback.
     * 
     * @param int $interrupt_mask
     * 
     * @return void
     */
    public function setInterrupt($interrupt_mask)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $interrupt_mask);

        $this->sendRequest(self::FUNCTION_SET_INTERRUPT, $payload, 0);
    }

    /**
     * Returns the interrupt bitmask as set by BrickletIO4::setInterrupt().
     * 
     * 
     * @return int
     */
    public function getInterrupt()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_INTERRUPT, $payload, 9);

        $payload = unpack('C1interrupt_mask', $data);

        return $payload['interrupt_mask'];
    }

    /**
     * Configures a monoflop of the pins specified by the first parameter as 4 bit
     * long bitmask. The specified pins must be configured for output. Non-output
     * pins will be ignored.
     * 
     * The second parameter is a bitmask with the desired value of the specified
     * output pins. A 1 in the bitmask means high and a 0 in the bitmask means low.
     * 
     * The third parameter indicates the time that the pins should hold
     * the value.
     * 
     * If this function is called with the parameters (9, 1, 1500) or
     * (0b1001, 0b0001, 1500): Pin 0 will get high and pin 3 will get low. In 1.5s pin
     * 0 will get low and pin 3 will get high again.
     * 
     * A monoflop can be used as a fail-safe mechanism. For example: Lets assume you
     * have a RS485 bus and an IO-4 Bricklet connected to one of the slave
     * stacks. You can now call this function every second, with a time parameter
     * of two seconds and pin 0 set to high. Pin 0 will be high all the time. If now
     * the RS485 connection is lost, then pin 0 will get low in at most two seconds.
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
        $payload .= pack('C', $selection_mask);
        $payload .= pack('C', $value_mask);
        $payload .= pack('V', $time);

        $this->sendRequest(self::FUNCTION_SET_MONOFLOP, $payload, 0);
    }

    /**
     * Returns (for the given pin) the current value and the time as set by
     * BrickletIO4::setMonoflop() as well as the remaining time until the value flips.
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

        $data = $this->sendRequest(self::FUNCTION_GET_MONOFLOP, $payload, 17);

        $payload = unpack('C1value/V1time/V1time_remaining', $data);

        $ret['value'] = $payload['value'];
        $ret['time'] = IPConnection::fixUnpackedUInt32($payload, 'time');
        $ret['time_remaining'] = IPConnection::fixUnpackedUInt32($payload, 'time_remaining');

        return $ret;
    }

    /**
     * Sets the output value (high or low) with a bitmask, according to
     * the selection mask. The bitmask is 4 bit long, *true* refers to high
     * and *false* refers to low.
     * 
     * For example: The parameters (9, 4) or (0b0110, 0b0100) will turn
     * pin 1 low and pin 2 high, pin 0 and 3 will remain untouched.
     * 
     * Running monoflop timers for the selected pins will be aborted if this
     * function is called.
     * 
     * <note>
     *  This function does nothing for pins that are configured as input.
     *  Pull-up resistors can be switched on with BrickletIO4::setConfiguration().
     * </note>
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
        $payload .= pack('C', $selection_mask);
        $payload .= pack('C', $value_mask);

        $this->sendRequest(self::FUNCTION_SET_SELECTED_VALUES, $payload, 0);
    }

    /**
     * Returns the current value of the edge counter for the selected pin. You can
     * configure the edges that are counted with BrickletIO4::setEdgeCountConfig().
     * 
     * If you set the reset counter to *true*, the count is set back to 0
     * directly after it is read.
     * 
     * .. versionadded:: 2.0.1$nbsp;(Plugin)
     * 
     * @param int $pin
     * @param bool $reset_counter
     * 
     * @return int
     */
    public function getEdgeCount($pin, $reset_counter)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $pin);
        $payload .= pack('C', intval((bool)$reset_counter));

        $data = $this->sendRequest(self::FUNCTION_GET_EDGE_COUNT, $payload, 12);

        $payload = unpack('V1count', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'count');
    }

    /**
     * Configures the edge counter for the selected pins.
     * 
     * The edge type parameter configures if rising edges, falling edges or
     * both are counted if the pin is configured for input. Possible edge types are:
     * 
     * * 0 = rising (default)
     * * 1 = falling
     * * 2 = both
     * 
     * Configuring an edge counter resets its value to 0.
     * 
     * If you don't know what any of this means, just leave it at default. The
     * default configuration is very likely OK for you.
     * 
     * .. versionadded:: 2.0.1$nbsp;(Plugin)
     * 
     * @param int $selection_mask
     * @param int $edge_type
     * @param int $debounce
     * 
     * @return void
     */
    public function setEdgeCountConfig($selection_mask, $edge_type, $debounce)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $selection_mask);
        $payload .= pack('C', $edge_type);
        $payload .= pack('C', $debounce);

        $this->sendRequest(self::FUNCTION_SET_EDGE_COUNT_CONFIG, $payload, 0);
    }

    /**
     * Returns the edge type and debounce time for the selected pin as set by
     * BrickletIO4::setEdgeCountConfig().
     * 
     * .. versionadded:: 2.0.1$nbsp;(Plugin)
     * 
     * @param int $pin
     * 
     * @return array
     */
    public function getEdgeCountConfig($pin)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('C', $pin);

        $data = $this->sendRequest(self::FUNCTION_GET_EDGE_COUNT_CONFIG, $payload, 10);

        $payload = unpack('C1edge_type/C1debounce', $data);

        $ret['edge_type'] = $payload['edge_type'];
        $ret['debounce'] = $payload['debounce'];

        return $ret;
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
    public function callbackWrapperInterrupt($data)
    {
        $payload = unpack('C1interrupt_mask/C1value_mask', $data);

        if (array_key_exists(self::CALLBACK_INTERRUPT, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_INTERRUPT];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_INTERRUPT];

            call_user_func($function, $payload['interrupt_mask'], $payload['value_mask'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperMonoflopDone($data)
    {
        $payload = unpack('C1selection_mask/C1value_mask', $data);

        if (array_key_exists(self::CALLBACK_MONOFLOP_DONE, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_MONOFLOP_DONE];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_MONOFLOP_DONE];

            call_user_func($function, $payload['selection_mask'], $payload['value_mask'], $user_data);
        }
    }
}

?>
