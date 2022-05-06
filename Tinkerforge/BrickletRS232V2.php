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
class BrickletRS232V2 extends Device
{

    /**
     * See CALLBACK_READ
     */
    const CALLBACK_READ_LOW_LEVEL = 12;

    /**
     * This callback is called if a new error occurs. It returns
     * the current overrun and parity error count.
     */
    const CALLBACK_ERROR_COUNT = 13;

    /**
     * This callback is called if at least one frame of data is readable. The frame size is configured with BrickletRS232V2::setFrameReadableCallbackConfiguration().
     * The frame count parameter is the number of frames that can be read.
     * This callback is triggered only once until BrickletRS232V2::read() is called. This means, that if you have configured a frame size of X bytes,
     * you can read exactly X bytes using the BrickletRS232V2::read() function, every time the callback triggers without checking the frame count parameter.
     * 
     * .. versionadded:: 2.0.3$nbsp;(Plugin)
     */
    const CALLBACK_FRAME_READABLE = 16;

    /**
     * This callback is called if new data is available.
     * 
     * To enable this callback, use BrickletRS232V2::enableReadCallback().
     * 
     * <note>
     *  If reconstructing the value fails, the callback is triggered with NULL for message.
     * </note>
     */
    const CALLBACK_READ = -12;


    /**
     * @internal
     */
    const FUNCTION_WRITE_LOW_LEVEL = 1;

    /**
     * @internal
     */
    const FUNCTION_READ_LOW_LEVEL = 2;

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
    const FUNCTION_SET_BUFFER_CONFIG = 8;

    /**
     * @internal
     */
    const FUNCTION_GET_BUFFER_CONFIG = 9;

    /**
     * @internal
     */
    const FUNCTION_GET_BUFFER_STATUS = 10;

    /**
     * @internal
     */
    const FUNCTION_GET_ERROR_COUNT = 11;

    /**
     * @internal
     */
    const FUNCTION_SET_FRAME_READABLE_CALLBACK_CONFIGURATION = 14;

    /**
     * @internal
     */
    const FUNCTION_GET_FRAME_READABLE_CALLBACK_CONFIGURATION = 15;

    /**
     * @internal
     */
    const FUNCTION_GET_SPITFP_ERROR_COUNT = 234;

    /**
     * @internal
     */
    const FUNCTION_SET_BOOTLOADER_MODE = 235;

    /**
     * @internal
     */
    const FUNCTION_GET_BOOTLOADER_MODE = 236;

    /**
     * @internal
     */
    const FUNCTION_SET_WRITE_FIRMWARE_POINTER = 237;

    /**
     * @internal
     */
    const FUNCTION_WRITE_FIRMWARE = 238;

    /**
     * @internal
     */
    const FUNCTION_SET_STATUS_LED_CONFIG = 239;

    /**
     * @internal
     */
    const FUNCTION_GET_STATUS_LED_CONFIG = 240;

    /**
     * @internal
     */
    const FUNCTION_GET_CHIP_TEMPERATURE = 242;

    /**
     * @internal
     */
    const FUNCTION_RESET = 243;

    /**
     * @internal
     */
    const FUNCTION_WRITE_UID = 248;

    /**
     * @internal
     */
    const FUNCTION_READ_UID = 249;

    /**
     * @internal
     */
    const FUNCTION_GET_IDENTITY = 255;

    const PARITY_NONE = 0;
    const PARITY_ODD = 1;
    const PARITY_EVEN = 2;
    const STOPBITS_1 = 1;
    const STOPBITS_2 = 2;
    const WORDLENGTH_5 = 5;
    const WORDLENGTH_6 = 6;
    const WORDLENGTH_7 = 7;
    const WORDLENGTH_8 = 8;
    const FLOWCONTROL_OFF = 0;
    const FLOWCONTROL_SOFTWARE = 1;
    const FLOWCONTROL_HARDWARE = 2;
    const BOOTLOADER_MODE_BOOTLOADER = 0;
    const BOOTLOADER_MODE_FIRMWARE = 1;
    const BOOTLOADER_MODE_BOOTLOADER_WAIT_FOR_REBOOT = 2;
    const BOOTLOADER_MODE_FIRMWARE_WAIT_FOR_REBOOT = 3;
    const BOOTLOADER_MODE_FIRMWARE_WAIT_FOR_ERASE_AND_REBOOT = 4;
    const BOOTLOADER_STATUS_OK = 0;
    const BOOTLOADER_STATUS_INVALID_MODE = 1;
    const BOOTLOADER_STATUS_NO_CHANGE = 2;
    const BOOTLOADER_STATUS_ENTRY_FUNCTION_NOT_PRESENT = 3;
    const BOOTLOADER_STATUS_DEVICE_IDENTIFIER_INCORRECT = 4;
    const BOOTLOADER_STATUS_CRC_MISMATCH = 5;
    const STATUS_LED_CONFIG_OFF = 0;
    const STATUS_LED_CONFIG_ON = 1;
    const STATUS_LED_CONFIG_SHOW_HEARTBEAT = 2;
    const STATUS_LED_CONFIG_SHOW_STATUS = 3;

    const DEVICE_IDENTIFIER = 2108;

    const DEVICE_DISPLAY_NAME = 'RS232 Bricklet 2.0';

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

        $this->response_expected[self::FUNCTION_WRITE_LOW_LEVEL] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_READ_LOW_LEVEL] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_ENABLE_READ_CALLBACK] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_DISABLE_READ_CALLBACK] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_IS_READ_CALLBACK_ENABLED] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_CONFIGURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_BUFFER_CONFIG] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_BUFFER_CONFIG] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_BUFFER_STATUS] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_ERROR_COUNT] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_FRAME_READABLE_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_FRAME_READABLE_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_SPITFP_ERROR_COUNT] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_BOOTLOADER_MODE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_BOOTLOADER_MODE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_WRITE_FIRMWARE_POINTER] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_WRITE_FIRMWARE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_STATUS_LED_CONFIG] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_STATUS_LED_CONFIG] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_CHIP_TEMPERATURE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_RESET] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_WRITE_UID] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_READ_UID] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_IDENTITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;

        $this->callback_wrappers[self::CALLBACK_READ_LOW_LEVEL] = array(72, 'callbackWrapperReadLowLevel');
        $this->callback_wrappers[self::CALLBACK_ERROR_COUNT] = array(16, 'callbackWrapperErrorCount');
        $this->callback_wrappers[self::CALLBACK_FRAME_READABLE] = array(10, 'callbackWrapperFrameReadable');

        $this->high_level_callbacks[self::CALLBACK_READ] = array('data' => NULL);

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
     * Writes characters to the RS232 interface. The characters can be binary data,
     * ASCII or similar is not necessary.
     * 
     * The return value is the number of characters that were written.
     * 
     * See BrickletRS232V2::setConfiguration() for configuration possibilities
     * regarding baud rate, parity and so on.
     * 
     * @param int $message_length
     * @param int $message_chunk_offset
     * @param string[] $message_chunk_data
     * 
     * @return int
     */
    public function writeLowLevel($message_length, $message_chunk_offset, $message_chunk_data)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $message_length);
        $payload .= pack('v', $message_chunk_offset);
        for ($i = 0; $i < count($message_chunk_data) && $i < 60; $i++) {
            $payload .= pack('c', ord($message_chunk_data[$i]));
        }
        for ($i = count($message_chunk_data); $i < 60; $i++) {
            $payload .= pack('c', 0);
        }

        $data = $this->sendRequest(self::FUNCTION_WRITE_LOW_LEVEL, $payload, 9);

        $payload = unpack('C1message_chunk_written', $data);

        return $payload['message_chunk_written'];
    }

    /**
     * Returns up to *length* characters from receive buffer.
     * 
     * Instead of polling with this function, you can also use
     * callbacks. But note that this function will return available
     * data only when the read callback is disabled.
     * See BrickletRS232V2::enableReadCallback() and BrickletRS232V2::CALLBACK_READ callback.
     * 
     * @param int $length
     * 
     * @return array
     */
    public function readLowLevel($length)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('v', $length);

        $data = $this->sendRequest(self::FUNCTION_READ_LOW_LEVEL, $payload, 72);

        $payload = unpack('v1message_length/v1message_chunk_offset/c60message_chunk_data', $data);

        $ret['message_length'] = $payload['message_length'];
        $ret['message_chunk_offset'] = $payload['message_chunk_offset'];
        $ret['message_chunk_data'] = IPConnection::collectUnpackedCharArray($payload, 'message_chunk_data', 60);

        return $ret;
    }

    /**
     * Enables the BrickletRS232V2::CALLBACK_READ callback. This will disable the BrickletRS232V2::CALLBACK_FRAME_READABLE callback.
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
     * Disables the BrickletRS232V2::CALLBACK_READ callback.
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
     * Returns *true* if the BrickletRS232V2::CALLBACK_READ callback is enabled,
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
     * @param int $baudrate
     * @param int $parity
     * @param int $stopbits
     * @param int $wordlength
     * @param int $flowcontrol
     * 
     * @return void
     */
    public function setConfiguration($baudrate, $parity, $stopbits, $wordlength, $flowcontrol)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $baudrate);
        $payload .= pack('C', $parity);
        $payload .= pack('C', $stopbits);
        $payload .= pack('C', $wordlength);
        $payload .= pack('C', $flowcontrol);

        $this->sendRequest(self::FUNCTION_SET_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the configuration as set by BrickletRS232V2::setConfiguration().
     * 
     * 
     * @return array
     */
    public function getConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_CONFIGURATION, $payload, 16);

        $payload = unpack('V1baudrate/C1parity/C1stopbits/C1wordlength/C1flowcontrol', $data);

        $ret['baudrate'] = IPConnection::fixUnpackedUInt32($payload, 'baudrate');
        $ret['parity'] = $payload['parity'];
        $ret['stopbits'] = $payload['stopbits'];
        $ret['wordlength'] = $payload['wordlength'];
        $ret['flowcontrol'] = $payload['flowcontrol'];

        return $ret;
    }

    /**
     * Sets the send and receive buffer size in byte. In total the buffers have to be
     * 10240 byte (10KiB) in size, the minimum buffer size is 1024 byte (1KiB) for each.
     * 
     * The current buffer content is lost if this function is called.
     * 
     * The send buffer holds data that is given by BrickletRS232V2::write() and
     * can not be written yet. The receive buffer holds data that is
     * received through RS232 but could not yet be send to the
     * user, either by BrickletRS232V2::read() or through BrickletRS232V2::CALLBACK_READ callback.
     * 
     * @param int $send_buffer_size
     * @param int $receive_buffer_size
     * 
     * @return void
     */
    public function setBufferConfig($send_buffer_size, $receive_buffer_size)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $send_buffer_size);
        $payload .= pack('v', $receive_buffer_size);

        $this->sendRequest(self::FUNCTION_SET_BUFFER_CONFIG, $payload, 0);
    }

    /**
     * Returns the buffer configuration as set by BrickletRS232V2::setBufferConfig().
     * 
     * 
     * @return array
     */
    public function getBufferConfig()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_BUFFER_CONFIG, $payload, 12);

        $payload = unpack('v1send_buffer_size/v1receive_buffer_size', $data);

        $ret['send_buffer_size'] = $payload['send_buffer_size'];
        $ret['receive_buffer_size'] = $payload['receive_buffer_size'];

        return $ret;
    }

    /**
     * Returns the currently used bytes for the send and received buffer.
     * 
     * See BrickletRS232V2::setBufferConfig() for buffer size configuration.
     * 
     * 
     * @return array
     */
    public function getBufferStatus()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_BUFFER_STATUS, $payload, 12);

        $payload = unpack('v1send_buffer_used/v1receive_buffer_used', $data);

        $ret['send_buffer_used'] = $payload['send_buffer_used'];
        $ret['receive_buffer_used'] = $payload['receive_buffer_used'];

        return $ret;
    }

    /**
     * Returns the current number of overrun and parity errors.
     * 
     * 
     * @return array
     */
    public function getErrorCount()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ERROR_COUNT, $payload, 16);

        $payload = unpack('V1error_count_overrun/V1error_count_parity', $data);

        $ret['error_count_overrun'] = IPConnection::fixUnpackedUInt32($payload, 'error_count_overrun');
        $ret['error_count_parity'] = IPConnection::fixUnpackedUInt32($payload, 'error_count_parity');

        return $ret;
    }

    /**
     * Configures the BrickletRS232V2::CALLBACK_FRAME_READABLE callback. The frame size is the number of bytes, that have to be readable to trigger the callback.
     * A frame size of 0 disables the callback. A frame size greater than 0 enables the callback and disables the BrickletRS232V2::CALLBACK_READ callback.
     * 
     * By default the callback is disabled.
     * 
     * .. versionadded:: 2.0.3$nbsp;(Plugin)
     * 
     * @param int $frame_size
     * 
     * @return void
     */
    public function setFrameReadableCallbackConfiguration($frame_size)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $frame_size);

        $this->sendRequest(self::FUNCTION_SET_FRAME_READABLE_CALLBACK_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the callback configuration as set by BrickletRS232V2::setFrameReadableCallbackConfiguration().
     * 
     * .. versionadded:: 2.0.3$nbsp;(Plugin)
     * 
     * 
     * @return int
     */
    public function getFrameReadableCallbackConfiguration()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_FRAME_READABLE_CALLBACK_CONFIGURATION, $payload, 10);

        $payload = unpack('v1frame_size', $data);

        return $payload['frame_size'];
    }

    /**
     * Returns the error count for the communication between Brick and Bricklet.
     * 
     * The errors are divided into
     * 
     * * ACK checksum errors,
     * * message checksum errors,
     * * framing errors and
     * * overflow errors.
     * 
     * The errors counts are for errors that occur on the Bricklet side. All
     * Bricks have a similar function that returns the errors on the Brick side.
     * 
     * 
     * @return array
     */
    public function getSPITFPErrorCount()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_SPITFP_ERROR_COUNT, $payload, 24);

        $payload = unpack('V1error_count_ack_checksum/V1error_count_message_checksum/V1error_count_frame/V1error_count_overflow', $data);

        $ret['error_count_ack_checksum'] = IPConnection::fixUnpackedUInt32($payload, 'error_count_ack_checksum');
        $ret['error_count_message_checksum'] = IPConnection::fixUnpackedUInt32($payload, 'error_count_message_checksum');
        $ret['error_count_frame'] = IPConnection::fixUnpackedUInt32($payload, 'error_count_frame');
        $ret['error_count_overflow'] = IPConnection::fixUnpackedUInt32($payload, 'error_count_overflow');

        return $ret;
    }

    /**
     * Sets the bootloader mode and returns the status after the requested
     * mode change was instigated.
     * 
     * You can change from bootloader mode to firmware mode and vice versa. A change
     * from bootloader mode to firmware mode will only take place if the entry function,
     * device identifier and CRC are present and correct.
     * 
     * This function is used by Brick Viewer during flashing. It should not be
     * necessary to call it in a normal user program.
     * 
     * @param int $mode
     * 
     * @return int
     */
    public function setBootloaderMode($mode)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $mode);

        $data = $this->sendRequest(self::FUNCTION_SET_BOOTLOADER_MODE, $payload, 9);

        $payload = unpack('C1status', $data);

        return $payload['status'];
    }

    /**
     * Returns the current bootloader mode, see BrickletRS232V2::setBootloaderMode().
     * 
     * 
     * @return int
     */
    public function getBootloaderMode()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_BOOTLOADER_MODE, $payload, 9);

        $payload = unpack('C1mode', $data);

        return $payload['mode'];
    }

    /**
     * Sets the firmware pointer for BrickletRS232V2::writeFirmware(). The pointer has
     * to be increased by chunks of size 64. The data is written to flash
     * every 4 chunks (which equals to one page of size 256).
     * 
     * This function is used by Brick Viewer during flashing. It should not be
     * necessary to call it in a normal user program.
     * 
     * @param int $pointer
     * 
     * @return void
     */
    public function setWriteFirmwarePointer($pointer)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $pointer);

        $this->sendRequest(self::FUNCTION_SET_WRITE_FIRMWARE_POINTER, $payload, 0);
    }

    /**
     * Writes 64 Bytes of firmware at the position as written by
     * BrickletRS232V2::setWriteFirmwarePointer() before. The firmware is written
     * to flash every 4 chunks.
     * 
     * You can only write firmware in bootloader mode.
     * 
     * This function is used by Brick Viewer during flashing. It should not be
     * necessary to call it in a normal user program.
     * 
     * @param int[] $data
     * 
     * @return int
     */
    public function writeFirmware($data)
    {
        $this->checkValidity();

        $payload = '';
        for ($i = 0; $i < 64; $i++) {
            $payload .= pack('C', $data[$i]);
        }

        $data = $this->sendRequest(self::FUNCTION_WRITE_FIRMWARE, $payload, 9);

        $payload = unpack('C1status', $data);

        return $payload['status'];
    }

    /**
     * Sets the status LED configuration. By default the LED shows
     * communication traffic between Brick and Bricklet, it flickers once
     * for every 10 received data packets.
     * 
     * You can also turn the LED permanently on/off or show a heartbeat.
     * 
     * If the Bricklet is in bootloader mode, the LED is will show heartbeat by default.
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
     * Returns the configuration as set by BrickletRS232V2::setStatusLEDConfig()
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
     * Returns the temperature as measured inside the microcontroller. The
     * value returned is not the ambient temperature!
     * 
     * The temperature is only proportional to the real temperature and it has bad
     * accuracy. Practically it is only useful as an indicator for
     * temperature changes.
     * 
     * 
     * @return int
     */
    public function getChipTemperature()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_CHIP_TEMPERATURE, $payload, 10);

        $payload = unpack('v1temperature', $data);

        return IPConnection::fixUnpackedInt16($payload, 'temperature');
    }

    /**
     * Calling this function will reset the Bricklet. All configurations
     * will be lost.
     * 
     * After a reset you have to create new device objects,
     * calling functions on the existing ones will result in
     * undefined behavior!
     * 
     * 
     * @return void
     */
    public function reset()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_RESET, $payload, 0);
    }

    /**
     * Writes a new UID into flash. If you want to set a new UID
     * you have to decode the Base58 encoded UID string into an
     * integer first.
     * 
     * We recommend that you use Brick Viewer to change the UID.
     * 
     * @param int $uid
     * 
     * @return void
     */
    public function writeUID($uid)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $uid);

        $this->sendRequest(self::FUNCTION_WRITE_UID, $payload, 0);
    }

    /**
     * Returns the current UID as an integer. Encode as
     * Base58 to get the usual string version.
     * 
     * 
     * @return int
     */
    public function readUID()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_READ_UID, $payload, 12);

        $payload = unpack('V1uid', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'uid');
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
     * Writes characters to the RS232 interface. The characters can be binary data,
     * ASCII or similar is not necessary.
     * 
     * The return value is the number of characters that were written.
     * 
     * See BrickletRS232V2::setConfiguration() for configuration possibilities
     * regarding baud rate, parity and so on.
     * 
     * @param string[] $message
     * 
     * @return int
     */
    public function write($message)
    {
        if (count($message) > 65535) {
            throw new \InvalidArgumentException('Message can be at most 65535 items long');
        }

        $message_length = count($message);
        $message_chunk_offset = 0;

        if ($message_length === 0) {
            $message_chunk_data = array_fill(0, 60, '\0');
            $ret = $this->writeLowLevel($message_length, $message_chunk_offset, $message_chunk_data);
            $message_written = $ret;
        } else {
            $message_written = 0;

            while ($message_chunk_offset < $message_length) {
                $message_chunk_data = $this->createChunkData($message, $message_chunk_offset, 60, '\0');
                $ret = $this->writeLowLevel($message_length, $message_chunk_offset, $message_chunk_data);
                $message_written += $ret;

                if ($ret < 60) {
                    break; # either last chunk or short write
                }

                $message_chunk_offset += 60;
            }
        }

        return $message_written;
    }

    /**
     * Returns up to *length* characters from receive buffer.
     * 
     * Instead of polling with this function, you can also use
     * callbacks. But note that this function will return available
     * data only when the read callback is disabled.
     * See BrickletRS232V2::enableReadCallback() and BrickletRS232V2::CALLBACK_READ callback.
     * 
     * @param int $length
     * 
     * @return array
     */
    public function read($length)
    {
        $ret = $this->readLowLevel($length);
        $message_length = $ret['message_length'];
        $message_out_of_sync = $ret['message_chunk_offset'] != 0;
        $message_data = $ret['message_chunk_data'];

        while (!$message_out_of_sync && count($message_data) < $message_length) {
            $ret = $this->readLowLevel($length);
            $message_length = $ret['message_length'];
            $message_out_of_sync = $ret['message_chunk_offset'] != count($message_data);
            $message_data = array_merge($message_data, $ret['message_chunk_data']);
        }

        if ($message_out_of_sync) { // discard remaining stream to bring it back in-sync
            while ($ret['message_chunk_offset'] + 60 < $message_length) {
                $ret = $this->readLowLevel($length);
                $message_length = $ret['message_length'];
            }

            throw new StreamOutOfSyncException('Message stream is out-of-sync');
        }

        return array_slice($message_data, 0, $message_length);
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
    public function callbackWrapperReadLowLevel($data)
    {
        $payload = unpack('v1message_length/v1message_chunk_offset/c60message_chunk_data', $data);
        $payload['message_chunk_data'] = IPConnection::collectUnpackedCharArray($payload, 'message_chunk_data', 60);

        $high_level_callback = &$this->high_level_callbacks[self::CALLBACK_READ];
        $message_chunk_length = min($payload['message_length'] - $payload['message_chunk_offset'], 60);

        if ($high_level_callback['data'] === NULL) { // no stream in-progress
            if ($payload['message_chunk_offset'] === 0) { // stream starts
                $high_level_callback['data'] = array_slice($payload['message_chunk_data'], 0, $message_chunk_length);

                if (count($high_level_callback['data']) >= $payload['message_length']) { // stream complete
                    if (array_key_exists(self::CALLBACK_READ, $this->registered_callbacks)) {
                        $function = $this->registered_callbacks[self::CALLBACK_READ];
                        $user_data = $this->registered_callback_user_data[self::CALLBACK_READ];
                        $payload['message'] = $high_level_callback['data'];

                        call_user_func($function, $payload['message'], $user_data);
                    }

                    $high_level_callback['data'] = NULL;
                }
            } else { // ignore tail of current stream, wait for next stream start
            }
        } else { // stream in-progress
            if ($payload['message_chunk_offset'] !== count($high_level_callback['data'])) { // stream out-of-sync
                $high_level_callback['data'] = NULL;

                if (array_key_exists(self::CALLBACK_READ, $this->registered_callbacks)) {
                    $function = $this->registered_callbacks[self::CALLBACK_READ];
                    $user_data = $this->registered_callback_user_data[self::CALLBACK_READ];
                    $payload['message'] = $high_level_callback['data'];

                    call_user_func($function, $payload['message'], $user_data);
                }
            } else { // stream in-sync
                $high_level_callback['data'] = array_merge($high_level_callback['data'], array_slice($payload['message_chunk_data'], 0, $message_chunk_length));

                if (count($high_level_callback['data']) >= $payload['message_length']) { // stream complete
                    if (array_key_exists(self::CALLBACK_READ, $this->registered_callbacks)) {
                        $function = $this->registered_callbacks[self::CALLBACK_READ];
                        $user_data = $this->registered_callback_user_data[self::CALLBACK_READ];
                        $payload['message'] = $high_level_callback['data'];

                        call_user_func($function, $payload['message'], $user_data);
                    }

                    $high_level_callback['data'] = NULL;
                }
            }
        }

        if (array_key_exists(self::CALLBACK_READ_LOW_LEVEL, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_READ_LOW_LEVEL];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_READ_LOW_LEVEL];

            call_user_func($function, $payload['message_length'], $payload['message_chunk_offset'], $payload['message_chunk_data'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperErrorCount($data)
    {
        $payload = unpack('V1error_count_overrun/V1error_count_parity', $data);
        $payload['error_count_overrun'] = IPConnection::fixUnpackedUInt32($payload, 'error_count_overrun');
        $payload['error_count_parity'] = IPConnection::fixUnpackedUInt32($payload, 'error_count_parity');

        if (array_key_exists(self::CALLBACK_ERROR_COUNT, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_ERROR_COUNT];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_ERROR_COUNT];

            call_user_func($function, $payload['error_count_overrun'], $payload['error_count_parity'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperFrameReadable($data)
    {
        $payload = unpack('v1frame_count', $data);

        if (array_key_exists(self::CALLBACK_FRAME_READABLE, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_FRAME_READABLE];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_FRAME_READABLE];

            call_user_func($function, $payload['frame_count'], $user_data);
        }
    }
}

?>
