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
 * Creates beep and alarm with configurable volume and frequency
 */
class BrickletPiezoSpeakerV2 extends Device
{

    /**
     * This callback is triggered if a beep set by BrickletPiezoSpeakerV2::setBeep() is finished
     */
    const CALLBACK_BEEP_FINISHED = 7;

    /**
     * This callback is triggered if a alarm set by BrickletPiezoSpeakerV2::setAlarm() is finished
     */
    const CALLBACK_ALARM_FINISHED = 8;


    /**
     * @internal
     */
    const FUNCTION_SET_BEEP = 1;

    /**
     * @internal
     */
    const FUNCTION_GET_BEEP = 2;

    /**
     * @internal
     */
    const FUNCTION_SET_ALARM = 3;

    /**
     * @internal
     */
    const FUNCTION_GET_ALARM = 4;

    /**
     * @internal
     */
    const FUNCTION_UPDATE_VOLUME = 5;

    /**
     * @internal
     */
    const FUNCTION_UPDATE_FREQUENCY = 6;

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

    const BEEP_DURATION_OFF = 0;
    const BEEP_DURATION_INFINITE = 4294967295;
    const ALARM_DURATION_OFF = 0;
    const ALARM_DURATION_INFINITE = 4294967295;
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

    const DEVICE_IDENTIFIER = 2145;

    const DEVICE_DISPLAY_NAME = 'Piezo Speaker Bricklet 2.0';

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

        $this->response_expected[self::FUNCTION_SET_BEEP] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_BEEP] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ALARM] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_ALARM] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_UPDATE_VOLUME] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_UPDATE_FREQUENCY] = self::RESPONSE_EXPECTED_FALSE;
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

        $this->callback_wrappers[self::CALLBACK_BEEP_FINISHED] = array(8, 'callbackWrapperBeepFinished');
        $this->callback_wrappers[self::CALLBACK_ALARM_FINISHED] = array(8, 'callbackWrapperAlarmFinished');

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
     * Beeps with the given frequency and volume for the duration.
     * 
     * A duration of 0 stops the current beep if any is ongoing.
     * A duration of 4294967295 results in an infinite beep.
     * 
     * @param int $frequency
     * @param int $volume
     * @param int $duration
     * 
     * @return void
     */
    public function setBeep($frequency, $volume, $duration)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $frequency);
        $payload .= pack('C', $volume);
        $payload .= pack('V', $duration);

        $this->sendRequest(self::FUNCTION_SET_BEEP, $payload, 0);
    }

    /**
     * Returns the last beep settings as set by BrickletPiezoSpeakerV2::setBeep(). If a beep is currently
     * running it also returns the remaining duration of the beep.
     * 
     * If the frequency or volume is updated during a beep (with BrickletPiezoSpeakerV2::updateFrequency()
     * or BrickletPiezoSpeakerV2::updateVolume()) this function returns the updated value.
     * 
     * 
     * @return array
     */
    public function getBeep()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_BEEP, $payload, 19);

        $payload = unpack('v1frequency/C1volume/V1duration/V1duration_remaining', $data);

        $ret['frequency'] = $payload['frequency'];
        $ret['volume'] = $payload['volume'];
        $ret['duration'] = IPConnection::fixUnpackedUInt32($payload, 'duration');
        $ret['duration_remaining'] = IPConnection::fixUnpackedUInt32($payload, 'duration_remaining');

        return $ret;
    }

    /**
     * Creates an alarm (a tone that goes back and force between two specified frequencies).
     * 
     * The following parameters can be set:
     * 
     * * Start Frequency: Start frequency of the alarm.
     * * End Frequency: End frequency of the alarm.
     * * Step Size: Size of one step of the sweep between the start/end frequencies.
     * * Step Delay: Delay between two steps (duration of time that one tone is used in a sweep).
     * * Duration: Duration of the alarm.
     * 
     * A duration of 0 stops the current alarm if any is ongoing.
     * A duration of 4294967295 results in an infinite alarm.
     * 
     * Below you can find two sets of example settings that you can try out. You can use
     * these as a starting point to find an alarm signal that suits your application.
     * 
     * Example 1: 10 seconds of loud annoying fast alarm
     * 
     * * Start Frequency = 800
     * * End Frequency = 2000
     * * Step Size = 10
     * * Step Delay = 1
     * * Volume = 10
     * * Duration = 10000
     * 
     * Example 2: 10 seconds of soft siren sound with slow build-up
     * 
     * * Start Frequency = 250
     * * End Frequency = 750
     * * Step Size = 1
     * * Step Delay = 5
     * * Volume = 0
     * * Duration = 10000
     * 
     * The following conditions must be met:
     * 
     * * Start Frequency: has to be smaller than end frequency
     * * End Frequency: has to be bigger than start frequency
     * * Step Size: has to be small enough to fit into the frequency range
     * * Step Delay: has to be small enough to fit into the duration
     * 
     * @param int $start_frequency
     * @param int $end_frequency
     * @param int $step_size
     * @param int $step_delay
     * @param int $volume
     * @param int $duration
     * 
     * @return void
     */
    public function setAlarm($start_frequency, $end_frequency, $step_size, $step_delay, $volume, $duration)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $start_frequency);
        $payload .= pack('v', $end_frequency);
        $payload .= pack('v', $step_size);
        $payload .= pack('v', $step_delay);
        $payload .= pack('C', $volume);
        $payload .= pack('V', $duration);

        $this->sendRequest(self::FUNCTION_SET_ALARM, $payload, 0);
    }

    /**
     * Returns the last alarm settings as set by BrickletPiezoSpeakerV2::setAlarm(). If an alarm is currently
     * running it also returns the remaining duration of the alarm as well as the
     * current frequency of the alarm.
     * 
     * If the volume is updated during an alarm (with BrickletPiezoSpeakerV2::updateVolume())
     * this function returns the updated value.
     * 
     * 
     * @return array
     */
    public function getAlarm()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ALARM, $payload, 27);

        $payload = unpack('v1start_frequency/v1end_frequency/v1step_size/v1step_delay/C1volume/V1duration/V1duration_remaining/v1current_frequency', $data);

        $ret['start_frequency'] = $payload['start_frequency'];
        $ret['end_frequency'] = $payload['end_frequency'];
        $ret['step_size'] = $payload['step_size'];
        $ret['step_delay'] = $payload['step_delay'];
        $ret['volume'] = $payload['volume'];
        $ret['duration'] = IPConnection::fixUnpackedUInt32($payload, 'duration');
        $ret['duration_remaining'] = IPConnection::fixUnpackedUInt32($payload, 'duration_remaining');
        $ret['current_frequency'] = $payload['current_frequency'];

        return $ret;
    }

    /**
     * Updates the volume of an ongoing beep or alarm.
     * 
     * @param int $volume
     * 
     * @return void
     */
    public function updateVolume($volume)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $volume);

        $this->sendRequest(self::FUNCTION_UPDATE_VOLUME, $payload, 0);
    }

    /**
     * Updates the frequency of an ongoing beep.
     * 
     * @param int $frequency
     * 
     * @return void
     */
    public function updateFrequency($frequency)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $frequency);

        $this->sendRequest(self::FUNCTION_UPDATE_FREQUENCY, $payload, 0);
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
     * Returns the current bootloader mode, see BrickletPiezoSpeakerV2::setBootloaderMode().
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
     * Sets the firmware pointer for BrickletPiezoSpeakerV2::writeFirmware(). The pointer has
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
     * BrickletPiezoSpeakerV2::setWriteFirmwarePointer() before. The firmware is written
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
     * Returns the configuration as set by BrickletPiezoSpeakerV2::setStatusLEDConfig()
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
    public function callbackWrapperBeepFinished($data)
    {

        if (array_key_exists(self::CALLBACK_BEEP_FINISHED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_BEEP_FINISHED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_BEEP_FINISHED];

            call_user_func($function, $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperAlarmFinished($data)
    {

        if (array_key_exists(self::CALLBACK_ALARM_FINISHED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_ALARM_FINISHED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_ALARM_FINISHED];

            call_user_func($function, $user_data);
        }
    }
}

?>
