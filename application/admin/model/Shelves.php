<?php
namespace app\admin\model;

use think\Model;

class Shelves extends Model 
{
    public function warehouses()
    {
        return $this->belongsTo('Warehouses', 'wid');
    }

    public static function generateView($row, $col)
    {
        $ret = [];
        for ($i=0;$i<$row;$i++) {
            $temp = [];
            for ($j=0;$j<$col;$j++) {
                array_push($temp, 0);
            }
            array_push($ret, $temp);
        }
        return $ret;
    }
}