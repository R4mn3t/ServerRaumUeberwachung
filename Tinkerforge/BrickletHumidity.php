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
 * Measures relative humidity
 */
class BrickletHumidity extends Device
{

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletHumidity::setHumidityCallbackPeriod(). The parameter is the humidity of
     * the sensor.
     * 
     * The BrickletHumidity::CALLBACK_HUMIDITY callback is only triggered if the humidity has changed since
     * the last triggering.
     */
    const CALLBACK_HUMIDITY = 13;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletHumidity::setAnalogValueCallbackPeriod(). The parameter is the analog
     * value of the sensor.
     * 
     * The BrickletHumidity::CALLBACK_ANALOG_VALUE callback is only triggered if the humidity has changed
     * since the last triggering.
     */
    const CALLBACK_ANALOG_VALUE = 14;

    /**
     * This callback is triggered when the threshold as set by
     * BrickletHumidity::setHumidityCallbackThreshold() is reached.
     * The parameter is the humidity of the sensor.
     * 
     * If the threshold keeps being reached, the callback is triggered periodically
     * with the period as set by BrickletHumidity::setDebouncePeriod().
     */
    const CALLBACK_HUMIDITY_REACHED = 15;

    /**
     * This callback is triggered when the threshold as set by
     * BrickletHumidity::setAnalogValueCallbackThreshold() is reached.
     * The parameter is the analog value of the sensor.
     * 
     * If the threshold keeps being reached, the callback is triggered periodically
     * with the period as set by BrickletHumidity::setDebouncePeriod().
     */
    const CALLBACK_ANALOG_VALUE_REACHED = 16;


    /**
     * @internal
     */
    const FUNCTION_GET_HUMIDITY = 1;

    /**
     * @internal
     */
    const FUNCTION_GET_ANALOG_VALUE = 2;

    /**
     * @internal
     */
    const FUNCTION_SET_HUMIDITY_CALLBACK_PERIOD = 3;

    /**
     * @internal
     */
    const FUNCTION_GET_HUMIDITY_CALLBACK_PERIOD = 4;

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
    const FUNCTION_SET_HUMIDITY_CALLBACK_THRESHOLD = 7;

    /**
     * @internal
     */
    const FUNCTION_GET_HUMIDITY_CALLBACK_THRESHOLD = 8;

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
    const FUNCTION_GET_IDENTITY = 255;

    const THRESHOLD_OPTION_OFF = 'x';
    const THRESHOLD_OPTION_OUTSIDE = 'o';
    const THRESHOLD_OPTION_INSIDE = 'i';
    const THRESHOLD_OPTION_SMALLER = '<';
    const THRESHOLD_OPTION_GREATER = '>';

    const DEVICE_IDENTIFIER = 27;

    const DEVICE_DISPLAY_NAME = 'Humidity Bricklet';

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

        $this->response_expected[self::FUNCTION_GET_HUMIDITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_ANALOG_VALUE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_HUMIDITY_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_HUMIDITY_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ANALOG_VALUE_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_ANALOG_VALUE_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_HUMIDITY_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_HUMIDITY_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ANALOG_VALUE_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_ANALOG_VALUE_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_DEBOUNCE_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_DEBOUNCE_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_IDENTITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;

        $this->callback_wrappers[self::CALLBACK_HUMIDITY] = array(10, 'callbackWrapperHumidity');
        $this->callback_wrappers[self::CALLBACK_ANALOG_VALUE] = array(10, 'callbackWrapperAnalogValue');
        $this->callback_wrappers[self::CALLBACK_HUMIDITY_REACHED] = array(10, 'callbackWrapperHumidityReached');
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
     * Returns the humidity of the sensor.
     * 
     * If you want to get the humidity periodically, it is recommended to use the
     * BrickletHumidity::CALLBACK_HUMIDITY callback and set the period with
     * BrickletHumidity::setHumidityCallbackPeriod().
     * 
     * 
     * @return int
     */
    public function getHumidity()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_HUMIDITY, $payload, 10);

        $payload = unpack('v1humidity', $data);

        return $payload['humidity'];
    }

    /**
     * Returns the value as read by a 12-bit analog-to-digital converter.
     * 
     * <note>
     *  The value returned by BrickletHumidity::getHumidity() is averaged over several samples
     *  to yield less noise, while BrickletHumidity::getAnalogValue() gives back raw
     *  unfiltered analog values. The returned humidity value is calibrated for
     *  room temperatures, if you use the sensor in extreme cold or extreme
     *  warm environments, you might want to calculate the humidity from
     *  the analog value yourself. See the `HIH 5030 datasheet
     *  <https://github.com/Tinkerforge/humidity-bricklet/raw/master/datasheets/hih-5030.pdf>`__.
     * </note>
     * 
     * If you want the analog value periodically, it is recommended to use the
     * BrickletHumidity::CALLBACK_ANALOG_VALUE callback and set the period with
     * BrickletHumidity::setAnalogValueCallbackPeriod().
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
     * Sets the period with which the BrickletHumidity::CALLBACK_HUMIDITY callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * The BrickletHumidity::CALLBACK_HUMIDITY callback is only triggered if the humidity has changed
     * since the last triggering.
     * 
     * @param int $period
     * 
     * @return void
     */
    public function setHumidityCallbackPeriod($period)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);

        $this->sendRequest(self::FUNCTION_SET_HUMIDITY_CALLBACK_PERIOD, $payload, 0);
    }

    /**
     * Returns the period as set by BrickletHumidity::setHumidityCallbackPeriod().
     * 
     * 
     * @return int
     */
    public function getHumidityCallbackPeriod()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_HUMIDITY_CALLBACK_PERIOD, $payload, 12);

        $payload = unpack('V1period', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'period');
    }

    /**
     * Sets the period with which the BrickletHumidity::CALLBACK_ANALOG_VALUE callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * The BrickletHumidity::CALLBACK_ANALOG_VALUE callback is only triggered if the analog value has
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
     * Returns the period as set by BrickletHumidity::setAnalogValueCallbackPeriod().
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
     * Sets the thresholds for the BrickletHumidity::CALLBACK_HUMIDITY_REACHED callback.
     * 
     * The following options are possible:
     * 
     * <code>
     *  "Option", "Description"
     * 
     *  "'x'",    "Callback is turned off"
     *  "'o'",    "Callback is triggered when the humidity is *outside* the min and max values"
     *  "'i'",    "Callback is triggered when the humidity is *inside* the min and max values"
     *  "'<'",    "Callback is triggered when the humidity is smaller than the min value (max is ignored)"
     *  "'>'",    "Callback is triggered when the humidity is greater than the min value (max is ignored)"
     * </code>
     * 
     * @param string $option
     * @param int $min
     * @param int $max
     * 
     * @return void
     */
    public function setHumidityCallbackThreshold($option, $min, $max)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('c', ord($option));
        $payload .= pack('v', $min);
        $payload .= pack('v', $max);

        $this->sendRequest(self::FUNCTION_SET_HUMIDITY_CALLBACK_THRESHOLD, $payload, 0);
    }

    /**
     * Returns the threshold as set by BrickletHumidity::setHumidityCallbackThreshold().
     * 
     * 
     * @return array
     */
    public function getHumidityCallbackThreshold()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_HUMIDITY_CALLBACK_THRESHOLD, $payload, 13);

        $payload = unpack('c1option/v1min/v1max', $data);

        $ret['option'] = chr($payload['option']);
        $ret['min'] = $payload['min'];
        $ret['max'] = $payload['max'];

        return $ret;
    }

    /**
     * Sets the thresholds for the BrickletHumidity::CALLBACK_ANALOG_VALUE_REACHED callback.
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
     * Returns the threshold as set by BrickletHumidity::setAnalogValueCallbackThreshold().
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
     * * BrickletHumidity::CALLBACK_HUMIDITY_REACHED,
     * * BrickletHumidity::CALLBACK_ANALOG_VALUE_REACHED
     * 
     * are triggered, if the thresholds
     * 
     * * BrickletHumidity::setHumidityCallbackThreshold(),
     * * BrickletHumidity::setAnalogValueCallbackThreshold()
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
     * Returns the debounce period as set by BrickletHumidity::setDebouncePeriod().
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
    public function callbackWrapperHumidity($data)
    {
        $payload = unpack('v1humidity', $data);

        if (array_key_exists(self::CALLBACK_HUMIDITY, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_HUMIDITY];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_HUMIDITY];

            call_user_func($function, $payload['humidity'], $user_data);
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
    public function callbackWrapperHumidityReached($data)
    {
        $payload = unpack('v1humidity', $data);

        if (array_key_exists(self::CALLBACK_HUMIDITY_REACHED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_HUMIDITY_REACHED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_HUMIDITY_REACHED];

            call_user_func($function, $payload['humidity'], $user_data);
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
