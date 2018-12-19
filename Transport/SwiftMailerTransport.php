<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18.12.18
 * Time: 18:35
 */
include 'Sender/config/config.php';
include 'TransportInterface.php';

class SwiftMailerTransport implements TransportInterface {

    static function connect($host, $port, $userName, $password, $encryption) {
        $transport = new Swift_SmtpTransport();
        $transport->setHost($host);
        $transport->setPort($port);
        $transport->setUsername($userName);
        $transport->setPassword($password);
        $transport->setEncryption($encryption);
        return $transport;

    }

}