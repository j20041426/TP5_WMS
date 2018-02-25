<?php
namespace app\admin\model;

use think\Config;
use think\Model;

class Users extends Model
{
    public function isLogin()
    {

    }

    public function login($data)
    {
        $res = $this->where('username',$data['username'])->find();
        if(!$res){
            return ['code'=>0,'msg'=>'用户名不存在'];
        }
        $res = $this->where('username',$data['username'])
                    ->where('password',self::crypt($data['password']))
                    ->find();
        if(!$res){
            return ['code'=>0,'msg'=>'密码错误'];
        }     
        return ['code'=>1,'msg'=>'登录成功'];
    }

    public static function crypt($password)
    {
        return md5($password . Config::get('app_key'));
    }
}