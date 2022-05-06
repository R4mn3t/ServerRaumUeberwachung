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
 * Drives one bipolar stepper motor with up to 38V and 2.5A per phase
 */
class BrickStepper extends Device
{

    /**
     * This callback is triggered when the input voltage drops below the value set by
     * BrickStepper::setMinimumVoltage(). The parameter is the current voltage.
     */
    const CALLBACK_UNDER_VOLTAGE = 31;

    /**
     * This callback is triggered when a position set by BrickStepper::setSteps() or
     * BrickStepper::setTargetPosition() is reached.
     * 
     * <note>
     *  Since we can't get any feedback from the stepper motor, this only works if the
     *  acceleration (see BrickStepper::setSpeedRamping()) is set smaller or equal to the
     *  maximum acceleration of the motor. Otherwise the motor will lag behind the
     *  control value and the callback will be triggered too early.
     * </note>
     */
    const CALLBACK_POSITION_REACHED = 32;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickStepper::setAllDataPeriod(). The parameters are: the current velocity,
     * the current position, the remaining steps, the stack voltage, the external
     * voltage and the current consumption of the stepper motor.
     */
    const CALLBACK_ALL_DATA = 40;

    /**
     * This callback is triggered whenever the Stepper Brick enters a new state.
     * It returns the new state as well as the previous state.
     */
    const CALLBACK_NEW_STATE = 41;


    /**
     * @internal
     */
    const FUNCTION_SET_MAX_VELOCITY = 1;

    /**
     * @internal
     */
    const FUNCTION_GET_MAX_VELOCITY = 2;

    /**
     * @internal
     */
    const FUNCTION_GET_CURRENT_VELOCITY = 3;

    /**
     * @internal
     */
    const FUNCTION_SET_SPEED_RAMPING = 4;

    /**
     * @internal
     */
    const FUNCTION_GET_SPEED_RAMPING = 5;

    /**
     * @internal
     */
    const FUNCTION_FULL_BRAKE = 6;

    /**
     * @internal
     */
    const FUNCTION_SET_CURRENT_POSITION = 7;

    /**
     * @internal
     */
    const FUNCTION_GET_CURRENT_POSITION = 8;

    /**
     * @internal
     */
    const FUNCTION_SET_TARGET_POSITION = 9;

    /**
     * @internal
     */
    const FUNCTION_GET_TARGET_POSITION = 10;

    /**
     * @internal
     */
    const FUNCTION_SET_STEPS = 11;

    /**
     * @internal
     */
    const FUNCTION_GET_STEPS = 12;

    /**
     * @internal
     */
    const FUNCTION_GET_REMAINING_STEPS = 13;

    /**
     * @internal
     */
    const FUNCTION_SET_STEP_MODE = 14;

    /**
     * @internal
     */
    const FUNCTION_GET_STEP_MODE = 15;

    /**
     * @internal
     */
    const FUNCTION_DRIVE_FORWARD = 16;

    /**
     * @internal
     */
    const FUNCTION_DRIVE_BACKWARD = 17;

    /**
     * @internal
     */
    const FUNCTION_STOP = 18;

    /**
     * @internal
     */
    const FUNCTION_GET_STACK_INPUT_VOLTAGE = 19;

    /**
     * @internal
     */
    const FUNCTION_GET_EXTERNAL_INPUT_VOLTAGE = 20;

    /**
     * @internal
     */
    const FUNCTION_GET_CURRENT_CONSUMPTION = 21;

    /**
     * @internal
     */
    const FUNCTION_SET_MOTOR_CURRENT = 22;

    /**
     * @internal
     */
    const FUNCTION_GET_MOTOR_CURRENT = 23;

    /**
     * @internal
     */
    const FUNCTION_ENABLE = 24;

    /**
     * @internal
     */
    const FUNCTION_DISABLE = 25;

    /**
     * @internal
     */
    const FUNCTION_IS_ENABLED = 26;

    /**
     * @internal
     */
    const FUNCTION_SET_DECAY = 27;

    /**
     * @internal
     */
    const FUNCTION_GET_DECAY = 28;

    /**
     * @internal
     */
    const FUNCTION_SET_MINIMUM_VOLTAGE = 29;

    /**
     * @internal
     */
    const FUNCTION_GET_MINIMUM_VOLTAGE = 30;

    /**
     * @internal
     */
    const FUNCTION_SET_SYNC_RECT = 33;

    /**
     * @internal
     */
    const FUNCTION_IS_SYNC_RECT = 34;

    /**
     * @internal
     */
    const FUNCTION_SET_TIME_BASE = 35;

    /**
     * @internal
     */
    const FUNCTION_GET_TIME_BASE = 36;

    /**
     * @internal
     */
    const FUNCTION_GET_ALL_DATA = 37;

    /**
     * @internal
     */
    const FUNCTION_SET_ALL_DATA_PERIOD = 38;

    /**
     * @internal
     */
    const FUNCTION_GET_ALL_DATA_PERIOD = 39;

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

    const STEP_MODE_FULL_STEP = 1;
    const STEP_MODE_HALF_STEP = 2;
    const STEP_MODE_QUARTER_STEP = 4;
    const STEP_MODE_EIGHTH_STEP = 8;
    const STATE_STOP = 1;
    const STATE_ACCELERATION = 2;
    const STATE_RUN = 3;
    const STATE_DEACCELERATION = 4;
    const STATE_DIRECTION_CHANGE_TO_FORWARD = 5;
    const STATE_DIRECTION_CHANGE_TO_BACKWARD = 6;
    const COMMUNICATION_METHOD_NONE = 0;
    const COMMUNICATION_METHOD_USB = 1;
    const COMMUNICATION_METHOD_SPI_STACK = 2;
    const COMMUNICATION_METHOD_CHIBI = 3;
    const COMMUNICATION_METHOD_RS485 = 4;
    const COMMUNICATION_METHOD_WIFI = 5;
    const COMMUNICATION_METHOD_ETHERNET = 6;
    const COMMUNICATION_METHOD_WIFI_V2 = 7;

    const DEVICE_IDENTIFIER = 15;

    const DEVICE_DISPLAY_NAME = 'Stepper Brick';

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

        $this->response_expected[self::FUNCTION_SET_MAX_VELOCITY] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_MAX_VELOCITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_CURRENT_VELOCITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_SPEED_RAMPING] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_SPEED_RAMPING] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_FULL_BRAKE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_SET_CURRENT_POSITION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_CURRENT_POSITION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_TARGET_POSITION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_TARGET_POSITION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_STEPS] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_STEPS] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_REMAINING_STEPS] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_STEP_MODE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_STEP_MODE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_DRIVE_FORWARD] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_DRIVE_BACKWARD] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_STOP] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_STACK_INPUT_VOLTAGE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_EXTERNAL_INPUT_VOLTAGE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_CURRENT_CONSUMPTION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_MOTOR_CURRENT] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_MOTOR_CURRENT] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_ENABLE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_DISABLE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_IS_ENABLED] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_DECAY] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_DECAY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_MINIMUM_VOLTAGE] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_MINIMUM_VOLTAGE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_SYNC_RECT] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_IS_SYNC_RECT] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_TIME_BASE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_TIME_BASE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_ALL_DATA] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ALL_DATA_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_ALL_DATA_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
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
        $this->callback_wrappers[self::CALLBACK_POSITION_REACHED] = array(12, 'callbackWrapperPositionReached');
        $this->callback_wrappers[self::CALLBACK_ALL_DATA] = array(24, 'callbackWrapperAllData');
        $this->callback_wrappers[self::CALLBACK_NEW_STATE] = array(10, 'callbackWrapperNewState');

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
     * Sets the maximum velocity of the stepper motor.
     * This function does *not* start the motor, it merely sets the maximum
     * velocity the stepper motor is accelerated to. To get the motor running use
     * either BrickStepper::setTargetPosition(), BrickStepper::setSteps(), BrickStepper::driveForward() or
     * BrickStepper::driveBackward().
     * 
     * @param int $velocity
     * 
     * @return void
     */
    public function setMaxVelocity($velocity)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $velocity);

        $this->sendRequest(self::FUNCTION_SET_MAX_VELOCITY, $payload, 0);
    }

    /**
     * Returns the velocity as set by BrickStepper::setMaxVelocity().
     * 
     * 
     * @return int
     */
    public function getMaxVelocity()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_MAX_VELOCITY, $payload, 10);

        $payload = unpack('v1velocity', $data);

        return $payload['velocity'];
    }

    /**
     * Returns the *current* velocity of the stepper motor.
     * 
     * 
     * @return int
     */
    public function getCurrentVelocity()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_CURRENT_VELOCITY, $payload, 10);

        $payload = unpack('v1velocity', $data);

        return $payload['velocity'];
    }

    /**
     * Sets the acceleration and deacceleration of the stepper motor.
     * An acceleration of 1000 means, that
     * every second the velocity is increased by 1000 *steps/s*.
     * 
     * For example: If the current velocity is 0 and you want to accelerate to a
     * velocity of 8000 *steps/s* in 10 seconds, you should set an acceleration
     * of 800 *steps/s²*.
     * 
     * An acceleration/deacceleration of 0 means instantaneous
     * acceleration/deacceleration (not recommended)
     * 
     * @param int $acceleration
     * @param int $deacceleration
     * 
     * @return void
     */
    public function setSpeedRamping($acceleration, $deacceleration)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $acceleration);
        $payload .= pack('v', $deacceleration);

        $this->sendRequest(self::FUNCTION_SET_SPEED_RAMPING, $payload, 0);
    }

    /**
     * Returns the acceleration and deacceleration as set by
     * BrickStepper::setSpeedRamping().
     * 
     * 
     * @return array
     */
    public function getSpeedRamping()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_SPEED_RAMPING, $payload, 12);

        $payload = unpack('v1acceleration/v1deacceleration', $data);

        $ret['acceleration'] = $payload['acceleration'];
        $ret['deacceleration'] = $payload['deacceleration'];

        return $ret;
    }

    /**
     * Executes an active full brake.
     * 
     * <warning>
     *  This function is for emergency purposes,
     *  where an immediate brake is necessary. Depending on the current velocity and
     *  the strength of the motor, a full brake can be quite violent.
     * </warning>
     * 
     * Call BrickStepper::stop() if you just want to stop the motor.
     * 
     * 
     * @return void
     */
    public function fullBrake()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_FULL_BRAKE, $payload, 0);
    }

    /**
     * Sets the current steps of the internal step counter. This can be used to
     * set the current position to 0 when some kind of starting position
     * is reached (e.g. when a CNC machine reaches a corner).
     * 
     * @param int $position
     * 
     * @return void
     */
    public function setCurrentPosition($position)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $position);

        $this->sendRequest(self::FUNCTION_SET_CURRENT_POSITION, $payload, 0);
    }

    /**
     * Returns the current position of the stepper motor in steps. On startup
     * the position is 0. The steps are counted with all possible driving
     * functions (BrickStepper::setTargetPosition(), BrickStepper::setSteps(), BrickStepper::driveForward() or
     * BrickStepper::driveBackward()). It also is possible to reset the steps to 0 or
     * set them to any other desired value with BrickStepper::setCurrentPosition().
     * 
     * 
     * @return int
     */
    public function getCurrentPosition()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_CURRENT_POSITION, $payload, 12);

        $payload = unpack('V1position', $data);

        return IPConnection::fixUnpackedInt32($payload, 'position');
    }

    /**
     * Sets the target position of the stepper motor in steps. For example,
     * if the current position of the motor is 500 and BrickStepper::setTargetPosition() is
     * called with 1000, the stepper motor will drive 500 steps forward. It will
     * use the velocity, acceleration and deacceleration as set by
     * BrickStepper::setMaxVelocity() and BrickStepper::setSpeedRamping().
     * 
     * A call of BrickStepper::setTargetPosition() with the parameter *x* is equivalent to
     * a call of BrickStepper::setSteps() with the parameter
     * (*x* - BrickStepper::getCurrentPosition()).
     * 
     * @param int $position
     * 
     * @return void
     */
    public function setTargetPosition($position)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $position);

        $this->sendRequest(self::FUNCTION_SET_TARGET_POSITION, $payload, 0);
    }

    /**
     * Returns the last target position as set by BrickStepper::setTargetPosition().
     * 
     * 
     * @return int
     */
    public function getTargetPosition()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_TARGET_POSITION, $payload, 12);

        $payload = unpack('V1position', $data);

        return IPConnection::fixUnpackedInt32($payload, 'position');
    }

    /**
     * Sets the number of steps the stepper motor should run. Positive values
     * will drive the motor forward and negative values backward.
     * The velocity, acceleration and deacceleration as set by
     * BrickStepper::setMaxVelocity() and BrickStepper::setSpeedRamping() will be used.
     * 
     * @param int $steps
     * 
     * @return void
     */
    public function setSteps($steps)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $steps);

        $this->sendRequest(self::FUNCTION_SET_STEPS, $payload, 0);
    }

    /**
     * Returns the last steps as set by BrickStepper::setSteps().
     * 
     * 
     * @return int
     */
    public function getSteps()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_STEPS, $payload, 12);

        $payload = unpack('V1steps', $data);

        return IPConnection::fixUnpackedInt32($payload, 'steps');
    }

    /**
     * Returns the remaining steps of the last call of BrickStepper::setSteps().
     * For example, if BrickStepper::setSteps() is called with 2000 and
     * BrickStepper::getRemainingSteps() is called after the motor has run for 500 steps,
     * it will return 1500.
     * 
     * 
     * @return int
     */
    public function getRemainingSteps()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_REMAINING_STEPS, $payload, 12);

        $payload = unpack('V1steps', $data);

        return IPConnection::fixUnpackedInt32($payload, 'steps');
    }

    /**
     * Sets the step mode of the stepper motor. Possible values are:
     * 
     * * Full Step = 1
     * * Half Step = 2
     * * Quarter Step = 4
     * * Eighth Step = 8
     * 
     * A higher value will increase the resolution and
     * decrease the torque of the stepper motor.
     * 
     * @param int $mode
     * 
     * @return void
     */
    public function setStepMode($mode)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $mode);

        $this->sendRequest(self::FUNCTION_SET_STEP_MODE, $payload, 0);
    }

    /**
     * Returns the step mode as set by BrickStepper::setStepMode().
     * 
     * 
     * @return int
     */
    public function getStepMode()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_STEP_MODE, $payload, 9);

        $payload = unpack('C1mode', $data);

        return $payload['mode'];
    }

    /**
     * Drives the stepper motor forward until BrickStepper::driveBackward() or
     * BrickStepper::stop() is called. The velocity, acceleration and deacceleration as
     * set by BrickStepper::setMaxVelocity() and BrickStepper::setSpeedRamping() will be used.
     * 
     * 
     * @return void
     */
    public function driveForward()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_DRIVE_FORWARD, $payload, 0);
    }

    /**
     * Drives the stepper motor backward until BrickStepper::driveForward() or
     * BrickStepper::stop() is triggered. The velocity, acceleration and deacceleration as
     * set by BrickStepper::setMaxVelocity() and BrickStepper::setSpeedRamping() will be used.
     * 
     * 
     * @return void
     */
    public function driveBackward()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_DRIVE_BACKWARD, $payload, 0);
    }

    /**
     * Stops the stepper motor with the deacceleration as set by
     * BrickStepper::setSpeedRamping().
     * 
     * 
     * @return void
     */
    public function stop()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_STOP, $payload, 0);
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
     * given via the black power input connector on the Stepper Brick.
     * 
     * If there is an external input voltage and a stack input voltage, the motor
     * will be driven by the external input voltage. If there is only a stack
     * voltage present, the motor will be driven by this voltage.
     * 
     * <warning>
     *  This means, if you have a high stack voltage and a low external voltage,
     *  the motor will be driven with the low external voltage. If you then remove
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
     * Returns the current consumption of the motor.
     * 
     * 
     * @return int
     */
    public function getCurrentConsumption()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_CURRENT_CONSUMPTION, $payload, 10);

        $payload = unpack('v1current', $data);

        return $payload['current'];
    }

    /**
     * Sets the current with which the motor will be driven.
     * 
     * <warning>
     *  Do not set this value above the specifications of your stepper motor.
     *  Otherwise it may damage your motor.
     * </warning>
     * 
     * @param int $current
     * 
     * @return void
     */
    public function setMotorCurrent($current)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $current);

        $this->sendRequest(self::FUNCTION_SET_MOTOR_CURRENT, $payload, 0);
    }

    /**
     * Returns the current as set by BrickStepper::setMotorCurrent().
     * 
     * 
     * @return int
     */
    public function getMotorCurrent()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_MOTOR_CURRENT, $payload, 10);

        $payload = unpack('v1current', $data);

        return $payload['current'];
    }

    /**
     * Enables the driver chip. The driver parameters can be configured (maximum velocity,
     * acceleration, etc) before it is enabled.
     * 
     * 
     * @return void
     */
    public function enable()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_ENABLE, $payload, 0);
    }

    /**
     * Disables the driver chip. The configurations are kept (maximum velocity,
     * acceleration, etc) but the motor is not driven until it is enabled again.
     * 
     * <warning>
     *  Disabling the driver chip while the motor is still turning can damage the
     *  driver chip. The motor should be stopped calling BrickStepper::stop() function
     *  before disabling the motor power. The BrickStepper::stop() function will **not**
     *  wait until the motor is actually stopped. You have to explicitly wait for the
     *  appropriate time after calling the BrickStepper::stop() function before calling
     *  the BrickStepper::disable() function.
     * </warning>
     * 
     * 
     * @return void
     */
    public function disable()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_DISABLE, $payload, 0);
    }

    /**
     * Returns *true* if the driver chip is enabled, *false* otherwise.
     * 
     * 
     * @return bool
     */
    public function isEnabled()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_IS_ENABLED, $payload, 9);

        $payload = unpack('C1enabled', $data);

        return (bool)$payload['enabled'];
    }

    /**
     * Sets the decay mode of the stepper motor.
     * A value of 0 sets the fast decay mode, a value of
     * 65535 sets the slow decay mode and a value in between sets the mixed
     * decay mode.
     * 
     * Changing the decay mode is only possible if synchronous rectification
     * is enabled (see BrickStepper::setSyncRect()).
     * 
     * For a good explanation of the different decay modes see
     * `this <https://ebldc.com/?p=86/>`__ blog post by Avayan.
     * 
     * A good decay mode is unfortunately different for every motor. The best
     * way to work out a good decay mode for your stepper motor, if you can't
     * measure the current with an oscilloscope, is to listen to the sound of
     * the motor. If the value is too low, you often hear a high pitched
     * sound and if it is too high you can often hear a humming sound.
     * 
     * Generally, fast decay mode (small value) will be noisier but also
     * allow higher motor speeds.
     * 
     * <note>
     *  There is unfortunately no formula to calculate a perfect decay
     *  mode for a given stepper motor. If you have problems with loud noises
     *  or the maximum motor speed is too slow, you should try to tinker with
     *  the decay value
     * </note>
     * 
     * @param int $decay
     * 
     * @return void
     */
    public function setDecay($decay)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $decay);

        $this->sendRequest(self::FUNCTION_SET_DECAY, $payload, 0);
    }

    /**
     * Returns the decay mode as set by BrickStepper::setDecay().
     * 
     * 
     * @return int
     */
    public function getDecay()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_DECAY, $payload, 10);

        $payload = unpack('v1decay', $data);

        return $payload['decay'];
    }

    /**
     * Sets the minimum voltage, below which the BrickStepper::CALLBACK_UNDER_VOLTAGE callback
     * is triggered. The minimum possible value that works with the Stepper Brick is 8V.
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
     * Returns the minimum voltage as set by BrickStepper::setMinimumVoltage().
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
     * Turns synchronous rectification on or off (*true* or *false*).
     * 
     * With synchronous rectification on, the decay can be changed
     * (see BrickStepper::setDecay()). Without synchronous rectification fast
     * decay is used.
     * 
     * For an explanation of synchronous rectification see
     * `here <https://en.wikipedia.org/wiki/Active_rectification>`__.
     * 
     * <warning>
     *  If you want to use high speeds (> 10000 steps/s) for a large
     *  stepper motor with a large inductivity we strongly
     *  suggest that you disable synchronous rectification. Otherwise the
     *  Brick may not be able to cope with the load and overheat.
     * </warning>
     * 
     * @param bool $sync_rect
     * 
     * @return void
     */
    public function setSyncRect($sync_rect)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', intval((bool)$sync_rect));

        $this->sendRequest(self::FUNCTION_SET_SYNC_RECT, $payload, 0);
    }

    /**
     * Returns *true* if synchronous rectification is enabled, *false* otherwise.
     * 
     * 
     * @return bool
     */
    public function isSyncRect()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_IS_SYNC_RECT, $payload, 9);

        $payload = unpack('C1sync_rect', $data);

        return (bool)$payload['sync_rect'];
    }

    /**
     * Sets the time base of the velocity and the acceleration of the stepper brick.
     * 
     * For example, if you want to make one step every 1.5 seconds, you can set
     * the time base to 15 and the velocity to 10. Now the velocity is
     * 10steps/15s = 1steps/1.5s.
     * 
     * @param int $time_base
     * 
     * @return void
     */
    public function setTimeBase($time_base)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $time_base);

        $this->sendRequest(self::FUNCTION_SET_TIME_BASE, $payload, 0);
    }

    /**
     * Returns the time base as set by BrickStepper::setTimeBase().
     * 
     * 
     * @return int
     */
    public function getTimeBase()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_TIME_BASE, $payload, 12);

        $payload = unpack('V1time_base', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'time_base');
    }

    /**
     * Returns the following parameters: The current velocity,
     * the current position, the remaining steps, the stack voltage, the external
     * voltage and the current consumption of the stepper motor.
     * 
     * There is also a callback for this function, see BrickStepper::CALLBACK_ALL_DATA callback.
     * 
     * 
     * @return array
     */
    public function getAllData()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ALL_DATA, $payload, 24);

        $payload = unpack('v1current_velocity/V1current_position/V1remaining_steps/v1stack_voltage/v1external_voltage/v1current_consumption', $data);

        $ret['current_velocity'] = $payload['current_velocity'];
        $ret['current_position'] = IPConnection::fixUnpackedInt32($payload, 'current_position');
        $ret['remaining_steps'] = IPConnection::fixUnpackedInt32($payload, 'remaining_steps');
        $ret['stack_voltage'] = $payload['stack_voltage'];
        $ret['external_voltage'] = $payload['external_voltage'];
        $ret['current_consumption'] = $payload['current_consumption'];

        return $ret;
    }

    /**
     * Sets the period with which the BrickStepper::CALLBACK_ALL_DATA callback is triggered
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
     * Returns the period as set by BrickStepper::setAllDataPeriod().
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
     * BrickStepper::setSPITFPBaudrate(). If the dynamic baudrate is disabled, the baudrate
     * as set by BrickStepper::setSPITFPBaudrate() will be used statically.
     * 
     * .. versionadded:: 2.3.6$nbsp;(Firmware)
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
     * Returns the baudrate config, see BrickStepper::setSPITFPBaudrateConfig().
     * 
     * .. versionadded:: 2.3.6$nbsp;(Firmware)
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
     * .. versionadded:: 2.3.4$nbsp;(Firmware)
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
     * interference (see BrickStepper::getSPITFPErrorCount()) you can decrease the
     * baudrate.
     * 
     * If the dynamic baudrate feature is enabled, the baudrate set by this
     * function corresponds to the maximum baudrate (see BrickStepper::setSPITFPBaudrateConfig()).
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
     * Returns the baudrate for a given Bricklet port, see BrickStepper::setSPITFPBaudrate().
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
        $payload = unpack('V1position', $data);
        $payload['position'] = IPConnection::fixUnpackedInt32($payload, 'position');

        if (array_key_exists(self::CALLBACK_POSITION_REACHED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_POSITION_REACHED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_POSITION_REACHED];

            call_user_func($function, $payload['position'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperAllData($data)
    {
        $payload = unpack('v1current_velocity/V1current_position/V1remaining_steps/v1stack_voltage/v1external_voltage/v1current_consumption', $data);
        $payload['current_position'] = IPConnection::fixUnpackedInt32($payload, 'current_position');
        $payload['remaining_steps'] = IPConnection::fixUnpackedInt32($payload, 'remaining_steps');

        if (array_key_exists(self::CALLBACK_ALL_DATA, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_ALL_DATA];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_ALL_DATA];

            call_user_func($function, $payload['current_velocity'], $payload['current_position'], $payload['remaining_steps'], $payload['stack_voltage'], $payload['external_voltage'], $payload['current_consumption'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperNewState($data)
    {
        $payload = unpack('C1state_new/C1state_previous', $data);

        if (array_key_exists(self::CALLBACK_NEW_STATE, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_NEW_STATE];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_NEW_STATE];

            call_user_func($function, $payload['state_new'], $payload['state_previous'], $user_data);
        }
    }
}

?>
