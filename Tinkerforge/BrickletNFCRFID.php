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
 * Reads and writes NFC and RFID tags
 */
class BrickletNFCRFID extends Device
{

    /**
     * This callback is called if the state of the NFC/RFID Bricklet changes.
     * See BrickletNFCRFID::getState() for more information about the possible states.
     */
    const CALLBACK_STATE_CHANGED = 8;


    /**
     * @internal
     */
    const FUNCTION_REQUEST_TAG_ID = 1;

    /**
     * @internal
     */
    const FUNCTION_GET_TAG_ID = 2;

    /**
     * @internal
     */
    const FUNCTION_GET_STATE = 3;

    /**
     * @internal
     */
    const FUNCTION_AUTHENTICATE_MIFARE_CLASSIC_PAGE = 4;

    /**
     * @internal
     */
    const FUNCTION_WRITE_PAGE = 5;

    /**
     * @internal
     */
    const FUNCTION_REQUEST_PAGE = 6;

    /**
     * @internal
     */
    const FUNCTION_GET_PAGE = 7;

    /**
     * @internal
     */
    const FUNCTION_GET_IDENTITY = 255;

    const TAG_TYPE_MIFARE_CLASSIC = 0;
    const TAG_TYPE_TYPE1 = 1;
    const TAG_TYPE_TYPE2 = 2;
    const STATE_INITIALIZATION = 0;
    const STATE_IDLE = 128;
    const STATE_ERROR = 192;
    const STATE_REQUEST_TAG_ID = 2;
    const STATE_REQUEST_TAG_ID_READY = 130;
    const STATE_REQUEST_TAG_ID_ERROR = 194;
    const STATE_AUTHENTICATING_MIFARE_CLASSIC_PAGE = 3;
    const STATE_AUTHENTICATING_MIFARE_CLASSIC_PAGE_READY = 131;
    const STATE_AUTHENTICATING_MIFARE_CLASSIC_PAGE_ERROR = 195;
    const STATE_WRITE_PAGE = 4;
    const STATE_WRITE_PAGE_READY = 132;
    const STATE_WRITE_PAGE_ERROR = 196;
    const STATE_REQUEST_PAGE = 5;
    const STATE_REQUEST_PAGE_READY = 133;
    const STATE_REQUEST_PAGE_ERROR = 197;
    const KEY_A = 0;
    const KEY_B = 1;

    const DEVICE_IDENTIFIER = 246;

    const DEVICE_DISPLAY_NAME = 'NFC/RFID Bricklet';

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

        $this->response_expected[self::FUNCTION_REQUEST_TAG_ID] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_TAG_ID] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_STATE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_AUTHENTICATE_MIFARE_CLASSIC_PAGE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_WRITE_PAGE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_REQUEST_PAGE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_PAGE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_IDENTITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;

        $this->callback_wrappers[self::CALLBACK_STATE_CHANGED] = array(10, 'callbackWrapperStateChanged');

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
     * To read or write a tag that is in proximity of the NFC/RFID Bricklet you
     * first have to call this function with the expected tag type as parameter.
     * It is no problem if you don't know the tag type. You can cycle through
     * the available tag types until the tag gives an answer to the request.
     * 
     * Currently the following tag types are supported:
     * 
     * * Mifare Classic
     * * NFC Forum Type 1
     * * NFC Forum Type 2
     * 
     * After you call BrickletNFCRFID::requestTagID() the NFC/RFID Bricklet will try to read
     * the tag ID from the tag. After this process is done the state will change.
     * You can either register the BrickletNFCRFID::CALLBACK_STATE_CHANGED callback or you can poll
     * BrickletNFCRFID::getState() to find out about the state change.
     * 
     * If the state changes to *RequestTagIDError* it means that either there was
     * no tag present or that the tag is of an incompatible type. If the state
     * changes to *RequestTagIDReady* it means that a compatible tag was found
     * and that the tag ID could be read out. You can now get the tag ID by
     * calling BrickletNFCRFID::getTagID().
     * 
     * If two tags are in the proximity of the NFC/RFID Bricklet, this
     * function will cycle through the tags. To select a specific tag you have
     * to call BrickletNFCRFID::requestTagID() until the correct tag id is found.
     * 
     * In case of any *Error* state the selection is lost and you have to
     * start again by calling BrickletNFCRFID::requestTagID().
     * 
     * @param int $tag_type
     * 
     * @return void
     */
    public function requestTagID($tag_type)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $tag_type);

        $this->sendRequest(self::FUNCTION_REQUEST_TAG_ID, $payload, 0);
    }

    /**
     * Returns the tag type, tag ID and the length of the tag ID
     * (4 or 7 bytes are possible length). This function can only be called if the
     * NFC/RFID is currently in one of the *Ready* states. The returned ID
     * is the ID that was saved through the last call of BrickletNFCRFID::requestTagID().
     * 
     * To get the tag ID of a tag the approach is as follows:
     * 
     * 1. Call BrickletNFCRFID::requestTagID()
     * 2. Wait for state to change to *RequestTagIDReady* (see BrickletNFCRFID::getState() or
     *    BrickletNFCRFID::CALLBACK_STATE_CHANGED callback)
     * 3. Call BrickletNFCRFID::getTagID()
     * 
     * 
     * @return array
     */
    public function getTagID()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_TAG_ID, $payload, 17);

        $payload = unpack('C1tag_type/C1tid_length/C7tid', $data);

        $ret['tag_type'] = $payload['tag_type'];
        $ret['tid_length'] = $payload['tid_length'];
        $ret['tid'] = IPConnection::collectUnpackedArray($payload, 'tid', 7);

        return $ret;
    }

    /**
     * Returns the current state of the NFC/RFID Bricklet.
     * 
     * On startup the Bricklet will be in the *Initialization* state. The
     * initialization will only take about 20ms. After that it changes to *Idle*.
     * 
     * The functions of this Bricklet can be called in the *Idle* state and all of
     * the *Ready* and *Error* states.
     * 
     * Example: If you call BrickletNFCRFID::requestPage(), the state will change to
     * *RequestPage* until the reading of the page is finished. Then it will change
     * to either *RequestPageReady* if it worked or to *RequestPageError* if it
     * didn't. If the request worked you can get the page by calling BrickletNFCRFID::getPage().
     * 
     * The same approach is used analogously for the other API functions.
     * 
     * 
     * @return array
     */
    public function getState()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_STATE, $payload, 10);

        $payload = unpack('C1state/C1idle', $data);

        $ret['state'] = $payload['state'];
        $ret['idle'] = (bool)$payload['idle'];

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
     * 1. Call BrickletNFCRFID::requestTagID()
     * 2. Wait for state to change to *RequestTagIDReady* (see BrickletNFCRFID::getState()
     *    or BrickletNFCRFID::CALLBACK_STATE_CHANGED callback)
     * 3. If looking for a specific tag then call BrickletNFCRFID::getTagID() and check if the
     *    expected tag was found, if it was not found go back to step 1
     * 4. Call BrickletNFCRFID::authenticateMifareClassicPage() with page and key for the page
     * 5. Wait for state to change to *AuthenticatingMifareClassicPageReady* (see
     *    BrickletNFCRFID::getState() or BrickletNFCRFID::CALLBACK_STATE_CHANGED callback)
     * 6. Call BrickletNFCRFID::requestPage() or BrickletNFCRFID::writePage() to read/write page
     * 
     * @param int $page
     * @param int $key_number
     * @param int[] $key
     * 
     * @return void
     */
    public function authenticateMifareClassicPage($page, $key_number, $key)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $page);
        $payload .= pack('C', $key_number);
        for ($i = 0; $i < 6; $i++) {
            $payload .= pack('C', $key[$i]);
        }

        $this->sendRequest(self::FUNCTION_AUTHENTICATE_MIFARE_CLASSIC_PAGE, $payload, 0);
    }

    /**
     * Writes 16 bytes starting from the given page. How many pages are written
     * depends on the tag type. The page sizes are as follows:
     * 
     * * Mifare Classic page size: 16 byte (one page is written)
     * * NFC Forum Type 1 page size: 8 byte (two pages are written)
     * * NFC Forum Type 2 page size: 4 byte (four pages are written)
     * 
     * The general approach for writing to a tag is as follows:
     * 
     * 1. Call BrickletNFCRFID::requestTagID()
     * 2. Wait for state to change to *RequestTagIDReady* (see BrickletNFCRFID::getState() or
     *    BrickletNFCRFID::CALLBACK_STATE_CHANGED callback)
     * 3. If looking for a specific tag then call BrickletNFCRFID::getTagID() and check if the
     *    expected tag was found, if it was not found got back to step 1
     * 4. Call BrickletNFCRFID::writePage() with page number and data
     * 5. Wait for state to change to *WritePageReady* (see BrickletNFCRFID::getState() or
     *    BrickletNFCRFID::CALLBACK_STATE_CHANGED callback)
     * 
     * If you use a Mifare Classic tag you have to authenticate a page before you
     * can write to it. See BrickletNFCRFID::authenticateMifareClassicPage().
     * 
     * @param int $page
     * @param int[] $data
     * 
     * @return void
     */
    public function writePage($page, $data)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $page);
        for ($i = 0; $i < 16; $i++) {
            $payload .= pack('C', $data[$i]);
        }

        $this->sendRequest(self::FUNCTION_WRITE_PAGE, $payload, 0);
    }

    /**
     * Reads 16 bytes starting from the given page and stores them into a buffer.
     * The buffer can then be read out with BrickletNFCRFID::getPage().
     * How many pages are read depends on the tag type. The page sizes are
     * as follows:
     * 
     * * Mifare Classic page size: 16 byte (one page is read)
     * * NFC Forum Type 1 page size: 8 byte (two pages are read)
     * * NFC Forum Type 2 page size: 4 byte (four pages are read)
     * 
     * The general approach for reading a tag is as follows:
     * 
     * 1. Call BrickletNFCRFID::requestTagID()
     * 2. Wait for state to change to *RequestTagIDReady* (see BrickletNFCRFID::getState()
     *    or BrickletNFCRFID::CALLBACK_STATE_CHANGED callback)
     * 3. If looking for a specific tag then call BrickletNFCRFID::getTagID() and check if the
     *    expected tag was found, if it was not found got back to step 1
     * 4. Call BrickletNFCRFID::requestPage() with page number
     * 5. Wait for state to change to *RequestPageReady* (see BrickletNFCRFID::getState()
     *    or BrickletNFCRFID::CALLBACK_STATE_CHANGED callback)
     * 6. Call BrickletNFCRFID::getPage() to retrieve the page from the buffer
     * 
     * If you use a Mifare Classic tag you have to authenticate a page before you
     * can read it. See BrickletNFCRFID::authenticateMifareClassicPage().
     * 
     * @param int $page
     * 
     * @return void
     */
    public function requestPage($page)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $page);

        $this->sendRequest(self::FUNCTION_REQUEST_PAGE, $payload, 0);
    }

    /**
     * Returns 16 bytes of data from an internal buffer. To fill the buffer
     * with specific pages you have to call BrickletNFCRFID::requestPage() beforehand.
     * 
     * 
     * @return array
     */
    public function getPage()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_PAGE, $payload, 24);

        $payload = unpack('C16data', $data);

        return IPConnection::collectUnpackedArray($payload, 'data', 16);
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
    public function callbackWrapperStateChanged($data)
    {
        $payload = unpack('C1state/C1idle', $data);
        $payload['idle'] = (bool)$payload['idle'];

        if (array_key_exists(self::CALLBACK_STATE_CHANGED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_STATE_CHANGED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_STATE_CHANGED];

            call_user_func($function, $payload['state'], $payload['idle'], $user_data);
        }
    }
}

?>
