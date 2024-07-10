<?php

namespace App\Models;

use App\Models\RoleModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PermissionModel extends Model
{
    use HasFactory;
    protected $table = 'permission';

    static public function getRecord(){
        $getPermission = PermissionModel::groupBy('groupby')->get();
        $result = array();
        foreach ($getPermission as $key => $value) {
            $getPermissionGroup = PermissionModel::getPermissionGroup($value->groupby);
            $data = array();
            $data['id'] = $value->id;
            $data['name'] = $value->name;
            $group = array();
            foreach ($getPermissionGroup as $valueG) {
                $dataG = array();
                $dataG['id'] = $valueG->id;
                $dataG['name'] = $valueG->name;
                $group[] = $dataG;
            }
            $data['group'] = $group;
            $result[] = $data;
        }

        return $result;
    }

    static public function getPermissionGroup($groupby){
        return PermissionModel::where('groupby', '=', $groupby)->get();
    }

    static public function getSingle($id){
        return RoleModel::find($id);
    }
}