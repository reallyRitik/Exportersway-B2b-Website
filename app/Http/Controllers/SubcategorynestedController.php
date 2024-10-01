<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Addcategory;
use App\Models\Subcategory;
use App\Models\Subcategorynested;
use Illuminate\Support\Facades\File;

class SubcategorynestedController extends Controller
{
    //
   public function index(){
        $category = Addcategory::orderBy('name', 'asc')->get();
        $subcategory = Subcategory::orderBy('subcategoryname', 'asc')->get();;
        
        return view('admin.addsubcategorynested', compact('category', 'subcategory'));
    }
    public function viewsubcat(){
        $category = Addcategory::all();
        $subcategory = Subcategory::all();
        
        return view('admin.viewsubcategory', compact('category', 'subcategory'));
    }
    public function searchsubnestedcat(Request $request)
    {
        $subnestedcategoryname = $request->input('subnestedcategoryname');
        $subnestcategory = Subcategorynested::where('subnestedcategoryname', 'LIKE', '%' . $subnestedcategoryname . '%')->paginate(20);
        return view('admin.searchsubnestedcategory', compact('subnestcategory'));
    }
    
     public function viewsubnastcat(){
        
    $subnestcategory = Subcategorynested::with('category', 'subcategory')->paginate(20);

        return view('admin.viewsubnestedcategory', compact('subnestcategory'));
    }

    public function editsubnestedcategory($id)
    {
        $data = Subcategorynested::where('id', $id)->get();
        return view('admin.editsubneastedcategory', ['data' => $data]);
    }

//   public function subnestedcategory(Request $request)
//     {
//         $this->validate($request, [
//             'subcategoryimage' => 'mimes:jpeg,png,jpg', //only allow this type extension file.
//         ]);
//         $data = new Subcategorynested;

//         $data->categoryId = $request->categoryId;
//         $data->subcategoryid = $request->subcategoryid;
//         $data->subnestedcategoryname = $request->subnestedcategoryname;
//         $tempcategory = $request->categoryId;
//         $tempsubcategory = $request->subcategoryid;
//         Session::put('tempcategory', $tempcategory, 5);
//         Session::put('tempsubcategory', $tempsubcategory, 5);

//         if ($request->file('subcategoryimage')){  
//             $file = $request->file('subcategoryimage');
//             $destinationPath = public_path('subcategoryimage');   
//             $filename = $file->getClientOriginalName();
//             $file->move($destinationPath, $filename); 
//             $data->subcategoryimage = $filename;
//             $data->save(); 
//             return redirect()->route('view_cat')
        
//             ->with('success','Donation created successfully.');
//           }else{
            
//         return "data not save";
        
//             }
//         $data->save();
//         return redirect()->route('subnested_category');

//     }

 public function subnestedcategory(Request $request)
    {
          $existingSubcategory = Subcategorynested::where('subnestedcategoryname', $request->subnestedcategoryname)->first();

    if ($existingSubcategory) {
        return redirect()->route('subnested_category')
            ->with('error', 'L3 category name already exists.');
    }else{
        
        $data = new Subcategorynested;

        $data->categoryId = $request->categoryId;

        $mixedsubcategory = $request->subcategoryid;
        // $mainmixedsubcategory = explode('___', $mixedsubcategory);
        // $finalsubcategoryid = $mainmixedsubcategory[0];
        // $finalsubcategoryname = $mainmixedsubcategory[1];
        
        $mainmixedsubcategory = explode('___', $mixedsubcategory);

// Check if keys 0 and 1 exist before accessing them
$finalsubcategoryid = isset($mainmixedsubcategory[0]) ? $mainmixedsubcategory[0] : null;
$finalsubcategoryname = isset($mainmixedsubcategory[1]) ? $mainmixedsubcategory[1] : null;


        $data->subcategoryid = $finalsubcategoryid;
        $data->subnestedcategoryname = $request->subnestedcategoryname;
        $tempcategory = $request->categoryId;
        // $tempsubcategory = $request->subcategoryid;
        Session::put('tempcategory', $tempcategory, 5);
        Session::put('tempsubcategory', $finalsubcategoryid, 5);
        Session::put('tempsubcategoryname', $finalsubcategoryname, 5);

        if ($request->file('subcategoryimage')){  
            $file = $request->file('subcategoryimage');
            $destinationPath = public_path('subcategoryimage');   
            $filename = $file->getClientOriginalName();
            $file->move($destinationPath, $filename); 
            $data->subcategoryimage = $filename;
            $data->save(); 
            return redirect()->route('subnested_category')
        
            ->with('successl3','L3 Name  created successfully.');
          }else{
            
        return "data not save";
        
            }
        $data->save();
        return redirect()->route('subnested_category');

    }}
    
    
    
     public function search_subnastcat_data(Request $request) {
        $query = $request->input('query');
        
        // Query to fetch Subcategorynested records and eager load category and subcategory
        $subnestcategory = Subcategorynested::with('category', 'subcategory')
                            ->whereHas('category', function ($q) use ($query) {
                                $q->where('name', 'like', "%$query%");
                            })
                            ->orWhereHas('subcategory', function ($q) use ($query) {
                                $q->where('subcategoryname', 'like', "%$query%");
                            })
                            ->orWhere('subnestedcategoryname', 'like', "%$query%")
                            ->get();
    
        return response()->json($subnestcategory);
    }

  public function updatesubnestedcategory(Request $request, $id)
    {
        $data = Subcategorynested::findOrFail($id);
        $data->subnestedcategoryname = $request->subnestedcategoryname;

            if ($request->hasFile('subcategoryimage')) {
                $previousImageName = $data->subcategoryimage; // Get the name of the previous image
                
                $newImage = $request->file('subcategoryimage');
                $newImageName = $newImage->getClientOriginalName(); // Generate a unique image name
                
                // Store the new image
                $newImage->move(public_path('subcategoryimage'), $newImageName);
                
                // Delete the previous image from storage
                if ($previousImageName && $previousImageName !== $newImageName) {
                    $previousImagePath = public_path('subcategoryimage' . $previousImageName);
                    
                    if (File::exists($previousImagePath)) {
                        File::delete($previousImagePath);
                    }
                }
                
                $data->subcategoryimage = $newImageName; // Update the image name in the database
            }
        $data->save();
    
         return redirect()->back()->with('success', 'L3 category successfully Updated.');
}
    
    public function destroy($id)
    {
        $subcategory = Subcategorynested::findOrFail($id);
        $subcategory->delete();
        return back()->with('success', 'Subcategory deleted successfully');
    }


    public function subcatname($id){
        $subcategories = Subcategory::all()->where('categoryId',$id)->pluck("subcategoryname","id");
        return json_encode($subcategories);
    }
}