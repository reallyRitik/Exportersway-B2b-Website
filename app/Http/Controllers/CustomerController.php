<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listcustomer;
use App\Models\User;
use App\Models\Enquiry;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Mail;
use App\Mail\UserActivated;
use File;

class CustomerController extends Controller
{
    public function index(){
        return view('customer.editcompanyprofile');
    }
     public function companyabout(){
        return view('customer.editcomapnyabout');
    }
    public function contactdetails(){
        return view('customer.editconnectdetails');
    }
    public function importantdata(){
        return view('customer.addimportantdata');
    }
   
    public function profile() {
    $userId = auth()->user()->id;
    $profile = Listcustomer::where('user_id', $userId)->first();

    if ($profile) {
        // Profile exists, so show the profile view
        return view('customer.profile', compact('profile'));
    } else {
        // Profile doesn't exist, show a message
        return view('customer.no_profile');
    }
}


  public function comapanydetails(Request $request)
    {
       
    
        $data = new Listcustomer;
        $data->user_id = $request->user()->id;
        $data->company_name = $request->company_name;
        $data->website = $request->website;
        $data->companydetails = $request->companydetails;
    
        if ($request->hasFile('companylogo')) {
            $file = $request->file('companylogo');
            $destinationPath = public_path('assets/images/companylogo');
            $filename = $file->getClientOriginalName();
            $file->move($destinationPath, $filename); 
            $data->companylogo = $filename;
        }
         else {
            return back()->with('productcreationerror', 'Please Attached Your Company Logo.');
        }
    
        $data->save(); 
    
        return redirect()->route('details')
            ->with('success', 'Data saved successfully.');
    }
    public function submitconnectdetails(Request $request)
{
    $userId = $request->user()->id;

    $data = Listcustomer::where('user_id', $userId)->first();

    if ($data) {
        $data->contact_name = $request->contact_name;
        $data->email = $request->email;
        $data->city = $request->city;
        $data->state = $request->state;
        $data->country = $request->country;
        $data->zip = $request->zip;
        $data->turnover = $request->turnover;
        $data->total_employee = $request->total_employee;
        $data->mobile = $request->mobile;
    } else {
        $data = new Listcustomer();
        $data->user_id = $userId;
        $data->contact_name = $request->contact_name;
        $data->email = $request->email;
        $data->city = $request->city;
        $data->state = $request->state;
        $data->country = $request->country;
        $data->zip = $request->zip;
        $data->turnover = $request->turnover;
        $data->total_employee = $request->total_employee;
        $data->mobile = $request->mobile;
    }

    $data->save();

    return redirect()->route('details')->with('success', 'Connect details saved successfully.');
}

    
    public function submitimportedetails(Request $request)
{
    $userId= request()->user()->id;
    $data = Listcustomer::where('user_id', $userId)->firstOrFail();
    $data->gst = $request->gst;
    $data->ie_code = $request->ie_code;
    $data->save();

    return redirect()->route('importantdata')

    ->with('success','Donation created successfully.');
}
public function editprofile(Request $request)
{
    $userId = $request->user()->id;
    $data = Listcustomer::where('user_id', $userId)->firstOrFail();

    if (!$data) {
        echo "unsuceess";
    }
    $data->company_name = $request->input('company_name');
    $data->website = $request->input('website');
    $data->companydetails = $request->input('companydetails');
    $data->contact_name = $request->input('contact_name');
    $data->email = $request->input('email');
    $data->address = $request->input('address');
    $data->city = $request->input('city');
    $data->alt_mobile = $request->input('alt_mobile');
    $data->apeda = $request->input('apeda');
    $data->gst = $request->input('gst');
    $data->ie_code = $request->input('ie_code');
    $data->state = $request->input('state');
    $data->country = $request->input('country');
    $data->business_type = $request->input('business_type');
    $data->zip = $request->input('zip');
    $data->turnover = $request->input('turnover');
    $data->total_employee = $request->input('total_employee');
    $data->mobile = $request->input('mobile');
    $data->oOffice = $request->input('oOffice');
    $data->Port = $request->input('Port');
    $data->eyear = $request->input('eyear');
    $data->business_type = $request->input('business_type');
 if ($request->hasFile('companylogo')) {
        $previousImageName = $data->companylogo; // Get the name of the previous image
        
        $newImage = $request->file('companylogo');
        $newImageName = $newImage->getClientOriginalName();; // Generate a unique image name
        
        // Store the new image
        $newImage->move(public_path('assets/images/companylogo'), $newImageName);
        
        // Delete the previous image from storage
        if ($previousImageName && $previousImageName !== $newImageName) {
            $previousImagePath = public_path('assets/images/companylogo/' . $previousImageName);
            
            if (File::exists($previousImagePath)) {
                File::delete($previousImagePath);
            }
        }
        
        $data->companylogo = $newImageName; // Update the image name in the database
    }
    $data->save();

    return redirect()->route('profile')->with('successedituserprofile', 'Profile updated successfully.');
}

 public function submitaboutcompany(Request $request)
{
    $userId= request()->user()->id;
    $data = Listcustomer::where('user_id', $userId)->firstOrFail();
    $data->business_type = $request->business_type;
    $data->eyear = $request->eyear;
    $data->Port = $request->Port;
    $data->oOffice = $request->oOffice;
    $data->save();

    return redirect()->route('companyabout')

    ->with('success','Submit company about.');
}

public function showChangePasswordForm(Request $request)
    {
        $data = $request->user()->id;
        return view('customer.changepassword', compact('data'));
    }


    public function ChangePasswordForm(Request $request, $id)
{
    $data = User::findOrFail($id);
    $data->password = bcrypt($request->input('password'));
    $data->save();
    return redirect()->route('password.change')->with([
        'changepassword' => 'Your password has been changed successfully.'
    ]);
}




public function viewuser()
    {
        $data = User::orderBy('created_at', 'desc')->get();
        return view('admin.viewuser', compact('data'));
    }
    
public function user(Request $request)
    {
        $userId = $request->user()->id;
        $data=Listcustomer::where('user_id', $userId)->firstOrFail();
        return view('customer.dashboard', compact('data'));
    }

public function edituser($id){
    $lead = User::findOrFail($id);
    return view('admin.edituser', compact('lead'));
}




public function updateuser(Request $request, $id)
{
    $data = User::findOrFail($id);
    $data->email = $request->input('email');
    $data->name = $request->input('name');
        $data->edate = $request->input('edate');
    $data->role_id = $request->input('role_id');
    $data->password = bcrypt($request->input('password'));
    $data->save();
    return redirect()->route('all_user')->with('useredit', 'User successfully edited.');

  
}


    public function changepassword(Request $request)
    {
        // Validate the form data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        // Check if the email exists in the database
        $user = User::where('email', $email)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'Email not found');
        }

        // Update the user's password using Eloquent
        $user->update([
            'password' => bcrypt($password),
        ]);

        // You might want to add additional logic, such as logging the user in automatically

        return redirect()->route('login')->with('success', 'Password changed successfully');
    }


 public function userseach(Request $request)
{
    $leadName = $request->input('email');

    $data = User::where('email', 'LIKE', '%' . $leadName . '%')->paginate(20);
    return view('admin.userseach', compact('data'));
}


public function destroy($id){
    $user = User::find($id);

if ($user) {
    $user->delete();
    return back()->with('Delete','Role deleted successfully');
} else {
   echo "not delet user";
}
}



public function sendenquiry(Request $request)
{
    // Validate the incoming request data
    $request->validate([
        'fname' => 'required|string|max:255',
        'email' => 'required|email',
        'phone' => 'required|numeric',
        'message' => 'required|string',
    ]);

    // Store the form data in the database
    Enquiry::create([
        'fname' => $request->fname,
        'email' => $request->email,
        'phone' => $request->phone,
        'companyname' => $request->companyname,
        'message' => $request->message,  // Make sure 'message' matches form field
    ]);

    // Redirect or return response
    return back()->with('success', 'Enquiry submitted successfully!');
}

public function showEnquiries()
{
    // Fetch all enquiries from the database
    $enquiries = Enquiry::all();

    // Return a view and pass the data
    return view('admin.catlog_enquiries', compact('enquiries'));
}
    
}
