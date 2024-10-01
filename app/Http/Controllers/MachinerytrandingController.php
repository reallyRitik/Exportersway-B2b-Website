<?php

namespace App\Http\Controllers;

use App\Models\Machinerytranding;
use Illuminate\Http\Request;

class MachinerytrandingController extends Controller
{
    //

    
    public function index(){
      
        return view('admin.machinerytranding');
    }

    public function addmachinerytrandingtranding(Request $request)
    {
        $this->validate($request, [
            'image' => 'mimes:jpeg,png,jpg', //only allow this type extension file.
        ]);

$data = new Machinerytranding;

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
    return redirect()->route('machinery_tranding')

    ->with('success','Donation created successfully.');
  }else{
    
return "data not save";

    }}
}
