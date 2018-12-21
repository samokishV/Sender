<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 19.12.18
 * Time: 11:19
 */

include "Messenger.php";

$user = [
    'name' => 'Viktoria',
    'email' => 'samokish.viktoria@gmail.com'
];

$_POST['name'] = "myName";
$_POST['email'] = "my@mail.ru";
$_POST['subject'] = "spam";
$_POST['message'] = "myMessage";

Messenger::send('ContactUs', $user, $_POST);

