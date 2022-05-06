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
 * HAT for Raspberry Pi with 8 Bricklets ports and real-time clock
 */
class BrickHAT extends Device
{

    /**
     * This callback is triggered periodically according to the configuration set by
     * BrickHAT::setVoltagesCallbackConfiguration().
     * 
     * The parameters are the same as BrickHAT::getVoltages().
     * 
     * .. versionadded:: 2.0.1$nbsp;(Firmware)
     */
    const CALLBACK_VOLTAGES = 8;


    /**
     * @internal
     */
    const FUNCTION_SET_SLEEP_MODE = 1;

    /**
     * @internal
     */
    const FUNCTION_GET_SLEEP_MODE = 2;

    /**
     * @internal
     */
    const FUNCTION_SET_BRICKLET_POWER = 3;

    /**
     * @internal
     */
    const FUNCTION_GET_BRICKLET_POWER = 4;

    /**
     * @internal
     */
    const FUNCTION_GET_VOLTAGES = 5;

    /**
     * @internal
     */
    const FUNCTION_SET_VOLTAGES_CALLBACK_CONFIGURATION = 6;

    /**
     * @internal
     */
    const FUNCTION_GET_VOLTAGES_CALLBACK_CONFIGURATION = 7;

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

    const DEVICE_IDENTIFIER = 111;

    const DEVICE_DISPLAY_NAME = 'HAT Brick';

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

        $this->response_expected[self::FUNCTION_SET_SLEEP_MODE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_SLEEP_MODE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_BRICKLET_POWER] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_BRICKLET_POWER] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_VOLTAGES] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_VOLTAGES_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_VOLTAGES_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
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

        $this->callback_wrappers[self::CALLBACK_VOLTAGES] = array(12, 'callbackWrapperVoltages');

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
     * Sets the sleep mode.
     * 
     * <note>
     *  Calling this function will cut the Raspberry Pi's power after Power Off Delay seconds.
     *  You have to shut down the operating system yourself, e.g. by calling 'sudo shutdown -h now'.
     * </note>
     * 
     * Parameters:
     * 
     * * Power Off Delay: Time before the RPi/Bricklets are powered off.
     * * Power Off Duration: Duration that the RPi/Bricklets stay powered off.
     * * Raspberry Pi Off: RPi is powered off if set to true.
     * * Bricklets Off: Bricklets are powered off if set to true.
     * * Enable Sleep Indicator: If set to true, the status LED will blink in a 1s interval
     *   during the whole power off duration. This will draw additional 0.3mA.
     * 
     * Example: To turn RPi and Bricklets off in 5 seconds for 10 minutes with sleep
     * indicator enabled, call (5, 60*10, true, true, true).
     * 
     * This function can also be used to implement a watchdog. To do this you can
     * write a program that calls this function once per second in a loop with
     * (10, 2, true, false, false). If the RPi crashes or gets stuck
     * the HAT will reset the RPi after 10 seconds.
     * 
     * @param int $power_off_delay
     * @param int $power_off_duration
     * @param bool $raspberry_pi_off
     * @param bool $bricklets_off
     * @param bool $enable_sleep_indicator
     * 
     * @return void
     */
    public function setSleepMode($power_off_delay, $power_off_duration, $raspberry_pi_off, $bricklets_off, $enable_sleep_indicator)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $power_off_delay);
        $payload .= pack('V', $power_off_duration);
        $payload .= pack('C', intval((bool)$raspberry_pi_off));
        $payload .= pack('C', intval((bool)$bricklets_off));
        $payload .= pack('C', intval((bool)$enable_sleep_indicator));

        $this->sendRequest(self::FUNCTION_SET_SLEEP_MODE, $payload, 0);
    }

    /**
     * Returns the sleep mode settings as set by BrickHAT::setSleepMode().
     * 
     * 
     * @return array
     */
    public function getSleepMode()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_SLEEP_MODE, $payload, 19);

        $payload = unpack('V1power_off_delay/V1power_off_duration/C1raspberry_pi_off/C1bricklets_off/C1enable_sleep_indicator', $data);

        $ret['power_off_delay'] = IPConnection::fixUnpackedUInt32($payload, 'power_off_delay');
        $ret['power_off_duration'] = IPConnection::fixUnpackedUInt32($payload, 'power_off_duration');
        $ret['raspberry_pi_off'] = (bool)$payload['raspberry_pi_off'];
        $ret['bricklets_off'] = (bool)$payload['bricklets_off'];
        $ret['enable_sleep_indicator'] = (bool)$payload['enable_sleep_indicator'];

        return $ret;
    }

    /**
     * Set to true/false to turn the power supply of the connected Bricklets on/off.
     * 
     * @param bool $bricklet_power
     * 
     * @return void
     */
    public function setBrickletPower($bricklet_power)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', intval((bool)$bricklet_power));

        $this->sendRequest(self::FUNCTION_SET_BRICKLET_POWER, $payload, 0);
    }

    /**
     * Returns the power status of the connected Bricklets as set by BrickHAT::setBrickletPower().
     * 
     * 
     * @return bool
     */
    public function getBrickletPower()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_BRICKLET_POWER, $payload, 9);

        $payload = unpack('C1bricklet_power', $data);

        return (bool)$payload['bricklet_power'];
    }

    /**
     * Returns the USB supply voltage and the DC input supply voltage.
     * 
     * There are three possible combinations:
     * 
     * * Only USB connected: The USB supply voltage will be fed back to the
     *   DC input connector. You will read the USB voltage and a slightly lower
     *   voltage on the DC input.
     * * Only DC input connected: The DC voltage will not be fed back to the
     *   USB connector. You will read the DC input voltage and the USB voltage
     *   will be 0.
     * * USB and DC input connected: You will read both voltages. In this case
     *   the USB supply will be without load, but it will work as backup if you
     *   disconnect the DC input (or if the DC input voltage falls below the
     *   USB voltage).
     * 
     * 
     * @return array
     */
    public function getVoltages()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_VOLTAGES, $payload, 12);

        $payload = unpack('v1voltage_usb/v1voltage_dc', $data);

        $ret['voltage_usb'] = $payload['voltage_usb'];
        $ret['voltage_dc'] = $payload['voltage_dc'];

        return $ret;
    }

    /**
     * The period is the period with which the BrickHAT::CALLBACK_VOLTAGES
     * callback is triggered periodically. A value of 0 turns the callback off.
     * 
     * If the `value has to change`-parameter is set to true, the callback is only
     * triggered after the value has changed. If the value didn't change within the
     * period, the callback is triggered immediately on change.
     * 
     * If it is set to false, the callback is continuously triggered with the period,
     * independent of the value.
     * 
     * .. versionadded:: 2.0.1$nbsp;(Firmware)
     * 
     * @param int $period
     * @param bool $value_has_to_change
     * 
     * @return void
     */
    public function setVoltagesCallbackConfiguration($period, $value_has_to_change)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);
        $payload .= pack('C', intval((bool)$value_has_to_change));

        $this->sendRequest(self::FUNCTION_SET_VOLTAGES_CALLBACK_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the callback configuration as set by
     * BrickHAT::setVoltagesCallbackConfiguration().
     * 
     * .. versionadded:: 2.0.1$nbsp;(Firmware)
     * 
     * 
     * @return array
     */
    public function getVoltagesCallbackConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_VOLTAGES_CALLBACK_CONFIGURATION, $payload, 13);

        $payload = unpack('V1period/C1value_has_to_change', $data);

        $ret['period'] = IPConnection::fixUnpackedUInt32($payload, 'period');
        $ret['value_has_to_change'] = (bool)$payload['value_has_to_change'];

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
     * Returns the current bootloader mode, see BrickHAT::setBootloaderMode().
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
     * Sets the firmware pointer for BrickHAT::writeFirmware(). The pointer has
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
     * BrickHAT::setWriteFirmwarePointer() before. The firmware is written
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
     * Returns the configuration as set by BrickHAT::setStatusLEDConfig()
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
     * Returns the UID, the UID where the HAT is connected to
     * (typically '0' as the HAT is the root device in the topology),
     * the position, the hardware and firmware version as well as the
     * device identifier.
     * 
     * The HAT (Zero) Brick is always at position 'i'.
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
    public function callbackWrapperVoltages($data)
    {
        $payload = unpack('v1voltage_usb/v1voltage_dc', $data);

        if (array_key_exists(self::CALLBACK_VOLTAGES, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_VOLTAGES];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_VOLTAGES];

            call_user_func($function, $payload['voltage_usb'], $payload['voltage_dc'], $user_data);
        }
    }
}

?>
