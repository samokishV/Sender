<?php

namespace Sender;

use Sender\views\MailView as MailView;

class Messenger
{
    static function send($type, $user, $data, $config, $mailer)
    {
        $mail = new MailView($type, $data);

        $sender = [
            'name' => $config['name'],
            'email' => $config['email']
        ];

        $message = (new \Swift_Message($mail->getTitle($type, $data)))
            ->setFrom([$sender['email'] => $sender['name']])
            ->setTo([$user['email'] => $user['name']])
            ->setBody($mail->getHtml(), "text/html");

        $result = $mailer->send($message);
    }

}