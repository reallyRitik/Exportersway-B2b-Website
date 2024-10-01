<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Addcategory;
use App\Models\Subcategory;
use Illuminate\Support\Facades\Storage;

class subcategoryController extends Controller
{
    //
    public function index(){
        $category = Addcategory::all();
        // $subcategory = Addcategory::all();
        
        return view('admin.addsubcategory', compact('category'));
    }
    
    
    public function viewsubcat(){
        $category = Addcategory::all();
        $subcategory = Subcategory::all();
        return view('admin.viewsubcategory', compact('category', 'subcategory'));
    }


    public function subcategory(Request $request)
    {
        $this->validate($request, [
            'image' => 'mimes:jpeg,png,jpg', //only allow this type extension file.
        ]);

$data = new Subcategory;

$data->categoryId = $request->categoryId;
$data->subcategoryname = $request->subcategoryname;

if ($request->file('image')){  
    $file = $request->file('image');
    $destinationPath = public_path('images');   
    $filename = $file->getClientOriginalName();
    $file->move($destinationPath, $filename); 
    $data->image = $filename;
    $data->save(); 
    return redirect()->route('sub_category')

    ->with('success','Donation created successfully.');
  }else{
    
return "data not save";

    }}
     public function search(Request $request)
    {
        $categoryName = $request->input('categoryName');
    
        $category = Addcategory::where('name', $categoryName)->first();
    
        if ($category) {
            $subcategories = $category->subcategories()->paginate(10); // Change the number '10' to the desired number of subcategories per page
            return view('admin.searchL2byL1', compact('subcategories'));
        }
    
        return view('no-results');
    }
    public function editsubcategoty(Request $request, $id)
    {
        $subcatname = Subcategory::where('id', $id)->get();
        return view('admin.editsubcategory', compact('subcatname'));
    }
    
    public function updatesubcategoty(Request $request, $id)
    {
        
        $data = Subcategory::findOrFail($id);
        // dd($data);
        $data->subcategoryname = $request->input('subcategoryname');
        $data->save(); 
          return redirect()->route('sub_category')
        ->with('success','Subcategory successfully Edit.');
    }

public function searchsubcat(Request $request)
    {
        $subcategoryname = $request->input('subcategoryname');
        $subcategory = Subcategory::where('subcategoryname', 'LIKE', '%' . $subcategoryname . '%')->paginate(20);
        return view('admin.searchsubcategory', compact('subcategory'));
    }
    public function destroy($id)
    {
        
        $Role = Subcategory::findOrFail($id);
        Storage::delete('public/images' . $Role->image);
        $Role->delete();
        return back()->with('Delete','Subcategory deleted successfully');
    }


  
}
