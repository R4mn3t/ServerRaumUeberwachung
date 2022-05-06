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
 * Generates configurable DC voltage and current, 0V to 10V and 4mA to 20mA
 */
class BrickletIndustrialAnalogOut extends Device
{


    /**
     * @internal
     */
    const FUNCTION_ENABLE = 1;

    /**
     * @internal
     */
    const FUNCTION_DISABLE = 2;

    /**
     * @internal
     */
    const FUNCTION_IS_ENABLED = 3;

    /**
     * @internal
     */
    const FUNCTION_SET_VOLTAGE = 4;

    /**
     * @internal
     */
    const FUNCTION_GET_VOLTAGE = 5;

    /**
     * @internal
     */
    const FUNCTION_SET_CURRENT = 6;

    /**
     * @internal
     */
    const FUNCTION_GET_CURRENT = 7;

    /**
     * @internal
     */
    const FUNCTION_SET_CONFIGURATION = 8;

    /**
     * @internal
     */
    const FUNCTION_GET_CONFIGURATION = 9;

    /**
     * @internal
     */
    const FUNCTION_GET_IDENTITY = 255;

    const VOLTAGE_RANGE_0_TO_5V = 0;
    const VOLTAGE_RANGE_0_TO_10V = 1;
    const CURRENT_RANGE_4_TO_20MA = 0;
    const CURRENT_RANGE_0_TO_20MA = 1;
    const CURRENT_RANGE_0_TO_24MA = 2;

    const DEVICE_IDENTIFIER = 258;

    const DEVICE_DISPLAY_NAME = 'Industrial Analog Out Bricklet';

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

        $this->response_expected[self::FUNCTION_ENABLE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_DISABLE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_IS_ENABLED] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_VOLTAGE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_VOLTAGE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_CURRENT] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_CURRENT] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_CONFIGURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
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
     * Enables the output of voltage and current.
     * 
     * The default is disabled.
     * 
     * 
     * @return void
     */
    public function enable()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_ENABLE, $payload, 0);
    }

    /**
     * Disables the output of voltage and current.
     * 
     * The default is disabled.
     * 
     * 
     * @return void
     */
    public function disable()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_DISABLE, $payload, 0);
    }

    /**
     * Returns *true* if output of voltage and current is enabled, *false* otherwise.
     * 
     * 
     * @return bool
     */
    public function isEnabled()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_IS_ENABLED, $payload, 9);

        $payload = unpack('C1enabled', $data);

        return (bool)$payload['enabled'];
    }

    /**
     * Sets the output voltage.
     * 
     * The output voltage and output current are linked. Changing the output voltage
     * also changes the output current.
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
     * Returns the voltage as set by BrickletIndustrialAnalogOut::setVoltage().
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
     * Sets the output current.
     * 
     * The output current and output voltage are linked. Changing the output current
     * also changes the output voltage.
     * 
     * @param int $current
     * 
     * @return void
     */
    public function setCurrent($current)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $current);

        $this->sendRequest(self::FUNCTION_SET_CURRENT, $payload, 0);
    }

    /**
     * Returns the current as set by BrickletIndustrialAnalogOut::setCurrent().
     * 
     * 
     * @return int
     */
    public function getCurrent()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_CURRENT, $payload, 10);

        $payload = unpack('v1current', $data);

        return $payload['current'];
    }

    /**
     * Configures the voltage and current range.
     * 
     * Possible voltage ranges are:
     * 
     * * 0V to 5V
     * * 0V to 10V
     * 
     * Possible current ranges are:
     * 
     * * 4mA to 20mA
     * * 0mA to 20mA
     * * 0mA to 24mA
     * 
     * The resolution will always be 12 bit. This means, that the
     * precision is higher with a smaller range.
     * 
     * @param int $voltage_range
     * @param int $current_range
     * 
     * @return void
     */
    public function setConfiguration($voltage_range, $current_range)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $voltage_range);
        $payload .= pack('C', $current_range);

        $this->sendRequest(self::FUNCTION_SET_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the configuration as set by BrickletIndustrialAnalogOut::setConfiguration().
     * 
     * 
     * @return array
     */
    public function getConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_CONFIGURATION, $payload, 10);

        $payload = unpack('C1voltage_range/C1current_range', $data);

        $ret['voltage_range'] = $payload['voltage_range'];
        $ret['current_range'] = $payload['current_range'];

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
