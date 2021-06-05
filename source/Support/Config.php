<?php

/**
 * DATA
 */

define("CONF_DATE_BIRTH","d/m/Y");
define("CONF_DATE_BR","d/m/Y H:i:s");
define("CONF_DATE_APP","Y-m-d H:i:s");


/**
 * MESSAGE
 */
define("CONF_MESSAGE_CLASS", "trigger");
define("CONF_MESSAGE_INFO", "info");
define("CONF_MESSAGE_SUCCESS", "success");
define("CONF_MESSAGE_WARNING", "warning");
define("CONF_MESSAGE_ERROR", "error");


/**
 * PASSWORD
 */
define("CONF_PASSWD_MIN_LEN", 8);
define("CONF_PASSWD_MAX_LEN", 40);
define("CONF_PASSWD_ALGO", PASSWORD_DEFAULT);
define("CONF_PASSWD_OPTION", ["cost" => 10]);



/**
 * VIEW
 */
define("CONF_VIEW_PATH", __DIR__.'/../../assets/views');
define("CONF_VIEW_EXT", "php");