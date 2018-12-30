<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 19.12.18
 * Time: 11:03
 */

namespace Sender\Transport;

interface TransportInterface {
    public static function create($config);
}