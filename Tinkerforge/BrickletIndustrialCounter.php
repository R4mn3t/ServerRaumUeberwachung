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
 * 4 channel counter up to 4MHz
 */
class BrickletIndustrialCounter extends Device
{

    /**
     * This callback is triggered periodically according to the configuration set by
     * BrickletIndustrialCounter::setAllCounterCallbackConfiguration().
     * 
     * The parameters are the same as BrickletIndustrialCounter::getAllCounter().
     */
    const CALLBACK_ALL_COUNTER = 19;

    /**
     * This callback is triggered periodically according to the configuration set by
     * BrickletIndustrialCounter::setAllSignalDataCallbackConfiguration().
     * 
     * The parameters are the same as BrickletIndustrialCounter::getAllSignalData().
     */
    const CALLBACK_ALL_SIGNAL_DATA = 20;


    /**
     * @internal
     */
    const FUNCTION_GET_COUNTER = 1;

    /**
     * @internal
     */
    const FUNCTION_GET_ALL_COUNTER = 2;

    /**
     * @internal
     */
    const FUNCTION_SET_COUNTER = 3;

    /**
     * @internal
     */
    const FUNCTION_SET_ALL_COUNTER = 4;

    /**
     * @internal
     */
    const FUNCTION_GET_SIGNAL_DATA = 5;

    /**
     * @internal
     */
    const FUNCTION_GET_ALL_SIGNAL_DATA = 6;

    /**
     * @internal
     */
    const FUNCTION_SET_COUNTER_ACTIVE = 7;

    /**
     * @internal
     */
    const FUNCTION_SET_ALL_COUNTER_ACTIVE = 8;

    /**
     * @internal
     */
    const FUNCTION_GET_COUNTER_ACTIVE = 9;

    /**
     * @internal
     */
    const FUNCTION_GET_ALL_COUNTER_ACTIVE = 10;

    /**
     * @internal
     */
    const FUNCTION_SET_COUNTER_CONFIGURATION = 11;

    /**
     * @internal
     */
    const FUNCTION_GET_COUNTER_CONFIGURATION = 12;

    /**
     * @internal
     */
    const FUNCTION_SET_ALL_COUNTER_CALLBACK_CONFIGURATION = 13;

    /**
     * @internal
     */
    const FUNCTION_GET_ALL_COUNTER_CALLBACK_CONFIGURATION = 14;

    /**
     * @internal
     */
    const FUNCTION_SET_ALL_SIGNAL_DATA_CALLBACK_CONFIGURATION = 15;

    /**
     * @internal
     */
    const FUNCTION_GET_ALL_SIGNAL_DATA_CALLBACK_CONFIGURATION = 16;

    /**
     * @internal
     */
    const FUNCTION_SET_CHANNEL_LED_CONFIG = 17;

    /**
     * @internal
     */
    const FUNCTION_GET_CHANNEL_LED_CONFIG = 18;

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

    const CHANNEL_0 = 0;
    const CHANNEL_1 = 1;
    const CHANNEL_2 = 2;
    const CHANNEL_3 = 3;
    const COUNT_EDGE_RISING = 0;
    const COUNT_EDGE_FALLING = 1;
    const COUNT_EDGE_BOTH = 2;
    const COUNT_DIRECTION_UP = 0;
    const COUNT_DIRECTION_DOWN = 1;
    const COUNT_DIRECTION_EXTERNAL_UP = 2;
    const COUNT_DIRECTION_EXTERNAL_DOWN = 3;
    const DUTY_CYCLE_PRESCALER_1 = 0;
    const DUTY_CYCLE_PRESCALER_2 = 1;
    const DUTY_CYCLE_PRESCALER_4 = 2;
    const DUTY_CYCLE_PRESCALER_8 = 3;
    const DUTY_CYCLE_PRESCALER_16 = 4;
    const DUTY_CYCLE_PRESCALER_32 = 5;
    const DUTY_CYCLE_PRESCALER_64 = 6;
    const DUTY_CYCLE_PRESCALER_128 = 7;
    const DUTY_CYCLE_PRESCALER_256 = 8;
    const DUTY_CYCLE_PRESCALER_512 = 9;
    const DUTY_CYCLE_PRESCALER_1024 = 10;
    const DUTY_CYCLE_PRESCALER_2048 = 11;
    const DUTY_CYCLE_PRESCALER_4096 = 12;
    const DUTY_CYCLE_PRESCALER_8192 = 13;
    const DUTY_CYCLE_PRESCALER_16384 = 14;
    const DUTY_CYCLE_PRESCALER_32768 = 15;
    const FREQUENCY_INTEGRATION_TIME_128_MS = 0;
    const FREQUENCY_INTEGRATION_TIME_256_MS = 1;
    const FREQUENCY_INTEGRATION_TIME_512_MS = 2;
    const FREQUENCY_INTEGRATION_TIME_1024_MS = 3;
    const FREQUENCY_INTEGRATION_TIME_2048_MS = 4;
    const FREQUENCY_INTEGRATION_TIME_4096_MS = 5;
    const FREQUENCY_INTEGRATION_TIME_8192_MS = 6;
    const FREQUENCY_INTEGRATION_TIME_16384_MS = 7;
    const FREQUENCY_INTEGRATION_TIME_32768_MS = 8;
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

    const DEVICE_IDENTIFIER = 293;

    const DEVICE_DISPLAY_NAME = 'Industrial Counter Bricklet';

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

        $this->response_expected[self::FUNCTION_GET_COUNTER] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_ALL_COUNTER] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_COUNTER] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_SET_ALL_COUNTER] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_SIGNAL_DATA] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_ALL_SIGNAL_DATA] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_COUNTER_ACTIVE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_SET_ALL_COUNTER_ACTIVE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_COUNTER_ACTIVE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_ALL_COUNTER_ACTIVE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_COUNTER_CONFIGURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_COUNTER_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ALL_COUNTER_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_ALL_COUNTER_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ALL_SIGNAL_DATA_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_ALL_SIGNAL_DATA_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
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

        $this->callback_wrappers[self::CALLBACK_ALL_COUNTER] = array(40, 'callbackWrapperAllCounter');
        $this->callback_wrappers[self::CALLBACK_ALL_SIGNAL_DATA] = array(65, 'callbackWrapperAllSignalData');

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
     * Returns the current counter value for the given channel.
     * 
     * @param int $channel
     * 
     * @return int
     */
    public function getCounter($channel)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $channel);

        $data = $this->sendRequest(self::FUNCTION_GET_COUNTER, $payload, 16);

        $payload = unpack('C8counter', $data);

        return IPConnection::fixUnpackedInt64($payload, 'counter');
    }

    /**
     * Returns the current counter values for all four channels.
     * 
     * 
     * @return array
     */
    public function getAllCounter()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ALL_COUNTER, $payload, 40);

        $payload = unpack('C8counterA/C8counterB/C8counterC/C8counterD', $data);

        return IPConnection::collectUnpackedInt64Array($payload, 'counter', 4);
    }

    /**
     * Sets the counter value for the given channel.
     * 
     * The default value for the counters on startup is 0.
     * 
     * @param int $channel
     * @param int $counter
     * 
     * @return void
     */
    public function setCounter($channel, $counter)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $channel);
        $payload .= Base256::encodeAndPackInt64($counter, 8);

        $this->sendRequest(self::FUNCTION_SET_COUNTER, $payload, 0);
    }

    /**
     * Sets the counter values for all four channels.
     * 
     * The default value for the counters on startup is 0.
     * 
     * @param int[] $counter
     * 
     * @return void
     */
    public function setAllCounter($counter)
    {
        $this->checkValidity();

        $payload = '';
        for ($i = 0; $i < 4; $i++) {
            $payload .= Base256::encodeAndPackInt64($counter[$i], 8);
        }

        $this->sendRequest(self::FUNCTION_SET_ALL_COUNTER, $payload, 0);
    }

    /**
     * Returns the signal data (duty cycle, period, frequency and value) for the
     * given channel.
     * 
     * @param int $channel
     * 
     * @return array
     */
    public function getSignalData($channel)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('C', $channel);

        $data = $this->sendRequest(self::FUNCTION_GET_SIGNAL_DATA, $payload, 23);

        $payload = unpack('v1duty_cycle/C8period/V1frequency/C1value', $data);

        $ret['duty_cycle'] = $payload['duty_cycle'];
        $ret['period'] = IPConnection::fixUnpackedUInt64($payload, 'period');
        $ret['frequency'] = IPConnection::fixUnpackedUInt32($payload, 'frequency');
        $ret['value'] = (bool)$payload['value'];

        return $ret;
    }

    /**
     * Returns the signal data (duty cycle, period, frequency and value) for all four
     * channels.
     * 
     * 
     * @return array
     */
    public function getAllSignalData()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ALL_SIGNAL_DATA, $payload, 65);

        $payload = unpack('v4duty_cycle/C8periodA/C8periodB/C8periodC/C8periodD/V4frequency/C1value', $data);

        $ret['duty_cycle'] = IPConnection::collectUnpackedArray($payload, 'duty_cycle', 4);
        $ret['period'] = IPConnection::collectUnpackedUInt64Array($payload, 'period', 4);
        $ret['frequency'] = IPConnection::collectUnpackedUInt32Array($payload, 'frequency', 4);
        $ret['value'] = IPConnection::collectUnpackedBoolArray($payload, 'value', 4);

        return $ret;
    }

    /**
     * Activates/deactivates the counter of the given channel.
     * 
     * true = activate, false = deactivate.
     * 
     * By default all channels are activated.
     * 
     * @param int $channel
     * @param bool $active
     * 
     * @return void
     */
    public function setCounterActive($channel, $active)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $channel);
        $payload .= pack('C', intval((bool)$active));

        $this->sendRequest(self::FUNCTION_SET_COUNTER_ACTIVE, $payload, 0);
    }

    /**
     * Activates/deactivates the counter of all four channels.
     * 
     * true = activate, false = deactivate.
     * 
     * By default all channels are activated.
     * 
     * @param bool[] $active
     * 
     * @return void
     */
    public function setAllCounterActive($active)
    {
        $this->checkValidity();

        $payload = '';
        $active_bits = array_fill(0, 1, 0);
        for ($i = 0; $i < 4; $i++) {
            if((bool)$active[$i]) {
              $active_bits[$i / 8] |= 1 << ($i % 8);
            }
        }
        for ($i = 0; $i < 1; $i++) {
          $payload .= pack('C', intval($active_bits[$i]));
        }

        $this->sendRequest(self::FUNCTION_SET_ALL_COUNTER_ACTIVE, $payload, 0);
    }

    /**
     * Returns the activation state of the given channel.
     * 
     * true = activated, false = deactivated.
     * 
     * @param int $channel
     * 
     * @return bool
     */
    public function getCounterActive($channel)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $channel);

        $data = $this->sendRequest(self::FUNCTION_GET_COUNTER_ACTIVE, $payload, 9);

        $payload = unpack('C1active', $data);

        return (bool)$payload['active'];
    }

    /**
     * Returns the activation state of all four channels.
     * 
     * true = activated, false = deactivated.
     * 
     * 
     * @return array
     */
    public function getAllCounterActive()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ALL_COUNTER_ACTIVE, $payload, 9);

        $payload = unpack('C1active', $data);

        return IPConnection::collectUnpackedBoolArray($payload, 'active', 4);
    }

    /**
     * Sets the counter configuration for the given channel.
     * 
     * * Count Edge: Counter can count on rising, falling or both edges.
     * * Count Direction: Counter can count up or down. You can also use
     *   another channel as direction input, see
     *   `here <https://www.tinkerforge.com/en/doc/Hardware/Bricklets/Industrial_Counter.html#external-count-direction>`__
     *   for details.
     * * Duty Cycle Prescaler: Sets a divider for the internal clock. See
     *   `here <https://www.tinkerforge.com/en/doc/Hardware/Bricklets/Industrial_Counter.html#duty-cycle-prescaler-and-frequency-integration-time>`__
     *   for details.
     * * Frequency Integration Time: Sets the integration time for the
     *   frequency measurement. See
     *   `here <https://www.tinkerforge.com/en/doc/Hardware/Bricklets/Industrial_Counter.html#duty-cycle-prescaler-and-frequency-integration-time>`__
     *   for details.
     * 
     * @param int $channel
     * @param int $count_edge
     * @param int $count_direction
     * @param int $duty_cycle_prescaler
     * @param int $frequency_integration_time
     * 
     * @return void
     */
    public function setCounterConfiguration($channel, $count_edge, $count_direction, $duty_cycle_prescaler, $frequency_integration_time)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $channel);
        $payload .= pack('C', $count_edge);
        $payload .= pack('C', $count_direction);
        $payload .= pack('C', $duty_cycle_prescaler);
        $payload .= pack('C', $frequency_integration_time);

        $this->sendRequest(self::FUNCTION_SET_COUNTER_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the counter configuration as set by BrickletIndustrialCounter::setCounterConfiguration().
     * 
     * @param int $channel
     * 
     * @return array
     */
    public function getCounterConfiguration($channel)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('C', $channel);

        $data = $this->sendRequest(self::FUNCTION_GET_COUNTER_CONFIGURATION, $payload, 12);

        $payload = unpack('C1count_edge/C1count_direction/C1duty_cycle_prescaler/C1frequency_integration_time', $data);

        $ret['count_edge'] = $payload['count_edge'];
        $ret['count_direction'] = $payload['count_direction'];
        $ret['duty_cycle_prescaler'] = $payload['duty_cycle_prescaler'];
        $ret['frequency_integration_time'] = $payload['frequency_integration_time'];

        return $ret;
    }

    /**
     * The period is the period with which the BrickletIndustrialCounter::CALLBACK_ALL_COUNTER
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
    public function setAllCounterCallbackConfiguration($period, $value_has_to_change)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);
        $payload .= pack('C', intval((bool)$value_has_to_change));

        $this->sendRequest(self::FUNCTION_SET_ALL_COUNTER_CALLBACK_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the callback configuration as set by
     * BrickletIndustrialCounter::setAllCounterCallbackConfiguration().
     * 
     * 
     * @return array
     */
    public function getAllCounterCallbackConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ALL_COUNTER_CALLBACK_CONFIGURATION, $payload, 13);

        $payload = unpack('V1period/C1value_has_to_change', $data);

        $ret['period'] = IPConnection::fixUnpackedUInt32($payload, 'period');
        $ret['value_has_to_change'] = (bool)$payload['value_has_to_change'];

        return $ret;
    }

    /**
     * The period is the period with which the BrickletIndustrialCounter::CALLBACK_ALL_SIGNAL_DATA
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
    public function setAllSignalDataCallbackConfiguration($period, $value_has_to_change)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);
        $payload .= pack('C', intval((bool)$value_has_to_change));

        $this->sendRequest(self::FUNCTION_SET_ALL_SIGNAL_DATA_CALLBACK_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the callback configuration as set by
     * BrickletIndustrialCounter::setAllSignalDataCallbackConfiguration().
     * 
     * 
     * @return array
     */
    public function getAllSignalDataCallbackConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ALL_SIGNAL_DATA_CALLBACK_CONFIGURATION, $payload, 13);

        $payload = unpack('V1period/C1value_has_to_change', $data);

        $ret['period'] = IPConnection::fixUnpackedUInt32($payload, 'period');
        $ret['value_has_to_change'] = (bool)$payload['value_has_to_change'];

        return $ret;
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
     * Returns the channel LED configuration as set by BrickletIndustrialCounter::setChannelLEDConfig()
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
     * Returns the current bootloader mode, see BrickletIndustrialCounter::setBootloaderMode().
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
     * Sets the firmware pointer for BrickletIndustrialCounter::writeFirmware(). The pointer has
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
     * BrickletIndustrialCounter::setWriteFirmwarePointer() before. The firmware is written
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
     * Returns the configuration as set by BrickletIndustrialCounter::setStatusLEDConfig()
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
    public function callbackWrapperAllCounter($data)
    {
        $payload = unpack('C8counterA/C8counterB/C8counterC/C8counterD', $data);
        $payload['counter'] = IPConnection::collectUnpackedInt64Array($payload, 'counter', 4);

        if (array_key_exists(self::CALLBACK_ALL_COUNTER, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_ALL_COUNTER];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_ALL_COUNTER];

            call_user_func($function, $payload['counter'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperAllSignalData($data)
    {
        $payload = unpack('v4duty_cycle/C8periodA/C8periodB/C8periodC/C8periodD/V4frequency/C1value', $data);
        $payload['duty_cycle'] = IPConnection::collectUnpackedArray($payload, 'duty_cycle', 4);
        $payload['period'] = IPConnection::collectUnpackedUInt64Array($payload, 'period', 4);
        $payload['frequency'] = IPConnection::collectUnpackedUInt32Array($payload, 'frequency', 4);
        $payload['value'] = IPConnection::collectUnpackedBoolArray($payload, 'value', 4);

        if (array_key_exists(self::CALLBACK_ALL_SIGNAL_DATA, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_ALL_SIGNAL_DATA];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_ALL_SIGNAL_DATA];

            call_user_func($function, $payload['duty_cycle'], $payload['period'], $payload['frequency'], $payload['value'], $user_data);
        }
    }
}

?>
