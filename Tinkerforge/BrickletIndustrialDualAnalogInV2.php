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
 * Measures two DC voltages between -35V and +35V with 24bit resolution each
 */
class BrickletIndustrialDualAnalogInV2 extends Device
{

    /**
     * This callback is triggered periodically according to the configuration set by
     * BrickletIndustrialDualAnalogInV2::setVoltageCallbackConfiguration().
     * 
     * The parameter is the same as BrickletIndustrialDualAnalogInV2::getVoltage().
     */
    const CALLBACK_VOLTAGE = 4;

    /**
     * This callback is triggered periodically according to the configuration set by
     * BrickletIndustrialDualAnalogInV2::setAllVoltagesCallbackConfiguration().
     * 
     * The parameters are the same as BrickletIndustrialDualAnalogInV2::getAllVoltages().
     * 
     * .. versionadded:: 2.0.6$nbsp;(Plugin)
     */
    const CALLBACK_ALL_VOLTAGES = 17;


    /**
     * @internal
     */
    const FUNCTION_GET_VOLTAGE = 1;

    /**
     * @internal
     */
    const FUNCTION_SET_VOLTAGE_CALLBACK_CONFIGURATION = 2;

    /**
     * @internal
     */
    const FUNCTION_GET_VOLTAGE_CALLBACK_CONFIGURATION = 3;

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
    const FUNCTION_SET_CALIBRATION = 7;

    /**
     * @internal
     */
    const FUNCTION_GET_CALIBRATION = 8;

    /**
     * @internal
     */
    const FUNCTION_GET_ADC_VALUES = 9;

    /**
     * @internal
     */
    const FUNCTION_SET_CHANNEL_LED_CONFIG = 10;

    /**
     * @internal
     */
    const FUNCTION_GET_CHANNEL_LED_CONFIG = 11;

    /**
     * @internal
     */
    const FUNCTION_SET_CHANNEL_LED_STATUS_CONFIG = 12;

    /**
     * @internal
     */
    const FUNCTION_GET_CHANNEL_LED_STATUS_CONFIG = 13;

    /**
     * @internal
     */
    const FUNCTION_GET_ALL_VOLTAGES = 14;

    /**
     * @internal
     */
    const FUNCTION_SET_ALL_VOLTAGES_CALLBACK_CONFIGURATION = 15;

    /**
     * @internal
     */
    const FUNCTION_GET_ALL_VOLTAGES_CALLBACK_CONFIGURATION = 16;

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
    const SAMPLE_RATE_976_SPS = 0;
    const SAMPLE_RATE_488_SPS = 1;
    const SAMPLE_RATE_244_SPS = 2;
    const SAMPLE_RATE_122_SPS = 3;
    const SAMPLE_RATE_61_SPS = 4;
    const SAMPLE_RATE_4_SPS = 5;
    const SAMPLE_RATE_2_SPS = 6;
    const SAMPLE_RATE_1_SPS = 7;
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

    const DEVICE_IDENTIFIER = 2121;

    const DEVICE_DISPLAY_NAME = 'Industrial Dual Analog In Bricklet 2.0';

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

        $this->response_expected[self::FUNCTION_GET_VOLTAGE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_VOLTAGE_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_VOLTAGE_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_SAMPLE_RATE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_SAMPLE_RATE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_CALIBRATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_CALIBRATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_ADC_VALUES] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_CHANNEL_LED_CONFIG] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_CHANNEL_LED_CONFIG] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_CHANNEL_LED_STATUS_CONFIG] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_CHANNEL_LED_STATUS_CONFIG] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_ALL_VOLTAGES] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ALL_VOLTAGES_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_ALL_VOLTAGES_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
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

        $this->callback_wrappers[self::CALLBACK_VOLTAGE] = array(13, 'callbackWrapperVoltage');
        $this->callback_wrappers[self::CALLBACK_ALL_VOLTAGES] = array(16, 'callbackWrapperAllVoltages');

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
     * Returns the voltage for the given channel.
     * 
     * 
     * If you want to get the value periodically, it is recommended to use the
     * BrickletIndustrialDualAnalogInV2::CALLBACK_VOLTAGE callback. You can set the callback configuration
     * with BrickletIndustrialDualAnalogInV2::setVoltageCallbackConfiguration().
     * 
     * @param int $channel
     * 
     * @return int
     */
    public function getVoltage($channel)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $channel);

        $data = $this->sendRequest(self::FUNCTION_GET_VOLTAGE, $payload, 12);

        $payload = unpack('V1voltage', $data);

        return IPConnection::fixUnpackedInt32($payload, 'voltage');
    }

    /**
     * The period is the period with which the BrickletIndustrialDualAnalogInV2::CALLBACK_VOLTAGE callback is triggered
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
     * The `option`-parameter together with min/max sets a threshold for the BrickletIndustrialDualAnalogInV2::CALLBACK_VOLTAGE callback.
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
    public function setVoltageCallbackConfiguration($channel, $period, $value_has_to_change, $option, $min, $max)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $channel);
        $payload .= pack('V', $period);
        $payload .= pack('C', intval((bool)$value_has_to_change));
        $payload .= pack('c', ord($option));
        $payload .= pack('V', $min);
        $payload .= pack('V', $max);

        $this->sendRequest(self::FUNCTION_SET_VOLTAGE_CALLBACK_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the callback configuration as set by BrickletIndustrialDualAnalogInV2::setVoltageCallbackConfiguration().
     * 
     * @param int $channel
     * 
     * @return array
     */
    public function getVoltageCallbackConfiguration($channel)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('C', $channel);

        $data = $this->sendRequest(self::FUNCTION_GET_VOLTAGE_CALLBACK_CONFIGURATION, $payload, 22);

        $payload = unpack('V1period/C1value_has_to_change/c1option/V1min/V1max', $data);

        $ret['period'] = IPConnection::fixUnpackedUInt32($payload, 'period');
        $ret['value_has_to_change'] = (bool)$payload['value_has_to_change'];
        $ret['option'] = chr($payload['option']);
        $ret['min'] = IPConnection::fixUnpackedInt32($payload, 'min');
        $ret['max'] = IPConnection::fixUnpackedInt32($payload, 'max');

        return $ret;
    }

    /**
     * Sets the sample rate. The sample rate can be between 1 sample per second
     * and 976 samples per second. Decreasing the sample rate will also decrease the
     * noise on the data.
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
     * Returns the sample rate as set by BrickletIndustrialDualAnalogInV2::setSampleRate().
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
     * Sets offset and gain of MCP3911 internal calibration registers.
     * 
     * See MCP3911 datasheet 7.7 and 7.8. The Industrial Dual Analog In Bricklet 2.0
     * is already factory calibrated by Tinkerforge. It should not be necessary
     * for you to use this function
     * 
     * @param int[] $offset
     * @param int[] $gain
     * 
     * @return void
     */
    public function setCalibration($offset, $gain)
    {
        $this->checkValidity();

        $payload = '';
        for ($i = 0; $i < 2; $i++) {
            $payload .= pack('V', $offset[$i]);
        }
        for ($i = 0; $i < 2; $i++) {
            $payload .= pack('V', $gain[$i]);
        }

        $this->sendRequest(self::FUNCTION_SET_CALIBRATION, $payload, 0);
    }

    /**
     * Returns the calibration as set by BrickletIndustrialDualAnalogInV2::setCalibration().
     * 
     * 
     * @return array
     */
    public function getCalibration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_CALIBRATION, $payload, 24);

        $payload = unpack('V2offset/V2gain', $data);

        $ret['offset'] = IPConnection::collectUnpackedInt32Array($payload, 'offset', 2);
        $ret['gain'] = IPConnection::collectUnpackedInt32Array($payload, 'gain', 2);

        return $ret;
    }

    /**
     * Returns the ADC values as given by the MCP3911 IC. This function
     * is needed for proper calibration, see BrickletIndustrialDualAnalogInV2::setCalibration().
     * 
     * 
     * @return array
     */
    public function getADCValues()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ADC_VALUES, $payload, 16);

        $payload = unpack('V2value', $data);

        return IPConnection::collectUnpackedInt32Array($payload, 'value', 2);
    }

    /**
     * Each channel has a corresponding LED. You can turn the LED off, on or show a
     * heartbeat. You can also set the LED to "Channel Status". In this mode the
     * LED can either be turned on with a pre-defined threshold or the intensity
     * of the LED can change with the measured value.
     * 
     * You can configure the channel status behavior with BrickletIndustrialDualAnalogInV2::setChannelLEDStatusConfig().
     * 
     * By default all channel LEDs are configured as "Channel Status".
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
     * Returns the channel LED configuration as set by BrickletIndustrialDualAnalogInV2::setChannelLEDConfig()
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
     * configured as "Channel Status", see BrickletIndustrialDualAnalogInV2::setChannelLEDConfig().
     * 
     * For each channel you can choose between threshold and intensity mode.
     * 
     * In threshold mode you can define a positive or a negative threshold.
     * For a positive threshold set the "min" parameter to the threshold value in mV
     * above which the LED should turn on and set the "max" parameter to 0. Example:
     * If you set a positive threshold of 10V, the LED will turn on as soon as the
     * voltage exceeds 10V and turn off again if it goes below 10V.
     * For a negative threshold set the "max" parameter to the threshold value in mV
     * below which the LED should turn on and set the "min" parameter to 0. Example:
     * If you set a negative threshold of 10V, the LED will turn on as soon as the
     * voltage goes below 10V and the LED will turn off when the voltage exceeds 10V.
     * 
     * In intensity mode you can define a range in mV that is used to scale the brightness
     * of the LED. Example with min=4V, max=20V: The LED is off at 4V, on at 20V
     * and the brightness is linearly scaled between the values 4V and 20V. If the
     * min value is greater than the max value, the LED brightness is scaled the other
     * way around.
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
     * BrickletIndustrialDualAnalogInV2::setChannelLEDStatusConfig().
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
     * Returns the voltages for all channels.
     * 
     * If you want to get the value periodically, it is recommended to use the
     * BrickletIndustrialDualAnalogInV2::CALLBACK_ALL_VOLTAGES callback. You can set the callback configuration
     * with BrickletIndustrialDualAnalogInV2::setAllVoltagesCallbackConfiguration().
     * 
     * .. versionadded:: 2.0.6$nbsp;(Plugin)
     * 
     * 
     * @return array
     */
    public function getAllVoltages()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ALL_VOLTAGES, $payload, 16);

        $payload = unpack('V2voltages', $data);

        return IPConnection::collectUnpackedInt32Array($payload, 'voltages', 2);
    }

    /**
     * The period is the period with which the BrickletIndustrialDualAnalogInV2::CALLBACK_ALL_VOLTAGES
     * callback is triggered periodically. A value of 0 turns the callback off.
     * 
     * If the `value has to change`-parameter is set to true, the callback is only
     * triggered after at least one of the values has changed. If the values didn't
     * change within the period, the callback is triggered immediately on change.
     * 
     * If it is set to false, the callback is continuously triggered with the period,
     * independent of the value.
     * 
     * .. versionadded:: 2.0.6$nbsp;(Plugin)
     * 
     * @param int $period
     * @param bool $value_has_to_change
     * 
     * @return void
     */
    public function setAllVoltagesCallbackConfiguration($period, $value_has_to_change)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);
        $payload .= pack('C', intval((bool)$value_has_to_change));

        $this->sendRequest(self::FUNCTION_SET_ALL_VOLTAGES_CALLBACK_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the callback configuration as set by
     * BrickletIndustrialDualAnalogInV2::setAllVoltagesCallbackConfiguration().
     * 
     * .. versionadded:: 2.0.6$nbsp;(Plugin)
     * 
     * 
     * @return array
     */
    public function getAllVoltagesCallbackConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ALL_VOLTAGES_CALLBACK_CONFIGURATION, $payload, 13);

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
     * Returns the current bootloader mode, see BrickletIndustrialDualAnalogInV2::setBootloaderMode().
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
     * Sets the firmware pointer for BrickletIndustrialDualAnalogInV2::writeFirmware(). The pointer has
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
     * BrickletIndustrialDualAnalogInV2::setWriteFirmwarePointer() before. The firmware is written
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
     * Returns the configuration as set by BrickletIndustrialDualAnalogInV2::setStatusLEDConfig()
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
    public function callbackWrapperVoltage($data)
    {
        $payload = unpack('C1channel/V1voltage', $data);
        $payload['voltage'] = IPConnection::fixUnpackedInt32($payload, 'voltage');

        if (array_key_exists(self::CALLBACK_VOLTAGE, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_VOLTAGE];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_VOLTAGE];

            call_user_func($function, $payload['channel'], $payload['voltage'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperAllVoltages($data)
    {
        $payload = unpack('V2voltages', $data);
        $payload['voltages'] = IPConnection::collectUnpackedInt32Array($payload, 'voltages', 2);

        if (array_key_exists(self::CALLBACK_ALL_VOLTAGES, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_ALL_VOLTAGES];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_ALL_VOLTAGES];

            call_user_func($function, $payload['voltages'], $user_data);
        }
    }
}

?>
