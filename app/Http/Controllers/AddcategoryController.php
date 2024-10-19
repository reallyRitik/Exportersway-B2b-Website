<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Addcategory;
use App\Models\subcategoryController;

class AddcategoryController extends Controller
{
    //
    public function index(){
      
        return view('admin.addcategory');
    }
    public function viewcat(){
        $category = Addcategory::all();
      
        return view('admin.viewcategory', compact('category'));
    }

    public function store(Request $request)
    {

        // echo "1";

        $data = new Addcategory;
        $data->name = $request->name;
        $data->save();
        return redirect()->route('add_category')
        ->with('success','category created successfully.');

        // return redirect()->->TO('addcategory')
        // route('addcategory');
    }
    public function destroy($id)
    {
        // Role Delete
        // print_r($id);
        $Role = Addcategory::findOrFail($id);
        $Role->delete();
        return back()->with('Delete','Role deleted successfully');
    }
    public function edit()
    {
        //To Get All Role 
        // $Role = Role::where('id', '=', $id)->firstOrFail();
        return view('admin.editcategory');
    }

    public function update($id)
    {
        // Role Delete
        // print_r($id);
        $Role = Addcategory::findOrFail($id);
        $Role->delete();
          return redirect()->route('editcategory')
        ->with('success','category created successfully.');
    }

    public function getsubcat($id){
        echo json_encode(subcategoryController::table('subcategory')->whare('categoryId',$id)->get());
    }

    
}
