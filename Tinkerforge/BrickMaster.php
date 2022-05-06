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
 * Basis to build stacks and has 4 Bricklet ports
 */
class BrickMaster extends Device
{

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickMaster::setStackCurrentCallbackPeriod(). The parameter is the current
     * of the sensor.
     * 
     * The BrickMaster::CALLBACK_STACK_CURRENT callback is only triggered if the current has changed
     * since the last triggering.
     * 
     * .. versionadded:: 2.0.5$nbsp;(Firmware)
     */
    const CALLBACK_STACK_CURRENT = 59;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickMaster::setStackVoltageCallbackPeriod(). The parameter is the voltage
     * of the sensor.
     * 
     * The BrickMaster::CALLBACK_STACK_VOLTAGE callback is only triggered if the voltage has changed
     * since the last triggering.
     * 
     * .. versionadded:: 2.0.5$nbsp;(Firmware)
     */
    const CALLBACK_STACK_VOLTAGE = 60;

    /**
     * This callback is triggered periodically with the period that is set by
     * BrickMaster::setUSBVoltageCallbackPeriod(). The parameter is the USB
     * voltage.
     * 
     * The BrickMaster::CALLBACK_USB_VOLTAGE callback is only triggered if the USB voltage has changed
     * since the last triggering.
     * 
     * Does not work with hardware version 2.1.
     * 
     * .. versionadded:: 2.0.5$nbsp;(Firmware)
     */
    const CALLBACK_USB_VOLTAGE = 61;

    /**
     * This callback is triggered when the threshold as set by
     * BrickMaster::setStackCurrentCallbackThreshold() is reached.
     * The parameter is the stack current.
     * 
     * If the threshold keeps being reached, the callback is triggered periodically
     * with the period as set by BrickMaster::setDebouncePeriod().
     * 
     * .. versionadded:: 2.0.5$nbsp;(Firmware)
     */
    const CALLBACK_STACK_CURRENT_REACHED = 62;

    /**
     * This callback is triggered when the threshold as set by
     * BrickMaster::setStackVoltageCallbackThreshold() is reached.
     * The parameter is the stack voltage.
     * 
     * If the threshold keeps being reached, the callback is triggered periodically
     * with the period as set by BrickMaster::setDebouncePeriod().
     * 
     * .. versionadded:: 2.0.5$nbsp;(Firmware)
     */
    const CALLBACK_STACK_VOLTAGE_REACHED = 63;

    /**
     * This callback is triggered when the threshold as set by
     * BrickMaster::setUSBVoltageCallbackThreshold() is reached.
     * The parameter is the voltage of the sensor.
     * 
     * If the threshold keeps being reached, the callback is triggered periodically
     * with the period as set by BrickMaster::setDebouncePeriod().
     * 
     * .. versionadded:: 2.0.5$nbsp;(Firmware)
     */
    const CALLBACK_USB_VOLTAGE_REACHED = 64;


    /**
     * @internal
     */
    const FUNCTION_GET_STACK_VOLTAGE = 1;

    /**
     * @internal
     */
    const FUNCTION_GET_STACK_CURRENT = 2;

    /**
     * @internal
     */
    const FUNCTION_SET_EXTENSION_TYPE = 3;

    /**
     * @internal
     */
    const FUNCTION_GET_EXTENSION_TYPE = 4;

    /**
     * @internal
     */
    const FUNCTION_IS_CHIBI_PRESENT = 5;

    /**
     * @internal
     */
    const FUNCTION_SET_CHIBI_ADDRESS = 6;

    /**
     * @internal
     */
    const FUNCTION_GET_CHIBI_ADDRESS = 7;

    /**
     * @internal
     */
    const FUNCTION_SET_CHIBI_MASTER_ADDRESS = 8;

    /**
     * @internal
     */
    const FUNCTION_GET_CHIBI_MASTER_ADDRESS = 9;

    /**
     * @internal
     */
    const FUNCTION_SET_CHIBI_SLAVE_ADDRESS = 10;

    /**
     * @internal
     */
    const FUNCTION_GET_CHIBI_SLAVE_ADDRESS = 11;

    /**
     * @internal
     */
    const FUNCTION_GET_CHIBI_SIGNAL_STRENGTH = 12;

    /**
     * @internal
     */
    const FUNCTION_GET_CHIBI_ERROR_LOG = 13;

    /**
     * @internal
     */
    const FUNCTION_SET_CHIBI_FREQUENCY = 14;

    /**
     * @internal
     */
    const FUNCTION_GET_CHIBI_FREQUENCY = 15;

    /**
     * @internal
     */
    const FUNCTION_SET_CHIBI_CHANNEL = 16;

    /**
     * @internal
     */
    const FUNCTION_GET_CHIBI_CHANNEL = 17;

    /**
     * @internal
     */
    const FUNCTION_IS_RS485_PRESENT = 18;

    /**
     * @internal
     */
    const FUNCTION_SET_RS485_ADDRESS = 19;

    /**
     * @internal
     */
    const FUNCTION_GET_RS485_ADDRESS = 20;

    /**
     * @internal
     */
    const FUNCTION_SET_RS485_SLAVE_ADDRESS = 21;

    /**
     * @internal
     */
    const FUNCTION_GET_RS485_SLAVE_ADDRESS = 22;

    /**
     * @internal
     */
    const FUNCTION_GET_RS485_ERROR_LOG = 23;

    /**
     * @internal
     */
    const FUNCTION_SET_RS485_CONFIGURATION = 24;

    /**
     * @internal
     */
    const FUNCTION_GET_RS485_CONFIGURATION = 25;

    /**
     * @internal
     */
    const FUNCTION_IS_WIFI_PRESENT = 26;

    /**
     * @internal
     */
    const FUNCTION_SET_WIFI_CONFIGURATION = 27;

    /**
     * @internal
     */
    const FUNCTION_GET_WIFI_CONFIGURATION = 28;

    /**
     * @internal
     */
    const FUNCTION_SET_WIFI_ENCRYPTION = 29;

    /**
     * @internal
     */
    const FUNCTION_GET_WIFI_ENCRYPTION = 30;

    /**
     * @internal
     */
    const FUNCTION_GET_WIFI_STATUS = 31;

    /**
     * @internal
     */
    const FUNCTION_REFRESH_WIFI_STATUS = 32;

    /**
     * @internal
     */
    const FUNCTION_SET_WIFI_CERTIFICATE = 33;

    /**
     * @internal
     */
    const FUNCTION_GET_WIFI_CERTIFICATE = 34;

    /**
     * @internal
     */
    const FUNCTION_SET_WIFI_POWER_MODE = 35;

    /**
     * @internal
     */
    const FUNCTION_GET_WIFI_POWER_MODE = 36;

    /**
     * @internal
     */
    const FUNCTION_GET_WIFI_BUFFER_INFO = 37;

    /**
     * @internal
     */
    const FUNCTION_SET_WIFI_REGULATORY_DOMAIN = 38;

    /**
     * @internal
     */
    const FUNCTION_GET_WIFI_REGULATORY_DOMAIN = 39;

    /**
     * @internal
     */
    const FUNCTION_GET_USB_VOLTAGE = 40;

    /**
     * @internal
     */
    const FUNCTION_SET_LONG_WIFI_KEY = 41;

    /**
     * @internal
     */
    const FUNCTION_GET_LONG_WIFI_KEY = 42;

    /**
     * @internal
     */
    const FUNCTION_SET_WIFI_HOSTNAME = 43;

    /**
     * @internal
     */
    const FUNCTION_GET_WIFI_HOSTNAME = 44;

    /**
     * @internal
     */
    const FUNCTION_SET_STACK_CURRENT_CALLBACK_PERIOD = 45;

    /**
     * @internal
     */
    const FUNCTION_GET_STACK_CURRENT_CALLBACK_PERIOD = 46;

    /**
     * @internal
     */
    const FUNCTION_SET_STACK_VOLTAGE_CALLBACK_PERIOD = 47;

    /**
     * @internal
     */
    const FUNCTION_GET_STACK_VOLTAGE_CALLBACK_PERIOD = 48;

    /**
     * @internal
     */
    const FUNCTION_SET_USB_VOLTAGE_CALLBACK_PERIOD = 49;

    /**
     * @internal
     */
    const FUNCTION_GET_USB_VOLTAGE_CALLBACK_PERIOD = 50;

    /**
     * @internal
     */
    const FUNCTION_SET_STACK_CURRENT_CALLBACK_THRESHOLD = 51;

    /**
     * @internal
     */
    const FUNCTION_GET_STACK_CURRENT_CALLBACK_THRESHOLD = 52;

    /**
     * @internal
     */
    const FUNCTION_SET_STACK_VOLTAGE_CALLBACK_THRESHOLD = 53;

    /**
     * @internal
     */
    const FUNCTION_GET_STACK_VOLTAGE_CALLBACK_THRESHOLD = 54;

    /**
     * @internal
     */
    const FUNCTION_SET_USB_VOLTAGE_CALLBACK_THRESHOLD = 55;

    /**
     * @internal
     */
    const FUNCTION_GET_USB_VOLTAGE_CALLBACK_THRESHOLD = 56;

    /**
     * @internal
     */
    const FUNCTION_SET_DEBOUNCE_PERIOD = 57;

    /**
     * @internal
     */
    const FUNCTION_GET_DEBOUNCE_PERIOD = 58;

    /**
     * @internal
     */
    const FUNCTION_IS_ETHERNET_PRESENT = 65;

    /**
     * @internal
     */
    const FUNCTION_SET_ETHERNET_CONFIGURATION = 66;

    /**
     * @internal
     */
    const FUNCTION_GET_ETHERNET_CONFIGURATION = 67;

    /**
     * @internal
     */
    const FUNCTION_GET_ETHERNET_STATUS = 68;

    /**
     * @internal
     */
    const FUNCTION_SET_ETHERNET_HOSTNAME = 69;

    /**
     * @internal
     */
    const FUNCTION_SET_ETHERNET_MAC_ADDRESS = 70;

    /**
     * @internal
     */
    const FUNCTION_SET_ETHERNET_WEBSOCKET_CONFIGURATION = 71;

    /**
     * @internal
     */
    const FUNCTION_GET_ETHERNET_WEBSOCKET_CONFIGURATION = 72;

    /**
     * @internal
     */
    const FUNCTION_SET_ETHERNET_AUTHENTICATION_SECRET = 73;

    /**
     * @internal
     */
    const FUNCTION_GET_ETHERNET_AUTHENTICATION_SECRET = 74;

    /**
     * @internal
     */
    const FUNCTION_SET_WIFI_AUTHENTICATION_SECRET = 75;

    /**
     * @internal
     */
    const FUNCTION_GET_WIFI_AUTHENTICATION_SECRET = 76;

    /**
     * @internal
     */
    const FUNCTION_GET_CONNECTION_TYPE = 77;

    /**
     * @internal
     */
    const FUNCTION_IS_WIFI2_PRESENT = 78;

    /**
     * @internal
     */
    const FUNCTION_START_WIFI2_BOOTLOADER = 79;

    /**
     * @internal
     */
    const FUNCTION_WRITE_WIFI2_SERIAL_PORT = 80;

    /**
     * @internal
     */
    const FUNCTION_READ_WIFI2_SERIAL_PORT = 81;

    /**
     * @internal
     */
    const FUNCTION_SET_WIFI2_AUTHENTICATION_SECRET = 82;

    /**
     * @internal
     */
    const FUNCTION_GET_WIFI2_AUTHENTICATION_SECRET = 83;

    /**
     * @internal
     */
    const FUNCTION_SET_WIFI2_CONFIGURATION = 84;

    /**
     * @internal
     */
    const FUNCTION_GET_WIFI2_CONFIGURATION = 85;

    /**
     * @internal
     */
    const FUNCTION_GET_WIFI2_STATUS = 86;

    /**
     * @internal
     */
    const FUNCTION_SET_WIFI2_CLIENT_CONFIGURATION = 87;

    /**
     * @internal
     */
    const FUNCTION_GET_WIFI2_CLIENT_CONFIGURATION = 88;

    /**
     * @internal
     */
    const FUNCTION_SET_WIFI2_CLIENT_HOSTNAME = 89;

    /**
     * @internal
     */
    const FUNCTION_GET_WIFI2_CLIENT_HOSTNAME = 90;

    /**
     * @internal
     */
    const FUNCTION_SET_WIFI2_CLIENT_PASSWORD = 91;

    /**
     * @internal
     */
    const FUNCTION_GET_WIFI2_CLIENT_PASSWORD = 92;

    /**
     * @internal
     */
    const FUNCTION_SET_WIFI2_AP_CONFIGURATION = 93;

    /**
     * @internal
     */
    const FUNCTION_GET_WIFI2_AP_CONFIGURATION = 94;

    /**
     * @internal
     */
    const FUNCTION_SET_WIFI2_AP_PASSWORD = 95;

    /**
     * @internal
     */
    const FUNCTION_GET_WIFI2_AP_PASSWORD = 96;

    /**
     * @internal
     */
    const FUNCTION_SAVE_WIFI2_CONFIGURATION = 97;

    /**
     * @internal
     */
    const FUNCTION_GET_WIFI2_FIRMWARE_VERSION = 98;

    /**
     * @internal
     */
    const FUNCTION_ENABLE_WIFI2_STATUS_LED = 99;

    /**
     * @internal
     */
    const FUNCTION_DISABLE_WIFI2_STATUS_LED = 100;

    /**
     * @internal
     */
    const FUNCTION_IS_WIFI2_STATUS_LED_ENABLED = 101;

    /**
     * @internal
     */
    const FUNCTION_SET_WIFI2_MESH_CONFIGURATION = 102;

    /**
     * @internal
     */
    const FUNCTION_GET_WIFI2_MESH_CONFIGURATION = 103;

    /**
     * @internal
     */
    const FUNCTION_SET_WIFI2_MESH_ROUTER_SSID = 104;

    /**
     * @internal
     */
    const FUNCTION_GET_WIFI2_MESH_ROUTER_SSID = 105;

    /**
     * @internal
     */
    const FUNCTION_SET_WIFI2_MESH_ROUTER_PASSWORD = 106;

    /**
     * @internal
     */
    const FUNCTION_GET_WIFI2_MESH_ROUTER_PASSWORD = 107;

    /**
     * @internal
     */
    const FUNCTION_GET_WIFI2_MESH_COMMON_STATUS = 108;

    /**
     * @internal
     */
    const FUNCTION_GET_WIFI2_MESH_CLIENT_STATUS = 109;

    /**
     * @internal
     */
    const FUNCTION_GET_WIFI2_MESH_AP_STATUS = 110;

    /**
     * @internal
     */
    const FUNCTION_SET_BRICKLET_XMC_FLASH_CONFIG = 111;

    /**
     * @internal
     */
    const FUNCTION_SET_BRICKLET_XMC_FLASH_DATA = 112;

    /**
     * @internal
     */
    const FUNCTION_SET_BRICKLETS_ENABLED = 113;

    /**
     * @internal
     */
    const FUNCTION_GET_BRICKLETS_ENABLED = 114;

    /**
     * @internal
     */
    const FUNCTION_SET_SPITFP_BAUDRATE_CONFIG = 231;

    /**
     * @internal
     */
    const FUNCTION_GET_SPITFP_BAUDRATE_CONFIG = 232;

    /**
     * @internal
     */
    const FUNCTION_GET_SEND_TIMEOUT_COUNT = 233;

    /**
     * @internal
     */
    const FUNCTION_SET_SPITFP_BAUDRATE = 234;

    /**
     * @internal
     */
    const FUNCTION_GET_SPITFP_BAUDRATE = 235;

    /**
     * @internal
     */
    const FUNCTION_GET_SPITFP_ERROR_COUNT = 237;

    /**
     * @internal
     */
    const FUNCTION_ENABLE_STATUS_LED = 238;

    /**
     * @internal
     */
    const FUNCTION_DISABLE_STATUS_LED = 239;

    /**
     * @internal
     */
    const FUNCTION_IS_STATUS_LED_ENABLED = 240;

    /**
     * @internal
     */
    const FUNCTION_GET_PROTOCOL1_BRICKLET_NAME = 241;

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
    const FUNCTION_WRITE_BRICKLET_PLUGIN = 246;

    /**
     * @internal
     */
    const FUNCTION_READ_BRICKLET_PLUGIN = 247;

    /**
     * @internal
     */
    const FUNCTION_GET_IDENTITY = 255;

    const EXTENSION_TYPE_CHIBI = 1;
    const EXTENSION_TYPE_RS485 = 2;
    const EXTENSION_TYPE_WIFI = 3;
    const EXTENSION_TYPE_ETHERNET = 4;
    const EXTENSION_TYPE_WIFI2 = 5;
    const CHIBI_FREQUENCY_OQPSK_868_MHZ = 0;
    const CHIBI_FREQUENCY_OQPSK_915_MHZ = 1;
    const CHIBI_FREQUENCY_OQPSK_780_MHZ = 2;
    const CHIBI_FREQUENCY_BPSK40_915_MHZ = 3;
    const RS485_PARITY_NONE = 'n';
    const RS485_PARITY_EVEN = 'e';
    const RS485_PARITY_ODD = 'o';
    const WIFI_CONNECTION_DHCP = 0;
    const WIFI_CONNECTION_STATIC_IP = 1;
    const WIFI_CONNECTION_ACCESS_POINT_DHCP = 2;
    const WIFI_CONNECTION_ACCESS_POINT_STATIC_IP = 3;
    const WIFI_CONNECTION_AD_HOC_DHCP = 4;
    const WIFI_CONNECTION_AD_HOC_STATIC_IP = 5;
    const WIFI_ENCRYPTION_WPA_WPA2 = 0;
    const WIFI_ENCRYPTION_WPA_ENTERPRISE = 1;
    const WIFI_ENCRYPTION_WEP = 2;
    const WIFI_ENCRYPTION_NO_ENCRYPTION = 3;
    const WIFI_EAP_OPTION_OUTER_AUTH_EAP_FAST = 0;
    const WIFI_EAP_OPTION_OUTER_AUTH_EAP_TLS = 1;
    const WIFI_EAP_OPTION_OUTER_AUTH_EAP_TTLS = 2;
    const WIFI_EAP_OPTION_OUTER_AUTH_EAP_PEAP = 3;
    const WIFI_EAP_OPTION_INNER_AUTH_EAP_MSCHAP = 0;
    const WIFI_EAP_OPTION_INNER_AUTH_EAP_GTC = 4;
    const WIFI_EAP_OPTION_CERT_TYPE_CA_CERT = 0;
    const WIFI_EAP_OPTION_CERT_TYPE_CLIENT_CERT = 8;
    const WIFI_EAP_OPTION_CERT_TYPE_PRIVATE_KEY = 16;
    const WIFI_STATE_DISASSOCIATED = 0;
    const WIFI_STATE_ASSOCIATED = 1;
    const WIFI_STATE_ASSOCIATING = 2;
    const WIFI_STATE_ERROR = 3;
    const WIFI_STATE_NOT_INITIALIZED_YET = 255;
    const WIFI_POWER_MODE_FULL_SPEED = 0;
    const WIFI_POWER_MODE_LOW_POWER = 1;
    const WIFI_DOMAIN_CHANNEL_1TO11 = 0;
    const WIFI_DOMAIN_CHANNEL_1TO13 = 1;
    const WIFI_DOMAIN_CHANNEL_1TO14 = 2;
    const THRESHOLD_OPTION_OFF = 'x';
    const THRESHOLD_OPTION_OUTSIDE = 'o';
    const THRESHOLD_OPTION_INSIDE = 'i';
    const THRESHOLD_OPTION_SMALLER = '<';
    const THRESHOLD_OPTION_GREATER = '>';
    const ETHERNET_CONNECTION_DHCP = 0;
    const ETHERNET_CONNECTION_STATIC_IP = 1;
    const CONNECTION_TYPE_NONE = 0;
    const CONNECTION_TYPE_USB = 1;
    const CONNECTION_TYPE_SPI_STACK = 2;
    const CONNECTION_TYPE_CHIBI = 3;
    const CONNECTION_TYPE_RS485 = 4;
    const CONNECTION_TYPE_WIFI = 5;
    const CONNECTION_TYPE_ETHERNET = 6;
    const CONNECTION_TYPE_WIFI2 = 7;
    const WIFI2_PHY_MODE_B = 0;
    const WIFI2_PHY_MODE_G = 1;
    const WIFI2_PHY_MODE_N = 2;
    const WIFI2_CLIENT_STATUS_IDLE = 0;
    const WIFI2_CLIENT_STATUS_CONNECTING = 1;
    const WIFI2_CLIENT_STATUS_WRONG_PASSWORD = 2;
    const WIFI2_CLIENT_STATUS_NO_AP_FOUND = 3;
    const WIFI2_CLIENT_STATUS_CONNECT_FAILED = 4;
    const WIFI2_CLIENT_STATUS_GOT_IP = 5;
    const WIFI2_CLIENT_STATUS_UNKNOWN = 255;
    const WIFI2_AP_ENCRYPTION_OPEN = 0;
    const WIFI2_AP_ENCRYPTION_WEP = 1;
    const WIFI2_AP_ENCRYPTION_WPA_PSK = 2;
    const WIFI2_AP_ENCRYPTION_WPA2_PSK = 3;
    const WIFI2_AP_ENCRYPTION_WPA_WPA2_PSK = 4;
    const WIFI2_MESH_STATUS_DISABLED = 0;
    const WIFI2_MESH_STATUS_WIFI_CONNECTING = 1;
    const WIFI2_MESH_STATUS_GOT_IP = 2;
    const WIFI2_MESH_STATUS_MESH_LOCAL = 3;
    const WIFI2_MESH_STATUS_MESH_ONLINE = 4;
    const WIFI2_MESH_STATUS_AP_AVAILABLE = 5;
    const WIFI2_MESH_STATUS_AP_SETUP = 6;
    const WIFI2_MESH_STATUS_LEAF_AVAILABLE = 7;
    const COMMUNICATION_METHOD_NONE = 0;
    const COMMUNICATION_METHOD_USB = 1;
    const COMMUNICATION_METHOD_SPI_STACK = 2;
    const COMMUNICATION_METHOD_CHIBI = 3;
    const COMMUNICATION_METHOD_RS485 = 4;
    const COMMUNICATION_METHOD_WIFI = 5;
    const COMMUNICATION_METHOD_ETHERNET = 6;
    const COMMUNICATION_METHOD_WIFI_V2 = 7;

    const DEVICE_IDENTIFIER = 13;

    const DEVICE_DISPLAY_NAME = 'Master Brick';

    /**
     * Creates an object with the unique device ID $uid. This object can
     * then be added to the IP connection.
     *
     * @param string $uid
     */
    public function __construct($uid, $ipcon)
    {
        parent::__construct($uid, $ipcon, self::DEVICE_IDENTIFIER, self::DEVICE_DISPLAY_NAME);

        $this->api_version = array(2, 0, 10);

        $this->response_expected[self::FUNCTION_GET_STACK_VOLTAGE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_STACK_CURRENT] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_EXTENSION_TYPE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_EXTENSION_TYPE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_IS_CHIBI_PRESENT] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_CHIBI_ADDRESS] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_CHIBI_ADDRESS] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_CHIBI_MASTER_ADDRESS] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_CHIBI_MASTER_ADDRESS] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_CHIBI_SLAVE_ADDRESS] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_CHIBI_SLAVE_ADDRESS] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_CHIBI_SIGNAL_STRENGTH] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_CHIBI_ERROR_LOG] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_CHIBI_FREQUENCY] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_CHIBI_FREQUENCY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_CHIBI_CHANNEL] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_CHIBI_CHANNEL] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_IS_RS485_PRESENT] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_RS485_ADDRESS] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_RS485_ADDRESS] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_RS485_SLAVE_ADDRESS] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_RS485_SLAVE_ADDRESS] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_RS485_ERROR_LOG] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_RS485_CONFIGURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_RS485_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_IS_WIFI_PRESENT] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_WIFI_CONFIGURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_WIFI_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_WIFI_ENCRYPTION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_WIFI_ENCRYPTION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_WIFI_STATUS] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_REFRESH_WIFI_STATUS] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_SET_WIFI_CERTIFICATE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_WIFI_CERTIFICATE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_WIFI_POWER_MODE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_WIFI_POWER_MODE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_WIFI_BUFFER_INFO] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_WIFI_REGULATORY_DOMAIN] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_WIFI_REGULATORY_DOMAIN] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_USB_VOLTAGE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_LONG_WIFI_KEY] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_LONG_WIFI_KEY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_WIFI_HOSTNAME] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_WIFI_HOSTNAME] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_STACK_CURRENT_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_STACK_CURRENT_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_STACK_VOLTAGE_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_STACK_VOLTAGE_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_USB_VOLTAGE_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_USB_VOLTAGE_CALLBACK_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_STACK_CURRENT_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_STACK_CURRENT_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_STACK_VOLTAGE_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_STACK_VOLTAGE_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_USB_VOLTAGE_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_USB_VOLTAGE_CALLBACK_THRESHOLD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_DEBOUNCE_PERIOD] = self::RESPONSE_EXPECTED_TRUE;
        $this->response_expected[self::FUNCTION_GET_DEBOUNCE_PERIOD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_IS_ETHERNET_PRESENT] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ETHERNET_CONFIGURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_ETHERNET_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_ETHERNET_STATUS] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ETHERNET_HOSTNAME] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_SET_ETHERNET_MAC_ADDRESS] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_SET_ETHERNET_WEBSOCKET_CONFIGURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_ETHERNET_WEBSOCKET_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_ETHERNET_AUTHENTICATION_SECRET] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_ETHERNET_AUTHENTICATION_SECRET] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_WIFI_AUTHENTICATION_SECRET] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_WIFI_AUTHENTICATION_SECRET] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_CONNECTION_TYPE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_IS_WIFI2_PRESENT] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_START_WIFI2_BOOTLOADER] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_WRITE_WIFI2_SERIAL_PORT] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_READ_WIFI2_SERIAL_PORT] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_WIFI2_AUTHENTICATION_SECRET] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_WIFI2_AUTHENTICATION_SECRET] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_WIFI2_CONFIGURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_WIFI2_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_WIFI2_STATUS] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_WIFI2_CLIENT_CONFIGURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_WIFI2_CLIENT_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_WIFI2_CLIENT_HOSTNAME] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_WIFI2_CLIENT_HOSTNAME] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_WIFI2_CLIENT_PASSWORD] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_WIFI2_CLIENT_PASSWORD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_WIFI2_AP_CONFIGURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_WIFI2_AP_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_WIFI2_AP_PASSWORD] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_WIFI2_AP_PASSWORD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SAVE_WIFI2_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_WIFI2_FIRMWARE_VERSION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_ENABLE_WIFI2_STATUS_LED] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_DISABLE_WIFI2_STATUS_LED] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_IS_WIFI2_STATUS_LED_ENABLED] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_WIFI2_MESH_CONFIGURATION] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_WIFI2_MESH_CONFIGURATION] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_WIFI2_MESH_ROUTER_SSID] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_WIFI2_MESH_ROUTER_SSID] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_WIFI2_MESH_ROUTER_PASSWORD] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_WIFI2_MESH_ROUTER_PASSWORD] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_WIFI2_MESH_COMMON_STATUS] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_WIFI2_MESH_CLIENT_STATUS] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_WIFI2_MESH_AP_STATUS] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_BRICKLET_XMC_FLASH_CONFIG] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_BRICKLET_XMC_FLASH_DATA] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_BRICKLETS_ENABLED] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_BRICKLETS_ENABLED] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_SPITFP_BAUDRATE_CONFIG] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_SPITFP_BAUDRATE_CONFIG] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_SEND_TIMEOUT_COUNT] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_SET_SPITFP_BAUDRATE] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_GET_SPITFP_BAUDRATE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_SPITFP_ERROR_COUNT] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_ENABLE_STATUS_LED] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_DISABLE_STATUS_LED] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_IS_STATUS_LED_ENABLED] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_PROTOCOL1_BRICKLET_NAME] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_CHIP_TEMPERATURE] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_RESET] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_WRITE_BRICKLET_PLUGIN] = self::RESPONSE_EXPECTED_FALSE;
        $this->response_expected[self::FUNCTION_READ_BRICKLET_PLUGIN] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;
        $this->response_expected[self::FUNCTION_GET_IDENTITY] = self::RESPONSE_EXPECTED_ALWAYS_TRUE;

        $this->callback_wrappers[self::CALLBACK_STACK_CURRENT] = array(10, 'callbackWrapperStackCurrent');
        $this->callback_wrappers[self::CALLBACK_STACK_VOLTAGE] = array(10, 'callbackWrapperStackVoltage');
        $this->callback_wrappers[self::CALLBACK_USB_VOLTAGE] = array(10, 'callbackWrapperUSBVoltage');
        $this->callback_wrappers[self::CALLBACK_STACK_CURRENT_REACHED] = array(10, 'callbackWrapperStackCurrentReached');
        $this->callback_wrappers[self::CALLBACK_STACK_VOLTAGE_REACHED] = array(10, 'callbackWrapperStackVoltageReached');
        $this->callback_wrappers[self::CALLBACK_USB_VOLTAGE_REACHED] = array(10, 'callbackWrapperUSBVoltageReached');

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
     * Returns the stack voltage. The stack voltage is the
     * voltage that is supplied via the stack, i.e. it is given by a
     * Step-Down or Step-Up Power Supply.
     * 
     * <note>
     *  It is not possible to measure voltages supplied per PoE or USB with this function.
     * </note>
     * 
     * 
     * @return int
     */
    public function getStackVoltage()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_STACK_VOLTAGE, $payload, 10);

        $payload = unpack('v1voltage', $data);

        return $payload['voltage'];
    }

    /**
     * Returns the stack current. The stack current is the
     * current that is drawn via the stack, i.e. it is given by a
     * Step-Down or Step-Up Power Supply.
     * 
     * <note>
     *  It is not possible to measure the current drawn via PoE or USB with this function.
     * </note>
     * 
     * 
     * @return int
     */
    public function getStackCurrent()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_STACK_CURRENT, $payload, 10);

        $payload = unpack('v1current', $data);

        return $payload['current'];
    }

    /**
     * Writes the extension type to the EEPROM of a specified extension.
     * The extension is either 0 or 1 (0 is the lower one, 1 is the upper one,
     * if only one extension is present use 0).
     * 
     * Possible extension types:
     * 
     * <code>
     *  "Type", "Description"
     * 
     *  "1",    "Chibi"
     *  "2",    "RS485"
     *  "3",    "WIFI"
     *  "4",    "Ethernet"
     *  "5",    "WIFI 2.0"
     * </code>
     * 
     * The extension type is already set when bought and it can be set with the
     * Brick Viewer, it is unlikely that you need this function.
     * 
     * @param int $extension
     * @param int $exttype
     * 
     * @return void
     */
    public function setExtensionType($extension, $exttype)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $extension);
        $payload .= pack('V', $exttype);

        $this->sendRequest(self::FUNCTION_SET_EXTENSION_TYPE, $payload, 0);
    }

    /**
     * Returns the type for a given extension as set by BrickMaster::setExtensionType().
     * 
     * @param int $extension
     * 
     * @return int
     */
    public function getExtensionType($extension)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $extension);

        $data = $this->sendRequest(self::FUNCTION_GET_EXTENSION_TYPE, $payload, 12);

        $payload = unpack('V1exttype', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'exttype');
    }

    /**
     * Returns *true* if the Master Brick is at position 0 in the stack and a Chibi
     * Extension is available.
     * 
     * 
     * @return bool
     */
    public function isChibiPresent()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_IS_CHIBI_PRESENT, $payload, 9);

        $payload = unpack('C1present', $data);

        return (bool)$payload['present'];
    }

    /**
     * Sets the address belonging to the Chibi Extension.
     * 
     * It is possible to set the address with the Brick Viewer and it will be
     * saved in the EEPROM of the Chibi Extension, it does not
     * have to be set on every startup.
     * 
     * @param int $address
     * 
     * @return void
     */
    public function setChibiAddress($address)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $address);

        $this->sendRequest(self::FUNCTION_SET_CHIBI_ADDRESS, $payload, 0);
    }

    /**
     * Returns the address as set by BrickMaster::setChibiAddress().
     * 
     * 
     * @return int
     */
    public function getChibiAddress()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_CHIBI_ADDRESS, $payload, 9);

        $payload = unpack('C1address', $data);

        return $payload['address'];
    }

    /**
     * Sets the address of the Chibi Master. This address is used if the
     * Chibi Extension is used as slave (i.e. it does not have a USB connection).
     * 
     * It is possible to set the address with the Brick Viewer and it will be
     * saved in the EEPROM of the Chibi Extension, it does not
     * have to be set on every startup.
     * 
     * @param int $address
     * 
     * @return void
     */
    public function setChibiMasterAddress($address)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $address);

        $this->sendRequest(self::FUNCTION_SET_CHIBI_MASTER_ADDRESS, $payload, 0);
    }

    /**
     * Returns the address as set by BrickMaster::setChibiMasterAddress().
     * 
     * 
     * @return int
     */
    public function getChibiMasterAddress()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_CHIBI_MASTER_ADDRESS, $payload, 9);

        $payload = unpack('C1address', $data);

        return $payload['address'];
    }

    /**
     * Sets up to 254 slave addresses. 0 has a
     * special meaning, it is used as list terminator and not allowed as normal slave
     * address. The address numeration (via num parameter) has to be used
     * ascending from 0. For example: If you use the Chibi Extension in Master mode
     * (i.e. the stack has an USB connection) and you want to talk to three other
     * Chibi stacks with the slave addresses 17, 23, and 42, you should call with
     * ``(0, 17)``, ``(1, 23)``, ``(2, 42)`` and ``(3, 0)``. The last call with
     * ``(3, 0)`` is a list terminator and indicates that the Chibi slave address
     * list contains 3 addresses in this case.
     * 
     * It is possible to set the addresses with the Brick Viewer, that will take care
     * of correct address numeration and list termination.
     * 
     * The slave addresses will be saved in the EEPROM of the Chibi Extension, they
     * don't have to be set on every startup.
     * 
     * @param int $num
     * @param int $address
     * 
     * @return void
     */
    public function setChibiSlaveAddress($num, $address)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $num);
        $payload .= pack('C', $address);

        $this->sendRequest(self::FUNCTION_SET_CHIBI_SLAVE_ADDRESS, $payload, 0);
    }

    /**
     * Returns the slave address for a given num as set by
     * BrickMaster::setChibiSlaveAddress().
     * 
     * @param int $num
     * 
     * @return int
     */
    public function getChibiSlaveAddress($num)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $num);

        $data = $this->sendRequest(self::FUNCTION_GET_CHIBI_SLAVE_ADDRESS, $payload, 9);

        $payload = unpack('C1address', $data);

        return $payload['address'];
    }

    /**
     * Returns the signal strength in dBm. The signal strength updates every time a
     * packet is received.
     * 
     * 
     * @return int
     */
    public function getChibiSignalStrength()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_CHIBI_SIGNAL_STRENGTH, $payload, 9);

        $payload = unpack('C1signal_strength', $data);

        return $payload['signal_strength'];
    }

    /**
     * Returns underrun, CRC error, no ACK and overflow error counts of the Chibi
     * communication. If these errors start rising, it is likely that either the
     * distance between two Chibi stacks is becoming too big or there are
     * interferences.
     * 
     * 
     * @return array
     */
    public function getChibiErrorLog()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_CHIBI_ERROR_LOG, $payload, 16);

        $payload = unpack('v1underrun/v1crc_error/v1no_ack/v1overflow', $data);

        $ret['underrun'] = $payload['underrun'];
        $ret['crc_error'] = $payload['crc_error'];
        $ret['no_ack'] = $payload['no_ack'];
        $ret['overflow'] = $payload['overflow'];

        return $ret;
    }

    /**
     * Sets the Chibi frequency range for the Chibi Extension. Possible values are:
     * 
     * <code>
     *  "Type", "Description"
     * 
     *  "0",    "OQPSK 868MHz (Europe)"
     *  "1",    "OQPSK 915MHz (US)"
     *  "2",    "OQPSK 780MHz (China)"
     *  "3",    "BPSK40 915MHz"
     * </code>
     * 
     * It is possible to set the frequency with the Brick Viewer and it will be
     * saved in the EEPROM of the Chibi Extension, it does not
     * have to be set on every startup.
     * 
     * @param int $frequency
     * 
     * @return void
     */
    public function setChibiFrequency($frequency)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $frequency);

        $this->sendRequest(self::FUNCTION_SET_CHIBI_FREQUENCY, $payload, 0);
    }

    /**
     * Returns the frequency value as set by BrickMaster::setChibiFrequency().
     * 
     * 
     * @return int
     */
    public function getChibiFrequency()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_CHIBI_FREQUENCY, $payload, 9);

        $payload = unpack('C1frequency', $data);

        return $payload['frequency'];
    }

    /**
     * Sets the channel used by the Chibi Extension. Possible channels are
     * different for different frequencies:
     * 
     * <code>
     *  "Frequency", "Possible Channels"
     * 
     *  "OQPSK 868MHz (Europe)", "0"
     *  "OQPSK 915MHz (US)",     "1, 2, 3, 4, 5, 6, 7, 8, 9, 10"
     *  "OQPSK 780MHz (China)",  "0, 1, 2, 3"
     *  "BPSK40 915MHz",         "1, 2, 3, 4, 5, 6, 7, 8, 9, 10"
     * </code>
     * 
     * It is possible to set the channel with the Brick Viewer and it will be
     * saved in the EEPROM of the Chibi Extension, it does not
     * have to be set on every startup.
     * 
     * @param int $channel
     * 
     * @return void
     */
    public function setChibiChannel($channel)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $channel);

        $this->sendRequest(self::FUNCTION_SET_CHIBI_CHANNEL, $payload, 0);
    }

    /**
     * Returns the channel as set by BrickMaster::setChibiChannel().
     * 
     * 
     * @return int
     */
    public function getChibiChannel()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_CHIBI_CHANNEL, $payload, 9);

        $payload = unpack('C1channel', $data);

        return $payload['channel'];
    }

    /**
     * Returns *true* if the Master Brick is at position 0 in the stack and a RS485
     * Extension is available.
     * 
     * 
     * @return bool
     */
    public function isRS485Present()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_IS_RS485_PRESENT, $payload, 9);

        $payload = unpack('C1present', $data);

        return (bool)$payload['present'];
    }

    /**
     * Sets the address (0-255) belonging to the RS485 Extension.
     * 
     * Set to 0 if the RS485 Extension should be the RS485 Master (i.e.
     * connected to a PC via USB).
     * 
     * It is possible to set the address with the Brick Viewer and it will be
     * saved in the EEPROM of the RS485 Extension, it does not
     * have to be set on every startup.
     * 
     * @param int $address
     * 
     * @return void
     */
    public function setRS485Address($address)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $address);

        $this->sendRequest(self::FUNCTION_SET_RS485_ADDRESS, $payload, 0);
    }

    /**
     * Returns the address as set by BrickMaster::setRS485Address().
     * 
     * 
     * @return int
     */
    public function getRS485Address()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_RS485_ADDRESS, $payload, 9);

        $payload = unpack('C1address', $data);

        return $payload['address'];
    }

    /**
     * Sets up to 255 slave addresses. Valid addresses are in range 1-255. 0 has a
     * special meaning, it is used as list terminator and not allowed as normal slave
     * address. The address numeration (via ``num`` parameter) has to be used
     * ascending from 0. For example: If you use the RS485 Extension in Master mode
     * (i.e. the stack has an USB connection) and you want to talk to three other
     * RS485 stacks with the addresses 17, 23, and 42, you should call with
     * ``(0, 17)``, ``(1, 23)``, ``(2, 42)`` and ``(3, 0)``. The last call with
     * ``(3, 0)`` is a list terminator and indicates that the RS485 slave address list
     * contains 3 addresses in this case.
     * 
     * It is possible to set the addresses with the Brick Viewer, that will take care
     * of correct address numeration and list termination.
     * 
     * The slave addresses will be saved in the EEPROM of the Chibi Extension, they
     * don't have to be set on every startup.
     * 
     * @param int $num
     * @param int $address
     * 
     * @return void
     */
    public function setRS485SlaveAddress($num, $address)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $num);
        $payload .= pack('C', $address);

        $this->sendRequest(self::FUNCTION_SET_RS485_SLAVE_ADDRESS, $payload, 0);
    }

    /**
     * Returns the slave address for a given ``num`` as set by
     * BrickMaster::setRS485SlaveAddress().
     * 
     * @param int $num
     * 
     * @return int
     */
    public function getRS485SlaveAddress($num)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $num);

        $data = $this->sendRequest(self::FUNCTION_GET_RS485_SLAVE_ADDRESS, $payload, 9);

        $payload = unpack('C1address', $data);

        return $payload['address'];
    }

    /**
     * Returns CRC error counts of the RS485 communication.
     * If this counter starts rising, it is likely that the distance
     * between the RS485 nodes is too big or there is some kind of
     * interference.
     * 
     * 
     * @return int
     */
    public function getRS485ErrorLog()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_RS485_ERROR_LOG, $payload, 10);

        $payload = unpack('v1crc_error', $data);

        return $payload['crc_error'];
    }

    /**
     * Sets the configuration of the RS485 Extension. The
     * Master Brick will try to match the given baud rate as exactly as possible.
     * The maximum recommended baud rate is 2000000 (2MBd).
     * Possible values for parity are 'n' (none), 'e' (even) and 'o' (odd).
     * 
     * If your RS485 is unstable (lost messages etc.), the first thing you should
     * try is to decrease the speed. On very large bus (e.g. 1km), you probably
     * should use a value in the range of 100000 (100kBd).
     * 
     * The values are stored in the EEPROM and only applied on startup. That means
     * you have to restart the Master Brick after configuration.
     * 
     * @param int $speed
     * @param string $parity
     * @param int $stopbits
     * 
     * @return void
     */
    public function setRS485Configuration($speed, $parity, $stopbits)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $speed);
        $payload .= pack('c', ord($parity));
        $payload .= pack('C', $stopbits);

        $this->sendRequest(self::FUNCTION_SET_RS485_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the configuration as set by BrickMaster::setRS485Configuration().
     * 
     * 
     * @return array
     */
    public function getRS485Configuration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_RS485_CONFIGURATION, $payload, 14);

        $payload = unpack('V1speed/c1parity/C1stopbits', $data);

        $ret['speed'] = IPConnection::fixUnpackedUInt32($payload, 'speed');
        $ret['parity'] = chr($payload['parity']);
        $ret['stopbits'] = $payload['stopbits'];

        return $ret;
    }

    /**
     * Returns *true* if the Master Brick is at position 0 in the stack and a WIFI
     * Extension is available.
     * 
     * 
     * @return bool
     */
    public function isWifiPresent()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_IS_WIFI_PRESENT, $payload, 9);

        $payload = unpack('C1present', $data);

        return (bool)$payload['present'];
    }

    /**
     * Sets the configuration of the WIFI Extension. The ``ssid`` can have a max length
     * of 32 characters. Possible values for ``connection`` are:
     * 
     * <code>
     *  "Value", "Description"
     * 
     *  "0", "DHCP"
     *  "1", "Static IP"
     *  "2", "Access Point: DHCP"
     *  "3", "Access Point: Static IP"
     *  "4", "Ad Hoc: DHCP"
     *  "5", "Ad Hoc: Static IP"
     * </code>
     * 
     * If you set ``connection`` to one of the static IP options then you have to
     * supply ``ip``, ``subnet_mask`` and ``gateway`` as an array of size 4 (first
     * element of the array is the least significant byte of the address). If
     * ``connection`` is set to one of the DHCP options then ``ip``, ``subnet_mask``
     * and ``gateway`` are ignored, you can set them to 0.
     * 
     * The last parameter is the port that your program will connect to.
     * 
     * The values are stored in the EEPROM and only applied on startup. That means
     * you have to restart the Master Brick after configuration.
     * 
     * It is recommended to use the Brick Viewer to set the WIFI configuration.
     * 
     * @param string $ssid
     * @param int $connection
     * @param int[] $ip
     * @param int[] $subnet_mask
     * @param int[] $gateway
     * @param int $port
     * 
     * @return void
     */
    public function setWifiConfiguration($ssid, $connection, $ip, $subnet_mask, $gateway, $port)
    {
        $this->checkValidity();

        $payload = '';
        for ($i = 0; $i < strlen($ssid) && $i < 32; $i++) {
            $payload .= pack('c', ord($ssid[$i]));
        }
        for ($i = strlen($ssid); $i < 32; $i++) {
            $payload .= pack('c', 0);
        }
        $payload .= pack('C', $connection);
        for ($i = 0; $i < 4; $i++) {
            $payload .= pack('C', $ip[$i]);
        }
        for ($i = 0; $i < 4; $i++) {
            $payload .= pack('C', $subnet_mask[$i]);
        }
        for ($i = 0; $i < 4; $i++) {
            $payload .= pack('C', $gateway[$i]);
        }
        $payload .= pack('v', $port);

        $this->sendRequest(self::FUNCTION_SET_WIFI_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the configuration as set by BrickMaster::setWifiConfiguration().
     * 
     * 
     * @return array
     */
    public function getWifiConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_WIFI_CONFIGURATION, $payload, 55);

        $payload = unpack('c32ssid/C1connection/C4ip/C4subnet_mask/C4gateway/v1port', $data);

        $ret['ssid'] = IPConnection::implodeUnpackedString($payload, 'ssid', 32);
        $ret['connection'] = $payload['connection'];
        $ret['ip'] = IPConnection::collectUnpackedArray($payload, 'ip', 4);
        $ret['subnet_mask'] = IPConnection::collectUnpackedArray($payload, 'subnet_mask', 4);
        $ret['gateway'] = IPConnection::collectUnpackedArray($payload, 'gateway', 4);
        $ret['port'] = $payload['port'];

        return $ret;
    }

    /**
     * Sets the encryption of the WIFI Extension. The first parameter is the
     * type of the encryption. Possible values are:
     * 
     * <code>
     *  "Value", "Description"
     * 
     *  "0", "WPA/WPA2"
     *  "1", "WPA Enterprise (EAP-FAST, EAP-TLS, EAP-TTLS, PEAP)"
     *  "2", "WEP"
     *  "3", "No Encryption"
     * </code>
     * 
     * The ``key`` has a max length of 50 characters and is used if ``encryption``
     * is set to 0 or 2 (WPA/WPA2 or WEP). Otherwise the value is ignored.
     * 
     * For WPA/WPA2 the key has to be at least 8 characters long. If you want to set
     * a key with more than 50 characters, see BrickMaster::setLongWifiKey().
     * 
     * For WEP the key has to be either 10 or 26 hexadecimal digits long. It is
     * possible to set the WEP ``key_index`` (1-4). If you don't know your
     * ``key_index``, it is likely 1.
     * 
     * If you choose WPA Enterprise as encryption, you have to set ``eap_options`` and
     * the length of the certificates (for other encryption types these parameters
     * are ignored). The certificates
     * themselves can be set with BrickMaster::setWifiCertificate(). ``eap_options`` consist
     * of the outer authentication (bits 1-2), inner authentication (bit 3) and
     * certificate type (bits 4-5):
     * 
     * <code>
     *  "Option", "Bits", "Description"
     * 
     *  "outer authentication", "1-2", "0=EAP-FAST, 1=EAP-TLS, 2=EAP-TTLS, 3=EAP-PEAP"
     *  "inner authentication", "3", "0=EAP-MSCHAP, 1=EAP-GTC"
     *  "certificate type", "4-5", "0=CA Certificate, 1=Client Certificate, 2=Private Key"
     * </code>
     * 
     * Example for EAP-TTLS + EAP-GTC + Private Key: ``option = 2 | (1 << 2) | (2 << 3)``.
     * 
     * The values are stored in the EEPROM and only applied on startup. That means
     * you have to restart the Master Brick after configuration.
     * 
     * It is recommended to use the Brick Viewer to set the Wi-Fi encryption.
     * 
     * @param int $encryption
     * @param string $key
     * @param int $key_index
     * @param int $eap_options
     * @param int $ca_certificate_length
     * @param int $client_certificate_length
     * @param int $private_key_length
     * 
     * @return void
     */
    public function setWifiEncryption($encryption, $key, $key_index, $eap_options, $ca_certificate_length, $client_certificate_length, $private_key_length)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $encryption);
        for ($i = 0; $i < strlen($key) && $i < 50; $i++) {
            $payload .= pack('c', ord($key[$i]));
        }
        for ($i = strlen($key); $i < 50; $i++) {
            $payload .= pack('c', 0);
        }
        $payload .= pack('C', $key_index);
        $payload .= pack('C', $eap_options);
        $payload .= pack('v', $ca_certificate_length);
        $payload .= pack('v', $client_certificate_length);
        $payload .= pack('v', $private_key_length);

        $this->sendRequest(self::FUNCTION_SET_WIFI_ENCRYPTION, $payload, 0);
    }

    /**
     * Returns the encryption as set by BrickMaster::setWifiEncryption().
     * 
     * <note>
     *  Since Master Brick Firmware version 2.4.4 the key is not returned anymore.
     * </note>
     * 
     * 
     * @return array
     */
    public function getWifiEncryption()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_WIFI_ENCRYPTION, $payload, 67);

        $payload = unpack('C1encryption/c50key/C1key_index/C1eap_options/v1ca_certificate_length/v1client_certificate_length/v1private_key_length', $data);

        $ret['encryption'] = $payload['encryption'];
        $ret['key'] = IPConnection::implodeUnpackedString($payload, 'key', 50);
        $ret['key_index'] = $payload['key_index'];
        $ret['eap_options'] = $payload['eap_options'];
        $ret['ca_certificate_length'] = $payload['ca_certificate_length'];
        $ret['client_certificate_length'] = $payload['client_certificate_length'];
        $ret['private_key_length'] = $payload['private_key_length'];

        return $ret;
    }

    /**
     * Returns the status of the WIFI Extension. The ``state`` is updated automatically,
     * all of the other parameters are updated on startup and every time
     * BrickMaster::refreshWifiStatus() is called.
     * 
     * Possible states are:
     * 
     * <code>
     *  "State", "Description"
     * 
     *  "0", "Disassociated"
     *  "1", "Associated"
     *  "2", "Associating"
     *  "3", "Error"
     *  "255", "Not initialized yet"
     * </code>
     * 
     * 
     * @return array
     */
    public function getWifiStatus()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_WIFI_STATUS, $payload, 44);

        $payload = unpack('C6mac_address/C6bssid/C1channel/v1rssi/C4ip/C4subnet_mask/C4gateway/V1rx_count/V1tx_count/C1state', $data);

        $ret['mac_address'] = IPConnection::collectUnpackedArray($payload, 'mac_address', 6);
        $ret['bssid'] = IPConnection::collectUnpackedArray($payload, 'bssid', 6);
        $ret['channel'] = $payload['channel'];
        $ret['rssi'] = IPConnection::fixUnpackedInt16($payload, 'rssi');
        $ret['ip'] = IPConnection::collectUnpackedArray($payload, 'ip', 4);
        $ret['subnet_mask'] = IPConnection::collectUnpackedArray($payload, 'subnet_mask', 4);
        $ret['gateway'] = IPConnection::collectUnpackedArray($payload, 'gateway', 4);
        $ret['rx_count'] = IPConnection::fixUnpackedUInt32($payload, 'rx_count');
        $ret['tx_count'] = IPConnection::fixUnpackedUInt32($payload, 'tx_count');
        $ret['state'] = $payload['state'];

        return $ret;
    }

    /**
     * Refreshes the Wi-Fi status (see BrickMaster::getWifiStatus()). To read the status
     * of the Wi-Fi module, the Master Brick has to change from data mode to
     * command mode and back. This transaction and the readout itself is
     * unfortunately time consuming. This means, that it might take some ms
     * until the stack with attached WIFI Extension reacts again after this
     * function is called.
     * 
     * 
     * @return void
     */
    public function refreshWifiStatus()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_REFRESH_WIFI_STATUS, $payload, 0);
    }

    /**
     * This function is used to set the certificate as well as password and username
     * for WPA Enterprise. To set the username use index 0xFFFF,
     * to set the password use index 0xFFFE. The max length of username and
     * password is 32.
     * 
     * The certificate is written in chunks of size 32 and the index is used as
     * the index of the chunk. ``data_length`` should nearly always be 32. Only
     * the last chunk can have a length that is not equal to 32.
     * 
     * The starting index of the CA Certificate is 0, of the Client Certificate
     * 10000 and for the Private Key 20000. Maximum sizes are 1312, 1312 and
     * 4320 byte respectively.
     * 
     * The values are stored in the EEPROM and only applied on startup. That means
     * you have to restart the Master Brick after uploading the certificate.
     * 
     * It is recommended to use the Brick Viewer to set the certificate, username
     * and password.
     * 
     * @param int $index
     * @param int[] $data
     * @param int $data_length
     * 
     * @return void
     */
    public function setWifiCertificate($index, $data, $data_length)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $index);
        for ($i = 0; $i < 32; $i++) {
            $payload .= pack('C', $data[$i]);
        }
        $payload .= pack('C', $data_length);

        $this->sendRequest(self::FUNCTION_SET_WIFI_CERTIFICATE, $payload, 0);
    }

    /**
     * Returns the certificate for a given index as set by BrickMaster::setWifiCertificate().
     * 
     * @param int $index
     * 
     * @return array
     */
    public function getWifiCertificate($index)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('v', $index);

        $data = $this->sendRequest(self::FUNCTION_GET_WIFI_CERTIFICATE, $payload, 41);

        $payload = unpack('C32data/C1data_length', $data);

        $ret['data'] = IPConnection::collectUnpackedArray($payload, 'data', 32);
        $ret['data_length'] = $payload['data_length'];

        return $ret;
    }

    /**
     * Sets the power mode of the WIFI Extension. Possible modes are:
     * 
     * <code>
     *  "Mode", "Description"
     * 
     *  "0", "Full Speed (high power consumption, high throughput)"
     *  "1", "Low Power (low power consumption, low throughput)"
     * </code>
     * 
     * @param int $mode
     * 
     * @return void
     */
    public function setWifiPowerMode($mode)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $mode);

        $this->sendRequest(self::FUNCTION_SET_WIFI_POWER_MODE, $payload, 0);
    }

    /**
     * Returns the power mode as set by BrickMaster::setWifiPowerMode().
     * 
     * 
     * @return int
     */
    public function getWifiPowerMode()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_WIFI_POWER_MODE, $payload, 9);

        $payload = unpack('C1mode', $data);

        return $payload['mode'];
    }

    /**
     * Returns informations about the Wi-Fi receive buffer. The Wi-Fi
     * receive buffer has a max size of 1500 byte and if data is transfered
     * too fast, it might overflow.
     * 
     * The return values are the number of overflows, the low watermark
     * (i.e. the smallest number of bytes that were free in the buffer) and
     * the bytes that are currently used.
     * 
     * You should always try to keep the buffer empty, otherwise you will
     * have a permanent latency. A good rule of thumb is, that you can transfer
     * 1000 messages per second without problems.
     * 
     * Try to not send more then 50 messages at a time without any kind of
     * break between them.
     * 
     * 
     * @return array
     */
    public function getWifiBufferInfo()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_WIFI_BUFFER_INFO, $payload, 16);

        $payload = unpack('V1overflow/v1low_watermark/v1used', $data);

        $ret['overflow'] = IPConnection::fixUnpackedUInt32($payload, 'overflow');
        $ret['low_watermark'] = $payload['low_watermark'];
        $ret['used'] = $payload['used'];

        return $ret;
    }

    /**
     * Sets the regulatory domain of the WIFI Extension. Possible domains are:
     * 
     * <code>
     *  "Domain", "Description"
     * 
     *  "0", "FCC: Channel 1-11 (N/S America, Australia, New Zealand)"
     *  "1", "ETSI: Channel 1-13 (Europe, Middle East, Africa)"
     *  "2", "TELEC: Channel 1-14 (Japan)"
     * </code>
     * 
     * @param int $domain
     * 
     * @return void
     */
    public function setWifiRegulatoryDomain($domain)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $domain);

        $this->sendRequest(self::FUNCTION_SET_WIFI_REGULATORY_DOMAIN, $payload, 0);
    }

    /**
     * Returns the regulatory domain as set by BrickMaster::setWifiRegulatoryDomain().
     * 
     * 
     * @return int
     */
    public function getWifiRegulatoryDomain()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_WIFI_REGULATORY_DOMAIN, $payload, 9);

        $payload = unpack('C1domain', $data);

        return $payload['domain'];
    }

    /**
     * Returns the USB voltage. Does not work with hardware version 2.1.
     * 
     * 
     * @return int
     */
    public function getUSBVoltage()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_USB_VOLTAGE, $payload, 10);

        $payload = unpack('v1voltage', $data);

        return $payload['voltage'];
    }

    /**
     * Sets a long Wi-Fi key (up to 63 chars, at least 8 chars) for WPA encryption.
     * This key will be used
     * if the key in BrickMaster::setWifiEncryption() is set to "-". In the old protocol,
     * a payload of size 63 was not possible, so the maximum key length was 50 chars.
     * 
     * With the new protocol this is possible, since we didn't want to break API,
     * this function was added additionally.
     * 
     * .. versionadded:: 2.0.2$nbsp;(Firmware)
     * 
     * @param string $key
     * 
     * @return void
     */
    public function setLongWifiKey($key)
    {
        $this->checkValidity();

        $payload = '';
        for ($i = 0; $i < strlen($key) && $i < 64; $i++) {
            $payload .= pack('c', ord($key[$i]));
        }
        for ($i = strlen($key); $i < 64; $i++) {
            $payload .= pack('c', 0);
        }

        $this->sendRequest(self::FUNCTION_SET_LONG_WIFI_KEY, $payload, 0);
    }

    /**
     * Returns the encryption key as set by BrickMaster::setLongWifiKey().
     * 
     * <note>
     *  Since Master Brick firmware version 2.4.4 the key is not returned anymore.
     * </note>
     * 
     * .. versionadded:: 2.0.2$nbsp;(Firmware)
     * 
     * 
     * @return string
     */
    public function getLongWifiKey()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_LONG_WIFI_KEY, $payload, 72);

        $payload = unpack('c64key', $data);

        return IPConnection::implodeUnpackedString($payload, 'key', 64);
    }

    /**
     * Sets the hostname of the WIFI Extension. The hostname will be displayed
     * by access points as the hostname in the DHCP clients table.
     * 
     * Setting an empty String will restore the default hostname.
     * 
     * .. versionadded:: 2.0.5$nbsp;(Firmware)
     * 
     * @param string $hostname
     * 
     * @return void
     */
    public function setWifiHostname($hostname)
    {
        $this->checkValidity();

        $payload = '';
        for ($i = 0; $i < strlen($hostname) && $i < 16; $i++) {
            $payload .= pack('c', ord($hostname[$i]));
        }
        for ($i = strlen($hostname); $i < 16; $i++) {
            $payload .= pack('c', 0);
        }

        $this->sendRequest(self::FUNCTION_SET_WIFI_HOSTNAME, $payload, 0);
    }

    /**
     * Returns the hostname as set by BrickMaster::setWifiHostname().
     * 
     * An empty String means, that the default hostname is used.
     * 
     * .. versionadded:: 2.0.5$nbsp;(Firmware)
     * 
     * 
     * @return string
     */
    public function getWifiHostname()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_WIFI_HOSTNAME, $payload, 24);

        $payload = unpack('c16hostname', $data);

        return IPConnection::implodeUnpackedString($payload, 'hostname', 16);
    }

    /**
     * Sets the period with which the BrickMaster::CALLBACK_STACK_CURRENT callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * The BrickMaster::CALLBACK_STACK_CURRENT callback is only triggered if the current has changed
     * since the last triggering.
     * 
     * .. versionadded:: 2.0.5$nbsp;(Firmware)
     * 
     * @param int $period
     * 
     * @return void
     */
    public function setStackCurrentCallbackPeriod($period)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);

        $this->sendRequest(self::FUNCTION_SET_STACK_CURRENT_CALLBACK_PERIOD, $payload, 0);
    }

    /**
     * Returns the period as set by BrickMaster::setStackCurrentCallbackPeriod().
     * 
     * .. versionadded:: 2.0.5$nbsp;(Firmware)
     * 
     * 
     * @return int
     */
    public function getStackCurrentCallbackPeriod()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_STACK_CURRENT_CALLBACK_PERIOD, $payload, 12);

        $payload = unpack('V1period', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'period');
    }

    /**
     * Sets the period with which the BrickMaster::CALLBACK_STACK_VOLTAGE callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * The BrickMaster::CALLBACK_STACK_VOLTAGE callback is only triggered if the voltage has changed
     * since the last triggering.
     * 
     * .. versionadded:: 2.0.5$nbsp;(Firmware)
     * 
     * @param int $period
     * 
     * @return void
     */
    public function setStackVoltageCallbackPeriod($period)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);

        $this->sendRequest(self::FUNCTION_SET_STACK_VOLTAGE_CALLBACK_PERIOD, $payload, 0);
    }

    /**
     * Returns the period as set by BrickMaster::setStackVoltageCallbackPeriod().
     * 
     * .. versionadded:: 2.0.5$nbsp;(Firmware)
     * 
     * 
     * @return int
     */
    public function getStackVoltageCallbackPeriod()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_STACK_VOLTAGE_CALLBACK_PERIOD, $payload, 12);

        $payload = unpack('V1period', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'period');
    }

    /**
     * Sets the period with which the BrickMaster::CALLBACK_USB_VOLTAGE callback is triggered
     * periodically. A value of 0 turns the callback off.
     * 
     * The BrickMaster::CALLBACK_USB_VOLTAGE callback is only triggered if the voltage has changed
     * since the last triggering.
     * 
     * .. versionadded:: 2.0.5$nbsp;(Firmware)
     * 
     * @param int $period
     * 
     * @return void
     */
    public function setUSBVoltageCallbackPeriod($period)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $period);

        $this->sendRequest(self::FUNCTION_SET_USB_VOLTAGE_CALLBACK_PERIOD, $payload, 0);
    }

    /**
     * Returns the period as set by BrickMaster::setUSBVoltageCallbackPeriod().
     * 
     * .. versionadded:: 2.0.5$nbsp;(Firmware)
     * 
     * 
     * @return int
     */
    public function getUSBVoltageCallbackPeriod()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_USB_VOLTAGE_CALLBACK_PERIOD, $payload, 12);

        $payload = unpack('V1period', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'period');
    }

    /**
     * Sets the thresholds for the BrickMaster::CALLBACK_STACK_CURRENT_REACHED callback.
     * 
     * The following options are possible:
     * 
     * <code>
     *  "Option", "Description"
     * 
     *  "'x'",    "Callback is turned off"
     *  "'o'",    "Callback is triggered when the current is *outside* the min and max values"
     *  "'i'",    "Callback is triggered when the current is *inside* the min and max values"
     *  "'<'",    "Callback is triggered when the current is smaller than the min value (max is ignored)"
     *  "'>'",    "Callback is triggered when the current is greater than the min value (max is ignored)"
     * </code>
     * 
     * .. versionadded:: 2.0.5$nbsp;(Firmware)
     * 
     * @param string $option
     * @param int $min
     * @param int $max
     * 
     * @return void
     */
    public function setStackCurrentCallbackThreshold($option, $min, $max)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('c', ord($option));
        $payload .= pack('v', $min);
        $payload .= pack('v', $max);

        $this->sendRequest(self::FUNCTION_SET_STACK_CURRENT_CALLBACK_THRESHOLD, $payload, 0);
    }

    /**
     * Returns the threshold as set by BrickMaster::setStackCurrentCallbackThreshold().
     * 
     * .. versionadded:: 2.0.5$nbsp;(Firmware)
     * 
     * 
     * @return array
     */
    public function getStackCurrentCallbackThreshold()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_STACK_CURRENT_CALLBACK_THRESHOLD, $payload, 13);

        $payload = unpack('c1option/v1min/v1max', $data);

        $ret['option'] = chr($payload['option']);
        $ret['min'] = $payload['min'];
        $ret['max'] = $payload['max'];

        return $ret;
    }

    /**
     * Sets the thresholds for the BrickMaster::CALLBACK_STACK_VOLTAGE_REACHED callback.
     * 
     * The following options are possible:
     * 
     * <code>
     *  "Option", "Description"
     * 
     *  "'x'",    "Callback is turned off"
     *  "'o'",    "Callback is triggered when the voltage is *outside* the min and max values"
     *  "'i'",    "Callback is triggered when the voltage is *inside* the min and max values"
     *  "'<'",    "Callback is triggered when the voltage is smaller than the min value (max is ignored)"
     *  "'>'",    "Callback is triggered when the voltage is greater than the min value (max is ignored)"
     * </code>
     * 
     * .. versionadded:: 2.0.5$nbsp;(Firmware)
     * 
     * @param string $option
     * @param int $min
     * @param int $max
     * 
     * @return void
     */
    public function setStackVoltageCallbackThreshold($option, $min, $max)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('c', ord($option));
        $payload .= pack('v', $min);
        $payload .= pack('v', $max);

        $this->sendRequest(self::FUNCTION_SET_STACK_VOLTAGE_CALLBACK_THRESHOLD, $payload, 0);
    }

    /**
     * Returns the threshold as set by BrickMaster::setStackVoltageCallbackThreshold().
     * 
     * .. versionadded:: 2.0.5$nbsp;(Firmware)
     * 
     * 
     * @return array
     */
    public function getStackVoltageCallbackThreshold()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_STACK_VOLTAGE_CALLBACK_THRESHOLD, $payload, 13);

        $payload = unpack('c1option/v1min/v1max', $data);

        $ret['option'] = chr($payload['option']);
        $ret['min'] = $payload['min'];
        $ret['max'] = $payload['max'];

        return $ret;
    }

    /**
     * Sets the thresholds for the BrickMaster::CALLBACK_USB_VOLTAGE_REACHED callback.
     * 
     * The following options are possible:
     * 
     * <code>
     *  "Option", "Description"
     * 
     *  "'x'",    "Callback is turned off"
     *  "'o'",    "Callback is triggered when the voltage is *outside* the min and max values"
     *  "'i'",    "Callback is triggered when the voltage is *inside* the min and max values"
     *  "'<'",    "Callback is triggered when the voltage is smaller than the min value (max is ignored)"
     *  "'>'",    "Callback is triggered when the voltage is greater than the min value (max is ignored)"
     * </code>
     * 
     * .. versionadded:: 2.0.5$nbsp;(Firmware)
     * 
     * @param string $option
     * @param int $min
     * @param int $max
     * 
     * @return void
     */
    public function setUSBVoltageCallbackThreshold($option, $min, $max)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('c', ord($option));
        $payload .= pack('v', $min);
        $payload .= pack('v', $max);

        $this->sendRequest(self::FUNCTION_SET_USB_VOLTAGE_CALLBACK_THRESHOLD, $payload, 0);
    }

    /**
     * Returns the threshold as set by BrickMaster::setUSBVoltageCallbackThreshold().
     * 
     * .. versionadded:: 2.0.5$nbsp;(Firmware)
     * 
     * 
     * @return array
     */
    public function getUSBVoltageCallbackThreshold()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_USB_VOLTAGE_CALLBACK_THRESHOLD, $payload, 13);

        $payload = unpack('c1option/v1min/v1max', $data);

        $ret['option'] = chr($payload['option']);
        $ret['min'] = $payload['min'];
        $ret['max'] = $payload['max'];

        return $ret;
    }

    /**
     * Sets the period with which the threshold callbacks
     * 
     * * BrickMaster::CALLBACK_STACK_CURRENT_REACHED,
     * * BrickMaster::CALLBACK_STACK_VOLTAGE_REACHED,
     * * BrickMaster::CALLBACK_USB_VOLTAGE_REACHED
     * 
     * are triggered, if the thresholds
     * 
     * * BrickMaster::setStackCurrentCallbackThreshold(),
     * * BrickMaster::setStackVoltageCallbackThreshold(),
     * * BrickMaster::setUSBVoltageCallbackThreshold()
     * 
     * keep being reached.
     * 
     * .. versionadded:: 2.0.5$nbsp;(Firmware)
     * 
     * @param int $debounce
     * 
     * @return void
     */
    public function setDebouncePeriod($debounce)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('V', $debounce);

        $this->sendRequest(self::FUNCTION_SET_DEBOUNCE_PERIOD, $payload, 0);
    }

    /**
     * Returns the debounce period as set by BrickMaster::setDebouncePeriod().
     * 
     * .. versionadded:: 2.0.5$nbsp;(Firmware)
     * 
     * 
     * @return int
     */
    public function getDebouncePeriod()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_DEBOUNCE_PERIOD, $payload, 12);

        $payload = unpack('V1debounce', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'debounce');
    }

    /**
     * Returns *true* if the Master Brick is at position 0 in the stack and an Ethernet
     * Extension is available.
     * 
     * .. versionadded:: 2.1.0$nbsp;(Firmware)
     * 
     * 
     * @return bool
     */
    public function isEthernetPresent()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_IS_ETHERNET_PRESENT, $payload, 9);

        $payload = unpack('C1present', $data);

        return (bool)$payload['present'];
    }

    /**
     * Sets the configuration of the Ethernet Extension. Possible values for
     * ``connection`` are:
     * 
     * <code>
     *  "Value", "Description"
     * 
     *  "0", "DHCP"
     *  "1", "Static IP"
     * </code>
     * 
     * If you set ``connection`` to static IP options then you have to supply ``ip``,
     * ``subnet_mask`` and ``gateway`` as an array of size 4 (first element of the
     * array is the least significant byte of the address). If ``connection`` is set
     * to the DHCP options then ``ip``, ``subnet_mask`` and ``gateway`` are ignored,
     * you can set them to 0.
     * 
     * The last parameter is the port that your program will connect to.
     * 
     * The values are stored in the EEPROM and only applied on startup. That means
     * you have to restart the Master Brick after configuration.
     * 
     * It is recommended to use the Brick Viewer to set the Ethernet configuration.
     * 
     * .. versionadded:: 2.1.0$nbsp;(Firmware)
     * 
     * @param int $connection
     * @param int[] $ip
     * @param int[] $subnet_mask
     * @param int[] $gateway
     * @param int $port
     * 
     * @return void
     */
    public function setEthernetConfiguration($connection, $ip, $subnet_mask, $gateway, $port)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $connection);
        for ($i = 0; $i < 4; $i++) {
            $payload .= pack('C', $ip[$i]);
        }
        for ($i = 0; $i < 4; $i++) {
            $payload .= pack('C', $subnet_mask[$i]);
        }
        for ($i = 0; $i < 4; $i++) {
            $payload .= pack('C', $gateway[$i]);
        }
        $payload .= pack('v', $port);

        $this->sendRequest(self::FUNCTION_SET_ETHERNET_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the configuration as set by BrickMaster::setEthernetConfiguration().
     * 
     * .. versionadded:: 2.1.0$nbsp;(Firmware)
     * 
     * 
     * @return array
     */
    public function getEthernetConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ETHERNET_CONFIGURATION, $payload, 23);

        $payload = unpack('C1connection/C4ip/C4subnet_mask/C4gateway/v1port', $data);

        $ret['connection'] = $payload['connection'];
        $ret['ip'] = IPConnection::collectUnpackedArray($payload, 'ip', 4);
        $ret['subnet_mask'] = IPConnection::collectUnpackedArray($payload, 'subnet_mask', 4);
        $ret['gateway'] = IPConnection::collectUnpackedArray($payload, 'gateway', 4);
        $ret['port'] = $payload['port'];

        return $ret;
    }

    /**
     * Returns the status of the Ethernet Extension.
     * 
     * ``mac_address``, ``ip``, ``subnet_mask`` and ``gateway`` are given as an array.
     * The first element of the array is the least significant byte of the address.
     * 
     * ``rx_count`` and ``tx_count`` are the number of bytes that have been
     * received/send since last restart.
     * 
     * ``hostname`` is the currently used hostname.
     * 
     * .. versionadded:: 2.1.0$nbsp;(Firmware)
     * 
     * 
     * @return array
     */
    public function getEthernetStatus()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ETHERNET_STATUS, $payload, 66);

        $payload = unpack('C6mac_address/C4ip/C4subnet_mask/C4gateway/V1rx_count/V1tx_count/c32hostname', $data);

        $ret['mac_address'] = IPConnection::collectUnpackedArray($payload, 'mac_address', 6);
        $ret['ip'] = IPConnection::collectUnpackedArray($payload, 'ip', 4);
        $ret['subnet_mask'] = IPConnection::collectUnpackedArray($payload, 'subnet_mask', 4);
        $ret['gateway'] = IPConnection::collectUnpackedArray($payload, 'gateway', 4);
        $ret['rx_count'] = IPConnection::fixUnpackedUInt32($payload, 'rx_count');
        $ret['tx_count'] = IPConnection::fixUnpackedUInt32($payload, 'tx_count');
        $ret['hostname'] = IPConnection::implodeUnpackedString($payload, 'hostname', 32);

        return $ret;
    }

    /**
     * Sets the hostname of the Ethernet Extension. The hostname will be displayed
     * by access points as the hostname in the DHCP clients table.
     * 
     * Setting an empty String will restore the default hostname.
     * 
     * The current hostname can be discovered with BrickMaster::getEthernetStatus().
     * 
     * .. versionadded:: 2.1.0$nbsp;(Firmware)
     * 
     * @param string $hostname
     * 
     * @return void
     */
    public function setEthernetHostname($hostname)
    {
        $this->checkValidity();

        $payload = '';
        for ($i = 0; $i < strlen($hostname) && $i < 32; $i++) {
            $payload .= pack('c', ord($hostname[$i]));
        }
        for ($i = strlen($hostname); $i < 32; $i++) {
            $payload .= pack('c', 0);
        }

        $this->sendRequest(self::FUNCTION_SET_ETHERNET_HOSTNAME, $payload, 0);
    }

    /**
     * Sets the MAC address of the Ethernet Extension. The Ethernet Extension should
     * come configured with a valid MAC address, that is also written on a
     * sticker of the extension itself.
     * 
     * The MAC address can be read out again with BrickMaster::getEthernetStatus().
     * 
     * .. versionadded:: 2.1.0$nbsp;(Firmware)
     * 
     * @param int[] $mac_address
     * 
     * @return void
     */
    public function setEthernetMACAddress($mac_address)
    {
        $this->checkValidity();

        $payload = '';
        for ($i = 0; $i < 6; $i++) {
            $payload .= pack('C', $mac_address[$i]);
        }

        $this->sendRequest(self::FUNCTION_SET_ETHERNET_MAC_ADDRESS, $payload, 0);
    }

    /**
     * Sets the Ethernet WebSocket configuration. The first parameter sets the number of socket
     * connections that are reserved for WebSockets. The range is 0-7. The connections
     * are shared with the plain sockets. Example: If you set the connections to 3,
     * there will be 3 WebSocket and 4 plain socket connections available.
     * 
     * The second parameter is the port for the WebSocket connections. The port can
     * not be the same as the port for the plain socket connections.
     * 
     * The values are stored in the EEPROM and only applied on startup. That means
     * you have to restart the Master Brick after configuration.
     * 
     * It is recommended to use the Brick Viewer to set the Ethernet configuration.
     * 
     * .. versionadded:: 2.2.0$nbsp;(Firmware)
     * 
     * @param int $sockets
     * @param int $port
     * 
     * @return void
     */
    public function setEthernetWebsocketConfiguration($sockets, $port)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $sockets);
        $payload .= pack('v', $port);

        $this->sendRequest(self::FUNCTION_SET_ETHERNET_WEBSOCKET_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the configuration as set by BrickMaster::setEthernetConfiguration().
     * 
     * .. versionadded:: 2.2.0$nbsp;(Firmware)
     * 
     * 
     * @return array
     */
    public function getEthernetWebsocketConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ETHERNET_WEBSOCKET_CONFIGURATION, $payload, 11);

        $payload = unpack('C1sockets/v1port', $data);

        $ret['sockets'] = $payload['sockets'];
        $ret['port'] = $payload['port'];

        return $ret;
    }

    /**
     * Sets the Ethernet authentication secret. The secret can be a string of up to 64
     * characters. An empty string disables the authentication.
     * 
     * See the :ref:`authentication tutorial <tutorial_authentication>` for more
     * information.
     * 
     * The secret is stored in the EEPROM and only applied on startup. That means
     * you have to restart the Master Brick after configuration.
     * 
     * It is recommended to use the Brick Viewer to set the Ethernet authentication secret.
     * 
     * The default value is an empty string (authentication disabled).
     * 
     * .. versionadded:: 2.2.0$nbsp;(Firmware)
     * 
     * @param string $secret
     * 
     * @return void
     */
    public function setEthernetAuthenticationSecret($secret)
    {
        $this->checkValidity();

        $payload = '';
        for ($i = 0; $i < strlen($secret) && $i < 64; $i++) {
            $payload .= pack('c', ord($secret[$i]));
        }
        for ($i = strlen($secret); $i < 64; $i++) {
            $payload .= pack('c', 0);
        }

        $this->sendRequest(self::FUNCTION_SET_ETHERNET_AUTHENTICATION_SECRET, $payload, 0);
    }

    /**
     * Returns the authentication secret as set by
     * BrickMaster::setEthernetAuthenticationSecret().
     * 
     * .. versionadded:: 2.2.0$nbsp;(Firmware)
     * 
     * 
     * @return string
     */
    public function getEthernetAuthenticationSecret()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_ETHERNET_AUTHENTICATION_SECRET, $payload, 72);

        $payload = unpack('c64secret', $data);

        return IPConnection::implodeUnpackedString($payload, 'secret', 64);
    }

    /**
     * Sets the WIFI authentication secret. The secret can be a string of up to 64
     * characters. An empty string disables the authentication.
     * 
     * See the :ref:`authentication tutorial <tutorial_authentication>` for more
     * information.
     * 
     * The secret is stored in the EEPROM and only applied on startup. That means
     * you have to restart the Master Brick after configuration.
     * 
     * It is recommended to use the Brick Viewer to set the WIFI authentication secret.
     * 
     * The default value is an empty string (authentication disabled).
     * 
     * .. versionadded:: 2.2.0$nbsp;(Firmware)
     * 
     * @param string $secret
     * 
     * @return void
     */
    public function setWifiAuthenticationSecret($secret)
    {
        $this->checkValidity();

        $payload = '';
        for ($i = 0; $i < strlen($secret) && $i < 64; $i++) {
            $payload .= pack('c', ord($secret[$i]));
        }
        for ($i = strlen($secret); $i < 64; $i++) {
            $payload .= pack('c', 0);
        }

        $this->sendRequest(self::FUNCTION_SET_WIFI_AUTHENTICATION_SECRET, $payload, 0);
    }

    /**
     * Returns the authentication secret as set by
     * BrickMaster::setWifiAuthenticationSecret().
     * 
     * .. versionadded:: 2.2.0$nbsp;(Firmware)
     * 
     * 
     * @return string
     */
    public function getWifiAuthenticationSecret()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_WIFI_AUTHENTICATION_SECRET, $payload, 72);

        $payload = unpack('c64secret', $data);

        return IPConnection::implodeUnpackedString($payload, 'secret', 64);
    }

    /**
     * Returns the type of the connection over which this function was called.
     * 
     * .. versionadded:: 2.4.0$nbsp;(Firmware)
     * 
     * 
     * @return int
     */
    public function getConnectionType()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_CONNECTION_TYPE, $payload, 9);

        $payload = unpack('C1connection_type', $data);

        return $payload['connection_type'];
    }

    /**
     * Returns *true* if the Master Brick is at position 0 in the stack and a WIFI
     * Extension 2.0 is available.
     * 
     * .. versionadded:: 2.4.0$nbsp;(Firmware)
     * 
     * 
     * @return bool
     */
    public function isWifi2Present()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_IS_WIFI2_PRESENT, $payload, 9);

        $payload = unpack('C1present', $data);

        return (bool)$payload['present'];
    }

    /**
     * Starts the bootloader of the WIFI Extension 2.0. Returns 0 on success.
     * Afterwards the BrickMaster::writeWifi2SerialPort() and BrickMaster::readWifi2SerialPort()
     * functions can be used to communicate with the bootloader to flash a new
     * firmware.
     * 
     * The bootloader should only be started over a USB connection. It cannot be
     * started over a WIFI2 connection, see the BrickMaster::getConnectionType() function.
     * 
     * It is recommended to use the Brick Viewer to update the firmware of the WIFI
     * Extension 2.0.
     * 
     * .. versionadded:: 2.4.0$nbsp;(Firmware)
     * 
     * 
     * @return int
     */
    public function startWifi2Bootloader()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_START_WIFI2_BOOTLOADER, $payload, 9);

        $payload = unpack('c1result', $data);

        return $payload['result'];
    }

    /**
     * Writes up to 60 bytes (number of bytes to be written specified by ``length``)
     * to the serial port of the bootloader of the WIFI Extension 2.0. Returns 0 on
     * success.
     * 
     * Before this function can be used the bootloader has to be started using the
     * BrickMaster::startWifi2Bootloader() function.
     * 
     * It is recommended to use the Brick Viewer to update the firmware of the WIFI
     * Extension 2.0.
     * 
     * .. versionadded:: 2.4.0$nbsp;(Firmware)
     * 
     * @param int[] $data
     * @param int $length
     * 
     * @return int
     */
    public function writeWifi2SerialPort($data, $length)
    {
        $this->checkValidity();

        $payload = '';
        for ($i = 0; $i < 60; $i++) {
            $payload .= pack('C', $data[$i]);
        }
        $payload .= pack('C', $length);

        $data = $this->sendRequest(self::FUNCTION_WRITE_WIFI2_SERIAL_PORT, $payload, 9);

        $payload = unpack('c1result', $data);

        return $payload['result'];
    }

    /**
     * Reads up to 60 bytes (number of bytes to be read specified by ``length``)
     * from the serial port of the bootloader of the WIFI Extension 2.0.
     * Returns the number of actually read bytes.
     * 
     * Before this function can be used the bootloader has to be started using the
     * BrickMaster::startWifi2Bootloader() function.
     * 
     * It is recommended to use the Brick Viewer to update the firmware of the WIFI
     * Extension 2.0.
     * 
     * .. versionadded:: 2.4.0$nbsp;(Firmware)
     * 
     * @param int $length
     * 
     * @return array
     */
    public function readWifi2SerialPort($length)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('C', $length);

        $data = $this->sendRequest(self::FUNCTION_READ_WIFI2_SERIAL_PORT, $payload, 69);

        $payload = unpack('C60data/C1result', $data);

        $ret['data'] = IPConnection::collectUnpackedArray($payload, 'data', 60);
        $ret['result'] = $payload['result'];

        return $ret;
    }

    /**
     * Sets the WIFI authentication secret. The secret can be a string of up to 64
     * characters. An empty string disables the authentication. The default value is
     * an empty string (authentication disabled).
     * 
     * See the :ref:`authentication tutorial <tutorial_authentication>` for more
     * information.
     * 
     * To apply configuration changes to the WIFI Extension 2.0 the
     * BrickMaster::saveWifi2Configuration() function has to be called and the Master Brick
     * has to be restarted afterwards.
     * 
     * It is recommended to use the Brick Viewer to configure the WIFI Extension 2.0.
     * 
     * .. versionadded:: 2.4.0$nbsp;(Firmware)
     * 
     * @param string $secret
     * 
     * @return void
     */
    public function setWifi2AuthenticationSecret($secret)
    {
        $this->checkValidity();

        $payload = '';
        for ($i = 0; $i < strlen($secret) && $i < 64; $i++) {
            $payload .= pack('c', ord($secret[$i]));
        }
        for ($i = strlen($secret); $i < 64; $i++) {
            $payload .= pack('c', 0);
        }

        $this->sendRequest(self::FUNCTION_SET_WIFI2_AUTHENTICATION_SECRET, $payload, 0);
    }

    /**
     * Returns the WIFI authentication secret as set by
     * BrickMaster::setWifi2AuthenticationSecret().
     * 
     * .. versionadded:: 2.4.0$nbsp;(Firmware)
     * 
     * 
     * @return string
     */
    public function getWifi2AuthenticationSecret()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_WIFI2_AUTHENTICATION_SECRET, $payload, 72);

        $payload = unpack('c64secret', $data);

        return IPConnection::implodeUnpackedString($payload, 'secret', 64);
    }

    /**
     * Sets the general configuration of the WIFI Extension 2.0.
     * 
     * The ``port`` parameter sets the port number that your programm will connect
     * to.
     * 
     * The ``websocket_port`` parameter sets the WebSocket port number that your
     * JavaScript programm will connect to.
     * 
     * The ``website_port`` parameter sets the port number for the website of the
     * WIFI Extension 2.0.
     * 
     * The ``phy_mode`` parameter sets the specific wireless network mode to be used.
     * Possible values are B, G and N.
     * 
     * The ``sleep_mode`` parameter is currently unused.
     * 
     * The ``website`` parameter is used to enable or disable the web interface of
     * the WIFI Extension 2.0, which is available from firmware version 2.0.1. Note
     * that, for firmware version 2.0.3 and older, to disable the the web interface
     * the ``website_port`` parameter must be set to 1 and greater than 1 to enable
     * the web interface. For firmware version 2.0.4 and later, setting this parameter
     * to 1 will enable the web interface and setting it to 0 will disable the web
     * interface.
     * 
     * To apply configuration changes to the WIFI Extension 2.0 the
     * BrickMaster::saveWifi2Configuration() function has to be called and the Master Brick
     * has to be restarted afterwards.
     * 
     * It is recommended to use the Brick Viewer to configure the WIFI Extension 2.0.
     * 
     * .. versionadded:: 2.4.0$nbsp;(Firmware)
     * 
     * @param int $port
     * @param int $websocket_port
     * @param int $website_port
     * @param int $phy_mode
     * @param int $sleep_mode
     * @param int $website
     * 
     * @return void
     */
    public function setWifi2Configuration($port, $websocket_port, $website_port, $phy_mode, $sleep_mode, $website)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('v', $port);
        $payload .= pack('v', $websocket_port);
        $payload .= pack('v', $website_port);
        $payload .= pack('C', $phy_mode);
        $payload .= pack('C', $sleep_mode);
        $payload .= pack('C', $website);

        $this->sendRequest(self::FUNCTION_SET_WIFI2_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the general configuration as set by BrickMaster::setWifi2Configuration().
     * 
     * .. versionadded:: 2.4.0$nbsp;(Firmware)
     * 
     * 
     * @return array
     */
    public function getWifi2Configuration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_WIFI2_CONFIGURATION, $payload, 17);

        $payload = unpack('v1port/v1websocket_port/v1website_port/C1phy_mode/C1sleep_mode/C1website', $data);

        $ret['port'] = $payload['port'];
        $ret['websocket_port'] = $payload['websocket_port'];
        $ret['website_port'] = $payload['website_port'];
        $ret['phy_mode'] = $payload['phy_mode'];
        $ret['sleep_mode'] = $payload['sleep_mode'];
        $ret['website'] = $payload['website'];

        return $ret;
    }

    /**
     * Returns the client and access point status of the WIFI Extension 2.0.
     * 
     * .. versionadded:: 2.4.0$nbsp;(Firmware)
     * 
     * 
     * @return array
     */
    public function getWifi2Status()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_WIFI2_STATUS, $payload, 65);

        $payload = unpack('C1client_enabled/C1client_status/C4client_ip/C4client_subnet_mask/C4client_gateway/C6client_mac_address/V1client_rx_count/V1client_tx_count/c1client_rssi/C1ap_enabled/C4ap_ip/C4ap_subnet_mask/C4ap_gateway/C6ap_mac_address/V1ap_rx_count/V1ap_tx_count/C1ap_connected_count', $data);

        $ret['client_enabled'] = (bool)$payload['client_enabled'];
        $ret['client_status'] = $payload['client_status'];
        $ret['client_ip'] = IPConnection::collectUnpackedArray($payload, 'client_ip', 4);
        $ret['client_subnet_mask'] = IPConnection::collectUnpackedArray($payload, 'client_subnet_mask', 4);
        $ret['client_gateway'] = IPConnection::collectUnpackedArray($payload, 'client_gateway', 4);
        $ret['client_mac_address'] = IPConnection::collectUnpackedArray($payload, 'client_mac_address', 6);
        $ret['client_rx_count'] = IPConnection::fixUnpackedUInt32($payload, 'client_rx_count');
        $ret['client_tx_count'] = IPConnection::fixUnpackedUInt32($payload, 'client_tx_count');
        $ret['client_rssi'] = $payload['client_rssi'];
        $ret['ap_enabled'] = (bool)$payload['ap_enabled'];
        $ret['ap_ip'] = IPConnection::collectUnpackedArray($payload, 'ap_ip', 4);
        $ret['ap_subnet_mask'] = IPConnection::collectUnpackedArray($payload, 'ap_subnet_mask', 4);
        $ret['ap_gateway'] = IPConnection::collectUnpackedArray($payload, 'ap_gateway', 4);
        $ret['ap_mac_address'] = IPConnection::collectUnpackedArray($payload, 'ap_mac_address', 6);
        $ret['ap_rx_count'] = IPConnection::fixUnpackedUInt32($payload, 'ap_rx_count');
        $ret['ap_tx_count'] = IPConnection::fixUnpackedUInt32($payload, 'ap_tx_count');
        $ret['ap_connected_count'] = $payload['ap_connected_count'];

        return $ret;
    }

    /**
     * Sets the client specific configuration of the WIFI Extension 2.0.
     * 
     * The ``enable`` parameter enables or disables the client part of the
     * WIFI Extension 2.0.
     * 
     * The ``ssid`` parameter sets the SSID (up to 32 characters) of the access point
     * to connect to.
     * 
     * If the ``ip`` parameter is set to all zero then ``subnet_mask`` and ``gateway``
     * parameters are also set to all zero and DHCP is used for IP address configuration.
     * Otherwise those three parameters can be used to configure a static IP address.
     * The default configuration is DHCP.
     * 
     * If the ``mac_address`` parameter is set to all zero then the factory MAC
     * address is used. Otherwise this parameter can be used to set a custom MAC
     * address.
     * 
     * If the ``bssid`` parameter is set to all zero then WIFI Extension 2.0 will
     * connect to any access point that matches the configured SSID. Otherwise this
     * parameter can be used to make the WIFI Extension 2.0 only connect to an
     * access point if SSID and BSSID match.
     * 
     * To apply configuration changes to the WIFI Extension 2.0 the
     * BrickMaster::saveWifi2Configuration() function has to be called and the Master Brick
     * has to be restarted afterwards.
     * 
     * It is recommended to use the Brick Viewer to configure the WIFI Extension 2.0.
     * 
     * .. versionadded:: 2.4.0$nbsp;(Firmware)
     * 
     * @param bool $enable
     * @param string $ssid
     * @param int[] $ip
     * @param int[] $subnet_mask
     * @param int[] $gateway
     * @param int[] $mac_address
     * @param int[] $bssid
     * 
     * @return void
     */
    public function setWifi2ClientConfiguration($enable, $ssid, $ip, $subnet_mask, $gateway, $mac_address, $bssid)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', intval((bool)$enable));
        for ($i = 0; $i < strlen($ssid) && $i < 32; $i++) {
            $payload .= pack('c', ord($ssid[$i]));
        }
        for ($i = strlen($ssid); $i < 32; $i++) {
            $payload .= pack('c', 0);
        }
        for ($i = 0; $i < 4; $i++) {
            $payload .= pack('C', $ip[$i]);
        }
        for ($i = 0; $i < 4; $i++) {
            $payload .= pack('C', $subnet_mask[$i]);
        }
        for ($i = 0; $i < 4; $i++) {
            $payload .= pack('C', $gateway[$i]);
        }
        for ($i = 0; $i < 6; $i++) {
            $payload .= pack('C', $mac_address[$i]);
        }
        for ($i = 0; $i < 6; $i++) {
            $payload .= pack('C', $bssid[$i]);
        }

        $this->sendRequest(self::FUNCTION_SET_WIFI2_CLIENT_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the client configuration as set by BrickMaster::setWifi2ClientConfiguration().
     * 
     * .. versionadded:: 2.4.0$nbsp;(Firmware)
     * 
     * 
     * @return array
     */
    public function getWifi2ClientConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_WIFI2_CLIENT_CONFIGURATION, $payload, 65);

        $payload = unpack('C1enable/c32ssid/C4ip/C4subnet_mask/C4gateway/C6mac_address/C6bssid', $data);

        $ret['enable'] = (bool)$payload['enable'];
        $ret['ssid'] = IPConnection::implodeUnpackedString($payload, 'ssid', 32);
        $ret['ip'] = IPConnection::collectUnpackedArray($payload, 'ip', 4);
        $ret['subnet_mask'] = IPConnection::collectUnpackedArray($payload, 'subnet_mask', 4);
        $ret['gateway'] = IPConnection::collectUnpackedArray($payload, 'gateway', 4);
        $ret['mac_address'] = IPConnection::collectUnpackedArray($payload, 'mac_address', 6);
        $ret['bssid'] = IPConnection::collectUnpackedArray($payload, 'bssid', 6);

        return $ret;
    }

    /**
     * Sets the client hostname (up to 32 characters) of the WIFI Extension 2.0. The
     * hostname will be displayed by access points as the hostname in the DHCP clients
     * table.
     * 
     * To apply configuration changes to the WIFI Extension 2.0 the
     * BrickMaster::saveWifi2Configuration() function has to be called and the Master Brick
     * has to be restarted afterwards.
     * 
     * It is recommended to use the Brick Viewer to configure the WIFI Extension 2.0.
     * 
     * .. versionadded:: 2.4.0$nbsp;(Firmware)
     * 
     * @param string $hostname
     * 
     * @return void
     */
    public function setWifi2ClientHostname($hostname)
    {
        $this->checkValidity();

        $payload = '';
        for ($i = 0; $i < strlen($hostname) && $i < 32; $i++) {
            $payload .= pack('c', ord($hostname[$i]));
        }
        for ($i = strlen($hostname); $i < 32; $i++) {
            $payload .= pack('c', 0);
        }

        $this->sendRequest(self::FUNCTION_SET_WIFI2_CLIENT_HOSTNAME, $payload, 0);
    }

    /**
     * Returns the client hostname as set by BrickMaster::setWifi2ClientHostname().
     * 
     * .. versionadded:: 2.4.0$nbsp;(Firmware)
     * 
     * 
     * @return string
     */
    public function getWifi2ClientHostname()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_WIFI2_CLIENT_HOSTNAME, $payload, 40);

        $payload = unpack('c32hostname', $data);

        return IPConnection::implodeUnpackedString($payload, 'hostname', 32);
    }

    /**
     * Sets the client password (up to 63 chars) for WPA/WPA2 encryption.
     * 
     * To apply configuration changes to the WIFI Extension 2.0 the
     * BrickMaster::saveWifi2Configuration() function has to be called and the Master Brick
     * has to be restarted afterwards.
     * 
     * It is recommended to use the Brick Viewer to configure the WIFI Extension 2.0.
     * 
     * .. versionadded:: 2.4.0$nbsp;(Firmware)
     * 
     * @param string $password
     * 
     * @return void
     */
    public function setWifi2ClientPassword($password)
    {
        $this->checkValidity();

        $payload = '';
        for ($i = 0; $i < strlen($password) && $i < 64; $i++) {
            $payload .= pack('c', ord($password[$i]));
        }
        for ($i = strlen($password); $i < 64; $i++) {
            $payload .= pack('c', 0);
        }

        $this->sendRequest(self::FUNCTION_SET_WIFI2_CLIENT_PASSWORD, $payload, 0);
    }

    /**
     * Returns the client password as set by BrickMaster::setWifi2ClientPassword().
     * 
     * <note>
     *  Since WIFI Extension 2.0 firmware version 2.1.3 the password is not
     *  returned anymore.
     * </note>
     * 
     * .. versionadded:: 2.4.0$nbsp;(Firmware)
     * 
     * 
     * @return string
     */
    public function getWifi2ClientPassword()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_WIFI2_CLIENT_PASSWORD, $payload, 72);

        $payload = unpack('c64password', $data);

        return IPConnection::implodeUnpackedString($payload, 'password', 64);
    }

    /**
     * Sets the access point specific configuration of the WIFI Extension 2.0.
     * 
     * The ``enable`` parameter enables or disables the access point part of the
     * WIFI Extension 2.0.
     * 
     * The ``ssid`` parameter sets the SSID (up to 32 characters) of the access point.
     * 
     * If the ``ip`` parameter is set to all zero then ``subnet_mask`` and ``gateway``
     * parameters are also set to all zero and DHCP is used for IP address configuration.
     * Otherwise those three parameters can be used to configure a static IP address.
     * The default configuration is DHCP.
     * 
     * The ``encryption`` parameter sets the encryption mode to be used. Possible
     * values are Open (no encryption), WEP or WPA/WPA2 PSK.
     * Use the BrickMaster::setWifi2APPassword() function to set the encryption
     * password.
     * 
     * The ``hidden`` parameter makes the access point hide or show its SSID.
     * 
     * The ``channel`` parameter sets the channel (1 to 13) of the access point.
     * 
     * If the ``mac_address`` parameter is set to all zero then the factory MAC
     * address is used. Otherwise this parameter can be used to set a custom MAC
     * address.
     * 
     * To apply configuration changes to the WIFI Extension 2.0 the
     * BrickMaster::saveWifi2Configuration() function has to be called and the Master Brick
     * has to be restarted afterwards.
     * 
     * It is recommended to use the Brick Viewer to configure the WIFI Extension 2.0.
     * 
     * .. versionadded:: 2.4.0$nbsp;(Firmware)
     * 
     * @param bool $enable
     * @param string $ssid
     * @param int[] $ip
     * @param int[] $subnet_mask
     * @param int[] $gateway
     * @param int $encryption
     * @param bool $hidden
     * @param int $channel
     * @param int[] $mac_address
     * 
     * @return void
     */
    public function setWifi2APConfiguration($enable, $ssid, $ip, $subnet_mask, $gateway, $encryption, $hidden, $channel, $mac_address)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', intval((bool)$enable));
        for ($i = 0; $i < strlen($ssid) && $i < 32; $i++) {
            $payload .= pack('c', ord($ssid[$i]));
        }
        for ($i = strlen($ssid); $i < 32; $i++) {
            $payload .= pack('c', 0);
        }
        for ($i = 0; $i < 4; $i++) {
            $payload .= pack('C', $ip[$i]);
        }
        for ($i = 0; $i < 4; $i++) {
            $payload .= pack('C', $subnet_mask[$i]);
        }
        for ($i = 0; $i < 4; $i++) {
            $payload .= pack('C', $gateway[$i]);
        }
        $payload .= pack('C', $encryption);
        $payload .= pack('C', intval((bool)$hidden));
        $payload .= pack('C', $channel);
        for ($i = 0; $i < 6; $i++) {
            $payload .= pack('C', $mac_address[$i]);
        }

        $this->sendRequest(self::FUNCTION_SET_WIFI2_AP_CONFIGURATION, $payload, 0);
    }

    /**
     * Returns the access point configuration as set by BrickMaster::setWifi2APConfiguration().
     * 
     * .. versionadded:: 2.4.0$nbsp;(Firmware)
     * 
     * 
     * @return array
     */
    public function getWifi2APConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_WIFI2_AP_CONFIGURATION, $payload, 62);

        $payload = unpack('C1enable/c32ssid/C4ip/C4subnet_mask/C4gateway/C1encryption/C1hidden/C1channel/C6mac_address', $data);

        $ret['enable'] = (bool)$payload['enable'];
        $ret['ssid'] = IPConnection::implodeUnpackedString($payload, 'ssid', 32);
        $ret['ip'] = IPConnection::collectUnpackedArray($payload, 'ip', 4);
        $ret['subnet_mask'] = IPConnection::collectUnpackedArray($payload, 'subnet_mask', 4);
        $ret['gateway'] = IPConnection::collectUnpackedArray($payload, 'gateway', 4);
        $ret['encryption'] = $payload['encryption'];
        $ret['hidden'] = (bool)$payload['hidden'];
        $ret['channel'] = $payload['channel'];
        $ret['mac_address'] = IPConnection::collectUnpackedArray($payload, 'mac_address', 6);

        return $ret;
    }

    /**
     * Sets the access point password (at least 8 and up to 63 chars) for the configured encryption
     * mode, see BrickMaster::setWifi2APConfiguration().
     * 
     * To apply configuration changes to the WIFI Extension 2.0 the
     * BrickMaster::saveWifi2Configuration() function has to be called and the Master Brick
     * has to be restarted afterwards.
     * 
     * It is recommended to use the Brick Viewer to configure the WIFI Extension 2.0.
     * 
     * .. versionadded:: 2.4.0$nbsp;(Firmware)
     * 
     * @param string $password
     * 
     * @return void
     */
    public function setWifi2APPassword($password)
    {
        $this->checkValidity();

        $payload = '';
        for ($i = 0; $i < strlen($password) && $i < 64; $i++) {
            $payload .= pack('c', ord($password[$i]));
        }
        for ($i = strlen($password); $i < 64; $i++) {
            $payload .= pack('c', 0);
        }

        $this->sendRequest(self::FUNCTION_SET_WIFI2_AP_PASSWORD, $payload, 0);
    }

    /**
     * Returns the access point password as set by BrickMaster::setWifi2APPassword().
     * 
     * <note>
     *  Since WIFI Extension 2.0 firmware version 2.1.3 the password is not
     *  returned anymore.
     * </note>
     * 
     * .. versionadded:: 2.4.0$nbsp;(Firmware)
     * 
     * 
     * @return string
     */
    public function getWifi2APPassword()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_WIFI2_AP_PASSWORD, $payload, 72);

        $payload = unpack('c64password', $data);

        return IPConnection::implodeUnpackedString($payload, 'password', 64);
    }

    /**
     * All configuration functions for the WIFI Extension 2.0 do not change the
     * values permanently. After configuration this function has to be called to
     * permanently store the values.
     * 
     * The values are stored in the EEPROM and only applied on startup. That means
     * you have to restart the Master Brick after configuration.
     * 
     * .. versionadded:: 2.4.0$nbsp;(Firmware)
     * 
     * 
     * @return int
     */
    public function saveWifi2Configuration()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_SAVE_WIFI2_CONFIGURATION, $payload, 9);

        $payload = unpack('C1result', $data);

        return $payload['result'];
    }

    /**
     * Returns the current version of the WIFI Extension 2.0 firmware.
     * 
     * .. versionadded:: 2.4.0$nbsp;(Firmware)
     * 
     * 
     * @return array
     */
    public function getWifi2FirmwareVersion()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_WIFI2_FIRMWARE_VERSION, $payload, 11);

        $payload = unpack('C3firmware_version', $data);

        return IPConnection::collectUnpackedArray($payload, 'firmware_version', 3);
    }

    /**
     * Turns the green status LED of the WIFI Extension 2.0 on.
     * 
     * .. versionadded:: 2.4.0$nbsp;(Firmware)
     * 
     * 
     * @return void
     */
    public function enableWifi2StatusLED()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_ENABLE_WIFI2_STATUS_LED, $payload, 0);
    }

    /**
     * Turns the green status LED of the WIFI Extension 2.0 off.
     * 
     * .. versionadded:: 2.4.0$nbsp;(Firmware)
     * 
     * 
     * @return void
     */
    public function disableWifi2StatusLED()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_DISABLE_WIFI2_STATUS_LED, $payload, 0);
    }

    /**
     * Returns *true* if the green status LED of the WIFI Extension 2.0 is turned on.
     * 
     * .. versionadded:: 2.4.0$nbsp;(Firmware)
     * 
     * 
     * @return bool
     */
    public function isWifi2StatusLEDEnabled()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_IS_WIFI2_STATUS_LED_ENABLED, $payload, 9);

        $payload = unpack('C1enabled', $data);

        return (bool)$payload['enabled'];
    }

    /**
     * Requires WIFI Extension 2.0 firmware 2.1.0.
     * 
     * Sets the mesh specific configuration of the WIFI Extension 2.0.
     * 
     * The ``enable`` parameter enables or disables the mesh part of the
     * WIFI Extension 2.0. The mesh part cannot be
     * enabled together with the client and access-point part.
     * 
     * If the ``root_ip`` parameter is set to all zero then ``root_subnet_mask``
     * and ``root_gateway`` parameters are also set to all zero and DHCP is used for
     * IP address configuration. Otherwise those three parameters can be used to
     * configure a static IP address. The default configuration is DHCP.
     * 
     * If the ``router_bssid`` parameter is set to all zero then the information is
     * taken from Wi-Fi scan when connecting the SSID as set by
     * BrickMaster::setWifi2MeshRouterSSID(). This only works if the the SSID is not hidden.
     * In case the router has hidden SSID this parameter must be specified, otherwise
     * the node will not be able to reach the mesh router.
     * 
     * The ``group_id`` and the ``group_ssid_prefix`` parameters identifies a
     * particular mesh network and nodes configured with same ``group_id`` and the
     * ``group_ssid_prefix`` are considered to be in the same mesh network.
     * 
     * The ``gateway_ip`` and the ``gateway_port`` parameters specifies the location
     * of the brickd that supports mesh feature.
     * 
     * To apply configuration changes to the WIFI Extension 2.0 the
     * BrickMaster::saveWifi2Configuration() function has to be called and the Master Brick
     * has to be restarted afterwards.
     * 
     * It is recommended to use the Brick Viewer to configure the WIFI Extension 2.0.
     * 
     * .. versionadded:: 2.4.2$nbsp;(Firmware)
     * 
     * @param bool $enable
     * @param int[] $root_ip
     * @param int[] $root_subnet_mask
     * @param int[] $root_gateway
     * @param int[] $router_bssid
     * @param int[] $group_id
     * @param string $group_ssid_prefix
     * @param int[] $gateway_ip
     * @param int $gateway_port
     * 
     * @return void
     */
    public function setWifi2MeshConfiguration($enable, $root_ip, $root_subnet_mask, $root_gateway, $router_bssid, $group_id, $group_ssid_prefix, $gateway_ip, $gateway_port)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', intval((bool)$enable));
        for ($i = 0; $i < 4; $i++) {
            $payload .= pack('C', $root_ip[$i]);
        }
        for ($i = 0; $i < 4; $i++) {
            $payload .= pack('C', $root_subnet_mask[$i]);
        }
        for ($i = 0; $i < 4; $i++) {
            $payload .= pack('C', $root_gateway[$i]);
        }
        for ($i = 0; $i < 6; $i++) {
            $payload .= pack('C', $router_bssid[$i]);
        }
        for ($i = 0; $i < 6; $i++) {
            $payload .= pack('C', $group_id[$i]);
        }
        for ($i = 0; $i < strlen($group_ssid_prefix) && $i < 16; $i++) {
            $payload .= pack('c', ord($group_ssid_prefix[$i]));
        }
        for ($i = strlen($group_ssid_prefix); $i < 16; $i++) {
            $payload .= pack('c', 0);
        }
        for ($i = 0; $i < 4; $i++) {
            $payload .= pack('C', $gateway_ip[$i]);
        }
        $payload .= pack('v', $gateway_port);

        $this->sendRequest(self::FUNCTION_SET_WIFI2_MESH_CONFIGURATION, $payload, 0);
    }

    /**
     * Requires WIFI Extension 2.0 firmware 2.1.0.
     * 
     * Returns the mesh configuration as set by BrickMaster::setWifi2MeshConfiguration().
     * 
     * .. versionadded:: 2.4.2$nbsp;(Firmware)
     * 
     * 
     * @return array
     */
    public function getWifi2MeshConfiguration()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_WIFI2_MESH_CONFIGURATION, $payload, 55);

        $payload = unpack('C1enable/C4root_ip/C4root_subnet_mask/C4root_gateway/C6router_bssid/C6group_id/c16group_ssid_prefix/C4gateway_ip/v1gateway_port', $data);

        $ret['enable'] = (bool)$payload['enable'];
        $ret['root_ip'] = IPConnection::collectUnpackedArray($payload, 'root_ip', 4);
        $ret['root_subnet_mask'] = IPConnection::collectUnpackedArray($payload, 'root_subnet_mask', 4);
        $ret['root_gateway'] = IPConnection::collectUnpackedArray($payload, 'root_gateway', 4);
        $ret['router_bssid'] = IPConnection::collectUnpackedArray($payload, 'router_bssid', 6);
        $ret['group_id'] = IPConnection::collectUnpackedArray($payload, 'group_id', 6);
        $ret['group_ssid_prefix'] = IPConnection::implodeUnpackedString($payload, 'group_ssid_prefix', 16);
        $ret['gateway_ip'] = IPConnection::collectUnpackedArray($payload, 'gateway_ip', 4);
        $ret['gateway_port'] = $payload['gateway_port'];

        return $ret;
    }

    /**
     * Requires WIFI Extension 2.0 firmware 2.1.0.
     * 
     * Sets the mesh router SSID of the WIFI Extension 2.0.
     * It is used to specify the mesh router to connect to.
     * 
     * Note that even though in the argument of this function a 32 characters long SSID
     * is allowed, in practice valid SSID should have a maximum of 31 characters. This
     * is due to a bug in the mesh library that we use in the firmware of the extension.
     * 
     * To apply configuration changes to the WIFI Extension 2.0 the
     * BrickMaster::saveWifi2Configuration() function has to be called and the Master Brick
     * has to be restarted afterwards.
     * 
     * It is recommended to use the Brick Viewer to configure the WIFI Extension 2.0.
     * 
     * .. versionadded:: 2.4.2$nbsp;(Firmware)
     * 
     * @param string $ssid
     * 
     * @return void
     */
    public function setWifi2MeshRouterSSID($ssid)
    {
        $this->checkValidity();

        $payload = '';
        for ($i = 0; $i < strlen($ssid) && $i < 32; $i++) {
            $payload .= pack('c', ord($ssid[$i]));
        }
        for ($i = strlen($ssid); $i < 32; $i++) {
            $payload .= pack('c', 0);
        }

        $this->sendRequest(self::FUNCTION_SET_WIFI2_MESH_ROUTER_SSID, $payload, 0);
    }

    /**
     * Requires WIFI Extension 2.0 firmware 2.1.0.
     * 
     * Returns the mesh router SSID as set by BrickMaster::setWifi2MeshRouterSSID().
     * 
     * .. versionadded:: 2.4.2$nbsp;(Firmware)
     * 
     * 
     * @return string
     */
    public function getWifi2MeshRouterSSID()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_WIFI2_MESH_ROUTER_SSID, $payload, 40);

        $payload = unpack('c32ssid', $data);

        return IPConnection::implodeUnpackedString($payload, 'ssid', 32);
    }

    /**
     * Requires WIFI Extension 2.0 firmware 2.1.0.
     * 
     * Sets the mesh router password (up to 64 characters) for WPA/WPA2 encryption.
     * The password will be used to connect to the mesh router.
     * 
     * To apply configuration changes to the WIFI Extension 2.0 the
     * BrickMaster::saveWifi2Configuration() function has to be called and the Master Brick
     * has to be restarted afterwards.
     * 
     * It is recommended to use the Brick Viewer to configure the WIFI Extension 2.0.
     * 
     * .. versionadded:: 2.4.2$nbsp;(Firmware)
     * 
     * @param string $password
     * 
     * @return void
     */
    public function setWifi2MeshRouterPassword($password)
    {
        $this->checkValidity();

        $payload = '';
        for ($i = 0; $i < strlen($password) && $i < 64; $i++) {
            $payload .= pack('c', ord($password[$i]));
        }
        for ($i = strlen($password); $i < 64; $i++) {
            $payload .= pack('c', 0);
        }

        $this->sendRequest(self::FUNCTION_SET_WIFI2_MESH_ROUTER_PASSWORD, $payload, 0);
    }

    /**
     * Requires WIFI Extension 2.0 firmware 2.1.0.
     * 
     * Returns the mesh router password as set by BrickMaster::setWifi2MeshRouterPassword().
     * 
     * .. versionadded:: 2.4.2$nbsp;(Firmware)
     * 
     * 
     * @return string
     */
    public function getWifi2MeshRouterPassword()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_WIFI2_MESH_ROUTER_PASSWORD, $payload, 72);

        $payload = unpack('c64password', $data);

        return IPConnection::implodeUnpackedString($payload, 'password', 64);
    }

    /**
     * Requires WIFI Extension 2.0 firmware 2.1.0.
     * 
     * Returns the common mesh status of the WIFI Extension 2.0.
     * 
     * .. versionadded:: 2.4.2$nbsp;(Firmware)
     * 
     * 
     * @return array
     */
    public function getWifi2MeshCommonStatus()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_WIFI2_MESH_COMMON_STATUS, $payload, 21);

        $payload = unpack('C1status/C1root_node/C1root_candidate/v1connected_nodes/V1rx_count/V1tx_count', $data);

        $ret['status'] = $payload['status'];
        $ret['root_node'] = (bool)$payload['root_node'];
        $ret['root_candidate'] = (bool)$payload['root_candidate'];
        $ret['connected_nodes'] = $payload['connected_nodes'];
        $ret['rx_count'] = IPConnection::fixUnpackedUInt32($payload, 'rx_count');
        $ret['tx_count'] = IPConnection::fixUnpackedUInt32($payload, 'tx_count');

        return $ret;
    }

    /**
     * Requires WIFI Extension 2.0 firmware 2.1.0.
     * 
     * Returns the mesh client status of the WIFI Extension 2.0.
     * 
     * .. versionadded:: 2.4.2$nbsp;(Firmware)
     * 
     * 
     * @return array
     */
    public function getWifi2MeshClientStatus()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_WIFI2_MESH_CLIENT_STATUS, $payload, 58);

        $payload = unpack('c32hostname/C4ip/C4subnet_mask/C4gateway/C6mac_address', $data);

        $ret['hostname'] = IPConnection::implodeUnpackedString($payload, 'hostname', 32);
        $ret['ip'] = IPConnection::collectUnpackedArray($payload, 'ip', 4);
        $ret['subnet_mask'] = IPConnection::collectUnpackedArray($payload, 'subnet_mask', 4);
        $ret['gateway'] = IPConnection::collectUnpackedArray($payload, 'gateway', 4);
        $ret['mac_address'] = IPConnection::collectUnpackedArray($payload, 'mac_address', 6);

        return $ret;
    }

    /**
     * Requires WIFI Extension 2.0 firmware 2.1.0.
     * 
     * Returns the mesh AP status of the WIFI Extension 2.0.
     * 
     * .. versionadded:: 2.4.2$nbsp;(Firmware)
     * 
     * 
     * @return array
     */
    public function getWifi2MeshAPStatus()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_WIFI2_MESH_AP_STATUS, $payload, 58);

        $payload = unpack('c32ssid/C4ip/C4subnet_mask/C4gateway/C6mac_address', $data);

        $ret['ssid'] = IPConnection::implodeUnpackedString($payload, 'ssid', 32);
        $ret['ip'] = IPConnection::collectUnpackedArray($payload, 'ip', 4);
        $ret['subnet_mask'] = IPConnection::collectUnpackedArray($payload, 'subnet_mask', 4);
        $ret['gateway'] = IPConnection::collectUnpackedArray($payload, 'gateway', 4);
        $ret['mac_address'] = IPConnection::collectUnpackedArray($payload, 'mac_address', 6);

        return $ret;
    }

    /**
     * This function is for internal use to flash the initial
     * bootstrapper and bootloader to the Bricklets.
     * 
     * If you need to flash a boostrapper/bootloader (for exmaple
     * because you made your own Bricklet from scratch) please
     * take a look at our open source flash and test tool at
     * `https://github.com/Tinkerforge/flash-test <https://github.com/Tinkerforge/flash-test>`__
     * 
     * Don't use this function directly.
     * 
     * .. versionadded:: 2.5.0$nbsp;(Firmware)
     * 
     * @param int $config
     * @param int $parameter1
     * @param int $parameter2
     * @param int[] $data
     * 
     * @return array
     */
    public function setBrickletXMCFlashConfig($config, $parameter1, $parameter2, $data)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('V', $config);
        $payload .= pack('V', $parameter1);
        $payload .= pack('V', $parameter2);
        for ($i = 0; $i < 52; $i++) {
            $payload .= pack('C', $data[$i]);
        }

        $data = $this->sendRequest(self::FUNCTION_SET_BRICKLET_XMC_FLASH_CONFIG, $payload, 72);

        $payload = unpack('V1return_value/C60return_data', $data);

        $ret['return_value'] = IPConnection::fixUnpackedUInt32($payload, 'return_value');
        $ret['return_data'] = IPConnection::collectUnpackedArray($payload, 'return_data', 60);

        return $ret;
    }

    /**
     * This function is for internal use to flash the initial
     * bootstrapper and bootloader to the Bricklets.
     * 
     * If you need to flash a boostrapper/bootloader (for exmaple
     * because you made your own Bricklet from scratch) please
     * take a look at our open source flash and test tool at
     * `https://github.com/Tinkerforge/flash-test <https://github.com/Tinkerforge/flash-test>`__
     * 
     * Don't use this function directly.
     * 
     * .. versionadded:: 2.5.0$nbsp;(Firmware)
     * 
     * @param int[] $data
     * 
     * @return int
     */
    public function setBrickletXMCFlashData($data)
    {
        $this->checkValidity();

        $payload = '';
        for ($i = 0; $i < 64; $i++) {
            $payload .= pack('C', $data[$i]);
        }

        $data = $this->sendRequest(self::FUNCTION_SET_BRICKLET_XMC_FLASH_DATA, $payload, 12);

        $payload = unpack('V1return_data', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'return_data');
    }

    /**
     * This function is only available in Master Brick hardware version >= 3.0.
     * 
     * Enables/disables all four Bricklets if set to true/false.
     * 
     * If you disable the Bricklets the power supply to the Bricklets will be disconnected.
     * The Bricklets will lose all configurations if disabled.
     * 
     * .. versionadded:: 2.5.0$nbsp;(Firmware)
     * 
     * @param bool $bricklets_enabled
     * 
     * @return void
     */
    public function setBrickletsEnabled($bricklets_enabled)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', intval((bool)$bricklets_enabled));

        $this->sendRequest(self::FUNCTION_SET_BRICKLETS_ENABLED, $payload, 0);
    }

    /**
     * Returns *true* if the Bricklets are enabled, *false* otherwise.
     * 
     * .. versionadded:: 2.5.0$nbsp;(Firmware)
     * 
     * 
     * @return bool
     */
    public function getBrickletsEnabled()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_BRICKLETS_ENABLED, $payload, 9);

        $payload = unpack('C1bricklets_enabled', $data);

        return (bool)$payload['bricklets_enabled'];
    }

    /**
     * The SPITF protocol can be used with a dynamic baudrate. If the dynamic baudrate is
     * enabled, the Brick will try to adapt the baudrate for the communication
     * between Bricks and Bricklets according to the amount of data that is transferred.
     * 
     * The baudrate will be increased exponentially if lots of data is sent/received and
     * decreased linearly if little data is sent/received.
     * 
     * This lowers the baudrate in applications where little data is transferred (e.g.
     * a weather station) and increases the robustness. If there is lots of data to transfer
     * (e.g. Thermal Imaging Bricklet) it automatically increases the baudrate as needed.
     * 
     * In cases where some data has to transferred as fast as possible every few seconds
     * (e.g. RS485 Bricklet with a high baudrate but small payload) you may want to turn
     * the dynamic baudrate off to get the highest possible performance.
     * 
     * The maximum value of the baudrate can be set per port with the function
     * BrickMaster::setSPITFPBaudrate(). If the dynamic baudrate is disabled, the baudrate
     * as set by BrickMaster::setSPITFPBaudrate() will be used statically.
     * 
     * .. versionadded:: 2.4.6$nbsp;(Firmware)
     * 
     * @param bool $enable_dynamic_baudrate
     * @param int $minimum_dynamic_baudrate
     * 
     * @return void
     */
    public function setSPITFPBaudrateConfig($enable_dynamic_baudrate, $minimum_dynamic_baudrate)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', intval((bool)$enable_dynamic_baudrate));
        $payload .= pack('V', $minimum_dynamic_baudrate);

        $this->sendRequest(self::FUNCTION_SET_SPITFP_BAUDRATE_CONFIG, $payload, 0);
    }

    /**
     * Returns the baudrate config, see BrickMaster::setSPITFPBaudrateConfig().
     * 
     * .. versionadded:: 2.4.6$nbsp;(Firmware)
     * 
     * 
     * @return array
     */
    public function getSPITFPBaudrateConfig()
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_GET_SPITFP_BAUDRATE_CONFIG, $payload, 13);

        $payload = unpack('C1enable_dynamic_baudrate/V1minimum_dynamic_baudrate', $data);

        $ret['enable_dynamic_baudrate'] = (bool)$payload['enable_dynamic_baudrate'];
        $ret['minimum_dynamic_baudrate'] = IPConnection::fixUnpackedUInt32($payload, 'minimum_dynamic_baudrate');

        return $ret;
    }

    /**
     * Returns the timeout count for the different communication methods.
     * 
     * The methods 0-2 are available for all Bricks, 3-7 only for Master Bricks.
     * 
     * This function is mostly used for debugging during development, in normal operation
     * the counters should nearly always stay at 0.
     * 
     * .. versionadded:: 2.4.3$nbsp;(Firmware)
     * 
     * @param int $communication_method
     * 
     * @return int
     */
    public function getSendTimeoutCount($communication_method)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('C', $communication_method);

        $data = $this->sendRequest(self::FUNCTION_GET_SEND_TIMEOUT_COUNT, $payload, 12);

        $payload = unpack('V1timeout_count', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'timeout_count');
    }

    /**
     * Sets the baudrate for a specific Bricklet port.
     * 
     * If you want to increase the throughput of Bricklets you can increase
     * the baudrate. If you get a high error count because of high
     * interference (see BrickMaster::getSPITFPErrorCount()) you can decrease the
     * baudrate.
     * 
     * If the dynamic baudrate feature is enabled, the baudrate set by this
     * function corresponds to the maximum baudrate (see BrickMaster::setSPITFPBaudrateConfig()).
     * 
     * Regulatory testing is done with the default baudrate. If CE compatibility
     * or similar is necessary in your applications we recommend to not change
     * the baudrate.
     * 
     * .. versionadded:: 2.4.3$nbsp;(Firmware)
     * 
     * @param string $bricklet_port
     * @param int $baudrate
     * 
     * @return void
     */
    public function setSPITFPBaudrate($bricklet_port, $baudrate)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('c', ord($bricklet_port));
        $payload .= pack('V', $baudrate);

        $this->sendRequest(self::FUNCTION_SET_SPITFP_BAUDRATE, $payload, 0);
    }

    /**
     * Returns the baudrate for a given Bricklet port, see BrickMaster::setSPITFPBaudrate().
     * 
     * .. versionadded:: 2.4.3$nbsp;(Firmware)
     * 
     * @param string $bricklet_port
     * 
     * @return int
     */
    public function getSPITFPBaudrate($bricklet_port)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('c', ord($bricklet_port));

        $data = $this->sendRequest(self::FUNCTION_GET_SPITFP_BAUDRATE, $payload, 12);

        $payload = unpack('V1baudrate', $data);

        return IPConnection::fixUnpackedUInt32($payload, 'baudrate');
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
     * The errors counts are for errors that occur on the Brick side. All
     * Bricklets have a similar function that returns the errors on the Bricklet side.
     * 
     * .. versionadded:: 2.4.3$nbsp;(Firmware)
     * 
     * @param string $bricklet_port
     * 
     * @return array
     */
    public function getSPITFPErrorCount($bricklet_port)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('c', ord($bricklet_port));

        $data = $this->sendRequest(self::FUNCTION_GET_SPITFP_ERROR_COUNT, $payload, 24);

        $payload = unpack('V1error_count_ack_checksum/V1error_count_message_checksum/V1error_count_frame/V1error_count_overflow', $data);

        $ret['error_count_ack_checksum'] = IPConnection::fixUnpackedUInt32($payload, 'error_count_ack_checksum');
        $ret['error_count_message_checksum'] = IPConnection::fixUnpackedUInt32($payload, 'error_count_message_checksum');
        $ret['error_count_frame'] = IPConnection::fixUnpackedUInt32($payload, 'error_count_frame');
        $ret['error_count_overflow'] = IPConnection::fixUnpackedUInt32($payload, 'error_count_overflow');

        return $ret;
    }

    /**
     * Enables the status LED.
     * 
     * The status LED is the blue LED next to the USB connector. If enabled is is
     * on and it flickers if data is transfered. If disabled it is always off.
     * 
     * The default state is enabled.
     * 
     * .. versionadded:: 2.3.2$nbsp;(Firmware)
     * 
     * 
     * @return void
     */
    public function enableStatusLED()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_ENABLE_STATUS_LED, $payload, 0);
    }

    /**
     * Disables the status LED.
     * 
     * The status LED is the blue LED next to the USB connector. If enabled is is
     * on and it flickers if data is transfered. If disabled it is always off.
     * 
     * The default state is enabled.
     * 
     * .. versionadded:: 2.3.2$nbsp;(Firmware)
     * 
     * 
     * @return void
     */
    public function disableStatusLED()
    {
        $this->checkValidity();

        $payload = '';

        $this->sendRequest(self::FUNCTION_DISABLE_STATUS_LED, $payload, 0);
    }

    /**
     * Returns *true* if the status LED is enabled, *false* otherwise.
     * 
     * .. versionadded:: 2.3.2$nbsp;(Firmware)
     * 
     * 
     * @return bool
     */
    public function isStatusLEDEnabled()
    {
        $this->checkValidity();

        $payload = '';

        $data = $this->sendRequest(self::FUNCTION_IS_STATUS_LED_ENABLED, $payload, 9);

        $payload = unpack('C1enabled', $data);

        return (bool)$payload['enabled'];
    }

    /**
     * Returns the firmware and protocol version and the name of the Bricklet for a
     * given port.
     * 
     * This functions sole purpose is to allow automatic flashing of v1.x.y Bricklet
     * plugins.
     * 
     * @param string $port
     * 
     * @return array
     */
    public function getProtocol1BrickletName($port)
    {
        $this->checkValidity();

        $ret = array();

        $payload = '';
        $payload .= pack('c', ord($port));

        $data = $this->sendRequest(self::FUNCTION_GET_PROTOCOL1_BRICKLET_NAME, $payload, 52);

        $payload = unpack('C1protocol_version/C3firmware_version/c40name', $data);

        $ret['protocol_version'] = $payload['protocol_version'];
        $ret['firmware_version'] = IPConnection::collectUnpackedArray($payload, 'firmware_version', 3);
        $ret['name'] = IPConnection::implodeUnpackedString($payload, 'name', 40);

        return $ret;
    }

    /**
     * Returns the temperature as measured inside the microcontroller. The
     * value returned is not the ambient temperature!
     * 
     * The temperature is only proportional to the real temperature and it has an
     * accuracy of ±15%. Practically it is only useful as an indicator for
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
     * Calling this function will reset the Brick. Calling this function
     * on a Brick inside of a stack will reset the whole stack.
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
     * Writes 32 bytes of firmware to the bricklet attached at the given port.
     * The bytes are written to the position offset * 32.
     * 
     * This function is used by Brick Viewer during flashing. It should not be
     * necessary to call it in a normal user program.
     * 
     * @param string $port
     * @param int $offset
     * @param int[] $chunk
     * 
     * @return void
     */
    public function writeBrickletPlugin($port, $offset, $chunk)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('c', ord($port));
        $payload .= pack('C', $offset);
        for ($i = 0; $i < 32; $i++) {
            $payload .= pack('C', $chunk[$i]);
        }

        $this->sendRequest(self::FUNCTION_WRITE_BRICKLET_PLUGIN, $payload, 0);
    }

    /**
     * Reads 32 bytes of firmware from the bricklet attached at the given port.
     * The bytes are read starting at the position offset * 32.
     * 
     * This function is used by Brick Viewer during flashing. It should not be
     * necessary to call it in a normal user program.
     * 
     * @param string $port
     * @param int $offset
     * 
     * @return array
     */
    public function readBrickletPlugin($port, $offset)
    {
        $this->checkValidity();

        $payload = '';
        $payload .= pack('c', ord($port));
        $payload .= pack('C', $offset);

        $data = $this->sendRequest(self::FUNCTION_READ_BRICKLET_PLUGIN, $payload, 40);

        $payload = unpack('C32chunk', $data);

        return IPConnection::collectUnpackedArray($payload, 'chunk', 32);
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
    public function callbackWrapperStackCurrent($data)
    {
        $payload = unpack('v1current', $data);

        if (array_key_exists(self::CALLBACK_STACK_CURRENT, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_STACK_CURRENT];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_STACK_CURRENT];

            call_user_func($function, $payload['current'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperStackVoltage($data)
    {
        $payload = unpack('v1voltage', $data);

        if (array_key_exists(self::CALLBACK_STACK_VOLTAGE, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_STACK_VOLTAGE];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_STACK_VOLTAGE];

            call_user_func($function, $payload['voltage'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperUSBVoltage($data)
    {
        $payload = unpack('v1voltage', $data);

        if (array_key_exists(self::CALLBACK_USB_VOLTAGE, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_USB_VOLTAGE];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_USB_VOLTAGE];

            call_user_func($function, $payload['voltage'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperStackCurrentReached($data)
    {
        $payload = unpack('v1current', $data);

        if (array_key_exists(self::CALLBACK_STACK_CURRENT_REACHED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_STACK_CURRENT_REACHED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_STACK_CURRENT_REACHED];

            call_user_func($function, $payload['current'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperStackVoltageReached($data)
    {
        $payload = unpack('v1voltage', $data);

        if (array_key_exists(self::CALLBACK_STACK_VOLTAGE_REACHED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_STACK_VOLTAGE_REACHED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_STACK_VOLTAGE_REACHED];

            call_user_func($function, $payload['voltage'], $user_data);
        }
    }

    /**
     * @internal
     * @param string $data
     */
    public function callbackWrapperUSBVoltageReached($data)
    {
        $payload = unpack('v1voltage', $data);

        if (array_key_exists(self::CALLBACK_USB_VOLTAGE_REACHED, $this->registered_callbacks)) {
            $function = $this->registered_callbacks[self::CALLBACK_USB_VOLTAGE_REACHED];
            $user_data = $this->registered_callback_user_data[self::CALLBACK_USB_VOLTAGE_REACHED];

            call_user_func($function, $payload['voltage'], $user_data);
        }
    }
}

?>
