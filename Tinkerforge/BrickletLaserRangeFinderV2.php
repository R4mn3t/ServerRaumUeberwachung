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
 * Measures distance up to 40m with laser light
 */
class BrickletLaserRangeFinderV2 extends Device
{

    /**
     * This callback is triggered periodically according to the configuration set by
     * BrickletLaserRangeFinderV2::setDistanceCallbackConfiguration().
     * 
     * The parameter is the same as BrickletLaserRangeFinderV2::getDistance().
     */
    const CALLBACK_DISTANCE = 4;

    /**
     * This callback is triggered periodically according to the configuration set by
     * BrickletLaserRangeFinderV2::setVelocityCallbackConfiguration().
     * 
     * The parameter is the same as BrickletLaserRangeFinderV2::getVelocity().
     */
    const CALLBACK_VELOCITY = 8;


    /**
     * @internal
     */
    const FUNCTION_GET_DISTANCE = 1;

    /**
     * @internal
     */
    const FUNCTION_SET_DISTANCE_CALLBACK_CONFIGURATION = 2;

    /**
     * @internal
     */
    const FUNCTION_GET_DISTANCE_CALLBACK_CONFIGURATION = 3;

    /**
     * @internal
     */
    const FUNCTION_GET_VELOCITY = 5;

    /**
     * @internal
     */
    const FUNCTION_SET_VELOCITY_CALLBACK_CONFIGURATION = 6;

    /**
     * @internal
     */
    const FUNCTION_GET_VELOCITY_CALLBACK_CONFIGURATION = 7;

    /**
     * @internal
     */
    const FUNCTION_SET_ENABLE = 9;

    /**
     * @internal
     */
    const FUNCTION_GET_ENABLE = 10;

    /**
     * @internal
     */
    const FUNCTION_SET_CONFIGURATION = 11;

    /**
     * @internal
     */
    const FUNCTION_GET_CONFIGURATION = 12;

    /**
     * @internal
     */
    const FUNCTION_SET_MOVING_AVERAGE = 13;

    /**
     * @internal
     */
    const FUNCTION_GET_MOVING_AVERAGE = 14;

    /**
     * @internal
     */
    const FUNCTION_SET_OFFSET_CALIBRATION = 15;

    /**
     * @internal
     */
    const FUNCTION_GET_OFFSET_CALIBRATION = 16;

    /**
     * @internal
     */
    const FUNCTION_SET_DISTANCE_LED_CONFIG = 17;

    /**
     * @internal
     */
    const FUNCTION_GET_DISTANCE_LED_CONFIG = 18;

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
    const DISTANCE_LED_CONFIG_OFF = 0;
    const DISTANCE_LED_CONFIG_ON = 1;
    const DISTANCE_LED_CONFIG_SHOW_HEARTBEAT = 2;
    const DISTANCE_LED_CONFIG_SHOW_DISTANCE = 3;
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

    const DEVICE_IDENTIFIER = 2144;

    const DEVICE_DISPLAY_NAME = 'Laser Range Finder Bricklet 2.0';

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

        $this->response_expected[self::FUNCTION_GET_DISTANCE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_DISTANCE_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_DISTANCE_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_VELOCITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_VELOCITY_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_VELOCITY_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ENABLE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_ENABLE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_CONFIGURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_MOVING_AVERAGE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_MOVING_AVERAGE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_OFFSET_CALIBRATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_OFFSET_CALIBRATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_DISTANCE_LED_CONFIG] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_DISTANCE_LED_CONFIG] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
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

        $this->callback_wrappers[self::CALLBACK_DISTANCE] = array(10, 'callbackWrapperDistance');
        $this->callback_wrappers[self::CALLBACK_VELOCITY] = array(10, 'callbackWrapperVelocity');

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
     * Returns the measured distance.
     * 
     * The laser has to be enabled, see BrickletLaserRangeFinderV2::setEnable().
     * 
     * 
     * If you want to get the value periodically, it is recommended to use the
     * BrickletLaserRangeFinderV2::CALLBACK_DISTANCE callback. You can set the callback configuration
     * with BrickletLaserRangeFinderV2::setDistanceCallbackConfiguration().
     * 
     * 
     * @return int
     */
    public function getDistance()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_DISTANCE, $payload, 10);

        $payload = unpack('v1distance', $data);

        return IPConnection::fixUnpackedInt16($payload, 'distance');
    }

    /**
     * The period is the period with which the BrickletLaserRangeFinderV2::CALLBACK_DISTANCE callback is triggered
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
     * The `option`-parameter together with min/max sets a threshold for the BrickletLaserRangeFinderV2::CALLBACK_DISTANCE callback.
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
    public function setDistanceCallbackConfiguration($period, $value_has_to_change, $option, $min, $max)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);
        $payload .= pack('C', intval((bool)$value_has_to_change));
        $payload .= pack('c', ord($option));
        $payload .= pack('v', $min);
        $payload .= pack('v', $max);

        $this->sendRequest(self::FUNCTION_SET_DISTANCE_CALLBACK_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the callback configuration as set by BrickletLaserRangeFinderV2::setDistanceCallbackConfiguration().
     * 
     * 
     * @return array
     */
    public function getDistanceCallbackConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_DISTANCE_CALLBACK_CONFIGURATION, $payload, 18);

        $payload = unpack('V1period/C1value_has_to_change/c1option/v1min/v1max', $data);

        $ret['period'] = IPConnection::fixUnpackedUInt32($payload, 'period');
        $ret['value_has_to_change'] = (bool)$payload['value_has_to_change'];
        $ret['option'] = chr($payload['option']);
        $ret['min'] = IPConnection::fixUnpackedInt16($payload, 'min');
        $ret['max'] = IPConnection::fixUnpackedInt16($payload, 'max');

        return $ret;
    }

    /**
     * Returns the measured velocity. The value has a range of -12800 to 12700
     * and is given in 1/100 m/s.
     * 
     * The velocity measurement only produces stables results if a fixed
     * measurement rate (see BrickletLaserRangeFinderV2::setConfiguration()) is configured. Also the laser
     * has to be enabled, see BrickletLaserRangeFinderV2::setEnable().
     * 
     * 
     * If you want to get the value periodically, it is recommended to use the
     * BrickletLaserRangeFinderV2::CALLBACK_VELOCITY callback. You can set the callback configuration
     * with BrickletLaserRangeFinderV2::setVelocityCallbackConfiguration().
     * 
     * 
     * @return int
     */
    public function getVelocity()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_VELOCITY, $payload, 10);

        $payload = unpack('v1velocity', $data);

        return IPConnection::fixUnpackedInt16($payload, 'velocity');
    }

    /**
     * The period is the period with which the BrickletLaserRangeFinderV2::CALLBACK_VELOCITY callback is triggered
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
     * The `option`-parameter together with min/max sets a threshold for the BrickletLaserRangeFinderV2::CALLBACK_VELOCITY callback.
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
    public function setVelocityCallbackConfiguration($period, $value_has_to_change, $option, $min, $max)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);
        $payload .= pack('C', intval((bool)$value_has_to_change));
        $payload .= pack('c', ord($option));
        $payload .= pack('v', $min);
        $payload .= pack('v', $max);

        $this->sendRequest(self::FUNCTION_SET_VELOCITY_CALLBACK_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the callback configuration as set by BrickletLaserRangeFinderV2::setVelocityCallbackConfiguration().
     * 
     * 
     * @return array
     */
    public function getVelocityCallbackConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_VELOCITY_CALLBACK_CONFIGURATION, $payload, 18);

        $payload = unpack('V1period/C1value_has_to_change/c1option/v1min/v1max', $data);

        $ret['period'] = IPConnection::fixUnpackedUInt32($payload, 'period');
        $ret['value_has_to_change'] = (bool)$payload['value_has_to_change'];
        $ret['option'] = chr($payload['option']);
        $ret['min'] = IPConnection::fixUnpackedInt16($payload, 'min');
        $ret['max'] = IPConnection::fixUnpackedInt16($payload, 'max');

        return $ret;
    }

    /**
     * Enables the laser of the LIDAR if set to *true*.
     * 
     * We recommend that you wait 250ms after enabling the laser before
     * the first call of BrickletLaserRangeFinderV2::getDistance() to ensure stable measurements.
     * 
     * @param bool $enable
     * 
     * @return void
     */
    public function setEnable($enable)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', intval((bool)$enable));

        $this->sendRequest(self::FUNCTION_SET_ENABLE, $payload, 0);
    }

    /**
     * Returns the value as set by BrickletLaserRangeFinderV2::setEnable().
     * 
     * 
     * @return bool
     */
    public function getEnable()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ENABLE, $payload, 9);

        $payload = unpack('C1enable', $data);

        return (bool)$payload['enable'];
    }

    /**
     * The **Acquisition Count** defines the number of times the Laser Range Finder Bricklet
     * will integrate acquisitions to find a correlation record peak. With a higher count,
     * the Bricklet can measure longer distances. With a lower count, the rate increases. The
     * allowed values are 1-255.
     * 
     * If you set **Enable Quick Termination** to true, the distance measurement will be terminated
     * early if a high peak was already detected. This means that a higher measurement rate can be achieved
     * and long distances can be measured at the same time. However, the chance of false-positive
     * distance measurements increases.
     * 
     * Normally the distance is calculated with a detection algorithm that uses peak value,
     * signal strength and noise. You can however also define a fixed **Threshold Value**.
     * Set this to a low value if you want to measure the distance to something that has
     * very little reflection (e.g. glass) and set it to a high value if you want to measure
     * the distance to something with a very high reflection (e.g. mirror). Set this to 0 to
     * use the default algorithm. The other allowed values are 1-255.
     * 
     * Set the **Measurement Frequency** to force a fixed measurement rate. If set to 0,
     * the Laser Range Finder Bricklet will use the optimal frequency according to the other
     * configurations and the actual measured distance. Since the rate is not fixed in this case,
     * the velocity measurement is not stable. For a stable velocity measurement you should
     * set a fixed measurement frequency. The lower the frequency, the higher is the resolution
     * of the calculated velocity. The allowed values are 10Hz-500Hz (and 0 to turn the fixed
     * frequency off).
     * 
     * The default values for Acquisition Count, Enable Quick Termination, Threshold Value and
     * Measurement Frequency are 128, false, 0 and 0.
     * 
     * @param int $acquisition_count
     * @param bool $enable_quick_termination
     * @param int $threshold_value
     * @param int $measurement_frequency
     * 
     * @return void
     */
    public function setConfiguration($acquisition_count, $enable_quick_termination, $threshold_value, $measurement_frequency)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $acquisition_count);
        $payload .= pack('C', intval((bool)$enable_quick_termination));
        $payload .= pack('C', $threshold_value);
        $payload .= pack('v', $measurement_frequency);

        $this->sendRequest(self::FUNCTION_SET_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the configuration as set by BrickletLaserRangeFinderV2::setConfiguration().
     * 
     * 
     * @return array
     */
    public function getConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_CONFIGURATION, $payload, 13);

        $payload = unpack('C1acquisition_count/C1enable_quick_termination/C1threshold_value/v1measurement_frequency', $data);

        $ret['acquisition_count'] = $payload['acquisition_count'];
        $ret['enable_quick_termination'] = (bool)$payload['enable_quick_termination'];
        $ret['threshold_value'] = $payload['threshold_value'];
        $ret['measurement_frequency'] = $payload['measurement_frequency'];

        return $ret;
    }

    /**
     * Sets the length of a `moving averaging <https://en.wikipedia.org/wiki/Moving_average>`__
     * for the distance and velocity.
     * 
     * Setting the length to 0 will turn the averaging completely off. With less
     * averaging, there is more noise on the data.
     * 
     * @param int $distance_average_length
     * @param int $velocity_average_length
     * 
     * @return void
     */
    public function setMovingAverage($distance_average_length, $velocity_average_length)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $distance_average_length);
        $payload .= pack('C', $velocity_average_length);

        $this->sendRequest(self::FUNCTION_SET_MOVING_AVERAGE, $payload, 0);
    }

    /**
     * Returns the length moving average as set by BrickletLaserRangeFinderV2::setMovingAverage().
     * 
     * 
     * @return array
     */
    public function getMovingAverage()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_MOVING_AVERAGE, $payload, 10);

        $payload = unpack('C1distance_average_length/C1velocity_average_length', $data);

        $ret['distance_average_length'] = $payload['distance_average_length'];
        $ret['velocity_average_length'] = $payload['velocity_average_length'];

        return $ret;
    }

    /**
     * The offset is added to the measured distance.
     * It is saved in non-volatile memory, you only have to set it once.
     * 
     * The Bricklet comes with a per-sensor factory-calibrated offset value,
     * you should not have to call this function.
     * 
     * If you want to re-calibrate the offset you first have to set it to 0.
     * Calculate the offset by measuring the distance to a known distance
     * and set it again.
     * 
     * @param int $offset
     * 
     * @return void
     */
    public function setOffsetCalibration($offset)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $offset);

        $this->sendRequest(self::FUNCTION_SET_OFFSET_CALIBRATION, $payload, 0);
    }

    /**
     * Returns the offset value as set by BrickletLaserRangeFinderV2::setOffsetCalibration().
     * 
     * 
     * @return int
     */
    public function getOffsetCalibration()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_OFFSET_CALIBRATION, $payload, 10);

        $payload = unpack('v1offset', $data);

        return IPConnection::fixUnpackedInt16($payload, 'offset');
    }

    /**
     * Configures the distance LED to be either turned off, turned on, blink in
     * heartbeat mode or show the distance (brighter = object is nearer).
     * 
     * @param int $config
     * 
     * @return void
     */
    public function setDistanceLEDConfig($config)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $config);

        $this->sendRequest(self::FUNCTION_SET_DISTANCE_LED_CONFIG, $payload, 0);
    }

    /**
     * Returns the LED configuration as set by BrickletLaserRangeFinderV2::setDistanceLEDConfig()
     * 
     * 
     * @return int
     */
    public function getDistanceLEDConfig()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_DISTANCE_LED_CONFIG, $payload, 9);

        $payload = unpack('C1config', $data);

        return $payload['config'];
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
     * Returns the current bootloader mode, see BrickletLaserRangeFinderV2::setBootloaderMode().
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
     * Sets the firmware pointer for BrickletLaserRangeFinderV2::writeFirmware(). The pointer has
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
     * BrickletLaserRangeFinderV2::setWriteFirmwarePointer() before. The firmware is written
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
     * Returns the configuration as set by BrickletLaserRangeFinderV2::setStatusLEDConfig()
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
    public function callbackWrapperDistance($data)
    {
        $payload = unpack('v1distance', $data);
        $payload['distance'] = IPConnection::fixUnpackedInt16($payload, 'distance');

        if (array_key_exists(self::CALLBACK_DISTANCE, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_DISTANCE];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_DISTANCE];

            call_user_func($function, $payload['distance'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperVelocity($data)
    {
        $payload = unpack('v1velocity', $data);
        $payload['velocity'] = IPConnection::fixUnpackedInt16($payload, 'velocity');

        if (array_key_exists(self::CALLBACK_VELOCITY, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_VELOCITY];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_VELOCITY];

            call_user_func($function, $payload['velocity'], $user_data);
        }
    }
}

?>
