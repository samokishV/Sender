<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 19.12.18
 * Time: 11:03
 */

interface TransportInterface {
    static function connect($host, $port, $userName, $password, $encryption);
}