<?php
require_once 'core/Init.php';

class Config{
    public static function get($path = null){
        if($path){
            $config = $GLOBALS['config'];
            $path = explode('/',$path);
            
            foreach ($path as $bit){
                if(isset($config[$bit])){
                    $config = $config[$bit];
                }
            }
            return ($config);
        }
        return false;
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

