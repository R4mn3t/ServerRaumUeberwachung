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
 * Measures relative humidity
 */
class BrickletHumidityV2 extends Device
{

    /**
     * This callback is triggered periodically according to the configuration set by
     * BrickletHumidityV2::setHumidityCallbackConfiguration().
     * 
     * The parameter is the same as BrickletHumidityV2::getHumidity().
     */
    const CALLBACK_HUMIDITY = 4;

    /**
     * This callback is triggered periodically according to the configuration set by
     * BrickletHumidityV2::setTemperatureCallbackConfiguration().
     * 
     * The parameter is the same as BrickletHumidityV2::getTemperature().
     */
    const CALLBACK_TEMPERATURE = 8;


    /**
     * @internal
     */
    const FUNCTION_GET_HUMIDITY = 1;

    /**
     * @internal
     */
    const FUNCTION_SET_HUMIDITY_CALLBACK_CONFIGURATION = 2;

    /**
     * @internal
     */
    const FUNCTION_GET_HUMIDITY_CALLBACK_CONFIGURATION = 3;

    /**
     * @internal
     */
    const FUNCTION_GET_TEMPERATURE = 5;

    /**
     * @internal
     */
    const FUNCTION_SET_TEMPERATURE_CALLBACK_CONFIGURATION = 6;

    /**
     * @internal
     */
    const FUNCTION_GET_TEMPERATURE_CALLBACK_CONFIGURATION = 7;

    /**
     * @internal
     */
    const FUNCTION_SET_HEATER_CONFIGURATION = 9;

    /**
     * @internal
     */
    const FUNCTION_GET_HEATER_CONFIGURATION = 10;

    /**
     * @internal
     */
    const FUNCTION_SET_MOVING_AVERAGE_CONFIGURATION = 11;

    /**
     * @internal
     */
    const FUNCTION_GET_MOVING_AVERAGE_CONFIGURATION = 12;

    /**
     * @internal
     */
    const FUNCTION_SET_SAMPLES_PER_SECOND = 13;

    /**
     * @internal
     */
    const FUNCTION_GET_SAMPLES_PER_SECOND = 14;

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
    const HEATER_CONFIG_DISABLED = 0;
    const HEATER_CONFIG_ENABLED = 1;
    const SPS_20 = 0;
    const SPS_10 = 1;
    const SPS_5 = 2;
    const SPS_1 = 3;
    const SPS_02 = 4;
    const SPS_01 = 5;
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

    const DEVICE_IDENTIFIER = 283;

    const DEVICE_DISPLAY_NAME = 'Humidity Bricklet 2.0';

    /**
     * Creates an object with the unique device ID $uid. This object can
     * then be added to the IP connection.
     *
     * @param string $uid
     */
    public function __construct($uid, $ipcon)
    {
        parent::__construct($uid, $ipcon, self::DEVICE_IDENTIFIER, self::DEVICE_DISPLAY_NAME);

        $this->api_version = array(2, 0, 2);

        $this->response_expected[self::FUNCTION_GET_HUMIDITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_HUMIDITY_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_HUMIDITY_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_TEMPERATURE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_TEMPERATURE_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_TEMPERATURE_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_HEATER_CONFIGURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_HEATER_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_MOVING_AVERAGE_CONFIGURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_MOVING_AVERAGE_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_SAMPLES_PER_SECOND] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_SAMPLES_PER_SECOND] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
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

        $this->callback_wrappers[self::CALLBACK_HUMIDITY] = array(10, 'callbackWrapperHumidity');
        $this->callback_wrappers[self::CALLBACK_TEMPERATURE] = array(10, 'callbackWrapperTemperature');

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
     * Returns the humidity measured by the sensor.
     * 
     * 
     * If you want to get the value periodically, it is recommended to use the
     * BrickletHumidityV2::CALLBACK_HUMIDITY callback. You can set the callback configuration
     * with BrickletHumidityV2::setHumidityCallbackConfiguration().
     * 
     * 
     * @return int
     */
    public function getHumidity()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_HUMIDITY, $payload, 10);

        $payload = unpack('v1humidity', $data);

        return $payload['humidity'];
    }

    /**
     * The period is the period with which the BrickletHumidityV2::CALLBACK_HUMIDITY callback is triggered
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
     * The `option`-parameter together with min/max sets a threshold for the BrickletHumidityV2::CALLBACK_HUMIDITY callback.
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
     * @param int $period
     * @param bool $value_has_to_change
     * @param string $option
     * @param int $min
     * @param int $max
     * 
     * @return void
     */
    public function setHumidityCallbackConfiguration($period, $value_has_to_change, $option, $min, $max)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);
        $payload .= pack('C', intval((bool)$value_has_to_change));
        $payload .= pack('c', ord($option));
        $payload .= pack('v', $min);
        $payload .= pack('v', $max);

        $this->sendRequest(self::FUNCTION_SET_HUMIDITY_CALLBACK_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the callback configuration as set by BrickletHumidityV2::setHumidityCallbackConfiguration().
     * 
     * 
     * @return array
     */
    public function getHumidityCallbackConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_HUMIDITY_CALLBACK_CONFIGURATION, $payload, 18);

        $payload = unpack('V1period/C1value_has_to_change/c1option/v1min/v1max', $data);

        $ret['period'] = IPConnection::fixUnpackedUInt32($payload, 'period');
        $ret['value_has_to_change'] = (bool)$payload['value_has_to_change'];
        $ret['option'] = chr($payload['option']);
        $ret['min'] = $payload['min'];
        $ret['max'] = $payload['max'];

        return $ret;
    }

    /**
     * Returns the temperature measured by the sensor.
     * 
     * 
     * If you want to get the value periodically, it is recommended to use the
     * BrickletHumidityV2::CALLBACK_TEMPERATURE callback. You can set the callback configuration
     * with BrickletHumidityV2::setTemperatureCallbackConfiguration().
     * 
     * 
     * @return int
     */
    public function getTemperature()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_TEMPERATURE, $payload, 10);

        $payload = unpack('v1temperature', $data);

        return IPConnection::fixUnpackedInt16($payload, 'temperature');
    }

    /**
     * The period is the period with which the BrickletHumidityV2::CALLBACK_TEMPERATURE callback is triggered
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
     * The `option`-parameter together with min/max sets a threshold for the BrickletHumidityV2::CALLBACK_TEMPERATURE callback.
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
     * @param int $period
     * @param bool $value_has_to_change
     * @param string $option
     * @param int $min
     * @param int $max
     * 
     * @return void
     */
    public function setTemperatureCallbackConfiguration($period, $value_has_to_change, $option, $min, $max)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);
        $payload .= pack('C', intval((bool)$value_has_to_change));
        $payload .= pack('c', ord($option));
        $payload .= pack('v', $min);
        $payload .= pack('v', $max);

        $this->sendRequest(self::FUNCTION_SET_TEMPERATURE_CALLBACK_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the callback configuration as set by BrickletHumidityV2::setTemperatureCallbackConfiguration().
     * 
     * 
     * @return array
     */
    public function getTemperatureCallbackConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_TEMPERATURE_CALLBACK_CONFIGURATION, $payload, 18);

        $payload = unpack('V1period/C1value_has_to_change/c1option/v1min/v1max', $data);

        $ret['period'] = IPConnection::fixUnpackedUInt32($payload, 'period');
        $ret['value_has_to_change'] = (bool)$payload['value_has_to_change'];
        $ret['option'] = chr($payload['option']);
        $ret['min'] = IPConnection::fixUnpackedInt16($payload, 'min');
        $ret['max'] = IPConnection::fixUnpackedInt16($payload, 'max');

        return $ret;
    }

    /**
     * Enables/disables the heater. The heater can be used to dry the sensor in
     * extremely wet conditions.
     * 
     * @param int $heater_config
     * 
     * @return void
     */
    public function setHeaterConfiguration($heater_config)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $heater_config);

        $this->sendRequest(self::FUNCTION_SET_HEATER_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the heater configuration as set by BrickletHumidityV2::setHeaterConfiguration().
     * 
     * 
     * @return int
     */
    public function getHeaterConfiguration()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_HEATER_CONFIGURATION, $payload, 9);

        $payload = unpack('C1heater_config', $data);

        return $payload['heater_config'];
    }

    /**
     * Sets the length of a `moving averaging <https://en.wikipedia.org/wiki/Moving_average>`__
     * for the humidity and temperature.
     * 
     * Setting the length to 1 will turn the averaging off. With less
     * averaging, there is more noise on the data.
     * 
     * New data is gathered every 50ms*. With a moving average of length 1000 the resulting
     * averaging window has a length of 50s. If you want to do long term measurements the longest
     * moving average will give the cleanest results.
     * 
     * \* In firmware version 2.0.3 we added the BrickletHumidityV2::setSamplesPerSecond() function. It
     * configures the measurement frequency. Since high frequencies can result in self-heating
     * of th IC, changed the default value from 20 samples per second to 1. With 1 sample per second
     * a moving average length of 1000 would result in an averaging window of 1000 seconds!
     * 
     * @param int $moving_average_length_humidity
     * @param int $moving_average_length_temperature
     * 
     * @return void
     */
    public function setMovingAverageConfiguration($moving_average_length_humidity, $moving_average_length_temperature)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $moving_average_length_humidity);
        $payload .= pack('v', $moving_average_length_temperature);

        $this->sendRequest(self::FUNCTION_SET_MOVING_AVERAGE_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the moving average configuration as set by BrickletHumidityV2::setMovingAverageConfiguration().
     * 
     * 
     * @return array
     */
    public function getMovingAverageConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_MOVING_AVERAGE_CONFIGURATION, $payload, 12);

        $payload = unpack('v1moving_average_length_humidity/v1moving_average_length_temperature', $data);

        $ret['moving_average_length_humidity'] = $payload['moving_average_length_humidity'];
        $ret['moving_average_length_temperature'] = $payload['moving_average_length_temperature'];

        return $ret;
    }

    /**
     * Sets the samples per second that are gathered by the humidity/temperature sensor HDC1080.
     * 
     * We added this function since we found out that a high measurement frequency can lead to
     * self-heating of the sensor. Which can distort the temperature measurement.
     * 
     * If you don't need a lot of measurements, you can use the lowest available measurement
     * frequency of 0.1 samples per second for the least amount of self-heating.
     * 
     * Before version 2.0.3 the default was 20 samples per second. The new default is 1 sample per second.
     * 
     * .. versionadded:: 2.0.3$nbsp;(Plugin)
     * 
     * @param int $sps
     * 
     * @return void
     */
    public function setSamplesPerSecond($sps)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $sps);

        $this->sendRequest(self::FUNCTION_SET_SAMPLES_PER_SECOND, $payload, 0);
    }

    /**
     * Returnes the samples per second, as set by BrickletHumidityV2::setSamplesPerSecond().
     * 
     * .. versionadded:: 2.0.3$nbsp;(Plugin)
     * 
     * 
     * @return int
     */
    public function getSamplesPerSecond()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_SAMPLES_PER_SECOND, $payload, 9);

        $payload = unpack('C1sps', $data);

        return $payload['sps'];
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
     * Returns the current bootloader mode, see BrickletHumidityV2::setBootloaderMode().
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
     * Sets the firmware pointer for BrickletHumidityV2::writeFirmware(). The pointer has
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
     * BrickletHumidityV2::setWriteFirmwarePointer() before. The firmware is written
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
     * Returns the configuration as set by BrickletHumidityV2::setStatusLEDConfig()
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
    public function callbackWrapperHumidity($data)
    {
        $payload = unpack('v1humidity', $data);

        if (array_key_exists(self::CALLBACK_HUMIDITY, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_HUMIDITY];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_HUMIDITY];

            call_user_func($function, $payload['humidity'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperTemperature($data)
    {
        $payload = unpack('v1temperature', $data);
        $payload['temperature'] = IPConnection::fixUnpackedInt16($payload, 'temperature');

        if (array_key_exists(self::CALLBACK_TEMPERATURE, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_TEMPERATURE];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_TEMPERATURE];

            call_user_func($function, $payload['temperature'], $user_data);
        }
    }
}

?>
