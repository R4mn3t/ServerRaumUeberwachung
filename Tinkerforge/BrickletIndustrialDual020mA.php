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
 * Measures two DC currents between 0mA and 20mA (IEC 60381-1)
 */
class BrickletIndustrialDual020mA extends Device
{

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletIndustrialDual020mA::setCurrentCallbackPeriod(). The parameter is the current of the
     * sensor.
     * 
     * The BrickletIndustrialDual020mA::CALLBACK_CURRENT callback is only triggered if the current has changed since the
     * last triggering.
     */
    const CALLBACK_CURRENT = 10;

    /**
     * This callback is triggered when the threshold as set by
     * BrickletIndustrialDual020mA::setCurrentCallbackThreshold() is reached.
     * The parameter is the current of the sensor.
     * 
     * If the threshold keeps being reached, the callback is triggered periodically
     * with the period as set by BrickletIndustrialDual020mA::setDebouncePeriod().
     */
    const CALLBACK_CURRENT_REACHED = 11;


    /**
     * @internal
     */
    const FUNCTION_GET_CURRENT = 1;

    /**
     * @internal
     */
    const FUNCTION_SET_CURRENT_CALLBACK_PERIOD = 2;

    /**
     * @internal
     */
    const FUNCTION_GET_CURRENT_CALLBACK_PERIOD = 3;

    /**
     * @internal
     */
    const FUNCTION_SET_CURRENT_CALLBACK_THRESHOLD = 4;

    /**
     * @internal
     */
    const FUNCTION_GET_CURRENT_CALLBACK_THRESHOLD = 5;

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
    const FUNCTION_SET_SAMPLE_RATE = 8;

    /**
     * @internal
     */
    const FUNCTION_GET_SAMPLE_RATE = 9;

    /**
     * @internal
     */
    const FUNCTION_GET_IDENTITY = 255;

    const THRESHOLD_OPTION_OFF = 'x';
    const THRESHOLD_OPTION_OUTSIDE = 'o';
    const THRESHOLD_OPTION_INSIDE = 'i';
    const THRESHOLD_OPTION_SMALLER = '<';
    const THRESHOLD_OPTION_GREATER = '>';
    const SAMPLE_RATE_240_SPS = 0;
    const SAMPLE_RATE_60_SPS = 1;
    const SAMPLE_RATE_15_SPS = 2;
    const SAMPLE_RATE_4_SPS = 3;

    const DEVICE_IDENTIFIER = 228;

    const DEVICE_DISPLAY_NAME = 'Industrial Dual 0-20mA Bricklet';

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

        $this->response_expected[self::FUNCTION_GET_CURRENT] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_CURRENT_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_CURRENT_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_CURRENT_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_CURRENT_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_DEBOUNCE_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_DEBOUNCE_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_SAMPLE_RATE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_SAMPLE_RATE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_IDENTITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;

        $this->callback_wrappers[self::CALLBACK_CURRENT] = array(13, 'callbackWrapperCurrent');
        $this->callback_wrappers[self::CALLBACK_CURRENT_REACHED] = array(13, 'callbackWrapperCurrentReached');

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
     * Returns the current of the specified sensor.
     * 
     * It is possible to detect if an IEC 60381-1 compatible sensor is connected
     * and if it works properly.
     * 
     * If the returned current is below 4mA, there is likely no sensor connected
     * or the sensor may be defect. If the returned current is over 20mA, there might
     * be a short circuit or the sensor may be defect.
     * 
     * If you want to get the current periodically, it is recommended to use the
     * BrickletIndustrialDual020mA::CALLBACK_CURRENT callback and set the period with
     * BrickletIndustrialDual020mA::setCurrentCallbackPeriod().
     * 
     * @param int $sensor
     * 
     * @return int
     */
    public function getCurrent($sensor)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $sensor);

        $data = $this->sendRequest(self::FUNCTION_GET_CURRENT, $payload, 12);

        $payload = unpack('V1current', $data);

        return IPConnection::fixUnpackedInt32($payload, 'current');
    }

    /**
     * Sets the period with which the BrickletIndustrialDual020mA::CALLBACK_CURRENT callback is triggered
     * periodically for the given sensor. A value of 0 turns the callback off.
     * 
     * The BrickletIndustrialDual020mA::CALLBACK_CURRENT callback is only triggered if the current has changed since the
     * last triggering.
     * 
     * @param int $sensor
     * @param int $period
     * 
     * @return void
     */
    public function setCurrentCallbackPeriod($sensor, $period)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $sensor);
        $payload .= pack('V', $period);

        $this->sendRequest(self::FUNCTION_SET_CURRENT_CALLBACK_PERIOD, $payload, 0);
    }

    /**
     * Returns the period as set by BrickletIndustrialDual020mA::setCurrentCallbackPeriod().
     * 
     * @param int $sensor
     * 
     * @return int
     */
    public function getCurrentCallbackPeriod($sensor)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $sensor);

        $data = $this->sendRequest(self::FUNCTION_GET_CURRENT_CALLBACK_PERIOD, $payload, 12);

        $payload = unpack('V1period', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'period');
    }

    /**
     * Sets the thresholds for the BrickletIndustrialDual020mA::CALLBACK_CURRENT_REACHED callback for the given
     * sensor.
     * 
     * The following options are possible:
     * 
     * <code>
     *  "Option", "Description"
     * 
     *  "'x'",    "Callback is turned off"
     *  "'o'",    "Callback is triggered when the current is *outside* the min and max values"
     *  "'i'",    "Callback is triggered when the current is *inside* the min and max values"
     *  "'<'",    "Callback is triggered when the current is smaller than the min value (max is ignored)"
     *  "'>'",    "Callback is triggered when the current is greater than the min value (max is ignored)"
     * </code>
     * 
     * @param int $sensor
     * @param string $option
     * @param int $min
     * @param int $max
     * 
     * @return void
     */
    public function setCurrentCallbackThreshold($sensor, $option, $min, $max)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $sensor);
        $payload .= pack('c', ord($option));
        $payload .= pack('V', $min);
        $payload .= pack('V', $max);

        $this->sendRequest(self::FUNCTION_SET_CURRENT_CALLBACK_THRESHOLD, $payload, 0);
    }

    /**
     * Returns the threshold as set by BrickletIndustrialDual020mA::setCurrentCallbackThreshold().
     * 
     * @param int $sensor
     * 
     * @return array
     */
    public function getCurrentCallbackThreshold($sensor)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('C', $sensor);

        $data = $this->sendRequest(self::FUNCTION_GET_CURRENT_CALLBACK_THRESHOLD, $payload, 17);

        $payload = unpack('c1option/V1min/V1max', $data);

        $ret['option'] = chr($payload['option']);
        $ret['min'] = IPConnection::fixUnpackedInt32($payload, 'min');
        $ret['max'] = IPConnection::fixUnpackedInt32($payload, 'max');

        return $ret;
    }

    /**
     * Sets the period with which the threshold callback
     * 
     * * BrickletIndustrialDual020mA::CALLBACK_CURRENT_REACHED
     * 
     * is triggered, if the threshold
     * 
     * * BrickletIndustrialDual020mA::setCurrentCallbackThreshold()
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
     * Returns the debounce period as set by BrickletIndustrialDual020mA::setDebouncePeriod().
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
     * Sets the sample rate to either 240, 60, 15 or 4 samples per second.
     * The resolution for the rates is 12, 14, 16 and 18 bit respectively.
     * 
     * <code>
     *  "Value", "Description"
     * 
     *  "0",    "240 samples per second, 12 bit resolution"
     *  "1",    "60 samples per second, 14 bit resolution"
     *  "2",    "15 samples per second, 16 bit resolution"
     *  "3",    "4 samples per second, 18 bit resolution"
     * </code>
     * 
     * @param int $rate
     * 
     * @return void
     */
    public function setSampleRate($rate)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $rate);

        $this->sendRequest(self::FUNCTION_SET_SAMPLE_RATE, $payload, 0);
    }

    /**
     * Returns the sample rate as set by BrickletIndustrialDual020mA::setSampleRate().
     * 
     * 
     * @return int
     */
    public function getSampleRate()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_SAMPLE_RATE, $payload, 9);

        $payload = unpack('C1rate', $data);

        return $payload['rate'];
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
    public function callbackWrapperCurrent($data)
    {
        $payload = unpack('C1sensor/V1current', $data);
        $payload['current'] = IPConnection::fixUnpackedInt32($payload, 'current');

        if (array_key_exists(self::CALLBACK_CURRENT, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_CURRENT];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_CURRENT];

            call_user_func($function, $payload['sensor'], $payload['current'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperCurrentReached($data)
    {
        $payload = unpack('C1sensor/V1current', $data);
        $payload['current'] = IPConnection::fixUnpackedInt32($payload, 'current');

        if (array_key_exists(self::CALLBACK_CURRENT_REACHED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_CURRENT_REACHED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_CURRENT_REACHED];

            call_user_func($function, $payload['sensor'], $payload['current'], $user_data);
        }
    }
}

?>
