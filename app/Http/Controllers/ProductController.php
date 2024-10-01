<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Addcategory;
use App\Models\Subcategory;
use App\Models\Subcategorynested;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\Listcustomer;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index(){
        $category = Addcategory::orderBy('name', 'asc')->get();;
        $subcategory = Subcategory::all();
        
        return view('customer.addnewproduct', compact('category', 'subcategory'));
    }
   
    public function addproduct($id){
        $subcategories = Subcategory::all()->where('categoryId',$id)->pluck("subcategoryname","id");
        return json_encode($subcategories);
    }
    public function addproductss($id)
    {
        $subcategories = Subcategorynested::where('subcategoryid', $id)
            ->pluck("subnestedcategoryname", "id");
        
        return json_encode($subcategories);
    }
    

    public function viewproduct()
{
    $products = Product::with('category')->get();
    return view('customer.manageproduct', compact('products'));
}

public function productlist(Request $request)
    {
        
    
        $user = Auth::user();
        $customer = Listcustomer::where('user_id', $user->id)->first();
        
         if (!$customer || is_null($customer->user_id)) {
            return back()->with('productcreationerror', 'Please fill in your company details before adding a product.');
        }
    
        $product = new Product();
        $product->user_id = $customer->id;
        $product->title = $request->title;
        $product->details = $request->details;
         $product->pprice = $request->pprice;
        $product->mqty = $request->mqty;
        $product->pterms = $request->pterms;
        $product->sability = $request->sability;
        $product->categoryname = $request->categoryname;
        $product->subcategoryname = $request->subcategoryname;
        $product->subnastedcategoryname = $request->subnastedcategoryname;
    
        if ($request->file('images')) {
            $file = $request->file('images');
            $destinationPath = public_path('assets/images/Products');
            $filename = $file->getClientOriginalName();
            $file->move($destinationPath, $filename);
            $product->images = $filename;
        }
    
        $product->save();
    
        return redirect()->route('addproducts')->with('productcreationsuccess', 'Product created successfully.');
    }



public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
    
        return redirect()->back()->with('success', 'Product deleted successfully.');
    }
    
     public function editproduct($id)
    {
        $product = Product::where('id', $id)->first();
        return view('customer.editproduct', compact('product'));
    }
    //     public function showproduct($id)
    // {
    //     $product = Product::findOrFail($id);
    //     if (!$product) {
    //         return abort(404); // Product not found
    //     }

    //     return view('productshow', compact('product'));
    // }
    
     public function showproduct($id, $title)
{
   // Find the product by ID
    $product = Product::findOrFail($id);

    // Slugify the product's title to ensure it's in lowercase with hyphens
    $slugifiedTitle = Str::slug($product->title);

    // If the title in the URL is not the slugified title, redirect to the correct URL
    if ($title !== $slugifiedTitle) {
        return redirect()->route('product.show', ['id' => $product->id, 'title' => $slugifiedTitle]);
    }

    // Return the view with product details
    return view('productshow', compact('product'));
}
  
public function updateproduct(Request $request, $id)
{
   
    $data = Product::findOrFail($id);
    $data->title = $request->input('title');
    $data->details = $request->input('details');
      $data->pprice = $request->input('pprice');
        $data->mqty = $request->input('mqty');
        $data->pterms = $request->input('pterms');
        $data->sability = $request->input('sability');
   
    if ($request->hasFile('images')) {
        $previousImageName = $data->images; // Get the name of the previous image
        
        $newImage = $request->file('images');
        $newImageName = $newImage->getClientOriginalName();; // Generate a unique image name
        
        // Store the new image
        $newImage->move(public_path('assets/images/Products'), $newImageName);
        
        // Delete the previous image from storage
        if ($previousImageName && $previousImageName !== $newImageName) {
            $previousImagePath = public_path('assets/images/Products/' . $previousImageName);
            
            if (File::exists($previousImagePath)) {
                File::delete($previousImagePath);
            }
        }
        
        $data->images = $newImageName; // Update the image name in the database
    }
    $data->save();
    return redirect()->route('viewproductlist')->with('productcreationsuccess', 'Product edited successfully.');
}
}
