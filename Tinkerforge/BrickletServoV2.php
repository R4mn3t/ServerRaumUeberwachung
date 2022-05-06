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
 * Drives up to 10 RC Servos
 */
class BrickletServoV2 extends Device
{

    /**
     * This callback is triggered when a position set by BrickletServoV2::setPosition()
     * is reached. If the new position matches the current position then the
     * callback is not triggered, because the servo didn't move.
     * The parameters are the servo and the position that is reached.
     * 
     * You can enable this callback with BrickletServoV2::setPositionReachedCallbackConfiguration().
     * 
     * <note>
     *  Since we can't get any feedback from the servo, this only works if the
     *  velocity (see BrickletServoV2::setMotionConfiguration()) is set smaller or equal to the
     *  maximum velocity of the servo. Otherwise the servo will lag behind the
     *  control value and the callback will be triggered too early.
     * </note>
     */
    const CALLBACK_POSITION_REACHED = 27;


    /**
     * @internal
     */
    const FUNCTION_GET_STATUS = 1;

    /**
     * @internal
     */
    const FUNCTION_SET_ENABLE = 2;

    /**
     * @internal
     */
    const FUNCTION_GET_ENABLED = 3;

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
    const FUNCTION_GET_CURRENT_VELOCITY = 7;

    /**
     * @internal
     */
    const FUNCTION_SET_MOTION_CONFIGURATION = 8;

    /**
     * @internal
     */
    const FUNCTION_GET_MOTION_CONFIGURATION = 9;

    /**
     * @internal
     */
    const FUNCTION_SET_PULSE_WIDTH = 10;

    /**
     * @internal
     */
    const FUNCTION_GET_PULSE_WIDTH = 11;

    /**
     * @internal
     */
    const FUNCTION_SET_DEGREE = 12;

    /**
     * @internal
     */
    const FUNCTION_GET_DEGREE = 13;

    /**
     * @internal
     */
    const FUNCTION_SET_PERIOD = 14;

    /**
     * @internal
     */
    const FUNCTION_GET_PERIOD = 15;

    /**
     * @internal
     */
    const FUNCTION_GET_SERVO_CURRENT = 16;

    /**
     * @internal
     */
    const FUNCTION_SET_SERVO_CURRENT_CONFIGURATION = 17;

    /**
     * @internal
     */
    const FUNCTION_GET_SERVO_CURRENT_CONFIGURATION = 18;

    /**
     * @internal
     */
    const FUNCTION_SET_INPUT_VOLTAGE_CONFIGURATION = 19;

    /**
     * @internal
     */
    const FUNCTION_GET_INPUT_VOLTAGE_CONFIGURATION = 20;

    /**
     * @internal
     */
    const FUNCTION_GET_OVERALL_CURRENT = 21;

    /**
     * @internal
     */
    const FUNCTION_GET_INPUT_VOLTAGE = 22;

    /**
     * @internal
     */
    const FUNCTION_SET_CURRENT_CALIBRATION = 23;

    /**
     * @internal
     */
    const FUNCTION_GET_CURRENT_CALIBRATION = 24;

    /**
     * @internal
     */
    const FUNCTION_SET_POSITION_REACHED_CALLBACK_CONFIGURATION = 25;

    /**
     * @internal
     */
    const FUNCTION_GET_POSITION_REACHED_CALLBACK_CONFIGURATION = 26;

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

    const DEVICE_IDENTIFIER = 2157;

    const DEVICE_DISPLAY_NAME = 'Servo Bricklet 2.0';

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

        $this->response_expected[self::FUNCTION_GET_STATUS] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ENABLE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_ENABLED] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_POSITION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_POSITION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_CURRENT_POSITION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_CURRENT_VELOCITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_MOTION_CONFIGURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_MOTION_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_PULSE_WIDTH] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_PULSE_WIDTH] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_DEGREE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_DEGREE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_PERIOD] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_SERVO_CURRENT] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_SERVO_CURRENT_CONFIGURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_SERVO_CURRENT_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_INPUT_VOLTAGE_CONFIGURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_INPUT_VOLTAGE_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_OVERALL_CURRENT] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_INPUT_VOLTAGE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_CURRENT_CALIBRATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_CURRENT_CALIBRATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_POSITION_REACHED_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_POSITION_REACHED_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
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

        $this->callback_wrappers[self::CALLBACK_POSITION_REACHED] = array(12, 'callbackWrapperPositionReached');

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
     * Returns the status information of the Servo Bricklet 2.0.
     * 
     * The status includes
     * 
     * * for each channel if it is enabled or disabled,
     * * for each channel the current position,
     * * for each channel the current velocity,
     * * for each channel the current usage and
     * * the input voltage.
     * 
     * Please note that the position and the velocity is a snapshot of the
     * current position and velocity of the servo in motion.
     * 
     * 
     * @return array
     */
    public function getStatus()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_STATUS, $payload, 72);

        $payload = unpack('C2enabled/v10current_position/v10current_velocity/v10current/v1input_voltage', $data);

        $ret['enabled'] = IPConnection::collectUnpackedBoolArray($payload, 'enabled', 10);
        $ret['current_position'] = IPConnection::collectUnpackedInt16Array($payload, 'current_position', 10);
        $ret['current_velocity'] = IPConnection::collectUnpackedInt16Array($payload, 'current_velocity', 10);
        $ret['current'] = IPConnection::collectUnpackedArray($payload, 'current', 10);
        $ret['input_voltage'] = $payload['input_voltage'];

        return $ret;
    }

    /**
     * Enables a servo channel (0 to 9). If a servo is enabled, the configured position,
     * velocity, acceleration, etc. are applied immediately.
     * 
     * @param int $servo_channel
     * @param bool $enable
     * 
     * @return void
     */
    public function setEnable($servo_channel, $enable)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $servo_channel);
        $payload .= pack('C', intval((bool)$enable));

        $this->sendRequest(self::FUNCTION_SET_ENABLE, $payload, 0);
    }

    /**
     * Returns *true* if the specified servo channel is enabled, *false* otherwise.
     * 
     * @param int $servo_channel
     * 
     * @return bool
     */
    public function getEnabled($servo_channel)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $servo_channel);

        $data = $this->sendRequest(self::FUNCTION_GET_ENABLED, $payload, 9);

        $payload = unpack('C1enable', $data);

        return (bool)$payload['enable'];
    }

    /**
     * Sets the position in °/100 for the specified servo channel.
     * 
     * The default range of the position is -9000 to 9000, but it can be specified
     * according to your servo with BrickletServoV2::setDegree().
     * 
     * If you want to control a linear servo or RC brushless motor controller or
     * similar with the Servo Brick, you can also define lengths or speeds with
     * BrickletServoV2::setDegree().
     * 
     * @param int $servo_channel
     * @param int $position
     * 
     * @return void
     */
    public function setPosition($servo_channel, $position)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $servo_channel);
        $payload .= pack('v', $position);

        $this->sendRequest(self::FUNCTION_SET_POSITION, $payload, 0);
    }

    /**
     * Returns the position of the specified servo channel as set by BrickletServoV2::setPosition().
     * 
     * @param int $servo_channel
     * 
     * @return int
     */
    public function getPosition($servo_channel)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $servo_channel);

        $data = $this->sendRequest(self::FUNCTION_GET_POSITION, $payload, 10);

        $payload = unpack('v1position', $data);

        return IPConnection::fixUnpackedInt16($payload, 'position');
    }

    /**
     * Returns the *current* position of the specified servo channel. This may not be the
     * value of BrickletServoV2::setPosition() if the servo is currently approaching a
     * position goal.
     * 
     * @param int $servo_channel
     * 
     * @return int
     */
    public function getCurrentPosition($servo_channel)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $servo_channel);

        $data = $this->sendRequest(self::FUNCTION_GET_CURRENT_POSITION, $payload, 10);

        $payload = unpack('v1position', $data);

        return IPConnection::fixUnpackedInt16($payload, 'position');
    }

    /**
     * Returns the *current* velocity of the specified servo channel. This may not be the
     * velocity specified by BrickletServoV2::setMotionConfiguration(). if the servo is
     * currently approaching a velocity goal.
     * 
     * @param int $servo_channel
     * 
     * @return int
     */
    public function getCurrentVelocity($servo_channel)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $servo_channel);

        $data = $this->sendRequest(self::FUNCTION_GET_CURRENT_VELOCITY, $payload, 10);

        $payload = unpack('v1velocity', $data);

        return $payload['velocity'];
    }

    /**
     * Sets the maximum velocity of the specified servo channel in °/100s as well as
     * the acceleration and deceleration in °/100s²
     * 
     * With a velocity of 0 °/100s the position will be set immediately (no velocity).
     * 
     * With an acc-/deceleration of 0 °/100s² the velocity will be set immediately
     * (no acc-/deceleration).
     * 
     * @param int $servo_channel
     * @param int $velocity
     * @param int $acceleration
     * @param int $deceleration
     * 
     * @return void
     */
    public function setMotionConfiguration($servo_channel, $velocity, $acceleration, $deceleration)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $servo_channel);
        $payload .= pack('V', $velocity);
        $payload .= pack('V', $acceleration);
        $payload .= pack('V', $deceleration);

        $this->sendRequest(self::FUNCTION_SET_MOTION_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the motion configuration as set by BrickletServoV2::setMotionConfiguration().
     * 
     * @param int $servo_channel
     * 
     * @return array
     */
    public function getMotionConfiguration($servo_channel)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('v', $servo_channel);

        $data = $this->sendRequest(self::FUNCTION_GET_MOTION_CONFIGURATION, $payload, 20);

        $payload = unpack('V1velocity/V1acceleration/V1deceleration', $data);

        $ret['velocity'] = IPConnection::fixUnpackedUInt32($payload, 'velocity');
        $ret['acceleration'] = IPConnection::fixUnpackedUInt32($payload, 'acceleration');
        $ret['deceleration'] = IPConnection::fixUnpackedUInt32($payload, 'deceleration');

        return $ret;
    }

    /**
     * Sets the minimum and maximum pulse width of the specified servo channel in µs.
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
     * Both values have a range from 1 to 65535 (unsigned 16-bit integer). The
     * minimum must be smaller than the maximum.
     * 
     * The default values are 1000µs (1ms) and 2000µs (2ms) for minimum and
     * maximum pulse width.
     * 
     * @param int $servo_channel
     * @param int $min
     * @param int $max
     * 
     * @return void
     */
    public function setPulseWidth($servo_channel, $min, $max)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $servo_channel);
        $payload .= pack('V', $min);
        $payload .= pack('V', $max);

        $this->sendRequest(self::FUNCTION_SET_PULSE_WIDTH, $payload, 0);
    }

    /**
     * Returns the minimum and maximum pulse width for the specified servo channel as set by
     * BrickletServoV2::setPulseWidth().
     * 
     * @param int $servo_channel
     * 
     * @return array
     */
    public function getPulseWidth($servo_channel)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('v', $servo_channel);

        $data = $this->sendRequest(self::FUNCTION_GET_PULSE_WIDTH, $payload, 16);

        $payload = unpack('V1min/V1max', $data);

        $ret['min'] = IPConnection::fixUnpackedUInt32($payload, 'min');
        $ret['max'] = IPConnection::fixUnpackedUInt32($payload, 'max');

        return $ret;
    }

    /**
     * Sets the minimum and maximum degree for the specified servo channel (by default
     * given as °/100).
     * 
     * This only specifies the abstract values between which the minimum and maximum
     * pulse width is scaled. For example: If you specify a pulse width of 1000µs
     * to 2000µs and a degree range of -90° to 90°, a call of BrickletServoV2::setPosition()
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
     *   with BrickletServoV2::setPosition() with a resolution of cm/100. Also the velocity will
     *   have a resolution of cm/100s and the acceleration will have a resolution of
     *   cm/100s².
     * * You don't care about units and just want the highest possible resolution. In
     *   this case you should set the minimum to -32767 and the maximum to 32767.
     * * You have a brushless motor with a maximum speed of 10000 rpm and want to
     *   control it with a RC brushless motor controller. In this case you can set the
     *   minimum to 0 and the maximum to 10000. BrickletServoV2::setPosition() now controls the rpm.
     * 
     * Both values have a possible range from -32767 to 32767
     * (signed 16-bit integer). The minimum must be smaller than the maximum.
     * 
     * The default values are -9000 and 9000 for the minimum and maximum degree.
     * 
     * @param int $servo_channel
     * @param int $min
     * @param int $max
     * 
     * @return void
     */
    public function setDegree($servo_channel, $min, $max)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $servo_channel);
        $payload .= pack('v', $min);
        $payload .= pack('v', $max);

        $this->sendRequest(self::FUNCTION_SET_DEGREE, $payload, 0);
    }

    /**
     * Returns the minimum and maximum degree for the specified servo channel as set by
     * BrickletServoV2::setDegree().
     * 
     * @param int $servo_channel
     * 
     * @return array
     */
    public function getDegree($servo_channel)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('v', $servo_channel);

        $data = $this->sendRequest(self::FUNCTION_GET_DEGREE, $payload, 12);

        $payload = unpack('v1min/v1max', $data);

        $ret['min'] = IPConnection::fixUnpackedInt16($payload, 'min');
        $ret['max'] = IPConnection::fixUnpackedInt16($payload, 'max');

        return $ret;
    }

    /**
     * Sets the period of the specified servo channel in µs.
     * 
     * Usually, servos are controlled with a
     * `PWM <https://en.wikipedia.org/wiki/Pulse-width_modulation>`__. Different
     * servos expect PWMs with different periods. Most servos run well with a
     * period of about 20ms.
     * 
     * If your servo comes with a datasheet that specifies a period, you should
     * set it accordingly. If you don't have a datasheet and you have no idea
     * what the correct period is, the default value (19.5ms) will most likely
     * work fine.
     * 
     * The minimum possible period is 1µs and the maximum is 1000000µs.
     * 
     * The default value is 19.5ms (19500µs).
     * 
     * @param int $servo_channel
     * @param int $period
     * 
     * @return void
     */
    public function setPeriod($servo_channel, $period)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $servo_channel);
        $payload .= pack('V', $period);

        $this->sendRequest(self::FUNCTION_SET_PERIOD, $payload, 0);
    }

    /**
     * Returns the period for the specified servo channel as set by BrickletServoV2::setPeriod().
     * 
     * @param int $servo_channel
     * 
     * @return int
     */
    public function getPeriod($servo_channel)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $servo_channel);

        $data = $this->sendRequest(self::FUNCTION_GET_PERIOD, $payload, 12);

        $payload = unpack('V1period', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'period');
    }

    /**
     * Returns the current consumption of the specified servo channel in mA.
     * 
     * @param int $servo_channel
     * 
     * @return int
     */
    public function getServoCurrent($servo_channel)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $servo_channel);

        $data = $this->sendRequest(self::FUNCTION_GET_SERVO_CURRENT, $payload, 10);

        $payload = unpack('v1current', $data);

        return $payload['current'];
    }

    /**
     * Sets the averaging duration of the current measurement for the specified servo channel in ms.
     * 
     * @param int $servo_channel
     * @param int $averaging_duration
     * 
     * @return void
     */
    public function setServoCurrentConfiguration($servo_channel, $averaging_duration)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $servo_channel);
        $payload .= pack('C', $averaging_duration);

        $this->sendRequest(self::FUNCTION_SET_SERVO_CURRENT_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the servo current configuration for the specified servo channel as set
     * by BrickletServoV2::setServoCurrentConfiguration().
     * 
     * @param int $servo_channel
     * 
     * @return int
     */
    public function getServoCurrentConfiguration($servo_channel)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $servo_channel);

        $data = $this->sendRequest(self::FUNCTION_GET_SERVO_CURRENT_CONFIGURATION, $payload, 9);

        $payload = unpack('C1averaging_duration', $data);

        return $payload['averaging_duration'];
    }

    /**
     * Sets the averaging duration of the input voltage measurement for the specified servo channel in ms.
     * 
     * @param int $averaging_duration
     * 
     * @return void
     */
    public function setInputVoltageConfiguration($averaging_duration)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $averaging_duration);

        $this->sendRequest(self::FUNCTION_SET_INPUT_VOLTAGE_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the input voltage configuration as set by BrickletServoV2::setInputVoltageConfiguration().
     * 
     * 
     * @return int
     */
    public function getInputVoltageConfiguration()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_INPUT_VOLTAGE_CONFIGURATION, $payload, 9);

        $payload = unpack('C1averaging_duration', $data);

        return $payload['averaging_duration'];
    }

    /**
     * Returns the current consumption of all servos together in mA.
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
     * Returns the input voltage in mV. The input voltage is
     * given via the black power input connector on the Servo Brick.
     * 
     * 
     * @return int
     */
    public function getInputVoltage()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_INPUT_VOLTAGE, $payload, 10);

        $payload = unpack('v1voltage', $data);

        return $payload['voltage'];
    }

    /**
     * Sets an offset value (in mA) for each channel.
     * 
     * Note: On delivery the Servo Bricklet 2.0 is already calibrated.
     * 
     * @param int[] $offset
     * 
     * @return void
     */
    public function setCurrentCalibration($offset)
    {
        $this->checkValidity();

        $payload = '';
        for ($i = 0; $i < 10; $i++) {
            $payload .= pack('v', $offset[$i]);
        }

        $this->sendRequest(self::FUNCTION_SET_CURRENT_CALIBRATION, $payload, 0);
    }

    /**
     * Returns the current calibration as set by BrickletServoV2::setCurrentCalibration().
     * 
     * 
     * @return array
     */
    public function getCurrentCalibration()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_CURRENT_CALIBRATION, $payload, 28);

        $payload = unpack('v10offset', $data);

        return IPConnection::collectUnpackedInt16Array($payload, 'offset', 10);
    }

    /**
     * Enable/Disable BrickletServoV2::CALLBACK_POSITION_REACHED callback.
     * 
     * @param int $servo_channel
     * @param bool $enabled
     * 
     * @return void
     */
    public function setPositionReachedCallbackConfiguration($servo_channel, $enabled)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $servo_channel);
        $payload .= pack('C', intval((bool)$enabled));

        $this->sendRequest(self::FUNCTION_SET_POSITION_REACHED_CALLBACK_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the callback configuration as set by
     * BrickletServoV2::setPositionReachedCallbackConfiguration().
     * 
     * @param int $servo_channel
     * 
     * @return bool
     */
    public function getPositionReachedCallbackConfiguration($servo_channel)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $servo_channel);

        $data = $this->sendRequest(self::FUNCTION_GET_POSITION_REACHED_CALLBACK_CONFIGURATION, $payload, 9);

        $payload = unpack('C1enabled', $data);

        return (bool)$payload['enabled'];
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
     * Returns the current bootloader mode, see BrickletServoV2::setBootloaderMode().
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
     * Sets the firmware pointer for BrickletServoV2::writeFirmware(). The pointer has
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
     * BrickletServoV2::setWriteFirmwarePointer() before. The firmware is written
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
     * Returns the configuration as set by BrickletServoV2::setStatusLEDConfig()
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
    public function callbackWrapperPositionReached($data)
    {
        $payload = unpack('v1servo_channel/v1position', $data);
        $payload['position'] = IPConnection::fixUnpackedInt16($payload, 'position');

        if (array_key_exists(self::CALLBACK_POSITION_REACHED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_POSITION_REACHED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_POSITION_REACHED];

            call_user_func($function, $payload['servo_channel'], $payload['position'], $user_data);
        }
    }
}

?>
