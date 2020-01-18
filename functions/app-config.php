<?php

$config = array(
    'mail' => array(
        'provider' => 'smtp', //  smtp | sendmail | mail - PHP mail() function
        'smtp' => array(
            'debug' => 2, // (0 = off (for production use) | 1 = client messages | 2 = client and server messages)
            'host' => 'ssl://smtp.gmail.com',
            'port' => 587,
            'secure' => 'tls',
            'auth' => true,
            'username' => 'yourgmail@gmail.com',
            'password' => 'yourpassword',
        ),
        'from' => array(
            'yourgmail@gmail.com', 'Your name'
        ),
        'to' => array(
            'youremail' => 'your name',
        ),
        'cc' => array(
            'youremail' => 'your name',
        ),
        'bcc' => array(
            'youremail' => 'your name',
        ),
    ),
);

date_default_timezone_set('Asia/Colombo');
?>