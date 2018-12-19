<?php
require_once 'config.class.php';

//Config for SmtpTransport
Config::set('host', 'smtp.gmail.com');
Config::set('port', 587);
Config::set('user_name', 'samokish.viktoria@gmail.com');
Config::set('password', '****');
Config::set('encryption', 'tls');

//sender
Config::set('name', 'Shop name');
Config::set('email', 'samokish.viktoria@gmail.com');



