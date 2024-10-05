<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leadlist;
use App\Models\Mail;
use App\Models\Favenquiry;
use Illuminate\Support\Facades\Auth;


class LeadlistController extends Controller
{
    
   public function index(){
        $lead = Leadlist::orderBy('created_at', 'DESC')->paginate(20);
        return view('admin.leadlist',compact('lead'));
    }

    public function searchleaddatadetails(Request $request)
    {
        $searchTerm = $request->input('search');
        $lead = Leadlist::query();
        if ($searchTerm) {
            $lead->where('title', 'like', '%'.$searchTerm.'%')
                ->orwhere('name', 'like', '%'.$searchTerm.'%')
                ->orWhere('email', 'like', '%'.$searchTerm.'%')
                ->orWhere('country', 'like', '%'.$searchTerm.'%')
                ->orWhere('city', 'like', '%'.$searchTerm.'%')
                ->orWhere('company_name', 'like', '%'.$searchTerm.'%');
        }
    
        $lead = $lead->orderBy('created_at', 'DESC')->paginate(20);

        return response()->json($lead);
    }
    
    
    
    public function showlead(){
        $query = Leadlist::orderBy('created_at', 'DESC');
$dataCount = $query->count();
$showlead = $query->paginate(20);
        return view('showlead',compact('showlead', 'dataCount'));
    }
    
    public function leaddetails($id)
{
    $data = Leadlist::findOrFail($id);
    return view('leaddetails', ['data' => $data]);
}
    public function ourrequirement(){
        return view('requirements');
    }
public function searchLead(Request $request)
{
    $leadName = $request->input('title');

  $leads = Leadlist::where('title', 'LIKE', '%' . $leadName . '%')
    ->orderBy('created_at', 'desc')
    ->paginate(20);
    return view('searchlead', compact('leads'));
}

   public function managelead(Request $request)
    {
        $validActiveValues = ['0'];
    
        $lead = Leadlist::whereIn('active', $validActiveValues)
            ->orderBy('created_at', 'desc')
            ->paginate(20);
    
        return view('admin.managelead', compact('lead'));
    }

public function updateMultiple(Request $request)
{
   $leadIds = $request->input('leadIds');
   
   $lead = Leadlist::whereIn('id', $leadIds)->update(['active' => 1]);

   return response()->json(['message' => 'Leads updated successfully']);
}


 public function viewlead(){
        $lead = Leadlist::orderBy('created_at', 'DESC')->paginate(20);
        return view('customer.lead',compact('lead'));
    }
// public function viewlead(Request $request)
// {
//     $productTitle = $request->input('product_title');
//     $lead = Leadlist::whereHas('products', function($query) use ($productTitle) {
//         $query->where('title', 'LIKE', "%{$productTitle}%");
//     })
//     ->with('products')
//     ->orderBy('created_at', 'DESC')
//     ->paginate(20);
//     return view('customer.lead', compact('lead'));
// }

    public function searchviewlead(Request $request){
         $leadName = $request->input('title');

  $lead = Leadlist::where('title', 'LIKE', '%' . $leadName . '%')
    ->orderBy('created_at', 'desc')
    ->get();
    return view('customer.searchviewlead', compact('lead'));
    }
    public function addrequirement(Request $request)
    {
$data = new Leadlist;

$data->title = $request->title;
$data->name = $request->name;
$data->mobile = $request->mobile;
$data->email = $request->email;
$data->company_name = $request->company_name;
$data->city = $request->city;
$data->qty = $request->qty;
$data->unit = $request->unit;
$data->country = $request->country;
$data->message = $request->message;
// $data->save();
// return redirect()->route('lead_data')
//     ->with('success', 'category created successfully.');}
if ($data->save()){
    return redirect()->route('lead_data')
    ->with('success', 'category created successfully.');
}
else {
  return back()->with('productcreationerror', 'Your Requirement could not be Added, kindly fill correct details.');
        
}}


    public function edit($id)
    {
        $lead = Leadlist::where('id', $id)->get();
        return view('admin.editlead', compact('lead'));
    }
    public function update(Request $request, $id)
    {
        
        $data = Leadlist::findOrFail($id);
        // dd($data);
        
        $data->title = $request->title;
        $data->name = $request->name;
        $data->mobile = $request->mobile;
        $data->active = $request->active;
        $data->email = $request->email;
        $data->company_name = $request->company_name;
        $data->city = $request->city;
        $data->qty = $request->qty;
        $data->unit = $request->unit;
        $data->country = $request->country;
        $data->message = $request->message;
         $data->created_at = $request->created_at;
        
        if ($data->save()) {
            return redirect()->route('lead_name')
            ->with('success','Lead successfully Edit.');
        } else {
            return "data not save";
        }
        
        // dd($data);


        
    }

    public function destroy($id)
    {
        // Role Delete
        // print_r($id);
        $Role = Leadlist::findOrFail($id);
        $Role->delete();
        return back()->with('Delete','Role deleted successfully');
    }
    
     public function searchleaddata(Request $request)
    {
        $searchType = $request->input('search_type');
        $searchTerm = $request->input('search_term');
    
        if ($searchType === 'title') {
            $lead = Leadlist::where('title', 'like', '%' . $searchTerm . '%')->orderBy('created_at', 'desc')->paginate(20);
            return view('admin.productlistsearch', compact('lead'));
        } elseif ($searchType === 'country') {
            $lead = Leadlist::where('country', 'like', '%' . $searchTerm . '%')->orderBy('created_at', 'desc')->paginate(20);
            return view('admin.countrysearchlead', compact('lead'));
        } 
    
        return response('Invalid search type.', 400);
    }
    public function showenquiry(){
        $enquiry = Mail::orderBy('created_at', 'DESC')->paginate(20);
        return view('customer.showenquiry',compact('enquiry'));
    }
    public function searchenquiry(Request $request)
{
    // Get the user's search input
    $search = $request->input('search');

    // Query the database to search for data that contains the search input
    $results = Mail::where('massage', 'LIKE', "%$search%")->get();

    if ($results->isEmpty()) {
        return 'product not found';
    }

    // Return the search results to a view
    return view('customer.searchenquiry', compact('results'));
}

public function decrementPoints(Request $request)
{
    $user = auth()->user();
    $customer = $user->customer;

    // Decrement the points by 1 (or any other amount you want)
    $customer->decrement('points', 1);

    return response()->json(['points' => $customer->points]);
}
public function favenquiryadd($lead_id)
{
    $user_id = Auth::id(); // Get the logged-in user's ID

    // Check if a record for this user exists
    $favenquiry = Favenquiry::where('user_id', $user_id)->first();

    if ($favenquiry) {
        // Ensure that lead_ids is always an array
        $leadIds = $favenquiry->lead_ids ?? []; // Default to an empty array if null

        if (!in_array($lead_id, $leadIds)) {
            // Add the new lead_id to the array
            $leadIds[] = $lead_id;
            $favenquiry->lead_ids = $leadIds;
            $favenquiry->save();

            return redirect()->back()->with('status', 'added'); // Status for success
        }

        return redirect()->back()->with('status', 'already_saved'); // Status for already saved
    } else {
        // If no record exists for this user, create one with the lead_id
        Favenquiry::create([
            'user_id' => $user_id,
            'lead_ids' => [$lead_id], // Store the lead_id as an array
        ]);

        return redirect()->back()->with('status', 'added'); // Status for success
    }
}
public function showFavorites()
{
    $user_id = Auth::id(); // Get the logged-in user's ID

    // Fetch the user's favorite enquiries
    $favenquiry = Favenquiry::where('user_id', $user_id)->first();

    // Check if the user has any favorite enquiries
    if ($favenquiry) {
        $lead_ids = $favenquiry->lead_ids; // Get the array of lead IDs

        // Fetch the leads corresponding to the lead IDs
        $favoriteLeads = Leadlist::whereIn('id', $lead_ids)->get(); // Assuming 'Lead' is your model for enquiries
    } else {
        $favoriteLeads = []; // No favorite enquiries found
    }

    // Pass the favorite leads to the view
    return view('addtofav', compact('favoriteLeads'));
}

public function removeFromFavorites($lead_id)
{
    $user_id = Auth::id(); // Get the logged-in user's ID

    // Find the user's favorite enquiry entry
    $favenquiry = Favenquiry::where('user_id', $user_id)->first();

    if ($favenquiry) {
        $leadIds = $favenquiry->lead_ids; // Get the array of lead IDs

        // Check if the lead ID exists in the array
        if (in_array($lead_id, $leadIds)) {
            // Remove the lead ID from the array
            $leadIds = array_diff($leadIds, [$lead_id]);

            // Update the 'lead_ids' field
            $favenquiry->lead_ids = array_values($leadIds); // Re-index the array
            $favenquiry->save();

            return redirect()->back()->with('success', 'Lead removed from your favorites!');
        }

        return redirect()->back()->with('error', 'Lead not found in your favorites.');
    }

    return redirect()->back()->with('error', 'You have no favorite enquiries.');
}

public function removeMultipleFromFavorites(Request $request)
{
    $user_id = Auth::id(); // Get the logged-in user's ID
    $leadIdsToDelete = $request->input('lead_ids', []); // Get the selected lead IDs

    if (!empty($leadIdsToDelete)) {
        // Find the user's favorite enquiry entry
        $favenquiry = Favenquiry::where('user_id', $user_id)->first();

        if ($favenquiry) {
            $leadIds = $favenquiry->lead_ids;

            // Remove the selected lead IDs from the user's favorites
            $leadIds = array_diff($leadIds, $leadIdsToDelete);

            // Update the 'lead_ids' field
            $favenquiry->lead_ids = array_values($leadIds); // Re-index the array
            $favenquiry->save();

            return redirect()->back()->with('success', 'Selected inquiries removed from your favorites!');
        }
    }

    return redirect()->back()->with('error', 'No inquiries selected or found.');
}


}
