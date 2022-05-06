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
 * Four 7-segment displays with switchable colon
 */
class BrickletSegmentDisplay4x7 extends Device
{

    /**
     * This callback is triggered when the counter (see BrickletSegmentDisplay4x7::startCounter()) is
     * finished.
     */
    const CALLBACK_COUNTER_FINISHED = 5;


    /**
     * @internal
     */
    const FUNCTION_SET_SEGMENTS = 1;

    /**
     * @internal
     */
    const FUNCTION_GET_SEGMENTS = 2;

    /**
     * @internal
     */
    const FUNCTION_START_COUNTER = 3;

    /**
     * @internal
     */
    const FUNCTION_GET_COUNTER_VALUE = 4;

    /**
     * @internal
     */
    const FUNCTION_GET_IDENTITY = 255;


    const DEVICE_IDENTIFIER = 237;

    const DEVICE_DISPLAY_NAME = 'Segment Display 4x7 Bricklet';

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

        $this->response_expected[self::FUNCTION_SET_SEGMENTS] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_SEGMENTS] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_START_COUNTER] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_COUNTER_VALUE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_IDENTITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;

        $this->callback_wrappers[self::CALLBACK_COUNTER_FINISHED] = array(8, 'callbackWrapperCounterFinished');

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
     * The 7-segment display can be set with bitmaps. Every bit controls one
     * segment:
     * 
     * .. image:: /Images/Bricklets/bricklet_segment_display_4x7_bit_order.png
     *    :scale: 100 %
     *    :alt: Bit order of one segment
     *    :align: center
     * 
     * For example to set a "5" you would want to activate segments 0, 2, 3, 5 and 6.
     * This is represented by the number 0b01101101 = 0x6d = 109.
     * 
     * The brightness can be set between 0 (dark) and 7 (bright). The colon
     * parameter turns the colon of the display on or off.
     * 
     * @param int[] $segments
     * @param int $brightness
     * @param bool $colon
     * 
     * @return void
     */
    public function setSegments($segments, $brightness, $colon)
    {
        $this->checkValidity();

        $payload = '';
        for ($i = 0; $i < 4; $i++) {
            $payload .= pack('C', $segments[$i]);
        }
        $payload .= pack('C', $brightness);
        $payload .= pack('C', intval((bool)$colon));

        $this->sendRequest(self::FUNCTION_SET_SEGMENTS, $payload, 0);
    }

    /**
     * Returns the segment, brightness and color data as set by
     * BrickletSegmentDisplay4x7::setSegments().
     * 
     * 
     * @return array
     */
    public function getSegments()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_SEGMENTS, $payload, 14);

        $payload = unpack('C4segments/C1brightness/C1colon', $data);

        $ret['segments'] = IPConnection::collectUnpackedArray($payload, 'segments', 4);
        $ret['brightness'] = $payload['brightness'];
        $ret['colon'] = (bool)$payload['colon'];

        return $ret;
    }

    /**
     * Starts a counter with the *from* value that counts to the *to*
     * value with the each step incremented by *increment*.
     * *length* is the pause between each increment.
     * 
     * Example: If you set *from* to 0, *to* to 100, *increment* to 1 and
     * *length* to 1000, a counter that goes from 0 to 100 with one second
     * pause between each increment will be started.
     * 
     * Using a negative increment allows to count backwards.
     * 
     * You can stop the counter at every time by calling BrickletSegmentDisplay4x7::setSegments().
     * 
     * @param int $value_from
     * @param int $value_to
     * @param int $increment
     * @param int $length
     * 
     * @return void
     */
    public function startCounter($value_from, $value_to, $increment, $length)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $value_from);
        $payload .= pack('v', $value_to);
        $payload .= pack('v', $increment);
        $payload .= pack('V', $length);

        $this->sendRequest(self::FUNCTION_START_COUNTER, $payload, 0);
    }

    /**
     * Returns the counter value that is currently shown on the display.
     * 
     * If there is no counter running a 0 will be returned.
     * 
     * 
     * @return int
     */
    public function getCounterValue()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_COUNTER_VALUE, $payload, 10);

        $payload = unpack('v1value', $data);

        return $payload['value'];
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
    public function callbackWrapperCounterFinished($data)
    {

        if (array_key_exists(self::CALLBACK_COUNTER_FINISHED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_COUNTER_FINISHED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_COUNTER_FINISHED];

            call_user_func($function, $user_data);
        }
    }
}

?>
