<?php

namespace App\Http\Controllers;

use App\Models\CompanySetting;
use App\Models\EmailTemplateSettting;
use App\Models\ContactUs;
use App\Models\QuickLink;
use App\Models\Statistics;
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

    public function ContactData()
    {
        return view('website_backend.contact_data');
    }

    public function ContactInfoData()
    {
        $ContactUs = ContactUs::get();
        $this->i = 1;
        return DataTables::of($ContactUs)
        ->addColumn('id', function ($data) {
            return $this->i++;
        })
        ->addColumn('action', function ($data) {
            $htmlData = '';
            // $htmlData .= '<a href="javascript:void(0)" data-id="'.$data->id.'" class="btn btn-info btn-sm tableEdit"><i class="fa fa-edit"></i></a>&nbsp;';
            $htmlData .= '<a href="javascript:void(0)" data-id="'.$data->id.'" class="btn btn-danger btn-sm tableDelete"><i class="fa fa-trash"></i></a>';
            return $htmlData;
        })
        ->rawColumns(['action'])
        ->toJson();
    }

    public function ContactInfoDelete(Request $request)
    {
        $query = ContactUs::find($request->id)->delete();
        $message = 'Contact Info Deleted Successfully!';

        return response()->json([
            'status' => 'success',
            'message' => $message
        ]);
    }

    public function QuickLinkAdd()
    {
        return view('website_backend.quick_link');
    }

    public function QuickLinkInsert(Request $request)
    {
        if ($request->has('delete')) {
            $query = QuickLink::find($request->delete);
            $query->delete();

            $message = 'Quick Link Deleted Successfully!';
        } else {
            $request->validate([
                'link_title' => 'required',
                'quick_link'       => 'required'
            ]);

            $message = 'Quick Link Create Successfully!';

            if ($request->has('id')) {
                $query = QuickLink::find($request->id);
                $message = 'Quick Link Updated Successfully!';

                if (!$query) {
                    return response()->json([
                    'status' => 'error',
                    'message' => 'Not Found, Please Try Again...',
                    ], 422);
                }
            } else {
                $query = new QuickLink();
                $query->user_id = Auth::id();
            }

            $query->link_title  = $request->link_title;
            $query->link  = $request->quick_link;
            $query->save();
        }

        return response()->json([
            'status' => 'success',
            'message' => $message,
        ]);
    }

    public function QuickLinkData()
    {
        $QuickLink = QuickLink::get();
        $this->i = 1;
        return DataTables::of($QuickLink)
        ->addColumn('id', function ($data) {
            return $this->i++;
        })
        ->addColumn('user_id', function ($data) {
            return $data->User ? $data->User->name:'';
        })

        ->addColumn('action', function ($data) {
            $htmlData = '';
            $htmlData .= '<a href="javascript:void(0)" data-id="'.$data->id.'" class="btn btn-primary btn-sm tableEdit"><i class="fa fa-edit"></i></a>&nbsp;';
            $htmlData .= '<a href="javascript:void(0)" data-id="'.$data->id.'" class="btn btn-danger btn-sm tableDelete"><i class="fa fa-trash"></i></a>';
            return $htmlData;
        })
        ->rawColumns(['action'])
        ->toJson();
    }

    public function QuickLinkEdit(Request $request)
    {
        $query = QuickLink::find($request->id);
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

    public function StatisticsAdd()
    {
        return view('website_backend.statistics');
    }

    public function StatisticsInsert(Request $request)
    {
        if ($request->has('delete')) {
            $query = Statistics::find($request->delete);
            $query->delete();

            $message = 'Statistics Deleted Successfully!';
        } else {
            $request->validate([
                'title' => 'required',
                'statistics'       => 'required'
            ]);

            $message = 'Statistics Create Successfully!';

            if ($request->has('id')) {
                $query = Statistics::find($request->id);
                $message = 'Statistics Updated Successfully!';

                if (!$query) {
                    return response()->json([
                    'status' => 'error',
                    'message' => 'Not Found, Please Try Again...',
                    ], 422);
                }
            } else {
                $query = new Statistics();
                $query->user_id = Auth::id();
            }

            $query->statistics_title  = $request->title;
            $query->statistics  = $request->statistics;
            $query->save();
        }

        return response()->json([
            'status' => 'success',
            'message' => $message,
        ]);
    }

    public function StatisticsData()
    {
        $Statistics = Statistics::get();
        $this->i = 1;
        return DataTables::of($Statistics)
        ->addColumn('id', function ($data) {
            return $this->i++;
        })
        ->addColumn('user_id', function ($data) {
            return $data->User ? $data->User->name:'';
        })

        ->addColumn('action', function ($data) {
            $htmlData = '';
            $htmlData .= '<a href="javascript:void(0)" data-id="'.$data->id.'" class="btn btn-primary btn-sm tableEdit"><i class="fa fa-edit"></i></a>&nbsp;';
            $htmlData .= '<a href="javascript:void(0)" data-id="'.$data->id.'" class="btn btn-danger btn-sm tableDelete"><i class="fa fa-trash"></i></a>';
            return $htmlData;
        })
        ->rawColumns(['action'])
        ->toJson();
    }

    public function StatisticsEdit(Request $request)
    {
        $query = Statistics::find($request->id);
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

    // Function for add blog
    public function MailTemplateSetting()
    {
        $Query = EmailTemplateSettting::first();
        return view('website_backend.mail_template_setting',compact('Query'));
    }

    public function MailTemplateSettingUpdate(Request $request)
    {
        $request->validate([
            'terms_conditions' => 'required',
            'signup_mail_body' => 'required',
            'signup_mail_subject' => 'required'
        ]);

        $message = 'Email Setting Create Successfully!';

        if ($request->has('id')) {
            $query = EmailTemplateSettting::find($request->id);
            $message = 'Email Setting Updated Successfully!';

            if (!$query) {
                return response()->json([
                'status' => 'error',
                'message' => 'Not Found, Please Try Again...',
                ], 422);
            }
        } else {
            $query = new EmailTemplateSettting();
        }
        $query->terms_conditions_aggrement  = $request->terms_conditions;
        $query->signup_mail_subject  = $request->signup_mail_subject;
        $query->signup_mail_body  = $request->signup_mail_body;
        $query->mail_signature  = $request->mail_signature;
        $query->signup_mail_body_bangla  = $request->signup_mail_body_bangla;
        $query->mail_signature_bangla  = $request->mail_signature_bangla;
        $query->save();

        return response()->json([
            'status' => 'success',
            'message' => $message
        ]);
    }

}
