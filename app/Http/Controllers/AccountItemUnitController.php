<?php

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use App\Models\Unit;
	use App\Models\Category;
	use App\Models\Brand;
	use App\Models\Size;
	use App\Models\Color;
	use Illuminate\Support\Facades\Auth;
	use Illuminate\Support\Carbon;
	use Yajra\Datatables\Datatables;
	use Illuminate\Support\Str;

	class AccountItemUnitController extends Controller
	{
		public function unit()
		{
			return view('products.unit');
		}
		public function UnitEditData(Request $request)
		{
			$query = Unit::find($request->id);
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

		public function UnitInsert(Request $request)
		{
			if($request->has('delete')){
				$query = Unit::find($request->delete);
				$query->delete();

				$message = 'Unit Deleted Successfully!';
			}else{

				$request->validate(array(
				    'name'    =>  'required',
				));

				$message = 'Unit Create Successfully!';

				if($request->has('id')){
					$query = Unit::find($request->id);
					$message = 'Unit Updated Successfully!';

					if(!$query){
						return response()->json([
						'status' => "error",
						'message' => "Not Found, Please Try Again..."
						],422);
					}
				}else{
					$query = new Unit;
					$query->user_id = Auth::id();
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
		public function UnitData(Request $request)
		{
			$Accounts_unit = Unit::orderBy('id','desc')->get();
			$this->i=1;
			return DataTables::of($Accounts_unit)
			->addColumn('user_id', function ($data){
                return $data->User ? $data->User->name:'';
			})
            ->addColumn('account_item_unit_id', function ($data){
                return $data->Unit? $data->Unit->name:'';
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

        // public function product()
		// {
        //     $Categories = Category::where('status','Active')->get();
        //     $Brands = Brand::where('status','Active')->get();
        //     $Units = Unit::where('status','Active')->get();
		// 	return view('products.product',compact('Categories','Brands','Units'));
		// }

        public function Size()
		{
			return view('products.size');
		}

        public function SizeData(Request $request)
		{
			$Size = Size::orderBy('id','desc')->get();
			$this->i=1;
			return DataTables::of($Size)
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

        public function SizeInsert(Request $request)
		{
			if($request->has('delete')){
				$query = Size::find($request->delete);
				$query->delete();

				$message = 'Size Deleted Successfully!';
			}else{

				$request->validate(array(
				    'name'    =>  'required',
				));

				$message = 'Size Create Successfully!';

				if($request->has('id')){
					$query = Size::find($request->id);
					$message = 'Size Updated Successfully!';

					if(!$query){
						return response()->json([
						'status' => "error",
						'message' => "Not Found, Please Try Again..."
						],422);
					}
				}else{
					$query = new Size;
					$query->user_id = Auth::id();
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

        public function SizeEditData(Request $request)
		{
			$query = Size::find($request->id);
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

		public function Color()
		{
			return view('products.color');
		}

		public function ColorData(Request $request)
		{
			$Color = Color::orderBy('id','desc')->get();
			$this->i=1;
			return DataTables::of($Color)
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

		public function ColorInsert(Request $request)
		{
			if($request->has('delete')){
				$query = Color::find($request->delete);
				$query->delete();

				$message = 'Color Deleted Successfully!';
			}else{

				$request->validate(array(
				    'name'    =>  'required',
				));

				$message = 'Color Create Successfully!';

				if($request->has('id')){
					$query = Color::find($request->id);
					$message = 'Color Updated Successfully!';

					if(!$query){
						return response()->json([
						'status' => "error",
						'message' => "Not Found, Please Try Again..."
						],422);
					}
				}else{
					$query = new Color;
					$query->user_id = Auth::id();
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

		public function ColorEditData(Request $request)
		{
			$query = Color::find($request->id);
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

	}
