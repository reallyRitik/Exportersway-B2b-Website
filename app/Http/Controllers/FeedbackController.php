<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\feedback;

class FeedbackController extends Controller
{
    //
    public function index(){
      
        return view('customer.feedback');
    }

    public function store(Request $request)
    {

        // echo "1";

        $data = new feedback;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->massage = $request->massage;
        $data->save();
        return redirect()->route('add_feedback')
        ->with('success','category created successfully.');

        // return redirect()->->TO('addcategory')
        // route('addcategory');
    }
}
