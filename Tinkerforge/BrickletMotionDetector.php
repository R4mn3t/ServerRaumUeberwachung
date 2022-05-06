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
 * Passive infrared (PIR) motion sensor with 7m range
 */
class BrickletMotionDetector extends Device
{

    /**
     * This callback is called after a motion was detected.
     */
    const CALLBACK_MOTION_DETECTED = 2;

    /**
     * This callback is called when the detection cycle ended. When this
     * callback is called, a new motion can be detected again after approximately 2
     * seconds.
     */
    const CALLBACK_DETECTION_CYCLE_ENDED = 3;


    /**
     * @internal
     */
    const FUNCTION_GET_MOTION_DETECTED = 1;

    /**
     * @internal
     */
    const FUNCTION_SET_STATUS_LED_CONFIG = 4;

    /**
     * @internal
     */
    const FUNCTION_GET_STATUS_LED_CONFIG = 5;

    /**
     * @internal
     */
    const FUNCTION_GET_IDENTITY = 255;

    const MOTION_NOT_DETECTED = 0;
    const MOTION_DETECTED = 1;
    const STATUS_LED_CONFIG_OFF = 0;
    const STATUS_LED_CONFIG_ON = 1;
    const STATUS_LED_CONFIG_SHOW_STATUS = 2;

    const DEVICE_IDENTIFIER = 233;

    const DEVICE_DISPLAY_NAME = 'Motion Detector Bricklet';

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

        $this->response_expected[self::FUNCTION_GET_MOTION_DETECTED] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_STATUS_LED_CONFIG] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_STATUS_LED_CONFIG] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_IDENTITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;

        $this->callback_wrappers[self::CALLBACK_MOTION_DETECTED] = array(8, 'callbackWrapperMotionDetected');
        $this->callback_wrappers[self::CALLBACK_DETECTION_CYCLE_ENDED] = array(8, 'callbackWrapperDetectionCycleEnded');

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
     * Returns 1 if a motion was detected. How long this returns 1 after a motion
     * was detected can be adjusted with one of the small potentiometers on the
     * Motion Detector Bricklet, see :ref:`here
     * <motion_detector_bricklet_sensitivity_delay_block_time>`.
     * 
     * There is also a blue LED on the Bricklet that is on as long as the Bricklet is
     * in the "motion detected" state.
     * 
     * 
     * @return int
     */
    public function getMotionDetected()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_MOTION_DETECTED, $payload, 9);

        $payload = unpack('C1motion', $data);

        return $payload['motion'];
    }

    /**
     * Sets the status led configuration.
     * 
     * By default the status LED turns on if a motion is detected and off is no motion
     * is detected.
     * 
     * You can also turn the LED permanently on/off.
     * 
     * .. versionadded:: 2.0.1$nbsp;(Plugin)
     * 
     * @param int $config
     * 
     * @return void
     */
    public function setStatusLEDConfig($config)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $config);

        $this->sendRequest(self::FUNCTION_SET_STATUS_LED_CONFIG, $payload, 0);
    }

    /**
     * Returns the configuration as set by BrickletMotionDetector::setStatusLEDConfig().
     * 
     * .. versionadded:: 2.0.1$nbsp;(Plugin)
     * 
     * 
     * @return int
     */
    public function getStatusLEDConfig()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_STATUS_LED_CONFIG, $payload, 9);

        $payload = unpack('C1config', $data);

        return $payload['config'];
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
    public function callbackWrapperMotionDetected($data)
    {

        if (array_key_exists(self::CALLBACK_MOTION_DETECTED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_MOTION_DETECTED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_MOTION_DETECTED];

            call_user_func($function, $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperDetectionCycleEnded($data)
    {

        if (array_key_exists(self::CALLBACK_DETECTION_CYCLE_ENDED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_DETECTION_CYCLE_ENDED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_DETECTION_CYCLE_ENDED];

            call_user_func($function, $user_data);
        }
    }
}

?>
