<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 19.12.18
 * Time: 11:19
 */

use Sender\Messenger as Messenger;
use Sender\Transport\SwiftMailerTransport as  SwiftMailerTransport;

require_once 'vendor/autoload.php';

$user = [
    'name' => 'Viktoria',
    'email' => 'samokish.viktoria@gmail.com'
];

$_POST['name'] = "myName";
$_POST['email'] = "my@mail.ru";
$_POST['subject'] = "spam";
$_POST['message'] = "myMessage";

$config = include __DIR__.'/config/config.php';

$mailer = SwiftMailerTransport::create($config);

Messenger::send('ContactUs', $user, $_POST, $config, $mailer);

