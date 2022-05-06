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
 * 4 galvanically isolated solid state relays
 */
class BrickletIndustrialQuadRelayV2 extends Device
{

    /**
     * This callback is triggered whenever a monoflop timer reaches 0. The
     * parameters contain the channel and the current value of the channel
     * (the value after the monoflop).
     */
    const CALLBACK_MONOFLOP_DONE = 8;


    /**
     * @internal
     */
    const FUNCTION_SET_VALUE = 1;

    /**
     * @internal
     */
    const FUNCTION_GET_VALUE = 2;

    /**
     * @internal
     */
    const FUNCTION_SET_MONOFLOP = 3;

    /**
     * @internal
     */
    const FUNCTION_GET_MONOFLOP = 4;

    /**
     * @internal
     */
    const FUNCTION_SET_SELECTED_VALUE = 5;

    /**
     * @internal
     */
    const FUNCTION_SET_CHANNEL_LED_CONFIG = 6;

    /**
     * @internal
     */
    const FUNCTION_GET_CHANNEL_LED_CONFIG = 7;

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

    const CHANNEL_LED_CONFIG_OFF = 0;
    const CHANNEL_LED_CONFIG_ON = 1;
    const CHANNEL_LED_CONFIG_SHOW_HEARTBEAT = 2;
    const CHANNEL_LED_CONFIG_SHOW_CHANNEL_STATUS = 3;
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

    const DEVICE_IDENTIFIER = 2102;

    const DEVICE_DISPLAY_NAME = 'Industrial Quad Relay Bricklet 2.0';

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

        $this->response_expected[self::FUNCTION_SET_VALUE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_VALUE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_MONOFLOP] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_MONOFLOP] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_SELECTED_VALUE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_SET_CHANNEL_LED_CONFIG] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_CHANNEL_LED_CONFIG] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
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

        $this->callback_wrappers[self::CALLBACK_MONOFLOP_DONE] = array(10, 'callbackWrapperMonoflopDone');

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
     * Sets the value of all four relays. A value of *true* closes the
     * relay and a value of *false* opens the relay.
     * 
     * Use BrickletIndustrialQuadRelayV2::setSelectedValue() to only change one relay.
     * 
     * All running monoflop timers will be aborted if this function is called.
     * 
     * @param bool[] $value
     * 
     * @return void
     */
    public function setValue($value)
    {
        $this->checkValidity();

        $payload = '';
        $value_bits = array_fill(0, 1, 0);
        for ($i = 0; $i < 4; $i++) {
            if((bool)$value[$i]) {
              $value_bits[$i / 8] |= 1 << ($i % 8);
            }
        }
        for ($i = 0; $i < 1; $i++) {
          $payload .= pack('C', intval($value_bits[$i]));
        }

        $this->sendRequest(self::FUNCTION_SET_VALUE, $payload, 0);
    }

    /**
     * Returns the values as set by BrickletIndustrialQuadRelayV2::setValue().
     * 
     * 
     * @return array
     */
    public function getValue()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_VALUE, $payload, 9);

        $payload = unpack('C1value', $data);

        return IPConnection::collectUnpackedBoolArray($payload, 'value', 4);
    }

    /**
     * Configures a monoflop of the specified channel.
     * 
     * The second parameter is the desired value of the specified
     * channel. A *true* means relay closed and a *false* means relay open.
     * 
     * The third parameter indicates the time that the channels should hold
     * the value.
     * 
     * If this function is called with the parameters (0, 1, 1500) channel 0 will
     * close and in 1.5s channel 0 will open again
     * 
     * A monoflop can be used as a fail-safe mechanism. For example: Lets assume you
     * have a RS485 bus and a Industrial Quad Relay Bricklet 2.0 connected to one of
     * the slave stacks. You can now call this function every second, with a time
     * parameter of two seconds and channel 0 closed. Channel 0 will be closed all the
     * time. If now the RS485 connection is lost, then channel 0 will be opened in at
     * most two seconds.
     * 
     * @param int $channel
     * @param bool $value
     * @param int $time
     * 
     * @return void
     */
    public function setMonoflop($channel, $value, $time)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $channel);
        $payload .= pack('C', intval((bool)$value));
        $payload .= pack('V', $time);

        $this->sendRequest(self::FUNCTION_SET_MONOFLOP, $payload, 0);
    }

    /**
     * Returns (for the given channel) the current value and the time as set by
     * BrickletIndustrialQuadRelayV2::setMonoflop() as well as the remaining time until the value flips.
     * 
     * If the timer is not running currently, the remaining time will be returned
     * as 0.
     * 
     * @param int $channel
     * 
     * @return array
     */
    public function getMonoflop($channel)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('C', $channel);

        $data = $this->sendRequest(self::FUNCTION_GET_MONOFLOP, $payload, 17);

        $payload = unpack('C1value/V1time/V1time_remaining', $data);

        $ret['value'] = (bool)$payload['value'];
        $ret['time'] = IPConnection::fixUnpackedUInt32($payload, 'time');
        $ret['time_remaining'] = IPConnection::fixUnpackedUInt32($payload, 'time_remaining');

        return $ret;
    }

    /**
     * Sets the output value of the specified channel without affecting the other
     * channels.
     * 
     * A running monoflop timer for the specified channel will be aborted if this
     * function is called.
     * 
     * @param int $channel
     * @param bool $value
     * 
     * @return void
     */
    public function setSelectedValue($channel, $value)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $channel);
        $payload .= pack('C', intval((bool)$value));

        $this->sendRequest(self::FUNCTION_SET_SELECTED_VALUE, $payload, 0);
    }

    /**
     * Each channel has a corresponding LED. You can turn the LED off, on or show a
     * heartbeat. You can also set the LED to "Channel Status". In this mode the
     * LED is on if the channel is high and off otherwise.
     * 
     * @param int $channel
     * @param int $config
     * 
     * @return void
     */
    public function setChannelLEDConfig($channel, $config)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $channel);
        $payload .= pack('C', $config);

        $this->sendRequest(self::FUNCTION_SET_CHANNEL_LED_CONFIG, $payload, 0);
    }

    /**
     * Returns the channel LED configuration as set by BrickletIndustrialQuadRelayV2::setChannelLEDConfig()
     * 
     * @param int $channel
     * 
     * @return int
     */
    public function getChannelLEDConfig($channel)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $channel);

        $data = $this->sendRequest(self::FUNCTION_GET_CHANNEL_LED_CONFIG, $payload, 9);

        $payload = unpack('C1config', $data);

        return $payload['config'];
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
     * Returns the current bootloader mode, see BrickletIndustrialQuadRelayV2::setBootloaderMode().
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
     * Sets the firmware pointer for BrickletIndustrialQuadRelayV2::writeFirmware(). The pointer has
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
     * BrickletIndustrialQuadRelayV2::setWriteFirmwarePointer() before. The firmware is written
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
     * Returns the configuration as set by BrickletIndustrialQuadRelayV2::setStatusLEDConfig()
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
    public function callbackWrapperMonoflopDone($data)
    {
        $payload = unpack('C1channel/C1value', $data);
        $payload['value'] = (bool)$payload['value'];

        if (array_key_exists(self::CALLBACK_MONOFLOP_DONE, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_MONOFLOP_DONE];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_MONOFLOP_DONE];

            call_user_func($function, $payload['channel'], $payload['value'], $user_data);
        }
    }
}

?>
