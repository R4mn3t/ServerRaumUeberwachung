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
 * 4 galvanically isolated digital inputs
 */
class BrickletIndustrialDigitalIn4 extends Device
{

    /**
     * This callback is triggered whenever a change of the voltage level is detected
     * on pins where the interrupt was activated with BrickletIndustrialDigitalIn4::setInterrupt().
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
     * 
     * The interrupts use the grouping as set by BrickletIndustrialDigitalIn4::setGroup().
     */
    const CALLBACK_INTERRUPT = 9;


    /**
     * @internal
     */
    const FUNCTION_GET_VALUE = 1;

    /**
     * @internal
     */
    const FUNCTION_SET_GROUP = 2;

    /**
     * @internal
     */
    const FUNCTION_GET_GROUP = 3;

    /**
     * @internal
     */
    const FUNCTION_GET_AVAILABLE_FOR_GROUP = 4;

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
    const FUNCTION_GET_EDGE_COUNT = 10;

    /**
     * @internal
     */
    const FUNCTION_SET_EDGE_COUNT_CONFIG = 11;

    /**
     * @internal
     */
    const FUNCTION_GET_EDGE_COUNT_CONFIG = 12;

    /**
     * @internal
     */
    const FUNCTION_GET_IDENTITY = 255;

    const EDGE_TYPE_RISING = 0;
    const EDGE_TYPE_FALLING = 1;
    const EDGE_TYPE_BOTH = 2;

    const DEVICE_IDENTIFIER = 223;

    const DEVICE_DISPLAY_NAME = 'Industrial Digital In 4 Bricklet';

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

        $this->response_expected[self::FUNCTION_GET_VALUE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_GROUP] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_GROUP] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_AVAILABLE_FOR_GROUP] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_DEBOUNCE_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_DEBOUNCE_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_INTERRUPT] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_INTERRUPT] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_EDGE_COUNT] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_EDGE_COUNT_CONFIG] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_EDGE_COUNT_CONFIG] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_IDENTITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;

        $this->callback_wrappers[self::CALLBACK_INTERRUPT] = array(12, 'callbackWrapperInterrupt');

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
     * Returns the input value with a bitmask. The bitmask is 16bit long, *true*
     * refers to high and *false* refers to low.
     * 
     * For example: The value 3 or 0b0011 means that pins 0-1 are high and the other
     * pins are low.
     * 
     * If no groups are used (see BrickletIndustrialDigitalIn4::setGroup()), the pins correspond to the
     * markings on the IndustrialDigital In 4 Bricklet.
     * 
     * If groups are used, the pins correspond to the element in the group.
     * Element 1 in the group will get pins 0-3, element 2 pins 4-7, element 3
     * pins 8-11 and element 4 pins 12-15.
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
     * Sets a group of Digital In 4 Bricklets that should work together. You can
     * find Bricklets that can be grouped together with BrickletIndustrialDigitalIn4::getAvailableForGroup().
     * 
     * The group consists of 4 elements. Element 1 in the group will get pins 0-3,
     * element 2 pins 4-7, element 3 pins 8-11 and element 4 pins 12-15.
     * 
     * Each element can either be one of the ports ('a' to 'd') or 'n' if it should
     * not be used.
     * 
     * For example: If you have two Digital In 4 Bricklets connected to port A and
     * port B respectively, you could call with ``array('a', 'b', 'n', 'n')``.
     * 
     * Now the pins on the Digital In 4 on port A are assigned to 0-3 and the
     * pins on the Digital In 4 on port B are assigned to 4-7. It is now possible
     * to call BrickletIndustrialDigitalIn4::getValue() and read out two Bricklets at the same time.
     * 
     * Changing the group configuration resets all edge counter configurations
     * and values.
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
     * Returns the group as set by BrickletIndustrialDigitalIn4::setGroup()
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
     * Sets the debounce period of the BrickletIndustrialDigitalIn4::CALLBACK_INTERRUPT callback.
     * 
     * For example: If you set this value to 100, you will get the interrupt
     * maximal every 100ms. This is necessary if something that bounces is
     * connected to the Digital In 4 Bricklet, such as a button.
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
     * Returns the debounce period as set by BrickletIndustrialDigitalIn4::setDebouncePeriod().
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
     * For example: An interrupt bitmask of 9 or 0b1001 will enable the interrupt for
     * pins 0 and 3.
     * 
     * The interrupts use the grouping as set by BrickletIndustrialDigitalIn4::setGroup().
     * 
     * The interrupt is delivered with the BrickletIndustrialDigitalIn4::CALLBACK_INTERRUPT callback.
     * 
     * @param int $interrupt_mask
     * 
     * @return void
     */
    public function setInterrupt($interrupt_mask)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $interrupt_mask);

        $this->sendRequest(self::FUNCTION_SET_INTERRUPT, $payload, 0);
    }

    /**
     * Returns the interrupt bitmask as set by BrickletIndustrialDigitalIn4::setInterrupt().
     * 
     * 
     * @return int
     */
    public function getInterrupt()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_INTERRUPT, $payload, 10);

        $payload = unpack('v1interrupt_mask', $data);

        return $payload['interrupt_mask'];
    }

    /**
     * Returns the current value of the edge counter for the selected pin. You can
     * configure the edges that are counted with BrickletIndustrialDigitalIn4::setEdgeCountConfig().
     * 
     * If you set the reset counter to *true*, the count is set back to 0
     * directly after it is read.
     * 
     * The edge counters use the grouping as set by BrickletIndustrialDigitalIn4::setGroup().
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
     * Configures the edge counter for the selected pins. A bitmask of 9 or 0b1001 will
     * enable the edge counter for pins 0 and 3.
     * 
     * The edge type parameter configures if rising edges, falling edges or
     * both are counted if the pin is configured for input. Possible edge types are:
     * 
     * * 0 = rising
     * * 1 = falling
     * * 2 = both
     * 
     * Configuring an edge counter resets its value to 0.
     * 
     * If you don't know what any of this means, just leave it at default. The
     * default configuration is very likely OK for you.
     * 
     * The edge counters use the grouping as set by BrickletIndustrialDigitalIn4::setGroup().
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
        $payload .= pack('v', $selection_mask);
        $payload .= pack('C', $edge_type);
        $payload .= pack('C', $debounce);

        $this->sendRequest(self::FUNCTION_SET_EDGE_COUNT_CONFIG, $payload, 0);
    }

    /**
     * Returns the edge type and debounce time for the selected pin as set by
     * BrickletIndustrialDigitalIn4::setEdgeCountConfig().
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
        $payload = unpack('v1interrupt_mask/v1value_mask', $data);

        if (array_key_exists(self::CALLBACK_INTERRUPT, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_INTERRUPT];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_INTERRUPT];

            call_user_func($function, $payload['interrupt_mask'], $payload['value_mask'], $user_data);
        }
    }
}

?>
