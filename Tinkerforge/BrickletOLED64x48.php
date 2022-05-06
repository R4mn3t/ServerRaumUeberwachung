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
 * 1.68cm (0.66") OLED display with 64x48 pixels
 */
class BrickletOLED64x48 extends Device
{


    /**
     * @internal
     */
    const FUNCTION_WRITE = 1;

    /**
     * @internal
     */
    const FUNCTION_NEW_WINDOW = 2;

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
    const FUNCTION_GET_IDENTITY = 255;


    const DEVICE_IDENTIFIER = 264;

    const DEVICE_DISPLAY_NAME = 'OLED 64x48 Bricklet';

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

        $this->response_expected[self::FUNCTION_WRITE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_NEW_WINDOW] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_CLEAR_DISPLAY] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_SET_DISPLAY_CONFIGURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_DISPLAY_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_WRITE_LINE] = self::RESPONSE_EXPECTED_FALSE;
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
     * Appends 64 byte of data to the window as set by BrickletOLED64x48::newWindow().
     * 
     * Each row has a height of 8 pixels which corresponds to one byte of data.
     * 
     * Example: if you call BrickletOLED64x48::newWindow() with column from 0 to 63 and row
     * from 0 to 5 (the whole display) each call of BrickletOLED64x48::write() (red arrow) will
     * write one row.
     * 
     * .. image:: /Images/Bricklets/bricklet_oled_64x48_display.png
     *    :scale: 100 %
     *    :alt: Display pixel order
     *    :align: center
     *    :target: ../../_images/Bricklets/bricklet_oled_64x48_display.png
     * 
     * The LSB (D0) of each data byte is at the top and the MSB (D7) is at the
     * bottom of the row.
     * 
     * The next call of BrickletOLED64x48::write() will write the second row and so on. To
     * fill the whole display you need to call BrickletOLED64x48::write() 6 times.
     * 
     * @param int[] $data
     * 
     * @return void
     */
    public function write($data)
    {
        $this->checkValidity();

        $payload = '';
        for ($i = 0; $i < 64; $i++) {
            $payload .= pack('C', $data[$i]);
        }

        $this->sendRequest(self::FUNCTION_WRITE, $payload, 0);
    }

    /**
     * Sets the window in which you can write with BrickletOLED64x48::write(). One row
     * has a height of 8 pixels.
     * 
     * @param int $column_from
     * @param int $column_to
     * @param int $row_from
     * @param int $row_to
     * 
     * @return void
     */
    public function newWindow($column_from, $column_to, $row_from, $row_to)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $column_from);
        $payload .= pack('C', $column_to);
        $payload .= pack('C', $row_from);
        $payload .= pack('C', $row_to);

        $this->sendRequest(self::FUNCTION_NEW_WINDOW, $payload, 0);
    }

    /**
     * Clears the current content of the window as set by BrickletOLED64x48::newWindow().
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
     * (black/white) of the display.
     * 
     * @param int $contrast
     * @param bool $invert
     * 
     * @return void
     */
    public function setDisplayConfiguration($contrast, $invert)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $contrast);
        $payload .= pack('C', intval((bool)$invert));

        $this->sendRequest(self::FUNCTION_SET_DISPLAY_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the configuration as set by BrickletOLED64x48::setDisplayConfiguration().
     * 
     * 
     * @return array
     */
    public function getDisplayConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_DISPLAY_CONFIGURATION, $payload, 10);

        $payload = unpack('C1contrast/C1invert', $data);

        $ret['contrast'] = $payload['contrast'];
        $ret['invert'] = (bool)$payload['invert'];

        return $ret;
    }

    /**
     * Writes text to a specific line with a specific position.
     * The text can have a maximum of 13 characters.
     * 
     * For example: (1, 4, "Hello") will write *Hello* in the middle of the
     * second line of the display.
     * 
     * You can draw to the display with BrickletOLED64x48::write() and then add text to it
     * afterwards.
     * 
     * The display uses a special 5x7 pixel charset. You can view the characters
     * of the charset in Brick Viewer.
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
        for ($i = 0; $i < strlen($text) && $i < 13; $i++) {
            $payload .= pack('c', ord($text[$i]));
        }
        for ($i = strlen($text); $i < 13; $i++) {
            $payload .= pack('c', 0);
        }

        $this->sendRequest(self::FUNCTION_WRITE_LINE, $payload, 0);
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
}

?>
