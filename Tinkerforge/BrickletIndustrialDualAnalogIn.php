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
 * Measures two DC voltages between -35V and +35V with 24bit resolution each
 */
class BrickletIndustrialDualAnalogIn extends Device
{

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletIndustrialDualAnalogIn::setVoltageCallbackPeriod(). The parameter is the voltage of the
     * channel.
     * 
     * The BrickletIndustrialDualAnalogIn::CALLBACK_VOLTAGE callback is only triggered if the voltage has changed since the
     * last triggering.
     */
    const CALLBACK_VOLTAGE = 13;

    /**
     * This callback is triggered when the threshold as set by
     * BrickletIndustrialDualAnalogIn::setVoltageCallbackThreshold() is reached.
     * The parameter is the voltage of the channel.
     * 
     * If the threshold keeps being reached, the callback is triggered periodically
     * with the period as set by BrickletIndustrialDualAnalogIn::setDebouncePeriod().
     */
    const CALLBACK_VOLTAGE_REACHED = 14;


    /**
     * @internal
     */
    const FUNCTION_GET_VOLTAGE = 1;

    /**
     * @internal
     */
    const FUNCTION_SET_VOLTAGE_CALLBACK_PERIOD = 2;

    /**
     * @internal
     */
    const FUNCTION_GET_VOLTAGE_CALLBACK_PERIOD = 3;

    /**
     * @internal
     */
    const FUNCTION_SET_VOLTAGE_CALLBACK_THRESHOLD = 4;

    /**
     * @internal
     */
    const FUNCTION_GET_VOLTAGE_CALLBACK_THRESHOLD = 5;

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
    const FUNCTION_SET_CALIBRATION = 10;

    /**
     * @internal
     */
    const FUNCTION_GET_CALIBRATION = 11;

    /**
     * @internal
     */
    const FUNCTION_GET_ADC_VALUES = 12;

    /**
     * @internal
     */
    const FUNCTION_GET_IDENTITY = 255;

    const THRESHOLD_OPTION_OFF = 'x';
    const THRESHOLD_OPTION_OUTSIDE = 'o';
    const THRESHOLD_OPTION_INSIDE = 'i';
    const THRESHOLD_OPTION_SMALLER = '<';
    const THRESHOLD_OPTION_GREATER = '>';
    const SAMPLE_RATE_976_SPS = 0;
    const SAMPLE_RATE_488_SPS = 1;
    const SAMPLE_RATE_244_SPS = 2;
    const SAMPLE_RATE_122_SPS = 3;
    const SAMPLE_RATE_61_SPS = 4;
    const SAMPLE_RATE_4_SPS = 5;
    const SAMPLE_RATE_2_SPS = 6;
    const SAMPLE_RATE_1_SPS = 7;

    const DEVICE_IDENTIFIER = 249;

    const DEVICE_DISPLAY_NAME = 'Industrial Dual Analog In Bricklet';

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

        $this->response_expected[self::FUNCTION_GET_VOLTAGE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_VOLTAGE_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_VOLTAGE_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_VOLTAGE_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_VOLTAGE_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_DEBOUNCE_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_DEBOUNCE_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_SAMPLE_RATE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_SAMPLE_RATE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_CALIBRATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_CALIBRATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_ADC_VALUES] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_IDENTITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;

        $this->callback_wrappers[self::CALLBACK_VOLTAGE] = array(13, 'callbackWrapperVoltage');
        $this->callback_wrappers[self::CALLBACK_VOLTAGE_REACHED] = array(13, 'callbackWrapperVoltageReached');

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
     * Returns the voltage for the given channel.
     * 
     * If you want to get the voltage periodically, it is recommended to use the
     * BrickletIndustrialDualAnalogIn::CALLBACK_VOLTAGE callback and set the period with
     * BrickletIndustrialDualAnalogIn::setVoltageCallbackPeriod().
     * 
     * @param int $channel
     * 
     * @return int
     */
    public function getVoltage($channel)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $channel);

        $data = $this->sendRequest(self::FUNCTION_GET_VOLTAGE, $payload, 12);

        $payload = unpack('V1voltage', $data);

        return IPConnection::fixUnpackedInt32($payload, 'voltage');
    }

    /**
     * Sets the period with which the BrickletIndustrialDualAnalogIn::CALLBACK_VOLTAGE callback is triggered
     * periodically for the given channel. A value of 0 turns the callback off.
     * 
     * The BrickletIndustrialDualAnalogIn::CALLBACK_VOLTAGE callback is only triggered if the voltage has changed since the
     * last triggering.
     * 
     * @param int $channel
     * @param int $period
     * 
     * @return void
     */
    public function setVoltageCallbackPeriod($channel, $period)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $channel);
        $payload .= pack('V', $period);

        $this->sendRequest(self::FUNCTION_SET_VOLTAGE_CALLBACK_PERIOD, $payload, 0);
    }

    /**
     * Returns the period as set by BrickletIndustrialDualAnalogIn::setVoltageCallbackPeriod().
     * 
     * @param int $channel
     * 
     * @return int
     */
    public function getVoltageCallbackPeriod($channel)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $channel);

        $data = $this->sendRequest(self::FUNCTION_GET_VOLTAGE_CALLBACK_PERIOD, $payload, 12);

        $payload = unpack('V1period', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'period');
    }

    /**
     * Sets the thresholds for the BrickletIndustrialDualAnalogIn::CALLBACK_VOLTAGE_REACHED callback for the given
     * channel.
     * 
     * The following options are possible:
     * 
     * <code>
     *  "Option", "Description"
     * 
     *  "'x'",    "Callback is turned off"
     *  "'o'",    "Callback is triggered when the voltage is *outside* the min and max values"
     *  "'i'",    "Callback is triggered when the voltage is *inside* the min and max values"
     *  "'<'",    "Callback is triggered when the voltage is smaller than the min value (max is ignored)"
     *  "'>'",    "Callback is triggered when the voltage is greater than the min value (max is ignored)"
     * </code>
     * 
     * @param int $channel
     * @param string $option
     * @param int $min
     * @param int $max
     * 
     * @return void
     */
    public function setVoltageCallbackThreshold($channel, $option, $min, $max)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $channel);
        $payload .= pack('c', ord($option));
        $payload .= pack('V', $min);
        $payload .= pack('V', $max);

        $this->sendRequest(self::FUNCTION_SET_VOLTAGE_CALLBACK_THRESHOLD, $payload, 0);
    }

    /**
     * Returns the threshold as set by BrickletIndustrialDualAnalogIn::setVoltageCallbackThreshold().
     * 
     * @param int $channel
     * 
     * @return array
     */
    public function getVoltageCallbackThreshold($channel)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('C', $channel);

        $data = $this->sendRequest(self::FUNCTION_GET_VOLTAGE_CALLBACK_THRESHOLD, $payload, 17);

        $payload = unpack('c1option/V1min/V1max', $data);

        $ret['option'] = chr($payload['option']);
        $ret['min'] = IPConnection::fixUnpackedInt32($payload, 'min');
        $ret['max'] = IPConnection::fixUnpackedInt32($payload, 'max');

        return $ret;
    }

    /**
     * Sets the period with which the threshold callback
     * 
     * * BrickletIndustrialDualAnalogIn::CALLBACK_VOLTAGE_REACHED
     * 
     * is triggered, if the threshold
     * 
     * * BrickletIndustrialDualAnalogIn::setVoltageCallbackThreshold()
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
     * Returns the debounce period as set by BrickletIndustrialDualAnalogIn::setDebouncePeriod().
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
     * Sets the sample rate. The sample rate can be between 1 sample per second
     * and 976 samples per second. Decreasing the sample rate will also decrease the
     * noise on the data.
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
     * Returns the sample rate as set by BrickletIndustrialDualAnalogIn::setSampleRate().
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
     * Sets offset and gain of MCP3911 internal calibration registers.
     * 
     * See MCP3911 datasheet 7.7 and 7.8. The Industrial Dual Analog In Bricklet
     * is already factory calibrated by Tinkerforge. It should not be necessary
     * for you to use this function
     * 
     * @param int[] $offset
     * @param int[] $gain
     * 
     * @return void
     */
    public function setCalibration($offset, $gain)
    {
        $this->checkValidity();

        $payload = '';
        for ($i = 0; $i < 2; $i++) {
            $payload .= pack('V', $offset[$i]);
        }
        for ($i = 0; $i < 2; $i++) {
            $payload .= pack('V', $gain[$i]);
        }

        $this->sendRequest(self::FUNCTION_SET_CALIBRATION, $payload, 0);
    }

    /**
     * Returns the calibration as set by BrickletIndustrialDualAnalogIn::setCalibration().
     * 
     * 
     * @return array
     */
    public function getCalibration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_CALIBRATION, $payload, 24);

        $payload = unpack('V2offset/V2gain', $data);

        $ret['offset'] = IPConnection::collectUnpackedInt32Array($payload, 'offset', 2);
        $ret['gain'] = IPConnection::collectUnpackedInt32Array($payload, 'gain', 2);

        return $ret;
    }

    /**
     * Returns the ADC values as given by the MCP3911 IC. This function
     * is needed for proper calibration, see BrickletIndustrialDualAnalogIn::setCalibration().
     * 
     * 
     * @return array
     */
    public function getADCValues()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ADC_VALUES, $payload, 16);

        $payload = unpack('V2value', $data);

        return IPConnection::collectUnpackedInt32Array($payload, 'value', 2);
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
    public function callbackWrapperVoltage($data)
    {
        $payload = unpack('C1channel/V1voltage', $data);
        $payload['voltage'] = IPConnection::fixUnpackedInt32($payload, 'voltage');

        if (array_key_exists(self::CALLBACK_VOLTAGE, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_VOLTAGE];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_VOLTAGE];

            call_user_func($function, $payload['channel'], $payload['voltage'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperVoltageReached($data)
    {
        $payload = unpack('C1channel/V1voltage', $data);
        $payload['voltage'] = IPConnection::fixUnpackedInt32($payload, 'voltage');

        if (array_key_exists(self::CALLBACK_VOLTAGE_REACHED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_VOLTAGE_REACHED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_VOLTAGE_REACHED];

            call_user_func($function, $payload['channel'], $payload['voltage'], $user_data);
        }
    }
}

?>
