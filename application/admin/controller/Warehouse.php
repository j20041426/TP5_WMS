<?php

namespace app\admin\controller;

use think\Request;
use app\admin\model\Warehouses;

class Warehouse extends BaseController
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        $list = Warehouses::all();
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
        if(isset($data['id'])){
            $warehouse = Warehouses::find($data['id']);
            $res = $warehouse->save($data);
        }else{
            $warehouse = new Warehouses($data);
            $warehouse->save();
        }
        $this->redirect('/warehouse');
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
        $warehouse = Warehouses::get($id);
        $this->assign('warehouse', $warehouse);
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
        if (Warehouses::hasShelves($id)) {
            $this->error('库房中还有货架，不能删除');
        } else {
            Warehouses::destroy($id);
            $this->success('删除成功', '/user');
        }
    }
}
