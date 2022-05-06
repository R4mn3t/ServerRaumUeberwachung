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
 * Controls one RGB LED
 */
class BrickletRGBLED extends Device
{


    /**
     * @internal
     */
    const FUNCTION_SET_RGB_VALUE = 1;

    /**
     * @internal
     */
    const FUNCTION_GET_RGB_VALUE = 2;

    /**
     * @internal
     */
    const FUNCTION_GET_IDENTITY = 255;


    const DEVICE_IDENTIFIER = 271;

    const DEVICE_DISPLAY_NAME = 'RGB LED Bricklet';

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

        $this->response_expected[self::FUNCTION_SET_RGB_VALUE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_RGB_VALUE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
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
     * Sets the *r*, *g* and *b* values for the LED.
     * 
     * @param int $r
     * @param int $g
     * @param int $b
     * 
     * @return void
     */
    public function setRGBValue($r, $g, $b)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $r);
        $payload .= pack('C', $g);
        $payload .= pack('C', $b);

        $this->sendRequest(self::FUNCTION_SET_RGB_VALUE, $payload, 0);
    }

    /**
     * Returns the *r*, *g* and *b* values of the LED as set by BrickletRGBLED::setRGBValue().
     * 
     * 
     * @return array
     */
    public function getRGBValue()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_RGB_VALUE, $payload, 11);

        $payload = unpack('C1r/C1g/C1b', $data);

        $ret['r'] = $payload['r'];
        $ret['g'] = $payload['g'];
        $ret['b'] = $payload['b'];

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
}

?>
