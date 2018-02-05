<?php

// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
use Think\Request;
use Think\Config;

function getMenuList()
{
    $request = Request::instance();
    $path = $request->path();

    $menus = Config::get('menus');

    foreach ($menus as $index => $menu) 
    {
        if (isset($menu['children'])) 
        {
            $active = false;
            foreach ($menu['children'] as $k => $v) 
            {
                if (false !== strpos('/'.$path, $v['url'])) 
                {
                    $menus[$index]['children'][$k]['active'] = true;
                    $active = true;
                } else {
                    $menus[$index]['children'][$k]['active'] = false;
                }
            }
            $menus[$index]['active'] = true;
        } else {
            if (false !== strpos('/'.$path, $menu['url'])) 
            {
                $menus[$index]['active'] = true;
            } else {
                $menus[$index]['active'] = false;
            }
        }
    }
    return $menus;
}
