<?php
/**
 * Created by PhpStorm.
 * User: Nam
 * Date: 4/1/2016
 * Time: 12:31 AM
 */
require_once('../jkshfgsfughfsdfgjdfgh/function.php');
require_once('../jkshfgsfughfsdfgjdfgh/loader.php');
require_once('../jkshfgsfughfsdfgjdfgh/const.php');
$username = $_POST[USERNAME];
$password = $_POST[PASSWORD];
if (!empty($username) && !empty($password)) {
    $result = insertAccount($username, $password);
    if (!$result) {
        ResponseMessage(CODE_FAIL, "fail", "user exist", null);
    }
} else
    ResponseMessage(CODE_FAIL, "fail", "invalid data", null);
?>