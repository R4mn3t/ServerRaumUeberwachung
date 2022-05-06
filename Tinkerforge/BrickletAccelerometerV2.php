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
 * Measures acceleration in three axis
 */
class BrickletAccelerometerV2 extends Device
{

    /**
     * This callback is triggered periodically according to the configuration set by
     * BrickletAccelerometerV2::setAccelerationCallbackConfiguration().
     * 
     * The parameters are the same as BrickletAccelerometerV2::getAcceleration().
     */
    const CALLBACK_ACCELERATION = 8;

    /**
     * Returns 30 acceleration values with 16 bit resolution. The data rate can
     * be configured with BrickletAccelerometerV2::setConfiguration() and this callback can be
     * enabled with BrickletAccelerometerV2::setContinuousAccelerationConfiguration().
     * 
     * The returned values are raw ADC data. If you want to put this data into
     * a FFT to determine the occurrences of specific frequencies we recommend
     * that you use the data as is. It has all of the ADC noise in it. This noise
     * looks like pure noise at first glance, but it might still have some frequnecy
     * information in it that can be utilized by the FFT.
     * 
     * Otherwise you have to use the following formulas that depend on the
     * full scale range (see BrickletAccelerometerV2::setConfiguration()) to calculate
     * the data in gₙ/10000 (same unit that is returned by BrickletAccelerometerV2::getAcceleration()):
     * 
     * * Full scale 2g: acceleration = value * 625 / 1024
     * * Full scale 4g: acceleration = value * 1250 / 1024
     * * Full scale 8g: acceleration = value * 2500 / 1024
     * 
     * The data is formated in the sequence "x, y, z, x, y, z, ..." depending on
     * the enabled axis. Examples:
     * 
     * * x, y, z enabled: "x, y, z, ..." 10x repeated
     * * x, z enabled: "x, z, ..." 15x repeated
     * * y enabled: "y, ..." 30x repeated
     */
    const CALLBACK_CONTINUOUS_ACCELERATION_16_BIT = 11;

    /**
     * Returns 60 acceleration values with 8 bit resolution. The data rate can
     * be configured with BrickletAccelerometerV2::setConfiguration() and this callback can be
     * enabled with BrickletAccelerometerV2::setContinuousAccelerationConfiguration().
     * 
     * The returned values are raw ADC data. If you want to put this data into
     * a FFT to determine the occurrences of specific frequencies we recommend
     * that you use the data as is. It has all of the ADC noise in it. This noise
     * looks like pure noise at first glance, but it might still have some frequnecy
     * information in it that can be utilized by the FFT.
     * 
     * Otherwise you have to use the following formulas that depend on the
     * full scale range (see BrickletAccelerometerV2::setConfiguration()) to calculate
     * the data in gₙ/10000 (same unit that is returned by BrickletAccelerometerV2::getAcceleration()):
     * 
     * * Full scale 2g: acceleration = value * 256 * 625 / 1024
     * * Full scale 4g: acceleration = value * 256 * 1250 / 1024
     * * Full scale 8g: acceleration = value * 256 * 2500 / 1024
     * 
     * The data is formated in the sequence "x, y, z, x, y, z, ..." depending on
     * the enabled axis. Examples:
     * 
     * * x, y, z enabled: "x, y, z, ..." 20x repeated
     * * x, z enabled: "x, z, ..." 30x repeated
     * * y enabled: "y, ..." 60x repeated
     */
    const CALLBACK_CONTINUOUS_ACCELERATION_8_BIT = 12;


    /**
     * @internal
     */
    const FUNCTION_GET_ACCELERATION = 1;

    /**
     * @internal
     */
    const FUNCTION_SET_CONFIGURATION = 2;

    /**
     * @internal
     */
    const FUNCTION_GET_CONFIGURATION = 3;

    /**
     * @internal
     */
    const FUNCTION_SET_ACCELERATION_CALLBACK_CONFIGURATION = 4;

    /**
     * @internal
     */
    const FUNCTION_GET_ACCELERATION_CALLBACK_CONFIGURATION = 5;

    /**
     * @internal
     */
    const FUNCTION_SET_INFO_LED_CONFIG = 6;

    /**
     * @internal
     */
    const FUNCTION_GET_INFO_LED_CONFIG = 7;

    /**
     * @internal
     */
    const FUNCTION_SET_CONTINUOUS_ACCELERATION_CONFIGURATION = 9;

    /**
     * @internal
     */
    const FUNCTION_GET_CONTINUOUS_ACCELERATION_CONFIGURATION = 10;

    /**
     * @internal
     */
    const FUNCTION_SET_FILTER_CONFIGURATION = 13;

    /**
     * @internal
     */
    const FUNCTION_GET_FILTER_CONFIGURATION = 14;

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

    const DATA_RATE_0_781HZ = 0;
    const DATA_RATE_1_563HZ = 1;
    const DATA_RATE_3_125HZ = 2;
    const DATA_RATE_6_2512HZ = 3;
    const DATA_RATE_12_5HZ = 4;
    const DATA_RATE_25HZ = 5;
    const DATA_RATE_50HZ = 6;
    const DATA_RATE_100HZ = 7;
    const DATA_RATE_200HZ = 8;
    const DATA_RATE_400HZ = 9;
    const DATA_RATE_800HZ = 10;
    const DATA_RATE_1600HZ = 11;
    const DATA_RATE_3200HZ = 12;
    const DATA_RATE_6400HZ = 13;
    const DATA_RATE_12800HZ = 14;
    const DATA_RATE_25600HZ = 15;
    const FULL_SCALE_2G = 0;
    const FULL_SCALE_4G = 1;
    const FULL_SCALE_8G = 2;
    const INFO_LED_CONFIG_OFF = 0;
    const INFO_LED_CONFIG_ON = 1;
    const INFO_LED_CONFIG_SHOW_HEARTBEAT = 2;
    const RESOLUTION_8BIT = 0;
    const RESOLUTION_16BIT = 1;
    const IIR_BYPASS_APPLIED = 0;
    const IIR_BYPASS_BYPASSED = 1;
    const LOW_PASS_FILTER_NINTH = 0;
    const LOW_PASS_FILTER_HALF = 1;
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

    const DEVICE_IDENTIFIER = 2130;

    const DEVICE_DISPLAY_NAME = 'Accelerometer Bricklet 2.0';

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

        $this->response_expected[self::FUNCTION_GET_ACCELERATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_CONFIGURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ACCELERATION_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_ACCELERATION_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_INFO_LED_CONFIG] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_INFO_LED_CONFIG] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_CONTINUOUS_ACCELERATION_CONFIGURATION] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_CONTINUOUS_ACCELERATION_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_FILTER_CONFIGURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_FILTER_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
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

        $this->callback_wrappers[self::CALLBACK_ACCELERATION] = array(20, 'callbackWrapperAcceleration');
        $this->callback_wrappers[self::CALLBACK_CONTINUOUS_ACCELERATION_16_BIT] = array(68, 'callbackWrapperContinuousAcceleration16Bit');
        $this->callback_wrappers[self::CALLBACK_CONTINUOUS_ACCELERATION_8_BIT] = array(68, 'callbackWrapperContinuousAcceleration8Bit');

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
     * Returns the acceleration in x, y and z direction. The values
     * are given in gₙ/10000 (1gₙ = 9.80665m/s²). The range is
     * configured with BrickletAccelerometerV2::setConfiguration().
     * 
     * If you want to get the acceleration periodically, it is recommended
     * to use the BrickletAccelerometerV2::CALLBACK_ACCELERATION callback and set the period with
     * BrickletAccelerometerV2::setAccelerationCallbackConfiguration().
     * 
     * 
     * @return array
     */
    public function getAcceleration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ACCELERATION, $payload, 20);

        $payload = unpack('V1x/V1y/V1z', $data);

        $ret['x'] = IPConnection::fixUnpackedInt32($payload, 'x');
        $ret['y'] = IPConnection::fixUnpackedInt32($payload, 'y');
        $ret['z'] = IPConnection::fixUnpackedInt32($payload, 'z');

        return $ret;
    }

    /**
     * Configures the data rate and full scale range.
     * Possible values are:
     * 
     * * Data rate of 0.781Hz to 25600Hz.
     * * Full scale range of ±2g up to ±8g.
     * 
     * Decreasing data rate or full scale range will also decrease the noise on
     * the data.
     * 
     * @param int $data_rate
     * @param int $full_scale
     * 
     * @return void
     */
    public function setConfiguration($data_rate, $full_scale)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $data_rate);
        $payload .= pack('C', $full_scale);

        $this->sendRequest(self::FUNCTION_SET_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the configuration as set by BrickletAccelerometerV2::setConfiguration().
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

        $payload = unpack('C1data_rate/C1full_scale', $data);

        $ret['data_rate'] = $payload['data_rate'];
        $ret['full_scale'] = $payload['full_scale'];

        return $ret;
    }

    /**
     * The period is the period with which the BrickletAccelerometerV2::CALLBACK_ACCELERATION
     * callback is triggered periodically. A value of 0 turns the callback off.
     * 
     * If the `value has to change`-parameter is set to true, the callback is only
     * triggered after the value has changed. If the value didn't change within the
     * period, the callback is triggered immediately on change.
     * 
     * If it is set to false, the callback is continuously triggered with the period,
     * independent of the value.
     * 
     * If this callback is enabled, the BrickletAccelerometerV2::CALLBACK_CONTINUOUS_ACCELERATION_16_BIT callback
     * and BrickletAccelerometerV2::CALLBACK_CONTINUOUS_ACCELERATION_8_BIT callback will automatically be disabled.
     * 
     * @param int $period
     * @param bool $value_has_to_change
     * 
     * @return void
     */
    public function setAccelerationCallbackConfiguration($period, $value_has_to_change)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);
        $payload .= pack('C', intval((bool)$value_has_to_change));

        $this->sendRequest(self::FUNCTION_SET_ACCELERATION_CALLBACK_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the callback configuration as set by
     * BrickletAccelerometerV2::setAccelerationCallbackConfiguration().
     * 
     * 
     * @return array
     */
    public function getAccelerationCallbackConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ACCELERATION_CALLBACK_CONFIGURATION, $payload, 13);

        $payload = unpack('V1period/C1value_has_to_change', $data);

        $ret['period'] = IPConnection::fixUnpackedUInt32($payload, 'period');
        $ret['value_has_to_change'] = (bool)$payload['value_has_to_change'];

        return $ret;
    }

    /**
     * Configures the info LED (marked as "Force" on the Bricklet) to be either turned off,
     * turned on, or blink in heartbeat mode.
     * 
     * @param int $config
     * 
     * @return void
     */
    public function setInfoLEDConfig($config)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $config);

        $this->sendRequest(self::FUNCTION_SET_INFO_LED_CONFIG, $payload, 0);
    }

    /**
     * Returns the LED configuration as set by BrickletAccelerometerV2::setInfoLEDConfig()
     * 
     * 
     * @return int
     */
    public function getInfoLEDConfig()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_INFO_LED_CONFIG, $payload, 9);

        $payload = unpack('C1config', $data);

        return $payload['config'];
    }

    /**
     * For high throughput of acceleration data (> 1000Hz) you have to use the
     * BrickletAccelerometerV2::CALLBACK_CONTINUOUS_ACCELERATION_16_BIT or BrickletAccelerometerV2::CALLBACK_CONTINUOUS_ACCELERATION_8_BIT
     * callbacks.
     * 
     * You can enable the callback for each axis (x, y, z) individually and choose a
     * resolution of 8 bit or 16 bit.
     * 
     * If at least one of the axis is enabled and the resolution is set to 8 bit,
     * the BrickletAccelerometerV2::CALLBACK_CONTINUOUS_ACCELERATION_8_BIT callback is activated. If at least
     * one of the axis is enabled and the resolution is set to 16 bit,
     * the BrickletAccelerometerV2::CALLBACK_CONTINUOUS_ACCELERATION_16_BIT callback is activated.
     * 
     * The returned values are raw ADC data. If you want to put this data into
     * a FFT to determine the occurrences of specific frequencies we recommend
     * that you use the data as is. It has all of the ADC noise in it. This noise
     * looks like pure noise at first glance, but it might still have some frequnecy
     * information in it that can be utilized by the FFT.
     * 
     * Otherwise you have to use the following formulas that depend on the configured
     * resolution (8/16 bit) and the full scale range (see BrickletAccelerometerV2::setConfiguration()) to calculate
     * the data in gₙ/10000 (same unit that is returned by BrickletAccelerometerV2::getAcceleration()):
     * 
     * * 16 bit, full scale 2g: acceleration = value * 625 / 1024
     * * 16 bit, full scale 4g: acceleration = value * 1250 / 1024
     * * 16 bit, full scale 8g: acceleration = value * 2500 / 1024
     * 
     * If a resolution of 8 bit is used, only the 8 most significant bits will be
     * transferred, so you can use the following formulas:
     * 
     * * 8 bit, full scale 2g: acceleration = value * 256 * 625 / 1024
     * * 8 bit, full scale 4g: acceleration = value * 256 * 1250 / 1024
     * * 8 bit, full scale 8g: acceleration = value * 256 * 2500 / 1024
     * 
     * If no axis is enabled, both callbacks are disabled. If one of the continuous
     * callbacks is enabled, the BrickletAccelerometerV2::CALLBACK_ACCELERATION callback is disabled.
     * 
     * The maximum throughput depends on the exact configuration:
     * 
     * <code>
     *  "Number of axis enabled", "Throughput 8 bit", "Throughout 16 bit"
     * 
     *  "1", "25600Hz", "25600Hz"
     *  "2", "25600Hz", "15000Hz"
     *  "3", "20000Hz", "10000Hz"
     * </code>
     * 
     * @param bool $enable_x
     * @param bool $enable_y
     * @param bool $enable_z
     * @param int $resolution
     * 
     * @return void
     */
    public function setContinuousAccelerationConfiguration($enable_x, $enable_y, $enable_z, $resolution)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', intval((bool)$enable_x));
        $payload .= pack('C', intval((bool)$enable_y));
        $payload .= pack('C', intval((bool)$enable_z));
        $payload .= pack('C', $resolution);

        $this->sendRequest(self::FUNCTION_SET_CONTINUOUS_ACCELERATION_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the continuous acceleration configuration as set by
     * BrickletAccelerometerV2::setContinuousAccelerationConfiguration().
     * 
     * 
     * @return array
     */
    public function getContinuousAccelerationConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_CONTINUOUS_ACCELERATION_CONFIGURATION, $payload, 12);

        $payload = unpack('C1enable_x/C1enable_y/C1enable_z/C1resolution', $data);

        $ret['enable_x'] = (bool)$payload['enable_x'];
        $ret['enable_y'] = (bool)$payload['enable_y'];
        $ret['enable_z'] = (bool)$payload['enable_z'];
        $ret['resolution'] = $payload['resolution'];

        return $ret;
    }

    /**
     * Configures IIR Bypass filter mode and low pass filter roll off corner frequency.
     * 
     * The filter can be applied or bypassed and the corner frequency can be
     * half or a ninth of the output data rate.
     * 
     * .. image:: /Images/Bricklets/bricklet_accelerometer_v2_filter.png
     *    :scale: 100 %
     *    :alt: Accelerometer filter
     *    :align: center
     *    :target: ../../_images/Bricklets/bricklet_accelerometer_v2_filter.png
     * 
     * .. versionadded:: 2.0.2$nbsp;(Plugin)
     * 
     * @param int $iir_bypass
     * @param int $low_pass_filter
     * 
     * @return void
     */
    public function setFilterConfiguration($iir_bypass, $low_pass_filter)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $iir_bypass);
        $payload .= pack('C', $low_pass_filter);

        $this->sendRequest(self::FUNCTION_SET_FILTER_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the configuration as set by BrickletAccelerometerV2::setFilterConfiguration().
     * 
     * .. versionadded:: 2.0.2$nbsp;(Plugin)
     * 
     * 
     * @return array
     */
    public function getFilterConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_FILTER_CONFIGURATION, $payload, 10);

        $payload = unpack('C1iir_bypass/C1low_pass_filter', $data);

        $ret['iir_bypass'] = $payload['iir_bypass'];
        $ret['low_pass_filter'] = $payload['low_pass_filter'];

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
     * Returns the current bootloader mode, see BrickletAccelerometerV2::setBootloaderMode().
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
     * Sets the firmware pointer for BrickletAccelerometerV2::writeFirmware(). The pointer has
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
     * BrickletAccelerometerV2::setWriteFirmwarePointer() before. The firmware is written
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
     * Returns the configuration as set by BrickletAccelerometerV2::setStatusLEDConfig()
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
    public function callbackWrapperAcceleration($data)
    {
        $payload = unpack('V1x/V1y/V1z', $data);
        $payload['x'] = IPConnection::fixUnpackedInt32($payload, 'x');
        $payload['y'] = IPConnection::fixUnpackedInt32($payload, 'y');
        $payload['z'] = IPConnection::fixUnpackedInt32($payload, 'z');

        if (array_key_exists(self::CALLBACK_ACCELERATION, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_ACCELERATION];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_ACCELERATION];

            call_user_func($function, $payload['x'], $payload['y'], $payload['z'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperContinuousAcceleration16Bit($data)
    {
        $payload = unpack('v30acceleration', $data);
        $payload['acceleration'] = IPConnection::collectUnpackedInt16Array($payload, 'acceleration', 30);

        if (array_key_exists(self::CALLBACK_CONTINUOUS_ACCELERATION_16_BIT, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_CONTINUOUS_ACCELERATION_16_BIT];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_CONTINUOUS_ACCELERATION_16_BIT];

            call_user_func($function, $payload['acceleration'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperContinuousAcceleration8Bit($data)
    {
        $payload = unpack('c60acceleration', $data);
        $payload['acceleration'] = IPConnection::collectUnpackedArray($payload, 'acceleration', 60);

        if (array_key_exists(self::CALLBACK_CONTINUOUS_ACCELERATION_8_BIT, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_CONTINUOUS_ACCELERATION_8_BIT];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_CONTINUOUS_ACCELERATION_8_BIT];

            call_user_func($function, $payload['acceleration'], $user_data);
        }
    }
}

?>
