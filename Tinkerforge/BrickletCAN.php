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
 * Communicates with CAN bus devices
 */
class BrickletCAN extends Device
{

    /**
     * This callback is triggered if a data or remote frame was received by the CAN
     * transceiver.
     * 
     * The ``identifier`` return value follows the identifier format described for
     * BrickletCAN::writeFrame().
     * 
     * For remote frames the ``data`` return value always contains invalid values.
     * 
     * A configurable read filter can be used to define which frames should be
     * received by the CAN transceiver at all (see BrickletCAN::setReadFilter()).
     * 
     * To enable this callback, use BrickletCAN::enableFrameReadCallback().
     */
    const CALLBACK_FRAME_READ = 11;

    /**
     * This callback is triggered if a data or remote frame was received by the CAN
     * transceiver. The received frame can be read with BrickletCAN::readFrame().
     * If additional frames are received, but BrickletCAN::readFrame() was not called yet, the callback
     * will not trigger again.
     * 
     * A configurable read filter can be used to define which frames should be
     * received by the CAN transceiver and put into the read queue (see
     * BrickletCAN::setReadFilter()).
     * 
     * To enable this callback, use BrickletCAN::setFrameReadableCallbackConfiguration().
     * 
     * .. versionadded:: 2.0.1$nbsp;(Plugin)
     */
    const CALLBACK_FRAME_READABLE = 14;


    /**
     * @internal
     */
    const FUNCTION_WRITE_FRAME = 1;

    /**
     * @internal
     */
    const FUNCTION_READ_FRAME = 2;

    /**
     * @internal
     */
    const FUNCTION_ENABLE_FRAME_READ_CALLBACK = 3;

    /**
     * @internal
     */
    const FUNCTION_DISABLE_FRAME_READ_CALLBACK = 4;

    /**
     * @internal
     */
    const FUNCTION_IS_FRAME_READ_CALLBACK_ENABLED = 5;

    /**
     * @internal
     */
    const FUNCTION_SET_CONFIGURATION = 6;

    /**
     * @internal
     */
    const FUNCTION_GET_CONFIGURATION = 7;

    /**
     * @internal
     */
    const FUNCTION_SET_READ_FILTER = 8;

    /**
     * @internal
     */
    const FUNCTION_GET_READ_FILTER = 9;

    /**
     * @internal
     */
    const FUNCTION_GET_ERROR_LOG = 10;

    /**
     * @internal
     */
    const FUNCTION_SET_FRAME_READABLE_CALLBACK_CONFIGURATION = 12;

    /**
     * @internal
     */
    const FUNCTION_GET_FRAME_READABLE_CALLBACK_CONFIGURATION = 13;

    /**
     * @internal
     */
    const FUNCTION_GET_IDENTITY = 255;

    const FRAME_TYPE_STANDARD_DATA = 0;
    const FRAME_TYPE_STANDARD_REMOTE = 1;
    const FRAME_TYPE_EXTENDED_DATA = 2;
    const FRAME_TYPE_EXTENDED_REMOTE = 3;
    const BAUD_RATE_10KBPS = 0;
    const BAUD_RATE_20KBPS = 1;
    const BAUD_RATE_50KBPS = 2;
    const BAUD_RATE_125KBPS = 3;
    const BAUD_RATE_250KBPS = 4;
    const BAUD_RATE_500KBPS = 5;
    const BAUD_RATE_800KBPS = 6;
    const BAUD_RATE_1000KBPS = 7;
    const TRANSCEIVER_MODE_NORMAL = 0;
    const TRANSCEIVER_MODE_LOOPBACK = 1;
    const TRANSCEIVER_MODE_READ_ONLY = 2;
    const FILTER_MODE_DISABLED = 0;
    const FILTER_MODE_ACCEPT_ALL = 1;
    const FILTER_MODE_MATCH_STANDARD = 2;
    const FILTER_MODE_MATCH_STANDARD_AND_DATA = 3;
    const FILTER_MODE_MATCH_EXTENDED = 4;

    const DEVICE_IDENTIFIER = 270;

    const DEVICE_DISPLAY_NAME = 'CAN Bricklet';

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

        $this->response_expected[self::FUNCTION_WRITE_FRAME] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_READ_FRAME] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_ENABLE_FRAME_READ_CALLBACK] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_DISABLE_FRAME_READ_CALLBACK] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_IS_FRAME_READ_CALLBACK_ENABLED] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_CONFIGURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_READ_FILTER] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_READ_FILTER] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_ERROR_LOG] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_FRAME_READABLE_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_FRAME_READABLE_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_IDENTITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;

        $this->callback_wrappers[self::CALLBACK_FRAME_READ] = array(22, 'callbackWrapperFrameRead');
        $this->callback_wrappers[self::CALLBACK_FRAME_READABLE] = array(8, 'callbackWrapperFrameReadable');

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
     * Writes a data or remote frame to the write buffer to be transmitted over the
     * CAN transceiver.
     * 
     * The Bricklet supports the standard 11-bit (CAN 2.0A) and the additional extended
     * 18-bit (CAN 2.0B) identifiers. For standard frames the Bricklet uses bit 0 to 10
     * from the ``identifier`` parameter as standard 11-bit identifier. For extended
     * frames the Bricklet additionally uses bit 11 to 28 from the ``identifier``
     * parameter as extended 18-bit identifier.
     * 
     * For remote frames the ``data`` parameter is ignored.
     * 
     * Returns *true* if the frame was successfully added to the write buffer. Returns
     * *false* if the frame could not be added because write buffer is already full.
     * 
     * The write buffer can overflow if frames are written to it at a higher rate
     * than the Bricklet can transmitted them over the CAN transceiver. This may
     * happen if the CAN transceiver is configured as read-only or is using a low baud
     * rate (see BrickletCAN::setConfiguration()). It can also happen if the CAN bus is
     * congested and the frame cannot be transmitted because it constantly loses
     * arbitration or because the CAN transceiver is currently disabled due to a high
     * write error level (see BrickletCAN::getErrorLog()).
     * 
     * @param int $frame_type
     * @param int $identifier
     * @param int[] $data
     * @param int $length
     * 
     * @return bool
     */
    public function writeFrame($frame_type, $identifier, $data, $length)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $frame_type);
        $payload .= pack('V', $identifier);
        for ($i = 0; $i < 8; $i++) {
            $payload .= pack('C', $data[$i]);
        }
        $payload .= pack('C', $length);

        $data = $this->sendRequest(self::FUNCTION_WRITE_FRAME, $payload, 9);

        $payload = unpack('C1success', $data);

        return (bool)$payload['success'];
    }

    /**
     * Tries to read the next data or remote frame from the read buffer and return it.
     * If a frame was successfully read, then the ``success`` return value is set to
     * *true* and the other return values contain the frame. If the read buffer is
     * empty and no frame could be read, then the ``success`` return value is set to
     * *false* and the other return values contain invalid data.
     * 
     * The ``identifier`` return value follows the identifier format described for
     * BrickletCAN::writeFrame().
     * 
     * For remote frames the ``data`` return value always contains invalid data.
     * 
     * A configurable read filter can be used to define which frames should be
     * received by the CAN transceiver and put into the read buffer (see
     * BrickletCAN::setReadFilter()).
     * 
     * Instead of polling with this function, you can also use callbacks. See the
     * BrickletCAN::enableFrameReadCallback() function and the BrickletCAN::CALLBACK_FRAME_READ callback.
     * 
     * 
     * @return array
     */
    public function readFrame()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_READ_FRAME, $payload, 23);

        $payload = unpack('C1success/C1frame_type/V1identifier/C8data/C1length', $data);

        $ret['success'] = (bool)$payload['success'];
        $ret['frame_type'] = $payload['frame_type'];
        $ret['identifier'] = IPConnection::fixUnpackedUInt32($payload, 'identifier');
        $ret['data'] = IPConnection::collectUnpackedArray($payload, 'data', 8);
        $ret['length'] = $payload['length'];

        return $ret;
    }

    /**
     * Enables the BrickletCAN::CALLBACK_FRAME_READ callback.
     * 
     * By default the callback is disabled. Enabling this callback will disable the BrickletCAN::CALLBACK_FRAME_READABLE callback.
     * 
     * 
     * @return void
     */
    public function enableFrameReadCallback()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_ENABLE_FRAME_READ_CALLBACK, $payload, 0);
    }

    /**
     * Disables the BrickletCAN::CALLBACK_FRAME_READ callback.
     * 
     * By default the callback is disabled.
     * 
     * 
     * @return void
     */
    public function disableFrameReadCallback()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_DISABLE_FRAME_READ_CALLBACK, $payload, 0);
    }

    /**
     * Returns *true* if the BrickletCAN::CALLBACK_FRAME_READ callback is enabled, *false* otherwise.
     * 
     * 
     * @return bool
     */
    public function isFrameReadCallbackEnabled()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_IS_FRAME_READ_CALLBACK_ENABLED, $payload, 9);

        $payload = unpack('C1enabled', $data);

        return (bool)$payload['enabled'];
    }

    /**
     * Sets the configuration for the CAN bus communication.
     * 
     * The baud rate can be configured in steps between 10 and 1000 kbit/s.
     * 
     * The CAN transceiver has three different modes:
     * 
     * * Normal: Reads from and writes to the CAN bus and performs active bus
     *   error detection and acknowledgement.
     * * Loopback: All reads and writes are performed internally. The transceiver
     *   is disconnected from the actual CAN bus.
     * * Read-Only: Only reads from the CAN bus, but does neither active bus error
     *   detection nor acknowledgement. Only the receiving part of the transceiver
     *   is connected to the CAN bus.
     * 
     * The write timeout has three different modes that define how a failed frame
     * transmission should be handled:
     * 
     * * One-Shot (= -1): Only one transmission attempt will be made. If the
     *   transmission fails then the frame is discarded.
     * * Infinite (= 0): Infinite transmission attempts will be made. The frame will
     *   never be discarded.
     * * Milliseconds (> 0): A limited number of transmission attempts will be made.
     *   If the frame could not be transmitted successfully after the configured
     *   number of milliseconds then the frame is discarded.
     * 
     * @param int $baud_rate
     * @param int $transceiver_mode
     * @param int $write_timeout
     * 
     * @return void
     */
    public function setConfiguration($baud_rate, $transceiver_mode, $write_timeout)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $baud_rate);
        $payload .= pack('C', $transceiver_mode);
        $payload .= pack('V', $write_timeout);

        $this->sendRequest(self::FUNCTION_SET_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the configuration as set by BrickletCAN::setConfiguration().
     * 
     * 
     * @return array
     */
    public function getConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_CONFIGURATION, $payload, 14);

        $payload = unpack('C1baud_rate/C1transceiver_mode/V1write_timeout', $data);

        $ret['baud_rate'] = $payload['baud_rate'];
        $ret['transceiver_mode'] = $payload['transceiver_mode'];
        $ret['write_timeout'] = IPConnection::fixUnpackedInt32($payload, 'write_timeout');

        return $ret;
    }

    /**
     * Set the read filter configuration. This can be used to define which frames
     * should be received by the CAN transceiver and put into the read buffer.
     * 
     * The read filter has five different modes that define if and how the mask and
     * the two filters are applied:
     * 
     * * Disabled: No filtering is applied at all. All frames are received even
     *   incomplete and defective frames. This mode should be used for debugging only.
     * * Accept-All: All complete and error-free frames are received.
     * * Match-Standard: Only standard frames with a matching identifier are received.
     * * Match-Standard-and-Data: Only standard frames with matching identifier and
     *   data bytes are received.
     * * Match-Extended: Only extended frames with a matching identifier are received.
     * 
     * The mask and filters are used as bit masks. Their usage depends on the mode:
     * 
     * * Disabled: Mask and filters are ignored.
     * * Accept-All: Mask and filters are ignored.
     * * Match-Standard: Bit 0 to 10 (11 bits) of mask and filters are used to match
     *   the 11-bit identifier of standard frames.
     * * Match-Standard-and-Data: Bit 0 to 10 (11 bits) of mask and filters are used
     *   to match the 11-bit identifier of standard frames. Bit 11 to 18 (8 bits) and
     *   bit 19 to 26 (8 bits) of mask and filters are used to match the first and
     *   second data byte (if present) of standard frames.
     * * Match-Extended: Bit 0 to 10 (11 bits) of mask and filters are used
     *   to match the standard 11-bit identifier part of extended frames. Bit 11 to 28
     *   (18 bits) of mask and filters are used to match the extended 18-bit identifier
     *   part of extended frames.
     * 
     * The mask and filters are applied in this way: The mask is used to select the
     * identifier and data bits that should be compared to the corresponding filter
     * bits. All unselected bits are automatically accepted. All selected bits have
     * to match one of the filters to be accepted. If all bits for the selected mode
     * are accepted then the frame is accepted and is added to the read buffer.
     * 
     * <code>
     *  "Mask Bit", "Filter Bit", "Identifier/Data Bit", "Result"
     * 
     *  0, X, X, Accept
     *  1, 0, 0, Accept
     *  1, 0, 1, Reject
     *  1, 1, 0, Reject
     *  1, 1, 1, Accept
     * </code>
     * 
     * For example, to receive standard frames with identifier 0x123 only the mode can
     * be set to Match-Standard with 0x7FF as mask and 0x123 as filter 1 and filter 2.
     * The mask of 0x7FF selects all 11 identifier bits for matching so that the
     * identifier has to be exactly 0x123 to be accepted.
     * 
     * To accept identifier 0x123 and identifier 0x456 at the same time, just set
     * filter 2 to 0x456 and keep mask and filter 1 unchanged.
     * 
     * @param int $mode
     * @param int $mask
     * @param int $filter1
     * @param int $filter2
     * 
     * @return void
     */
    public function setReadFilter($mode, $mask, $filter1, $filter2)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $mode);
        $payload .= pack('V', $mask);
        $payload .= pack('V', $filter1);
        $payload .= pack('V', $filter2);

        $this->sendRequest(self::FUNCTION_SET_READ_FILTER, $payload, 0);
    }

    /**
     * Returns the read filter as set by BrickletCAN::setReadFilter().
     * 
     * 
     * @return array
     */
    public function getReadFilter()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_READ_FILTER, $payload, 21);

        $payload = unpack('C1mode/V1mask/V1filter1/V1filter2', $data);

        $ret['mode'] = $payload['mode'];
        $ret['mask'] = IPConnection::fixUnpackedUInt32($payload, 'mask');
        $ret['filter1'] = IPConnection::fixUnpackedUInt32($payload, 'filter1');
        $ret['filter2'] = IPConnection::fixUnpackedUInt32($payload, 'filter2');

        return $ret;
    }

    /**
     * Returns information about different kinds of errors.
     * 
     * The write and read error levels indicate the current level of checksum,
     * acknowledgement, form, bit and stuffing errors during CAN bus write and read
     * operations.
     * 
     * When the write error level exceeds 255 then the CAN transceiver gets disabled
     * and no frames can be transmitted or received anymore. The CAN transceiver will
     * automatically be activated again after the CAN bus is idle for a while.
     * 
     * The write and read error levels are not available in read-only transceiver mode
     * (see BrickletCAN::setConfiguration()) and are reset to 0 as a side effect of changing
     * the configuration or the read filter.
     * 
     * The write timeout, read register and buffer overflow counts represents the
     * number of these errors:
     * 
     * * A write timeout occurs if a frame could not be transmitted before the
     *   configured write timeout expired (see BrickletCAN::setConfiguration()).
     * * A read register overflow occurs if the read register of the CAN transceiver
     *   still contains the last received frame when the next frame arrives. In this
     *   case the newly arrived frame is lost. This happens if the CAN transceiver
     *   receives more frames than the Bricklet can handle. Using the read filter
     *   (see BrickletCAN::setReadFilter()) can help to reduce the amount of received frames.
     *   This count is not exact, but a lower bound, because the Bricklet might not
     *   able detect all overflows if they occur in rapid succession.
     * * A read buffer overflow occurs if the read buffer of the Bricklet is already
     *   full when the next frame should be read from the read register of the CAN
     *   transceiver. In this case the frame in the read register is lost. This
     *   happens if the CAN transceiver receives more frames to be added to the read
     *   buffer than are removed from the read buffer using the BrickletCAN::readFrame()
     *   function. Using the BrickletCAN::CALLBACK_FRAME_READ callback ensures that the read buffer
     *   can not overflow.
     * 
     * 
     * @return array
     */
    public function getErrorLog()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ERROR_LOG, $payload, 23);

        $payload = unpack('C1write_error_level/C1read_error_level/C1transceiver_disabled/V1write_timeout_count/V1read_register_overflow_count/V1read_buffer_overflow_count', $data);

        $ret['write_error_level'] = $payload['write_error_level'];
        $ret['read_error_level'] = $payload['read_error_level'];
        $ret['transceiver_disabled'] = (bool)$payload['transceiver_disabled'];
        $ret['write_timeout_count'] = IPConnection::fixUnpackedUInt32($payload, 'write_timeout_count');
        $ret['read_register_overflow_count'] = IPConnection::fixUnpackedUInt32($payload, 'read_register_overflow_count');
        $ret['read_buffer_overflow_count'] = IPConnection::fixUnpackedUInt32($payload, 'read_buffer_overflow_count');

        return $ret;
    }

    /**
     * Enables/disables the BrickletCAN::CALLBACK_FRAME_READABLE callback.
     * 
     * By default the callback is disabled. Enabling this callback will disable the BrickletCAN::CALLBACK_FRAME_READ callback.
     * 
     * .. versionadded:: 2.0.1$nbsp;(Plugin)
     * 
     * @param bool $enabled
     * 
     * @return void
     */
    public function setFrameReadableCallbackConfiguration($enabled)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', intval((bool)$enabled));

        $this->sendRequest(self::FUNCTION_SET_FRAME_READABLE_CALLBACK_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns *true* if the BrickletCAN::CALLBACK_FRAME_READABLE callback is enabled, *false* otherwise.
     * 
     * .. versionadded:: 2.0.1$nbsp;(Plugin)
     * 
     * 
     * @return bool
     */
    public function getFrameReadableCallbackConfiguration()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_FRAME_READABLE_CALLBACK_CONFIGURATION, $payload, 9);

        $payload = unpack('C1enabled', $data);

        return (bool)$payload['enabled'];
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
    public function callbackWrapperFrameRead($data)
    {
        $payload = unpack('C1frame_type/V1identifier/C8data/C1length', $data);
        $payload['identifier'] = IPConnection::fixUnpackedUInt32($payload, 'identifier');
        $payload['data'] = IPConnection::collectUnpackedArray($payload, 'data', 8);

        if (array_key_exists(self::CALLBACK_FRAME_READ, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_FRAME_READ];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_FRAME_READ];

            call_user_func($function, $payload['frame_type'], $payload['identifier'], $payload['data'], $payload['length'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperFrameReadable($data)
    {

        if (array_key_exists(self::CALLBACK_FRAME_READABLE, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_FRAME_READABLE];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_FRAME_READABLE];

            call_user_func($function, $user_data);
        }
    }
}

?>
