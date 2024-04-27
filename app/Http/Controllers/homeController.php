<?php

namespace App\Http\Controllers;
use App\Models\enquiry;
use App\Models\contactus;
use Illuminate\Http\Request;

class homeController extends Controller
{
    function enquirylist(Request $request){

        $data=enquiry::all();

        return view('admin.enquiry.index',compact('data'));

    }
    function enquirypost(Request $request){

       enquiry::create($request->all());

        return redirect()->back();

    }
    function contactuslist(Request $request){

        $data=contactus::all();

        return view('admin.contactus.index',compact('data'));

    }
    function contactpost(Request $request){

        contactus::create($request->all());

        return redirect()->back();

    }
    
}
