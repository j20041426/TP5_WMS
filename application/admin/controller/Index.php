<?php

namespace app\admin\controller;

class Index extends BaseController
{
    public function index()
    {
        return $this->fetch();
    }

    public function test()
    {
        return $this->fetch('test');
    }

    public function create()
    {
        //
    }

    public function save(Request $request)
    {
        //
    }

    public function read($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function delete($id)
    {
        //
    }
}
