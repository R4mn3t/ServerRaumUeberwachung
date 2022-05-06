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
class BrickletIndustrialAnalogOutV2 extends Device
{


    /**
     * @internal
     */
    const FUNCTION_SET_ENABLED = 1;

    /**
     * @internal
     */
    const FUNCTION_GET_ENABLED = 2;

    /**
     * @internal
     */
    const FUNCTION_SET_VOLTAGE = 3;

    /**
     * @internal
     */
    const FUNCTION_GET_VOLTAGE = 4;

    /**
     * @internal
     */
    const FUNCTION_SET_CURRENT = 5;

    /**
     * @internal
     */
    const FUNCTION_GET_CURRENT = 6;

    /**
     * @internal
     */
    const FUNCTION_SET_CONFIGURATION = 7;

    /**
     * @internal
     */
    const FUNCTION_GET_CONFIGURATION = 8;

    /**
     * @internal
     */
    const FUNCTION_SET_OUT_LED_CONFIG = 9;

    /**
     * @internal
     */
    const FUNCTION_GET_OUT_LED_CONFIG = 10;

    /**
     * @internal
     */
    const FUNCTION_SET_OUT_LED_STATUS_CONFIG = 11;

    /**
     * @internal
     */
    const FUNCTION_GET_OUT_LED_STATUS_CONFIG = 12;

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

    const VOLTAGE_RANGE_0_TO_5V = 0;
    const VOLTAGE_RANGE_0_TO_10V = 1;
    const CURRENT_RANGE_4_TO_20MA = 0;
    const CURRENT_RANGE_0_TO_20MA = 1;
    const CURRENT_RANGE_0_TO_24MA = 2;
    const OUT_LED_CONFIG_OFF = 0;
    const OUT_LED_CONFIG_ON = 1;
    const OUT_LED_CONFIG_SHOW_HEARTBEAT = 2;
    const OUT_LED_CONFIG_SHOW_OUT_STATUS = 3;
    const OUT_LED_STATUS_CONFIG_THRESHOLD = 0;
    const OUT_LED_STATUS_CONFIG_INTENSITY = 1;
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

    const DEVICE_IDENTIFIER = 2116;

    const DEVICE_DISPLAY_NAME = 'Industrial Analog Out Bricklet 2.0';

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

        $this->response_expected[self::FUNCTION_SET_ENABLED] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_ENABLED] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_VOLTAGE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_VOLTAGE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_CURRENT] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_CURRENT] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_CONFIGURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_OUT_LED_CONFIG] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_OUT_LED_CONFIG] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_OUT_LED_STATUS_CONFIG] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_OUT_LED_STATUS_CONFIG] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
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
     * Enables/disables the output of voltage and current.
     * 
     * @param bool $enabled
     * 
     * @return void
     */
    public function setEnabled($enabled)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', intval((bool)$enabled));

        $this->sendRequest(self::FUNCTION_SET_ENABLED, $payload, 0);
    }

    /**
     * Returns *true* if output of voltage and current is enabled, *false* otherwise.
     * 
     * 
     * @return bool
     */
    public function getEnabled()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ENABLED, $payload, 9);

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
     * Returns the voltage as set by BrickletIndustrialAnalogOutV2::setVoltage().
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
     * Returns the current as set by BrickletIndustrialAnalogOutV2::setCurrent().
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
     * Returns the configuration as set by BrickletIndustrialAnalogOutV2::setConfiguration().
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
     * You can turn the Out LED off, on or show a
     * heartbeat. You can also set the LED to "Out Status". In this mode the
     * LED can either be turned on with a pre-defined threshold or the intensity
     * of the LED can change with the output value (voltage or current).
     * 
     * You can configure the channel status behavior with BrickletIndustrialAnalogOutV2::setOutLEDStatusConfig().
     * 
     * @param int $config
     * 
     * @return void
     */
    public function setOutLEDConfig($config)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $config);

        $this->sendRequest(self::FUNCTION_SET_OUT_LED_CONFIG, $payload, 0);
    }

    /**
     * Returns the Out LED configuration as set by BrickletIndustrialAnalogOutV2::setOutLEDConfig()
     * 
     * 
     * @return int
     */
    public function getOutLEDConfig()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_OUT_LED_CONFIG, $payload, 9);

        $payload = unpack('C1config', $data);

        return $payload['config'];
    }

    /**
     * Sets the Out LED status config. This config is used if the Out LED is
     * configured as "Out Status", see BrickletIndustrialAnalogOutV2::setOutLEDConfig().
     * 
     * For each channel you can choose between threshold and intensity mode.
     * 
     * In threshold mode you can define a positive or a negative threshold.
     * For a positive threshold set the "min" parameter to the threshold value in mV or
     * µA above which the LED should turn on and set the "max" parameter to 0. Example:
     * If you set a positive threshold of 5V, the LED will turn on as soon as the
     * output value exceeds 5V and turn off again if it goes below 5V.
     * For a negative threshold set the "max" parameter to the threshold value in mV or
     * µA below which the LED should turn on and set the "min" parameter to 0. Example:
     * If you set a negative threshold of 5V, the LED will turn on as soon as the
     * output value goes below 5V and the LED will turn off when the output value
     * exceeds 5V.
     * 
     * In intensity mode you can define a range mV or µA that is used to scale the brightness
     * of the LED. Example with min=2V, max=8V: The LED is off at 2V and below, on at
     * 8V and above and the brightness is linearly scaled between the values 2V and 8V.
     * If the min value is greater than the max value, the LED brightness is scaled the
     * other way around.
     * 
     * @param int $min
     * @param int $max
     * @param int $config
     * 
     * @return void
     */
    public function setOutLEDStatusConfig($min, $max, $config)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $min);
        $payload .= pack('v', $max);
        $payload .= pack('C', $config);

        $this->sendRequest(self::FUNCTION_SET_OUT_LED_STATUS_CONFIG, $payload, 0);
    }

    /**
     * Returns the Out LED status configuration as set by BrickletIndustrialAnalogOutV2::setOutLEDStatusConfig().
     * 
     * 
     * @return array
     */
    public function getOutLEDStatusConfig()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_OUT_LED_STATUS_CONFIG, $payload, 13);

        $payload = unpack('v1min/v1max/C1config', $data);

        $ret['min'] = $payload['min'];
        $ret['max'] = $payload['max'];
        $ret['config'] = $payload['config'];

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
     * Returns the current bootloader mode, see BrickletIndustrialAnalogOutV2::setBootloaderMode().
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
     * Sets the firmware pointer for BrickletIndustrialAnalogOutV2::writeFirmware(). The pointer has
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
     * BrickletIndustrialAnalogOutV2::setWriteFirmwarePointer() before. The firmware is written
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
     * Returns the configuration as set by BrickletIndustrialAnalogOutV2::setStatusLEDConfig()
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
}

?>
