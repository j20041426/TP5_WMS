<?php

namespace app\admin\controller;

use think\Controller;
use app\admin\model\Users;
use think\Session;

class Login extends BaseController
{
    public function index()
    {
        echo 111;
        if(Session::has('uid')){
            return $this->fetch('index/index');
        }
        if($this->request->isPost()){
            $data = $this->request->param();
            $result = $this->validate(
                $data,
                [
                    'username' => 'require',
                    'password' => 'require'
                ]
            );
            if($result !== true){
                $this->error($result);
            }
            $users = new Users();
            $res = $users->login($data);
            if($res['code'] == 1){
                Session::set('uid',1);
                $this->success($res['msg'],'admin/index/index');
            }else{
                $this->error($res['msg']);
            }
        }
        return $this->fetch();
    }

    public function logout()
    {
        Session::delete('uid');
        $this->redirect('login/index');
    }
}