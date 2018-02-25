<?php

namespace app\admin\controller;

class Operation extends BaseController
{
    public function import()
    {
        if ($this->request->isPost()) {

        }
        return $this->fetch('operation/import');
    }

    public function export()
    {
        if ($this->request->isPost()) {

        }
        return $this->fetch('operation/export');
    }
}