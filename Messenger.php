<?php
require_once 'vendor/autoload.php';
require_once 'Transport/SwiftMailerTransport.php';

class Messenger
{

    static function send($type, $user, $data)
    {
        $config = include('/home/NIX/phpstudent/www/app/Sender/config/config.php');
        $sender = [
            'name' => $config['name'],
            'email' => $config['email']
        ];

// Create the Transport
        $transport = SwiftMailerTransport::connect();



// Create the Mailer using your created Transport
        $mailer = new Swift_Mailer($transport);

        include "mailview.php";

        $mail = new MailView($type, $data);

// Create a message
        $message = (new Swift_Message($mail->getTitle()))
            ->setFrom([$sender['email'] => $sender['name']])
            ->setTo([$user['email'] => $user['name']])
            ->setBody($mail->getHtml(), "text/html");

// Send the message
        $result = $mailer->send($message);
        /*
  // Sendmail
          $transport = new Swift_SendmailTransport('/usr/sbin/sendmail -bs');

          */

    }

}