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
 * RGB LED Matrix with 8x8 pixel
 */
class BrickletRGBLEDMatrix extends Device
{

    /**
     * This callback is triggered as soon as a new frame write is started.
     * The LED values are double buffered, so you can send the LED values
     * for the next frame directly after this callback is triggered.
     */
    const CALLBACK_FRAME_STARTED = 11;


    /**
     * @internal
     */
    const FUNCTION_SET_RED = 1;

    /**
     * @internal
     */
    const FUNCTION_GET_RED = 2;

    /**
     * @internal
     */
    const FUNCTION_SET_GREEN = 3;

    /**
     * @internal
     */
    const FUNCTION_GET_GREEN = 4;

    /**
     * @internal
     */
    const FUNCTION_SET_BLUE = 5;

    /**
     * @internal
     */
    const FUNCTION_GET_BLUE = 6;

    /**
     * @internal
     */
    const FUNCTION_SET_FRAME_DURATION = 7;

    /**
     * @internal
     */
    const FUNCTION_GET_FRAME_DURATION = 8;

    /**
     * @internal
     */
    const FUNCTION_DRAW_FRAME = 9;

    /**
     * @internal
     */
    const FUNCTION_GET_SUPPLY_VOLTAGE = 10;

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

    const DEVICE_IDENTIFIER = 272;

    const DEVICE_DISPLAY_NAME = 'RGB LED Matrix Bricklet';

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

        $this->response_expected[self::FUNCTION_SET_RED] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_RED] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_GREEN] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_GREEN] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_BLUE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_BLUE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_FRAME_DURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_FRAME_DURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_DRAW_FRAME] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_SUPPLY_VOLTAGE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
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

        $this->callback_wrappers[self::CALLBACK_FRAME_STARTED] = array(12, 'callbackWrapperFrameStarted');

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
     * Sets the 64 red LED values of the matrix.
     * 
     * @param int[] $red
     * 
     * @return void
     */
    public function setRed($red)
    {
        $this->checkValidity();

        $payload = '';
        for ($i = 0; $i < 64; $i++) {
            $payload .= pack('C', $red[$i]);
        }

        $this->sendRequest(self::FUNCTION_SET_RED, $payload, 0);
    }

    /**
     * Returns the red LED values as set by BrickletRGBLEDMatrix::setRed().
     * 
     * 
     * @return array
     */
    public function getRed()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_RED, $payload, 72);

        $payload = unpack('C64red', $data);

        return IPConnection::collectUnpackedArray($payload, 'red', 64);
    }

    /**
     * Sets the 64 green LED values of the matrix.
     * 
     * @param int[] $green
     * 
     * @return void
     */
    public function setGreen($green)
    {
        $this->checkValidity();

        $payload = '';
        for ($i = 0; $i < 64; $i++) {
            $payload .= pack('C', $green[$i]);
        }

        $this->sendRequest(self::FUNCTION_SET_GREEN, $payload, 0);
    }

    /**
     * Returns the green LED values as set by BrickletRGBLEDMatrix::setGreen().
     * 
     * 
     * @return array
     */
    public function getGreen()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_GREEN, $payload, 72);

        $payload = unpack('C64green', $data);

        return IPConnection::collectUnpackedArray($payload, 'green', 64);
    }

    /**
     * Sets the 64 blue LED values of the matrix.
     * 
     * @param int[] $blue
     * 
     * @return void
     */
    public function setBlue($blue)
    {
        $this->checkValidity();

        $payload = '';
        for ($i = 0; $i < 64; $i++) {
            $payload .= pack('C', $blue[$i]);
        }

        $this->sendRequest(self::FUNCTION_SET_BLUE, $payload, 0);
    }

    /**
     * Returns the blue LED values as set by BrickletRGBLEDMatrix::setBlue().
     * 
     * 
     * @return array
     */
    public function getBlue()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_BLUE, $payload, 72);

        $payload = unpack('C64blue', $data);

        return IPConnection::collectUnpackedArray($payload, 'blue', 64);
    }

    /**
     * Sets the frame duration.
     * 
     * Example: If you want to achieve 20 frames per second, you should
     * set the frame duration to 50ms (50ms * 20 = 1 second).
     * 
     * Set this value to 0 to turn the automatic frame write mechanism off.
     * 
     * Approach:
     * 
     * * Call BrickletRGBLEDMatrix::setFrameDuration() with value > 0.
     * * Set LED values for first frame with BrickletRGBLEDMatrix::setRed(), BrickletRGBLEDMatrix::setGreen(), BrickletRGBLEDMatrix::setBlue().
     * * Wait for BrickletRGBLEDMatrix::CALLBACK_FRAME_STARTED callback.
     * * Set LED values for second frame with BrickletRGBLEDMatrix::setRed(), BrickletRGBLEDMatrix::setGreen(), BrickletRGBLEDMatrix::setBlue().
     * * Wait for BrickletRGBLEDMatrix::CALLBACK_FRAME_STARTED callback.
     * * and so on.
     * 
     * For frame duration of 0 see BrickletRGBLEDMatrix::drawFrame().
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
     * Returns the frame duration as set by BrickletRGBLEDMatrix::setFrameDuration().
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
     * If you set the frame duration to 0 (see BrickletRGBLEDMatrix::setFrameDuration()), you can use this
     * function to transfer the frame to the matrix.
     * 
     * Approach:
     * 
     * * Call BrickletRGBLEDMatrix::setFrameDuration() with 0.
     * * Set LED values for first frame with BrickletRGBLEDMatrix::setRed(), BrickletRGBLEDMatrix::setGreen(), BrickletRGBLEDMatrix::setBlue().
     * * Call BrickletRGBLEDMatrix::drawFrame().
     * * Wait for BrickletRGBLEDMatrix::CALLBACK_FRAME_STARTED callback.
     * * Set LED values for second frame with BrickletRGBLEDMatrix::setRed(), BrickletRGBLEDMatrix::setGreen(), BrickletRGBLEDMatrix::setBlue().
     * * Call BrickletRGBLEDMatrix::drawFrame().
     * * Wait for BrickletRGBLEDMatrix::CALLBACK_FRAME_STARTED callback.
     * * and so on.
     * 
     * 
     * @return void
     */
    public function drawFrame()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_DRAW_FRAME, $payload, 0);
    }

    /**
     * Returns the current supply voltage of the Bricklet.
     * 
     * 
     * @return int
     */
    public function getSupplyVoltage()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_SUPPLY_VOLTAGE, $payload, 10);

        $payload = unpack('v1voltage', $data);

        return $payload['voltage'];
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
     * Returns the current bootloader mode, see BrickletRGBLEDMatrix::setBootloaderMode().
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
     * Sets the firmware pointer for BrickletRGBLEDMatrix::writeFirmware(). The pointer has
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
     * BrickletRGBLEDMatrix::setWriteFirmwarePointer() before. The firmware is written
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
     * Returns the configuration as set by BrickletRGBLEDMatrix::setStatusLEDConfig()
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
        $payload = unpack('V1frame_number', $data);
        $payload['frame_number'] = IPConnection::fixUnpackedUInt32($payload, 'frame_number');

        if (array_key_exists(self::CALLBACK_FRAME_STARTED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_FRAME_STARTED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_FRAME_STARTED];

            call_user_func($function, $payload['frame_number'], $user_data);
        }
    }
}

?>
