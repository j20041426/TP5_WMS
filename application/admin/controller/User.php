<?php

namespace app\admin\controller;

use think\Controller;
use app\admin\model\Users;
use think\Request;

class User extends Controller
{
    public function index()
    {
        $list = Users::all();
        $this->assign('list', $list);
        return $this->fetch('index');
    }

    public function find()
    {

    }

    public function create()
    {
        return $this->fetch('create');
    }

    public function save(Request $request)
    {
        $data = $request->param();
        if(isset($data['id'])){
            $user = Users::find($data['id']);
            $res = $user->save($data);
        }else{
            $user = new Users($data);
            $user->save();
        }
        return $this->index();
    }

    public function read($id)
    {
        //
    }

    public function edit($id)
    {
        $user = Users::get($id);
        $this->assign('user', $user);
        return $this->fetch('edit');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function delete($id)
    {
        Users::destroy($id);
        return $this->index();
    }
}
