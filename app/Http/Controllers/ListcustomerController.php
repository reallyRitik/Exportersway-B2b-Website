<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listcustomer;
use App\Models\Product;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
class ListcustomerController extends Controller
{
    //
    public function index(){
            $allcustomer = Listcustomer::orderBy('created_at', 'desc')->get();
    return view('admin.listcustomer', compact('allcustomer'));
    }

   public function editcustomer(Request $request, $id)
{
    $listcust = Listcustomer::where('id', $id)->first();
    return view('admin.editlistcustomer', compact('listcust'));
}
    
  public function updatecustomer(Request $request, $id)
{
    $data = Listcustomer::findOrFail($id);
    $data->email = $request->input('email');
    $data->mobile = $request->input('mobile');
    $data->company_name = $request->input('company_name');
    $data->contact_name = $request->input('contact_name');
    $data->address = $request->input('address');
    $data->country = $request->input('country');
    $data->membership_expiry = $request->input('membership_expiry');
    $data->save(); 

   try {
        // Your update code here
        $data->save();
        return redirect()->back()->with('success', 'Customer details successfully updated.');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Error updating customer details: ' . $e->getMessage());
    }
}

 public function showNavMenu()
{
    $listCustomer = Listcustomer::find(1); // Replace 1 with the appropriate query to retrieve the desired Listcustomer record
    
    return view('navmenu', ['rank' => $listCustomer->rank ?? null]);
}
    public function destroy($id)
{
    try {
        $role = Listcustomer::findOrFail($id);
        $role->delete();
        return redirect()->back()->with('success', 'Role deleted successfully');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Failed to delete role');
    }
}

   public function viewpaidmembre(Request $request)
    {
        
        $allpaidcustomer = Listcustomer::where('rank', '!=', 5)
        ->orderBy('created_at', 'desc')
        ->get();
        return view('admin.listpaidcustomers', ['customer' => $allpaidcustomer]);
        // dd($data);
    }
    
   public function viewtetramembre(Request $request)
    {
        
        $allpaidcustomer = Listcustomer::where('rank', '=', 4)
        ->orderBy('created_at', 'desc')
        ->get();
        return view('admin.tetramember', ['customer' => $allpaidcustomer]);
        // dd($data);
    }
   public function viewgrowingmembre(Request $request)
    {
        
        $allpaidcustomer = Listcustomer::where('rank', '=', 3)
        ->orderBy('created_at', 'desc')
        ->get();
        return view('admin.growingmember', ['customer' => $allpaidcustomer]);
        // dd($data);
    }
   public function viewpromembre(Request $request)
    {
        
        $allpaidcustomer = Listcustomer::where('rank', '=', 2)
        ->orderBy('created_at', 'desc')
        ->get();
        return view('admin.promember', ['customer' => $allpaidcustomer]);
        // dd($data);
    }
   public function viewelitemembre(Request $request)
    {
        
        $allpaidcustomer = Listcustomer::where('rank', '=', 1)
        ->orderBy('created_at', 'desc')
        ->get();
        return view('admin.elitemember', ['customer' => $allpaidcustomer]);
        // dd($data);
    }
   public function vieweliteplusmembre(Request $request)
    {
        
        $allpaidcustomer = Listcustomer::where('rank', '=', 6)
        ->orderBy('created_at', 'desc')
        ->get();
        return view('admin.eliteplusmember', ['customer' => $allpaidcustomer]);
        // dd($data);
    }

     public function viewfreemembre(Request $request)
    {
        
        $allfreecustomer = Listcustomer::where('rank', '=', 5)->get();
        return view('admin.listfreecustomer', ['allcustomer' => $allfreecustomer]);
        // dd($data);
    }
    public function viewproduct(Request $request, $user_id)
    {
      $listcust =  Product::with('category')
                    ->where('user_id', $user_id)
                    ->get();
        return view('admin.viewproduct', compact('listcust'));
        // dd($data);
    }
    public function editmembership(Request $request, $id)
    {
        $allpaidcustomer = Listcustomer::where('id', $id)->firstOrFail();
        
        // Sort the rank history in descending order by updated_at
        $rankHistory = collect($allpaidcustomer->rank_history)->sortByDesc('updated_at')->values()->all();
        
        return view('admin.updatemembreship', [
            'customer' => $allpaidcustomer,
            'rankHistory' => $rankHistory
        ]);
    }
    
      public function seachdatacustomer(Request $request)
{
    $searchType = $request->input('search_type');
    $searchTerm = $request->input('search_term');

    if ($searchType === 'email') {
        $allcustomer = Listcustomer::where('email', 'like', '%' . $searchTerm . '%')->orderBy('rank', 'asc')->get();
        return view('admin.serachdataemail', compact('allcustomer'));
    } elseif ($searchType === 'company_name') {
        $allcustomer = Listcustomer::where('company_name', 'like', '%' . $searchTerm . '%')->orderBy('rank', 'asc')->get();
        return view('admin.serachdatacompany', compact('allcustomer'));
    } elseif ($searchType === 'mobile') {
        $allcustomer = Listcustomer::where('mobile', 'like', '%' . $searchTerm . '%')->orderBy('rank', 'asc')->get();
        return view('admin.serachdatamobile', compact('allcustomer'));
    }
    elseif ($searchType === 'country') {
        $allcustomer = Listcustomer::where('country', 'like', '%' . $searchTerm . '%')->orderBy('rank', 'asc')->get();
        return view('admin.serachdatacountry', compact('allcustomer'));
    }

    return response('Invalid search type.', 400);
}


public function savepoints(Request $request, $id)
{
      
        $data = Listcustomer::findOrFail($id);   
        $data->points = $request->input('points');
        $data->save(); 
        return redirect()->route('listpaidcustomers', ['id' => $id])
        ->with('productcreationsuccess', 'Membership successfully Edit.');
}
public function editpoints(Request $request, $id)
{
    $listcust = Listcustomer::where('id', $id)->first();
    return view('admin.editpoints', compact('listcust'));
}

    
    
       public function updatemembership(Request $request, $id)
{
    $data = Listcustomer::findOrFail($id);
        $newRank = $request->input('rank');
        
        $points = $this->calculatePoints($newRank);
        $data->rank = $newRank;
        $data->points = $points;
        $newRankName = $data->getRankName($newRank);
        $rankHistory = $data->rank_history ?? [];
        $membershipExpiry = Carbon::now()->addYear();
        $data->membership_expiry = $membershipExpiry;
        $rankHistory[] = [
            'rank' => $newRank,
            'rank_name' => $newRankName,
            'updated_at' => now()
        ];
        $data->rank_history = $rankHistory;
        $data->save();
        Log::info('Membership updated successfully.', ['id' => $id, 'new_rank' => $newRank]);

        return back()->with('success', 'Membership successfully updated.');
     }

// You can define a function to calculate points based on rank here
private function calculatePoints($rank)
{
    // Add your logic to calculate points based on the rank here
    // For example, you can use a switch statement or any formula you prefer.
    // This is just a placeholder example:
    switch ($rank) {
        case '1':
            return 300;
        case '2':
            return 144;
        case '3':
            return 48;
        case '4':
            return 24;
        case '6':
            return 420;
        default:
            return 0; // Default value if rank is not recognized
    }
}
    
    public function editpaidcustomer(Request $request, $id)
{
    $listcust = Listcustomer::where('id', $id)->first();
    return view('admin.editpaidmembership', compact('listcust'));
}
public function updatepaidmembership(Request $request, $id)
{
      
        $data = Listcustomer::findOrFail($id);   
        $data->rank = $request->input('rank');
        $data->apeda = $request->input('apeda');
        $data->save(); 
        return redirect()->route('listpaidcustomers', ['id' => $id])
        ->with('productcreationsuccess', 'Membership successfully Edit.');
}
 public function paidmember(Request $request)
{
    $search = $request->input('email'); 
    $customers = ListCustomer::where('rank', '!=', 5);

    if ($search) {
        $customers->where('company_name', 'like', '%' . $search . '%');
    }

   
    $customer = $customers->get();

    return view('admin.searchpaidmember', compact('customer'));
}

}
