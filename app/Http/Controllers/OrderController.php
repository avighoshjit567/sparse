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
use NumberToWords\NumberToWords;
use Yajra\Datatables\Datatables;
use Session;
use DNS1D;

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
            'address' => 'required'
        ]);

        $carts = session()->get('cart', []);
        $total = 0;

        foreach ($carts as $id => $details)
        {
            $total += $details['price'] * $details['quantity'];
        }
        //dd($carts);
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
        $Order->order_note = $request->note;
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
            if($AccountItem->size){
                $query->size_id = $cart['size_id'];
            }
            $query->product_unit_id = $AccountItem->unit_id ;
            $query->quantity = $cart['quantity'];
            $query->purchase_price = $AccountItem->purchase_price;
            $query->sale_price = $AccountItem->sale_price;
            $query->subtotal = $cart['quantity'] * $cart['price'];
            $query->purchase_subtotal = ($AccountItem->purchase_price * $cart['quantity']);
            $query->save();
        }
        // if($request->password){
        //     $user = new User();
        //     $user->name = $request->name;
        //     $user->email = $request->email;
        //     if (!empty($request->password)) {
        //         $user->password = Hash::make($request->password);
        //     }
        //     $user->save();
        //     // dd(11);
        // }
        $latestOrder = Order::latest()->first();
        $latestOrderDetails = OrderDetail::where('order_id',$latestOrder->id)->get();
        session()->put('cart',null);
        session()->put('shippingCharge', null);
        session()->put('message', 'Your Order Place Successfull');
        // return redirect()->back()->with('message',"Your Order Place Successfull");
        // return Redirect::to('order-complete')->with('message',"Your Order Place Successfull");
        return view('website.order_complete',compact('latestOrder','latestOrderDetails'));
    }

    public function OrderComplete()
    {
        return view('website.order_complete');
    }

    public function OrderList()
    {
        return view('website.order_list');
    }

    public function DeliveredOrderList()
    {
        return view('website.delivered_order_list');
    }
    public function CancelOrderList()
    {
        return view('website.cancel_order_list');
    }

    public function OrderListData(Request $request)
    {
        $Query = Order::query()->orderBy('id', 'desc');

        //dd($Query->get());

        if($request->order_date){
            $Query->where('orders.date',$request->order_date);
        }
        if($request->status){
            $Query->where('orders.status',$request->status);
        }

        $this->i = 1;

        return Datatables::of($Query)
            ->addColumn('id', function ($data) {
                return $this->i++;
            })
            ->addColumn('district', function ($data) {
                return $data->District?$data->District->name:'';
            })
            ->addColumn('upazila', function ($data) {
                return $data->Upazila?$data->Upazila->name:'';
            })
            ->addColumn('customer', function ($data) {
                return '<strong>'.$data->name.'</strong><br>'.$data->mobile.'<br>'.$data->address;
            })

            ->addColumn('action', function ($data) {
                $html = '';
                $html .= '<a href="' . route('order.invoice', [$data->id]) . '" data-id="'.$data->id.'" class="btn btn-info btn-sm"><i class="fa fa-file"></i></a>&nbsp;';

                $html .= '<div class="dropdown"><button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
                $html .= $data->status;
                $html .= '</button>';
                $html .= '<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">';

                $html .= '<button class=" btn-sm dropdown-item updateOrderStatus" type="button" data-id="' . $data->id . '" data-status="Delivered">Delivered</button>';
                // $html .= '<button class=" btn-sm dropdown-item updateOrderStatus" type="button" data-id="' . $data->id . '" data-status="checked">Checked</button>';
                // $html .= '<button class=" btn-sm dropdown-item updateOrderStatus" type="button" data-id="' . $data->id . '" data-status="approved">Approved</button>';
                $html .= '<button class=" btn-sm dropdown-item updateOrderStatus" type="button" data-id="' . $data->id . '" data-status="Cancelled">Cancelled</button>';
                $html .= '</div></div>';
                // $html .= '<button class="btn btn-primary btn-sm tableEdit" data-id="'.$data->id.'"><i class="fa fa-edit"></i></button>';
                $html .= '<button class="btn btn-danger btn-sm tableDelete" data-id="'.$data->id.'"><i class="fa fa-trash"></i></button>';


                return $html;
            })
            ->rawColumns(['action','customer'])
            ->toJSON();
    }

    public function OrderDetailsList()
    {
        return view('website.order_details_list');
    }

    public function OrderDetailsListData(Request $request)
    {
        // $Query = Order::query()->orderBy('id', 'desc');
        $Query = OrderDetail::leftJoin('orders', 'orders.id', '=', 'order_details.order_id')
        ->leftJoin('products', 'products.id', '=', 'order_details.product_id')
        ->leftJoin('sizes', 'sizes.id', '=', 'order_details.size_id')
        ->select('orders.*','products.name as product_name','sizes.name as size_name')
        ->orderBy('orders.id','desc');

        if($request->order_date){
            $Query->where('orders.date',$request->order_date);
        }
        if($request->status){
            $Query->where('orders.status',$request->status);
        }

        if($request->order_date){
            $Query->where('orders.date',$request->order_date);
        }
        if($request->status){
            $Query->where('orders.status',$request->status);
        }

        $this->i = 1;

        return Datatables::of($Query)
            ->addColumn('id', function ($data) {
                return $this->i++;
            })
            ->addColumn('district', function ($data) {
                return $data->District?$data->District->name:'';
            })
            ->addColumn('upazila', function ($data) {
                return $data->Upazila?$data->Upazila->name:'';
            })
            ->addColumn('customer', function ($data) {
                return '<strong>'.$data->name.'</strong><br>'.$data->mobile;
            })
            ->addColumn('product', function ($data) {
                return '<strong>'.$data->product_name.'</strong><br>'.$data->size_name;
            })

            ->addColumn('action', function ($data) {
                $html = '';
                $html .= '<a href="' . route('order.invoice', [$data->id]) . '" data-id="'.$data->id.'" class="btn btn-info btn-sm"><i class="fa fa-file"></i></a>&nbsp;';

                $html .= '<div class="dropdown"><button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
                $html .= $data->status;
                $html .= '</button>';
                $html .= '<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">';

                $html .= '<button class=" btn-sm dropdown-item updateOrderStatus" type="button" data-id="' . $data->id . '" data-status="Delivered">Delivered</button>';
                // $html .= '<button class=" btn-sm dropdown-item updateOrderStatus" type="button" data-id="' . $data->id . '" data-status="checked">Checked</button>';
                // $html .= '<button class=" btn-sm dropdown-item updateOrderStatus" type="button" data-id="' . $data->id . '" data-status="approved">Approved</button>';
                $html .= '<button class=" btn-sm dropdown-item updateOrderStatus" type="button" data-id="' . $data->id . '" data-status="Cancelled">Cancelled</button>';
                $html .= '</div></div>';
                // $html .= '<button class="btn btn-primary btn-sm tableEdit" data-id="'.$data->id.'"><i class="fa fa-edit"></i></button>';
                $html .= '<button class="btn btn-danger btn-sm tableDelete" data-id="'.$data->id.'"><i class="fa fa-trash"></i></button>';


                return $html;
            })
            ->rawColumns(['action','customer'])
            ->toJSON();
    }

    public function OrderInvoice($id)
    {
        $saleInvoice = Order::find($id);
        $stockManagerList = OrderDetail::where('order_id', $saleInvoice->id)->get();
        //$ContactLists = Contact::find($saleInvoice->contact_id);
        //$Users = User::find($saleInvoice->user_id);
        $numberToWords = new NumberToWords();
        $numberTransformer = $numberToWords->getNumberTransformer('en');
        $numberToWordView = $numberTransformer->toWords($saleInvoice->total);
        $Barcode = '';
        // $Barcode = 'data:image/png;base64,' . DNS1D::getBarcodePNG($saleInvoice->code, 'C128', 1, 25);

        return view('website.order_new_invoice', compact('Barcode','numberToWordView','stockManagerList','saleInvoice'));
        // return view('Accounts.order_invoice', compact('AccountSetting', 'Receiveable', 'numberToWordView', 'numberToWordViewBn', 'stockManagerList', 'accountManagerList', 'ContactLists', 'saleInvoice', 'Users'));
    }

    public function OrderDelete(Request $request)
    {
        $query = Order::find($request->delete);
        $query->delete();
        $message = 'Order Deleted Successfully!';
        return response()->json([
            'status' => 'success',
            'message' => $message
        ]);
    }

    public function OrderStatusUpdate(Request $request)
    {
        $order = Order::find($request->id);
        if ($request->status == "delivered") {
            $order->delivered_by = Auth::user()->id;
            $order->delivered_at = Carbon::now();
        }elseif ($request->status == "cancelled") {
            $order->canceled_by = Auth::user()->id;
            $order->canceled_at = Carbon::now();
        }
        $order->status = $request->status;
        $order->save();
        return response()->json([
            'status' => 'success',
            'message' => 'Order Status Updated Successfully',
        ]);
    }
}
