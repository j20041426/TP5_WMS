<?php
namespace app\admin\model;

use think\Model;

class Warehouses extends Model 
{
    public function shelves()
    {
        return $this->hasMany('Shelves', 'wid');
    }

    public static function hasShelves($id)
    {
        var_export(self::get($id)->shelves);
    }
}