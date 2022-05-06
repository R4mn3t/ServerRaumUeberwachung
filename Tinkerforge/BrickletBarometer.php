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
 * Measures air pressure and altitude changes
 */
class BrickletBarometer extends Device
{

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletBarometer::setAirPressureCallbackPeriod(). The parameter is the air
     * pressure of the air pressure sensor.
     * 
     * The BrickletBarometer::CALLBACK_AIR_PRESSURE callback is only triggered if the air pressure has
     * changed since the last triggering.
     */
    const CALLBACK_AIR_PRESSURE = 15;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletBarometer::setAltitudeCallbackPeriod(). The parameter is the altitude of
     * the air pressure sensor.
     * 
     * The BrickletBarometer::CALLBACK_ALTITUDE callback is only triggered if the altitude has changed since
     * the last triggering.
     */
    const CALLBACK_ALTITUDE = 16;

    /**
     * This callback is triggered when the threshold as set by
     * BrickletBarometer::setAirPressureCallbackThreshold() is reached.
     * The parameter is the air pressure of the air pressure sensor.
     * 
     * If the threshold keeps being reached, the callback is triggered periodically
     * with the period as set by BrickletBarometer::setDebouncePeriod().
     */
    const CALLBACK_AIR_PRESSURE_REACHED = 17;

    /**
     * This callback is triggered when the threshold as set by
     * BrickletBarometer::setAltitudeCallbackThreshold() is reached.
     * The parameter is the altitude of the air pressure sensor.
     * 
     * If the threshold keeps being reached, the callback is triggered periodically
     * with the period as set by BrickletBarometer::setDebouncePeriod().
     */
    const CALLBACK_ALTITUDE_REACHED = 18;


    /**
     * @internal
     */
    const FUNCTION_GET_AIR_PRESSURE = 1;

    /**
     * @internal
     */
    const FUNCTION_GET_ALTITUDE = 2;

    /**
     * @internal
     */
    const FUNCTION_SET_AIR_PRESSURE_CALLBACK_PERIOD = 3;

    /**
     * @internal
     */
    const FUNCTION_GET_AIR_PRESSURE_CALLBACK_PERIOD = 4;

    /**
     * @internal
     */
    const FUNCTION_SET_ALTITUDE_CALLBACK_PERIOD = 5;

    /**
     * @internal
     */
    const FUNCTION_GET_ALTITUDE_CALLBACK_PERIOD = 6;

    /**
     * @internal
     */
    const FUNCTION_SET_AIR_PRESSURE_CALLBACK_THRESHOLD = 7;

    /**
     * @internal
     */
    const FUNCTION_GET_AIR_PRESSURE_CALLBACK_THRESHOLD = 8;

    /**
     * @internal
     */
    const FUNCTION_SET_ALTITUDE_CALLBACK_THRESHOLD = 9;

    /**
     * @internal
     */
    const FUNCTION_GET_ALTITUDE_CALLBACK_THRESHOLD = 10;

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
    const FUNCTION_SET_REFERENCE_AIR_PRESSURE = 13;

    /**
     * @internal
     */
    const FUNCTION_GET_CHIP_TEMPERATURE = 14;

    /**
     * @internal
     */
    const FUNCTION_GET_REFERENCE_AIR_PRESSURE = 19;

    /**
     * @internal
     */
    const FUNCTION_SET_AVERAGING = 20;

    /**
     * @internal
     */
    const FUNCTION_GET_AVERAGING = 21;

    /**
     * @internal
     */
    const FUNCTION_SET_I2C_MODE = 22;

    /**
     * @internal
     */
    const FUNCTION_GET_I2C_MODE = 23;

    /**
     * @internal
     */
    const FUNCTION_GET_IDENTITY = 255;

    const THRESHOLD_OPTION_OFF = 'x';
    const THRESHOLD_OPTION_OUTSIDE = 'o';
    const THRESHOLD_OPTION_INSIDE = 'i';
    const THRESHOLD_OPTION_SMALLER = '<';
    const THRESHOLD_OPTION_GREATER = '>';
    const I2C_MODE_FAST = 0;
    const I2C_MODE_SLOW = 1;

    const DEVICE_IDENTIFIER = 221;

    const DEVICE_DISPLAY_NAME = 'Barometer Bricklet';

    /**
     * Creates an object with the unique device ID $uid. This object can
     * then be added to the IP connection.
     *
     * @param string $uid
     */
    public function __construct($uid, $ipcon)
    {
        parent::__construct($uid, $ipcon, self::DEVICE_IDENTIFIER, self::DEVICE_DISPLAY_NAME);

        $this->api_version = array(2, 0, 2);

        $this->response_expected[self::FUNCTION_GET_AIR_PRESSURE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_ALTITUDE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_AIR_PRESSURE_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_AIR_PRESSURE_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ALTITUDE_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_ALTITUDE_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_AIR_PRESSURE_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_AIR_PRESSURE_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ALTITUDE_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_ALTITUDE_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_DEBOUNCE_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_DEBOUNCE_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_REFERENCE_AIR_PRESSURE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_CHIP_TEMPERATURE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_REFERENCE_AIR_PRESSURE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_AVERAGING] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_AVERAGING] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_I2C_MODE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_I2C_MODE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_IDENTITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;

        $this->callback_wrappers[self::CALLBACK_AIR_PRESSURE] = array(12, 'callbackWrapperAirPressure');
        $this->callback_wrappers[self::CALLBACK_ALTITUDE] = array(12, 'callbackWrapperAltitude');
        $this->callback_wrappers[self::CALLBACK_AIR_PRESSURE_REACHED] = array(12, 'callbackWrapperAirPressureReached');
        $this->callback_wrappers[self::CALLBACK_ALTITUDE_REACHED] = array(12, 'callbackWrapperAltitudeReached');

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
     * Returns the air pressure of the air pressure sensor.
     * 
     * If you want to get the air pressure periodically, it is recommended to use the
     * BrickletBarometer::CALLBACK_AIR_PRESSURE callback and set the period with
     * BrickletBarometer::setAirPressureCallbackPeriod().
     * 
     * 
     * @return int
     */
    public function getAirPressure()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_AIR_PRESSURE, $payload, 12);

        $payload = unpack('V1air_pressure', $data);

        return IPConnection::fixUnpackedInt32($payload, 'air_pressure');
    }

    /**
     * Returns the relative altitude of the air pressure sensor. The value is
     * calculated based on the difference between the current air pressure
     * and the reference air pressure that can be set with BrickletBarometer::setReferenceAirPressure().
     * 
     * If you want to get the altitude periodically, it is recommended to use the
     * BrickletBarometer::CALLBACK_ALTITUDE callback and set the period with
     * BrickletBarometer::setAltitudeCallbackPeriod().
     * 
     * 
     * @return int
     */
    public function getAltitude()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ALTITUDE, $payload, 12);

        $payload = unpack('V1altitude', $data);

        return IPConnection::fixUnpackedInt32($payload, 'altitude');
    }

    /**
     * Sets the period with which the BrickletBarometer::CALLBACK_AIR_PRESSURE callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * The BrickletBarometer::CALLBACK_AIR_PRESSURE callback is only triggered if the air pressure has
     * changed since the last triggering.
     * 
     * @param int $period
     * 
     * @return void
     */
    public function setAirPressureCallbackPeriod($period)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);

        $this->sendRequest(self::FUNCTION_SET_AIR_PRESSURE_CALLBACK_PERIOD, $payload, 0);
    }

    /**
     * Returns the period as set by BrickletBarometer::setAirPressureCallbackPeriod().
     * 
     * 
     * @return int
     */
    public function getAirPressureCallbackPeriod()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_AIR_PRESSURE_CALLBACK_PERIOD, $payload, 12);

        $payload = unpack('V1period', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'period');
    }

    /**
     * Sets the period with which the BrickletBarometer::CALLBACK_ALTITUDE callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * The BrickletBarometer::CALLBACK_ALTITUDE callback is only triggered if the altitude has changed since
     * the last triggering.
     * 
     * @param int $period
     * 
     * @return void
     */
    public function setAltitudeCallbackPeriod($period)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);

        $this->sendRequest(self::FUNCTION_SET_ALTITUDE_CALLBACK_PERIOD, $payload, 0);
    }

    /**
     * Returns the period as set by BrickletBarometer::setAltitudeCallbackPeriod().
     * 
     * 
     * @return int
     */
    public function getAltitudeCallbackPeriod()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ALTITUDE_CALLBACK_PERIOD, $payload, 12);

        $payload = unpack('V1period', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'period');
    }

    /**
     * Sets the thresholds for the BrickletBarometer::CALLBACK_AIR_PRESSURE_REACHED callback.
     * 
     * The following options are possible:
     * 
     * <code>
     *  "Option", "Description"
     * 
     *  "'x'",    "Callback is turned off"
     *  "'o'",    "Callback is triggered when the air pressure is *outside* the min and max values"
     *  "'i'",    "Callback is triggered when the air pressure is *inside* the min and max values"
     *  "'<'",    "Callback is triggered when the air pressure is smaller than the min value (max is ignored)"
     *  "'>'",    "Callback is triggered when the air pressure is greater than the min value (max is ignored)"
     * </code>
     * 
     * @param string $option
     * @param int $min
     * @param int $max
     * 
     * @return void
     */
    public function setAirPressureCallbackThreshold($option, $min, $max)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('c', ord($option));
        $payload .= pack('V', $min);
        $payload .= pack('V', $max);

        $this->sendRequest(self::FUNCTION_SET_AIR_PRESSURE_CALLBACK_THRESHOLD, $payload, 0);
    }

    /**
     * Returns the threshold as set by BrickletBarometer::setAirPressureCallbackThreshold().
     * 
     * 
     * @return array
     */
    public function getAirPressureCallbackThreshold()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_AIR_PRESSURE_CALLBACK_THRESHOLD, $payload, 17);

        $payload = unpack('c1option/V1min/V1max', $data);

        $ret['option'] = chr($payload['option']);
        $ret['min'] = IPConnection::fixUnpackedInt32($payload, 'min');
        $ret['max'] = IPConnection::fixUnpackedInt32($payload, 'max');

        return $ret;
    }

    /**
     * Sets the thresholds for the BrickletBarometer::CALLBACK_ALTITUDE_REACHED callback.
     * 
     * The following options are possible:
     * 
     * <code>
     *  "Option", "Description"
     * 
     *  "'x'",    "Callback is turned off"
     *  "'o'",    "Callback is triggered when the altitude is *outside* the min and max values"
     *  "'i'",    "Callback is triggered when the altitude is *inside* the min and max values"
     *  "'<'",    "Callback is triggered when the altitude is smaller than the min value (max is ignored)"
     *  "'>'",    "Callback is triggered when the altitude is greater than the min value (max is ignored)"
     * </code>
     * 
     * @param string $option
     * @param int $min
     * @param int $max
     * 
     * @return void
     */
    public function setAltitudeCallbackThreshold($option, $min, $max)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('c', ord($option));
        $payload .= pack('V', $min);
        $payload .= pack('V', $max);

        $this->sendRequest(self::FUNCTION_SET_ALTITUDE_CALLBACK_THRESHOLD, $payload, 0);
    }

    /**
     * Returns the threshold as set by BrickletBarometer::setAltitudeCallbackThreshold().
     * 
     * 
     * @return array
     */
    public function getAltitudeCallbackThreshold()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ALTITUDE_CALLBACK_THRESHOLD, $payload, 17);

        $payload = unpack('c1option/V1min/V1max', $data);

        $ret['option'] = chr($payload['option']);
        $ret['min'] = IPConnection::fixUnpackedInt32($payload, 'min');
        $ret['max'] = IPConnection::fixUnpackedInt32($payload, 'max');

        return $ret;
    }

    /**
     * Sets the period with which the threshold callbacks
     * 
     * * BrickletBarometer::CALLBACK_AIR_PRESSURE_REACHED,
     * * BrickletBarometer::CALLBACK_ALTITUDE_REACHED
     * 
     * are triggered, if the thresholds
     * 
     * * BrickletBarometer::setAirPressureCallbackThreshold(),
     * * BrickletBarometer::setAltitudeCallbackThreshold()
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
     * Returns the debounce period as set by BrickletBarometer::setDebouncePeriod().
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
     * Sets the reference air pressure for the altitude calculation.
     * Setting the reference to the current air pressure results in a calculated
     * altitude of 0cm. Passing 0 is a shortcut for passing the current air pressure as
     * reference.
     * 
     * Well known reference values are the Q codes
     * `QNH <https://en.wikipedia.org/wiki/QNH>`__ and
     * `QFE <https://en.wikipedia.org/wiki/Mean_sea_level_pressure#Mean_sea_level_pressure>`__
     * used in aviation.
     * 
     * @param int $air_pressure
     * 
     * @return void
     */
    public function setReferenceAirPressure($air_pressure)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $air_pressure);

        $this->sendRequest(self::FUNCTION_SET_REFERENCE_AIR_PRESSURE, $payload, 0);
    }

    /**
     * Returns the temperature of the air pressure sensor.
     * 
     * This temperature is used internally for temperature compensation of the air
     * pressure measurement. It is not as accurate as the temperature measured by the
     * :ref:`temperature_bricklet` or the :ref:`temperature_ir_bricklet`.
     * 
     * 
     * @return int
     */
    public function getChipTemperature()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_CHIP_TEMPERATURE, $payload, 10);

        $payload = unpack('v1temperature', $data);

        return IPConnection::fixUnpackedInt16($payload, 'temperature');
    }

    /**
     * Returns the reference air pressure as set by BrickletBarometer::setReferenceAirPressure().
     * 
     * 
     * @return int
     */
    public function getReferenceAirPressure()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_REFERENCE_AIR_PRESSURE, $payload, 12);

        $payload = unpack('V1air_pressure', $data);

        return IPConnection::fixUnpackedInt32($payload, 'air_pressure');
    }

    /**
     * Sets the different averaging parameters. It is possible to set
     * the length of a normal averaging for the temperature and pressure,
     * as well as an additional length of a
     * `moving average <https://en.wikipedia.org/wiki/Moving_average>`__
     * for the pressure. The moving average is calculated from the normal
     * averages.  There is no moving average for the temperature.
     * 
     * Setting the all three parameters to 0 will turn the averaging
     * completely off. If the averaging is off, there is lots of noise
     * on the data, but the data is without delay. Thus we recommend
     * to turn the averaging off if the Barometer Bricklet data is
     * to be used for sensor fusion with other sensors.
     * 
     * .. versionadded:: 2.0.1$nbsp;(Plugin)
     * 
     * @param int $moving_average_pressure
     * @param int $average_pressure
     * @param int $average_temperature
     * 
     * @return void
     */
    public function setAveraging($moving_average_pressure, $average_pressure, $average_temperature)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $moving_average_pressure);
        $payload .= pack('C', $average_pressure);
        $payload .= pack('C', $average_temperature);

        $this->sendRequest(self::FUNCTION_SET_AVERAGING, $payload, 0);
    }

    /**
     * Returns the averaging configuration as set by BrickletBarometer::setAveraging().
     * 
     * .. versionadded:: 2.0.1$nbsp;(Plugin)
     * 
     * 
     * @return array
     */
    public function getAveraging()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_AVERAGING, $payload, 11);

        $payload = unpack('C1moving_average_pressure/C1average_pressure/C1average_temperature', $data);

        $ret['moving_average_pressure'] = $payload['moving_average_pressure'];
        $ret['average_pressure'] = $payload['average_pressure'];
        $ret['average_temperature'] = $payload['average_temperature'];

        return $ret;
    }

    /**
     * Sets the I2C mode. Possible modes are:
     * 
     * * 0: Fast (400kHz)
     * * 1: Slow (100kHz)
     * 
     * If you have problems with obvious outliers in the
     * Barometer Bricklet measurements, they may be caused by EMI issues.
     * In this case it may be helpful to lower the I2C speed.
     * 
     * It is however not recommended to lower the I2C speed in applications where
     * a high throughput needs to be achieved.
     * 
     * .. versionadded:: 2.0.3$nbsp;(Plugin)
     * 
     * @param int $mode
     * 
     * @return void
     */
    public function setI2CMode($mode)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $mode);

        $this->sendRequest(self::FUNCTION_SET_I2C_MODE, $payload, 0);
    }

    /**
     * Returns the I2C mode as set by BrickletBarometer::setI2CMode().
     * 
     * .. versionadded:: 2.0.3$nbsp;(Plugin)
     * 
     * 
     * @return int
     */
    public function getI2CMode()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_I2C_MODE, $payload, 9);

        $payload = unpack('C1mode', $data);

        return $payload['mode'];
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
    public function callbackWrapperAirPressure($data)
    {
        $payload = unpack('V1air_pressure', $data);
        $payload['air_pressure'] = IPConnection::fixUnpackedInt32($payload, 'air_pressure');

        if (array_key_exists(self::CALLBACK_AIR_PRESSURE, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_AIR_PRESSURE];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_AIR_PRESSURE];

            call_user_func($function, $payload['air_pressure'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperAltitude($data)
    {
        $payload = unpack('V1altitude', $data);
        $payload['altitude'] = IPConnection::fixUnpackedInt32($payload, 'altitude');

        if (array_key_exists(self::CALLBACK_ALTITUDE, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_ALTITUDE];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_ALTITUDE];

            call_user_func($function, $payload['altitude'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperAirPressureReached($data)
    {
        $payload = unpack('V1air_pressure', $data);
        $payload['air_pressure'] = IPConnection::fixUnpackedInt32($payload, 'air_pressure');

        if (array_key_exists(self::CALLBACK_AIR_PRESSURE_REACHED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_AIR_PRESSURE_REACHED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_AIR_PRESSURE_REACHED];

            call_user_func($function, $payload['air_pressure'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperAltitudeReached($data)
    {
        $payload = unpack('V1altitude', $data);
        $payload['altitude'] = IPConnection::fixUnpackedInt32($payload, 'altitude');

        if (array_key_exists(self::CALLBACK_ALTITUDE_REACHED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_ALTITUDE_REACHED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_ALTITUDE_REACHED];

            call_user_func($function, $payload['altitude'], $user_data);
        }
    }
}

?>
