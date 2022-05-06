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
 * Measures two DC currents between 0mA and 20mA (IEC 60381-1)
 */
class BrickletIndustrialDual020mAV2 extends Device
{

    /**
     * This callback is triggered periodically according to the configuration set by
     * BrickletIndustrialDual020mAV2::setCurrentCallbackConfiguration().
     * 
     * The parameter is the same as BrickletIndustrialDual020mAV2::getCurrent().
     */
    const CALLBACK_CURRENT = 4;


    /**
     * @internal
     */
    const FUNCTION_GET_CURRENT = 1;

    /**
     * @internal
     */
    const FUNCTION_SET_CURRENT_CALLBACK_CONFIGURATION = 2;

    /**
     * @internal
     */
    const FUNCTION_GET_CURRENT_CALLBACK_CONFIGURATION = 3;

    /**
     * @internal
     */
    const FUNCTION_SET_SAMPLE_RATE = 5;

    /**
     * @internal
     */
    const FUNCTION_GET_SAMPLE_RATE = 6;

    /**
     * @internal
     */
    const FUNCTION_SET_GAIN = 7;

    /**
     * @internal
     */
    const FUNCTION_GET_GAIN = 8;

    /**
     * @internal
     */
    const FUNCTION_SET_CHANNEL_LED_CONFIG = 9;

    /**
     * @internal
     */
    const FUNCTION_GET_CHANNEL_LED_CONFIG = 10;

    /**
     * @internal
     */
    const FUNCTION_SET_CHANNEL_LED_STATUS_CONFIG = 11;

    /**
     * @internal
     */
    const FUNCTION_GET_CHANNEL_LED_STATUS_CONFIG = 12;

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

    const THRESHOLD_OPTION_OFF = 'x';
    const THRESHOLD_OPTION_OUTSIDE = 'o';
    const THRESHOLD_OPTION_INSIDE = 'i';
    const THRESHOLD_OPTION_SMALLER = '<';
    const THRESHOLD_OPTION_GREATER = '>';
    const SAMPLE_RATE_240_SPS = 0;
    const SAMPLE_RATE_60_SPS = 1;
    const SAMPLE_RATE_15_SPS = 2;
    const SAMPLE_RATE_4_SPS = 3;
    const GAIN_1X = 0;
    const GAIN_2X = 1;
    const GAIN_4X = 2;
    const GAIN_8X = 3;
    const CHANNEL_LED_CONFIG_OFF = 0;
    const CHANNEL_LED_CONFIG_ON = 1;
    const CHANNEL_LED_CONFIG_SHOW_HEARTBEAT = 2;
    const CHANNEL_LED_CONFIG_SHOW_CHANNEL_STATUS = 3;
    const CHANNEL_LED_STATUS_CONFIG_THRESHOLD = 0;
    const CHANNEL_LED_STATUS_CONFIG_INTENSITY = 1;
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

    const DEVICE_IDENTIFIER = 2120;

    const DEVICE_DISPLAY_NAME = 'Industrial Dual 0-20mA Bricklet 2.0';

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

        $this->response_expected[self::FUNCTION_GET_CURRENT] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_CURRENT_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_CURRENT_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_SAMPLE_RATE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_SAMPLE_RATE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_GAIN] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_GAIN] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_CHANNEL_LED_CONFIG] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_CHANNEL_LED_CONFIG] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_CHANNEL_LED_STATUS_CONFIG] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_CHANNEL_LED_STATUS_CONFIG] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
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

        $this->callback_wrappers[self::CALLBACK_CURRENT] = array(13, 'callbackWrapperCurrent');

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
     * Returns the current of the specified channel.
     * 
     * It is possible to detect if an IEC 60381-1 compatible sensor is connected
     * and if it works probably.
     * 
     * If the returned current is below 4mA, there is likely no sensor connected
     * or the connected sensor is defective. If the returned current is over 20mA,
     * there might be a short circuit or the sensor is defective.
     * 
     * 
     * If you want to get the value periodically, it is recommended to use the
     * BrickletIndustrialDual020mAV2::CALLBACK_CURRENT callback. You can set the callback configuration
     * with BrickletIndustrialDual020mAV2::setCurrentCallbackConfiguration().
     * 
     * @param int $channel
     * 
     * @return int
     */
    public function getCurrent($channel)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $channel);

        $data = $this->sendRequest(self::FUNCTION_GET_CURRENT, $payload, 12);

        $payload = unpack('V1current', $data);

        return IPConnection::fixUnpackedInt32($payload, 'current');
    }

    /**
     * The period is the period with which the BrickletIndustrialDual020mAV2::CALLBACK_CURRENT callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * If the `value has to change`-parameter is set to true, the callback is only
     * triggered after the value has changed. If the value didn't change
     * within the period, the callback is triggered immediately on change.
     * 
     * If it is set to false, the callback is continuously triggered with the period,
     * independent of the value.
     * 
     * It is furthermore possible to constrain the callback with thresholds.
     * 
     * The `option`-parameter together with min/max sets a threshold for the BrickletIndustrialDual020mAV2::CALLBACK_CURRENT callback.
     * 
     * The following options are possible:
     * 
     * <code>
     *  "Option", "Description"
     * 
     *  "'x'",    "Threshold is turned off"
     *  "'o'",    "Threshold is triggered when the value is *outside* the min and max values"
     *  "'i'",    "Threshold is triggered when the value is *inside* or equal to the min and max values"
     *  "'<'",    "Threshold is triggered when the value is smaller than the min value (max is ignored)"
     *  "'>'",    "Threshold is triggered when the value is greater than the min value (max is ignored)"
     * </code>
     * 
     * If the option is set to 'x' (threshold turned off) the callback is triggered with the fixed period.
     * 
     * @param int $channel
     * @param int $period
     * @param bool $value_has_to_change
     * @param string $option
     * @param int $min
     * @param int $max
     * 
     * @return void
     */
    public function setCurrentCallbackConfiguration($channel, $period, $value_has_to_change, $option, $min, $max)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $channel);
        $payload .= pack('V', $period);
        $payload .= pack('C', intval((bool)$value_has_to_change));
        $payload .= pack('c', ord($option));
        $payload .= pack('V', $min);
        $payload .= pack('V', $max);

        $this->sendRequest(self::FUNCTION_SET_CURRENT_CALLBACK_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the callback configuration as set by BrickletIndustrialDual020mAV2::setCurrentCallbackConfiguration().
     * 
     * @param int $channel
     * 
     * @return array
     */
    public function getCurrentCallbackConfiguration($channel)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('C', $channel);

        $data = $this->sendRequest(self::FUNCTION_GET_CURRENT_CALLBACK_CONFIGURATION, $payload, 22);

        $payload = unpack('V1period/C1value_has_to_change/c1option/V1min/V1max', $data);

        $ret['period'] = IPConnection::fixUnpackedUInt32($payload, 'period');
        $ret['value_has_to_change'] = (bool)$payload['value_has_to_change'];
        $ret['option'] = chr($payload['option']);
        $ret['min'] = IPConnection::fixUnpackedInt32($payload, 'min');
        $ret['max'] = IPConnection::fixUnpackedInt32($payload, 'max');

        return $ret;
    }

    /**
     * Sets the sample rate to either 240, 60, 15 or 4 samples per second.
     * The resolution for the rates is 12, 14, 16 and 18 bit respectively.
     * 
     * <code>
     *  "Value", "Description"
     * 
     *  "0",    "240 samples per second, 12 bit resolution"
     *  "1",    "60 samples per second, 14 bit resolution"
     *  "2",    "15 samples per second, 16 bit resolution"
     *  "3",    "4 samples per second, 18 bit resolution"
     * </code>
     * 
     * @param int $rate
     * 
     * @return void
     */
    public function setSampleRate($rate)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $rate);

        $this->sendRequest(self::FUNCTION_SET_SAMPLE_RATE, $payload, 0);
    }

    /**
     * Returns the sample rate as set by BrickletIndustrialDual020mAV2::setSampleRate().
     * 
     * 
     * @return int
     */
    public function getSampleRate()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_SAMPLE_RATE, $payload, 9);

        $payload = unpack('C1rate', $data);

        return $payload['rate'];
    }

    /**
     * Sets a gain between 1x and 8x. If you want to measure a very small current,
     * you can increase the gain to get some more resolution.
     * 
     * Example: If you measure 0.5mA with a gain of 8x the return value will be
     * 4mA.
     * 
     * @param int $gain
     * 
     * @return void
     */
    public function setGain($gain)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $gain);

        $this->sendRequest(self::FUNCTION_SET_GAIN, $payload, 0);
    }

    /**
     * Returns the gain as set by BrickletIndustrialDual020mAV2::setGain().
     * 
     * 
     * @return int
     */
    public function getGain()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_GAIN, $payload, 9);

        $payload = unpack('C1gain', $data);

        return $payload['gain'];
    }

    /**
     * Each channel has a corresponding LED. You can turn the LED off, on or show a
     * heartbeat. You can also set the LED to "Channel Status". In this mode the
     * LED can either be turned on with a pre-defined threshold or the intensity
     * of the LED can change with the measured value.
     * 
     * You can configure the channel status behavior with BrickletIndustrialDual020mAV2::setChannelLEDStatusConfig().
     * 
     * @param int $channel
     * @param int $config
     * 
     * @return void
     */
    public function setChannelLEDConfig($channel, $config)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $channel);
        $payload .= pack('C', $config);

        $this->sendRequest(self::FUNCTION_SET_CHANNEL_LED_CONFIG, $payload, 0);
    }

    /**
     * Returns the channel LED configuration as set by BrickletIndustrialDual020mAV2::setChannelLEDConfig()
     * 
     * @param int $channel
     * 
     * @return int
     */
    public function getChannelLEDConfig($channel)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $channel);

        $data = $this->sendRequest(self::FUNCTION_GET_CHANNEL_LED_CONFIG, $payload, 9);

        $payload = unpack('C1config', $data);

        return $payload['config'];
    }

    /**
     * Sets the channel LED status config. This config is used if the channel LED is
     * configured as "Channel Status", see BrickletIndustrialDual020mAV2::setChannelLEDConfig().
     * 
     * For each channel you can choose between threshold and intensity mode.
     * 
     * In threshold mode you can define a positive or a negative threshold.
     * For a positive threshold set the "min" parameter to the threshold value in nA
     * above which the LED should turn on and set the "max" parameter to 0. Example:
     * If you set a positive threshold of 10mA, the LED will turn on as soon as the
     * current exceeds 10mA and turn off again if it goes below 10mA.
     * For a negative threshold set the "max" parameter to the threshold value in nA
     * below which the LED should turn on and set the "min" parameter to 0. Example:
     * If you set a negative threshold of 10mA, the LED will turn on as soon as the
     * current goes below 10mA and the LED will turn off when the current exceeds 10mA.
     * 
     * In intensity mode you can define a range in nA that is used to scale the brightness
     * of the LED. Example with min=4mA and max=20mA: The LED is off at 4mA and below,
     * on at 20mA and above and the brightness is linearly scaled between the values
     * 4mA and 20mA. If the min value is greater than the max value, the LED brightness
     * is scaled the other way around.
     * 
     * @param int $channel
     * @param int $min
     * @param int $max
     * @param int $config
     * 
     * @return void
     */
    public function setChannelLEDStatusConfig($channel, $min, $max, $config)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $channel);
        $payload .= pack('V', $min);
        $payload .= pack('V', $max);
        $payload .= pack('C', $config);

        $this->sendRequest(self::FUNCTION_SET_CHANNEL_LED_STATUS_CONFIG, $payload, 0);
    }

    /**
     * Returns the channel LED status configuration as set by
     * BrickletIndustrialDual020mAV2::setChannelLEDStatusConfig().
     * 
     * @param int $channel
     * 
     * @return array
     */
    public function getChannelLEDStatusConfig($channel)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('C', $channel);

        $data = $this->sendRequest(self::FUNCTION_GET_CHANNEL_LED_STATUS_CONFIG, $payload, 17);

        $payload = unpack('V1min/V1max/C1config', $data);

        $ret['min'] = IPConnection::fixUnpackedInt32($payload, 'min');
        $ret['max'] = IPConnection::fixUnpackedInt32($payload, 'max');
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
     * Returns the current bootloader mode, see BrickletIndustrialDual020mAV2::setBootloaderMode().
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
     * Sets the firmware pointer for BrickletIndustrialDual020mAV2::writeFirmware(). The pointer has
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
     * BrickletIndustrialDual020mAV2::setWriteFirmwarePointer() before. The firmware is written
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
     * Returns the configuration as set by BrickletIndustrialDual020mAV2::setStatusLEDConfig()
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
    public function callbackWrapperCurrent($data)
    {
        $payload = unpack('C1channel/V1current', $data);
        $payload['current'] = IPConnection::fixUnpackedInt32($payload, 'current');

        if (array_key_exists(self::CALLBACK_CURRENT, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_CURRENT];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_CURRENT];

            call_user_func($function, $payload['channel'], $payload['current'], $user_data);
        }
    }
}

?>
