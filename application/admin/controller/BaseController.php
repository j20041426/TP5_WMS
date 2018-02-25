<?php
namespace app\admin\controller;

use think\Controller;
use think\Session;

class BaseController extends Controller
{
    public function _initialize()
    {
        if(!Session::has('uid')) {
            return $this->redirect('/login');
        }
    }
}