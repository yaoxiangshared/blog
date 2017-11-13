<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/29
 * Time: 23:09
 */
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Resume;

class ListController extends Controller{

    public function index(){
        $resumeList=Resume::all();
        return view('list',['resumeList'=>$resumeList]);
    }

    public  function total(){

        echo json_encode(array('total'=>455,'pig'=>1234));exit();
        return view('home');
    }
}