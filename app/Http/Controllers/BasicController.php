<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Yajra\Datatables\Datatables;

class BasicController extends Controller
{
    // Function for data view page
    public function View()
    {
        return view('admin.view');
    }

    public function DatatableData()
    {
        $posts = User::get();
        $this->i = 1;
        return DataTables::of($posts)
        ->addColumn('id', function ($data) {
            return $this->i++;
        })
        ->addColumn('action', function ($data) {
            $htmlData = '';
            $htmlData .= '<a href="javascript:void(0)" data-id="'.$data->id.'" class="btn btn-info btn-sm tableEdit"><i class="fa fa-edit"></i></a>&nbsp;';
            $htmlData .= '<a href="javascript:void(0)" data-id="'.$data->id.'" class="btn btn-danger btn-sm tableDelete"><i class="fa fa-trash"></i></a>';
            return $htmlData;
        })
        ->rawColumns(['action'])
        ->toJson();
    }

    public function UserInsert(Request $request)
    {
        if ($request->has('delete')) {
            $query = User::find($request->delete);
            $query->delete();

            $message = 'User Deleted Successfully!';
        } else {
            $request->validate([
                'name' => 'required',
                'email' => 'required',
            ]);

            $message = 'User Create Successfully!';

            if ($request->has('id')) {
                $query = User::find($request->id);
                $message = 'User Updated Successfully!';

                if (!$query) {
                    return response()->json([
                    'status' => 'error',
                    'message' => 'Not Found, Please Try Again...',
                    ], 422);
                }
            } else {
                $query = new User();
            }


            $query->name  = $request->name;
            $query->email = $request->email;
            if (!empty($request->password)) {
                $query->password = Hash::make($request->password);
            }
            $query->save();
        }

        return response()->json([
            'status' => 'success',
            'message' => $message
        ]);
    }

    public function UserEdit(Request $request)
    {
        $query = User::find($request->id);
        if (!$query) {
            return response()->json([
            'status' => 'error',
            'message' => 'Not Found, Please Try Again...',
            ], 422);
        }

        return response()->json([
        'status' => 'success',
        'data' => $query,
        ]);
    }
}
