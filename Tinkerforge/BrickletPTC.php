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
 * Reads temperatures from Pt100 und Pt1000 sensors
 */
class BrickletPTC extends Device
{

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletPTC::setTemperatureCallbackPeriod(). The parameter is the
     * temperature of the connected sensor.
     * 
     * The BrickletPTC::CALLBACK_TEMPERATURE callback is only triggered if the temperature has changed
     * since the last triggering.
     */
    const CALLBACK_TEMPERATURE = 13;

    /**
     * This callback is triggered when the threshold as set by
     * BrickletPTC::setTemperatureCallbackThreshold() is reached.
     * The parameter is the temperature of the connected sensor.
     * 
     * If the threshold keeps being reached, the callback is triggered periodically
     * with the period as set by BrickletPTC::setDebouncePeriod().
     */
    const CALLBACK_TEMPERATURE_REACHED = 14;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletPTC::setResistanceCallbackPeriod(). The parameter is the resistance
     * of the connected sensor.
     * 
     * The BrickletPTC::CALLBACK_RESISTANCE callback is only triggered if the resistance has changed
     * since the last triggering.
     */
    const CALLBACK_RESISTANCE = 15;

    /**
     * This callback is triggered when the threshold as set by
     * BrickletPTC::setResistanceCallbackThreshold() is reached.
     * The parameter is the resistance of the connected sensor.
     * 
     * If the threshold keeps being reached, the callback is triggered periodically
     * with the period as set by BrickletPTC::setDebouncePeriod().
     */
    const CALLBACK_RESISTANCE_REACHED = 16;

    /**
     * This callback is triggered periodically according to the configuration set by
     * BrickletPTC::setSensorConnectedCallbackConfiguration().
     * 
     * The parameter is the same as BrickletPTC::isSensorConnected().
     * 
     * .. versionadded:: 2.0.2$nbsp;(Plugin)
     */
    const CALLBACK_SENSOR_CONNECTED = 24;


    /**
     * @internal
     */
    const FUNCTION_GET_TEMPERATURE = 1;

    /**
     * @internal
     */
    const FUNCTION_GET_RESISTANCE = 2;

    /**
     * @internal
     */
    const FUNCTION_SET_TEMPERATURE_CALLBACK_PERIOD = 3;

    /**
     * @internal
     */
    const FUNCTION_GET_TEMPERATURE_CALLBACK_PERIOD = 4;

    /**
     * @internal
     */
    const FUNCTION_SET_RESISTANCE_CALLBACK_PERIOD = 5;

    /**
     * @internal
     */
    const FUNCTION_GET_RESISTANCE_CALLBACK_PERIOD = 6;

    /**
     * @internal
     */
    const FUNCTION_SET_TEMPERATURE_CALLBACK_THRESHOLD = 7;

    /**
     * @internal
     */
    const FUNCTION_GET_TEMPERATURE_CALLBACK_THRESHOLD = 8;

    /**
     * @internal
     */
    const FUNCTION_SET_RESISTANCE_CALLBACK_THRESHOLD = 9;

    /**
     * @internal
     */
    const FUNCTION_GET_RESISTANCE_CALLBACK_THRESHOLD = 10;

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
    const FUNCTION_SET_NOISE_REJECTION_FILTER = 17;

    /**
     * @internal
     */
    const FUNCTION_GET_NOISE_REJECTION_FILTER = 18;

    /**
     * @internal
     */
    const FUNCTION_IS_SENSOR_CONNECTED = 19;

    /**
     * @internal
     */
    const FUNCTION_SET_WIRE_MODE = 20;

    /**
     * @internal
     */
    const FUNCTION_GET_WIRE_MODE = 21;

    /**
     * @internal
     */
    const FUNCTION_SET_SENSOR_CONNECTED_CALLBACK_CONFIGURATION = 22;

    /**
     * @internal
     */
    const FUNCTION_GET_SENSOR_CONNECTED_CALLBACK_CONFIGURATION = 23;

    /**
     * @internal
     */
    const FUNCTION_GET_IDENTITY = 255;

    const THRESHOLD_OPTION_OFF = 'x';
    const THRESHOLD_OPTION_OUTSIDE = 'o';
    const THRESHOLD_OPTION_INSIDE = 'i';
    const THRESHOLD_OPTION_SMALLER = '<';
    const THRESHOLD_OPTION_GREATER = '>';
    const FILTER_OPTION_50HZ = 0;
    const FILTER_OPTION_60HZ = 1;
    const WIRE_MODE_2 = 2;
    const WIRE_MODE_3 = 3;
    const WIRE_MODE_4 = 4;

    const DEVICE_IDENTIFIER = 226;

    const DEVICE_DISPLAY_NAME = 'PTC Bricklet';

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

        $this->response_expected[self::FUNCTION_GET_TEMPERATURE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_RESISTANCE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_TEMPERATURE_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_TEMPERATURE_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_RESISTANCE_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_RESISTANCE_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_TEMPERATURE_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_TEMPERATURE_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_RESISTANCE_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_RESISTANCE_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_DEBOUNCE_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_DEBOUNCE_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_NOISE_REJECTION_FILTER] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_NOISE_REJECTION_FILTER] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_IS_SENSOR_CONNECTED] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_WIRE_MODE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_WIRE_MODE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_SENSOR_CONNECTED_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_SENSOR_CONNECTED_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_IDENTITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;

        $this->callback_wrappers[self::CALLBACK_TEMPERATURE] = array(12, 'callbackWrapperTemperature');
        $this->callback_wrappers[self::CALLBACK_TEMPERATURE_REACHED] = array(12, 'callbackWrapperTemperatureReached');
        $this->callback_wrappers[self::CALLBACK_RESISTANCE] = array(12, 'callbackWrapperResistance');
        $this->callback_wrappers[self::CALLBACK_RESISTANCE_REACHED] = array(12, 'callbackWrapperResistanceReached');
        $this->callback_wrappers[self::CALLBACK_SENSOR_CONNECTED] = array(9, 'callbackWrapperSensorConnected');

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
     * Returns the temperature of connected sensor.
     * 
     * If you want to get the temperature periodically, it is recommended
     * to use the BrickletPTC::CALLBACK_TEMPERATURE callback and set the period with
     * BrickletPTC::setTemperatureCallbackPeriod().
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
     * Returns the value as measured by the MAX31865 precision delta-sigma ADC.
     * 
     * The value can be converted with the following formulas:
     * 
     * * Pt100:  resistance = (value * 390) / 32768
     * * Pt1000: resistance = (value * 3900) / 32768
     * 
     * If you want to get the resistance periodically, it is recommended
     * to use the BrickletPTC::CALLBACK_RESISTANCE callback and set the period with
     * BrickletPTC::setResistanceCallbackPeriod().
     * 
     * 
     * @return int
     */
    public function getResistance()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_RESISTANCE, $payload, 12);

        $payload = unpack('V1resistance', $data);

        return IPConnection::fixUnpackedInt32($payload, 'resistance');
    }

    /**
     * Sets the period with which the BrickletPTC::CALLBACK_TEMPERATURE callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * The BrickletPTC::CALLBACK_TEMPERATURE callback is only triggered if the temperature has
     * changed since the last triggering.
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
     * Returns the period as set by BrickletPTC::setTemperatureCallbackPeriod().
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
     * Sets the period with which the BrickletPTC::CALLBACK_RESISTANCE callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * The BrickletPTC::CALLBACK_RESISTANCE callback is only triggered if the resistance has changed
     * since the last triggering.
     * 
     * @param int $period
     * 
     * @return void
     */
    public function setResistanceCallbackPeriod($period)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);

        $this->sendRequest(self::FUNCTION_SET_RESISTANCE_CALLBACK_PERIOD, $payload, 0);
    }

    /**
     * Returns the period as set by BrickletPTC::setResistanceCallbackPeriod().
     * 
     * 
     * @return int
     */
    public function getResistanceCallbackPeriod()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_RESISTANCE_CALLBACK_PERIOD, $payload, 12);

        $payload = unpack('V1period', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'period');
    }

    /**
     * Sets the thresholds for the BrickletPTC::CALLBACK_TEMPERATURE_REACHED callback.
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
     * Returns the threshold as set by BrickletPTC::setTemperatureCallbackThreshold().
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
     * Sets the thresholds for the BrickletPTC::CALLBACK_RESISTANCE_REACHED callback.
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
    public function setResistanceCallbackThreshold($option, $min, $max)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('c', ord($option));
        $payload .= pack('V', $min);
        $payload .= pack('V', $max);

        $this->sendRequest(self::FUNCTION_SET_RESISTANCE_CALLBACK_THRESHOLD, $payload, 0);
    }

    /**
     * Returns the threshold as set by BrickletPTC::setResistanceCallbackThreshold().
     * 
     * 
     * @return array
     */
    public function getResistanceCallbackThreshold()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_RESISTANCE_CALLBACK_THRESHOLD, $payload, 17);

        $payload = unpack('c1option/V1min/V1max', $data);

        $ret['option'] = chr($payload['option']);
        $ret['min'] = IPConnection::fixUnpackedInt32($payload, 'min');
        $ret['max'] = IPConnection::fixUnpackedInt32($payload, 'max');

        return $ret;
    }

    /**
     * Sets the period with which the threshold callback
     * 
     * * BrickletPTC::CALLBACK_TEMPERATURE_REACHED,
     * * BrickletPTC::CALLBACK_RESISTANCE_REACHED
     * 
     * is triggered, if the threshold
     * 
     * * BrickletPTC::setTemperatureCallbackThreshold(),
     * * BrickletPTC::setResistanceCallbackThreshold()
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
     * Returns the debounce period as set by BrickletPTC::setDebouncePeriod().
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
     * Sets the noise rejection filter to either 50Hz (0) or 60Hz (1).
     * Noise from 50Hz or 60Hz power sources (including
     * harmonics of the AC power's fundamental frequency) is
     * attenuated by 82dB.
     * 
     * @param int $filter
     * 
     * @return void
     */
    public function setNoiseRejectionFilter($filter)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $filter);

        $this->sendRequest(self::FUNCTION_SET_NOISE_REJECTION_FILTER, $payload, 0);
    }

    /**
     * Returns the noise rejection filter option as set by
     * BrickletPTC::setNoiseRejectionFilter()
     * 
     * 
     * @return int
     */
    public function getNoiseRejectionFilter()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_NOISE_REJECTION_FILTER, $payload, 9);

        $payload = unpack('C1filter', $data);

        return $payload['filter'];
    }

    /**
     * Returns *true* if the sensor is connected correctly.
     * 
     * If this function
     * returns *false*, there is either no Pt100 or Pt1000 sensor connected,
     * the sensor is connected incorrectly or the sensor itself is faulty.
     * 
     * 
     * @return bool
     */
    public function isSensorConnected()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_IS_SENSOR_CONNECTED, $payload, 9);

        $payload = unpack('C1connected', $data);

        return (bool)$payload['connected'];
    }

    /**
     * Sets the wire mode of the sensor. Possible values are 2, 3 and 4 which
     * correspond to 2-, 3- and 4-wire sensors. The value has to match the jumper
     * configuration on the Bricklet.
     * 
     * @param int $mode
     * 
     * @return void
     */
    public function setWireMode($mode)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $mode);

        $this->sendRequest(self::FUNCTION_SET_WIRE_MODE, $payload, 0);
    }

    /**
     * Returns the wire mode as set by BrickletPTC::setWireMode()
     * 
     * 
     * @return int
     */
    public function getWireMode()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_WIRE_MODE, $payload, 9);

        $payload = unpack('C1mode', $data);

        return $payload['mode'];
    }

    /**
     * If you enable this callback, the BrickletPTC::CALLBACK_SENSOR_CONNECTED callback is triggered
     * every time a Pt sensor is connected/disconnected.
     * 
     * .. versionadded:: 2.0.2$nbsp;(Plugin)
     * 
     * @param bool $enabled
     * 
     * @return void
     */
    public function setSensorConnectedCallbackConfiguration($enabled)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', intval((bool)$enabled));

        $this->sendRequest(self::FUNCTION_SET_SENSOR_CONNECTED_CALLBACK_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the configuration as set by BrickletPTC::setSensorConnectedCallbackConfiguration().
     * 
     * .. versionadded:: 2.0.2$nbsp;(Plugin)
     * 
     * 
     * @return bool
     */
    public function getSensorConnectedCallbackConfiguration()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_SENSOR_CONNECTED_CALLBACK_CONFIGURATION, $payload, 9);

        $payload = unpack('C1enabled', $data);

        return (bool)$payload['enabled'];
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
    public function callbackWrapperResistance($data)
    {
        $payload = unpack('V1resistance', $data);
        $payload['resistance'] = IPConnection::fixUnpackedInt32($payload, 'resistance');

        if (array_key_exists(self::CALLBACK_RESISTANCE, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_RESISTANCE];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_RESISTANCE];

            call_user_func($function, $payload['resistance'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperResistanceReached($data)
    {
        $payload = unpack('V1resistance', $data);
        $payload['resistance'] = IPConnection::fixUnpackedInt32($payload, 'resistance');

        if (array_key_exists(self::CALLBACK_RESISTANCE_REACHED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_RESISTANCE_REACHED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_RESISTANCE_REACHED];

            call_user_func($function, $payload['resistance'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperSensorConnected($data)
    {
        $payload = unpack('C1connected', $data);
        $payload['connected'] = (bool)$payload['connected'];

        if (array_key_exists(self::CALLBACK_SENSOR_CONNECTED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_SENSOR_CONNECTED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_SENSOR_CONNECTED];

            call_user_func($function, $payload['connected'], $user_data);
        }
    }
}

?>
