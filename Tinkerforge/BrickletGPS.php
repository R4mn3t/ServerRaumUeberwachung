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
class BrickletGPS extends Device
{

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletGPS::setCoordinatesCallbackPeriod(). The parameters are the same
     * as for BrickletGPS::getCoordinates().
     * 
     * The BrickletGPS::CALLBACK_COORDINATES callback is only triggered if the coordinates changed
     * since the last triggering and if there is currently a fix as indicated by
     * BrickletGPS::getStatus().
     */
    const CALLBACK_COORDINATES = 17;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletGPS::setStatusCallbackPeriod(). The parameters are the same
     * as for BrickletGPS::getStatus().
     * 
     * The BrickletGPS::CALLBACK_STATUS callback is only triggered if the status changed since the
     * last triggering.
     */
    const CALLBACK_STATUS = 18;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletGPS::setAltitudeCallbackPeriod(). The parameters are the same
     * as for BrickletGPS::getAltitude().
     * 
     * The BrickletGPS::CALLBACK_ALTITUDE callback is only triggered if the altitude changed since
     * the last triggering and if there is currently a fix as indicated by
     * BrickletGPS::getStatus().
     */
    const CALLBACK_ALTITUDE = 19;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletGPS::setMotionCallbackPeriod(). The parameters are the same
     * as for BrickletGPS::getMotion().
     * 
     * The BrickletGPS::CALLBACK_MOTION callback is only triggered if the motion changed since the
     * last triggering and if there is currently a fix as indicated by
     * BrickletGPS::getStatus().
     */
    const CALLBACK_MOTION = 20;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletGPS::setDateTimeCallbackPeriod(). The parameters are the same
     * as for BrickletGPS::getDateTime().
     * 
     * The BrickletGPS::CALLBACK_DATE_TIME callback is only triggered if the date or time changed
     * since the last triggering.
     */
    const CALLBACK_DATE_TIME = 21;


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
    const FUNCTION_SET_COORDINATES_CALLBACK_PERIOD = 7;

    /**
     * @internal
     */
    const FUNCTION_GET_COORDINATES_CALLBACK_PERIOD = 8;

    /**
     * @internal
     */
    const FUNCTION_SET_STATUS_CALLBACK_PERIOD = 9;

    /**
     * @internal
     */
    const FUNCTION_GET_STATUS_CALLBACK_PERIOD = 10;

    /**
     * @internal
     */
    const FUNCTION_SET_ALTITUDE_CALLBACK_PERIOD = 11;

    /**
     * @internal
     */
    const FUNCTION_GET_ALTITUDE_CALLBACK_PERIOD = 12;

    /**
     * @internal
     */
    const FUNCTION_SET_MOTION_CALLBACK_PERIOD = 13;

    /**
     * @internal
     */
    const FUNCTION_GET_MOTION_CALLBACK_PERIOD = 14;

    /**
     * @internal
     */
    const FUNCTION_SET_DATE_TIME_CALLBACK_PERIOD = 15;

    /**
     * @internal
     */
    const FUNCTION_GET_DATE_TIME_CALLBACK_PERIOD = 16;

    /**
     * @internal
     */
    const FUNCTION_GET_IDENTITY = 255;

    const FIX_NO_FIX = 1;
    const FIX_2D_FIX = 2;
    const FIX_3D_FIX = 3;
    const RESTART_TYPE_HOT_START = 0;
    const RESTART_TYPE_WARM_START = 1;
    const RESTART_TYPE_COLD_START = 2;
    const RESTART_TYPE_FACTORY_RESET = 3;

    const DEVICE_IDENTIFIER = 222;

    const DEVICE_DISPLAY_NAME = 'GPS Bricklet';

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
        $this->response_expected[self::FUNCTION_GET_IDENTITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;

        $this->callback_wrappers[self::CALLBACK_COORDINATES] = array(26, 'callbackWrapperCoordinates');
        $this->callback_wrappers[self::CALLBACK_STATUS] = array(11, 'callbackWrapperStatus');
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
     * PDOP, HDOP and VDOP are the dilution of precision (DOP) values. They specify
     * the additional multiplicative effect of GPS satellite geometry on GPS
     * precision. See
     * `here <https://en.wikipedia.org/wiki/Dilution_of_precision_(GPS)>`__
     * for more information.
     * 
     * EPE is the "Estimated Position Error". This is not the
     * absolute maximum error, it is the error with a specific confidence. See
     * `here <https://www.nps.gov/gis/gps/WhatisEPE.html>`__ for more information.
     * 
     * This data is only valid if there is currently a fix as indicated by
     * BrickletGPS::getStatus().
     * 
     * 
     * @return array
     */
    public function getCoordinates()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_COORDINATES, $payload, 26);

        $payload = unpack('V1latitude/c1ns/V1longitude/c1ew/v1pdop/v1hdop/v1vdop/v1epe', $data);

        $ret['latitude'] = IPConnection::fixUnpackedUInt32($payload, 'latitude');
        $ret['ns'] = chr($payload['ns']);
        $ret['longitude'] = IPConnection::fixUnpackedUInt32($payload, 'longitude');
        $ret['ew'] = chr($payload['ew']);
        $ret['pdop'] = $payload['pdop'];
        $ret['hdop'] = $payload['hdop'];
        $ret['vdop'] = $payload['vdop'];
        $ret['epe'] = $payload['epe'];

        return $ret;
    }

    /**
     * Returns the current fix status, the number of satellites that are in view and
     * the number of satellites that are currently used.
     * 
     * Possible fix status values can be:
     * 
     * <code>
     *  "Value", "Description"
     * 
     *  "1", "No Fix, BrickletGPS::getCoordinates(), BrickletGPS::getAltitude() and BrickletGPS::getMotion() return invalid data"
     *  "2", "2D Fix, only BrickletGPS::getCoordinates() and BrickletGPS::getMotion() return valid data"
     *  "3", "3D Fix, BrickletGPS::getCoordinates(), BrickletGPS::getAltitude() and BrickletGPS::getMotion() return valid data"
     * </code>
     * 
     * There is also a :ref:`blue LED <gps_bricklet_fix_led>` on the Bricklet that
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

        $data = $this->sendRequest(self::FUNCTION_GET_STATUS, $payload, 11);

        $payload = unpack('C1fix/C1satellites_view/C1satellites_used', $data);

        $ret['fix'] = $payload['fix'];
        $ret['satellites_view'] = $payload['satellites_view'];
        $ret['satellites_used'] = $payload['satellites_used'];

        return $ret;
    }

    /**
     * Returns the current altitude and corresponding geoidal separation.
     * 
     * This data is only valid if there is currently a fix as indicated by
     * BrickletGPS::getStatus().
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
     * BrickletGPS::getStatus().
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
     * Sets the period with which the BrickletGPS::CALLBACK_COORDINATES callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * The BrickletGPS::CALLBACK_COORDINATES callback is only triggered if the coordinates changed
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
     * Returns the period as set by BrickletGPS::setCoordinatesCallbackPeriod().
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
     * Sets the period with which the BrickletGPS::CALLBACK_STATUS callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * The BrickletGPS::CALLBACK_STATUS callback is only triggered if the status changed since the
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
     * Returns the period as set by BrickletGPS::setStatusCallbackPeriod().
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
     * Sets the period with which the BrickletGPS::CALLBACK_ALTITUDE callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * The BrickletGPS::CALLBACK_ALTITUDE callback is only triggered if the altitude changed since
     * the last triggering.
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
     * Returns the period as set by BrickletGPS::setAltitudeCallbackPeriod().
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
     * Sets the period with which the BrickletGPS::CALLBACK_MOTION callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * The BrickletGPS::CALLBACK_MOTION callback is only triggered if the motion changed since the
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
     * Returns the period as set by BrickletGPS::setMotionCallbackPeriod().
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
     * Sets the period with which the BrickletGPS::CALLBACK_DATE_TIME callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * The BrickletGPS::CALLBACK_DATE_TIME callback is only triggered if the date or time changed
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
     * Returns the period as set by BrickletGPS::setDateTimeCallbackPeriod().
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
    public function callbackWrapperCoordinates($data)
    {
        $payload = unpack('V1latitude/c1ns/V1longitude/c1ew/v1pdop/v1hdop/v1vdop/v1epe', $data);
        $payload['latitude'] = IPConnection::fixUnpackedUInt32($payload, 'latitude');
        $payload['ns'] = chr($payload['ns']);
        $payload['longitude'] = IPConnection::fixUnpackedUInt32($payload, 'longitude');
        $payload['ew'] = chr($payload['ew']);

        if (array_key_exists(self::CALLBACK_COORDINATES, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_COORDINATES];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_COORDINATES];

            call_user_func($function, $payload['latitude'], $payload['ns'], $payload['longitude'], $payload['ew'], $payload['pdop'], $payload['hdop'], $payload['vdop'], $payload['epe'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperStatus($data)
    {
        $payload = unpack('C1fix/C1satellites_view/C1satellites_used', $data);

        if (array_key_exists(self::CALLBACK_STATUS, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_STATUS];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_STATUS];

            call_user_func($function, $payload['fix'], $payload['satellites_view'], $payload['satellites_used'], $user_data);
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
