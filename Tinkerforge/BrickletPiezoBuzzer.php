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
 * Creates 1kHz beep
 */
class BrickletPiezoBuzzer extends Device
{

    /**
     * This callback is triggered if a beep set by BrickletPiezoBuzzer::beep() is finished
     */
    const CALLBACK_BEEP_FINISHED = 3;

    /**
     * This callback is triggered if the playback of the morse code set by
     * BrickletPiezoBuzzer::morseCode() is finished.
     */
    const CALLBACK_MORSE_CODE_FINISHED = 4;


    /**
     * @internal
     */
    const FUNCTION_BEEP = 1;

    /**
     * @internal
     */
    const FUNCTION_MORSE_CODE = 2;

    /**
     * @internal
     */
    const FUNCTION_GET_IDENTITY = 255;


    const DEVICE_IDENTIFIER = 214;

    const DEVICE_DISPLAY_NAME = 'Piezo Buzzer Bricklet';

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

        $this->response_expected[self::FUNCTION_BEEP] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_MORSE_CODE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_IDENTITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;

        $this->callback_wrappers[self::CALLBACK_BEEP_FINISHED] = array(8, 'callbackWrapperBeepFinished');
        $this->callback_wrappers[self::CALLBACK_MORSE_CODE_FINISHED] = array(8, 'callbackWrapperMorseCodeFinished');

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
     * Beeps for the given duration.
     * 
     * @param int $duration
     * 
     * @return void
     */
    public function beep($duration)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $duration);

        $this->sendRequest(self::FUNCTION_BEEP, $payload, 0);
    }

    /**
     * Sets morse code that will be played by the piezo buzzer. The morse code
     * is given as a string consisting of "." (dot), "-" (minus) and " " (space)
     * for *dits*, *dahs* and *pauses*. Every other character is ignored.
     * 
     * For example: If you set the string "...---...", the piezo buzzer will beep
     * nine times with the durations "short short short long long long short
     * short short".
     * 
     * @param string $morse
     * 
     * @return void
     */
    public function morseCode($morse)
    {
        $this->checkValidity();

        $payload = '';
        for ($i = 0; $i < strlen($morse) && $i < 60; $i++) {
            $payload .= pack('c', ord($morse[$i]));
        }
        for ($i = strlen($morse); $i < 60; $i++) {
            $payload .= pack('c', 0);
        }

        $this->sendRequest(self::FUNCTION_MORSE_CODE, $payload, 0);
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
    public function callbackWrapperBeepFinished($data)
    {

        if (array_key_exists(self::CALLBACK_BEEP_FINISHED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_BEEP_FINISHED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_BEEP_FINISHED];

            call_user_func($function, $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperMorseCodeFinished($data)
    {

        if (array_key_exists(self::CALLBACK_MORSE_CODE_FINISHED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_MORSE_CODE_FINISHED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_MORSE_CODE_FINISHED];

            call_user_func($function, $user_data);
        }
    }
}

?>
