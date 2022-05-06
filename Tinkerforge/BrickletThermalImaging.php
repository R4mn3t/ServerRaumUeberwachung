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
 * 80x60 pixel thermal imaging camera
 */
class BrickletThermalImaging extends Device
{

    /**
     * See CALLBACK_HIGH_CONTRAST_IMAGE
     */
    const CALLBACK_HIGH_CONTRAST_IMAGE_LOW_LEVEL = 12;

    /**
     * See CALLBACK_TEMPERATURE_IMAGE
     */
    const CALLBACK_TEMPERATURE_IMAGE_LOW_LEVEL = 13;

    /**
     * This callback is triggered with every new high contrast image if the transfer image
     * config is configured for high contrast callback (see BrickletThermalImaging::setImageTransferConfig()).
     * 
     * The data is organized as a 8-bit value 80x60 pixel matrix linearized in
     * a one-dimensional array. The data is arranged line by line from top left to
     * bottom right.
     * 
     * Each 8-bit value represents one gray-scale image pixel that can directly be
     * shown to a user on a display.
     * 
     * <note>
     *  If reconstructing the value fails, the callback is triggered with NULL for image.
     * </note>
     */
    const CALLBACK_HIGH_CONTRAST_IMAGE = -12;

    /**
     * This callback is triggered with every new temperature image if the transfer image
     * config is configured for temperature callback (see BrickletThermalImaging::setImageTransferConfig()).
     * 
     * The data is organized as a 16-bit value 80x60 pixel matrix linearized in
     * a one-dimensional array. The data is arranged line by line from top left to
     * bottom right.
     * 
     * Each 16-bit value represents one temperature measurement in either
     * Kelvin/10 or Kelvin/100 (depending on the resolution set with BrickletThermalImaging::setResolution()).
     * 
     * <note>
     *  If reconstructing the value fails, the callback is triggered with NULL for image.
     * </note>
     */
    const CALLBACK_TEMPERATURE_IMAGE = -13;


    /**
     * @internal
     */
    const FUNCTION_GET_HIGH_CONTRAST_IMAGE_LOW_LEVEL = 1;

    /**
     * @internal
     */
    const FUNCTION_GET_TEMPERATURE_IMAGE_LOW_LEVEL = 2;

    /**
     * @internal
     */
    const FUNCTION_GET_STATISTICS = 3;

    /**
     * @internal
     */
    const FUNCTION_SET_RESOLUTION = 4;

    /**
     * @internal
     */
    const FUNCTION_GET_RESOLUTION = 5;

    /**
     * @internal
     */
    const FUNCTION_SET_SPOTMETER_CONFIG = 6;

    /**
     * @internal
     */
    const FUNCTION_GET_SPOTMETER_CONFIG = 7;

    /**
     * @internal
     */
    const FUNCTION_SET_HIGH_CONTRAST_CONFIG = 8;

    /**
     * @internal
     */
    const FUNCTION_GET_HIGH_CONTRAST_CONFIG = 9;

    /**
     * @internal
     */
    const FUNCTION_SET_IMAGE_TRANSFER_CONFIG = 10;

    /**
     * @internal
     */
    const FUNCTION_GET_IMAGE_TRANSFER_CONFIG = 11;

    /**
     * @internal
     */
    const FUNCTION_SET_FLUX_LINEAR_PARAMETERS = 14;

    /**
     * @internal
     */
    const FUNCTION_GET_FLUX_LINEAR_PARAMETERS = 15;

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

    const RESOLUTION_0_TO_6553_KELVIN = 0;
    const RESOLUTION_0_TO_655_KELVIN = 1;
    const FFC_STATUS_NEVER_COMMANDED = 0;
    const FFC_STATUS_IMMINENT = 1;
    const FFC_STATUS_IN_PROGRESS = 2;
    const FFC_STATUS_COMPLETE = 3;
    const IMAGE_TRANSFER_MANUAL_HIGH_CONTRAST_IMAGE = 0;
    const IMAGE_TRANSFER_MANUAL_TEMPERATURE_IMAGE = 1;
    const IMAGE_TRANSFER_CALLBACK_HIGH_CONTRAST_IMAGE = 2;
    const IMAGE_TRANSFER_CALLBACK_TEMPERATURE_IMAGE = 3;
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

    const DEVICE_IDENTIFIER = 278;

    const DEVICE_DISPLAY_NAME = 'Thermal Imaging Bricklet';

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

        $this->response_expected[self::FUNCTION_GET_HIGH_CONTRAST_IMAGE_LOW_LEVEL] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_TEMPERATURE_IMAGE_LOW_LEVEL] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_STATISTICS] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_RESOLUTION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_RESOLUTION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_SPOTMETER_CONFIG] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_SPOTMETER_CONFIG] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_HIGH_CONTRAST_CONFIG] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_HIGH_CONTRAST_CONFIG] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_IMAGE_TRANSFER_CONFIG] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_IMAGE_TRANSFER_CONFIG] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_FLUX_LINEAR_PARAMETERS] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_FLUX_LINEAR_PARAMETERS] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
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

        $this->callback_wrappers[self::CALLBACK_HIGH_CONTRAST_IMAGE_LOW_LEVEL] = array(72, 'callbackWrapperHighContrastImageLowLevel');
        $this->callback_wrappers[self::CALLBACK_TEMPERATURE_IMAGE_LOW_LEVEL] = array(72, 'callbackWrapperTemperatureImageLowLevel');

        $this->high_level_callbacks[self::CALLBACK_HIGH_CONTRAST_IMAGE] = array('data' => NULL);
        $this->high_level_callbacks[self::CALLBACK_TEMPERATURE_IMAGE] = array('data' => NULL);

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
     * Returns the current high contrast image. See `here <https://www.tinkerforge.com/en/doc/Hardware/Bricklets/Thermal_Imaging.html#high-contrast-image-vs-temperature-image>`__
     * for the difference between
     * High Contrast and Temperature Image. If you don't know what to use
     * the High Contrast Image is probably right for you.
     * 
     * The data is organized as a 8-bit value 80x60 pixel matrix linearized in
     * a one-dimensional array. The data is arranged line by line from top left to
     * bottom right.
     * 
     * Each 8-bit value represents one gray-scale image pixel that can directly be
     * shown to a user on a display.
     * 
     * Before you can use this function you have to enable it with
     * BrickletThermalImaging::setImageTransferConfig().
     * 
     * 
     * @return array
     */
    public function getHighContrastImageLowLevel()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_HIGH_CONTRAST_IMAGE_LOW_LEVEL, $payload, 72);

        $payload = unpack('v1image_chunk_offset/C62image_chunk_data', $data);

        $ret['image_chunk_offset'] = $payload['image_chunk_offset'];
        $ret['image_chunk_data'] = IPConnection::collectUnpackedArray($payload, 'image_chunk_data', 62);

        return $ret;
    }

    /**
     * Returns the current temperature image. See `here <https://www.tinkerforge.com/en/doc/Hardware/Bricklets/Thermal_Imaging.html#high-contrast-image-vs-temperature-image>`__
     * for the difference between High Contrast and Temperature Image.
     * If you don't know what to use the High Contrast Image is probably right for you.
     * 
     * The data is organized as a 16-bit value 80x60 pixel matrix linearized in
     * a one-dimensional array. The data is arranged line by line from top left to
     * bottom right.
     * 
     * Each 16-bit value represents one temperature measurement in either
     * Kelvin/10 or Kelvin/100 (depending on the resolution set with BrickletThermalImaging::setResolution()).
     * 
     * Before you can use this function you have to enable it with
     * BrickletThermalImaging::setImageTransferConfig().
     * 
     * 
     * @return array
     */
    public function getTemperatureImageLowLevel()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_TEMPERATURE_IMAGE_LOW_LEVEL, $payload, 72);

        $payload = unpack('v1image_chunk_offset/v31image_chunk_data', $data);

        $ret['image_chunk_offset'] = $payload['image_chunk_offset'];
        $ret['image_chunk_data'] = IPConnection::collectUnpackedArray($payload, 'image_chunk_data', 31);

        return $ret;
    }

    /**
     * Returns the spotmeter statistics, various temperatures, current resolution and status bits.
     * 
     * The spotmeter statistics are:
     * 
     * * Index 0: Mean Temperature.
     * * Index 1: Maximum Temperature.
     * * Index 2: Minimum Temperature.
     * * Index 3: Pixel Count of spotmeter region of interest.
     * 
     * The temperatures are:
     * 
     * * Index 0: Focal Plain Array temperature.
     * * Index 1: Focal Plain Array temperature at last FFC (Flat Field Correction).
     * * Index 2: Housing temperature.
     * * Index 3: Housing temperature at last FFC.
     * 
     * The resolution is either `0 to 6553 Kelvin` or `0 to 655 Kelvin`. If the resolution is the former,
     * the temperatures are in Kelvin/10, if it is the latter the temperatures are in Kelvin/100.
     * 
     * FFC (Flat Field Correction) Status:
     * 
     * * FFC Never Commanded: Only seen on startup before first FFC.
     * * FFC Imminent: This state is entered 2 seconds prior to initiating FFC.
     * * FFC In Progress: Flat field correction is started (shutter moves in front of lens and back). Takes about 1 second.
     * * FFC Complete: Shutter is in waiting position again, FFC done.
     * 
     * Temperature warning bits:
     * 
     * * Index 0: Shutter lockout (if true shutter is locked out because temperature is outside -10°C to +65°C)
     * * Index 1: Overtemperature shut down imminent (goes true 10 seconds before shutdown)
     * 
     * 
     * @return array
     */
    public function getStatistics()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_STATISTICS, $payload, 27);

        $payload = unpack('v4spotmeter_statistics/v4temperatures/C1resolution/C1ffc_status/C1temperature_warning', $data);

        $ret['spotmeter_statistics'] = IPConnection::collectUnpackedArray($payload, 'spotmeter_statistics', 4);
        $ret['temperatures'] = IPConnection::collectUnpackedArray($payload, 'temperatures', 4);
        $ret['resolution'] = $payload['resolution'];
        $ret['ffc_status'] = $payload['ffc_status'];
        $ret['temperature_warning'] = IPConnection::collectUnpackedBoolArray($payload, 'temperature_warning', 2);

        return $ret;
    }

    /**
     * Sets the resolution. The Thermal Imaging Bricklet can either measure
     * 
     * * from 0 to 6553 Kelvin (-273.15°C to +6279.85°C) with 0.1°C resolution or
     * * from 0 to 655 Kelvin (-273.15°C to +381.85°C) with 0.01°C resolution.
     * 
     * The accuracy is specified for -10°C to 450°C in the
     * first range and -10°C and 140°C in the second range.
     * 
     * @param int $resolution
     * 
     * @return void
     */
    public function setResolution($resolution)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $resolution);

        $this->sendRequest(self::FUNCTION_SET_RESOLUTION, $payload, 0);
    }

    /**
     * Returns the resolution as set by BrickletThermalImaging::setResolution().
     * 
     * 
     * @return int
     */
    public function getResolution()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_RESOLUTION, $payload, 9);

        $payload = unpack('C1resolution', $data);

        return $payload['resolution'];
    }

    /**
     * Sets the spotmeter region of interest. The 4 values are
     * 
     * * Index 0: Column start (has to be smaller then Column end).
     * * Index 1: Row start (has to be smaller then Row end).
     * * Index 2: Column end (has to be smaller then 80).
     * * Index 3: Row end (has to be smaller then 60).
     * 
     * The spotmeter statistics can be read out with BrickletThermalImaging::getStatistics().
     * 
     * @param int[] $region_of_interest
     * 
     * @return void
     */
    public function setSpotmeterConfig($region_of_interest)
    {
        $this->checkValidity();

        $payload = '';
        for ($i = 0; $i < 4; $i++) {
            $payload .= pack('C', $region_of_interest[$i]);
        }

        $this->sendRequest(self::FUNCTION_SET_SPOTMETER_CONFIG, $payload, 0);
    }

    /**
     * Returns the spotmeter config as set by BrickletThermalImaging::setSpotmeterConfig().
     * 
     * 
     * @return array
     */
    public function getSpotmeterConfig()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_SPOTMETER_CONFIG, $payload, 12);

        $payload = unpack('C4region_of_interest', $data);

        return IPConnection::collectUnpackedArray($payload, 'region_of_interest', 4);
    }

    /**
     * Sets the high contrast region of interest, dampening factor, clip limit and empty counts.
     * This config is only used in high contrast mode (see BrickletThermalImaging::setImageTransferConfig()).
     * 
     * The high contrast region of interest consists of four values:
     * 
     * * Index 0: Column start (has to be smaller or equal then Column end).
     * * Index 1: Row start (has to be smaller then Row end).
     * * Index 2: Column end (has to be smaller then 80).
     * * Index 3: Row end (has to be smaller then 60).
     * 
     * The algorithm to generate the high contrast image is applied to this region.
     * 
     * Dampening Factor: This parameter is the amount of temporal dampening applied to the HEQ
     * (history equalization) transformation function. An IIR filter of the form::
     * 
     *  (N / 256) * previous + ((256 - N) / 256) * current
     * 
     * is applied, and the HEQ dampening factor
     * represents the value N in the equation, i.e., a value that applies to the amount of
     * influence the previous HEQ transformation function has on the current function. The
     * lower the value of N the higher the influence of the current video frame whereas
     * the higher the value of N the more influence the previous damped transfer function has.
     * 
     * Clip Limit Index 0 (AGC HEQ Clip Limit High): This parameter defines the maximum number of pixels allowed
     * to accumulate in any given histogram bin. Any additional pixels in a given bin are clipped.
     * The effect of this parameter is to limit the influence of highly-populated bins on the
     * resulting HEQ transformation function.
     * 
     * Clip Limit Index 1 (AGC HEQ Clip Limit Low): This parameter defines an artificial population that is added to
     * every non-empty histogram bin. In other words, if the Clip Limit Low is set to L, a bin
     * with an actual population of X will have an effective population of L + X. Any empty bin
     * that is nearby a populated bin will be given an artificial population of L. The effect of
     * higher values is to provide a more linear transfer function; lower values provide a more
     * non-linear (equalized) transfer function.
     * 
     * Empty Counts: This parameter specifies the maximum number of pixels in a bin that will be
     * interpreted as an empty bin. Histogram bins with this number of pixels or less will be
     * processed as an empty bin.
     * 
     * @param int[] $region_of_interest
     * @param int $dampening_factor
     * @param int[] $clip_limit
     * @param int $empty_counts
     * 
     * @return void
     */
    public function setHighContrastConfig($region_of_interest, $dampening_factor, $clip_limit, $empty_counts)
    {
        $this->checkValidity();

        $payload = '';
        for ($i = 0; $i < 4; $i++) {
            $payload .= pack('C', $region_of_interest[$i]);
        }
        $payload .= pack('v', $dampening_factor);
        for ($i = 0; $i < 2; $i++) {
            $payload .= pack('v', $clip_limit[$i]);
        }
        $payload .= pack('v', $empty_counts);

        $this->sendRequest(self::FUNCTION_SET_HIGH_CONTRAST_CONFIG, $payload, 0);
    }

    /**
     * Returns the high contrast config as set by BrickletThermalImaging::setHighContrastConfig().
     * 
     * 
     * @return array
     */
    public function getHighContrastConfig()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_HIGH_CONTRAST_CONFIG, $payload, 20);

        $payload = unpack('C4region_of_interest/v1dampening_factor/v2clip_limit/v1empty_counts', $data);

        $ret['region_of_interest'] = IPConnection::collectUnpackedArray($payload, 'region_of_interest', 4);
        $ret['dampening_factor'] = $payload['dampening_factor'];
        $ret['clip_limit'] = IPConnection::collectUnpackedArray($payload, 'clip_limit', 2);
        $ret['empty_counts'] = $payload['empty_counts'];

        return $ret;
    }

    /**
     * The necessary bandwidth of this Bricklet is too high to use getter/callback or
     * high contrast/temperature image at the same time. You have to configure the one
     * you want to use, the Bricklet will optimize the internal configuration accordingly.
     * 
     * Corresponding functions:
     * 
     * * Manual High Contrast Image: BrickletThermalImaging::getHighContrastImage().
     * * Manual Temperature Image: BrickletThermalImaging::getTemperatureImage().
     * * Callback High Contrast Image: BrickletThermalImaging::CALLBACK_HIGH_CONTRAST_IMAGE callback.
     * * Callback Temperature Image: BrickletThermalImaging::CALLBACK_TEMPERATURE_IMAGE callback.
     * 
     * @param int $config
     * 
     * @return void
     */
    public function setImageTransferConfig($config)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $config);

        $this->sendRequest(self::FUNCTION_SET_IMAGE_TRANSFER_CONFIG, $payload, 0);
    }

    /**
     * Returns the image transfer config, as set by BrickletThermalImaging::setImageTransferConfig().
     * 
     * 
     * @return int
     */
    public function getImageTransferConfig()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_IMAGE_TRANSFER_CONFIG, $payload, 9);

        $payload = unpack('C1config', $data);

        return $payload['config'];
    }

    /**
     * Sets the flux linear parameters that can be used for radiometry calibration.
     * 
     * See FLIR document 102-PS245-100-01 for more details.
     * 
     * .. versionadded:: 2.0.5$nbsp;(Plugin)
     * 
     * @param int $scene_emissivity
     * @param int $temperature_background
     * @param int $tau_window
     * @param int $temperatur_window
     * @param int $tau_atmosphere
     * @param int $temperature_atmosphere
     * @param int $reflection_window
     * @param int $temperature_reflection
     * 
     * @return void
     */
    public function setFluxLinearParameters($scene_emissivity, $temperature_background, $tau_window, $temperatur_window, $tau_atmosphere, $temperature_atmosphere, $reflection_window, $temperature_reflection)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $scene_emissivity);
        $payload .= pack('v', $temperature_background);
        $payload .= pack('v', $tau_window);
        $payload .= pack('v', $temperatur_window);
        $payload .= pack('v', $tau_atmosphere);
        $payload .= pack('v', $temperature_atmosphere);
        $payload .= pack('v', $reflection_window);
        $payload .= pack('v', $temperature_reflection);

        $this->sendRequest(self::FUNCTION_SET_FLUX_LINEAR_PARAMETERS, $payload, 0);
    }

    /**
     * Returns the flux linear parameters, as set by BrickletThermalImaging::setFluxLinearParameters().
     * 
     * .. versionadded:: 2.0.5$nbsp;(Plugin)
     * 
     * 
     * @return array
     */
    public function getFluxLinearParameters()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_FLUX_LINEAR_PARAMETERS, $payload, 24);

        $payload = unpack('v1scene_emissivity/v1temperature_background/v1tau_window/v1temperatur_window/v1tau_atmosphere/v1temperature_atmosphere/v1reflection_window/v1temperature_reflection', $data);

        $ret['scene_emissivity'] = $payload['scene_emissivity'];
        $ret['temperature_background'] = $payload['temperature_background'];
        $ret['tau_window'] = $payload['tau_window'];
        $ret['temperatur_window'] = $payload['temperatur_window'];
        $ret['tau_atmosphere'] = $payload['tau_atmosphere'];
        $ret['temperature_atmosphere'] = $payload['temperature_atmosphere'];
        $ret['reflection_window'] = $payload['reflection_window'];
        $ret['temperature_reflection'] = $payload['temperature_reflection'];

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
     * Returns the current bootloader mode, see BrickletThermalImaging::setBootloaderMode().
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
     * Sets the firmware pointer for BrickletThermalImaging::writeFirmware(). The pointer has
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
     * BrickletThermalImaging::setWriteFirmwarePointer() before. The firmware is written
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
     * Returns the configuration as set by BrickletThermalImaging::setStatusLEDConfig()
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
     * Returns the current high contrast image. See `here <https://www.tinkerforge.com/en/doc/Hardware/Bricklets/Thermal_Imaging.html#high-contrast-image-vs-temperature-image>`__
     * for the difference between
     * High Contrast and Temperature Image. If you don't know what to use
     * the High Contrast Image is probably right for you.
     * 
     * The data is organized as a 8-bit value 80x60 pixel matrix linearized in
     * a one-dimensional array. The data is arranged line by line from top left to
     * bottom right.
     * 
     * Each 8-bit value represents one gray-scale image pixel that can directly be
     * shown to a user on a display.
     * 
     * Before you can use this function you have to enable it with
     * BrickletThermalImaging::setImageTransferConfig().
     * 
     * 
     * @return array
     */
    public function getHighContrastImage()
    {
        $image_length = 4800;
        $ret = $this->getHighContrastImageLowLevel();
        
        if ($ret['image_chunk_offset'] === (1 << 16) - 1) { // maximum chunk offset -> stream has no data
            $image_length = 0;
            $image_out_of_sync = false;
            $image_data = array();
        } else {
            $image_out_of_sync = $ret['image_chunk_offset'] != 0;
            $image_data = $ret['image_chunk_data'];
        }

        while (!$image_out_of_sync && count($image_data) < $image_length) {
            $ret = $this->getHighContrastImageLowLevel();
            $image_out_of_sync = $ret['image_chunk_offset'] != count($image_data);
            $image_data = array_merge($image_data, $ret['image_chunk_data']);
        }

        if ($image_out_of_sync) { // discard remaining stream to bring it back in-sync
            while ($ret['image_chunk_offset'] + 62 < $image_length) {
                $ret = $this->getHighContrastImageLowLevel();
            }

            throw new StreamOutOfSyncException('Image stream is out-of-sync');
        }

        return array_slice($image_data, 0, $image_length);
    }

    /**
     * Returns the current temperature image. See `here <https://www.tinkerforge.com/en/doc/Hardware/Bricklets/Thermal_Imaging.html#high-contrast-image-vs-temperature-image>`__
     * for the difference between High Contrast and Temperature Image.
     * If you don't know what to use the High Contrast Image is probably right for you.
     * 
     * The data is organized as a 16-bit value 80x60 pixel matrix linearized in
     * a one-dimensional array. The data is arranged line by line from top left to
     * bottom right.
     * 
     * Each 16-bit value represents one temperature measurement in either
     * Kelvin/10 or Kelvin/100 (depending on the resolution set with BrickletThermalImaging::setResolution()).
     * 
     * Before you can use this function you have to enable it with
     * BrickletThermalImaging::setImageTransferConfig().
     * 
     * 
     * @return array
     */
    public function getTemperatureImage()
    {
        $image_length = 4800;
        $ret = $this->getTemperatureImageLowLevel();
        
        if ($ret['image_chunk_offset'] === (1 << 16) - 1) { // maximum chunk offset -> stream has no data
            $image_length = 0;
            $image_out_of_sync = false;
            $image_data = array();
        } else {
            $image_out_of_sync = $ret['image_chunk_offset'] != 0;
            $image_data = $ret['image_chunk_data'];
        }

        while (!$image_out_of_sync && count($image_data) < $image_length) {
            $ret = $this->getTemperatureImageLowLevel();
            $image_out_of_sync = $ret['image_chunk_offset'] != count($image_data);
            $image_data = array_merge($image_data, $ret['image_chunk_data']);
        }

        if ($image_out_of_sync) { // discard remaining stream to bring it back in-sync
            while ($ret['image_chunk_offset'] + 31 < $image_length) {
                $ret = $this->getTemperatureImageLowLevel();
            }

            throw new StreamOutOfSyncException('Image stream is out-of-sync');
        }

        return array_slice($image_data, 0, $image_length);
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
    public function callbackWrapperHighContrastImageLowLevel($data)
    {
        $payload = unpack('v1image_chunk_offset/C62image_chunk_data', $data);
        $payload['image_chunk_data'] = IPConnection::collectUnpackedArray($payload, 'image_chunk_data', 62);

        $high_level_callback = &$this->high_level_callbacks[self::CALLBACK_HIGH_CONTRAST_IMAGE];
        $image_chunk_length = min(4800 - $payload['image_chunk_offset'], 62);

        if ($high_level_callback['data'] === NULL) { // no stream in-progress
            if ($payload['image_chunk_offset'] === 0) { // stream starts
                $high_level_callback['data'] = array_slice($payload['image_chunk_data'], 0, $image_chunk_length);

                if (count($high_level_callback['data']) >= 4800) { // stream complete
                    if (array_key_exists(self::CALLBACK_HIGH_CONTRAST_IMAGE, $this->registered_callbacks)) {
                        $function = $this->registered_callbacks[self::CALLBACK_HIGH_CONTRAST_IMAGE];
                        $user_data = $this->registered_callback_user_data[self::CALLBACK_HIGH_CONTRAST_IMAGE];
                        $payload['image'] = $high_level_callback['data'];

                        call_user_func($function, $payload['image'], $user_data);
                    }

                    $high_level_callback['data'] = NULL;
                }
            } else { // ignore tail of current stream, wait for next stream start
            }
        } else { // stream in-progress
            if ($payload['image_chunk_offset'] !== count($high_level_callback['data'])) { // stream out-of-sync
                $high_level_callback['data'] = NULL;

                if (array_key_exists(self::CALLBACK_HIGH_CONTRAST_IMAGE, $this->registered_callbacks)) {
                    $function = $this->registered_callbacks[self::CALLBACK_HIGH_CONTRAST_IMAGE];
                    $user_data = $this->registered_callback_user_data[self::CALLBACK_HIGH_CONTRAST_IMAGE];
                    $payload['image'] = $high_level_callback['data'];

                    call_user_func($function, $payload['image'], $user_data);
                }
            } else { // stream in-sync
                $high_level_callback['data'] = array_merge($high_level_callback['data'], array_slice($payload['image_chunk_data'], 0, $image_chunk_length));

                if (count($high_level_callback['data']) >= 4800) { // stream complete
                    if (array_key_exists(self::CALLBACK_HIGH_CONTRAST_IMAGE, $this->registered_callbacks)) {
                        $function = $this->registered_callbacks[self::CALLBACK_HIGH_CONTRAST_IMAGE];
                        $user_data = $this->registered_callback_user_data[self::CALLBACK_HIGH_CONTRAST_IMAGE];
                        $payload['image'] = $high_level_callback['data'];

                        call_user_func($function, $payload['image'], $user_data);
                    }

                    $high_level_callback['data'] = NULL;
                }
            }
        }

        if (array_key_exists(self::CALLBACK_HIGH_CONTRAST_IMAGE_LOW_LEVEL, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_HIGH_CONTRAST_IMAGE_LOW_LEVEL];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_HIGH_CONTRAST_IMAGE_LOW_LEVEL];

            call_user_func($function, $payload['image_chunk_offset'], $payload['image_chunk_data'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperTemperatureImageLowLevel($data)
    {
        $payload = unpack('v1image_chunk_offset/v31image_chunk_data', $data);
        $payload['image_chunk_data'] = IPConnection::collectUnpackedArray($payload, 'image_chunk_data', 31);

        $high_level_callback = &$this->high_level_callbacks[self::CALLBACK_TEMPERATURE_IMAGE];
        $image_chunk_length = min(4800 - $payload['image_chunk_offset'], 31);

        if ($high_level_callback['data'] === NULL) { // no stream in-progress
            if ($payload['image_chunk_offset'] === 0) { // stream starts
                $high_level_callback['data'] = array_slice($payload['image_chunk_data'], 0, $image_chunk_length);

                if (count($high_level_callback['data']) >= 4800) { // stream complete
                    if (array_key_exists(self::CALLBACK_TEMPERATURE_IMAGE, $this->registered_callbacks)) {
                        $function = $this->registered_callbacks[self::CALLBACK_TEMPERATURE_IMAGE];
                        $user_data = $this->registered_callback_user_data[self::CALLBACK_TEMPERATURE_IMAGE];
                        $payload['image'] = $high_level_callback['data'];

                        call_user_func($function, $payload['image'], $user_data);
                    }

                    $high_level_callback['data'] = NULL;
                }
            } else { // ignore tail of current stream, wait for next stream start
            }
        } else { // stream in-progress
            if ($payload['image_chunk_offset'] !== count($high_level_callback['data'])) { // stream out-of-sync
                $high_level_callback['data'] = NULL;

                if (array_key_exists(self::CALLBACK_TEMPERATURE_IMAGE, $this->registered_callbacks)) {
                    $function = $this->registered_callbacks[self::CALLBACK_TEMPERATURE_IMAGE];
                    $user_data = $this->registered_callback_user_data[self::CALLBACK_TEMPERATURE_IMAGE];
                    $payload['image'] = $high_level_callback['data'];

                    call_user_func($function, $payload['image'], $user_data);
                }
            } else { // stream in-sync
                $high_level_callback['data'] = array_merge($high_level_callback['data'], array_slice($payload['image_chunk_data'], 0, $image_chunk_length));

                if (count($high_level_callback['data']) >= 4800) { // stream complete
                    if (array_key_exists(self::CALLBACK_TEMPERATURE_IMAGE, $this->registered_callbacks)) {
                        $function = $this->registered_callbacks[self::CALLBACK_TEMPERATURE_IMAGE];
                        $user_data = $this->registered_callback_user_data[self::CALLBACK_TEMPERATURE_IMAGE];
                        $payload['image'] = $high_level_callback['data'];

                        call_user_func($function, $payload['image'], $user_data);
                    }

                    $high_level_callback['data'] = NULL;
                }
            }
        }

        if (array_key_exists(self::CALLBACK_TEMPERATURE_IMAGE_LOW_LEVEL, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_TEMPERATURE_IMAGE_LOW_LEVEL];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_TEMPERATURE_IMAGE_LOW_LEVEL];

            call_user_func($function, $payload['image_chunk_offset'], $payload['image_chunk_data'], $user_data);
        }
    }
}

?>
