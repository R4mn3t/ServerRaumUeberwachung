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
 * Determine position, velocity and altitude using GPS
 */
class BrickletGPSV2 extends Device
{

    /**
     * This callback is triggered precisely once per second,
     * see `PPS <https://en.wikipedia.org/wiki/Pulse-per-second_signal>`__.
     * 
     * The precision of two subsequent pulses will be skewed because
     * of the latency in the USB/RS485/Ethernet connection. But in the
     * long run this will be very precise. For example a count of
     * 3600 pulses will take exactly 1 hour.
     */
    const CALLBACK_PULSE_PER_SECOND = 21;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletGPSV2::setCoordinatesCallbackPeriod(). The parameters are the same
     * as for BrickletGPSV2::getCoordinates().
     * 
     * The BrickletGPSV2::CALLBACK_COORDINATES callback is only triggered if the coordinates changed
     * since the last triggering and if there is currently a fix as indicated by
     * BrickletGPSV2::getStatus().
     */
    const CALLBACK_COORDINATES = 22;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletGPSV2::setStatusCallbackPeriod(). The parameters are the same
     * as for BrickletGPSV2::getStatus().
     * 
     * The BrickletGPSV2::CALLBACK_STATUS callback is only triggered if the status changed since the
     * last triggering.
     */
    const CALLBACK_STATUS = 23;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletGPSV2::setAltitudeCallbackPeriod(). The parameters are the same
     * as for BrickletGPSV2::getAltitude().
     * 
     * The BrickletGPSV2::CALLBACK_ALTITUDE callback is only triggered if the altitude changed since the
     * last triggering and if there is currently a fix as indicated by
     * BrickletGPSV2::getStatus().
     */
    const CALLBACK_ALTITUDE = 24;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletGPSV2::setMotionCallbackPeriod(). The parameters are the same
     * as for BrickletGPSV2::getMotion().
     * 
     * The BrickletGPSV2::CALLBACK_MOTION callback is only triggered if the motion changed since the
     * last triggering and if there is currently a fix as indicated by
     * BrickletGPSV2::getStatus().
     */
    const CALLBACK_MOTION = 25;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletGPSV2::setDateTimeCallbackPeriod(). The parameters are the same
     * as for BrickletGPSV2::getDateTime().
     * 
     * The BrickletGPSV2::CALLBACK_DATE_TIME callback is only triggered if the date or time changed
     * since the last triggering.
     */
    const CALLBACK_DATE_TIME = 26;


    /**
     * @internal
     */
    const FUNCTION_GET_COORDINATES = 1;

    /**
     * @internal
     */
    const FUNCTION_GET_STATUS = 2;

    /**
     * @internal
     */
    const FUNCTION_GET_ALTITUDE = 3;

    /**
     * @internal
     */
    const FUNCTION_GET_MOTION = 4;

    /**
     * @internal
     */
    const FUNCTION_GET_DATE_TIME = 5;

    /**
     * @internal
     */
    const FUNCTION_RESTART = 6;

    /**
     * @internal
     */
    const FUNCTION_GET_SATELLITE_SYSTEM_STATUS_LOW_LEVEL = 7;

    /**
     * @internal
     */
    const FUNCTION_GET_SATELLITE_STATUS = 8;

    /**
     * @internal
     */
    const FUNCTION_SET_FIX_LED_CONFIG = 9;

    /**
     * @internal
     */
    const FUNCTION_GET_FIX_LED_CONFIG = 10;

    /**
     * @internal
     */
    const FUNCTION_SET_COORDINATES_CALLBACK_PERIOD = 11;

    /**
     * @internal
     */
    const FUNCTION_GET_COORDINATES_CALLBACK_PERIOD = 12;

    /**
     * @internal
     */
    const FUNCTION_SET_STATUS_CALLBACK_PERIOD = 13;

    /**
     * @internal
     */
    const FUNCTION_GET_STATUS_CALLBACK_PERIOD = 14;

    /**
     * @internal
     */
    const FUNCTION_SET_ALTITUDE_CALLBACK_PERIOD = 15;

    /**
     * @internal
     */
    const FUNCTION_GET_ALTITUDE_CALLBACK_PERIOD = 16;

    /**
     * @internal
     */
    const FUNCTION_SET_MOTION_CALLBACK_PERIOD = 17;

    /**
     * @internal
     */
    const FUNCTION_GET_MOTION_CALLBACK_PERIOD = 18;

    /**
     * @internal
     */
    const FUNCTION_SET_DATE_TIME_CALLBACK_PERIOD = 19;

    /**
     * @internal
     */
    const FUNCTION_GET_DATE_TIME_CALLBACK_PERIOD = 20;

    /**
     * @internal
     */
    const FUNCTION_SET_SBAS_CONFIG = 27;

    /**
     * @internal
     */
    const FUNCTION_GET_SBAS_CONFIG = 28;

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

    const RESTART_TYPE_HOT_START = 0;
    const RESTART_TYPE_WARM_START = 1;
    const RESTART_TYPE_COLD_START = 2;
    const RESTART_TYPE_FACTORY_RESET = 3;
    const SATELLITE_SYSTEM_GPS = 0;
    const SATELLITE_SYSTEM_GLONASS = 1;
    const SATELLITE_SYSTEM_GALILEO = 2;
    const FIX_NO_FIX = 1;
    const FIX_2D_FIX = 2;
    const FIX_3D_FIX = 3;
    const FIX_LED_CONFIG_OFF = 0;
    const FIX_LED_CONFIG_ON = 1;
    const FIX_LED_CONFIG_SHOW_HEARTBEAT = 2;
    const FIX_LED_CONFIG_SHOW_FIX = 3;
    const FIX_LED_CONFIG_SHOW_PPS = 4;
    const SBAS_ENABLED = 0;
    const SBAS_DISABLED = 1;
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

    const DEVICE_IDENTIFIER = 276;

    const DEVICE_DISPLAY_NAME = 'GPS Bricklet 2.0';

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

        $this->response_expected[self::FUNCTION_GET_COORDINATES] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_STATUS] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_ALTITUDE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_MOTION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_DATE_TIME] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_RESTART] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_SATELLITE_SYSTEM_STATUS_LOW_LEVEL] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_SATELLITE_STATUS] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_FIX_LED_CONFIG] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_FIX_LED_CONFIG] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_COORDINATES_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_COORDINATES_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_STATUS_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_STATUS_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ALTITUDE_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_ALTITUDE_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_MOTION_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_MOTION_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_DATE_TIME_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_DATE_TIME_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_SBAS_CONFIG] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_SBAS_CONFIG] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
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

        $this->callback_wrappers[self::CALLBACK_PULSE_PER_SECOND] = array(8, 'callbackWrapperPulsePerSecond');
        $this->callback_wrappers[self::CALLBACK_COORDINATES] = array(18, 'callbackWrapperCoordinates');
        $this->callback_wrappers[self::CALLBACK_STATUS] = array(10, 'callbackWrapperStatus');
        $this->callback_wrappers[self::CALLBACK_ALTITUDE] = array(16, 'callbackWrapperAltitude');
        $this->callback_wrappers[self::CALLBACK_MOTION] = array(16, 'callbackWrapperMotion');
        $this->callback_wrappers[self::CALLBACK_DATE_TIME] = array(16, 'callbackWrapperDateTime');

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
     * Returns the GPS coordinates. Latitude and longitude are given in the
     * ``DD.dddddd°`` format, the value 57123468 means 57.123468°.
     * The parameter ``ns`` and ``ew`` are the cardinal directions for
     * latitude and longitude. Possible values for ``ns`` and ``ew`` are 'N', 'S', 'E'
     * and 'W' (north, south, east and west).
     * 
     * This data is only valid if there is currently a fix as indicated by
     * BrickletGPSV2::getStatus().
     * 
     * 
     * @return array
     */
    public function getCoordinates()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_COORDINATES, $payload, 18);

        $payload = unpack('V1latitude/c1ns/V1longitude/c1ew', $data);

        $ret['latitude'] = IPConnection::fixUnpackedUInt32($payload, 'latitude');
        $ret['ns'] = chr($payload['ns']);
        $ret['longitude'] = IPConnection::fixUnpackedUInt32($payload, 'longitude');
        $ret['ew'] = chr($payload['ew']);

        return $ret;
    }

    /**
     * Returns if a fix is currently available as well as the, the number of
     * satellites that are in view.
     * 
     * There is also a :ref:`green LED <gps_v2_bricklet_fix_led>` on the Bricklet that
     * indicates the fix status.
     * 
     * 
     * @return array
     */
    public function getStatus()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_STATUS, $payload, 10);

        $payload = unpack('C1has_fix/C1satellites_view', $data);

        $ret['has_fix'] = (bool)$payload['has_fix'];
        $ret['satellites_view'] = $payload['satellites_view'];

        return $ret;
    }

    /**
     * Returns the current altitude and corresponding geoidal separation.
     * 
     * This data is only valid if there is currently a fix as indicated by
     * BrickletGPSV2::getStatus().
     * 
     * 
     * @return array
     */
    public function getAltitude()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ALTITUDE, $payload, 16);

        $payload = unpack('V1altitude/V1geoidal_separation', $data);

        $ret['altitude'] = IPConnection::fixUnpackedInt32($payload, 'altitude');
        $ret['geoidal_separation'] = IPConnection::fixUnpackedInt32($payload, 'geoidal_separation');

        return $ret;
    }

    /**
     * Returns the current course and speed. A course of 0° means the Bricklet is
     * traveling north bound and 90° means it is traveling east bound.
     * 
     * Please note that this only returns useful values if an actual movement
     * is present.
     * 
     * This data is only valid if there is currently a fix as indicated by
     * BrickletGPSV2::getStatus().
     * 
     * 
     * @return array
     */
    public function getMotion()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_MOTION, $payload, 16);

        $payload = unpack('V1course/V1speed', $data);

        $ret['course'] = IPConnection::fixUnpackedUInt32($payload, 'course');
        $ret['speed'] = IPConnection::fixUnpackedUInt32($payload, 'speed');

        return $ret;
    }

    /**
     * Returns the current date and time. The date is
     * given in the format ``ddmmyy`` and the time is given
     * in the format ``hhmmss.sss``. For example, 140713 means
     * 14.07.13 as date and 195923568 means 19:59:23.568 as time.
     * 
     * 
     * @return array
     */
    public function getDateTime()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_DATE_TIME, $payload, 16);

        $payload = unpack('V1date/V1time', $data);

        $ret['date'] = IPConnection::fixUnpackedUInt32($payload, 'date');
        $ret['time'] = IPConnection::fixUnpackedUInt32($payload, 'time');

        return $ret;
    }

    /**
     * Restarts the GPS Bricklet, the following restart types are available:
     * 
     * <code>
     *  "Value", "Description"
     * 
     *  "0", "Hot start (use all available data in the NV store)"
     *  "1", "Warm start (don't use ephemeris at restart)"
     *  "2", "Cold start (don't use time, position, almanacs and ephemeris at restart)"
     *  "3", "Factory reset (clear all system/user configurations at restart)"
     * </code>
     * 
     * @param int $restart_type
     * 
     * @return void
     */
    public function restart($restart_type)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $restart_type);

        $this->sendRequest(self::FUNCTION_RESTART, $payload, 0);
    }

    /**
     * Returns the
     * 
     * * satellite numbers list (up to 12 items)
     * * fix value,
     * * PDOP value,
     * * HDOP value and
     * * VDOP value
     * 
     * for a given satellite system. Currently GPS and GLONASS are supported, Galileo
     * is not yet supported.
     * 
     * The GPS and GLONASS satellites have unique numbers and the satellite list gives
     * the numbers of the satellites that are currently utilized. The number 0 is not
     * a valid satellite number and can be ignored in the list.
     * 
     * @param int $satellite_system
     * 
     * @return array
     */
    public function getSatelliteSystemStatusLowLevel($satellite_system)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('C', $satellite_system);

        $data = $this->sendRequest(self::FUNCTION_GET_SATELLITE_SYSTEM_STATUS_LOW_LEVEL, $payload, 28);

        $payload = unpack('C1satellite_numbers_length/C12satellite_numbers_data/C1fix/v1pdop/v1hdop/v1vdop', $data);

        $ret['satellite_numbers_length'] = $payload['satellite_numbers_length'];
        $ret['satellite_numbers_data'] = IPConnection::collectUnpackedArray($payload, 'satellite_numbers_data', 12);
        $ret['fix'] = $payload['fix'];
        $ret['pdop'] = $payload['pdop'];
        $ret['hdop'] = $payload['hdop'];
        $ret['vdop'] = $payload['vdop'];

        return $ret;
    }

    /**
     * Returns the current elevation, azimuth and SNR
     * for a given satellite and satellite system.
     * 
     * The satellite number here always goes from 1 to 32. For GLONASS it corresponds to
     * the satellites 65-96.
     * 
     * Galileo is not yet supported.
     * 
     * @param int $satellite_system
     * @param int $satellite_number
     * 
     * @return array
     */
    public function getSatelliteStatus($satellite_system, $satellite_number)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('C', $satellite_system);
        $payload .= pack('C', $satellite_number);

        $data = $this->sendRequest(self::FUNCTION_GET_SATELLITE_STATUS, $payload, 14);

        $payload = unpack('v1elevation/v1azimuth/v1snr', $data);

        $ret['elevation'] = IPConnection::fixUnpackedInt16($payload, 'elevation');
        $ret['azimuth'] = IPConnection::fixUnpackedInt16($payload, 'azimuth');
        $ret['snr'] = IPConnection::fixUnpackedInt16($payload, 'snr');

        return $ret;
    }

    /**
     * Sets the fix LED configuration. By default the LED shows if
     * the Bricklet got a GPS fix yet. If a fix is established the LED turns on.
     * If there is no fix then the LED is turned off.
     * 
     * You can also turn the LED permanently on/off, show a heartbeat or let it blink
     * in sync with the PPS (pulse per second) output of the GPS module.
     * 
     * If the Bricklet is in bootloader mode, the LED is off.
     * 
     * @param int $config
     * 
     * @return void
     */
    public function setFixLEDConfig($config)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $config);

        $this->sendRequest(self::FUNCTION_SET_FIX_LED_CONFIG, $payload, 0);
    }

    /**
     * Returns the configuration as set by BrickletGPSV2::setFixLEDConfig()
     * 
     * 
     * @return int
     */
    public function getFixLEDConfig()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_FIX_LED_CONFIG, $payload, 9);

        $payload = unpack('C1config', $data);

        return $payload['config'];
    }

    /**
     * Sets the period with which the BrickletGPSV2::CALLBACK_COORDINATES callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * The BrickletGPSV2::CALLBACK_COORDINATES callback is only triggered if the coordinates changed
     * since the last triggering.
     * 
     * @param int $period
     * 
     * @return void
     */
    public function setCoordinatesCallbackPeriod($period)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);

        $this->sendRequest(self::FUNCTION_SET_COORDINATES_CALLBACK_PERIOD, $payload, 0);
    }

    /**
     * Returns the period as set by BrickletGPSV2::setCoordinatesCallbackPeriod().
     * 
     * 
     * @return int
     */
    public function getCoordinatesCallbackPeriod()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_COORDINATES_CALLBACK_PERIOD, $payload, 12);

        $payload = unpack('V1period', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'period');
    }

    /**
     * Sets the period with which the BrickletGPSV2::CALLBACK_STATUS callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * The BrickletGPSV2::CALLBACK_STATUS callback is only triggered if the status changed since the
     * last triggering.
     * 
     * @param int $period
     * 
     * @return void
     */
    public function setStatusCallbackPeriod($period)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);

        $this->sendRequest(self::FUNCTION_SET_STATUS_CALLBACK_PERIOD, $payload, 0);
    }

    /**
     * Returns the period as set by BrickletGPSV2::setStatusCallbackPeriod().
     * 
     * 
     * @return int
     */
    public function getStatusCallbackPeriod()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_STATUS_CALLBACK_PERIOD, $payload, 12);

        $payload = unpack('V1period', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'period');
    }

    /**
     * Sets the period with which the BrickletGPSV2::CALLBACK_ALTITUDE callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * The BrickletGPSV2::CALLBACK_ALTITUDE callback is only triggered if the altitude changed since the
     * last triggering.
     * 
     * @param int $period
     * 
     * @return void
     */
    public function setAltitudeCallbackPeriod($period)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);

        $this->sendRequest(self::FUNCTION_SET_ALTITUDE_CALLBACK_PERIOD, $payload, 0);
    }

    /**
     * Returns the period as set by BrickletGPSV2::setAltitudeCallbackPeriod().
     * 
     * 
     * @return int
     */
    public function getAltitudeCallbackPeriod()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ALTITUDE_CALLBACK_PERIOD, $payload, 12);

        $payload = unpack('V1period', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'period');
    }

    /**
     * Sets the period with which the BrickletGPSV2::CALLBACK_MOTION callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * The BrickletGPSV2::CALLBACK_MOTION callback is only triggered if the motion changed since the
     * last triggering.
     * 
     * @param int $period
     * 
     * @return void
     */
    public function setMotionCallbackPeriod($period)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);

        $this->sendRequest(self::FUNCTION_SET_MOTION_CALLBACK_PERIOD, $payload, 0);
    }

    /**
     * Returns the period as set by BrickletGPSV2::setMotionCallbackPeriod().
     * 
     * 
     * @return int
     */
    public function getMotionCallbackPeriod()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_MOTION_CALLBACK_PERIOD, $payload, 12);

        $payload = unpack('V1period', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'period');
    }

    /**
     * Sets the period with which the BrickletGPSV2::CALLBACK_DATE_TIME callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * The BrickletGPSV2::CALLBACK_DATE_TIME callback is only triggered if the date or time changed
     * since the last triggering.
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
     * Returns the period as set by BrickletGPSV2::setDateTimeCallbackPeriod().
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
     * If `SBAS <https://en.wikipedia.org/wiki/GNSS_augmentation#Satellite-based_augmentation_system>`__ is enabled,
     * the position accuracy increases (if SBAS satellites are in view),
     * but the update rate is limited to 5Hz. With SBAS disabled the update rate is increased to 10Hz.
     * 
     * .. versionadded:: 2.0.2$nbsp;(Plugin)
     * 
     * @param int $sbas_config
     * 
     * @return void
     */
    public function setSBASConfig($sbas_config)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $sbas_config);

        $this->sendRequest(self::FUNCTION_SET_SBAS_CONFIG, $payload, 0);
    }

    /**
     * Returns the SBAS configuration as set by BrickletGPSV2::setSBASConfig()
     * 
     * .. versionadded:: 2.0.2$nbsp;(Plugin)
     * 
     * 
     * @return int
     */
    public function getSBASConfig()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_SBAS_CONFIG, $payload, 9);

        $payload = unpack('C1sbas_config', $data);

        return $payload['sbas_config'];
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
     * Returns the current bootloader mode, see BrickletGPSV2::setBootloaderMode().
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
     * Sets the firmware pointer for BrickletGPSV2::writeFirmware(). The pointer has
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
     * BrickletGPSV2::setWriteFirmwarePointer() before. The firmware is written
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
     * Returns the configuration as set by BrickletGPSV2::setStatusLEDConfig()
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
     * Returns the
     * 
     * * satellite numbers list (up to 12 items)
     * * fix value,
     * * PDOP value,
     * * HDOP value and
     * * VDOP value
     * 
     * for a given satellite system. Currently GPS and GLONASS are supported, Galileo
     * is not yet supported.
     * 
     * The GPS and GLONASS satellites have unique numbers and the satellite list gives
     * the numbers of the satellites that are currently utilized. The number 0 is not
     * a valid satellite number and can be ignored in the list.
     * 
     * @param int $satellite_system
     * 
     * @return array
     */
    public function getSatelliteSystemStatus($satellite_system)
    {
        $ret = $this->getSatelliteSystemStatusLowLevel($satellite_system);

        return array('satellite_numbers' => array_slice($ret['satellite_numbers_data'], 0, $ret['satellite_numbers_length']), 'fix' => $ret['fix'], 'pdop' => $ret['pdop'], 'hdop' => $ret['hdop'], 'vdop' => $ret['vdop']);
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
    public function callbackWrapperPulsePerSecond($data)
    {

        if (array_key_exists(self::CALLBACK_PULSE_PER_SECOND, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_PULSE_PER_SECOND];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_PULSE_PER_SECOND];

            call_user_func($function, $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperCoordinates($data)
    {
        $payload = unpack('V1latitude/c1ns/V1longitude/c1ew', $data);
        $payload['latitude'] = IPConnection::fixUnpackedUInt32($payload, 'latitude');
        $payload['ns'] = chr($payload['ns']);
        $payload['longitude'] = IPConnection::fixUnpackedUInt32($payload, 'longitude');
        $payload['ew'] = chr($payload['ew']);

        if (array_key_exists(self::CALLBACK_COORDINATES, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_COORDINATES];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_COORDINATES];

            call_user_func($function, $payload['latitude'], $payload['ns'], $payload['longitude'], $payload['ew'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperStatus($data)
    {
        $payload = unpack('C1has_fix/C1satellites_view', $data);
        $payload['has_fix'] = (bool)$payload['has_fix'];

        if (array_key_exists(self::CALLBACK_STATUS, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_STATUS];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_STATUS];

            call_user_func($function, $payload['has_fix'], $payload['satellites_view'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperAltitude($data)
    {
        $payload = unpack('V1altitude/V1geoidal_separation', $data);
        $payload['altitude'] = IPConnection::fixUnpackedInt32($payload, 'altitude');
        $payload['geoidal_separation'] = IPConnection::fixUnpackedInt32($payload, 'geoidal_separation');

        if (array_key_exists(self::CALLBACK_ALTITUDE, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_ALTITUDE];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_ALTITUDE];

            call_user_func($function, $payload['altitude'], $payload['geoidal_separation'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperMotion($data)
    {
        $payload = unpack('V1course/V1speed', $data);
        $payload['course'] = IPConnection::fixUnpackedUInt32($payload, 'course');
        $payload['speed'] = IPConnection::fixUnpackedUInt32($payload, 'speed');

        if (array_key_exists(self::CALLBACK_MOTION, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_MOTION];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_MOTION];

            call_user_func($function, $payload['course'], $payload['speed'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperDateTime($data)
    {
        $payload = unpack('V1date/V1time', $data);
        $payload['date'] = IPConnection::fixUnpackedUInt32($payload, 'date');
        $payload['time'] = IPConnection::fixUnpackedUInt32($payload, 'time');

        if (array_key_exists(self::CALLBACK_DATE_TIME, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_DATE_TIME];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_DATE_TIME];

            call_user_func($function, $payload['date'], $payload['time'], $user_data);
        }
    }
}

?>
