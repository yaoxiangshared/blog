<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/6 0006
 * Time: 22:56
 */
namespace App\Http\Controllers\Microapp;
use App\Http\Controllers\Controller;
use App\MicroappUser;
use Illuminate\Http\Request;
use App\Tools\Helper;
use Redis;

class ApiController extends Controller{
    const APP_ID='wxdc403fb838ed16c7';
    const APP_SECRET='df24d352ad109ac3a45eef5fc7e1fb82';

    public function login(Request $request){
        if($request->session()->has('token')){
            $token=$request->session()->get('token');
            return response()->json(['code'=>2,'msg'=>'ok','data'=>$token]);
        }else {

            $code = $request->input('code');
            $url = 'https://api.weixin.qq.com/sns/jscode2session?appid=' . self::APP_ID
                . '&secret=' . self::APP_SECRET . '&js_code=' . $code . '&grant_type=authorization_code';

//        $result=Helper::http_get($url);

            $result = array(
                'open_id' => '11111',
                'session_key' => 'adsds'
            );

            $value = $result['open_id'].$result['session_key'];
            $token=hash_hmac('sha1',$value,'microapp');
            Redis::set($token,$value);
            $user = new MicroappUser();
            $user->open_id = $result['open_id'];
            $user->save();

            return response()->json(['code'=>1,'msg'=>'ok','data'=>$token]);
        }


    }


}
