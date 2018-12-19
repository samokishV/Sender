<?php
require_once 'vendor/autoload.php';
require_once 'config/config.php';
require_once 'config/config.class.php';
require_once 'Transport/SwiftMailerTransport.php';

class Messenger
{

    static function send($type, $user)
    {
        $host = Config::get('host');
        $port = Config::get('port');
        $userName = Config::get('user_name');
        $password = Config::get('password');
        $encryption = Config::get('encryption');

        $sender = [
            'name' => Config::get('name'),
            'email' => Config::get('email')
        ];

// Create the Transport
        $transport = SwiftMailerTransport::connect($host, $port, $userName, $password, $encryption);

// Create the Mailer using your created Transport
        $mailer = new Swift_Mailer($transport);

    include $type.'.php';
    $mail = new $type();

// Create a message
        $message = (new Swift_Message($mail->getTitle()))
            ->setFrom([$sender['email'] => $sender['name']])
            ->setTo([$user['email'] => $user['first name'].' '.$user['last name'] ])
            ->setBody($mail->getHtml());

// Send the message
        $result = $mailer->send($message);

// Sendmail
        $transport = new Swift_SendmailTransport('/usr/sbin/sendmail -bs');

    }

}