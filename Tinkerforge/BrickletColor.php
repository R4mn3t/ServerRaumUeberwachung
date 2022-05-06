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
 * Measures color (RGB value), illuminance and color temperature
 */
class BrickletColor extends Device
{

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletColor::setColorCallbackPeriod(). The parameter is the color
     * of the sensor as RGBC.
     * 
     * The BrickletColor::CALLBACK_COLOR callback is only triggered if the color has changed since the
     * last triggering.
     */
    const CALLBACK_COLOR = 8;

    /**
     * This callback is triggered when the threshold as set by
     * BrickletColor::setColorCallbackThreshold() is reached.
     * The parameter is the color
     * of the sensor as RGBC.
     * 
     * If the threshold keeps being reached, the callback is triggered periodically
     * with the period as set by BrickletColor::setDebouncePeriod().
     */
    const CALLBACK_COLOR_REACHED = 9;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletColor::setIlluminanceCallbackPeriod(). The parameter is the illuminance.
     * See BrickletColor::getIlluminance() for how to interpret this value.
     * 
     * The BrickletColor::CALLBACK_ILLUMINANCE callback is only triggered if the illuminance has changed
     * since the last triggering.
     */
    const CALLBACK_ILLUMINANCE = 21;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletColor::setColorTemperatureCallbackPeriod(). The parameter is the
     * color temperature.
     * 
     * The BrickletColor::CALLBACK_COLOR_TEMPERATURE callback is only triggered if the color temperature
     * has changed since the last triggering.
     */
    const CALLBACK_COLOR_TEMPERATURE = 22;


    /**
     * @internal
     */
    const FUNCTION_GET_COLOR = 1;

    /**
     * @internal
     */
    const FUNCTION_SET_COLOR_CALLBACK_PERIOD = 2;

    /**
     * @internal
     */
    const FUNCTION_GET_COLOR_CALLBACK_PERIOD = 3;

    /**
     * @internal
     */
    const FUNCTION_SET_COLOR_CALLBACK_THRESHOLD = 4;

    /**
     * @internal
     */
    const FUNCTION_GET_COLOR_CALLBACK_THRESHOLD = 5;

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
    const FUNCTION_LIGHT_ON = 10;

    /**
     * @internal
     */
    const FUNCTION_LIGHT_OFF = 11;

    /**
     * @internal
     */
    const FUNCTION_IS_LIGHT_ON = 12;

    /**
     * @internal
     */
    const FUNCTION_SET_CONFIG = 13;

    /**
     * @internal
     */
    const FUNCTION_GET_CONFIG = 14;

    /**
     * @internal
     */
    const FUNCTION_GET_ILLUMINANCE = 15;

    /**
     * @internal
     */
    const FUNCTION_GET_COLOR_TEMPERATURE = 16;

    /**
     * @internal
     */
    const FUNCTION_SET_ILLUMINANCE_CALLBACK_PERIOD = 17;

    /**
     * @internal
     */
    const FUNCTION_GET_ILLUMINANCE_CALLBACK_PERIOD = 18;

    /**
     * @internal
     */
    const FUNCTION_SET_COLOR_TEMPERATURE_CALLBACK_PERIOD = 19;

    /**
     * @internal
     */
    const FUNCTION_GET_COLOR_TEMPERATURE_CALLBACK_PERIOD = 20;

    /**
     * @internal
     */
    const FUNCTION_GET_IDENTITY = 255;

    const THRESHOLD_OPTION_OFF = 'x';
    const THRESHOLD_OPTION_OUTSIDE = 'o';
    const THRESHOLD_OPTION_INSIDE = 'i';
    const THRESHOLD_OPTION_SMALLER = '<';
    const THRESHOLD_OPTION_GREATER = '>';
    const LIGHT_ON = 0;
    const LIGHT_OFF = 1;
    const GAIN_1X = 0;
    const GAIN_4X = 1;
    const GAIN_16X = 2;
    const GAIN_60X = 3;
    const INTEGRATION_TIME_2MS = 0;
    const INTEGRATION_TIME_24MS = 1;
    const INTEGRATION_TIME_101MS = 2;
    const INTEGRATION_TIME_154MS = 3;
    const INTEGRATION_TIME_700MS = 4;

    const DEVICE_IDENTIFIER = 243;

    const DEVICE_DISPLAY_NAME = 'Color Bricklet';

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

        $this->response_expected[self::FUNCTION_GET_COLOR] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_COLOR_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_COLOR_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_COLOR_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_COLOR_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_DEBOUNCE_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_DEBOUNCE_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_LIGHT_ON] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_LIGHT_OFF] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_IS_LIGHT_ON] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_CONFIG] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_CONFIG] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_ILLUMINANCE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_COLOR_TEMPERATURE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ILLUMINANCE_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_ILLUMINANCE_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_COLOR_TEMPERATURE_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_COLOR_TEMPERATURE_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_IDENTITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;

        $this->callback_wrappers[self::CALLBACK_COLOR] = array(16, 'callbackWrapperColor');
        $this->callback_wrappers[self::CALLBACK_COLOR_REACHED] = array(16, 'callbackWrapperColorReached');
        $this->callback_wrappers[self::CALLBACK_ILLUMINANCE] = array(12, 'callbackWrapperIlluminance');
        $this->callback_wrappers[self::CALLBACK_COLOR_TEMPERATURE] = array(10, 'callbackWrapperColorTemperature');

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
     * Returns the measured color of the sensor.
     * 
     * The red (r), green (g), blue (b) and clear (c) colors are measured
     * with four different photodiodes that are responsive at different
     * wavelengths:
     * 
     * .. image:: /Images/Bricklets/bricklet_color_wavelength_chart_600.jpg
     *    :scale: 100 %
     *    :alt: Chart Responsivity / Wavelength
     *    :align: center
     *    :target: ../../_images/Bricklets/bricklet_color_wavelength_chart_600.jpg
     * 
     * If you want to get the color periodically, it is recommended
     * to use the BrickletColor::CALLBACK_COLOR callback and set the period with
     * BrickletColor::setColorCallbackPeriod().
     * 
     * 
     * @return array
     */
    public function getColor()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_COLOR, $payload, 16);

        $payload = unpack('v1r/v1g/v1b/v1c', $data);

        $ret['r'] = $payload['r'];
        $ret['g'] = $payload['g'];
        $ret['b'] = $payload['b'];
        $ret['c'] = $payload['c'];

        return $ret;
    }

    /**
     * Sets the period with which the BrickletColor::CALLBACK_COLOR callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * The BrickletColor::CALLBACK_COLOR callback is only triggered if the color has changed since the
     * last triggering.
     * 
     * @param int $period
     * 
     * @return void
     */
    public function setColorCallbackPeriod($period)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);

        $this->sendRequest(self::FUNCTION_SET_COLOR_CALLBACK_PERIOD, $payload, 0);
    }

    /**
     * Returns the period as set by BrickletColor::setColorCallbackPeriod().
     * 
     * 
     * @return int
     */
    public function getColorCallbackPeriod()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_COLOR_CALLBACK_PERIOD, $payload, 12);

        $payload = unpack('V1period', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'period');
    }

    /**
     * Sets the thresholds for the BrickletColor::CALLBACK_COLOR_REACHED callback.
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
     * @param int $min_r
     * @param int $max_r
     * @param int $min_g
     * @param int $max_g
     * @param int $min_b
     * @param int $max_b
     * @param int $min_c
     * @param int $max_c
     * 
     * @return void
     */
    public function setColorCallbackThreshold($option, $min_r, $max_r, $min_g, $max_g, $min_b, $max_b, $min_c, $max_c)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('c', ord($option));
        $payload .= pack('v', $min_r);
        $payload .= pack('v', $max_r);
        $payload .= pack('v', $min_g);
        $payload .= pack('v', $max_g);
        $payload .= pack('v', $min_b);
        $payload .= pack('v', $max_b);
        $payload .= pack('v', $min_c);
        $payload .= pack('v', $max_c);

        $this->sendRequest(self::FUNCTION_SET_COLOR_CALLBACK_THRESHOLD, $payload, 0);
    }

    /**
     * Returns the threshold as set by BrickletColor::setColorCallbackThreshold().
     * 
     * 
     * @return array
     */
    public function getColorCallbackThreshold()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_COLOR_CALLBACK_THRESHOLD, $payload, 25);

        $payload = unpack('c1option/v1min_r/v1max_r/v1min_g/v1max_g/v1min_b/v1max_b/v1min_c/v1max_c', $data);

        $ret['option'] = chr($payload['option']);
        $ret['min_r'] = $payload['min_r'];
        $ret['max_r'] = $payload['max_r'];
        $ret['min_g'] = $payload['min_g'];
        $ret['max_g'] = $payload['max_g'];
        $ret['min_b'] = $payload['min_b'];
        $ret['max_b'] = $payload['max_b'];
        $ret['min_c'] = $payload['min_c'];
        $ret['max_c'] = $payload['max_c'];

        return $ret;
    }

    /**
     * Sets the period with which the threshold callback
     * 
     * * BrickletColor::CALLBACK_COLOR_REACHED
     * 
     * is triggered, if the threshold
     * 
     * * BrickletColor::setColorCallbackThreshold()
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
     * Returns the debounce period as set by BrickletColor::setDebouncePeriod().
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
     * Turns the LED on.
     * 
     * 
     * @return void
     */
    public function lightOn()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_LIGHT_ON, $payload, 0);
    }

    /**
     * Turns the LED off.
     * 
     * 
     * @return void
     */
    public function lightOff()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_LIGHT_OFF, $payload, 0);
    }

    /**
     * Returns the state of the LED. Possible values are:
     * 
     * * 0: On
     * * 1: Off
     * 
     * 
     * @return int
     */
    public function isLightOn()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_IS_LIGHT_ON, $payload, 9);

        $payload = unpack('C1light', $data);

        return $payload['light'];
    }

    /**
     * Sets the configuration of the sensor. Gain and integration time
     * can be configured in this way.
     * 
     * For configuring the gain:
     * 
     * * 0: 1x Gain
     * * 1: 4x Gain
     * * 2: 16x Gain
     * * 3: 60x Gain
     * 
     * For configuring the integration time:
     * 
     * * 0: 2.4ms
     * * 1: 24ms
     * * 2: 101ms
     * * 3: 154ms
     * * 4: 700ms
     * 
     * Increasing the gain enables the sensor to detect a
     * color from a higher distance.
     * 
     * The integration time provides a trade-off between conversion time
     * and accuracy. With a longer integration time the values read will
     * be more accurate but it will take longer time to get the conversion
     * results.
     * 
     * @param int $gain
     * @param int $integration_time
     * 
     * @return void
     */
    public function setConfig($gain, $integration_time)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $gain);
        $payload .= pack('C', $integration_time);

        $this->sendRequest(self::FUNCTION_SET_CONFIG, $payload, 0);
    }

    /**
     * Returns the configuration as set by BrickletColor::setConfig().
     * 
     * 
     * @return array
     */
    public function getConfig()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_CONFIG, $payload, 10);

        $payload = unpack('C1gain/C1integration_time', $data);

        $ret['gain'] = $payload['gain'];
        $ret['integration_time'] = $payload['integration_time'];

        return $ret;
    }

    /**
     * Returns the illuminance affected by the gain and integration time as
     * set by BrickletColor::setConfig(). To get the illuminance in Lux apply this formula::
     * 
     *  lux = illuminance * 700 / gain / integration_time
     * 
     * To get a correct illuminance measurement make sure that the color
     * values themselves are not saturated. The color value (R, G or B)
     * is saturated if it is equal to the maximum value of 65535.
     * In that case you have to reduce the gain, see BrickletColor::setConfig().
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
     * Returns the color temperature.
     * 
     * To get a correct color temperature measurement make sure that the color
     * values themselves are not saturated. The color value (R, G or B)
     * is saturated if it is equal to the maximum value of 65535.
     * In that case you have to reduce the gain, see BrickletColor::setConfig().
     * 
     * 
     * @return int
     */
    public function getColorTemperature()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_COLOR_TEMPERATURE, $payload, 10);

        $payload = unpack('v1color_temperature', $data);

        return $payload['color_temperature'];
    }

    /**
     * Sets the period with which the BrickletColor::CALLBACK_ILLUMINANCE callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * The BrickletColor::CALLBACK_ILLUMINANCE callback is only triggered if the illuminance has changed
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
     * Returns the period as set by BrickletColor::setIlluminanceCallbackPeriod().
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
     * Sets the period with which the BrickletColor::CALLBACK_COLOR_TEMPERATURE callback is
     * triggered periodically. A value of 0 turns the callback off.
     * 
     * The BrickletColor::CALLBACK_COLOR_TEMPERATURE callback is only triggered if the color temperature
     * has changed since the last triggering.
     * 
     * @param int $period
     * 
     * @return void
     */
    public function setColorTemperatureCallbackPeriod($period)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);

        $this->sendRequest(self::FUNCTION_SET_COLOR_TEMPERATURE_CALLBACK_PERIOD, $payload, 0);
    }

    /**
     * Returns the period as set by BrickletColor::setColorTemperatureCallbackPeriod().
     * 
     * 
     * @return int
     */
    public function getColorTemperatureCallbackPeriod()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_COLOR_TEMPERATURE_CALLBACK_PERIOD, $payload, 12);

        $payload = unpack('V1period', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'period');
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
    public function callbackWrapperColor($data)
    {
        $payload = unpack('v1r/v1g/v1b/v1c', $data);

        if (array_key_exists(self::CALLBACK_COLOR, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_COLOR];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_COLOR];

            call_user_func($function, $payload['r'], $payload['g'], $payload['b'], $payload['c'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperColorReached($data)
    {
        $payload = unpack('v1r/v1g/v1b/v1c', $data);

        if (array_key_exists(self::CALLBACK_COLOR_REACHED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_COLOR_REACHED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_COLOR_REACHED];

            call_user_func($function, $payload['r'], $payload['g'], $payload['b'], $payload['c'], $user_data);
        }
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
    public function callbackWrapperColorTemperature($data)
    {
        $payload = unpack('v1color_temperature', $data);

        if (array_key_exists(self::CALLBACK_COLOR_TEMPERATURE, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_COLOR_TEMPERATURE];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_COLOR_TEMPERATURE];

            call_user_func($function, $payload['color_temperature'], $user_data);
        }
    }
}

?>
