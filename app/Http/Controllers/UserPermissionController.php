<?php

namespace App\Http\Controllers;

use App\Models\PermissionCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Session;
use Yajra\Datatables\Datatables;
use Spatie\Permission\Models\Role;

class UserPermissionController extends Controller
{
    public function UserList()
    {
        $user = User::get();
        return view('user_list',compact('user'));
    }

    public function UserRestriction($id)
    {
        $user = User::find($id);
        $permissions = $user->getPermissionNames()->toArray();
        $permissionCategory = PermissionCategory::orderBy('type')->get();
        $permissionCategorys = $permissionCategory->groupBy('type');

        return view('user_restictions', compact('permissionCategorys','user','permissions'));
    }

    public function UserRectictionsUpdate(Request $request)
    {
        $user = User::find($request->id);
        $user->syncPermissions($request->permission);
        return redirect('user-permission');
    }

    public function Language()
    {
        return view('language');
    }


    // public function Datatable()
    // {
    //     return view('datatable');
    // }

    // public function DatatableData()
    // {
    //     $posts = User::get();
    //     $this->i = 1;
    //     return DataTables::of($posts)
    //     ->addColumn('id', function ($data) {
    //         return $this->i++;
    //     })
    //     ->addColumn('action', function ($data) {
    //         $htmlData = '';
    //         $htmlData .= '<a href="javascript:void(0)" data-id="'.$data->id.'" class="btn btn-info btn-sm tableEdit"><i class="fa fa-edit"></i></a>';
    //         $htmlData .= '<a href="javascript:void(0)" data-id="'.$data->id.'" class="btn btn-danger btn-sm tableDelete"><i class="fa fa-trash"></i></a>';
    //         return $htmlData;
    //     })
    //     ->rawColumns(['action'])
    //     ->toJson();
    // }

}
