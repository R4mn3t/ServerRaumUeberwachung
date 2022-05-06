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
class BrickletIMUV3 extends Device
{

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletIMUV3::setAccelerationCallbackConfiguration(). The parameters are the acceleration
     * for the x, y and z axis.
     */
    const CALLBACK_ACCELERATION = 33;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletIMUV3::setMagneticFieldCallbackConfiguration(). The parameters are the magnetic
     * field for the x, y and z axis.
     */
    const CALLBACK_MAGNETIC_FIELD = 34;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletIMUV3::setAngularVelocityCallbackConfiguration(). The parameters are the angular
     * velocity for the x, y and z axis.
     */
    const CALLBACK_ANGULAR_VELOCITY = 35;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletIMUV3::setTemperatureCallbackConfiguration(). The parameter is the temperature.
     */
    const CALLBACK_TEMPERATURE = 36;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletIMUV3::setLinearAccelerationCallbackConfiguration(). The parameters are the
     * linear acceleration for the x, y and z axis.
     */
    const CALLBACK_LINEAR_ACCELERATION = 37;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletIMUV3::setGravityVectorCallbackConfiguration(). The parameters gravity vector
     * for the x, y and z axis.
     */
    const CALLBACK_GRAVITY_VECTOR = 38;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletIMUV3::setOrientationCallbackConfiguration(). The parameters are the orientation
     * (heading (yaw), roll, pitch) of the IMU Brick in Euler angles. See
     * BrickletIMUV3::getOrientation() for details.
     */
    const CALLBACK_ORIENTATION = 39;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletIMUV3::setQuaternionCallbackConfiguration(). The parameters are the orientation
     * (w, x, y, z) of the IMU Brick in quaternions. See BrickletIMUV3::getQuaternion()
     * for details.
     */
    const CALLBACK_QUATERNION = 40;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletIMUV3::setAllDataCallbackConfiguration(). The parameters are as for
     * BrickletIMUV3::getAllData().
     */
    const CALLBACK_ALL_DATA = 41;


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
    const FUNCTION_SAVE_CALIBRATION = 10;

    /**
     * @internal
     */
    const FUNCTION_SET_SENSOR_CONFIGURATION = 11;

    /**
     * @internal
     */
    const FUNCTION_GET_SENSOR_CONFIGURATION = 12;

    /**
     * @internal
     */
    const FUNCTION_SET_SENSOR_FUSION_MODE = 13;

    /**
     * @internal
     */
    const FUNCTION_GET_SENSOR_FUSION_MODE = 14;

    /**
     * @internal
     */
    const FUNCTION_SET_ACCELERATION_CALLBACK_CONFIGURATION = 15;

    /**
     * @internal
     */
    const FUNCTION_GET_ACCELERATION_CALLBACK_CONFIGURATION = 16;

    /**
     * @internal
     */
    const FUNCTION_SET_MAGNETIC_FIELD_CALLBACK_CONFIGURATION = 17;

    /**
     * @internal
     */
    const FUNCTION_GET_MAGNETIC_FIELD_CALLBACK_CONFIGURATION = 18;

    /**
     * @internal
     */
    const FUNCTION_SET_ANGULAR_VELOCITY_CALLBACK_CONFIGURATION = 19;

    /**
     * @internal
     */
    const FUNCTION_GET_ANGULAR_VELOCITY_CALLBACK_CONFIGURATION = 20;

    /**
     * @internal
     */
    const FUNCTION_SET_TEMPERATURE_CALLBACK_CONFIGURATION = 21;

    /**
     * @internal
     */
    const FUNCTION_GET_TEMPERATURE_CALLBACK_CONFIGURATION = 22;

    /**
     * @internal
     */
    const FUNCTION_SET_ORIENTATION_CALLBACK_CONFIGURATION = 23;

    /**
     * @internal
     */
    const FUNCTION_GET_ORIENTATION_CALLBACK_CONFIGURATION = 24;

    /**
     * @internal
     */
    const FUNCTION_SET_LINEAR_ACCELERATION_CALLBACK_CONFIGURATION = 25;

    /**
     * @internal
     */
    const FUNCTION_GET_LINEAR_ACCELERATION_CALLBACK_CONFIGURATION = 26;

    /**
     * @internal
     */
    const FUNCTION_SET_GRAVITY_VECTOR_CALLBACK_CONFIGURATION = 27;

    /**
     * @internal
     */
    const FUNCTION_GET_GRAVITY_VECTOR_CALLBACK_CONFIGURATION = 28;

    /**
     * @internal
     */
    const FUNCTION_SET_QUATERNION_CALLBACK_CONFIGURATION = 29;

    /**
     * @internal
     */
    const FUNCTION_GET_QUATERNION_CALLBACK_CONFIGURATION = 30;

    /**
     * @internal
     */
    const FUNCTION_SET_ALL_DATA_CALLBACK_CONFIGURATION = 31;

    /**
     * @internal
     */
    const FUNCTION_GET_ALL_DATA_CALLBACK_CONFIGURATION = 32;

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

    const DEVICE_IDENTIFIER = 2161;

    const DEVICE_DISPLAY_NAME = 'IMU Bricklet 3.0';

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

        $this->response_expected[self::FUNCTION_GET_ACCELERATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_MAGNETIC_FIELD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_ANGULAR_VELOCITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_TEMPERATURE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_ORIENTATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_LINEAR_ACCELERATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_GRAVITY_VECTOR] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_QUATERNION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_ALL_DATA] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SAVE_CALIBRATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_SENSOR_CONFIGURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_SENSOR_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_SENSOR_FUSION_MODE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_SENSOR_FUSION_MODE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ACCELERATION_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_ACCELERATION_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_MAGNETIC_FIELD_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_MAGNETIC_FIELD_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ANGULAR_VELOCITY_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_ANGULAR_VELOCITY_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_TEMPERATURE_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_TEMPERATURE_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ORIENTATION_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_ORIENTATION_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_LINEAR_ACCELERATION_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_LINEAR_ACCELERATION_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_GRAVITY_VECTOR_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_GRAVITY_VECTOR_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_QUATERNION_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_QUATERNION_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ALL_DATA_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_ALL_DATA_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
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
     * BrickletIMUV3::setSensorConfiguration().
     * 
     * If you want to get the acceleration periodically, it is recommended
     * to use the BrickletIMUV3::CALLBACK_ACCELERATION callback and set the period with
     * BrickletIMUV3::setAccelerationCallbackConfiguration().
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
     * to use the BrickletIMUV3::CALLBACK_MAGNETIC_FIELD callback and set the period with
     * BrickletIMUV3::setMagneticFieldCallbackConfiguration().
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
     * BrickletIMUV3::setSensorConfiguration().
     * 
     * If you want to get the angular velocity periodically, it is recommended
     * to use the BrickletIMUV3::CALLBACK_ANGULAR_VELOCITY acallback nd set the period with
     * BrickletIMUV3::setAngularVelocityCallbackConfiguration().
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
     * to use the BrickletIMUV3::CALLBACK_ORIENTATION callback and set the period with
     * BrickletIMUV3::setOrientationCallbackConfiguration().
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
     * BrickletIMUV3::setSensorConfiguration().
     * 
     * The linear acceleration is the acceleration in each of the three
     * axis of the IMU Brick with the influences of gravity removed.
     * 
     * It is also possible to get the gravity vector with the influence of linear
     * acceleration removed, see BrickletIMUV3::getGravityVector().
     * 
     * If you want to get the linear acceleration periodically, it is recommended
     * to use the BrickletIMUV3::CALLBACK_LINEAR_ACCELERATION callback and set the period with
     * BrickletIMUV3::setLinearAccelerationCallbackConfiguration().
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
     * of gravity removed, see BrickletIMUV3::getLinearAcceleration().
     * 
     * If you want to get the gravity vector periodically, it is recommended
     * to use the BrickletIMUV3::CALLBACK_GRAVITY_VECTOR callback and set the period with
     * BrickletIMUV3::setGravityVectorCallbackConfiguration().
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
     * to use the BrickletIMUV3::CALLBACK_QUATERNION callback and set the period with
     * BrickletIMUV3::setQuaternionCallbackConfiguration().
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
     * * acceleration (see BrickletIMUV3::getAcceleration())
     * * magnetic field (see BrickletIMUV3::getMagneticField())
     * * angular velocity (see BrickletIMUV3::getAngularVelocity())
     * * Euler angles (see BrickletIMUV3::getOrientation())
     * * quaternion (see BrickletIMUV3::getQuaternion())
     * * linear acceleration (see BrickletIMUV3::getLinearAcceleration())
     * * gravity vector (see BrickletIMUV3::getGravityVector())
     * * temperature (see BrickletIMUV3::getTemperature())
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
     * to use the BrickletIMUV3::CALLBACK_ALL_DATA callback and set the period with
     * BrickletIMUV3::setAllDataCallbackConfiguration().
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
     * Sets the available sensor configuration for the Magnetometer, Gyroscope and
     * Accelerometer. The Accelerometer Range is user selectable in all fusion modes,
     * all other configurations are auto-controlled in fusion mode.
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
     * Returns the sensor configuration as set by BrickletIMUV3::setSensorConfiguration().
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
     * If the fusion mode is turned off, the functions BrickletIMUV3::getAcceleration(),
     * BrickletIMUV3::getMagneticField() and BrickletIMUV3::getAngularVelocity() return uncalibrated
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
     * Returns the sensor fusion mode as set by BrickletIMUV3::setSensorFusionMode().
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
     * The period is the period with which the BrickletIMUV3::CALLBACK_ACCELERATION callback
     * is triggered periodically. A value of 0 turns the callback off.
     * 
     * If the `value has to change`-parameter is set to true, the callback is only
     * triggered after the value has changed. If the value didn't change within the
     * period, the callback is triggered immediately on change.
     * 
     * If it is set to false, the callback is continuously triggered with the period,
     * independent of the value.
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
     * Returns the callback configuration as set by BrickletIMUV3::setAccelerationCallbackConfiguration().
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
     * The period is the period with which the BrickletIMUV3::CALLBACK_MAGNETIC_FIELD callback
     * is triggered periodically. A value of 0 turns the callback off.
     * 
     * If the `value has to change`-parameter is set to true, the callback is only
     * triggered after the value has changed. If the value didn't change within the
     * period, the callback is triggered immediately on change.
     * 
     * If it is set to false, the callback is continuously triggered with the period,
     * independent of the value.
     * 
     * @param int $period
     * @param bool $value_has_to_change
     * 
     * @return void
     */
    public function setMagneticFieldCallbackConfiguration($period, $value_has_to_change)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);
        $payload .= pack('C', intval((bool)$value_has_to_change));

        $this->sendRequest(self::FUNCTION_SET_MAGNETIC_FIELD_CALLBACK_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the callback configuration as set by BrickletIMUV3::setMagneticFieldCallbackConfiguration().
     * 
     * 
     * @return array
     */
    public function getMagneticFieldCallbackConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_MAGNETIC_FIELD_CALLBACK_CONFIGURATION, $payload, 13);

        $payload = unpack('V1period/C1value_has_to_change', $data);

        $ret['period'] = IPConnection::fixUnpackedUInt32($payload, 'period');
        $ret['value_has_to_change'] = (bool)$payload['value_has_to_change'];

        return $ret;
    }

    /**
     * The period is the period with which the BrickletIMUV3::CALLBACK_ANGULAR_VELOCITY callback
     * is triggered periodically. A value of 0 turns the callback off.
     * 
     * If the `value has to change`-parameter is set to true, the callback is only
     * triggered after the value has changed. If the value didn't change within the
     * period, the callback is triggered immediately on change.
     * 
     * If it is set to false, the callback is continuously triggered with the period,
     * independent of the value.
     * 
     * @param int $period
     * @param bool $value_has_to_change
     * 
     * @return void
     */
    public function setAngularVelocityCallbackConfiguration($period, $value_has_to_change)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);
        $payload .= pack('C', intval((bool)$value_has_to_change));

        $this->sendRequest(self::FUNCTION_SET_ANGULAR_VELOCITY_CALLBACK_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the callback configuration as set by BrickletIMUV3::setAngularVelocityCallbackConfiguration().
     * 
     * 
     * @return array
     */
    public function getAngularVelocityCallbackConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ANGULAR_VELOCITY_CALLBACK_CONFIGURATION, $payload, 13);

        $payload = unpack('V1period/C1value_has_to_change', $data);

        $ret['period'] = IPConnection::fixUnpackedUInt32($payload, 'period');
        $ret['value_has_to_change'] = (bool)$payload['value_has_to_change'];

        return $ret;
    }

    /**
     * The period is the period with which the BrickletIMUV3::CALLBACK_TEMPERATURE callback
     * is triggered periodically. A value of 0 turns the callback off.
     * 
     * If the `value has to change`-parameter is set to true, the callback is only
     * triggered after the value has changed. If the value didn't change within the
     * period, the callback is triggered immediately on change.
     * 
     * If it is set to false, the callback is continuously triggered with the period,
     * independent of the value.
     * 
     * @param int $period
     * @param bool $value_has_to_change
     * 
     * @return void
     */
    public function setTemperatureCallbackConfiguration($period, $value_has_to_change)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);
        $payload .= pack('C', intval((bool)$value_has_to_change));

        $this->sendRequest(self::FUNCTION_SET_TEMPERATURE_CALLBACK_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the callback configuration as set by BrickletIMUV3::setTemperatureCallbackConfiguration().
     * 
     * 
     * @return array
     */
    public function getTemperatureCallbackConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_TEMPERATURE_CALLBACK_CONFIGURATION, $payload, 13);

        $payload = unpack('V1period/C1value_has_to_change', $data);

        $ret['period'] = IPConnection::fixUnpackedUInt32($payload, 'period');
        $ret['value_has_to_change'] = (bool)$payload['value_has_to_change'];

        return $ret;
    }

    /**
     * The period is the period with which the BrickletIMUV3::CALLBACK_ORIENTATION callback
     * is triggered periodically. A value of 0 turns the callback off.
     * 
     * If the `value has to change`-parameter is set to true, the callback is only
     * triggered after the value has changed. If the value didn't change within the
     * period, the callback is triggered immediately on change.
     * 
     * If it is set to false, the callback is continuously triggered with the period,
     * independent of the value.
     * 
     * @param int $period
     * @param bool $value_has_to_change
     * 
     * @return void
     */
    public function setOrientationCallbackConfiguration($period, $value_has_to_change)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);
        $payload .= pack('C', intval((bool)$value_has_to_change));

        $this->sendRequest(self::FUNCTION_SET_ORIENTATION_CALLBACK_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the callback configuration as set by BrickletIMUV3::setOrientationCallbackConfiguration().
     * 
     * 
     * @return array
     */
    public function getOrientationCallbackConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ORIENTATION_CALLBACK_CONFIGURATION, $payload, 13);

        $payload = unpack('V1period/C1value_has_to_change', $data);

        $ret['period'] = IPConnection::fixUnpackedUInt32($payload, 'period');
        $ret['value_has_to_change'] = (bool)$payload['value_has_to_change'];

        return $ret;
    }

    /**
     * The period is the period with which the BrickletIMUV3::CALLBACK_LINEAR_ACCELERATION callback
     * is triggered periodically. A value of 0 turns the callback off.
     * 
     * If the `value has to change`-parameter is set to true, the callback is only
     * triggered after the value has changed. If the value didn't change within the
     * period, the callback is triggered immediately on change.
     * 
     * If it is set to false, the callback is continuously triggered with the period,
     * independent of the value.
     * 
     * @param int $period
     * @param bool $value_has_to_change
     * 
     * @return void
     */
    public function setLinearAccelerationCallbackConfiguration($period, $value_has_to_change)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);
        $payload .= pack('C', intval((bool)$value_has_to_change));

        $this->sendRequest(self::FUNCTION_SET_LINEAR_ACCELERATION_CALLBACK_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the callback configuration as set by BrickletIMUV3::setLinearAccelerationCallbackConfiguration().
     * 
     * 
     * @return array
     */
    public function getLinearAccelerationCallbackConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_LINEAR_ACCELERATION_CALLBACK_CONFIGURATION, $payload, 13);

        $payload = unpack('V1period/C1value_has_to_change', $data);

        $ret['period'] = IPConnection::fixUnpackedUInt32($payload, 'period');
        $ret['value_has_to_change'] = (bool)$payload['value_has_to_change'];

        return $ret;
    }

    /**
     * The period is the period with which the BrickletIMUV3::CALLBACK_GRAVITY_VECTOR callback
     * is triggered periodically. A value of 0 turns the callback off.
     * 
     * If the `value has to change`-parameter is set to true, the callback is only
     * triggered after the value has changed. If the value didn't change within the
     * period, the callback is triggered immediately on change.
     * 
     * If it is set to false, the callback is continuously triggered with the period,
     * independent of the value.
     * 
     * @param int $period
     * @param bool $value_has_to_change
     * 
     * @return void
     */
    public function setGravityVectorCallbackConfiguration($period, $value_has_to_change)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);
        $payload .= pack('C', intval((bool)$value_has_to_change));

        $this->sendRequest(self::FUNCTION_SET_GRAVITY_VECTOR_CALLBACK_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the callback configuration as set by BrickletIMUV3::setGravityVectorCallbackConfiguration().
     * 
     * 
     * @return array
     */
    public function getGravityVectorCallbackConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_GRAVITY_VECTOR_CALLBACK_CONFIGURATION, $payload, 13);

        $payload = unpack('V1period/C1value_has_to_change', $data);

        $ret['period'] = IPConnection::fixUnpackedUInt32($payload, 'period');
        $ret['value_has_to_change'] = (bool)$payload['value_has_to_change'];

        return $ret;
    }

    /**
     * The period is the period with which the BrickletIMUV3::CALLBACK_QUATERNION callback
     * is triggered periodically. A value of 0 turns the callback off.
     * 
     * If the `value has to change`-parameter is set to true, the callback is only
     * triggered after the value has changed. If the value didn't change within the
     * period, the callback is triggered immediately on change.
     * 
     * If it is set to false, the callback is continuously triggered with the period,
     * independent of the value.
     * 
     * @param int $period
     * @param bool $value_has_to_change
     * 
     * @return void
     */
    public function setQuaternionCallbackConfiguration($period, $value_has_to_change)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);
        $payload .= pack('C', intval((bool)$value_has_to_change));

        $this->sendRequest(self::FUNCTION_SET_QUATERNION_CALLBACK_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the callback configuration as set by BrickletIMUV3::setQuaternionCallbackConfiguration().
     * 
     * 
     * @return array
     */
    public function getQuaternionCallbackConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_QUATERNION_CALLBACK_CONFIGURATION, $payload, 13);

        $payload = unpack('V1period/C1value_has_to_change', $data);

        $ret['period'] = IPConnection::fixUnpackedUInt32($payload, 'period');
        $ret['value_has_to_change'] = (bool)$payload['value_has_to_change'];

        return $ret;
    }

    /**
     * The period is the period with which the BrickletIMUV3::CALLBACK_ALL_DATA callback
     * is triggered periodically. A value of 0 turns the callback off.
     * 
     * If the `value has to change`-parameter is set to true, the callback is only
     * triggered after the value has changed. If the value didn't change within the
     * period, the callback is triggered immediately on change.
     * 
     * If it is set to false, the callback is continuously triggered with the period,
     * independent of the value.
     * 
     * @param int $period
     * @param bool $value_has_to_change
     * 
     * @return void
     */
    public function setAllDataCallbackConfiguration($period, $value_has_to_change)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);
        $payload .= pack('C', intval((bool)$value_has_to_change));

        $this->sendRequest(self::FUNCTION_SET_ALL_DATA_CALLBACK_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the callback configuration as set by BrickletIMUV3::setAllDataCallbackConfiguration().
     * 
     * 
     * @return array
     */
    public function getAllDataCallbackConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ALL_DATA_CALLBACK_CONFIGURATION, $payload, 13);

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
     * Returns the current bootloader mode, see BrickletIMUV3::setBootloaderMode().
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
     * Sets the firmware pointer for BrickletIMUV3::writeFirmware(). The pointer has
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
     * BrickletIMUV3::setWriteFirmwarePointer() before. The firmware is written
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
     * Returns the configuration as set by BrickletIMUV3::setStatusLEDConfig()
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
