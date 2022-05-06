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
 * Four 7-segment displays with switchable dots
 */
class BrickletSegmentDisplay4x7V2 extends Device
{

    /**
     * This callback is triggered when the counter (see BrickletSegmentDisplay4x7V2::startCounter()) is
     * finished.
     */
    const CALLBACK_COUNTER_FINISHED = 10;


    /**
     * @internal
     */
    const FUNCTION_SET_SEGMENTS = 1;

    /**
     * @internal
     */
    const FUNCTION_GET_SEGMENTS = 2;

    /**
     * @internal
     */
    const FUNCTION_SET_BRIGHTNESS = 3;

    /**
     * @internal
     */
    const FUNCTION_GET_BRIGHTNESS = 4;

    /**
     * @internal
     */
    const FUNCTION_SET_NUMERIC_VALUE = 5;

    /**
     * @internal
     */
    const FUNCTION_SET_SELECTED_SEGMENT = 6;

    /**
     * @internal
     */
    const FUNCTION_GET_SELECTED_SEGMENT = 7;

    /**
     * @internal
     */
    const FUNCTION_START_COUNTER = 8;

    /**
     * @internal
     */
    const FUNCTION_GET_COUNTER_VALUE = 9;

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

    const DEVICE_IDENTIFIER = 2137;

    const DEVICE_DISPLAY_NAME = 'Segment Display 4x7 Bricklet 2.0';

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

        $this->response_expected[self::FUNCTION_SET_SEGMENTS] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_SEGMENTS] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_BRIGHTNESS] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_BRIGHTNESS] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_NUMERIC_VALUE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_SET_SELECTED_SEGMENT] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_SELECTED_SEGMENT] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_START_COUNTER] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_COUNTER_VALUE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
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

        $this->callback_wrappers[self::CALLBACK_COUNTER_FINISHED] = array(8, 'callbackWrapperCounterFinished');

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
     * Sets the segments of the Segment Display 4x7 Bricklet 2.0 segment-by-segment.
     * 
     * The data is split into the four digits, two colon dots and the tick mark.
     * 
     * The indices of the segments in the digit and colon parameters are as follows:
     * 
     * .. image:: /Images/Bricklets/bricklet_segment_display_4x7_v2_segment_index.png
     *    :scale: 100 %
     *    :alt: Indices of segments
     *    :align: center
     * 
     * @param bool[] $digit0
     * @param bool[] $digit1
     * @param bool[] $digit2
     * @param bool[] $digit3
     * @param bool[] $colon
     * @param bool $tick
     * 
     * @return void
     */
    public function setSegments($digit0, $digit1, $digit2, $digit3, $colon, $tick)
    {
        $this->checkValidity();

        $payload = '';
        $digit0_bits = array_fill(0, 1, 0);
        for ($i = 0; $i < 8; $i++) {
            if((bool)$digit0[$i]) {
              $digit0_bits[$i / 8] |= 1 << ($i % 8);
            }
        }
        for ($i = 0; $i < 1; $i++) {
          $payload .= pack('C', intval($digit0_bits[$i]));
        }
        $digit1_bits = array_fill(0, 1, 0);
        for ($i = 0; $i < 8; $i++) {
            if((bool)$digit1[$i]) {
              $digit1_bits[$i / 8] |= 1 << ($i % 8);
            }
        }
        for ($i = 0; $i < 1; $i++) {
          $payload .= pack('C', intval($digit1_bits[$i]));
        }
        $digit2_bits = array_fill(0, 1, 0);
        for ($i = 0; $i < 8; $i++) {
            if((bool)$digit2[$i]) {
              $digit2_bits[$i / 8] |= 1 << ($i % 8);
            }
        }
        for ($i = 0; $i < 1; $i++) {
          $payload .= pack('C', intval($digit2_bits[$i]));
        }
        $digit3_bits = array_fill(0, 1, 0);
        for ($i = 0; $i < 8; $i++) {
            if((bool)$digit3[$i]) {
              $digit3_bits[$i / 8] |= 1 << ($i % 8);
            }
        }
        for ($i = 0; $i < 1; $i++) {
          $payload .= pack('C', intval($digit3_bits[$i]));
        }
        $colon_bits = array_fill(0, 1, 0);
        for ($i = 0; $i < 2; $i++) {
            if((bool)$colon[$i]) {
              $colon_bits[$i / 8] |= 1 << ($i % 8);
            }
        }
        for ($i = 0; $i < 1; $i++) {
          $payload .= pack('C', intval($colon_bits[$i]));
        }
        $payload .= pack('C', intval((bool)$tick));

        $this->sendRequest(self::FUNCTION_SET_SEGMENTS, $payload, 0);
    }

    /**
     * Returns the segment data as set by BrickletSegmentDisplay4x7V2::setSegments().
     * 
     * 
     * @return array
     */
    public function getSegments()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_SEGMENTS, $payload, 14);

        $payload = unpack('C1digit0/C1digit1/C1digit2/C1digit3/C1colon/C1tick', $data);

        $ret['digit0'] = IPConnection::collectUnpackedBoolArray($payload, 'digit0', 8);
        $ret['digit1'] = IPConnection::collectUnpackedBoolArray($payload, 'digit1', 8);
        $ret['digit2'] = IPConnection::collectUnpackedBoolArray($payload, 'digit2', 8);
        $ret['digit3'] = IPConnection::collectUnpackedBoolArray($payload, 'digit3', 8);
        $ret['colon'] = IPConnection::collectUnpackedBoolArray($payload, 'colon', 2);
        $ret['tick'] = (bool)$payload['tick'];

        return $ret;
    }

    /**
     * The brightness can be set between 0 (dark) and 7 (bright).
     * 
     * @param int $brightness
     * 
     * @return void
     */
    public function setBrightness($brightness)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $brightness);

        $this->sendRequest(self::FUNCTION_SET_BRIGHTNESS, $payload, 0);
    }

    /**
     * Returns the brightness as set by BrickletSegmentDisplay4x7V2::setBrightness().
     * 
     * 
     * @return int
     */
    public function getBrightness()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_BRIGHTNESS, $payload, 9);

        $payload = unpack('C1brightness', $data);

        return $payload['brightness'];
    }

    /**
     * Sets a numeric value for each of the digits. They represent:
     * 
     * * -2: minus sign
     * * -1: blank
     * * 0-9: 0-9
     * * 10: A
     * * 11: b
     * * 12: C
     * * 13: d
     * * 14: E
     * * 15: F
     * 
     * Example: A call with [-2, -1, 4, 2] will result in a display of "- 42".
     * 
     * @param int[] $value
     * 
     * @return void
     */
    public function setNumericValue($value)
    {
        $this->checkValidity();

        $payload = '';
        for ($i = 0; $i < 4; $i++) {
            $payload .= pack('c', $value[$i]);
        }

        $this->sendRequest(self::FUNCTION_SET_NUMERIC_VALUE, $payload, 0);
    }

    /**
     * Turns one specified segment on or off.
     * 
     * The indices of the segments are as follows:
     * 
     * .. image:: /Images/Bricklets/bricklet_segment_display_4x7_v2_selected_segment_index.png
     *    :scale: 100 %
     *    :alt: Indices of selected segments
     *    :align: center
     * 
     * @param int $segment
     * @param bool $value
     * 
     * @return void
     */
    public function setSelectedSegment($segment, $value)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $segment);
        $payload .= pack('C', intval((bool)$value));

        $this->sendRequest(self::FUNCTION_SET_SELECTED_SEGMENT, $payload, 0);
    }

    /**
     * Returns the value of a single segment.
     * 
     * @param int $segment
     * 
     * @return bool
     */
    public function getSelectedSegment($segment)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $segment);

        $data = $this->sendRequest(self::FUNCTION_GET_SELECTED_SEGMENT, $payload, 9);

        $payload = unpack('C1value', $data);

        return (bool)$payload['value'];
    }

    /**
     * Starts a counter with the *from* value that counts to the *to*
     * value with the each step incremented by *increment*.
     * *length* is the pause between each increment.
     * 
     * Example: If you set *from* to 0, *to* to 100, *increment* to 1 and
     * *length* to 1000, a counter that goes from 0 to 100 with one second
     * pause between each increment will be started.
     * 
     * Using a negative *increment* allows to count backwards.
     * 
     * You can stop the counter at every time by calling BrickletSegmentDisplay4x7V2::setSegments()
     * or BrickletSegmentDisplay4x7V2::setNumericValue().
     * 
     * @param int $value_from
     * @param int $value_to
     * @param int $increment
     * @param int $length
     * 
     * @return void
     */
    public function startCounter($value_from, $value_to, $increment, $length)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $value_from);
        $payload .= pack('v', $value_to);
        $payload .= pack('v', $increment);
        $payload .= pack('V', $length);

        $this->sendRequest(self::FUNCTION_START_COUNTER, $payload, 0);
    }

    /**
     * Returns the counter value that is currently shown on the display.
     * 
     * If there is no counter running a 0 will be returned.
     * 
     * 
     * @return int
     */
    public function getCounterValue()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_COUNTER_VALUE, $payload, 10);

        $payload = unpack('v1value', $data);

        return $payload['value'];
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
     * Returns the current bootloader mode, see BrickletSegmentDisplay4x7V2::setBootloaderMode().
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
     * Sets the firmware pointer for BrickletSegmentDisplay4x7V2::writeFirmware(). The pointer has
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
     * BrickletSegmentDisplay4x7V2::setWriteFirmwarePointer() before. The firmware is written
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
     * Returns the configuration as set by BrickletSegmentDisplay4x7V2::setStatusLEDConfig()
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
    public function callbackWrapperCounterFinished($data)
    {

        if (array_key_exists(self::CALLBACK_COUNTER_FINISHED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_COUNTER_FINISHED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_COUNTER_FINISHED];

            call_user_func($function, $user_data);
        }
    }
}

?>
