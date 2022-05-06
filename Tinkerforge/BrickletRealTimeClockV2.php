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
 * Battery-backed real-time clock
 */
class BrickletRealTimeClockV2 extends Device
{

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletRealTimeClockV2::setDateTimeCallbackConfiguration(). The parameters are the
     * same as for BrickletRealTimeClockV2::getDateTime().
     */
    const CALLBACK_DATE_TIME = 10;

    /**
     * This callback is triggered every time the current date and time matches the
     * configured alarm (see BrickletRealTimeClockV2::setAlarm()). The parameters are the same
     * as for BrickletRealTimeClockV2::getDateTime().
     */
    const CALLBACK_ALARM = 11;


    /**
     * @internal
     */
    const FUNCTION_SET_DATE_TIME = 1;

    /**
     * @internal
     */
    const FUNCTION_GET_DATE_TIME = 2;

    /**
     * @internal
     */
    const FUNCTION_GET_TIMESTAMP = 3;

    /**
     * @internal
     */
    const FUNCTION_SET_OFFSET = 4;

    /**
     * @internal
     */
    const FUNCTION_GET_OFFSET = 5;

    /**
     * @internal
     */
    const FUNCTION_SET_DATE_TIME_CALLBACK_CONFIGURATION = 6;

    /**
     * @internal
     */
    const FUNCTION_GET_DATE_TIME_CALLBACK_CONFIGURATION = 7;

    /**
     * @internal
     */
    const FUNCTION_SET_ALARM = 8;

    /**
     * @internal
     */
    const FUNCTION_GET_ALARM = 9;

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

    const WEEKDAY_MONDAY = 1;
    const WEEKDAY_TUESDAY = 2;
    const WEEKDAY_WEDNESDAY = 3;
    const WEEKDAY_THURSDAY = 4;
    const WEEKDAY_FRIDAY = 5;
    const WEEKDAY_SATURDAY = 6;
    const WEEKDAY_SUNDAY = 7;
    const ALARM_MATCH_DISABLED = -1;
    const ALARM_INTERVAL_DISABLED = -1;
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

    const DEVICE_IDENTIFIER = 2106;

    const DEVICE_DISPLAY_NAME = 'Real-Time Clock Bricklet 2.0';

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

        $this->response_expected[self::FUNCTION_SET_DATE_TIME] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_DATE_TIME] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_TIMESTAMP] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_OFFSET] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_OFFSET] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_DATE_TIME_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_DATE_TIME_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ALARM] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_ALARM] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
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

        $this->callback_wrappers[self::CALLBACK_DATE_TIME] = array(25, 'callbackWrapperDateTime');
        $this->callback_wrappers[self::CALLBACK_ALARM] = array(25, 'callbackWrapperAlarm');

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
     * Sets the current date (including weekday) and the current time.
     * 
     * If the backup battery is installed then the real-time clock keeps date and
     * time even if the Bricklet is not powered by a Brick.
     * 
     * The real-time clock handles leap year and inserts the 29th of February
     * accordingly. But leap seconds, time zones and daylight saving time are not
     * handled.
     * 
     * @param int $year
     * @param int $month
     * @param int $day
     * @param int $hour
     * @param int $minute
     * @param int $second
     * @param int $centisecond
     * @param int $weekday
     * 
     * @return void
     */
    public function setDateTime($year, $month, $day, $hour, $minute, $second, $centisecond, $weekday)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $year);
        $payload .= pack('C', $month);
        $payload .= pack('C', $day);
        $payload .= pack('C', $hour);
        $payload .= pack('C', $minute);
        $payload .= pack('C', $second);
        $payload .= pack('C', $centisecond);
        $payload .= pack('C', $weekday);

        $this->sendRequest(self::FUNCTION_SET_DATE_TIME, $payload, 0);
    }

    /**
     * Returns the current date (including weekday) and the current time of the
     * real-time.
     * 
     * The timestamp represents the current date and the the current time of the
     * real-time clock converted to milliseconds and is an offset to 2000-01-01 00:00:00.0000.
     * 
     * 
     * @return array
     */
    public function getDateTime()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_DATE_TIME, $payload, 25);

        $payload = unpack('v1year/C1month/C1day/C1hour/C1minute/C1second/C1centisecond/C1weekday/C8timestamp', $data);

        $ret['year'] = $payload['year'];
        $ret['month'] = $payload['month'];
        $ret['day'] = $payload['day'];
        $ret['hour'] = $payload['hour'];
        $ret['minute'] = $payload['minute'];
        $ret['second'] = $payload['second'];
        $ret['centisecond'] = $payload['centisecond'];
        $ret['weekday'] = $payload['weekday'];
        $ret['timestamp'] = IPConnection::fixUnpackedInt64($payload, 'timestamp');

        return $ret;
    }

    /**
     * Returns the current date and the time of the real-time clock converted to
     * milliseconds. The timestamp has an effective resolution of hundredths of a
     * second and is an offset to 2000-01-01 00:00:00.0000.
     * 
     * 
     * @return int
     */
    public function getTimestamp()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_TIMESTAMP, $payload, 16);

        $payload = unpack('C8timestamp', $data);

        return IPConnection::fixUnpackedInt64($payload, 'timestamp');
    }

    /**
     * Sets the offset the real-time clock should compensate for in 2.17 ppm steps
     * between -277.76 ppm (-128) and +275.59 ppm (127).
     * 
     * The real-time clock time can deviate from the actual time due to the frequency
     * deviation of its 32.768 kHz crystal. Even without compensation (factory
     * default) the resulting time deviation should be at most ±20 ppm (±52.6
     * seconds per month).
     * 
     * This deviation can be calculated by comparing the same duration measured by the
     * real-time clock (``rtc_duration``) an accurate reference clock
     * (``ref_duration``).
     * 
     * For best results the configured offset should be set to 0 ppm first and then a
     * duration of at least 6 hours should be measured.
     * 
     * The new offset (``new_offset``) can be calculated from the currently configured
     * offset (``current_offset``) and the measured durations as follow::
     * 
     *   new_offset = current_offset - round(1000000 * (rtc_duration - ref_duration) / rtc_duration / 2.17)
     * 
     * If you want to calculate the offset, then we recommend using the calibration
     * dialog in Brick Viewer, instead of doing it manually.
     * 
     * The offset is saved in the EEPROM of the Bricklet and only needs to be
     * configured once.
     * 
     * @param int $offset
     * 
     * @return void
     */
    public function setOffset($offset)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('c', $offset);

        $this->sendRequest(self::FUNCTION_SET_OFFSET, $payload, 0);
    }

    /**
     * Returns the offset as set by BrickletRealTimeClockV2::setOffset().
     * 
     * 
     * @return int
     */
    public function getOffset()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_OFFSET, $payload, 9);

        $payload = unpack('c1offset', $data);

        return $payload['offset'];
    }

    /**
     * Sets the period with which the BrickletRealTimeClockV2::CALLBACK_DATE_TIME callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * @param int $period
     * 
     * @return void
     */
    public function setDateTimeCallbackConfiguration($period)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);

        $this->sendRequest(self::FUNCTION_SET_DATE_TIME_CALLBACK_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the period as set by BrickletRealTimeClockV2::setDateTimeCallbackConfiguration().
     * 
     * 
     * @return int
     */
    public function getDateTimeCallbackConfiguration()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_DATE_TIME_CALLBACK_CONFIGURATION, $payload, 12);

        $payload = unpack('V1period', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'period');
    }

    /**
     * Configures a repeatable alarm. The BrickletRealTimeClockV2::CALLBACK_ALARM callback is triggered if the
     * current date and time matches the configured alarm.
     * 
     * Setting a parameter to -1 means that it should be disabled and doesn't take part
     * in the match. Setting all parameters to -1 disables the alarm completely.
     * 
     * For example, to make the alarm trigger every day at 7:30 AM it can be
     * configured as (-1, -1, 7, 30, -1, -1, -1). The hour is set to match 7 and the
     * minute is set to match 30. The alarm is triggered if all enabled parameters
     * match.
     * 
     * The interval has a special role. It allows to make the alarm reconfigure itself.
     * This is useful if you need a repeated alarm that cannot be expressed by matching
     * the current date and time. For example, to make the alarm trigger every 23
     * seconds it can be configured as (-1, -1, -1, -1, -1, -1, 23). Internally the
     * Bricklet will take the current date and time, add 23 seconds to it and set the
     * result as its alarm. The first alarm will be triggered 23 seconds after the
     * call. Because the interval is not -1, the Bricklet will do the same again
     * internally, take the current date and time, add 23 seconds to it and set that
     * as its alarm. This results in a repeated alarm that triggers every 23 seconds.
     * 
     * The interval can also be used in combination with the other parameters. For
     * example, configuring the alarm as (-1, -1, 7, 30, -1, -1, 300) results in an
     * alarm that triggers every day at 7:30 AM and is then repeated every 5 minutes.
     * 
     * @param int $month
     * @param int $day
     * @param int $hour
     * @param int $minute
     * @param int $second
     * @param int $weekday
     * @param int $interval
     * 
     * @return void
     */
    public function setAlarm($month, $day, $hour, $minute, $second, $weekday, $interval)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('c', $month);
        $payload .= pack('c', $day);
        $payload .= pack('c', $hour);
        $payload .= pack('c', $minute);
        $payload .= pack('c', $second);
        $payload .= pack('c', $weekday);
        $payload .= pack('V', $interval);

        $this->sendRequest(self::FUNCTION_SET_ALARM, $payload, 0);
    }

    /**
     * Returns the alarm configuration as set by BrickletRealTimeClockV2::setAlarm().
     * 
     * 
     * @return array
     */
    public function getAlarm()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ALARM, $payload, 18);

        $payload = unpack('c1month/c1day/c1hour/c1minute/c1second/c1weekday/V1interval', $data);

        $ret['month'] = $payload['month'];
        $ret['day'] = $payload['day'];
        $ret['hour'] = $payload['hour'];
        $ret['minute'] = $payload['minute'];
        $ret['second'] = $payload['second'];
        $ret['weekday'] = $payload['weekday'];
        $ret['interval'] = IPConnection::fixUnpackedInt32($payload, 'interval');

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
     * Returns the current bootloader mode, see BrickletRealTimeClockV2::setBootloaderMode().
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
     * Sets the firmware pointer for BrickletRealTimeClockV2::writeFirmware(). The pointer has
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
     * BrickletRealTimeClockV2::setWriteFirmwarePointer() before. The firmware is written
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
     * Returns the configuration as set by BrickletRealTimeClockV2::setStatusLEDConfig()
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
    public function callbackWrapperDateTime($data)
    {
        $payload = unpack('v1year/C1month/C1day/C1hour/C1minute/C1second/C1centisecond/C1weekday/C8timestamp', $data);
        $payload['timestamp'] = IPConnection::fixUnpackedInt64($payload, 'timestamp');

        if (array_key_exists(self::CALLBACK_DATE_TIME, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_DATE_TIME];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_DATE_TIME];

            call_user_func($function, $payload['year'], $payload['month'], $payload['day'], $payload['hour'], $payload['minute'], $payload['second'], $payload['centisecond'], $payload['weekday'], $payload['timestamp'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperAlarm($data)
    {
        $payload = unpack('v1year/C1month/C1day/C1hour/C1minute/C1second/C1centisecond/C1weekday/C8timestamp', $data);
        $payload['timestamp'] = IPConnection::fixUnpackedInt64($payload, 'timestamp');

        if (array_key_exists(self::CALLBACK_ALARM, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_ALARM];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_ALARM];

            call_user_func($function, $payload['year'], $payload['month'], $payload['day'], $payload['hour'], $payload['minute'], $payload['second'], $payload['centisecond'], $payload['weekday'], $payload['timestamp'], $user_data);
        }
    }
}

?>
