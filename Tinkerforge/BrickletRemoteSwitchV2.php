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
 * Controls remote mains switches and receives signals from remotes
 */
class BrickletRemoteSwitchV2 extends Device
{

    /**
     * This callback is triggered whenever the switching state changes
     * from busy to ready, see BrickletRemoteSwitchV2::getSwitchingState().
     */
    const CALLBACK_SWITCHING_DONE = 2;

    /**
     * Returns the house code, receiver code, switch state (on/off) and number of repeats for
     * remote type A.
     * 
     * The repeats are the number of received identical data packets. The longer the button is pressed,
     * the higher the repeat number. The callback is triggered with every repeat.
     * 
     * You have to enable the callback with BrickletRemoteSwitchV2::setRemoteConfiguration(). The number
     * of repeats that you can set in the configuration is the minimum number of repeats that have
     * to be seen before the callback is triggered for the first time.
     */
    const CALLBACK_REMOTE_STATUS_A = 14;

    /**
     * Returns the address (unique per remote), unit (button number), switch state (on/off) and number of repeats for
     * remote type B.
     * 
     * If the remote supports dimming the dim value is used instead of the switch state.
     * 
     * The repeats are the number of received identical data packets. The longer the button is pressed,
     * the higher the repeat number. The callback is triggered with every repeat.
     * 
     * You have to enable the callback with BrickletRemoteSwitchV2::setRemoteConfiguration(). The number
     * of repeats that you can set in the configuration is the minimum number of repeats that have
     * to be seen before the callback is triggered for the first time.
     */
    const CALLBACK_REMOTE_STATUS_B = 15;

    /**
     * Returns the system code, device code, switch state (on/off) and number of repeats for
     * remote type C.
     * 
     * The repeats are the number of received identical data packets. The longer the button is pressed,
     * the higher the repeat number. The callback is triggered with every repeat.
     * 
     * You have to enable the callback with BrickletRemoteSwitchV2::setRemoteConfiguration(). The number
     * of repeats that you can set in the configuration is the minimum number of repeats that have
     * to be seen before the callback is triggered for the first time.
     */
    const CALLBACK_REMOTE_STATUS_C = 16;


    /**
     * @internal
     */
    const FUNCTION_GET_SWITCHING_STATE = 1;

    /**
     * @internal
     */
    const FUNCTION_SET_REPEATS = 3;

    /**
     * @internal
     */
    const FUNCTION_GET_REPEATS = 4;

    /**
     * @internal
     */
    const FUNCTION_SWITCH_SOCKET_A = 5;

    /**
     * @internal
     */
    const FUNCTION_SWITCH_SOCKET_B = 6;

    /**
     * @internal
     */
    const FUNCTION_DIM_SOCKET_B = 7;

    /**
     * @internal
     */
    const FUNCTION_SWITCH_SOCKET_C = 8;

    /**
     * @internal
     */
    const FUNCTION_SET_REMOTE_CONFIGURATION = 9;

    /**
     * @internal
     */
    const FUNCTION_GET_REMOTE_CONFIGURATION = 10;

    /**
     * @internal
     */
    const FUNCTION_GET_REMOTE_STATUS_A = 11;

    /**
     * @internal
     */
    const FUNCTION_GET_REMOTE_STATUS_B = 12;

    /**
     * @internal
     */
    const FUNCTION_GET_REMOTE_STATUS_C = 13;

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

    const SWITCHING_STATE_READY = 0;
    const SWITCHING_STATE_BUSY = 1;
    const SWITCH_TO_OFF = 0;
    const SWITCH_TO_ON = 1;
    const REMOTE_TYPE_A = 0;
    const REMOTE_TYPE_B = 1;
    const REMOTE_TYPE_C = 2;
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

    const DEVICE_IDENTIFIER = 289;

    const DEVICE_DISPLAY_NAME = 'Remote Switch Bricklet 2.0';

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

        $this->response_expected[self::FUNCTION_GET_SWITCHING_STATE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_REPEATS] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_REPEATS] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SWITCH_SOCKET_A] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_SWITCH_SOCKET_B] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_DIM_SOCKET_B] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_SWITCH_SOCKET_C] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_SET_REMOTE_CONFIGURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_REMOTE_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_REMOTE_STATUS_A] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_REMOTE_STATUS_B] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_REMOTE_STATUS_C] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
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

        $this->callback_wrappers[self::CALLBACK_SWITCHING_DONE] = array(8, 'callbackWrapperSwitchingDone');
        $this->callback_wrappers[self::CALLBACK_REMOTE_STATUS_A] = array(13, 'callbackWrapperRemoteStatusA');
        $this->callback_wrappers[self::CALLBACK_REMOTE_STATUS_B] = array(17, 'callbackWrapperRemoteStatusB');
        $this->callback_wrappers[self::CALLBACK_REMOTE_STATUS_C] = array(13, 'callbackWrapperRemoteStatusC');

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
     * Returns the current switching state. If the current state is busy, the
     * Bricklet is currently sending a code to switch a socket. It will not
     * accept any calls of switch socket functions until the state changes to ready.
     * 
     * How long the switching takes is dependent on the number of repeats, see
     * BrickletRemoteSwitchV2::setRepeats().
     * 
     * 
     * @return int
     */
    public function getSwitchingState()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_SWITCHING_STATE, $payload, 9);

        $payload = unpack('C1state', $data);

        return $payload['state'];
    }

    /**
     * Sets the number of times the code is sent when one of the Switch Socket
     * functions is called. The repeats basically correspond to the amount of time
     * that a button of the remote is pressed.
     * 
     * Some dimmers are controlled by the length of a button pressed,
     * this can be simulated by increasing the repeats.
     * 
     * @param int $repeats
     * 
     * @return void
     */
    public function setRepeats($repeats)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $repeats);

        $this->sendRequest(self::FUNCTION_SET_REPEATS, $payload, 0);
    }

    /**
     * Returns the number of repeats as set by BrickletRemoteSwitchV2::setRepeats().
     * 
     * 
     * @return int
     */
    public function getRepeats()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_REPEATS, $payload, 9);

        $payload = unpack('C1repeats', $data);

        return $payload['repeats'];
    }

    /**
     * To switch a type A socket you have to give the house code, receiver code and the
     * state (on or off) you want to switch to.
     * 
     * A detailed description on how you can figure out the house and receiver code
     * can be found :ref:`here <remote_switch_bricklet_type_a_house_and_receiver_code>`.
     * 
     * @param int $house_code
     * @param int $receiver_code
     * @param int $switch_to
     * 
     * @return void
     */
    public function switchSocketA($house_code, $receiver_code, $switch_to)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $house_code);
        $payload .= pack('C', $receiver_code);
        $payload .= pack('C', $switch_to);

        $this->sendRequest(self::FUNCTION_SWITCH_SOCKET_A, $payload, 0);
    }

    /**
     * To switch a type B socket you have to give the address, unit and the state
     * (on or off) you want to switch to.
     * 
     * To switch all devices with the same address use 255 for the unit.
     * 
     * A detailed description on how you can teach a socket the address and unit can
     * be found :ref:`here <remote_switch_bricklet_type_b_address_and_unit>`.
     * 
     * @param int $address
     * @param int $unit
     * @param int $switch_to
     * 
     * @return void
     */
    public function switchSocketB($address, $unit, $switch_to)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $address);
        $payload .= pack('C', $unit);
        $payload .= pack('C', $switch_to);

        $this->sendRequest(self::FUNCTION_SWITCH_SOCKET_B, $payload, 0);
    }

    /**
     * To control a type B dimmer you have to give the address, unit and the
     * dim value you want to set the dimmer to.
     * 
     * A detailed description on how you can teach a dimmer the address and unit can
     * be found :ref:`here <remote_switch_bricklet_type_b_address_and_unit>`.
     * 
     * @param int $address
     * @param int $unit
     * @param int $dim_value
     * 
     * @return void
     */
    public function dimSocketB($address, $unit, $dim_value)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $address);
        $payload .= pack('C', $unit);
        $payload .= pack('C', $dim_value);

        $this->sendRequest(self::FUNCTION_DIM_SOCKET_B, $payload, 0);
    }

    /**
     * To switch a type C socket you have to give the system code, device code and the
     * state (on or off) you want to switch to.
     * 
     * A detailed description on how you can figure out the system and device code
     * can be found :ref:`here <remote_switch_bricklet_type_c_system_and_device_code>`.
     * 
     * @param string $system_code
     * @param int $device_code
     * @param int $switch_to
     * 
     * @return void
     */
    public function switchSocketC($system_code, $device_code, $switch_to)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('c', ord($system_code));
        $payload .= pack('C', $device_code);
        $payload .= pack('C', $switch_to);

        $this->sendRequest(self::FUNCTION_SWITCH_SOCKET_C, $payload, 0);
    }

    /**
     * Sets the configuration for **receiving** data from a remote of type A, B or C.
     * 
     * * Remote Type: A, B or C depending on the type of remote you want to receive.
     * * Minimum Repeats: The minimum number of repeated data packets until the callback
     *   is triggered (if enabled).
     * * Callback Enabled: Enable or disable callback (see BrickletRemoteSwitchV2::CALLBACK_REMOTE_STATUS_A callback,
     *   BrickletRemoteSwitchV2::CALLBACK_REMOTE_STATUS_B callback and BrickletRemoteSwitchV2::CALLBACK_REMOTE_STATUS_C callback).
     * 
     * @param int $remote_type
     * @param int $minimum_repeats
     * @param bool $callback_enabled
     * 
     * @return void
     */
    public function setRemoteConfiguration($remote_type, $minimum_repeats, $callback_enabled)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $remote_type);
        $payload .= pack('v', $minimum_repeats);
        $payload .= pack('C', intval((bool)$callback_enabled));

        $this->sendRequest(self::FUNCTION_SET_REMOTE_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the remote configuration as set by BrickletRemoteSwitchV2::setRemoteConfiguration()
     * 
     * 
     * @return array
     */
    public function getRemoteConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_REMOTE_CONFIGURATION, $payload, 12);

        $payload = unpack('C1remote_type/v1minimum_repeats/C1callback_enabled', $data);

        $ret['remote_type'] = $payload['remote_type'];
        $ret['minimum_repeats'] = $payload['minimum_repeats'];
        $ret['callback_enabled'] = (bool)$payload['callback_enabled'];

        return $ret;
    }

    /**
     * Returns the house code, receiver code, switch state (on/off) and number of
     * repeats for remote type A.
     * 
     * Repeats == 0 means there was no button press. Repeats >= 1 means there
     * was a button press with the specified house/receiver code. The repeats are the
     * number of received identical data packets. The longer the button is pressed,
     * the higher the repeat number.
     * 
     * Use the callback to get this data automatically when a button is pressed,
     * see BrickletRemoteSwitchV2::setRemoteConfiguration() and BrickletRemoteSwitchV2::CALLBACK_REMOTE_STATUS_A callback.
     * 
     * 
     * @return array
     */
    public function getRemoteStatusA()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_REMOTE_STATUS_A, $payload, 13);

        $payload = unpack('C1house_code/C1receiver_code/C1switch_to/v1repeats', $data);

        $ret['house_code'] = $payload['house_code'];
        $ret['receiver_code'] = $payload['receiver_code'];
        $ret['switch_to'] = $payload['switch_to'];
        $ret['repeats'] = $payload['repeats'];

        return $ret;
    }

    /**
     * Returns the address (unique per remote), unit (button number), switch state
     * (on/off) and number of repeats for remote type B.
     * 
     * If the remote supports dimming the dim value is used instead of the switch state.
     * 
     * If repeats=0 there was no button press. If repeats >= 1 there
     * was a button press with the specified address/unit. The repeats are the number of received
     * identical data packets. The longer the button is pressed, the higher the repeat number.
     * 
     * Use the callback to get this data automatically when a button is pressed,
     * see BrickletRemoteSwitchV2::setRemoteConfiguration() and BrickletRemoteSwitchV2::CALLBACK_REMOTE_STATUS_B callback.
     * 
     * 
     * @return array
     */
    public function getRemoteStatusB()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_REMOTE_STATUS_B, $payload, 17);

        $payload = unpack('V1address/C1unit/C1switch_to/C1dim_value/v1repeats', $data);

        $ret['address'] = IPConnection::fixUnpackedUInt32($payload, 'address');
        $ret['unit'] = $payload['unit'];
        $ret['switch_to'] = $payload['switch_to'];
        $ret['dim_value'] = $payload['dim_value'];
        $ret['repeats'] = $payload['repeats'];

        return $ret;
    }

    /**
     * Returns the system code, device code, switch state (on/off) and number of repeats for
     * remote type C.
     * 
     * If repeats=0 there was no button press. If repeats >= 1 there
     * was a button press with the specified system/device code. The repeats are the number of received
     * identical data packets. The longer the button is pressed, the higher the repeat number.
     * 
     * Use the callback to get this data automatically when a button is pressed,
     * see BrickletRemoteSwitchV2::setRemoteConfiguration() and BrickletRemoteSwitchV2::CALLBACK_REMOTE_STATUS_C callback.
     * 
     * 
     * @return array
     */
    public function getRemoteStatusC()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_REMOTE_STATUS_C, $payload, 13);

        $payload = unpack('c1system_code/C1device_code/C1switch_to/v1repeats', $data);

        $ret['system_code'] = chr($payload['system_code']);
        $ret['device_code'] = $payload['device_code'];
        $ret['switch_to'] = $payload['switch_to'];
        $ret['repeats'] = $payload['repeats'];

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
     * Returns the current bootloader mode, see BrickletRemoteSwitchV2::setBootloaderMode().
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
     * Sets the firmware pointer for BrickletRemoteSwitchV2::writeFirmware(). The pointer has
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
     * BrickletRemoteSwitchV2::setWriteFirmwarePointer() before. The firmware is written
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
     * Returns the configuration as set by BrickletRemoteSwitchV2::setStatusLEDConfig()
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
    public function callbackWrapperSwitchingDone($data)
    {

        if (array_key_exists(self::CALLBACK_SWITCHING_DONE, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_SWITCHING_DONE];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_SWITCHING_DONE];

            call_user_func($function, $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperRemoteStatusA($data)
    {
        $payload = unpack('C1house_code/C1receiver_code/C1switch_to/v1repeats', $data);

        if (array_key_exists(self::CALLBACK_REMOTE_STATUS_A, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_REMOTE_STATUS_A];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_REMOTE_STATUS_A];

            call_user_func($function, $payload['house_code'], $payload['receiver_code'], $payload['switch_to'], $payload['repeats'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperRemoteStatusB($data)
    {
        $payload = unpack('V1address/C1unit/C1switch_to/C1dim_value/v1repeats', $data);
        $payload['address'] = IPConnection::fixUnpackedUInt32($payload, 'address');

        if (array_key_exists(self::CALLBACK_REMOTE_STATUS_B, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_REMOTE_STATUS_B];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_REMOTE_STATUS_B];

            call_user_func($function, $payload['address'], $payload['unit'], $payload['switch_to'], $payload['dim_value'], $payload['repeats'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperRemoteStatusC($data)
    {
        $payload = unpack('c1system_code/C1device_code/C1switch_to/v1repeats', $data);
        $payload['system_code'] = chr($payload['system_code']);

        if (array_key_exists(self::CALLBACK_REMOTE_STATUS_C, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_REMOTE_STATUS_C];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_REMOTE_STATUS_C];

            call_user_func($function, $payload['system_code'], $payload['device_code'], $payload['switch_to'], $payload['repeats'], $user_data);
        }
    }
}

?>
