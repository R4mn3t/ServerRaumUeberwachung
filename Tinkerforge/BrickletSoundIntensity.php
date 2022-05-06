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
 * Measures sound intensity
 */
class BrickletSoundIntensity extends Device
{

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletSoundIntensity::setIntensityCallbackPeriod(). The parameter is the intensity
     * of the sensor.
     * 
     * The BrickletSoundIntensity::CALLBACK_INTENSITY callback is only triggered if the intensity has changed
     * since the last triggering.
     */
    const CALLBACK_INTENSITY = 8;

    /**
     * This callback is triggered when the threshold as set by
     * BrickletSoundIntensity::setIntensityCallbackThreshold() is reached.
     * The parameter is the intensity of the encoder.
     * 
     * If the threshold keeps being reached, the callback is triggered periodically
     * with the period as set by BrickletSoundIntensity::setDebouncePeriod().
     */
    const CALLBACK_INTENSITY_REACHED = 9;


    /**
     * @internal
     */
    const FUNCTION_GET_INTENSITY = 1;

    /**
     * @internal
     */
    const FUNCTION_SET_INTENSITY_CALLBACK_PERIOD = 2;

    /**
     * @internal
     */
    const FUNCTION_GET_INTENSITY_CALLBACK_PERIOD = 3;

    /**
     * @internal
     */
    const FUNCTION_SET_INTENSITY_CALLBACK_THRESHOLD = 4;

    /**
     * @internal
     */
    const FUNCTION_GET_INTENSITY_CALLBACK_THRESHOLD = 5;

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

    const DEVICE_IDENTIFIER = 238;

    const DEVICE_DISPLAY_NAME = 'Sound Intensity Bricklet';

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

        $this->response_expected[self::FUNCTION_GET_INTENSITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_INTENSITY_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_INTENSITY_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_INTENSITY_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_INTENSITY_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_DEBOUNCE_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_DEBOUNCE_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_IDENTITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;

        $this->callback_wrappers[self::CALLBACK_INTENSITY] = array(10, 'callbackWrapperIntensity');
        $this->callback_wrappers[self::CALLBACK_INTENSITY_REACHED] = array(10, 'callbackWrapperIntensityReached');

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
     * Returns the current sound intensity.
     * 
     * The value corresponds to the
     * `upper envelop <https://en.wikipedia.org/wiki/Envelope_(waves)>`__
     * of the signal of the microphone capsule.
     * 
     * If you want to get the intensity periodically, it is recommended to use the
     * BrickletSoundIntensity::CALLBACK_INTENSITY callback and set the period with
     * BrickletSoundIntensity::setIntensityCallbackPeriod().
     * 
     * 
     * @return int
     */
    public function getIntensity()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_INTENSITY, $payload, 10);

        $payload = unpack('v1intensity', $data);

        return $payload['intensity'];
    }

    /**
     * Sets the period with which the BrickletSoundIntensity::CALLBACK_INTENSITY callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * The BrickletSoundIntensity::CALLBACK_INTENSITY callback is only triggered if the intensity has changed
     * since the last triggering.
     * 
     * @param int $period
     * 
     * @return void
     */
    public function setIntensityCallbackPeriod($period)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);

        $this->sendRequest(self::FUNCTION_SET_INTENSITY_CALLBACK_PERIOD, $payload, 0);
    }

    /**
     * Returns the period as set by BrickletSoundIntensity::setIntensityCallbackPeriod().
     * 
     * 
     * @return int
     */
    public function getIntensityCallbackPeriod()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_INTENSITY_CALLBACK_PERIOD, $payload, 12);

        $payload = unpack('V1period', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'period');
    }

    /**
     * Sets the thresholds for the BrickletSoundIntensity::CALLBACK_INTENSITY_REACHED callback.
     * 
     * The following options are possible:
     * 
     * <code>
     *  "Option", "Description"
     * 
     *  "'x'",    "Callback is turned off"
     *  "'o'",    "Callback is triggered when the intensity is *outside* the min and max values"
     *  "'i'",    "Callback is triggered when the intensity is *inside* the min and max values"
     *  "'<'",    "Callback is triggered when the intensity is smaller than the min value (max is ignored)"
     *  "'>'",    "Callback is triggered when the intensity is greater than the min value (max is ignored)"
     * </code>
     * 
     * @param string $option
     * @param int $min
     * @param int $max
     * 
     * @return void
     */
    public function setIntensityCallbackThreshold($option, $min, $max)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('c', ord($option));
        $payload .= pack('v', $min);
        $payload .= pack('v', $max);

        $this->sendRequest(self::FUNCTION_SET_INTENSITY_CALLBACK_THRESHOLD, $payload, 0);
    }

    /**
     * Returns the threshold as set by BrickletSoundIntensity::setIntensityCallbackThreshold().
     * 
     * 
     * @return array
     */
    public function getIntensityCallbackThreshold()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_INTENSITY_CALLBACK_THRESHOLD, $payload, 13);

        $payload = unpack('c1option/v1min/v1max', $data);

        $ret['option'] = chr($payload['option']);
        $ret['min'] = $payload['min'];
        $ret['max'] = $payload['max'];

        return $ret;
    }

    /**
     * Sets the period with which the threshold callback
     * 
     * * BrickletSoundIntensity::CALLBACK_INTENSITY_REACHED
     * 
     * is triggered, if the thresholds
     * 
     * * BrickletSoundIntensity::setIntensityCallbackThreshold()
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
     * Returns the debounce period as set by BrickletSoundIntensity::setDebouncePeriod().
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
    public function callbackWrapperIntensity($data)
    {
        $payload = unpack('v1intensity', $data);

        if (array_key_exists(self::CALLBACK_INTENSITY, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_INTENSITY];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_INTENSITY];

            call_user_func($function, $payload['intensity'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperIntensityReached($data)
    {
        $payload = unpack('v1intensity', $data);

        if (array_key_exists(self::CALLBACK_INTENSITY_REACHED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_INTENSITY_REACHED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_INTENSITY_REACHED];

            call_user_func($function, $payload['intensity'], $user_data);
        }
    }
}

?>
