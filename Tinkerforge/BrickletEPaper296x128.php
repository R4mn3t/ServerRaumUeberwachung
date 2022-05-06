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
 * Three color 296x128 e-paper display
 */
class BrickletEPaper296x128 extends Device
{

    /**
     * Callback for the current draw status. Will be called every time the
     * draw status changes (see BrickletEPaper296x128::getDrawStatus()).
     */
    const CALLBACK_DRAW_STATUS = 11;


    /**
     * @internal
     */
    const FUNCTION_DRAW = 1;

    /**
     * @internal
     */
    const FUNCTION_GET_DRAW_STATUS = 2;

    /**
     * @internal
     */
    const FUNCTION_WRITE_BLACK_WHITE_LOW_LEVEL = 3;

    /**
     * @internal
     */
    const FUNCTION_READ_BLACK_WHITE_LOW_LEVEL = 4;

    /**
     * @internal
     */
    const FUNCTION_WRITE_COLOR_LOW_LEVEL = 5;

    /**
     * @internal
     */
    const FUNCTION_READ_COLOR_LOW_LEVEL = 6;

    /**
     * @internal
     */
    const FUNCTION_FILL_DISPLAY = 7;

    /**
     * @internal
     */
    const FUNCTION_DRAW_TEXT = 8;

    /**
     * @internal
     */
    const FUNCTION_DRAW_LINE = 9;

    /**
     * @internal
     */
    const FUNCTION_DRAW_BOX = 10;

    /**
     * @internal
     */
    const FUNCTION_SET_UPDATE_MODE = 12;

    /**
     * @internal
     */
    const FUNCTION_GET_UPDATE_MODE = 13;

    /**
     * @internal
     */
    const FUNCTION_SET_DISPLAY_TYPE = 14;

    /**
     * @internal
     */
    const FUNCTION_GET_DISPLAY_TYPE = 15;

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

    const DRAW_STATUS_IDLE = 0;
    const DRAW_STATUS_COPYING = 1;
    const DRAW_STATUS_DRAWING = 2;
    const COLOR_BLACK = 0;
    const COLOR_WHITE = 1;
    const COLOR_RED = 2;
    const COLOR_GRAY = 2;
    const FONT_6X8 = 0;
    const FONT_6X16 = 1;
    const FONT_6X24 = 2;
    const FONT_6X32 = 3;
    const FONT_12X16 = 4;
    const FONT_12X24 = 5;
    const FONT_12X32 = 6;
    const FONT_18X24 = 7;
    const FONT_18X32 = 8;
    const FONT_24X32 = 9;
    const ORIENTATION_HORIZONTAL = 0;
    const ORIENTATION_VERTICAL = 1;
    const UPDATE_MODE_DEFAULT = 0;
    const UPDATE_MODE_BLACK_WHITE = 1;
    const UPDATE_MODE_DELTA = 2;
    const DISPLAY_TYPE_BLACK_WHITE_RED = 0;
    const DISPLAY_TYPE_BLACK_WHITE_GRAY = 1;
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

    const DEVICE_IDENTIFIER = 2146;

    const DEVICE_DISPLAY_NAME = 'E-Paper 296x128 Bricklet';

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

        $this->response_expected[self::FUNCTION_DRAW] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_DRAW_STATUS] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_WRITE_BLACK_WHITE_LOW_LEVEL] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_READ_BLACK_WHITE_LOW_LEVEL] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_WRITE_COLOR_LOW_LEVEL] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_READ_COLOR_LOW_LEVEL] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_FILL_DISPLAY] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_DRAW_TEXT] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_DRAW_LINE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_DRAW_BOX] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_SET_UPDATE_MODE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_UPDATE_MODE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_DISPLAY_TYPE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_DISPLAY_TYPE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
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

        $this->callback_wrappers[self::CALLBACK_DRAW_STATUS] = array(9, 'callbackWrapperDrawStatus');

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
     * Draws the current black/white and red or gray buffer to the e-paper display.
     * 
     * The Bricklet does not have any double-buffering. You should not call
     * this function while writing to the buffer. See BrickletEPaper296x128::getDrawStatus().
     * 
     * 
     * @return void
     */
    public function draw()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_DRAW, $payload, 0);
    }

    /**
     * Returns one of three draw statuses:
     * 
     * * Idle
     * * Copying: Data is being copied from the buffer of the Bricklet to the buffer of the display.
     * * Drawing: The display is updating its content (during this phase the flickering etc happens).
     * 
     * You can write to the buffer (through one of the write or draw functions) when the status is
     * either *idle* or *drawing*. You should not write to the buffer while it is being *copied* to the
     * display. There is no double-buffering.
     * 
     * 
     * @return int
     */
    public function getDrawStatus()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_DRAW_STATUS, $payload, 9);

        $payload = unpack('C1draw_status', $data);

        return $payload['draw_status'];
    }

    /**
     * Writes black/white pixels to the specified window into the buffer.
     * 
     * The pixels are written into the window line by line top to bottom
     * and each line is written from left to right.
     * 
     * The value 0 (false) corresponds to a black pixel and the value 1 (true) to a
     * white pixel.
     * 
     * This function writes the pixels into the black/white pixel buffer, to draw the
     * buffer to the display use BrickletEPaper296x128::draw().
     * 
     * Use BrickletEPaper296x128::writeColor() to write red or gray pixels.
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
    public function writeBlackWhiteLowLevel($x_start, $y_start, $x_end, $y_end, $pixels_length, $pixels_chunk_offset, $pixels_chunk_data)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $x_start);
        $payload .= pack('C', $y_start);
        $payload .= pack('v', $x_end);
        $payload .= pack('C', $y_end);
        $payload .= pack('v', $pixels_length);
        $payload .= pack('v', $pixels_chunk_offset);
        $pixels_chunk_data_bits = array_fill(0, 54, 0);
        for ($i = 0; $i < 432; $i++) {
            if((bool)$pixels_chunk_data[$i]) {
              $pixels_chunk_data_bits[$i / 8] |= 1 << ($i % 8);
            }
        }
        for ($i = 0; $i < 54; $i++) {
          $payload .= pack('C', intval($pixels_chunk_data_bits[$i]));
        }

        $this->sendRequest(self::FUNCTION_WRITE_BLACK_WHITE_LOW_LEVEL, $payload, 0);
    }

    /**
     * Returns the current content of the black/white pixel buffer for the specified window.
     * 
     * The pixels are read into the window line by line top to bottom and
     * each line is read from left to right.
     * 
     * The current content of the buffer does not have to be the current content of the display.
     * It is possible that the data was not drawn to the display yet and after a restart of
     * the Bricklet the buffer will be reset to black, while the display retains its content.
     * 
     * @param int $x_start
     * @param int $y_start
     * @param int $x_end
     * @param int $y_end
     * 
     * @return array
     */
    public function readBlackWhiteLowLevel($x_start, $y_start, $x_end, $y_end)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('v', $x_start);
        $payload .= pack('C', $y_start);
        $payload .= pack('v', $x_end);
        $payload .= pack('C', $y_end);

        $data = $this->sendRequest(self::FUNCTION_READ_BLACK_WHITE_LOW_LEVEL, $payload, 70);

        $payload = unpack('v1pixels_length/v1pixels_chunk_offset/C58pixels_chunk_data', $data);

        $ret['pixels_length'] = $payload['pixels_length'];
        $ret['pixels_chunk_offset'] = $payload['pixels_chunk_offset'];
        $ret['pixels_chunk_data'] = IPConnection::collectUnpackedBoolArray($payload, 'pixels_chunk_data', 464);

        return $ret;
    }

    /**
     * The E-Paper 296x128 Bricklet is available with the colors black/white/red and
     * black/white/gray. Depending on the model this function writes either red or
     * gray pixels to the specified window into the buffer.
     * 
     * The pixels are written into the window line by line top to bottom
     * and each line is written from left to right.
     * 
     * The value 0 (false) means that this pixel does not have color. It will be either black
     * or white (see BrickletEPaper296x128::writeBlackWhite()). The value 1 (true) corresponds to a red or gray
     * pixel, depending on the Bricklet model.
     * 
     * This function writes the pixels into the red or gray pixel buffer, to draw the buffer
     * to the display use BrickletEPaper296x128::draw().
     * 
     * Use BrickletEPaper296x128::writeBlackWhite() to write black/white pixels.
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
    public function writeColorLowLevel($x_start, $y_start, $x_end, $y_end, $pixels_length, $pixels_chunk_offset, $pixels_chunk_data)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $x_start);
        $payload .= pack('C', $y_start);
        $payload .= pack('v', $x_end);
        $payload .= pack('C', $y_end);
        $payload .= pack('v', $pixels_length);
        $payload .= pack('v', $pixels_chunk_offset);
        $pixels_chunk_data_bits = array_fill(0, 54, 0);
        for ($i = 0; $i < 432; $i++) {
            if((bool)$pixels_chunk_data[$i]) {
              $pixels_chunk_data_bits[$i / 8] |= 1 << ($i % 8);
            }
        }
        for ($i = 0; $i < 54; $i++) {
          $payload .= pack('C', intval($pixels_chunk_data_bits[$i]));
        }

        $this->sendRequest(self::FUNCTION_WRITE_COLOR_LOW_LEVEL, $payload, 0);
    }

    /**
     * Returns the current content of the red or gray pixel buffer for the specified window.
     * 
     * The pixels are written into the window line by line top to bottom
     * and each line is written from left to right.
     * 
     * The current content of the buffer does not have to be the current content of the display.
     * It is possible that the data was not drawn to the display yet and after a restart of
     * the Bricklet the buffer will be reset to black, while the display retains its content.
     * 
     * @param int $x_start
     * @param int $y_start
     * @param int $x_end
     * @param int $y_end
     * 
     * @return array
     */
    public function readColorLowLevel($x_start, $y_start, $x_end, $y_end)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('v', $x_start);
        $payload .= pack('C', $y_start);
        $payload .= pack('v', $x_end);
        $payload .= pack('C', $y_end);

        $data = $this->sendRequest(self::FUNCTION_READ_COLOR_LOW_LEVEL, $payload, 70);

        $payload = unpack('v1pixels_length/v1pixels_chunk_offset/C58pixels_chunk_data', $data);

        $ret['pixels_length'] = $payload['pixels_length'];
        $ret['pixels_chunk_offset'] = $payload['pixels_chunk_offset'];
        $ret['pixels_chunk_data'] = IPConnection::collectUnpackedBoolArray($payload, 'pixels_chunk_data', 464);

        return $ret;
    }

    /**
     * Fills the complete content of the display with the given color.
     * 
     * This function writes the pixels into the black/white/red|gray pixel buffer, to draw the buffer
     * to the display use BrickletEPaper296x128::draw().
     * 
     * @param int $color
     * 
     * @return void
     */
    public function fillDisplay($color)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $color);

        $this->sendRequest(self::FUNCTION_FILL_DISPLAY, $payload, 0);
    }

    /**
     * Draws a text with up to 50 characters at the pixel position (x, y).
     * 
     * You can use one of 9 different font sizes and draw the text in
     * black/white/red|gray. The text can be drawn horizontal or vertical.
     * 
     * This function writes the pixels into the black/white/red|gray pixel buffer, to draw the buffer
     * to the display use BrickletEPaper296x128::draw().
     * 
     * @param int $position_x
     * @param int $position_y
     * @param int $font
     * @param int $color
     * @param int $orientation
     * @param string $text
     * 
     * @return void
     */
    public function drawText($position_x, $position_y, $font, $color, $orientation, $text)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $position_x);
        $payload .= pack('C', $position_y);
        $payload .= pack('C', $font);
        $payload .= pack('C', $color);
        $payload .= pack('C', $orientation);
        for ($i = 0; $i < strlen($text) && $i < 50; $i++) {
            $payload .= pack('c', ord($text[$i]));
        }
        for ($i = strlen($text); $i < 50; $i++) {
            $payload .= pack('c', 0);
        }

        $this->sendRequest(self::FUNCTION_DRAW_TEXT, $payload, 0);
    }

    /**
     * Draws a line from (x, y)-start to (x, y)-end in the given color.
     * 
     * This function writes the pixels into the black/white/red|gray pixel buffer, to draw the buffer
     * to the display use BrickletEPaper296x128::draw().
     * 
     * @param int $position_x_start
     * @param int $position_y_start
     * @param int $position_x_end
     * @param int $position_y_end
     * @param int $color
     * 
     * @return void
     */
    public function drawLine($position_x_start, $position_y_start, $position_x_end, $position_y_end, $color)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $position_x_start);
        $payload .= pack('C', $position_y_start);
        $payload .= pack('v', $position_x_end);
        $payload .= pack('C', $position_y_end);
        $payload .= pack('C', $color);

        $this->sendRequest(self::FUNCTION_DRAW_LINE, $payload, 0);
    }

    /**
     * Draws a box from (x, y)-start to (x, y)-end in the given color.
     * 
     * If you set fill to true, the box will be filled with the
     * color. Otherwise only the outline will be drawn.
     * 
     * This function writes the pixels into the black/white/red|gray pixel buffer, to draw the buffer
     * to the display use BrickletEPaper296x128::draw().
     * 
     * @param int $position_x_start
     * @param int $position_y_start
     * @param int $position_x_end
     * @param int $position_y_end
     * @param bool $fill
     * @param int $color
     * 
     * @return void
     */
    public function drawBox($position_x_start, $position_y_start, $position_x_end, $position_y_end, $fill, $color)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $position_x_start);
        $payload .= pack('C', $position_y_start);
        $payload .= pack('v', $position_x_end);
        $payload .= pack('C', $position_y_end);
        $payload .= pack('C', intval((bool)$fill));
        $payload .= pack('C', $color);

        $this->sendRequest(self::FUNCTION_DRAW_BOX, $payload, 0);
    }

    /**
     * <note>
     *  The default update mode corresponds to the default e-paper display
     *  manufacturer settings. All of the other modes are experimental and
     *  will result in increased ghosting and possibly other long-term
     *  side effects.
     * </note>
     * 
     *  If you want to know more about the inner workings of an e-paper display
     *  take a look at this excellent video from Ben Krasnow:
     *  `https://www.youtube.com/watch?v=MsbiO8EAsGw <https://www.youtube.com/watch?v=MsbiO8EAsGw>`__.
     * 
     *  If you are not sure about this option, leave the update mode at default.
     * 
     * Currently there are three update modes available:
     * 
     * * Default: Settings as given by the manufacturer. An update will take about
     *   7.5 seconds and during the update the screen will flicker several times.
     * * Black/White: This will only update the black/white pixel. It uses the manufacturer
     *   settings for black/white and ignores the red or gray pixel buffer. With this mode the
     *   display will flicker once and it takes about 2.5 seconds. Compared to the default settings
     *   there is more ghosting.
     * * Delta: This will only update the black/white pixel. It uses an aggressive method where
     *   the changes are not applied for a whole buffer but only for the delta between the last
     *   and the next buffer. With this mode the display will not flicker during an update and
     *   it takes about 900-950ms. Compared to the other two settings there is more ghosting. This
     *   mode can be used for something like a flicker-free live update of a text.
     * 
     * With the black/white/red display if you use either the black/white or the delta mode,
     * after a while of going back and forth between black and white the white color will
     * start to appear red-ish or pink-ish.
     * 
     * If you use the aggressive delta mode and rapidly change the content, we recommend that you
     * change back to the default mode every few hours and in the default mode cycle between the
     * three available colors a few times. This will get rid of the ghosting and after that you can
     * go back to the delta mode with flicker-free updates.
     * 
     * @param int $update_mode
     * 
     * @return void
     */
    public function setUpdateMode($update_mode)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $update_mode);

        $this->sendRequest(self::FUNCTION_SET_UPDATE_MODE, $payload, 0);
    }

    /**
     * Returns the update mode as set by BrickletEPaper296x128::setUpdateMode().
     * 
     * 
     * @return int
     */
    public function getUpdateMode()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_UPDATE_MODE, $payload, 9);

        $payload = unpack('C1update_mode', $data);

        return $payload['update_mode'];
    }

    /**
     * Sets the type of the display. The e-paper display is available
     * in black/white/red and black/white/gray. This will be factory set
     * during the flashing and testing phase. The value is saved in
     * non-volatile memory and will stay after a power cycle.
     * 
     * @param int $display_type
     * 
     * @return void
     */
    public function setDisplayType($display_type)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $display_type);

        $this->sendRequest(self::FUNCTION_SET_DISPLAY_TYPE, $payload, 0);
    }

    /**
     * Returns the type of the e-paper display. It can either be
     * black/white/red or black/white/gray.
     * 
     * 
     * @return int
     */
    public function getDisplayType()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_DISPLAY_TYPE, $payload, 9);

        $payload = unpack('C1display_type', $data);

        return $payload['display_type'];
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
     * Returns the current bootloader mode, see BrickletEPaper296x128::setBootloaderMode().
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
     * Sets the firmware pointer for BrickletEPaper296x128::writeFirmware(). The pointer has
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
     * BrickletEPaper296x128::setWriteFirmwarePointer() before. The firmware is written
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
     * Returns the configuration as set by BrickletEPaper296x128::setStatusLEDConfig()
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
     * Writes black/white pixels to the specified window into the buffer.
     * 
     * The pixels are written into the window line by line top to bottom
     * and each line is written from left to right.
     * 
     * The value 0 (false) corresponds to a black pixel and the value 1 (true) to a
     * white pixel.
     * 
     * This function writes the pixels into the black/white pixel buffer, to draw the
     * buffer to the display use BrickletEPaper296x128::draw().
     * 
     * Use BrickletEPaper296x128::writeColor() to write red or gray pixels.
     * 
     * @param int $x_start
     * @param int $y_start
     * @param int $x_end
     * @param int $y_end
     * @param bool[] $pixels
     * 
     * @return void
     */
    public function writeBlackWhite($x_start, $y_start, $x_end, $y_end, $pixels)
    {
        if (count($pixels) > 65535) {
            throw new \InvalidArgumentException('Pixels can be at most 65535 items long');
        }

        $pixels_length = count($pixels);
        $pixels_chunk_offset = 0;

        if ($pixels_length === 0) {
            $pixels_chunk_data = array_fill(0, 432, false);
            $ret = $this->writeBlackWhiteLowLevel($x_start, $y_start, $x_end, $y_end, $pixels_length, $pixels_chunk_offset, $pixels_chunk_data);
        } else {
            while ($pixels_chunk_offset < $pixels_length) {
                $pixels_chunk_data = $this->createChunkData($pixels, $pixels_chunk_offset, 432, false);
                $ret = $this->writeBlackWhiteLowLevel($x_start, $y_start, $x_end, $y_end, $pixels_length, $pixels_chunk_offset, $pixels_chunk_data);
                $pixels_chunk_offset += 432;
            }
        }

        return $ret;
    }

    /**
     * Returns the current content of the black/white pixel buffer for the specified window.
     * 
     * The pixels are read into the window line by line top to bottom and
     * each line is read from left to right.
     * 
     * The current content of the buffer does not have to be the current content of the display.
     * It is possible that the data was not drawn to the display yet and after a restart of
     * the Bricklet the buffer will be reset to black, while the display retains its content.
     * 
     * @param int $x_start
     * @param int $y_start
     * @param int $x_end
     * @param int $y_end
     * 
     * @return array
     */
    public function readBlackWhite($x_start, $y_start, $x_end, $y_end)
    {
        $ret = $this->readBlackWhiteLowLevel($x_start, $y_start, $x_end, $y_end);
        $pixels_length = $ret['pixels_length'];
        $pixels_out_of_sync = $ret['pixels_chunk_offset'] != 0;
        $pixels_data = $ret['pixels_chunk_data'];

        while (!$pixels_out_of_sync && count($pixels_data) < $pixels_length) {
            $ret = $this->readBlackWhiteLowLevel($x_start, $y_start, $x_end, $y_end);
            $pixels_length = $ret['pixels_length'];
            $pixels_out_of_sync = $ret['pixels_chunk_offset'] != count($pixels_data);
            $pixels_data = array_merge($pixels_data, $ret['pixels_chunk_data']);
        }

        if ($pixels_out_of_sync) { // discard remaining stream to bring it back in-sync
            while ($ret['pixels_chunk_offset'] + 464 < $pixels_length) {
                $ret = $this->readBlackWhiteLowLevel($x_start, $y_start, $x_end, $y_end);
                $pixels_length = $ret['pixels_length'];
            }

            throw new StreamOutOfSyncException('Pixels stream is out-of-sync');
        }

        return array_slice($pixels_data, 0, $pixels_length);
    }

    /**
     * The E-Paper 296x128 Bricklet is available with the colors black/white/red and
     * black/white/gray. Depending on the model this function writes either red or
     * gray pixels to the specified window into the buffer.
     * 
     * The pixels are written into the window line by line top to bottom
     * and each line is written from left to right.
     * 
     * The value 0 (false) means that this pixel does not have color. It will be either black
     * or white (see BrickletEPaper296x128::writeBlackWhite()). The value 1 (true) corresponds to a red or gray
     * pixel, depending on the Bricklet model.
     * 
     * This function writes the pixels into the red or gray pixel buffer, to draw the buffer
     * to the display use BrickletEPaper296x128::draw().
     * 
     * Use BrickletEPaper296x128::writeBlackWhite() to write black/white pixels.
     * 
     * @param int $x_start
     * @param int $y_start
     * @param int $x_end
     * @param int $y_end
     * @param bool[] $pixels
     * 
     * @return void
     */
    public function writeColor($x_start, $y_start, $x_end, $y_end, $pixels)
    {
        if (count($pixels) > 65535) {
            throw new \InvalidArgumentException('Pixels can be at most 65535 items long');
        }

        $pixels_length = count($pixels);
        $pixels_chunk_offset = 0;

        if ($pixels_length === 0) {
            $pixels_chunk_data = array_fill(0, 432, false);
            $ret = $this->writeColorLowLevel($x_start, $y_start, $x_end, $y_end, $pixels_length, $pixels_chunk_offset, $pixels_chunk_data);
        } else {
            while ($pixels_chunk_offset < $pixels_length) {
                $pixels_chunk_data = $this->createChunkData($pixels, $pixels_chunk_offset, 432, false);
                $ret = $this->writeColorLowLevel($x_start, $y_start, $x_end, $y_end, $pixels_length, $pixels_chunk_offset, $pixels_chunk_data);
                $pixels_chunk_offset += 432;
            }
        }

        return $ret;
    }

    /**
     * Returns the current content of the red or gray pixel buffer for the specified window.
     * 
     * The pixels are written into the window line by line top to bottom
     * and each line is written from left to right.
     * 
     * The current content of the buffer does not have to be the current content of the display.
     * It is possible that the data was not drawn to the display yet and after a restart of
     * the Bricklet the buffer will be reset to black, while the display retains its content.
     * 
     * @param int $x_start
     * @param int $y_start
     * @param int $x_end
     * @param int $y_end
     * 
     * @return array
     */
    public function readColor($x_start, $y_start, $x_end, $y_end)
    {
        $ret = $this->readColorLowLevel($x_start, $y_start, $x_end, $y_end);
        $pixels_length = $ret['pixels_length'];
        $pixels_out_of_sync = $ret['pixels_chunk_offset'] != 0;
        $pixels_data = $ret['pixels_chunk_data'];

        while (!$pixels_out_of_sync && count($pixels_data) < $pixels_length) {
            $ret = $this->readColorLowLevel($x_start, $y_start, $x_end, $y_end);
            $pixels_length = $ret['pixels_length'];
            $pixels_out_of_sync = $ret['pixels_chunk_offset'] != count($pixels_data);
            $pixels_data = array_merge($pixels_data, $ret['pixels_chunk_data']);
        }

        if ($pixels_out_of_sync) { // discard remaining stream to bring it back in-sync
            while ($ret['pixels_chunk_offset'] + 464 < $pixels_length) {
                $ret = $this->readColorLowLevel($x_start, $y_start, $x_end, $y_end);
                $pixels_length = $ret['pixels_length'];
            }

            throw new StreamOutOfSyncException('Pixels stream is out-of-sync');
        }

        return array_slice($pixels_data, 0, $pixels_length);
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
    public function callbackWrapperDrawStatus($data)
    {
        $payload = unpack('C1draw_status', $data);

        if (array_key_exists(self::CALLBACK_DRAW_STATUS, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_DRAW_STATUS];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_DRAW_STATUS];

            call_user_func($function, $payload['draw_status'], $user_data);
        }
    }
}

?>
