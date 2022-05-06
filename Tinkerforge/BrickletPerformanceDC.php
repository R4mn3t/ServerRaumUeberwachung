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
 * Drives one brushed DC motor with up to 36V and 10A
 */
class BrickletPerformanceDC extends Device
{

    /**
     * This callback is triggered if either the current consumption
     * is too high or the temperature of the driver chip is too high
     * (above 150°C) or the user defined thermal shutdown is triggered (see BrickletPerformanceDC::setThermalShutdown()).
     * n case of a voltage below 6V (input voltage) this
     * callback is triggered as well.
     * 
     * If this callback is triggered, the driver chip gets disabled at the same time.
     * That means, BrickletPerformanceDC::setEnabled() has to be called to drive the motor again.
     */
    const CALLBACK_EMERGENCY_SHUTDOWN = 35;

    /**
     * This callback is triggered whenever a set velocity is reached. For example:
     * If a velocity of 0 is present, acceleration is set to 5000 and velocity
     * to 10000, the BrickletPerformanceDC::CALLBACK_VELOCITY_REACHED callback will be triggered after about
     * 2 seconds, when the set velocity is actually reached.
     * 
     * <note>
     *  Since we can't get any feedback from the DC motor, this only works if the
     *  acceleration (see BrickletPerformanceDC::setMotion()) is set smaller or equal to the
     *  maximum acceleration of the motor. Otherwise the motor will lag behind the
     *  control value and the callback will be triggered too early.
     * </note>
     */
    const CALLBACK_VELOCITY_REACHED = 36;

    /**
     * This callback is triggered with the period that is set by
     * BrickletPerformanceDC::setCurrentVelocityCallbackConfiguration(). The parameter is the *current*
     * velocity used by the motor.
     * 
     * The BrickletPerformanceDC::CALLBACK_CURRENT_VELOCITY callback is only triggered after the set period
     * if there is a change in the velocity.
     */
    const CALLBACK_CURRENT_VELOCITY = 37;

    /**
     * This callback is triggered by GPIO changes if it is activated through BrickletPerformanceDC::setGPIOAction().
     * 
     * .. versionadded:: 2.0.1$nbsp;(Plugin)
     */
    const CALLBACK_GPIO_STATE = 38;


    /**
     * @internal
     */
    const FUNCTION_SET_ENABLED = 1;

    /**
     * @internal
     */
    const FUNCTION_GET_ENABLED = 2;

    /**
     * @internal
     */
    const FUNCTION_SET_VELOCITY = 3;

    /**
     * @internal
     */
    const FUNCTION_GET_VELOCITY = 4;

    /**
     * @internal
     */
    const FUNCTION_GET_CURRENT_VELOCITY = 5;

    /**
     * @internal
     */
    const FUNCTION_SET_MOTION = 6;

    /**
     * @internal
     */
    const FUNCTION_GET_MOTION = 7;

    /**
     * @internal
     */
    const FUNCTION_FULL_BRAKE = 8;

    /**
     * @internal
     */
    const FUNCTION_SET_DRIVE_MODE = 9;

    /**
     * @internal
     */
    const FUNCTION_GET_DRIVE_MODE = 10;

    /**
     * @internal
     */
    const FUNCTION_SET_PWM_FREQUENCY = 11;

    /**
     * @internal
     */
    const FUNCTION_GET_PWM_FREQUENCY = 12;

    /**
     * @internal
     */
    const FUNCTION_GET_POWER_STATISTICS = 13;

    /**
     * @internal
     */
    const FUNCTION_SET_THERMAL_SHUTDOWN = 14;

    /**
     * @internal
     */
    const FUNCTION_GET_THERMAL_SHUTDOWN = 15;

    /**
     * @internal
     */
    const FUNCTION_SET_GPIO_CONFIGURATION = 16;

    /**
     * @internal
     */
    const FUNCTION_GET_GPIO_CONFIGURATION = 17;

    /**
     * @internal
     */
    const FUNCTION_SET_GPIO_ACTION = 18;

    /**
     * @internal
     */
    const FUNCTION_GET_GPIO_ACTION = 19;

    /**
     * @internal
     */
    const FUNCTION_GET_GPIO_STATE = 20;

    /**
     * @internal
     */
    const FUNCTION_SET_ERROR_LED_CONFIG = 21;

    /**
     * @internal
     */
    const FUNCTION_GET_ERROR_LED_CONFIG = 22;

    /**
     * @internal
     */
    const FUNCTION_SET_CW_LED_CONFIG = 23;

    /**
     * @internal
     */
    const FUNCTION_GET_CW_LED_CONFIG = 24;

    /**
     * @internal
     */
    const FUNCTION_SET_CCW_LED_CONFIG = 25;

    /**
     * @internal
     */
    const FUNCTION_GET_CCW_LED_CONFIG = 26;

    /**
     * @internal
     */
    const FUNCTION_SET_GPIO_LED_CONFIG = 27;

    /**
     * @internal
     */
    const FUNCTION_GET_GPIO_LED_CONFIG = 28;

    /**
     * @internal
     */
    const FUNCTION_SET_EMERGENCY_SHUTDOWN_CALLBACK_CONFIGURATION = 29;

    /**
     * @internal
     */
    const FUNCTION_GET_EMERGENCY_SHUTDOWN_CALLBACK_CONFIGURATION = 30;

    /**
     * @internal
     */
    const FUNCTION_SET_VELOCITY_REACHED_CALLBACK_CONFIGURATION = 31;

    /**
     * @internal
     */
    const FUNCTION_GET_VELOCITY_REACHED_CALLBACK_CONFIGURATION = 32;

    /**
     * @internal
     */
    const FUNCTION_SET_CURRENT_VELOCITY_CALLBACK_CONFIGURATION = 33;

    /**
     * @internal
     */
    const FUNCTION_GET_CURRENT_VELOCITY_CALLBACK_CONFIGURATION = 34;

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

    const DRIVE_MODE_DRIVE_BRAKE = 0;
    const DRIVE_MODE_DRIVE_COAST = 1;
    const GPIO_ACTION_NONE = 0;
    const GPIO_ACTION_NORMAL_STOP_RISING_EDGE = 1;
    const GPIO_ACTION_NORMAL_STOP_FALLING_EDGE = 2;
    const GPIO_ACTION_FULL_BRAKE_RISING_EDGE = 4;
    const GPIO_ACTION_FULL_BRAKE_FALLING_EDGE = 8;
    const GPIO_ACTION_CALLBACK_RISING_EDGE = 16;
    const GPIO_ACTION_CALLBACK_FALLING_EDGE = 32;
    const ERROR_LED_CONFIG_OFF = 0;
    const ERROR_LED_CONFIG_ON = 1;
    const ERROR_LED_CONFIG_SHOW_HEARTBEAT = 2;
    const ERROR_LED_CONFIG_SHOW_ERROR = 3;
    const CW_LED_CONFIG_OFF = 0;
    const CW_LED_CONFIG_ON = 1;
    const CW_LED_CONFIG_SHOW_HEARTBEAT = 2;
    const CW_LED_CONFIG_SHOW_CW_AS_FORWARD = 3;
    const CW_LED_CONFIG_SHOW_CW_AS_BACKWARD = 4;
    const CCW_LED_CONFIG_OFF = 0;
    const CCW_LED_CONFIG_ON = 1;
    const CCW_LED_CONFIG_SHOW_HEARTBEAT = 2;
    const CCW_LED_CONFIG_SHOW_CCW_AS_FORWARD = 3;
    const CCW_LED_CONFIG_SHOW_CCW_AS_BACKWARD = 4;
    const GPIO_LED_CONFIG_OFF = 0;
    const GPIO_LED_CONFIG_ON = 1;
    const GPIO_LED_CONFIG_SHOW_HEARTBEAT = 2;
    const GPIO_LED_CONFIG_SHOW_GPIO_ACTIVE_HIGH = 3;
    const GPIO_LED_CONFIG_SHOW_GPIO_ACTIVE_LOW = 4;
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

    const DEVICE_IDENTIFIER = 2156;

    const DEVICE_DISPLAY_NAME = 'Performance DC Bricklet';

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

        $this->response_expected[self::FUNCTION_SET_ENABLED] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_ENABLED] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_VELOCITY] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_VELOCITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_CURRENT_VELOCITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_MOTION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_MOTION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_FULL_BRAKE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_SET_DRIVE_MODE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_DRIVE_MODE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_PWM_FREQUENCY] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_PWM_FREQUENCY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_POWER_STATISTICS] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_THERMAL_SHUTDOWN] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_THERMAL_SHUTDOWN] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_GPIO_CONFIGURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_GPIO_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_GPIO_ACTION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_GPIO_ACTION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_GPIO_STATE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ERROR_LED_CONFIG] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_ERROR_LED_CONFIG] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_CW_LED_CONFIG] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_CW_LED_CONFIG] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_CCW_LED_CONFIG] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_CCW_LED_CONFIG] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_GPIO_LED_CONFIG] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_GPIO_LED_CONFIG] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_EMERGENCY_SHUTDOWN_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_EMERGENCY_SHUTDOWN_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_VELOCITY_REACHED_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_VELOCITY_REACHED_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_CURRENT_VELOCITY_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_CURRENT_VELOCITY_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
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

        $this->callback_wrappers[self::CALLBACK_EMERGENCY_SHUTDOWN] = array(8, 'callbackWrapperEmergencyShutdown');
        $this->callback_wrappers[self::CALLBACK_VELOCITY_REACHED] = array(10, 'callbackWrapperVelocityReached');
        $this->callback_wrappers[self::CALLBACK_CURRENT_VELOCITY] = array(10, 'callbackWrapperCurrentVelocity');
        $this->callback_wrappers[self::CALLBACK_GPIO_STATE] = array(9, 'callbackWrapperGPIOState');

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
     * Enables/Disables the driver chip. The driver parameters can be configured
     * (velocity, acceleration, etc) before it is enabled.
     * 
     * @param bool $enabled
     * 
     * @return void
     */
    public function setEnabled($enabled)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', intval((bool)$enabled));

        $this->sendRequest(self::FUNCTION_SET_ENABLED, $payload, 0);
    }

    /**
     * Returns *true* if the driver chip is enabled, *false* otherwise.
     * 
     * 
     * @return bool
     */
    public function getEnabled()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ENABLED, $payload, 9);

        $payload = unpack('C1enabled', $data);

        return (bool)$payload['enabled'];
    }

    /**
     * Sets the velocity of the motor. Whereas -32767 is full speed backward,
     * 0 is stop and 32767 is full speed forward. Depending on the
     * acceleration (see BrickletPerformanceDC::setMotion()), the motor is not immediately
     * brought to the velocity but smoothly accelerated.
     * 
     * The velocity describes the duty cycle of the PWM with which the motor is
     * controlled, e.g. a velocity of 3277 sets a PWM with a 10% duty cycle.
     * You can not only control the duty cycle of the PWM but also the frequency,
     * see BrickletPerformanceDC::setPWMFrequency().
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
     * Returns the velocity as set by BrickletPerformanceDC::setVelocity().
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
     * from BrickletPerformanceDC::getVelocity() whenever the motor is currently accelerating
     * to a goal set by BrickletPerformanceDC::setVelocity().
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
     * Sets the acceleration and deceleration of the motor. It is given in *velocity/s*.
     * An acceleration of 10000 means, that every second the velocity is increased
     * by 10000 (or about 30% duty cycle).
     * 
     * For example: If the current velocity is 0 and you want to accelerate to a
     * velocity of 16000 (about 50% duty cycle) in 10 seconds, you should set
     * an acceleration of 1600.
     * 
     * If acceleration and deceleration is set to 0, there is no speed ramping, i.e. a
     * new velocity is immediately given to the motor.
     * 
     * @param int $acceleration
     * @param int $deceleration
     * 
     * @return void
     */
    public function setMotion($acceleration, $deceleration)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $acceleration);
        $payload .= pack('v', $deceleration);

        $this->sendRequest(self::FUNCTION_SET_MOTION, $payload, 0);
    }

    /**
     * Returns the acceleration/deceleration as set by BrickletPerformanceDC::setMotion().
     * 
     * 
     * @return array
     */
    public function getMotion()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_MOTION, $payload, 12);

        $payload = unpack('v1acceleration/v1deceleration', $data);

        $ret['acceleration'] = $payload['acceleration'];
        $ret['deceleration'] = $payload['deceleration'];

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
     * Call BrickletPerformanceDC::setVelocity() with 0 if you just want to stop the motor.
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
     * Returns the drive mode, as set by BrickletPerformanceDC::setDriveMode().
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
     * Returns the PWM frequency as set by BrickletPerformanceDC::setPWMFrequency().
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
     * Returns input voltage, current usage and temperature of the driver.
     * 
     * 
     * @return array
     */
    public function getPowerStatistics()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_POWER_STATISTICS, $payload, 14);

        $payload = unpack('v1voltage/v1current/v1temperature', $data);

        $ret['voltage'] = $payload['voltage'];
        $ret['current'] = $payload['current'];
        $ret['temperature'] = IPConnection::fixUnpackedInt16($payload, 'temperature');

        return $ret;
    }

    /**
     * Sets a temperature threshold that is used for thermal shutdown.
     * 
     * Additionally to this user defined threshold the driver chip will shut down at a
     * temperature of 150°C.
     * 
     * If a thermal shutdown is triggered the driver is disabled and has to be
     * explicitly re-enabled with BrickletPerformanceDC::setEnabled().
     * 
     * @param int $temperature
     * 
     * @return void
     */
    public function setThermalShutdown($temperature)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $temperature);

        $this->sendRequest(self::FUNCTION_SET_THERMAL_SHUTDOWN, $payload, 0);
    }

    /**
     * Returns the thermal shutdown temperature as set by BrickletPerformanceDC::setThermalShutdown().
     * 
     * 
     * @return int
     */
    public function getThermalShutdown()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_THERMAL_SHUTDOWN, $payload, 9);

        $payload = unpack('C1temperature', $data);

        return $payload['temperature'];
    }

    /**
     * Sets the GPIO configuration for the given channel.
     * You can configure a debounce and the deceleration that is used if the action is
     * configured as ``normal stop``. See BrickletPerformanceDC::setGPIOAction().
     * 
     * @param int $channel
     * @param int $debounce
     * @param int $stop_deceleration
     * 
     * @return void
     */
    public function setGPIOConfiguration($channel, $debounce, $stop_deceleration)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $channel);
        $payload .= pack('v', $debounce);
        $payload .= pack('v', $stop_deceleration);

        $this->sendRequest(self::FUNCTION_SET_GPIO_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the GPIO configuration for a channel as set by BrickletPerformanceDC::setGPIOConfiguration().
     * 
     * @param int $channel
     * 
     * @return array
     */
    public function getGPIOConfiguration($channel)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('C', $channel);

        $data = $this->sendRequest(self::FUNCTION_GET_GPIO_CONFIGURATION, $payload, 12);

        $payload = unpack('v1debounce/v1stop_deceleration', $data);

        $ret['debounce'] = $payload['debounce'];
        $ret['stop_deceleration'] = $payload['stop_deceleration'];

        return $ret;
    }

    /**
     * Sets the GPIO action for the given channel.
     * 
     * The action can be a normal stop, a full brake or a callback. Each for a rising
     * edge or falling edge. The actions are a bitmask they can be used at the same time.
     * You can for example trigger a full brake and a callback at the same time or for
     * rising and falling edge.
     * 
     * The deceleration speed for the normal stop can be configured with
     * BrickletPerformanceDC::setGPIOConfiguration().
     * 
     * @param int $channel
     * @param int $action
     * 
     * @return void
     */
    public function setGPIOAction($channel, $action)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $channel);
        $payload .= pack('V', $action);

        $this->sendRequest(self::FUNCTION_SET_GPIO_ACTION, $payload, 0);
    }

    /**
     * Returns the GPIO action for a channel as set by BrickletPerformanceDC::setGPIOAction().
     * 
     * @param int $channel
     * 
     * @return int
     */
    public function getGPIOAction($channel)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $channel);

        $data = $this->sendRequest(self::FUNCTION_GET_GPIO_ACTION, $payload, 12);

        $payload = unpack('V1action', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'action');
    }

    /**
     * Returns the GPIO state for both channels. True if the state is ``high`` and
     * false if the state is ``low``.
     * 
     * 
     * @return array
     */
    public function getGPIOState()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_GPIO_STATE, $payload, 9);

        $payload = unpack('C1gpio_state', $data);

        return IPConnection::collectUnpackedBoolArray($payload, 'gpio_state', 2);
    }

    /**
     * Configures the error LED to be either turned off, turned on, blink in
     * heartbeat mode or show an error.
     * 
     * If the LED is configured to show errors it has three different states:
     * 
     * * Off: No error present.
     * * 1s interval blinking: Input voltage too low (below 6V).
     * * 250ms interval blinking: Overtemperature or overcurrent.
     * 
     * @param int $config
     * 
     * @return void
     */
    public function setErrorLEDConfig($config)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $config);

        $this->sendRequest(self::FUNCTION_SET_ERROR_LED_CONFIG, $payload, 0);
    }

    /**
     * Returns the LED configuration as set by BrickletPerformanceDC::setErrorLEDConfig()
     * 
     * 
     * @return int
     */
    public function getErrorLEDConfig()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ERROR_LED_CONFIG, $payload, 9);

        $payload = unpack('C1config', $data);

        return $payload['config'];
    }

    /**
     * Configures the CW LED to be either turned off, turned on, blink in
     * heartbeat mode or if the motor turn clockwise.
     * 
     * @param int $config
     * 
     * @return void
     */
    public function setCWLEDConfig($config)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $config);

        $this->sendRequest(self::FUNCTION_SET_CW_LED_CONFIG, $payload, 0);
    }

    /**
     * Returns the LED configuration as set by BrickletPerformanceDC::setCWLEDConfig()
     * 
     * 
     * @return int
     */
    public function getCWLEDConfig()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_CW_LED_CONFIG, $payload, 9);

        $payload = unpack('C1config', $data);

        return $payload['config'];
    }

    /**
     * Configures the CCW LED to be either turned off, turned on, blink in
     * heartbeat mode or if the motor turn counter-clockwise.
     * 
     * @param int $config
     * 
     * @return void
     */
    public function setCCWLEDConfig($config)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $config);

        $this->sendRequest(self::FUNCTION_SET_CCW_LED_CONFIG, $payload, 0);
    }

    /**
     * Returns the LED configuration as set by BrickletPerformanceDC::setCCWLEDConfig()
     * 
     * 
     * @return int
     */
    public function getCCWLEDConfig()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_CCW_LED_CONFIG, $payload, 9);

        $payload = unpack('C1config', $data);

        return $payload['config'];
    }

    /**
     * Configures the GPIO LED to be either turned off, turned on, blink in
     * heartbeat mode or the GPIO state.
     * 
     * The GPIO LED can be configured for both channels.
     * 
     * @param int $channel
     * @param int $config
     * 
     * @return void
     */
    public function setGPIOLEDConfig($channel, $config)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $channel);
        $payload .= pack('C', $config);

        $this->sendRequest(self::FUNCTION_SET_GPIO_LED_CONFIG, $payload, 0);
    }

    /**
     * Returns the LED configuration as set by BrickletPerformanceDC::setGPIOLEDConfig()
     * 
     * @param int $channel
     * 
     * @return int
     */
    public function getGPIOLEDConfig($channel)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $channel);

        $data = $this->sendRequest(self::FUNCTION_GET_GPIO_LED_CONFIG, $payload, 9);

        $payload = unpack('C1config', $data);

        return $payload['config'];
    }

    /**
     * Enable/Disable BrickletPerformanceDC::CALLBACK_EMERGENCY_SHUTDOWN callback.
     * 
     * @param bool $enabled
     * 
     * @return void
     */
    public function setEmergencyShutdownCallbackConfiguration($enabled)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', intval((bool)$enabled));

        $this->sendRequest(self::FUNCTION_SET_EMERGENCY_SHUTDOWN_CALLBACK_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the callback configuration as set by
     * BrickletPerformanceDC::setEmergencyShutdownCallbackConfiguration().
     * 
     * 
     * @return bool
     */
    public function getEmergencyShutdownCallbackConfiguration()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_EMERGENCY_SHUTDOWN_CALLBACK_CONFIGURATION, $payload, 9);

        $payload = unpack('C1enabled', $data);

        return (bool)$payload['enabled'];
    }

    /**
     * Enable/Disable BrickletPerformanceDC::CALLBACK_VELOCITY_REACHED callback.
     * 
     * @param bool $enabled
     * 
     * @return void
     */
    public function setVelocityReachedCallbackConfiguration($enabled)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', intval((bool)$enabled));

        $this->sendRequest(self::FUNCTION_SET_VELOCITY_REACHED_CALLBACK_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the callback configuration as set by
     * BrickletPerformanceDC::setVelocityReachedCallbackConfiguration().
     * 
     * 
     * @return bool
     */
    public function getVelocityReachedCallbackConfiguration()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_VELOCITY_REACHED_CALLBACK_CONFIGURATION, $payload, 9);

        $payload = unpack('C1enabled', $data);

        return (bool)$payload['enabled'];
    }

    /**
     * The period is the period with which the BrickletPerformanceDC::CALLBACK_CURRENT_VELOCITY
     * callback is triggered periodically. A value of 0 turns the callback off.
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
    public function setCurrentVelocityCallbackConfiguration($period, $value_has_to_change)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);
        $payload .= pack('C', intval((bool)$value_has_to_change));

        $this->sendRequest(self::FUNCTION_SET_CURRENT_VELOCITY_CALLBACK_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the callback configuration as set by
     * BrickletPerformanceDC::setCurrentVelocityCallbackConfiguration().
     * 
     * 
     * @return array
     */
    public function getCurrentVelocityCallbackConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_CURRENT_VELOCITY_CALLBACK_CONFIGURATION, $payload, 13);

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
     * Returns the current bootloader mode, see BrickletPerformanceDC::setBootloaderMode().
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
     * Sets the firmware pointer for BrickletPerformanceDC::writeFirmware(). The pointer has
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
     * BrickletPerformanceDC::setWriteFirmwarePointer() before. The firmware is written
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
     * Returns the configuration as set by BrickletPerformanceDC::setStatusLEDConfig()
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

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperGPIOState($data)
    {
        $payload = unpack('C1gpio_state', $data);
        $payload['gpio_state'] = IPConnection::collectUnpackedBoolArray($payload, 'gpio_state', 2);

        if (array_key_exists(self::CALLBACK_GPIO_STATE, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_GPIO_STATE];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_GPIO_STATE];

            call_user_func($function, $payload['gpio_state'], $user_data);
        }
    }
}

?>
