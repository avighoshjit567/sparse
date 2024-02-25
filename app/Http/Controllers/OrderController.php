<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use App\Http\Requests;
use App\Models\Divisions;
use App\Models\Districts;
use App\Models\Upazila;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\User;
use Yajra\Datatables\Datatables;
use Session;

class OrderController extends Controller
{
    // Order Count
    public function OrderCount()
    {
        // query the database and return a boolean
        // for instance, it might look like this in Laravel

        return DB::table('orders')->count() + 1;
    }

    public function WebOrderProductAdd(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'mobile' => 'required',
            'address' => 'required',
            'district' => 'required',
        ]);

        $carts = session()->get('cart', []);
        $total = 0;

        foreach ($carts as $id => $details)
        {
            $total += $details['price'] * $details['quantity'];
        }

        $Order = new Order();
        $Order->code = 'ORD'.str_pad($this->OrderCount(), 5, '0', STR_PAD_LEFT);
        $Order->date = Carbon::now();
        $Order->name = $request->name;
        $Order->mobile = $request->mobile;
        $Order->email = $request->email;
        $Order->division = $request->division;
        $Order->district = $request->district;
        $Order->upazila = $request->upazila;
        $Order->address = $request->address;
        $Order->order_note = $request->order_note;
        $Order->subtotal = $total;
        $Order->shipping_charge = $request->shipping_charge;
        $Order->total = $total + $request->shipping_charge;
        $Order->status = "Processing";
        $Order->save();

        foreach ($carts as $key=>$cart) {
            $AccountItem = Product::find($key);
            $query = new OrderDetail();
            $query->order_id = $Order->id;
            $query->product_id = $AccountItem->id;
            $query->product_unit_id = $AccountItem->unit_id ;
            $query->quantity = $cart['quantity'];
            $query->purchase_price = $AccountItem->purchase_price;
            $query->sale_price = $AccountItem->sale_price;
            $query->subtotal = $cart['quantity'] * $cart['price'];
            $query->purchase_subtotal = ($AccountItem->purchase_price * $cart['quantity']);
            $query->save();
        }
        if($request->password){
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            if (!empty($request->password)) {
                $user->password = Hash::make($request->password);
            }
            $user->save();
            // dd(11);
        }
        session()->put('cart',null);
        session()->put('shippingCharge', null);
        return redirect()->back()->with('message',"Your Order Place Successfull");
        // return Redirect::to('order-complete')->with('message',"Your Order Place Successfull");
    }

    public function OrderComplete()
    {
        return view('website.order_complete');
    }
}
