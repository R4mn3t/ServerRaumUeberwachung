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
class BrickIMU extends Device
{

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickIMU::setAccelerationPeriod(). The parameters are the acceleration
     * for the x, y and z axis.
     */
    const CALLBACK_ACCELERATION = 31;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickIMU::setMagneticFieldPeriod(). The parameters are the magnetic
     * field for the x, y and z axis.
     */
    const CALLBACK_MAGNETIC_FIELD = 32;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickIMU::setAngularVelocityPeriod(). The parameters are the angular
     * velocity for the x, y and z axis.
     */
    const CALLBACK_ANGULAR_VELOCITY = 33;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickIMU::setAllDataPeriod(). The parameters are the acceleration,
     * the magnetic field and the angular velocity for the x, y and z axis as
     * well as the temperature of the IMU Brick.
     */
    const CALLBACK_ALL_DATA = 34;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickIMU::setOrientationPeriod(). The parameters are the orientation
     * (roll, pitch and yaw) of the IMU Brick in Euler angles. See
     * BrickIMU::getOrientation() for details.
     */
    const CALLBACK_ORIENTATION = 35;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickIMU::setQuaternionPeriod(). The parameters are the orientation
     * (x, y, z, w) of the IMU Brick in quaternions. See BrickIMU::getQuaternion()
     * for details.
     */
    const CALLBACK_QUATERNION = 36;


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
    const FUNCTION_GET_ALL_DATA = 4;

    /**
     * @internal
     */
    const FUNCTION_GET_ORIENTATION = 5;

    /**
     * @internal
     */
    const FUNCTION_GET_QUATERNION = 6;

    /**
     * @internal
     */
    const FUNCTION_GET_IMU_TEMPERATURE = 7;

    /**
     * @internal
     */
    const FUNCTION_LEDS_ON = 8;

    /**
     * @internal
     */
    const FUNCTION_LEDS_OFF = 9;

    /**
     * @internal
     */
    const FUNCTION_ARE_LEDS_ON = 10;

    /**
     * @internal
     */
    const FUNCTION_SET_ACCELERATION_RANGE = 11;

    /**
     * @internal
     */
    const FUNCTION_GET_ACCELERATION_RANGE = 12;

    /**
     * @internal
     */
    const FUNCTION_SET_MAGNETOMETER_RANGE = 13;

    /**
     * @internal
     */
    const FUNCTION_GET_MAGNETOMETER_RANGE = 14;

    /**
     * @internal
     */
    const FUNCTION_SET_CONVERGENCE_SPEED = 15;

    /**
     * @internal
     */
    const FUNCTION_GET_CONVERGENCE_SPEED = 16;

    /**
     * @internal
     */
    const FUNCTION_SET_CALIBRATION = 17;

    /**
     * @internal
     */
    const FUNCTION_GET_CALIBRATION = 18;

    /**
     * @internal
     */
    const FUNCTION_SET_ACCELERATION_PERIOD = 19;

    /**
     * @internal
     */
    const FUNCTION_GET_ACCELERATION_PERIOD = 20;

    /**
     * @internal
     */
    const FUNCTION_SET_MAGNETIC_FIELD_PERIOD = 21;

    /**
     * @internal
     */
    const FUNCTION_GET_MAGNETIC_FIELD_PERIOD = 22;

    /**
     * @internal
     */
    const FUNCTION_SET_ANGULAR_VELOCITY_PERIOD = 23;

    /**
     * @internal
     */
    const FUNCTION_GET_ANGULAR_VELOCITY_PERIOD = 24;

    /**
     * @internal
     */
    const FUNCTION_SET_ALL_DATA_PERIOD = 25;

    /**
     * @internal
     */
    const FUNCTION_GET_ALL_DATA_PERIOD = 26;

    /**
     * @internal
     */
    const FUNCTION_SET_ORIENTATION_PERIOD = 27;

    /**
     * @internal
     */
    const FUNCTION_GET_ORIENTATION_PERIOD = 28;

    /**
     * @internal
     */
    const FUNCTION_SET_QUATERNION_PERIOD = 29;

    /**
     * @internal
     */
    const FUNCTION_GET_QUATERNION_PERIOD = 30;

    /**
     * @internal
     */
    const FUNCTION_ORIENTATION_CALCULATION_ON = 37;

    /**
     * @internal
     */
    const FUNCTION_ORIENTATION_CALCULATION_OFF = 38;

    /**
     * @internal
     */
    const FUNCTION_IS_ORIENTATION_CALCULATION_ON = 39;

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

    const CALIBRATION_TYPE_ACCELEROMETER_GAIN = 0;
    const CALIBRATION_TYPE_ACCELEROMETER_BIAS = 1;
    const CALIBRATION_TYPE_MAGNETOMETER_GAIN = 2;
    const CALIBRATION_TYPE_MAGNETOMETER_BIAS = 3;
    const CALIBRATION_TYPE_GYROSCOPE_GAIN = 4;
    const CALIBRATION_TYPE_GYROSCOPE_BIAS = 5;
    const COMMUNICATION_METHOD_NONE = 0;
    const COMMUNICATION_METHOD_USB = 1;
    const COMMUNICATION_METHOD_SPI_STACK = 2;
    const COMMUNICATION_METHOD_CHIBI = 3;
    const COMMUNICATION_METHOD_RS485 = 4;
    const COMMUNICATION_METHOD_WIFI = 5;
    const COMMUNICATION_METHOD_ETHERNET = 6;
    const COMMUNICATION_METHOD_WIFI_V2 = 7;

    const DEVICE_IDENTIFIER = 16;

    const DEVICE_DISPLAY_NAME = 'IMU Brick';

    /**
     * Creates an object with the unique device ID $uid. This object can
     * then be added to the IP connection.
     *
     * @param string $uid
     */
    public function __construct($uid, $ipcon)
    {
        parent::__construct($uid, $ipcon, self::DEVICE_IDENTIFIER, self::DEVICE_DISPLAY_NAME);

        $this->api_version = array(2, 0, 4);

        $this->response_expected[self::FUNCTION_GET_ACCELERATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_MAGNETIC_FIELD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_ANGULAR_VELOCITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_ALL_DATA] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_ORIENTATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_QUATERNION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_IMU_TEMPERATURE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_LEDS_ON] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_LEDS_OFF] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_ARE_LEDS_ON] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ACCELERATION_RANGE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_ACCELERATION_RANGE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_MAGNETOMETER_RANGE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_MAGNETOMETER_RANGE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_CONVERGENCE_SPEED] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_CONVERGENCE_SPEED] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_CALIBRATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_CALIBRATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ACCELERATION_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_ACCELERATION_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_MAGNETIC_FIELD_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_MAGNETIC_FIELD_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ANGULAR_VELOCITY_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_ANGULAR_VELOCITY_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ALL_DATA_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_ALL_DATA_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ORIENTATION_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_ORIENTATION_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_QUATERNION_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_QUATERNION_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_ORIENTATION_CALCULATION_ON] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_ORIENTATION_CALCULATION_OFF] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_IS_ORIENTATION_CALCULATION_ON] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
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
        $this->callback_wrappers[self::CALLBACK_ALL_DATA] = array(28, 'callbackWrapperAllData');
        $this->callback_wrappers[self::CALLBACK_ORIENTATION] = array(14, 'callbackWrapperOrientation');
        $this->callback_wrappers[self::CALLBACK_QUATERNION] = array(24, 'callbackWrapperQuaternion');

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
     * x, y and z axis.
     * 
     * If you want to get the acceleration periodically, it is recommended
     * to use the BrickIMU::CALLBACK_ACCELERATION callback and set the period with
     * BrickIMU::setAccelerationPeriod().
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
     * to use the BrickIMU::CALLBACK_MAGNETIC_FIELD callback and set the period with
     * BrickIMU::setMagneticFieldPeriod().
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
     * x, y and z axis in °/14.375s (you have to divide by 14.375 to
     * get the value in °/s).
     * 
     * If you want to get the angular velocity periodically, it is recommended
     * to use the BrickIMU::CALLBACK_ANGULAR_VELOCITY callback and set the period with
     * BrickIMU::setAngularVelocityPeriod().
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
     * Returns the data from BrickIMU::getAcceleration(), BrickIMU::getMagneticField()
     * and BrickIMU::getAngularVelocity() as well as the temperature of the IMU Brick.
     * 
     * If you want to get the data periodically, it is recommended
     * to use the BrickIMU::CALLBACK_ALL_DATA callback and set the period with
     * BrickIMU::setAllDataPeriod().
     * 
     * 
     * @return array
     */
    public function getAllData()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ALL_DATA, $payload, 28);

        $payload = unpack('v1acc_x/v1acc_y/v1acc_z/v1mag_x/v1mag_y/v1mag_z/v1ang_x/v1ang_y/v1ang_z/v1temperature', $data);

        $ret['acc_x'] = IPConnection::fixUnpackedInt16($payload, 'acc_x');
        $ret['acc_y'] = IPConnection::fixUnpackedInt16($payload, 'acc_y');
        $ret['acc_z'] = IPConnection::fixUnpackedInt16($payload, 'acc_z');
        $ret['mag_x'] = IPConnection::fixUnpackedInt16($payload, 'mag_x');
        $ret['mag_y'] = IPConnection::fixUnpackedInt16($payload, 'mag_y');
        $ret['mag_z'] = IPConnection::fixUnpackedInt16($payload, 'mag_z');
        $ret['ang_x'] = IPConnection::fixUnpackedInt16($payload, 'ang_x');
        $ret['ang_y'] = IPConnection::fixUnpackedInt16($payload, 'ang_y');
        $ret['ang_z'] = IPConnection::fixUnpackedInt16($payload, 'ang_z');
        $ret['temperature'] = IPConnection::fixUnpackedInt16($payload, 'temperature');

        return $ret;
    }

    /**
     * Returns the current orientation (roll, pitch, yaw) of the IMU Brick as Euler
     * angles. Note that Euler angles always experience a
     * `gimbal lock <https://en.wikipedia.org/wiki/Gimbal_lock>`__.
     * 
     * We recommend that you use quaternions instead.
     * 
     * The order to sequence in which the orientation values should be applied is
     * roll, yaw, pitch.
     * 
     * If you want to get the orientation periodically, it is recommended
     * to use the BrickIMU::CALLBACK_ORIENTATION callback and set the period with
     * BrickIMU::setOrientationPeriod().
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

        $payload = unpack('v1roll/v1pitch/v1yaw', $data);

        $ret['roll'] = IPConnection::fixUnpackedInt16($payload, 'roll');
        $ret['pitch'] = IPConnection::fixUnpackedInt16($payload, 'pitch');
        $ret['yaw'] = IPConnection::fixUnpackedInt16($payload, 'yaw');

        return $ret;
    }

    /**
     * Returns the current orientation (x, y, z, w) of the IMU as
     * `quaternions <https://en.wikipedia.org/wiki/Quaternions_and_spatial_rotation>`__.
     * 
     * You can go from quaternions to Euler angles with the following formula::
     * 
     *  xAngle = atan2(2*y*w - 2*x*z, 1 - 2*y*y - 2*z*z)
     *  yAngle = atan2(2*x*w - 2*y*z, 1 - 2*x*x - 2*z*z)
     *  zAngle =  asin(2*x*y + 2*z*w)
     * 
     * This process is not reversible, because of the
     * `gimbal lock <https://en.wikipedia.org/wiki/Gimbal_lock>`__.
     * 
     * It is also possible to calculate independent angles. You can calculate
     * yaw, pitch and roll in a right-handed vehicle coordinate system according to
     * DIN70000 with::
     * 
     *  yaw   =  atan2(2*x*y + 2*w*z, w*w + x*x - y*y - z*z)
     *  pitch = -asin(2*w*y - 2*x*z)
     *  roll  = -atan2(2*y*z + 2*w*x, -w*w + x*x + y*y - z*z))
     * 
     * Converting the quaternions to an OpenGL transformation matrix is
     * possible with the following formula::
     * 
     *  matrix = [[1 - 2*(y*y + z*z),     2*(x*y - w*z),     2*(x*z + w*y), 0],
     *            [    2*(x*y + w*z), 1 - 2*(x*x + z*z),     2*(y*z - w*x), 0],
     *            [    2*(x*z - w*y),     2*(y*z + w*x), 1 - 2*(x*x + y*y), 0],
     *            [                0,                 0,                 0, 1]]
     * 
     * If you want to get the quaternions periodically, it is recommended
     * to use the BrickIMU::CALLBACK_QUATERNION callback and set the period with
     * BrickIMU::setQuaternionPeriod().
     * 
     * 
     * @return array
     */
    public function getQuaternion()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_QUATERNION, $payload, 24);

        $payload = unpack('f1x/f1y/f1z/f1w', $data);

        $ret['x'] = $payload['x'];
        $ret['y'] = $payload['y'];
        $ret['z'] = $payload['z'];
        $ret['w'] = $payload['w'];

        return $ret;
    }

    /**
     * Returns the temperature of the IMU Brick.
     * 
     * 
     * @return int
     */
    public function getIMUTemperature()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_IMU_TEMPERATURE, $payload, 10);

        $payload = unpack('v1temperature', $data);

        return IPConnection::fixUnpackedInt16($payload, 'temperature');
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
     * Not implemented yet.
     * 
     * @param int $range
     * 
     * @return void
     */
    public function setAccelerationRange($range)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $range);

        $this->sendRequest(self::FUNCTION_SET_ACCELERATION_RANGE, $payload, 0);
    }

    /**
     * Not implemented yet.
     * 
     * 
     * @return int
     */
    public function getAccelerationRange()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ACCELERATION_RANGE, $payload, 9);

        $payload = unpack('C1range', $data);

        return $payload['range'];
    }

    /**
     * Not implemented yet.
     * 
     * @param int $range
     * 
     * @return void
     */
    public function setMagnetometerRange($range)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $range);

        $this->sendRequest(self::FUNCTION_SET_MAGNETOMETER_RANGE, $payload, 0);
    }

    /**
     * Not implemented yet.
     * 
     * 
     * @return int
     */
    public function getMagnetometerRange()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_MAGNETOMETER_RANGE, $payload, 9);

        $payload = unpack('C1range', $data);

        return $payload['range'];
    }

    /**
     * Sets the convergence speed of the IMU Brick. The convergence speed
     * determines how the different sensor measurements are fused.
     * 
     * If the orientation of the IMU Brick is off by 10° and the convergence speed is
     * set to 20°/s, it will take 0.5s until the orientation is corrected. However,
     * if the correct orientation is reached and the convergence speed is too high,
     * the orientation will fluctuate with the fluctuations of the accelerometer and
     * the magnetometer.
     * 
     * If you set the convergence speed to 0, practically only the gyroscope is used
     * to calculate the orientation. This gives very smooth movements, but errors of the
     * gyroscope will not be corrected. If you set the convergence speed to something
     * above 500, practically only the magnetometer and the accelerometer are used to
     * calculate the orientation. In this case the movements are abrupt and the values
     * will fluctuate, but there won't be any errors that accumulate over time.
     * 
     * In an application with high angular velocities, we recommend a high convergence
     * speed, so the errors of the gyroscope can be corrected fast. In applications with
     * only slow movements we recommend a low convergence speed. You can change the
     * convergence speed on the fly. So it is possible (and recommended) to increase
     * the convergence speed before an abrupt movement and decrease it afterwards
     * again.
     * 
     * You might want to play around with the convergence speed in the Brick Viewer to
     * get a feeling for a good value for your application.
     * 
     * @param int $speed
     * 
     * @return void
     */
    public function setConvergenceSpeed($speed)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $speed);

        $this->sendRequest(self::FUNCTION_SET_CONVERGENCE_SPEED, $payload, 0);
    }

    /**
     * Returns the convergence speed as set by BrickIMU::setConvergenceSpeed().
     * 
     * 
     * @return int
     */
    public function getConvergenceSpeed()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_CONVERGENCE_SPEED, $payload, 10);

        $payload = unpack('v1speed', $data);

        return $payload['speed'];
    }

    /**
     * There are several different types that can be calibrated:
     * 
     * <code>
     *  "Type", "Description", "Values"
     * 
     *  "0",    "Accelerometer Gain", "``[mul x, mul y, mul z, div x, div y, div z, 0, 0, 0, 0]``"
     *  "1",    "Accelerometer Bias", "``[bias x, bias y, bias z, 0, 0, 0, 0, 0, 0, 0]``"
     *  "2",    "Magnetometer Gain",  "``[mul x, mul y, mul z, div x, div y, div z, 0, 0, 0, 0]``"
     *  "3",    "Magnetometer Bias",  "``[bias x, bias y, bias z, 0, 0, 0, 0, 0, 0, 0]``"
     *  "4",    "Gyroscope Gain",     "``[mul x, mul y, mul z, div x, div y, div z, 0, 0, 0, 0]``"
     *  "5",    "Gyroscope Bias",     "``[bias xl, bias yl, bias zl, temp l, bias xh, bias yh, bias zh, temp h, 0, 0]``"
     * </code>
     * 
     * The calibration via gain and bias is done with the following formula::
     * 
     *  new_value = (bias + orig_value) * gain_mul / gain_div
     * 
     * If you really want to write your own calibration software, please keep
     * in mind that you first have to undo the old calibration (set bias to 0 and
     * gain to 1/1) and that you have to average over several thousand values
     * to obtain a usable result in the end.
     * 
     * The gyroscope bias is highly dependent on the temperature, so you have to
     * calibrate the bias two times with different temperatures. The values ``xl``,
     * ``yl``, ``zl`` and ``temp l`` are the bias for ``x``, ``y``, ``z`` and the
     * corresponding temperature for a low temperature. The values ``xh``, ``yh``,
     * ``zh`` and ``temp h`` are the same for a high temperatures. The temperature
     * difference should be at least 5°C. If you have a temperature where the
     * IMU Brick is mostly used, you should use this temperature for one of the
     * sampling points.
     * 
     * <note>
     *  We highly recommend that you use the Brick Viewer to calibrate your
     *  IMU Brick.
     * </note>
     * 
     * @param int $typ
     * @param int[] $data
     * 
     * @return void
     */
    public function setCalibration($typ, $data)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $typ);
        for ($i = 0; $i < 10; $i++) {
            $payload .= pack('v', $data[$i]);
        }

        $this->sendRequest(self::FUNCTION_SET_CALIBRATION, $payload, 0);
    }

    /**
     * Returns the calibration for a given type as set by BrickIMU::setCalibration().
     * 
     * @param int $typ
     * 
     * @return array
     */
    public function getCalibration($typ)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $typ);

        $data = $this->sendRequest(self::FUNCTION_GET_CALIBRATION, $payload, 28);

        $payload = unpack('v10data', $data);

        return IPConnection::collectUnpackedInt16Array($payload, 'data', 10);
    }

    /**
     * Sets the period with which the BrickIMU::CALLBACK_ACCELERATION callback is triggered
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
     * Returns the period as set by BrickIMU::setAccelerationPeriod().
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
     * Sets the period with which the BrickIMU::CALLBACK_MAGNETIC_FIELD callback is
     * triggered periodically. A value of 0 turns the callback off.
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
     * Returns the period as set by BrickIMU::setMagneticFieldPeriod().
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
     * Sets the period with which the BrickIMU::CALLBACK_ANGULAR_VELOCITY callback is
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
     * Returns the period as set by BrickIMU::setAngularVelocityPeriod().
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
     * Sets the period with which the BrickIMU::CALLBACK_ALL_DATA callback is triggered
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
     * Returns the period as set by BrickIMU::setAllDataPeriod().
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
     * Sets the period with which the BrickIMU::CALLBACK_ORIENTATION callback is triggered
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
     * Returns the period as set by BrickIMU::setOrientationPeriod().
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
     * Sets the period with which the BrickIMU::CALLBACK_QUATERNION callback is triggered
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
     * Returns the period as set by BrickIMU::setQuaternionPeriod().
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
     * Turns the orientation calculation of the IMU Brick on.
     * 
     * As default the calculation is on.
     * 
     * .. versionadded:: 2.0.2$nbsp;(Firmware)
     * 
     * 
     * @return void
     */
    public function orientationCalculationOn()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_ORIENTATION_CALCULATION_ON, $payload, 0);
    }

    /**
     * Turns the orientation calculation of the IMU Brick off.
     * 
     * If the calculation is off, BrickIMU::getOrientation() will return
     * the last calculated value until the calculation is turned on again.
     * 
     * The trigonometric functions that are needed to calculate the orientation
     * are very expensive. We recommend to turn the orientation calculation
     * off if the orientation is not needed, to free calculation time for the
     * sensor fusion algorithm.
     * 
     * As default the calculation is on.
     * 
     * .. versionadded:: 2.0.2$nbsp;(Firmware)
     * 
     * 
     * @return void
     */
    public function orientationCalculationOff()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_ORIENTATION_CALCULATION_OFF, $payload, 0);
    }

    /**
     * Returns *true* if the orientation calculation of the IMU Brick
     * is on, *false* otherwise.
     * 
     * .. versionadded:: 2.0.2$nbsp;(Firmware)
     * 
     * 
     * @return bool
     */
    public function isOrientationCalculationOn()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_IS_ORIENTATION_CALCULATION_ON, $payload, 9);

        $payload = unpack('C1orientation_calculation_on', $data);

        return (bool)$payload['orientation_calculation_on'];
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
     * BrickIMU::setSPITFPBaudrate(). If the dynamic baudrate is disabled, the baudrate
     * as set by BrickIMU::setSPITFPBaudrate() will be used statically.
     * 
     * .. versionadded:: 2.3.5$nbsp;(Firmware)
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
     * Returns the baudrate config, see BrickIMU::setSPITFPBaudrateConfig().
     * 
     * .. versionadded:: 2.3.5$nbsp;(Firmware)
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
     * .. versionadded:: 2.3.3$nbsp;(Firmware)
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
     * interference (see BrickIMU::getSPITFPErrorCount()) you can decrease the
     * baudrate.
     * 
     * If the dynamic baudrate feature is enabled, the baudrate set by this
     * function corresponds to the maximum baudrate (see BrickIMU::setSPITFPBaudrateConfig()).
     * 
     * Regulatory testing is done with the default baudrate. If CE compatibility
     * or similar is necessary in your applications we recommend to not change
     * the baudrate.
     * 
     * .. versionadded:: 2.3.3$nbsp;(Firmware)
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
     * Returns the baudrate for a given Bricklet port, see BrickIMU::setSPITFPBaudrate().
     * 
     * .. versionadded:: 2.3.3$nbsp;(Firmware)
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
     * .. versionadded:: 2.3.3$nbsp;(Firmware)
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
     * .. versionadded:: 2.3.1$nbsp;(Firmware)
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
     * .. versionadded:: 2.3.1$nbsp;(Firmware)
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
     * .. versionadded:: 2.3.1$nbsp;(Firmware)
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
    public function callbackWrapperAllData($data)
    {
        $payload = unpack('v1acc_x/v1acc_y/v1acc_z/v1mag_x/v1mag_y/v1mag_z/v1ang_x/v1ang_y/v1ang_z/v1temperature', $data);
        $payload['acc_x'] = IPConnection::fixUnpackedInt16($payload, 'acc_x');
        $payload['acc_y'] = IPConnection::fixUnpackedInt16($payload, 'acc_y');
        $payload['acc_z'] = IPConnection::fixUnpackedInt16($payload, 'acc_z');
        $payload['mag_x'] = IPConnection::fixUnpackedInt16($payload, 'mag_x');
        $payload['mag_y'] = IPConnection::fixUnpackedInt16($payload, 'mag_y');
        $payload['mag_z'] = IPConnection::fixUnpackedInt16($payload, 'mag_z');
        $payload['ang_x'] = IPConnection::fixUnpackedInt16($payload, 'ang_x');
        $payload['ang_y'] = IPConnection::fixUnpackedInt16($payload, 'ang_y');
        $payload['ang_z'] = IPConnection::fixUnpackedInt16($payload, 'ang_z');
        $payload['temperature'] = IPConnection::fixUnpackedInt16($payload, 'temperature');

        if (array_key_exists(self::CALLBACK_ALL_DATA, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_ALL_DATA];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_ALL_DATA];

            call_user_func($function, $payload['acc_x'], $payload['acc_y'], $payload['acc_z'], $payload['mag_x'], $payload['mag_y'], $payload['mag_z'], $payload['ang_x'], $payload['ang_y'], $payload['ang_z'], $payload['temperature'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperOrientation($data)
    {
        $payload = unpack('v1roll/v1pitch/v1yaw', $data);
        $payload['roll'] = IPConnection::fixUnpackedInt16($payload, 'roll');
        $payload['pitch'] = IPConnection::fixUnpackedInt16($payload, 'pitch');
        $payload['yaw'] = IPConnection::fixUnpackedInt16($payload, 'yaw');

        if (array_key_exists(self::CALLBACK_ORIENTATION, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_ORIENTATION];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_ORIENTATION];

            call_user_func($function, $payload['roll'], $payload['pitch'], $payload['yaw'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperQuaternion($data)
    {
        $payload = unpack('f1x/f1y/f1z/f1w', $data);

        if (array_key_exists(self::CALLBACK_QUATERNION, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_QUATERNION];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_QUATERNION];

            call_user_func($function, $payload['x'], $payload['y'], $payload['z'], $payload['w'], $user_data);
        }
    }
}

?>
