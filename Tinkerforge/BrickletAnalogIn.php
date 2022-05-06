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
 * Measures DC voltage between 0V and 45V
 */
class BrickletAnalogIn extends Device
{

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletAnalogIn::setVoltageCallbackPeriod(). The parameter is the voltage of the
     * sensor.
     * 
     * The BrickletAnalogIn::CALLBACK_VOLTAGE callback is only triggered if the voltage has changed since
     * the last triggering.
     */
    const CALLBACK_VOLTAGE = 13;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletAnalogIn::setAnalogValueCallbackPeriod(). The parameter is the analog
     * value of the sensor.
     * 
     * The BrickletAnalogIn::CALLBACK_ANALOG_VALUE callback is only triggered if the voltage has changed
     * since the last triggering.
     */
    const CALLBACK_ANALOG_VALUE = 14;

    /**
     * This callback is triggered when the threshold as set by
     * BrickletAnalogIn::setVoltageCallbackThreshold() is reached.
     * The parameter is the voltage of the sensor.
     * 
     * If the threshold keeps being reached, the callback is triggered periodically
     * with the period as set by BrickletAnalogIn::setDebouncePeriod().
     */
    const CALLBACK_VOLTAGE_REACHED = 15;

    /**
     * This callback is triggered when the threshold as set by
     * BrickletAnalogIn::setAnalogValueCallbackThreshold() is reached.
     * The parameter is the analog value of the sensor.
     * 
     * If the threshold keeps being reached, the callback is triggered periodically
     * with the period as set by BrickletAnalogIn::setDebouncePeriod().
     */
    const CALLBACK_ANALOG_VALUE_REACHED = 16;


    /**
     * @internal
     */
    const FUNCTION_GET_VOLTAGE = 1;

    /**
     * @internal
     */
    const FUNCTION_GET_ANALOG_VALUE = 2;

    /**
     * @internal
     */
    const FUNCTION_SET_VOLTAGE_CALLBACK_PERIOD = 3;

    /**
     * @internal
     */
    const FUNCTION_GET_VOLTAGE_CALLBACK_PERIOD = 4;

    /**
     * @internal
     */
    const FUNCTION_SET_ANALOG_VALUE_CALLBACK_PERIOD = 5;

    /**
     * @internal
     */
    const FUNCTION_GET_ANALOG_VALUE_CALLBACK_PERIOD = 6;

    /**
     * @internal
     */
    const FUNCTION_SET_VOLTAGE_CALLBACK_THRESHOLD = 7;

    /**
     * @internal
     */
    const FUNCTION_GET_VOLTAGE_CALLBACK_THRESHOLD = 8;

    /**
     * @internal
     */
    const FUNCTION_SET_ANALOG_VALUE_CALLBACK_THRESHOLD = 9;

    /**
     * @internal
     */
    const FUNCTION_GET_ANALOG_VALUE_CALLBACK_THRESHOLD = 10;

    /**
     * @internal
     */
    const FUNCTION_SET_DEBOUNCE_PERIOD = 11;

    /**
     * @internal
     */
    const FUNCTION_GET_DEBOUNCE_PERIOD = 12;

    /**
     * @internal
     */
    const FUNCTION_SET_RANGE = 17;

    /**
     * @internal
     */
    const FUNCTION_GET_RANGE = 18;

    /**
     * @internal
     */
    const FUNCTION_SET_AVERAGING = 19;

    /**
     * @internal
     */
    const FUNCTION_GET_AVERAGING = 20;

    /**
     * @internal
     */
    const FUNCTION_GET_IDENTITY = 255;

    const THRESHOLD_OPTION_OFF = 'x';
    const THRESHOLD_OPTION_OUTSIDE = 'o';
    const THRESHOLD_OPTION_INSIDE = 'i';
    const THRESHOLD_OPTION_SMALLER = '<';
    const THRESHOLD_OPTION_GREATER = '>';
    const RANGE_AUTOMATIC = 0;
    const RANGE_UP_TO_6V = 1;
    const RANGE_UP_TO_10V = 2;
    const RANGE_UP_TO_36V = 3;
    const RANGE_UP_TO_45V = 4;
    const RANGE_UP_TO_3V = 5;

    const DEVICE_IDENTIFIER = 219;

    const DEVICE_DISPLAY_NAME = 'Analog In Bricklet';

    /**
     * Creates an object with the unique device ID $uid. This object can
     * then be added to the IP connection.
     *
     * @param string $uid
     */
    public function __construct($uid, $ipcon)
    {
        parent::__construct($uid, $ipcon, self::DEVICE_IDENTIFIER, self::DEVICE_DISPLAY_NAME);

        $this->api_version = array(2, 0, 3);

        $this->response_expected[self::FUNCTION_GET_VOLTAGE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_ANALOG_VALUE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_VOLTAGE_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_VOLTAGE_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ANALOG_VALUE_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_ANALOG_VALUE_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_VOLTAGE_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_VOLTAGE_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ANALOG_VALUE_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_ANALOG_VALUE_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_DEBOUNCE_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_DEBOUNCE_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_RANGE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_RANGE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_AVERAGING] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_AVERAGING] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_IDENTITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;

        $this->callback_wrappers[self::CALLBACK_VOLTAGE] = array(10, 'callbackWrapperVoltage');
        $this->callback_wrappers[self::CALLBACK_ANALOG_VALUE] = array(10, 'callbackWrapperAnalogValue');
        $this->callback_wrappers[self::CALLBACK_VOLTAGE_REACHED] = array(10, 'callbackWrapperVoltageReached');
        $this->callback_wrappers[self::CALLBACK_ANALOG_VALUE_REACHED] = array(10, 'callbackWrapperAnalogValueReached');

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
     * Returns the voltage of the sensor. The resolution between 0 and 6V is about 2mV.
     * Between 6 and 45V the resolution is about 10mV.
     * 
     * If you want to get the voltage periodically, it is recommended to use the
     * BrickletAnalogIn::CALLBACK_VOLTAGE callback and set the period with
     * BrickletAnalogIn::setVoltageCallbackPeriod().
     * 
     * 
     * @return int
     */
    public function getVoltage()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_VOLTAGE, $payload, 10);

        $payload = unpack('v1voltage', $data);

        return $payload['voltage'];
    }

    /**
     * Returns the value as read by a 12-bit analog-to-digital converter.
     * 
     * <note>
     *  The value returned by BrickletAnalogIn::getVoltage() is averaged over several samples
     *  to yield less noise, while BrickletAnalogIn::getAnalogValue() gives back raw
     *  unfiltered analog values. The only reason to use BrickletAnalogIn::getAnalogValue() is,
     *  if you need the full resolution of the analog-to-digital converter.
     * </note>
     * 
     * If you want the analog value periodically, it is recommended to use the
     * BrickletAnalogIn::CALLBACK_ANALOG_VALUE callback and set the period with
     * BrickletAnalogIn::setAnalogValueCallbackPeriod().
     * 
     * 
     * @return int
     */
    public function getAnalogValue()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ANALOG_VALUE, $payload, 10);

        $payload = unpack('v1value', $data);

        return $payload['value'];
    }

    /**
     * Sets the period with which the BrickletAnalogIn::CALLBACK_VOLTAGE callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * The BrickletAnalogIn::CALLBACK_VOLTAGE callback is only triggered if the voltage has changed since
     * the last triggering.
     * 
     * @param int $period
     * 
     * @return void
     */
    public function setVoltageCallbackPeriod($period)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);

        $this->sendRequest(self::FUNCTION_SET_VOLTAGE_CALLBACK_PERIOD, $payload, 0);
    }

    /**
     * Returns the period as set by BrickletAnalogIn::setVoltageCallbackPeriod().
     * 
     * 
     * @return int
     */
    public function getVoltageCallbackPeriod()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_VOLTAGE_CALLBACK_PERIOD, $payload, 12);

        $payload = unpack('V1period', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'period');
    }

    /**
     * Sets the period with which the BrickletAnalogIn::CALLBACK_ANALOG_VALUE callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * The BrickletAnalogIn::CALLBACK_ANALOG_VALUE callback is only triggered if the analog value has
     * changed since the last triggering.
     * 
     * @param int $period
     * 
     * @return void
     */
    public function setAnalogValueCallbackPeriod($period)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);

        $this->sendRequest(self::FUNCTION_SET_ANALOG_VALUE_CALLBACK_PERIOD, $payload, 0);
    }

    /**
     * Returns the period as set by BrickletAnalogIn::setAnalogValueCallbackPeriod().
     * 
     * 
     * @return int
     */
    public function getAnalogValueCallbackPeriod()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ANALOG_VALUE_CALLBACK_PERIOD, $payload, 12);

        $payload = unpack('V1period', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'period');
    }

    /**
     * Sets the thresholds for the BrickletAnalogIn::CALLBACK_VOLTAGE_REACHED callback.
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
     * @param string $option
     * @param int $min
     * @param int $max
     * 
     * @return void
     */
    public function setVoltageCallbackThreshold($option, $min, $max)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('c', ord($option));
        $payload .= pack('v', $min);
        $payload .= pack('v', $max);

        $this->sendRequest(self::FUNCTION_SET_VOLTAGE_CALLBACK_THRESHOLD, $payload, 0);
    }

    /**
     * Returns the threshold as set by BrickletAnalogIn::setVoltageCallbackThreshold().
     * 
     * 
     * @return array
     */
    public function getVoltageCallbackThreshold()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_VOLTAGE_CALLBACK_THRESHOLD, $payload, 13);

        $payload = unpack('c1option/v1min/v1max', $data);

        $ret['option'] = chr($payload['option']);
        $ret['min'] = $payload['min'];
        $ret['max'] = $payload['max'];

        return $ret;
    }

    /**
     * Sets the thresholds for the BrickletAnalogIn::CALLBACK_ANALOG_VALUE_REACHED callback.
     * 
     * The following options are possible:
     * 
     * <code>
     *  "Option", "Description"
     * 
     *  "'x'",    "Callback is turned off"
     *  "'o'",    "Callback is triggered when the analog value is *outside* the min and max values"
     *  "'i'",    "Callback is triggered when the analog value is *inside* the min and max values"
     *  "'<'",    "Callback is triggered when the analog value is smaller than the min value (max is ignored)"
     *  "'>'",    "Callback is triggered when the analog value is greater than the min value (max is ignored)"
     * </code>
     * 
     * @param string $option
     * @param int $min
     * @param int $max
     * 
     * @return void
     */
    public function setAnalogValueCallbackThreshold($option, $min, $max)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('c', ord($option));
        $payload .= pack('v', $min);
        $payload .= pack('v', $max);

        $this->sendRequest(self::FUNCTION_SET_ANALOG_VALUE_CALLBACK_THRESHOLD, $payload, 0);
    }

    /**
     * Returns the threshold as set by BrickletAnalogIn::setAnalogValueCallbackThreshold().
     * 
     * 
     * @return array
     */
    public function getAnalogValueCallbackThreshold()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ANALOG_VALUE_CALLBACK_THRESHOLD, $payload, 13);

        $payload = unpack('c1option/v1min/v1max', $data);

        $ret['option'] = chr($payload['option']);
        $ret['min'] = $payload['min'];
        $ret['max'] = $payload['max'];

        return $ret;
    }

    /**
     * Sets the period with which the threshold callbacks
     * 
     * * BrickletAnalogIn::CALLBACK_VOLTAGE_REACHED,
     * * BrickletAnalogIn::CALLBACK_ANALOG_VALUE_REACHED
     * 
     * are triggered, if the thresholds
     * 
     * * BrickletAnalogIn::setVoltageCallbackThreshold(),
     * * BrickletAnalogIn::setAnalogValueCallbackThreshold()
     * 
     * keep being reached.
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
     * Returns the debounce period as set by BrickletAnalogIn::setDebouncePeriod().
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
     * Sets the measurement range. Possible ranges:
     * 
     * * 0: Automatically switched
     * * 1: 0V - 6.05V, ~1.48mV resolution
     * * 2: 0V - 10.32V, ~2.52mV resolution
     * * 3: 0V - 36.30V, ~8.86mV resolution
     * * 4: 0V - 45.00V, ~11.25mV resolution
     * * 5: 0V - 3.3V, ~0.81mV resolution, new in version 2.0.3$nbsp;(Plugin)
     * 
     * .. versionadded:: 2.0.1$nbsp;(Plugin)
     * 
     * @param int $range
     * 
     * @return void
     */
    public function setRange($range)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $range);

        $this->sendRequest(self::FUNCTION_SET_RANGE, $payload, 0);
    }

    /**
     * Returns the measurement range as set by BrickletAnalogIn::setRange().
     * 
     * .. versionadded:: 2.0.1$nbsp;(Plugin)
     * 
     * 
     * @return int
     */
    public function getRange()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_RANGE, $payload, 9);

        $payload = unpack('C1range', $data);

        return $payload['range'];
    }

    /**
     * Set the length of a averaging for the voltage value.
     * 
     * Setting the length to 0 will turn the averaging completely off. If the
     * averaging is off, there is more noise on the data, but the data is without
     * delay.
     * 
     * .. versionadded:: 2.0.3$nbsp;(Plugin)
     * 
     * @param int $average
     * 
     * @return void
     */
    public function setAveraging($average)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $average);

        $this->sendRequest(self::FUNCTION_SET_AVERAGING, $payload, 0);
    }

    /**
     * Returns the averaging configuration as set by BrickletAnalogIn::setAveraging().
     * 
     * .. versionadded:: 2.0.3$nbsp;(Plugin)
     * 
     * 
     * @return int
     */
    public function getAveraging()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_AVERAGING, $payload, 9);

        $payload = unpack('C1average', $data);

        return $payload['average'];
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
        $payload = unpack('v1voltage', $data);

        if (array_key_exists(self::CALLBACK_VOLTAGE, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_VOLTAGE];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_VOLTAGE];

            call_user_func($function, $payload['voltage'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperAnalogValue($data)
    {
        $payload = unpack('v1value', $data);

        if (array_key_exists(self::CALLBACK_ANALOG_VALUE, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_ANALOG_VALUE];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_ANALOG_VALUE];

            call_user_func($function, $payload['value'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperVoltageReached($data)
    {
        $payload = unpack('v1voltage', $data);

        if (array_key_exists(self::CALLBACK_VOLTAGE_REACHED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_VOLTAGE_REACHED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_VOLTAGE_REACHED];

            call_user_func($function, $payload['voltage'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperAnalogValueReached($data)
    {
        $payload = unpack('v1value', $data);

        if (array_key_exists(self::CALLBACK_ANALOG_VALUE_REACHED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_ANALOG_VALUE_REACHED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_ANALOG_VALUE_REACHED];

            call_user_func($function, $payload['value'], $user_data);
        }
    }
}

?>
