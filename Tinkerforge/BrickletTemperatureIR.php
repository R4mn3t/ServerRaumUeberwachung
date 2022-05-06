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
 * Measures contactless object temperature between -70°C and +380°C
 */
class BrickletTemperatureIR extends Device
{

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletTemperatureIR::setAmbientTemperatureCallbackPeriod(). The parameter is the
     * ambient temperature of the sensor.
     * 
     * The BrickletTemperatureIR::CALLBACK_AMBIENT_TEMPERATURE callback is only triggered if the ambient
     * temperature has changed since the last triggering.
     */
    const CALLBACK_AMBIENT_TEMPERATURE = 15;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletTemperatureIR::setObjectTemperatureCallbackPeriod(). The parameter is the
     * object temperature of the sensor.
     * 
     * The BrickletTemperatureIR::CALLBACK_OBJECT_TEMPERATURE callback is only triggered if the object
     * temperature has changed since the last triggering.
     */
    const CALLBACK_OBJECT_TEMPERATURE = 16;

    /**
     * This callback is triggered when the threshold as set by
     * BrickletTemperatureIR::setAmbientTemperatureCallbackThreshold() is reached.
     * The parameter is the ambient temperature of the sensor.
     * 
     * If the threshold keeps being reached, the callback is triggered periodically
     * with the period as set by BrickletTemperatureIR::setDebouncePeriod().
     */
    const CALLBACK_AMBIENT_TEMPERATURE_REACHED = 17;

    /**
     * This callback is triggered when the threshold as set by
     * BrickletTemperatureIR::setObjectTemperatureCallbackThreshold() is reached.
     * The parameter is the object temperature of the sensor.
     * 
     * If the threshold keeps being reached, the callback is triggered periodically
     * with the period as set by BrickletTemperatureIR::setDebouncePeriod().
     */
    const CALLBACK_OBJECT_TEMPERATURE_REACHED = 18;


    /**
     * @internal
     */
    const FUNCTION_GET_AMBIENT_TEMPERATURE = 1;

    /**
     * @internal
     */
    const FUNCTION_GET_OBJECT_TEMPERATURE = 2;

    /**
     * @internal
     */
    const FUNCTION_SET_EMISSIVITY = 3;

    /**
     * @internal
     */
    const FUNCTION_GET_EMISSIVITY = 4;

    /**
     * @internal
     */
    const FUNCTION_SET_AMBIENT_TEMPERATURE_CALLBACK_PERIOD = 5;

    /**
     * @internal
     */
    const FUNCTION_GET_AMBIENT_TEMPERATURE_CALLBACK_PERIOD = 6;

    /**
     * @internal
     */
    const FUNCTION_SET_OBJECT_TEMPERATURE_CALLBACK_PERIOD = 7;

    /**
     * @internal
     */
    const FUNCTION_GET_OBJECT_TEMPERATURE_CALLBACK_PERIOD = 8;

    /**
     * @internal
     */
    const FUNCTION_SET_AMBIENT_TEMPERATURE_CALLBACK_THRESHOLD = 9;

    /**
     * @internal
     */
    const FUNCTION_GET_AMBIENT_TEMPERATURE_CALLBACK_THRESHOLD = 10;

    /**
     * @internal
     */
    const FUNCTION_SET_OBJECT_TEMPERATURE_CALLBACK_THRESHOLD = 11;

    /**
     * @internal
     */
    const FUNCTION_GET_OBJECT_TEMPERATURE_CALLBACK_THRESHOLD = 12;

    /**
     * @internal
     */
    const FUNCTION_SET_DEBOUNCE_PERIOD = 13;

    /**
     * @internal
     */
    const FUNCTION_GET_DEBOUNCE_PERIOD = 14;

    /**
     * @internal
     */
    const FUNCTION_GET_IDENTITY = 255;

    const THRESHOLD_OPTION_OFF = 'x';
    const THRESHOLD_OPTION_OUTSIDE = 'o';
    const THRESHOLD_OPTION_INSIDE = 'i';
    const THRESHOLD_OPTION_SMALLER = '<';
    const THRESHOLD_OPTION_GREATER = '>';

    const DEVICE_IDENTIFIER = 217;

    const DEVICE_DISPLAY_NAME = 'Temperature IR Bricklet';

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

        $this->response_expected[self::FUNCTION_GET_AMBIENT_TEMPERATURE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_OBJECT_TEMPERATURE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_EMISSIVITY] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_EMISSIVITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_AMBIENT_TEMPERATURE_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_AMBIENT_TEMPERATURE_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_OBJECT_TEMPERATURE_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_OBJECT_TEMPERATURE_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_AMBIENT_TEMPERATURE_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_AMBIENT_TEMPERATURE_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_OBJECT_TEMPERATURE_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_OBJECT_TEMPERATURE_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_DEBOUNCE_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_DEBOUNCE_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_IDENTITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;

        $this->callback_wrappers[self::CALLBACK_AMBIENT_TEMPERATURE] = array(10, 'callbackWrapperAmbientTemperature');
        $this->callback_wrappers[self::CALLBACK_OBJECT_TEMPERATURE] = array(10, 'callbackWrapperObjectTemperature');
        $this->callback_wrappers[self::CALLBACK_AMBIENT_TEMPERATURE_REACHED] = array(10, 'callbackWrapperAmbientTemperatureReached');
        $this->callback_wrappers[self::CALLBACK_OBJECT_TEMPERATURE_REACHED] = array(10, 'callbackWrapperObjectTemperatureReached');

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
     * Returns the ambient temperature of the sensor.
     * 
     * If you want to get the ambient temperature periodically, it is recommended
     * to use the BrickletTemperatureIR::CALLBACK_AMBIENT_TEMPERATURE callback and set the period with
     * BrickletTemperatureIR::setAmbientTemperatureCallbackPeriod().
     * 
     * 
     * @return int
     */
    public function getAmbientTemperature()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_AMBIENT_TEMPERATURE, $payload, 10);

        $payload = unpack('v1temperature', $data);

        return IPConnection::fixUnpackedInt16($payload, 'temperature');
    }

    /**
     * Returns the object temperature of the sensor, i.e. the temperature
     * of the surface of the object the sensor is aimed at.
     * 
     * The temperature of different materials is dependent on their `emissivity
     * <https://en.wikipedia.org/wiki/Emissivity>`__. The emissivity of the material
     * can be set with BrickletTemperatureIR::setEmissivity().
     * 
     * If you want to get the object temperature periodically, it is recommended
     * to use the BrickletTemperatureIR::CALLBACK_OBJECT_TEMPERATURE callback and set the period with
     * BrickletTemperatureIR::setObjectTemperatureCallbackPeriod().
     * 
     * 
     * @return int
     */
    public function getObjectTemperature()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_OBJECT_TEMPERATURE, $payload, 10);

        $payload = unpack('v1temperature', $data);

        return IPConnection::fixUnpackedInt16($payload, 'temperature');
    }

    /**
     * Sets the `emissivity <https://en.wikipedia.org/wiki/Emissivity>`__ that is
     * used to calculate the surface temperature as returned by
     * BrickletTemperatureIR::getObjectTemperature().
     * 
     * The emissivity is usually given as a value between 0.0 and 1.0. A list of
     * emissivities of different materials can be found
     * `here <https://www.infrared-thermography.com/material.htm>`__.
     * 
     * The parameter of BrickletTemperatureIR::setEmissivity() has to be given with a factor of
     * 65535 (16-bit). For example: An emissivity of 0.1 can be set with the
     * value 6553, an emissivity of 0.5 with the value 32767 and so on.
     * 
     * <note>
     *  If you need a precise measurement for the object temperature, it is
     *  absolutely crucial that you also provide a precise emissivity.
     * </note>
     * 
     * The emissivity is stored in non-volatile memory and will still be used after a restart or power cycle of the Bricklet.
     * 
     * @param int $emissivity
     * 
     * @return void
     */
    public function setEmissivity($emissivity)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $emissivity);

        $this->sendRequest(self::FUNCTION_SET_EMISSIVITY, $payload, 0);
    }

    /**
     * Returns the emissivity as set by BrickletTemperatureIR::setEmissivity().
     * 
     * 
     * @return int
     */
    public function getEmissivity()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_EMISSIVITY, $payload, 10);

        $payload = unpack('v1emissivity', $data);

        return $payload['emissivity'];
    }

    /**
     * Sets the period with which the BrickletTemperatureIR::CALLBACK_AMBIENT_TEMPERATURE callback is
     * triggered periodically. A value of 0 turns the callback off.
     * 
     * The BrickletTemperatureIR::CALLBACK_AMBIENT_TEMPERATURE callback is only triggered if the temperature has
     * changed since the last triggering.
     * 
     * @param int $period
     * 
     * @return void
     */
    public function setAmbientTemperatureCallbackPeriod($period)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);

        $this->sendRequest(self::FUNCTION_SET_AMBIENT_TEMPERATURE_CALLBACK_PERIOD, $payload, 0);
    }

    /**
     * Returns the period as set by BrickletTemperatureIR::setAmbientTemperatureCallbackPeriod().
     * 
     * 
     * @return int
     */
    public function getAmbientTemperatureCallbackPeriod()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_AMBIENT_TEMPERATURE_CALLBACK_PERIOD, $payload, 12);

        $payload = unpack('V1period', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'period');
    }

    /**
     * Sets the period with which the BrickletTemperatureIR::CALLBACK_OBJECT_TEMPERATURE callback is
     * triggered periodically. A value of 0 turns the callback off.
     * 
     * The BrickletTemperatureIR::CALLBACK_OBJECT_TEMPERATURE callback is only triggered if the temperature
     * has changed since the last triggering.
     * 
     * @param int $period
     * 
     * @return void
     */
    public function setObjectTemperatureCallbackPeriod($period)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);

        $this->sendRequest(self::FUNCTION_SET_OBJECT_TEMPERATURE_CALLBACK_PERIOD, $payload, 0);
    }

    /**
     * Returns the period as set by BrickletTemperatureIR::setObjectTemperatureCallbackPeriod().
     * 
     * 
     * @return int
     */
    public function getObjectTemperatureCallbackPeriod()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_OBJECT_TEMPERATURE_CALLBACK_PERIOD, $payload, 12);

        $payload = unpack('V1period', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'period');
    }

    /**
     * Sets the thresholds for the BrickletTemperatureIR::CALLBACK_AMBIENT_TEMPERATURE_REACHED callback.
     * 
     * The following options are possible:
     * 
     * <code>
     *  "Option", "Description"
     * 
     *  "'x'",    "Callback is turned off"
     *  "'o'",    "Callback is triggered when the ambient temperature is *outside* the min and max values"
     *  "'i'",    "Callback is triggered when the ambient temperature is *inside* the min and max values"
     *  "'<'",    "Callback is triggered when the ambient temperature is smaller than the min value (max is ignored)"
     *  "'>'",    "Callback is triggered when the ambient temperature is greater than the min value (max is ignored)"
     * </code>
     * 
     * @param string $option
     * @param int $min
     * @param int $max
     * 
     * @return void
     */
    public function setAmbientTemperatureCallbackThreshold($option, $min, $max)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('c', ord($option));
        $payload .= pack('v', $min);
        $payload .= pack('v', $max);

        $this->sendRequest(self::FUNCTION_SET_AMBIENT_TEMPERATURE_CALLBACK_THRESHOLD, $payload, 0);
    }

    /**
     * Returns the threshold as set by BrickletTemperatureIR::setAmbientTemperatureCallbackThreshold().
     * 
     * 
     * @return array
     */
    public function getAmbientTemperatureCallbackThreshold()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_AMBIENT_TEMPERATURE_CALLBACK_THRESHOLD, $payload, 13);

        $payload = unpack('c1option/v1min/v1max', $data);

        $ret['option'] = chr($payload['option']);
        $ret['min'] = IPConnection::fixUnpackedInt16($payload, 'min');
        $ret['max'] = IPConnection::fixUnpackedInt16($payload, 'max');

        return $ret;
    }

    /**
     * Sets the thresholds for the BrickletTemperatureIR::CALLBACK_OBJECT_TEMPERATURE_REACHED callback.
     * 
     * The following options are possible:
     * 
     * <code>
     *  "Option", "Description"
     * 
     *  "'x'",    "Callback is turned off"
     *  "'o'",    "Callback is triggered when the object temperature is *outside* the min and max values"
     *  "'i'",    "Callback is triggered when the object temperature is *inside* the min and max values"
     *  "'<'",    "Callback is triggered when the object temperature is smaller than the min value (max is ignored)"
     *  "'>'",    "Callback is triggered when the object temperature is greater than the min value (max is ignored)"
     * </code>
     * 
     * @param string $option
     * @param int $min
     * @param int $max
     * 
     * @return void
     */
    public function setObjectTemperatureCallbackThreshold($option, $min, $max)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('c', ord($option));
        $payload .= pack('v', $min);
        $payload .= pack('v', $max);

        $this->sendRequest(self::FUNCTION_SET_OBJECT_TEMPERATURE_CALLBACK_THRESHOLD, $payload, 0);
    }

    /**
     * Returns the threshold as set by BrickletTemperatureIR::setObjectTemperatureCallbackThreshold().
     * 
     * 
     * @return array
     */
    public function getObjectTemperatureCallbackThreshold()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_OBJECT_TEMPERATURE_CALLBACK_THRESHOLD, $payload, 13);

        $payload = unpack('c1option/v1min/v1max', $data);

        $ret['option'] = chr($payload['option']);
        $ret['min'] = IPConnection::fixUnpackedInt16($payload, 'min');
        $ret['max'] = IPConnection::fixUnpackedInt16($payload, 'max');

        return $ret;
    }

    /**
     * Sets the period with which the threshold callbacks
     * 
     * * BrickletTemperatureIR::CALLBACK_AMBIENT_TEMPERATURE_REACHED,
     * * BrickletTemperatureIR::CALLBACK_OBJECT_TEMPERATURE_REACHED
     * 
     * are triggered, if the thresholds
     * 
     * * BrickletTemperatureIR::setAmbientTemperatureCallbackThreshold(),
     * * BrickletTemperatureIR::setObjectTemperatureCallbackThreshold()
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
     * Returns the debounce period as set by BrickletTemperatureIR::setDebouncePeriod().
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
    public function callbackWrapperAmbientTemperature($data)
    {
        $payload = unpack('v1temperature', $data);
        $payload['temperature'] = IPConnection::fixUnpackedInt16($payload, 'temperature');

        if (array_key_exists(self::CALLBACK_AMBIENT_TEMPERATURE, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_AMBIENT_TEMPERATURE];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_AMBIENT_TEMPERATURE];

            call_user_func($function, $payload['temperature'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperObjectTemperature($data)
    {
        $payload = unpack('v1temperature', $data);
        $payload['temperature'] = IPConnection::fixUnpackedInt16($payload, 'temperature');

        if (array_key_exists(self::CALLBACK_OBJECT_TEMPERATURE, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_OBJECT_TEMPERATURE];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_OBJECT_TEMPERATURE];

            call_user_func($function, $payload['temperature'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperAmbientTemperatureReached($data)
    {
        $payload = unpack('v1temperature', $data);
        $payload['temperature'] = IPConnection::fixUnpackedInt16($payload, 'temperature');

        if (array_key_exists(self::CALLBACK_AMBIENT_TEMPERATURE_REACHED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_AMBIENT_TEMPERATURE_REACHED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_AMBIENT_TEMPERATURE_REACHED];

            call_user_func($function, $payload['temperature'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperObjectTemperatureReached($data)
    {
        $payload = unpack('v1temperature', $data);
        $payload['temperature'] = IPConnection::fixUnpackedInt16($payload, 'temperature');

        if (array_key_exists(self::CALLBACK_OBJECT_TEMPERATURE_REACHED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_OBJECT_TEMPERATURE_REACHED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_OBJECT_TEMPERATURE_REACHED];

            call_user_func($function, $payload['temperature'], $user_data);
        }
    }
}

?>
