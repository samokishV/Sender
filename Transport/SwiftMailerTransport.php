<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18.12.18
 * Time: 18:35
 */

include 'TransportInterface.php';

class SwiftMailerTransport implements TransportInterface {

    static function connect() {
        $config = include 'config/config.php';
        $transport = new Swift_SmtpTransport();
        $transport->setHost($config['host']);
        $transport->setPort($config['port']);
        $transport->setUsername($config['user_name']);
        $transport->setPassword($config['password']);
        $transport->setEncryption($config['encryption']);
        return $transport;

    }

}