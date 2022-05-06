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
 * Measures distance up to 150cm with infrared light
 */
class BrickletDistanceIR extends Device
{

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletDistanceIR::setDistanceCallbackPeriod(). The parameter is the distance of the
     * sensor.
     * 
     * The BrickletDistanceIR::CALLBACK_DISTANCE callback is only triggered if the distance has changed since the
     * last triggering.
     */
    const CALLBACK_DISTANCE = 15;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletDistanceIR::setAnalogValueCallbackPeriod(). The parameter is the analog value of the
     * sensor.
     * 
     * The BrickletDistanceIR::CALLBACK_ANALOG_VALUE callback is only triggered if the analog value has changed
     * since the last triggering.
     */
    const CALLBACK_ANALOG_VALUE = 16;

    /**
     * This callback is triggered when the threshold as set by
     * BrickletDistanceIR::setDistanceCallbackThreshold() is reached.
     * The parameter is the distance of the sensor.
     * 
     * If the threshold keeps being reached, the callback is triggered periodically
     * with the period as set by BrickletDistanceIR::setDebouncePeriod().
     */
    const CALLBACK_DISTANCE_REACHED = 17;

    /**
     * This callback is triggered when the threshold as set by
     * BrickletDistanceIR::setAnalogValueCallbackThreshold() is reached.
     * The parameter is the analog value of the sensor.
     * 
     * If the threshold keeps being reached, the callback is triggered periodically
     * with the period as set by BrickletDistanceIR::setDebouncePeriod().
     */
    const CALLBACK_ANALOG_VALUE_REACHED = 18;


    /**
     * @internal
     */
    const FUNCTION_GET_DISTANCE = 1;

    /**
     * @internal
     */
    const FUNCTION_GET_ANALOG_VALUE = 2;

    /**
     * @internal
     */
    const FUNCTION_SET_SAMPLING_POINT = 3;

    /**
     * @internal
     */
    const FUNCTION_GET_SAMPLING_POINT = 4;

    /**
     * @internal
     */
    const FUNCTION_SET_DISTANCE_CALLBACK_PERIOD = 5;

    /**
     * @internal
     */
    const FUNCTION_GET_DISTANCE_CALLBACK_PERIOD = 6;

    /**
     * @internal
     */
    const FUNCTION_SET_ANALOG_VALUE_CALLBACK_PERIOD = 7;

    /**
     * @internal
     */
    const FUNCTION_GET_ANALOG_VALUE_CALLBACK_PERIOD = 8;

    /**
     * @internal
     */
    const FUNCTION_SET_DISTANCE_CALLBACK_THRESHOLD = 9;

    /**
     * @internal
     */
    const FUNCTION_GET_DISTANCE_CALLBACK_THRESHOLD = 10;

    /**
     * @internal
     */
    const FUNCTION_SET_ANALOG_VALUE_CALLBACK_THRESHOLD = 11;

    /**
     * @internal
     */
    const FUNCTION_GET_ANALOG_VALUE_CALLBACK_THRESHOLD = 12;

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

    const DEVICE_IDENTIFIER = 25;

    const DEVICE_DISPLAY_NAME = 'Distance IR Bricklet';

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

        $this->response_expected[self::FUNCTION_GET_DISTANCE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_ANALOG_VALUE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_SAMPLING_POINT] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_SAMPLING_POINT] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_DISTANCE_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_DISTANCE_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ANALOG_VALUE_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_ANALOG_VALUE_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_DISTANCE_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_DISTANCE_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ANALOG_VALUE_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_ANALOG_VALUE_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_DEBOUNCE_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_DEBOUNCE_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_IDENTITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;

        $this->callback_wrappers[self::CALLBACK_DISTANCE] = array(10, 'callbackWrapperDistance');
        $this->callback_wrappers[self::CALLBACK_ANALOG_VALUE] = array(10, 'callbackWrapperAnalogValue');
        $this->callback_wrappers[self::CALLBACK_DISTANCE_REACHED] = array(10, 'callbackWrapperDistanceReached');
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
     * Returns the distance measured by the sensor. Possible
     * distance ranges are 40 to 300, 100 to 800 and 200 to 1500, depending on the
     * selected IR sensor.
     * 
     * If you want to get the distance periodically, it is recommended to use the
     * BrickletDistanceIR::CALLBACK_DISTANCE callback and set the period with
     * BrickletDistanceIR::setDistanceCallbackPeriod().
     * 
     * 
     * @return int
     */
    public function getDistance()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_DISTANCE, $payload, 10);

        $payload = unpack('v1distance', $data);

        return $payload['distance'];
    }

    /**
     * Returns the value as read by a 12-bit analog-to-digital converter.
     * 
     * <note>
     *  The value returned by BrickletDistanceIR::getDistance() is averaged over several samples
     *  to yield less noise, while BrickletDistanceIR::getAnalogValue() gives back raw
     *  unfiltered analog values. The only reason to use BrickletDistanceIR::getAnalogValue() is,
     *  if you need the full resolution of the analog-to-digital converter.
     * </note>
     * 
     * If you want the analog value periodically, it is recommended to use the
     * BrickletDistanceIR::CALLBACK_ANALOG_VALUE callback and set the period with
     * BrickletDistanceIR::setAnalogValueCallbackPeriod().
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
     * Sets a sampling point value to a specific position of the lookup table.
     * The lookup table comprises 128 equidistant analog values with
     * corresponding distances.
     * 
     * If you measure a distance of 50cm at the analog value 2048, you
     * should call this function with (64, 5000). The utilized analog-to-digital
     * converter has a resolution of 12 bit. With 128 sampling points on the
     * whole range, this means that every sampling point has a size of 32
     * analog values. Thus the analog value 2048 has the corresponding sampling
     * point 64 = 2048/32.
     * 
     * Sampling points are saved on the EEPROM of the Distance IR Bricklet and
     * loaded again on startup.
     * 
     * <note>
     *  An easy way to calibrate the sampling points of the Distance IR Bricklet is
     *  implemented in the Brick Viewer. If you want to calibrate your Bricklet it is
     *  highly recommended to use this implementation.
     * </note>
     * 
     * @param int $position
     * @param int $distance
     * 
     * @return void
     */
    public function setSamplingPoint($position, $distance)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $position);
        $payload .= pack('v', $distance);

        $this->sendRequest(self::FUNCTION_SET_SAMPLING_POINT, $payload, 0);
    }

    /**
     * Returns the distance to a sampling point position as set by
     * BrickletDistanceIR::setSamplingPoint().
     * 
     * @param int $position
     * 
     * @return int
     */
    public function getSamplingPoint($position)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $position);

        $data = $this->sendRequest(self::FUNCTION_GET_SAMPLING_POINT, $payload, 10);

        $payload = unpack('v1distance', $data);

        return $payload['distance'];
    }

    /**
     * Sets the period with which the BrickletDistanceIR::CALLBACK_DISTANCE callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * The BrickletDistanceIR::CALLBACK_DISTANCE callback is only triggered if the distance has changed since the
     * last triggering.
     * 
     * @param int $period
     * 
     * @return void
     */
    public function setDistanceCallbackPeriod($period)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);

        $this->sendRequest(self::FUNCTION_SET_DISTANCE_CALLBACK_PERIOD, $payload, 0);
    }

    /**
     * Returns the period as set by BrickletDistanceIR::setDistanceCallbackPeriod().
     * 
     * 
     * @return int
     */
    public function getDistanceCallbackPeriod()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_DISTANCE_CALLBACK_PERIOD, $payload, 12);

        $payload = unpack('V1period', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'period');
    }

    /**
     * Sets the period with which the BrickletDistanceIR::CALLBACK_ANALOG_VALUE callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * The BrickletDistanceIR::CALLBACK_ANALOG_VALUE callback is only triggered if the analog value has
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
     * Returns the period as set by BrickletDistanceIR::setAnalogValueCallbackPeriod().
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
     * Sets the thresholds for the BrickletDistanceIR::CALLBACK_DISTANCE_REACHED callback.
     * 
     * The following options are possible:
     * 
     * <code>
     *  "Option", "Description"
     * 
     *  "'x'",    "Callback is turned off"
     *  "'o'",    "Callback is triggered when the distance is *outside* the min and max values"
     *  "'i'",    "Callback is triggered when the distance is *inside* the min and max values"
     *  "'<'",    "Callback is triggered when the distance is smaller than the min value (max is ignored)"
     *  "'>'",    "Callback is triggered when the distance is greater than the min value (max is ignored)"
     * </code>
     * 
     * @param string $option
     * @param int $min
     * @param int $max
     * 
     * @return void
     */
    public function setDistanceCallbackThreshold($option, $min, $max)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('c', ord($option));
        $payload .= pack('v', $min);
        $payload .= pack('v', $max);

        $this->sendRequest(self::FUNCTION_SET_DISTANCE_CALLBACK_THRESHOLD, $payload, 0);
    }

    /**
     * Returns the threshold as set by BrickletDistanceIR::setDistanceCallbackThreshold().
     * 
     * 
     * @return array
     */
    public function getDistanceCallbackThreshold()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_DISTANCE_CALLBACK_THRESHOLD, $payload, 13);

        $payload = unpack('c1option/v1min/v1max', $data);

        $ret['option'] = chr($payload['option']);
        $ret['min'] = $payload['min'];
        $ret['max'] = $payload['max'];

        return $ret;
    }

    /**
     * Sets the thresholds for the BrickletDistanceIR::CALLBACK_ANALOG_VALUE_REACHED callback.
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
     * Returns the threshold as set by BrickletDistanceIR::setAnalogValueCallbackThreshold().
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
     * * BrickletDistanceIR::CALLBACK_DISTANCE_REACHED,
     * * BrickletDistanceIR::CALLBACK_ANALOG_VALUE_REACHED
     * 
     * are triggered, if the thresholds
     * 
     * * BrickletDistanceIR::setDistanceCallbackThreshold(),
     * * BrickletDistanceIR::setAnalogValueCallbackThreshold()
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
     * Returns the debounce period as set by BrickletDistanceIR::setDebouncePeriod().
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
    public function callbackWrapperDistance($data)
    {
        $payload = unpack('v1distance', $data);

        if (array_key_exists(self::CALLBACK_DISTANCE, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_DISTANCE];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_DISTANCE];

            call_user_func($function, $payload['distance'], $user_data);
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
    public function callbackWrapperDistanceReached($data)
    {
        $payload = unpack('v1distance', $data);

        if (array_key_exists(self::CALLBACK_DISTANCE_REACHED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_DISTANCE_REACHED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_DISTANCE_REACHED];

            call_user_func($function, $payload['distance'], $user_data);
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
