<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
class BannerController extends Controller
{
    //
    public function index(){
      
        return view('admin.addbanner');
    }
    
    public function addbannerrs(Request $request)
    {
        
        request()->validate([

            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
   
          ]);
          $data = new Banner;
          if ($request->file('image')){  
            $file = $request->file('image');
            $destinationPath = public_path('bannerimg');
            $filename = $file->getClientOriginalName();
            $file->move($destinationPath, $filename); 
            $data->image = $filename;
            $data->save(); 
            return redirect()->route('add_banner')
        
            ->with('success','Donation created successfully.');
          }else{
            
        return "data not save";
        
            }}
   
}
