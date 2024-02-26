<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Models\Slider;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImages;
use App\Models\Divisions;
use App\Models\Districts;
use App\Models\Upazila;
use Yajra\Datatables\Datatables;
use Session;

class WebsiteController extends Controller
{

    /**
     * Write code on Method
     *
     * @return response()
     */

    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
        $AccountItemImageQuery = ProductImages::where('product_id',$product->id)->orderBy('id','ASC')->first();
        if($AccountItemImageQuery){
            $images = $AccountItemImageQuery->image;
        }else{
            $images = '';
        }
        $cart = session()->get('cart', []);
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            if($product->discount_amount){
                $product_price = $product->sale_price - $product->discount_amount;
            }else{
                $product_price = $product->sale_price;
            }

            $cart[$id] = [

                "name" => $product->name,
                "product_id" => $product->id,
                "quantity" => 1,
                "price" => $product_price,
                "image" => $images

            ];

        }

        session()->put('cart', $cart);
        return 'success';
        // return $cart;
    }

    public function getTotalcart()
    {
        // session()->flush();
         return  ["jobs" => (array) session('cart'),"total" => count((array) session('cart'))];
        // return (array) session('cart');
    }

    public function cart()
    {
        $Divisions = Divisions::get();
        $Districts = Districts::get();
        $Upazila = Upazila::get();
        return view('website.cart',compact('Divisions','Districts','Upazila'));
    }

    /**
    * Write code on Method
    *
    * @return response()

    */
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);

            }
            session()->flash('success', 'Product removed successfully');
        }
    }

    /**

    * Write code on Method

    *

    * @return response()
    */

    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function Checkout()
    {
        $cart = session()->get('cart', []);
        $shipping = session()->get('shippingCharge');
        $Districts  = Districts::get();
        $Divisions = Divisions::get();
        $Upazilas = Upazila::get();
        // session()->put('shippingCharge', null);
        // $User = NUll;
        // if(Auth::user())
        // {
        //     $User = User::where('id',Auth::user()->id)->first();
        // }
        return view('website.checkout',compact('cart','Districts','Divisions','Upazilas','shipping'));
    }

    // Function for index
    public function index()
    {
        $Categories = Category::orderBy('id', 'ASC')->take(8)->get();
        $Sliders = Slider::query()->orderBy('position', 'asc')->get();
        $NewArrivals = Product::where('status','Active')->orderBy('id','DESC')->take(4)->get();
        $AllProducts = Product::where('status','Active')->orderBy('id','DESC')->skip(4)->take(8)->get();
    	return view('website.index',compact('Sliders','Categories','NewArrivals','AllProducts'));
    }
    // Function for login
    public function login()
    {
    	return view('website.login');
    }

    public function Slider()
    {
        return view('website.Slider');
    }

    public function SliderInsert(Request $request)
    {
        if ($request->has('delete')) {
            $query = Slider::find($request->delete);
            $query->delete();

            $message = 'Slider Deleted Successfully!';
        } else {

            $message = 'Slider Create Successfully!';

            if ($request->has('id')) {
                $query = Slider::find($request->id);
                $message = 'Slider Updated Successfully!';

                if (!$query) {
                    return response()->json([
                    'status' => 'error',
                    'message' => 'Not Found, Please Try Again...',
                    ], 422);
                }
            } else {
                $query = new Slider();
                $query->created_by = Auth::id();
            }

            if ($request->hasFile('image')) {
                // image code
                $image_name        = floor(time() - 999999999);
                $ext               = strtolower($request->file('image')->getClientOriginalExtension());
                $image_full_name   = $image_name.'.'.$ext;
                $upload_path       = "public/images/slider_images/";
                $image_url         = $upload_path.$image_full_name;
                $success           = $request->file('image')->move($upload_path,$image_full_name);
                // $success           = $request->file('image')->storeAs('slider_images', $image_full_name);
                $query->image      = $image_url;
            }

            $query->position = $request->position;
            $query->status = 'Active';
            $query->created_by = Auth::id();
            $query->save();
        }

        return response()->json([
        'status' => 'success',
        'message' => $message,
        ]);
    }

    public function SliderData()
    {
        $Query = Slider::query()->orderBy('id', 'desc');

        $this->i = 1;

        return Datatables::of($Query)
            ->addColumn('id', function ($data) {
                return $this->i++;
            })
            ->addColumn('image', function ($data) {
                $url = asset($data->image);

                return '<img src="'.$url.'" style="height:80px; width:80px;" alt="Image" class="img-fluid mx-auto d-block"/>';
            })
            ->addColumn('action', function ($data) {
                $html = '';
                $html .= '<button class="btn btn-primary btn-sm tableEdit" data-id="'.$data->id.'"><i class="fa fa-edit"></i></button>';
                $html .= '<button class="btn btn-danger btn-sm tableDelete" data-id="'.$data->id.'"><i class="fa fa-trash"></i></button>';


                return $html;
            })
            ->rawColumns(['image', 'action'])
            ->toJSON();
    }

    public function SliderEditData(Request $request)
    {
        $query = Slider::find($request->id);
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

    public function CategoryWiseProduct($name,$id)
    {
        $Products = Product::where('category_id',$id)->get();
        return view('website.category_wise_product',compact('Products'));
    }

    public function ProductDetails($name,$id)
    {
        $Products = Product::where('id',$id)->first();
        $Related_products = Product::where('category_id',$Products->category_id)->whereNotIn('id',[$id])->get();
        $ProductImages = ProductImages::where('product_id',$Products->id)->get();
        return view('website.product_details',compact('Products','Related_products','ProductImages'));
    }

    public function DistrictGet(Request $request)
    {
        $Districts = Districts::where('division_id',$request->id)->select('id','name','bn_name')->get();

        return response()->json([
            'status' => 'success',
            'data' => $Districts,
        ]);
    }

    public function UpazilaGet(Request $request)
    {
        $Upazila = Upazila::where('district_id',$request->id)->select('id','name','bn_name')->get();

        return response()->json([
            'status' => 'success',
            'data' => $Upazila,
        ]);
    }

    public function updateShippingCharge(Request $request)
    {
        $shipping = session()->get('shippingCharge');;
        $shipping = $request->amount;
        session()->put('shippingCharge', $shipping);
        session()->flash('success', 'Cart updated successfully');
    }


}
