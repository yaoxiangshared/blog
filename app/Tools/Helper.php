<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/6 0006
 * Time: 23:55
 */
namespace App\Tools;
use \Curl\Curl;
class Helper {
    public static function http_get($url){
        $curl=new Curl();
        $result=$curl->get($url);
        return $result;
    }
}