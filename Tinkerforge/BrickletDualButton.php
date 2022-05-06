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
 * Two tactile buttons with built-in blue LEDs
 */
class BrickletDualButton extends Device
{

    /**
     * This callback is called whenever a button is pressed.
     * 
     * Possible states for buttons are:
     * 
     * * 0 = pressed
     * * 1 = released
     * 
     * Possible states for LEDs are:
     * 
     * * 0 = AutoToggleOn: Auto toggle enabled and LED on.
     * * 1 = AutoToggleOff: Auto toggle enabled and LED off.
     * * 2 = On: LED on (auto toggle is disabled).
     * * 3 = Off: LED off (auto toggle is disabled).
     */
    const CALLBACK_STATE_CHANGED = 4;


    /**
     * @internal
     */
    const FUNCTION_SET_LED_STATE = 1;

    /**
     * @internal
     */
    const FUNCTION_GET_LED_STATE = 2;

    /**
     * @internal
     */
    const FUNCTION_GET_BUTTON_STATE = 3;

    /**
     * @internal
     */
    const FUNCTION_SET_SELECTED_LED_STATE = 5;

    /**
     * @internal
     */
    const FUNCTION_GET_IDENTITY = 255;

    const LED_STATE_AUTO_TOGGLE_ON = 0;
    const LED_STATE_AUTO_TOGGLE_OFF = 1;
    const LED_STATE_ON = 2;
    const LED_STATE_OFF = 3;
    const BUTTON_STATE_PRESSED = 0;
    const BUTTON_STATE_RELEASED = 1;
    const LED_LEFT = 0;
    const LED_RIGHT = 1;

    const DEVICE_IDENTIFIER = 230;

    const DEVICE_DISPLAY_NAME = 'Dual Button Bricklet';

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

        $this->response_expected[self::FUNCTION_SET_LED_STATE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_LED_STATE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_BUTTON_STATE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_SELECTED_LED_STATE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_IDENTITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;

        $this->callback_wrappers[self::CALLBACK_STATE_CHANGED] = array(12, 'callbackWrapperStateChanged');

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
     * Sets the state of the LEDs. Possible states are:
     * 
     * * 0 = AutoToggleOn: Enables auto toggle with initially enabled LED.
     * * 1 = AutoToggleOff: Activates auto toggle with initially disabled LED.
     * * 2 = On: Enables LED (auto toggle is disabled).
     * * 3 = Off: Disables LED (auto toggle is disabled).
     * 
     * In auto toggle mode the LED is toggled automatically at each press of a button.
     * 
     * If you just want to set one of the LEDs and don't know the current state
     * of the other LED, you can get the state with BrickletDualButton::getLEDState() or you
     * can use BrickletDualButton::setSelectedLEDState().
     * 
     * @param int $led_l
     * @param int $led_r
     * 
     * @return void
     */
    public function setLEDState($led_l, $led_r)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $led_l);
        $payload .= pack('C', $led_r);

        $this->sendRequest(self::FUNCTION_SET_LED_STATE, $payload, 0);
    }

    /**
     * Returns the current state of the LEDs, as set by BrickletDualButton::setLEDState().
     * 
     * 
     * @return array
     */
    public function getLEDState()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_LED_STATE, $payload, 10);

        $payload = unpack('C1led_l/C1led_r', $data);

        $ret['led_l'] = $payload['led_l'];
        $ret['led_r'] = $payload['led_r'];

        return $ret;
    }

    /**
     * Returns the current state for both buttons. Possible states are:
     * 
     * * 0 = pressed
     * * 1 = released
     * 
     * 
     * @return array
     */
    public function getButtonState()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_BUTTON_STATE, $payload, 10);

        $payload = unpack('C1button_l/C1button_r', $data);

        $ret['button_l'] = $payload['button_l'];
        $ret['button_r'] = $payload['button_r'];

        return $ret;
    }

    /**
     * Sets the state of the selected LED (0 or 1).
     * 
     * The other LED remains untouched.
     * 
     * @param int $led
     * @param int $state
     * 
     * @return void
     */
    public function setSelectedLEDState($led, $state)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $led);
        $payload .= pack('C', $state);

        $this->sendRequest(self::FUNCTION_SET_SELECTED_LED_STATE, $payload, 0);
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
    public function callbackWrapperStateChanged($data)
    {
        $payload = unpack('C1button_l/C1button_r/C1led_l/C1led_r', $data);

        if (array_key_exists(self::CALLBACK_STATE_CHANGED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_STATE_CHANGED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_STATE_CHANGED];

            call_user_func($function, $payload['button_l'], $payload['button_r'], $payload['led_l'], $payload['led_r'], $user_data);
        }
    }
}

?>
