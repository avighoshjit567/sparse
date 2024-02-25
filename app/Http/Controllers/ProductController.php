<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Size;
use App\Models\ProductImages;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function product()
    {
        $Categories = Category::where('status','Active')->get();
        $Brands = Brand::where('status','Active')->get();
        $Units = Unit::where('status','Active')->get();
        $Sizes = Size::where('status','Active')->get();
        return view('products.product',compact('Categories','Brands','Units','Sizes'));
    }

    public function ProductInsert(Request $request)
    {
        if($request->has('delete')){
            $query = Product::find($request->delete);
            $query->delete();
            $query2 = ProductImages::find($request->delete);
            $query2->delete();

            $message = 'Product Deleted Successfully!';
        }else{

            $request->validate(array(
                'category_id'    =>  'required',
                'brand_id'    =>  'required',
                'unit_id'    =>  'required',
                'name'    =>  'required',
                'purchase_price'    =>  'required',
                'sale_price'    =>  'required',
            ));

            $message = 'Product Create Successfully!';

            if($request->has('id')){
                $query = Product::find($request->id);
                $message = 'Product Updated Successfully!';

                if(!$query){
                    return response()->json([
                    'status' => "error",
                    'message' => "Not Found, Please Try Again..."
                    ],422);
                }
            }else{
                $query = new Product;
                $query->user_id = Auth::id();
            }

            $query->category_id = $request->category_id;
            $query->brand_id    = $request->brand_id;
            $query->unit_id     = $request->unit_id;
            $query->size        = implode(",",$request->size_id);
            $query->name        = $request->name;
            $query->purchase_price  = $request->purchase_price;
            $query->sale_price      = $request->sale_price;
            $query->discount_amount = $request->discount_amount;
            $query->short_description = $request->short_description;
            $query->long_description  = $request->long_description;
            $query->additional_info   = $request->additional_info;
            $query->status = 'Active';
            $query->user_id = Auth::id();
            $query->save();

            if ($request->hasFile('images')) {
                foreach($request->file('images') as $key=> $image){
                    $QueryImage          = new ProductImages();
                    $QueryImage->product_id = $query->id;
                    $image_name          = $query->name.Str::random(10).time();
                    $ext                 = strtolower($image->getClientOriginalExtension());
                    $image_full_name     = $image_name.'.'.$ext;
                    $upload_path         = "public/images/product_image/";
                    $image_url           = $upload_path.$image_full_name;
                    $success             = $image->move($upload_path,$image_full_name);
                    $QueryImage->image   = $image_url;
                    $QueryImage->save();
                }
            }

        }
        return response()->json([
            'status' => "success",
            'message' => $message,
        ]);
    }

    public function ProductData(Request $request)
    {
        $Product = Product::orderBy('id','desc')->get();

            $this->i=1;
        return DataTables::of($Product)
        ->addColumn('user_id', function ($data){
            return $data->User ? $data->User->name:'';
        })
        ->addColumn('category_id', function ($data){
            return $data->Category ? $data->Category->name:'';
        })
        ->addColumn('brand_id', function ($data){
            return $data->Brand ? $data->Brand->name:'';
        })
        ->addColumn('unit_id', function ($data){
            return $data->Unit ? $data->Unit->name:'';
        })
        ->addColumn('image', function ($data){
            $ProductImageCount = ProductImages::where('product_id',$data->id)->orderBy('id','ASC')->count();
            // dd($ProductImageCount);
            if($ProductImageCount > 0){
                $ProductImageQuery = ProductImages::where('product_id',$data->id)->orderBy('id','ASC')->first();
                $url = asset($ProductImageQuery->image);
                $image = '<img src="'.$url.'" style="height:80px;width:80px;">';
            }else{
                $image = '';
            }

            return $image;
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
        ->rawColumns(['image','action'])
        ->toJson();
    }

    public function ProductEditData(Request $request)
    {
        $query = Product::find($request->id);
        // $imageQuery = Product::find($request->id);
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
