<?php

namespace App\Http\Controllers;

    use App\Models\Category;
    use Carbon\Carbon;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Str;
    use Yajra\Datatables\Datatables;

    class CategoryController extends Controller
    {
        public function category()
        {
            return view ('products.category');
        }

        public function CategoryEditData(Request $request)
        {
            $query = Category::find($request->id);
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

        public function CategoryInsert(Request $request)
        {
            if ($request->has('delete')) {
                $query = Category::find($request->delete);
                $query->delete();

                $message = 'Category Deleted Successfully!';
            } else {
                $request->validate([
                    'name' => 'required'
                ]);

                $message = 'Category Create Successfully!';

                if ($request->has('id')) {
                    $query = Category::find($request->id);
                    $message = 'Category Updated Successfully!';

                    if (!$query) {
                        return response()->json([
                        'status' => 'error',
                        'message' => 'Not Found, Please Try Again...',
                        ], 422);
                    }
                } else {
                    $query = new Category();
                    $query->user_id = Auth::id();
                }

                if ($request->hasFile('image')) {
                    // image code
                    $image_name        = floor(time() - 999999999);
                    $ext               = strtolower($request->file('image')->getClientOriginalExtension());
                    $image_full_name   = $image_name.'.'.$ext;
                    $upload_path       = "public/images/category_images/";
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
            'status' => 'success',
            'message' => $message,
            'id'=> $query->id,
            'name'=> $query->name,
            ]);
        }

        public function CategoryData(Request $request)
        {
            $Category = Category::orderBy('id', 'ASC')->get();

            // dd($Accounts_category);
            $this->i = 1;

            return DataTables::of($Category)
            ->addColumn('user_id', function ($data) {
                return $data->User ? $data->User->name:'';
            })
            ->addColumn('id', function ($data) {
                return $this->i++;
            })
            ->addColumn('image', function ($data) {
                $url = asset($data->image);
                return '<img src="'.$url.'" style="height:80px; width:80px;" alt="Image" class="img-fluid mx-auto d-block"/>';
            })
            ->addColumn('action', function ($data) {
                $htmlData = '';
                $htmlData .= '<a href="javascript:void(0)" data-id="'.$data->id.'" class="btn btn-info btn-sm tableEdit"><i class="fa fa-edit"></i></a>&nbsp;';
                $htmlData .= '<a href="javascript:void(0)" data-id="'.$data->id.'" class="btn btn-danger btn-sm tableDelete"><i class="fa fa-trash"></i></a>';


                return $htmlData;
            })
            ->rawColumns(['image','action'])
            ->toJson();
        }


        public function subCategory()
        {
            $AccountItemCategoryLists = AccountItemCategory::get();
            return view('Accounts.sub_category',compact('AccountItemCategoryLists'));
        }

        public function subCategoryInsert(Request $request)
        {
            if ($request->has('delete')) {
                $query = SubCategory::find($request->delete);
                $query->delete();

                $message = 'Sub Category Deleted Successfully!';
            } else {
                $request->validate([
                'account_item_category_id' => 'required',
                'name' => 'required',
                ]);

                $message = 'Sub Category Create Successfully!';

                if ($request->has('id')) {
                    $query = SubCategory::find($request->id);
                    $message = 'Sub Category Updated Successfully!';

                    if (!$query) {
                        return response()->json([
                        'status' => 'error',
                        'message' => 'Not Found, Please Try Again...',
                        ], 422);
                    }
                } else {
                    $query = new SubCategory();
                    $query->user_id = Auth::id();
                }

                $query->category_id = $request->account_item_category_id;
                $query->name = $request->name;
                $query->user_id = Auth::id();
                $query->company_id = Auth::user()->company_id;;
                $query->save();
            }

            return response()->json([
            'status' => 'success',
            'message' => $message,
            'id'=> $query->id,
            'name'=> $query->name,
            ]);
        }

        public function subCategoryData(Request $request)
        {
            $Accounts_category = SubCategory::orderBy('id', 'desc')
                ->select('id', 'category_id', 'name', 'user_id')
                ->get();
                $this->i = 1;

                return DataTables::of($Accounts_category)
                ->addColumn('user_id', function ($data) {
                    return $data->User?$data->User->name:'';
                })
                ->addColumn('category_id', function ($data) {
                    return $data->Category?$data->Category->name:'';
                })
                ->addColumn('id', function ($data) {
                    return $this->i++;
                })
                ->addColumn('action', function ($data) {
                    $htmlData = '';
                    if (Auth::User()->can('edit items')) {
                        $htmlData .= '<a href="javascript:void(0)" data-id="'.$data->id.'" class="btn btn-info btn-sm tableEdit"><i class="fa fa-edit"></i></a>';
                    }
                    if (Auth::User()->can('delete items')) {
                        $htmlData .= '<a href="javascript:void(0)" data-id="'.$data->id.'" class="btn btn-danger btn-sm tableDelete"><i class="fa fa-trash"></i></a>';
                    }

                    return $htmlData;
                })
                ->toJson();
        }

        public function subCategoryEditData(Request $request)
        {
            $query = SubCategory::select('id', 'category_id', 'name')->find($request->id);
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

        public function subCategoryGet(Request $request)
        {
            $subCategory = subCategory::where('category_id',$request->id)->select('id','category_id','name')->get();

            return response()->json([
                'status' => 'success',
                'data' => $subCategory,
            ]);
        }



}
