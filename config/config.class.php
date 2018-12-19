<?php
/**
 * Created by PhpStorm.
 * User: Victoria
 * Date: 18-Dec-18
 * Time: 3:00 PM
 */

class Config {

    protected static $settings = array();

    public static function get($key) {
        return isset(self::$settings[$key]) ? self::$settings[$key] : null;
    }

    public static function set($key, $value) {
        self::$settings[$key] = $value;
    }

}