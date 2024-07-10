<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoleModel;
use App\Models\PermissionModel;
use App\Models\PermissionRoleModel;

class RoleController extends Controller
{
    public function list(){
        $data['getRecord'] = RoleModel::getRecord();
        return view('panel.role.list',$data);
    }

    public function add(){
        $getPermission = PermissionModel::getRecord();
        $data['getPermission'] = $getPermission;
        return view('panel.role.add', $data);
    }

    public function insert(Request $request){
        $save = new RoleModel;
        $save->name = $request->name;
        $save->save();

        PermissionRoleModel::InsertUpdateRecord($request->permission_id, $save->id);

        return redirect()->back()->with('success','Role successfully created!');
    }

    public function edit(Request $request,$id){
        $data['getRecord'] = RoleModel::getSingle($id);
        $data['getPermission']= PermissionModel::getRecord();
        $data['getRolePermission'] = PermissionRoleModel::getRolePermission($id);
        return view('panel.role.edit',$data);
    }

    public function update(Request $request,$id){
        $save = RoleModel::getSingle($id);
        $save->name = $request->name;
        $save->save();
        
        PermissionRoleModel::InsertUpdateRecord($request->permission_id, $save->id);

        return redirect()->back()->with('success','Role successfully updated!');
    }

    public function delete($id){
        $save = RoleModel::getSingle($id);
        $save->delete();
        return redirect()->back()->with('success','Role successfully Deleted!');

    }
}