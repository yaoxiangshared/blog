<?php
/**
 * Created by PhpStorm.
 * User: yaoxiang
 * Date: 2016/12/14
 * Time: 20:56
 */
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Resume;

class DeployController extends Controller{

    public function index(){
        return view('list');
    }
}