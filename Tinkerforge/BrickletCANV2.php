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
class BrickletCANV2 extends Device
{

    /**
     * See CALLBACK_FRAME_READ
     */
    const CALLBACK_FRAME_READ_LOW_LEVEL = 16;

    /**
     * This callback is triggered if a data or remote frame was received by the CAN
     * transceiver. The received frame can be read with BrickletCANV2::readFrame().
     * If additional frames are received, but BrickletCANV2::readFrame() was not called yet, the callback
     * will not trigger again.
     * 
     * A configurable read filter can be used to define which frames should be
     * received by the CAN transceiver and put into the read queue (see
     * BrickletCANV2::setReadFilterConfiguration()).
     * 
     * To enable this callback, use BrickletCANV2::setFrameReadableCallbackConfiguration().
     * 
     * .. versionadded:: 2.0.3$nbsp;(Plugin)
     */
    const CALLBACK_FRAME_READABLE = 19;

    /**
     * This callback is triggered if any error occurred while writing, reading or transmitting CAN frames.
     * 
     * The callback is only triggered once until BrickletCANV2::getErrorLog() is called. That function will return
     * details abount the error(s) occurred.
     * 
     * To enable this callback, use BrickletCANV2::setErrorOccurredCallbackConfiguration().
     * 
     * .. versionadded:: 2.0.3$nbsp;(Plugin)
     */
    const CALLBACK_ERROR_OCCURRED = 22;

    /**
     * This callback is triggered if a data or remote frame was received by the CAN
     * transceiver.
     * 
     * The ``identifier`` return value follows the identifier format described for
     * BrickletCANV2::writeFrame().
     * 
     * For details on the ``data`` return value see BrickletCANV2::readFrame().
     * 
     * A configurable read filter can be used to define which frames should be
     * received by the CAN transceiver and put into the read queue (see
     * BrickletCANV2::setReadFilterConfiguration()).
     * 
     * To enable this callback, use BrickletCANV2::setFrameReadCallbackConfiguration().
     * 
     * <note>
     *  If reconstructing the value fails, the callback is triggered with NULL for data.
     * </note>
     */
    const CALLBACK_FRAME_READ = -16;


    /**
     * @internal
     */
    const FUNCTION_WRITE_FRAME_LOW_LEVEL = 1;

    /**
     * @internal
     */
    const FUNCTION_READ_FRAME_LOW_LEVEL = 2;

    /**
     * @internal
     */
    const FUNCTION_SET_FRAME_READ_CALLBACK_CONFIGURATION = 3;

    /**
     * @internal
     */
    const FUNCTION_GET_FRAME_READ_CALLBACK_CONFIGURATION = 4;

    /**
     * @internal
     */
    const FUNCTION_SET_TRANSCEIVER_CONFIGURATION = 5;

    /**
     * @internal
     */
    const FUNCTION_GET_TRANSCEIVER_CONFIGURATION = 6;

    /**
     * @internal
     */
    const FUNCTION_SET_QUEUE_CONFIGURATION_LOW_LEVEL = 7;

    /**
     * @internal
     */
    const FUNCTION_GET_QUEUE_CONFIGURATION_LOW_LEVEL = 8;

    /**
     * @internal
     */
    const FUNCTION_SET_READ_FILTER_CONFIGURATION = 9;

    /**
     * @internal
     */
    const FUNCTION_GET_READ_FILTER_CONFIGURATION = 10;

    /**
     * @internal
     */
    const FUNCTION_GET_ERROR_LOG_LOW_LEVEL = 11;

    /**
     * @internal
     */
    const FUNCTION_SET_COMMUNICATION_LED_CONFIG = 12;

    /**
     * @internal
     */
    const FUNCTION_GET_COMMUNICATION_LED_CONFIG = 13;

    /**
     * @internal
     */
    const FUNCTION_SET_ERROR_LED_CONFIG = 14;

    /**
     * @internal
     */
    const FUNCTION_GET_ERROR_LED_CONFIG = 15;

    /**
     * @internal
     */
    const FUNCTION_SET_FRAME_READABLE_CALLBACK_CONFIGURATION = 17;

    /**
     * @internal
     */
    const FUNCTION_GET_FRAME_READABLE_CALLBACK_CONFIGURATION = 18;

    /**
     * @internal
     */
    const FUNCTION_SET_ERROR_OCCURRED_CALLBACK_CONFIGURATION = 20;

    /**
     * @internal
     */
    const FUNCTION_GET_ERROR_OCCURRED_CALLBACK_CONFIGURATION = 21;

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

    const FRAME_TYPE_STANDARD_DATA = 0;
    const FRAME_TYPE_STANDARD_REMOTE = 1;
    const FRAME_TYPE_EXTENDED_DATA = 2;
    const FRAME_TYPE_EXTENDED_REMOTE = 3;
    const TRANSCEIVER_MODE_NORMAL = 0;
    const TRANSCEIVER_MODE_LOOPBACK = 1;
    const TRANSCEIVER_MODE_READ_ONLY = 2;
    const FILTER_MODE_ACCEPT_ALL = 0;
    const FILTER_MODE_MATCH_STANDARD_ONLY = 1;
    const FILTER_MODE_MATCH_EXTENDED_ONLY = 2;
    const FILTER_MODE_MATCH_STANDARD_AND_EXTENDED = 3;
    const TRANSCEIVER_STATE_ACTIVE = 0;
    const TRANSCEIVER_STATE_PASSIVE = 1;
    const TRANSCEIVER_STATE_DISABLED = 2;
    const COMMUNICATION_LED_CONFIG_OFF = 0;
    const COMMUNICATION_LED_CONFIG_ON = 1;
    const COMMUNICATION_LED_CONFIG_SHOW_HEARTBEAT = 2;
    const COMMUNICATION_LED_CONFIG_SHOW_COMMUNICATION = 3;
    const ERROR_LED_CONFIG_OFF = 0;
    const ERROR_LED_CONFIG_ON = 1;
    const ERROR_LED_CONFIG_SHOW_HEARTBEAT = 2;
    const ERROR_LED_CONFIG_SHOW_TRANSCEIVER_STATE = 3;
    const ERROR_LED_CONFIG_SHOW_ERROR = 4;
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

    const DEVICE_IDENTIFIER = 2107;

    const DEVICE_DISPLAY_NAME = 'CAN Bricklet 2.0';

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

        $this->response_expected[self::FUNCTION_WRITE_FRAME_LOW_LEVEL] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_READ_FRAME_LOW_LEVEL] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_FRAME_READ_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_FRAME_READ_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_TRANSCEIVER_CONFIGURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_TRANSCEIVER_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_QUEUE_CONFIGURATION_LOW_LEVEL] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_QUEUE_CONFIGURATION_LOW_LEVEL] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_READ_FILTER_CONFIGURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_READ_FILTER_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_ERROR_LOG_LOW_LEVEL] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_COMMUNICATION_LED_CONFIG] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_COMMUNICATION_LED_CONFIG] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ERROR_LED_CONFIG] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_ERROR_LED_CONFIG] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_FRAME_READABLE_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_FRAME_READABLE_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ERROR_OCCURRED_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_ERROR_OCCURRED_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
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

        $this->callback_wrappers[self::CALLBACK_FRAME_READ_LOW_LEVEL] = array(29, 'callbackWrapperFrameReadLowLevel');
        $this->callback_wrappers[self::CALLBACK_FRAME_READABLE] = array(8, 'callbackWrapperFrameReadable');
        $this->callback_wrappers[self::CALLBACK_ERROR_OCCURRED] = array(8, 'callbackWrapperErrorOccurred');

        $this->high_level_callbacks[self::CALLBACK_FRAME_READ] = array('data' => NULL);

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
     * Writes a data or remote frame to the write queue to be transmitted over the
     * CAN transceiver.
     * 
     * The Bricklet supports the standard 11-bit (CAN 2.0A) and the additional extended
     * 29-bit (CAN 2.0B) identifiers. For standard frames the Bricklet uses bit 0 to 10
     * from the ``identifier`` parameter as standard 11-bit identifier. For extended
     * frames the Bricklet uses bit 0 to 28 from the ``identifier`` parameter as
     * extended 29-bit identifier.
     * 
     * The ``data`` parameter can be up to 15 bytes long. For data frames up to 8 bytes
     * will be used as the actual data. The length (DLC) field in the data or remote
     * frame will be set to the actual length of the ``data`` parameter. This allows
     * to transmit data and remote frames with excess length. For remote frames only
     * the length of the ``data`` parameter is used. The actual ``data`` bytes are
     * ignored.
     * 
     * Returns *true* if the frame was successfully added to the write queue. Returns
     * *false* if the frame could not be added because write queue is already full or
     * because the write buffer or the write backlog are configured with a size of
     * zero (see BrickletCANV2::setQueueConfiguration()).
     * 
     * The write queue can overflow if frames are written to it at a higher rate
     * than the Bricklet can transmitted them over the CAN transceiver. This may
     * happen if the CAN transceiver is configured as read-only or is using a low baud
     * rate (see BrickletCANV2::setTransceiverConfiguration()). It can also happen if the CAN
     * bus is congested and the frame cannot be transmitted because it constantly loses
     * arbitration or because the CAN transceiver is currently disabled due to a high
     * write error level (see BrickletCANV2::getErrorLog()).
     * 
     * @param int $frame_type
     * @param int $identifier
     * @param int $data_length
     * @param int[] $data_data
     * 
     * @return bool
     */
    public function writeFrameLowLevel($frame_type, $identifier, $data_length, $data_data)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $frame_type);
        $payload .= pack('V', $identifier);
        $payload .= pack('C', $data_length);
        for ($i = 0; $i < 15; $i++) {
            $payload .= pack('C', $data_data[$i]);
        }

        $data = $this->sendRequest(self::FUNCTION_WRITE_FRAME_LOW_LEVEL, $payload, 9);

        $payload = unpack('C1success', $data);

        return (bool)$payload['success'];
    }

    /**
     * Tries to read the next data or remote frame from the read queue and returns it.
     * If a frame was successfully read, then the ``success`` return value is set to
     * *true* and the other return values contain the frame. If the read queue is
     * empty and no frame could be read, then the ``success`` return value is set to
     * *false* and the other return values contain invalid data.
     * 
     * The ``identifier`` return value follows the identifier format described for
     * BrickletCANV2::writeFrame().
     * 
     * The ``data`` return value can be up to 15 bytes long. For data frames up to the
     * first 8 bytes are the actual received data. All bytes after the 8th byte are
     * always zero and only there to indicate the length of a data or remote frame
     * with excess length. For remote frames the length of the ``data`` return value
     * represents the requested length. The actual ``data`` bytes are always zero.
     * 
     * A configurable read filter can be used to define which frames should be
     * received by the CAN transceiver and put into the read queue (see
     * BrickletCANV2::setReadFilterConfiguration()).
     * 
     * Instead of polling with this function, you can also use callbacks. See the
     * BrickletCANV2::setFrameReadCallbackConfiguration() function and the BrickletCANV2::CALLBACK_FRAME_READ
     * callback.
     * 
     * 
     * @return array
     */
    public function readFrameLowLevel()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_READ_FRAME_LOW_LEVEL, $payload, 30);

        $payload = unpack('C1success/C1frame_type/V1identifier/C1data_length/C15data_data', $data);

        $ret['success'] = (bool)$payload['success'];
        $ret['frame_type'] = $payload['frame_type'];
        $ret['identifier'] = IPConnection::fixUnpackedUInt32($payload, 'identifier');
        $ret['data_length'] = $payload['data_length'];
        $ret['data_data'] = IPConnection::collectUnpackedArray($payload, 'data_data', 15);

        return $ret;
    }

    /**
     * Enables and disables the BrickletCANV2::CALLBACK_FRAME_READ callback.
     * 
     * By default the callback is disabled. Enabling this callback will disable the BrickletCANV2::CALLBACK_FRAME_READABLE callback.
     * 
     * @param bool $enabled
     * 
     * @return void
     */
    public function setFrameReadCallbackConfiguration($enabled)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', intval((bool)$enabled));

        $this->sendRequest(self::FUNCTION_SET_FRAME_READ_CALLBACK_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns *true* if the BrickletCANV2::CALLBACK_FRAME_READ callback is enabled, *false* otherwise.
     * 
     * 
     * @return bool
     */
    public function getFrameReadCallbackConfiguration()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_FRAME_READ_CALLBACK_CONFIGURATION, $payload, 9);

        $payload = unpack('C1enabled', $data);

        return (bool)$payload['enabled'];
    }

    /**
     * Sets the transceiver configuration for the CAN bus communication.
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
     * @param int $baud_rate
     * @param int $sample_point
     * @param int $transceiver_mode
     * 
     * @return void
     */
    public function setTransceiverConfiguration($baud_rate, $sample_point, $transceiver_mode)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $baud_rate);
        $payload .= pack('v', $sample_point);
        $payload .= pack('C', $transceiver_mode);

        $this->sendRequest(self::FUNCTION_SET_TRANSCEIVER_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the configuration as set by BrickletCANV2::setTransceiverConfiguration().
     * 
     * 
     * @return array
     */
    public function getTransceiverConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_TRANSCEIVER_CONFIGURATION, $payload, 15);

        $payload = unpack('V1baud_rate/v1sample_point/C1transceiver_mode', $data);

        $ret['baud_rate'] = IPConnection::fixUnpackedUInt32($payload, 'baud_rate');
        $ret['sample_point'] = $payload['sample_point'];
        $ret['transceiver_mode'] = $payload['transceiver_mode'];

        return $ret;
    }

    /**
     * Sets the write and read queue configuration.
     * 
     * The CAN transceiver has 32 buffers in total in hardware for transmitting and
     * receiving frames. Additionally, the Bricklet has a backlog for 768 frames in
     * total in software. The buffers and the backlog can be freely assigned to the
     * write and read queues.
     * 
     * BrickletCANV2::writeFrame() writes a frame into the write backlog. The Bricklet moves
     * the frame from the backlog into a free write buffer. The CAN transceiver then
     * transmits the frame from the write buffer to the CAN bus. If there are no
     * write buffers (``write_buffer_size`` is zero) or there is no write backlog
     * (``write_backlog_size`` is zero) then no frames can be transmitted and
     * BrickletCANV2::writeFrame() returns always *false*.
     * 
     * The CAN transceiver receives a frame from the CAN bus and stores it into a
     * free read buffer. The Bricklet moves the frame from the read buffer into the
     * read backlog. BrickletCANV2::readFrame() reads the frame from the read backlog and
     * returns it. If there are no read buffers (``read_buffer_sizes`` is empty) or
     * there is no read backlog (``read_backlog_size`` is zero) then no frames can be
     * received and BrickletCANV2::readFrame() returns always *false*.
     * 
     * There can be multiple read buffers, because the CAN transceiver cannot receive
     * data and remote frames into the same read buffer. A positive read buffer size
     * represents a data frame read buffer and a negative read buffer size represents
     * a remote frame read buffer. A read buffer size of zero is not allowed. By
     * default the first read buffer is configured for data frames and the second read
     * buffer is configured for remote frame. There can be up to 32 different read
     * buffers, assuming that no write buffer is used. Each read buffer has its own
     * filter configuration (see BrickletCANV2::setReadFilterConfiguration()).
     * 
     * A valid queue configuration fulfills these conditions::
     * 
     *  write_buffer_size + abs(read_buffer_size_0) + abs(read_buffer_size_1) + ... + abs(read_buffer_size_31) <= 32
     *  write_backlog_size + read_backlog_size <= 768
     * 
     * The write buffer timeout has three different modes that define how a failed
     * frame transmission should be handled:
     * 
     * * Single-Shot (< 0): Only one transmission attempt will be made. If the
     *   transmission fails then the frame is discarded.
     * * Infinite (= 0): Infinite transmission attempts will be made. The frame will
     *   never be discarded.
     * * Milliseconds (> 0): A limited number of transmission attempts will be made.
     *   If the frame could not be transmitted successfully after the configured
     *   number of milliseconds then the frame is discarded.
     * 
     * The current content of the queues is lost when this function is called.
     * 
     * @param int $write_buffer_size
     * @param int $write_buffer_timeout
     * @param int $write_backlog_size
     * @param int $read_buffer_sizes_length
     * @param int[] $read_buffer_sizes_data
     * @param int $read_backlog_size
     * 
     * @return void
     */
    public function setQueueConfigurationLowLevel($write_buffer_size, $write_buffer_timeout, $write_backlog_size, $read_buffer_sizes_length, $read_buffer_sizes_data, $read_backlog_size)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $write_buffer_size);
        $payload .= pack('V', $write_buffer_timeout);
        $payload .= pack('v', $write_backlog_size);
        $payload .= pack('C', $read_buffer_sizes_length);
        for ($i = 0; $i < 32; $i++) {
            $payload .= pack('c', $read_buffer_sizes_data[$i]);
        }
        $payload .= pack('v', $read_backlog_size);

        $this->sendRequest(self::FUNCTION_SET_QUEUE_CONFIGURATION_LOW_LEVEL, $payload, 0);
    }

    /**
     * Returns the queue configuration as set by BrickletCANV2::setQueueConfiguration().
     * 
     * 
     * @return array
     */
    public function getQueueConfigurationLowLevel()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_QUEUE_CONFIGURATION_LOW_LEVEL, $payload, 50);

        $payload = unpack('C1write_buffer_size/V1write_buffer_timeout/v1write_backlog_size/C1read_buffer_sizes_length/c32read_buffer_sizes_data/v1read_backlog_size', $data);

        $ret['write_buffer_size'] = $payload['write_buffer_size'];
        $ret['write_buffer_timeout'] = IPConnection::fixUnpackedInt32($payload, 'write_buffer_timeout');
        $ret['write_backlog_size'] = $payload['write_backlog_size'];
        $ret['read_buffer_sizes_length'] = $payload['read_buffer_sizes_length'];
        $ret['read_buffer_sizes_data'] = IPConnection::collectUnpackedArray($payload, 'read_buffer_sizes_data', 32);
        $ret['read_backlog_size'] = $payload['read_backlog_size'];

        return $ret;
    }

    /**
     * Set the read filter configuration for the given read buffer index. This can be
     * used to define which frames should be received by the CAN transceiver and put
     * into the read buffer.
     * 
     * The read filter has four different modes that define if and how the filter mask
     * and the filter identifier are applied:
     * 
     * * Accept-All: All frames are received.
     * * Match-Standard-Only: Only standard frames with a matching identifier are
     *   received.
     * * Match-Extended-Only: Only extended frames with a matching identifier are
     *   received.
     * * Match-Standard-And-Extended: Standard and extended frames with a matching
     *   identifier are received.
     * 
     * The filter mask and filter identifier are used as bit masks. Their usage
     * depends on the mode:
     * 
     * * Accept-All: Mask and identifier are ignored.
     * * Match-Standard-Only: Bit 0 to 10 (11 bits) of filter mask and filter
     *   identifier are used to match the 11-bit identifier of standard frames.
     * * Match-Extended-Only: Bit 0 to 28 (29 bits) of filter mask and filter
     *   identifier are used to match the 29-bit identifier of extended frames.
     * * Match-Standard-And-Extended: Bit 18 to 28 (11 bits) of filter mask and filter
     *   identifier are used to match the 11-bit identifier of standard frames, bit 0
     *   to 17 (18 bits) are ignored in this case. Bit 0 to 28 (29 bits) of filter
     *   mask and filter identifier are used to match the 29-bit identifier of extended
     *   frames.
     * 
     * The filter mask and filter identifier are applied in this way: The filter mask
     * is used to select the frame identifier bits that should be compared to the
     * corresponding filter identifier bits. All unselected bits are automatically
     * accepted. All selected bits have to match the filter identifier to be accepted.
     * If all bits for the selected mode are accepted then the frame is accepted and
     * is added to the read buffer.
     * 
     * <code>
     *  "Filter Mask Bit", "Filter Identifier Bit", "Frame Identifier Bit", "Result"
     * 
     *  0, X, X, Accept
     *  1, 0, 0, Accept
     *  1, 0, 1, Reject
     *  1, 1, 0, Reject
     *  1, 1, 1, Accept
     * </code>
     * 
     * For example, to receive standard frames with identifier 0x123 only, the mode
     * can be set to Match-Standard-Only with 0x7FF as mask and 0x123 as identifier.
     * The mask of 0x7FF selects all 11 identifier bits for matching so that the
     * identifier has to be exactly 0x123 to be accepted.
     * 
     * To accept identifier 0x123 and identifier 0x456 at the same time, just set
     * filter 2 to 0x456 and keep mask and filter 1 unchanged.
     * 
     * There can be up to 32 different read filters configured at the same time,
     * because there can be up to 32 read buffer (see BrickletCANV2::setQueueConfiguration()).
     * 
     * The default mode is accept-all for all read buffers.
     * 
     * @param int $buffer_index
     * @param int $filter_mode
     * @param int $filter_mask
     * @param int $filter_identifier
     * 
     * @return void
     */
    public function setReadFilterConfiguration($buffer_index, $filter_mode, $filter_mask, $filter_identifier)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $buffer_index);
        $payload .= pack('C', $filter_mode);
        $payload .= pack('V', $filter_mask);
        $payload .= pack('V', $filter_identifier);

        $this->sendRequest(self::FUNCTION_SET_READ_FILTER_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the read filter configuration as set by BrickletCANV2::setReadFilterConfiguration().
     * 
     * @param int $buffer_index
     * 
     * @return array
     */
    public function getReadFilterConfiguration($buffer_index)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('C', $buffer_index);

        $data = $this->sendRequest(self::FUNCTION_GET_READ_FILTER_CONFIGURATION, $payload, 17);

        $payload = unpack('C1filter_mode/V1filter_mask/V1filter_identifier', $data);

        $ret['filter_mode'] = $payload['filter_mode'];
        $ret['filter_mask'] = IPConnection::fixUnpackedUInt32($payload, 'filter_mask');
        $ret['filter_identifier'] = IPConnection::fixUnpackedUInt32($payload, 'filter_identifier');

        return $ret;
    }

    /**
     * Returns information about different kinds of errors.
     * 
     * The write and read error levels indicate the current level of stuffing, form,
     * acknowledgement, bit and checksum errors during CAN bus write and read
     * operations. For each of this error kinds there is also an individual counter.
     * 
     * When the write error level extends 255 then the CAN transceiver gets disabled
     * and no frames can be transmitted or received anymore. The CAN transceiver will
     * automatically be activated again after the CAN bus is idle for a while.
     * 
     * The write buffer timeout, read buffer and backlog overflow counts represents the
     * number of these errors:
     * 
     * * A write buffer timeout occurs if a frame could not be transmitted before the
     *   configured write buffer timeout expired (see BrickletCANV2::setQueueConfiguration()).
     * * A read buffer overflow occurs if a read buffer of the CAN transceiver
     *   still contains the last received frame when the next frame arrives. In this
     *   case the last received frame is lost. This happens if the CAN transceiver
     *   receives more frames than the Bricklet can handle. Using the read filter
     *   (see BrickletCANV2::setReadFilterConfiguration()) can help to reduce the amount of
     *   received frames. This count is not exact, but a lower bound, because the
     *   Bricklet might not able detect all overflows if they occur in rapid succession.
     * * A read backlog overflow occurs if the read backlog of the Bricklet is already
     *   full when the next frame should be read from a read buffer of the CAN
     *   transceiver. In this case the frame in the read buffer is lost. This
     *   happens if the CAN transceiver receives more frames to be added to the read
     *   backlog than are removed from the read backlog using the BrickletCANV2::readFrame()
     *   function. Using the BrickletCANV2::CALLBACK_FRAME_READ callback ensures that the read backlog
     *   can not overflow.
     * 
     * The read buffer overflow counter counts the overflows of all configured read
     * buffers. Which read buffer exactly suffered from an overflow can be figured
     * out from the read buffer overflow occurrence list
     * (``read_buffer_overflow_error_occurred``). Reading the error log clears the
     * occurence list.
     * 
     * 
     * @return array
     */
    public function getErrorLogLowLevel()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ERROR_LOG_LOW_LEVEL, $payload, 52);

        $payload = unpack('C1transceiver_state/C1transceiver_write_error_level/C1transceiver_read_error_level/V1transceiver_stuffing_error_count/V1transceiver_format_error_count/V1transceiver_ack_error_count/V1transceiver_bit1_error_count/V1transceiver_bit0_error_count/V1transceiver_crc_error_count/V1write_buffer_timeout_error_count/V1read_buffer_overflow_error_count/C1read_buffer_overflow_error_occurred_length/C4read_buffer_overflow_error_occurred_data/V1read_backlog_overflow_error_count', $data);

        $ret['transceiver_state'] = $payload['transceiver_state'];
        $ret['transceiver_write_error_level'] = $payload['transceiver_write_error_level'];
        $ret['transceiver_read_error_level'] = $payload['transceiver_read_error_level'];
        $ret['transceiver_stuffing_error_count'] = IPConnection::fixUnpackedUInt32($payload, 'transceiver_stuffing_error_count');
        $ret['transceiver_format_error_count'] = IPConnection::fixUnpackedUInt32($payload, 'transceiver_format_error_count');
        $ret['transceiver_ack_error_count'] = IPConnection::fixUnpackedUInt32($payload, 'transceiver_ack_error_count');
        $ret['transceiver_bit1_error_count'] = IPConnection::fixUnpackedUInt32($payload, 'transceiver_bit1_error_count');
        $ret['transceiver_bit0_error_count'] = IPConnection::fixUnpackedUInt32($payload, 'transceiver_bit0_error_count');
        $ret['transceiver_crc_error_count'] = IPConnection::fixUnpackedUInt32($payload, 'transceiver_crc_error_count');
        $ret['write_buffer_timeout_error_count'] = IPConnection::fixUnpackedUInt32($payload, 'write_buffer_timeout_error_count');
        $ret['read_buffer_overflow_error_count'] = IPConnection::fixUnpackedUInt32($payload, 'read_buffer_overflow_error_count');
        $ret['read_buffer_overflow_error_occurred_length'] = $payload['read_buffer_overflow_error_occurred_length'];
        $ret['read_buffer_overflow_error_occurred_data'] = IPConnection::collectUnpackedBoolArray($payload, 'read_buffer_overflow_error_occurred_data', 32);
        $ret['read_backlog_overflow_error_count'] = IPConnection::fixUnpackedUInt32($payload, 'read_backlog_overflow_error_count');

        return $ret;
    }

    /**
     * Sets the communication LED configuration. By default the LED shows
     * CAN-Bus traffic, it flickers once for every 40 transmitted or received frames.
     * 
     * You can also turn the LED permanently on/off or show a heartbeat.
     * 
     * If the Bricklet is in bootloader mode, the LED is off.
     * 
     * @param int $config
     * 
     * @return void
     */
    public function setCommunicationLEDConfig($config)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $config);

        $this->sendRequest(self::FUNCTION_SET_COMMUNICATION_LED_CONFIG, $payload, 0);
    }

    /**
     * Returns the configuration as set by BrickletCANV2::setCommunicationLEDConfig()
     * 
     * 
     * @return int
     */
    public function getCommunicationLEDConfig()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_COMMUNICATION_LED_CONFIG, $payload, 9);

        $payload = unpack('C1config', $data);

        return $payload['config'];
    }

    /**
     * Sets the error LED configuration.
     * 
     * By default (show-transceiver-state) the error LED turns on if the CAN
     * transceiver is passive or disabled state (see BrickletCANV2::getErrorLog()). If
     * the CAN transceiver is in active state the LED turns off.
     * 
     * If the LED is configured as show-error then the error LED turns on if any error
     * occurs. If you call this function with the show-error option again, the LED will
     * turn off until the next error occurs.
     * 
     * You can also turn the LED permanently on/off or show a heartbeat.
     * 
     * If the Bricklet is in bootloader mode, the LED is off.
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
     * Returns the configuration as set by BrickletCANV2::setErrorLEDConfig().
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
     * Enables and disables the BrickletCANV2::CALLBACK_FRAME_READABLE callback.
     * 
     * By default the callback is disabled. Enabling this callback will disable the BrickletCANV2::CALLBACK_FRAME_READ callback.
     * 
     * .. versionadded:: 2.0.3$nbsp;(Plugin)
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
     * Returns *true* if the BrickletCANV2::CALLBACK_FRAME_READABLE callback is enabled, *false* otherwise.
     * 
     * .. versionadded:: 2.0.3$nbsp;(Plugin)
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
     * Enables and disables the BrickletCANV2::CALLBACK_ERROR_OCCURRED callback.
     * 
     * By default the callback is disabled.
     * 
     * .. versionadded:: 2.0.3$nbsp;(Plugin)
     * 
     * @param bool $enabled
     * 
     * @return void
     */
    public function setErrorOccurredCallbackConfiguration($enabled)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', intval((bool)$enabled));

        $this->sendRequest(self::FUNCTION_SET_ERROR_OCCURRED_CALLBACK_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns *true* if the BrickletCANV2::CALLBACK_ERROR_OCCURRED callback is enabled, *false* otherwise.
     * 
     * .. versionadded:: 2.0.3$nbsp;(Plugin)
     * 
     * 
     * @return bool
     */
    public function getErrorOccurredCallbackConfiguration()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ERROR_OCCURRED_CALLBACK_CONFIGURATION, $payload, 9);

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
     * Returns the current bootloader mode, see BrickletCANV2::setBootloaderMode().
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
     * Sets the firmware pointer for BrickletCANV2::writeFirmware(). The pointer has
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
     * BrickletCANV2::setWriteFirmwarePointer() before. The firmware is written
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
     * Returns the configuration as set by BrickletCANV2::setStatusLEDConfig()
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
     * Writes a data or remote frame to the write queue to be transmitted over the
     * CAN transceiver.
     * 
     * The Bricklet supports the standard 11-bit (CAN 2.0A) and the additional extended
     * 29-bit (CAN 2.0B) identifiers. For standard frames the Bricklet uses bit 0 to 10
     * from the ``identifier`` parameter as standard 11-bit identifier. For extended
     * frames the Bricklet uses bit 0 to 28 from the ``identifier`` parameter as
     * extended 29-bit identifier.
     * 
     * The ``data`` parameter can be up to 15 bytes long. For data frames up to 8 bytes
     * will be used as the actual data. The length (DLC) field in the data or remote
     * frame will be set to the actual length of the ``data`` parameter. This allows
     * to transmit data and remote frames with excess length. For remote frames only
     * the length of the ``data`` parameter is used. The actual ``data`` bytes are
     * ignored.
     * 
     * Returns *true* if the frame was successfully added to the write queue. Returns
     * *false* if the frame could not be added because write queue is already full or
     * because the write buffer or the write backlog are configured with a size of
     * zero (see BrickletCANV2::setQueueConfiguration()).
     * 
     * The write queue can overflow if frames are written to it at a higher rate
     * than the Bricklet can transmitted them over the CAN transceiver. This may
     * happen if the CAN transceiver is configured as read-only or is using a low baud
     * rate (see BrickletCANV2::setTransceiverConfiguration()). It can also happen if the CAN
     * bus is congested and the frame cannot be transmitted because it constantly loses
     * arbitration or because the CAN transceiver is currently disabled due to a high
     * write error level (see BrickletCANV2::getErrorLog()).
     * 
     * @param int $frame_type
     * @param int $identifier
     * @param int[] $data
     * 
     * @return bool
     */
    public function writeFrame($frame_type, $identifier, $data)
    {
        $data_length = count($data);
        $data_data = $data;

        if ($data_length > 15) {
            throw new \InvalidArgumentException('Data can be at most 15 items long');
        }

        if ($data_length < 15) {
            $data_data = array_pad($data_data, 15, 0);
        }

        return $this->writeFrameLowLevel($frame_type, $identifier, $data_length, $data_data);
    }

    /**
     * Tries to read the next data or remote frame from the read queue and returns it.
     * If a frame was successfully read, then the ``success`` return value is set to
     * *true* and the other return values contain the frame. If the read queue is
     * empty and no frame could be read, then the ``success`` return value is set to
     * *false* and the other return values contain invalid data.
     * 
     * The ``identifier`` return value follows the identifier format described for
     * BrickletCANV2::writeFrame().
     * 
     * The ``data`` return value can be up to 15 bytes long. For data frames up to the
     * first 8 bytes are the actual received data. All bytes after the 8th byte are
     * always zero and only there to indicate the length of a data or remote frame
     * with excess length. For remote frames the length of the ``data`` return value
     * represents the requested length. The actual ``data`` bytes are always zero.
     * 
     * A configurable read filter can be used to define which frames should be
     * received by the CAN transceiver and put into the read queue (see
     * BrickletCANV2::setReadFilterConfiguration()).
     * 
     * Instead of polling with this function, you can also use callbacks. See the
     * BrickletCANV2::setFrameReadCallbackConfiguration() function and the BrickletCANV2::CALLBACK_FRAME_READ
     * callback.
     * 
     * 
     * @return array
     */
    public function readFrame()
    {
        $ret = $this->readFrameLowLevel();

        return array('success' => $ret['success'], 'frame_type' => $ret['frame_type'], 'identifier' => $ret['identifier'], 'data' => array_slice($ret['data_data'], 0, $ret['data_length']));
    }

    /**
     * Sets the write and read queue configuration.
     * 
     * The CAN transceiver has 32 buffers in total in hardware for transmitting and
     * receiving frames. Additionally, the Bricklet has a backlog for 768 frames in
     * total in software. The buffers and the backlog can be freely assigned to the
     * write and read queues.
     * 
     * BrickletCANV2::writeFrame() writes a frame into the write backlog. The Bricklet moves
     * the frame from the backlog into a free write buffer. The CAN transceiver then
     * transmits the frame from the write buffer to the CAN bus. If there are no
     * write buffers (``write_buffer_size`` is zero) or there is no write backlog
     * (``write_backlog_size`` is zero) then no frames can be transmitted and
     * BrickletCANV2::writeFrame() returns always *false*.
     * 
     * The CAN transceiver receives a frame from the CAN bus and stores it into a
     * free read buffer. The Bricklet moves the frame from the read buffer into the
     * read backlog. BrickletCANV2::readFrame() reads the frame from the read backlog and
     * returns it. If there are no read buffers (``read_buffer_sizes`` is empty) or
     * there is no read backlog (``read_backlog_size`` is zero) then no frames can be
     * received and BrickletCANV2::readFrame() returns always *false*.
     * 
     * There can be multiple read buffers, because the CAN transceiver cannot receive
     * data and remote frames into the same read buffer. A positive read buffer size
     * represents a data frame read buffer and a negative read buffer size represents
     * a remote frame read buffer. A read buffer size of zero is not allowed. By
     * default the first read buffer is configured for data frames and the second read
     * buffer is configured for remote frame. There can be up to 32 different read
     * buffers, assuming that no write buffer is used. Each read buffer has its own
     * filter configuration (see BrickletCANV2::setReadFilterConfiguration()).
     * 
     * A valid queue configuration fulfills these conditions::
     * 
     *  write_buffer_size + abs(read_buffer_size_0) + abs(read_buffer_size_1) + ... + abs(read_buffer_size_31) <= 32
     *  write_backlog_size + read_backlog_size <= 768
     * 
     * The write buffer timeout has three different modes that define how a failed
     * frame transmission should be handled:
     * 
     * * Single-Shot (< 0): Only one transmission attempt will be made. If the
     *   transmission fails then the frame is discarded.
     * * Infinite (= 0): Infinite transmission attempts will be made. The frame will
     *   never be discarded.
     * * Milliseconds (> 0): A limited number of transmission attempts will be made.
     *   If the frame could not be transmitted successfully after the configured
     *   number of milliseconds then the frame is discarded.
     * 
     * The current content of the queues is lost when this function is called.
     * 
     * @param int $write_buffer_size
     * @param int $write_buffer_timeout
     * @param int $write_backlog_size
     * @param int[] $read_buffer_sizes
     * @param int $read_backlog_size
     * 
     * @return void
     */
    public function setQueueConfiguration($write_buffer_size, $write_buffer_timeout, $write_backlog_size, $read_buffer_sizes, $read_backlog_size)
    {
        $read_buffer_sizes_length = count($read_buffer_sizes);
        $read_buffer_sizes_data = $read_buffer_sizes;

        if ($read_buffer_sizes_length > 32) {
            throw new \InvalidArgumentException('Read Buffer Sizes can be at most 32 items long');
        }

        if ($read_buffer_sizes_length < 32) {
            $read_buffer_sizes_data = array_pad($read_buffer_sizes_data, 32, 0);
        }

        return $this->setQueueConfigurationLowLevel($write_buffer_size, $write_buffer_timeout, $write_backlog_size, $read_buffer_sizes_length, $read_buffer_sizes_data, $read_backlog_size);
    }

    /**
     * Returns the queue configuration as set by BrickletCANV2::setQueueConfiguration().
     * 
     * 
     * @return array
     */
    public function getQueueConfiguration()
    {
        $ret = $this->getQueueConfigurationLowLevel();

        return array('write_buffer_size' => $ret['write_buffer_size'], 'write_buffer_timeout' => $ret['write_buffer_timeout'], 'write_backlog_size' => $ret['write_backlog_size'], 'read_buffer_sizes' => array_slice($ret['read_buffer_sizes_data'], 0, $ret['read_buffer_sizes_length']), 'read_backlog_size' => $ret['read_backlog_size']);
    }

    /**
     * Returns information about different kinds of errors.
     * 
     * The write and read error levels indicate the current level of stuffing, form,
     * acknowledgement, bit and checksum errors during CAN bus write and read
     * operations. For each of this error kinds there is also an individual counter.
     * 
     * When the write error level extends 255 then the CAN transceiver gets disabled
     * and no frames can be transmitted or received anymore. The CAN transceiver will
     * automatically be activated again after the CAN bus is idle for a while.
     * 
     * The write buffer timeout, read buffer and backlog overflow counts represents the
     * number of these errors:
     * 
     * * A write buffer timeout occurs if a frame could not be transmitted before the
     *   configured write buffer timeout expired (see BrickletCANV2::setQueueConfiguration()).
     * * A read buffer overflow occurs if a read buffer of the CAN transceiver
     *   still contains the last received frame when the next frame arrives. In this
     *   case the last received frame is lost. This happens if the CAN transceiver
     *   receives more frames than the Bricklet can handle. Using the read filter
     *   (see BrickletCANV2::setReadFilterConfiguration()) can help to reduce the amount of
     *   received frames. This count is not exact, but a lower bound, because the
     *   Bricklet might not able detect all overflows if they occur in rapid succession.
     * * A read backlog overflow occurs if the read backlog of the Bricklet is already
     *   full when the next frame should be read from a read buffer of the CAN
     *   transceiver. In this case the frame in the read buffer is lost. This
     *   happens if the CAN transceiver receives more frames to be added to the read
     *   backlog than are removed from the read backlog using the BrickletCANV2::readFrame()
     *   function. Using the BrickletCANV2::CALLBACK_FRAME_READ callback ensures that the read backlog
     *   can not overflow.
     * 
     * The read buffer overflow counter counts the overflows of all configured read
     * buffers. Which read buffer exactly suffered from an overflow can be figured
     * out from the read buffer overflow occurrence list
     * (``read_buffer_overflow_error_occurred``). Reading the error log clears the
     * occurence list.
     * 
     * 
     * @return array
     */
    public function getErrorLog()
    {
        $ret = $this->getErrorLogLowLevel();

        return array('transceiver_state' => $ret['transceiver_state'], 'transceiver_write_error_level' => $ret['transceiver_write_error_level'], 'transceiver_read_error_level' => $ret['transceiver_read_error_level'], 'transceiver_stuffing_error_count' => $ret['transceiver_stuffing_error_count'], 'transceiver_format_error_count' => $ret['transceiver_format_error_count'], 'transceiver_ack_error_count' => $ret['transceiver_ack_error_count'], 'transceiver_bit1_error_count' => $ret['transceiver_bit1_error_count'], 'transceiver_bit0_error_count' => $ret['transceiver_bit0_error_count'], 'transceiver_crc_error_count' => $ret['transceiver_crc_error_count'], 'write_buffer_timeout_error_count' => $ret['write_buffer_timeout_error_count'], 'read_buffer_overflow_error_count' => $ret['read_buffer_overflow_error_count'], 'read_buffer_overflow_error_occurred' => array_slice($ret['read_buffer_overflow_error_occurred_data'], 0, $ret['read_buffer_overflow_error_occurred_length']), 'read_backlog_overflow_error_count' => $ret['read_backlog_overflow_error_count']);
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
    public function callbackWrapperFrameReadLowLevel($data)
    {
        $payload = unpack('C1frame_type/V1identifier/C1data_length/C15data_data', $data);
        $payload['identifier'] = IPConnection::fixUnpackedUInt32($payload, 'identifier');
        $payload['data_data'] = IPConnection::collectUnpackedArray($payload, 'data_data', 15);

        if (array_key_exists(self::CALLBACK_FRAME_READ, $this->registered_callbacks)) {
            $payload['$data'] = array_slice($payload['data_data'], 0, $payload['data_length']);
            $function = $this->registered_callbacks[self::CALLBACK_FRAME_READ];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_FRAME_READ];

            call_user_func($function, $payload['frame_type'], $payload['identifier'], $payload['data'], $user_data);
        }

        if (array_key_exists(self::CALLBACK_FRAME_READ_LOW_LEVEL, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_FRAME_READ_LOW_LEVEL];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_FRAME_READ_LOW_LEVEL];

            call_user_func($function, $payload['frame_type'], $payload['identifier'], $payload['data_length'], $payload['data_data'], $user_data);
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

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperErrorOccurred($data)
    {

        if (array_key_exists(self::CALLBACK_ERROR_OCCURRED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_ERROR_OCCURRED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_ERROR_OCCURRED];

            call_user_func($function, $user_data);
        }
    }
}

?>
