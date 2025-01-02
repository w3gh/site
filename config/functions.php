<?php

use yii\helpers\Url;
use yii\helpers\VarDumper;

/**
 * Creates a relative URL using the given route and parameters.
 * @param $params
 * @return string
 */
function url($params) {
    return Url::toRoute($params);
}

/**
 * Dumps a variable in terms of a string.
 * This method achieves the similar functionality as var_dump and print_r
 * but is more robust when handling complex objects such as Yii controllers.
 * @param $var
 * @return string
 */
function dump($var) {
    return VarDumper::dumpAsString($var, 10, true);
}