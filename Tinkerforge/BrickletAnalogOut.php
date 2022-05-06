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
 * Generates configurable DC voltage between 0V and 5V
 */
class BrickletAnalogOut extends Device
{


    /**
     * @internal
     */
    const FUNCTION_SET_VOLTAGE = 1;

    /**
     * @internal
     */
    const FUNCTION_GET_VOLTAGE = 2;

    /**
     * @internal
     */
    const FUNCTION_SET_MODE = 3;

    /**
     * @internal
     */
    const FUNCTION_GET_MODE = 4;

    /**
     * @internal
     */
    const FUNCTION_GET_IDENTITY = 255;

    const MODE_ANALOG_VALUE = 0;
    const MODE_1K_TO_GROUND = 1;
    const MODE_100K_TO_GROUND = 2;
    const MODE_500K_TO_GROUND = 3;

    const DEVICE_IDENTIFIER = 220;

    const DEVICE_DISPLAY_NAME = 'Analog Out Bricklet';

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

        $this->response_expected[self::FUNCTION_SET_VOLTAGE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_VOLTAGE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_MODE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_MODE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
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
     * Sets the voltage. Calling this function will set
     * the mode to 0 (see BrickletAnalogOut::setMode()).
     * 
     * @param int $voltage
     * 
     * @return void
     */
    public function setVoltage($voltage)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $voltage);

        $this->sendRequest(self::FUNCTION_SET_VOLTAGE, $payload, 0);
    }

    /**
     * Returns the voltage as set by BrickletAnalogOut::setVoltage().
     * 
     * 
     * @return int
     */
    public function getVoltage()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_VOLTAGE, $payload, 10);

        $payload = unpack('v1voltage', $data);

        return $payload['voltage'];
    }

    /**
     * Sets the mode of the analog value. Possible modes:
     * 
     * * 0: Normal Mode (Analog value as set by BrickletAnalogOut::setVoltage() is applied)
     * * 1: 1k Ohm resistor to ground
     * * 2: 100k Ohm resistor to ground
     * * 3: 500k Ohm resistor to ground
     * 
     * Setting the mode to 0 will result in an output voltage of 0 V. You can jump
     * to a higher output voltage directly by calling BrickletAnalogOut::setVoltage().
     * 
     * @param int $mode
     * 
     * @return void
     */
    public function setMode($mode)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $mode);

        $this->sendRequest(self::FUNCTION_SET_MODE, $payload, 0);
    }

    /**
     * Returns the mode as set by BrickletAnalogOut::setMode().
     * 
     * 
     * @return int
     */
    public function getMode()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_MODE, $payload, 9);

        $payload = unpack('C1mode', $data);

        return $payload['mode'];
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
