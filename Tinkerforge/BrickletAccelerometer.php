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
 * Measures acceleration in three axis
 */
class BrickletAccelerometer extends Device
{

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletAccelerometer::setAccelerationCallbackPeriod(). The parameters are the
     * X, Y and Z acceleration. The range is
     * configured with BrickletAccelerometer::setConfiguration().
     * 
     * The BrickletAccelerometer::CALLBACK_ACCELERATION callback is only triggered if the acceleration has
     * changed since the last triggering.
     */
    const CALLBACK_ACCELERATION = 14;

    /**
     * This callback is triggered when the threshold as set by
     * BrickletAccelerometer::setAccelerationCallbackThreshold() is reached.
     * The parameters are the X, Y and Z acceleration. The range is
     * configured with BrickletAccelerometer::setConfiguration().
     * 
     * If the threshold keeps being reached, the callback is triggered periodically
     * with the period as set by BrickletAccelerometer::setDebouncePeriod().
     */
    const CALLBACK_ACCELERATION_REACHED = 15;


    /**
     * @internal
     */
    const FUNCTION_GET_ACCELERATION = 1;

    /**
     * @internal
     */
    const FUNCTION_SET_ACCELERATION_CALLBACK_PERIOD = 2;

    /**
     * @internal
     */
    const FUNCTION_GET_ACCELERATION_CALLBACK_PERIOD = 3;

    /**
     * @internal
     */
    const FUNCTION_SET_ACCELERATION_CALLBACK_THRESHOLD = 4;

    /**
     * @internal
     */
    const FUNCTION_GET_ACCELERATION_CALLBACK_THRESHOLD = 5;

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
    const FUNCTION_GET_TEMPERATURE = 8;

    /**
     * @internal
     */
    const FUNCTION_SET_CONFIGURATION = 9;

    /**
     * @internal
     */
    const FUNCTION_GET_CONFIGURATION = 10;

    /**
     * @internal
     */
    const FUNCTION_LED_ON = 11;

    /**
     * @internal
     */
    const FUNCTION_LED_OFF = 12;

    /**
     * @internal
     */
    const FUNCTION_IS_LED_ON = 13;

    /**
     * @internal
     */
    const FUNCTION_GET_IDENTITY = 255;

    const THRESHOLD_OPTION_OFF = 'x';
    const THRESHOLD_OPTION_OUTSIDE = 'o';
    const THRESHOLD_OPTION_INSIDE = 'i';
    const THRESHOLD_OPTION_SMALLER = '<';
    const THRESHOLD_OPTION_GREATER = '>';
    const DATA_RATE_OFF = 0;
    const DATA_RATE_3HZ = 1;
    const DATA_RATE_6HZ = 2;
    const DATA_RATE_12HZ = 3;
    const DATA_RATE_25HZ = 4;
    const DATA_RATE_50HZ = 5;
    const DATA_RATE_100HZ = 6;
    const DATA_RATE_400HZ = 7;
    const DATA_RATE_800HZ = 8;
    const DATA_RATE_1600HZ = 9;
    const FULL_SCALE_2G = 0;
    const FULL_SCALE_4G = 1;
    const FULL_SCALE_6G = 2;
    const FULL_SCALE_8G = 3;
    const FULL_SCALE_16G = 4;
    const FILTER_BANDWIDTH_800HZ = 0;
    const FILTER_BANDWIDTH_400HZ = 1;
    const FILTER_BANDWIDTH_200HZ = 2;
    const FILTER_BANDWIDTH_50HZ = 3;

    const DEVICE_IDENTIFIER = 250;

    const DEVICE_DISPLAY_NAME = 'Accelerometer Bricklet';

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

        $this->response_expected[self::FUNCTION_GET_ACCELERATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ACCELERATION_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_ACCELERATION_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ACCELERATION_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_ACCELERATION_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_DEBOUNCE_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_DEBOUNCE_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_TEMPERATURE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_CONFIGURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_LED_ON] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_LED_OFF] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_IS_LED_ON] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_IDENTITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;

        $this->callback_wrappers[self::CALLBACK_ACCELERATION] = array(14, 'callbackWrapperAcceleration');
        $this->callback_wrappers[self::CALLBACK_ACCELERATION_REACHED] = array(14, 'callbackWrapperAccelerationReached');

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
     * Returns the acceleration in x, y and z direction. The values
     * are given in gₙ/1000 (1gₙ = 9.80665m/s²). The range is
     * configured with BrickletAccelerometer::setConfiguration().
     * 
     * If you want to get the acceleration periodically, it is recommended
     * to use the BrickletAccelerometer::CALLBACK_ACCELERATION callback and set the period with
     * BrickletAccelerometer::setAccelerationCallbackPeriod().
     * 
     * 
     * @return array
     */
    public function getAcceleration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ACCELERATION, $payload, 14);

        $payload = unpack('v1x/v1y/v1z', $data);

        $ret['x'] = IPConnection::fixUnpackedInt16($payload, 'x');
        $ret['y'] = IPConnection::fixUnpackedInt16($payload, 'y');
        $ret['z'] = IPConnection::fixUnpackedInt16($payload, 'z');

        return $ret;
    }

    /**
     * Sets the period with which the BrickletAccelerometer::CALLBACK_ACCELERATION callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * The BrickletAccelerometer::CALLBACK_ACCELERATION callback is only triggered if the acceleration has
     * changed since the last triggering.
     * 
     * @param int $period
     * 
     * @return void
     */
    public function setAccelerationCallbackPeriod($period)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);

        $this->sendRequest(self::FUNCTION_SET_ACCELERATION_CALLBACK_PERIOD, $payload, 0);
    }

    /**
     * Returns the period as set by BrickletAccelerometer::setAccelerationCallbackPeriod().
     * 
     * 
     * @return int
     */
    public function getAccelerationCallbackPeriod()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ACCELERATION_CALLBACK_PERIOD, $payload, 12);

        $payload = unpack('V1period', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'period');
    }

    /**
     * Sets the thresholds for the BrickletAccelerometer::CALLBACK_ACCELERATION_REACHED callback.
     * 
     * The following options are possible:
     * 
     * <code>
     *  "Option", "Description"
     * 
     *  "'x'",    "Callback is turned off"
     *  "'o'",    "Callback is triggered when the acceleration is *outside* the min and max values"
     *  "'i'",    "Callback is triggered when the acceleration is *inside* the min and max values"
     *  "'<'",    "Callback is triggered when the acceleration is smaller than the min value (max is ignored)"
     *  "'>'",    "Callback is triggered when the acceleration is greater than the min value (max is ignored)"
     * </code>
     * 
     * @param string $option
     * @param int $min_x
     * @param int $max_x
     * @param int $min_y
     * @param int $max_y
     * @param int $min_z
     * @param int $max_z
     * 
     * @return void
     */
    public function setAccelerationCallbackThreshold($option, $min_x, $max_x, $min_y, $max_y, $min_z, $max_z)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('c', ord($option));
        $payload .= pack('v', $min_x);
        $payload .= pack('v', $max_x);
        $payload .= pack('v', $min_y);
        $payload .= pack('v', $max_y);
        $payload .= pack('v', $min_z);
        $payload .= pack('v', $max_z);

        $this->sendRequest(self::FUNCTION_SET_ACCELERATION_CALLBACK_THRESHOLD, $payload, 0);
    }

    /**
     * Returns the threshold as set by BrickletAccelerometer::setAccelerationCallbackThreshold().
     * 
     * 
     * @return array
     */
    public function getAccelerationCallbackThreshold()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ACCELERATION_CALLBACK_THRESHOLD, $payload, 21);

        $payload = unpack('c1option/v1min_x/v1max_x/v1min_y/v1max_y/v1min_z/v1max_z', $data);

        $ret['option'] = chr($payload['option']);
        $ret['min_x'] = IPConnection::fixUnpackedInt16($payload, 'min_x');
        $ret['max_x'] = IPConnection::fixUnpackedInt16($payload, 'max_x');
        $ret['min_y'] = IPConnection::fixUnpackedInt16($payload, 'min_y');
        $ret['max_y'] = IPConnection::fixUnpackedInt16($payload, 'max_y');
        $ret['min_z'] = IPConnection::fixUnpackedInt16($payload, 'min_z');
        $ret['max_z'] = IPConnection::fixUnpackedInt16($payload, 'max_z');

        return $ret;
    }

    /**
     * Sets the period with which the threshold callback
     * 
     * * BrickletAccelerometer::CALLBACK_ACCELERATION_REACHED
     * 
     * is triggered, if the threshold
     * 
     * * BrickletAccelerometer::setAccelerationCallbackThreshold()
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
     * Returns the debounce period as set by BrickletAccelerometer::setDebouncePeriod().
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
     * Returns the temperature of the accelerometer.
     * 
     * 
     * @return int
     */
    public function getTemperature()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_TEMPERATURE, $payload, 10);

        $payload = unpack('v1temperature', $data);

        return IPConnection::fixUnpackedInt16($payload, 'temperature');
    }

    /**
     * Configures the data rate, full scale range and filter bandwidth.
     * Possible values are:
     * 
     * * Data rate of 0Hz to 1600Hz.
     * * Full scale range of ±2gₙ up to ±16gₙ.
     * * Filter bandwidth between 50Hz and 800Hz.
     * 
     * Decreasing data rate or full scale range will also decrease the noise on
     * the data.
     * 
     * @param int $data_rate
     * @param int $full_scale
     * @param int $filter_bandwidth
     * 
     * @return void
     */
    public function setConfiguration($data_rate, $full_scale, $filter_bandwidth)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $data_rate);
        $payload .= pack('C', $full_scale);
        $payload .= pack('C', $filter_bandwidth);

        $this->sendRequest(self::FUNCTION_SET_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the configuration as set by BrickletAccelerometer::setConfiguration().
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

        $payload = unpack('C1data_rate/C1full_scale/C1filter_bandwidth', $data);

        $ret['data_rate'] = $payload['data_rate'];
        $ret['full_scale'] = $payload['full_scale'];
        $ret['filter_bandwidth'] = $payload['filter_bandwidth'];

        return $ret;
    }

    /**
     * Enables the LED on the Bricklet.
     * 
     * 
     * @return void
     */
    public function ledOn()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_LED_ON, $payload, 0);
    }

    /**
     * Disables the LED on the Bricklet.
     * 
     * 
     * @return void
     */
    public function ledOff()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_LED_OFF, $payload, 0);
    }

    /**
     * Returns *true* if the LED is enabled, *false* otherwise.
     * 
     * 
     * @return bool
     */
    public function isLEDOn()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_IS_LED_ON, $payload, 9);

        $payload = unpack('C1on', $data);

        return (bool)$payload['on'];
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
    public function callbackWrapperAcceleration($data)
    {
        $payload = unpack('v1x/v1y/v1z', $data);
        $payload['x'] = IPConnection::fixUnpackedInt16($payload, 'x');
        $payload['y'] = IPConnection::fixUnpackedInt16($payload, 'y');
        $payload['z'] = IPConnection::fixUnpackedInt16($payload, 'z');

        if (array_key_exists(self::CALLBACK_ACCELERATION, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_ACCELERATION];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_ACCELERATION];

            call_user_func($function, $payload['x'], $payload['y'], $payload['z'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperAccelerationReached($data)
    {
        $payload = unpack('v1x/v1y/v1z', $data);
        $payload['x'] = IPConnection::fixUnpackedInt16($payload, 'x');
        $payload['y'] = IPConnection::fixUnpackedInt16($payload, 'y');
        $payload['z'] = IPConnection::fixUnpackedInt16($payload, 'z');

        if (array_key_exists(self::CALLBACK_ACCELERATION_REACHED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_ACCELERATION_REACHED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_ACCELERATION_REACHED];

            call_user_func($function, $payload['x'], $payload['y'], $payload['z'], $user_data);
        }
    }
}

?>
