<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leadlist;
use App\Models\Mail;
use App\Models\Favenquiry;
use App\Models\Inquiry;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Listcustomer;
use App\Models\LeadView;
use Carbon\Carbon;
use PHPMailer\PHPMailer\PHPMailer;
use Illuminate\Support\Facades\Crypt;
use PHPMailer\PHPMailer\Exception;
use App\Models\Leadtoken;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail as MailFacade;


class LeadlistController extends Controller
{

    public function index()
    {
        $lead = Leadlist::orderBy('created_at', 'DESC')->paginate(20);
        return view('admin.leadlist', compact('lead'));
    }

    public function searchleaddatadetails(Request $request)
    {
        $searchTerm = $request->input('search');
        $lead = Leadlist::query();
        if ($searchTerm) {
            $lead->where('title', 'like', '%' . $searchTerm . '%')
                ->orwhere('name', 'like', '%' . $searchTerm . '%')
                ->orWhere('email', 'like', '%' . $searchTerm . '%')
                ->orWhere('country', 'like', '%' . $searchTerm . '%')
                ->orWhere('city', 'like', '%' . $searchTerm . '%')
                ->orWhere('company_name', 'like', '%' . $searchTerm . '%');
        }

        $lead = $lead->orderBy('created_at', 'DESC')->paginate(20);

        return response()->json($lead);
    }



    public function showlead()
    {
        $query = Leadlist::orderBy('created_at', 'DESC');
        $dataCount = $query->count();
        $showlead = $query->paginate(20);
        $hasFavorites = Favenquiry::where('user_id', Auth::id())->exists();
        return view('showlead', compact('showlead', 'dataCount', 'hasFavorites'));
    }

    public function leaddetails($id)
    {
        $data = Leadlist::findOrFail($id);
        return view('leaddetails', ['data' => $data]);
    }
    public function ourrequirement()
    {
        return view('requirements');
    }
    public function searchLead(Request $request)
    {
        $leadName = $request->input('title');

        $leads = Leadlist::where('title', 'LIKE', '%' . $leadName . '%')
            ->orderBy('created_at', 'desc')
            ->paginate(20);
            $hasFavorites = Favenquiry::where('user_id', Auth::id())->exists();
        return view('searchlead', compact('leads', 'hasFavorites'));
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


    public function viewlead()
    {
        $lead = Leadlist::orderBy('created_at', 'DESC')->paginate(20);
        return view('customer.lead', compact('lead'));
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

    public function searchviewlead(Request $request)
    {
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
        if ($data->save()) {
            return redirect()->route('lead_data')
                ->with('success', 'category created successfully.');
        } else {
            return back()->with('productcreationerror', 'Your Requirement could not be Added, kindly fill correct details.');
        }
    }


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
                ->with('success', 'Lead successfully Edit.');
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
        return back()->with('Delete', 'Role deleted successfully');
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
    public function showenquiry()
    {
        $enquiry = Mail::orderBy('created_at', 'DESC')->paginate(20);
        return view('customer.showenquiry', compact('enquiry'));
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
        $captcha = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyz"), 0, 5);

        // Store the CAPTCHA in session
        session(['captcha' => $captcha]);
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
        return view('addtofav', compact('favoriteLeads', 'captcha'));
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
        $leadIdsToDelete = $request->input('lead_ids', []);
        if (!empty($leadIdsToDelete)) {
            Favenquiry::whereIn('lead_ids', $leadIdsToDelete)
                ->where('user_id', $user_id)
                ->delete();
            return redirect()->back()->with('success', 'Selected inquiries removed from your favorites!');
        }

        return redirect()->back()->with('error', 'No inquiries selected or found.');
    }

    public function submitInquiry(Request $request)
    {
        $user = Auth::user();
    
        // Validate form input
        $request->validate([
            'name' => 'required|string',
            'company_name' => 'required|string',
            'mobile' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
            'captcha' => 'required'
        ]);
    
        // CAPTCHA validation
        if ($request->captcha !== session('captcha')) {
            return back()->withErrors(['captcha' => 'CAPTCHA is invalid.']);
        }
    
        // Check if the email exists in the users table
        $emailUser = User::where('email', $request->email)->first();
        if (!$emailUser) {
            return back()->withErrors(['email' => 'Email not recognized']);
        }
    
        // Check user rank
        $customer = Listcustomer::where('user_id', $user->id)->first();
        if ($customer && $customer->rank == 5) {
            return response()->json([
                'message' => 'You are a free member, upgrade your membership',
                'redirect' => url('adverties')
            ]);
        }
    
        // Save form data to the database
        Inquiry::create([
            'name' => $request->name,
            'company_name' => $request->company_name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'message' => $request->message,
            'user_id' => $user->id
        ]);
    
        // Retrieve favorite leads
        $favoriteLeads = Favenquiry::where('user_id', $user->id)->get();
    
        // HTML content for the email
        $message = '
        <html>
        <head>
            <style>
                /* Your email styles */
            </style>
        </head>
        <body>
            <div class="banner">
                <img src="https://exportersway.com/bannerimg/Global-B2B-Buyers.jpg" alt="Company Banner" width="100%" height="150px" />
            </div>
            <h2>Your Favorite Lead Details</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Lead Title</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>';
    
        // Loop through favorite leads and prepare the email content
        foreach ($favoriteLeads as $favoriteLead) {
            foreach ($favoriteLead->lead_ids as $leadId) {
                $lead = Leadlist::find($leadId);
                if ($lead) {
                    $token = Str::random(80);
    
                    // Save token to Leadtoken model
                    Leadtoken::create([
                        'user_id' => $user->id,
                        'lead_id' => $leadId,
                        'token' => $token
                    ]);
    
                    // Prepare the lead URL
                    $leadUrl = url('leaddetail/' . $leadId . '?token=' . $token);
    
                    // Add lead details to the email message
                    $message .= '
                    <tr>
                        <td>' . $lead->title . '</td>
                        <td><a href="' . $leadUrl . '" class="click-btn">Click Here</a></td>
                    </tr>';
                }
            }
        }
    
        $message .= '
                </tbody>
            </table>
            <div class="terms">
                <p>Terms and Conditions: Lorem ipsum dolor sit amet...</p>
            </div>
        </body>
        </html>';
    
        // Send email using PHPMailer
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host       = 'smtp.hostinger.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'noreply@exportersway.com';
        $mail->Password   = 'No#@reply$#1234';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
    
        try {
            $mail->setFrom('noreply@exportersway.com', 'Your Company');
            $mail->addAddress($request->email);
            $mail->addReplyTo('noreply@exportersway.com', 'No Reply');
            $mail->isHTML(true);
            $mail->Subject = 'Your Favorite Lead Details';
            $mail->Body    = $message;
    
            $mail->send();
    
            return back()->with('success', 'Inquiry submitted and email sent successfully!');
    
        } catch (Exception $e) {
            return back()->withErrors(['email' => 'Email could not be sent. Mailer Error: ' . $mail->ErrorInfo]);
        }
    }
    


public function showLeadDetails(Request $request, $id)
{
    $user = Auth::user();

    // Fetch the user's rank from the Listcustomer table
    $customer = Listcustomer::where('user_id', $user->id)->first();
    if (!$customer) {
        return redirect()->route('dashboard')->withErrors(['error' => 'Customer details not found']);
    }

    // Define lead view limits based on rank
    $viewLimits = [
        1 => 8,
        2 => 6,
        3 => 4,
        4 => 2, 
        6 => 10, 
    ];

    // Get the lead viewing limit for the user's rank
    $rank = $customer->rank;
    $leadViewLimit = $viewLimits[$rank] ?? 1; // Default to 1 if rank is not defined

    // Count how many leads the user has viewed today
    $leadViewsToday = LeadView::where('user_id', $user->id)
        ->whereDate('view_date', Carbon::today())
        ->count();

    // Check if the user has exceeded their limit
    if ($leadViewsToday >= $leadViewLimit) {
        return response()->json([
            'message' => 'Your membership tier only allows you to view ' . $leadViewLimit . ' leads per day. Please upgrade your membership for more access.',
            'redirect' => url('adverties') // Redirect to upgrade membership page
        ]);
    }

    // Find the lead details
    $lead = Leadlist::find($id);
    if (!$lead) {
        return back()->withErrors(['error' => 'Lead not found']);
    }

    // Track the lead view by saving it to the lead_views table
    LeadView::create([
        'user_id' => $user->id,
        'lead_id' => $id,
        'view_date' => Carbon::today(),
    ]);

    // Proceed with showing the lead details
    return view('details', ['lead' => $lead]);
}
    
}
