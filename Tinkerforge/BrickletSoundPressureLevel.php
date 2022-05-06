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
 * Measures Sound Pressure Level in dB(A/B/C/D/Z)
 */
class BrickletSoundPressureLevel extends Device
{

    /**
     * This callback is triggered periodically according to the configuration set by
     * BrickletSoundPressureLevel::setDecibelCallbackConfiguration().
     * 
     * The parameter is the same as BrickletSoundPressureLevel::getDecibel().
     */
    const CALLBACK_DECIBEL = 4;

    /**
     * See CALLBACK_SPECTRUM
     */
    const CALLBACK_SPECTRUM_LOW_LEVEL = 8;

    /**
     * This callback is triggered periodically according to the configuration set by
     * BrickletSoundPressureLevel::setSpectrumCallbackConfiguration().
     * 
     * The parameter is the same as BrickletSoundPressureLevel::getSpectrum().
     * 
     * <note>
     *  If reconstructing the value fails, the callback is triggered with NULL for spectrum.
     * </note>
     */
    const CALLBACK_SPECTRUM = -8;


    /**
     * @internal
     */
    const FUNCTION_GET_DECIBEL = 1;

    /**
     * @internal
     */
    const FUNCTION_SET_DECIBEL_CALLBACK_CONFIGURATION = 2;

    /**
     * @internal
     */
    const FUNCTION_GET_DECIBEL_CALLBACK_CONFIGURATION = 3;

    /**
     * @internal
     */
    const FUNCTION_GET_SPECTRUM_LOW_LEVEL = 5;

    /**
     * @internal
     */
    const FUNCTION_SET_SPECTRUM_CALLBACK_CONFIGURATION = 6;

    /**
     * @internal
     */
    const FUNCTION_GET_SPECTRUM_CALLBACK_CONFIGURATION = 7;

    /**
     * @internal
     */
    const FUNCTION_SET_CONFIGURATION = 9;

    /**
     * @internal
     */
    const FUNCTION_GET_CONFIGURATION = 10;

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
    const FFT_SIZE_128 = 0;
    const FFT_SIZE_256 = 1;
    const FFT_SIZE_512 = 2;
    const FFT_SIZE_1024 = 3;
    const WEIGHTING_A = 0;
    const WEIGHTING_B = 1;
    const WEIGHTING_C = 2;
    const WEIGHTING_D = 3;
    const WEIGHTING_Z = 4;
    const WEIGHTING_ITU_R_468 = 5;
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

    const DEVICE_IDENTIFIER = 290;

    const DEVICE_DISPLAY_NAME = 'Sound Pressure Level Bricklet';

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

        $this->response_expected[self::FUNCTION_GET_DECIBEL] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_DECIBEL_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_DECIBEL_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_SPECTRUM_LOW_LEVEL] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_SPECTRUM_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_SPECTRUM_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_CONFIGURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
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

        $this->callback_wrappers[self::CALLBACK_DECIBEL] = array(10, 'callbackWrapperDecibel');
        $this->callback_wrappers[self::CALLBACK_SPECTRUM_LOW_LEVEL] = array(72, 'callbackWrapperSpectrumLowLevel');

        $this->high_level_callbacks[self::CALLBACK_SPECTRUM] = array('data' => NULL);

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
     * Returns the measured sound pressure in decibels.
     * 
     * The Bricklet supports the weighting standards dB(A), dB(B), dB(C), dB(D),
     * dB(Z) and ITU-R 468. You can configure the weighting with BrickletSoundPressureLevel::setConfiguration().
     * 
     * By default dB(A) will be used.
     * 
     * 
     * If you want to get the value periodically, it is recommended to use the
     * BrickletSoundPressureLevel::CALLBACK_DECIBEL callback. You can set the callback configuration
     * with BrickletSoundPressureLevel::setDecibelCallbackConfiguration().
     * 
     * 
     * @return int
     */
    public function getDecibel()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_DECIBEL, $payload, 10);

        $payload = unpack('v1decibel', $data);

        return $payload['decibel'];
    }

    /**
     * The period is the period with which the BrickletSoundPressureLevel::CALLBACK_DECIBEL callback is triggered
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
     * The `option`-parameter together with min/max sets a threshold for the BrickletSoundPressureLevel::CALLBACK_DECIBEL callback.
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
    public function setDecibelCallbackConfiguration($period, $value_has_to_change, $option, $min, $max)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);
        $payload .= pack('C', intval((bool)$value_has_to_change));
        $payload .= pack('c', ord($option));
        $payload .= pack('v', $min);
        $payload .= pack('v', $max);

        $this->sendRequest(self::FUNCTION_SET_DECIBEL_CALLBACK_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the callback configuration as set by BrickletSoundPressureLevel::setDecibelCallbackConfiguration().
     * 
     * 
     * @return array
     */
    public function getDecibelCallbackConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_DECIBEL_CALLBACK_CONFIGURATION, $payload, 18);

        $payload = unpack('V1period/C1value_has_to_change/c1option/v1min/v1max', $data);

        $ret['period'] = IPConnection::fixUnpackedUInt32($payload, 'period');
        $ret['value_has_to_change'] = (bool)$payload['value_has_to_change'];
        $ret['option'] = chr($payload['option']);
        $ret['min'] = $payload['min'];
        $ret['max'] = $payload['max'];

        return $ret;
    }

    /**
     * Returns the frequency spectrum. The length of the spectrum is between
     * 512 (FFT size 1024) and 64 (FFT size 128). See BrickletSoundPressureLevel::setConfiguration().
     * 
     * Each array element is one bin of the FFT. The first bin is always the
     * DC offset and the other bins have a size between 40Hz (FFT size 1024) and
     * 320Hz (FFT size 128).
     * 
     * In sum the frequency of the spectrum always has a range from 0 to
     * 20480Hz (the FFT is applied to samples with a frequency of 40960Hz).
     * 
     * The returned data is already equalized, which means that the microphone
     * frequency response is compensated and the weighting function is applied
     * (see BrickletSoundPressureLevel::setConfiguration() for the available weighting standards). Use
     * dB(Z) if you need the unaltered spectrum.
     * 
     * The values are not in dB form yet. If you want a proper dB scale of the
     * spectrum you have to apply the formula f(x) = 20*log10(max(1, x/sqrt(2)))
     * on each value.
     * 
     * 
     * @return array
     */
    public function getSpectrumLowLevel()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_SPECTRUM_LOW_LEVEL, $payload, 72);

        $payload = unpack('v1spectrum_length/v1spectrum_chunk_offset/v30spectrum_chunk_data', $data);

        $ret['spectrum_length'] = $payload['spectrum_length'];
        $ret['spectrum_chunk_offset'] = $payload['spectrum_chunk_offset'];
        $ret['spectrum_chunk_data'] = IPConnection::collectUnpackedArray($payload, 'spectrum_chunk_data', 30);

        return $ret;
    }

    /**
     * The period is the period with which the BrickletSoundPressureLevel::CALLBACK_SPECTRUM callback is
     * triggered periodically. A value of 0 turns the callback off.
     * 
     * Every new measured spectrum will be send at most once. Set the period to 1 to
     * make sure that you get every spectrum.
     * 
     * @param int $period
     * 
     * @return void
     */
    public function setSpectrumCallbackConfiguration($period)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);

        $this->sendRequest(self::FUNCTION_SET_SPECTRUM_CALLBACK_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the callback configuration as set by
     * BrickletSoundPressureLevel::getSpectrumCallbackConfiguration().
     * 
     * 
     * @return int
     */
    public function getSpectrumCallbackConfiguration()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_SPECTRUM_CALLBACK_CONFIGURATION, $payload, 12);

        $payload = unpack('V1period', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'period');
    }

    /**
     * Sets the Sound Pressure Level Bricklet configuration.
     * 
     * With different FFT sizes the Bricklet has a different
     * amount of samples per second and the size of the FFT bins
     * changes. The higher the FFT size the more precise is the result
     * of the dB(X) calculation.
     * 
     * Available FFT sizes are:
     * 
     * * 1024: 512 bins, 10 samples per second, each bin has size 40Hz
     * * 512: 256 bins, 20 samples per second, each bin has size 80Hz
     * * 256: 128 bins, 40 samples per second, each bin has size 160Hz
     * * 128: 64 bins, 80 samples per second, each bin has size 320Hz
     * 
     * The Bricklet supports different weighting functions. You can choose
     * between dB(A), dB(B), dB(C), dB(D), dB(Z) and ITU-R 468.
     * 
     * dB(A/B/C/D) are the standard dB weighting curves. dB(A) is
     * often used to measure volumes at concerts etc. dB(Z) has a
     * flat response, no weighting is applied. ITU-R 468 is an ITU
     * weighting standard mostly used in the UK and Europe.
     * 
     * @param int $fft_size
     * @param int $weighting
     * 
     * @return void
     */
    public function setConfiguration($fft_size, $weighting)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $fft_size);
        $payload .= pack('C', $weighting);

        $this->sendRequest(self::FUNCTION_SET_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the configuration as set by BrickletSoundPressureLevel::setConfiguration().
     * 
     * 
     * @return array
     */
    public function getConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_CONFIGURATION, $payload, 10);

        $payload = unpack('C1fft_size/C1weighting', $data);

        $ret['fft_size'] = $payload['fft_size'];
        $ret['weighting'] = $payload['weighting'];

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
     * Returns the current bootloader mode, see BrickletSoundPressureLevel::setBootloaderMode().
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
     * Sets the firmware pointer for BrickletSoundPressureLevel::writeFirmware(). The pointer has
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
     * BrickletSoundPressureLevel::setWriteFirmwarePointer() before. The firmware is written
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
     * Returns the configuration as set by BrickletSoundPressureLevel::setStatusLEDConfig()
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
     * Returns the frequency spectrum. The length of the spectrum is between
     * 512 (FFT size 1024) and 64 (FFT size 128). See BrickletSoundPressureLevel::setConfiguration().
     * 
     * Each array element is one bin of the FFT. The first bin is always the
     * DC offset and the other bins have a size between 40Hz (FFT size 1024) and
     * 320Hz (FFT size 128).
     * 
     * In sum the frequency of the spectrum always has a range from 0 to
     * 20480Hz (the FFT is applied to samples with a frequency of 40960Hz).
     * 
     * The returned data is already equalized, which means that the microphone
     * frequency response is compensated and the weighting function is applied
     * (see BrickletSoundPressureLevel::setConfiguration() for the available weighting standards). Use
     * dB(Z) if you need the unaltered spectrum.
     * 
     * The values are not in dB form yet. If you want a proper dB scale of the
     * spectrum you have to apply the formula f(x) = 20*log10(max(1, x/sqrt(2)))
     * on each value.
     * 
     * 
     * @return array
     */
    public function getSpectrum()
    {
        $ret = $this->getSpectrumLowLevel();
        $spectrum_length = $ret['spectrum_length'];
        $spectrum_out_of_sync = $ret['spectrum_chunk_offset'] != 0;
        $spectrum_data = $ret['spectrum_chunk_data'];

        while (!$spectrum_out_of_sync && count($spectrum_data) < $spectrum_length) {
            $ret = $this->getSpectrumLowLevel();
            $spectrum_length = $ret['spectrum_length'];
            $spectrum_out_of_sync = $ret['spectrum_chunk_offset'] != count($spectrum_data);
            $spectrum_data = array_merge($spectrum_data, $ret['spectrum_chunk_data']);
        }

        if ($spectrum_out_of_sync) { // discard remaining stream to bring it back in-sync
            while ($ret['spectrum_chunk_offset'] + 30 < $spectrum_length) {
                $ret = $this->getSpectrumLowLevel();
                $spectrum_length = $ret['spectrum_length'];
            }

            throw new StreamOutOfSyncException('Spectrum stream is out-of-sync');
        }

        return array_slice($spectrum_data, 0, $spectrum_length);
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
    public function callbackWrapperDecibel($data)
    {
        $payload = unpack('v1decibel', $data);

        if (array_key_exists(self::CALLBACK_DECIBEL, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_DECIBEL];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_DECIBEL];

            call_user_func($function, $payload['decibel'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperSpectrumLowLevel($data)
    {
        $payload = unpack('v1spectrum_length/v1spectrum_chunk_offset/v30spectrum_chunk_data', $data);
        $payload['spectrum_chunk_data'] = IPConnection::collectUnpackedArray($payload, 'spectrum_chunk_data', 30);

        $high_level_callback = &$this->high_level_callbacks[self::CALLBACK_SPECTRUM];
        $spectrum_chunk_length = min($payload['spectrum_length'] - $payload['spectrum_chunk_offset'], 30);

        if ($high_level_callback['data'] === NULL) { // no stream in-progress
            if ($payload['spectrum_chunk_offset'] === 0) { // stream starts
                $high_level_callback['data'] = array_slice($payload['spectrum_chunk_data'], 0, $spectrum_chunk_length);

                if (count($high_level_callback['data']) >= $payload['spectrum_length']) { // stream complete
                    if (array_key_exists(self::CALLBACK_SPECTRUM, $this->registered_callbacks)) {
                        $function = $this->registered_callbacks[self::CALLBACK_SPECTRUM];
                        $user_data = $this->registered_callback_user_data[self::CALLBACK_SPECTRUM];
                        $payload['spectrum'] = $high_level_callback['data'];

                        call_user_func($function, $payload['spectrum'], $user_data);
                    }

                    $high_level_callback['data'] = NULL;
                }
            } else { // ignore tail of current stream, wait for next stream start
            }
        } else { // stream in-progress
            if ($payload['spectrum_chunk_offset'] !== count($high_level_callback['data'])) { // stream out-of-sync
                $high_level_callback['data'] = NULL;

                if (array_key_exists(self::CALLBACK_SPECTRUM, $this->registered_callbacks)) {
                    $function = $this->registered_callbacks[self::CALLBACK_SPECTRUM];
                    $user_data = $this->registered_callback_user_data[self::CALLBACK_SPECTRUM];
                    $payload['spectrum'] = $high_level_callback['data'];

                    call_user_func($function, $payload['spectrum'], $user_data);
                }
            } else { // stream in-sync
                $high_level_callback['data'] = array_merge($high_level_callback['data'], array_slice($payload['spectrum_chunk_data'], 0, $spectrum_chunk_length));

                if (count($high_level_callback['data']) >= $payload['spectrum_length']) { // stream complete
                    if (array_key_exists(self::CALLBACK_SPECTRUM, $this->registered_callbacks)) {
                        $function = $this->registered_callbacks[self::CALLBACK_SPECTRUM];
                        $user_data = $this->registered_callback_user_data[self::CALLBACK_SPECTRUM];
                        $payload['spectrum'] = $high_level_callback['data'];

                        call_user_func($function, $payload['spectrum'], $user_data);
                    }

                    $high_level_callback['data'] = NULL;
                }
            }
        }

        if (array_key_exists(self::CALLBACK_SPECTRUM_LOW_LEVEL, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_SPECTRUM_LOW_LEVEL];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_SPECTRUM_LOW_LEVEL];

            call_user_func($function, $payload['spectrum_length'], $payload['spectrum_chunk_offset'], $payload['spectrum_chunk_data'], $user_data);
        }
    }
}

?>
