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
 * Measures AC/DC current between -25A and +25A
 */
class BrickletCurrent25 extends Device
{

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletCurrent25::setCurrentCallbackPeriod(). The parameter is the current of the
     * sensor.
     * 
     * The BrickletCurrent25::CALLBACK_CURRENT callback is only triggered if the current has changed since the
     * last triggering.
     */
    const CALLBACK_CURRENT = 15;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletCurrent25::setAnalogValueCallbackPeriod(). The parameter is the analog value of the
     * sensor.
     * 
     * The BrickletCurrent25::CALLBACK_ANALOG_VALUE callback is only triggered if the current has changed since the
     * last triggering.
     */
    const CALLBACK_ANALOG_VALUE = 16;

    /**
     * This callback is triggered when the threshold as set by
     * BrickletCurrent25::setCurrentCallbackThreshold() is reached.
     * The parameter is the current of the sensor.
     * 
     * If the threshold keeps being reached, the callback is triggered periodically
     * with the period as set by BrickletCurrent25::setDebouncePeriod().
     */
    const CALLBACK_CURRENT_REACHED = 17;

    /**
     * This callback is triggered when the threshold as set by
     * BrickletCurrent25::setAnalogValueCallbackThreshold() is reached.
     * The parameter is the analog value of the sensor.
     * 
     * If the threshold keeps being reached, the callback is triggered periodically
     * with the period as set by BrickletCurrent25::setDebouncePeriod().
     */
    const CALLBACK_ANALOG_VALUE_REACHED = 18;

    /**
     * This callback is triggered when an over current is measured
     * (see BrickletCurrent25::isOverCurrent()).
     */
    const CALLBACK_OVER_CURRENT = 19;


    /**
     * @internal
     */
    const FUNCTION_GET_CURRENT = 1;

    /**
     * @internal
     */
    const FUNCTION_CALIBRATE = 2;

    /**
     * @internal
     */
    const FUNCTION_IS_OVER_CURRENT = 3;

    /**
     * @internal
     */
    const FUNCTION_GET_ANALOG_VALUE = 4;

    /**
     * @internal
     */
    const FUNCTION_SET_CURRENT_CALLBACK_PERIOD = 5;

    /**
     * @internal
     */
    const FUNCTION_GET_CURRENT_CALLBACK_PERIOD = 6;

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
    const FUNCTION_SET_CURRENT_CALLBACK_THRESHOLD = 9;

    /**
     * @internal
     */
    const FUNCTION_GET_CURRENT_CALLBACK_THRESHOLD = 10;

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

    const DEVICE_IDENTIFIER = 24;

    const DEVICE_DISPLAY_NAME = 'Current25 Bricklet';

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
        $this->response_expected[self::FUNCTION_CALIBRATE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_IS_OVER_CURRENT] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_ANALOG_VALUE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_CURRENT_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_CURRENT_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ANALOG_VALUE_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_ANALOG_VALUE_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_CURRENT_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_CURRENT_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ANALOG_VALUE_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_ANALOG_VALUE_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_DEBOUNCE_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_DEBOUNCE_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_IDENTITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;

        $this->callback_wrappers[self::CALLBACK_CURRENT] = array(10, 'callbackWrapperCurrent');
        $this->callback_wrappers[self::CALLBACK_ANALOG_VALUE] = array(10, 'callbackWrapperAnalogValue');
        $this->callback_wrappers[self::CALLBACK_CURRENT_REACHED] = array(10, 'callbackWrapperCurrentReached');
        $this->callback_wrappers[self::CALLBACK_ANALOG_VALUE_REACHED] = array(10, 'callbackWrapperAnalogValueReached');
        $this->callback_wrappers[self::CALLBACK_OVER_CURRENT] = array(8, 'callbackWrapperOverCurrent');

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
     * Returns the current of the sensor.
     * 
     * If you want to get the current periodically, it is recommended to use the
     * BrickletCurrent25::CALLBACK_CURRENT callback and set the period with
     * BrickletCurrent25::setCurrentCallbackPeriod().
     * 
     * 
     * @return int
     */
    public function getCurrent()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_CURRENT, $payload, 10);

        $payload = unpack('v1current', $data);

        return IPConnection::fixUnpackedInt16($payload, 'current');
    }

    /**
     * Calibrates the 0 value of the sensor. You have to call this function
     * when there is no current present.
     * 
     * The zero point of the current sensor
     * is depending on the exact properties of the analog-to-digital converter,
     * the length of the Bricklet cable and the temperature. Thus, if you change
     * the Brick or the environment in which the Bricklet is used, you might
     * have to recalibrate.
     * 
     * The resulting calibration will be saved on the EEPROM of the Current
     * Bricklet.
     * 
     * 
     * @return void
     */
    public function calibrate()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_CALIBRATE, $payload, 0);
    }

    /**
     * Returns *true* if more than 25A were measured.
     * 
     * <note>
     *  To reset this value you have to power cycle the Bricklet.
     * </note>
     * 
     * 
     * @return bool
     */
    public function isOverCurrent()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_IS_OVER_CURRENT, $payload, 9);

        $payload = unpack('C1over', $data);

        return (bool)$payload['over'];
    }

    /**
     * Returns the value as read by a 12-bit analog-to-digital converter.
     * 
     * <note>
     *  The value returned by BrickletCurrent25::getCurrent() is averaged over several samples
     *  to yield less noise, while BrickletCurrent25::getAnalogValue() gives back raw
     *  unfiltered analog values. The only reason to use BrickletCurrent25::getAnalogValue() is,
     *  if you need the full resolution of the analog-to-digital converter.
     * </note>
     * 
     * If you want the analog value periodically, it is recommended to use the
     * BrickletCurrent25::CALLBACK_ANALOG_VALUE callback and set the period with
     * BrickletCurrent25::setAnalogValueCallbackPeriod().
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
     * Sets the period with which the BrickletCurrent25::CALLBACK_CURRENT callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * The BrickletCurrent25::CALLBACK_CURRENT callback is only triggered if the current has changed since
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
     * Returns the period as set by BrickletCurrent25::setCurrentCallbackPeriod().
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
     * Sets the period with which the BrickletCurrent25::CALLBACK_ANALOG_VALUE callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * The BrickletCurrent25::CALLBACK_ANALOG_VALUE callback is only triggered if the analog value has
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
     * Returns the period as set by BrickletCurrent25::setAnalogValueCallbackPeriod().
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
     * Sets the thresholds for the BrickletCurrent25::CALLBACK_CURRENT_REACHED callback.
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
        $payload .= pack('v', $min);
        $payload .= pack('v', $max);

        $this->sendRequest(self::FUNCTION_SET_CURRENT_CALLBACK_THRESHOLD, $payload, 0);
    }

    /**
     * Returns the threshold as set by BrickletCurrent25::setCurrentCallbackThreshold().
     * 
     * 
     * @return array
     */
    public function getCurrentCallbackThreshold()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_CURRENT_CALLBACK_THRESHOLD, $payload, 13);

        $payload = unpack('c1option/v1min/v1max', $data);

        $ret['option'] = chr($payload['option']);
        $ret['min'] = IPConnection::fixUnpackedInt16($payload, 'min');
        $ret['max'] = IPConnection::fixUnpackedInt16($payload, 'max');

        return $ret;
    }

    /**
     * Sets the thresholds for the BrickletCurrent25::CALLBACK_ANALOG_VALUE_REACHED callback.
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
     * Returns the threshold as set by BrickletCurrent25::setAnalogValueCallbackThreshold().
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
     * * BrickletCurrent25::CALLBACK_CURRENT_REACHED,
     * * BrickletCurrent25::CALLBACK_ANALOG_VALUE_REACHED
     * 
     * are triggered, if the thresholds
     * 
     * * BrickletCurrent25::setCurrentCallbackThreshold(),
     * * BrickletCurrent25::setAnalogValueCallbackThreshold()
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
     * Returns the debounce period as set by BrickletCurrent25::setDebouncePeriod().
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
        $payload = unpack('v1current', $data);
        $payload['current'] = IPConnection::fixUnpackedInt16($payload, 'current');

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
    public function callbackWrapperCurrentReached($data)
    {
        $payload = unpack('v1current', $data);
        $payload['current'] = IPConnection::fixUnpackedInt16($payload, 'current');

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
    public function callbackWrapperAnalogValueReached($data)
    {
        $payload = unpack('v1value', $data);

        if (array_key_exists(self::CALLBACK_ANALOG_VALUE_REACHED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_ANALOG_VALUE_REACHED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_ANALOG_VALUE_REACHED];

            call_user_func($function, $payload['value'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperOverCurrent($data)
    {

        if (array_key_exists(self::CALLBACK_OVER_CURRENT, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_OVER_CURRENT];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_OVER_CURRENT];

            call_user_func($function, $user_data);
        }
    }
}

?>
