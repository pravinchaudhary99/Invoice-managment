<?php

namespace App\Http\Controllers\Roles;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role as RolesModel;

class RoleController extends Controller
{
    public function index() {
        $roles = RolesModel::with(['users','permissions'])->get()->toArray();
        return view('roles.index',compact('roles'));
    }

    public function view($id) {
        $roleId = decrypt($id);
        $role = RolesModel::with(['users','permissions'])->find($roleId)->toArray();
        return view('roles.view',compact('role'));
    }

    public function viewData(Request $request, $id) {
        $roleId = decrypt($id);
        Log::info("role Id : ".decrypt($id));
        $user_data = [];
        $draw = $request->draw;
        $start = $request->start;
        $length = $request->length;
        $search = $request->search['value'];
        $order = $request->order[0]['column'] ?? null;
        $sort_order = $request->order[0]['dir'] ?? null;
        $filter = $request->search['regex'];
        $sort_query = null;
        if ($order) {
            $sort_query = $request->columns[$order]['data'];
        }
        $start_number = intval((int)$start * (int)$length);
        if(!empty($search)) {
            $user_data = User::whereHas('roles', function($query) use ($roleId) {
                $query->where('id',$roleId);
            })->where('name', 'like', '%' . $search . '%')->orWhere('email','like','%' . $search . '%');
        }else {
            if (!empty($sort_order)) {
                $user_data = User::whereHas('roles', function($query) use ($roleId) {
                    $query->where('id',$roleId);
                })->orderBy($sort_query,$sort_order);
            }else{
                $user_data = User::whereHas('roles', function($query) use ($roleId){
                    $query->where('id',$roleId);
                })->orderBy('created_at','desc');
            }
        }
        if($filter == "filter"){
            $user_data = User::whereHas('roles', function($query) use ($roleId) {
                $query->where('id',$roleId);
            })->whereMonth('created_at','=',$search);
        }
        $count = $user_data->get()->count();
        $data = [
            "draw"=> $draw,
            "recordsTotal"=> $count,
            "recordsFiltered"=> $count,
        ];
        $data['data'] = $user_data->skip($start_number)->take((int)$length)->get();
        return response()->json($data);
    }

    public function create() {
        // TODO
    }

    public function edit() {
        // TODO
    }

    public function delete() {
        // TODO
    }
}
