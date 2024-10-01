<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subcategory;
use App\Models\Addcategory;
use App\Models\Requirement;
use App\Models\Product;
use App\Models\Leadlist;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class HomecontentController extends Controller
{
    
   public function index(){
        $category = Addcategory::all();
        $lead = Leadlist::orderBy('created_at', 'desc')
        ->take(30)
        ->get();
        $productname =Product::orderBy('created_at', 'desc')
        ->take(30)
        ->get();
        $products = Product::with('customer')->take(30);
        $subcategory = Addcategory::join('subcategory', 'category.id', '=', 'subcategory.categoryId')
            ->select('category.*', 'subcategory.categoryId', 'subcategory.subcategoryname')
            ->get();
         return view('homecontent', compact('category','subcategory', 'products','lead', 'productname'));
    }
    public function getSubcategories($categoryId)
    {
        $subcategories = Subcategory::where('categoryId', $categoryId)->get();
        print_r($subcategories);
        return response()->json($subcategories);
    }

    public function topSearches()   
{
    $searches = Search::orderBy('count', 'desc')->take(10)->get();
    return response()->json($searches);
}

public function requirement(Request $request)
    {

        $data = new Requirement;
        $data->products_want = $request->products_want;
        $data->full_name = $request->full_name;
        $data->email = $request->email;
        $data->number = $request->number;
        $data->company = $request->company;
        $data->type = $request->type;
        $data->save();
        return redirect()->back()->with('success', 'Category created successfully.');

    }
    public function listrequirement (Request $request){
        $leadrequirement = Requirement::orderBy('created_at', 'desc')->get();
        return view('admin.requirement', compact('leadrequirement'));
    }
    
    
    public function send_Inquiry(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'number' => 'required|string|max:15',
        'industry' => 'required|string|max:255',
        'quantity' => 'required|string|max:255',
        'massage' => 'required|string|max:5000',
    ]);

    $data = $request->all();

    try {
        Mail::send([], [], function ($message) use ($data) {
            $message->to('techteam@exportersway.com')
                    ->subject('New Inquiry')
                    ->setBody(
                        'Name: ' . $data['name'] . '<br>' .
                        'Email: ' . $data['email'] . '<br>' .
                        'Number: ' . $data['number'] . '<br>' .
                        'Industry: ' . $data['industry'] . '<br>' .
                        'Quantity: ' . $data['quantity'] . '<br>' .
                        'Message: ' . $data['massage'],
                    );
            $message->from( $data['email'], 'New Inquiry');
        });

        return back()->with('success', 'Inquiry sent successfully!');
    } catch (\Exception $e) {
        Log::error('Mail sending error: ' . $e->getMessage());
        return back()->withErrors(['error' => 'Failed to send inquiry. Please try again later.']);
    }
}


}
