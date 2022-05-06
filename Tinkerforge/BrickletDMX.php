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
 * DMX master and slave
 */
class BrickletDMX extends Device
{

    /**
     * This callback is triggered as soon as a new frame write is started.
     * You should send the data for the next frame directly after this callback
     * was triggered.
     * 
     * For an explanation of the general approach see BrickletDMX::writeFrame().
     * 
     * This callback can be enabled via BrickletDMX::setFrameCallbackConfig().
     * 
     * This callback can only be triggered in master mode.
     */
    const CALLBACK_FRAME_STARTED = 14;

    /**
     * This callback is triggered in slave mode when a new frame was received from the DMX master
     * and it can be read out. You have to read the frame before the master has written
     * the next frame, see BrickletDMX::readFrame() for more details.
     * 
     * The parameter is the frame number, it is increased by one with each received frame.
     * 
     * This callback can be enabled via BrickletDMX::setFrameCallbackConfig().
     * 
     * This callback can only be triggered in slave mode.
     */
    const CALLBACK_FRAME_AVAILABLE = 15;

    /**
     * See CALLBACK_FRAME
     */
    const CALLBACK_FRAME_LOW_LEVEL = 16;

    /**
     * This callback is called if a new error occurs. It returns
     * the current overrun and framing error count.
     */
    const CALLBACK_FRAME_ERROR_COUNT = 17;

    /**
     * This callback is called as soon as a new frame is available
     * (written by the DMX master).
     * 
     * The size of the array is equivalent to the number of channels in
     * the frame. Each byte represents one channel.
     * 
     * This callback can be enabled via BrickletDMX::setFrameCallbackConfig().
     * 
     * This callback can only be triggered in slave mode.
     * 
     * <note>
     *  If reconstructing the value fails, the callback is triggered with NULL for frame.
     * </note>
     */
    const CALLBACK_FRAME = -16;


    /**
     * @internal
     */
    const FUNCTION_SET_DMX_MODE = 1;

    /**
     * @internal
     */
    const FUNCTION_GET_DMX_MODE = 2;

    /**
     * @internal
     */
    const FUNCTION_WRITE_FRAME_LOW_LEVEL = 3;

    /**
     * @internal
     */
    const FUNCTION_READ_FRAME_LOW_LEVEL = 4;

    /**
     * @internal
     */
    const FUNCTION_SET_FRAME_DURATION = 5;

    /**
     * @internal
     */
    const FUNCTION_GET_FRAME_DURATION = 6;

    /**
     * @internal
     */
    const FUNCTION_GET_FRAME_ERROR_COUNT = 7;

    /**
     * @internal
     */
    const FUNCTION_SET_COMMUNICATION_LED_CONFIG = 8;

    /**
     * @internal
     */
    const FUNCTION_GET_COMMUNICATION_LED_CONFIG = 9;

    /**
     * @internal
     */
    const FUNCTION_SET_ERROR_LED_CONFIG = 10;

    /**
     * @internal
     */
    const FUNCTION_GET_ERROR_LED_CONFIG = 11;

    /**
     * @internal
     */
    const FUNCTION_SET_FRAME_CALLBACK_CONFIG = 12;

    /**
     * @internal
     */
    const FUNCTION_GET_FRAME_CALLBACK_CONFIG = 13;

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

    const DMX_MODE_MASTER = 0;
    const DMX_MODE_SLAVE = 1;
    const COMMUNICATION_LED_CONFIG_OFF = 0;
    const COMMUNICATION_LED_CONFIG_ON = 1;
    const COMMUNICATION_LED_CONFIG_SHOW_HEARTBEAT = 2;
    const COMMUNICATION_LED_CONFIG_SHOW_COMMUNICATION = 3;
    const ERROR_LED_CONFIG_OFF = 0;
    const ERROR_LED_CONFIG_ON = 1;
    const ERROR_LED_CONFIG_SHOW_HEARTBEAT = 2;
    const ERROR_LED_CONFIG_SHOW_ERROR = 3;
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

    const DEVICE_IDENTIFIER = 285;

    const DEVICE_DISPLAY_NAME = 'DMX Bricklet';

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

        $this->response_expected[self::FUNCTION_SET_DMX_MODE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_DMX_MODE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_WRITE_FRAME_LOW_LEVEL] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_READ_FRAME_LOW_LEVEL] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_FRAME_DURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_FRAME_DURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_FRAME_ERROR_COUNT] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_COMMUNICATION_LED_CONFIG] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_COMMUNICATION_LED_CONFIG] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ERROR_LED_CONFIG] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_ERROR_LED_CONFIG] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_FRAME_CALLBACK_CONFIG] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_FRAME_CALLBACK_CONFIG] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
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

        $this->callback_wrappers[self::CALLBACK_FRAME_STARTED] = array(8, 'callbackWrapperFrameStarted');
        $this->callback_wrappers[self::CALLBACK_FRAME_AVAILABLE] = array(12, 'callbackWrapperFrameAvailable');
        $this->callback_wrappers[self::CALLBACK_FRAME_LOW_LEVEL] = array(72, 'callbackWrapperFrameLowLevel');
        $this->callback_wrappers[self::CALLBACK_FRAME_ERROR_COUNT] = array(16, 'callbackWrapperFrameErrorCount');

        $this->high_level_callbacks[self::CALLBACK_FRAME] = array('data' => NULL);

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
     * Sets the DMX mode to either master or slave.
     * 
     * Calling this function sets frame number to 0.
     * 
     * @param int $dmx_mode
     * 
     * @return void
     */
    public function setDMXMode($dmx_mode)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $dmx_mode);

        $this->sendRequest(self::FUNCTION_SET_DMX_MODE, $payload, 0);
    }

    /**
     * Returns the DMX mode, as set by BrickletDMX::setDMXMode().
     * 
     * 
     * @return int
     */
    public function getDMXMode()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_DMX_MODE, $payload, 9);

        $payload = unpack('C1dmx_mode', $data);

        return $payload['dmx_mode'];
    }

    /**
     * Writes a DMX frame. The maximum frame size is 512 byte. Each byte represents one channel.
     * 
     * The next frame can be written after the BrickletDMX::CALLBACK_FRAME_STARTED callback was called. The frame
     * is double buffered, so a new frame can be written as soon as the writing of the prior frame
     * starts.
     * 
     * The data will be transfered when the next frame duration ends, see BrickletDMX::setFrameDuration().
     * 
     * Generic approach:
     * 
     * * Set the frame duration to a value that represents the number of frames per second you want to achieve.
     * * Set channels for first frame.
     * * Wait for the BrickletDMX::CALLBACK_FRAME_STARTED callback.
     * * Set channels for next frame.
     * * Wait for the BrickletDMX::CALLBACK_FRAME_STARTED callback.
     * * and so on.
     * 
     * This approach ensures that you can set new DMX data with a fixed frame rate.
     * 
     * This function can only be called in master mode.
     * 
     * @param int $frame_length
     * @param int $frame_chunk_offset
     * @param int[] $frame_chunk_data
     * 
     * @return void
     */
    public function writeFrameLowLevel($frame_length, $frame_chunk_offset, $frame_chunk_data)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $frame_length);
        $payload .= pack('v', $frame_chunk_offset);
        for ($i = 0; $i < 60; $i++) {
            $payload .= pack('C', $frame_chunk_data[$i]);
        }

        $this->sendRequest(self::FUNCTION_WRITE_FRAME_LOW_LEVEL, $payload, 0);
    }

    /**
     * Returns the last frame that was written by the DMX master. The size of the array
     * is equivalent to the number of channels in the frame. Each byte represents one channel.
     * 
     * The next frame is available after the BrickletDMX::CALLBACK_FRAME_AVAILABLE callback was called.
     * 
     * Generic approach:
     * 
     * * Call BrickletDMX::readFrame() to get first frame.
     * * Wait for the BrickletDMX::CALLBACK_FRAME_AVAILABLE callback.
     * * Call BrickletDMX::readFrame() to get second frame.
     * * Wait for the BrickletDMX::CALLBACK_FRAME_AVAILABLE callback.
     * * and so on.
     * 
     * Instead of polling this function you can also use the BrickletDMX::CALLBACK_FRAME callback.
     * You can enable it with BrickletDMX::setFrameCallbackConfig().
     * 
     * The frame number starts at 0 and it is increased by one with each received frame.
     * 
     * This function can only be called in slave mode.
     * 
     * 
     * @return array
     */
    public function readFrameLowLevel()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_READ_FRAME_LOW_LEVEL, $payload, 72);

        $payload = unpack('v1frame_length/v1frame_chunk_offset/C56frame_chunk_data/V1frame_number', $data);

        $ret['frame_length'] = $payload['frame_length'];
        $ret['frame_chunk_offset'] = $payload['frame_chunk_offset'];
        $ret['frame_chunk_data'] = IPConnection::collectUnpackedArray($payload, 'frame_chunk_data', 56);
        $ret['frame_number'] = IPConnection::fixUnpackedUInt32($payload, 'frame_number');

        return $ret;
    }

    /**
     * Sets the duration of a frame.
     * 
     * Example: If you want to achieve 20 frames per second, you should
     * set the frame duration to 50ms (50ms * 20 = 1 second).
     * 
     * If you always want to send a frame as fast as possible you can set
     * this value to 0.
     * 
     * This setting is only used in master mode.
     * 
     * @param int $frame_duration
     * 
     * @return void
     */
    public function setFrameDuration($frame_duration)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $frame_duration);

        $this->sendRequest(self::FUNCTION_SET_FRAME_DURATION, $payload, 0);
    }

    /**
     * Returns the frame duration as set by BrickletDMX::setFrameDuration().
     * 
     * 
     * @return int
     */
    public function getFrameDuration()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_FRAME_DURATION, $payload, 10);

        $payload = unpack('v1frame_duration', $data);

        return $payload['frame_duration'];
    }

    /**
     * Returns the current number of overrun and framing errors.
     * 
     * 
     * @return array
     */
    public function getFrameErrorCount()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_FRAME_ERROR_COUNT, $payload, 16);

        $payload = unpack('V1overrun_error_count/V1framing_error_count', $data);

        $ret['overrun_error_count'] = IPConnection::fixUnpackedUInt32($payload, 'overrun_error_count');
        $ret['framing_error_count'] = IPConnection::fixUnpackedUInt32($payload, 'framing_error_count');

        return $ret;
    }

    /**
     * Sets the communication LED configuration. By default the LED shows
     * communication traffic, it flickers once for every 10 received data packets.
     * 
     * You can also turn the LED permanently on/off or show a heartbeat.
     * 
     * If the Bricklet is in bootloader mode, the LED is off.
     * 
     * @param int $config
     * 
     * @return void
     */
    public function setCommunicationLEDConfig($config)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $config);

        $this->sendRequest(self::FUNCTION_SET_COMMUNICATION_LED_CONFIG, $payload, 0);
    }

    /**
     * Returns the configuration as set by BrickletDMX::setCommunicationLEDConfig()
     * 
     * 
     * @return int
     */
    public function getCommunicationLEDConfig()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_COMMUNICATION_LED_CONFIG, $payload, 9);

        $payload = unpack('C1config', $data);

        return $payload['config'];
    }

    /**
     * Sets the error LED configuration.
     * 
     * By default the error LED turns on if there is any error (see BrickletDMX::CALLBACK_FRAME_ERROR_COUNT
     * callback). If you call this function with the Show-Error option again, the LED
     * will turn off until the next error occurs.
     * 
     * You can also turn the LED permanently on/off or show a heartbeat.
     * 
     * If the Bricklet is in bootloader mode, the LED is off.
     * 
     * @param int $config
     * 
     * @return void
     */
    public function setErrorLEDConfig($config)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $config);

        $this->sendRequest(self::FUNCTION_SET_ERROR_LED_CONFIG, $payload, 0);
    }

    /**
     * Returns the configuration as set by BrickletDMX::setErrorLEDConfig().
     * 
     * 
     * @return int
     */
    public function getErrorLEDConfig()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ERROR_LED_CONFIG, $payload, 9);

        $payload = unpack('C1config', $data);

        return $payload['config'];
    }

    /**
     * Enables/Disables the different callbacks. By default the
     * BrickletDMX::CALLBACK_FRAME_STARTED callback and BrickletDMX::CALLBACK_FRAME_AVAILABLE callback are enabled while
     * the BrickletDMX::CALLBACK_FRAME callback and BrickletDMX::CALLBACK_FRAME_ERROR_COUNT callback are disabled.
     * 
     * If you want to use the BrickletDMX::CALLBACK_FRAME callback you can enable it and disable
     * the cb:`Frame Available` callback at the same time. It becomes redundant in
     * this case.
     * 
     * @param bool $frame_started_callback_enabled
     * @param bool $frame_available_callback_enabled
     * @param bool $frame_callback_enabled
     * @param bool $frame_error_count_callback_enabled
     * 
     * @return void
     */
    public function setFrameCallbackConfig($frame_started_callback_enabled, $frame_available_callback_enabled, $frame_callback_enabled, $frame_error_count_callback_enabled)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', intval((bool)$frame_started_callback_enabled));
        $payload .= pack('C', intval((bool)$frame_available_callback_enabled));
        $payload .= pack('C', intval((bool)$frame_callback_enabled));
        $payload .= pack('C', intval((bool)$frame_error_count_callback_enabled));

        $this->sendRequest(self::FUNCTION_SET_FRAME_CALLBACK_CONFIG, $payload, 0);
    }

    /**
     * Returns the frame callback config as set by BrickletDMX::setFrameCallbackConfig().
     * 
     * 
     * @return array
     */
    public function getFrameCallbackConfig()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_FRAME_CALLBACK_CONFIG, $payload, 12);

        $payload = unpack('C1frame_started_callback_enabled/C1frame_available_callback_enabled/C1frame_callback_enabled/C1frame_error_count_callback_enabled', $data);

        $ret['frame_started_callback_enabled'] = (bool)$payload['frame_started_callback_enabled'];
        $ret['frame_available_callback_enabled'] = (bool)$payload['frame_available_callback_enabled'];
        $ret['frame_callback_enabled'] = (bool)$payload['frame_callback_enabled'];
        $ret['frame_error_count_callback_enabled'] = (bool)$payload['frame_error_count_callback_enabled'];

        return $ret;
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
     * Returns the current bootloader mode, see BrickletDMX::setBootloaderMode().
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
     * Sets the firmware pointer for BrickletDMX::writeFirmware(). The pointer has
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
     * BrickletDMX::setWriteFirmwarePointer() before. The firmware is written
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
     * Returns the configuration as set by BrickletDMX::setStatusLEDConfig()
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
     * Writes a DMX frame. The maximum frame size is 512 byte. Each byte represents one channel.
     * 
     * The next frame can be written after the BrickletDMX::CALLBACK_FRAME_STARTED callback was called. The frame
     * is double buffered, so a new frame can be written as soon as the writing of the prior frame
     * starts.
     * 
     * The data will be transfered when the next frame duration ends, see BrickletDMX::setFrameDuration().
     * 
     * Generic approach:
     * 
     * * Set the frame duration to a value that represents the number of frames per second you want to achieve.
     * * Set channels for first frame.
     * * Wait for the BrickletDMX::CALLBACK_FRAME_STARTED callback.
     * * Set channels for next frame.
     * * Wait for the BrickletDMX::CALLBACK_FRAME_STARTED callback.
     * * and so on.
     * 
     * This approach ensures that you can set new DMX data with a fixed frame rate.
     * 
     * This function can only be called in master mode.
     * 
     * @param int[] $frame
     * 
     * @return void
     */
    public function writeFrame($frame)
    {
        if (count($frame) > 65535) {
            throw new \InvalidArgumentException('Frame can be at most 65535 items long');
        }

        $frame_length = count($frame);
        $frame_chunk_offset = 0;

        if ($frame_length === 0) {
            $frame_chunk_data = array_fill(0, 60, 0);
            $ret = $this->writeFrameLowLevel($frame_length, $frame_chunk_offset, $frame_chunk_data);
        } else {
            while ($frame_chunk_offset < $frame_length) {
                $frame_chunk_data = $this->createChunkData($frame, $frame_chunk_offset, 60, 0);
                $ret = $this->writeFrameLowLevel($frame_length, $frame_chunk_offset, $frame_chunk_data);
                $frame_chunk_offset += 60;
            }
        }

        return $ret;
    }

    /**
     * Returns the last frame that was written by the DMX master. The size of the array
     * is equivalent to the number of channels in the frame. Each byte represents one channel.
     * 
     * The next frame is available after the BrickletDMX::CALLBACK_FRAME_AVAILABLE callback was called.
     * 
     * Generic approach:
     * 
     * * Call BrickletDMX::readFrame() to get first frame.
     * * Wait for the BrickletDMX::CALLBACK_FRAME_AVAILABLE callback.
     * * Call BrickletDMX::readFrame() to get second frame.
     * * Wait for the BrickletDMX::CALLBACK_FRAME_AVAILABLE callback.
     * * and so on.
     * 
     * Instead of polling this function you can also use the BrickletDMX::CALLBACK_FRAME callback.
     * You can enable it with BrickletDMX::setFrameCallbackConfig().
     * 
     * The frame number starts at 0 and it is increased by one with each received frame.
     * 
     * This function can only be called in slave mode.
     * 
     * 
     * @return array
     */
    public function readFrame()
    {
        $ret = $this->readFrameLowLevel();
        $frame_length = $ret['frame_length'];
        $frame_out_of_sync = $ret['frame_chunk_offset'] != 0;
        $frame_data = $ret['frame_chunk_data'];

        while (!$frame_out_of_sync && count($frame_data) < $frame_length) {
            $ret = $this->readFrameLowLevel();
            $frame_length = $ret['frame_length'];
            $frame_out_of_sync = $ret['frame_chunk_offset'] != count($frame_data);
            $frame_data = array_merge($frame_data, $ret['frame_chunk_data']);
        }

        if ($frame_out_of_sync) { // discard remaining stream to bring it back in-sync
            while ($ret['frame_chunk_offset'] + 56 < $frame_length) {
                $ret = $this->readFrameLowLevel();
                $frame_length = $ret['frame_length'];
            }

            throw new StreamOutOfSyncException('Frame stream is out-of-sync');
        }

        return array('frame' => array_slice($frame_data, 0, $frame_length), 'frame_number' => $ret['frame_number']);
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
    public function callbackWrapperFrameStarted($data)
    {

        if (array_key_exists(self::CALLBACK_FRAME_STARTED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_FRAME_STARTED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_FRAME_STARTED];

            call_user_func($function, $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperFrameAvailable($data)
    {
        $payload = unpack('V1frame_number', $data);
        $payload['frame_number'] = IPConnection::fixUnpackedUInt32($payload, 'frame_number');

        if (array_key_exists(self::CALLBACK_FRAME_AVAILABLE, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_FRAME_AVAILABLE];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_FRAME_AVAILABLE];

            call_user_func($function, $payload['frame_number'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperFrameLowLevel($data)
    {
        $payload = unpack('v1frame_length/v1frame_chunk_offset/C56frame_chunk_data/V1frame_number', $data);
        $payload['frame_chunk_data'] = IPConnection::collectUnpackedArray($payload, 'frame_chunk_data', 56);
        $payload['frame_number'] = IPConnection::fixUnpackedUInt32($payload, 'frame_number');

        $high_level_callback = &$this->high_level_callbacks[self::CALLBACK_FRAME];
        $frame_chunk_length = min($payload['frame_length'] - $payload['frame_chunk_offset'], 56);

        if ($high_level_callback['data'] === NULL) { // no stream in-progress
            if ($payload['frame_chunk_offset'] === 0) { // stream starts
                $high_level_callback['data'] = array_slice($payload['frame_chunk_data'], 0, $frame_chunk_length);

                if (count($high_level_callback['data']) >= $payload['frame_length']) { // stream complete
                    if (array_key_exists(self::CALLBACK_FRAME, $this->registered_callbacks)) {
                        $function = $this->registered_callbacks[self::CALLBACK_FRAME];
                        $user_data = $this->registered_callback_user_data[self::CALLBACK_FRAME];
                        $payload['frame'] = $high_level_callback['data'];

                        call_user_func($function, $payload['frame'], $payload['frame_number'], $user_data);
                    }

                    $high_level_callback['data'] = NULL;
                }
            } else { // ignore tail of current stream, wait for next stream start
            }
        } else { // stream in-progress
            if ($payload['frame_chunk_offset'] !== count($high_level_callback['data'])) { // stream out-of-sync
                $high_level_callback['data'] = NULL;

                if (array_key_exists(self::CALLBACK_FRAME, $this->registered_callbacks)) {
                    $function = $this->registered_callbacks[self::CALLBACK_FRAME];
                    $user_data = $this->registered_callback_user_data[self::CALLBACK_FRAME];
                    $payload['frame'] = $high_level_callback['data'];

                    call_user_func($function, $payload['frame'], $payload['frame_number'], $user_data);
                }
            } else { // stream in-sync
                $high_level_callback['data'] = array_merge($high_level_callback['data'], array_slice($payload['frame_chunk_data'], 0, $frame_chunk_length));

                if (count($high_level_callback['data']) >= $payload['frame_length']) { // stream complete
                    if (array_key_exists(self::CALLBACK_FRAME, $this->registered_callbacks)) {
                        $function = $this->registered_callbacks[self::CALLBACK_FRAME];
                        $user_data = $this->registered_callback_user_data[self::CALLBACK_FRAME];
                        $payload['frame'] = $high_level_callback['data'];

                        call_user_func($function, $payload['frame'], $payload['frame_number'], $user_data);
                    }

                    $high_level_callback['data'] = NULL;
                }
            }
        }

        if (array_key_exists(self::CALLBACK_FRAME_LOW_LEVEL, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_FRAME_LOW_LEVEL];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_FRAME_LOW_LEVEL];

            call_user_func($function, $payload['frame_length'], $payload['frame_chunk_offset'], $payload['frame_chunk_data'], $payload['frame_number'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperFrameErrorCount($data)
    {
        $payload = unpack('V1overrun_error_count/V1framing_error_count', $data);
        $payload['overrun_error_count'] = IPConnection::fixUnpackedUInt32($payload, 'overrun_error_count');
        $payload['framing_error_count'] = IPConnection::fixUnpackedUInt32($payload, 'framing_error_count');

        if (array_key_exists(self::CALLBACK_FRAME_ERROR_COUNT, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_FRAME_ERROR_COUNT];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_FRAME_ERROR_COUNT];

            call_user_func($function, $payload['overrun_error_count'], $payload['framing_error_count'], $user_data);
        }
    }
}

?>
