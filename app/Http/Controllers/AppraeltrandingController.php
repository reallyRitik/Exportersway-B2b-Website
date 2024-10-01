<?php

namespace App\Http\Controllers;

use App\Models\Appraeltranding;
use Illuminate\Http\Request;

class AppraeltrandingController extends Controller
{
    //

    public function index(){
      
        return view('admin.appraeltranding');
    }


    public function adddappraeltranding(Request $request)
    {
        $this->validate($request, [
            'image' => 'mimes:jpeg,png,jpg', //only allow this type extension file.
        ]);

$data = new Appraeltranding;

$data->companyname = $request->companyname;
$data->productname = $request->productname;
$data->productprice = $request->productprice;
$data->qnt = $request->qnt;

if ($request->file('image')){  
    $file = $request->file('image');
    $destinationPath = public_path('trandingproduct');
    $filename = $file->getClientOriginalName();
    $file->move($destinationPath, $filename); 
    $data->image = $filename;
    $data->save(); 
    return redirect()->route('agpprael_tranding')

    ->with('success','Donation created successfully.');
  }else{
    
return "data not save";

    }}
}
