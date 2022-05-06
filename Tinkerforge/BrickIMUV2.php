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
 * Full fledged AHRS with 9 degrees of freedom
 */
class BrickIMUV2 extends Device
{

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickIMUV2::setAccelerationPeriod(). The parameters are the acceleration
     * for the x, y and z axis.
     */
    const CALLBACK_ACCELERATION = 32;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickIMUV2::setMagneticFieldPeriod(). The parameters are the magnetic
     * field for the x, y and z axis.
     */
    const CALLBACK_MAGNETIC_FIELD = 33;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickIMUV2::setAngularVelocityPeriod(). The parameters are the angular
     * velocity for the x, y and z axis.
     */
    const CALLBACK_ANGULAR_VELOCITY = 34;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickIMUV2::setTemperaturePeriod(). The parameter is the temperature.
     */
    const CALLBACK_TEMPERATURE = 35;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickIMUV2::setLinearAccelerationPeriod(). The parameters are the
     * linear acceleration for the x, y and z axis.
     */
    const CALLBACK_LINEAR_ACCELERATION = 36;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickIMUV2::setGravityVectorPeriod(). The parameters gravity vector
     * for the x, y and z axis.
     */
    const CALLBACK_GRAVITY_VECTOR = 37;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickIMUV2::setOrientationPeriod(). The parameters are the orientation
     * (heading (yaw), roll, pitch) of the IMU Brick in Euler angles. See
     * BrickIMUV2::getOrientation() for details.
     */
    const CALLBACK_ORIENTATION = 38;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickIMUV2::setQuaternionPeriod(). The parameters are the orientation
     * (w, x, y, z) of the IMU Brick in quaternions. See BrickIMUV2::getQuaternion()
     * for details.
     */
    const CALLBACK_QUATERNION = 39;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickIMUV2::setAllDataPeriod(). The parameters are as for
     * BrickIMUV2::getAllData().
     */
    const CALLBACK_ALL_DATA = 40;


    /**
     * @internal
     */
    const FUNCTION_GET_ACCELERATION = 1;

    /**
     * @internal
     */
    const FUNCTION_GET_MAGNETIC_FIELD = 2;

    /**
     * @internal
     */
    const FUNCTION_GET_ANGULAR_VELOCITY = 3;

    /**
     * @internal
     */
    const FUNCTION_GET_TEMPERATURE = 4;

    /**
     * @internal
     */
    const FUNCTION_GET_ORIENTATION = 5;

    /**
     * @internal
     */
    const FUNCTION_GET_LINEAR_ACCELERATION = 6;

    /**
     * @internal
     */
    const FUNCTION_GET_GRAVITY_VECTOR = 7;

    /**
     * @internal
     */
    const FUNCTION_GET_QUATERNION = 8;

    /**
     * @internal
     */
    const FUNCTION_GET_ALL_DATA = 9;

    /**
     * @internal
     */
    const FUNCTION_LEDS_ON = 10;

    /**
     * @internal
     */
    const FUNCTION_LEDS_OFF = 11;

    /**
     * @internal
     */
    const FUNCTION_ARE_LEDS_ON = 12;

    /**
     * @internal
     */
    const FUNCTION_SAVE_CALIBRATION = 13;

    /**
     * @internal
     */
    const FUNCTION_SET_ACCELERATION_PERIOD = 14;

    /**
     * @internal
     */
    const FUNCTION_GET_ACCELERATION_PERIOD = 15;

    /**
     * @internal
     */
    const FUNCTION_SET_MAGNETIC_FIELD_PERIOD = 16;

    /**
     * @internal
     */
    const FUNCTION_GET_MAGNETIC_FIELD_PERIOD = 17;

    /**
     * @internal
     */
    const FUNCTION_SET_ANGULAR_VELOCITY_PERIOD = 18;

    /**
     * @internal
     */
    const FUNCTION_GET_ANGULAR_VELOCITY_PERIOD = 19;

    /**
     * @internal
     */
    const FUNCTION_SET_TEMPERATURE_PERIOD = 20;

    /**
     * @internal
     */
    const FUNCTION_GET_TEMPERATURE_PERIOD = 21;

    /**
     * @internal
     */
    const FUNCTION_SET_ORIENTATION_PERIOD = 22;

    /**
     * @internal
     */
    const FUNCTION_GET_ORIENTATION_PERIOD = 23;

    /**
     * @internal
     */
    const FUNCTION_SET_LINEAR_ACCELERATION_PERIOD = 24;

    /**
     * @internal
     */
    const FUNCTION_GET_LINEAR_ACCELERATION_PERIOD = 25;

    /**
     * @internal
     */
    const FUNCTION_SET_GRAVITY_VECTOR_PERIOD = 26;

    /**
     * @internal
     */
    const FUNCTION_GET_GRAVITY_VECTOR_PERIOD = 27;

    /**
     * @internal
     */
    const FUNCTION_SET_QUATERNION_PERIOD = 28;

    /**
     * @internal
     */
    const FUNCTION_GET_QUATERNION_PERIOD = 29;

    /**
     * @internal
     */
    const FUNCTION_SET_ALL_DATA_PERIOD = 30;

    /**
     * @internal
     */
    const FUNCTION_GET_ALL_DATA_PERIOD = 31;

    /**
     * @internal
     */
    const FUNCTION_SET_SENSOR_CONFIGURATION = 41;

    /**
     * @internal
     */
    const FUNCTION_GET_SENSOR_CONFIGURATION = 42;

    /**
     * @internal
     */
    const FUNCTION_SET_SENSOR_FUSION_MODE = 43;

    /**
     * @internal
     */
    const FUNCTION_GET_SENSOR_FUSION_MODE = 44;

    /**
     * @internal
     */
    const FUNCTION_SET_SPITFP_BAUDRATE_CONFIG = 231;

    /**
     * @internal
     */
    const FUNCTION_GET_SPITFP_BAUDRATE_CONFIG = 232;

    /**
     * @internal
     */
    const FUNCTION_GET_SEND_TIMEOUT_COUNT = 233;

    /**
     * @internal
     */
    const FUNCTION_SET_SPITFP_BAUDRATE = 234;

    /**
     * @internal
     */
    const FUNCTION_GET_SPITFP_BAUDRATE = 235;

    /**
     * @internal
     */
    const FUNCTION_GET_SPITFP_ERROR_COUNT = 237;

    /**
     * @internal
     */
    const FUNCTION_ENABLE_STATUS_LED = 238;

    /**
     * @internal
     */
    const FUNCTION_DISABLE_STATUS_LED = 239;

    /**
     * @internal
     */
    const FUNCTION_IS_STATUS_LED_ENABLED = 240;

    /**
     * @internal
     */
    const FUNCTION_GET_PROTOCOL1_BRICKLET_NAME = 241;

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
    const FUNCTION_WRITE_BRICKLET_PLUGIN = 246;

    /**
     * @internal
     */
    const FUNCTION_READ_BRICKLET_PLUGIN = 247;

    /**
     * @internal
     */
    const FUNCTION_GET_IDENTITY = 255;

    const MAGNETOMETER_RATE_2HZ = 0;
    const MAGNETOMETER_RATE_6HZ = 1;
    const MAGNETOMETER_RATE_8HZ = 2;
    const MAGNETOMETER_RATE_10HZ = 3;
    const MAGNETOMETER_RATE_15HZ = 4;
    const MAGNETOMETER_RATE_20HZ = 5;
    const MAGNETOMETER_RATE_25HZ = 6;
    const MAGNETOMETER_RATE_30HZ = 7;
    const GYROSCOPE_RANGE_2000DPS = 0;
    const GYROSCOPE_RANGE_1000DPS = 1;
    const GYROSCOPE_RANGE_500DPS = 2;
    const GYROSCOPE_RANGE_250DPS = 3;
    const GYROSCOPE_RANGE_125DPS = 4;
    const GYROSCOPE_BANDWIDTH_523HZ = 0;
    const GYROSCOPE_BANDWIDTH_230HZ = 1;
    const GYROSCOPE_BANDWIDTH_116HZ = 2;
    const GYROSCOPE_BANDWIDTH_47HZ = 3;
    const GYROSCOPE_BANDWIDTH_23HZ = 4;
    const GYROSCOPE_BANDWIDTH_12HZ = 5;
    const GYROSCOPE_BANDWIDTH_64HZ = 6;
    const GYROSCOPE_BANDWIDTH_32HZ = 7;
    const ACCELEROMETER_RANGE_2G = 0;
    const ACCELEROMETER_RANGE_4G = 1;
    const ACCELEROMETER_RANGE_8G = 2;
    const ACCELEROMETER_RANGE_16G = 3;
    const ACCELEROMETER_BANDWIDTH_7_81HZ = 0;
    const ACCELEROMETER_BANDWIDTH_15_63HZ = 1;
    const ACCELEROMETER_BANDWIDTH_31_25HZ = 2;
    const ACCELEROMETER_BANDWIDTH_62_5HZ = 3;
    const ACCELEROMETER_BANDWIDTH_125HZ = 4;
    const ACCELEROMETER_BANDWIDTH_250HZ = 5;
    const ACCELEROMETER_BANDWIDTH_500HZ = 6;
    const ACCELEROMETER_BANDWIDTH_1000HZ = 7;
    const SENSOR_FUSION_OFF = 0;
    const SENSOR_FUSION_ON = 1;
    const SENSOR_FUSION_ON_WITHOUT_MAGNETOMETER = 2;
    const SENSOR_FUSION_ON_WITHOUT_FAST_MAGNETOMETER_CALIBRATION = 3;
    const COMMUNICATION_METHOD_NONE = 0;
    const COMMUNICATION_METHOD_USB = 1;
    const COMMUNICATION_METHOD_SPI_STACK = 2;
    const COMMUNICATION_METHOD_CHIBI = 3;
    const COMMUNICATION_METHOD_RS485 = 4;
    const COMMUNICATION_METHOD_WIFI = 5;
    const COMMUNICATION_METHOD_ETHERNET = 6;
    const COMMUNICATION_METHOD_WIFI_V2 = 7;

    const DEVICE_IDENTIFIER = 18;

    const DEVICE_DISPLAY_NAME = 'IMU Brick 2.0';

    /**
     * Creates an object with the unique device ID $uid. This object can
     * then be added to the IP connection.
     *
     * @param string $uid
     */
    public function __construct($uid, $ipcon)
    {
        parent::__construct($uid, $ipcon, self::DEVICE_IDENTIFIER, self::DEVICE_DISPLAY_NAME);

        $this->api_version = array(2, 0, 3);

        $this->response_expected[self::FUNCTION_GET_ACCELERATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_MAGNETIC_FIELD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_ANGULAR_VELOCITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_TEMPERATURE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_ORIENTATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_LINEAR_ACCELERATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_GRAVITY_VECTOR] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_QUATERNION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_ALL_DATA] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_LEDS_ON] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_LEDS_OFF] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_ARE_LEDS_ON] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SAVE_CALIBRATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ACCELERATION_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_ACCELERATION_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_MAGNETIC_FIELD_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_MAGNETIC_FIELD_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ANGULAR_VELOCITY_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_ANGULAR_VELOCITY_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_TEMPERATURE_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_TEMPERATURE_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ORIENTATION_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_ORIENTATION_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_LINEAR_ACCELERATION_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_LINEAR_ACCELERATION_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_GRAVITY_VECTOR_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_GRAVITY_VECTOR_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_QUATERNION_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_QUATERNION_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ALL_DATA_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_ALL_DATA_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_SENSOR_CONFIGURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_SENSOR_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_SENSOR_FUSION_MODE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_SENSOR_FUSION_MODE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_SPITFP_BAUDRATE_CONFIG] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_SPITFP_BAUDRATE_CONFIG] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_SEND_TIMEOUT_COUNT] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_SPITFP_BAUDRATE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_SPITFP_BAUDRATE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_SPITFP_ERROR_COUNT] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_ENABLE_STATUS_LED] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_DISABLE_STATUS_LED] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_IS_STATUS_LED_ENABLED] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_PROTOCOL1_BRICKLET_NAME] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_CHIP_TEMPERATURE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_RESET] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_WRITE_BRICKLET_PLUGIN] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_READ_BRICKLET_PLUGIN] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_IDENTITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;

        $this->callback_wrappers[self::CALLBACK_ACCELERATION] = array(14, 'callbackWrapperAcceleration');
        $this->callback_wrappers[self::CALLBACK_MAGNETIC_FIELD] = array(14, 'callbackWrapperMagneticField');
        $this->callback_wrappers[self::CALLBACK_ANGULAR_VELOCITY] = array(14, 'callbackWrapperAngularVelocity');
        $this->callback_wrappers[self::CALLBACK_TEMPERATURE] = array(9, 'callbackWrapperTemperature');
        $this->callback_wrappers[self::CALLBACK_LINEAR_ACCELERATION] = array(14, 'callbackWrapperLinearAcceleration');
        $this->callback_wrappers[self::CALLBACK_GRAVITY_VECTOR] = array(14, 'callbackWrapperGravityVector');
        $this->callback_wrappers[self::CALLBACK_ORIENTATION] = array(14, 'callbackWrapperOrientation');
        $this->callback_wrappers[self::CALLBACK_QUATERNION] = array(16, 'callbackWrapperQuaternion');
        $this->callback_wrappers[self::CALLBACK_ALL_DATA] = array(54, 'callbackWrapperAllData');

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
     * Returns the calibrated acceleration from the accelerometer for the
     * x, y and z axis. The acceleration is in the range configured with
     * BrickIMUV2::setSensorConfiguration().
     * 
     * If you want to get the acceleration periodically, it is recommended
     * to use the BrickIMUV2::CALLBACK_ACCELERATION callback and set the period with
     * BrickIMUV2::setAccelerationPeriod().
     * 
     * 
     * @return array
     */
    public function getAcceleration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ACCELERATION, $payload, 14);

        $payload = unpack('v1x/v1y/v1z', $data);

        $ret['x'] = IPConnection::fixUnpackedInt16($payload, 'x');
        $ret['y'] = IPConnection::fixUnpackedInt16($payload, 'y');
        $ret['z'] = IPConnection::fixUnpackedInt16($payload, 'z');

        return $ret;
    }

    /**
     * Returns the calibrated magnetic field from the magnetometer for the
     * x, y and z axis.
     * 
     * If you want to get the magnetic field periodically, it is recommended
     * to use the BrickIMUV2::CALLBACK_MAGNETIC_FIELD callback and set the period with
     * BrickIMUV2::setMagneticFieldPeriod().
     * 
     * 
     * @return array
     */
    public function getMagneticField()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_MAGNETIC_FIELD, $payload, 14);

        $payload = unpack('v1x/v1y/v1z', $data);

        $ret['x'] = IPConnection::fixUnpackedInt16($payload, 'x');
        $ret['y'] = IPConnection::fixUnpackedInt16($payload, 'y');
        $ret['z'] = IPConnection::fixUnpackedInt16($payload, 'z');

        return $ret;
    }

    /**
     * Returns the calibrated angular velocity from the gyroscope for the
     * x, y and z axis. The angular velocity is in the range configured with
     * BrickIMUV2::setSensorConfiguration().
     * 
     * If you want to get the angular velocity periodically, it is recommended
     * to use the BrickIMUV2::CALLBACK_ANGULAR_VELOCITY acallback nd set the period with
     * BrickIMUV2::setAngularVelocityPeriod().
     * 
     * 
     * @return array
     */
    public function getAngularVelocity()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ANGULAR_VELOCITY, $payload, 14);

        $payload = unpack('v1x/v1y/v1z', $data);

        $ret['x'] = IPConnection::fixUnpackedInt16($payload, 'x');
        $ret['y'] = IPConnection::fixUnpackedInt16($payload, 'y');
        $ret['z'] = IPConnection::fixUnpackedInt16($payload, 'z');

        return $ret;
    }

    /**
     * Returns the temperature of the IMU Brick.
     * The temperature is measured in the core of the BNO055 IC, it is not the
     * ambient temperature
     * 
     * 
     * @return int
     */
    public function getTemperature()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_TEMPERATURE, $payload, 9);

        $payload = unpack('c1temperature', $data);

        return $payload['temperature'];
    }

    /**
     * Returns the current orientation (heading, roll, pitch) of the IMU Brick as
     * independent Euler angles. Note that Euler angles always
     * experience a `gimbal lock <https://en.wikipedia.org/wiki/Gimbal_lock>`__.
     * We recommend that you use quaternions instead, if you need the absolute
     * orientation.
     * 
     * If you want to get the orientation periodically, it is recommended
     * to use the BrickIMUV2::CALLBACK_ORIENTATION callback and set the period with
     * BrickIMUV2::setOrientationPeriod().
     * 
     * 
     * @return array
     */
    public function getOrientation()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ORIENTATION, $payload, 14);

        $payload = unpack('v1heading/v1roll/v1pitch', $data);

        $ret['heading'] = IPConnection::fixUnpackedInt16($payload, 'heading');
        $ret['roll'] = IPConnection::fixUnpackedInt16($payload, 'roll');
        $ret['pitch'] = IPConnection::fixUnpackedInt16($payload, 'pitch');

        return $ret;
    }

    /**
     * Returns the linear acceleration of the IMU Brick for the
     * x, y and z axis. The acceleration is in the range configured with
     * BrickIMUV2::setSensorConfiguration().
     * 
     * The linear acceleration is the acceleration in each of the three
     * axis of the IMU Brick with the influences of gravity removed.
     * 
     * It is also possible to get the gravity vector with the influence of linear
     * acceleration removed, see BrickIMUV2::getGravityVector().
     * 
     * If you want to get the linear acceleration periodically, it is recommended
     * to use the BrickIMUV2::CALLBACK_LINEAR_ACCELERATION callback and set the period with
     * BrickIMUV2::setLinearAccelerationPeriod().
     * 
     * 
     * @return array
     */
    public function getLinearAcceleration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_LINEAR_ACCELERATION, $payload, 14);

        $payload = unpack('v1x/v1y/v1z', $data);

        $ret['x'] = IPConnection::fixUnpackedInt16($payload, 'x');
        $ret['y'] = IPConnection::fixUnpackedInt16($payload, 'y');
        $ret['z'] = IPConnection::fixUnpackedInt16($payload, 'z');

        return $ret;
    }

    /**
     * Returns the current gravity vector of the IMU Brick for the
     * x, y and z axis.
     * 
     * The gravity vector is the acceleration that occurs due to gravity.
     * Influences of additional linear acceleration are removed.
     * 
     * It is also possible to get the linear acceleration with the influence
     * of gravity removed, see BrickIMUV2::getLinearAcceleration().
     * 
     * If you want to get the gravity vector periodically, it is recommended
     * to use the BrickIMUV2::CALLBACK_GRAVITY_VECTOR callback and set the period with
     * BrickIMUV2::setGravityVectorPeriod().
     * 
     * 
     * @return array
     */
    public function getGravityVector()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_GRAVITY_VECTOR, $payload, 14);

        $payload = unpack('v1x/v1y/v1z', $data);

        $ret['x'] = IPConnection::fixUnpackedInt16($payload, 'x');
        $ret['y'] = IPConnection::fixUnpackedInt16($payload, 'y');
        $ret['z'] = IPConnection::fixUnpackedInt16($payload, 'z');

        return $ret;
    }

    /**
     * Returns the current orientation (w, x, y, z) of the IMU Brick as
     * `quaternions <https://en.wikipedia.org/wiki/Quaternions_and_spatial_rotation>`__.
     * 
     * You have to divide the return values by 16383 (14 bit) to get
     * the usual range of -1.0 to +1.0 for quaternions.
     * 
     * If you want to get the quaternions periodically, it is recommended
     * to use the BrickIMUV2::CALLBACK_QUATERNION callback and set the period with
     * BrickIMUV2::setQuaternionPeriod().
     * 
     * 
     * @return array
     */
    public function getQuaternion()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_QUATERNION, $payload, 16);

        $payload = unpack('v1w/v1x/v1y/v1z', $data);

        $ret['w'] = IPConnection::fixUnpackedInt16($payload, 'w');
        $ret['x'] = IPConnection::fixUnpackedInt16($payload, 'x');
        $ret['y'] = IPConnection::fixUnpackedInt16($payload, 'y');
        $ret['z'] = IPConnection::fixUnpackedInt16($payload, 'z');

        return $ret;
    }

    /**
     * Return all of the available data of the IMU Brick.
     * 
     * * acceleration (see BrickIMUV2::getAcceleration())
     * * magnetic field (see BrickIMUV2::getMagneticField())
     * * angular velocity (see BrickIMUV2::getAngularVelocity())
     * * Euler angles (see BrickIMUV2::getOrientation())
     * * quaternion (see BrickIMUV2::getQuaternion())
     * * linear acceleration (see BrickIMUV2::getLinearAcceleration())
     * * gravity vector (see BrickIMUV2::getGravityVector())
     * * temperature (see BrickIMUV2::getTemperature())
     * * calibration status (see below)
     * 
     * The calibration status consists of four pairs of two bits. Each pair
     * of bits represents the status of the current calibration.
     * 
     * * bit 0-1: Magnetometer
     * * bit 2-3: Accelerometer
     * * bit 4-5: Gyroscope
     * * bit 6-7: System
     * 
     * A value of 0 means for "not calibrated" and a value of 3 means
     * "fully calibrated". In your program you should always be able to
     * ignore the calibration status, it is used by the calibration
     * window of the Brick Viewer and it can be ignored after the first
     * calibration. See the documentation in the calibration window for
     * more information regarding the calibration of the IMU Brick.
     * 
     * If you want to get the data periodically, it is recommended
     * to use the BrickIMUV2::CALLBACK_ALL_DATA callback and set the period with
     * BrickIMUV2::setAllDataPeriod().
     * 
     * 
     * @return array
     */
    public function getAllData()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ALL_DATA, $payload, 54);

        $payload = unpack('v3acceleration/v3magnetic_field/v3angular_velocity/v3euler_angle/v4quaternion/v3linear_acceleration/v3gravity_vector/c1temperature/C1calibration_status', $data);

        $ret['acceleration'] = IPConnection::collectUnpackedInt16Array($payload, 'acceleration', 3);
        $ret['magnetic_field'] = IPConnection::collectUnpackedInt16Array($payload, 'magnetic_field', 3);
        $ret['angular_velocity'] = IPConnection::collectUnpackedInt16Array($payload, 'angular_velocity', 3);
        $ret['euler_angle'] = IPConnection::collectUnpackedInt16Array($payload, 'euler_angle', 3);
        $ret['quaternion'] = IPConnection::collectUnpackedInt16Array($payload, 'quaternion', 4);
        $ret['linear_acceleration'] = IPConnection::collectUnpackedInt16Array($payload, 'linear_acceleration', 3);
        $ret['gravity_vector'] = IPConnection::collectUnpackedInt16Array($payload, 'gravity_vector', 3);
        $ret['temperature'] = $payload['temperature'];
        $ret['calibration_status'] = $payload['calibration_status'];

        return $ret;
    }

    /**
     * Turns the orientation and direction LEDs of the IMU Brick on.
     * 
     * 
     * @return void
     */
    public function ledsOn()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_LEDS_ON, $payload, 0);
    }

    /**
     * Turns the orientation and direction LEDs of the IMU Brick off.
     * 
     * 
     * @return void
     */
    public function ledsOff()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_LEDS_OFF, $payload, 0);
    }

    /**
     * Returns *true* if the orientation and direction LEDs of the IMU Brick
     * are on, *false* otherwise.
     * 
     * 
     * @return bool
     */
    public function areLedsOn()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_ARE_LEDS_ON, $payload, 9);

        $payload = unpack('C1leds', $data);

        return (bool)$payload['leds'];
    }

    /**
     * A call of this function saves the current calibration to be used
     * as a starting point for the next restart of continuous calibration
     * of the IMU Brick.
     * 
     * A return value of *true* means that the calibration could be used and
     * *false* means that it could not be used (this happens if the calibration
     * status is not "fully calibrated").
     * 
     * This function is used by the calibration window of the Brick Viewer, you
     * should not need to call it in your program.
     * 
     * 
     * @return bool
     */
    public function saveCalibration()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_SAVE_CALIBRATION, $payload, 9);

        $payload = unpack('C1calibration_done', $data);

        return (bool)$payload['calibration_done'];
    }

    /**
     * Sets the period with which the BrickIMUV2::CALLBACK_ACCELERATION callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * @param int $period
     * 
     * @return void
     */
    public function setAccelerationPeriod($period)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);

        $this->sendRequest(self::FUNCTION_SET_ACCELERATION_PERIOD, $payload, 0);
    }

    /**
     * Returns the period as set by BrickIMUV2::setAccelerationPeriod().
     * 
     * 
     * @return int
     */
    public function getAccelerationPeriod()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ACCELERATION_PERIOD, $payload, 12);

        $payload = unpack('V1period', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'period');
    }

    /**
     * Sets the period with which the BrickIMUV2::CALLBACK_MAGNETIC_FIELD callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * @param int $period
     * 
     * @return void
     */
    public function setMagneticFieldPeriod($period)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);

        $this->sendRequest(self::FUNCTION_SET_MAGNETIC_FIELD_PERIOD, $payload, 0);
    }

    /**
     * Returns the period as set by BrickIMUV2::setMagneticFieldPeriod().
     * 
     * 
     * @return int
     */
    public function getMagneticFieldPeriod()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_MAGNETIC_FIELD_PERIOD, $payload, 12);

        $payload = unpack('V1period', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'period');
    }

    /**
     * Sets the period with which the BrickIMUV2::CALLBACK_ANGULAR_VELOCITY callback is
     * triggered periodically. A value of 0 turns the callback off.
     * 
     * @param int $period
     * 
     * @return void
     */
    public function setAngularVelocityPeriod($period)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);

        $this->sendRequest(self::FUNCTION_SET_ANGULAR_VELOCITY_PERIOD, $payload, 0);
    }

    /**
     * Returns the period as set by BrickIMUV2::setAngularVelocityPeriod().
     * 
     * 
     * @return int
     */
    public function getAngularVelocityPeriod()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ANGULAR_VELOCITY_PERIOD, $payload, 12);

        $payload = unpack('V1period', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'period');
    }

    /**
     * Sets the period with which the BrickIMUV2::CALLBACK_TEMPERATURE callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * @param int $period
     * 
     * @return void
     */
    public function setTemperaturePeriod($period)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);

        $this->sendRequest(self::FUNCTION_SET_TEMPERATURE_PERIOD, $payload, 0);
    }

    /**
     * Returns the period as set by BrickIMUV2::setTemperaturePeriod().
     * 
     * 
     * @return int
     */
    public function getTemperaturePeriod()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_TEMPERATURE_PERIOD, $payload, 12);

        $payload = unpack('V1period', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'period');
    }

    /**
     * Sets the period with which the BrickIMUV2::CALLBACK_ORIENTATION callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * @param int $period
     * 
     * @return void
     */
    public function setOrientationPeriod($period)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);

        $this->sendRequest(self::FUNCTION_SET_ORIENTATION_PERIOD, $payload, 0);
    }

    /**
     * Returns the period as set by BrickIMUV2::setOrientationPeriod().
     * 
     * 
     * @return int
     */
    public function getOrientationPeriod()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ORIENTATION_PERIOD, $payload, 12);

        $payload = unpack('V1period', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'period');
    }

    /**
     * Sets the period with which the BrickIMUV2::CALLBACK_LINEAR_ACCELERATION callback is
     * triggered periodically. A value of 0 turns the callback off.
     * 
     * @param int $period
     * 
     * @return void
     */
    public function setLinearAccelerationPeriod($period)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);

        $this->sendRequest(self::FUNCTION_SET_LINEAR_ACCELERATION_PERIOD, $payload, 0);
    }

    /**
     * Returns the period as set by BrickIMUV2::setLinearAccelerationPeriod().
     * 
     * 
     * @return int
     */
    public function getLinearAccelerationPeriod()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_LINEAR_ACCELERATION_PERIOD, $payload, 12);

        $payload = unpack('V1period', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'period');
    }

    /**
     * Sets the period with which the BrickIMUV2::CALLBACK_GRAVITY_VECTOR callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * @param int $period
     * 
     * @return void
     */
    public function setGravityVectorPeriod($period)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);

        $this->sendRequest(self::FUNCTION_SET_GRAVITY_VECTOR_PERIOD, $payload, 0);
    }

    /**
     * Returns the period as set by BrickIMUV2::setGravityVectorPeriod().
     * 
     * 
     * @return int
     */
    public function getGravityVectorPeriod()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_GRAVITY_VECTOR_PERIOD, $payload, 12);

        $payload = unpack('V1period', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'period');
    }

    /**
     * Sets the period with which the BrickIMUV2::CALLBACK_QUATERNION callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * @param int $period
     * 
     * @return void
     */
    public function setQuaternionPeriod($period)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);

        $this->sendRequest(self::FUNCTION_SET_QUATERNION_PERIOD, $payload, 0);
    }

    /**
     * Returns the period as set by BrickIMUV2::setQuaternionPeriod().
     * 
     * 
     * @return int
     */
    public function getQuaternionPeriod()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_QUATERNION_PERIOD, $payload, 12);

        $payload = unpack('V1period', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'period');
    }

    /**
     * Sets the period with which the BrickIMUV2::CALLBACK_ALL_DATA callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * @param int $period
     * 
     * @return void
     */
    public function setAllDataPeriod($period)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);

        $this->sendRequest(self::FUNCTION_SET_ALL_DATA_PERIOD, $payload, 0);
    }

    /**
     * Returns the period as set by BrickIMUV2::setAllDataPeriod().
     * 
     * 
     * @return int
     */
    public function getAllDataPeriod()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ALL_DATA_PERIOD, $payload, 12);

        $payload = unpack('V1period', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'period');
    }

    /**
     * Sets the available sensor configuration for the Magnetometer, Gyroscope and
     * Accelerometer. The Accelerometer Range is user selectable in all fusion modes,
     * all other configurations are auto-controlled in fusion mode.
     * 
     * .. versionadded:: 2.0.5$nbsp;(Firmware)
     * 
     * @param int $magnetometer_rate
     * @param int $gyroscope_range
     * @param int $gyroscope_bandwidth
     * @param int $accelerometer_range
     * @param int $accelerometer_bandwidth
     * 
     * @return void
     */
    public function setSensorConfiguration($magnetometer_rate, $gyroscope_range, $gyroscope_bandwidth, $accelerometer_range, $accelerometer_bandwidth)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $magnetometer_rate);
        $payload .= pack('C', $gyroscope_range);
        $payload .= pack('C', $gyroscope_bandwidth);
        $payload .= pack('C', $accelerometer_range);
        $payload .= pack('C', $accelerometer_bandwidth);

        $this->sendRequest(self::FUNCTION_SET_SENSOR_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the sensor configuration as set by BrickIMUV2::setSensorConfiguration().
     * 
     * .. versionadded:: 2.0.5$nbsp;(Firmware)
     * 
     * 
     * @return array
     */
    public function getSensorConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_SENSOR_CONFIGURATION, $payload, 13);

        $payload = unpack('C1magnetometer_rate/C1gyroscope_range/C1gyroscope_bandwidth/C1accelerometer_range/C1accelerometer_bandwidth', $data);

        $ret['magnetometer_rate'] = $payload['magnetometer_rate'];
        $ret['gyroscope_range'] = $payload['gyroscope_range'];
        $ret['gyroscope_bandwidth'] = $payload['gyroscope_bandwidth'];
        $ret['accelerometer_range'] = $payload['accelerometer_range'];
        $ret['accelerometer_bandwidth'] = $payload['accelerometer_bandwidth'];

        return $ret;
    }

    /**
     * If the fusion mode is turned off, the functions BrickIMUV2::getAcceleration(),
     * BrickIMUV2::getMagneticField() and BrickIMUV2::getAngularVelocity() return uncalibrated
     * and uncompensated sensor data. All other sensor data getters return no data.
     * 
     * Since firmware version 2.0.6 you can also use a fusion mode without magnetometer.
     * In this mode the calculated orientation is relative (with magnetometer it is
     * absolute with respect to the earth). However, the calculation can't be influenced
     * by spurious magnetic fields.
     * 
     * Since firmware version 2.0.13 you can also use a fusion mode without fast
     * magnetometer calibration. This mode is the same as the normal fusion mode,
     * but the fast magnetometer calibration is turned off. So to find the orientation
     * the first time will likely take longer, but small magnetic influences might
     * not affect the automatic calibration as much.
     * 
     * .. versionadded:: 2.0.5$nbsp;(Firmware)
     * 
     * @param int $mode
     * 
     * @return void
     */
    public function setSensorFusionMode($mode)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $mode);

        $this->sendRequest(self::FUNCTION_SET_SENSOR_FUSION_MODE, $payload, 0);
    }

    /**
     * Returns the sensor fusion mode as set by BrickIMUV2::setSensorFusionMode().
     * 
     * .. versionadded:: 2.0.5$nbsp;(Firmware)
     * 
     * 
     * @return int
     */
    public function getSensorFusionMode()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_SENSOR_FUSION_MODE, $payload, 9);

        $payload = unpack('C1mode', $data);

        return $payload['mode'];
    }

    /**
     * The SPITF protocol can be used with a dynamic baudrate. If the dynamic baudrate is
     * enabled, the Brick will try to adapt the baudrate for the communication
     * between Bricks and Bricklets according to the amount of data that is transferred.
     * 
     * The baudrate will be increased exponentially if lots of data is sent/received and
     * decreased linearly if little data is sent/received.
     * 
     * This lowers the baudrate in applications where little data is transferred (e.g.
     * a weather station) and increases the robustness. If there is lots of data to transfer
     * (e.g. Thermal Imaging Bricklet) it automatically increases the baudrate as needed.
     * 
     * In cases where some data has to transferred as fast as possible every few seconds
     * (e.g. RS485 Bricklet with a high baudrate but small payload) you may want to turn
     * the dynamic baudrate off to get the highest possible performance.
     * 
     * The maximum value of the baudrate can be set per port with the function
     * BrickIMUV2::setSPITFPBaudrate(). If the dynamic baudrate is disabled, the baudrate
     * as set by BrickIMUV2::setSPITFPBaudrate() will be used statically.
     * 
     * .. versionadded:: 2.0.10$nbsp;(Firmware)
     * 
     * @param bool $enable_dynamic_baudrate
     * @param int $minimum_dynamic_baudrate
     * 
     * @return void
     */
    public function setSPITFPBaudrateConfig($enable_dynamic_baudrate, $minimum_dynamic_baudrate)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', intval((bool)$enable_dynamic_baudrate));
        $payload .= pack('V', $minimum_dynamic_baudrate);

        $this->sendRequest(self::FUNCTION_SET_SPITFP_BAUDRATE_CONFIG, $payload, 0);
    }

    /**
     * Returns the baudrate config, see BrickIMUV2::setSPITFPBaudrateConfig().
     * 
     * .. versionadded:: 2.0.10$nbsp;(Firmware)
     * 
     * 
     * @return array
     */
    public function getSPITFPBaudrateConfig()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_SPITFP_BAUDRATE_CONFIG, $payload, 13);

        $payload = unpack('C1enable_dynamic_baudrate/V1minimum_dynamic_baudrate', $data);

        $ret['enable_dynamic_baudrate'] = (bool)$payload['enable_dynamic_baudrate'];
        $ret['minimum_dynamic_baudrate'] = IPConnection::fixUnpackedUInt32($payload, 'minimum_dynamic_baudrate');

        return $ret;
    }

    /**
     * Returns the timeout count for the different communication methods.
     * 
     * The methods 0-2 are available for all Bricks, 3-7 only for Master Bricks.
     * 
     * This function is mostly used for debugging during development, in normal operation
     * the counters should nearly always stay at 0.
     * 
     * .. versionadded:: 2.0.7$nbsp;(Firmware)
     * 
     * @param int $communication_method
     * 
     * @return int
     */
    public function getSendTimeoutCount($communication_method)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $communication_method);

        $data = $this->sendRequest(self::FUNCTION_GET_SEND_TIMEOUT_COUNT, $payload, 12);

        $payload = unpack('V1timeout_count', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'timeout_count');
    }

    /**
     * Sets the baudrate for a specific Bricklet port.
     * 
     * If you want to increase the throughput of Bricklets you can increase
     * the baudrate. If you get a high error count because of high
     * interference (see BrickIMUV2::getSPITFPErrorCount()) you can decrease the
     * baudrate.
     * 
     * If the dynamic baudrate feature is enabled, the baudrate set by this
     * function corresponds to the maximum baudrate (see BrickIMUV2::setSPITFPBaudrateConfig()).
     * 
     * Regulatory testing is done with the default baudrate. If CE compatibility
     * or similar is necessary in your applications we recommend to not change
     * the baudrate.
     * 
     * .. versionadded:: 2.0.5$nbsp;(Firmware)
     * 
     * @param string $bricklet_port
     * @param int $baudrate
     * 
     * @return void
     */
    public function setSPITFPBaudrate($bricklet_port, $baudrate)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('c', ord($bricklet_port));
        $payload .= pack('V', $baudrate);

        $this->sendRequest(self::FUNCTION_SET_SPITFP_BAUDRATE, $payload, 0);
    }

    /**
     * Returns the baudrate for a given Bricklet port, see BrickIMUV2::setSPITFPBaudrate().
     * 
     * .. versionadded:: 2.0.5$nbsp;(Firmware)
     * 
     * @param string $bricklet_port
     * 
     * @return int
     */
    public function getSPITFPBaudrate($bricklet_port)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('c', ord($bricklet_port));

        $data = $this->sendRequest(self::FUNCTION_GET_SPITFP_BAUDRATE, $payload, 12);

        $payload = unpack('V1baudrate', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'baudrate');
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
     * The errors counts are for errors that occur on the Brick side. All
     * Bricklets have a similar function that returns the errors on the Bricklet side.
     * 
     * .. versionadded:: 2.0.5$nbsp;(Firmware)
     * 
     * @param string $bricklet_port
     * 
     * @return array
     */
    public function getSPITFPErrorCount($bricklet_port)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('c', ord($bricklet_port));

        $data = $this->sendRequest(self::FUNCTION_GET_SPITFP_ERROR_COUNT, $payload, 24);

        $payload = unpack('V1error_count_ack_checksum/V1error_count_message_checksum/V1error_count_frame/V1error_count_overflow', $data);

        $ret['error_count_ack_checksum'] = IPConnection::fixUnpackedUInt32($payload, 'error_count_ack_checksum');
        $ret['error_count_message_checksum'] = IPConnection::fixUnpackedUInt32($payload, 'error_count_message_checksum');
        $ret['error_count_frame'] = IPConnection::fixUnpackedUInt32($payload, 'error_count_frame');
        $ret['error_count_overflow'] = IPConnection::fixUnpackedUInt32($payload, 'error_count_overflow');

        return $ret;
    }

    /**
     * Enables the status LED.
     * 
     * The status LED is the blue LED next to the USB connector. If enabled is is
     * on and it flickers if data is transfered. If disabled it is always off.
     * 
     * The default state is enabled.
     * 
     * 
     * @return void
     */
    public function enableStatusLED()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_ENABLE_STATUS_LED, $payload, 0);
    }

    /**
     * Disables the status LED.
     * 
     * The status LED is the blue LED next to the USB connector. If enabled is is
     * on and it flickers if data is transfered. If disabled it is always off.
     * 
     * The default state is enabled.
     * 
     * 
     * @return void
     */
    public function disableStatusLED()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_DISABLE_STATUS_LED, $payload, 0);
    }

    /**
     * Returns *true* if the status LED is enabled, *false* otherwise.
     * 
     * 
     * @return bool
     */
    public function isStatusLEDEnabled()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_IS_STATUS_LED_ENABLED, $payload, 9);

        $payload = unpack('C1enabled', $data);

        return (bool)$payload['enabled'];
    }

    /**
     * Returns the firmware and protocol version and the name of the Bricklet for a
     * given port.
     * 
     * This functions sole purpose is to allow automatic flashing of v1.x.y Bricklet
     * plugins.
     * 
     * @param string $port
     * 
     * @return array
     */
    public function getProtocol1BrickletName($port)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('c', ord($port));

        $data = $this->sendRequest(self::FUNCTION_GET_PROTOCOL1_BRICKLET_NAME, $payload, 52);

        $payload = unpack('C1protocol_version/C3firmware_version/c40name', $data);

        $ret['protocol_version'] = $payload['protocol_version'];
        $ret['firmware_version'] = IPConnection::collectUnpackedArray($payload, 'firmware_version', 3);
        $ret['name'] = IPConnection::implodeUnpackedString($payload, 'name', 40);

        return $ret;
    }

    /**
     * Returns the temperature as measured inside the microcontroller. The
     * value returned is not the ambient temperature!
     * 
     * The temperature is only proportional to the real temperature and it has an
     * accuracy of ±15%. Practically it is only useful as an indicator for
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
     * Calling this function will reset the Brick. Calling this function
     * on a Brick inside of a stack will reset the whole stack.
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
     * Writes 32 bytes of firmware to the bricklet attached at the given port.
     * The bytes are written to the position offset * 32.
     * 
     * This function is used by Brick Viewer during flashing. It should not be
     * necessary to call it in a normal user program.
     * 
     * @param string $port
     * @param int $offset
     * @param int[] $chunk
     * 
     * @return void
     */
    public function writeBrickletPlugin($port, $offset, $chunk)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('c', ord($port));
        $payload .= pack('C', $offset);
        for ($i = 0; $i < 32; $i++) {
            $payload .= pack('C', $chunk[$i]);
        }

        $this->sendRequest(self::FUNCTION_WRITE_BRICKLET_PLUGIN, $payload, 0);
    }

    /**
     * Reads 32 bytes of firmware from the bricklet attached at the given port.
     * The bytes are read starting at the position offset * 32.
     * 
     * This function is used by Brick Viewer during flashing. It should not be
     * necessary to call it in a normal user program.
     * 
     * @param string $port
     * @param int $offset
     * 
     * @return array
     */
    public function readBrickletPlugin($port, $offset)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('c', ord($port));
        $payload .= pack('C', $offset);

        $data = $this->sendRequest(self::FUNCTION_READ_BRICKLET_PLUGIN, $payload, 40);

        $payload = unpack('C32chunk', $data);

        return IPConnection::collectUnpackedArray($payload, 'chunk', 32);
    }

    /**
     * Returns the UID, the UID where the Brick is connected to,
     * the position, the hardware and firmware version as well as the
     * device identifier.
     * 
     * The position is the position in the stack from '0' (bottom) to '8' (top).
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
        $payload = unpack('v1x/v1y/v1z', $data);
        $payload['x'] = IPConnection::fixUnpackedInt16($payload, 'x');
        $payload['y'] = IPConnection::fixUnpackedInt16($payload, 'y');
        $payload['z'] = IPConnection::fixUnpackedInt16($payload, 'z');

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
    public function callbackWrapperMagneticField($data)
    {
        $payload = unpack('v1x/v1y/v1z', $data);
        $payload['x'] = IPConnection::fixUnpackedInt16($payload, 'x');
        $payload['y'] = IPConnection::fixUnpackedInt16($payload, 'y');
        $payload['z'] = IPConnection::fixUnpackedInt16($payload, 'z');

        if (array_key_exists(self::CALLBACK_MAGNETIC_FIELD, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_MAGNETIC_FIELD];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_MAGNETIC_FIELD];

            call_user_func($function, $payload['x'], $payload['y'], $payload['z'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperAngularVelocity($data)
    {
        $payload = unpack('v1x/v1y/v1z', $data);
        $payload['x'] = IPConnection::fixUnpackedInt16($payload, 'x');
        $payload['y'] = IPConnection::fixUnpackedInt16($payload, 'y');
        $payload['z'] = IPConnection::fixUnpackedInt16($payload, 'z');

        if (array_key_exists(self::CALLBACK_ANGULAR_VELOCITY, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_ANGULAR_VELOCITY];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_ANGULAR_VELOCITY];

            call_user_func($function, $payload['x'], $payload['y'], $payload['z'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperTemperature($data)
    {
        $payload = unpack('c1temperature', $data);

        if (array_key_exists(self::CALLBACK_TEMPERATURE, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_TEMPERATURE];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_TEMPERATURE];

            call_user_func($function, $payload['temperature'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperLinearAcceleration($data)
    {
        $payload = unpack('v1x/v1y/v1z', $data);
        $payload['x'] = IPConnection::fixUnpackedInt16($payload, 'x');
        $payload['y'] = IPConnection::fixUnpackedInt16($payload, 'y');
        $payload['z'] = IPConnection::fixUnpackedInt16($payload, 'z');

        if (array_key_exists(self::CALLBACK_LINEAR_ACCELERATION, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_LINEAR_ACCELERATION];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_LINEAR_ACCELERATION];

            call_user_func($function, $payload['x'], $payload['y'], $payload['z'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperGravityVector($data)
    {
        $payload = unpack('v1x/v1y/v1z', $data);
        $payload['x'] = IPConnection::fixUnpackedInt16($payload, 'x');
        $payload['y'] = IPConnection::fixUnpackedInt16($payload, 'y');
        $payload['z'] = IPConnection::fixUnpackedInt16($payload, 'z');

        if (array_key_exists(self::CALLBACK_GRAVITY_VECTOR, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_GRAVITY_VECTOR];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_GRAVITY_VECTOR];

            call_user_func($function, $payload['x'], $payload['y'], $payload['z'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperOrientation($data)
    {
        $payload = unpack('v1heading/v1roll/v1pitch', $data);
        $payload['heading'] = IPConnection::fixUnpackedInt16($payload, 'heading');
        $payload['roll'] = IPConnection::fixUnpackedInt16($payload, 'roll');
        $payload['pitch'] = IPConnection::fixUnpackedInt16($payload, 'pitch');

        if (array_key_exists(self::CALLBACK_ORIENTATION, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_ORIENTATION];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_ORIENTATION];

            call_user_func($function, $payload['heading'], $payload['roll'], $payload['pitch'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperQuaternion($data)
    {
        $payload = unpack('v1w/v1x/v1y/v1z', $data);
        $payload['w'] = IPConnection::fixUnpackedInt16($payload, 'w');
        $payload['x'] = IPConnection::fixUnpackedInt16($payload, 'x');
        $payload['y'] = IPConnection::fixUnpackedInt16($payload, 'y');
        $payload['z'] = IPConnection::fixUnpackedInt16($payload, 'z');

        if (array_key_exists(self::CALLBACK_QUATERNION, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_QUATERNION];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_QUATERNION];

            call_user_func($function, $payload['w'], $payload['x'], $payload['y'], $payload['z'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperAllData($data)
    {
        $payload = unpack('v3acceleration/v3magnetic_field/v3angular_velocity/v3euler_angle/v4quaternion/v3linear_acceleration/v3gravity_vector/c1temperature/C1calibration_status', $data);
        $payload['acceleration'] = IPConnection::collectUnpackedInt16Array($payload, 'acceleration', 3);
        $payload['magnetic_field'] = IPConnection::collectUnpackedInt16Array($payload, 'magnetic_field', 3);
        $payload['angular_velocity'] = IPConnection::collectUnpackedInt16Array($payload, 'angular_velocity', 3);
        $payload['euler_angle'] = IPConnection::collectUnpackedInt16Array($payload, 'euler_angle', 3);
        $payload['quaternion'] = IPConnection::collectUnpackedInt16Array($payload, 'quaternion', 4);
        $payload['linear_acceleration'] = IPConnection::collectUnpackedInt16Array($payload, 'linear_acceleration', 3);
        $payload['gravity_vector'] = IPConnection::collectUnpackedInt16Array($payload, 'gravity_vector', 3);

        if (array_key_exists(self::CALLBACK_ALL_DATA, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_ALL_DATA];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_ALL_DATA];

            call_user_func($function, $payload['acceleration'], $payload['magnetic_field'], $payload['angular_velocity'], $payload['euler_angle'], $payload['quaternion'], $payload['linear_acceleration'], $payload['gravity_vector'], $payload['temperature'], $payload['calibration_status'], $user_data);
        }
    }
}

?>
