<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Size;
use App\Models\Color;
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

    public function AddProduct()
    {
        $query = null;
        $Categories = Category::where('status','Active')->get();
        $Brands = Brand::where('status','Active')->get();
        $Units = Unit::where('status','Active')->get();
        $Sizes = Size::where('status','Active')->get();
        $Colors = Color::where('status','Active')->get();
        return view('products.add_product',compact('Categories','Brands','Units','Sizes','query','Colors'));
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
            if($request->size_id){
                $query->size        = implode(",",$request->size_id);
            }
            if($request->color_id){
                $query->color        = implode(",",$request->color_id);
            }
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
            'list_url' => route('product'),
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
            $htmlData .= '<a href="' . route('product.images', [$data->id]) . '" data-id="'.$data->id.'" class="btn btn-info btn-sm"><i class="fa fa-list"></i></a>&nbsp;';
            $htmlData .= '<a href="' . route('product.edit', [$data->id]) . '" data-id="'.$data->id.'" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>&nbsp;';
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
        // if (!$query) {
        //     return response()->json([
        //     'status' => 'error',
        //     'message' => 'Not Found, Please Try Again...',
        //     ], 422);
        // }

        // return response()->json([
        //     'status' => 'success',
        //     'data' => $query,
        // ]);
        $Categories = Category::where('status','Active')->get();
        $Brands = Brand::where('status','Active')->get();
        $Units = Unit::where('status','Active')->get();
        $Sizes = Size::where('status','Active')->get();
        $Colors = Color::where('status','Active')->get();
        $selectedSizes = explode(",", $query->size);
        $selectedColors = explode(",", $query->color);
        return view('products.add_product',compact('Categories','Brands','Units','Sizes','query','Colors','selectedSizes','selectedColors'));
    }

    public function ProductImages($id)
    {
        $product_id = $id;
        return view('products.product_images',compact('product_id'));
    }

    public function ProductImagesData(Request $request)
    {
        $Product = ProductImages::orderBy('id','asc')->where('product_id',$request->product_id)->get();

        $this->i=1;
        return DataTables::of($Product)
        ->addColumn('image', function ($data){
            $url = asset($data->image);
            $image = '<img src="'.$url.'" style="height:80px;width:80px;">';
            return $image;
        })
        ->addColumn('id', function ($data){
            return $this->i++;
        })
        ->addColumn('action', function ($data){
            $htmlData='';
            // $htmlData .= '<a href="' . route('product.images', [$data->id]) . '" data-id="'.$data->id.'" class="btn btn-info btn-sm"><i class="fa fa-list"></i></a>&nbsp;';
            $htmlData .= '<a href="javascript:void(0)" data-id="'.$data->id.'" class="btn btn-info btn-sm tableEdit"><i class="fa fa-edit"></i></a>&nbsp;';
            $htmlData .='<a href="javascript:void(0)" data-id="'.$data->id.'" class="btn btn-danger btn-sm tableDelete"><i class="fa fa-trash"></i></a>';
            return $htmlData;
        })
        ->rawColumns(['image','action'])
        ->toJson();
    }

    public function ProductImagesDelete(Request $request)
    {
        if($request->has('delete')){
            $query = ProductImages::find($request->delete);
            $query->delete();
            $message = 'Product Images Deleted Successfully!';
        }
        return response()->json([
            'status' => "success",
            'message' => $message,
        ]);
    }

    public function ProductImagesUpdate(Request $request)
    {
        if($request->has('id')){
            $query = ProductImages::find($request->id);
            $message = 'Product Image Updated Successfully!';

            if(!$query){
                return response()->json([
                'status' => "error",
                'message' => "Not Found, Please Try Again..."
                ],422);
            }
        }else{
            $query = new ProductImages;
            $query->user_id = Auth::id();
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name          = Str::random(10).time();
            $ext                 = strtolower($image->getClientOriginalExtension());
            $image_full_name     = $image_name.'.'.$ext;
            $upload_path         = "public/images/product_image/";
            $image_url           = $upload_path.$image_full_name;
            $success             = $image->move($upload_path,$image_full_name);
            $query->image   = $image_url;

        }
        $query->save();

        return response()->json([
            'status' => "success",
            'message' => $message,
        ]);
    }

    public function ProductImagesEdit(Request $request)
    {
        $query = ProductImages::find($request->id);
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
