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
 * Breakout for Infineon XMC1400 microcontroller
 */
class BrickletXMC1400Breakout extends Device
{

    /**
     * This callback is triggered periodically according to the configuration set by
     * BrickletXMC1400Breakout::setADCValuesCallbackConfiguration().
     * 
     * The parameters are the same as BrickletXMC1400Breakout::getADCValues().
     */
    const CALLBACK_ADC_VALUES = 9;

    /**
     * This callback is triggered periodically according to the configuration set by
     * BrickletXMC1400Breakout::setCountCallbackConfiguration().
     * 
     * The parameter is the same as BrickletXMC1400Breakout::getCount().
     */
    const CALLBACK_COUNT = 13;


    /**
     * @internal
     */
    const FUNCTION_SET_GPIO_CONFIG = 1;

    /**
     * @internal
     */
    const FUNCTION_GET_GPIO_INPUT = 2;

    /**
     * @internal
     */
    const FUNCTION_SET_ADC_CHANNEL_CONFIG = 3;

    /**
     * @internal
     */
    const FUNCTION_GET_ADC_CHANNEL_CONFIG = 4;

    /**
     * @internal
     */
    const FUNCTION_GET_ADC_CHANNEL_VALUE = 5;

    /**
     * @internal
     */
    const FUNCTION_GET_ADC_VALUES = 6;

    /**
     * @internal
     */
    const FUNCTION_SET_ADC_VALUES_CALLBACK_CONFIGURATION = 7;

    /**
     * @internal
     */
    const FUNCTION_GET_ADC_VALUES_CALLBACK_CONFIGURATION = 8;

    /**
     * @internal
     */
    const FUNCTION_GET_COUNT = 10;

    /**
     * @internal
     */
    const FUNCTION_SET_COUNT_CALLBACK_CONFIGURATION = 11;

    /**
     * @internal
     */
    const FUNCTION_GET_COUNT_CALLBACK_CONFIGURATION = 12;

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

    const THRESHOLD_OPTION_OFF = 'x';
    const THRESHOLD_OPTION_OUTSIDE = 'o';
    const THRESHOLD_OPTION_INSIDE = 'i';
    const THRESHOLD_OPTION_SMALLER = '<';
    const THRESHOLD_OPTION_GREATER = '>';
    const GPIO_MODE_INPUT_TRISTATE = 0;
    const GPIO_MODE_INPUT_PULL_DOWN = 1;
    const GPIO_MODE_INPUT_PULL_UP = 2;
    const GPIO_MODE_INPUT_SAMPLING = 3;
    const GPIO_MODE_INPUT_INVERTED_TRISTATE = 4;
    const GPIO_MODE_INPUT_INVERTED_PULL_DOWN = 5;
    const GPIO_MODE_INPUT_INVERTED_PULL_UP = 6;
    const GPIO_MODE_INPUT_INVERTED_SAMPLING = 7;
    const GPIO_MODE_OUTPUT_PUSH_PULL = 8;
    const GPIO_MODE_OUTPUT_OPEN_DRAIN = 9;
    const GPIO_INPUT_HYSTERESIS_STANDARD = 0;
    const GPIO_INPUT_HYSTERESIS_LARGE = 4;
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

    const DEVICE_IDENTIFIER = 279;

    const DEVICE_DISPLAY_NAME = 'XMC1400 Breakout Bricklet';

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

        $this->response_expected[self::FUNCTION_SET_GPIO_CONFIG] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_GPIO_INPUT] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ADC_CHANNEL_CONFIG] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_ADC_CHANNEL_CONFIG] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_ADC_CHANNEL_VALUE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_ADC_VALUES] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ADC_VALUES_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_ADC_VALUES_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_COUNT] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_COUNT_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_COUNT_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
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

        $this->callback_wrappers[self::CALLBACK_ADC_VALUES] = array(24, 'callbackWrapperADCValues');
        $this->callback_wrappers[self::CALLBACK_COUNT] = array(12, 'callbackWrapperCount');

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
     * Example for a setter function. The values are the values that can be given to
     * the XMC_GPIO_Init function. See communication.c in the firmware.
     * 
     * @param int $port
     * @param int $pin
     * @param int $mode
     * @param int $input_hysteresis
     * @param bool $output_level
     * 
     * @return void
     */
    public function setGPIOConfig($port, $pin, $mode, $input_hysteresis, $output_level)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $port);
        $payload .= pack('C', $pin);
        $payload .= pack('C', $mode);
        $payload .= pack('C', $input_hysteresis);
        $payload .= pack('C', intval((bool)$output_level));

        $this->sendRequest(self::FUNCTION_SET_GPIO_CONFIG, $payload, 0);
    }

    /**
     * Example for a getter function. Returns the result of a
     * XMC_GPIO_GetInput call for the given port/pin.
     * 
     * @param int $port
     * @param int $pin
     * 
     * @return bool
     */
    public function getGPIOInput($port, $pin)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $port);
        $payload .= pack('C', $pin);

        $data = $this->sendRequest(self::FUNCTION_GET_GPIO_INPUT, $payload, 9);

        $payload = unpack('C1value', $data);

        return (bool)$payload['value'];
    }

    /**
     * Enables a ADC channel for the ADC driver example (adc.c/adc.h).
     * 
     * There are 8 ADC channels and they correspond to the following pins:
     * 
     * * Channel 0: P2_6
     * * Channel 1: P2_8
     * * Channel 2: P2_9
     * * Channel 3: P2_10
     * * Channel 4: P2_11
     * * Channel 5: P2_0
     * * Channel 6: P2_1
     * * Channel 7: P2_2
     * 
     * @param int $channel
     * @param bool $enable
     * 
     * @return void
     */
    public function setADCChannelConfig($channel, $enable)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $channel);
        $payload .= pack('C', intval((bool)$enable));

        $this->sendRequest(self::FUNCTION_SET_ADC_CHANNEL_CONFIG, $payload, 0);
    }

    /**
     * Returns the config for the given channel as set by BrickletXMC1400Breakout::setADCChannelConfig().
     * 
     * @param int $channel
     * 
     * @return bool
     */
    public function getADCChannelConfig($channel)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $channel);

        $data = $this->sendRequest(self::FUNCTION_GET_ADC_CHANNEL_CONFIG, $payload, 9);

        $payload = unpack('C1enable', $data);

        return (bool)$payload['enable'];
    }

    /**
     * Returns the 12-bit value of the given ADC channel of the ADC driver example.
     * 
     * @param int $channel
     * 
     * @return int
     */
    public function getADCChannelValue($channel)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $channel);

        $data = $this->sendRequest(self::FUNCTION_GET_ADC_CHANNEL_VALUE, $payload, 10);

        $payload = unpack('v1value', $data);

        return $payload['value'];
    }

    /**
     * Returns the values for all 8 ADC channels of the adc driver example.
     * 
     * This example function also has a corresponding callback.
     * 
     * See BrickletXMC1400Breakout::setADCValuesCallbackConfiguration() and BrickletXMC1400Breakout::CALLBACK_ADC_VALUES callback.
     * 
     * 
     * @return array
     */
    public function getADCValues()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ADC_VALUES, $payload, 24);

        $payload = unpack('v8values', $data);

        return IPConnection::collectUnpackedArray($payload, 'values', 8);
    }

    /**
     * The period is the period with which the BrickletXMC1400Breakout::CALLBACK_ADC_VALUES
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
    public function setADCValuesCallbackConfiguration($period, $value_has_to_change)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);
        $payload .= pack('C', intval((bool)$value_has_to_change));

        $this->sendRequest(self::FUNCTION_SET_ADC_VALUES_CALLBACK_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the callback configuration as set by
     * BrickletXMC1400Breakout::setADCValuesCallbackConfiguration().
     * 
     * 
     * @return array
     */
    public function getADCValuesCallbackConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ADC_VALUES_CALLBACK_CONFIGURATION, $payload, 13);

        $payload = unpack('V1period/C1value_has_to_change', $data);

        $ret['period'] = IPConnection::fixUnpackedUInt32($payload, 'period');
        $ret['value_has_to_change'] = (bool)$payload['value_has_to_change'];

        return $ret;
    }

    /**
     * Returns the value of the example count (see example.c).
     * 
     * This example function uses the "add_callback_value_function"-helper in the
     * generator. The getter as well as the callback and callback configuration
     * functions are auto-generated for the API as well as the firmware.
     * 
     * 
     * If you want to get the value periodically, it is recommended to use the
     * BrickletXMC1400Breakout::CALLBACK_COUNT callback. You can set the callback configuration
     * with BrickletXMC1400Breakout::setCountCallbackConfiguration().
     * 
     * 
     * @return int
     */
    public function getCount()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_COUNT, $payload, 12);

        $payload = unpack('V1count', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'count');
    }

    /**
     * The period is the period with which the BrickletXMC1400Breakout::CALLBACK_COUNT callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * If the `value has to change`-parameter is set to true, the callback is only
     * triggered after the value has changed. If the value didn't change
     * within the period, the callback is triggered immediately on change.
     * 
     * If it is set to false, the callback is continuously triggered with the period,
     * independent of the value.
     * 
     * It is furthermore possible to constrain the callback with thresholds.
     * 
     * The `option`-parameter together with min/max sets a threshold for the BrickletXMC1400Breakout::CALLBACK_COUNT callback.
     * 
     * The following options are possible:
     * 
     * <code>
     *  "Option", "Description"
     * 
     *  "'x'",    "Threshold is turned off"
     *  "'o'",    "Threshold is triggered when the value is *outside* the min and max values"
     *  "'i'",    "Threshold is triggered when the value is *inside* or equal to the min and max values"
     *  "'<'",    "Threshold is triggered when the value is smaller than the min value (max is ignored)"
     *  "'>'",    "Threshold is triggered when the value is greater than the min value (max is ignored)"
     * </code>
     * 
     * If the option is set to 'x' (threshold turned off) the callback is triggered with the fixed period.
     * 
     * @param int $period
     * @param bool $value_has_to_change
     * @param string $option
     * @param int $min
     * @param int $max
     * 
     * @return void
     */
    public function setCountCallbackConfiguration($period, $value_has_to_change, $option, $min, $max)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);
        $payload .= pack('C', intval((bool)$value_has_to_change));
        $payload .= pack('c', ord($option));
        $payload .= pack('V', $min);
        $payload .= pack('V', $max);

        $this->sendRequest(self::FUNCTION_SET_COUNT_CALLBACK_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the callback configuration as set by BrickletXMC1400Breakout::setCountCallbackConfiguration().
     * 
     * 
     * @return array
     */
    public function getCountCallbackConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_COUNT_CALLBACK_CONFIGURATION, $payload, 22);

        $payload = unpack('V1period/C1value_has_to_change/c1option/V1min/V1max', $data);

        $ret['period'] = IPConnection::fixUnpackedUInt32($payload, 'period');
        $ret['value_has_to_change'] = (bool)$payload['value_has_to_change'];
        $ret['option'] = chr($payload['option']);
        $ret['min'] = IPConnection::fixUnpackedUInt32($payload, 'min');
        $ret['max'] = IPConnection::fixUnpackedUInt32($payload, 'max');

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
     * Returns the current bootloader mode, see BrickletXMC1400Breakout::setBootloaderMode().
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
     * Sets the firmware pointer for BrickletXMC1400Breakout::writeFirmware(). The pointer has
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
     * BrickletXMC1400Breakout::setWriteFirmwarePointer() before. The firmware is written
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
     * Returns the configuration as set by BrickletXMC1400Breakout::setStatusLEDConfig()
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
    public function callbackWrapperADCValues($data)
    {
        $payload = unpack('v8values', $data);
        $payload['values'] = IPConnection::collectUnpackedArray($payload, 'values', 8);

        if (array_key_exists(self::CALLBACK_ADC_VALUES, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_ADC_VALUES];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_ADC_VALUES];

            call_user_func($function, $payload['values'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperCount($data)
    {
        $payload = unpack('V1count', $data);
        $payload['count'] = IPConnection::fixUnpackedUInt32($payload, 'count');

        if (array_key_exists(self::CALLBACK_COUNT, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_COUNT];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_COUNT];

            call_user_func($function, $payload['count'], $user_data);
        }
    }
}

?>
