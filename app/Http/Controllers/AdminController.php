<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/9 0009
 * Time: 22:32
 */
namespace App\Http\Controllers;

class AdminController extends Controller{

    public function index(){
//        return view('chat');
        return view('/admin/welcome/index');
    }
}