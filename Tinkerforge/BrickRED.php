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
 * Executes user programs and controls other Bricks/Bricklets standalone
 */
class BrickRED extends Device
{

    /**
     * This callback reports the result of a call to the BrickRED::readFileAsync()
     * function.
     */
    const CALLBACK_ASYNC_FILE_READ = 30;

    /**
     * This callback reports the result of a call to the BrickRED::writeFileAsync()
     * function.
     */
    const CALLBACK_ASYNC_FILE_WRITE = 31;

    /**
     * 
     */
    const CALLBACK_FILE_EVENTS_OCCURRED = 32;

    /**
     * 
     */
    const CALLBACK_PROCESS_STATE_CHANGED = 45;

    /**
     * 
     */
    const CALLBACK_PROGRAM_SCHEDULER_STATE_CHANGED = 65;

    /**
     * 
     */
    const CALLBACK_PROGRAM_PROCESS_SPAWNED = 66;


    /**
     * @internal
     */
    const FUNCTION_CREATE_SESSION = 1;

    /**
     * @internal
     */
    const FUNCTION_EXPIRE_SESSION = 2;

    /**
     * @internal
     */
    const FUNCTION_EXPIRE_SESSION_UNCHECKED = 3;

    /**
     * @internal
     */
    const FUNCTION_KEEP_SESSION_ALIVE = 4;

    /**
     * @internal
     */
    const FUNCTION_RELEASE_OBJECT = 5;

    /**
     * @internal
     */
    const FUNCTION_RELEASE_OBJECT_UNCHECKED = 6;

    /**
     * @internal
     */
    const FUNCTION_ALLOCATE_STRING = 7;

    /**
     * @internal
     */
    const FUNCTION_TRUNCATE_STRING = 8;

    /**
     * @internal
     */
    const FUNCTION_GET_STRING_LENGTH = 9;

    /**
     * @internal
     */
    const FUNCTION_SET_STRING_CHUNK = 10;

    /**
     * @internal
     */
    const FUNCTION_GET_STRING_CHUNK = 11;

    /**
     * @internal
     */
    const FUNCTION_ALLOCATE_LIST = 12;

    /**
     * @internal
     */
    const FUNCTION_GET_LIST_LENGTH = 13;

    /**
     * @internal
     */
    const FUNCTION_GET_LIST_ITEM = 14;

    /**
     * @internal
     */
    const FUNCTION_APPEND_TO_LIST = 15;

    /**
     * @internal
     */
    const FUNCTION_REMOVE_FROM_LIST = 16;

    /**
     * @internal
     */
    const FUNCTION_OPEN_FILE = 17;

    /**
     * @internal
     */
    const FUNCTION_CREATE_PIPE = 18;

    /**
     * @internal
     */
    const FUNCTION_GET_FILE_INFO = 19;

    /**
     * @internal
     */
    const FUNCTION_READ_FILE = 20;

    /**
     * @internal
     */
    const FUNCTION_READ_FILE_ASYNC = 21;

    /**
     * @internal
     */
    const FUNCTION_ABORT_ASYNC_FILE_READ = 22;

    /**
     * @internal
     */
    const FUNCTION_WRITE_FILE = 23;

    /**
     * @internal
     */
    const FUNCTION_WRITE_FILE_UNCHECKED = 24;

    /**
     * @internal
     */
    const FUNCTION_WRITE_FILE_ASYNC = 25;

    /**
     * @internal
     */
    const FUNCTION_SET_FILE_POSITION = 26;

    /**
     * @internal
     */
    const FUNCTION_GET_FILE_POSITION = 27;

    /**
     * @internal
     */
    const FUNCTION_SET_FILE_EVENTS = 28;

    /**
     * @internal
     */
    const FUNCTION_GET_FILE_EVENTS = 29;

    /**
     * @internal
     */
    const FUNCTION_OPEN_DIRECTORY = 33;

    /**
     * @internal
     */
    const FUNCTION_GET_DIRECTORY_NAME = 34;

    /**
     * @internal
     */
    const FUNCTION_GET_NEXT_DIRECTORY_ENTRY = 35;

    /**
     * @internal
     */
    const FUNCTION_REWIND_DIRECTORY = 36;

    /**
     * @internal
     */
    const FUNCTION_CREATE_DIRECTORY = 37;

    /**
     * @internal
     */
    const FUNCTION_GET_PROCESSES = 38;

    /**
     * @internal
     */
    const FUNCTION_SPAWN_PROCESS = 39;

    /**
     * @internal
     */
    const FUNCTION_KILL_PROCESS = 40;

    /**
     * @internal
     */
    const FUNCTION_GET_PROCESS_COMMAND = 41;

    /**
     * @internal
     */
    const FUNCTION_GET_PROCESS_IDENTITY = 42;

    /**
     * @internal
     */
    const FUNCTION_GET_PROCESS_STDIO = 43;

    /**
     * @internal
     */
    const FUNCTION_GET_PROCESS_STATE = 44;

    /**
     * @internal
     */
    const FUNCTION_GET_PROGRAMS = 46;

    /**
     * @internal
     */
    const FUNCTION_DEFINE_PROGRAM = 47;

    /**
     * @internal
     */
    const FUNCTION_PURGE_PROGRAM = 48;

    /**
     * @internal
     */
    const FUNCTION_GET_PROGRAM_IDENTIFIER = 49;

    /**
     * @internal
     */
    const FUNCTION_GET_PROGRAM_ROOT_DIRECTORY = 50;

    /**
     * @internal
     */
    const FUNCTION_SET_PROGRAM_COMMAND = 51;

    /**
     * @internal
     */
    const FUNCTION_GET_PROGRAM_COMMAND = 52;

    /**
     * @internal
     */
    const FUNCTION_SET_PROGRAM_STDIO_REDIRECTION = 53;

    /**
     * @internal
     */
    const FUNCTION_GET_PROGRAM_STDIO_REDIRECTION = 54;

    /**
     * @internal
     */
    const FUNCTION_SET_PROGRAM_SCHEDULE = 55;

    /**
     * @internal
     */
    const FUNCTION_GET_PROGRAM_SCHEDULE = 56;

    /**
     * @internal
     */
    const FUNCTION_GET_PROGRAM_SCHEDULER_STATE = 57;

    /**
     * @internal
     */
    const FUNCTION_CONTINUE_PROGRAM_SCHEDULE = 58;

    /**
     * @internal
     */
    const FUNCTION_START_PROGRAM = 59;

    /**
     * @internal
     */
    const FUNCTION_GET_LAST_SPAWNED_PROGRAM_PROCESS = 60;

    /**
     * @internal
     */
    const FUNCTION_GET_CUSTOM_PROGRAM_OPTION_NAMES = 61;

    /**
     * @internal
     */
    const FUNCTION_SET_CUSTOM_PROGRAM_OPTION_VALUE = 62;

    /**
     * @internal
     */
    const FUNCTION_GET_CUSTOM_PROGRAM_OPTION_VALUE = 63;

    /**
     * @internal
     */
    const FUNCTION_REMOVE_CUSTOM_PROGRAM_OPTION = 64;

    /**
     * @internal
     */
    const FUNCTION_GET_IDENTITY = 255;

    const ERROR_CODE_SUCCESS = 0;
    const ERROR_CODE_UNKNOWN_ERROR = 1;
    const ERROR_CODE_INVALID_OPERATION = 2;
    const ERROR_CODE_OPERATION_ABORTED = 3;
    const ERROR_CODE_INTERNAL_ERROR = 4;
    const ERROR_CODE_UNKNOWN_SESSION_ID = 5;
    const ERROR_CODE_NO_FREE_SESSION_ID = 6;
    const ERROR_CODE_UNKNOWN_OBJECT_ID = 7;
    const ERROR_CODE_NO_FREE_OBJECT_ID = 8;
    const ERROR_CODE_OBJECT_IS_LOCKED = 9;
    const ERROR_CODE_NO_MORE_DATA = 10;
    const ERROR_CODE_WRONG_LIST_ITEM_TYPE = 11;
    const ERROR_CODE_PROGRAM_IS_PURGED = 12;
    const ERROR_CODE_INVALID_PARAMETER = 128;
    const ERROR_CODE_NO_FREE_MEMORY = 129;
    const ERROR_CODE_NO_FREE_SPACE = 130;
    const ERROR_CODE_ACCESS_DENIED = 121;
    const ERROR_CODE_ALREADY_EXISTS = 132;
    const ERROR_CODE_DOES_NOT_EXIST = 133;
    const ERROR_CODE_INTERRUPTED = 134;
    const ERROR_CODE_IS_DIRECTORY = 135;
    const ERROR_CODE_NOT_A_DIRECTORY = 136;
    const ERROR_CODE_WOULD_BLOCK = 137;
    const ERROR_CODE_OVERFLOW = 138;
    const ERROR_CODE_BAD_FILE_DESCRIPTOR = 139;
    const ERROR_CODE_OUT_OF_RANGE = 140;
    const ERROR_CODE_NAME_TOO_LONG = 141;
    const ERROR_CODE_INVALID_SEEK = 142;
    const ERROR_CODE_NOT_SUPPORTED = 143;
    const ERROR_CODE_TOO_MANY_OPEN_FILES = 144;
    const OBJECT_TYPE_STRING = 0;
    const OBJECT_TYPE_LIST = 1;
    const OBJECT_TYPE_FILE = 2;
    const OBJECT_TYPE_DIRECTORY = 3;
    const OBJECT_TYPE_PROCESS = 4;
    const OBJECT_TYPE_PROGRAM = 5;
    const FILE_FLAG_READ_ONLY = 1;
    const FILE_FLAG_WRITE_ONLY = 2;
    const FILE_FLAG_READ_WRITE = 4;
    const FILE_FLAG_APPEND = 8;
    const FILE_FLAG_CREATE = 16;
    const FILE_FLAG_EXCLUSIVE = 32;
    const FILE_FLAG_NON_BLOCKING = 64;
    const FILE_FLAG_TRUNCATE = 128;
    const FILE_FLAG_TEMPORARY = 256;
    const FILE_FLAG_REPLACE = 512;
    const FILE_PERMISSION_USER_ALL = 448;
    const FILE_PERMISSION_USER_READ = 256;
    const FILE_PERMISSION_USER_WRITE = 128;
    const FILE_PERMISSION_USER_EXECUTE = 64;
    const FILE_PERMISSION_GROUP_ALL = 56;
    const FILE_PERMISSION_GROUP_READ = 32;
    const FILE_PERMISSION_GROUP_WRITE = 16;
    const FILE_PERMISSION_GROUP_EXECUTE = 8;
    const FILE_PERMISSION_OTHERS_ALL = 7;
    const FILE_PERMISSION_OTHERS_READ = 4;
    const FILE_PERMISSION_OTHERS_WRITE = 2;
    const FILE_PERMISSION_OTHERS_EXECUTE = 1;
    const PIPE_FLAG_NON_BLOCKING_READ = 1;
    const PIPE_FLAG_NON_BLOCKING_WRITE = 2;
    const FILE_TYPE_UNKNOWN = 0;
    const FILE_TYPE_REGULAR = 1;
    const FILE_TYPE_DIRECTORY = 2;
    const FILE_TYPE_CHARACTER = 3;
    const FILE_TYPE_BLOCK = 4;
    const FILE_TYPE_FIFO = 5;
    const FILE_TYPE_SYMLINK = 6;
    const FILE_TYPE_SOCKET = 7;
    const FILE_TYPE_PIPE = 8;
    const FILE_ORIGIN_BEGINNING = 0;
    const FILE_ORIGIN_CURRENT = 1;
    const FILE_ORIGIN_END = 2;
    const FILE_EVENT_READABLE = 1;
    const FILE_EVENT_WRITABLE = 2;
    const DIRECTORY_ENTRY_TYPE_UNKNOWN = 0;
    const DIRECTORY_ENTRY_TYPE_REGULAR = 1;
    const DIRECTORY_ENTRY_TYPE_DIRECTORY = 2;
    const DIRECTORY_ENTRY_TYPE_CHARACTER = 3;
    const DIRECTORY_ENTRY_TYPE_BLOCK = 4;
    const DIRECTORY_ENTRY_TYPE_FIFO = 5;
    const DIRECTORY_ENTRY_TYPE_SYMLINK = 6;
    const DIRECTORY_ENTRY_TYPE_SOCKET = 7;
    const DIRECTORY_FLAG_RECURSIVE = 1;
    const DIRECTORY_FLAG_EXCLUSIVE = 2;
    const PROCESS_SIGNAL_INTERRUPT = 2;
    const PROCESS_SIGNAL_QUIT = 3;
    const PROCESS_SIGNAL_ABORT = 6;
    const PROCESS_SIGNAL_KILL = 9;
    const PROCESS_SIGNAL_USER1 = 10;
    const PROCESS_SIGNAL_USER2 = 12;
    const PROCESS_SIGNAL_TERMINATE = 15;
    const PROCESS_SIGNAL_CONTINUE = 18;
    const PROCESS_SIGNAL_STOP = 19;
    const PROCESS_STATE_UNKNOWN = 0;
    const PROCESS_STATE_RUNNING = 1;
    const PROCESS_STATE_ERROR = 2;
    const PROCESS_STATE_EXITED = 3;
    const PROCESS_STATE_KILLED = 4;
    const PROCESS_STATE_STOPPED = 5;
    const PROGRAM_STDIO_REDIRECTION_DEV_NULL = 0;
    const PROGRAM_STDIO_REDIRECTION_PIPE = 1;
    const PROGRAM_STDIO_REDIRECTION_FILE = 2;
    const PROGRAM_STDIO_REDIRECTION_INDIVIDUAL_LOG = 3;
    const PROGRAM_STDIO_REDIRECTION_CONTINUOUS_LOG = 4;
    const PROGRAM_STDIO_REDIRECTION_STDOUT = 5;
    const PROGRAM_START_MODE_NEVER = 0;
    const PROGRAM_START_MODE_ALWAYS = 1;
    const PROGRAM_START_MODE_INTERVAL = 2;
    const PROGRAM_START_MODE_CRON = 3;
    const PROGRAM_SCHEDULER_STATE_STOPPED = 0;
    const PROGRAM_SCHEDULER_STATE_RUNNING = 1;

    const DEVICE_IDENTIFIER = 17;

    const DEVICE_DISPLAY_NAME = 'RED Brick';

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

        $this->response_expected[self::FUNCTION_CREATE_SESSION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_EXPIRE_SESSION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_EXPIRE_SESSION_UNCHECKED] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_KEEP_SESSION_ALIVE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_RELEASE_OBJECT] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_RELEASE_OBJECT_UNCHECKED] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_ALLOCATE_STRING] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_TRUNCATE_STRING] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_STRING_LENGTH] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_STRING_CHUNK] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_STRING_CHUNK] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_ALLOCATE_LIST] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_LIST_LENGTH] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_LIST_ITEM] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_APPEND_TO_LIST] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_REMOVE_FROM_LIST] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_OPEN_FILE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_CREATE_PIPE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_FILE_INFO] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_READ_FILE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_READ_FILE_ASYNC] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_ABORT_ASYNC_FILE_READ] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_WRITE_FILE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_WRITE_FILE_UNCHECKED] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_WRITE_FILE_ASYNC] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_SET_FILE_POSITION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_FILE_POSITION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_FILE_EVENTS] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_FILE_EVENTS] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_OPEN_DIRECTORY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_DIRECTORY_NAME] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_NEXT_DIRECTORY_ENTRY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_REWIND_DIRECTORY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_CREATE_DIRECTORY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_PROCESSES] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SPAWN_PROCESS] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_KILL_PROCESS] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_PROCESS_COMMAND] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_PROCESS_IDENTITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_PROCESS_STDIO] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_PROCESS_STATE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_PROGRAMS] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_DEFINE_PROGRAM] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_PURGE_PROGRAM] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_PROGRAM_IDENTIFIER] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_PROGRAM_ROOT_DIRECTORY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_PROGRAM_COMMAND] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_PROGRAM_COMMAND] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_PROGRAM_STDIO_REDIRECTION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_PROGRAM_STDIO_REDIRECTION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_PROGRAM_SCHEDULE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_PROGRAM_SCHEDULE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_PROGRAM_SCHEDULER_STATE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_CONTINUE_PROGRAM_SCHEDULE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_START_PROGRAM] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_LAST_SPAWNED_PROGRAM_PROCESS] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_CUSTOM_PROGRAM_OPTION_NAMES] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_CUSTOM_PROGRAM_OPTION_VALUE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_CUSTOM_PROGRAM_OPTION_VALUE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_REMOVE_CUSTOM_PROGRAM_OPTION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_IDENTITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;

        $this->callback_wrappers[self::CALLBACK_ASYNC_FILE_READ] = array(72, 'callbackWrapperAsyncFileRead');
        $this->callback_wrappers[self::CALLBACK_ASYNC_FILE_WRITE] = array(12, 'callbackWrapperAsyncFileWrite');
        $this->callback_wrappers[self::CALLBACK_FILE_EVENTS_OCCURRED] = array(12, 'callbackWrapperFileEventsOccurred');
        $this->callback_wrappers[self::CALLBACK_PROCESS_STATE_CHANGED] = array(20, 'callbackWrapperProcessStateChanged');
        $this->callback_wrappers[self::CALLBACK_PROGRAM_SCHEDULER_STATE_CHANGED] = array(10, 'callbackWrapperProgramSchedulerStateChanged');
        $this->callback_wrappers[self::CALLBACK_PROGRAM_PROCESS_SPAWNED] = array(10, 'callbackWrapperProgramProcessSpawned');

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
     * 
     * 
     * @param int $lifetime
     * 
     * @return array
     */
    public function createSession($lifetime)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('V', $lifetime);

        $data = $this->sendRequest(self::FUNCTION_CREATE_SESSION, $payload, 11);

        $payload = unpack('C1error_code/v1session_id', $data);

        $ret['error_code'] = $payload['error_code'];
        $ret['session_id'] = $payload['session_id'];

        return $ret;
    }

    /**
     * 
     * 
     * @param int $session_id
     * 
     * @return int
     */
    public function expireSession($session_id)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $session_id);

        $data = $this->sendRequest(self::FUNCTION_EXPIRE_SESSION, $payload, 9);

        $payload = unpack('C1error_code', $data);

        return $payload['error_code'];
    }

    /**
     * 
     * 
     * @param int $session_id
     * 
     * @return void
     */
    public function expireSessionUnchecked($session_id)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $session_id);

        $this->sendRequest(self::FUNCTION_EXPIRE_SESSION_UNCHECKED, $payload, 0);
    }

    /**
     * 
     * 
     * @param int $session_id
     * @param int $lifetime
     * 
     * @return int
     */
    public function keepSessionAlive($session_id, $lifetime)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $session_id);
        $payload .= pack('V', $lifetime);

        $data = $this->sendRequest(self::FUNCTION_KEEP_SESSION_ALIVE, $payload, 9);

        $payload = unpack('C1error_code', $data);

        return $payload['error_code'];
    }

    /**
     * Decreases the reference count of an object by one and returns the resulting
     * error code. If the reference count reaches zero the object gets destroyed.
     * 
     * @param int $object_id
     * @param int $session_id
     * 
     * @return int
     */
    public function releaseObject($object_id, $session_id)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $object_id);
        $payload .= pack('v', $session_id);

        $data = $this->sendRequest(self::FUNCTION_RELEASE_OBJECT, $payload, 9);

        $payload = unpack('C1error_code', $data);

        return $payload['error_code'];
    }

    /**
     * 
     * 
     * @param int $object_id
     * @param int $session_id
     * 
     * @return void
     */
    public function releaseObjectUnchecked($object_id, $session_id)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $object_id);
        $payload .= pack('v', $session_id);

        $this->sendRequest(self::FUNCTION_RELEASE_OBJECT_UNCHECKED, $payload, 0);
    }

    /**
     * Allocates a new string object, reserves ``length_to_reserve`` bytes memory
     * for it and sets up to the first 60 bytes. Set ``length_to_reserve`` to the
     * length of the string that should be stored in the string object.
     * 
     * Returns the object ID of the new string object and the resulting error code.
     * 
     * @param int $length_to_reserve
     * @param string $buffer
     * @param int $session_id
     * 
     * @return array
     */
    public function allocateString($length_to_reserve, $buffer, $session_id)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('V', $length_to_reserve);
        for ($i = 0; $i < strlen($buffer) && $i < 58; $i++) {
            $payload .= pack('c', ord($buffer[$i]));
        }
        for ($i = strlen($buffer); $i < 58; $i++) {
            $payload .= pack('c', 0);
        }
        $payload .= pack('v', $session_id);

        $data = $this->sendRequest(self::FUNCTION_ALLOCATE_STRING, $payload, 11);

        $payload = unpack('C1error_code/v1string_id', $data);

        $ret['error_code'] = $payload['error_code'];
        $ret['string_id'] = $payload['string_id'];

        return $ret;
    }

    /**
     * Truncates a string object to ``length`` bytes and returns the resulting
     * error code.
     * 
     * @param int $string_id
     * @param int $length
     * 
     * @return int
     */
    public function truncateString($string_id, $length)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $string_id);
        $payload .= pack('V', $length);

        $data = $this->sendRequest(self::FUNCTION_TRUNCATE_STRING, $payload, 9);

        $payload = unpack('C1error_code', $data);

        return $payload['error_code'];
    }

    /**
     * Returns the length of a string object and the resulting error code.
     * 
     * @param int $string_id
     * 
     * @return array
     */
    public function getStringLength($string_id)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('v', $string_id);

        $data = $this->sendRequest(self::FUNCTION_GET_STRING_LENGTH, $payload, 13);

        $payload = unpack('C1error_code/V1length', $data);

        $ret['error_code'] = $payload['error_code'];
        $ret['length'] = IPConnection::fixUnpackedUInt32($payload, 'length');

        return $ret;
    }

    /**
     * Sets a chunk of up to 58 bytes in a string object beginning at ``offset``.
     * 
     * Returns the resulting error code.
     * 
     * @param int $string_id
     * @param int $offset
     * @param string $buffer
     * 
     * @return int
     */
    public function setStringChunk($string_id, $offset, $buffer)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $string_id);
        $payload .= pack('V', $offset);
        for ($i = 0; $i < strlen($buffer) && $i < 58; $i++) {
            $payload .= pack('c', ord($buffer[$i]));
        }
        for ($i = strlen($buffer); $i < 58; $i++) {
            $payload .= pack('c', 0);
        }

        $data = $this->sendRequest(self::FUNCTION_SET_STRING_CHUNK, $payload, 9);

        $payload = unpack('C1error_code', $data);

        return $payload['error_code'];
    }

    /**
     * Returns a chunk up to 63 bytes from a string object beginning at ``offset`` and
     * returns the resulting error code.
     * 
     * @param int $string_id
     * @param int $offset
     * 
     * @return array
     */
    public function getStringChunk($string_id, $offset)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('v', $string_id);
        $payload .= pack('V', $offset);

        $data = $this->sendRequest(self::FUNCTION_GET_STRING_CHUNK, $payload, 72);

        $payload = unpack('C1error_code/c63buffer', $data);

        $ret['error_code'] = $payload['error_code'];
        $ret['buffer'] = IPConnection::implodeUnpackedString($payload, 'buffer', 63);

        return $ret;
    }

    /**
     * Allocates a new list object and reserves memory for ``length_to_reserve``
     * items. Set ``length_to_reserve`` to the number of items that should be stored
     * in the list object.
     * 
     * Returns the object ID of the new list object and the resulting error code.
     * 
     * When a list object gets destroyed then the reference count of each object in
     * the list object is decreased by one.
     * 
     * @param int $length_to_reserve
     * @param int $session_id
     * 
     * @return array
     */
    public function allocateList($length_to_reserve, $session_id)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('v', $length_to_reserve);
        $payload .= pack('v', $session_id);

        $data = $this->sendRequest(self::FUNCTION_ALLOCATE_LIST, $payload, 11);

        $payload = unpack('C1error_code/v1list_id', $data);

        $ret['error_code'] = $payload['error_code'];
        $ret['list_id'] = $payload['list_id'];

        return $ret;
    }

    /**
     * Returns the length of a list object in items and the resulting error code.
     * 
     * @param int $list_id
     * 
     * @return array
     */
    public function getListLength($list_id)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('v', $list_id);

        $data = $this->sendRequest(self::FUNCTION_GET_LIST_LENGTH, $payload, 11);

        $payload = unpack('C1error_code/v1length', $data);

        $ret['error_code'] = $payload['error_code'];
        $ret['length'] = $payload['length'];

        return $ret;
    }

    /**
     * Returns the object ID and type of the object stored at ``index`` in a list
     * object and returns the resulting error code.
     * 
     * Possible object types are:
     * 
     * * String = 0
     * * List = 1
     * * File = 2
     * * Directory = 3
     * * Process = 4
     * * Program = 5
     * 
     * @param int $list_id
     * @param int $index
     * @param int $session_id
     * 
     * @return array
     */
    public function getListItem($list_id, $index, $session_id)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('v', $list_id);
        $payload .= pack('v', $index);
        $payload .= pack('v', $session_id);

        $data = $this->sendRequest(self::FUNCTION_GET_LIST_ITEM, $payload, 12);

        $payload = unpack('C1error_code/v1item_object_id/C1type', $data);

        $ret['error_code'] = $payload['error_code'];
        $ret['item_object_id'] = $payload['item_object_id'];
        $ret['type'] = $payload['type'];

        return $ret;
    }

    /**
     * Appends an object to a list object and increases the reference count of the
     * appended object by one.
     * 
     * Returns the resulting error code.
     * 
     * @param int $list_id
     * @param int $item_object_id
     * 
     * @return int
     */
    public function appendToList($list_id, $item_object_id)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $list_id);
        $payload .= pack('v', $item_object_id);

        $data = $this->sendRequest(self::FUNCTION_APPEND_TO_LIST, $payload, 9);

        $payload = unpack('C1error_code', $data);

        return $payload['error_code'];
    }

    /**
     * Removes the object stored at ``index`` from a list object and decreases the
     * reference count of the removed object by one.
     * 
     * Returns the resulting error code.
     * 
     * @param int $list_id
     * @param int $index
     * 
     * @return int
     */
    public function removeFromList($list_id, $index)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $list_id);
        $payload .= pack('v', $index);

        $data = $this->sendRequest(self::FUNCTION_REMOVE_FROM_LIST, $payload, 9);

        $payload = unpack('C1error_code', $data);

        return $payload['error_code'];
    }

    /**
     * Opens an existing file or creates a new file and allocates a new file object
     * for it.
     * 
     * FIXME: name has to be absolute
     * 
     * The reference count of the name string object is increased by one. When the
     * file object gets destroyed then the reference count of the name string object is
     * decreased by one. Also the name string object is locked and cannot be modified
     * while the file object holds a reference to it.
     * 
     * The ``flags`` parameter takes a ORed combination of the following possible file
     * flags (in hexadecimal notation):
     * 
     * * ReadOnly = 0x0001 (O_RDONLY)
     * * WriteOnly = 0x0002 (O_WRONLY)
     * * ReadWrite = 0x0004 (O_RDWR)
     * * Append = 0x0008 (O_APPEND)
     * * Create = 0x0010 (O_CREAT)
     * * Exclusive = 0x0020 (O_EXCL)
     * * NonBlocking = 0x0040 (O_NONBLOCK)
     * * Truncate = 0x0080 (O_TRUNC)
     * * Temporary = 0x0100
     * * Replace = 0x0200
     * 
     * FIXME: explain *Temporary* and *Replace* flag
     * 
     * The ``permissions`` parameter takes a ORed combination of the following
     * possible file permissions (in octal notation) that match the common UNIX
     * permission bits:
     * 
     * * UserRead = 00400
     * * UserWrite = 00200
     * * UserExecute = 00100
     * * GroupRead = 00040
     * * GroupWrite = 00020
     * * GroupExecute = 00010
     * * OthersRead = 00004
     * * OthersWrite = 00002
     * * OthersExecute = 00001
     * 
     * Returns the object ID of the new file object and the resulting error code.
     * 
     * @param int $name_string_id
     * @param int $flags
     * @param int $permissions
     * @param int $uid
     * @param int $gid
     * @param int $session_id
     * 
     * @return array
     */
    public function openFile($name_string_id, $flags, $permissions, $uid, $gid, $session_id)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('v', $name_string_id);
        $payload .= pack('V', $flags);
        $payload .= pack('v', $permissions);
        $payload .= pack('V', $uid);
        $payload .= pack('V', $gid);
        $payload .= pack('v', $session_id);

        $data = $this->sendRequest(self::FUNCTION_OPEN_FILE, $payload, 11);

        $payload = unpack('C1error_code/v1file_id', $data);

        $ret['error_code'] = $payload['error_code'];
        $ret['file_id'] = $payload['file_id'];

        return $ret;
    }

    /**
     * Creates a new pipe and allocates a new file object for it.
     * 
     * The ``flags`` parameter takes a ORed combination of the following possible
     * pipe flags (in hexadecimal notation):
     * 
     * * NonBlockingRead = 0x0001
     * * NonBlockingWrite = 0x0002
     * 
     * The length of the pipe buffer can be specified with the ``length`` parameter
     * in bytes. If length is set to zero, then the default pipe buffer length is used.
     * 
     * Returns the object ID of the new file object and the resulting error code.
     * 
     * @param int $flags
     * @param int $length
     * @param int $session_id
     * 
     * @return array
     */
    public function createPipe($flags, $length, $session_id)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('V', $flags);
        $payload .= Base256::encodeAndPackUInt64($length, 8);
        $payload .= pack('v', $session_id);

        $data = $this->sendRequest(self::FUNCTION_CREATE_PIPE, $payload, 11);

        $payload = unpack('C1error_code/v1file_id', $data);

        $ret['error_code'] = $payload['error_code'];
        $ret['file_id'] = $payload['file_id'];

        return $ret;
    }

    /**
     * Returns various information about a file and the resulting error code.
     * 
     * Possible file types are:
     * 
     * * Unknown = 0
     * * Regular = 1
     * * Directory = 2
     * * Character = 3
     * * Block = 4
     * * FIFO = 5
     * * Symlink = 6
     * * Socket = 7
     * * Pipe = 8
     * 
     * If the file type is *Pipe* then the returned name string object is invalid,
     * because a pipe has no name. Otherwise the returned name string object was used
     * to open or create the file object, as passed to BrickRED::openFile().
     * 
     * The returned flags were used to open or create the file object, as passed to
     * BrickRED::openFile() or BrickRED::createPipe(). See the respective function for a list
     * of possible file and pipe flags.
     * 
     * FIXME: everything except flags and length is invalid if file type is *Pipe*
     * 
     * @param int $file_id
     * @param int $session_id
     * 
     * @return array
     */
    public function getFileInfo($file_id, $session_id)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('v', $file_id);
        $payload .= pack('v', $session_id);

        $data = $this->sendRequest(self::FUNCTION_GET_FILE_INFO, $payload, 58);

        $payload = unpack('C1error_code/C1type/v1name_string_id/V1flags/v1permissions/V1uid/V1gid/C8length/C8access_timestamp/C8modification_timestamp/C8status_change_timestamp', $data);

        $ret['error_code'] = $payload['error_code'];
        $ret['type'] = $payload['type'];
        $ret['name_string_id'] = $payload['name_string_id'];
        $ret['flags'] = IPConnection::fixUnpackedUInt32($payload, 'flags');
        $ret['permissions'] = $payload['permissions'];
        $ret['uid'] = IPConnection::fixUnpackedUInt32($payload, 'uid');
        $ret['gid'] = IPConnection::fixUnpackedUInt32($payload, 'gid');
        $ret['length'] = IPConnection::fixUnpackedUInt64($payload, 'length');
        $ret['access_timestamp'] = IPConnection::fixUnpackedUInt64($payload, 'access_timestamp');
        $ret['modification_timestamp'] = IPConnection::fixUnpackedUInt64($payload, 'modification_timestamp');
        $ret['status_change_timestamp'] = IPConnection::fixUnpackedUInt64($payload, 'status_change_timestamp');

        return $ret;
    }

    /**
     * Reads up to 62 bytes from a file object.
     * 
     * Returns the bytes read, the actual number of bytes read and the resulting
     * error code.
     * 
     * If there is not data to be read, either because the file position reached
     * end-of-file or because there is not data in the pipe, then zero bytes are
     * returned.
     * 
     * If the file object was created by BrickRED::openFile() without the *NonBlocking*
     * flag or by BrickRED::createPipe() without the *NonBlockingRead* flag then the
     * error code *NotSupported* is returned.
     * 
     * @param int $file_id
     * @param int $length_to_read
     * 
     * @return array
     */
    public function readFile($file_id, $length_to_read)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('v', $file_id);
        $payload .= pack('C', $length_to_read);

        $data = $this->sendRequest(self::FUNCTION_READ_FILE, $payload, 72);

        $payload = unpack('C1error_code/C62buffer/C1length_read', $data);

        $ret['error_code'] = $payload['error_code'];
        $ret['buffer'] = IPConnection::collectUnpackedArray($payload, 'buffer', 62);
        $ret['length_read'] = $payload['length_read'];

        return $ret;
    }

    /**
     * Reads up to 2\ :sup:`63`\  - 1 bytes from a file object asynchronously.
     * 
     * Reports the bytes read (in 60 byte chunks), the actual number of bytes read and
     * the resulting error code via the BrickRED::CALLBACK_ASYNC_FILE_READ callback.
     * 
     * If there is not data to be read, either because the file position reached
     * end-of-file or because there is not data in the pipe, then zero bytes are
     * reported.
     * 
     * If the file object was created by BrickRED::openFile() without the *NonBlocking*
     * flag or by BrickRED::createPipe() without the *NonBlockingRead* flag then the error
     * code *NotSupported* is reported via the BrickRED::CALLBACK_ASYNC_FILE_READ callback.
     * 
     * @param int $file_id
     * @param int $length_to_read
     * 
     * @return void
     */
    public function readFileAsync($file_id, $length_to_read)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $file_id);
        $payload .= Base256::encodeAndPackUInt64($length_to_read, 8);

        $this->sendRequest(self::FUNCTION_READ_FILE_ASYNC, $payload, 0);
    }

    /**
     * Aborts a BrickRED::readFileAsync() operation in progress.
     * 
     * Returns the resulting error code.
     * 
     * On success the BrickRED::CALLBACK_ASYNC_FILE_READ callback will report *OperationAborted*.
     * 
     * @param int $file_id
     * 
     * @return int
     */
    public function abortAsyncFileRead($file_id)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $file_id);

        $data = $this->sendRequest(self::FUNCTION_ABORT_ASYNC_FILE_READ, $payload, 9);

        $payload = unpack('C1error_code', $data);

        return $payload['error_code'];
    }

    /**
     * Writes up to 61 bytes to a file object.
     * 
     * Returns the actual number of bytes written and the resulting error code.
     * 
     * If the file object was created by BrickRED::openFile() without the *NonBlocking*
     * flag or by BrickRED::createPipe() without the *NonBlockingWrite* flag then the
     * error code *NotSupported* is returned.
     * 
     * @param int $file_id
     * @param int[] $buffer
     * @param int $length_to_write
     * 
     * @return array
     */
    public function writeFile($file_id, $buffer, $length_to_write)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('v', $file_id);
        for ($i = 0; $i < 61; $i++) {
            $payload .= pack('C', $buffer[$i]);
        }
        $payload .= pack('C', $length_to_write);

        $data = $this->sendRequest(self::FUNCTION_WRITE_FILE, $payload, 10);

        $payload = unpack('C1error_code/C1length_written', $data);

        $ret['error_code'] = $payload['error_code'];
        $ret['length_written'] = $payload['length_written'];

        return $ret;
    }

    /**
     * Writes up to 61 bytes to a file object.
     * 
     * Does neither report the actual number of bytes written nor the resulting error
     * code.
     * 
     * If the file object was created by BrickRED::openFile() without the *NonBlocking*
     * flag or by BrickRED::createPipe() without the *NonBlockingWrite* flag then the
     * write operation will fail silently.
     * 
     * @param int $file_id
     * @param int[] $buffer
     * @param int $length_to_write
     * 
     * @return void
     */
    public function writeFileUnchecked($file_id, $buffer, $length_to_write)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $file_id);
        for ($i = 0; $i < 61; $i++) {
            $payload .= pack('C', $buffer[$i]);
        }
        $payload .= pack('C', $length_to_write);

        $this->sendRequest(self::FUNCTION_WRITE_FILE_UNCHECKED, $payload, 0);
    }

    /**
     * Writes up to 61 bytes to a file object.
     * 
     * Reports the actual number of bytes written and the resulting error code via the
     * BrickRED::CALLBACK_ASYNC_FILE_WRITE callback.
     * 
     * If the file object was created by BrickRED::openFile() without the *NonBlocking*
     * flag or by BrickRED::createPipe() without the *NonBlockingWrite* flag then the
     * error code *NotSupported* is reported via the BrickRED::CALLBACK_ASYNC_FILE_WRITE callback.
     * 
     * @param int $file_id
     * @param int[] $buffer
     * @param int $length_to_write
     * 
     * @return void
     */
    public function writeFileAsync($file_id, $buffer, $length_to_write)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $file_id);
        for ($i = 0; $i < 61; $i++) {
            $payload .= pack('C', $buffer[$i]);
        }
        $payload .= pack('C', $length_to_write);

        $this->sendRequest(self::FUNCTION_WRITE_FILE_ASYNC, $payload, 0);
    }

    /**
     * Set the current seek position of a file object relative to ``origin``.
     * 
     * Possible file origins are:
     * 
     * * Beginning = 0
     * * Current = 1
     * * End = 2
     * 
     * Returns the resulting absolute seek position and error code.
     * 
     * If the file object was created by BrickRED::createPipe() then it has no seek
     * position and the error code *InvalidSeek* is returned.
     * 
     * @param int $file_id
     * @param int $offset
     * @param int $origin
     * 
     * @return array
     */
    public function setFilePosition($file_id, $offset, $origin)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('v', $file_id);
        $payload .= Base256::encodeAndPackInt64($offset, 8);
        $payload .= pack('C', $origin);

        $data = $this->sendRequest(self::FUNCTION_SET_FILE_POSITION, $payload, 17);

        $payload = unpack('C1error_code/C8position', $data);

        $ret['error_code'] = $payload['error_code'];
        $ret['position'] = IPConnection::fixUnpackedUInt64($payload, 'position');

        return $ret;
    }

    /**
     * Returns the current seek position of a file object and returns the
     * resulting error code.
     * 
     * If the file object was created by BrickRED::createPipe() then it has no seek
     * position and the error code *InvalidSeek* is returned.
     * 
     * @param int $file_id
     * 
     * @return array
     */
    public function getFilePosition($file_id)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('v', $file_id);

        $data = $this->sendRequest(self::FUNCTION_GET_FILE_POSITION, $payload, 17);

        $payload = unpack('C1error_code/C8position', $data);

        $ret['error_code'] = $payload['error_code'];
        $ret['position'] = IPConnection::fixUnpackedUInt64($payload, 'position');

        return $ret;
    }

    /**
     * 
     * 
     * @param int $file_id
     * @param int $events
     * 
     * @return int
     */
    public function setFileEvents($file_id, $events)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $file_id);
        $payload .= pack('v', $events);

        $data = $this->sendRequest(self::FUNCTION_SET_FILE_EVENTS, $payload, 9);

        $payload = unpack('C1error_code', $data);

        return $payload['error_code'];
    }

    /**
     * 
     * 
     * @param int $file_id
     * 
     * @return array
     */
    public function getFileEvents($file_id)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('v', $file_id);

        $data = $this->sendRequest(self::FUNCTION_GET_FILE_EVENTS, $payload, 11);

        $payload = unpack('C1error_code/v1events', $data);

        $ret['error_code'] = $payload['error_code'];
        $ret['events'] = $payload['events'];

        return $ret;
    }

    /**
     * Opens an existing directory and allocates a new directory object for it.
     * 
     * FIXME: name has to be absolute
     * 
     * The reference count of the name string object is increased by one. When the
     * directory object is destroyed then the reference count of the name string
     * object is decreased by one. Also the name string object is locked and cannot be
     * modified while the directory object holds a reference to it.
     * 
     * Returns the object ID of the new directory object and the resulting error code.
     * 
     * @param int $name_string_id
     * @param int $session_id
     * 
     * @return array
     */
    public function openDirectory($name_string_id, $session_id)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('v', $name_string_id);
        $payload .= pack('v', $session_id);

        $data = $this->sendRequest(self::FUNCTION_OPEN_DIRECTORY, $payload, 11);

        $payload = unpack('C1error_code/v1directory_id', $data);

        $ret['error_code'] = $payload['error_code'];
        $ret['directory_id'] = $payload['directory_id'];

        return $ret;
    }

    /**
     * Returns the name of a directory object, as passed to BrickRED::openDirectory(), and
     * the resulting error code.
     * 
     * @param int $directory_id
     * @param int $session_id
     * 
     * @return array
     */
    public function getDirectoryName($directory_id, $session_id)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('v', $directory_id);
        $payload .= pack('v', $session_id);

        $data = $this->sendRequest(self::FUNCTION_GET_DIRECTORY_NAME, $payload, 11);

        $payload = unpack('C1error_code/v1name_string_id', $data);

        $ret['error_code'] = $payload['error_code'];
        $ret['name_string_id'] = $payload['name_string_id'];

        return $ret;
    }

    /**
     * Returns the next entry in a directory object and the resulting error code.
     * 
     * If there is not next entry then error code *NoMoreData* is returned. To rewind
     * a directory object call BrickRED::rewindDirectory().
     * 
     * Possible directory entry types are:
     * 
     * * Unknown = 0
     * * Regular = 1
     * * Directory = 2
     * * Character = 3
     * * Block = 4
     * * FIFO = 5
     * * Symlink = 6
     * * Socket = 7
     * 
     * @param int $directory_id
     * @param int $session_id
     * 
     * @return array
     */
    public function getNextDirectoryEntry($directory_id, $session_id)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('v', $directory_id);
        $payload .= pack('v', $session_id);

        $data = $this->sendRequest(self::FUNCTION_GET_NEXT_DIRECTORY_ENTRY, $payload, 12);

        $payload = unpack('C1error_code/v1name_string_id/C1type', $data);

        $ret['error_code'] = $payload['error_code'];
        $ret['name_string_id'] = $payload['name_string_id'];
        $ret['type'] = $payload['type'];

        return $ret;
    }

    /**
     * Rewinds a directory object and returns the resulting error code.
     * 
     * @param int $directory_id
     * 
     * @return int
     */
    public function rewindDirectory($directory_id)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $directory_id);

        $data = $this->sendRequest(self::FUNCTION_REWIND_DIRECTORY, $payload, 9);

        $payload = unpack('C1error_code', $data);

        return $payload['error_code'];
    }

    /**
     * FIXME: name has to be absolute
     * 
     * @param int $name_string_id
     * @param int $flags
     * @param int $permissions
     * @param int $uid
     * @param int $gid
     * 
     * @return int
     */
    public function createDirectory($name_string_id, $flags, $permissions, $uid, $gid)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $name_string_id);
        $payload .= pack('V', $flags);
        $payload .= pack('v', $permissions);
        $payload .= pack('V', $uid);
        $payload .= pack('V', $gid);

        $data = $this->sendRequest(self::FUNCTION_CREATE_DIRECTORY, $payload, 9);

        $payload = unpack('C1error_code', $data);

        return $payload['error_code'];
    }

    /**
     * 
     * 
     * @param int $session_id
     * 
     * @return array
     */
    public function getProcesses($session_id)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('v', $session_id);

        $data = $this->sendRequest(self::FUNCTION_GET_PROCESSES, $payload, 11);

        $payload = unpack('C1error_code/v1processes_list_id', $data);

        $ret['error_code'] = $payload['error_code'];
        $ret['processes_list_id'] = $payload['processes_list_id'];

        return $ret;
    }

    /**
     * 
     * 
     * @param int $executable_string_id
     * @param int $arguments_list_id
     * @param int $environment_list_id
     * @param int $working_directory_string_id
     * @param int $uid
     * @param int $gid
     * @param int $stdin_file_id
     * @param int $stdout_file_id
     * @param int $stderr_file_id
     * @param int $session_id
     * 
     * @return array
     */
    public function spawnProcess($executable_string_id, $arguments_list_id, $environment_list_id, $working_directory_string_id, $uid, $gid, $stdin_file_id, $stdout_file_id, $stderr_file_id, $session_id)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('v', $executable_string_id);
        $payload .= pack('v', $arguments_list_id);
        $payload .= pack('v', $environment_list_id);
        $payload .= pack('v', $working_directory_string_id);
        $payload .= pack('V', $uid);
        $payload .= pack('V', $gid);
        $payload .= pack('v', $stdin_file_id);
        $payload .= pack('v', $stdout_file_id);
        $payload .= pack('v', $stderr_file_id);
        $payload .= pack('v', $session_id);

        $data = $this->sendRequest(self::FUNCTION_SPAWN_PROCESS, $payload, 11);

        $payload = unpack('C1error_code/v1process_id', $data);

        $ret['error_code'] = $payload['error_code'];
        $ret['process_id'] = $payload['process_id'];

        return $ret;
    }

    /**
     * Sends a UNIX signal to a process object and returns the resulting error code.
     * 
     * Possible UNIX signals are:
     * 
     * * Interrupt = 2
     * * Quit = 3
     * * Abort = 6
     * * Kill = 9
     * * User1 = 10
     * * User2 = 12
     * * Terminate = 15
     * * Continue =  18
     * * Stop = 19
     * 
     * @param int $process_id
     * @param int $signal
     * 
     * @return int
     */
    public function killProcess($process_id, $signal)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $process_id);
        $payload .= pack('C', $signal);

        $data = $this->sendRequest(self::FUNCTION_KILL_PROCESS, $payload, 9);

        $payload = unpack('C1error_code', $data);

        return $payload['error_code'];
    }

    /**
     * Returns the executable, arguments, environment and working directory used to
     * spawn a process object, as passed to BrickRED::spawnProcess(), and the resulting
     * error code.
     * 
     * @param int $process_id
     * @param int $session_id
     * 
     * @return array
     */
    public function getProcessCommand($process_id, $session_id)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('v', $process_id);
        $payload .= pack('v', $session_id);

        $data = $this->sendRequest(self::FUNCTION_GET_PROCESS_COMMAND, $payload, 17);

        $payload = unpack('C1error_code/v1executable_string_id/v1arguments_list_id/v1environment_list_id/v1working_directory_string_id', $data);

        $ret['error_code'] = $payload['error_code'];
        $ret['executable_string_id'] = $payload['executable_string_id'];
        $ret['arguments_list_id'] = $payload['arguments_list_id'];
        $ret['environment_list_id'] = $payload['environment_list_id'];
        $ret['working_directory_string_id'] = $payload['working_directory_string_id'];

        return $ret;
    }

    /**
     * Returns the process ID and the user and group ID used to spawn a process object,
     * as passed to BrickRED::spawnProcess(), and the resulting error code.
     * 
     * The process ID is only valid if the state is *Running* or *Stopped*, see
     * BrickRED::getProcessState().
     * 
     * @param int $process_id
     * 
     * @return array
     */
    public function getProcessIdentity($process_id)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('v', $process_id);

        $data = $this->sendRequest(self::FUNCTION_GET_PROCESS_IDENTITY, $payload, 21);

        $payload = unpack('C1error_code/V1pid/V1uid/V1gid', $data);

        $ret['error_code'] = $payload['error_code'];
        $ret['pid'] = IPConnection::fixUnpackedUInt32($payload, 'pid');
        $ret['uid'] = IPConnection::fixUnpackedUInt32($payload, 'uid');
        $ret['gid'] = IPConnection::fixUnpackedUInt32($payload, 'gid');

        return $ret;
    }

    /**
     * Returns the stdin, stdout and stderr files used to spawn a process object, as
     * passed to BrickRED::spawnProcess(), and the resulting error code.
     * 
     * @param int $process_id
     * @param int $session_id
     * 
     * @return array
     */
    public function getProcessStdio($process_id, $session_id)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('v', $process_id);
        $payload .= pack('v', $session_id);

        $data = $this->sendRequest(self::FUNCTION_GET_PROCESS_STDIO, $payload, 15);

        $payload = unpack('C1error_code/v1stdin_file_id/v1stdout_file_id/v1stderr_file_id', $data);

        $ret['error_code'] = $payload['error_code'];
        $ret['stdin_file_id'] = $payload['stdin_file_id'];
        $ret['stdout_file_id'] = $payload['stdout_file_id'];
        $ret['stderr_file_id'] = $payload['stderr_file_id'];

        return $ret;
    }

    /**
     * Returns the current state, timestamp and exit code of a process object, and
     * the resulting error code.
     * 
     * Possible process states are:
     * 
     * * Unknown = 0
     * * Running = 1
     * * Error = 2
     * * Exited = 3
     * * Killed = 4
     * * Stopped = 5
     * 
     * The timestamp represents the UNIX time since when the process is in its current
     * state.
     * 
     * The exit code is only valid if the state is *Error*, *Exited*, *Killed* or
     * *Stopped* and has different meanings depending on the state:
     * 
     * * Error: error code for error occurred while spawning the process (see below)
     * * Exited: exit status of the process
     * * Killed: UNIX signal number used to kill the process
     * * Stopped: UNIX signal number used to stop the process
     * 
     * Possible exit/error codes in *Error* state are:
     * 
     * * InternalError = 125
     * * CannotExecute = 126
     * * DoesNotExist = 127
     * 
     * The *CannotExecute* error can be caused by the executable being opened for
     * writing.
     * 
     * @param int $process_id
     * 
     * @return array
     */
    public function getProcessState($process_id)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('v', $process_id);

        $data = $this->sendRequest(self::FUNCTION_GET_PROCESS_STATE, $payload, 19);

        $payload = unpack('C1error_code/C1state/C8timestamp/C1exit_code', $data);

        $ret['error_code'] = $payload['error_code'];
        $ret['state'] = $payload['state'];
        $ret['timestamp'] = IPConnection::fixUnpackedUInt64($payload, 'timestamp');
        $ret['exit_code'] = $payload['exit_code'];

        return $ret;
    }

    /**
     * 
     * 
     * @param int $session_id
     * 
     * @return array
     */
    public function getPrograms($session_id)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('v', $session_id);

        $data = $this->sendRequest(self::FUNCTION_GET_PROGRAMS, $payload, 11);

        $payload = unpack('C1error_code/v1programs_list_id', $data);

        $ret['error_code'] = $payload['error_code'];
        $ret['programs_list_id'] = $payload['programs_list_id'];

        return $ret;
    }

    /**
     * 
     * 
     * @param int $identifier_string_id
     * @param int $session_id
     * 
     * @return array
     */
    public function defineProgram($identifier_string_id, $session_id)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('v', $identifier_string_id);
        $payload .= pack('v', $session_id);

        $data = $this->sendRequest(self::FUNCTION_DEFINE_PROGRAM, $payload, 11);

        $payload = unpack('C1error_code/v1program_id', $data);

        $ret['error_code'] = $payload['error_code'];
        $ret['program_id'] = $payload['program_id'];

        return $ret;
    }

    /**
     * 
     * 
     * @param int $program_id
     * @param int $cookie
     * 
     * @return int
     */
    public function purgeProgram($program_id, $cookie)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $program_id);
        $payload .= pack('V', $cookie);

        $data = $this->sendRequest(self::FUNCTION_PURGE_PROGRAM, $payload, 9);

        $payload = unpack('C1error_code', $data);

        return $payload['error_code'];
    }

    /**
     * 
     * 
     * @param int $program_id
     * @param int $session_id
     * 
     * @return array
     */
    public function getProgramIdentifier($program_id, $session_id)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('v', $program_id);
        $payload .= pack('v', $session_id);

        $data = $this->sendRequest(self::FUNCTION_GET_PROGRAM_IDENTIFIER, $payload, 11);

        $payload = unpack('C1error_code/v1identifier_string_id', $data);

        $ret['error_code'] = $payload['error_code'];
        $ret['identifier_string_id'] = $payload['identifier_string_id'];

        return $ret;
    }

    /**
     * FIXME: root directory is absolute: <home>/programs/<identifier>
     * 
     * @param int $program_id
     * @param int $session_id
     * 
     * @return array
     */
    public function getProgramRootDirectory($program_id, $session_id)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('v', $program_id);
        $payload .= pack('v', $session_id);

        $data = $this->sendRequest(self::FUNCTION_GET_PROGRAM_ROOT_DIRECTORY, $payload, 11);

        $payload = unpack('C1error_code/v1root_directory_string_id', $data);

        $ret['error_code'] = $payload['error_code'];
        $ret['root_directory_string_id'] = $payload['root_directory_string_id'];

        return $ret;
    }

    /**
     * FIXME: working directory is relative to <home>/programs/<identifier>/bin
     * 
     * @param int $program_id
     * @param int $executable_string_id
     * @param int $arguments_list_id
     * @param int $environment_list_id
     * @param int $working_directory_string_id
     * 
     * @return int
     */
    public function setProgramCommand($program_id, $executable_string_id, $arguments_list_id, $environment_list_id, $working_directory_string_id)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $program_id);
        $payload .= pack('v', $executable_string_id);
        $payload .= pack('v', $arguments_list_id);
        $payload .= pack('v', $environment_list_id);
        $payload .= pack('v', $working_directory_string_id);

        $data = $this->sendRequest(self::FUNCTION_SET_PROGRAM_COMMAND, $payload, 9);

        $payload = unpack('C1error_code', $data);

        return $payload['error_code'];
    }

    /**
     * FIXME: working directory is relative to <home>/programs/<identifier>/bin
     * 
     * @param int $program_id
     * @param int $session_id
     * 
     * @return array
     */
    public function getProgramCommand($program_id, $session_id)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('v', $program_id);
        $payload .= pack('v', $session_id);

        $data = $this->sendRequest(self::FUNCTION_GET_PROGRAM_COMMAND, $payload, 17);

        $payload = unpack('C1error_code/v1executable_string_id/v1arguments_list_id/v1environment_list_id/v1working_directory_string_id', $data);

        $ret['error_code'] = $payload['error_code'];
        $ret['executable_string_id'] = $payload['executable_string_id'];
        $ret['arguments_list_id'] = $payload['arguments_list_id'];
        $ret['environment_list_id'] = $payload['environment_list_id'];
        $ret['working_directory_string_id'] = $payload['working_directory_string_id'];

        return $ret;
    }

    /**
     * FIXME: stdio file names are relative to <home>/programs/<identifier>/bin
     * 
     * @param int $program_id
     * @param int $stdin_redirection
     * @param int $stdin_file_name_string_id
     * @param int $stdout_redirection
     * @param int $stdout_file_name_string_id
     * @param int $stderr_redirection
     * @param int $stderr_file_name_string_id
     * 
     * @return int
     */
    public function setProgramStdioRedirection($program_id, $stdin_redirection, $stdin_file_name_string_id, $stdout_redirection, $stdout_file_name_string_id, $stderr_redirection, $stderr_file_name_string_id)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $program_id);
        $payload .= pack('C', $stdin_redirection);
        $payload .= pack('v', $stdin_file_name_string_id);
        $payload .= pack('C', $stdout_redirection);
        $payload .= pack('v', $stdout_file_name_string_id);
        $payload .= pack('C', $stderr_redirection);
        $payload .= pack('v', $stderr_file_name_string_id);

        $data = $this->sendRequest(self::FUNCTION_SET_PROGRAM_STDIO_REDIRECTION, $payload, 9);

        $payload = unpack('C1error_code', $data);

        return $payload['error_code'];
    }

    /**
     * FIXME: stdio file names are relative to <home>/programs/<identifier>/bin
     * 
     * @param int $program_id
     * @param int $session_id
     * 
     * @return array
     */
    public function getProgramStdioRedirection($program_id, $session_id)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('v', $program_id);
        $payload .= pack('v', $session_id);

        $data = $this->sendRequest(self::FUNCTION_GET_PROGRAM_STDIO_REDIRECTION, $payload, 18);

        $payload = unpack('C1error_code/C1stdin_redirection/v1stdin_file_name_string_id/C1stdout_redirection/v1stdout_file_name_string_id/C1stderr_redirection/v1stderr_file_name_string_id', $data);

        $ret['error_code'] = $payload['error_code'];
        $ret['stdin_redirection'] = $payload['stdin_redirection'];
        $ret['stdin_file_name_string_id'] = $payload['stdin_file_name_string_id'];
        $ret['stdout_redirection'] = $payload['stdout_redirection'];
        $ret['stdout_file_name_string_id'] = $payload['stdout_file_name_string_id'];
        $ret['stderr_redirection'] = $payload['stderr_redirection'];
        $ret['stderr_file_name_string_id'] = $payload['stderr_file_name_string_id'];

        return $ret;
    }

    /**
     * 
     * 
     * @param int $program_id
     * @param int $start_mode
     * @param bool $continue_after_error
     * @param int $start_interval
     * @param int $start_fields_string_id
     * 
     * @return int
     */
    public function setProgramSchedule($program_id, $start_mode, $continue_after_error, $start_interval, $start_fields_string_id)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $program_id);
        $payload .= pack('C', $start_mode);
        $payload .= pack('C', intval((bool)$continue_after_error));
        $payload .= pack('V', $start_interval);
        $payload .= pack('v', $start_fields_string_id);

        $data = $this->sendRequest(self::FUNCTION_SET_PROGRAM_SCHEDULE, $payload, 9);

        $payload = unpack('C1error_code', $data);

        return $payload['error_code'];
    }

    /**
     * 
     * 
     * @param int $program_id
     * @param int $session_id
     * 
     * @return array
     */
    public function getProgramSchedule($program_id, $session_id)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('v', $program_id);
        $payload .= pack('v', $session_id);

        $data = $this->sendRequest(self::FUNCTION_GET_PROGRAM_SCHEDULE, $payload, 17);

        $payload = unpack('C1error_code/C1start_mode/C1continue_after_error/V1start_interval/v1start_fields_string_id', $data);

        $ret['error_code'] = $payload['error_code'];
        $ret['start_mode'] = $payload['start_mode'];
        $ret['continue_after_error'] = (bool)$payload['continue_after_error'];
        $ret['start_interval'] = IPConnection::fixUnpackedUInt32($payload, 'start_interval');
        $ret['start_fields_string_id'] = $payload['start_fields_string_id'];

        return $ret;
    }

    /**
     * FIXME: message is currently valid in error-occurred state only
     * 
     * @param int $program_id
     * @param int $session_id
     * 
     * @return array
     */
    public function getProgramSchedulerState($program_id, $session_id)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('v', $program_id);
        $payload .= pack('v', $session_id);

        $data = $this->sendRequest(self::FUNCTION_GET_PROGRAM_SCHEDULER_STATE, $payload, 20);

        $payload = unpack('C1error_code/C1state/C8timestamp/v1message_string_id', $data);

        $ret['error_code'] = $payload['error_code'];
        $ret['state'] = $payload['state'];
        $ret['timestamp'] = IPConnection::fixUnpackedUInt64($payload, 'timestamp');
        $ret['message_string_id'] = $payload['message_string_id'];

        return $ret;
    }

    /**
     * 
     * 
     * @param int $program_id
     * 
     * @return int
     */
    public function continueProgramSchedule($program_id)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $program_id);

        $data = $this->sendRequest(self::FUNCTION_CONTINUE_PROGRAM_SCHEDULE, $payload, 9);

        $payload = unpack('C1error_code', $data);

        return $payload['error_code'];
    }

    /**
     * 
     * 
     * @param int $program_id
     * 
     * @return int
     */
    public function startProgram($program_id)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $program_id);

        $data = $this->sendRequest(self::FUNCTION_START_PROGRAM, $payload, 9);

        $payload = unpack('C1error_code', $data);

        return $payload['error_code'];
    }

    /**
     * 
     * 
     * @param int $program_id
     * @param int $session_id
     * 
     * @return array
     */
    public function getLastSpawnedProgramProcess($program_id, $session_id)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('v', $program_id);
        $payload .= pack('v', $session_id);

        $data = $this->sendRequest(self::FUNCTION_GET_LAST_SPAWNED_PROGRAM_PROCESS, $payload, 19);

        $payload = unpack('C1error_code/v1process_id/C8timestamp', $data);

        $ret['error_code'] = $payload['error_code'];
        $ret['process_id'] = $payload['process_id'];
        $ret['timestamp'] = IPConnection::fixUnpackedUInt64($payload, 'timestamp');

        return $ret;
    }

    /**
     * 
     * 
     * @param int $program_id
     * @param int $session_id
     * 
     * @return array
     */
    public function getCustomProgramOptionNames($program_id, $session_id)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('v', $program_id);
        $payload .= pack('v', $session_id);

        $data = $this->sendRequest(self::FUNCTION_GET_CUSTOM_PROGRAM_OPTION_NAMES, $payload, 11);

        $payload = unpack('C1error_code/v1names_list_id', $data);

        $ret['error_code'] = $payload['error_code'];
        $ret['names_list_id'] = $payload['names_list_id'];

        return $ret;
    }

    /**
     * 
     * 
     * @param int $program_id
     * @param int $name_string_id
     * @param int $value_string_id
     * 
     * @return int
     */
    public function setCustomProgramOptionValue($program_id, $name_string_id, $value_string_id)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $program_id);
        $payload .= pack('v', $name_string_id);
        $payload .= pack('v', $value_string_id);

        $data = $this->sendRequest(self::FUNCTION_SET_CUSTOM_PROGRAM_OPTION_VALUE, $payload, 9);

        $payload = unpack('C1error_code', $data);

        return $payload['error_code'];
    }

    /**
     * 
     * 
     * @param int $program_id
     * @param int $name_string_id
     * @param int $session_id
     * 
     * @return array
     */
    public function getCustomProgramOptionValue($program_id, $name_string_id, $session_id)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('v', $program_id);
        $payload .= pack('v', $name_string_id);
        $payload .= pack('v', $session_id);

        $data = $this->sendRequest(self::FUNCTION_GET_CUSTOM_PROGRAM_OPTION_VALUE, $payload, 11);

        $payload = unpack('C1error_code/v1value_string_id', $data);

        $ret['error_code'] = $payload['error_code'];
        $ret['value_string_id'] = $payload['value_string_id'];

        return $ret;
    }

    /**
     * 
     * 
     * @param int $program_id
     * @param int $name_string_id
     * 
     * @return int
     */
    public function removeCustomProgramOption($program_id, $name_string_id)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $program_id);
        $payload .= pack('v', $name_string_id);

        $data = $this->sendRequest(self::FUNCTION_REMOVE_CUSTOM_PROGRAM_OPTION, $payload, 9);

        $payload = unpack('C1error_code', $data);

        return $payload['error_code'];
    }

    /**
     * Returns the UID, the UID where the Brick is connected to,
     * the position, the hardware and firmware version as well as the
     * device identifier.
     * 
     * The position is the position in the stack from '0' (bottom) to '8' (top).
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
    public function callbackWrapperAsyncFileRead($data)
    {
        $payload = unpack('v1file_id/C1error_code/C60buffer/C1length_read', $data);
        $payload['buffer'] = IPConnection::collectUnpackedArray($payload, 'buffer', 60);

        if (array_key_exists(self::CALLBACK_ASYNC_FILE_READ, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_ASYNC_FILE_READ];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_ASYNC_FILE_READ];

            call_user_func($function, $payload['file_id'], $payload['error_code'], $payload['buffer'], $payload['length_read'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperAsyncFileWrite($data)
    {
        $payload = unpack('v1file_id/C1error_code/C1length_written', $data);

        if (array_key_exists(self::CALLBACK_ASYNC_FILE_WRITE, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_ASYNC_FILE_WRITE];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_ASYNC_FILE_WRITE];

            call_user_func($function, $payload['file_id'], $payload['error_code'], $payload['length_written'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperFileEventsOccurred($data)
    {
        $payload = unpack('v1file_id/v1events', $data);

        if (array_key_exists(self::CALLBACK_FILE_EVENTS_OCCURRED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_FILE_EVENTS_OCCURRED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_FILE_EVENTS_OCCURRED];

            call_user_func($function, $payload['file_id'], $payload['events'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperProcessStateChanged($data)
    {
        $payload = unpack('v1process_id/C1state/C8timestamp/C1exit_code', $data);
        $payload['timestamp'] = IPConnection::fixUnpackedUInt64($payload, 'timestamp');

        if (array_key_exists(self::CALLBACK_PROCESS_STATE_CHANGED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_PROCESS_STATE_CHANGED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_PROCESS_STATE_CHANGED];

            call_user_func($function, $payload['process_id'], $payload['state'], $payload['timestamp'], $payload['exit_code'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperProgramSchedulerStateChanged($data)
    {
        $payload = unpack('v1program_id', $data);

        if (array_key_exists(self::CALLBACK_PROGRAM_SCHEDULER_STATE_CHANGED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_PROGRAM_SCHEDULER_STATE_CHANGED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_PROGRAM_SCHEDULER_STATE_CHANGED];

            call_user_func($function, $payload['program_id'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperProgramProcessSpawned($data)
    {
        $payload = unpack('v1program_id', $data);

        if (array_key_exists(self::CALLBACK_PROGRAM_PROCESS_SPAWNED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_PROGRAM_PROCESS_SPAWNED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_PROGRAM_PROCESS_SPAWNED];

            call_user_func($function, $payload['program_id'], $user_data);
        }
    }
}

?>
