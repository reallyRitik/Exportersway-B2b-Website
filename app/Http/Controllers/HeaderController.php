<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Header;
use App\Models\Addcategory;
use App\Models\Subcategory;
use App\Models\Subcategorynested;
use App\Models\Product;
use App\Models\Listcustomer;
use GuzzleHttp\Client;

class HeaderController extends Controller
{
    //
    public function index()
    {

        return view('welcome');
    }
    public function store(Request $request)
    {

        $data = new Header;
        $data->fname = $request->fname;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->companyname = $request->companyname;
        $data->save();
        return redirect()->route('enquiry')
            ->with('success', 'category created successfully.');

        // return redirect()->->TO('addcategory')
        // route('addcategory');
    }

//       public function search(Request $request)
// {
//     $searchType = $request->input('search_type');
//     $searchTerm = $request->input('title');

//      if ($searchType === 'product') {
//         $products = Product::where('title', 'like', '%' . $searchTerm . '%')->paginate(20);
//         return view('serachdata', compact('products'));
//     } elseif ($searchType === 'company') {
//         $companies = Listcustomer::where('company_name', 'like', '%' . $searchTerm . '%') ->orderBy('rank', 'asc')->get();
//         return view('companyproduct', compact('companies'));
//     }  

//     // Handle other search types or display an error if none matched.
//     return response('Invalid search type.', 400);
// }

public function search(Request $request)
{
    $searchType = $request->input('search_type');
    $searchTerm = $request->input('title');
    if ($searchType === 'product') {
        $products = Product::select('products.*')
            ->leftJoin('customers', 'customers.id', '=', 'products.user_id')
            ->where('products.title', 'like', '%' . $searchTerm . '%')
            ->orderByRaw('customers.rank = 6 DESC, customers.rank ASC')
            ->paginate(20);
        return view('serachdata', compact('products','searchTerm'));
    } elseif ($searchType === 'company') {
        $companies = Listcustomer::where('company_name', 'like', '%' . $searchTerm . '%') ->orderBy('rank', 'asc')->get();
        return view('companyproduct', compact('companies','searchType'));
    }  

    // Handle other search types or display an error if none matched.
    return response('Invalid search type.', 400);
}


    // public function searchdisplay(Request $request)
    // {
    //     $search = $request->input('search');
    //     $books = Subcategory::with('Subcategorynested')->where('categoryId', $search)->get();

    //     return view('searchdisplay', ['name' => $books]);
    // }
    
    public function searchdisplay($slug)
{
    // Convert the slug back to the original category name
    $name = str_replace(['and', '-'], ['&', ' '], ucwords($slug));

    // Find the category by the original name
    $category = Addcategory::where('name', $name)->first();

    if ($category) {
        // Fetch subcategories based on the category_id
        $books = Subcategory::with('Subcategorynested')
            ->where('categoryId', $category->id)
            ->get();

        // Pass the result to the view
        return view('searchdisplay', ['name' => $books,
            'meta_title' => $category->meta_title,
            'meta_des' => $category->meta_desc,
            'keyword' => $category->keyword]);
    } else {
        // If the category is not found, return an error or redirect
        return redirect()->back()->with('error', 'Category not found');
    }
}
    
//     public function filterByCountry(Request $request)
// {
//     $country = $request->country;
//     $filteredCustomers = Listcustomer::where('country', $country)
//     ->orderBy('rank', 'asc')
//     ->paginate(20);
//     return view('searchbycountry', compact('filteredCustomers'));
// }

 public function filterByCountry(Request $request)
    {
        $country = $request->country;
    
        $filteredCustomers = Listcustomer::where('country', $country)
            ->orderByRaw('CASE WHEN rank = 6 THEN 0 WHEN rank = 1 THEN 1 ELSE 2 END, rank ASC')
            ->paginate(20);
    
        return view('searchbycountry', compact('filteredCustomers'));
    }
    public function allcat()
    {
        $category = Addcategory::all();
        return view('allcategory', compact('category'));
    }

    public function supplier()
    {
        $category = Addcategory::all()->take(22);
        return view('suppliers', compact('category'));
    }
}
