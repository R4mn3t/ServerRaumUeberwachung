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
 * Measures Voltage, Current, Energy, Real/Apparent/Reactive Power, Power Factor and Frequency
 */
class BrickletEnergyMonitor extends Device
{

    /**
     * This callback is triggered periodically according to the configuration set by
     * BrickletEnergyMonitor::setEnergyDataCallbackConfiguration().
     * 
     * The parameters are the same as BrickletEnergyMonitor::getEnergyData().
     */
    const CALLBACK_ENERGY_DATA = 10;


    /**
     * @internal
     */
    const FUNCTION_GET_ENERGY_DATA = 1;

    /**
     * @internal
     */
    const FUNCTION_RESET_ENERGY = 2;

    /**
     * @internal
     */
    const FUNCTION_GET_WAVEFORM_LOW_LEVEL = 3;

    /**
     * @internal
     */
    const FUNCTION_GET_TRANSFORMER_STATUS = 4;

    /**
     * @internal
     */
    const FUNCTION_SET_TRANSFORMER_CALIBRATION = 5;

    /**
     * @internal
     */
    const FUNCTION_GET_TRANSFORMER_CALIBRATION = 6;

    /**
     * @internal
     */
    const FUNCTION_CALIBRATE_OFFSET = 7;

    /**
     * @internal
     */
    const FUNCTION_SET_ENERGY_DATA_CALLBACK_CONFIGURATION = 8;

    /**
     * @internal
     */
    const FUNCTION_GET_ENERGY_DATA_CALLBACK_CONFIGURATION = 9;

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

    const DEVICE_IDENTIFIER = 2152;

    const DEVICE_DISPLAY_NAME = 'Energy Monitor Bricklet';

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

        $this->response_expected[self::FUNCTION_GET_ENERGY_DATA] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_RESET_ENERGY] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_WAVEFORM_LOW_LEVEL] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_TRANSFORMER_STATUS] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_TRANSFORMER_CALIBRATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_TRANSFORMER_CALIBRATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_CALIBRATE_OFFSET] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_SET_ENERGY_DATA_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_ENERGY_DATA_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
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

        $this->callback_wrappers[self::CALLBACK_ENERGY_DATA] = array(36, 'callbackWrapperEnergyData');

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
     * Returns all of the measurements that are done by the Energy Monitor Bricklet.
     * 
     * * Voltage RMS
     * * Current RMS
     * * Energy (integrated over time)
     * * Real Power
     * * Apparent Power
     * * Reactive Power
     * * Power Factor
     * * Frequency (AC Frequency of the mains voltage)
     * 
     * The frequency is recalculated every 6 seconds.
     * 
     * All other values are integrated over 10 zero-crossings of the voltage sine wave.
     * With a standard AC mains voltage frequency of 50Hz this results in a 5 measurements
     * per second (or an integration time of 200ms per measurement).
     * 
     * If no voltage transformer is connected, the Bricklet will use the current waveform
     * to calculate the frequency and it will use an integration time of
     * 10 zero-crossings of the current waveform.
     * 
     * 
     * @return array
     */
    public function getEnergyData()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ENERGY_DATA, $payload, 36);

        $payload = unpack('V1voltage/V1current/V1energy/V1real_power/V1apparent_power/V1reactive_power/v1power_factor/v1frequency', $data);

        $ret['voltage'] = IPConnection::fixUnpackedInt32($payload, 'voltage');
        $ret['current'] = IPConnection::fixUnpackedInt32($payload, 'current');
        $ret['energy'] = IPConnection::fixUnpackedInt32($payload, 'energy');
        $ret['real_power'] = IPConnection::fixUnpackedInt32($payload, 'real_power');
        $ret['apparent_power'] = IPConnection::fixUnpackedInt32($payload, 'apparent_power');
        $ret['reactive_power'] = IPConnection::fixUnpackedInt32($payload, 'reactive_power');
        $ret['power_factor'] = $payload['power_factor'];
        $ret['frequency'] = $payload['frequency'];

        return $ret;
    }

    /**
     * Sets the energy value (see BrickletEnergyMonitor::getEnergyData()) back to 0Wh.
     * 
     * 
     * @return void
     */
    public function resetEnergy()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_RESET_ENERGY, $payload, 0);
    }

    /**
     * Returns a snapshot of the voltage and current waveform. The values
     * in the returned array alternate between voltage and current. The data from
     * one getter call contains 768 data points for voltage and current, which
     * correspond to about 3 full sine waves.
     * 
     * The voltage is given with a resolution of 100mV and the current is given
     * with a resolution of 10mA.
     * 
     * This data is meant to be used for a non-realtime graphical representation of
     * the voltage and current waveforms.
     * 
     * 
     * @return array
     */
    public function getWaveformLowLevel()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_WAVEFORM_LOW_LEVEL, $payload, 70);

        $payload = unpack('v1waveform_chunk_offset/v30waveform_chunk_data', $data);

        $ret['waveform_chunk_offset'] = $payload['waveform_chunk_offset'];
        $ret['waveform_chunk_data'] = IPConnection::collectUnpackedInt16Array($payload, 'waveform_chunk_data', 30);

        return $ret;
    }

    /**
     * Returns *true* if a voltage/current transformer is connected to the Bricklet.
     * 
     * 
     * @return array
     */
    public function getTransformerStatus()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_TRANSFORMER_STATUS, $payload, 10);

        $payload = unpack('C1voltage_transformer_connected/C1current_transformer_connected', $data);

        $ret['voltage_transformer_connected'] = (bool)$payload['voltage_transformer_connected'];
        $ret['current_transformer_connected'] = (bool)$payload['current_transformer_connected'];

        return $ret;
    }

    /**
     * Sets the transformer ratio for the voltage and current transformer in 1/100 form.
     * 
     * Example: If your mains voltage is 230V, you use 9V voltage transformer and a
     * 1V:30A current clamp your voltage ratio is 230/9 = 25.56 and your current ratio
     * is 30/1 = 30.
     * 
     * In this case you have to set the values 2556 and 3000 for voltage ratio and current
     * ratio.
     * 
     * The calibration is saved in non-volatile memory, you only have to set it once.
     * 
     * Set the phase shift to 0. It is for future use and currently not supported by the Bricklet.
     * 
     * @param int $voltage_ratio
     * @param int $current_ratio
     * @param int $phase_shift
     * 
     * @return void
     */
    public function setTransformerCalibration($voltage_ratio, $current_ratio, $phase_shift)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $voltage_ratio);
        $payload .= pack('v', $current_ratio);
        $payload .= pack('v', $phase_shift);

        $this->sendRequest(self::FUNCTION_SET_TRANSFORMER_CALIBRATION, $payload, 0);
    }

    /**
     * Returns the transformer calibration as set by BrickletEnergyMonitor::setTransformerCalibration().
     * 
     * 
     * @return array
     */
    public function getTransformerCalibration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_TRANSFORMER_CALIBRATION, $payload, 14);

        $payload = unpack('v1voltage_ratio/v1current_ratio/v1phase_shift', $data);

        $ret['voltage_ratio'] = $payload['voltage_ratio'];
        $ret['current_ratio'] = $payload['current_ratio'];
        $ret['phase_shift'] = IPConnection::fixUnpackedInt16($payload, 'phase_shift');

        return $ret;
    }

    /**
     * Calling this function will start an offset calibration. The offset calibration will
     * integrate the voltage and current waveform over a longer time period to find the 0
     * transition point in the sine wave.
     * 
     * The Bricklet comes with a factory-calibrated offset value, you should not have to
     * call this function.
     * 
     * If you want to re-calibrate the offset we recommend that you connect a load that
     * has a smooth sinusoidal voltage and current waveform. Alternatively you can also
     * short both inputs.
     * 
     * The calibration is saved in non-volatile memory, you only have to set it once.
     * 
     * 
     * @return void
     */
    public function calibrateOffset()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_CALIBRATE_OFFSET, $payload, 0);
    }

    /**
     * The period is the period with which the BrickletEnergyMonitor::CALLBACK_ENERGY_DATA
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
    public function setEnergyDataCallbackConfiguration($period, $value_has_to_change)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);
        $payload .= pack('C', intval((bool)$value_has_to_change));

        $this->sendRequest(self::FUNCTION_SET_ENERGY_DATA_CALLBACK_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the callback configuration as set by
     * BrickletEnergyMonitor::setEnergyDataCallbackConfiguration().
     * 
     * 
     * @return array
     */
    public function getEnergyDataCallbackConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ENERGY_DATA_CALLBACK_CONFIGURATION, $payload, 13);

        $payload = unpack('V1period/C1value_has_to_change', $data);

        $ret['period'] = IPConnection::fixUnpackedUInt32($payload, 'period');
        $ret['value_has_to_change'] = (bool)$payload['value_has_to_change'];

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
     * Returns the current bootloader mode, see BrickletEnergyMonitor::setBootloaderMode().
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
     * Sets the firmware pointer for BrickletEnergyMonitor::writeFirmware(). The pointer has
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
     * BrickletEnergyMonitor::setWriteFirmwarePointer() before. The firmware is written
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
     * Returns the configuration as set by BrickletEnergyMonitor::setStatusLEDConfig()
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
     * Returns a snapshot of the voltage and current waveform. The values
     * in the returned array alternate between voltage and current. The data from
     * one getter call contains 768 data points for voltage and current, which
     * correspond to about 3 full sine waves.
     * 
     * The voltage is given with a resolution of 100mV and the current is given
     * with a resolution of 10mA.
     * 
     * This data is meant to be used for a non-realtime graphical representation of
     * the voltage and current waveforms.
     * 
     * 
     * @return array
     */
    public function getWaveform()
    {
        $waveform_length = 1536;
        $ret = $this->getWaveformLowLevel();
        
        if ($ret['waveform_chunk_offset'] === (1 << 16) - 1) { // maximum chunk offset -> stream has no data
            $waveform_length = 0;
            $waveform_out_of_sync = false;
            $waveform_data = array();
        } else {
            $waveform_out_of_sync = $ret['waveform_chunk_offset'] != 0;
            $waveform_data = $ret['waveform_chunk_data'];
        }

        while (!$waveform_out_of_sync && count($waveform_data) < $waveform_length) {
            $ret = $this->getWaveformLowLevel();
            $waveform_out_of_sync = $ret['waveform_chunk_offset'] != count($waveform_data);
            $waveform_data = array_merge($waveform_data, $ret['waveform_chunk_data']);
        }

        if ($waveform_out_of_sync) { // discard remaining stream to bring it back in-sync
            while ($ret['waveform_chunk_offset'] + 30 < $waveform_length) {
                $ret = $this->getWaveformLowLevel();
            }

            throw new StreamOutOfSyncException('Waveform stream is out-of-sync');
        }

        return array_slice($waveform_data, 0, $waveform_length);
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
    public function callbackWrapperEnergyData($data)
    {
        $payload = unpack('V1voltage/V1current/V1energy/V1real_power/V1apparent_power/V1reactive_power/v1power_factor/v1frequency', $data);
        $payload['voltage'] = IPConnection::fixUnpackedInt32($payload, 'voltage');
        $payload['current'] = IPConnection::fixUnpackedInt32($payload, 'current');
        $payload['energy'] = IPConnection::fixUnpackedInt32($payload, 'energy');
        $payload['real_power'] = IPConnection::fixUnpackedInt32($payload, 'real_power');
        $payload['apparent_power'] = IPConnection::fixUnpackedInt32($payload, 'apparent_power');
        $payload['reactive_power'] = IPConnection::fixUnpackedInt32($payload, 'reactive_power');

        if (array_key_exists(self::CALLBACK_ENERGY_DATA, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_ENERGY_DATA];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_ENERGY_DATA];

            call_user_func($function, $payload['voltage'], $payload['current'], $payload['energy'], $payload['real_power'], $payload['apparent_power'], $payload['reactive_power'], $payload['power_factor'], $payload['frequency'], $user_data);
        }
    }
}

?>
