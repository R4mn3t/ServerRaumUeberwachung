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
 * Measures reflectivity of a surface
 */
class BrickletLine extends Device
{

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletLine::setReflectivityCallbackPeriod(). The parameter is the
     * reflectivity of the sensor.
     * 
     * The BrickletLine::CALLBACK_REFLECTIVITY callback is only triggered if the reflectivity has
     * changed since the last triggering.
     */
    const CALLBACK_REFLECTIVITY = 8;

    /**
     * This callback is triggered when the threshold as set by
     * BrickletLine::setReflectivityCallbackThreshold() is reached.
     * The parameter is the reflectivity of the sensor.
     * 
     * If the threshold keeps being reached, the callback is triggered periodically
     * with the period as set by BrickletLine::setDebouncePeriod().
     */
    const CALLBACK_REFLECTIVITY_REACHED = 9;


    /**
     * @internal
     */
    const FUNCTION_GET_REFLECTIVITY = 1;

    /**
     * @internal
     */
    const FUNCTION_SET_REFLECTIVITY_CALLBACK_PERIOD = 2;

    /**
     * @internal
     */
    const FUNCTION_GET_REFLECTIVITY_CALLBACK_PERIOD = 3;

    /**
     * @internal
     */
    const FUNCTION_SET_REFLECTIVITY_CALLBACK_THRESHOLD = 4;

    /**
     * @internal
     */
    const FUNCTION_GET_REFLECTIVITY_CALLBACK_THRESHOLD = 5;

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
    const FUNCTION_GET_IDENTITY = 255;

    const THRESHOLD_OPTION_OFF = 'x';
    const THRESHOLD_OPTION_OUTSIDE = 'o';
    const THRESHOLD_OPTION_INSIDE = 'i';
    const THRESHOLD_OPTION_SMALLER = '<';
    const THRESHOLD_OPTION_GREATER = '>';

    const DEVICE_IDENTIFIER = 241;

    const DEVICE_DISPLAY_NAME = 'Line Bricklet';

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

        $this->response_expected[self::FUNCTION_GET_REFLECTIVITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_REFLECTIVITY_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_REFLECTIVITY_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_REFLECTIVITY_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_REFLECTIVITY_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_DEBOUNCE_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_DEBOUNCE_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_IDENTITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;

        $this->callback_wrappers[self::CALLBACK_REFLECTIVITY] = array(10, 'callbackWrapperReflectivity');
        $this->callback_wrappers[self::CALLBACK_REFLECTIVITY_REACHED] = array(10, 'callbackWrapperReflectivityReached');

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
     * Returns the currently measured reflectivity. The reflectivity is
     * a value between 0 (not reflective) and 4095 (very reflective).
     * 
     * Usually black has a low reflectivity while white has a high
     * reflectivity.
     * 
     * If you want to get the reflectivity periodically, it is recommended
     * to use the BrickletLine::CALLBACK_REFLECTIVITY callback and set the period with
     * BrickletLine::setReflectivityCallbackPeriod().
     * 
     * 
     * @return int
     */
    public function getReflectivity()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_REFLECTIVITY, $payload, 10);

        $payload = unpack('v1reflectivity', $data);

        return $payload['reflectivity'];
    }

    /**
     * Sets the period with which the BrickletLine::CALLBACK_REFLECTIVITY callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * The BrickletLine::CALLBACK_REFLECTIVITY callback is only triggered if the reflectivity has
     * changed since the last triggering.
     * 
     * @param int $period
     * 
     * @return void
     */
    public function setReflectivityCallbackPeriod($period)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);

        $this->sendRequest(self::FUNCTION_SET_REFLECTIVITY_CALLBACK_PERIOD, $payload, 0);
    }

    /**
     * Returns the period as set by BrickletLine::setReflectivityCallbackPeriod().
     * 
     * 
     * @return int
     */
    public function getReflectivityCallbackPeriod()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_REFLECTIVITY_CALLBACK_PERIOD, $payload, 12);

        $payload = unpack('V1period', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'period');
    }

    /**
     * Sets the thresholds for the BrickletLine::CALLBACK_REFLECTIVITY_REACHED callback.
     * 
     * The following options are possible:
     * 
     * <code>
     *  "Option", "Description"
     * 
     *  "'x'",    "Callback is turned off"
     *  "'o'",    "Callback is triggered when the reflectivity is *outside* the min and max values"
     *  "'i'",    "Callback is triggered when the reflectivity is *inside* the min and max values"
     *  "'<'",    "Callback is triggered when the reflectivity is smaller than the min value (max is ignored)"
     *  "'>'",    "Callback is triggered when the reflectivity is greater than the min value (max is ignored)"
     * </code>
     * 
     * @param string $option
     * @param int $min
     * @param int $max
     * 
     * @return void
     */
    public function setReflectivityCallbackThreshold($option, $min, $max)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('c', ord($option));
        $payload .= pack('v', $min);
        $payload .= pack('v', $max);

        $this->sendRequest(self::FUNCTION_SET_REFLECTIVITY_CALLBACK_THRESHOLD, $payload, 0);
    }

    /**
     * Returns the threshold as set by BrickletLine::setReflectivityCallbackThreshold().
     * 
     * 
     * @return array
     */
    public function getReflectivityCallbackThreshold()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_REFLECTIVITY_CALLBACK_THRESHOLD, $payload, 13);

        $payload = unpack('c1option/v1min/v1max', $data);

        $ret['option'] = chr($payload['option']);
        $ret['min'] = $payload['min'];
        $ret['max'] = $payload['max'];

        return $ret;
    }

    /**
     * Sets the period with which the threshold callback
     * 
     * * BrickletLine::CALLBACK_REFLECTIVITY_REACHED
     * 
     * is triggered, if the threshold
     * 
     * * BrickletLine::setReflectivityCallbackThreshold()
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
     * Returns the debounce period as set by BrickletLine::setDebouncePeriod().
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
    public function callbackWrapperReflectivity($data)
    {
        $payload = unpack('v1reflectivity', $data);

        if (array_key_exists(self::CALLBACK_REFLECTIVITY, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_REFLECTIVITY];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_REFLECTIVITY];

            call_user_func($function, $payload['reflectivity'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperReflectivityReached($data)
    {
        $payload = unpack('v1reflectivity', $data);

        if (array_key_exists(self::CALLBACK_REFLECTIVITY_REACHED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_REFLECTIVITY_REACHED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_REFLECTIVITY_REACHED];

            call_user_func($function, $payload['reflectivity'], $user_data);
        }
    }
}

?>
