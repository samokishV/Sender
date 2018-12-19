<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 19.12.18
 * Time: 11:19
 */

include "Messenger.php";

$user = [
    'first name' => 'Viktoria',
    'last name' => 'Samokish',
    'email' => 'samokish.viktoria@gmail.com'
];

Messenger::send('RegistrationApprove', $user);