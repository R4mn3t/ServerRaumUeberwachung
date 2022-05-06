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
 * Drives one brushed DC motor with up to 28V and 5A (peak)
 */
class BrickDC extends Device
{

    /**
     * This callback is triggered when the input voltage drops below the value set by
     * BrickDC::setMinimumVoltage(). The parameter is the current voltage.
     */
    const CALLBACK_UNDER_VOLTAGE = 21;

    /**
     * This callback is triggered if either the current consumption
     * is too high (above 5A) or the temperature of the driver chip is too high
     * (above 175°C). These two possibilities are essentially the same, since the
     * temperature will reach this threshold immediately if the motor consumes too
     * much current. In case of a voltage below 3.3V (external or stack) this
     * callback is triggered as well.
     * 
     * If this callback is triggered, the driver chip gets disabled at the same time.
     * That means, BrickDC::enable() has to be called to drive the motor again.
     * 
     * <note>
     *  This callback only works in Drive/Brake mode (see BrickDC::setDriveMode()). In
     *  Drive/Coast mode it is unfortunately impossible to reliably read the
     *  overcurrent/overtemperature signal from the driver chip.
     * </note>
     */
    const CALLBACK_EMERGENCY_SHUTDOWN = 22;

    /**
     * This callback is triggered whenever a set velocity is reached. For example:
     * If a velocity of 0 is present, acceleration is set to 5000 and velocity
     * to 10000, the BrickDC::CALLBACK_VELOCITY_REACHED callback will be triggered after about
     * 2 seconds, when the set velocity is actually reached.
     * 
     * <note>
     *  Since we can't get any feedback from the DC motor, this only works if the
     *  acceleration (see BrickDC::setAcceleration()) is set smaller or equal to the
     *  maximum acceleration of the motor. Otherwise the motor will lag behind the
     *  control value and the callback will be triggered too early.
     * </note>
     */
    const CALLBACK_VELOCITY_REACHED = 23;

    /**
     * This callback is triggered with the period that is set by
     * BrickDC::setCurrentVelocityPeriod(). The parameter is the *current*
     * velocity used by the motor.
     * 
     * The BrickDC::CALLBACK_CURRENT_VELOCITY callback is only triggered after the set period
     * if there is a change in the velocity.
     */
    const CALLBACK_CURRENT_VELOCITY = 24;


    /**
     * @internal
     */
    const FUNCTION_SET_VELOCITY = 1;

    /**
     * @internal
     */
    const FUNCTION_GET_VELOCITY = 2;

    /**
     * @internal
     */
    const FUNCTION_GET_CURRENT_VELOCITY = 3;

    /**
     * @internal
     */
    const FUNCTION_SET_ACCELERATION = 4;

    /**
     * @internal
     */
    const FUNCTION_GET_ACCELERATION = 5;

    /**
     * @internal
     */
    const FUNCTION_SET_PWM_FREQUENCY = 6;

    /**
     * @internal
     */
    const FUNCTION_GET_PWM_FREQUENCY = 7;

    /**
     * @internal
     */
    const FUNCTION_FULL_BRAKE = 8;

    /**
     * @internal
     */
    const FUNCTION_GET_STACK_INPUT_VOLTAGE = 9;

    /**
     * @internal
     */
    const FUNCTION_GET_EXTERNAL_INPUT_VOLTAGE = 10;

    /**
     * @internal
     */
    const FUNCTION_GET_CURRENT_CONSUMPTION = 11;

    /**
     * @internal
     */
    const FUNCTION_ENABLE = 12;

    /**
     * @internal
     */
    const FUNCTION_DISABLE = 13;

    /**
     * @internal
     */
    const FUNCTION_IS_ENABLED = 14;

    /**
     * @internal
     */
    const FUNCTION_SET_MINIMUM_VOLTAGE = 15;

    /**
     * @internal
     */
    const FUNCTION_GET_MINIMUM_VOLTAGE = 16;

    /**
     * @internal
     */
    const FUNCTION_SET_DRIVE_MODE = 17;

    /**
     * @internal
     */
    const FUNCTION_GET_DRIVE_MODE = 18;

    /**
     * @internal
     */
    const FUNCTION_SET_CURRENT_VELOCITY_PERIOD = 19;

    /**
     * @internal
     */
    const FUNCTION_GET_CURRENT_VELOCITY_PERIOD = 20;

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

    const DRIVE_MODE_DRIVE_BRAKE = 0;
    const DRIVE_MODE_DRIVE_COAST = 1;
    const COMMUNICATION_METHOD_NONE = 0;
    const COMMUNICATION_METHOD_USB = 1;
    const COMMUNICATION_METHOD_SPI_STACK = 2;
    const COMMUNICATION_METHOD_CHIBI = 3;
    const COMMUNICATION_METHOD_RS485 = 4;
    const COMMUNICATION_METHOD_WIFI = 5;
    const COMMUNICATION_METHOD_ETHERNET = 6;
    const COMMUNICATION_METHOD_WIFI_V2 = 7;

    const DEVICE_IDENTIFIER = 11;

    const DEVICE_DISPLAY_NAME = 'DC Brick';

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

        $this->response_expected[self::FUNCTION_SET_VELOCITY] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_VELOCITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_CURRENT_VELOCITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ACCELERATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_ACCELERATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_PWM_FREQUENCY] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_PWM_FREQUENCY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_FULL_BRAKE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_STACK_INPUT_VOLTAGE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_EXTERNAL_INPUT_VOLTAGE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_CURRENT_CONSUMPTION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_ENABLE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_DISABLE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_IS_ENABLED] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_MINIMUM_VOLTAGE] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_MINIMUM_VOLTAGE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_DRIVE_MODE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_DRIVE_MODE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_CURRENT_VELOCITY_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_CURRENT_VELOCITY_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
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
        $this->callback_wrappers[self::CALLBACK_EMERGENCY_SHUTDOWN] = array(8, 'callbackWrapperEmergencyShutdown');
        $this->callback_wrappers[self::CALLBACK_VELOCITY_REACHED] = array(10, 'callbackWrapperVelocityReached');
        $this->callback_wrappers[self::CALLBACK_CURRENT_VELOCITY] = array(10, 'callbackWrapperCurrentVelocity');

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
     * Sets the velocity of the motor. Whereas -32767 is full speed backward,
     * 0 is stop and 32767 is full speed forward. Depending on the
     * acceleration (see BrickDC::setAcceleration()), the motor is not immediately
     * brought to the velocity but smoothly accelerated.
     * 
     * The velocity describes the duty cycle of the PWM with which the motor is
     * controlled, e.g. a velocity of 3277 sets a PWM with a 10% duty cycle.
     * You can not only control the duty cycle of the PWM but also the frequency,
     * see BrickDC::setPWMFrequency().
     * 
     * @param int $velocity
     * 
     * @return void
     */
    public function setVelocity($velocity)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $velocity);

        $this->sendRequest(self::FUNCTION_SET_VELOCITY, $payload, 0);
    }

    /**
     * Returns the velocity as set by BrickDC::setVelocity().
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
     * Returns the *current* velocity of the motor. This value is different
     * from BrickDC::getVelocity() whenever the motor is currently accelerating
     * to a goal set by BrickDC::setVelocity().
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

        return IPConnection::fixUnpackedInt16($payload, 'velocity');
    }

    /**
     * Sets the acceleration of the motor. It is given in *velocity/s*. An
     * acceleration of 10000 means, that every second the velocity is increased
     * by 10000 (or about 30% duty cycle).
     * 
     * For example: If the current velocity is 0 and you want to accelerate to a
     * velocity of 16000 (about 50% duty cycle) in 10 seconds, you should set
     * an acceleration of 1600.
     * 
     * If acceleration is set to 0, there is no speed ramping, i.e. a new velocity
     * is immediately given to the motor.
     * 
     * @param int $acceleration
     * 
     * @return void
     */
    public function setAcceleration($acceleration)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $acceleration);

        $this->sendRequest(self::FUNCTION_SET_ACCELERATION, $payload, 0);
    }

    /**
     * Returns the acceleration as set by BrickDC::setAcceleration().
     * 
     * 
     * @return int
     */
    public function getAcceleration()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ACCELERATION, $payload, 10);

        $payload = unpack('v1acceleration', $data);

        return $payload['acceleration'];
    }

    /**
     * Sets the frequency of the PWM with which the motor is driven.
     * Often a high frequency
     * is less noisy and the motor runs smoother. However, with a low frequency
     * there are less switches and therefore fewer switching losses. Also with
     * most motors lower frequencies enable higher torque.
     * 
     * If you have no idea what all this means, just ignore this function and use
     * the default frequency, it will very likely work fine.
     * 
     * @param int $frequency
     * 
     * @return void
     */
    public function setPWMFrequency($frequency)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $frequency);

        $this->sendRequest(self::FUNCTION_SET_PWM_FREQUENCY, $payload, 0);
    }

    /**
     * Returns the PWM frequency as set by BrickDC::setPWMFrequency().
     * 
     * 
     * @return int
     */
    public function getPWMFrequency()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_PWM_FREQUENCY, $payload, 10);

        $payload = unpack('v1frequency', $data);

        return $payload['frequency'];
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
     * Call BrickDC::setVelocity() with 0 if you just want to stop the motor.
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
     * given via the black power input connector on the DC Brick.
     * 
     * If there is an external input voltage and a stack input voltage, the motor
     * will be driven by the external input voltage. If there is only a stack
     * voltage present, the motor will be driven by this voltage.
     * 
     * <warning>
     *  This means, if you have a high stack voltage and a low external voltage,
     *  the motor will be driven with the low external voltage. If you then remove
     *  the external connection, it will immediately be driven by the high
     *  stack voltage.
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

        $payload = unpack('v1voltage', $data);

        return $payload['voltage'];
    }

    /**
     * Enables the driver chip. The driver parameters can be configured (velocity,
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
     * Disables the driver chip. The configurations are kept (velocity,
     * acceleration, etc) but the motor is not driven until it is enabled again.
     * 
     * <warning>
     *  Disabling the driver chip while the motor is still turning can damage the
     *  driver chip. The motor should be stopped calling BrickDC::setVelocity() with 0
     *  before disabling the motor power. The BrickDC::setVelocity() function will **not**
     *  wait until the motor is actually stopped. You have to explicitly wait for the
     *  appropriate time after calling the BrickDC::setVelocity() function before calling
     *  the BrickDC::disable() function.
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
     * Sets the minimum voltage, below which the BrickDC::CALLBACK_UNDER_VOLTAGE callback
     * is triggered. The minimum possible value that works with the DC Brick is 6V.
     * You can use this function to detect the discharge of a battery that is used
     * to drive the motor. If you have a fixed power supply, you likely do not need
     * this functionality.
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
     * Returns the minimum voltage as set by BrickDC::setMinimumVoltage()
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
     * Sets the drive mode. Possible modes are:
     * 
     * * 0 = Drive/Brake
     * * 1 = Drive/Coast
     * 
     * These modes are different kinds of motor controls.
     * 
     * In Drive/Brake mode, the motor is always either driving or braking. There
     * is no freewheeling. Advantages are: A more linear correlation between
     * PWM and velocity, more exact accelerations and the possibility to drive
     * with slower velocities.
     * 
     * In Drive/Coast mode, the motor is always either driving or freewheeling.
     * Advantages are: Less current consumption and less demands on the motor and
     * driver chip.
     * 
     * @param int $mode
     * 
     * @return void
     */
    public function setDriveMode($mode)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $mode);

        $this->sendRequest(self::FUNCTION_SET_DRIVE_MODE, $payload, 0);
    }

    /**
     * Returns the drive mode, as set by BrickDC::setDriveMode().
     * 
     * 
     * @return int
     */
    public function getDriveMode()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_DRIVE_MODE, $payload, 9);

        $payload = unpack('C1mode', $data);

        return $payload['mode'];
    }

    /**
     * Sets a period with which the BrickDC::CALLBACK_CURRENT_VELOCITY callback is triggered.
     * A period of 0 turns the callback off.
     * 
     * @param int $period
     * 
     * @return void
     */
    public function setCurrentVelocityPeriod($period)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $period);

        $this->sendRequest(self::FUNCTION_SET_CURRENT_VELOCITY_PERIOD, $payload, 0);
    }

    /**
     * Returns the period as set by BrickDC::setCurrentVelocityPeriod().
     * 
     * 
     * @return int
     */
    public function getCurrentVelocityPeriod()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_CURRENT_VELOCITY_PERIOD, $payload, 10);

        $payload = unpack('v1period', $data);

        return $payload['period'];
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
     * BrickDC::setSPITFPBaudrate(). If the dynamic baudrate is disabled, the baudrate
     * as set by BrickDC::setSPITFPBaudrate() will be used statically.
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
     * Returns the baudrate config, see BrickDC::setSPITFPBaudrateConfig().
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
     * interference (see BrickDC::getSPITFPErrorCount()) you can decrease the
     * baudrate.
     * 
     * If the dynamic baudrate feature is enabled, the baudrate set by this
     * function corresponds to the maximum baudrate (see BrickDC::setSPITFPBaudrateConfig()).
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
     * Returns the baudrate for a given Bricklet port, see BrickDC::setSPITFPBaudrate().
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
    public function callbackWrapperEmergencyShutdown($data)
    {

        if (array_key_exists(self::CALLBACK_EMERGENCY_SHUTDOWN, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_EMERGENCY_SHUTDOWN];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_EMERGENCY_SHUTDOWN];

            call_user_func($function, $user_data);
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

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperCurrentVelocity($data)
    {
        $payload = unpack('v1velocity', $data);
        $payload['velocity'] = IPConnection::fixUnpackedInt16($payload, 'velocity');

        if (array_key_exists(self::CALLBACK_CURRENT_VELOCITY, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_CURRENT_VELOCITY];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_CURRENT_VELOCITY];

            call_user_func($function, $payload['velocity'], $user_data);
        }
    }
}

?>
