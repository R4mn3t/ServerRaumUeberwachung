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
 * Drives up to 7 RC Servos with up to 3A
 */
class BrickServo extends Device
{

    /**
     * This callback is triggered when the input voltage drops below the value set by
     * BrickServo::setMinimumVoltage(). The parameter is the current voltage.
     */
    const CALLBACK_UNDER_VOLTAGE = 26;

    /**
     * This callback is triggered when a position set by BrickServo::setPosition()
     * is reached. If the new position matches the current position then the
     * callback is not triggered, because the servo didn't move.
     * The parameters are the servo and the position that is reached.
     * 
     * You can enable this callback with BrickServo::enablePositionReachedCallback().
     * 
     * <note>
     *  Since we can't get any feedback from the servo, this only works if the
     *  velocity (see BrickServo::setVelocity()) is set smaller or equal to the
     *  maximum velocity of the servo. Otherwise the servo will lag behind the
     *  control value and the callback will be triggered too early.
     * </note>
     */
    const CALLBACK_POSITION_REACHED = 27;

    /**
     * This callback is triggered when a velocity set by BrickServo::setVelocity()
     * is reached. The parameters are the servo and the velocity that is reached.
     * 
     * You can enable this callback with BrickServo::enableVelocityReachedCallback().
     * 
     * <note>
     *  Since we can't get any feedback from the servo, this only works if the
     *  acceleration (see BrickServo::setAcceleration()) is set smaller or equal to the
     *  maximum acceleration of the servo. Otherwise the servo will lag behind the
     *  control value and the callback will be triggered too early.
     * </note>
     */
    const CALLBACK_VELOCITY_REACHED = 28;


    /**
     * @internal
     */
    const FUNCTION_ENABLE = 1;

    /**
     * @internal
     */
    const FUNCTION_DISABLE = 2;

    /**
     * @internal
     */
    const FUNCTION_IS_ENABLED = 3;

    /**
     * @internal
     */
    const FUNCTION_SET_POSITION = 4;

    /**
     * @internal
     */
    const FUNCTION_GET_POSITION = 5;

    /**
     * @internal
     */
    const FUNCTION_GET_CURRENT_POSITION = 6;

    /**
     * @internal
     */
    const FUNCTION_SET_VELOCITY = 7;

    /**
     * @internal
     */
    const FUNCTION_GET_VELOCITY = 8;

    /**
     * @internal
     */
    const FUNCTION_GET_CURRENT_VELOCITY = 9;

    /**
     * @internal
     */
    const FUNCTION_SET_ACCELERATION = 10;

    /**
     * @internal
     */
    const FUNCTION_GET_ACCELERATION = 11;

    /**
     * @internal
     */
    const FUNCTION_SET_OUTPUT_VOLTAGE = 12;

    /**
     * @internal
     */
    const FUNCTION_GET_OUTPUT_VOLTAGE = 13;

    /**
     * @internal
     */
    const FUNCTION_SET_PULSE_WIDTH = 14;

    /**
     * @internal
     */
    const FUNCTION_GET_PULSE_WIDTH = 15;

    /**
     * @internal
     */
    const FUNCTION_SET_DEGREE = 16;

    /**
     * @internal
     */
    const FUNCTION_GET_DEGREE = 17;

    /**
     * @internal
     */
    const FUNCTION_SET_PERIOD = 18;

    /**
     * @internal
     */
    const FUNCTION_GET_PERIOD = 19;

    /**
     * @internal
     */
    const FUNCTION_GET_SERVO_CURRENT = 20;

    /**
     * @internal
     */
    const FUNCTION_GET_OVERALL_CURRENT = 21;

    /**
     * @internal
     */
    const FUNCTION_GET_STACK_INPUT_VOLTAGE = 22;

    /**
     * @internal
     */
    const FUNCTION_GET_EXTERNAL_INPUT_VOLTAGE = 23;

    /**
     * @internal
     */
    const FUNCTION_SET_MINIMUM_VOLTAGE = 24;

    /**
     * @internal
     */
    const FUNCTION_GET_MINIMUM_VOLTAGE = 25;

    /**
     * @internal
     */
    const FUNCTION_ENABLE_POSITION_REACHED_CALLBACK = 29;

    /**
     * @internal
     */
    const FUNCTION_DISABLE_POSITION_REACHED_CALLBACK = 30;

    /**
     * @internal
     */
    const FUNCTION_IS_POSITION_REACHED_CALLBACK_ENABLED = 31;

    /**
     * @internal
     */
    const FUNCTION_ENABLE_VELOCITY_REACHED_CALLBACK = 32;

    /**
     * @internal
     */
    const FUNCTION_DISABLE_VELOCITY_REACHED_CALLBACK = 33;

    /**
     * @internal
     */
    const FUNCTION_IS_VELOCITY_REACHED_CALLBACK_ENABLED = 34;

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

    const COMMUNICATION_METHOD_NONE = 0;
    const COMMUNICATION_METHOD_USB = 1;
    const COMMUNICATION_METHOD_SPI_STACK = 2;
    const COMMUNICATION_METHOD_CHIBI = 3;
    const COMMUNICATION_METHOD_RS485 = 4;
    const COMMUNICATION_METHOD_WIFI = 5;
    const COMMUNICATION_METHOD_ETHERNET = 6;
    const COMMUNICATION_METHOD_WIFI_V2 = 7;

    const DEVICE_IDENTIFIER = 14;

    const DEVICE_DISPLAY_NAME = 'Servo Brick';

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

        $this->response_expected[self::FUNCTION_ENABLE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_DISABLE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_IS_ENABLED] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_POSITION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_POSITION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_CURRENT_POSITION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_VELOCITY] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_VELOCITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_CURRENT_VELOCITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ACCELERATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_ACCELERATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_OUTPUT_VOLTAGE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_OUTPUT_VOLTAGE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_PULSE_WIDTH] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_PULSE_WIDTH] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_DEGREE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_DEGREE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_PERIOD] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_SERVO_CURRENT] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_OVERALL_CURRENT] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_STACK_INPUT_VOLTAGE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_EXTERNAL_INPUT_VOLTAGE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_MINIMUM_VOLTAGE] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_MINIMUM_VOLTAGE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_ENABLE_POSITION_REACHED_CALLBACK] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_DISABLE_POSITION_REACHED_CALLBACK] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_IS_POSITION_REACHED_CALLBACK_ENABLED] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_ENABLE_VELOCITY_REACHED_CALLBACK] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_DISABLE_VELOCITY_REACHED_CALLBACK] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_IS_VELOCITY_REACHED_CALLBACK_ENABLED] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
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

        $this->callback_wrappers[self::CALLBACK_UNDER_VOLTAGE] = array(10, 'callbackWrapperUnderVoltage');
        $this->callback_wrappers[self::CALLBACK_POSITION_REACHED] = array(11, 'callbackWrapperPositionReached');
        $this->callback_wrappers[self::CALLBACK_VELOCITY_REACHED] = array(11, 'callbackWrapperVelocityReached');

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
     * Enables a servo (0 to 6). If a servo is enabled, the configured position,
     * velocity, acceleration, etc. are applied immediately.
     * 
     * @param int $servo_num
     * 
     * @return void
     */
    public function enable($servo_num)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $servo_num);

        $this->sendRequest(self::FUNCTION_ENABLE, $payload, 0);
    }

    /**
     * Disables a servo (0 to 6). Disabled servos are not driven at all, i.e. a
     * disabled servo will not hold its position if a load is applied.
     * 
     * @param int $servo_num
     * 
     * @return void
     */
    public function disable($servo_num)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $servo_num);

        $this->sendRequest(self::FUNCTION_DISABLE, $payload, 0);
    }

    /**
     * Returns *true* if the specified servo is enabled, *false* otherwise.
     * 
     * @param int $servo_num
     * 
     * @return bool
     */
    public function isEnabled($servo_num)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $servo_num);

        $data = $this->sendRequest(self::FUNCTION_IS_ENABLED, $payload, 9);

        $payload = unpack('C1enabled', $data);

        return (bool)$payload['enabled'];
    }

    /**
     * Sets the position for the specified servo.
     * 
     * The default range of the position is -9000 to 9000, but it can be specified
     * according to your servo with BrickServo::setDegree().
     * 
     * If you want to control a linear servo or RC brushless motor controller or
     * similar with the Servo Brick, you can also define lengths or speeds with
     * BrickServo::setDegree().
     * 
     * @param int $servo_num
     * @param int $position
     * 
     * @return void
     */
    public function setPosition($servo_num, $position)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $servo_num);
        $payload .= pack('v', $position);

        $this->sendRequest(self::FUNCTION_SET_POSITION, $payload, 0);
    }

    /**
     * Returns the position of the specified servo as set by BrickServo::setPosition().
     * 
     * @param int $servo_num
     * 
     * @return int
     */
    public function getPosition($servo_num)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $servo_num);

        $data = $this->sendRequest(self::FUNCTION_GET_POSITION, $payload, 10);

        $payload = unpack('v1position', $data);

        return IPConnection::fixUnpackedInt16($payload, 'position');
    }

    /**
     * Returns the *current* position of the specified servo. This may not be the
     * value of BrickServo::setPosition() if the servo is currently approaching a
     * position goal.
     * 
     * @param int $servo_num
     * 
     * @return int
     */
    public function getCurrentPosition($servo_num)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $servo_num);

        $data = $this->sendRequest(self::FUNCTION_GET_CURRENT_POSITION, $payload, 10);

        $payload = unpack('v1position', $data);

        return IPConnection::fixUnpackedInt16($payload, 'position');
    }

    /**
     * Sets the maximum velocity of the specified servo. The velocity
     * is accelerated according to the value set by BrickServo::setAcceleration().
     * 
     * The minimum velocity is 0 (no movement) and the maximum velocity is 65535.
     * With a value of 65535 the position will be set immediately (no velocity).
     * 
     * @param int $servo_num
     * @param int $velocity
     * 
     * @return void
     */
    public function setVelocity($servo_num, $velocity)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $servo_num);
        $payload .= pack('v', $velocity);

        $this->sendRequest(self::FUNCTION_SET_VELOCITY, $payload, 0);
    }

    /**
     * Returns the velocity of the specified servo as set by BrickServo::setVelocity().
     * 
     * @param int $servo_num
     * 
     * @return int
     */
    public function getVelocity($servo_num)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $servo_num);

        $data = $this->sendRequest(self::FUNCTION_GET_VELOCITY, $payload, 10);

        $payload = unpack('v1velocity', $data);

        return $payload['velocity'];
    }

    /**
     * Returns the *current* velocity of the specified servo. This may not be the
     * value of BrickServo::setVelocity() if the servo is currently approaching a
     * velocity goal.
     * 
     * @param int $servo_num
     * 
     * @return int
     */
    public function getCurrentVelocity($servo_num)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $servo_num);

        $data = $this->sendRequest(self::FUNCTION_GET_CURRENT_VELOCITY, $payload, 10);

        $payload = unpack('v1velocity', $data);

        return $payload['velocity'];
    }

    /**
     * Sets the acceleration of the specified servo.
     * 
     * The minimum acceleration is 1 and the maximum acceleration is 65535.
     * With a value of 65535 the velocity will be set immediately (no acceleration).
     * 
     * @param int $servo_num
     * @param int $acceleration
     * 
     * @return void
     */
    public function setAcceleration($servo_num, $acceleration)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $servo_num);
        $payload .= pack('v', $acceleration);

        $this->sendRequest(self::FUNCTION_SET_ACCELERATION, $payload, 0);
    }

    /**
     * Returns the acceleration for the specified servo as set by
     * BrickServo::setAcceleration().
     * 
     * @param int $servo_num
     * 
     * @return int
     */
    public function getAcceleration($servo_num)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $servo_num);

        $data = $this->sendRequest(self::FUNCTION_GET_ACCELERATION, $payload, 10);

        $payload = unpack('v1acceleration', $data);

        return $payload['acceleration'];
    }

    /**
     * Sets the output voltages with which the servos are driven.
     * 
     * <note>
     *  We recommend that you set this value to the maximum voltage that is
     *  specified for your servo, most servos achieve their maximum force only
     *  with high voltages.
     * </note>
     * 
     * @param int $voltage
     * 
     * @return void
     */
    public function setOutputVoltage($voltage)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $voltage);

        $this->sendRequest(self::FUNCTION_SET_OUTPUT_VOLTAGE, $payload, 0);
    }

    /**
     * Returns the output voltage as specified by BrickServo::setOutputVoltage().
     * 
     * 
     * @return int
     */
    public function getOutputVoltage()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_OUTPUT_VOLTAGE, $payload, 10);

        $payload = unpack('v1voltage', $data);

        return $payload['voltage'];
    }

    /**
     * Sets the minimum and maximum pulse width of the specified servo.
     * 
     * Usually, servos are controlled with a
     * `PWM <https://en.wikipedia.org/wiki/Pulse-width_modulation>`__, whereby the
     * length of the pulse controls the position of the servo. Every servo has
     * different minimum and maximum pulse widths, these can be specified with
     * this function.
     * 
     * If you have a datasheet for your servo that specifies the minimum and
     * maximum pulse width, you should set the values accordingly. If your servo
     * comes without any datasheet you have to find the values via trial and error.
     * 
     * The minimum must be smaller than the maximum.
     * 
     * @param int $servo_num
     * @param int $min
     * @param int $max
     * 
     * @return void
     */
    public function setPulseWidth($servo_num, $min, $max)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $servo_num);
        $payload .= pack('v', $min);
        $payload .= pack('v', $max);

        $this->sendRequest(self::FUNCTION_SET_PULSE_WIDTH, $payload, 0);
    }

    /**
     * Returns the minimum and maximum pulse width for the specified servo as set by
     * BrickServo::setPulseWidth().
     * 
     * @param int $servo_num
     * 
     * @return array
     */
    public function getPulseWidth($servo_num)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('C', $servo_num);

        $data = $this->sendRequest(self::FUNCTION_GET_PULSE_WIDTH, $payload, 12);

        $payload = unpack('v1min/v1max', $data);

        $ret['min'] = $payload['min'];
        $ret['max'] = $payload['max'];

        return $ret;
    }

    /**
     * Sets the minimum and maximum degree for the specified servo (by default
     * given as °/100).
     * 
     * This only specifies the abstract values between which the minimum and maximum
     * pulse width is scaled. For example: If you specify a pulse width of 1000µs
     * to 2000µs and a degree range of -90° to 90°, a call of BrickServo::setPosition()
     * with 0 will result in a pulse width of 1500µs
     * (-90° = 1000µs, 90° = 2000µs, etc.).
     * 
     * Possible usage:
     * 
     * * The datasheet of your servo specifies a range of 200° with the middle position
     *   at 110°. In this case you can set the minimum to -9000 and the maximum to 11000.
     * * You measure a range of 220° on your servo and you don't have or need a middle
     *   position. In this case you can set the minimum to 0 and the maximum to 22000.
     * * You have a linear servo with a drive length of 20cm, In this case you could
     *   set the minimum to 0 and the maximum to 20000. Now you can set the Position
     *   with BrickServo::setPosition() with a resolution of cm/100. Also the velocity will
     *   have a resolution of cm/100s and the acceleration will have a resolution of
     *   cm/100s².
     * * You don't care about units and just want the highest possible resolution. In
     *   this case you should set the minimum to -32767 and the maximum to 32767.
     * * You have a brushless motor with a maximum speed of 10000 rpm and want to
     *   control it with a RC brushless motor controller. In this case you can set the
     *   minimum to 0 and the maximum to 10000. BrickServo::setPosition() now controls the rpm.
     * 
     * The minimum must be smaller than the maximum.
     * 
     * @param int $servo_num
     * @param int $min
     * @param int $max
     * 
     * @return void
     */
    public function setDegree($servo_num, $min, $max)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $servo_num);
        $payload .= pack('v', $min);
        $payload .= pack('v', $max);

        $this->sendRequest(self::FUNCTION_SET_DEGREE, $payload, 0);
    }

    /**
     * Returns the minimum and maximum degree for the specified servo as set by
     * BrickServo::setDegree().
     * 
     * @param int $servo_num
     * 
     * @return array
     */
    public function getDegree($servo_num)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('C', $servo_num);

        $data = $this->sendRequest(self::FUNCTION_GET_DEGREE, $payload, 12);

        $payload = unpack('v1min/v1max', $data);

        $ret['min'] = IPConnection::fixUnpackedInt16($payload, 'min');
        $ret['max'] = IPConnection::fixUnpackedInt16($payload, 'max');

        return $ret;
    }

    /**
     * Sets the period of the specified servo.
     * 
     * Usually, servos are controlled with a
     * `PWM <https://en.wikipedia.org/wiki/Pulse-width_modulation>`__. Different
     * servos expect PWMs with different periods. Most servos run well with a
     * period of about 20ms.
     * 
     * If your servo comes with a datasheet that specifies a period, you should
     * set it accordingly. If you don't have a datasheet and you have no idea
     * what the correct period is, the default value will most likely
     * work fine.
     * 
     * @param int $servo_num
     * @param int $period
     * 
     * @return void
     */
    public function setPeriod($servo_num, $period)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $servo_num);
        $payload .= pack('v', $period);

        $this->sendRequest(self::FUNCTION_SET_PERIOD, $payload, 0);
    }

    /**
     * Returns the period for the specified servo as set by BrickServo::setPeriod().
     * 
     * @param int $servo_num
     * 
     * @return int
     */
    public function getPeriod($servo_num)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $servo_num);

        $data = $this->sendRequest(self::FUNCTION_GET_PERIOD, $payload, 10);

        $payload = unpack('v1period', $data);

        return $payload['period'];
    }

    /**
     * Returns the current consumption of the specified servo.
     * 
     * @param int $servo_num
     * 
     * @return int
     */
    public function getServoCurrent($servo_num)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $servo_num);

        $data = $this->sendRequest(self::FUNCTION_GET_SERVO_CURRENT, $payload, 10);

        $payload = unpack('v1current', $data);

        return $payload['current'];
    }

    /**
     * Returns the current consumption of all servos together.
     * 
     * 
     * @return int
     */
    public function getOverallCurrent()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_OVERALL_CURRENT, $payload, 10);

        $payload = unpack('v1current', $data);

        return $payload['current'];
    }

    /**
     * Returns the stack input voltage. The stack input voltage is the
     * voltage that is supplied via the stack, i.e. it is given by a
     * Step-Down or Step-Up Power Supply.
     * 
     * 
     * @return int
     */
    public function getStackInputVoltage()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_STACK_INPUT_VOLTAGE, $payload, 10);

        $payload = unpack('v1voltage', $data);

        return $payload['voltage'];
    }

    /**
     * Returns the external input voltage. The external input voltage is
     * given via the black power input connector on the Servo Brick.
     * 
     * If there is an external input voltage and a stack input voltage, the motors
     * will be driven by the external input voltage. If there is only a stack
     * voltage present, the motors will be driven by this voltage.
     * 
     * <warning>
     *  This means, if you have a high stack voltage and a low external voltage,
     *  the motors will be driven with the low external voltage. If you then remove
     *  the external connection, it will immediately be driven by the high
     *  stack voltage
     * </warning>
     * 
     * 
     * @return int
     */
    public function getExternalInputVoltage()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_EXTERNAL_INPUT_VOLTAGE, $payload, 10);

        $payload = unpack('v1voltage', $data);

        return $payload['voltage'];
    }

    /**
     * Sets the minimum voltage, below which the BrickServo::CALLBACK_UNDER_VOLTAGE callback
     * is triggered. The minimum possible value that works with the Servo Brick is 5V.
     * You can use this function to detect the discharge of a battery that is used
     * to drive the stepper motor. If you have a fixed power supply, you likely do
     * not need this functionality.
     * 
     * @param int $voltage
     * 
     * @return void
     */
    public function setMinimumVoltage($voltage)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $voltage);

        $this->sendRequest(self::FUNCTION_SET_MINIMUM_VOLTAGE, $payload, 0);
    }

    /**
     * Returns the minimum voltage as set by BrickServo::setMinimumVoltage()
     * 
     * 
     * @return int
     */
    public function getMinimumVoltage()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_MINIMUM_VOLTAGE, $payload, 10);

        $payload = unpack('v1voltage', $data);

        return $payload['voltage'];
    }

    /**
     * Enables the BrickServo::CALLBACK_POSITION_REACHED callback.
     * 
     * Default is disabled.
     * 
     * .. versionadded:: 2.0.1$nbsp;(Firmware)
     * 
     * 
     * @return void
     */
    public function enablePositionReachedCallback()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_ENABLE_POSITION_REACHED_CALLBACK, $payload, 0);
    }

    /**
     * Disables the BrickServo::CALLBACK_POSITION_REACHED callback.
     * 
     * .. versionadded:: 2.0.1$nbsp;(Firmware)
     * 
     * 
     * @return void
     */
    public function disablePositionReachedCallback()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_DISABLE_POSITION_REACHED_CALLBACK, $payload, 0);
    }

    /**
     * Returns *true* if BrickServo::CALLBACK_POSITION_REACHED callback is enabled, *false* otherwise.
     * 
     * .. versionadded:: 2.0.1$nbsp;(Firmware)
     * 
     * 
     * @return bool
     */
    public function isPositionReachedCallbackEnabled()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_IS_POSITION_REACHED_CALLBACK_ENABLED, $payload, 9);

        $payload = unpack('C1enabled', $data);

        return (bool)$payload['enabled'];
    }

    /**
     * Enables the BrickServo::CALLBACK_VELOCITY_REACHED callback.
     * 
     * Default is disabled.
     * 
     * .. versionadded:: 2.0.1$nbsp;(Firmware)
     * 
     * 
     * @return void
     */
    public function enableVelocityReachedCallback()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_ENABLE_VELOCITY_REACHED_CALLBACK, $payload, 0);
    }

    /**
     * Disables the BrickServo::CALLBACK_VELOCITY_REACHED callback.
     * 
     * Default is disabled.
     * 
     * .. versionadded:: 2.0.1$nbsp;(Firmware)
     * 
     * 
     * @return void
     */
    public function disableVelocityReachedCallback()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_DISABLE_VELOCITY_REACHED_CALLBACK, $payload, 0);
    }

    /**
     * Returns *true* if BrickServo::CALLBACK_VELOCITY_REACHED callback is enabled, *false* otherwise.
     * 
     * .. versionadded:: 2.0.1$nbsp;(Firmware)
     * 
     * 
     * @return bool
     */
    public function isVelocityReachedCallbackEnabled()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_IS_VELOCITY_REACHED_CALLBACK_ENABLED, $payload, 9);

        $payload = unpack('C1enabled', $data);

        return (bool)$payload['enabled'];
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
     * BrickServo::setSPITFPBaudrate(). If the dynamic baudrate is disabled, the baudrate
     * as set by BrickServo::setSPITFPBaudrate() will be used statically.
     * 
     * .. versionadded:: 2.3.4$nbsp;(Firmware)
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
     * Returns the baudrate config, see BrickServo::setSPITFPBaudrateConfig().
     * 
     * .. versionadded:: 2.3.4$nbsp;(Firmware)
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
     * .. versionadded:: 2.3.2$nbsp;(Firmware)
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
     * interference (see BrickServo::getSPITFPErrorCount()) you can decrease the
     * baudrate.
     * 
     * If the dynamic baudrate feature is enabled, the baudrate set by this
     * function corresponds to the maximum baudrate (see BrickServo::setSPITFPBaudrateConfig()).
     * 
     * Regulatory testing is done with the default baudrate. If CE compatibility
     * or similar is necessary in your applications we recommend to not change
     * the baudrate.
     * 
     * .. versionadded:: 2.3.2$nbsp;(Firmware)
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
     * Returns the baudrate for a given Bricklet port, see BrickServo::setSPITFPBaudrate().
     * 
     * .. versionadded:: 2.3.2$nbsp;(Firmware)
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
     * .. versionadded:: 2.3.2$nbsp;(Firmware)
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
    public function callbackWrapperUnderVoltage($data)
    {
        $payload = unpack('v1voltage', $data);

        if (array_key_exists(self::CALLBACK_UNDER_VOLTAGE, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_UNDER_VOLTAGE];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_UNDER_VOLTAGE];

            call_user_func($function, $payload['voltage'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperPositionReached($data)
    {
        $payload = unpack('C1servo_num/v1position', $data);
        $payload['position'] = IPConnection::fixUnpackedInt16($payload, 'position');

        if (array_key_exists(self::CALLBACK_POSITION_REACHED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_POSITION_REACHED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_POSITION_REACHED];

            call_user_func($function, $payload['servo_num'], $payload['position'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperVelocityReached($data)
    {
        $payload = unpack('C1servo_num/v1velocity', $data);
        $payload['velocity'] = IPConnection::fixUnpackedInt16($payload, 'velocity');

        if (array_key_exists(self::CALLBACK_VELOCITY_REACHED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_VELOCITY_REACHED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_VELOCITY_REACHED];

            call_user_func($function, $payload['servo_num'], $payload['velocity'], $user_data);
        }
    }
}

?>
