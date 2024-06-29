<?php

namespace App\Http\Controllers;

use App\Models\CompanySetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Yajra\Datatables\Datatables;
use Session;

class CompanySettingController extends Controller
{
    // Function for add blog
    public function CompanySetting()
    {
        $Query = CompanySetting::first();
        return view('backend.company_setting',compact('Query'));
    }

    public function CompanyAddUpdate(Request $request)
    {
        $request->validate([
            'business_name' => 'required',
            'mobile' => 'required',
            'hotline' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);

        $message = 'Company Setting Create Successfully!';

        if ($request->has('id')) {
            $query = CompanySetting::find($request->id);
            $message = 'Company Setting Updated Successfully!';

            if (!$query) {
                return response()->json([
                'status' => 'error',
                'message' => 'Not Found, Please Try Again...',
                ], 422);
            }
        } else {
            $query = new CompanySetting();
        }

        if ($request->hasFile('logo')) {
            // image code
            $image_name        = floor(time() - 999999999);
            $ext               = strtolower($request->file('logo')->getClientOriginalExtension());
            $image_full_name   = $image_name.'.'.$ext;
            $upload_path       = "public/images/company_setting/";
            $image_url         = $upload_path.$image_full_name;
            $success           = $request->file('logo')->move($upload_path,$image_full_name);
            $query->logo       = $image_url;
        }

        if ($request->hasFile('footer_logo')) {
            // image code
            $image_name6        = Str::random(10).floor(time() - 999999999);
            $ext6               = strtolower($request->file('footer_logo')->getClientOriginalExtension());
            $image_full_name6   = $image_name6.'.'.$ext6;
            $upload_path6       = "public/images/company_setting/";
            $image_url6         = $upload_path6.$image_full_name6;
            $success6           = $request->file('footer_logo')->move($upload_path6,$image_full_name6);
            $query->footer_logo = $image_url6;
        }

        $query->business_name  = $request->business_name;
        $query->mobile  = $request->mobile;
        $query->hotline  = $request->hotline;
        $query->email   = $request->email;
        $query->address   = $request->address;
        $query->facebook   = $request->facebook;
        $query->instagram   = $request->instagram;
        $query->twitter   = $request->twitter;
        $query->whatsapp   = $request->whatsapp;
        $query->footer_about_us   = $request->footer_about_us;
        $query->google_map_link   = $request->google_map_link;
        $query->terms_conditions   = $request->terms_conditions;
        $query->save();

        return response()->json([
            'status' => 'success',
            'message' => $message
        ]);
    }

    public function ContactAddUpdate(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $message = 'Thank you for contacting with us!';

        $query = new ContactUs();

        $query->name      = $request->name;
        $query->mobile    = $request->mobile;
        $query->email     = $request->email;
        $query->subject   = $request->subject;
        $query->message   = $request->message;
        $query->save();

        Session::put('success','Thank you for contacting with us !');
        return redirect('contact-us');
    }

}
