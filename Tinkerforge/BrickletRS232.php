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
 * Communicates with RS232 devices
 */
class BrickletRS232 extends Device
{

    /**
     * This callback is called if new data is available. The message has
     * a maximum size of 60 characters. The actual length of the message
     * is given in addition.
     * 
     * To enable this callback, use BrickletRS232::enableReadCallback().
     */
    const CALLBACK_READ = 8;

    /**
     * This callback is called if an error occurs.
     * Possible errors are overrun, parity or framing error.
     * 
     * .. versionadded:: 2.0.1$nbsp;(Plugin)
     */
    const CALLBACK_ERROR = 9;

    /**
     * This callback is called if at least one frame of data is readable. The frame size is configured with BrickletRS232::setFrameReadableCallbackConfiguration().
     * The frame count parameter is the number of frames that can be read.
     * This callback is triggered only once until BrickletRS232::read() or BrickletRS232::readFrame() is called. This means, that if you have configured a frame size of X bytes,
     * you can read exactly X bytes using the BrickletRS232::readFrame() function, every time the callback triggers without checking the frame count parameter.
     * 
     * .. versionadded:: 2.0.4$nbsp;(Plugin)
     */
    const CALLBACK_FRAME_READABLE = 13;

    /**
     * This callback is called if new data is available. The message has
     * a maximum size of 60 characters. The actual length of the message
     * is given in addition.
     *
     * To enable this callback, use BrickletRS232::enableReadCallback().
     */
    const CALLBACK_READ_CALLBACK = self::CALLBACK_READ; // for backward compatibility

    /**
     * This callback is called if an error occurs.
     * Possible errors are overrun, parity or framing error.
     *
     * .. versionadded:: 2.0.1$nbsp;(Plugin)
     */
    const CALLBACK_ERROR_CALLBACK = self::CALLBACK_ERROR; // for backward compatibility


    /**
     * @internal
     */
    const FUNCTION_WRITE = 1;

    /**
     * @internal
     */
    const FUNCTION_READ = 2;

    /**
     * @internal
     */
    const FUNCTION_ENABLE_READ_CALLBACK = 3;

    /**
     * @internal
     */
    const FUNCTION_DISABLE_READ_CALLBACK = 4;

    /**
     * @internal
     */
    const FUNCTION_IS_READ_CALLBACK_ENABLED = 5;

    /**
     * @internal
     */
    const FUNCTION_SET_CONFIGURATION = 6;

    /**
     * @internal
     */
    const FUNCTION_GET_CONFIGURATION = 7;

    /**
     * @internal
     */
    const FUNCTION_SET_BREAK_CONDITION = 10;

    /**
     * @internal
     */
    const FUNCTION_SET_FRAME_READABLE_CALLBACK_CONFIGURATION = 11;

    /**
     * @internal
     */
    const FUNCTION_GET_FRAME_READABLE_CALLBACK_CONFIGURATION = 12;

    /**
     * @internal
     */
    const FUNCTION_READ_FRAME = 14;

    /**
     * @internal
     */
    const FUNCTION_GET_IDENTITY = 255;

    const BAUDRATE_300 = 0;
    const BAUDRATE_600 = 1;
    const BAUDRATE_1200 = 2;
    const BAUDRATE_2400 = 3;
    const BAUDRATE_4800 = 4;
    const BAUDRATE_9600 = 5;
    const BAUDRATE_14400 = 6;
    const BAUDRATE_19200 = 7;
    const BAUDRATE_28800 = 8;
    const BAUDRATE_38400 = 9;
    const BAUDRATE_57600 = 10;
    const BAUDRATE_115200 = 11;
    const BAUDRATE_230400 = 12;
    const PARITY_NONE = 0;
    const PARITY_ODD = 1;
    const PARITY_EVEN = 2;
    const PARITY_FORCED_PARITY_1 = 3;
    const PARITY_FORCED_PARITY_0 = 4;
    const STOPBITS_1 = 1;
    const STOPBITS_2 = 2;
    const WORDLENGTH_5 = 5;
    const WORDLENGTH_6 = 6;
    const WORDLENGTH_7 = 7;
    const WORDLENGTH_8 = 8;
    const HARDWARE_FLOWCONTROL_OFF = 0;
    const HARDWARE_FLOWCONTROL_ON = 1;
    const SOFTWARE_FLOWCONTROL_OFF = 0;
    const SOFTWARE_FLOWCONTROL_ON = 1;
    const ERROR_OVERRUN = 1;
    const ERROR_PARITY = 2;
    const ERROR_FRAMING = 4;

    const DEVICE_IDENTIFIER = 254;

    const DEVICE_DISPLAY_NAME = 'RS232 Bricklet';

    /**
     * Creates an object with the unique device ID $uid. This object can
     * then be added to the IP connection.
     *
     * @param string $uid
     */
    public function __construct($uid, $ipcon)
    {
        parent::__construct($uid, $ipcon, self::DEVICE_IDENTIFIER, self::DEVICE_DISPLAY_NAME);

        $this->api_version = array(2, 0, 3);

        $this->response_expected[self::FUNCTION_WRITE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_READ] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_ENABLE_READ_CALLBACK] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_DISABLE_READ_CALLBACK] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_IS_READ_CALLBACK_ENABLED] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_CONFIGURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_BREAK_CONDITION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_SET_FRAME_READABLE_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_FRAME_READABLE_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_READ_FRAME] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_IDENTITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;

        $this->callback_wrappers[self::CALLBACK_READ] = array(69, 'callbackWrapperRead');
        $this->callback_wrappers[self::CALLBACK_ERROR] = array(9, 'callbackWrapperError');
        $this->callback_wrappers[self::CALLBACK_FRAME_READABLE] = array(9, 'callbackWrapperFrameReadable');

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
     * Writes a string of up to 60 characters to the RS232 interface. The string
     * can be binary data, ASCII or similar is not necessary.
     * 
     * The length of the string has to be given as an additional parameter.
     * 
     * The return value is the number of bytes that could be written.
     * 
     * See BrickletRS232::setConfiguration() for configuration possibilities
     * regarding baudrate, parity and so on.
     * 
     * @param string[] $message
     * @param int $length
     * 
     * @return int
     */
    public function write($message, $length)
    {
        $this->checkValidity();

        $payload = '';
        for ($i = 0; $i < count($message) && $i < 60; $i++) {
            $payload .= pack('c', ord($message[$i]));
        }
        for ($i = count($message); $i < 60; $i++) {
            $payload .= pack('c', 0);
        }
        $payload .= pack('C', $length);

        $data = $this->sendRequest(self::FUNCTION_WRITE, $payload, 9);

        $payload = unpack('C1written', $data);

        return $payload['written'];
    }

    /**
     * Returns the currently buffered message. The maximum length
     * of message is 60. If the returned length is 0, no new data was available.
     * 
     * Instead of polling with this function, you can also use
     * callbacks. See BrickletRS232::enableReadCallback() and BrickletRS232::CALLBACK_READ callback.
     * 
     * 
     * @return array
     */
    public function read()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_READ, $payload, 69);

        $payload = unpack('c60message/C1length', $data);

        $ret['message'] = IPConnection::collectUnpackedCharArray($payload, 'message', 60);
        $ret['length'] = $payload['length'];

        return $ret;
    }

    /**
     * Enables the BrickletRS232::CALLBACK_READ callback. This will disable the BrickletRS232::CALLBACK_FRAME_READABLE callback.
     * 
     * By default the callback is disabled.
     * 
     * 
     * @return void
     */
    public function enableReadCallback()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_ENABLE_READ_CALLBACK, $payload, 0);
    }

    /**
     * Disables the BrickletRS232::CALLBACK_READ callback.
     * 
     * By default the callback is disabled.
     * 
     * 
     * @return void
     */
    public function disableReadCallback()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_DISABLE_READ_CALLBACK, $payload, 0);
    }

    /**
     * Returns *true* if the BrickletRS232::CALLBACK_READ callback is enabled,
     * *false* otherwise.
     * 
     * 
     * @return bool
     */
    public function isReadCallbackEnabled()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_IS_READ_CALLBACK_ENABLED, $payload, 9);

        $payload = unpack('C1enabled', $data);

        return (bool)$payload['enabled'];
    }

    /**
     * Sets the configuration for the RS232 communication.
     * 
     * Hard-/Software flow control can either be on or off but not both simultaneously on.
     * 
     * @param int $baudrate
     * @param int $parity
     * @param int $stopbits
     * @param int $wordlength
     * @param int $hardware_flowcontrol
     * @param int $software_flowcontrol
     * 
     * @return void
     */
    public function setConfiguration($baudrate, $parity, $stopbits, $wordlength, $hardware_flowcontrol, $software_flowcontrol)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $baudrate);
        $payload .= pack('C', $parity);
        $payload .= pack('C', $stopbits);
        $payload .= pack('C', $wordlength);
        $payload .= pack('C', $hardware_flowcontrol);
        $payload .= pack('C', $software_flowcontrol);

        $this->sendRequest(self::FUNCTION_SET_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the configuration as set by BrickletRS232::setConfiguration().
     * 
     * 
     * @return array
     */
    public function getConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_CONFIGURATION, $payload, 14);

        $payload = unpack('C1baudrate/C1parity/C1stopbits/C1wordlength/C1hardware_flowcontrol/C1software_flowcontrol', $data);

        $ret['baudrate'] = $payload['baudrate'];
        $ret['parity'] = $payload['parity'];
        $ret['stopbits'] = $payload['stopbits'];
        $ret['wordlength'] = $payload['wordlength'];
        $ret['hardware_flowcontrol'] = $payload['hardware_flowcontrol'];
        $ret['software_flowcontrol'] = $payload['software_flowcontrol'];

        return $ret;
    }

    /**
     * Sets a break condition (the TX output is forced to a logic 0 state).
     * The parameter sets the hold-time of the break condition.
     * 
     * .. versionadded:: 2.0.2$nbsp;(Plugin)
     * 
     * @param int $break_time
     * 
     * @return void
     */
    public function setBreakCondition($break_time)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $break_time);

        $this->sendRequest(self::FUNCTION_SET_BREAK_CONDITION, $payload, 0);
    }

    /**
     * Configures the BrickletRS232::CALLBACK_FRAME_READABLE callback. The frame size is the number of bytes, that have to be readable to trigger the callback.
     * A frame size of 0 disables the callback. A frame size greater than 0 enables the callback and disables the BrickletRS232::CALLBACK_READ callback.
     * 
     * By default the callback is disabled.
     * 
     * .. versionadded:: 2.0.4$nbsp;(Plugin)
     * 
     * @param int $frame_size
     * 
     * @return void
     */
    public function setFrameReadableCallbackConfiguration($frame_size)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $frame_size);

        $this->sendRequest(self::FUNCTION_SET_FRAME_READABLE_CALLBACK_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the callback configuration as set by BrickletRS232::setFrameReadableCallbackConfiguration().
     * 
     * .. versionadded:: 2.0.4$nbsp;(Plugin)
     * 
     * 
     * @return int
     */
    public function getFrameReadableCallbackConfiguration()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_FRAME_READABLE_CALLBACK_CONFIGURATION, $payload, 9);

        $payload = unpack('C1frame_size', $data);

        return $payload['frame_size'];
    }

    /**
     * Returns up to one frame of bytes from the read buffer.
     * The frame size is configured with BrickletRS232::setFrameReadableCallbackConfiguration().
     * If the returned length is 0, no new data was available.
     * 
     * .. versionadded:: 2.0.4$nbsp;(Plugin)
     * 
     * 
     * @return array
     */
    public function readFrame()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_READ_FRAME, $payload, 69);

        $payload = unpack('c60message/C1length', $data);

        $ret['message'] = IPConnection::collectUnpackedCharArray($payload, 'message', 60);
        $ret['length'] = $payload['length'];

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
    public function callbackWrapperRead($data)
    {
        $payload = unpack('c60message/C1length', $data);
        $payload['message'] = IPConnection::collectUnpackedCharArray($payload, 'message', 60);

        if (array_key_exists(self::CALLBACK_READ, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_READ];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_READ];

            call_user_func($function, $payload['message'], $payload['length'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperError($data)
    {
        $payload = unpack('C1error', $data);

        if (array_key_exists(self::CALLBACK_ERROR, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_ERROR];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_ERROR];

            call_user_func($function, $payload['error'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperFrameReadable($data)
    {
        $payload = unpack('C1frame_count', $data);

        if (array_key_exists(self::CALLBACK_FRAME_READABLE, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_FRAME_READABLE];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_FRAME_READABLE];

            call_user_func($function, $payload['frame_count'], $user_data);
        }
    }
}

?>
