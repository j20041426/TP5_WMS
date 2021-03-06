<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '__rest__'=>[
        // 指向index模块的blog控制器
        'user'=>'admin/user',
        'warehouse'=>'admin/warehouse',
        'shelf'=>'admin/shelf',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],
    '/home' => 'admin/index/index',
    '/login' => 'admin/login/index',
    '/import' => 'admin/operation/import',
    '/export' => 'admin/operation/export'
];
