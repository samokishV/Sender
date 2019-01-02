<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18.12.18
 * Time: 18:35
 */

namespace Sender\Transport;

require_once __DIR__.'/../vendor/autoload.php';

class SwiftMailerTransport implements TransportInterface
{
    public static function create($config)
    {
        $transport = self::createTransport($config);
        $mailer = self::createMailer($transport);
        return $mailer;
    }

    public static function createTransport($config)
    {
        $transport = (new \Swift_SmtpTransport())
            ->setHost($config['host'])
            ->setPort($config['port'])
            ->setUsername($config['user_name'])
            ->setPassword($config['password'])
            ->setEncryption($config['encryption']);

        return $transport;
    }

    public static function createMailer($transport)
    {
        $mailer = new \Swift_Mailer($transport);
        return $mailer;
    }

}