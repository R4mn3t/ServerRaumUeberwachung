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
 * Measures weight with a load cell
 */
class BrickletLoadCell extends Device
{

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletLoadCell::setWeightCallbackPeriod(). The parameter is the weight
     * as measured by the load cell.
     * 
     * The BrickletLoadCell::CALLBACK_WEIGHT callback is only triggered if the weight has changed since the
     * last triggering.
     */
    const CALLBACK_WEIGHT = 17;

    /**
     * This callback is triggered when the threshold as set by
     * BrickletLoadCell::setWeightCallbackThreshold() is reached.
     * The parameter is the weight as measured by the load cell.
     * 
     * If the threshold keeps being reached, the callback is triggered periodically
     * with the period as set by BrickletLoadCell::setDebouncePeriod().
     */
    const CALLBACK_WEIGHT_REACHED = 18;


    /**
     * @internal
     */
    const FUNCTION_GET_WEIGHT = 1;

    /**
     * @internal
     */
    const FUNCTION_SET_WEIGHT_CALLBACK_PERIOD = 2;

    /**
     * @internal
     */
    const FUNCTION_GET_WEIGHT_CALLBACK_PERIOD = 3;

    /**
     * @internal
     */
    const FUNCTION_SET_WEIGHT_CALLBACK_THRESHOLD = 4;

    /**
     * @internal
     */
    const FUNCTION_GET_WEIGHT_CALLBACK_THRESHOLD = 5;

    /**
     * @internal
     */
    const FUNCTION_SET_DEBOUNCE_PERIOD = 6;

    /**
     * @internal
     */
    const FUNCTION_GET_DEBOUNCE_PERIOD = 7;

    /**
     * @internal
     */
    const FUNCTION_SET_MOVING_AVERAGE = 8;

    /**
     * @internal
     */
    const FUNCTION_GET_MOVING_AVERAGE = 9;

    /**
     * @internal
     */
    const FUNCTION_LED_ON = 10;

    /**
     * @internal
     */
    const FUNCTION_LED_OFF = 11;

    /**
     * @internal
     */
    const FUNCTION_IS_LED_ON = 12;

    /**
     * @internal
     */
    const FUNCTION_CALIBRATE = 13;

    /**
     * @internal
     */
    const FUNCTION_TARE = 14;

    /**
     * @internal
     */
    const FUNCTION_SET_CONFIGURATION = 15;

    /**
     * @internal
     */
    const FUNCTION_GET_CONFIGURATION = 16;

    /**
     * @internal
     */
    const FUNCTION_GET_IDENTITY = 255;

    const THRESHOLD_OPTION_OFF = 'x';
    const THRESHOLD_OPTION_OUTSIDE = 'o';
    const THRESHOLD_OPTION_INSIDE = 'i';
    const THRESHOLD_OPTION_SMALLER = '<';
    const THRESHOLD_OPTION_GREATER = '>';
    const RATE_10HZ = 0;
    const RATE_80HZ = 1;
    const GAIN_128X = 0;
    const GAIN_64X = 1;
    const GAIN_32X = 2;

    const DEVICE_IDENTIFIER = 253;

    const DEVICE_DISPLAY_NAME = 'Load Cell Bricklet';

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

        $this->response_expected[self::FUNCTION_GET_WEIGHT] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_WEIGHT_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_WEIGHT_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_WEIGHT_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_WEIGHT_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_DEBOUNCE_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_DEBOUNCE_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_MOVING_AVERAGE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_MOVING_AVERAGE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_LED_ON] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_LED_OFF] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_IS_LED_ON] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_CALIBRATE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_TARE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_SET_CONFIGURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_IDENTITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;

        $this->callback_wrappers[self::CALLBACK_WEIGHT] = array(12, 'callbackWrapperWeight');
        $this->callback_wrappers[self::CALLBACK_WEIGHT_REACHED] = array(12, 'callbackWrapperWeightReached');

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
     * Returns the currently measured weight.
     * 
     * If you want to get the weight periodically, it is recommended
     * to use the BrickletLoadCell::CALLBACK_WEIGHT callback and set the period with
     * BrickletLoadCell::setWeightCallbackPeriod().
     * 
     * 
     * @return int
     */
    public function getWeight()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_WEIGHT, $payload, 12);

        $payload = unpack('V1weight', $data);

        return IPConnection::fixUnpackedInt32($payload, 'weight');
    }

    /**
     * Sets the period with which the BrickletLoadCell::CALLBACK_WEIGHT callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * The BrickletLoadCell::CALLBACK_WEIGHT callback is only triggered if the weight has changed since the
     * last triggering.
     * 
     * @param int $period
     * 
     * @return void
     */
    public function setWeightCallbackPeriod($period)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);

        $this->sendRequest(self::FUNCTION_SET_WEIGHT_CALLBACK_PERIOD, $payload, 0);
    }

    /**
     * Returns the period as set by BrickletLoadCell::setWeightCallbackPeriod().
     * 
     * 
     * @return int
     */
    public function getWeightCallbackPeriod()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_WEIGHT_CALLBACK_PERIOD, $payload, 12);

        $payload = unpack('V1period', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'period');
    }

    /**
     * Sets the thresholds for the BrickletLoadCell::CALLBACK_WEIGHT_REACHED callback.
     * 
     * The following options are possible:
     * 
     * <code>
     *  "Option", "Description"
     * 
     *  "'x'",    "Callback is turned off"
     *  "'o'",    "Callback is triggered when the weight is *outside* the min and max values"
     *  "'i'",    "Callback is triggered when the weight is *inside* the min and max values"
     *  "'<'",    "Callback is triggered when the weight is smaller than the min value (max is ignored)"
     *  "'>'",    "Callback is triggered when the weight is greater than the min value (max is ignored)"
     * </code>
     * 
     * @param string $option
     * @param int $min
     * @param int $max
     * 
     * @return void
     */
    public function setWeightCallbackThreshold($option, $min, $max)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('c', ord($option));
        $payload .= pack('V', $min);
        $payload .= pack('V', $max);

        $this->sendRequest(self::FUNCTION_SET_WEIGHT_CALLBACK_THRESHOLD, $payload, 0);
    }

    /**
     * Returns the threshold as set by BrickletLoadCell::setWeightCallbackThreshold().
     * 
     * 
     * @return array
     */
    public function getWeightCallbackThreshold()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_WEIGHT_CALLBACK_THRESHOLD, $payload, 17);

        $payload = unpack('c1option/V1min/V1max', $data);

        $ret['option'] = chr($payload['option']);
        $ret['min'] = IPConnection::fixUnpackedInt32($payload, 'min');
        $ret['max'] = IPConnection::fixUnpackedInt32($payload, 'max');

        return $ret;
    }

    /**
     * Sets the period with which the threshold callback
     * 
     * * BrickletLoadCell::CALLBACK_WEIGHT_REACHED
     * 
     * is triggered, if the threshold
     * 
     * * BrickletLoadCell::setWeightCallbackThreshold()
     * 
     * keeps being reached.
     * 
     * @param int $debounce
     * 
     * @return void
     */
    public function setDebouncePeriod($debounce)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $debounce);

        $this->sendRequest(self::FUNCTION_SET_DEBOUNCE_PERIOD, $payload, 0);
    }

    /**
     * Returns the debounce period as set by BrickletLoadCell::setDebouncePeriod().
     * 
     * 
     * @return int
     */
    public function getDebouncePeriod()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_DEBOUNCE_PERIOD, $payload, 12);

        $payload = unpack('V1debounce', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'debounce');
    }

    /**
     * Sets the length of a `moving averaging <https://en.wikipedia.org/wiki/Moving_average>`__
     * for the weight value.
     * 
     * Setting the length to 1 will turn the averaging off. With less
     * averaging, there is more noise on the data.
     * 
     * @param int $average
     * 
     * @return void
     */
    public function setMovingAverage($average)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $average);

        $this->sendRequest(self::FUNCTION_SET_MOVING_AVERAGE, $payload, 0);
    }

    /**
     * Returns the length moving average as set by BrickletLoadCell::setMovingAverage().
     * 
     * 
     * @return int
     */
    public function getMovingAverage()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_MOVING_AVERAGE, $payload, 9);

        $payload = unpack('C1average', $data);

        return $payload['average'];
    }

    /**
     * Turns the LED on.
     * 
     * 
     * @return void
     */
    public function ledOn()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_LED_ON, $payload, 0);
    }

    /**
     * Turns the LED off.
     * 
     * 
     * @return void
     */
    public function ledOff()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_LED_OFF, $payload, 0);
    }

    /**
     * Returns *true* if the led is on, *false* otherwise.
     * 
     * 
     * @return bool
     */
    public function isLEDOn()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_IS_LED_ON, $payload, 9);

        $payload = unpack('C1on', $data);

        return (bool)$payload['on'];
    }

    /**
     * To calibrate your Load Cell Bricklet you have to
     * 
     * * empty the scale and call this function with 0 and
     * * add a known weight to the scale and call this function with the weight.
     * 
     * The calibration is saved in the EEPROM of the Bricklet and only
     * needs to be done once.
     * 
     * We recommend to use the Brick Viewer for calibration, you don't need
     * to call this function in your source code.
     * 
     * @param int $weight
     * 
     * @return void
     */
    public function calibrate($weight)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $weight);

        $this->sendRequest(self::FUNCTION_CALIBRATE, $payload, 0);
    }

    /**
     * Sets the currently measured weight as tare weight.
     * 
     * 
     * @return void
     */
    public function tare()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_TARE, $payload, 0);
    }

    /**
     * The measurement rate and gain are configurable.
     * 
     * The rate can be either 10Hz or 80Hz. A faster rate will produce more noise.
     * It is additionally possible to add a moving average
     * (see BrickletLoadCell::setMovingAverage()) to the measurements.
     * 
     * The gain can be 128x, 64x or 32x. It represents a measurement range of
     * ±20mV, ±40mV and ±80mV respectively. The Load Cell Bricklet uses an
     * excitation voltage of 5V and most load cells use an output of 2mV/V. That
     * means the voltage range is ±15mV for most load cells (i.e. gain of 128x
     * is best). If you don't know what all of this means you should keep it at
     * 128x, it will most likely be correct.
     * 
     * The configuration is saved in the EEPROM of the Bricklet and only
     * needs to be done once.
     * 
     * We recommend to use the Brick Viewer for configuration, you don't need
     * to call this function in your source code.
     * 
     * @param int $rate
     * @param int $gain
     * 
     * @return void
     */
    public function setConfiguration($rate, $gain)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $rate);
        $payload .= pack('C', $gain);

        $this->sendRequest(self::FUNCTION_SET_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the configuration as set by BrickletLoadCell::setConfiguration().
     * 
     * 
     * @return array
     */
    public function getConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_CONFIGURATION, $payload, 10);

        $payload = unpack('C1rate/C1gain', $data);

        $ret['rate'] = $payload['rate'];
        $ret['gain'] = $payload['gain'];

        return $ret;
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
    public function callbackWrapperWeight($data)
    {
        $payload = unpack('V1weight', $data);
        $payload['weight'] = IPConnection::fixUnpackedInt32($payload, 'weight');

        if (array_key_exists(self::CALLBACK_WEIGHT, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_WEIGHT];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_WEIGHT];

            call_user_func($function, $payload['weight'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperWeightReached($data)
    {
        $payload = unpack('V1weight', $data);
        $payload['weight'] = IPConnection::fixUnpackedInt32($payload, 'weight');

        if (array_key_exists(self::CALLBACK_WEIGHT_REACHED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_WEIGHT_REACHED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_WEIGHT_REACHED];

            call_user_func($function, $payload['weight'], $user_data);
        }
    }
}

?>
