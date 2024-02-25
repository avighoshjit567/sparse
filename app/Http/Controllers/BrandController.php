<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Yajra\Datatables\Datatables;

class BrandController extends Controller
{
		public function Brand()
		{
			return view('products.brands');
		}
		public function BrandEditData(Request $request)
		{
			$query = Brand::find($request->id);
			if(!$query){
				return response()->json([
				'status' => "error",
				'message' => "Not Found, Please Try Again..."
				],422);
			}

			return response()->json([
			'status' => "success",
			'data' => $query,

			]);

		}

		public function BrandInsert(Request $request)
		{
			if($request->has('delete')){
				$query = Brand::find($request->delete);
				$query->delete();

				$message = 'Brand Deleted Successfully!';
			}else{

				$request->validate(array(
				    'name'    =>  'required',
				));

				$message = 'Brand Create Successfully!';

				if($request->has('id')){
					$query = Brand::find($request->id);
					$message = 'Brand Updated Successfully!';

					if(!$query){
						return response()->json([
						'status' => "error",
						'message' => "Not Found, Please Try Again..."
						],422);
					}
				}else{
					$query = new Brand;
					$query->user_id = Auth::id();
				}

                if ($request->hasFile('image')) {
                    // image code
                    $image_name        = floor(time() - 999999999);
                    $ext               = strtolower($request->file('image')->getClientOriginalExtension());
                    $image_full_name   = $image_name.'.'.$ext;
                    $upload_path       = "public/images/brand_images/";
                    $image_url         = $upload_path.$image_full_name;
                    $success           = $request->file('image')->move($upload_path,$image_full_name);
                    $query->image      = $image_url;
                }

				$query->name = $request->name;
				$query->status = 'Active';
				$query->user_id = Auth::id();
				$query->save();
			}
			return response()->json([
                'status' => "success",
                'message' => $message,
			]);
		}
		public function BrandData(Request $request)
		{
			$Brand = Brand::orderBy('id','desc')->get();

			 $this->i=1;
			return DataTables::of($Brand)
			->addColumn('user_id', function ($data){
				return $data->User ? $data->User->name:'';
			})
			->addColumn('id', function ($data){
                return $this->i++;
			})
			->addColumn('action', function ($data){
				$htmlData='';
                $htmlData .= '<a href="javascript:void(0)" data-id="'.$data->id.'" class="btn btn-info btn-sm tableEdit"><i class="fa fa-edit"></i></a>&nbsp;';
                $htmlData .='<a href="javascript:void(0)" data-id="'.$data->id.'" class="btn btn-danger btn-sm tableDelete"><i class="fa fa-trash"></i></a>';
			 return $htmlData;
			})
			->toJson();
		}
}
