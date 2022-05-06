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
 * Measures temperature with thermocouples
 */
class BrickletThermocouple extends Device
{

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletThermocouple::setTemperatureCallbackPeriod(). The parameter is the
     * temperature of the thermocouple.
     * 
     * The BrickletThermocouple::CALLBACK_TEMPERATURE callback is only triggered if the temperature has
     * changed since the last triggering.
     */
    const CALLBACK_TEMPERATURE = 8;

    /**
     * This callback is triggered when the threshold as set by
     * BrickletThermocouple::setTemperatureCallbackThreshold() is reached.
     * The parameter is the temperature of the thermocouple.
     * 
     * If the threshold keeps being reached, the callback is triggered periodically
     * with the period as set by BrickletThermocouple::setDebouncePeriod().
     */
    const CALLBACK_TEMPERATURE_REACHED = 9;

    /**
     * This Callback is triggered every time the error state changes
     * (see BrickletThermocouple::getErrorState()).
     */
    const CALLBACK_ERROR_STATE = 13;


    /**
     * @internal
     */
    const FUNCTION_GET_TEMPERATURE = 1;

    /**
     * @internal
     */
    const FUNCTION_SET_TEMPERATURE_CALLBACK_PERIOD = 2;

    /**
     * @internal
     */
    const FUNCTION_GET_TEMPERATURE_CALLBACK_PERIOD = 3;

    /**
     * @internal
     */
    const FUNCTION_SET_TEMPERATURE_CALLBACK_THRESHOLD = 4;

    /**
     * @internal
     */
    const FUNCTION_GET_TEMPERATURE_CALLBACK_THRESHOLD = 5;

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
    const FUNCTION_SET_CONFIGURATION = 10;

    /**
     * @internal
     */
    const FUNCTION_GET_CONFIGURATION = 11;

    /**
     * @internal
     */
    const FUNCTION_GET_ERROR_STATE = 12;

    /**
     * @internal
     */
    const FUNCTION_GET_IDENTITY = 255;

    const THRESHOLD_OPTION_OFF = 'x';
    const THRESHOLD_OPTION_OUTSIDE = 'o';
    const THRESHOLD_OPTION_INSIDE = 'i';
    const THRESHOLD_OPTION_SMALLER = '<';
    const THRESHOLD_OPTION_GREATER = '>';
    const AVERAGING_1 = 1;
    const AVERAGING_2 = 2;
    const AVERAGING_4 = 4;
    const AVERAGING_8 = 8;
    const AVERAGING_16 = 16;
    const TYPE_B = 0;
    const TYPE_E = 1;
    const TYPE_J = 2;
    const TYPE_K = 3;
    const TYPE_N = 4;
    const TYPE_R = 5;
    const TYPE_S = 6;
    const TYPE_T = 7;
    const TYPE_G8 = 8;
    const TYPE_G32 = 9;
    const FILTER_OPTION_50HZ = 0;
    const FILTER_OPTION_60HZ = 1;

    const DEVICE_IDENTIFIER = 266;

    const DEVICE_DISPLAY_NAME = 'Thermocouple Bricklet';

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

        $this->response_expected[self::FUNCTION_GET_TEMPERATURE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_TEMPERATURE_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_TEMPERATURE_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_TEMPERATURE_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_TEMPERATURE_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_DEBOUNCE_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_DEBOUNCE_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_CONFIGURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_ERROR_STATE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_IDENTITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;

        $this->callback_wrappers[self::CALLBACK_TEMPERATURE] = array(12, 'callbackWrapperTemperature');
        $this->callback_wrappers[self::CALLBACK_TEMPERATURE_REACHED] = array(12, 'callbackWrapperTemperatureReached');
        $this->callback_wrappers[self::CALLBACK_ERROR_STATE] = array(10, 'callbackWrapperErrorState');

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
     * Returns the temperature of the thermocouple.
     * 
     * If you want to get the temperature periodically, it is recommended
     * to use the BrickletThermocouple::CALLBACK_TEMPERATURE callback and set the period with
     * BrickletThermocouple::setTemperatureCallbackPeriod().
     * 
     * 
     * @return int
     */
    public function getTemperature()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_TEMPERATURE, $payload, 12);

        $payload = unpack('V1temperature', $data);

        return IPConnection::fixUnpackedInt32($payload, 'temperature');
    }

    /**
     * Sets the period with which the BrickletThermocouple::CALLBACK_TEMPERATURE callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * The BrickletThermocouple::CALLBACK_TEMPERATURE callback is only triggered if the temperature has changed
     * since the last triggering.
     * 
     * @param int $period
     * 
     * @return void
     */
    public function setTemperatureCallbackPeriod($period)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);

        $this->sendRequest(self::FUNCTION_SET_TEMPERATURE_CALLBACK_PERIOD, $payload, 0);
    }

    /**
     * Returns the period as set by BrickletThermocouple::setTemperatureCallbackPeriod().
     * 
     * 
     * @return int
     */
    public function getTemperatureCallbackPeriod()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_TEMPERATURE_CALLBACK_PERIOD, $payload, 12);

        $payload = unpack('V1period', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'period');
    }

    /**
     * Sets the thresholds for the BrickletThermocouple::CALLBACK_TEMPERATURE_REACHED callback.
     * 
     * The following options are possible:
     * 
     * <code>
     *  "Option", "Description"
     * 
     *  "'x'",    "Callback is turned off"
     *  "'o'",    "Callback is triggered when the temperature is *outside* the min and max values"
     *  "'i'",    "Callback is triggered when the temperature is *inside* the min and max values"
     *  "'<'",    "Callback is triggered when the temperature is smaller than the min value (max is ignored)"
     *  "'>'",    "Callback is triggered when the temperature is greater than the min value (max is ignored)"
     * </code>
     * 
     * @param string $option
     * @param int $min
     * @param int $max
     * 
     * @return void
     */
    public function setTemperatureCallbackThreshold($option, $min, $max)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('c', ord($option));
        $payload .= pack('V', $min);
        $payload .= pack('V', $max);

        $this->sendRequest(self::FUNCTION_SET_TEMPERATURE_CALLBACK_THRESHOLD, $payload, 0);
    }

    /**
     * Returns the threshold as set by BrickletThermocouple::setTemperatureCallbackThreshold().
     * 
     * 
     * @return array
     */
    public function getTemperatureCallbackThreshold()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_TEMPERATURE_CALLBACK_THRESHOLD, $payload, 17);

        $payload = unpack('c1option/V1min/V1max', $data);

        $ret['option'] = chr($payload['option']);
        $ret['min'] = IPConnection::fixUnpackedInt32($payload, 'min');
        $ret['max'] = IPConnection::fixUnpackedInt32($payload, 'max');

        return $ret;
    }

    /**
     * Sets the period with which the threshold callback
     * 
     * * BrickletThermocouple::CALLBACK_TEMPERATURE_REACHED
     * 
     * is triggered, if the threshold
     * 
     * * BrickletThermocouple::setTemperatureCallbackThreshold()
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
     * Returns the debounce period as set by BrickletThermocouple::setDebouncePeriod().
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
     * You can configure averaging size, thermocouple type and frequency
     * filtering.
     * 
     * Available averaging sizes are 1, 2, 4, 8 and 16 samples.
     * 
     * As thermocouple type you can use B, E, J, K, N, R, S and T. If you have a
     * different thermocouple or a custom thermocouple you can also use
     * G8 and G32. With these types the returned value will not be in °C/100,
     * it will be calculated by the following formulas:
     * 
     * * G8: ``value = 8 * 1.6 * 2^17 * Vin``
     * * G32: ``value = 32 * 1.6 * 2^17 * Vin``
     * 
     * where Vin is the thermocouple input voltage.
     * 
     * The frequency filter can be either configured to 50Hz or to 60Hz. You should
     * configure it according to your utility frequency.
     * 
     * The conversion time depends on the averaging and filter configuration, it can
     * be calculated as follows:
     * 
     * * 60Hz: ``time = 82 + (samples - 1) * 16.67``
     * * 50Hz: ``time = 98 + (samples - 1) * 20``
     * 
     * @param int $averaging
     * @param int $thermocouple_type
     * @param int $filter
     * 
     * @return void
     */
    public function setConfiguration($averaging, $thermocouple_type, $filter)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $averaging);
        $payload .= pack('C', $thermocouple_type);
        $payload .= pack('C', $filter);

        $this->sendRequest(self::FUNCTION_SET_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the configuration as set by BrickletThermocouple::setConfiguration().
     * 
     * 
     * @return array
     */
    public function getConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_CONFIGURATION, $payload, 11);

        $payload = unpack('C1averaging/C1thermocouple_type/C1filter', $data);

        $ret['averaging'] = $payload['averaging'];
        $ret['thermocouple_type'] = $payload['thermocouple_type'];
        $ret['filter'] = $payload['filter'];

        return $ret;
    }

    /**
     * Returns the current error state. There are two possible errors:
     * 
     * * Over/Under Voltage and
     * * Open Circuit.
     * 
     * Over/Under Voltage happens for voltages below 0V or above 3.3V. In this case
     * it is very likely that your thermocouple is defective. An Open Circuit error
     * indicates that there is no thermocouple connected.
     * 
     * You can use the BrickletThermocouple::CALLBACK_ERROR_STATE callback to automatically get triggered
     * when the error state changes.
     * 
     * 
     * @return array
     */
    public function getErrorState()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ERROR_STATE, $payload, 10);

        $payload = unpack('C1over_under/C1open_circuit', $data);

        $ret['over_under'] = (bool)$payload['over_under'];
        $ret['open_circuit'] = (bool)$payload['open_circuit'];

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
    public function callbackWrapperTemperature($data)
    {
        $payload = unpack('V1temperature', $data);
        $payload['temperature'] = IPConnection::fixUnpackedInt32($payload, 'temperature');

        if (array_key_exists(self::CALLBACK_TEMPERATURE, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_TEMPERATURE];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_TEMPERATURE];

            call_user_func($function, $payload['temperature'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperTemperatureReached($data)
    {
        $payload = unpack('V1temperature', $data);
        $payload['temperature'] = IPConnection::fixUnpackedInt32($payload, 'temperature');

        if (array_key_exists(self::CALLBACK_TEMPERATURE_REACHED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_TEMPERATURE_REACHED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_TEMPERATURE_REACHED];

            call_user_func($function, $payload['temperature'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperErrorState($data)
    {
        $payload = unpack('C1over_under/C1open_circuit', $data);
        $payload['over_under'] = (bool)$payload['over_under'];
        $payload['open_circuit'] = (bool)$payload['open_circuit'];

        if (array_key_exists(self::CALLBACK_ERROR_STATE, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_ERROR_STATE];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_ERROR_STATE];

            call_user_func($function, $payload['over_under'], $payload['open_circuit'], $user_data);
        }
    }
}

?>
