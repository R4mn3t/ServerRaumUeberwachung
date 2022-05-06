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
 * 3.3cm (1.3") OLED display with 128x64 pixels
 */
class BrickletOLED128x64V2 extends Device
{


    /**
     * @internal
     */
    const FUNCTION_WRITE_PIXELS_LOW_LEVEL = 1;

    /**
     * @internal
     */
    const FUNCTION_READ_PIXELS_LOW_LEVEL = 2;

    /**
     * @internal
     */
    const FUNCTION_CLEAR_DISPLAY = 3;

    /**
     * @internal
     */
    const FUNCTION_SET_DISPLAY_CONFIGURATION = 4;

    /**
     * @internal
     */
    const FUNCTION_GET_DISPLAY_CONFIGURATION = 5;

    /**
     * @internal
     */
    const FUNCTION_WRITE_LINE = 6;

    /**
     * @internal
     */
    const FUNCTION_DRAW_BUFFERED_FRAME = 7;

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

    const DEVICE_IDENTIFIER = 2112;

    const DEVICE_DISPLAY_NAME = 'OLED 128x64 Bricklet 2.0';

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

        $this->response_expected[self::FUNCTION_WRITE_PIXELS_LOW_LEVEL] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_READ_PIXELS_LOW_LEVEL] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_CLEAR_DISPLAY] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_SET_DISPLAY_CONFIGURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_DISPLAY_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_WRITE_LINE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_DRAW_BUFFERED_FRAME] = self::RESPONSE_EXPECTED_FALSE;
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
     * Writes pixels to the specified window.
     * 
     * The pixels are written into the window line by line top to bottom
     * and each line is written from left to right.
     * 
     * If automatic draw is enabled (default) the pixels are directly written to
     * the screen. Only pixels that have actually changed are updated on the screen,
     * the rest stays the same.
     * 
     * If automatic draw is disabled the pixels are written to an internal buffer and
     * the buffer is transferred to the display only after BrickletOLED128x64V2::drawBufferedFrame()
     * is called. This can be used to avoid flicker when drawing a complex frame in
     * multiple steps.
     * 
     * Automatic draw can be configured with the BrickletOLED128x64V2::setDisplayConfiguration()
     * function.
     * 
     * @param int $x_start
     * @param int $y_start
     * @param int $x_end
     * @param int $y_end
     * @param int $pixels_length
     * @param int $pixels_chunk_offset
     * @param bool[] $pixels_chunk_data
     * 
     * @return void
     */
    public function writePixelsLowLevel($x_start, $y_start, $x_end, $y_end, $pixels_length, $pixels_chunk_offset, $pixels_chunk_data)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $x_start);
        $payload .= pack('C', $y_start);
        $payload .= pack('C', $x_end);
        $payload .= pack('C', $y_end);
        $payload .= pack('v', $pixels_length);
        $payload .= pack('v', $pixels_chunk_offset);
        $pixels_chunk_data_bits = array_fill(0, 56, 0);
        for ($i = 0; $i < 448; $i++) {
            if((bool)$pixels_chunk_data[$i]) {
              $pixels_chunk_data_bits[$i / 8] |= 1 << ($i % 8);
            }
        }
        for ($i = 0; $i < 56; $i++) {
          $payload .= pack('C', intval($pixels_chunk_data_bits[$i]));
        }

        $this->sendRequest(self::FUNCTION_WRITE_PIXELS_LOW_LEVEL, $payload, 0);
    }

    /**
     * Reads pixels from the specified window.
     * 
     * The pixels are read from the window line by line top to bottom
     * and each line is read from left to right.
     * 
     * If automatic draw is enabled (default) the pixels that are read are always the
     * same that are shown on the display.
     * 
     * If automatic draw is disabled the pixels are read from the internal buffer
     * (see BrickletOLED128x64V2::drawBufferedFrame()).
     * 
     * Automatic draw can be configured with the BrickletOLED128x64V2::setDisplayConfiguration()
     * function.
     * 
     * @param int $x_start
     * @param int $y_start
     * @param int $x_end
     * @param int $y_end
     * 
     * @return array
     */
    public function readPixelsLowLevel($x_start, $y_start, $x_end, $y_end)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('C', $x_start);
        $payload .= pack('C', $y_start);
        $payload .= pack('C', $x_end);
        $payload .= pack('C', $y_end);

        $data = $this->sendRequest(self::FUNCTION_READ_PIXELS_LOW_LEVEL, $payload, 72);

        $payload = unpack('v1pixels_length/v1pixels_chunk_offset/C60pixels_chunk_data', $data);

        $ret['pixels_length'] = $payload['pixels_length'];
        $ret['pixels_chunk_offset'] = $payload['pixels_chunk_offset'];
        $ret['pixels_chunk_data'] = IPConnection::collectUnpackedBoolArray($payload, 'pixels_chunk_data', 480);

        return $ret;
    }

    /**
     * Clears the complete content of the display.
     * 
     * If automatic draw is enabled (default) the pixels are directly cleared.
     * 
     * If automatic draw is disabled the the internal buffer is cleared and
     * the buffer is transferred to the display only after BrickletOLED128x64V2::drawBufferedFrame()
     * is called. This can be used to avoid flicker when drawing a complex frame in
     * multiple steps.
     * 
     * Automatic draw can be configured with the BrickletOLED128x64V2::setDisplayConfiguration()
     * function.
     * 
     * 
     * @return void
     */
    public function clearDisplay()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_CLEAR_DISPLAY, $payload, 0);
    }

    /**
     * Sets the configuration of the display.
     * 
     * You can set a contrast value from 0 to 255 and you can invert the color
     * (white/black) of the display.
     * 
     * If automatic draw is set to *true*, the display is automatically updated with every
     * call of BrickletOLED128x64V2::writePixels() or BrickletOLED128x64V2::writeLine(). If it is set to false, the
     * changes are written into an internal buffer and only shown on the display after
     * a call of BrickletOLED128x64V2::drawBufferedFrame().
     * 
     * @param int $contrast
     * @param bool $invert
     * @param bool $automatic_draw
     * 
     * @return void
     */
    public function setDisplayConfiguration($contrast, $invert, $automatic_draw)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $contrast);
        $payload .= pack('C', intval((bool)$invert));
        $payload .= pack('C', intval((bool)$automatic_draw));

        $this->sendRequest(self::FUNCTION_SET_DISPLAY_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the configuration as set by BrickletOLED128x64V2::setDisplayConfiguration().
     * 
     * 
     * @return array
     */
    public function getDisplayConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_DISPLAY_CONFIGURATION, $payload, 11);

        $payload = unpack('C1contrast/C1invert/C1automatic_draw', $data);

        $ret['contrast'] = $payload['contrast'];
        $ret['invert'] = (bool)$payload['invert'];
        $ret['automatic_draw'] = (bool)$payload['automatic_draw'];

        return $ret;
    }

    /**
     * Writes text to a specific line with a specific position.
     * The text can have a maximum of 22 characters.
     * 
     * For example: (1, 10, "Hello") will write *Hello* in the middle of the
     * second line of the display.
     * 
     * The display uses a special 5x7 pixel charset. You can view the characters
     * of the charset in Brick Viewer.
     * 
     * If automatic draw is enabled (default) the text is directly written to
     * the screen. Only pixels that have actually changed are updated on the screen,
     * the rest stays the same.
     * 
     * If automatic draw is disabled the text is written to an internal buffer and
     * the buffer is transferred to the display only after BrickletOLED128x64V2::drawBufferedFrame()
     * is called. This can be used to avoid flicker when drawing a complex frame in
     * multiple steps.
     * 
     * Automatic draw can be configured with the BrickletOLED128x64V2::setDisplayConfiguration()
     * function.
     * 
     * @param int $line
     * @param int $position
     * @param string $text
     * 
     * @return void
     */
    public function writeLine($line, $position, $text)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $line);
        $payload .= pack('C', $position);
        for ($i = 0; $i < strlen($text) && $i < 22; $i++) {
            $payload .= pack('c', ord($text[$i]));
        }
        for ($i = strlen($text); $i < 22; $i++) {
            $payload .= pack('c', 0);
        }

        $this->sendRequest(self::FUNCTION_WRITE_LINE, $payload, 0);
    }

    /**
     * Draws the currently buffered frame. Normally each call of BrickletOLED128x64V2::writePixels() and
     * BrickletOLED128x64V2::writeLine() draws directly onto the display. If you turn automatic draw off
     * (BrickletOLED128x64V2::setDisplayConfiguration()), the data is written in an internal buffer and
     * only transferred to the display by calling this function. This can be used to
     * avoid flicker when drawing a complex frame in multiple steps.
     * 
     * Set the `force complete redraw` to *true* to redraw the whole display
     * instead of only the changed parts. Normally it should not be necessary to set this to
     * *true*. It may only become necessary in case of stuck pixels because of errors.
     * 
     * @param bool $force_complete_redraw
     * 
     * @return void
     */
    public function drawBufferedFrame($force_complete_redraw)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', intval((bool)$force_complete_redraw));

        $this->sendRequest(self::FUNCTION_DRAW_BUFFERED_FRAME, $payload, 0);
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
     * Returns the current bootloader mode, see BrickletOLED128x64V2::setBootloaderMode().
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
     * Sets the firmware pointer for BrickletOLED128x64V2::writeFirmware(). The pointer has
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
     * BrickletOLED128x64V2::setWriteFirmwarePointer() before. The firmware is written
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
     * Returns the configuration as set by BrickletOLED128x64V2::setStatusLEDConfig()
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
     * Writes pixels to the specified window.
     * 
     * The pixels are written into the window line by line top to bottom
     * and each line is written from left to right.
     * 
     * If automatic draw is enabled (default) the pixels are directly written to
     * the screen. Only pixels that have actually changed are updated on the screen,
     * the rest stays the same.
     * 
     * If automatic draw is disabled the pixels are written to an internal buffer and
     * the buffer is transferred to the display only after BrickletOLED128x64V2::drawBufferedFrame()
     * is called. This can be used to avoid flicker when drawing a complex frame in
     * multiple steps.
     * 
     * Automatic draw can be configured with the BrickletOLED128x64V2::setDisplayConfiguration()
     * function.
     * 
     * @param int $x_start
     * @param int $y_start
     * @param int $x_end
     * @param int $y_end
     * @param bool[] $pixels
     * 
     * @return void
     */
    public function writePixels($x_start, $y_start, $x_end, $y_end, $pixels)
    {
        if (count($pixels) > 65535) {
            throw new \InvalidArgumentException('Pixels can be at most 65535 items long');
        }

        $pixels_length = count($pixels);
        $pixels_chunk_offset = 0;

        if ($pixels_length === 0) {
            $pixels_chunk_data = array_fill(0, 448, false);
            $ret = $this->writePixelsLowLevel($x_start, $y_start, $x_end, $y_end, $pixels_length, $pixels_chunk_offset, $pixels_chunk_data);
        } else {
            while ($pixels_chunk_offset < $pixels_length) {
                $pixels_chunk_data = $this->createChunkData($pixels, $pixels_chunk_offset, 448, false);
                $ret = $this->writePixelsLowLevel($x_start, $y_start, $x_end, $y_end, $pixels_length, $pixels_chunk_offset, $pixels_chunk_data);
                $pixels_chunk_offset += 448;
            }
        }

        return $ret;
    }

    /**
     * Reads pixels from the specified window.
     * 
     * The pixels are read from the window line by line top to bottom
     * and each line is read from left to right.
     * 
     * If automatic draw is enabled (default) the pixels that are read are always the
     * same that are shown on the display.
     * 
     * If automatic draw is disabled the pixels are read from the internal buffer
     * (see BrickletOLED128x64V2::drawBufferedFrame()).
     * 
     * Automatic draw can be configured with the BrickletOLED128x64V2::setDisplayConfiguration()
     * function.
     * 
     * @param int $x_start
     * @param int $y_start
     * @param int $x_end
     * @param int $y_end
     * 
     * @return array
     */
    public function readPixels($x_start, $y_start, $x_end, $y_end)
    {
        $ret = $this->readPixelsLowLevel($x_start, $y_start, $x_end, $y_end);
        $pixels_length = $ret['pixels_length'];
        $pixels_out_of_sync = $ret['pixels_chunk_offset'] != 0;
        $pixels_data = $ret['pixels_chunk_data'];

        while (!$pixels_out_of_sync && count($pixels_data) < $pixels_length) {
            $ret = $this->readPixelsLowLevel($x_start, $y_start, $x_end, $y_end);
            $pixels_length = $ret['pixels_length'];
            $pixels_out_of_sync = $ret['pixels_chunk_offset'] != count($pixels_data);
            $pixels_data = array_merge($pixels_data, $ret['pixels_chunk_data']);
        }

        if ($pixels_out_of_sync) { // discard remaining stream to bring it back in-sync
            while ($ret['pixels_chunk_offset'] + 480 < $pixels_length) {
                $ret = $this->readPixelsLowLevel($x_start, $y_start, $x_end, $y_end);
                $pixels_length = $ret['pixels_length'];
            }

            throw new StreamOutOfSyncException('Pixels stream is out-of-sync');
        }

        return array_slice($pixels_data, 0, $pixels_length);
    }
}

?>
