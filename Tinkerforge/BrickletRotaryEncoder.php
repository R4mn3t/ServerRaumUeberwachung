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
 * 360° rotary encoder with push-button
 */
class BrickletRotaryEncoder extends Device
{

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletRotaryEncoder::setCountCallbackPeriod(). The parameter is the count of
     * the encoder.
     * 
     * The BrickletRotaryEncoder::CALLBACK_COUNT callback is only triggered if the count has changed since the
     * last triggering.
     */
    const CALLBACK_COUNT = 8;

    /**
     * This callback is triggered when the threshold as set by
     * BrickletRotaryEncoder::setCountCallbackThreshold() is reached.
     * The parameter is the count of the encoder.
     * 
     * If the threshold keeps being reached, the callback is triggered periodically
     * with the period as set by BrickletRotaryEncoder::setDebouncePeriod().
     */
    const CALLBACK_COUNT_REACHED = 9;

    /**
     * This callback is triggered when the button is pressed.
     */
    const CALLBACK_PRESSED = 11;

    /**
     * This callback is triggered when the button is released.
     */
    const CALLBACK_RELEASED = 12;


    /**
     * @internal
     */
    const FUNCTION_GET_COUNT = 1;

    /**
     * @internal
     */
    const FUNCTION_SET_COUNT_CALLBACK_PERIOD = 2;

    /**
     * @internal
     */
    const FUNCTION_GET_COUNT_CALLBACK_PERIOD = 3;

    /**
     * @internal
     */
    const FUNCTION_SET_COUNT_CALLBACK_THRESHOLD = 4;

    /**
     * @internal
     */
    const FUNCTION_GET_COUNT_CALLBACK_THRESHOLD = 5;

    /**
     * @internal
     */
    const FUNCTION_SET_DEBOUNCE_PERIOD = 6;

    /**
     * @internal
     */
    const FUNCTION_GET_DEBOUNCE_PERIOD = 7;

    /**
     * @internal
     */
    const FUNCTION_IS_PRESSED = 10;

    /**
     * @internal
     */
    const FUNCTION_GET_IDENTITY = 255;

    const THRESHOLD_OPTION_OFF = 'x';
    const THRESHOLD_OPTION_OUTSIDE = 'o';
    const THRESHOLD_OPTION_INSIDE = 'i';
    const THRESHOLD_OPTION_SMALLER = '<';
    const THRESHOLD_OPTION_GREATER = '>';

    const DEVICE_IDENTIFIER = 236;

    const DEVICE_DISPLAY_NAME = 'Rotary Encoder Bricklet';

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

        $this->response_expected[self::FUNCTION_GET_COUNT] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_COUNT_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_COUNT_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_COUNT_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_COUNT_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_DEBOUNCE_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_DEBOUNCE_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_IS_PRESSED] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_IDENTITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;

        $this->callback_wrappers[self::CALLBACK_COUNT] = array(12, 'callbackWrapperCount');
        $this->callback_wrappers[self::CALLBACK_COUNT_REACHED] = array(12, 'callbackWrapperCountReached');
        $this->callback_wrappers[self::CALLBACK_PRESSED] = array(8, 'callbackWrapperPressed');
        $this->callback_wrappers[self::CALLBACK_RELEASED] = array(8, 'callbackWrapperReleased');

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
     * Returns the current count of the encoder. If you set reset
     * to true, the count is set back to 0 directly after the
     * current count is read.
     * 
     * The encoder has 24 steps per rotation
     * 
     * Turning the encoder to the left decrements the counter,
     * so a negative count is possible.
     * 
     * @param bool $reset
     * 
     * @return int
     */
    public function getCount($reset)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', intval((bool)$reset));

        $data = $this->sendRequest(self::FUNCTION_GET_COUNT, $payload, 12);

        $payload = unpack('V1count', $data);

        return IPConnection::fixUnpackedInt32($payload, 'count');
    }

    /**
     * Sets the period with which the BrickletRotaryEncoder::CALLBACK_COUNT callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * The BrickletRotaryEncoder::CALLBACK_COUNT callback is only triggered if the count has changed since the
     * last triggering.
     * 
     * @param int $period
     * 
     * @return void
     */
    public function setCountCallbackPeriod($period)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);

        $this->sendRequest(self::FUNCTION_SET_COUNT_CALLBACK_PERIOD, $payload, 0);
    }

    /**
     * Returns the period as set by BrickletRotaryEncoder::setCountCallbackPeriod().
     * 
     * 
     * @return int
     */
    public function getCountCallbackPeriod()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_COUNT_CALLBACK_PERIOD, $payload, 12);

        $payload = unpack('V1period', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'period');
    }

    /**
     * Sets the thresholds for the BrickletRotaryEncoder::CALLBACK_COUNT_REACHED callback.
     * 
     * The following options are possible:
     * 
     * <code>
     *  "Option", "Description"
     * 
     *  "'x'",    "Callback is turned off"
     *  "'o'",    "Callback is triggered when the count is *outside* the min and max values"
     *  "'i'",    "Callback is triggered when the count is *inside* the min and max values"
     *  "'<'",    "Callback is triggered when the count is smaller than the min value (max is ignored)"
     *  "'>'",    "Callback is triggered when the count is greater than the min value (max is ignored)"
     * </code>
     * 
     * @param string $option
     * @param int $min
     * @param int $max
     * 
     * @return void
     */
    public function setCountCallbackThreshold($option, $min, $max)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('c', ord($option));
        $payload .= pack('V', $min);
        $payload .= pack('V', $max);

        $this->sendRequest(self::FUNCTION_SET_COUNT_CALLBACK_THRESHOLD, $payload, 0);
    }

    /**
     * Returns the threshold as set by BrickletRotaryEncoder::setCountCallbackThreshold().
     * 
     * 
     * @return array
     */
    public function getCountCallbackThreshold()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_COUNT_CALLBACK_THRESHOLD, $payload, 17);

        $payload = unpack('c1option/V1min/V1max', $data);

        $ret['option'] = chr($payload['option']);
        $ret['min'] = IPConnection::fixUnpackedInt32($payload, 'min');
        $ret['max'] = IPConnection::fixUnpackedInt32($payload, 'max');

        return $ret;
    }

    /**
     * Sets the period with which the threshold callback
     * 
     * * BrickletRotaryEncoder::CALLBACK_COUNT_REACHED
     * 
     * is triggered, if the thresholds
     * 
     * * BrickletRotaryEncoder::setCountCallbackThreshold()
     * 
     * keeps being reached.
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
     * Returns the debounce period as set by BrickletRotaryEncoder::setDebouncePeriod().
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
     * Returns *true* if the button is pressed and *false* otherwise.
     * 
     * It is recommended to use the BrickletRotaryEncoder::CALLBACK_PRESSED and BrickletRotaryEncoder::CALLBACK_RELEASED callbacks
     * to handle the button.
     * 
     * 
     * @return bool
     */
    public function isPressed()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_IS_PRESSED, $payload, 9);

        $payload = unpack('C1pressed', $data);

        return (bool)$payload['pressed'];
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
    public function callbackWrapperCount($data)
    {
        $payload = unpack('V1count', $data);
        $payload['count'] = IPConnection::fixUnpackedInt32($payload, 'count');

        if (array_key_exists(self::CALLBACK_COUNT, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_COUNT];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_COUNT];

            call_user_func($function, $payload['count'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperCountReached($data)
    {
        $payload = unpack('V1count', $data);
        $payload['count'] = IPConnection::fixUnpackedInt32($payload, 'count');

        if (array_key_exists(self::CALLBACK_COUNT_REACHED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_COUNT_REACHED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_COUNT_REACHED];

            call_user_func($function, $payload['count'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperPressed($data)
    {

        if (array_key_exists(self::CALLBACK_PRESSED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_PRESSED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_PRESSED];

            call_user_func($function, $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperReleased($data)
    {

        if (array_key_exists(self::CALLBACK_RELEASED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_RELEASED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_RELEASED];

            call_user_func($function, $user_data);
        }
    }
}

?>
