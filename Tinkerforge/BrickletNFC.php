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
 * NFC tag read/write, NFC P2P and Card Emulation
 */
class BrickletNFC extends Device
{

    /**
     * This callback is called if the reader state of the NFC Bricklet changes.
     * See BrickletNFC::readerGetState() for more information about the possible states.
     */
    const CALLBACK_READER_STATE_CHANGED = 13;

    /**
     * This callback is called if the cardemu state of the NFC Bricklet changes.
     * See BrickletNFC::cardemuGetState() for more information about the possible states.
     */
    const CALLBACK_CARDEMU_STATE_CHANGED = 18;

    /**
     * This callback is called if the P2P state of the NFC Bricklet changes.
     * See BrickletNFC::p2pGetState() for more information about the possible states.
     */
    const CALLBACK_P2P_STATE_CHANGED = 24;


    /**
     * @internal
     */
    const FUNCTION_SET_MODE = 1;

    /**
     * @internal
     */
    const FUNCTION_GET_MODE = 2;

    /**
     * @internal
     */
    const FUNCTION_READER_REQUEST_TAG_ID = 3;

    /**
     * @internal
     */
    const FUNCTION_READER_GET_TAG_ID_LOW_LEVEL = 4;

    /**
     * @internal
     */
    const FUNCTION_READER_GET_STATE = 5;

    /**
     * @internal
     */
    const FUNCTION_READER_WRITE_NDEF_LOW_LEVEL = 6;

    /**
     * @internal
     */
    const FUNCTION_READER_REQUEST_NDEF = 7;

    /**
     * @internal
     */
    const FUNCTION_READER_READ_NDEF_LOW_LEVEL = 8;

    /**
     * @internal
     */
    const FUNCTION_READER_AUTHENTICATE_MIFARE_CLASSIC_PAGE = 9;

    /**
     * @internal
     */
    const FUNCTION_READER_WRITE_PAGE_LOW_LEVEL = 10;

    /**
     * @internal
     */
    const FUNCTION_READER_REQUEST_PAGE = 11;

    /**
     * @internal
     */
    const FUNCTION_READER_READ_PAGE_LOW_LEVEL = 12;

    /**
     * @internal
     */
    const FUNCTION_CARDEMU_GET_STATE = 14;

    /**
     * @internal
     */
    const FUNCTION_CARDEMU_START_DISCOVERY = 15;

    /**
     * @internal
     */
    const FUNCTION_CARDEMU_WRITE_NDEF_LOW_LEVEL = 16;

    /**
     * @internal
     */
    const FUNCTION_CARDEMU_START_TRANSFER = 17;

    /**
     * @internal
     */
    const FUNCTION_P2P_GET_STATE = 19;

    /**
     * @internal
     */
    const FUNCTION_P2P_START_DISCOVERY = 20;

    /**
     * @internal
     */
    const FUNCTION_P2P_WRITE_NDEF_LOW_LEVEL = 21;

    /**
     * @internal
     */
    const FUNCTION_P2P_START_TRANSFER = 22;

    /**
     * @internal
     */
    const FUNCTION_P2P_READ_NDEF_LOW_LEVEL = 23;

    /**
     * @internal
     */
    const FUNCTION_SET_DETECTION_LED_CONFIG = 25;

    /**
     * @internal
     */
    const FUNCTION_GET_DETECTION_LED_CONFIG = 26;

    /**
     * @internal
     */
    const FUNCTION_SET_MAXIMUM_TIMEOUT = 27;

    /**
     * @internal
     */
    const FUNCTION_GET_MAXIMUM_TIMEOUT = 28;

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

    const MODE_OFF = 0;
    const MODE_CARDEMU = 1;
    const MODE_P2P = 2;
    const MODE_READER = 3;
    const TAG_TYPE_MIFARE_CLASSIC = 0;
    const TAG_TYPE_TYPE1 = 1;
    const TAG_TYPE_TYPE2 = 2;
    const TAG_TYPE_TYPE3 = 3;
    const TAG_TYPE_TYPE4 = 4;
    const READER_STATE_INITIALIZATION = 0;
    const READER_STATE_IDLE = 128;
    const READER_STATE_ERROR = 192;
    const READER_STATE_REQUEST_TAG_ID = 2;
    const READER_STATE_REQUEST_TAG_ID_READY = 130;
    const READER_STATE_REQUEST_TAG_ID_ERROR = 194;
    const READER_STATE_AUTHENTICATE_MIFARE_CLASSIC_PAGE = 3;
    const READER_STATE_AUTHENTICATE_MIFARE_CLASSIC_PAGE_READY = 131;
    const READER_STATE_AUTHENTICATE_MIFARE_CLASSIC_PAGE_ERROR = 195;
    const READER_STATE_WRITE_PAGE = 4;
    const READER_STATE_WRITE_PAGE_READY = 132;
    const READER_STATE_WRITE_PAGE_ERROR = 196;
    const READER_STATE_REQUEST_PAGE = 5;
    const READER_STATE_REQUEST_PAGE_READY = 133;
    const READER_STATE_REQUEST_PAGE_ERROR = 197;
    const READER_STATE_WRITE_NDEF = 6;
    const READER_STATE_WRITE_NDEF_READY = 134;
    const READER_STATE_WRITE_NDEF_ERROR = 198;
    const READER_STATE_REQUEST_NDEF = 7;
    const READER_STATE_REQUEST_NDEF_READY = 135;
    const READER_STATE_REQUEST_NDEF_ERROR = 199;
    const KEY_A = 0;
    const KEY_B = 1;
    const READER_WRITE_TYPE4_CAPABILITY_CONTAINER = 3;
    const READER_WRITE_TYPE4_NDEF = 4;
    const READER_REQUEST_TYPE4_CAPABILITY_CONTAINER = 3;
    const READER_REQUEST_TYPE4_NDEF = 4;
    const CARDEMU_STATE_INITIALIZATION = 0;
    const CARDEMU_STATE_IDLE = 128;
    const CARDEMU_STATE_ERROR = 192;
    const CARDEMU_STATE_DISCOVER = 2;
    const CARDEMU_STATE_DISCOVER_READY = 130;
    const CARDEMU_STATE_DISCOVER_ERROR = 194;
    const CARDEMU_STATE_TRANSFER_NDEF = 3;
    const CARDEMU_STATE_TRANSFER_NDEF_READY = 131;
    const CARDEMU_STATE_TRANSFER_NDEF_ERROR = 195;
    const CARDEMU_TRANSFER_ABORT = 0;
    const CARDEMU_TRANSFER_WRITE = 1;
    const P2P_STATE_INITIALIZATION = 0;
    const P2P_STATE_IDLE = 128;
    const P2P_STATE_ERROR = 192;
    const P2P_STATE_DISCOVER = 2;
    const P2P_STATE_DISCOVER_READY = 130;
    const P2P_STATE_DISCOVER_ERROR = 194;
    const P2P_STATE_TRANSFER_NDEF = 3;
    const P2P_STATE_TRANSFER_NDEF_READY = 131;
    const P2P_STATE_TRANSFER_NDEF_ERROR = 195;
    const P2P_TRANSFER_ABORT = 0;
    const P2P_TRANSFER_WRITE = 1;
    const P2P_TRANSFER_READ = 2;
    const DETECTION_LED_CONFIG_OFF = 0;
    const DETECTION_LED_CONFIG_ON = 1;
    const DETECTION_LED_CONFIG_SHOW_HEARTBEAT = 2;
    const DETECTION_LED_CONFIG_SHOW_DETECTION = 3;
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

    const DEVICE_IDENTIFIER = 286;

    const DEVICE_DISPLAY_NAME = 'NFC Bricklet';

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

        $this->response_expected[self::FUNCTION_SET_MODE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_MODE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_READER_REQUEST_TAG_ID] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_READER_GET_TAG_ID_LOW_LEVEL] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_READER_GET_STATE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_READER_WRITE_NDEF_LOW_LEVEL] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_READER_REQUEST_NDEF] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_READER_READ_NDEF_LOW_LEVEL] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_READER_AUTHENTICATE_MIFARE_CLASSIC_PAGE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_READER_WRITE_PAGE_LOW_LEVEL] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_READER_REQUEST_PAGE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_READER_READ_PAGE_LOW_LEVEL] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_CARDEMU_GET_STATE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_CARDEMU_START_DISCOVERY] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_CARDEMU_WRITE_NDEF_LOW_LEVEL] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_CARDEMU_START_TRANSFER] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_P2P_GET_STATE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_P2P_START_DISCOVERY] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_P2P_WRITE_NDEF_LOW_LEVEL] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_P2P_START_TRANSFER] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_P2P_READ_NDEF_LOW_LEVEL] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_DETECTION_LED_CONFIG] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_DETECTION_LED_CONFIG] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_MAXIMUM_TIMEOUT] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_MAXIMUM_TIMEOUT] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
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

        $this->callback_wrappers[self::CALLBACK_READER_STATE_CHANGED] = array(10, 'callbackWrapperReaderStateChanged');
        $this->callback_wrappers[self::CALLBACK_CARDEMU_STATE_CHANGED] = array(10, 'callbackWrapperCardemuStateChanged');
        $this->callback_wrappers[self::CALLBACK_P2P_STATE_CHANGED] = array(10, 'callbackWrapperP2PStateChanged');

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
     * Sets the mode. The NFC Bricklet supports four modes:
     * 
     * * Off
     * * Card Emulation (Cardemu): Emulates a tag for other readers
     * * Peer to Peer (P2P): Exchange data with other readers
     * * Reader: Reads and writes tags
     * 
     * If you change a mode, the Bricklet will reconfigure the hardware for this mode.
     * Therefore, you can only use functions corresponding to the current mode. For
     * example, in Reader mode you can only use Reader functions.
     * 
     * @param int $mode
     * 
     * @return void
     */
    public function setMode($mode)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $mode);

        $this->sendRequest(self::FUNCTION_SET_MODE, $payload, 0);
    }

    /**
     * Returns the mode as set by BrickletNFC::setMode().
     * 
     * 
     * @return int
     */
    public function getMode()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_MODE, $payload, 9);

        $payload = unpack('C1mode', $data);

        return $payload['mode'];
    }

    /**
     * After you call BrickletNFC::readerRequestTagID() the NFC Bricklet will try to read
     * the tag ID from the tag. After this process is done the state will change.
     * You can either register the BrickletNFC::CALLBACK_READER_STATE_CHANGED callback or you can poll
     * BrickletNFC::readerGetState() to find out about the state change.
     * 
     * If the state changes to *ReaderRequestTagIDError* it means that either there was
     * no tag present or that the tag has an incompatible type. If the state
     * changes to *ReaderRequestTagIDReady* it means that a compatible tag was found
     * and that the tag ID has been saved. You can now read out the tag ID by
     * calling BrickletNFC::readerGetTagID().
     * 
     * If two tags are in the proximity of the NFC Bricklet, this
     * function will cycle through the tags. To select a specific tag you have
     * to call BrickletNFC::readerRequestTagID() until the correct tag ID is found.
     * 
     * In case of any *ReaderError* state the selection is lost and you have to
     * start again by calling BrickletNFC::readerRequestTagID().
     * 
     * 
     * @return void
     */
    public function readerRequestTagID()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_READER_REQUEST_TAG_ID, $payload, 0);
    }

    /**
     * Returns the tag type and the tag ID. This function can only be called if the
     * NFC Bricklet is currently in one of the *ReaderReady* states. The returned tag ID
     * is the tag ID that was saved through the last call of BrickletNFC::readerRequestTagID().
     * 
     * To get the tag ID of a tag the approach is as follows:
     * 
     * 1. Call BrickletNFC::readerRequestTagID()
     * 2. Wait for state to change to *ReaderRequestTagIDReady* (see BrickletNFC::readerGetState() or
     *    BrickletNFC::CALLBACK_READER_STATE_CHANGED callback)
     * 3. Call BrickletNFC::readerGetTagID()
     * 
     * 
     * @return array
     */
    public function readerGetTagIDLowLevel()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_READER_GET_TAG_ID_LOW_LEVEL, $payload, 42);

        $payload = unpack('C1tag_type/C1tag_id_length/C32tag_id_data', $data);

        $ret['tag_type'] = $payload['tag_type'];
        $ret['tag_id_length'] = $payload['tag_id_length'];
        $ret['tag_id_data'] = IPConnection::collectUnpackedArray($payload, 'tag_id_data', 32);

        return $ret;
    }

    /**
     * Returns the current reader state of the NFC Bricklet.
     * 
     * On startup the Bricklet will be in the *ReaderInitialization* state. The
     * initialization will only take about 20ms. After that it changes to *ReaderIdle*.
     * 
     * The Bricklet is also reinitialized if the mode is changed, see BrickletNFC::setMode().
     * 
     * The functions of this Bricklet can be called in the *ReaderIdle* state and all of
     * the *ReaderReady* and *ReaderError* states.
     * 
     * Example: If you call BrickletNFC::readerRequestPage(), the state will change to
     * *ReaderRequestPage* until the reading of the page is finished. Then it will change
     * to either *ReaderRequestPageReady* if it worked or to *ReaderRequestPageError* if it
     * didn't. If the request worked you can get the page by calling BrickletNFC::readerReadPage().
     * 
     * The same approach is used analogously for the other API functions.
     * 
     * 
     * @return array
     */
    public function readerGetState()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_READER_GET_STATE, $payload, 10);

        $payload = unpack('C1state/C1idle', $data);

        $ret['state'] = $payload['state'];
        $ret['idle'] = (bool)$payload['idle'];

        return $ret;
    }

    /**
     * Writes NDEF formated data.
     * 
     * This function currently supports NFC Forum Type 2 and 4.
     * 
     * The general approach for writing a NDEF message is as follows:
     * 
     * 1. Call BrickletNFC::readerRequestTagID()
     * 2. Wait for state to change to *ReaderRequestTagIDReady* (see
     *    BrickletNFC::readerGetState() or BrickletNFC::CALLBACK_READER_STATE_CHANGED callback)
     * 3. If looking for a specific tag then call BrickletNFC::readerGetTagID() and check
     *    if the expected tag was found, if it was not found got back to step 1
     * 4. Call BrickletNFC::readerWriteNDEF() with the NDEF message that you want to write
     * 5. Wait for state to change to *ReaderWriteNDEFReady* (see BrickletNFC::readerGetState()
     *    or BrickletNFC::CALLBACK_READER_STATE_CHANGED callback)
     * 
     * @param int $ndef_length
     * @param int $ndef_chunk_offset
     * @param int[] $ndef_chunk_data
     * 
     * @return void
     */
    public function readerWriteNDEFLowLevel($ndef_length, $ndef_chunk_offset, $ndef_chunk_data)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $ndef_length);
        $payload .= pack('v', $ndef_chunk_offset);
        for ($i = 0; $i < 60; $i++) {
            $payload .= pack('C', $ndef_chunk_data[$i]);
        }

        $this->sendRequest(self::FUNCTION_READER_WRITE_NDEF_LOW_LEVEL, $payload, 0);
    }

    /**
     * Reads NDEF formated data from a tag.
     * 
     * This function currently supports NFC Forum Type 1, 2, 3 and 4.
     * 
     * The general approach for reading a NDEF message is as follows:
     * 
     * 1. Call BrickletNFC::readerRequestTagID()
     * 2. Wait for state to change to *RequestTagIDReady* (see BrickletNFC::readerGetState()
     *    or BrickletNFC::CALLBACK_READER_STATE_CHANGED callback)
     * 3. If looking for a specific tag then call BrickletNFC::readerGetTagID() and check if the
     *    expected tag was found, if it was not found got back to step 1
     * 4. Call BrickletNFC::readerRequestNDEF()
     * 5. Wait for state to change to *ReaderRequestNDEFReady* (see BrickletNFC::readerGetState()
     *    or BrickletNFC::CALLBACK_READER_STATE_CHANGED callback)
     * 6. Call BrickletNFC::readerReadNDEF() to retrieve the NDEF message from the buffer
     * 
     * 
     * @return void
     */
    public function readerRequestNDEF()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_READER_REQUEST_NDEF, $payload, 0);
    }

    /**
     * Returns the NDEF data from an internal buffer. To fill the buffer
     * with a NDEF message you have to call BrickletNFC::readerRequestNDEF() beforehand.
     * 
     * 
     * @return array
     */
    public function readerReadNDEFLowLevel()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_READER_READ_NDEF_LOW_LEVEL, $payload, 72);

        $payload = unpack('v1ndef_length/v1ndef_chunk_offset/C60ndef_chunk_data', $data);

        $ret['ndef_length'] = $payload['ndef_length'];
        $ret['ndef_chunk_offset'] = $payload['ndef_chunk_offset'];
        $ret['ndef_chunk_data'] = IPConnection::collectUnpackedArray($payload, 'ndef_chunk_data', 60);

        return $ret;
    }

    /**
     * Mifare Classic tags use authentication. If you want to read from or write to
     * a Mifare Classic page you have to authenticate it beforehand.
     * Each page can be authenticated with two keys: A (``key_number`` = 0) and B
     * (``key_number`` = 1). A new Mifare Classic
     * tag that has not yet been written to can be accessed with key A
     * and the default key ``[0xFF, 0xFF, 0xFF, 0xFF, 0xFF, 0xFF]``.
     * 
     * The approach to read or write a Mifare Classic page is as follows:
     * 
     * 1. Call BrickletNFC::readerRequestTagID()
     * 2. Wait for state to change to *ReaderRequestTagIDReady* (see BrickletNFC::readerGetState()
     *    or BrickletNFC::CALLBACK_READER_STATE_CHANGED callback)
     * 3. If looking for a specific tag then call BrickletNFC::readerGetTagID() and check if the
     *    expected tag was found, if it was not found got back to step 1
     * 4. Call BrickletNFC::readerAuthenticateMifareClassicPage() with page and key for the page
     * 5. Wait for state to change to *ReaderAuthenticatingMifareClassicPageReady* (see
     *    BrickletNFC::readerGetState() or BrickletNFC::CALLBACK_READER_STATE_CHANGED callback)
     * 6. Call BrickletNFC::readerRequestPage() or BrickletNFC::readerWritePage() to read/write page
     * 
     * The authentication will always work for one whole sector (4 pages).
     * 
     * @param int $page
     * @param int $key_number
     * @param int[] $key
     * 
     * @return void
     */
    public function readerAuthenticateMifareClassicPage($page, $key_number, $key)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $page);
        $payload .= pack('C', $key_number);
        for ($i = 0; $i < 6; $i++) {
            $payload .= pack('C', $key[$i]);
        }

        $this->sendRequest(self::FUNCTION_READER_AUTHENTICATE_MIFARE_CLASSIC_PAGE, $payload, 0);
    }

    /**
     * Writes a maximum of 8192 bytes starting from the given page. How many pages are written
     * depends on the tag type. The page sizes are as follows:
     * 
     * * Mifare Classic page size: 16 byte
     * * NFC Forum Type 1 page size: 8 byte
     * * NFC Forum Type 2 page size: 4 byte
     * * NFC Forum Type 3 page size: 16 byte
     * * NFC Forum Type 4: No pages, page = file selection (CC or NDEF, see below)
     * 
     * The general approach for writing to a tag is as follows:
     * 
     * 1. Call BrickletNFC::readerRequestTagID()
     * 2. Wait for state to change to *ReaderRequestTagIDReady* (see BrickletNFC::readerGetState() or
     *    BrickletNFC::CALLBACK_READER_STATE_CHANGED callback)
     * 3. If looking for a specific tag then call BrickletNFC::readerGetTagID() and check if the
     *    expected tag was found, if it was not found got back to step 1
     * 4. Call BrickletNFC::readerWritePage() with page number and data
     * 5. Wait for state to change to *ReaderWritePageReady* (see BrickletNFC::readerGetState() or
     *    BrickletNFC::CALLBACK_READER_STATE_CHANGED callback)
     * 
     * If you use a Mifare Classic tag you have to authenticate a page before you
     * can write to it. See BrickletNFC::readerAuthenticateMifareClassicPage().
     * 
     * NFC Forum Type 4 tags are not organized into pages but different files. We currently
     * support two files: Capability Container file (CC) and NDEF file.
     * 
     * Choose CC by setting page to 3 or NDEF by setting page to 4.
     * 
     * @param int $page
     * @param int $data_length
     * @param int $data_chunk_offset
     * @param int[] $data_chunk_data
     * 
     * @return void
     */
    public function readerWritePageLowLevel($page, $data_length, $data_chunk_offset, $data_chunk_data)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $page);
        $payload .= pack('v', $data_length);
        $payload .= pack('v', $data_chunk_offset);
        for ($i = 0; $i < 58; $i++) {
            $payload .= pack('C', $data_chunk_data[$i]);
        }

        $this->sendRequest(self::FUNCTION_READER_WRITE_PAGE_LOW_LEVEL, $payload, 0);
    }

    /**
     * Reads a maximum of 8192 bytes starting from the given page and stores them into a buffer.
     * The buffer can then be read out with BrickletNFC::readerReadPage().
     * How many pages are read depends on the tag type. The page sizes are
     * as follows:
     * 
     * * Mifare Classic page size: 16 byte
     * * NFC Forum Type 1 page size: 8 byte
     * * NFC Forum Type 2 page size: 4 byte
     * * NFC Forum Type 3 page size: 16 byte
     * * NFC Forum Type 4: No pages, page = file selection (CC or NDEF, see below)
     * 
     * The general approach for reading a tag is as follows:
     * 
     * 1. Call BrickletNFC::readerRequestTagID()
     * 2. Wait for state to change to *RequestTagIDReady* (see BrickletNFC::readerGetState()
     *    or BrickletNFC::CALLBACK_READER_STATE_CHANGED callback)
     * 3. If looking for a specific tag then call BrickletNFC::readerGetTagID() and check if the
     *    expected tag was found, if it was not found got back to step 1
     * 4. Call BrickletNFC::readerRequestPage() with page number
     * 5. Wait for state to change to *ReaderRequestPageReady* (see BrickletNFC::readerGetState()
     *    or BrickletNFC::CALLBACK_READER_STATE_CHANGED callback)
     * 6. Call BrickletNFC::readerReadPage() to retrieve the page from the buffer
     * 
     * If you use a Mifare Classic tag you have to authenticate a page before you
     * can read it. See BrickletNFC::readerAuthenticateMifareClassicPage().
     * 
     * NFC Forum Type 4 tags are not organized into pages but different files. We currently
     * support two files: Capability Container file (CC) and NDEF file.
     * 
     * Choose CC by setting page to 3 or NDEF by setting page to 4.
     * 
     * @param int $page
     * @param int $length
     * 
     * @return void
     */
    public function readerRequestPage($page, $length)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $page);
        $payload .= pack('v', $length);

        $this->sendRequest(self::FUNCTION_READER_REQUEST_PAGE, $payload, 0);
    }

    /**
     * Returns the page data from an internal buffer. To fill the buffer
     * with specific pages you have to call BrickletNFC::readerRequestPage() beforehand.
     * 
     * 
     * @return array
     */
    public function readerReadPageLowLevel()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_READER_READ_PAGE_LOW_LEVEL, $payload, 72);

        $payload = unpack('v1data_length/v1data_chunk_offset/C60data_chunk_data', $data);

        $ret['data_length'] = $payload['data_length'];
        $ret['data_chunk_offset'] = $payload['data_chunk_offset'];
        $ret['data_chunk_data'] = IPConnection::collectUnpackedArray($payload, 'data_chunk_data', 60);

        return $ret;
    }

    /**
     * Returns the current cardemu state of the NFC Bricklet.
     * 
     * On startup the Bricklet will be in the *CardemuInitialization* state. The
     * initialization will only take about 20ms. After that it changes to *CardemuIdle*.
     * 
     * The Bricklet is also reinitialized if the mode is changed, see BrickletNFC::setMode().
     * 
     * The functions of this Bricklet can be called in the *CardemuIdle* state and all of
     * the *CardemuReady* and *CardemuError* states.
     * 
     * Example: If you call BrickletNFC::cardemuStartDiscovery(), the state will change to
     * *CardemuDiscover* until the discovery is finished. Then it will change
     * to either *CardemuDiscoverReady* if it worked or to *CardemuDiscoverError* if it
     * didn't.
     * 
     * The same approach is used analogously for the other API functions.
     * 
     * 
     * @return array
     */
    public function cardemuGetState()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_CARDEMU_GET_STATE, $payload, 10);

        $payload = unpack('C1state/C1idle', $data);

        $ret['state'] = $payload['state'];
        $ret['idle'] = (bool)$payload['idle'];

        return $ret;
    }

    /**
     * Starts the discovery process. If you call this function while a NFC
     * reader device is near to the NFC Bricklet the state will change from
     * *CardemuDiscovery* to *CardemuDiscoveryReady*.
     * 
     * If no NFC reader device can be found or if there is an error during
     * discovery the cardemu state will change to *CardemuDiscoveryError*. In this case you
     * have to restart the discovery process.
     * 
     * If the cardemu state changes to *CardemuDiscoveryReady* you can start the NDEF message
     * transfer with BrickletNFC::cardemuWriteNDEF() and BrickletNFC::cardemuStartTransfer().
     * 
     * 
     * @return void
     */
    public function cardemuStartDiscovery()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_CARDEMU_START_DISCOVERY, $payload, 0);
    }

    /**
     * Writes the NDEF message that is to be transferred to the NFC peer.
     * 
     * The maximum supported NDEF message size in Cardemu mode is 255 byte.
     * 
     * You can call this function at any time in Cardemu mode. The internal buffer
     * will not be overwritten until you call this function again or change the
     * mode.
     * 
     * @param int $ndef_length
     * @param int $ndef_chunk_offset
     * @param int[] $ndef_chunk_data
     * 
     * @return void
     */
    public function cardemuWriteNDEFLowLevel($ndef_length, $ndef_chunk_offset, $ndef_chunk_data)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $ndef_length);
        $payload .= pack('v', $ndef_chunk_offset);
        for ($i = 0; $i < 60; $i++) {
            $payload .= pack('C', $ndef_chunk_data[$i]);
        }

        $this->sendRequest(self::FUNCTION_CARDEMU_WRITE_NDEF_LOW_LEVEL, $payload, 0);
    }

    /**
     * You can start the transfer of a NDEF message if the cardemu state is *CardemuDiscoveryReady*.
     * 
     * Before you call this function to start a write transfer, the NDEF message that
     * is to be transferred has to be written via BrickletNFC::cardemuWriteNDEF() first.
     * 
     * After you call this function the state will change to *CardemuTransferNDEF*. It will
     * change to *CardemuTransferNDEFReady* if the transfer was successful or
     * *CardemuTransferNDEFError* if it wasn't.
     * 
     * @param int $transfer
     * 
     * @return void
     */
    public function cardemuStartTransfer($transfer)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $transfer);

        $this->sendRequest(self::FUNCTION_CARDEMU_START_TRANSFER, $payload, 0);
    }

    /**
     * Returns the current P2P state of the NFC Bricklet.
     * 
     * On startup the Bricklet will be in the *P2PInitialization* state. The
     * initialization will only take about 20ms. After that it changes to *P2PIdle*.
     * 
     * The Bricklet is also reinitialized if the mode is changed, see BrickletNFC::setMode().
     * 
     * The functions of this Bricklet can be called in the *P2PIdle* state and all of
     * the *P2PReady* and *P2PError* states.
     * 
     * Example: If you call BrickletNFC::p2pStartDiscovery(), the state will change to
     * *P2PDiscover* until the discovery is finished. Then it will change
     * to either P2PDiscoverReady* if it worked or to *P2PDiscoverError* if it
     * didn't.
     * 
     * The same approach is used analogously for the other API functions.
     * 
     * 
     * @return array
     */
    public function p2pGetState()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_P2P_GET_STATE, $payload, 10);

        $payload = unpack('C1state/C1idle', $data);

        $ret['state'] = $payload['state'];
        $ret['idle'] = (bool)$payload['idle'];

        return $ret;
    }

    /**
     * Starts the discovery process. If you call this function while another NFC
     * P2P enabled device is near to the NFC Bricklet the state will change from
     * *P2PDiscovery* to *P2PDiscoveryReady*.
     * 
     * If no NFC P2P enabled device can be found or if there is an error during
     * discovery the P2P state will change to *P2PDiscoveryError*. In this case you
     * have to restart the discovery process.
     * 
     * If the P2P state changes to *P2PDiscoveryReady* you can start the NDEF message
     * transfer with BrickletNFC::p2pStartTransfer().
     * 
     * 
     * @return void
     */
    public function p2pStartDiscovery()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_P2P_START_DISCOVERY, $payload, 0);
    }

    /**
     * Writes the NDEF message that is to be transferred to the NFC peer.
     * 
     * The maximum supported NDEF message size for P2P transfer is 255 byte.
     * 
     * You can call this function at any time in P2P mode. The internal buffer
     * will not be overwritten until you call this function again, change the
     * mode or use P2P to read an NDEF messages.
     * 
     * @param int $ndef_length
     * @param int $ndef_chunk_offset
     * @param int[] $ndef_chunk_data
     * 
     * @return void
     */
    public function p2pWriteNDEFLowLevel($ndef_length, $ndef_chunk_offset, $ndef_chunk_data)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $ndef_length);
        $payload .= pack('v', $ndef_chunk_offset);
        for ($i = 0; $i < 60; $i++) {
            $payload .= pack('C', $ndef_chunk_data[$i]);
        }

        $this->sendRequest(self::FUNCTION_P2P_WRITE_NDEF_LOW_LEVEL, $payload, 0);
    }

    /**
     * You can start the transfer of a NDEF message if the P2P state is *P2PDiscoveryReady*.
     * 
     * Before you call this function to start a write transfer, the NDEF message that
     * is to be transferred has to be written via BrickletNFC::p2pWriteNDEF() first.
     * 
     * After you call this function the P2P state will change to *P2PTransferNDEF*. It will
     * change to *P2PTransferNDEFReady* if the transfer was successfull or
     * *P2PTransferNDEFError* if it wasn't.
     * 
     * If you started a write transfer you are now done. If you started a read transfer
     * you can now use BrickletNFC::p2pReadNDEF() to read the NDEF message that was written
     * by the NFC peer.
     * 
     * @param int $transfer
     * 
     * @return void
     */
    public function p2pStartTransfer($transfer)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $transfer);

        $this->sendRequest(self::FUNCTION_P2P_START_TRANSFER, $payload, 0);
    }

    /**
     * Returns the NDEF message that was written by a NFC peer in NFC P2P mode.
     * 
     * The NDEF message is ready if you called BrickletNFC::p2pStartTransfer() with a
     * read transfer and the P2P state changed to *P2PTransferNDEFReady*.
     * 
     * 
     * @return array
     */
    public function p2pReadNDEFLowLevel()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_P2P_READ_NDEF_LOW_LEVEL, $payload, 72);

        $payload = unpack('v1ndef_length/v1ndef_chunk_offset/C60ndef_chunk_data', $data);

        $ret['ndef_length'] = $payload['ndef_length'];
        $ret['ndef_chunk_offset'] = $payload['ndef_chunk_offset'];
        $ret['ndef_chunk_data'] = IPConnection::collectUnpackedArray($payload, 'ndef_chunk_data', 60);

        return $ret;
    }

    /**
     * Sets the detection LED configuration. By default the LED shows
     * if a card/reader is detected.
     * 
     * You can also turn the LED permanently on/off or show a heartbeat.
     * 
     * If the Bricklet is in bootloader mode, the LED is off.
     * 
     * @param int $config
     * 
     * @return void
     */
    public function setDetectionLEDConfig($config)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $config);

        $this->sendRequest(self::FUNCTION_SET_DETECTION_LED_CONFIG, $payload, 0);
    }

    /**
     * Returns the configuration as set by BrickletNFC::setDetectionLEDConfig()
     * 
     * 
     * @return int
     */
    public function getDetectionLEDConfig()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_DETECTION_LED_CONFIG, $payload, 9);

        $payload = unpack('C1config', $data);

        return $payload['config'];
    }

    /**
     * Sets the maximum timeout.
     * 
     * This is a global maximum used for all internal state timeouts. The timeouts depend heavily
     * on the used tags etc. For example: If you use a Type 2 tag and you want to detect if
     * it is present, you have to use BrickletNFC::readerRequestTagID() and wait for the state
     * to change to either the error state or the ready state.
     * 
     * With the default configuration this takes 2-3 seconds. By setting the maximum timeout to
     * 100ms you can reduce this time to ~150-200ms. For Type 2 this would also still work
     * with a 20ms timeout (a Type 2 tag answers usually within 10ms). A type 4 tag can take
     * up to 500ms in our tests.
     * 
     * If you need a fast response time to discover if a tag is present or not you can find
     * a good timeout value by trial and error for your specific tag.
     * 
     * By default we use a very conservative timeout, to be sure that any tag can always
     * answer in time.
     * 
     * .. versionadded:: 2.0.1$nbsp;(Plugin)
     * 
     * @param int $timeout
     * 
     * @return void
     */
    public function setMaximumTimeout($timeout)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $timeout);

        $this->sendRequest(self::FUNCTION_SET_MAXIMUM_TIMEOUT, $payload, 0);
    }

    /**
     * Returns the timeout as set by BrickletNFC::setMaximumTimeout()
     * 
     * .. versionadded:: 2.0.1$nbsp;(Plugin)
     * 
     * 
     * @return int
     */
    public function getMaximumTimeout()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_MAXIMUM_TIMEOUT, $payload, 10);

        $payload = unpack('v1timeout', $data);

        return $payload['timeout'];
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
     * Returns the current bootloader mode, see BrickletNFC::setBootloaderMode().
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
     * Sets the firmware pointer for BrickletNFC::writeFirmware(). The pointer has
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
     * BrickletNFC::setWriteFirmwarePointer() before. The firmware is written
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
     * Returns the configuration as set by BrickletNFC::setStatusLEDConfig()
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
     * Returns the tag type and the tag ID. This function can only be called if the
     * NFC Bricklet is currently in one of the *ReaderReady* states. The returned tag ID
     * is the tag ID that was saved through the last call of BrickletNFC::readerRequestTagID().
     * 
     * To get the tag ID of a tag the approach is as follows:
     * 
     * 1. Call BrickletNFC::readerRequestTagID()
     * 2. Wait for state to change to *ReaderRequestTagIDReady* (see BrickletNFC::readerGetState() or
     *    BrickletNFC::CALLBACK_READER_STATE_CHANGED callback)
     * 3. Call BrickletNFC::readerGetTagID()
     * 
     * 
     * @return array
     */
    public function readerGetTagID()
    {
        $ret = $this->readerGetTagIDLowLevel();

        return array('tag_type' => $ret['tag_type'], 'tag_id' => array_slice($ret['tag_id_data'], 0, $ret['tag_id_length']));
    }

    /**
     * Writes NDEF formated data.
     * 
     * This function currently supports NFC Forum Type 2 and 4.
     * 
     * The general approach for writing a NDEF message is as follows:
     * 
     * 1. Call BrickletNFC::readerRequestTagID()
     * 2. Wait for state to change to *ReaderRequestTagIDReady* (see
     *    BrickletNFC::readerGetState() or BrickletNFC::CALLBACK_READER_STATE_CHANGED callback)
     * 3. If looking for a specific tag then call BrickletNFC::readerGetTagID() and check
     *    if the expected tag was found, if it was not found got back to step 1
     * 4. Call BrickletNFC::readerWriteNDEF() with the NDEF message that you want to write
     * 5. Wait for state to change to *ReaderWriteNDEFReady* (see BrickletNFC::readerGetState()
     *    or BrickletNFC::CALLBACK_READER_STATE_CHANGED callback)
     * 
     * @param int[] $ndef
     * 
     * @return void
     */
    public function readerWriteNDEF($ndef)
    {
        if (count($ndef) > 65535) {
            throw new \InvalidArgumentException('NDEF can be at most 65535 items long');
        }

        $ndef_length = count($ndef);
        $ndef_chunk_offset = 0;

        if ($ndef_length === 0) {
            $ndef_chunk_data = array_fill(0, 60, 0);
            $ret = $this->readerWriteNDEFLowLevel($ndef_length, $ndef_chunk_offset, $ndef_chunk_data);
        } else {
            while ($ndef_chunk_offset < $ndef_length) {
                $ndef_chunk_data = $this->createChunkData($ndef, $ndef_chunk_offset, 60, 0);
                $ret = $this->readerWriteNDEFLowLevel($ndef_length, $ndef_chunk_offset, $ndef_chunk_data);
                $ndef_chunk_offset += 60;
            }
        }

        return $ret;
    }

    /**
     * Returns the NDEF data from an internal buffer. To fill the buffer
     * with a NDEF message you have to call BrickletNFC::readerRequestNDEF() beforehand.
     * 
     * 
     * @return array
     */
    public function readerReadNDEF()
    {
        $ret = $this->readerReadNDEFLowLevel();
        $ndef_length = $ret['ndef_length'];
        $ndef_out_of_sync = $ret['ndef_chunk_offset'] != 0;
        $ndef_data = $ret['ndef_chunk_data'];

        while (!$ndef_out_of_sync && count($ndef_data) < $ndef_length) {
            $ret = $this->readerReadNDEFLowLevel();
            $ndef_length = $ret['ndef_length'];
            $ndef_out_of_sync = $ret['ndef_chunk_offset'] != count($ndef_data);
            $ndef_data = array_merge($ndef_data, $ret['ndef_chunk_data']);
        }

        if ($ndef_out_of_sync) { // discard remaining stream to bring it back in-sync
            while ($ret['ndef_chunk_offset'] + 60 < $ndef_length) {
                $ret = $this->readerReadNDEFLowLevel();
                $ndef_length = $ret['ndef_length'];
            }

            throw new StreamOutOfSyncException('NDEF stream is out-of-sync');
        }

        return array_slice($ndef_data, 0, $ndef_length);
    }

    /**
     * Writes a maximum of 8192 bytes starting from the given page. How many pages are written
     * depends on the tag type. The page sizes are as follows:
     * 
     * * Mifare Classic page size: 16 byte
     * * NFC Forum Type 1 page size: 8 byte
     * * NFC Forum Type 2 page size: 4 byte
     * * NFC Forum Type 3 page size: 16 byte
     * * NFC Forum Type 4: No pages, page = file selection (CC or NDEF, see below)
     * 
     * The general approach for writing to a tag is as follows:
     * 
     * 1. Call BrickletNFC::readerRequestTagID()
     * 2. Wait for state to change to *ReaderRequestTagIDReady* (see BrickletNFC::readerGetState() or
     *    BrickletNFC::CALLBACK_READER_STATE_CHANGED callback)
     * 3. If looking for a specific tag then call BrickletNFC::readerGetTagID() and check if the
     *    expected tag was found, if it was not found got back to step 1
     * 4. Call BrickletNFC::readerWritePage() with page number and data
     * 5. Wait for state to change to *ReaderWritePageReady* (see BrickletNFC::readerGetState() or
     *    BrickletNFC::CALLBACK_READER_STATE_CHANGED callback)
     * 
     * If you use a Mifare Classic tag you have to authenticate a page before you
     * can write to it. See BrickletNFC::readerAuthenticateMifareClassicPage().
     * 
     * NFC Forum Type 4 tags are not organized into pages but different files. We currently
     * support two files: Capability Container file (CC) and NDEF file.
     * 
     * Choose CC by setting page to 3 or NDEF by setting page to 4.
     * 
     * @param int $page
     * @param int[] $data
     * 
     * @return void
     */
    public function readerWritePage($page, $data)
    {
        if (count($data) > 65535) {
            throw new \InvalidArgumentException('Data can be at most 65535 items long');
        }

        $data_length = count($data);
        $data_chunk_offset = 0;

        if ($data_length === 0) {
            $data_chunk_data = array_fill(0, 58, 0);
            $ret = $this->readerWritePageLowLevel($page, $data_length, $data_chunk_offset, $data_chunk_data);
        } else {
            while ($data_chunk_offset < $data_length) {
                $data_chunk_data = $this->createChunkData($data, $data_chunk_offset, 58, 0);
                $ret = $this->readerWritePageLowLevel($page, $data_length, $data_chunk_offset, $data_chunk_data);
                $data_chunk_offset += 58;
            }
        }

        return $ret;
    }

    /**
     * Returns the page data from an internal buffer. To fill the buffer
     * with specific pages you have to call BrickletNFC::readerRequestPage() beforehand.
     * 
     * 
     * @return array
     */
    public function readerReadPage()
    {
        $ret = $this->readerReadPageLowLevel();
        $data_length = $ret['data_length'];
        $data_out_of_sync = $ret['data_chunk_offset'] != 0;
        $data_data = $ret['data_chunk_data'];

        while (!$data_out_of_sync && count($data_data) < $data_length) {
            $ret = $this->readerReadPageLowLevel();
            $data_length = $ret['data_length'];
            $data_out_of_sync = $ret['data_chunk_offset'] != count($data_data);
            $data_data = array_merge($data_data, $ret['data_chunk_data']);
        }

        if ($data_out_of_sync) { // discard remaining stream to bring it back in-sync
            while ($ret['data_chunk_offset'] + 60 < $data_length) {
                $ret = $this->readerReadPageLowLevel();
                $data_length = $ret['data_length'];
            }

            throw new StreamOutOfSyncException('Data stream is out-of-sync');
        }

        return array_slice($data_data, 0, $data_length);
    }

    /**
     * Writes the NDEF message that is to be transferred to the NFC peer.
     * 
     * The maximum supported NDEF message size in Cardemu mode is 255 byte.
     * 
     * You can call this function at any time in Cardemu mode. The internal buffer
     * will not be overwritten until you call this function again or change the
     * mode.
     * 
     * @param int[] $ndef
     * 
     * @return void
     */
    public function cardemuWriteNDEF($ndef)
    {
        if (count($ndef) > 65535) {
            throw new \InvalidArgumentException('NDEF can be at most 65535 items long');
        }

        $ndef_length = count($ndef);
        $ndef_chunk_offset = 0;

        if ($ndef_length === 0) {
            $ndef_chunk_data = array_fill(0, 60, 0);
            $ret = $this->cardemuWriteNDEFLowLevel($ndef_length, $ndef_chunk_offset, $ndef_chunk_data);
        } else {
            while ($ndef_chunk_offset < $ndef_length) {
                $ndef_chunk_data = $this->createChunkData($ndef, $ndef_chunk_offset, 60, 0);
                $ret = $this->cardemuWriteNDEFLowLevel($ndef_length, $ndef_chunk_offset, $ndef_chunk_data);
                $ndef_chunk_offset += 60;
            }
        }

        return $ret;
    }

    /**
     * Writes the NDEF message that is to be transferred to the NFC peer.
     * 
     * The maximum supported NDEF message size for P2P transfer is 255 byte.
     * 
     * You can call this function at any time in P2P mode. The internal buffer
     * will not be overwritten until you call this function again, change the
     * mode or use P2P to read an NDEF messages.
     * 
     * @param int[] $ndef
     * 
     * @return void
     */
    public function p2pWriteNDEF($ndef)
    {
        if (count($ndef) > 65535) {
            throw new \InvalidArgumentException('NDEF can be at most 65535 items long');
        }

        $ndef_length = count($ndef);
        $ndef_chunk_offset = 0;

        if ($ndef_length === 0) {
            $ndef_chunk_data = array_fill(0, 60, 0);
            $ret = $this->p2pWriteNDEFLowLevel($ndef_length, $ndef_chunk_offset, $ndef_chunk_data);
        } else {
            while ($ndef_chunk_offset < $ndef_length) {
                $ndef_chunk_data = $this->createChunkData($ndef, $ndef_chunk_offset, 60, 0);
                $ret = $this->p2pWriteNDEFLowLevel($ndef_length, $ndef_chunk_offset, $ndef_chunk_data);
                $ndef_chunk_offset += 60;
            }
        }

        return $ret;
    }

    /**
     * Returns the NDEF message that was written by a NFC peer in NFC P2P mode.
     * 
     * The NDEF message is ready if you called BrickletNFC::p2pStartTransfer() with a
     * read transfer and the P2P state changed to *P2PTransferNDEFReady*.
     * 
     * 
     * @return array
     */
    public function p2pReadNDEF()
    {
        $ret = $this->p2pReadNDEFLowLevel();
        $ndef_length = $ret['ndef_length'];
        $ndef_out_of_sync = $ret['ndef_chunk_offset'] != 0;
        $ndef_data = $ret['ndef_chunk_data'];

        while (!$ndef_out_of_sync && count($ndef_data) < $ndef_length) {
            $ret = $this->p2pReadNDEFLowLevel();
            $ndef_length = $ret['ndef_length'];
            $ndef_out_of_sync = $ret['ndef_chunk_offset'] != count($ndef_data);
            $ndef_data = array_merge($ndef_data, $ret['ndef_chunk_data']);
        }

        if ($ndef_out_of_sync) { // discard remaining stream to bring it back in-sync
            while ($ret['ndef_chunk_offset'] + 60 < $ndef_length) {
                $ret = $this->p2pReadNDEFLowLevel();
                $ndef_length = $ret['ndef_length'];
            }

            throw new StreamOutOfSyncException('NDEF stream is out-of-sync');
        }

        return array_slice($ndef_data, 0, $ndef_length);
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
    public function callbackWrapperReaderStateChanged($data)
    {
        $payload = unpack('C1state/C1idle', $data);
        $payload['idle'] = (bool)$payload['idle'];

        if (array_key_exists(self::CALLBACK_READER_STATE_CHANGED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_READER_STATE_CHANGED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_READER_STATE_CHANGED];

            call_user_func($function, $payload['state'], $payload['idle'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperCardemuStateChanged($data)
    {
        $payload = unpack('C1state/C1idle', $data);
        $payload['idle'] = (bool)$payload['idle'];

        if (array_key_exists(self::CALLBACK_CARDEMU_STATE_CHANGED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_CARDEMU_STATE_CHANGED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_CARDEMU_STATE_CHANGED];

            call_user_func($function, $payload['state'], $payload['idle'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperP2PStateChanged($data)
    {
        $payload = unpack('C1state/C1idle', $data);
        $payload['idle'] = (bool)$payload['idle'];

        if (array_key_exists(self::CALLBACK_P2P_STATE_CHANGED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_P2P_STATE_CHANGED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_P2P_STATE_CHANGED];

            call_user_func($function, $payload['state'], $payload['idle'], $user_data);
        }
    }
}

?>
