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
 * Measures ambient light up to 64000lux
 */
class BrickletAmbientLightV2 extends Device
{

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletAmbientLightV2::setIlluminanceCallbackPeriod(). The parameter is the illuminance of the
     * ambient light sensor.
     * 
     * The BrickletAmbientLightV2::CALLBACK_ILLUMINANCE callback is only triggered if the illuminance has changed since the
     * last triggering.
     */
    const CALLBACK_ILLUMINANCE = 10;

    /**
     * This callback is triggered when the threshold as set by
     * BrickletAmbientLightV2::setIlluminanceCallbackThreshold() is reached.
     * The parameter is the illuminance of the ambient light sensor.
     * 
     * If the threshold keeps being reached, the callback is triggered periodically
     * with the period as set by BrickletAmbientLightV2::setDebouncePeriod().
     */
    const CALLBACK_ILLUMINANCE_REACHED = 11;


    /**
     * @internal
     */
    const FUNCTION_GET_ILLUMINANCE = 1;

    /**
     * @internal
     */
    const FUNCTION_SET_ILLUMINANCE_CALLBACK_PERIOD = 2;

    /**
     * @internal
     */
    const FUNCTION_GET_ILLUMINANCE_CALLBACK_PERIOD = 3;

    /**
     * @internal
     */
    const FUNCTION_SET_ILLUMINANCE_CALLBACK_THRESHOLD = 4;

    /**
     * @internal
     */
    const FUNCTION_GET_ILLUMINANCE_CALLBACK_THRESHOLD = 5;

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
    const FUNCTION_SET_CONFIGURATION = 8;

    /**
     * @internal
     */
    const FUNCTION_GET_CONFIGURATION = 9;

    /**
     * @internal
     */
    const FUNCTION_GET_IDENTITY = 255;

    const THRESHOLD_OPTION_OFF = 'x';
    const THRESHOLD_OPTION_OUTSIDE = 'o';
    const THRESHOLD_OPTION_INSIDE = 'i';
    const THRESHOLD_OPTION_SMALLER = '<';
    const THRESHOLD_OPTION_GREATER = '>';
    const ILLUMINANCE_RANGE_UNLIMITED = 6;
    const ILLUMINANCE_RANGE_64000LUX = 0;
    const ILLUMINANCE_RANGE_32000LUX = 1;
    const ILLUMINANCE_RANGE_16000LUX = 2;
    const ILLUMINANCE_RANGE_8000LUX = 3;
    const ILLUMINANCE_RANGE_1300LUX = 4;
    const ILLUMINANCE_RANGE_600LUX = 5;
    const INTEGRATION_TIME_50MS = 0;
    const INTEGRATION_TIME_100MS = 1;
    const INTEGRATION_TIME_150MS = 2;
    const INTEGRATION_TIME_200MS = 3;
    const INTEGRATION_TIME_250MS = 4;
    const INTEGRATION_TIME_300MS = 5;
    const INTEGRATION_TIME_350MS = 6;
    const INTEGRATION_TIME_400MS = 7;

    const DEVICE_IDENTIFIER = 259;

    const DEVICE_DISPLAY_NAME = 'Ambient Light Bricklet 2.0';

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

        $this->response_expected[self::FUNCTION_GET_ILLUMINANCE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ILLUMINANCE_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_ILLUMINANCE_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ILLUMINANCE_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_ILLUMINANCE_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_DEBOUNCE_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_DEBOUNCE_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_CONFIGURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_IDENTITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;

        $this->callback_wrappers[self::CALLBACK_ILLUMINANCE] = array(12, 'callbackWrapperIlluminance');
        $this->callback_wrappers[self::CALLBACK_ILLUMINANCE_REACHED] = array(12, 'callbackWrapperIlluminanceReached');

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
     * Returns the illuminance of the ambient light sensor. The measurement range goes
     * up to about 100000lux, but above 64000lux the precision starts to drop.
     * 
     * .. versionchanged:: 2.0.2$nbsp;(Plugin)
     *   An illuminance of 0lux indicates an error condition where the sensor cannot
     *   perform a reasonable measurement. This can happen with very dim or very bright
     *   light conditions. In bright light conditions this might indicate that the sensor
     *   is saturated and the configuration should be modified (BrickletAmbientLightV2::setConfiguration())
     *   to better match the light conditions.
     * 
     * If you want to get the illuminance periodically, it is recommended to use the
     * BrickletAmbientLightV2::CALLBACK_ILLUMINANCE callback and set the period with
     * BrickletAmbientLightV2::setIlluminanceCallbackPeriod().
     * 
     * 
     * @return int
     */
    public function getIlluminance()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ILLUMINANCE, $payload, 12);

        $payload = unpack('V1illuminance', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'illuminance');
    }

    /**
     * Sets the period with which the BrickletAmbientLightV2::CALLBACK_ILLUMINANCE callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * The BrickletAmbientLightV2::CALLBACK_ILLUMINANCE callback is only triggered if the illuminance has changed
     * since the last triggering.
     * 
     * @param int $period
     * 
     * @return void
     */
    public function setIlluminanceCallbackPeriod($period)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);

        $this->sendRequest(self::FUNCTION_SET_ILLUMINANCE_CALLBACK_PERIOD, $payload, 0);
    }

    /**
     * Returns the period as set by BrickletAmbientLightV2::setIlluminanceCallbackPeriod().
     * 
     * 
     * @return int
     */
    public function getIlluminanceCallbackPeriod()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ILLUMINANCE_CALLBACK_PERIOD, $payload, 12);

        $payload = unpack('V1period', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'period');
    }

    /**
     * Sets the thresholds for the BrickletAmbientLightV2::CALLBACK_ILLUMINANCE_REACHED callback.
     * 
     * The following options are possible:
     * 
     * <code>
     *  "Option", "Description"
     * 
     *  "'x'",    "Callback is turned off"
     *  "'o'",    "Callback is triggered when the illuminance is *outside* the min and max values"
     *  "'i'",    "Callback is triggered when the illuminance is *inside* the min and max values"
     *  "'<'",    "Callback is triggered when the illuminance is smaller than the min value (max is ignored)"
     *  "'>'",    "Callback is triggered when the illuminance is greater than the min value (max is ignored)"
     * </code>
     * 
     * @param string $option
     * @param int $min
     * @param int $max
     * 
     * @return void
     */
    public function setIlluminanceCallbackThreshold($option, $min, $max)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('c', ord($option));
        $payload .= pack('V', $min);
        $payload .= pack('V', $max);

        $this->sendRequest(self::FUNCTION_SET_ILLUMINANCE_CALLBACK_THRESHOLD, $payload, 0);
    }

    /**
     * Returns the threshold as set by BrickletAmbientLightV2::setIlluminanceCallbackThreshold().
     * 
     * 
     * @return array
     */
    public function getIlluminanceCallbackThreshold()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ILLUMINANCE_CALLBACK_THRESHOLD, $payload, 17);

        $payload = unpack('c1option/V1min/V1max', $data);

        $ret['option'] = chr($payload['option']);
        $ret['min'] = IPConnection::fixUnpackedUInt32($payload, 'min');
        $ret['max'] = IPConnection::fixUnpackedUInt32($payload, 'max');

        return $ret;
    }

    /**
     * Sets the period with which the threshold callbacks
     * 
     * * BrickletAmbientLightV2::CALLBACK_ILLUMINANCE_REACHED,
     * 
     * are triggered, if the thresholds
     * 
     * * BrickletAmbientLightV2::setIlluminanceCallbackThreshold(),
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
     * Returns the debounce period as set by BrickletAmbientLightV2::setDebouncePeriod().
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
     * Sets the configuration. It is possible to configure an illuminance range
     * between 0-600lux and 0-64000lux and an integration time between 50ms and 400ms.
     * 
     * .. versionadded:: 2.0.2$nbsp;(Plugin)
     *   The unlimited illuminance range allows to measure up to about 100000lux, but
     *   above 64000lux the precision starts to drop.
     * 
     * A smaller illuminance range increases the resolution of the data. A longer
     * integration time will result in less noise on the data.
     * 
     * .. versionchanged:: 2.0.2$nbsp;(Plugin)
     *   If the actual measure illuminance is out-of-range then the current illuminance
     *   range maximum +0.01lux is reported by BrickletAmbientLightV2::getIlluminance() and the
     *   BrickletAmbientLightV2::CALLBACK_ILLUMINANCE callback. For example, 800001 for the 0-8000lux range.
     * 
     * .. versionchanged:: 2.0.2$nbsp;(Plugin)
     *   With a long integration time the sensor might be saturated before the measured
     *   value reaches the maximum of the selected illuminance range. In this case 0lux
     *   is reported by BrickletAmbientLightV2::getIlluminance() and the BrickletAmbientLightV2::CALLBACK_ILLUMINANCE callback.
     * 
     * If the measurement is out-of-range or the sensor is saturated then you should
     * configure the next higher illuminance range. If the highest range is already
     * in use, then start to reduce the integration time.
     * 
     * @param int $illuminance_range
     * @param int $integration_time
     * 
     * @return void
     */
    public function setConfiguration($illuminance_range, $integration_time)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $illuminance_range);
        $payload .= pack('C', $integration_time);

        $this->sendRequest(self::FUNCTION_SET_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the configuration as set by BrickletAmbientLightV2::setConfiguration().
     * 
     * 
     * @return array
     */
    public function getConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_CONFIGURATION, $payload, 10);

        $payload = unpack('C1illuminance_range/C1integration_time', $data);

        $ret['illuminance_range'] = $payload['illuminance_range'];
        $ret['integration_time'] = $payload['integration_time'];

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
    public function callbackWrapperIlluminance($data)
    {
        $payload = unpack('V1illuminance', $data);
        $payload['illuminance'] = IPConnection::fixUnpackedUInt32($payload, 'illuminance');

        if (array_key_exists(self::CALLBACK_ILLUMINANCE, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_ILLUMINANCE];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_ILLUMINANCE];

            call_user_func($function, $payload['illuminance'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperIlluminanceReached($data)
    {
        $payload = unpack('V1illuminance', $data);
        $payload['illuminance'] = IPConnection::fixUnpackedUInt32($payload, 'illuminance');

        if (array_key_exists(self::CALLBACK_ILLUMINANCE_REACHED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_ILLUMINANCE_REACHED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_ILLUMINANCE_REACHED];

            call_user_func($function, $payload['illuminance'], $user_data);
        }
    }
}

?>
