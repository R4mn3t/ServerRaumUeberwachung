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
class BrickletLaserRangeFinder extends Device
{

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletLaserRangeFinder::setDistanceCallbackPeriod(). The parameter is the distance
     * value of the sensor.
     * 
     * The BrickletLaserRangeFinder::CALLBACK_DISTANCE callback is only triggered if the distance value has changed
     * since the last triggering.
     */
    const CALLBACK_DISTANCE = 20;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletLaserRangeFinder::setVelocityCallbackPeriod(). The parameter is the velocity
     * value of the sensor.
     * 
     * The BrickletLaserRangeFinder::CALLBACK_VELOCITY callback is only triggered if the velocity has changed since
     * the last triggering.
     */
    const CALLBACK_VELOCITY = 21;

    /**
     * This callback is triggered when the threshold as set by
     * BrickletLaserRangeFinder::setDistanceCallbackThreshold() is reached.
     * The parameter is the distance value of the sensor.
     * 
     * If the threshold keeps being reached, the callback is triggered periodically
     * with the period as set by BrickletLaserRangeFinder::setDebouncePeriod().
     */
    const CALLBACK_DISTANCE_REACHED = 22;

    /**
     * This callback is triggered when the threshold as set by
     * BrickletLaserRangeFinder::setVelocityCallbackThreshold() is reached.
     * The parameter is the velocity value of the sensor.
     * 
     * If the threshold keeps being reached, the callback is triggered periodically
     * with the period as set by BrickletLaserRangeFinder::setDebouncePeriod().
     */
    const CALLBACK_VELOCITY_REACHED = 23;


    /**
     * @internal
     */
    const FUNCTION_GET_DISTANCE = 1;

    /**
     * @internal
     */
    const FUNCTION_GET_VELOCITY = 2;

    /**
     * @internal
     */
    const FUNCTION_SET_DISTANCE_CALLBACK_PERIOD = 3;

    /**
     * @internal
     */
    const FUNCTION_GET_DISTANCE_CALLBACK_PERIOD = 4;

    /**
     * @internal
     */
    const FUNCTION_SET_VELOCITY_CALLBACK_PERIOD = 5;

    /**
     * @internal
     */
    const FUNCTION_GET_VELOCITY_CALLBACK_PERIOD = 6;

    /**
     * @internal
     */
    const FUNCTION_SET_DISTANCE_CALLBACK_THRESHOLD = 7;

    /**
     * @internal
     */
    const FUNCTION_GET_DISTANCE_CALLBACK_THRESHOLD = 8;

    /**
     * @internal
     */
    const FUNCTION_SET_VELOCITY_CALLBACK_THRESHOLD = 9;

    /**
     * @internal
     */
    const FUNCTION_GET_VELOCITY_CALLBACK_THRESHOLD = 10;

    /**
     * @internal
     */
    const FUNCTION_SET_DEBOUNCE_PERIOD = 11;

    /**
     * @internal
     */
    const FUNCTION_GET_DEBOUNCE_PERIOD = 12;

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
    const FUNCTION_SET_MODE = 15;

    /**
     * @internal
     */
    const FUNCTION_GET_MODE = 16;

    /**
     * @internal
     */
    const FUNCTION_ENABLE_LASER = 17;

    /**
     * @internal
     */
    const FUNCTION_DISABLE_LASER = 18;

    /**
     * @internal
     */
    const FUNCTION_IS_LASER_ENABLED = 19;

    /**
     * @internal
     */
    const FUNCTION_GET_SENSOR_HARDWARE_VERSION = 24;

    /**
     * @internal
     */
    const FUNCTION_SET_CONFIGURATION = 25;

    /**
     * @internal
     */
    const FUNCTION_GET_CONFIGURATION = 26;

    /**
     * @internal
     */
    const FUNCTION_GET_IDENTITY = 255;

    const THRESHOLD_OPTION_OFF = 'x';
    const THRESHOLD_OPTION_OUTSIDE = 'o';
    const THRESHOLD_OPTION_INSIDE = 'i';
    const THRESHOLD_OPTION_SMALLER = '<';
    const THRESHOLD_OPTION_GREATER = '>';
    const MODE_DISTANCE = 0;
    const MODE_VELOCITY_MAX_13MS = 1;
    const MODE_VELOCITY_MAX_32MS = 2;
    const MODE_VELOCITY_MAX_64MS = 3;
    const MODE_VELOCITY_MAX_127MS = 4;
    const VERSION_1 = 1;
    const VERSION_3 = 3;

    const DEVICE_IDENTIFIER = 255;

    const DEVICE_DISPLAY_NAME = 'Laser Range Finder Bricklet';

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

        $this->response_expected[self::FUNCTION_GET_DISTANCE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_VELOCITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_DISTANCE_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_DISTANCE_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_VELOCITY_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_VELOCITY_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_DISTANCE_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_DISTANCE_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_VELOCITY_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_VELOCITY_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_DEBOUNCE_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_DEBOUNCE_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_MOVING_AVERAGE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_MOVING_AVERAGE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_MODE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_MODE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_ENABLE_LASER] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_DISABLE_LASER] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_IS_LASER_ENABLED] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_SENSOR_HARDWARE_VERSION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_CONFIGURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_IDENTITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;

        $this->callback_wrappers[self::CALLBACK_DISTANCE] = array(10, 'callbackWrapperDistance');
        $this->callback_wrappers[self::CALLBACK_VELOCITY] = array(10, 'callbackWrapperVelocity');
        $this->callback_wrappers[self::CALLBACK_DISTANCE_REACHED] = array(10, 'callbackWrapperDistanceReached');
        $this->callback_wrappers[self::CALLBACK_VELOCITY_REACHED] = array(10, 'callbackWrapperVelocityReached');

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
     * Sensor hardware version 1 (see BrickletLaserRangeFinder::getSensorHardwareVersion()) cannot
     * measure distance and velocity at the same time. Therefore, the distance mode
     * has to be enabled using BrickletLaserRangeFinder::setMode().
     * Sensor hardware version 3 can measure distance and velocity at the same
     * time. Also the laser has to be enabled, see BrickletLaserRangeFinder::enableLaser().
     * 
     * If you want to get the distance periodically, it is recommended to
     * use the BrickletLaserRangeFinder::CALLBACK_DISTANCE callback and set the period with
     * BrickletLaserRangeFinder::setDistanceCallbackPeriod().
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

        return $payload['distance'];
    }

    /**
     * Returns the measured velocity.
     * 
     * Sensor hardware version 1 (see BrickletLaserRangeFinder::getSensorHardwareVersion()) cannot
     * measure distance and velocity at the same time. Therefore, the velocity mode
     * has to be enabled using BrickletLaserRangeFinder::setMode().
     * Sensor hardware version 3 can measure distance and velocity at the same
     * time, but the velocity measurement only produces stables results if a fixed
     * measurement rate (see BrickletLaserRangeFinder::setConfiguration()) is configured. Also the laser
     * has to be enabled, see BrickletLaserRangeFinder::enableLaser().
     * 
     * If you want to get the velocity periodically, it is recommended to
     * use the BrickletLaserRangeFinder::CALLBACK_VELOCITY callback and set the period with
     * BrickletLaserRangeFinder::setVelocityCallbackPeriod().
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
     * Sets the period with which the BrickletLaserRangeFinder::CALLBACK_DISTANCE callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * The BrickletLaserRangeFinder::CALLBACK_DISTANCE callback is only triggered if the distance value has
     * changed since the last triggering.
     * 
     * @param int $period
     * 
     * @return void
     */
    public function setDistanceCallbackPeriod($period)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);

        $this->sendRequest(self::FUNCTION_SET_DISTANCE_CALLBACK_PERIOD, $payload, 0);
    }

    /**
     * Returns the period as set by BrickletLaserRangeFinder::setDistanceCallbackPeriod().
     * 
     * 
     * @return int
     */
    public function getDistanceCallbackPeriod()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_DISTANCE_CALLBACK_PERIOD, $payload, 12);

        $payload = unpack('V1period', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'period');
    }

    /**
     * Sets the period with which the BrickletLaserRangeFinder::CALLBACK_VELOCITY callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * The BrickletLaserRangeFinder::CALLBACK_VELOCITY callback is only triggered if the velocity value has
     * changed since the last triggering.
     * 
     * @param int $period
     * 
     * @return void
     */
    public function setVelocityCallbackPeriod($period)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);

        $this->sendRequest(self::FUNCTION_SET_VELOCITY_CALLBACK_PERIOD, $payload, 0);
    }

    /**
     * Returns the period as set by BrickletLaserRangeFinder::setVelocityCallbackPeriod().
     * 
     * 
     * @return int
     */
    public function getVelocityCallbackPeriod()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_VELOCITY_CALLBACK_PERIOD, $payload, 12);

        $payload = unpack('V1period', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'period');
    }

    /**
     * Sets the thresholds for the BrickletLaserRangeFinder::CALLBACK_DISTANCE_REACHED callback.
     * 
     * The following options are possible:
     * 
     * <code>
     *  "Option", "Description"
     * 
     *  "'x'",    "Callback is turned off"
     *  "'o'",    "Callback is triggered when the distance value is *outside* the min and max values"
     *  "'i'",    "Callback is triggered when the distance value is *inside* the min and max values"
     *  "'<'",    "Callback is triggered when the distance value is smaller than the min value (max is ignored)"
     *  "'>'",    "Callback is triggered when the distance value is greater than the min value (max is ignored)"
     * </code>
     * 
     * @param string $option
     * @param int $min
     * @param int $max
     * 
     * @return void
     */
    public function setDistanceCallbackThreshold($option, $min, $max)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('c', ord($option));
        $payload .= pack('v', $min);
        $payload .= pack('v', $max);

        $this->sendRequest(self::FUNCTION_SET_DISTANCE_CALLBACK_THRESHOLD, $payload, 0);
    }

    /**
     * Returns the threshold as set by BrickletLaserRangeFinder::setDistanceCallbackThreshold().
     * 
     * 
     * @return array
     */
    public function getDistanceCallbackThreshold()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_DISTANCE_CALLBACK_THRESHOLD, $payload, 13);

        $payload = unpack('c1option/v1min/v1max', $data);

        $ret['option'] = chr($payload['option']);
        $ret['min'] = $payload['min'];
        $ret['max'] = $payload['max'];

        return $ret;
    }

    /**
     * Sets the thresholds for the BrickletLaserRangeFinder::CALLBACK_VELOCITY_REACHED callback.
     * 
     * The following options are possible:
     * 
     * <code>
     *  "Option", "Description"
     * 
     *  "'x'",    "Callback is turned off"
     *  "'o'",    "Callback is triggered when the velocity is *outside* the min and max values"
     *  "'i'",    "Callback is triggered when the velocity is *inside* the min and max values"
     *  "'<'",    "Callback is triggered when the velocity is smaller than the min value (max is ignored)"
     *  "'>'",    "Callback is triggered when the velocity is greater than the min value (max is ignored)"
     * </code>
     * 
     * @param string $option
     * @param int $min
     * @param int $max
     * 
     * @return void
     */
    public function setVelocityCallbackThreshold($option, $min, $max)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('c', ord($option));
        $payload .= pack('v', $min);
        $payload .= pack('v', $max);

        $this->sendRequest(self::FUNCTION_SET_VELOCITY_CALLBACK_THRESHOLD, $payload, 0);
    }

    /**
     * Returns the threshold as set by BrickletLaserRangeFinder::setVelocityCallbackThreshold().
     * 
     * 
     * @return array
     */
    public function getVelocityCallbackThreshold()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_VELOCITY_CALLBACK_THRESHOLD, $payload, 13);

        $payload = unpack('c1option/v1min/v1max', $data);

        $ret['option'] = chr($payload['option']);
        $ret['min'] = IPConnection::fixUnpackedInt16($payload, 'min');
        $ret['max'] = IPConnection::fixUnpackedInt16($payload, 'max');

        return $ret;
    }

    /**
     * Sets the period with which the threshold callbacks
     * 
     * * BrickletLaserRangeFinder::CALLBACK_DISTANCE_REACHED,
     * * BrickletLaserRangeFinder::CALLBACK_VELOCITY_REACHED,
     * 
     * are triggered, if the thresholds
     * 
     * * BrickletLaserRangeFinder::setDistanceCallbackThreshold(),
     * * BrickletLaserRangeFinder::setVelocityCallbackThreshold(),
     * 
     * keep being reached.
     * 
     * @param int $debounce
     * 
     * @return void
     */
    public function setDebouncePeriod($debounce)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $debounce);

        $this->sendRequest(self::FUNCTION_SET_DEBOUNCE_PERIOD, $payload, 0);
    }

    /**
     * Returns the debounce period as set by BrickletLaserRangeFinder::setDebouncePeriod().
     * 
     * 
     * @return int
     */
    public function getDebouncePeriod()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_DEBOUNCE_PERIOD, $payload, 12);

        $payload = unpack('V1debounce', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'debounce');
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
     * Returns the length moving average as set by BrickletLaserRangeFinder::setMovingAverage().
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
     * <note>
     *  This function is only available if you have a LIDAR-Lite sensor with hardware
     *  version 1. Use BrickletLaserRangeFinder::setConfiguration() for hardware version 3. You can check
     *  the sensor hardware version using BrickletLaserRangeFinder::getSensorHardwareVersion().
     * </note>
     * 
     * The LIDAR-Lite sensor (hardware version 1) has five different modes. One mode is
     * for distance measurements and four modes are for velocity measurements with
     * different ranges.
     * 
     * The following modes are available:
     * 
     * * 0: Distance is measured with resolution 1.0 cm and range 0-4000 cm
     * * 1: Velocity is measured with resolution 0.1 m/s and range is 0-12.7 m/s
     * * 2: Velocity is measured with resolution 0.25 m/s and range is 0-31.75 m/s
     * * 3: Velocity is measured with resolution 0.5 m/s and range is 0-63.5 m/s
     * * 4: Velocity is measured with resolution 1.0 m/s and range is 0-127 m/s
     * 
     * @param int $mode
     * 
     * @return void
     */
    public function setMode($mode)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $mode);

        $this->sendRequest(self::FUNCTION_SET_MODE, $payload, 0);
    }

    /**
     * Returns the mode as set by BrickletLaserRangeFinder::setMode().
     * 
     * 
     * @return int
     */
    public function getMode()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_MODE, $payload, 9);

        $payload = unpack('C1mode', $data);

        return $payload['mode'];
    }

    /**
     * Activates the laser of the LIDAR.
     * 
     * We recommend that you wait 250ms after enabling the laser before
     * the first call of BrickletLaserRangeFinder::getDistance() to ensure stable measurements.
     * 
     * 
     * @return void
     */
    public function enableLaser()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_ENABLE_LASER, $payload, 0);
    }

    /**
     * Deactivates the laser of the LIDAR.
     * 
     * 
     * @return void
     */
    public function disableLaser()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_DISABLE_LASER, $payload, 0);
    }

    /**
     * Returns *true* if the laser is enabled, *false* otherwise.
     * 
     * 
     * @return bool
     */
    public function isLaserEnabled()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_IS_LASER_ENABLED, $payload, 9);

        $payload = unpack('C1laser_enabled', $data);

        return (bool)$payload['laser_enabled'];
    }

    /**
     * Returns the LIDAR-Lite hardware version.
     * 
     * .. versionadded:: 2.0.3$nbsp;(Plugin)
     * 
     * 
     * @return int
     */
    public function getSensorHardwareVersion()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_SENSOR_HARDWARE_VERSION, $payload, 9);

        $payload = unpack('C1version', $data);

        return $payload['version'];
    }

    /**
     * <note>
     *  This function is only available if you have a LIDAR-Lite sensor with hardware
     *  version 3. Use BrickletLaserRangeFinder::setMode() for hardware version 1. You can check
     *  the sensor hardware version using BrickletLaserRangeFinder::getSensorHardwareVersion().
     * </note>
     * 
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
     * .. versionadded:: 2.0.3$nbsp;(Plugin)
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
     * Returns the configuration as set by BrickletLaserRangeFinder::setConfiguration().
     * 
     * .. versionadded:: 2.0.3$nbsp;(Plugin)
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

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperDistanceReached($data)
    {
        $payload = unpack('v1distance', $data);

        if (array_key_exists(self::CALLBACK_DISTANCE_REACHED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_DISTANCE_REACHED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_DISTANCE_REACHED];

            call_user_func($function, $payload['distance'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperVelocityReached($data)
    {
        $payload = unpack('v1velocity', $data);
        $payload['velocity'] = IPConnection::fixUnpackedInt16($payload, 'velocity');

        if (array_key_exists(self::CALLBACK_VELOCITY_REACHED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_VELOCITY_REACHED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_VELOCITY_REACHED];

            call_user_func($function, $payload['velocity'], $user_data);
        }
    }
}

?>
