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
 * Detects presence of magnetic field
 */
class BrickletHallEffect extends Device
{

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickletHallEffect::setEdgeCountCallbackPeriod(). The parameters are the
     * current count and the current value (see BrickletHallEffect::getValue() and
     * BrickletHallEffect::getEdgeCount()).
     * 
     * The BrickletHallEffect::CALLBACK_EDGE_COUNT callback is only triggered if the count or value changed
     * since the last triggering.
     */
    const CALLBACK_EDGE_COUNT = 10;


    /**
     * @internal
     */
    const FUNCTION_GET_VALUE = 1;

    /**
     * @internal
     */
    const FUNCTION_GET_EDGE_COUNT = 2;

    /**
     * @internal
     */
    const FUNCTION_SET_EDGE_COUNT_CONFIG = 3;

    /**
     * @internal
     */
    const FUNCTION_GET_EDGE_COUNT_CONFIG = 4;

    /**
     * @internal
     */
    const FUNCTION_SET_EDGE_INTERRUPT = 5;

    /**
     * @internal
     */
    const FUNCTION_GET_EDGE_INTERRUPT = 6;

    /**
     * @internal
     */
    const FUNCTION_SET_EDGE_COUNT_CALLBACK_PERIOD = 7;

    /**
     * @internal
     */
    const FUNCTION_GET_EDGE_COUNT_CALLBACK_PERIOD = 8;

    /**
     * @internal
     */
    const FUNCTION_EDGE_INTERRUPT = 9;

    /**
     * @internal
     */
    const FUNCTION_GET_IDENTITY = 255;

    const EDGE_TYPE_RISING = 0;
    const EDGE_TYPE_FALLING = 1;
    const EDGE_TYPE_BOTH = 2;

    const DEVICE_IDENTIFIER = 240;

    const DEVICE_DISPLAY_NAME = 'Hall Effect Bricklet';

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

        $this->response_expected[self::FUNCTION_GET_VALUE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_EDGE_COUNT] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_EDGE_COUNT_CONFIG] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_EDGE_COUNT_CONFIG] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_EDGE_INTERRUPT] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_EDGE_INTERRUPT] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_EDGE_COUNT_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_EDGE_COUNT_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_EDGE_INTERRUPT] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_IDENTITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;

        $this->callback_wrappers[self::CALLBACK_EDGE_COUNT] = array(13, 'callbackWrapperEdgeCount');

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
     * Returns *true* if a magnetic field of 3.5 millitesla or greater is detected.
     * 
     * 
     * @return bool
     */
    public function getValue()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_VALUE, $payload, 9);

        $payload = unpack('C1value', $data);

        return (bool)$payload['value'];
    }

    /**
     * Returns the current value of the edge counter. You can configure
     * edge type (rising, falling, both) that is counted with
     * BrickletHallEffect::setEdgeCountConfig().
     * 
     * If you set the reset counter to *true*, the count is set back to 0
     * directly after it is read.
     * 
     * @param bool $reset_counter
     * 
     * @return int
     */
    public function getEdgeCount($reset_counter)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', intval((bool)$reset_counter));

        $data = $this->sendRequest(self::FUNCTION_GET_EDGE_COUNT, $payload, 12);

        $payload = unpack('V1count', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'count');
    }

    /**
     * The edge type parameter configures if rising edges, falling edges or
     * both are counted. Possible edge types are:
     * 
     * * 0 = rising
     * * 1 = falling
     * * 2 = both
     * 
     * A magnetic field of 3.5 millitesla or greater causes a falling edge and a
     * magnetic field of 2.5 millitesla or smaller causes a rising edge.
     * 
     * If a magnet comes near the Bricklet the signal goes low (falling edge), if
     * a magnet is removed from the vicinity the signal goes high (rising edge).
     * 
     * Configuring an edge counter resets its value to 0.
     * 
     * If you don't know what any of this means, just leave it at default. The
     * default configuration is very likely OK for you.
     * 
     * @param int $edge_type
     * @param int $debounce
     * 
     * @return void
     */
    public function setEdgeCountConfig($edge_type, $debounce)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $edge_type);
        $payload .= pack('C', $debounce);

        $this->sendRequest(self::FUNCTION_SET_EDGE_COUNT_CONFIG, $payload, 0);
    }

    /**
     * Returns the edge type and debounce time as set by BrickletHallEffect::setEdgeCountConfig().
     * 
     * 
     * @return array
     */
    public function getEdgeCountConfig()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_EDGE_COUNT_CONFIG, $payload, 10);

        $payload = unpack('C1edge_type/C1debounce', $data);

        $ret['edge_type'] = $payload['edge_type'];
        $ret['debounce'] = $payload['debounce'];

        return $ret;
    }

    /**
     * Sets the number of edges until an interrupt is invoked.
     * 
     * If *edges* is set to n, an interrupt is invoked for every n-th detected edge.
     * 
     * If *edges* is set to 0, the interrupt is disabled.
     * 
     * @param int $edges
     * 
     * @return void
     */
    public function setEdgeInterrupt($edges)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $edges);

        $this->sendRequest(self::FUNCTION_SET_EDGE_INTERRUPT, $payload, 0);
    }

    /**
     * Returns the edges as set by BrickletHallEffect::setEdgeInterrupt().
     * 
     * 
     * @return int
     */
    public function getEdgeInterrupt()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_EDGE_INTERRUPT, $payload, 12);

        $payload = unpack('V1edges', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'edges');
    }

    /**
     * Sets the period with which the BrickletHallEffect::CALLBACK_EDGE_COUNT callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * The BrickletHallEffect::CALLBACK_EDGE_COUNT callback is only triggered if the edge count has changed
     * since the last triggering.
     * 
     * @param int $period
     * 
     * @return void
     */
    public function setEdgeCountCallbackPeriod($period)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);

        $this->sendRequest(self::FUNCTION_SET_EDGE_COUNT_CALLBACK_PERIOD, $payload, 0);
    }

    /**
     * Returns the period as set by BrickletHallEffect::setEdgeCountCallbackPeriod().
     * 
     * 
     * @return int
     */
    public function getEdgeCountCallbackPeriod()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_EDGE_COUNT_CALLBACK_PERIOD, $payload, 12);

        $payload = unpack('V1period', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'period');
    }

    /**
     * This callback is triggered every n-th count, as configured with
     * BrickletHallEffect::setEdgeInterrupt(). The parameters are the
     * current count and the current value (see BrickletHallEffect::getValue() and
     * BrickletHallEffect::getEdgeCount()).
     * 
     * 
     * @return array
     */
    public function edgeInterrupt()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_EDGE_INTERRUPT, $payload, 13);

        $payload = unpack('V1count/C1value', $data);

        $ret['count'] = IPConnection::fixUnpackedUInt32($payload, 'count');
        $ret['value'] = (bool)$payload['value'];

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
    public function callbackWrapperEdgeCount($data)
    {
        $payload = unpack('V1count/C1value', $data);
        $payload['count'] = IPConnection::fixUnpackedUInt32($payload, 'count');
        $payload['value'] = (bool)$payload['value'];

        if (array_key_exists(self::CALLBACK_EDGE_COUNT, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_EDGE_COUNT];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_EDGE_COUNT];

            call_user_func($function, $payload['count'], $payload['value'], $user_data);
        }
    }
}

?>
