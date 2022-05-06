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
 * Silently drives one bipolar stepper motor with up to 46V and 1.6A per phase
 */
class BrickSilentStepper extends Device
{

    /**
     * This callback is triggered when the input voltage drops below the value set by
     * BrickSilentStepper::setMinimumVoltage(). The parameter is the current voltage.
     */
    const CALLBACK_UNDER_VOLTAGE = 40;

    /**
     * This callback is triggered when a position set by BrickSilentStepper::setSteps() or
     * BrickSilentStepper::setTargetPosition() is reached.
     * 
     * <note>
     *  Since we can't get any feedback from the stepper motor, this only works if the
     *  acceleration (see BrickSilentStepper::setSpeedRamping()) is set smaller or equal to the
     *  maximum acceleration of the motor. Otherwise the motor will lag behind the
     *  control value and the callback will be triggered too early.
     * </note>
     */
    const CALLBACK_POSITION_REACHED = 41;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickSilentStepper::setAllDataPeriod(). The parameters are: the current velocity,
     * the current position, the remaining steps, the stack voltage, the external
     * voltage and the current consumption of the stepper motor.
     */
    const CALLBACK_ALL_DATA = 47;

    /**
     * This callback is triggered whenever the Silent Stepper Brick enters a new state.
     * It returns the new state as well as the previous state.
     */
    const CALLBACK_NEW_STATE = 48;


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
    const FUNCTION_SET_STEP_CONFIGURATION = 14;

    /**
     * @internal
     */
    const FUNCTION_GET_STEP_CONFIGURATION = 15;

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
    const FUNCTION_SET_BASIC_CONFIGURATION = 27;

    /**
     * @internal
     */
    const FUNCTION_GET_BASIC_CONFIGURATION = 28;

    /**
     * @internal
     */
    const FUNCTION_SET_SPREADCYCLE_CONFIGURATION = 29;

    /**
     * @internal
     */
    const FUNCTION_GET_SPREADCYCLE_CONFIGURATION = 30;

    /**
     * @internal
     */
    const FUNCTION_SET_STEALTH_CONFIGURATION = 31;

    /**
     * @internal
     */
    const FUNCTION_GET_STEALTH_CONFIGURATION = 32;

    /**
     * @internal
     */
    const FUNCTION_SET_COOLSTEP_CONFIGURATION = 33;

    /**
     * @internal
     */
    const FUNCTION_GET_COOLSTEP_CONFIGURATION = 34;

    /**
     * @internal
     */
    const FUNCTION_SET_MISC_CONFIGURATION = 35;

    /**
     * @internal
     */
    const FUNCTION_GET_MISC_CONFIGURATION = 36;

    /**
     * @internal
     */
    const FUNCTION_GET_DRIVER_STATUS = 37;

    /**
     * @internal
     */
    const FUNCTION_SET_MINIMUM_VOLTAGE = 38;

    /**
     * @internal
     */
    const FUNCTION_GET_MINIMUM_VOLTAGE = 39;

    /**
     * @internal
     */
    const FUNCTION_SET_TIME_BASE = 42;

    /**
     * @internal
     */
    const FUNCTION_GET_TIME_BASE = 43;

    /**
     * @internal
     */
    const FUNCTION_GET_ALL_DATA = 44;

    /**
     * @internal
     */
    const FUNCTION_SET_ALL_DATA_PERIOD = 45;

    /**
     * @internal
     */
    const FUNCTION_GET_ALL_DATA_PERIOD = 46;

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

    const STEP_RESOLUTION_1 = 8;
    const STEP_RESOLUTION_2 = 7;
    const STEP_RESOLUTION_4 = 6;
    const STEP_RESOLUTION_8 = 5;
    const STEP_RESOLUTION_16 = 4;
    const STEP_RESOLUTION_32 = 3;
    const STEP_RESOLUTION_64 = 2;
    const STEP_RESOLUTION_128 = 1;
    const STEP_RESOLUTION_256 = 0;
    const CHOPPER_MODE_SPREAD_CYCLE = 0;
    const CHOPPER_MODE_FAST_DECAY = 1;
    const FREEWHEEL_MODE_NORMAL = 0;
    const FREEWHEEL_MODE_FREEWHEELING = 1;
    const FREEWHEEL_MODE_COIL_SHORT_LS = 2;
    const FREEWHEEL_MODE_COIL_SHORT_HS = 3;
    const CURRENT_UP_STEP_INCREMENT_1 = 0;
    const CURRENT_UP_STEP_INCREMENT_2 = 1;
    const CURRENT_UP_STEP_INCREMENT_4 = 2;
    const CURRENT_UP_STEP_INCREMENT_8 = 3;
    const CURRENT_DOWN_STEP_DECREMENT_1 = 0;
    const CURRENT_DOWN_STEP_DECREMENT_2 = 1;
    const CURRENT_DOWN_STEP_DECREMENT_8 = 2;
    const CURRENT_DOWN_STEP_DECREMENT_32 = 3;
    const MINIMUM_CURRENT_HALF = 0;
    const MINIMUM_CURRENT_QUARTER = 1;
    const STALLGUARD_MODE_STANDARD = 0;
    const STALLGUARD_MODE_FILTERED = 1;
    const OPEN_LOAD_NONE = 0;
    const OPEN_LOAD_PHASE_A = 1;
    const OPEN_LOAD_PHASE_B = 2;
    const OPEN_LOAD_PHASE_AB = 3;
    const SHORT_TO_GROUND_NONE = 0;
    const SHORT_TO_GROUND_PHASE_A = 1;
    const SHORT_TO_GROUND_PHASE_B = 2;
    const SHORT_TO_GROUND_PHASE_AB = 3;
    const OVER_TEMPERATURE_NONE = 0;
    const OVER_TEMPERATURE_WARNING = 1;
    const OVER_TEMPERATURE_LIMIT = 2;
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

    const DEVICE_IDENTIFIER = 19;

    const DEVICE_DISPLAY_NAME = 'Silent Stepper Brick';

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
        $this->response_expected[self::FUNCTION_SET_STEP_CONFIGURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_STEP_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_DRIVE_FORWARD] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_DRIVE_BACKWARD] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_STOP] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_STACK_INPUT_VOLTAGE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_EXTERNAL_INPUT_VOLTAGE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_MOTOR_CURRENT] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_MOTOR_CURRENT] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_ENABLE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_DISABLE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_IS_ENABLED] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_BASIC_CONFIGURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_BASIC_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_SPREADCYCLE_CONFIGURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_SPREADCYCLE_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_STEALTH_CONFIGURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_STEALTH_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_COOLSTEP_CONFIGURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_COOLSTEP_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_MISC_CONFIGURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_MISC_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_DRIVER_STATUS] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_MINIMUM_VOLTAGE] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_MINIMUM_VOLTAGE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
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
     * either BrickSilentStepper::setTargetPosition(), BrickSilentStepper::setSteps(), BrickSilentStepper::driveForward() or
     * BrickSilentStepper::driveBackward().
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
     * Returns the velocity as set by BrickSilentStepper::setMaxVelocity().
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
     * BrickSilentStepper::setSpeedRamping().
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
     * Call BrickSilentStepper::stop() if you just want to stop the motor.
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
     * functions (BrickSilentStepper::setTargetPosition(), BrickSilentStepper::setSteps(), BrickSilentStepper::driveForward() or
     * BrickSilentStepper::driveBackward()). It also is possible to reset the steps to 0 or
     * set them to any other desired value with BrickSilentStepper::setCurrentPosition().
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
     * if the current position of the motor is 500 and BrickSilentStepper::setTargetPosition() is
     * called with 1000, the stepper motor will drive 500 steps forward. It will
     * use the velocity, acceleration and deacceleration as set by
     * BrickSilentStepper::setMaxVelocity() and BrickSilentStepper::setSpeedRamping().
     * 
     * A call of BrickSilentStepper::setTargetPosition() with the parameter *x* is equivalent to
     * a call of BrickSilentStepper::setSteps() with the parameter
     * (*x* - BrickSilentStepper::getCurrentPosition()).
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
     * Returns the last target position as set by BrickSilentStepper::setTargetPosition().
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
     * BrickSilentStepper::setMaxVelocity() and BrickSilentStepper::setSpeedRamping() will be used.
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
     * Returns the last steps as set by BrickSilentStepper::setSteps().
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
     * Returns the remaining steps of the last call of BrickSilentStepper::setSteps().
     * For example, if BrickSilentStepper::setSteps() is called with 2000 and
     * BrickSilentStepper::getRemainingSteps() is called after the motor has run for 500 steps,
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
     * Sets the step resolution from full-step up to 1/256-step.
     * 
     * If interpolation is turned on, the Silent Stepper Brick will always interpolate
     * your step inputs as 1/256-step. If you use full-step mode with interpolation, each
     * step will generate 256 1/256 steps.
     * 
     * For maximum torque use full-step without interpolation. For maximum resolution use
     * 1/256-step. Turn interpolation on to make the Stepper driving less noisy.
     * 
     * If you often change the speed with high acceleration you should turn the
     * interpolation off.
     * 
     * @param int $step_resolution
     * @param bool $interpolation
     * 
     * @return void
     */
    public function setStepConfiguration($step_resolution, $interpolation)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $step_resolution);
        $payload .= pack('C', intval((bool)$interpolation));

        $this->sendRequest(self::FUNCTION_SET_STEP_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the step mode as set by BrickSilentStepper::setStepConfiguration().
     * 
     * 
     * @return array
     */
    public function getStepConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_STEP_CONFIGURATION, $payload, 10);

        $payload = unpack('C1step_resolution/C1interpolation', $data);

        $ret['step_resolution'] = $payload['step_resolution'];
        $ret['interpolation'] = (bool)$payload['interpolation'];

        return $ret;
    }

    /**
     * Drives the stepper motor forward until BrickSilentStepper::driveBackward() or
     * BrickSilentStepper::stop() is called. The velocity, acceleration and deacceleration as
     * set by BrickSilentStepper::setMaxVelocity() and BrickSilentStepper::setSpeedRamping() will be used.
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
     * Drives the stepper motor backward until BrickSilentStepper::driveForward() or
     * BrickSilentStepper::stop() is triggered. The velocity, acceleration and deacceleration as
     * set by BrickSilentStepper::setMaxVelocity() and BrickSilentStepper::setSpeedRamping() will be used.
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
     * BrickSilentStepper::setSpeedRamping().
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
     * given via the black power input connector on the Silent Stepper Brick.
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
     * Returns the current as set by BrickSilentStepper::setMotorCurrent().
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
     *  driver chip. The motor should be stopped calling BrickSilentStepper::stop() function
     *  before disabling the motor power. The BrickSilentStepper::stop() function will **not**
     *  wait until the motor is actually stopped. You have to explicitly wait for the
     *  appropriate time after calling the BrickSilentStepper::stop() function before calling
     *  the BrickSilentStepper::disable() function.
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
     * Sets the basic configuration parameters for the different modes (Stealth, Coolstep, Classic).
     * 
     * * Standstill Current: This value can be used to lower the current during stand still. This might
     *   be reasonable to reduce the heating of the motor and the Brick. When the motor is in standstill
     *   the configured motor phase current will be driven until the configured
     *   Power Down Time is elapsed. After that the phase current will be reduced to the standstill
     *   current. The elapsed time for this reduction can be configured with the Standstill Delay Time.
     *   The maximum allowed value is the configured maximum motor current
     *   (see BrickSilentStepper::setMotorCurrent()).
     * 
     * * Motor Run Current: The value sets the motor current when the motor is running.
     *   Use a value of at least one half of the global maximum motor current for a good
     *   microstep performance. The maximum allowed value is the current
     *   motor current. The API maps the entered value to 1/32 ... 32/32 of the maximum
     *   motor current. This value should be used to change the motor current during motor movement,
     *   whereas the global maximum motor current should not be changed while the motor is moving
     *   (see BrickSilentStepper::setMotorCurrent()).
     * 
     * * Standstill Delay Time: Controls the duration for motor power down after a motion
     *   as soon as standstill is detected and the Power Down Time is expired. A high Standstill Delay
     *   Time results in a smooth transition that avoids motor jerk during power down.
     * 
     * * Power Down Time: Sets the delay time after a stand still.
     * 
     * * Stealth Threshold: Sets the upper threshold for Stealth mode.
     *   If the velocity of the motor goes above this value, Stealth mode is turned
     *   off. Otherwise it is turned on. In Stealth mode the torque declines with high speed.
     * 
     * * Coolstep Threshold: Sets the lower threshold for Coolstep mode.
     *   The Coolstep Threshold needs to be above the Stealth Threshold.
     * 
     * * Classic Threshold: Sets the lower threshold for classic mode.
     *   In classic mode the stepper becomes more noisy, but the torque is maximized.
     * 
     * * High Velocity Chopper Mode: If High Velocity Chopper Mode is enabled, the stepper control
     *   is optimized to run the stepper motors at high velocities.
     * 
     * If you want to use all three thresholds make sure that
     * Stealth Threshold < Coolstep Threshold < Classic Threshold.
     * 
     * @param int $standstill_current
     * @param int $motor_run_current
     * @param int $standstill_delay_time
     * @param int $power_down_time
     * @param int $stealth_threshold
     * @param int $coolstep_threshold
     * @param int $classic_threshold
     * @param bool $high_velocity_chopper_mode
     * 
     * @return void
     */
    public function setBasicConfiguration($standstill_current, $motor_run_current, $standstill_delay_time, $power_down_time, $stealth_threshold, $coolstep_threshold, $classic_threshold, $high_velocity_chopper_mode)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $standstill_current);
        $payload .= pack('v', $motor_run_current);
        $payload .= pack('v', $standstill_delay_time);
        $payload .= pack('v', $power_down_time);
        $payload .= pack('v', $stealth_threshold);
        $payload .= pack('v', $coolstep_threshold);
        $payload .= pack('v', $classic_threshold);
        $payload .= pack('C', intval((bool)$high_velocity_chopper_mode));

        $this->sendRequest(self::FUNCTION_SET_BASIC_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the configuration as set by BrickSilentStepper::setBasicConfiguration().
     * 
     * 
     * @return array
     */
    public function getBasicConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_BASIC_CONFIGURATION, $payload, 23);

        $payload = unpack('v1standstill_current/v1motor_run_current/v1standstill_delay_time/v1power_down_time/v1stealth_threshold/v1coolstep_threshold/v1classic_threshold/C1high_velocity_chopper_mode', $data);

        $ret['standstill_current'] = $payload['standstill_current'];
        $ret['motor_run_current'] = $payload['motor_run_current'];
        $ret['standstill_delay_time'] = $payload['standstill_delay_time'];
        $ret['power_down_time'] = $payload['power_down_time'];
        $ret['stealth_threshold'] = $payload['stealth_threshold'];
        $ret['coolstep_threshold'] = $payload['coolstep_threshold'];
        $ret['classic_threshold'] = $payload['classic_threshold'];
        $ret['high_velocity_chopper_mode'] = (bool)$payload['high_velocity_chopper_mode'];

        return $ret;
    }

    /**
     * Note: If you don't know what any of this means you can very likely keep all of
     * the values as default!
     * 
     * Sets the Spreadcycle configuration parameters. Spreadcycle is a chopper algorithm which actively
     * controls the motor current flow. More information can be found in the TMC2130 datasheet on page
     * 47 (7 spreadCycle and Classic Chopper).
     * 
     * * Slow Decay Duration: Controls duration of off time setting of slow decay phase.
     *   0 = driver disabled, all bridges off. Use 1 only with Comparator Blank time >= 2.
     * 
     * * Enable Random Slow Decay: Set to false to fix chopper off time as set by Slow Decay Duration.
     *   If you set it to true, Decay Duration is randomly modulated.
     * 
     * * Fast Decay Duration: Sets the fast decay duration. This parameters is
     *   only used if the Chopper Mode is set to Fast Decay.
     * 
     * * Hysteresis Start Value: Sets the hysteresis start value. This parameter is
     *   only used if the Chopper Mode is set to Spread Cycle.
     * 
     * * Hysteresis End Value: Sets the hysteresis end value. This parameter is
     *   only used if the Chopper Mode is set to Spread Cycle.
     * 
     * * Sine Wave Offset: Sets the sine wave offset. This parameters is
     *   only used if the Chopper Mode is set to Fast Decay. 1/512 of the value becomes added to the absolute
     *   value of the sine wave.
     * 
     * * Chopper Mode: 0 = Spread Cycle, 1 = Fast Decay.
     * 
     * * Comparator Blank Time: Sets the blank time of the comparator. Available values are
     * 
     *   * 0 = 16 clocks,
     *   * 1 = 24 clocks,
     *   * 2 = 36 clocks and
     *   * 3 = 54 clocks.
     * 
     *   A value of 1 or 2 is recommended for most applications.
     * 
     * * Fast Decay Without Comparator: If set to true the current comparator usage for termination of the
     *   fast decay cycle is disabled.
     * 
     * @param int $slow_decay_duration
     * @param bool $enable_random_slow_decay
     * @param int $fast_decay_duration
     * @param int $hysteresis_start_value
     * @param int $hysteresis_end_value
     * @param int $sine_wave_offset
     * @param int $chopper_mode
     * @param int $comparator_blank_time
     * @param bool $fast_decay_without_comparator
     * 
     * @return void
     */
    public function setSpreadcycleConfiguration($slow_decay_duration, $enable_random_slow_decay, $fast_decay_duration, $hysteresis_start_value, $hysteresis_end_value, $sine_wave_offset, $chopper_mode, $comparator_blank_time, $fast_decay_without_comparator)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $slow_decay_duration);
        $payload .= pack('C', intval((bool)$enable_random_slow_decay));
        $payload .= pack('C', $fast_decay_duration);
        $payload .= pack('C', $hysteresis_start_value);
        $payload .= pack('c', $hysteresis_end_value);
        $payload .= pack('c', $sine_wave_offset);
        $payload .= pack('C', $chopper_mode);
        $payload .= pack('C', $comparator_blank_time);
        $payload .= pack('C', intval((bool)$fast_decay_without_comparator));

        $this->sendRequest(self::FUNCTION_SET_SPREADCYCLE_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the configuration as set by BrickSilentStepper::setBasicConfiguration().
     * 
     * 
     * @return array
     */
    public function getSpreadcycleConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_SPREADCYCLE_CONFIGURATION, $payload, 17);

        $payload = unpack('C1slow_decay_duration/C1enable_random_slow_decay/C1fast_decay_duration/C1hysteresis_start_value/c1hysteresis_end_value/c1sine_wave_offset/C1chopper_mode/C1comparator_blank_time/C1fast_decay_without_comparator', $data);

        $ret['slow_decay_duration'] = $payload['slow_decay_duration'];
        $ret['enable_random_slow_decay'] = (bool)$payload['enable_random_slow_decay'];
        $ret['fast_decay_duration'] = $payload['fast_decay_duration'];
        $ret['hysteresis_start_value'] = $payload['hysteresis_start_value'];
        $ret['hysteresis_end_value'] = $payload['hysteresis_end_value'];
        $ret['sine_wave_offset'] = $payload['sine_wave_offset'];
        $ret['chopper_mode'] = $payload['chopper_mode'];
        $ret['comparator_blank_time'] = $payload['comparator_blank_time'];
        $ret['fast_decay_without_comparator'] = (bool)$payload['fast_decay_without_comparator'];

        return $ret;
    }

    /**
     * Note: If you don't know what any of this means you can very likely keep all of
     * the values as default!
     * 
     * Sets the configuration relevant for Stealth mode.
     * 
     * * Enable Stealth: If set to true the stealth mode is enabled, if set to false the
     *   stealth mode is disabled, even if the speed is below the threshold set in BrickSilentStepper::setBasicConfiguration().
     * 
     * * Amplitude: If autoscale is disabled, the PWM amplitude is scaled by this value. If autoscale is enabled,
     *   this value defines the maximum PWM amplitude change per half wave.
     * 
     * * Gradient: If autoscale is disabled, the PWM gradient is scaled by this value. If autoscale is enabled,
     *   this value defines the maximum PWM gradient. With autoscale a value above 64 is recommended,
     *   otherwise the regulation might not be able to measure the current.
     * 
     * * Enable Autoscale: If set to true, automatic current control is used. Otherwise the user defined
     *   amplitude and gradient are used.
     * 
     * * Force Symmetric: If true, A symmetric PWM cycle is enforced. Otherwise the PWM value may change within each
     *   PWM cycle.
     * 
     * * Freewheel Mode: The freewheel mode defines the behavior in stand still if the Standstill Current
     *   (see BrickSilentStepper::setBasicConfiguration()) is set to 0.
     * 
     * @param bool $enable_stealth
     * @param int $amplitude
     * @param int $gradient
     * @param bool $enable_autoscale
     * @param bool $force_symmetric
     * @param int $freewheel_mode
     * 
     * @return void
     */
    public function setStealthConfiguration($enable_stealth, $amplitude, $gradient, $enable_autoscale, $force_symmetric, $freewheel_mode)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', intval((bool)$enable_stealth));
        $payload .= pack('C', $amplitude);
        $payload .= pack('C', $gradient);
        $payload .= pack('C', intval((bool)$enable_autoscale));
        $payload .= pack('C', intval((bool)$force_symmetric));
        $payload .= pack('C', $freewheel_mode);

        $this->sendRequest(self::FUNCTION_SET_STEALTH_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the configuration as set by BrickSilentStepper::setStealthConfiguration().
     * 
     * 
     * @return array
     */
    public function getStealthConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_STEALTH_CONFIGURATION, $payload, 14);

        $payload = unpack('C1enable_stealth/C1amplitude/C1gradient/C1enable_autoscale/C1force_symmetric/C1freewheel_mode', $data);

        $ret['enable_stealth'] = (bool)$payload['enable_stealth'];
        $ret['amplitude'] = $payload['amplitude'];
        $ret['gradient'] = $payload['gradient'];
        $ret['enable_autoscale'] = (bool)$payload['enable_autoscale'];
        $ret['force_symmetric'] = (bool)$payload['force_symmetric'];
        $ret['freewheel_mode'] = $payload['freewheel_mode'];

        return $ret;
    }

    /**
     * Note: If you don't know what any of this means you can very likely keep all of
     * the values as default!
     * 
     * Sets the configuration relevant for Coolstep.
     * 
     * * Minimum Stallguard Value: If the Stallguard result falls below this value*32, the motor current
     *   is increased to reduce motor load angle. A value of 0 turns Coolstep off.
     * 
     * * Maximum Stallguard Value: If the Stallguard result goes above
     *   (Min Stallguard Value + Max Stallguard Value + 1) * 32, the motor current is decreased to save
     *   energy.
     * 
     * * Current Up Step Width: Sets the up step increment per Stallguard value. The value range is 0-3,
     *   corresponding to the increments 1, 2, 4 and 8.
     * 
     * * Current Down Step Width: Sets the down step decrement per Stallguard value. The value range is 0-3,
     *   corresponding to the decrements 1, 2, 8 and 16.
     * 
     * * Minimum Current: Sets the minimum current for Coolstep current control. You can choose between
     *   half and quarter of the run current.
     * 
     * * Stallguard Threshold Value: Sets the level for stall output (see BrickSilentStepper::getDriverStatus()).
     *   A lower value gives a higher sensitivity. You have to find a suitable value for your
     *   motor by trial and error, 0 works for most motors.
     * 
     * * Stallguard Mode: Set to 0 for standard resolution or 1 for filtered mode. In filtered mode the Stallguard
     *   signal will be updated every four full-steps.
     * 
     * @param int $minimum_stallguard_value
     * @param int $maximum_stallguard_value
     * @param int $current_up_step_width
     * @param int $current_down_step_width
     * @param int $minimum_current
     * @param int $stallguard_threshold_value
     * @param int $stallguard_mode
     * 
     * @return void
     */
    public function setCoolstepConfiguration($minimum_stallguard_value, $maximum_stallguard_value, $current_up_step_width, $current_down_step_width, $minimum_current, $stallguard_threshold_value, $stallguard_mode)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $minimum_stallguard_value);
        $payload .= pack('C', $maximum_stallguard_value);
        $payload .= pack('C', $current_up_step_width);
        $payload .= pack('C', $current_down_step_width);
        $payload .= pack('C', $minimum_current);
        $payload .= pack('c', $stallguard_threshold_value);
        $payload .= pack('C', $stallguard_mode);

        $this->sendRequest(self::FUNCTION_SET_COOLSTEP_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the configuration as set by BrickSilentStepper::setCoolstepConfiguration().
     * 
     * 
     * @return array
     */
    public function getCoolstepConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_COOLSTEP_CONFIGURATION, $payload, 15);

        $payload = unpack('C1minimum_stallguard_value/C1maximum_stallguard_value/C1current_up_step_width/C1current_down_step_width/C1minimum_current/c1stallguard_threshold_value/C1stallguard_mode', $data);

        $ret['minimum_stallguard_value'] = $payload['minimum_stallguard_value'];
        $ret['maximum_stallguard_value'] = $payload['maximum_stallguard_value'];
        $ret['current_up_step_width'] = $payload['current_up_step_width'];
        $ret['current_down_step_width'] = $payload['current_down_step_width'];
        $ret['minimum_current'] = $payload['minimum_current'];
        $ret['stallguard_threshold_value'] = $payload['stallguard_threshold_value'];
        $ret['stallguard_mode'] = $payload['stallguard_mode'];

        return $ret;
    }

    /**
     * Note: If you don't know what any of this means you can very likely keep all of
     * the values as default!
     * 
     * Sets miscellaneous configuration parameters.
     * 
     * * Disable Short To Ground Protection: Set to false to enable short to ground protection, otherwise
     *   it is disabled.
     * 
     * * Synchronize Phase Frequency: With this parameter you can synchronize the chopper for both phases
     *   of a two phase motor to avoid the occurrence of a beat. The value range is 0-15. If set to 0,
     *   the synchronization is turned off. Otherwise the synchronization is done through the formula
     *   f_sync = f_clk/(value*64). In Classic Mode the synchronization is automatically switched off.
     *   f_clk is 12.8MHz.
     * 
     * @param bool $disable_short_to_ground_protection
     * @param int $synchronize_phase_frequency
     * 
     * @return void
     */
    public function setMiscConfiguration($disable_short_to_ground_protection, $synchronize_phase_frequency)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', intval((bool)$disable_short_to_ground_protection));
        $payload .= pack('C', $synchronize_phase_frequency);

        $this->sendRequest(self::FUNCTION_SET_MISC_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the configuration as set by BrickSilentStepper::setMiscConfiguration().
     * 
     * 
     * @return array
     */
    public function getMiscConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_MISC_CONFIGURATION, $payload, 10);

        $payload = unpack('C1disable_short_to_ground_protection/C1synchronize_phase_frequency', $data);

        $ret['disable_short_to_ground_protection'] = (bool)$payload['disable_short_to_ground_protection'];
        $ret['synchronize_phase_frequency'] = $payload['synchronize_phase_frequency'];

        return $ret;
    }

    /**
     * Returns the current driver status.
     * 
     * * Open Load: Indicates if an open load is present on phase A, B or both. This could mean that there is a problem
     *   with the wiring of the motor. False detection can occur in fast motion as well as during stand still.
     * 
     * * Short To Ground: Indicates if a short to ground is present on phase A, B or both. If this is detected the driver
     *   automatically becomes disabled and stays disabled until it is enabled again manually.
     * 
     * * Over Temperature: The over temperature indicator switches to "Warning" if the driver IC warms up. The warning flag
     *   is expected during long duration stepper uses. If the temperature limit is reached the indicator switches
     *   to "Limit". In this case the driver becomes disabled until it cools down again.
     * 
     * * Motor Stalled: Is true if a motor stall was detected.
     * 
     * * Actual Motor Current: Indicates the actual current control scaling as used in Coolstep mode.
     *   It represents a multiplier of 1/32 to 32/32 of the
     *   ``Motor Run Current`` as set by BrickSilentStepper::setBasicConfiguration(). Example: If a ``Motor Run Current``
     *   of 1000mA was set and the returned value is 15, the ``Actual Motor Current`` is 16/32*1000mA = 500mA.
     * 
     * * Stallguard Result: Indicates the load of the motor. A lower value signals a higher load. Per trial and error
     *   you can find out which value corresponds to a suitable torque for the velocity used in your application.
     *   After that you can use this threshold value to find out if a motor stall becomes probable and react on it (e.g.
     *   decrease velocity).
     *   During stand still this value can not be used for stall detection, it shows the chopper on-time for motor coil A.
     * 
     * * Stealth Voltage Amplitude: Shows the actual PWM scaling. In Stealth mode it can be used to detect motor load and
     *   stall if autoscale is enabled (see BrickSilentStepper::setStealthConfiguration()).
     * 
     * 
     * @return array
     */
    public function getDriverStatus()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_DRIVER_STATUS, $payload, 16);

        $payload = unpack('C1open_load/C1short_to_ground/C1over_temperature/C1motor_stalled/C1actual_motor_current/C1full_step_active/C1stallguard_result/C1stealth_voltage_amplitude', $data);

        $ret['open_load'] = $payload['open_load'];
        $ret['short_to_ground'] = $payload['short_to_ground'];
        $ret['over_temperature'] = $payload['over_temperature'];
        $ret['motor_stalled'] = (bool)$payload['motor_stalled'];
        $ret['actual_motor_current'] = $payload['actual_motor_current'];
        $ret['full_step_active'] = (bool)$payload['full_step_active'];
        $ret['stallguard_result'] = $payload['stallguard_result'];
        $ret['stealth_voltage_amplitude'] = $payload['stealth_voltage_amplitude'];

        return $ret;
    }

    /**
     * Sets the minimum voltage, below which the BrickSilentStepper::CALLBACK_UNDER_VOLTAGE callback
     * is triggered. The minimum possible value that works with the Silent Stepper
     * Brick is 8V.
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
     * Returns the minimum voltage as set by BrickSilentStepper::setMinimumVoltage().
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
     * Sets the time base of the velocity and the acceleration of the Silent Stepper
     * Brick.
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
     * Returns the time base as set by BrickSilentStepper::setTimeBase().
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
     * The current consumption is calculated by multiplying the ``Actual Motor Current``
     * value (see BrickSilentStepper::setBasicConfiguration()) with the ``Motor Run Current``
     * (see BrickSilentStepper::getDriverStatus()). This is an internal calculation of the
     * driver, not an independent external measurement.
     * 
     * The current consumption calculation was broken up to firmware 2.0.1, it is fixed
     * since firmware 2.0.2.
     * 
     * There is also a callback for this function, see BrickSilentStepper::CALLBACK_ALL_DATA callback.
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
     * Sets the period with which the BrickSilentStepper::CALLBACK_ALL_DATA callback is triggered
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
     * Returns the period as set by BrickSilentStepper::setAllDataPeriod().
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
     * BrickSilentStepper::setSPITFPBaudrate(). If the dynamic baudrate is disabled, the baudrate
     * as set by BrickSilentStepper::setSPITFPBaudrate() will be used statically.
     * 
     * .. versionadded:: 2.0.4$nbsp;(Firmware)
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
     * Returns the baudrate config, see BrickSilentStepper::setSPITFPBaudrateConfig().
     * 
     * .. versionadded:: 2.0.4$nbsp;(Firmware)
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
     * interference (see BrickSilentStepper::getSPITFPErrorCount()) you can decrease the
     * baudrate.
     * 
     * If the dynamic baudrate feature is enabled, the baudrate set by this
     * function corresponds to the maximum baudrate (see BrickSilentStepper::setSPITFPBaudrateConfig()).
     * 
     * Regulatory testing is done with the default baudrate. If CE compatibility
     * or similar is necessary in your applications we recommend to not change
     * the baudrate.
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
     * Returns the baudrate for a given Bricklet port, see BrickSilentStepper::setSPITFPBaudrate().
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
