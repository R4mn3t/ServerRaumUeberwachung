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
 * Communicates with RS485/Modbus devices with full- or half-duplex
 */
class BrickletRS485 extends Device
{

    /**
     * See CALLBACK_READ
     */
    const CALLBACK_READ_LOW_LEVEL = 41;

    /**
     * This callback is called if a new error occurs. It returns
     * the current overrun and parity error count.
     */
    const CALLBACK_ERROR_COUNT = 42;

    /**
     * This callback is called only in Modbus slave mode when the slave receives a
     * valid request from a Modbus master to read coils. The parameters are
     * request ID of the request, the number of the first coil to be read and the number of coils to
     * be read as received by the request. The number of the first coil is called starting address for backwards compatibility reasons.
     * It is not an address, but instead a coil number in the range of 1 to 65536.
     * 
     * To send a response of this request use BrickletRS485::modbusSlaveAnswerReadCoilsRequest().
     */
    const CALLBACK_MODBUS_SLAVE_READ_COILS_REQUEST = 43;

    /**
     * See CALLBACK_MODBUS_MASTER_READ_COILS_RESPONSE
     */
    const CALLBACK_MODBUS_MASTER_READ_COILS_RESPONSE_LOW_LEVEL = 44;

    /**
     * This callback is called only in Modbus slave mode when the slave receives a
     * valid request from a Modbus master to read holding registers. The parameters
     * are request ID of the request, the number of the first holding register to be read and the number of holding
     * registers to be read as received by the request. The number of the first holding register is called starting address for backwards compatibility reasons.
     * It is not an address, but instead a holding register number in the range of 1 to 65536. The prefix digit 4 (for holding register) is omitted.
     * 
     * To send a response of this request use BrickletRS485::modbusSlaveAnswerReadHoldingRegistersRequest().
     */
    const CALLBACK_MODBUS_SLAVE_READ_HOLDING_REGISTERS_REQUEST = 45;

    /**
     * See CALLBACK_MODBUS_MASTER_READ_HOLDING_REGISTERS_RESPONSE
     */
    const CALLBACK_MODBUS_MASTER_READ_HOLDING_REGISTERS_RESPONSE_LOW_LEVEL = 46;

    /**
     * This callback is called only in Modbus slave mode when the slave receives a
     * valid request from a Modbus master to write a single coil. The parameters
     * are request ID of the request, the number of the coil and the value of coil to be
     * written as received by the request. The number of the coil is called coil address for backwards compatibility reasons.
     * It is not an address, but instead a coil number in the range of 1 to 65536.
     * 
     * To send a response of this request use BrickletRS485::modbusSlaveAnswerWriteSingleCoilRequest().
     */
    const CALLBACK_MODBUS_SLAVE_WRITE_SINGLE_COIL_REQUEST = 47;

    /**
     * This callback is called only in Modbus master mode when the master receives a
     * valid response of a request to write a single coil.
     * 
     * The parameters are
     * request ID of the request and exception code of the response.
     * 
     * Any non-zero exception code indicates a problem.
     * If the exception code is greater than 0 then the number represents a Modbus
     * exception code. If it is less than 0 then it represents other errors. For
     * example, -1 indicates that the request timed out or that the master did not receive
     * any valid response of the request within the master request timeout period as set
     * by BrickletRS485::setModbusConfiguration().
     */
    const CALLBACK_MODBUS_MASTER_WRITE_SINGLE_COIL_RESPONSE = 48;

    /**
     * This callback is called only in Modbus slave mode when the slave receives a
     * valid request from a Modbus master to write a single holding register. The parameters
     * are request ID of the request, the number of the holding register and the register value to
     * be written as received by the request. The number of the holding register is called starting address for backwards compatibility reasons.
     * It is not an address, but instead a holding register number in the range of 1 to 65536. The prefix digit 4 (for holding register) is omitted.
     * 
     * To send a response of this request use BrickletRS485::modbusSlaveAnswerWriteSingleRegisterRequest().
     */
    const CALLBACK_MODBUS_SLAVE_WRITE_SINGLE_REGISTER_REQUEST = 49;

    /**
     * This callback is called only in Modbus master mode when the master receives a
     * valid response of a request to write a single register.
     * 
     * The parameters are
     * request ID of the request and exception code of the response.
     * 
     * Any non-zero exception code
     * indicates a problem. If the exception code is greater than 0 then the number
     * represents a Modbus exception code. If it is less than 0 then it represents
     * other errors. For example, -1 indicates that the request timed out or that the
     * master did not receive any valid response of the request within the master request
     * timeout period as set by BrickletRS485::setModbusConfiguration().
     */
    const CALLBACK_MODBUS_MASTER_WRITE_SINGLE_REGISTER_RESPONSE = 50;

    /**
     * See CALLBACK_MODBUS_SLAVE_WRITE_MULTIPLE_COILS_REQUEST
     */
    const CALLBACK_MODBUS_SLAVE_WRITE_MULTIPLE_COILS_REQUEST_LOW_LEVEL = 51;

    /**
     * This callback is called only in Modbus master mode when the master receives a
     * valid response of a request to read coils.
     * 
     * The parameters are
     * request ID of the request and exception code of the response.
     * 
     * Any non-zero exception code
     * indicates a problem. If the exception code is greater than 0 then the number
     * represents a Modbus exception code. If it is less than 0 then it represents
     * other errors. For example, -1 indicates that the request timedout or that the
     * master did not receive any valid response of the request within the master request
     * timeout period as set by BrickletRS485::setModbusConfiguration().
     */
    const CALLBACK_MODBUS_MASTER_WRITE_MULTIPLE_COILS_RESPONSE = 52;

    /**
     * See CALLBACK_MODBUS_SLAVE_WRITE_MULTIPLE_REGISTERS_REQUEST
     */
    const CALLBACK_MODBUS_SLAVE_WRITE_MULTIPLE_REGISTERS_REQUEST_LOW_LEVEL = 53;

    /**
     * This callback is called only in Modbus master mode when the master receives a
     * valid response of a request to write multiple registers.
     * 
     * The parameters
     * are request ID of the request and exception code of the response.
     * 
     * Any non-zero
     * exception code indicates a problem. If the exception code is greater than 0 then
     * the number represents a Modbus exception code. If it is less than 0 then it
     * represents other errors. For example, -1 indicates that the request timedout or
     * that the master did not receive any valid response of the request within the master
     * request timeout period as set by BrickletRS485::setModbusConfiguration().
     */
    const CALLBACK_MODBUS_MASTER_WRITE_MULTIPLE_REGISTERS_RESPONSE = 54;

    /**
     * This callback is called only in Modbus slave mode when the slave receives a
     * valid request from a Modbus master to read discrete inputs. The parameters
     * are request ID of the request, the number of the first discrete input and the number of discrete
     * inputs to be read as received by the request. The number of the first discrete input is called starting address for backwards compatibility reasons.
     * It is not an address, but instead a discrete input number in the range of 1 to 65536. The prefix digit 1 (for discrete input) is omitted.
     * 
     * To send a response of this request use BrickletRS485::modbusSlaveAnswerReadDiscreteInputsRequest().
     */
    const CALLBACK_MODBUS_SLAVE_READ_DISCRETE_INPUTS_REQUEST = 55;

    /**
     * See CALLBACK_MODBUS_MASTER_READ_DISCRETE_INPUTS_RESPONSE
     */
    const CALLBACK_MODBUS_MASTER_READ_DISCRETE_INPUTS_RESPONSE_LOW_LEVEL = 56;

    /**
     * This callback is called only in Modbus slave mode when the slave receives a
     * valid request from a Modbus master to read input registers. The parameters
     * are request ID of the request, the number of the first input register and the number of input
     * registers to be read as received by the request. The number of the first input register is called starting address for backwards compatibility reasons.
     * It is not an address, but instead a input register number in the range of 1 to 65536. The prefix digit 3 (for input register) is omitted.
     * 
     * To send a response of this request use BrickletRS485::modbusSlaveAnswerReadInputRegistersRequest().
     */
    const CALLBACK_MODBUS_SLAVE_READ_INPUT_REGISTERS_REQUEST = 57;

    /**
     * See CALLBACK_MODBUS_MASTER_READ_INPUT_REGISTERS_RESPONSE
     */
    const CALLBACK_MODBUS_MASTER_READ_INPUT_REGISTERS_RESPONSE_LOW_LEVEL = 58;

    /**
     * This callback is called if at least one frame of data is readable. The frame size is configured with BrickletRS485::setFrameReadableCallbackConfiguration().
     * The frame count parameter is the number of frames that can be read.
     * This callback is triggered only once until BrickletRS485::read() is called. This means, that if you have configured a frame size of X bytes,
     * you can read exactly X bytes using the BrickletRS485::read() function, every time the callback triggers without checking the frame count parameter.
     * 
     * .. versionadded:: 2.0.5$nbsp;(Plugin)
     */
    const CALLBACK_FRAME_READABLE = 61;

    /**
     * This callback is called if new data is available.
     * 
     * To enable this callback, use BrickletRS485::enableReadCallback().
     * 
     * <note>
     *  If reconstructing the value fails, the callback is triggered with NULL for message.
     * </note>
     */
    const CALLBACK_READ = -41;

    /**
     * This callback is called only in Modbus master mode when the master receives a
     * valid response of a request to read coils.
     * 
     * The parameters are request ID
     * of the request, exception code of the response and the data as received by the
     * response.
     * 
     * Any non-zero exception code indicates a problem. If the exception code
     * is greater than 0 then the number represents a Modbus exception code. If it is
     * less than 0 then it represents other errors. For example, -1 indicates that
     * the request timed out or that the master did not receive any valid response of the
     * request within the master request timeout period as set by
     * BrickletRS485::setModbusConfiguration().
     * 
     * <note>
     *  If reconstructing the value fails, the callback is triggered with NULL for coils.
     * </note>
     */
    const CALLBACK_MODBUS_MASTER_READ_COILS_RESPONSE = -44;

    /**
     * This callback is called only in Modbus master mode when the master receives a
     * valid response of a request to read holding registers.
     * 
     * The parameters are
     * request ID of the request, exception code of the response and the data as received
     * by the response.
     * 
     * Any non-zero exception code indicates a problem. If the exception
     * code is greater than 0 then the number represents a Modbus exception code. If
     * it is less than 0 then it represents other errors. For example, -1 indicates that
     * the request timed out or that the master did not receive any valid response of the
     * request within the master request timeout period as set by
     * BrickletRS485::setModbusConfiguration().
     * 
     * <note>
     *  If reconstructing the value fails, the callback is triggered with NULL for holdingRegisters.
     * </note>
     */
    const CALLBACK_MODBUS_MASTER_READ_HOLDING_REGISTERS_RESPONSE = -46;

    /**
     * This callback is called only in Modbus slave mode when the slave receives a
     * valid request from a Modbus master to write multiple coils. The parameters
     * are request ID of the request, the number of the first coil and the data to be written as
     * received by the request. The number of the first coil is called starting address for backwards compatibility reasons.
     * It is not an address, but instead a coil number in the range of 1 to 65536.
     * 
     * To send a response of this request use BrickletRS485::modbusSlaveAnswerWriteMultipleCoilsRequest().
     * 
     * <note>
     *  If reconstructing the value fails, the callback is triggered with NULL for coils.
     * </note>
     */
    const CALLBACK_MODBUS_SLAVE_WRITE_MULTIPLE_COILS_REQUEST = -51;

    /**
     * This callback is called only in Modbus slave mode when the slave receives a
     * valid request from a Modbus master to write multiple holding registers. The parameters
     * are request ID of the request, the number of the first holding register and the data to be written as
     * received by the request. The number of the first holding register is called starting address for backwards compatibility reasons.
     * It is not an address, but instead a holding register number in the range of 1 to 65536. The prefix digit 4 (for holding register) is omitted.
     * 
     * To send a response of this request use BrickletRS485::modbusSlaveAnswerWriteMultipleRegistersRequest().
     * 
     * <note>
     *  If reconstructing the value fails, the callback is triggered with NULL for registers.
     * </note>
     */
    const CALLBACK_MODBUS_SLAVE_WRITE_MULTIPLE_REGISTERS_REQUEST = -53;

    /**
     * This callback is called only in Modbus master mode when the master receives a
     * valid response of a request to read discrete inputs.
     * 
     * The parameters are
     * request ID of the request, exception code of the response and the data as received
     * by the response.
     * 
     * Any non-zero exception code indicates a problem. If the exception
     * code is greater than 0 then the number represents a Modbus exception code. If
     * it is less than 0 then it represents other errors. For example, -1 indicates that
     * the request timedout or that the master did not receive any valid response of the
     * request within the master request timeout period as set by
     * BrickletRS485::setModbusConfiguration().
     * 
     * <note>
     *  If reconstructing the value fails, the callback is triggered with NULL for discreteInputs.
     * </note>
     */
    const CALLBACK_MODBUS_MASTER_READ_DISCRETE_INPUTS_RESPONSE = -56;

    /**
     * This callback is called only in Modbus master mode when the master receives a
     * valid response of a request to read input registers.
     * 
     * The parameters are
     * request ID of the request, exception code of the response and the data as received
     * by the response.
     * 
     * Any non-zero exception code indicates a problem. If the exception
     * code is greater than 0 then the number represents a Modbus exception code. If
     * it is less than 0 then it represents other errors. For example, -1 indicates that
     * the request timedout or that the master did not receive any valid response of the
     * request within the master request timeout period as set by
     * BrickletRS485::setModbusConfiguration().
     * 
     * <note>
     *  If reconstructing the value fails, the callback is triggered with NULL for inputRegisters.
     * </note>
     */
    const CALLBACK_MODBUS_MASTER_READ_INPUT_REGISTERS_RESPONSE = -58;


    /**
     * @internal
     */
    const FUNCTION_WRITE_LOW_LEVEL = 1;

    /**
     * @internal
     */
    const FUNCTION_READ_LOW_LEVEL = 2;

    /**
     * @internal
     */
    const FUNCTION_ENABLE_READ_CALLBACK = 3;

    /**
     * @internal
     */
    const FUNCTION_DISABLE_READ_CALLBACK = 4;

    /**
     * @internal
     */
    const FUNCTION_IS_READ_CALLBACK_ENABLED = 5;

    /**
     * @internal
     */
    const FUNCTION_SET_RS485_CONFIGURATION = 6;

    /**
     * @internal
     */
    const FUNCTION_GET_RS485_CONFIGURATION = 7;

    /**
     * @internal
     */
    const FUNCTION_SET_MODBUS_CONFIGURATION = 8;

    /**
     * @internal
     */
    const FUNCTION_GET_MODBUS_CONFIGURATION = 9;

    /**
     * @internal
     */
    const FUNCTION_SET_MODE = 10;

    /**
     * @internal
     */
    const FUNCTION_GET_MODE = 11;

    /**
     * @internal
     */
    const FUNCTION_SET_COMMUNICATION_LED_CONFIG = 12;

    /**
     * @internal
     */
    const FUNCTION_GET_COMMUNICATION_LED_CONFIG = 13;

    /**
     * @internal
     */
    const FUNCTION_SET_ERROR_LED_CONFIG = 14;

    /**
     * @internal
     */
    const FUNCTION_GET_ERROR_LED_CONFIG = 15;

    /**
     * @internal
     */
    const FUNCTION_SET_BUFFER_CONFIG = 16;

    /**
     * @internal
     */
    const FUNCTION_GET_BUFFER_CONFIG = 17;

    /**
     * @internal
     */
    const FUNCTION_GET_BUFFER_STATUS = 18;

    /**
     * @internal
     */
    const FUNCTION_ENABLE_ERROR_COUNT_CALLBACK = 19;

    /**
     * @internal
     */
    const FUNCTION_DISABLE_ERROR_COUNT_CALLBACK = 20;

    /**
     * @internal
     */
    const FUNCTION_IS_ERROR_COUNT_CALLBACK_ENABLED = 21;

    /**
     * @internal
     */
    const FUNCTION_GET_ERROR_COUNT = 22;

    /**
     * @internal
     */
    const FUNCTION_GET_MODBUS_COMMON_ERROR_COUNT = 23;

    /**
     * @internal
     */
    const FUNCTION_MODBUS_SLAVE_REPORT_EXCEPTION = 24;

    /**
     * @internal
     */
    const FUNCTION_MODBUS_SLAVE_ANSWER_READ_COILS_REQUEST_LOW_LEVEL = 25;

    /**
     * @internal
     */
    const FUNCTION_MODBUS_MASTER_READ_COILS = 26;

    /**
     * @internal
     */
    const FUNCTION_MODBUS_SLAVE_ANSWER_READ_HOLDING_REGISTERS_REQUEST_LOW_LEVEL = 27;

    /**
     * @internal
     */
    const FUNCTION_MODBUS_MASTER_READ_HOLDING_REGISTERS = 28;

    /**
     * @internal
     */
    const FUNCTION_MODBUS_SLAVE_ANSWER_WRITE_SINGLE_COIL_REQUEST = 29;

    /**
     * @internal
     */
    const FUNCTION_MODBUS_MASTER_WRITE_SINGLE_COIL = 30;

    /**
     * @internal
     */
    const FUNCTION_MODBUS_SLAVE_ANSWER_WRITE_SINGLE_REGISTER_REQUEST = 31;

    /**
     * @internal
     */
    const FUNCTION_MODBUS_MASTER_WRITE_SINGLE_REGISTER = 32;

    /**
     * @internal
     */
    const FUNCTION_MODBUS_SLAVE_ANSWER_WRITE_MULTIPLE_COILS_REQUEST = 33;

    /**
     * @internal
     */
    const FUNCTION_MODBUS_MASTER_WRITE_MULTIPLE_COILS_LOW_LEVEL = 34;

    /**
     * @internal
     */
    const FUNCTION_MODBUS_SLAVE_ANSWER_WRITE_MULTIPLE_REGISTERS_REQUEST = 35;

    /**
     * @internal
     */
    const FUNCTION_MODBUS_MASTER_WRITE_MULTIPLE_REGISTERS_LOW_LEVEL = 36;

    /**
     * @internal
     */
    const FUNCTION_MODBUS_SLAVE_ANSWER_READ_DISCRETE_INPUTS_REQUEST_LOW_LEVEL = 37;

    /**
     * @internal
     */
    const FUNCTION_MODBUS_MASTER_READ_DISCRETE_INPUTS = 38;

    /**
     * @internal
     */
    const FUNCTION_MODBUS_SLAVE_ANSWER_READ_INPUT_REGISTERS_REQUEST_LOW_LEVEL = 39;

    /**
     * @internal
     */
    const FUNCTION_MODBUS_MASTER_READ_INPUT_REGISTERS = 40;

    /**
     * @internal
     */
    const FUNCTION_SET_FRAME_READABLE_CALLBACK_CONFIGURATION = 59;

    /**
     * @internal
     */
    const FUNCTION_GET_FRAME_READABLE_CALLBACK_CONFIGURATION = 60;

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

    const PARITY_NONE = 0;
    const PARITY_ODD = 1;
    const PARITY_EVEN = 2;
    const STOPBITS_1 = 1;
    const STOPBITS_2 = 2;
    const WORDLENGTH_5 = 5;
    const WORDLENGTH_6 = 6;
    const WORDLENGTH_7 = 7;
    const WORDLENGTH_8 = 8;
    const DUPLEX_HALF = 0;
    const DUPLEX_FULL = 1;
    const MODE_RS485 = 0;
    const MODE_MODBUS_MASTER_RTU = 1;
    const MODE_MODBUS_SLAVE_RTU = 2;
    const COMMUNICATION_LED_CONFIG_OFF = 0;
    const COMMUNICATION_LED_CONFIG_ON = 1;
    const COMMUNICATION_LED_CONFIG_SHOW_HEARTBEAT = 2;
    const COMMUNICATION_LED_CONFIG_SHOW_COMMUNICATION = 3;
    const ERROR_LED_CONFIG_OFF = 0;
    const ERROR_LED_CONFIG_ON = 1;
    const ERROR_LED_CONFIG_SHOW_HEARTBEAT = 2;
    const ERROR_LED_CONFIG_SHOW_ERROR = 3;
    const EXCEPTION_CODE_TIMEOUT = -1;
    const EXCEPTION_CODE_SUCCESS = 0;
    const EXCEPTION_CODE_ILLEGAL_FUNCTION = 1;
    const EXCEPTION_CODE_ILLEGAL_DATA_ADDRESS = 2;
    const EXCEPTION_CODE_ILLEGAL_DATA_VALUE = 3;
    const EXCEPTION_CODE_SLAVE_DEVICE_FAILURE = 4;
    const EXCEPTION_CODE_ACKNOWLEDGE = 5;
    const EXCEPTION_CODE_SLAVE_DEVICE_BUSY = 6;
    const EXCEPTION_CODE_MEMORY_PARITY_ERROR = 8;
    const EXCEPTION_CODE_GATEWAY_PATH_UNAVAILABLE = 10;
    const EXCEPTION_CODE_GATEWAY_TARGET_DEVICE_FAILED_TO_RESPOND = 11;
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

    const DEVICE_IDENTIFIER = 277;

    const DEVICE_DISPLAY_NAME = 'RS485 Bricklet';

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

        $this->response_expected[self::FUNCTION_WRITE_LOW_LEVEL] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_READ_LOW_LEVEL] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_ENABLE_READ_CALLBACK] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_DISABLE_READ_CALLBACK] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_IS_READ_CALLBACK_ENABLED] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_RS485_CONFIGURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_RS485_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_MODBUS_CONFIGURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_MODBUS_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_MODE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_MODE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_COMMUNICATION_LED_CONFIG] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_COMMUNICATION_LED_CONFIG] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ERROR_LED_CONFIG] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_ERROR_LED_CONFIG] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_BUFFER_CONFIG] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_BUFFER_CONFIG] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_BUFFER_STATUS] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_ENABLE_ERROR_COUNT_CALLBACK] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_DISABLE_ERROR_COUNT_CALLBACK] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_IS_ERROR_COUNT_CALLBACK_ENABLED] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_ERROR_COUNT] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_MODBUS_COMMON_ERROR_COUNT] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_MODBUS_SLAVE_REPORT_EXCEPTION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_MODBUS_SLAVE_ANSWER_READ_COILS_REQUEST_LOW_LEVEL] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_MODBUS_MASTER_READ_COILS] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_MODBUS_SLAVE_ANSWER_READ_HOLDING_REGISTERS_REQUEST_LOW_LEVEL] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_MODBUS_MASTER_READ_HOLDING_REGISTERS] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_MODBUS_SLAVE_ANSWER_WRITE_SINGLE_COIL_REQUEST] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_MODBUS_MASTER_WRITE_SINGLE_COIL] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_MODBUS_SLAVE_ANSWER_WRITE_SINGLE_REGISTER_REQUEST] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_MODBUS_MASTER_WRITE_SINGLE_REGISTER] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_MODBUS_SLAVE_ANSWER_WRITE_MULTIPLE_COILS_REQUEST] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_MODBUS_MASTER_WRITE_MULTIPLE_COILS_LOW_LEVEL] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_MODBUS_SLAVE_ANSWER_WRITE_MULTIPLE_REGISTERS_REQUEST] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_MODBUS_MASTER_WRITE_MULTIPLE_REGISTERS_LOW_LEVEL] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_MODBUS_SLAVE_ANSWER_READ_DISCRETE_INPUTS_REQUEST_LOW_LEVEL] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_MODBUS_MASTER_READ_DISCRETE_INPUTS] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_MODBUS_SLAVE_ANSWER_READ_INPUT_REGISTERS_REQUEST_LOW_LEVEL] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_MODBUS_MASTER_READ_INPUT_REGISTERS] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_FRAME_READABLE_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_FRAME_READABLE_CALLBACK_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
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

        $this->callback_wrappers[self::CALLBACK_READ_LOW_LEVEL] = array(72, 'callbackWrapperReadLowLevel');
        $this->callback_wrappers[self::CALLBACK_ERROR_COUNT] = array(16, 'callbackWrapperErrorCount');
        $this->callback_wrappers[self::CALLBACK_MODBUS_SLAVE_READ_COILS_REQUEST] = array(15, 'callbackWrapperModbusSlaveReadCoilsRequest');
        $this->callback_wrappers[self::CALLBACK_MODBUS_MASTER_READ_COILS_RESPONSE_LOW_LEVEL] = array(72, 'callbackWrapperModbusMasterReadCoilsResponseLowLevel');
        $this->callback_wrappers[self::CALLBACK_MODBUS_SLAVE_READ_HOLDING_REGISTERS_REQUEST] = array(15, 'callbackWrapperModbusSlaveReadHoldingRegistersRequest');
        $this->callback_wrappers[self::CALLBACK_MODBUS_MASTER_READ_HOLDING_REGISTERS_RESPONSE_LOW_LEVEL] = array(72, 'callbackWrapperModbusMasterReadHoldingRegistersResponseLowLevel');
        $this->callback_wrappers[self::CALLBACK_MODBUS_SLAVE_WRITE_SINGLE_COIL_REQUEST] = array(14, 'callbackWrapperModbusSlaveWriteSingleCoilRequest');
        $this->callback_wrappers[self::CALLBACK_MODBUS_MASTER_WRITE_SINGLE_COIL_RESPONSE] = array(10, 'callbackWrapperModbusMasterWriteSingleCoilResponse');
        $this->callback_wrappers[self::CALLBACK_MODBUS_SLAVE_WRITE_SINGLE_REGISTER_REQUEST] = array(15, 'callbackWrapperModbusSlaveWriteSingleRegisterRequest');
        $this->callback_wrappers[self::CALLBACK_MODBUS_MASTER_WRITE_SINGLE_REGISTER_RESPONSE] = array(10, 'callbackWrapperModbusMasterWriteSingleRegisterResponse');
        $this->callback_wrappers[self::CALLBACK_MODBUS_SLAVE_WRITE_MULTIPLE_COILS_REQUEST_LOW_LEVEL] = array(72, 'callbackWrapperModbusSlaveWriteMultipleCoilsRequestLowLevel');
        $this->callback_wrappers[self::CALLBACK_MODBUS_MASTER_WRITE_MULTIPLE_COILS_RESPONSE] = array(10, 'callbackWrapperModbusMasterWriteMultipleCoilsResponse');
        $this->callback_wrappers[self::CALLBACK_MODBUS_SLAVE_WRITE_MULTIPLE_REGISTERS_REQUEST_LOW_LEVEL] = array(71, 'callbackWrapperModbusSlaveWriteMultipleRegistersRequestLowLevel');
        $this->callback_wrappers[self::CALLBACK_MODBUS_MASTER_WRITE_MULTIPLE_REGISTERS_RESPONSE] = array(10, 'callbackWrapperModbusMasterWriteMultipleRegistersResponse');
        $this->callback_wrappers[self::CALLBACK_MODBUS_SLAVE_READ_DISCRETE_INPUTS_REQUEST] = array(15, 'callbackWrapperModbusSlaveReadDiscreteInputsRequest');
        $this->callback_wrappers[self::CALLBACK_MODBUS_MASTER_READ_DISCRETE_INPUTS_RESPONSE_LOW_LEVEL] = array(72, 'callbackWrapperModbusMasterReadDiscreteInputsResponseLowLevel');
        $this->callback_wrappers[self::CALLBACK_MODBUS_SLAVE_READ_INPUT_REGISTERS_REQUEST] = array(15, 'callbackWrapperModbusSlaveReadInputRegistersRequest');
        $this->callback_wrappers[self::CALLBACK_MODBUS_MASTER_READ_INPUT_REGISTERS_RESPONSE_LOW_LEVEL] = array(72, 'callbackWrapperModbusMasterReadInputRegistersResponseLowLevel');
        $this->callback_wrappers[self::CALLBACK_FRAME_READABLE] = array(10, 'callbackWrapperFrameReadable');

        $this->high_level_callbacks[self::CALLBACK_READ] = array('data' => NULL);
        $this->high_level_callbacks[self::CALLBACK_MODBUS_MASTER_READ_COILS_RESPONSE] = array('data' => NULL);
        $this->high_level_callbacks[self::CALLBACK_MODBUS_MASTER_READ_HOLDING_REGISTERS_RESPONSE] = array('data' => NULL);
        $this->high_level_callbacks[self::CALLBACK_MODBUS_SLAVE_WRITE_MULTIPLE_COILS_REQUEST] = array('data' => NULL);
        $this->high_level_callbacks[self::CALLBACK_MODBUS_SLAVE_WRITE_MULTIPLE_REGISTERS_REQUEST] = array('data' => NULL);
        $this->high_level_callbacks[self::CALLBACK_MODBUS_MASTER_READ_DISCRETE_INPUTS_RESPONSE] = array('data' => NULL);
        $this->high_level_callbacks[self::CALLBACK_MODBUS_MASTER_READ_INPUT_REGISTERS_RESPONSE] = array('data' => NULL);

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
     * Writes characters to the RS485 interface. The characters can be binary data,
     * ASCII or similar is not necessary.
     * 
     * The return value is the number of characters that were written.
     * 
     * See BrickletRS485::setRS485Configuration() for configuration possibilities
     * regarding baudrate, parity and so on.
     * 
     * @param int $message_length
     * @param int $message_chunk_offset
     * @param string[] $message_chunk_data
     * 
     * @return int
     */
    public function writeLowLevel($message_length, $message_chunk_offset, $message_chunk_data)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $message_length);
        $payload .= pack('v', $message_chunk_offset);
        for ($i = 0; $i < count($message_chunk_data) && $i < 60; $i++) {
            $payload .= pack('c', ord($message_chunk_data[$i]));
        }
        for ($i = count($message_chunk_data); $i < 60; $i++) {
            $payload .= pack('c', 0);
        }

        $data = $this->sendRequest(self::FUNCTION_WRITE_LOW_LEVEL, $payload, 9);

        $payload = unpack('C1message_chunk_written', $data);

        return $payload['message_chunk_written'];
    }

    /**
     * Returns up to *length* characters from receive buffer.
     * 
     * Instead of polling with this function, you can also use
     * callbacks. But note that this function will return available
     * data only when the read callback is disabled.
     * See BrickletRS485::enableReadCallback() and BrickletRS485::CALLBACK_READ callback.
     * 
     * @param int $length
     * 
     * @return array
     */
    public function readLowLevel($length)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('v', $length);

        $data = $this->sendRequest(self::FUNCTION_READ_LOW_LEVEL, $payload, 72);

        $payload = unpack('v1message_length/v1message_chunk_offset/c60message_chunk_data', $data);

        $ret['message_length'] = $payload['message_length'];
        $ret['message_chunk_offset'] = $payload['message_chunk_offset'];
        $ret['message_chunk_data'] = IPConnection::collectUnpackedCharArray($payload, 'message_chunk_data', 60);

        return $ret;
    }

    /**
     * Enables the BrickletRS485::CALLBACK_READ callback. This will disable the BrickletRS485::CALLBACK_FRAME_READABLE callback.
     * 
     * By default the callback is disabled.
     * 
     * 
     * @return void
     */
    public function enableReadCallback()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_ENABLE_READ_CALLBACK, $payload, 0);
    }

    /**
     * Disables the BrickletRS485::CALLBACK_READ callback.
     * 
     * By default the callback is disabled.
     * 
     * 
     * @return void
     */
    public function disableReadCallback()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_DISABLE_READ_CALLBACK, $payload, 0);
    }

    /**
     * Returns *true* if the BrickletRS485::CALLBACK_READ callback is enabled,
     * *false* otherwise.
     * 
     * 
     * @return bool
     */
    public function isReadCallbackEnabled()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_IS_READ_CALLBACK_ENABLED, $payload, 9);

        $payload = unpack('C1enabled', $data);

        return (bool)$payload['enabled'];
    }

    /**
     * Sets the configuration for the RS485 communication.
     * 
     * @param int $baudrate
     * @param int $parity
     * @param int $stopbits
     * @param int $wordlength
     * @param int $duplex
     * 
     * @return void
     */
    public function setRS485Configuration($baudrate, $parity, $stopbits, $wordlength, $duplex)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $baudrate);
        $payload .= pack('C', $parity);
        $payload .= pack('C', $stopbits);
        $payload .= pack('C', $wordlength);
        $payload .= pack('C', $duplex);

        $this->sendRequest(self::FUNCTION_SET_RS485_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the configuration as set by BrickletRS485::setRS485Configuration().
     * 
     * 
     * @return array
     */
    public function getRS485Configuration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_RS485_CONFIGURATION, $payload, 16);

        $payload = unpack('V1baudrate/C1parity/C1stopbits/C1wordlength/C1duplex', $data);

        $ret['baudrate'] = IPConnection::fixUnpackedUInt32($payload, 'baudrate');
        $ret['parity'] = $payload['parity'];
        $ret['stopbits'] = $payload['stopbits'];
        $ret['wordlength'] = $payload['wordlength'];
        $ret['duplex'] = $payload['duplex'];

        return $ret;
    }

    /**
     * Sets the configuration for the RS485 Modbus communication. Available options:
     * 
     * * Slave Address: Address to be used as the Modbus slave address in Modbus slave mode. Valid Modbus slave address range is 1 to 247.
     * * Master Request Timeout: Specifies how long the master should wait for a response from a slave when in Modbus master mode.
     * 
     * @param int $slave_address
     * @param int $master_request_timeout
     * 
     * @return void
     */
    public function setModbusConfiguration($slave_address, $master_request_timeout)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $slave_address);
        $payload .= pack('V', $master_request_timeout);

        $this->sendRequest(self::FUNCTION_SET_MODBUS_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the configuration as set by BrickletRS485::setModbusConfiguration().
     * 
     * 
     * @return array
     */
    public function getModbusConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_MODBUS_CONFIGURATION, $payload, 13);

        $payload = unpack('C1slave_address/V1master_request_timeout', $data);

        $ret['slave_address'] = $payload['slave_address'];
        $ret['master_request_timeout'] = IPConnection::fixUnpackedUInt32($payload, 'master_request_timeout');

        return $ret;
    }

    /**
     * Sets the mode of the Bricklet in which it operates. Available options are
     * 
     * * RS485,
     * * Modbus Master RTU and
     * * Modbus Slave RTU.
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
     * Returns the configuration as set by BrickletRS485::setMode().
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
     * Sets the communication LED configuration. By default the LED shows RS485
     * communication traffic by flickering.
     * 
     * You can also turn the LED permanently on/off or show a heartbeat.
     * 
     * If the Bricklet is in bootloader mode, the LED is off.
     * 
     * @param int $config
     * 
     * @return void
     */
    public function setCommunicationLEDConfig($config)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $config);

        $this->sendRequest(self::FUNCTION_SET_COMMUNICATION_LED_CONFIG, $payload, 0);
    }

    /**
     * Returns the configuration as set by BrickletRS485::setCommunicationLEDConfig()
     * 
     * 
     * @return int
     */
    public function getCommunicationLEDConfig()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_COMMUNICATION_LED_CONFIG, $payload, 9);

        $payload = unpack('C1config', $data);

        return $payload['config'];
    }

    /**
     * Sets the error LED configuration.
     * 
     * By default the error LED turns on if there is any error (see BrickletRS485::CALLBACK_ERROR_COUNT
     * callback). If you call this function with the SHOW ERROR option again, the LED
     * will turn off until the next error occurs.
     * 
     * You can also turn the LED permanently on/off or show a heartbeat.
     * 
     * If the Bricklet is in bootloader mode, the LED is off.
     * 
     * @param int $config
     * 
     * @return void
     */
    public function setErrorLEDConfig($config)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $config);

        $this->sendRequest(self::FUNCTION_SET_ERROR_LED_CONFIG, $payload, 0);
    }

    /**
     * Returns the configuration as set by BrickletRS485::setErrorLEDConfig().
     * 
     * 
     * @return int
     */
    public function getErrorLEDConfig()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ERROR_LED_CONFIG, $payload, 9);

        $payload = unpack('C1config', $data);

        return $payload['config'];
    }

    /**
     * Sets the send and receive buffer size in byte. In sum there is
     * 10240 byte (10KiB) buffer available and the minimum buffer size
     * is 1024 byte (1KiB) for both.
     * 
     * The current buffer content is lost if this function is called.
     * 
     * The send buffer holds data that was given by BrickletRS485::write() and
     * could not be written yet. The receive buffer holds data that is
     * received through RS485 but could not yet be send to the
     * user, either by BrickletRS485::read() or through BrickletRS485::CALLBACK_READ callback.
     * 
     * @param int $send_buffer_size
     * @param int $receive_buffer_size
     * 
     * @return void
     */
    public function setBufferConfig($send_buffer_size, $receive_buffer_size)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $send_buffer_size);
        $payload .= pack('v', $receive_buffer_size);

        $this->sendRequest(self::FUNCTION_SET_BUFFER_CONFIG, $payload, 0);
    }

    /**
     * Returns the buffer configuration as set by BrickletRS485::setBufferConfig().
     * 
     * 
     * @return array
     */
    public function getBufferConfig()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_BUFFER_CONFIG, $payload, 12);

        $payload = unpack('v1send_buffer_size/v1receive_buffer_size', $data);

        $ret['send_buffer_size'] = $payload['send_buffer_size'];
        $ret['receive_buffer_size'] = $payload['receive_buffer_size'];

        return $ret;
    }

    /**
     * Returns the currently used bytes for the send and received buffer.
     * 
     * See BrickletRS485::setBufferConfig() for buffer size configuration.
     * 
     * 
     * @return array
     */
    public function getBufferStatus()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_BUFFER_STATUS, $payload, 12);

        $payload = unpack('v1send_buffer_used/v1receive_buffer_used', $data);

        $ret['send_buffer_used'] = $payload['send_buffer_used'];
        $ret['receive_buffer_used'] = $payload['receive_buffer_used'];

        return $ret;
    }

    /**
     * Enables the BrickletRS485::CALLBACK_ERROR_COUNT callback.
     * 
     * By default the callback is disabled.
     * 
     * 
     * @return void
     */
    public function enableErrorCountCallback()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_ENABLE_ERROR_COUNT_CALLBACK, $payload, 0);
    }

    /**
     * Disables the BrickletRS485::CALLBACK_ERROR_COUNT callback.
     * 
     * By default the callback is disabled.
     * 
     * 
     * @return void
     */
    public function disableErrorCountCallback()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_DISABLE_ERROR_COUNT_CALLBACK, $payload, 0);
    }

    /**
     * Returns *true* if the BrickletRS485::CALLBACK_ERROR_COUNT callback is enabled,
     * *false* otherwise.
     * 
     * 
     * @return bool
     */
    public function isErrorCountCallbackEnabled()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_IS_ERROR_COUNT_CALLBACK_ENABLED, $payload, 9);

        $payload = unpack('C1enabled', $data);

        return (bool)$payload['enabled'];
    }

    /**
     * Returns the current number of overrun and parity errors.
     * 
     * 
     * @return array
     */
    public function getErrorCount()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ERROR_COUNT, $payload, 16);

        $payload = unpack('V1overrun_error_count/V1parity_error_count', $data);

        $ret['overrun_error_count'] = IPConnection::fixUnpackedUInt32($payload, 'overrun_error_count');
        $ret['parity_error_count'] = IPConnection::fixUnpackedUInt32($payload, 'parity_error_count');

        return $ret;
    }

    /**
     * Returns the current number of errors occurred in Modbus mode.
     * 
     * * Timeout Error Count: Number of timeouts occurred.
     * * Checksum Error Count: Number of failures due to Modbus frame CRC16 checksum mismatch.
     * * Frame Too Big Error Count: Number of times frames were rejected because they exceeded maximum Modbus frame size which is 256 bytes.
     * * Illegal Function Error Count: Number of errors when an unimplemented or illegal function is requested. This corresponds to Modbus exception code 1.
     * * Illegal Data Address Error Count: Number of errors due to invalid data address. This corresponds to Modbus exception code 2.
     * * Illegal Data Value Error Count: Number of errors due to invalid data value. This corresponds to Modbus exception code 3.
     * * Slave Device Failure Error Count: Number of errors occurred on the slave device which were unrecoverable. This corresponds to Modbus exception code 4.
     * 
     * 
     * @return array
     */
    public function getModbusCommonErrorCount()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_MODBUS_COMMON_ERROR_COUNT, $payload, 36);

        $payload = unpack('V1timeout_error_count/V1checksum_error_count/V1frame_too_big_error_count/V1illegal_function_error_count/V1illegal_data_address_error_count/V1illegal_data_value_error_count/V1slave_device_failure_error_count', $data);

        $ret['timeout_error_count'] = IPConnection::fixUnpackedUInt32($payload, 'timeout_error_count');
        $ret['checksum_error_count'] = IPConnection::fixUnpackedUInt32($payload, 'checksum_error_count');
        $ret['frame_too_big_error_count'] = IPConnection::fixUnpackedUInt32($payload, 'frame_too_big_error_count');
        $ret['illegal_function_error_count'] = IPConnection::fixUnpackedUInt32($payload, 'illegal_function_error_count');
        $ret['illegal_data_address_error_count'] = IPConnection::fixUnpackedUInt32($payload, 'illegal_data_address_error_count');
        $ret['illegal_data_value_error_count'] = IPConnection::fixUnpackedUInt32($payload, 'illegal_data_value_error_count');
        $ret['slave_device_failure_error_count'] = IPConnection::fixUnpackedUInt32($payload, 'slave_device_failure_error_count');

        return $ret;
    }

    /**
     * In Modbus slave mode this function can be used to report a Modbus exception for
     * a Modbus master request.
     * 
     * * Request ID: Request ID of the request received by the slave.
     * * Exception Code: Modbus exception code to report to the Modbus master.
     * 
     * @param int $request_id
     * @param int $exception_code
     * 
     * @return void
     */
    public function modbusSlaveReportException($request_id, $exception_code)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $request_id);
        $payload .= pack('c', $exception_code);

        $this->sendRequest(self::FUNCTION_MODBUS_SLAVE_REPORT_EXCEPTION, $payload, 0);
    }

    /**
     * In Modbus slave mode this function can be used to answer a master request to
     * read coils.
     * 
     * * Request ID: Request ID of the corresponding request that is being answered.
     * * Coils: Data that is to be sent to the Modbus master for the corresponding request.
     * 
     * This function must be called from the BrickletRS485::CALLBACK_MODBUS_SLAVE_READ_COILS_REQUEST callback
     * with the Request ID as provided by the argument of the callback.
     * 
     * @param int $request_id
     * @param int $coils_length
     * @param int $coils_chunk_offset
     * @param bool[] $coils_chunk_data
     * 
     * @return void
     */
    public function modbusSlaveAnswerReadCoilsRequestLowLevel($request_id, $coils_length, $coils_chunk_offset, $coils_chunk_data)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $request_id);
        $payload .= pack('v', $coils_length);
        $payload .= pack('v', $coils_chunk_offset);
        $coils_chunk_data_bits = array_fill(0, 59, 0);
        for ($i = 0; $i < 472; $i++) {
            if((bool)$coils_chunk_data[$i]) {
              $coils_chunk_data_bits[$i / 8] |= 1 << ($i % 8);
            }
        }
        for ($i = 0; $i < 59; $i++) {
          $payload .= pack('C', intval($coils_chunk_data_bits[$i]));
        }

        $this->sendRequest(self::FUNCTION_MODBUS_SLAVE_ANSWER_READ_COILS_REQUEST_LOW_LEVEL, $payload, 0);
    }

    /**
     * In Modbus master mode this function can be used to read coils from a slave. This
     * function creates a Modbus function code 1 request.
     * 
     * * Slave Address: Address of the target Modbus slave.
     * * Starting Address: Number of the first coil to read. For backwards compatibility reasons this parameter is called Starting Address. It is not an address, but instead a coil number in the range of 1 to 65536.
     * * Count: Number of coils to read.
     * 
     * Upon success the function will return a non-zero request ID which will represent
     * the current request initiated by the Modbus master. In case of failure the returned
     * request ID will be 0.
     * 
     * When successful this function will also invoke the BrickletRS485::CALLBACK_MODBUS_MASTER_READ_COILS_RESPONSE
     * callback. In this callback the Request ID provided by the callback argument must be
     * matched with the Request ID returned from this function to verify that the callback
     * is indeed for a particular request.
     * 
     * @param int $slave_address
     * @param int $starting_address
     * @param int $count
     * 
     * @return int
     */
    public function modbusMasterReadCoils($slave_address, $starting_address, $count)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $slave_address);
        $payload .= pack('V', $starting_address);
        $payload .= pack('v', $count);

        $data = $this->sendRequest(self::FUNCTION_MODBUS_MASTER_READ_COILS, $payload, 9);

        $payload = unpack('C1request_id', $data);

        return $payload['request_id'];
    }

    /**
     * In Modbus slave mode this function can be used to answer a master request to
     * read holding registers.
     * 
     * * Request ID: Request ID of the corresponding request that is being answered.
     * * Holding Registers: Data that is to be sent to the Modbus master for the corresponding request.
     * 
     * This function must be called from the BrickletRS485::CALLBACK_MODBUS_SLAVE_READ_HOLDING_REGISTERS_REQUEST
     * callback with the Request ID as provided by the argument of the callback.
     * 
     * @param int $request_id
     * @param int $holding_registers_length
     * @param int $holding_registers_chunk_offset
     * @param int[] $holding_registers_chunk_data
     * 
     * @return void
     */
    public function modbusSlaveAnswerReadHoldingRegistersRequestLowLevel($request_id, $holding_registers_length, $holding_registers_chunk_offset, $holding_registers_chunk_data)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $request_id);
        $payload .= pack('v', $holding_registers_length);
        $payload .= pack('v', $holding_registers_chunk_offset);
        for ($i = 0; $i < 29; $i++) {
            $payload .= pack('v', $holding_registers_chunk_data[$i]);
        }

        $this->sendRequest(self::FUNCTION_MODBUS_SLAVE_ANSWER_READ_HOLDING_REGISTERS_REQUEST_LOW_LEVEL, $payload, 0);
    }

    /**
     * In Modbus master mode this function can be used to read holding registers from a slave.
     * This function creates a Modbus function code 3 request.
     * 
     * * Slave Address: Address of the target Modbus slave.
     * * Starting Address: Number of the first holding register to read. For backwards compatibility reasons this parameter is called Starting Address. It is not an address, but instead a holding register number in the range of 1 to 65536. The prefix digit 4 (for holding register) is implicit and must be omitted.
     * * Count: Number of holding registers to read.
     * 
     * Upon success the function will return a non-zero request ID which will represent
     * the current request initiated by the Modbus master. In case of failure the returned
     * request ID will be 0.
     * 
     * When successful this function will also invoke the BrickletRS485::CALLBACK_MODBUS_MASTER_READ_HOLDING_REGISTERS_RESPONSE
     * callback. In this callback the Request ID provided by the callback argument must be matched
     * with the Request ID returned from this function to verify that the callback is indeed for a
     * particular request.
     * 
     * @param int $slave_address
     * @param int $starting_address
     * @param int $count
     * 
     * @return int
     */
    public function modbusMasterReadHoldingRegisters($slave_address, $starting_address, $count)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $slave_address);
        $payload .= pack('V', $starting_address);
        $payload .= pack('v', $count);

        $data = $this->sendRequest(self::FUNCTION_MODBUS_MASTER_READ_HOLDING_REGISTERS, $payload, 9);

        $payload = unpack('C1request_id', $data);

        return $payload['request_id'];
    }

    /**
     * In Modbus slave mode this function can be used to answer a master request to
     * write a single coil.
     * 
     * * Request ID: Request ID of the corresponding request that is being answered.
     * 
     * This function must be called from the BrickletRS485::CALLBACK_MODBUS_SLAVE_WRITE_SINGLE_COIL_REQUEST
     * callback with the Request ID as provided by the arguments of the callback.
     * 
     * @param int $request_id
     * 
     * @return void
     */
    public function modbusSlaveAnswerWriteSingleCoilRequest($request_id)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $request_id);

        $this->sendRequest(self::FUNCTION_MODBUS_SLAVE_ANSWER_WRITE_SINGLE_COIL_REQUEST, $payload, 0);
    }

    /**
     * In Modbus master mode this function can be used to write a single coil of a slave.
     * This function creates a Modbus function code 5 request.
     * 
     * * Slave Address: Address of the target Modbus slave.
     * * Coil Address: Number of the coil to be written. For backwards compatibility reasons, this parameter is called Starting Address. It is not an address, but instead a coil number in the range of 1 to 65536.
     * * Coil Value: Value to be written.
     * 
     * Upon success the function will return a non-zero request ID which will represent
     * the current request initiated by the Modbus master. In case of failure the returned
     * request ID will be 0.
     * 
     * When successful this function will also invoke the BrickletRS485::CALLBACK_MODBUS_MASTER_WRITE_SINGLE_COIL_RESPONSE
     * callback. In this callback the Request ID provided by the callback argument must be matched
     * with the Request ID returned from this function to verify that the callback is indeed for a
     * particular request.
     * 
     * @param int $slave_address
     * @param int $coil_address
     * @param bool $coil_value
     * 
     * @return int
     */
    public function modbusMasterWriteSingleCoil($slave_address, $coil_address, $coil_value)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $slave_address);
        $payload .= pack('V', $coil_address);
        $payload .= pack('C', intval((bool)$coil_value));

        $data = $this->sendRequest(self::FUNCTION_MODBUS_MASTER_WRITE_SINGLE_COIL, $payload, 9);

        $payload = unpack('C1request_id', $data);

        return $payload['request_id'];
    }

    /**
     * In Modbus slave mode this function can be used to answer a master request to
     * write a single register.
     * 
     * * Request ID: Request ID of the corresponding request that is being answered.
     * 
     * This function must be called from the BrickletRS485::CALLBACK_MODBUS_SLAVE_WRITE_SINGLE_REGISTER_REQUEST
     * callback with the Request ID, Register Address and Register Value as provided by
     * the arguments of the callback.
     * 
     * @param int $request_id
     * 
     * @return void
     */
    public function modbusSlaveAnswerWriteSingleRegisterRequest($request_id)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $request_id);

        $this->sendRequest(self::FUNCTION_MODBUS_SLAVE_ANSWER_WRITE_SINGLE_REGISTER_REQUEST, $payload, 0);
    }

    /**
     * In Modbus master mode this function can be used to write a single holding register of a
     * slave. This function creates a Modbus function code 6 request.
     * 
     * * Slave Address: Address of the target Modbus slave.
     * * Register Address: Number of the holding register to be written. For backwards compatibility reasons, this parameter is called Starting Address. It is not an address, but instead a holding register number in the range of 1 to 65536. The prefix digit 4 (for holding register) is implicit and must be omitted.
     * * Register Value: Value to be written.
     * 
     * Upon success the function will return a non-zero request ID which will represent
     * the current request initiated by the Modbus master. In case of failure the returned
     * request ID will be 0.
     * 
     * When successful this function will also invoke the BrickletRS485::CALLBACK_MODBUS_MASTER_WRITE_SINGLE_REGISTER_RESPONSE
     * callback. In this callback the Request ID provided by the callback argument must be matched
     * with the Request ID returned from this function to verify that the callback is indeed for a
     * particular request.
     * 
     * @param int $slave_address
     * @param int $register_address
     * @param int $register_value
     * 
     * @return int
     */
    public function modbusMasterWriteSingleRegister($slave_address, $register_address, $register_value)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $slave_address);
        $payload .= pack('V', $register_address);
        $payload .= pack('v', $register_value);

        $data = $this->sendRequest(self::FUNCTION_MODBUS_MASTER_WRITE_SINGLE_REGISTER, $payload, 9);

        $payload = unpack('C1request_id', $data);

        return $payload['request_id'];
    }

    /**
     * In Modbus slave mode this function can be used to answer a master request to
     * write multiple coils.
     * 
     * * Request ID: Request ID of the corresponding request that is being answered.
     * 
     * This function must be called from the BrickletRS485::CALLBACK_MODBUS_SLAVE_WRITE_MULTIPLE_COILS_REQUEST
     * callback with the Request ID of the callback.
     * 
     * @param int $request_id
     * 
     * @return void
     */
    public function modbusSlaveAnswerWriteMultipleCoilsRequest($request_id)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $request_id);

        $this->sendRequest(self::FUNCTION_MODBUS_SLAVE_ANSWER_WRITE_MULTIPLE_COILS_REQUEST, $payload, 0);
    }

    /**
     * In Modbus master mode this function can be used to write multiple coils of a slave.
     * This function creates a Modbus function code 15 request.
     * 
     * * Slave Address: Address of the target Modbus slave.
     * * Starting Address: Number of the first coil to write. For backwards compatibility reasons, this parameter is called Starting Address.It is not an address, but instead a coil number in the range of 1 to 65536.
     * 
     * Upon success the function will return a non-zero request ID which will represent
     * the current request initiated by the Modbus master. In case of failure the returned
     * request ID will be 0.
     * 
     * When successful this function will also invoke the BrickletRS485::CALLBACK_MODBUS_MASTER_WRITE_MULTIPLE_COILS_RESPONSE
     * callback. In this callback the Request ID provided by the callback argument must be matched
     * with the Request ID returned from this function to verify that the callback is indeed for a
     * particular request.
     * 
     * @param int $slave_address
     * @param int $starting_address
     * @param int $coils_length
     * @param int $coils_chunk_offset
     * @param bool[] $coils_chunk_data
     * 
     * @return int
     */
    public function modbusMasterWriteMultipleCoilsLowLevel($slave_address, $starting_address, $coils_length, $coils_chunk_offset, $coils_chunk_data)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $slave_address);
        $payload .= pack('V', $starting_address);
        $payload .= pack('v', $coils_length);
        $payload .= pack('v', $coils_chunk_offset);
        $coils_chunk_data_bits = array_fill(0, 55, 0);
        for ($i = 0; $i < 440; $i++) {
            if((bool)$coils_chunk_data[$i]) {
              $coils_chunk_data_bits[$i / 8] |= 1 << ($i % 8);
            }
        }
        for ($i = 0; $i < 55; $i++) {
          $payload .= pack('C', intval($coils_chunk_data_bits[$i]));
        }

        $data = $this->sendRequest(self::FUNCTION_MODBUS_MASTER_WRITE_MULTIPLE_COILS_LOW_LEVEL, $payload, 9);

        $payload = unpack('C1request_id', $data);

        return $payload['request_id'];
    }

    /**
     * In Modbus slave mode this function can be used to answer a master request to
     * write multiple registers.
     * 
     * * Request ID: Request ID of the corresponding request that is being answered.
     * 
     * This function must be called from the BrickletRS485::CALLBACK_MODBUS_SLAVE_WRITE_MULTIPLE_REGISTERS_REQUEST
     * callback with the Request ID of the callback.
     * 
     * @param int $request_id
     * 
     * @return void
     */
    public function modbusSlaveAnswerWriteMultipleRegistersRequest($request_id)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $request_id);

        $this->sendRequest(self::FUNCTION_MODBUS_SLAVE_ANSWER_WRITE_MULTIPLE_REGISTERS_REQUEST, $payload, 0);
    }

    /**
     * In Modbus master mode this function can be used to write multiple registers of a slave.
     * This function creates a Modbus function code 16 request.
     * 
     * * Slave Address: Address of the target Modbus slave.
     * * Starting Address: Number of the first holding register to write. For backwards compatibility reasons, this parameter is called Starting Address. It is not an address, but instead a holding register number in the range of 1 to 65536. The prefix digit 4 (for holding register) is implicit and must be omitted.
     * 
     * Upon success the function will return a non-zero request ID which will represent
     * the current request initiated by the Modbus master. In case of failure the returned
     * request ID will be 0.
     * 
     * When successful this function will also invoke the BrickletRS485::CALLBACK_MODBUS_MASTER_WRITE_MULTIPLE_REGISTERS_RESPONSE
     * callback. In this callback the Request ID provided by the callback argument must be matched
     * with the Request ID returned from this function to verify that the callback is indeed for a
     * particular request.
     * 
     * @param int $slave_address
     * @param int $starting_address
     * @param int $registers_length
     * @param int $registers_chunk_offset
     * @param int[] $registers_chunk_data
     * 
     * @return int
     */
    public function modbusMasterWriteMultipleRegistersLowLevel($slave_address, $starting_address, $registers_length, $registers_chunk_offset, $registers_chunk_data)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $slave_address);
        $payload .= pack('V', $starting_address);
        $payload .= pack('v', $registers_length);
        $payload .= pack('v', $registers_chunk_offset);
        for ($i = 0; $i < 27; $i++) {
            $payload .= pack('v', $registers_chunk_data[$i]);
        }

        $data = $this->sendRequest(self::FUNCTION_MODBUS_MASTER_WRITE_MULTIPLE_REGISTERS_LOW_LEVEL, $payload, 9);

        $payload = unpack('C1request_id', $data);

        return $payload['request_id'];
    }

    /**
     * In Modbus slave mode this function can be used to answer a master request to
     * read discrete inputs.
     * 
     * * Request ID: Request ID of the corresponding request that is being answered.
     * * Discrete Inputs: Data that is to be sent to the Modbus master for the corresponding request.
     * 
     * This function must be called from the BrickletRS485::CALLBACK_MODBUS_SLAVE_READ_DISCRETE_INPUTS_REQUEST
     * callback with the Request ID as provided by the argument of the callback.
     * 
     * @param int $request_id
     * @param int $discrete_inputs_length
     * @param int $discrete_inputs_chunk_offset
     * @param bool[] $discrete_inputs_chunk_data
     * 
     * @return void
     */
    public function modbusSlaveAnswerReadDiscreteInputsRequestLowLevel($request_id, $discrete_inputs_length, $discrete_inputs_chunk_offset, $discrete_inputs_chunk_data)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $request_id);
        $payload .= pack('v', $discrete_inputs_length);
        $payload .= pack('v', $discrete_inputs_chunk_offset);
        $discrete_inputs_chunk_data_bits = array_fill(0, 59, 0);
        for ($i = 0; $i < 472; $i++) {
            if((bool)$discrete_inputs_chunk_data[$i]) {
              $discrete_inputs_chunk_data_bits[$i / 8] |= 1 << ($i % 8);
            }
        }
        for ($i = 0; $i < 59; $i++) {
          $payload .= pack('C', intval($discrete_inputs_chunk_data_bits[$i]));
        }

        $this->sendRequest(self::FUNCTION_MODBUS_SLAVE_ANSWER_READ_DISCRETE_INPUTS_REQUEST_LOW_LEVEL, $payload, 0);
    }

    /**
     * In Modbus master mode this function can be used to read discrete inputs from a slave.
     * This function creates a Modbus function code 2 request.
     * 
     * * Slave Address: Address of the target Modbus slave.
     * * Starting Address: Number of the first discrete input to read. For backwards compatibility reasons, this parameter is called Starting Address. It is not an address, but instead a discrete input number in the range of 1 to 65536. The prefix digit 1 (for discrete input) is implicit and must be omitted.
     * * Count: Number of discrete inputs to read.
     * 
     * Upon success the function will return a non-zero request ID which will represent
     * the current request initiated by the Modbus master. In case of failure the returned
     * request ID will be 0.
     * 
     * When successful this function will also invoke the BrickletRS485::CALLBACK_MODBUS_MASTER_READ_DISCRETE_INPUTS_RESPONSE
     * callback. In this callback the Request ID provided by the callback argument must be matched
     * with the Request ID returned from this function to verify that the callback is indeed for a
     * particular request.
     * 
     * @param int $slave_address
     * @param int $starting_address
     * @param int $count
     * 
     * @return int
     */
    public function modbusMasterReadDiscreteInputs($slave_address, $starting_address, $count)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $slave_address);
        $payload .= pack('V', $starting_address);
        $payload .= pack('v', $count);

        $data = $this->sendRequest(self::FUNCTION_MODBUS_MASTER_READ_DISCRETE_INPUTS, $payload, 9);

        $payload = unpack('C1request_id', $data);

        return $payload['request_id'];
    }

    /**
     * In Modbus slave mode this function can be used to answer a master request to
     * read input registers.
     * 
     * * Request ID: Request ID of the corresponding request that is being answered.
     * * Input Registers: Data that is to be sent to the Modbus master for the corresponding request.
     * 
     * This function must be called from the BrickletRS485::CALLBACK_MODBUS_SLAVE_READ_INPUT_REGISTERS_REQUEST callback
     * with the Request ID as provided by the argument of the callback.
     * 
     * @param int $request_id
     * @param int $input_registers_length
     * @param int $input_registers_chunk_offset
     * @param int[] $input_registers_chunk_data
     * 
     * @return void
     */
    public function modbusSlaveAnswerReadInputRegistersRequestLowLevel($request_id, $input_registers_length, $input_registers_chunk_offset, $input_registers_chunk_data)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $request_id);
        $payload .= pack('v', $input_registers_length);
        $payload .= pack('v', $input_registers_chunk_offset);
        for ($i = 0; $i < 29; $i++) {
            $payload .= pack('v', $input_registers_chunk_data[$i]);
        }

        $this->sendRequest(self::FUNCTION_MODBUS_SLAVE_ANSWER_READ_INPUT_REGISTERS_REQUEST_LOW_LEVEL, $payload, 0);
    }

    /**
     * In Modbus master mode this function can be used to read input registers from a slave.
     * This function creates a Modbus function code 4 request.
     * 
     * * Slave Address: Address of the target Modbus slave.
     * * Starting Address: Number of the first input register to read. For backwards compatibility reasons, this parameter is called Starting Address. It is not an address, but instead an input register number in the range of 1 to 65536. The prefix digit 3 (for input register) is implicit and must be omitted.
     * * Count: Number of input registers to read.
     * 
     * Upon success the function will return a non-zero request ID which will represent
     * the current request initiated by the Modbus master. In case of failure the returned
     * request ID will be 0.
     * 
     * When successful this function will also invoke the BrickletRS485::CALLBACK_MODBUS_MASTER_READ_INPUT_REGISTERS_RESPONSE
     * callback. In this callback the Request ID provided by the callback argument must be matched
     * with the Request ID returned from this function to verify that the callback is indeed for a
     * particular request.
     * 
     * @param int $slave_address
     * @param int $starting_address
     * @param int $count
     * 
     * @return int
     */
    public function modbusMasterReadInputRegisters($slave_address, $starting_address, $count)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $slave_address);
        $payload .= pack('V', $starting_address);
        $payload .= pack('v', $count);

        $data = $this->sendRequest(self::FUNCTION_MODBUS_MASTER_READ_INPUT_REGISTERS, $payload, 9);

        $payload = unpack('C1request_id', $data);

        return $payload['request_id'];
    }

    /**
     * Configures the BrickletRS485::CALLBACK_FRAME_READABLE callback. The frame size is the number of bytes, that have to be readable to trigger the callback.
     * A frame size of 0 disables the callback. A frame size greater than 0 enables the callback and disables the BrickletRS485::CALLBACK_READ callback.
     * 
     * By default the callback is disabled.
     * 
     * .. versionadded:: 2.0.5$nbsp;(Plugin)
     * 
     * @param int $frame_size
     * 
     * @return void
     */
    public function setFrameReadableCallbackConfiguration($frame_size)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $frame_size);

        $this->sendRequest(self::FUNCTION_SET_FRAME_READABLE_CALLBACK_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the callback configuration as set by BrickletRS485::setFrameReadableCallbackConfiguration().
     * 
     * .. versionadded:: 2.0.5$nbsp;(Plugin)
     * 
     * 
     * @return int
     */
    public function getFrameReadableCallbackConfiguration()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_FRAME_READABLE_CALLBACK_CONFIGURATION, $payload, 10);

        $payload = unpack('v1frame_size', $data);

        return $payload['frame_size'];
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
     * Returns the current bootloader mode, see BrickletRS485::setBootloaderMode().
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
     * Sets the firmware pointer for BrickletRS485::writeFirmware(). The pointer has
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
     * BrickletRS485::setWriteFirmwarePointer() before. The firmware is written
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
     * Returns the configuration as set by BrickletRS485::setStatusLEDConfig()
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
     * Writes characters to the RS485 interface. The characters can be binary data,
     * ASCII or similar is not necessary.
     * 
     * The return value is the number of characters that were written.
     * 
     * See BrickletRS485::setRS485Configuration() for configuration possibilities
     * regarding baudrate, parity and so on.
     * 
     * @param string[] $message
     * 
     * @return int
     */
    public function write($message)
    {
        if (count($message) > 65535) {
            throw new \InvalidArgumentException('Message can be at most 65535 items long');
        }

        $message_length = count($message);
        $message_chunk_offset = 0;

        if ($message_length === 0) {
            $message_chunk_data = array_fill(0, 60, '\0');
            $ret = $this->writeLowLevel($message_length, $message_chunk_offset, $message_chunk_data);
            $message_written = $ret;
        } else {
            $message_written = 0;

            while ($message_chunk_offset < $message_length) {
                $message_chunk_data = $this->createChunkData($message, $message_chunk_offset, 60, '\0');
                $ret = $this->writeLowLevel($message_length, $message_chunk_offset, $message_chunk_data);
                $message_written += $ret;

                if ($ret < 60) {
                    break; # either last chunk or short write
                }

                $message_chunk_offset += 60;
            }
        }

        return $message_written;
    }

    /**
     * Returns up to *length* characters from receive buffer.
     * 
     * Instead of polling with this function, you can also use
     * callbacks. But note that this function will return available
     * data only when the read callback is disabled.
     * See BrickletRS485::enableReadCallback() and BrickletRS485::CALLBACK_READ callback.
     * 
     * @param int $length
     * 
     * @return array
     */
    public function read($length)
    {
        $ret = $this->readLowLevel($length);
        $message_length = $ret['message_length'];
        $message_out_of_sync = $ret['message_chunk_offset'] != 0;
        $message_data = $ret['message_chunk_data'];

        while (!$message_out_of_sync && count($message_data) < $message_length) {
            $ret = $this->readLowLevel($length);
            $message_length = $ret['message_length'];
            $message_out_of_sync = $ret['message_chunk_offset'] != count($message_data);
            $message_data = array_merge($message_data, $ret['message_chunk_data']);
        }

        if ($message_out_of_sync) { // discard remaining stream to bring it back in-sync
            while ($ret['message_chunk_offset'] + 60 < $message_length) {
                $ret = $this->readLowLevel($length);
                $message_length = $ret['message_length'];
            }

            throw new StreamOutOfSyncException('Message stream is out-of-sync');
        }

        return array_slice($message_data, 0, $message_length);
    }

    /**
     * In Modbus slave mode this function can be used to answer a master request to
     * read coils.
     * 
     * * Request ID: Request ID of the corresponding request that is being answered.
     * * Coils: Data that is to be sent to the Modbus master for the corresponding request.
     * 
     * This function must be called from the BrickletRS485::CALLBACK_MODBUS_SLAVE_READ_COILS_REQUEST callback
     * with the Request ID as provided by the argument of the callback.
     * 
     * @param int $request_id
     * @param bool[] $coils
     * 
     * @return void
     */
    public function modbusSlaveAnswerReadCoilsRequest($request_id, $coils)
    {
        if (count($coils) > 65535) {
            throw new \InvalidArgumentException('Coils can be at most 65535 items long');
        }

        $coils_length = count($coils);
        $coils_chunk_offset = 0;

        if ($coils_length === 0) {
            $coils_chunk_data = array_fill(0, 472, false);
            $ret = $this->modbusSlaveAnswerReadCoilsRequestLowLevel($request_id, $coils_length, $coils_chunk_offset, $coils_chunk_data);
        } else {
            while ($coils_chunk_offset < $coils_length) {
                $coils_chunk_data = $this->createChunkData($coils, $coils_chunk_offset, 472, false);
                $ret = $this->modbusSlaveAnswerReadCoilsRequestLowLevel($request_id, $coils_length, $coils_chunk_offset, $coils_chunk_data);
                $coils_chunk_offset += 472;
            }
        }

        return $ret;
    }

    /**
     * In Modbus slave mode this function can be used to answer a master request to
     * read holding registers.
     * 
     * * Request ID: Request ID of the corresponding request that is being answered.
     * * Holding Registers: Data that is to be sent to the Modbus master for the corresponding request.
     * 
     * This function must be called from the BrickletRS485::CALLBACK_MODBUS_SLAVE_READ_HOLDING_REGISTERS_REQUEST
     * callback with the Request ID as provided by the argument of the callback.
     * 
     * @param int $request_id
     * @param int[] $holding_registers
     * 
     * @return void
     */
    public function modbusSlaveAnswerReadHoldingRegistersRequest($request_id, $holding_registers)
    {
        if (count($holding_registers) > 65535) {
            throw new \InvalidArgumentException('Holding Registers can be at most 65535 items long');
        }

        $holding_registers_length = count($holding_registers);
        $holding_registers_chunk_offset = 0;

        if ($holding_registers_length === 0) {
            $holding_registers_chunk_data = array_fill(0, 29, 0);
            $ret = $this->modbusSlaveAnswerReadHoldingRegistersRequestLowLevel($request_id, $holding_registers_length, $holding_registers_chunk_offset, $holding_registers_chunk_data);
        } else {
            while ($holding_registers_chunk_offset < $holding_registers_length) {
                $holding_registers_chunk_data = $this->createChunkData($holding_registers, $holding_registers_chunk_offset, 29, 0);
                $ret = $this->modbusSlaveAnswerReadHoldingRegistersRequestLowLevel($request_id, $holding_registers_length, $holding_registers_chunk_offset, $holding_registers_chunk_data);
                $holding_registers_chunk_offset += 29;
            }
        }

        return $ret;
    }

    /**
     * In Modbus master mode this function can be used to write multiple coils of a slave.
     * This function creates a Modbus function code 15 request.
     * 
     * * Slave Address: Address of the target Modbus slave.
     * * Starting Address: Number of the first coil to write. For backwards compatibility reasons, this parameter is called Starting Address.It is not an address, but instead a coil number in the range of 1 to 65536.
     * 
     * Upon success the function will return a non-zero request ID which will represent
     * the current request initiated by the Modbus master. In case of failure the returned
     * request ID will be 0.
     * 
     * When successful this function will also invoke the BrickletRS485::CALLBACK_MODBUS_MASTER_WRITE_MULTIPLE_COILS_RESPONSE
     * callback. In this callback the Request ID provided by the callback argument must be matched
     * with the Request ID returned from this function to verify that the callback is indeed for a
     * particular request.
     * 
     * @param int $slave_address
     * @param int $starting_address
     * @param bool[] $coils
     * 
     * @return int
     */
    public function modbusMasterWriteMultipleCoils($slave_address, $starting_address, $coils)
    {
        if (count($coils) > 65535) {
            throw new \InvalidArgumentException('Coils can be at most 65535 items long');
        }

        $coils_length = count($coils);
        $coils_chunk_offset = 0;

        if ($coils_length === 0) {
            $coils_chunk_data = array_fill(0, 440, false);
            $ret = $this->modbusMasterWriteMultipleCoilsLowLevel($slave_address, $starting_address, $coils_length, $coils_chunk_offset, $coils_chunk_data);
        } else {
            while ($coils_chunk_offset < $coils_length) {
                $coils_chunk_data = $this->createChunkData($coils, $coils_chunk_offset, 440, false);
                $ret = $this->modbusMasterWriteMultipleCoilsLowLevel($slave_address, $starting_address, $coils_length, $coils_chunk_offset, $coils_chunk_data);
                $coils_chunk_offset += 440;
            }
        }

        return $ret;
    }

    /**
     * In Modbus master mode this function can be used to write multiple registers of a slave.
     * This function creates a Modbus function code 16 request.
     * 
     * * Slave Address: Address of the target Modbus slave.
     * * Starting Address: Number of the first holding register to write. For backwards compatibility reasons, this parameter is called Starting Address. It is not an address, but instead a holding register number in the range of 1 to 65536. The prefix digit 4 (for holding register) is implicit and must be omitted.
     * 
     * Upon success the function will return a non-zero request ID which will represent
     * the current request initiated by the Modbus master. In case of failure the returned
     * request ID will be 0.
     * 
     * When successful this function will also invoke the BrickletRS485::CALLBACK_MODBUS_MASTER_WRITE_MULTIPLE_REGISTERS_RESPONSE
     * callback. In this callback the Request ID provided by the callback argument must be matched
     * with the Request ID returned from this function to verify that the callback is indeed for a
     * particular request.
     * 
     * @param int $slave_address
     * @param int $starting_address
     * @param int[] $registers
     * 
     * @return int
     */
    public function modbusMasterWriteMultipleRegisters($slave_address, $starting_address, $registers)
    {
        if (count($registers) > 65535) {
            throw new \InvalidArgumentException('Registers can be at most 65535 items long');
        }

        $registers_length = count($registers);
        $registers_chunk_offset = 0;

        if ($registers_length === 0) {
            $registers_chunk_data = array_fill(0, 27, 0);
            $ret = $this->modbusMasterWriteMultipleRegistersLowLevel($slave_address, $starting_address, $registers_length, $registers_chunk_offset, $registers_chunk_data);
        } else {
            while ($registers_chunk_offset < $registers_length) {
                $registers_chunk_data = $this->createChunkData($registers, $registers_chunk_offset, 27, 0);
                $ret = $this->modbusMasterWriteMultipleRegistersLowLevel($slave_address, $starting_address, $registers_length, $registers_chunk_offset, $registers_chunk_data);
                $registers_chunk_offset += 27;
            }
        }

        return $ret;
    }

    /**
     * In Modbus slave mode this function can be used to answer a master request to
     * read discrete inputs.
     * 
     * * Request ID: Request ID of the corresponding request that is being answered.
     * * Discrete Inputs: Data that is to be sent to the Modbus master for the corresponding request.
     * 
     * This function must be called from the BrickletRS485::CALLBACK_MODBUS_SLAVE_READ_DISCRETE_INPUTS_REQUEST
     * callback with the Request ID as provided by the argument of the callback.
     * 
     * @param int $request_id
     * @param bool[] $discrete_inputs
     * 
     * @return void
     */
    public function modbusSlaveAnswerReadDiscreteInputsRequest($request_id, $discrete_inputs)
    {
        if (count($discrete_inputs) > 65535) {
            throw new \InvalidArgumentException('Discrete Inputs can be at most 65535 items long');
        }

        $discrete_inputs_length = count($discrete_inputs);
        $discrete_inputs_chunk_offset = 0;

        if ($discrete_inputs_length === 0) {
            $discrete_inputs_chunk_data = array_fill(0, 472, false);
            $ret = $this->modbusSlaveAnswerReadDiscreteInputsRequestLowLevel($request_id, $discrete_inputs_length, $discrete_inputs_chunk_offset, $discrete_inputs_chunk_data);
        } else {
            while ($discrete_inputs_chunk_offset < $discrete_inputs_length) {
                $discrete_inputs_chunk_data = $this->createChunkData($discrete_inputs, $discrete_inputs_chunk_offset, 472, false);
                $ret = $this->modbusSlaveAnswerReadDiscreteInputsRequestLowLevel($request_id, $discrete_inputs_length, $discrete_inputs_chunk_offset, $discrete_inputs_chunk_data);
                $discrete_inputs_chunk_offset += 472;
            }
        }

        return $ret;
    }

    /**
     * In Modbus slave mode this function can be used to answer a master request to
     * read input registers.
     * 
     * * Request ID: Request ID of the corresponding request that is being answered.
     * * Input Registers: Data that is to be sent to the Modbus master for the corresponding request.
     * 
     * This function must be called from the BrickletRS485::CALLBACK_MODBUS_SLAVE_READ_INPUT_REGISTERS_REQUEST callback
     * with the Request ID as provided by the argument of the callback.
     * 
     * @param int $request_id
     * @param int[] $input_registers
     * 
     * @return void
     */
    public function modbusSlaveAnswerReadInputRegistersRequest($request_id, $input_registers)
    {
        if (count($input_registers) > 65535) {
            throw new \InvalidArgumentException('Input Registers can be at most 65535 items long');
        }

        $input_registers_length = count($input_registers);
        $input_registers_chunk_offset = 0;

        if ($input_registers_length === 0) {
            $input_registers_chunk_data = array_fill(0, 29, 0);
            $ret = $this->modbusSlaveAnswerReadInputRegistersRequestLowLevel($request_id, $input_registers_length, $input_registers_chunk_offset, $input_registers_chunk_data);
        } else {
            while ($input_registers_chunk_offset < $input_registers_length) {
                $input_registers_chunk_data = $this->createChunkData($input_registers, $input_registers_chunk_offset, 29, 0);
                $ret = $this->modbusSlaveAnswerReadInputRegistersRequestLowLevel($request_id, $input_registers_length, $input_registers_chunk_offset, $input_registers_chunk_data);
                $input_registers_chunk_offset += 29;
            }
        }

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
    public function callbackWrapperReadLowLevel($data)
    {
        $payload = unpack('v1message_length/v1message_chunk_offset/c60message_chunk_data', $data);
        $payload['message_chunk_data'] = IPConnection::collectUnpackedCharArray($payload, 'message_chunk_data', 60);

        $high_level_callback = &$this->high_level_callbacks[self::CALLBACK_READ];
        $message_chunk_length = min($payload['message_length'] - $payload['message_chunk_offset'], 60);

        if ($high_level_callback['data'] === NULL) { // no stream in-progress
            if ($payload['message_chunk_offset'] === 0) { // stream starts
                $high_level_callback['data'] = array_slice($payload['message_chunk_data'], 0, $message_chunk_length);

                if (count($high_level_callback['data']) >= $payload['message_length']) { // stream complete
                    if (array_key_exists(self::CALLBACK_READ, $this->registered_callbacks)) {
                        $function = $this->registered_callbacks[self::CALLBACK_READ];
                        $user_data = $this->registered_callback_user_data[self::CALLBACK_READ];
                        $payload['message'] = $high_level_callback['data'];

                        call_user_func($function, $payload['message'], $user_data);
                    }

                    $high_level_callback['data'] = NULL;
                }
            } else { // ignore tail of current stream, wait for next stream start
            }
        } else { // stream in-progress
            if ($payload['message_chunk_offset'] !== count($high_level_callback['data'])) { // stream out-of-sync
                $high_level_callback['data'] = NULL;

                if (array_key_exists(self::CALLBACK_READ, $this->registered_callbacks)) {
                    $function = $this->registered_callbacks[self::CALLBACK_READ];
                    $user_data = $this->registered_callback_user_data[self::CALLBACK_READ];
                    $payload['message'] = $high_level_callback['data'];

                    call_user_func($function, $payload['message'], $user_data);
                }
            } else { // stream in-sync
                $high_level_callback['data'] = array_merge($high_level_callback['data'], array_slice($payload['message_chunk_data'], 0, $message_chunk_length));

                if (count($high_level_callback['data']) >= $payload['message_length']) { // stream complete
                    if (array_key_exists(self::CALLBACK_READ, $this->registered_callbacks)) {
                        $function = $this->registered_callbacks[self::CALLBACK_READ];
                        $user_data = $this->registered_callback_user_data[self::CALLBACK_READ];
                        $payload['message'] = $high_level_callback['data'];

                        call_user_func($function, $payload['message'], $user_data);
                    }

                    $high_level_callback['data'] = NULL;
                }
            }
        }

        if (array_key_exists(self::CALLBACK_READ_LOW_LEVEL, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_READ_LOW_LEVEL];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_READ_LOW_LEVEL];

            call_user_func($function, $payload['message_length'], $payload['message_chunk_offset'], $payload['message_chunk_data'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperErrorCount($data)
    {
        $payload = unpack('V1overrun_error_count/V1parity_error_count', $data);
        $payload['overrun_error_count'] = IPConnection::fixUnpackedUInt32($payload, 'overrun_error_count');
        $payload['parity_error_count'] = IPConnection::fixUnpackedUInt32($payload, 'parity_error_count');

        if (array_key_exists(self::CALLBACK_ERROR_COUNT, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_ERROR_COUNT];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_ERROR_COUNT];

            call_user_func($function, $payload['overrun_error_count'], $payload['parity_error_count'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperModbusSlaveReadCoilsRequest($data)
    {
        $payload = unpack('C1request_id/V1starting_address/v1count', $data);
        $payload['starting_address'] = IPConnection::fixUnpackedUInt32($payload, 'starting_address');

        if (array_key_exists(self::CALLBACK_MODBUS_SLAVE_READ_COILS_REQUEST, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_MODBUS_SLAVE_READ_COILS_REQUEST];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_MODBUS_SLAVE_READ_COILS_REQUEST];

            call_user_func($function, $payload['request_id'], $payload['starting_address'], $payload['count'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperModbusMasterReadCoilsResponseLowLevel($data)
    {
        $payload = unpack('C1request_id/c1exception_code/v1coils_length/v1coils_chunk_offset/C58coils_chunk_data', $data);
        $payload['coils_chunk_data'] = IPConnection::collectUnpackedBoolArray($payload, 'coils_chunk_data', 464);

        $high_level_callback = &$this->high_level_callbacks[self::CALLBACK_MODBUS_MASTER_READ_COILS_RESPONSE];
        $coils_chunk_length = min($payload['coils_length'] - $payload['coils_chunk_offset'], 464);

        if ($high_level_callback['data'] === NULL) { // no stream in-progress
            if ($payload['coils_chunk_offset'] === 0) { // stream starts
                $high_level_callback['data'] = array_slice($payload['coils_chunk_data'], 0, $coils_chunk_length);

                if (count($high_level_callback['data']) >= $payload['coils_length']) { // stream complete
                    if (array_key_exists(self::CALLBACK_MODBUS_MASTER_READ_COILS_RESPONSE, $this->registered_callbacks)) {
                        $function = $this->registered_callbacks[self::CALLBACK_MODBUS_MASTER_READ_COILS_RESPONSE];
                        $user_data = $this->registered_callback_user_data[self::CALLBACK_MODBUS_MASTER_READ_COILS_RESPONSE];
                        $payload['coils'] = $high_level_callback['data'];

                        call_user_func($function, $payload['request_id'], $payload['exception_code'], $payload['coils'], $user_data);
                    }

                    $high_level_callback['data'] = NULL;
                }
            } else { // ignore tail of current stream, wait for next stream start
            }
        } else { // stream in-progress
            if ($payload['coils_chunk_offset'] !== count($high_level_callback['data'])) { // stream out-of-sync
                $high_level_callback['data'] = NULL;

                if (array_key_exists(self::CALLBACK_MODBUS_MASTER_READ_COILS_RESPONSE, $this->registered_callbacks)) {
                    $function = $this->registered_callbacks[self::CALLBACK_MODBUS_MASTER_READ_COILS_RESPONSE];
                    $user_data = $this->registered_callback_user_data[self::CALLBACK_MODBUS_MASTER_READ_COILS_RESPONSE];
                    $payload['coils'] = $high_level_callback['data'];

                    call_user_func($function, $payload['request_id'], $payload['exception_code'], $payload['coils'], $user_data);
                }
            } else { // stream in-sync
                $high_level_callback['data'] = array_merge($high_level_callback['data'], array_slice($payload['coils_chunk_data'], 0, $coils_chunk_length));

                if (count($high_level_callback['data']) >= $payload['coils_length']) { // stream complete
                    if (array_key_exists(self::CALLBACK_MODBUS_MASTER_READ_COILS_RESPONSE, $this->registered_callbacks)) {
                        $function = $this->registered_callbacks[self::CALLBACK_MODBUS_MASTER_READ_COILS_RESPONSE];
                        $user_data = $this->registered_callback_user_data[self::CALLBACK_MODBUS_MASTER_READ_COILS_RESPONSE];
                        $payload['coils'] = $high_level_callback['data'];

                        call_user_func($function, $payload['request_id'], $payload['exception_code'], $payload['coils'], $user_data);
                    }

                    $high_level_callback['data'] = NULL;
                }
            }
        }

        if (array_key_exists(self::CALLBACK_MODBUS_MASTER_READ_COILS_RESPONSE_LOW_LEVEL, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_MODBUS_MASTER_READ_COILS_RESPONSE_LOW_LEVEL];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_MODBUS_MASTER_READ_COILS_RESPONSE_LOW_LEVEL];

            call_user_func($function, $payload['request_id'], $payload['exception_code'], $payload['coils_length'], $payload['coils_chunk_offset'], $payload['coils_chunk_data'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperModbusSlaveReadHoldingRegistersRequest($data)
    {
        $payload = unpack('C1request_id/V1starting_address/v1count', $data);
        $payload['starting_address'] = IPConnection::fixUnpackedUInt32($payload, 'starting_address');

        if (array_key_exists(self::CALLBACK_MODBUS_SLAVE_READ_HOLDING_REGISTERS_REQUEST, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_MODBUS_SLAVE_READ_HOLDING_REGISTERS_REQUEST];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_MODBUS_SLAVE_READ_HOLDING_REGISTERS_REQUEST];

            call_user_func($function, $payload['request_id'], $payload['starting_address'], $payload['count'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperModbusMasterReadHoldingRegistersResponseLowLevel($data)
    {
        $payload = unpack('C1request_id/c1exception_code/v1holding_registers_length/v1holding_registers_chunk_offset/v29holding_registers_chunk_data', $data);
        $payload['holding_registers_chunk_data'] = IPConnection::collectUnpackedArray($payload, 'holding_registers_chunk_data', 29);

        $high_level_callback = &$this->high_level_callbacks[self::CALLBACK_MODBUS_MASTER_READ_HOLDING_REGISTERS_RESPONSE];
        $holding_registers_chunk_length = min($payload['holding_registers_length'] - $payload['holding_registers_chunk_offset'], 29);

        if ($high_level_callback['data'] === NULL) { // no stream in-progress
            if ($payload['holding_registers_chunk_offset'] === 0) { // stream starts
                $high_level_callback['data'] = array_slice($payload['holding_registers_chunk_data'], 0, $holding_registers_chunk_length);

                if (count($high_level_callback['data']) >= $payload['holding_registers_length']) { // stream complete
                    if (array_key_exists(self::CALLBACK_MODBUS_MASTER_READ_HOLDING_REGISTERS_RESPONSE, $this->registered_callbacks)) {
                        $function = $this->registered_callbacks[self::CALLBACK_MODBUS_MASTER_READ_HOLDING_REGISTERS_RESPONSE];
                        $user_data = $this->registered_callback_user_data[self::CALLBACK_MODBUS_MASTER_READ_HOLDING_REGISTERS_RESPONSE];
                        $payload['holding_registers'] = $high_level_callback['data'];

                        call_user_func($function, $payload['request_id'], $payload['exception_code'], $payload['holding_registers'], $user_data);
                    }

                    $high_level_callback['data'] = NULL;
                }
            } else { // ignore tail of current stream, wait for next stream start
            }
        } else { // stream in-progress
            if ($payload['holding_registers_chunk_offset'] !== count($high_level_callback['data'])) { // stream out-of-sync
                $high_level_callback['data'] = NULL;

                if (array_key_exists(self::CALLBACK_MODBUS_MASTER_READ_HOLDING_REGISTERS_RESPONSE, $this->registered_callbacks)) {
                    $function = $this->registered_callbacks[self::CALLBACK_MODBUS_MASTER_READ_HOLDING_REGISTERS_RESPONSE];
                    $user_data = $this->registered_callback_user_data[self::CALLBACK_MODBUS_MASTER_READ_HOLDING_REGISTERS_RESPONSE];
                    $payload['holding_registers'] = $high_level_callback['data'];

                    call_user_func($function, $payload['request_id'], $payload['exception_code'], $payload['holding_registers'], $user_data);
                }
            } else { // stream in-sync
                $high_level_callback['data'] = array_merge($high_level_callback['data'], array_slice($payload['holding_registers_chunk_data'], 0, $holding_registers_chunk_length));

                if (count($high_level_callback['data']) >= $payload['holding_registers_length']) { // stream complete
                    if (array_key_exists(self::CALLBACK_MODBUS_MASTER_READ_HOLDING_REGISTERS_RESPONSE, $this->registered_callbacks)) {
                        $function = $this->registered_callbacks[self::CALLBACK_MODBUS_MASTER_READ_HOLDING_REGISTERS_RESPONSE];
                        $user_data = $this->registered_callback_user_data[self::CALLBACK_MODBUS_MASTER_READ_HOLDING_REGISTERS_RESPONSE];
                        $payload['holding_registers'] = $high_level_callback['data'];

                        call_user_func($function, $payload['request_id'], $payload['exception_code'], $payload['holding_registers'], $user_data);
                    }

                    $high_level_callback['data'] = NULL;
                }
            }
        }

        if (array_key_exists(self::CALLBACK_MODBUS_MASTER_READ_HOLDING_REGISTERS_RESPONSE_LOW_LEVEL, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_MODBUS_MASTER_READ_HOLDING_REGISTERS_RESPONSE_LOW_LEVEL];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_MODBUS_MASTER_READ_HOLDING_REGISTERS_RESPONSE_LOW_LEVEL];

            call_user_func($function, $payload['request_id'], $payload['exception_code'], $payload['holding_registers_length'], $payload['holding_registers_chunk_offset'], $payload['holding_registers_chunk_data'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperModbusSlaveWriteSingleCoilRequest($data)
    {
        $payload = unpack('C1request_id/V1coil_address/C1coil_value', $data);
        $payload['coil_address'] = IPConnection::fixUnpackedUInt32($payload, 'coil_address');
        $payload['coil_value'] = (bool)$payload['coil_value'];

        if (array_key_exists(self::CALLBACK_MODBUS_SLAVE_WRITE_SINGLE_COIL_REQUEST, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_MODBUS_SLAVE_WRITE_SINGLE_COIL_REQUEST];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_MODBUS_SLAVE_WRITE_SINGLE_COIL_REQUEST];

            call_user_func($function, $payload['request_id'], $payload['coil_address'], $payload['coil_value'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperModbusMasterWriteSingleCoilResponse($data)
    {
        $payload = unpack('C1request_id/c1exception_code', $data);

        if (array_key_exists(self::CALLBACK_MODBUS_MASTER_WRITE_SINGLE_COIL_RESPONSE, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_MODBUS_MASTER_WRITE_SINGLE_COIL_RESPONSE];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_MODBUS_MASTER_WRITE_SINGLE_COIL_RESPONSE];

            call_user_func($function, $payload['request_id'], $payload['exception_code'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperModbusSlaveWriteSingleRegisterRequest($data)
    {
        $payload = unpack('C1request_id/V1register_address/v1register_value', $data);
        $payload['register_address'] = IPConnection::fixUnpackedUInt32($payload, 'register_address');

        if (array_key_exists(self::CALLBACK_MODBUS_SLAVE_WRITE_SINGLE_REGISTER_REQUEST, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_MODBUS_SLAVE_WRITE_SINGLE_REGISTER_REQUEST];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_MODBUS_SLAVE_WRITE_SINGLE_REGISTER_REQUEST];

            call_user_func($function, $payload['request_id'], $payload['register_address'], $payload['register_value'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperModbusMasterWriteSingleRegisterResponse($data)
    {
        $payload = unpack('C1request_id/c1exception_code', $data);

        if (array_key_exists(self::CALLBACK_MODBUS_MASTER_WRITE_SINGLE_REGISTER_RESPONSE, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_MODBUS_MASTER_WRITE_SINGLE_REGISTER_RESPONSE];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_MODBUS_MASTER_WRITE_SINGLE_REGISTER_RESPONSE];

            call_user_func($function, $payload['request_id'], $payload['exception_code'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperModbusSlaveWriteMultipleCoilsRequestLowLevel($data)
    {
        $payload = unpack('C1request_id/V1starting_address/v1coils_length/v1coils_chunk_offset/C55coils_chunk_data', $data);
        $payload['starting_address'] = IPConnection::fixUnpackedUInt32($payload, 'starting_address');
        $payload['coils_chunk_data'] = IPConnection::collectUnpackedBoolArray($payload, 'coils_chunk_data', 440);

        $high_level_callback = &$this->high_level_callbacks[self::CALLBACK_MODBUS_SLAVE_WRITE_MULTIPLE_COILS_REQUEST];
        $coils_chunk_length = min($payload['coils_length'] - $payload['coils_chunk_offset'], 440);

        if ($high_level_callback['data'] === NULL) { // no stream in-progress
            if ($payload['coils_chunk_offset'] === 0) { // stream starts
                $high_level_callback['data'] = array_slice($payload['coils_chunk_data'], 0, $coils_chunk_length);

                if (count($high_level_callback['data']) >= $payload['coils_length']) { // stream complete
                    if (array_key_exists(self::CALLBACK_MODBUS_SLAVE_WRITE_MULTIPLE_COILS_REQUEST, $this->registered_callbacks)) {
                        $function = $this->registered_callbacks[self::CALLBACK_MODBUS_SLAVE_WRITE_MULTIPLE_COILS_REQUEST];
                        $user_data = $this->registered_callback_user_data[self::CALLBACK_MODBUS_SLAVE_WRITE_MULTIPLE_COILS_REQUEST];
                        $payload['coils'] = $high_level_callback['data'];

                        call_user_func($function, $payload['request_id'], $payload['starting_address'], $payload['coils'], $user_data);
                    }

                    $high_level_callback['data'] = NULL;
                }
            } else { // ignore tail of current stream, wait for next stream start
            }
        } else { // stream in-progress
            if ($payload['coils_chunk_offset'] !== count($high_level_callback['data'])) { // stream out-of-sync
                $high_level_callback['data'] = NULL;

                if (array_key_exists(self::CALLBACK_MODBUS_SLAVE_WRITE_MULTIPLE_COILS_REQUEST, $this->registered_callbacks)) {
                    $function = $this->registered_callbacks[self::CALLBACK_MODBUS_SLAVE_WRITE_MULTIPLE_COILS_REQUEST];
                    $user_data = $this->registered_callback_user_data[self::CALLBACK_MODBUS_SLAVE_WRITE_MULTIPLE_COILS_REQUEST];
                    $payload['coils'] = $high_level_callback['data'];

                    call_user_func($function, $payload['request_id'], $payload['starting_address'], $payload['coils'], $user_data);
                }
            } else { // stream in-sync
                $high_level_callback['data'] = array_merge($high_level_callback['data'], array_slice($payload['coils_chunk_data'], 0, $coils_chunk_length));

                if (count($high_level_callback['data']) >= $payload['coils_length']) { // stream complete
                    if (array_key_exists(self::CALLBACK_MODBUS_SLAVE_WRITE_MULTIPLE_COILS_REQUEST, $this->registered_callbacks)) {
                        $function = $this->registered_callbacks[self::CALLBACK_MODBUS_SLAVE_WRITE_MULTIPLE_COILS_REQUEST];
                        $user_data = $this->registered_callback_user_data[self::CALLBACK_MODBUS_SLAVE_WRITE_MULTIPLE_COILS_REQUEST];
                        $payload['coils'] = $high_level_callback['data'];

                        call_user_func($function, $payload['request_id'], $payload['starting_address'], $payload['coils'], $user_data);
                    }

                    $high_level_callback['data'] = NULL;
                }
            }
        }

        if (array_key_exists(self::CALLBACK_MODBUS_SLAVE_WRITE_MULTIPLE_COILS_REQUEST_LOW_LEVEL, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_MODBUS_SLAVE_WRITE_MULTIPLE_COILS_REQUEST_LOW_LEVEL];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_MODBUS_SLAVE_WRITE_MULTIPLE_COILS_REQUEST_LOW_LEVEL];

            call_user_func($function, $payload['request_id'], $payload['starting_address'], $payload['coils_length'], $payload['coils_chunk_offset'], $payload['coils_chunk_data'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperModbusMasterWriteMultipleCoilsResponse($data)
    {
        $payload = unpack('C1request_id/c1exception_code', $data);

        if (array_key_exists(self::CALLBACK_MODBUS_MASTER_WRITE_MULTIPLE_COILS_RESPONSE, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_MODBUS_MASTER_WRITE_MULTIPLE_COILS_RESPONSE];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_MODBUS_MASTER_WRITE_MULTIPLE_COILS_RESPONSE];

            call_user_func($function, $payload['request_id'], $payload['exception_code'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperModbusSlaveWriteMultipleRegistersRequestLowLevel($data)
    {
        $payload = unpack('C1request_id/V1starting_address/v1registers_length/v1registers_chunk_offset/v27registers_chunk_data', $data);
        $payload['starting_address'] = IPConnection::fixUnpackedUInt32($payload, 'starting_address');
        $payload['registers_chunk_data'] = IPConnection::collectUnpackedArray($payload, 'registers_chunk_data', 27);

        $high_level_callback = &$this->high_level_callbacks[self::CALLBACK_MODBUS_SLAVE_WRITE_MULTIPLE_REGISTERS_REQUEST];
        $registers_chunk_length = min($payload['registers_length'] - $payload['registers_chunk_offset'], 27);

        if ($high_level_callback['data'] === NULL) { // no stream in-progress
            if ($payload['registers_chunk_offset'] === 0) { // stream starts
                $high_level_callback['data'] = array_slice($payload['registers_chunk_data'], 0, $registers_chunk_length);

                if (count($high_level_callback['data']) >= $payload['registers_length']) { // stream complete
                    if (array_key_exists(self::CALLBACK_MODBUS_SLAVE_WRITE_MULTIPLE_REGISTERS_REQUEST, $this->registered_callbacks)) {
                        $function = $this->registered_callbacks[self::CALLBACK_MODBUS_SLAVE_WRITE_MULTIPLE_REGISTERS_REQUEST];
                        $user_data = $this->registered_callback_user_data[self::CALLBACK_MODBUS_SLAVE_WRITE_MULTIPLE_REGISTERS_REQUEST];
                        $payload['registers'] = $high_level_callback['data'];

                        call_user_func($function, $payload['request_id'], $payload['starting_address'], $payload['registers'], $user_data);
                    }

                    $high_level_callback['data'] = NULL;
                }
            } else { // ignore tail of current stream, wait for next stream start
            }
        } else { // stream in-progress
            if ($payload['registers_chunk_offset'] !== count($high_level_callback['data'])) { // stream out-of-sync
                $high_level_callback['data'] = NULL;

                if (array_key_exists(self::CALLBACK_MODBUS_SLAVE_WRITE_MULTIPLE_REGISTERS_REQUEST, $this->registered_callbacks)) {
                    $function = $this->registered_callbacks[self::CALLBACK_MODBUS_SLAVE_WRITE_MULTIPLE_REGISTERS_REQUEST];
                    $user_data = $this->registered_callback_user_data[self::CALLBACK_MODBUS_SLAVE_WRITE_MULTIPLE_REGISTERS_REQUEST];
                    $payload['registers'] = $high_level_callback['data'];

                    call_user_func($function, $payload['request_id'], $payload['starting_address'], $payload['registers'], $user_data);
                }
            } else { // stream in-sync
                $high_level_callback['data'] = array_merge($high_level_callback['data'], array_slice($payload['registers_chunk_data'], 0, $registers_chunk_length));

                if (count($high_level_callback['data']) >= $payload['registers_length']) { // stream complete
                    if (array_key_exists(self::CALLBACK_MODBUS_SLAVE_WRITE_MULTIPLE_REGISTERS_REQUEST, $this->registered_callbacks)) {
                        $function = $this->registered_callbacks[self::CALLBACK_MODBUS_SLAVE_WRITE_MULTIPLE_REGISTERS_REQUEST];
                        $user_data = $this->registered_callback_user_data[self::CALLBACK_MODBUS_SLAVE_WRITE_MULTIPLE_REGISTERS_REQUEST];
                        $payload['registers'] = $high_level_callback['data'];

                        call_user_func($function, $payload['request_id'], $payload['starting_address'], $payload['registers'], $user_data);
                    }

                    $high_level_callback['data'] = NULL;
                }
            }
        }

        if (array_key_exists(self::CALLBACK_MODBUS_SLAVE_WRITE_MULTIPLE_REGISTERS_REQUEST_LOW_LEVEL, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_MODBUS_SLAVE_WRITE_MULTIPLE_REGISTERS_REQUEST_LOW_LEVEL];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_MODBUS_SLAVE_WRITE_MULTIPLE_REGISTERS_REQUEST_LOW_LEVEL];

            call_user_func($function, $payload['request_id'], $payload['starting_address'], $payload['registers_length'], $payload['registers_chunk_offset'], $payload['registers_chunk_data'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperModbusMasterWriteMultipleRegistersResponse($data)
    {
        $payload = unpack('C1request_id/c1exception_code', $data);

        if (array_key_exists(self::CALLBACK_MODBUS_MASTER_WRITE_MULTIPLE_REGISTERS_RESPONSE, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_MODBUS_MASTER_WRITE_MULTIPLE_REGISTERS_RESPONSE];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_MODBUS_MASTER_WRITE_MULTIPLE_REGISTERS_RESPONSE];

            call_user_func($function, $payload['request_id'], $payload['exception_code'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperModbusSlaveReadDiscreteInputsRequest($data)
    {
        $payload = unpack('C1request_id/V1starting_address/v1count', $data);
        $payload['starting_address'] = IPConnection::fixUnpackedUInt32($payload, 'starting_address');

        if (array_key_exists(self::CALLBACK_MODBUS_SLAVE_READ_DISCRETE_INPUTS_REQUEST, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_MODBUS_SLAVE_READ_DISCRETE_INPUTS_REQUEST];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_MODBUS_SLAVE_READ_DISCRETE_INPUTS_REQUEST];

            call_user_func($function, $payload['request_id'], $payload['starting_address'], $payload['count'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperModbusMasterReadDiscreteInputsResponseLowLevel($data)
    {
        $payload = unpack('C1request_id/c1exception_code/v1discrete_inputs_length/v1discrete_inputs_chunk_offset/C58discrete_inputs_chunk_data', $data);
        $payload['discrete_inputs_chunk_data'] = IPConnection::collectUnpackedBoolArray($payload, 'discrete_inputs_chunk_data', 464);

        $high_level_callback = &$this->high_level_callbacks[self::CALLBACK_MODBUS_MASTER_READ_DISCRETE_INPUTS_RESPONSE];
        $discrete_inputs_chunk_length = min($payload['discrete_inputs_length'] - $payload['discrete_inputs_chunk_offset'], 464);

        if ($high_level_callback['data'] === NULL) { // no stream in-progress
            if ($payload['discrete_inputs_chunk_offset'] === 0) { // stream starts
                $high_level_callback['data'] = array_slice($payload['discrete_inputs_chunk_data'], 0, $discrete_inputs_chunk_length);

                if (count($high_level_callback['data']) >= $payload['discrete_inputs_length']) { // stream complete
                    if (array_key_exists(self::CALLBACK_MODBUS_MASTER_READ_DISCRETE_INPUTS_RESPONSE, $this->registered_callbacks)) {
                        $function = $this->registered_callbacks[self::CALLBACK_MODBUS_MASTER_READ_DISCRETE_INPUTS_RESPONSE];
                        $user_data = $this->registered_callback_user_data[self::CALLBACK_MODBUS_MASTER_READ_DISCRETE_INPUTS_RESPONSE];
                        $payload['discrete_inputs'] = $high_level_callback['data'];

                        call_user_func($function, $payload['request_id'], $payload['exception_code'], $payload['discrete_inputs'], $user_data);
                    }

                    $high_level_callback['data'] = NULL;
                }
            } else { // ignore tail of current stream, wait for next stream start
            }
        } else { // stream in-progress
            if ($payload['discrete_inputs_chunk_offset'] !== count($high_level_callback['data'])) { // stream out-of-sync
                $high_level_callback['data'] = NULL;

                if (array_key_exists(self::CALLBACK_MODBUS_MASTER_READ_DISCRETE_INPUTS_RESPONSE, $this->registered_callbacks)) {
                    $function = $this->registered_callbacks[self::CALLBACK_MODBUS_MASTER_READ_DISCRETE_INPUTS_RESPONSE];
                    $user_data = $this->registered_callback_user_data[self::CALLBACK_MODBUS_MASTER_READ_DISCRETE_INPUTS_RESPONSE];
                    $payload['discrete_inputs'] = $high_level_callback['data'];

                    call_user_func($function, $payload['request_id'], $payload['exception_code'], $payload['discrete_inputs'], $user_data);
                }
            } else { // stream in-sync
                $high_level_callback['data'] = array_merge($high_level_callback['data'], array_slice($payload['discrete_inputs_chunk_data'], 0, $discrete_inputs_chunk_length));

                if (count($high_level_callback['data']) >= $payload['discrete_inputs_length']) { // stream complete
                    if (array_key_exists(self::CALLBACK_MODBUS_MASTER_READ_DISCRETE_INPUTS_RESPONSE, $this->registered_callbacks)) {
                        $function = $this->registered_callbacks[self::CALLBACK_MODBUS_MASTER_READ_DISCRETE_INPUTS_RESPONSE];
                        $user_data = $this->registered_callback_user_data[self::CALLBACK_MODBUS_MASTER_READ_DISCRETE_INPUTS_RESPONSE];
                        $payload['discrete_inputs'] = $high_level_callback['data'];

                        call_user_func($function, $payload['request_id'], $payload['exception_code'], $payload['discrete_inputs'], $user_data);
                    }

                    $high_level_callback['data'] = NULL;
                }
            }
        }

        if (array_key_exists(self::CALLBACK_MODBUS_MASTER_READ_DISCRETE_INPUTS_RESPONSE_LOW_LEVEL, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_MODBUS_MASTER_READ_DISCRETE_INPUTS_RESPONSE_LOW_LEVEL];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_MODBUS_MASTER_READ_DISCRETE_INPUTS_RESPONSE_LOW_LEVEL];

            call_user_func($function, $payload['request_id'], $payload['exception_code'], $payload['discrete_inputs_length'], $payload['discrete_inputs_chunk_offset'], $payload['discrete_inputs_chunk_data'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperModbusSlaveReadInputRegistersRequest($data)
    {
        $payload = unpack('C1request_id/V1starting_address/v1count', $data);
        $payload['starting_address'] = IPConnection::fixUnpackedUInt32($payload, 'starting_address');

        if (array_key_exists(self::CALLBACK_MODBUS_SLAVE_READ_INPUT_REGISTERS_REQUEST, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_MODBUS_SLAVE_READ_INPUT_REGISTERS_REQUEST];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_MODBUS_SLAVE_READ_INPUT_REGISTERS_REQUEST];

            call_user_func($function, $payload['request_id'], $payload['starting_address'], $payload['count'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperModbusMasterReadInputRegistersResponseLowLevel($data)
    {
        $payload = unpack('C1request_id/c1exception_code/v1input_registers_length/v1input_registers_chunk_offset/v29input_registers_chunk_data', $data);
        $payload['input_registers_chunk_data'] = IPConnection::collectUnpackedArray($payload, 'input_registers_chunk_data', 29);

        $high_level_callback = &$this->high_level_callbacks[self::CALLBACK_MODBUS_MASTER_READ_INPUT_REGISTERS_RESPONSE];
        $input_registers_chunk_length = min($payload['input_registers_length'] - $payload['input_registers_chunk_offset'], 29);

        if ($high_level_callback['data'] === NULL) { // no stream in-progress
            if ($payload['input_registers_chunk_offset'] === 0) { // stream starts
                $high_level_callback['data'] = array_slice($payload['input_registers_chunk_data'], 0, $input_registers_chunk_length);

                if (count($high_level_callback['data']) >= $payload['input_registers_length']) { // stream complete
                    if (array_key_exists(self::CALLBACK_MODBUS_MASTER_READ_INPUT_REGISTERS_RESPONSE, $this->registered_callbacks)) {
                        $function = $this->registered_callbacks[self::CALLBACK_MODBUS_MASTER_READ_INPUT_REGISTERS_RESPONSE];
                        $user_data = $this->registered_callback_user_data[self::CALLBACK_MODBUS_MASTER_READ_INPUT_REGISTERS_RESPONSE];
                        $payload['input_registers'] = $high_level_callback['data'];

                        call_user_func($function, $payload['request_id'], $payload['exception_code'], $payload['input_registers'], $user_data);
                    }

                    $high_level_callback['data'] = NULL;
                }
            } else { // ignore tail of current stream, wait for next stream start
            }
        } else { // stream in-progress
            if ($payload['input_registers_chunk_offset'] !== count($high_level_callback['data'])) { // stream out-of-sync
                $high_level_callback['data'] = NULL;

                if (array_key_exists(self::CALLBACK_MODBUS_MASTER_READ_INPUT_REGISTERS_RESPONSE, $this->registered_callbacks)) {
                    $function = $this->registered_callbacks[self::CALLBACK_MODBUS_MASTER_READ_INPUT_REGISTERS_RESPONSE];
                    $user_data = $this->registered_callback_user_data[self::CALLBACK_MODBUS_MASTER_READ_INPUT_REGISTERS_RESPONSE];
                    $payload['input_registers'] = $high_level_callback['data'];

                    call_user_func($function, $payload['request_id'], $payload['exception_code'], $payload['input_registers'], $user_data);
                }
            } else { // stream in-sync
                $high_level_callback['data'] = array_merge($high_level_callback['data'], array_slice($payload['input_registers_chunk_data'], 0, $input_registers_chunk_length));

                if (count($high_level_callback['data']) >= $payload['input_registers_length']) { // stream complete
                    if (array_key_exists(self::CALLBACK_MODBUS_MASTER_READ_INPUT_REGISTERS_RESPONSE, $this->registered_callbacks)) {
                        $function = $this->registered_callbacks[self::CALLBACK_MODBUS_MASTER_READ_INPUT_REGISTERS_RESPONSE];
                        $user_data = $this->registered_callback_user_data[self::CALLBACK_MODBUS_MASTER_READ_INPUT_REGISTERS_RESPONSE];
                        $payload['input_registers'] = $high_level_callback['data'];

                        call_user_func($function, $payload['request_id'], $payload['exception_code'], $payload['input_registers'], $user_data);
                    }

                    $high_level_callback['data'] = NULL;
                }
            }
        }

        if (array_key_exists(self::CALLBACK_MODBUS_MASTER_READ_INPUT_REGISTERS_RESPONSE_LOW_LEVEL, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_MODBUS_MASTER_READ_INPUT_REGISTERS_RESPONSE_LOW_LEVEL];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_MODBUS_MASTER_READ_INPUT_REGISTERS_RESPONSE_LOW_LEVEL];

            call_user_func($function, $payload['request_id'], $payload['exception_code'], $payload['input_registers_length'], $payload['input_registers_chunk_offset'], $payload['input_registers_chunk_data'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperFrameReadable($data)
    {
        $payload = unpack('v1frame_count', $data);

        if (array_key_exists(self::CALLBACK_FRAME_READABLE, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_FRAME_READABLE];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_FRAME_READABLE];

            call_user_func($function, $payload['frame_count'], $user_data);
        }
    }
}

?>
