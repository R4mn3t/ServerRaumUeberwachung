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
 * 2-axis joystick with push-button
 */
class BrickletJoystick extends Device
{

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletJoystick::setPositionCallbackPeriod(). The parameter is the position of the
     * joystick.
     * 
     * The BrickletJoystick::CALLBACK_POSITION callback is only triggered if the position has changed since the
     * last triggering.
     */
    const CALLBACK_POSITION = 15;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletJoystick::setAnalogValueCallbackPeriod(). The parameters are the
     * analog values of the joystick.
     * 
     * The BrickletJoystick::CALLBACK_ANALOG_VALUE callback is only triggered if the values have changed
     * since the last triggering.
     */
    const CALLBACK_ANALOG_VALUE = 16;

    /**
     * This callback is triggered when the threshold as set by
     * BrickletJoystick::setPositionCallbackThreshold() is reached.
     * The parameters are the position of the joystick.
     * 
     * If the threshold keeps being reached, the callback is triggered periodically
     * with the period as set by BrickletJoystick::setDebouncePeriod().
     */
    const CALLBACK_POSITION_REACHED = 17;

    /**
     * This callback is triggered when the threshold as set by
     * BrickletJoystick::setAnalogValueCallbackThreshold() is reached.
     * The parameters are the analog values of the joystick.
     * 
     * If the threshold keeps being reached, the callback is triggered periodically
     * with the period as set by BrickletJoystick::setDebouncePeriod().
     */
    const CALLBACK_ANALOG_VALUE_REACHED = 18;

    /**
     * This callback is triggered when the button is pressed.
     */
    const CALLBACK_PRESSED = 19;

    /**
     * This callback is triggered when the button is released.
     */
    const CALLBACK_RELEASED = 20;


    /**
     * @internal
     */
    const FUNCTION_GET_POSITION = 1;

    /**
     * @internal
     */
    const FUNCTION_IS_PRESSED = 2;

    /**
     * @internal
     */
    const FUNCTION_GET_ANALOG_VALUE = 3;

    /**
     * @internal
     */
    const FUNCTION_CALIBRATE = 4;

    /**
     * @internal
     */
    const FUNCTION_SET_POSITION_CALLBACK_PERIOD = 5;

    /**
     * @internal
     */
    const FUNCTION_GET_POSITION_CALLBACK_PERIOD = 6;

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
    const FUNCTION_SET_POSITION_CALLBACK_THRESHOLD = 9;

    /**
     * @internal
     */
    const FUNCTION_GET_POSITION_CALLBACK_THRESHOLD = 10;

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

    const DEVICE_IDENTIFIER = 210;

    const DEVICE_DISPLAY_NAME = 'Joystick Bricklet';

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

        $this->response_expected[self::FUNCTION_GET_POSITION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_IS_PRESSED] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_ANALOG_VALUE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_CALIBRATE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_SET_POSITION_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_POSITION_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ANALOG_VALUE_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_ANALOG_VALUE_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_POSITION_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_POSITION_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ANALOG_VALUE_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_ANALOG_VALUE_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_DEBOUNCE_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_DEBOUNCE_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_IDENTITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;

        $this->callback_wrappers[self::CALLBACK_POSITION] = array(12, 'callbackWrapperPosition');
        $this->callback_wrappers[self::CALLBACK_ANALOG_VALUE] = array(12, 'callbackWrapperAnalogValue');
        $this->callback_wrappers[self::CALLBACK_POSITION_REACHED] = array(12, 'callbackWrapperPositionReached');
        $this->callback_wrappers[self::CALLBACK_ANALOG_VALUE_REACHED] = array(12, 'callbackWrapperAnalogValueReached');
        $this->callback_wrappers[self::CALLBACK_PRESSED] = array(8, 'callbackWrapperPressed');
        $this->callback_wrappers[self::CALLBACK_RELEASED] = array(8, 'callbackWrapperReleased');

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
     * Returns the position of the joystick. The middle position of the joystick is x=0, y=0.
     * The returned values are averaged and calibrated (see BrickletJoystick::calibrate()).
     * 
     * If you want to get the position periodically, it is recommended to use the
     * BrickletJoystick::CALLBACK_POSITION callback and set the period with
     * BrickletJoystick::setPositionCallbackPeriod().
     * 
     * 
     * @return array
     */
    public function getPosition()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_POSITION, $payload, 12);

        $payload = unpack('v1x/v1y', $data);

        $ret['x'] = IPConnection::fixUnpackedInt16($payload, 'x');
        $ret['y'] = IPConnection::fixUnpackedInt16($payload, 'y');

        return $ret;
    }

    /**
     * Returns *true* if the button is pressed and *false* otherwise.
     * 
     * It is recommended to use the BrickletJoystick::CALLBACK_PRESSED and BrickletJoystick::CALLBACK_RELEASED callbacks
     * to handle the button.
     * 
     * 
     * @return bool
     */
    public function isPressed()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_IS_PRESSED, $payload, 9);

        $payload = unpack('C1pressed', $data);

        return (bool)$payload['pressed'];
    }

    /**
     * Returns the values as read by a 12-bit analog-to-digital converter.
     * 
     * <note>
     *  The values returned by BrickletJoystick::getPosition() are averaged over several samples
     *  to yield less noise, while BrickletJoystick::getAnalogValue() gives back raw
     *  unfiltered analog values. The only reason to use BrickletJoystick::getAnalogValue() is,
     *  if you need the full resolution of the analog-to-digital converter.
     * </note>
     * 
     * If you want the analog values periodically, it is recommended to use the
     * BrickletJoystick::CALLBACK_ANALOG_VALUE callback and set the period with
     * BrickletJoystick::setAnalogValueCallbackPeriod().
     * 
     * 
     * @return array
     */
    public function getAnalogValue()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ANALOG_VALUE, $payload, 12);

        $payload = unpack('v1x/v1y', $data);

        $ret['x'] = $payload['x'];
        $ret['y'] = $payload['y'];

        return $ret;
    }

    /**
     * Calibrates the middle position of the joystick. If your Joystick Bricklet
     * does not return x=0 and y=0 in the middle position, call this function
     * while the joystick is standing still in the middle position.
     * 
     * The resulting calibration will be saved on the EEPROM of the Joystick
     * Bricklet, thus you only have to calibrate it once.
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
     * Sets the period with which the BrickletJoystick::CALLBACK_POSITION callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * The BrickletJoystick::CALLBACK_POSITION callback is only triggered if the position has changed since the
     * last triggering.
     * 
     * @param int $period
     * 
     * @return void
     */
    public function setPositionCallbackPeriod($period)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);

        $this->sendRequest(self::FUNCTION_SET_POSITION_CALLBACK_PERIOD, $payload, 0);
    }

    /**
     * Returns the period as set by BrickletJoystick::setPositionCallbackPeriod().
     * 
     * 
     * @return int
     */
    public function getPositionCallbackPeriod()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_POSITION_CALLBACK_PERIOD, $payload, 12);

        $payload = unpack('V1period', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'period');
    }

    /**
     * Sets the period with which the BrickletJoystick::CALLBACK_ANALOG_VALUE callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * The BrickletJoystick::CALLBACK_ANALOG_VALUE callback is only triggered if the analog values have
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
     * Returns the period as set by BrickletJoystick::setAnalogValueCallbackPeriod().
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
     * Sets the thresholds for the BrickletJoystick::CALLBACK_POSITION_REACHED callback.
     * 
     * The following options are possible:
     * 
     * <code>
     *  "Option", "Description"
     * 
     *  "'x'",    "Callback is turned off"
     *  "'o'",    "Callback is triggered when the position is *outside* the min and max values"
     *  "'i'",    "Callback is triggered when the position is *inside* the min and max values"
     *  "'<'",    "Callback is triggered when the position is smaller than the min values (max is ignored)"
     *  "'>'",    "Callback is triggered when the position is greater than the min values (max is ignored)"
     * </code>
     * 
     * @param string $option
     * @param int $min_x
     * @param int $max_x
     * @param int $min_y
     * @param int $max_y
     * 
     * @return void
     */
    public function setPositionCallbackThreshold($option, $min_x, $max_x, $min_y, $max_y)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('c', ord($option));
        $payload .= pack('v', $min_x);
        $payload .= pack('v', $max_x);
        $payload .= pack('v', $min_y);
        $payload .= pack('v', $max_y);

        $this->sendRequest(self::FUNCTION_SET_POSITION_CALLBACK_THRESHOLD, $payload, 0);
    }

    /**
     * Returns the threshold as set by BrickletJoystick::setPositionCallbackThreshold().
     * 
     * 
     * @return array
     */
    public function getPositionCallbackThreshold()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_POSITION_CALLBACK_THRESHOLD, $payload, 17);

        $payload = unpack('c1option/v1min_x/v1max_x/v1min_y/v1max_y', $data);

        $ret['option'] = chr($payload['option']);
        $ret['min_x'] = IPConnection::fixUnpackedInt16($payload, 'min_x');
        $ret['max_x'] = IPConnection::fixUnpackedInt16($payload, 'max_x');
        $ret['min_y'] = IPConnection::fixUnpackedInt16($payload, 'min_y');
        $ret['max_y'] = IPConnection::fixUnpackedInt16($payload, 'max_y');

        return $ret;
    }

    /**
     * Sets the thresholds for the BrickletJoystick::CALLBACK_ANALOG_VALUE_REACHED callback.
     * 
     * The following options are possible:
     * 
     * <code>
     *  "Option", "Description"
     * 
     *  "'x'",    "Callback is turned off"
     *  "'o'",    "Callback is triggered when the analog values are *outside* the min and max values"
     *  "'i'",    "Callback is triggered when the analog values are *inside* the min and max values"
     *  "'<'",    "Callback is triggered when the analog values are smaller than the min values (max is ignored)"
     *  "'>'",    "Callback is triggered when the analog values are greater than the min values (max is ignored)"
     * </code>
     * 
     * @param string $option
     * @param int $min_x
     * @param int $max_x
     * @param int $min_y
     * @param int $max_y
     * 
     * @return void
     */
    public function setAnalogValueCallbackThreshold($option, $min_x, $max_x, $min_y, $max_y)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('c', ord($option));
        $payload .= pack('v', $min_x);
        $payload .= pack('v', $max_x);
        $payload .= pack('v', $min_y);
        $payload .= pack('v', $max_y);

        $this->sendRequest(self::FUNCTION_SET_ANALOG_VALUE_CALLBACK_THRESHOLD, $payload, 0);
    }

    /**
     * Returns the threshold as set by BrickletJoystick::setAnalogValueCallbackThreshold().
     * 
     * 
     * @return array
     */
    public function getAnalogValueCallbackThreshold()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ANALOG_VALUE_CALLBACK_THRESHOLD, $payload, 17);

        $payload = unpack('c1option/v1min_x/v1max_x/v1min_y/v1max_y', $data);

        $ret['option'] = chr($payload['option']);
        $ret['min_x'] = $payload['min_x'];
        $ret['max_x'] = $payload['max_x'];
        $ret['min_y'] = $payload['min_y'];
        $ret['max_y'] = $payload['max_y'];

        return $ret;
    }

    /**
     * Sets the period with which the threshold callbacks
     * 
     * * BrickletJoystick::CALLBACK_POSITION_REACHED,
     * * BrickletJoystick::CALLBACK_ANALOG_VALUE_REACHED
     * 
     * are triggered, if the thresholds
     * 
     * * BrickletJoystick::setPositionCallbackThreshold(),
     * * BrickletJoystick::setAnalogValueCallbackThreshold()
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
     * Returns the debounce period as set by BrickletJoystick::setDebouncePeriod().
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
    public function callbackWrapperPosition($data)
    {
        $payload = unpack('v1x/v1y', $data);
        $payload['x'] = IPConnection::fixUnpackedInt16($payload, 'x');
        $payload['y'] = IPConnection::fixUnpackedInt16($payload, 'y');

        if (array_key_exists(self::CALLBACK_POSITION, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_POSITION];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_POSITION];

            call_user_func($function, $payload['x'], $payload['y'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperAnalogValue($data)
    {
        $payload = unpack('v1x/v1y', $data);

        if (array_key_exists(self::CALLBACK_ANALOG_VALUE, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_ANALOG_VALUE];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_ANALOG_VALUE];

            call_user_func($function, $payload['x'], $payload['y'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperPositionReached($data)
    {
        $payload = unpack('v1x/v1y', $data);
        $payload['x'] = IPConnection::fixUnpackedInt16($payload, 'x');
        $payload['y'] = IPConnection::fixUnpackedInt16($payload, 'y');

        if (array_key_exists(self::CALLBACK_POSITION_REACHED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_POSITION_REACHED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_POSITION_REACHED];

            call_user_func($function, $payload['x'], $payload['y'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperAnalogValueReached($data)
    {
        $payload = unpack('v1x/v1y', $data);

        if (array_key_exists(self::CALLBACK_ANALOG_VALUE_REACHED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_ANALOG_VALUE_REACHED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_ANALOG_VALUE_REACHED];

            call_user_func($function, $payload['x'], $payload['y'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperPressed($data)
    {

        if (array_key_exists(self::CALLBACK_PRESSED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_PRESSED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_PRESSED];

            call_user_func($function, $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperReleased($data)
    {

        if (array_key_exists(self::CALLBACK_RELEASED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_RELEASED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_RELEASED];

            call_user_func($function, $user_data);
        }
    }
}

?>
