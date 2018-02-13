<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\model\Shelves;
use app\admin\model\Warehouses;

class Shelf extends BaseController
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        $list = Shelves::all();
        $this->assign('list', $list);
        return $this->fetch('index');
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        $warehouses = Warehouses::all();
        $this->assign('warehouses', $warehouses);
        return $this->fetch('create');
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        $data = $request->param();
        $row = $data['row_num'];
        $col = $data['col_num'];
        $view = serialize(Shelves::generateView($row, $col));
        if (!isset($data['view']) || empty($data['view'])) {
            $data['view'] = $view;
        }
        if(isset($data['id'])) {
            $shelf = Shelves::find($data['id']);
            $res = $shelf->save($data);
        }else{
            $shelf = new Shelves($data);
            $shelf->save();
        }
        $this->redirect('/shelf');
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        $warehouses = Warehouses::all();
        $this->assign('warehouses', $warehouses);
        $shelf = Shelves::get($id);
        $this->assign('shelf', $shelf);
        return $this->fetch('edit');
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}
