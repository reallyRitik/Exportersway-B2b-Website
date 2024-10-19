<?php

namespace App\Http\Controllers;
use App\Models\Addcategory;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Listcustomer;
use App\Models\Subcategorynested;
use App\Models\Subcategory;
use Illuminate\Support\Facades\Redirect;

class SearchviewController extends Controller
{

    // public function searchview(Request $request, $id)
    // {
    //     $subcategory = subcategory::find($id);
        

    // // Check if the subcategory exists
    // if (!$subcategory) {
    //     return redirect()->back()->withErrors(['error' => 'Subcategory not found.']);
    // }

    //     $category = Addcategory::all()->take(10);
    //     $books =   Product::with('customers')->where('subcategoryname', $id)->paginate(10);
    //     $subnestedCategories = Subcategorynested::where('subcategoryid', $subcategory->id)->get();

    //     // $subnestedCat = subcategory::where('id', $l1category->id)->get();
        
    //     if ($books->isEmpty()) {
    //         return redirect()->back()->withErrors(['error' => 'Oops no products has been found.']);
    //     }
       
    //     return view('searchview', ['name' => $books, 'category'=>$category, 'subcategory'=>$subcategory,'subnestedCategory' => $subnestedCategories,]);
    // }
    public function searchview(Request $request,$category, $name)
    {
        // Retrieve the subcategory by name
        $subcategory = Subcategory::where('subcategoryname', $name)->first();
        
        if (!$subcategory) {
            return redirect()->back()->withErrors(['error' => 'Subcategory not found.']);
        }
    
        // Get the category using category_id from subcategory
        $category = Addcategory::find($subcategory->category_id);
    
        // Retrieve products that belong to the subcategory
        $books = Product::with('customers')
                    ->where('subcategoryname', $subcategory->id)
                    ->paginate(10);
    
        // Retrieve subnested categories related to the subcategory
        $subnestedCategories = Subcategorynested::where('subcategoryid', $subcategory->id)->get();
    
        if ($books->isEmpty()) {
            return redirect()->back()->withErrors(['error' => 'Oops, no products have been found.']);
        }
    
        // Pass the data to the view
        return view('searchview', [
            'name' => $books,
            'category' => $category,
            'subcategory' => $subcategory,
            'subnestedCategory' => $subnestedCategories,
        ]);
    }
    
    
     public function searchl3view(Request $request, $categories, $subcat, $name)
{
    $category = Subcategorynested::all()->take(10);
    $books = Product::with('customers')->where('subnastedcategoryname', $name)->paginate(10);
    
    if ($books->isEmpty()) {
        return redirect()->back()->withErrors(['error' => 'Oops no products have been found.']);
    }
   
    return view('searchviewl3', ['name' => $books, 'category' => $category]);
}

    public function productview($id)
    {
        $data = Product::findOrFail($id);
        return view('productview', ['data' => $data]);
    }
       public function viewcompany($name)
{
   $name = str_replace('-', ' ', $name);
        $name = strtolower($name); 
        $data = Listcustomer::with('product')->where('company_name', $name)->firstOrFail();
        return view('catlog', ['data' => $data]);

}

public function viewproduct($user_id)
{
    // Get the products data associated with the provided user ID
    $products = Product::with('customer')->where('user_id', $user_id)->get();

    return view('productcatlog',['products' => $products]);
}
public function viewabout($id)
{
    $data = Listcustomer::with('product')->findOrFail($id);
    return view('aboutcatlog', ['data' => $data]);
}
public function viewcontact($id)
{
    $data = Listcustomer::with('product')->findOrFail($id);
    return view('contactcatlog', ['data' => $data]);
}
public function showProduct($subnestedCategoryName)
{
    $product = Product::where('subnastedcategoryname', $subnestedCategoryName)->first();

    if ($product) {
        // Product found, display its information
        return view('l3show', compact('product'));
    } else {
        // Product not found, display a "Product Not Found" message
        return view('product.notfound');
    }
}

}
