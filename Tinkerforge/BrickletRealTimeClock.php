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
class BrickletRealTimeClock extends Device
{

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletRealTimeClock::setDateTimeCallbackPeriod(). The parameters are the same
     * as for BrickletRealTimeClock::getDateTime() and BrickletRealTimeClock::getTimestamp() combined.
     * 
     * The BrickletRealTimeClock::CALLBACK_DATE_TIME callback is only triggered if the date or time changed
     * since the last triggering.
     * 
     * .. versionadded:: 2.0.1$nbsp;(Plugin)
     */
    const CALLBACK_DATE_TIME = 10;

    /**
     * This callback is triggered every time the current date and time matches the
     * configured alarm (see BrickletRealTimeClock::setAlarm()). The parameters are the same
     * as for BrickletRealTimeClock::getDateTime() and BrickletRealTimeClock::getTimestamp() combined.
     * 
     * .. versionadded:: 2.0.1$nbsp;(Plugin)
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
    const FUNCTION_SET_DATE_TIME_CALLBACK_PERIOD = 6;

    /**
     * @internal
     */
    const FUNCTION_GET_DATE_TIME_CALLBACK_PERIOD = 7;

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

    const DEVICE_IDENTIFIER = 268;

    const DEVICE_DISPLAY_NAME = 'Real-Time Clock Bricklet';

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

        $this->response_expected[self::FUNCTION_SET_DATE_TIME] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_DATE_TIME] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_TIMESTAMP] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_OFFSET] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_OFFSET] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_DATE_TIME_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_DATE_TIME_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ALARM] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_ALARM] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
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
     * real-time clock.
     * 
     * 
     * @return array
     */
    public function getDateTime()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_DATE_TIME, $payload, 17);

        $payload = unpack('v1year/C1month/C1day/C1hour/C1minute/C1second/C1centisecond/C1weekday', $data);

        $ret['year'] = $payload['year'];
        $ret['month'] = $payload['month'];
        $ret['day'] = $payload['day'];
        $ret['hour'] = $payload['hour'];
        $ret['minute'] = $payload['minute'];
        $ret['second'] = $payload['second'];
        $ret['centisecond'] = $payload['centisecond'];
        $ret['weekday'] = $payload['weekday'];

        return $ret;
    }

    /**
     * Returns the current date and the time of the real-time clock.
     * The timestamp has an effective resolution of hundredths of a
     * second and is an offset to 2000-01-01 00:00:00.000.
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
     * Returns the offset as set by BrickletRealTimeClock::setOffset().
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
     * Sets the period with which the BrickletRealTimeClock::CALLBACK_DATE_TIME callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * The BrickletRealTimeClock::CALLBACK_DATE_TIME Callback is only triggered if the date or time changed
     * since the last triggering.
     * 
     * .. versionadded:: 2.0.1$nbsp;(Plugin)
     * 
     * @param int $period
     * 
     * @return void
     */
    public function setDateTimeCallbackPeriod($period)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);

        $this->sendRequest(self::FUNCTION_SET_DATE_TIME_CALLBACK_PERIOD, $payload, 0);
    }

    /**
     * Returns the period as set by BrickletRealTimeClock::setDateTimeCallbackPeriod().
     * 
     * .. versionadded:: 2.0.1$nbsp;(Plugin)
     * 
     * 
     * @return int
     */
    public function getDateTimeCallbackPeriod()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_DATE_TIME_CALLBACK_PERIOD, $payload, 12);

        $payload = unpack('V1period', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'period');
    }

    /**
     * Configures a repeatable alarm. The BrickletRealTimeClock::CALLBACK_ALARM callback is triggered if the
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
     * .. versionadded:: 2.0.1$nbsp;(Plugin)
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
     * Returns the alarm configuration as set by BrickletRealTimeClock::setAlarm().
     * 
     * .. versionadded:: 2.0.1$nbsp;(Plugin)
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
