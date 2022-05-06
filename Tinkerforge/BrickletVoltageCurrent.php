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
 * Measures power, DC voltage and DC current up to 720W/36V/20A
 */
class BrickletVoltageCurrent extends Device
{

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletVoltageCurrent::setCurrentCallbackPeriod(). The parameter is the current of the
     * sensor.
     * 
     * The BrickletVoltageCurrent::CALLBACK_CURRENT callback is only triggered if the current has changed since
     * the last triggering.
     */
    const CALLBACK_CURRENT = 22;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletVoltageCurrent::setVoltageCallbackPeriod(). The parameter is the voltage of
     * the sensor.
     * 
     * The BrickletVoltageCurrent::CALLBACK_VOLTAGE callback is only triggered if the voltage has changed since
     * the last triggering.
     */
    const CALLBACK_VOLTAGE = 23;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletVoltageCurrent::setPowerCallbackPeriod(). The parameter is the power of the
     * sensor.
     * 
     * The BrickletVoltageCurrent::CALLBACK_POWER callback is only triggered if the power has changed since the
     * last triggering.
     */
    const CALLBACK_POWER = 24;

    /**
     * This callback is triggered when the threshold as set by
     * BrickletVoltageCurrent::setCurrentCallbackThreshold() is reached.
     * The parameter is the current of the sensor.
     * 
     * If the threshold keeps being reached, the callback is triggered periodically
     * with the period as set by BrickletVoltageCurrent::setDebouncePeriod().
     */
    const CALLBACK_CURRENT_REACHED = 25;

    /**
     * This callback is triggered when the threshold as set by
     * BrickletVoltageCurrent::setVoltageCallbackThreshold() is reached.
     * The parameter is the voltage of the sensor.
     * 
     * If the threshold keeps being reached, the callback is triggered periodically
     * with the period as set by BrickletVoltageCurrent::setDebouncePeriod().
     */
    const CALLBACK_VOLTAGE_REACHED = 26;

    /**
     * This callback is triggered when the threshold as set by
     * BrickletVoltageCurrent::setPowerCallbackThreshold() is reached.
     * The parameter is the power of the sensor.
     * 
     * If the threshold keeps being reached, the callback is triggered periodically
     * with the period as set by BrickletVoltageCurrent::setDebouncePeriod().
     */
    const CALLBACK_POWER_REACHED = 27;


    /**
     * @internal
     */
    const FUNCTION_GET_CURRENT = 1;

    /**
     * @internal
     */
    const FUNCTION_GET_VOLTAGE = 2;

    /**
     * @internal
     */
    const FUNCTION_GET_POWER = 3;

    /**
     * @internal
     */
    const FUNCTION_SET_CONFIGURATION = 4;

    /**
     * @internal
     */
    const FUNCTION_GET_CONFIGURATION = 5;

    /**
     * @internal
     */
    const FUNCTION_SET_CALIBRATION = 6;

    /**
     * @internal
     */
    const FUNCTION_GET_CALIBRATION = 7;

    /**
     * @internal
     */
    const FUNCTION_SET_CURRENT_CALLBACK_PERIOD = 8;

    /**
     * @internal
     */
    const FUNCTION_GET_CURRENT_CALLBACK_PERIOD = 9;

    /**
     * @internal
     */
    const FUNCTION_SET_VOLTAGE_CALLBACK_PERIOD = 10;

    /**
     * @internal
     */
    const FUNCTION_GET_VOLTAGE_CALLBACK_PERIOD = 11;

    /**
     * @internal
     */
    const FUNCTION_SET_POWER_CALLBACK_PERIOD = 12;

    /**
     * @internal
     */
    const FUNCTION_GET_POWER_CALLBACK_PERIOD = 13;

    /**
     * @internal
     */
    const FUNCTION_SET_CURRENT_CALLBACK_THRESHOLD = 14;

    /**
     * @internal
     */
    const FUNCTION_GET_CURRENT_CALLBACK_THRESHOLD = 15;

    /**
     * @internal
     */
    const FUNCTION_SET_VOLTAGE_CALLBACK_THRESHOLD = 16;

    /**
     * @internal
     */
    const FUNCTION_GET_VOLTAGE_CALLBACK_THRESHOLD = 17;

    /**
     * @internal
     */
    const FUNCTION_SET_POWER_CALLBACK_THRESHOLD = 18;

    /**
     * @internal
     */
    const FUNCTION_GET_POWER_CALLBACK_THRESHOLD = 19;

    /**
     * @internal
     */
    const FUNCTION_SET_DEBOUNCE_PERIOD = 20;

    /**
     * @internal
     */
    const FUNCTION_GET_DEBOUNCE_PERIOD = 21;

    /**
     * @internal
     */
    const FUNCTION_GET_IDENTITY = 255;

    const AVERAGING_1 = 0;
    const AVERAGING_4 = 1;
    const AVERAGING_16 = 2;
    const AVERAGING_64 = 3;
    const AVERAGING_128 = 4;
    const AVERAGING_256 = 5;
    const AVERAGING_512 = 6;
    const AVERAGING_1024 = 7;
    const THRESHOLD_OPTION_OFF = 'x';
    const THRESHOLD_OPTION_OUTSIDE = 'o';
    const THRESHOLD_OPTION_INSIDE = 'i';
    const THRESHOLD_OPTION_SMALLER = '<';
    const THRESHOLD_OPTION_GREATER = '>';
    const CONVERSION_TIME_140US = 0;
    const CONVERSION_TIME_204US = 1;
    const CONVERSION_TIME_332US = 2;
    const CONVERSION_TIME_588US = 3;
    const CONVERSION_TIME_1_1MS = 4;
    const CONVERSION_TIME_2_116MS = 5;
    const CONVERSION_TIME_4_156MS = 6;
    const CONVERSION_TIME_8_244MS = 7;

    const DEVICE_IDENTIFIER = 227;

    const DEVICE_DISPLAY_NAME = 'Voltage/Current Bricklet';

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
        $this->response_expected[self::FUNCTION_GET_VOLTAGE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_POWER] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_CONFIGURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_CALIBRATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_CALIBRATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_CURRENT_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_CURRENT_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_VOLTAGE_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_VOLTAGE_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_POWER_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_POWER_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_CURRENT_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_CURRENT_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_VOLTAGE_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_VOLTAGE_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_POWER_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_POWER_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_DEBOUNCE_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_DEBOUNCE_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_IDENTITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;

        $this->callback_wrappers[self::CALLBACK_CURRENT] = array(12, 'callbackWrapperCurrent');
        $this->callback_wrappers[self::CALLBACK_VOLTAGE] = array(12, 'callbackWrapperVoltage');
        $this->callback_wrappers[self::CALLBACK_POWER] = array(12, 'callbackWrapperPower');
        $this->callback_wrappers[self::CALLBACK_CURRENT_REACHED] = array(12, 'callbackWrapperCurrentReached');
        $this->callback_wrappers[self::CALLBACK_VOLTAGE_REACHED] = array(12, 'callbackWrapperVoltageReached');
        $this->callback_wrappers[self::CALLBACK_POWER_REACHED] = array(12, 'callbackWrapperPowerReached');

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
     * Returns the current.
     * 
     * If you want to get the current periodically, it is recommended to use the
     * BrickletVoltageCurrent::CALLBACK_CURRENT callback and set the period with
     * BrickletVoltageCurrent::setCurrentCallbackPeriod().
     * 
     * 
     * @return int
     */
    public function getCurrent()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_CURRENT, $payload, 12);

        $payload = unpack('V1current', $data);

        return IPConnection::fixUnpackedInt32($payload, 'current');
    }

    /**
     * Returns the voltage.
     * 
     * If you want to get the voltage periodically, it is recommended to use the
     * BrickletVoltageCurrent::CALLBACK_VOLTAGE callback and set the period with
     * BrickletVoltageCurrent::setVoltageCallbackPeriod().
     * 
     * 
     * @return int
     */
    public function getVoltage()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_VOLTAGE, $payload, 12);

        $payload = unpack('V1voltage', $data);

        return IPConnection::fixUnpackedInt32($payload, 'voltage');
    }

    /**
     * Returns the power.
     * 
     * If you want to get the power periodically, it is recommended to use the
     * BrickletVoltageCurrent::CALLBACK_POWER callback and set the period with
     * BrickletVoltageCurrent::setPowerCallbackPeriod().
     * 
     * 
     * @return int
     */
    public function getPower()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_POWER, $payload, 12);

        $payload = unpack('V1power', $data);

        return IPConnection::fixUnpackedInt32($payload, 'power');
    }

    /**
     * Sets the configuration of the Voltage/Current Bricklet. It is
     * possible to configure number of averages as well as
     * voltage and current conversion time.
     * 
     * @param int $averaging
     * @param int $voltage_conversion_time
     * @param int $current_conversion_time
     * 
     * @return void
     */
    public function setConfiguration($averaging, $voltage_conversion_time, $current_conversion_time)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $averaging);
        $payload .= pack('C', $voltage_conversion_time);
        $payload .= pack('C', $current_conversion_time);

        $this->sendRequest(self::FUNCTION_SET_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the configuration as set by BrickletVoltageCurrent::setConfiguration().
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

        $payload = unpack('C1averaging/C1voltage_conversion_time/C1current_conversion_time', $data);

        $ret['averaging'] = $payload['averaging'];
        $ret['voltage_conversion_time'] = $payload['voltage_conversion_time'];
        $ret['current_conversion_time'] = $payload['current_conversion_time'];

        return $ret;
    }

    /**
     * Since the shunt resistor that is used to measure the current is not
     * perfectly precise, it needs to be calibrated by a multiplier and
     * divisor if a very precise reading is needed.
     * 
     * For example, if you are expecting a measurement of 1000mA and you
     * are measuring 1023mA, you can calibrate the Voltage/Current Bricklet
     * by setting the multiplier to 1000 and the divisor to 1023.
     * 
     * @param int $gain_multiplier
     * @param int $gain_divisor
     * 
     * @return void
     */
    public function setCalibration($gain_multiplier, $gain_divisor)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $gain_multiplier);
        $payload .= pack('v', $gain_divisor);

        $this->sendRequest(self::FUNCTION_SET_CALIBRATION, $payload, 0);
    }

    /**
     * Returns the calibration as set by BrickletVoltageCurrent::setCalibration().
     * 
     * 
     * @return array
     */
    public function getCalibration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_CALIBRATION, $payload, 12);

        $payload = unpack('v1gain_multiplier/v1gain_divisor', $data);

        $ret['gain_multiplier'] = $payload['gain_multiplier'];
        $ret['gain_divisor'] = $payload['gain_divisor'];

        return $ret;
    }

    /**
     * Sets the period with which the BrickletVoltageCurrent::CALLBACK_CURRENT callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * The BrickletVoltageCurrent::CALLBACK_CURRENT callback is only triggered if the current has changed since
     * the last triggering.
     * 
     * @param int $period
     * 
     * @return void
     */
    public function setCurrentCallbackPeriod($period)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);

        $this->sendRequest(self::FUNCTION_SET_CURRENT_CALLBACK_PERIOD, $payload, 0);
    }

    /**
     * Returns the period as set by BrickletVoltageCurrent::setCurrentCallbackPeriod().
     * 
     * 
     * @return int
     */
    public function getCurrentCallbackPeriod()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_CURRENT_CALLBACK_PERIOD, $payload, 12);

        $payload = unpack('V1period', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'period');
    }

    /**
     * Sets the period with which the BrickletVoltageCurrent::CALLBACK_VOLTAGE callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * The BrickletVoltageCurrent::CALLBACK_VOLTAGE callback is only triggered if the voltage has changed since
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
     * Returns the period as set by BrickletVoltageCurrent::setVoltageCallbackPeriod().
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
     * Sets the period with which the BrickletVoltageCurrent::CALLBACK_POWER callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * The BrickletVoltageCurrent::CALLBACK_POWER callback is only triggered if the power has changed since the
     * last triggering.
     * 
     * @param int $period
     * 
     * @return void
     */
    public function setPowerCallbackPeriod($period)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);

        $this->sendRequest(self::FUNCTION_SET_POWER_CALLBACK_PERIOD, $payload, 0);
    }

    /**
     * Returns the period as set by BrickletVoltageCurrent::getPowerCallbackPeriod().
     * 
     * 
     * @return int
     */
    public function getPowerCallbackPeriod()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_POWER_CALLBACK_PERIOD, $payload, 12);

        $payload = unpack('V1period', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'period');
    }

    /**
     * Sets the thresholds for the BrickletVoltageCurrent::CALLBACK_CURRENT_REACHED callback.
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
     * @param string $option
     * @param int $min
     * @param int $max
     * 
     * @return void
     */
    public function setCurrentCallbackThreshold($option, $min, $max)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('c', ord($option));
        $payload .= pack('V', $min);
        $payload .= pack('V', $max);

        $this->sendRequest(self::FUNCTION_SET_CURRENT_CALLBACK_THRESHOLD, $payload, 0);
    }

    /**
     * Returns the threshold as set by BrickletVoltageCurrent::setCurrentCallbackThreshold().
     * 
     * 
     * @return array
     */
    public function getCurrentCallbackThreshold()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_CURRENT_CALLBACK_THRESHOLD, $payload, 17);

        $payload = unpack('c1option/V1min/V1max', $data);

        $ret['option'] = chr($payload['option']);
        $ret['min'] = IPConnection::fixUnpackedInt32($payload, 'min');
        $ret['max'] = IPConnection::fixUnpackedInt32($payload, 'max');

        return $ret;
    }

    /**
     * Sets the thresholds for the BrickletVoltageCurrent::CALLBACK_VOLTAGE_REACHED callback.
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
        $payload .= pack('V', $min);
        $payload .= pack('V', $max);

        $this->sendRequest(self::FUNCTION_SET_VOLTAGE_CALLBACK_THRESHOLD, $payload, 0);
    }

    /**
     * Returns the threshold as set by BrickletVoltageCurrent::setVoltageCallbackThreshold().
     * 
     * 
     * @return array
     */
    public function getVoltageCallbackThreshold()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_VOLTAGE_CALLBACK_THRESHOLD, $payload, 17);

        $payload = unpack('c1option/V1min/V1max', $data);

        $ret['option'] = chr($payload['option']);
        $ret['min'] = IPConnection::fixUnpackedInt32($payload, 'min');
        $ret['max'] = IPConnection::fixUnpackedInt32($payload, 'max');

        return $ret;
    }

    /**
     * Sets the thresholds for the BrickletVoltageCurrent::CALLBACK_POWER_REACHED callback.
     * 
     * The following options are possible:
     * 
     * <code>
     *  "Option", "Description"
     * 
     *  "'x'",    "Callback is turned off"
     *  "'o'",    "Callback is triggered when the power is *outside* the min and max values"
     *  "'i'",    "Callback is triggered when the power is *inside* the min and max values"
     *  "'<'",    "Callback is triggered when the power is smaller than the min value (max is ignored)"
     *  "'>'",    "Callback is triggered when the power is greater than the min value (max is ignored)"
     * </code>
     * 
     * @param string $option
     * @param int $min
     * @param int $max
     * 
     * @return void
     */
    public function setPowerCallbackThreshold($option, $min, $max)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('c', ord($option));
        $payload .= pack('V', $min);
        $payload .= pack('V', $max);

        $this->sendRequest(self::FUNCTION_SET_POWER_CALLBACK_THRESHOLD, $payload, 0);
    }

    /**
     * Returns the threshold as set by BrickletVoltageCurrent::setPowerCallbackThreshold().
     * 
     * 
     * @return array
     */
    public function getPowerCallbackThreshold()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_POWER_CALLBACK_THRESHOLD, $payload, 17);

        $payload = unpack('c1option/V1min/V1max', $data);

        $ret['option'] = chr($payload['option']);
        $ret['min'] = IPConnection::fixUnpackedInt32($payload, 'min');
        $ret['max'] = IPConnection::fixUnpackedInt32($payload, 'max');

        return $ret;
    }

    /**
     * Sets the period with which the threshold callbacks
     * 
     * * BrickletVoltageCurrent::CALLBACK_CURRENT_REACHED,
     * * BrickletVoltageCurrent::CALLBACK_VOLTAGE_REACHED,
     * * BrickletVoltageCurrent::CALLBACK_POWER_REACHED
     * 
     * are triggered, if the thresholds
     * 
     * * BrickletVoltageCurrent::setCurrentCallbackThreshold(),
     * * BrickletVoltageCurrent::setVoltageCallbackThreshold(),
     * * BrickletVoltageCurrent::setPowerCallbackThreshold()
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
     * Returns the debounce period as set by BrickletVoltageCurrent::setDebouncePeriod().
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
        $payload = unpack('V1current', $data);
        $payload['current'] = IPConnection::fixUnpackedInt32($payload, 'current');

        if (array_key_exists(self::CALLBACK_CURRENT, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_CURRENT];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_CURRENT];

            call_user_func($function, $payload['current'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperVoltage($data)
    {
        $payload = unpack('V1voltage', $data);
        $payload['voltage'] = IPConnection::fixUnpackedInt32($payload, 'voltage');

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
    public function callbackWrapperPower($data)
    {
        $payload = unpack('V1power', $data);
        $payload['power'] = IPConnection::fixUnpackedInt32($payload, 'power');

        if (array_key_exists(self::CALLBACK_POWER, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_POWER];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_POWER];

            call_user_func($function, $payload['power'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperCurrentReached($data)
    {
        $payload = unpack('V1current', $data);
        $payload['current'] = IPConnection::fixUnpackedInt32($payload, 'current');

        if (array_key_exists(self::CALLBACK_CURRENT_REACHED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_CURRENT_REACHED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_CURRENT_REACHED];

            call_user_func($function, $payload['current'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperVoltageReached($data)
    {
        $payload = unpack('V1voltage', $data);
        $payload['voltage'] = IPConnection::fixUnpackedInt32($payload, 'voltage');

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
    public function callbackWrapperPowerReached($data)
    {
        $payload = unpack('V1power', $data);
        $payload['power'] = IPConnection::fixUnpackedInt32($payload, 'power');

        if (array_key_exists(self::CALLBACK_POWER_REACHED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_POWER_REACHED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_POWER_REACHED];

            call_user_func($function, $payload['power'], $user_data);
        }
    }
}

?>
