<?php
session_start();
$GLOBALS['config'] = array(
    'mysql' => array(
        'host' => 'localhost',
        'username' => '',
        'password' => '',
        'db' => ''
    ),
    'remember' => array(
        'cookie_name' => 'hash',
        'cookie_expiry' => 172800
    ),
    'session' => array(
        'session_name' => 'user',
        'token_name' => 'token'
    )
);


spl_autoload_register(function($class){
require_once 'classes/'.$class.'.php'; 
});

require_once 'functions/sanitize.php';

if(Cookie::exists(Config::get('remember/cookie_name')) && !Session::exists(Config::get('session/session_name'))){

    $hash = Cookie::get(Config::get('remember/cookie_name'));
    $hashCheck = DB::getInstance()->getAll('users_session', array('hash', '=', $hash));
    
    if($hashCheck->count()){
       $user = new User($hashCheck->getFirst()->user_id);
       $user->login();
    }
}
