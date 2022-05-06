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
 * 7.1cm (2.8") display with 128x64 pixel and touch screen
 */
class BrickletLCD128x64 extends Device
{

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletLCD128x64::setTouchPositionCallbackConfiguration(). The parameters are the
     * same as for BrickletLCD128x64::getTouchPosition().
     */
    const CALLBACK_TOUCH_POSITION = 11;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletLCD128x64::setTouchGestureCallbackConfiguration(). The parameters are the
     * same as for BrickletLCD128x64::getTouchGesture().
     */
    const CALLBACK_TOUCH_GESTURE = 15;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletLCD128x64::setGUIButtonPressedCallbackConfiguration(). The parameters are the
     * same as for BrickletLCD128x64::getGUIButtonPressed().
     * 
     * .. versionadded:: 2.0.2$nbsp;(Plugin)
     */
    const CALLBACK_GUI_BUTTON_PRESSED = 25;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletLCD128x64::setGUISliderValueCallbackConfiguration(). The parameters are the
     * same as for BrickletLCD128x64::getGUISliderValue().
     * 
     * .. versionadded:: 2.0.2$nbsp;(Plugin)
     */
    const CALLBACK_GUI_SLIDER_VALUE = 32;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletLCD128x64::setGUITabSelectedCallbackConfiguration(). The parameters are the
     * same as for BrickletLCD128x64::getGUITabSelected().
     * 
     * .. versionadded:: 2.0.2$nbsp;(Plugin)
     */
    const CALLBACK_GUI_TAB_SELECTED = 44;


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
    const FUNCTION_GET_TOUCH_POSITION = 8;

    /**
     * @internal
     */
    const FUNCTION_SET_TOUCH_POSITION_CALLBACK_CONFIGURATION = 9;

    /**
     * @internal
     */
    const FUNCTION_GET_TOUCH_POSITION_CALLBACK_CONFIGURATION = 10;

    /**
     * @internal
     */
    const FUNCTION_GET_TOUCH_GESTURE = 12;

    /**
     * @internal
     */
    const FUNCTION_SET_TOUCH_GESTURE_CALLBACK_CONFIGURATION = 13;

    /**
     * @internal
     */
    const FUNCTION_GET_TOUCH_GESTURE_CALLBACK_CONFIGURATION = 14;

    /**
     * @internal
     */
    const FUNCTION_DRAW_LINE = 16;

    /**
     * @internal
     */
    const FUNCTION_DRAW_BOX = 17;

    /**
     * @internal
     */
    const FUNCTION_DRAW_TEXT = 18;

    /**
     * @internal
     */
    const FUNCTION_SET_GUI_BUTTON = 19;

    /**
     * @internal
     */
    const FUNCTION_GET_GUI_BUTTON = 20;

    /**
     * @internal
     */
    const FUNCTION_REMOVE_GUI_BUTTON = 21;

    /**
     * @internal
     */
    const FUNCTION_SET_GUI_BUTTON_PRESSED_CALLBACK_CONFIGURATION = 22;

    /**
     * @internal
     */
    const FUNCTION_GET_GUI_BUTTON_PRESSED_CALLBACK_CONFIGURATION = 23;

    /**
     * @internal
     */
    const FUNCTION_GET_GUI_BUTTON_PRESSED = 24;

    /**
     * @internal
     */
    const FUNCTION_SET_GUI_SLIDER = 26;

    /**
     * @internal
     */
    const FUNCTION_GET_GUI_SLIDER = 27;

    /**
     * @internal
     */
    const FUNCTION_REMOVE_GUI_SLIDER = 28;

    /**
     * @internal
     */
    const FUNCTION_SET_GUI_SLIDER_VALUE_CALLBACK_CONFIGURATION = 29;

    /**
     * @internal
     */
    const FUNCTION_GET_GUI_SLIDER_VALUE_CALLBACK_CONFIGURATION = 30;

    /**
     * @internal
     */
    const FUNCTION_GET_GUI_SLIDER_VALUE = 31;

    /**
     * @internal
     */
    const FUNCTION_SET_GUI_TAB_CONFIGURATION = 33;

    /**
     * @internal
     */
    const FUNCTION_GET_GUI_TAB_CONFIGURATION = 34;

    /**
     * @internal
     */
    const FUNCTION_SET_GUI_TAB_TEXT = 35;

    /**
     * @internal
     */
    const FUNCTION_GET_GUI_TAB_TEXT = 36;

    /**
     * @internal
     */
    const FUNCTION_SET_GUI_TAB_ICON = 37;

    /**
     * @internal
     */
    const FUNCTION_GET_GUI_TAB_ICON = 38;

    /**
     * @internal
     */
    const FUNCTION_REMOVE_GUI_TAB = 39;

    /**
     * @internal
     */
    const FUNCTION_SET_GUI_TAB_SELECTED = 40;

    /**
     * @internal
     */
    const FUNCTION_SET_GUI_TAB_SELECTED_CALLBACK_CONFIGURATION = 41;

    /**
     * @internal
     */
    const FUNCTION_GET_GUI_TAB_SELECTED_CALLBACK_CONFIGURATION = 42;

    /**
     * @internal
     */
    const FUNCTION_GET_GUI_TAB_SELECTED = 43;

    /**
     * @internal
     */
    const FUNCTION_SET_GUI_GRAPH_CONFIGURATION = 45;

    /**
     * @internal
     */
    const FUNCTION_GET_GUI_GRAPH_CONFIGURATION = 46;

    /**
     * @internal
     */
    const FUNCTION_SET_GUI_GRAPH_DATA_LOW_LEVEL = 47;

    /**
     * @internal
     */
    const FUNCTION_GET_GUI_GRAPH_DATA_LOW_LEVEL = 48;

    /**
     * @internal
     */
    const FUNCTION_REMOVE_GUI_GRAPH = 49;

    /**
     * @internal
     */
    const FUNCTION_REMOVE_ALL_GUI = 50;

    /**
     * @internal
     */
    const FUNCTION_SET_TOUCH_LED_CONFIG = 51;

    /**
     * @internal
     */
    const FUNCTION_GET_TOUCH_LED_CONFIG = 52;

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

    const GESTURE_LEFT_TO_RIGHT = 0;
    const GESTURE_RIGHT_TO_LEFT = 1;
    const GESTURE_TOP_TO_BOTTOM = 2;
    const GESTURE_BOTTOM_TO_TOP = 3;
    const COLOR_WHITE = false;
    const COLOR_BLACK = true;
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
    const DIRECTION_HORIZONTAL = 0;
    const DIRECTION_VERTICAL = 1;
    const CHANGE_TAB_ON_CLICK = 1;
    const CHANGE_TAB_ON_SWIPE = 2;
    const CHANGE_TAB_ON_CLICK_AND_SWIPE = 3;
    const GRAPH_TYPE_DOT = 0;
    const GRAPH_TYPE_LINE = 1;
    const GRAPH_TYPE_BAR = 2;
    const TOUCH_LED_CONFIG_OFF = 0;
    const TOUCH_LED_CONFIG_ON = 1;
    const TOUCH_LED_CONFIG_SHOW_HEARTBEAT = 2;
    const TOUCH_LED_CONFIG_SHOW_TOUCH = 3;
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

    const DEVICE_IDENTIFIER = 298;

    const DEVICE_DISPLAY_NAME = 'LCD 128x64 Bricklet';

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

        $this->response_expected[self::FUNCTION_WRITE_PIXELS_LOW_LEVEL] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_READ_PIXELS_LOW_LEVEL] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_CLEAR_DISPLAY] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_SET_DISPLAY_CONFIGURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_DISPLAY_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_WRITE_LINE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_DRAW_BUFFERED_FRAME] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_TOUCH_POSITION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_TOUCH_POSITION_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_TOUCH_POSITION_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_TOUCH_GESTURE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_TOUCH_GESTURE_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_TOUCH_GESTURE_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_DRAW_LINE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_DRAW_BOX] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_DRAW_TEXT] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_SET_GUI_BUTTON] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_GUI_BUTTON] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_REMOVE_GUI_BUTTON] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_SET_GUI_BUTTON_PRESSED_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_GUI_BUTTON_PRESSED_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_GUI_BUTTON_PRESSED] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_GUI_SLIDER] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_GUI_SLIDER] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_REMOVE_GUI_SLIDER] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_SET_GUI_SLIDER_VALUE_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_GUI_SLIDER_VALUE_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_GUI_SLIDER_VALUE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_GUI_TAB_CONFIGURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_GUI_TAB_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_GUI_TAB_TEXT] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_GUI_TAB_TEXT] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_GUI_TAB_ICON] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_GUI_TAB_ICON] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_REMOVE_GUI_TAB] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_SET_GUI_TAB_SELECTED] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_SET_GUI_TAB_SELECTED_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_GUI_TAB_SELECTED_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_GUI_TAB_SELECTED] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_GUI_GRAPH_CONFIGURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_GUI_GRAPH_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_GUI_GRAPH_DATA_LOW_LEVEL] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_GUI_GRAPH_DATA_LOW_LEVEL] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_REMOVE_GUI_GRAPH] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_REMOVE_ALL_GUI] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_SET_TOUCH_LED_CONFIG] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_TOUCH_LED_CONFIG] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
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

        $this->callback_wrappers[self::CALLBACK_TOUCH_POSITION] = array(18, 'callbackWrapperTouchPosition');
        $this->callback_wrappers[self::CALLBACK_TOUCH_GESTURE] = array(27, 'callbackWrapperTouchGesture');
        $this->callback_wrappers[self::CALLBACK_GUI_BUTTON_PRESSED] = array(10, 'callbackWrapperGUIButtonPressed');
        $this->callback_wrappers[self::CALLBACK_GUI_SLIDER_VALUE] = array(10, 'callbackWrapperGUISliderValue');
        $this->callback_wrappers[self::CALLBACK_GUI_TAB_SELECTED] = array(9, 'callbackWrapperGUITabSelected');

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
     * the buffer is transferred to the display only after BrickletLCD128x64::drawBufferedFrame()
     * is called. This can be used to avoid flicker when drawing a complex frame in
     * multiple steps.
     * 
     * Automatic draw can be configured with the BrickletLCD128x64::setDisplayConfiguration()
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
     * (see BrickletLCD128x64::drawBufferedFrame()).
     * 
     * Automatic draw can be configured with the BrickletLCD128x64::setDisplayConfiguration()
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
     * the buffer is transferred to the display only after BrickletLCD128x64::drawBufferedFrame()
     * is called. This can be used to avoid flicker when drawing a complex frame in
     * multiple steps.
     * 
     * Automatic draw can be configured with the BrickletLCD128x64::setDisplayConfiguration()
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
     * If automatic draw is set to *true*, the display is automatically updated with every
     * call of BrickletLCD128x64::writePixels() and BrickletLCD128x64::writeLine(). If it is set to false, the
     * changes are written into an internal buffer and only shown on the display after
     * a call of BrickletLCD128x64::drawBufferedFrame().
     * 
     * @param int $contrast
     * @param int $backlight
     * @param bool $invert
     * @param bool $automatic_draw
     * 
     * @return void
     */
    public function setDisplayConfiguration($contrast, $backlight, $invert, $automatic_draw)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $contrast);
        $payload .= pack('C', $backlight);
        $payload .= pack('C', intval((bool)$invert));
        $payload .= pack('C', intval((bool)$automatic_draw));

        $this->sendRequest(self::FUNCTION_SET_DISPLAY_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the configuration as set by BrickletLCD128x64::setDisplayConfiguration().
     * 
     * 
     * @return array
     */
    public function getDisplayConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_DISPLAY_CONFIGURATION, $payload, 12);

        $payload = unpack('C1contrast/C1backlight/C1invert/C1automatic_draw', $data);

        $ret['contrast'] = $payload['contrast'];
        $ret['backlight'] = $payload['backlight'];
        $ret['invert'] = (bool)$payload['invert'];
        $ret['automatic_draw'] = (bool)$payload['automatic_draw'];

        return $ret;
    }

    /**
     * Writes text to a specific line with a specific position.
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
     * the buffer is transferred to the display only after BrickletLCD128x64::drawBufferedFrame()
     * is called. This can be used to avoid flicker when drawing a complex frame in
     * multiple steps.
     * 
     * Automatic draw can be configured with the BrickletLCD128x64::setDisplayConfiguration()
     * function.
     * 
     * This function is a 1:1 replacement for the function with the same name
     * in the LCD 20x4 Bricklet. You can draw text at a specific pixel position
     * and with different font sizes with the BrickletLCD128x64::drawText() function.
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
     * Draws the currently buffered frame. Normally each call of BrickletLCD128x64::writePixels() and
     * BrickletLCD128x64::writeLine() draws directly onto the display. If you turn automatic draw off
     * (BrickletLCD128x64::setDisplayConfiguration()), the data is written in an internal buffer and
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
     * Returns the last valid touch position:
     * 
     * * Pressure: Amount of pressure applied by the user
     * * X: Touch position on x-axis
     * * Y: Touch position on y-axis
     * * Age: Age of touch press (how long ago it was)
     * 
     * 
     * @return array
     */
    public function getTouchPosition()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_TOUCH_POSITION, $payload, 18);

        $payload = unpack('v1pressure/v1x/v1y/V1age', $data);

        $ret['pressure'] = $payload['pressure'];
        $ret['x'] = $payload['x'];
        $ret['y'] = $payload['y'];
        $ret['age'] = IPConnection::fixUnpackedUInt32($payload, 'age');

        return $ret;
    }

    /**
     * The period is the period with which the BrickletLCD128x64::CALLBACK_TOUCH_POSITION callback
     * is triggered periodically. A value of 0 turns the callback off.
     * 
     * If the `value has to change`-parameter is set to true, the callback is only
     * triggered after the value has changed. If the value didn't change within the
     * period, the callback is triggered immediately on change.
     * 
     * If it is set to false, the callback is continuously triggered with the period,
     * independent of the value.
     * 
     * @param int $period
     * @param bool $value_has_to_change
     * 
     * @return void
     */
    public function setTouchPositionCallbackConfiguration($period, $value_has_to_change)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);
        $payload .= pack('C', intval((bool)$value_has_to_change));

        $this->sendRequest(self::FUNCTION_SET_TOUCH_POSITION_CALLBACK_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the callback configuration as set by
     * BrickletLCD128x64::setTouchPositionCallbackConfiguration().
     * 
     * 
     * @return array
     */
    public function getTouchPositionCallbackConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_TOUCH_POSITION_CALLBACK_CONFIGURATION, $payload, 13);

        $payload = unpack('V1period/C1value_has_to_change', $data);

        $ret['period'] = IPConnection::fixUnpackedUInt32($payload, 'period');
        $ret['value_has_to_change'] = (bool)$payload['value_has_to_change'];

        return $ret;
    }

    /**
     * Returns one of four touch gestures that can be automatically detected by the Bricklet.
     * 
     * The gestures are swipes from left to right, right to left, top to bottom and bottom to top.
     * 
     * Additionally to the gestures a vector with a start and end position of the gesture is
     * provided. You can use this vector do determine a more exact location of the gesture (e.g.
     * the swipe from top to bottom was on the left or right part of the screen).
     * 
     * The age parameter corresponds to the age of gesture (how long ago it was).
     * 
     * 
     * @return array
     */
    public function getTouchGesture()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_TOUCH_GESTURE, $payload, 27);

        $payload = unpack('C1gesture/V1duration/v1pressure_max/v1x_start/v1y_start/v1x_end/v1y_end/V1age', $data);

        $ret['gesture'] = $payload['gesture'];
        $ret['duration'] = IPConnection::fixUnpackedUInt32($payload, 'duration');
        $ret['pressure_max'] = $payload['pressure_max'];
        $ret['x_start'] = $payload['x_start'];
        $ret['y_start'] = $payload['y_start'];
        $ret['x_end'] = $payload['x_end'];
        $ret['y_end'] = $payload['y_end'];
        $ret['age'] = IPConnection::fixUnpackedUInt32($payload, 'age');

        return $ret;
    }

    /**
     * The period is the period with which the BrickletLCD128x64::CALLBACK_TOUCH_GESTURE callback
     * is triggered periodically. A value of 0 turns the callback off.
     * 
     * If the `value has to change`-parameter is set to true, the callback is only
     * triggered after the value has changed. If the value didn't change within the
     * period, the callback is triggered immediately on change.
     * 
     * If it is set to false, the callback is continuously triggered with the period,
     * independent of the value.
     * 
     * @param int $period
     * @param bool $value_has_to_change
     * 
     * @return void
     */
    public function setTouchGestureCallbackConfiguration($period, $value_has_to_change)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);
        $payload .= pack('C', intval((bool)$value_has_to_change));

        $this->sendRequest(self::FUNCTION_SET_TOUCH_GESTURE_CALLBACK_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the callback configuration as set by
     * BrickletLCD128x64::setTouchGestureCallbackConfiguration().
     * 
     * 
     * @return array
     */
    public function getTouchGestureCallbackConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_TOUCH_GESTURE_CALLBACK_CONFIGURATION, $payload, 13);

        $payload = unpack('V1period/C1value_has_to_change', $data);

        $ret['period'] = IPConnection::fixUnpackedUInt32($payload, 'period');
        $ret['value_has_to_change'] = (bool)$payload['value_has_to_change'];

        return $ret;
    }

    /**
     * Draws a white or black line from (x, y)-start to (x, y)-end.
     * 
     * .. versionadded:: 2.0.2$nbsp;(Plugin)
     * 
     * @param int $position_x_start
     * @param int $position_y_start
     * @param int $position_x_end
     * @param int $position_y_end
     * @param bool $color
     * 
     * @return void
     */
    public function drawLine($position_x_start, $position_y_start, $position_x_end, $position_y_end, $color)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $position_x_start);
        $payload .= pack('C', $position_y_start);
        $payload .= pack('C', $position_x_end);
        $payload .= pack('C', $position_y_end);
        $payload .= pack('C', intval((bool)$color));

        $this->sendRequest(self::FUNCTION_DRAW_LINE, $payload, 0);
    }

    /**
     * Draws a white or black box from (x, y)-start to (x, y)-end.
     * 
     * If you set fill to true, the box will be filled with the
     * color. Otherwise only the outline will be drawn.
     * 
     * .. versionadded:: 2.0.2$nbsp;(Plugin)
     * 
     * @param int $position_x_start
     * @param int $position_y_start
     * @param int $position_x_end
     * @param int $position_y_end
     * @param bool $fill
     * @param bool $color
     * 
     * @return void
     */
    public function drawBox($position_x_start, $position_y_start, $position_x_end, $position_y_end, $fill, $color)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $position_x_start);
        $payload .= pack('C', $position_y_start);
        $payload .= pack('C', $position_x_end);
        $payload .= pack('C', $position_y_end);
        $payload .= pack('C', intval((bool)$fill));
        $payload .= pack('C', intval((bool)$color));

        $this->sendRequest(self::FUNCTION_DRAW_BOX, $payload, 0);
    }

    /**
     * Draws a text at the pixel position (x, y).
     * 
     * You can use one of 9 different font sizes and draw the text in white or black.
     * 
     * .. versionadded:: 2.0.2$nbsp;(Plugin)
     * 
     * @param int $position_x
     * @param int $position_y
     * @param int $font
     * @param bool $color
     * @param string $text
     * 
     * @return void
     */
    public function drawText($position_x, $position_y, $font, $color, $text)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $position_x);
        $payload .= pack('C', $position_y);
        $payload .= pack('C', $font);
        $payload .= pack('C', intval((bool)$color));
        for ($i = 0; $i < strlen($text) && $i < 22; $i++) {
            $payload .= pack('c', ord($text[$i]));
        }
        for ($i = strlen($text); $i < 22; $i++) {
            $payload .= pack('c', 0);
        }

        $this->sendRequest(self::FUNCTION_DRAW_TEXT, $payload, 0);
    }

    /**
     * Draws a clickable button at position (x, y) with the given text.
     * 
     * You can use up to 12 buttons.
     * 
     * The x position + width has to be within the range of 1 to 128 and the y
     * position + height has to be within the range of 1 to 64.
     * 
     * The minimum useful width/height of a button is 3.
     * 
     * You can enable a callback for a button press with
     * BrickletLCD128x64::setGUIButtonPressedCallbackConfiguration(). The callback will
     * be triggered for press and release-events.
     * 
     * The button is drawn in a separate GUI buffer and the button-frame will
     * always stay on top of the graphics drawn with BrickletLCD128x64::writePixels(). To
     * remove the button use BrickletLCD128x64::removeGUIButton().
     * 
     * If you want an icon instead of text, you can draw the icon inside of the
     * button with BrickletLCD128x64::writePixels().
     * 
     * .. versionadded:: 2.0.2$nbsp;(Plugin)
     * 
     * @param int $index
     * @param int $position_x
     * @param int $position_y
     * @param int $width
     * @param int $height
     * @param string $text
     * 
     * @return void
     */
    public function setGUIButton($index, $position_x, $position_y, $width, $height, $text)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $index);
        $payload .= pack('C', $position_x);
        $payload .= pack('C', $position_y);
        $payload .= pack('C', $width);
        $payload .= pack('C', $height);
        for ($i = 0; $i < strlen($text) && $i < 16; $i++) {
            $payload .= pack('c', ord($text[$i]));
        }
        for ($i = strlen($text); $i < 16; $i++) {
            $payload .= pack('c', 0);
        }

        $this->sendRequest(self::FUNCTION_SET_GUI_BUTTON, $payload, 0);
    }

    /**
     * Returns the button properties for a given `Index` as set by BrickletLCD128x64::setGUIButton().
     * 
     * Additionally the `Active` parameter shows if a button is currently active/visible
     * or not.
     * 
     * .. versionadded:: 2.0.2$nbsp;(Plugin)
     * 
     * @param int $index
     * 
     * @return array
     */
    public function getGUIButton($index)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('C', $index);

        $data = $this->sendRequest(self::FUNCTION_GET_GUI_BUTTON, $payload, 29);

        $payload = unpack('C1active/C1position_x/C1position_y/C1width/C1height/c16text', $data);

        $ret['active'] = (bool)$payload['active'];
        $ret['position_x'] = $payload['position_x'];
        $ret['position_y'] = $payload['position_y'];
        $ret['width'] = $payload['width'];
        $ret['height'] = $payload['height'];
        $ret['text'] = IPConnection::implodeUnpackedString($payload, 'text', 16);

        return $ret;
    }

    /**
     * Removes the button with the given index.
     * 
     * You can use index 255 to remove all buttons.
     * 
     * .. versionadded:: 2.0.2$nbsp;(Plugin)
     * 
     * @param int $index
     * 
     * @return void
     */
    public function removeGUIButton($index)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $index);

        $this->sendRequest(self::FUNCTION_REMOVE_GUI_BUTTON, $payload, 0);
    }

    /**
     * The period is the period with which the BrickletLCD128x64::CALLBACK_GUI_BUTTON_PRESSED callback
     * is triggered periodically. A value of 0 turns the callback off.
     * 
     * If the `value has to change`-parameter is set to true, the callback is only
     * triggered after the value has changed. If the value didn't change within the
     * period, the callback is triggered immediately on change.
     * 
     * If it is set to false, the callback is continuously triggered with the period,
     * independent of the value.
     * 
     * .. versionadded:: 2.0.2$nbsp;(Plugin)
     * 
     * @param int $period
     * @param bool $value_has_to_change
     * 
     * @return void
     */
    public function setGUIButtonPressedCallbackConfiguration($period, $value_has_to_change)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);
        $payload .= pack('C', intval((bool)$value_has_to_change));

        $this->sendRequest(self::FUNCTION_SET_GUI_BUTTON_PRESSED_CALLBACK_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the callback configuration as set by
     * BrickletLCD128x64::setGUIButtonPressedCallbackConfiguration().
     * 
     * .. versionadded:: 2.0.2$nbsp;(Plugin)
     * 
     * 
     * @return array
     */
    public function getGUIButtonPressedCallbackConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_GUI_BUTTON_PRESSED_CALLBACK_CONFIGURATION, $payload, 13);

        $payload = unpack('V1period/C1value_has_to_change', $data);

        $ret['period'] = IPConnection::fixUnpackedUInt32($payload, 'period');
        $ret['value_has_to_change'] = (bool)$payload['value_has_to_change'];

        return $ret;
    }

    /**
     * Returns the state of the button for the given index.
     * 
     * The state can either be pressed (true) or released (false).
     * 
     * .. versionadded:: 2.0.2$nbsp;(Plugin)
     * 
     * @param int $index
     * 
     * @return bool
     */
    public function getGUIButtonPressed($index)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $index);

        $data = $this->sendRequest(self::FUNCTION_GET_GUI_BUTTON_PRESSED, $payload, 9);

        $payload = unpack('C1pressed', $data);

        return (bool)$payload['pressed'];
    }

    /**
     * Draws a slider at position (x, y) with the given length.
     * 
     * You can use up to 6 sliders.
     * 
     * If you use the horizontal direction, the x position + length has to be
     * within the range of 1 to 128 and the y position has to be within
     * the range of 0 to 46.
     * 
     * If you use the vertical direction, the y position + length has to be
     * within the range of 1 to 64 and the x position has to be within
     * the range of 0 to 110.
     * 
     * The minimum length of a slider is 8.
     * 
     * The parameter value is the start-position of the slider, it can
     * be between 0 and length-8.
     * 
     * You can enable a callback for the slider value with
     * BrickletLCD128x64::setGUISliderValueCallbackConfiguration().
     * 
     * The slider is drawn in a separate GUI buffer and it will
     * always stay on top of the graphics drawn with BrickletLCD128x64::writePixels(). To
     * remove the button use BrickletLCD128x64::removeGUISlider().
     * 
     * .. versionadded:: 2.0.2$nbsp;(Plugin)
     * 
     * @param int $index
     * @param int $position_x
     * @param int $position_y
     * @param int $length
     * @param int $direction
     * @param int $value
     * 
     * @return void
     */
    public function setGUISlider($index, $position_x, $position_y, $length, $direction, $value)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $index);
        $payload .= pack('C', $position_x);
        $payload .= pack('C', $position_y);
        $payload .= pack('C', $length);
        $payload .= pack('C', $direction);
        $payload .= pack('C', $value);

        $this->sendRequest(self::FUNCTION_SET_GUI_SLIDER, $payload, 0);
    }

    /**
     * Returns the slider properties for a given `Index` as set by BrickletLCD128x64::setGUISlider().
     * 
     * Additionally the `Active` parameter shows if a button is currently active/visible
     * or not.
     * 
     * .. versionadded:: 2.0.2$nbsp;(Plugin)
     * 
     * @param int $index
     * 
     * @return array
     */
    public function getGUISlider($index)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('C', $index);

        $data = $this->sendRequest(self::FUNCTION_GET_GUI_SLIDER, $payload, 14);

        $payload = unpack('C1active/C1position_x/C1position_y/C1length/C1direction/C1value', $data);

        $ret['active'] = (bool)$payload['active'];
        $ret['position_x'] = $payload['position_x'];
        $ret['position_y'] = $payload['position_y'];
        $ret['length'] = $payload['length'];
        $ret['direction'] = $payload['direction'];
        $ret['value'] = $payload['value'];

        return $ret;
    }

    /**
     * Removes the slider with the given index.
     * 
     * You can use index 255 to remove all slider.
     * 
     * .. versionadded:: 2.0.2$nbsp;(Plugin)
     * 
     * @param int $index
     * 
     * @return void
     */
    public function removeGUISlider($index)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $index);

        $this->sendRequest(self::FUNCTION_REMOVE_GUI_SLIDER, $payload, 0);
    }

    /**
     * The period is the period with which the BrickletLCD128x64::CALLBACK_GUI_SLIDER_VALUE callback
     * is triggered periodically. A value of 0 turns the callback off.
     * 
     * If the `value has to change`-parameter is set to true, the callback is only
     * triggered after the value has changed. If the value didn't change within the
     * period, the callback is triggered immediately on change.
     * 
     * If it is set to false, the callback is continuously triggered with the period,
     * independent of the value.
     * 
     * .. versionadded:: 2.0.2$nbsp;(Plugin)
     * 
     * @param int $period
     * @param bool $value_has_to_change
     * 
     * @return void
     */
    public function setGUISliderValueCallbackConfiguration($period, $value_has_to_change)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);
        $payload .= pack('C', intval((bool)$value_has_to_change));

        $this->sendRequest(self::FUNCTION_SET_GUI_SLIDER_VALUE_CALLBACK_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the callback configuration as set by
     * BrickletLCD128x64::setGUISliderValueCallbackConfiguration().
     * 
     * .. versionadded:: 2.0.2$nbsp;(Plugin)
     * 
     * 
     * @return array
     */
    public function getGUISliderValueCallbackConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_GUI_SLIDER_VALUE_CALLBACK_CONFIGURATION, $payload, 13);

        $payload = unpack('V1period/C1value_has_to_change', $data);

        $ret['period'] = IPConnection::fixUnpackedUInt32($payload, 'period');
        $ret['value_has_to_change'] = (bool)$payload['value_has_to_change'];

        return $ret;
    }

    /**
     * Returns the current slider value for the given index.
     * 
     * .. versionadded:: 2.0.2$nbsp;(Plugin)
     * 
     * @param int $index
     * 
     * @return int
     */
    public function getGUISliderValue($index)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $index);

        $data = $this->sendRequest(self::FUNCTION_GET_GUI_SLIDER_VALUE, $payload, 9);

        $payload = unpack('C1value', $data);

        return $payload['value'];
    }

    /**
     * Sets the general configuration for tabs. You can configure the tabs to only
     * accept clicks or only swipes (gesture left/right and right/left) or both.
     * 
     * Additionally, if you set `Clear GUI` to true, all of the GUI elements (buttons,
     * slider, graphs) will automatically be removed on every tab change.
     * 
     * .. versionadded:: 2.0.2$nbsp;(Plugin)
     * 
     * @param int $change_tab_config
     * @param bool $clear_gui
     * 
     * @return void
     */
    public function setGUITabConfiguration($change_tab_config, $clear_gui)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $change_tab_config);
        $payload .= pack('C', intval((bool)$clear_gui));

        $this->sendRequest(self::FUNCTION_SET_GUI_TAB_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the tab configuration as set by BrickletLCD128x64::setGUITabConfiguration().
     * 
     * .. versionadded:: 2.0.2$nbsp;(Plugin)
     * 
     * 
     * @return array
     */
    public function getGUITabConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_GUI_TAB_CONFIGURATION, $payload, 10);

        $payload = unpack('C1change_tab_config/C1clear_gui', $data);

        $ret['change_tab_config'] = $payload['change_tab_config'];
        $ret['clear_gui'] = (bool)$payload['clear_gui'];

        return $ret;
    }

    /**
     * Adds a text-tab with the given index.
     * 
     * You can use up to 10 tabs.
     * 
     * A text-tab with the same index as a icon-tab will overwrite the icon-tab.
     * 
     * .. versionadded:: 2.0.2$nbsp;(Plugin)
     * 
     * @param int $index
     * @param string $text
     * 
     * @return void
     */
    public function setGUITabText($index, $text)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $index);
        for ($i = 0; $i < strlen($text) && $i < 5; $i++) {
            $payload .= pack('c', ord($text[$i]));
        }
        for ($i = strlen($text); $i < 5; $i++) {
            $payload .= pack('c', 0);
        }

        $this->sendRequest(self::FUNCTION_SET_GUI_TAB_TEXT, $payload, 0);
    }

    /**
     * Returns the text for a given index as set by BrickletLCD128x64::setGUITabText().
     * 
     * Additionally the `Active` parameter shows if the tab is currently active/visible
     * or not.
     * 
     * .. versionadded:: 2.0.2$nbsp;(Plugin)
     * 
     * @param int $index
     * 
     * @return array
     */
    public function getGUITabText($index)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('C', $index);

        $data = $this->sendRequest(self::FUNCTION_GET_GUI_TAB_TEXT, $payload, 14);

        $payload = unpack('C1active/c5text', $data);

        $ret['active'] = (bool)$payload['active'];
        $ret['text'] = IPConnection::implodeUnpackedString($payload, 'text', 5);

        return $ret;
    }

    /**
     * Adds a icon-tab with the given index. The icon can have a width of 28 pixels
     * with a height of 6 pixels. It is drawn line-by-line from left to right.
     * 
     * You can use up to 10 tabs.
     * 
     * A icon-tab with the same index as a text-tab will overwrite the text-tab.
     * 
     * .. versionadded:: 2.0.2$nbsp;(Plugin)
     * 
     * @param int $index
     * @param bool[] $icon
     * 
     * @return void
     */
    public function setGUITabIcon($index, $icon)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $index);
        $icon_bits = array_fill(0, 21, 0);
        for ($i = 0; $i < 168; $i++) {
            if((bool)$icon[$i]) {
              $icon_bits[$i / 8] |= 1 << ($i % 8);
            }
        }
        for ($i = 0; $i < 21; $i++) {
          $payload .= pack('C', intval($icon_bits[$i]));
        }

        $this->sendRequest(self::FUNCTION_SET_GUI_TAB_ICON, $payload, 0);
    }

    /**
     * Returns the icon for a given index as set by BrickletLCD128x64::setGUITabIcon().
     * 
     * Additionally the `Active` parameter shows if the tab is currently active/visible
     * or not.
     * 
     * .. versionadded:: 2.0.2$nbsp;(Plugin)
     * 
     * @param int $index
     * 
     * @return array
     */
    public function getGUITabIcon($index)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('C', $index);

        $data = $this->sendRequest(self::FUNCTION_GET_GUI_TAB_ICON, $payload, 30);

        $payload = unpack('C1active/C21icon', $data);

        $ret['active'] = (bool)$payload['active'];
        $ret['icon'] = IPConnection::collectUnpackedBoolArray($payload, 'icon', 168);

        return $ret;
    }

    /**
     * Removes the tab with the given index.
     * 
     * You can use index 255 to remove all tabs.
     * 
     * .. versionadded:: 2.0.2$nbsp;(Plugin)
     * 
     * @param int $index
     * 
     * @return void
     */
    public function removeGUITab($index)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $index);

        $this->sendRequest(self::FUNCTION_REMOVE_GUI_TAB, $payload, 0);
    }

    /**
     * Sets the tab with the given index as selected (drawn as selected on the display).
     * 
     * .. versionadded:: 2.0.2$nbsp;(Plugin)
     * 
     * @param int $index
     * 
     * @return void
     */
    public function setGUITabSelected($index)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $index);

        $this->sendRequest(self::FUNCTION_SET_GUI_TAB_SELECTED, $payload, 0);
    }

    /**
     * The period is the period with which the BrickletLCD128x64::CALLBACK_GUI_TAB_SELECTED callback
     * is triggered periodically. A value of 0 turns the callback off.
     * 
     * If the `value has to change`-parameter is set to true, the callback is only
     * triggered after the value has changed. If the value didn't change within the
     * period, the callback is triggered immediately on change.
     * 
     * If it is set to false, the callback is continuously triggered with the period,
     * independent of the value.
     * 
     * .. versionadded:: 2.0.2$nbsp;(Plugin)
     * 
     * @param int $period
     * @param bool $value_has_to_change
     * 
     * @return void
     */
    public function setGUITabSelectedCallbackConfiguration($period, $value_has_to_change)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);
        $payload .= pack('C', intval((bool)$value_has_to_change));

        $this->sendRequest(self::FUNCTION_SET_GUI_TAB_SELECTED_CALLBACK_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the callback configuration as set by
     * BrickletLCD128x64::setGUITabSelectedCallbackConfiguration().
     * 
     * .. versionadded:: 2.0.2$nbsp;(Plugin)
     * 
     * 
     * @return array
     */
    public function getGUITabSelectedCallbackConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_GUI_TAB_SELECTED_CALLBACK_CONFIGURATION, $payload, 13);

        $payload = unpack('V1period/C1value_has_to_change', $data);

        $ret['period'] = IPConnection::fixUnpackedUInt32($payload, 'period');
        $ret['value_has_to_change'] = (bool)$payload['value_has_to_change'];

        return $ret;
    }

    /**
     * Returns the index of the currently selected tab.
     * If there are not tabs, the returned index is -1.
     * 
     * .. versionadded:: 2.0.2$nbsp;(Plugin)
     * 
     * 
     * @return int
     */
    public function getGUITabSelected()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_GUI_TAB_SELECTED, $payload, 9);

        $payload = unpack('c1index', $data);

        return $payload['index'];
    }

    /**
     * Sets the configuration for up to four graphs.
     * 
     * The graph type can be dot-, line- or bar-graph.
     * 
     * The x and y position are pixel positions.
     * 
     * You can add a text for the x and y axis.
     * The text is drawn at the inside of the graph and it can overwrite some
     * of the graph data. If you need the text outside of the graph you can
     * leave this text here empty and use BrickletLCD128x64::drawText() to draw the caption
     * outside of the graph.
     * 
     * The data of the graph can be set and updated with BrickletLCD128x64::setGUIGraphData().
     * 
     * The graph is drawn in a separate GUI buffer and the graph-frame and data will
     * always stay on top of the graphics drawn with BrickletLCD128x64::writePixels(). To
     * remove the graph use BrickletLCD128x64::removeGUIGraph().
     * 
     * .. versionadded:: 2.0.2$nbsp;(Plugin)
     * 
     * @param int $index
     * @param int $graph_type
     * @param int $position_x
     * @param int $position_y
     * @param int $width
     * @param int $height
     * @param string $text_x
     * @param string $text_y
     * 
     * @return void
     */
    public function setGUIGraphConfiguration($index, $graph_type, $position_x, $position_y, $width, $height, $text_x, $text_y)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $index);
        $payload .= pack('C', $graph_type);
        $payload .= pack('C', $position_x);
        $payload .= pack('C', $position_y);
        $payload .= pack('C', $width);
        $payload .= pack('C', $height);
        for ($i = 0; $i < strlen($text_x) && $i < 4; $i++) {
            $payload .= pack('c', ord($text_x[$i]));
        }
        for ($i = strlen($text_x); $i < 4; $i++) {
            $payload .= pack('c', 0);
        }
        for ($i = 0; $i < strlen($text_y) && $i < 4; $i++) {
            $payload .= pack('c', ord($text_y[$i]));
        }
        for ($i = strlen($text_y); $i < 4; $i++) {
            $payload .= pack('c', 0);
        }

        $this->sendRequest(self::FUNCTION_SET_GUI_GRAPH_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the graph properties for a given `Index` as set by BrickletLCD128x64::setGUIGraphConfiguration().
     * 
     * Additionally the `Active` parameter shows if a graph is currently active/visible
     * or not.
     * 
     * .. versionadded:: 2.0.2$nbsp;(Plugin)
     * 
     * @param int $index
     * 
     * @return array
     */
    public function getGUIGraphConfiguration($index)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('C', $index);

        $data = $this->sendRequest(self::FUNCTION_GET_GUI_GRAPH_CONFIGURATION, $payload, 22);

        $payload = unpack('C1active/C1graph_type/C1position_x/C1position_y/C1width/C1height/c4text_x/c4text_y', $data);

        $ret['active'] = (bool)$payload['active'];
        $ret['graph_type'] = $payload['graph_type'];
        $ret['position_x'] = $payload['position_x'];
        $ret['position_y'] = $payload['position_y'];
        $ret['width'] = $payload['width'];
        $ret['height'] = $payload['height'];
        $ret['text_x'] = IPConnection::implodeUnpackedString($payload, 'text_x', 4);
        $ret['text_y'] = IPConnection::implodeUnpackedString($payload, 'text_y', 4);

        return $ret;
    }

    /**
     * Sets the data for a graph with the given index. You have to configure the graph with
     * BrickletLCD128x64::setGUIGraphConfiguration() before you can set the first data.
     * 
     * The graph will show the first n values of the data that you set, where
     * n is the width set with BrickletLCD128x64::setGUIGraphConfiguration(). If you set
     * less then n values it will show the rest of the values as zero.
     * 
     * The maximum number of data-points you can set is 118 (which also corresponds to the
     * maximum width of the graph).
     * 
     * You have to scale your values to be between 0 and 255. 0 will be shown
     * at the bottom of the graph and 255 at the top.
     * 
     * .. versionadded:: 2.0.2$nbsp;(Plugin)
     * 
     * @param int $index
     * @param int $data_length
     * @param int $data_chunk_offset
     * @param int[] $data_chunk_data
     * 
     * @return void
     */
    public function setGUIGraphDataLowLevel($index, $data_length, $data_chunk_offset, $data_chunk_data)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $index);
        $payload .= pack('v', $data_length);
        $payload .= pack('v', $data_chunk_offset);
        for ($i = 0; $i < 59; $i++) {
            $payload .= pack('C', $data_chunk_data[$i]);
        }

        $this->sendRequest(self::FUNCTION_SET_GUI_GRAPH_DATA_LOW_LEVEL, $payload, 0);
    }

    /**
     * Returns the graph data for a given index as set by BrickletLCD128x64::setGUIGraphData().
     * 
     * .. versionadded:: 2.0.2$nbsp;(Plugin)
     * 
     * @param int $index
     * 
     * @return array
     */
    public function getGUIGraphDataLowLevel($index)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('C', $index);

        $data = $this->sendRequest(self::FUNCTION_GET_GUI_GRAPH_DATA_LOW_LEVEL, $payload, 71);

        $payload = unpack('v1data_length/v1data_chunk_offset/C59data_chunk_data', $data);

        $ret['data_length'] = $payload['data_length'];
        $ret['data_chunk_offset'] = $payload['data_chunk_offset'];
        $ret['data_chunk_data'] = IPConnection::collectUnpackedArray($payload, 'data_chunk_data', 59);

        return $ret;
    }

    /**
     * Removes the graph with the given index.
     * 
     * You can use index 255 to remove all graphs.
     * 
     * .. versionadded:: 2.0.2$nbsp;(Plugin)
     * 
     * @param int $index
     * 
     * @return void
     */
    public function removeGUIGraph($index)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $index);

        $this->sendRequest(self::FUNCTION_REMOVE_GUI_GRAPH, $payload, 0);
    }

    /**
     * Removes all GUI elements (buttons, slider, graphs, tabs).
     * 
     * .. versionadded:: 2.0.2$nbsp;(Plugin)
     * 
     * 
     * @return void
     */
    public function removeAllGUI()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_REMOVE_ALL_GUI, $payload, 0);
    }

    /**
     * Sets the touch LED configuration. By default the LED is on if the
     * LCD is touched.
     * 
     * You can also turn the LED permanently on/off or show a heartbeat.
     * 
     * If the Bricklet is in bootloader mode, the LED is off.
     * 
     * .. versionadded:: 2.0.2$nbsp;(Plugin)
     * 
     * @param int $config
     * 
     * @return void
     */
    public function setTouchLEDConfig($config)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $config);

        $this->sendRequest(self::FUNCTION_SET_TOUCH_LED_CONFIG, $payload, 0);
    }

    /**
     * Returns the configuration as set by BrickletLCD128x64::setTouchLEDConfig()
     * 
     * .. versionadded:: 2.0.2$nbsp;(Plugin)
     * 
     * 
     * @return int
     */
    public function getTouchLEDConfig()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_TOUCH_LED_CONFIG, $payload, 9);

        $payload = unpack('C1config', $data);

        return $payload['config'];
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
     * Returns the current bootloader mode, see BrickletLCD128x64::setBootloaderMode().
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
     * Sets the firmware pointer for BrickletLCD128x64::writeFirmware(). The pointer has
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
     * BrickletLCD128x64::setWriteFirmwarePointer() before. The firmware is written
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
     * Returns the configuration as set by BrickletLCD128x64::setStatusLEDConfig()
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
     * the buffer is transferred to the display only after BrickletLCD128x64::drawBufferedFrame()
     * is called. This can be used to avoid flicker when drawing a complex frame in
     * multiple steps.
     * 
     * Automatic draw can be configured with the BrickletLCD128x64::setDisplayConfiguration()
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
     * (see BrickletLCD128x64::drawBufferedFrame()).
     * 
     * Automatic draw can be configured with the BrickletLCD128x64::setDisplayConfiguration()
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

    /**
     * Sets the data for a graph with the given index. You have to configure the graph with
     * BrickletLCD128x64::setGUIGraphConfiguration() before you can set the first data.
     * 
     * The graph will show the first n values of the data that you set, where
     * n is the width set with BrickletLCD128x64::setGUIGraphConfiguration(). If you set
     * less then n values it will show the rest of the values as zero.
     * 
     * The maximum number of data-points you can set is 118 (which also corresponds to the
     * maximum width of the graph).
     * 
     * You have to scale your values to be between 0 and 255. 0 will be shown
     * at the bottom of the graph and 255 at the top.
     * 
     * .. versionadded:: 2.0.2$nbsp;(Plugin)
     * 
     * @param int $index
     * @param int[] $data
     * 
     * @return void
     */
    public function setGUIGraphData($index, $data)
    {
        if (count($data) > 65535) {
            throw new \InvalidArgumentException('Data can be at most 65535 items long');
        }

        $data_length = count($data);
        $data_chunk_offset = 0;

        if ($data_length === 0) {
            $data_chunk_data = array_fill(0, 59, 0);
            $ret = $this->setGUIGraphDataLowLevel($index, $data_length, $data_chunk_offset, $data_chunk_data);
        } else {
            while ($data_chunk_offset < $data_length) {
                $data_chunk_data = $this->createChunkData($data, $data_chunk_offset, 59, 0);
                $ret = $this->setGUIGraphDataLowLevel($index, $data_length, $data_chunk_offset, $data_chunk_data);
                $data_chunk_offset += 59;
            }
        }

        return $ret;
    }

    /**
     * Returns the graph data for a given index as set by BrickletLCD128x64::setGUIGraphData().
     * 
     * .. versionadded:: 2.0.2$nbsp;(Plugin)
     * 
     * @param int $index
     * 
     * @return array
     */
    public function getGUIGraphData($index)
    {
        $ret = $this->getGUIGraphDataLowLevel($index);
        $data_length = $ret['data_length'];
        $data_out_of_sync = $ret['data_chunk_offset'] != 0;
        $data_data = $ret['data_chunk_data'];

        while (!$data_out_of_sync && count($data_data) < $data_length) {
            $ret = $this->getGUIGraphDataLowLevel($index);
            $data_length = $ret['data_length'];
            $data_out_of_sync = $ret['data_chunk_offset'] != count($data_data);
            $data_data = array_merge($data_data, $ret['data_chunk_data']);
        }

        if ($data_out_of_sync) { // discard remaining stream to bring it back in-sync
            while ($ret['data_chunk_offset'] + 59 < $data_length) {
                $ret = $this->getGUIGraphDataLowLevel($index);
                $data_length = $ret['data_length'];
            }

            throw new StreamOutOfSyncException('Data stream is out-of-sync');
        }

        return array_slice($data_data, 0, $data_length);
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
    public function callbackWrapperTouchPosition($data)
    {
        $payload = unpack('v1pressure/v1x/v1y/V1age', $data);
        $payload['age'] = IPConnection::fixUnpackedUInt32($payload, 'age');

        if (array_key_exists(self::CALLBACK_TOUCH_POSITION, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_TOUCH_POSITION];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_TOUCH_POSITION];

            call_user_func($function, $payload['pressure'], $payload['x'], $payload['y'], $payload['age'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperTouchGesture($data)
    {
        $payload = unpack('C1gesture/V1duration/v1pressure_max/v1x_start/v1y_start/v1x_end/v1y_end/V1age', $data);
        $payload['duration'] = IPConnection::fixUnpackedUInt32($payload, 'duration');
        $payload['age'] = IPConnection::fixUnpackedUInt32($payload, 'age');

        if (array_key_exists(self::CALLBACK_TOUCH_GESTURE, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_TOUCH_GESTURE];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_TOUCH_GESTURE];

            call_user_func($function, $payload['gesture'], $payload['duration'], $payload['pressure_max'], $payload['x_start'], $payload['y_start'], $payload['x_end'], $payload['y_end'], $payload['age'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperGUIButtonPressed($data)
    {
        $payload = unpack('C1index/C1pressed', $data);
        $payload['pressed'] = (bool)$payload['pressed'];

        if (array_key_exists(self::CALLBACK_GUI_BUTTON_PRESSED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_GUI_BUTTON_PRESSED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_GUI_BUTTON_PRESSED];

            call_user_func($function, $payload['index'], $payload['pressed'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperGUISliderValue($data)
    {
        $payload = unpack('C1index/C1value', $data);

        if (array_key_exists(self::CALLBACK_GUI_SLIDER_VALUE, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_GUI_SLIDER_VALUE];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_GUI_SLIDER_VALUE];

            call_user_func($function, $payload['index'], $payload['value'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperGUITabSelected($data)
    {
        $payload = unpack('c1index', $data);

        if (array_key_exists(self::CALLBACK_GUI_TAB_SELECTED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_GUI_TAB_SELECTED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_GUI_TAB_SELECTED];

            call_user_func($function, $payload['index'], $user_data);
        }
    }
}

?>
