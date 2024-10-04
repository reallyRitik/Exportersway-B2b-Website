<?php

use App\Http\Controllers\MachinerytrandingController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\AddcategoryController;
use App\Http\Controllers\AgritrandingController;
use App\Http\Controllers\subcategoryController; 
use App\Http\Controllers\SubcategorynestedController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\HomecontentController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\LeadlistController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SearchviewController;
use App\Http\Controllers\ListcustomerController;
use App\Http\Controllers\AppraeltrandingController;
use App\Http\Controllers\HealthtrandingController;
use App\Http\Controllers\MailerController;

use App\Models\Healthtranding;
use Facade\Ignition\Http\Controllers\HealthCheckController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::group(['middleware' => 'isadmin'], function () {
    Route::get('admin', function () {
        return view('index');
    });

Route::get('useradds', function () {
    return view('admin.useradd');
});
// Route::get('listcustomer', function () {
//     return view('admin.listcustomer');
// });




Route::get('listcustomer', [ListcustomerController::class, 'index'])->name('list_customer');
Route::get('listpaidcustomers', [ListcustomerController::class, 'viewpaidmembre'])->name('listpaidcustomers');
Route::get('listtetracustomers', [ListcustomerController::class, 'viewtetramembre'])->name('listtetracustomers');
Route::get('listgrowingcustomers', [ListcustomerController::class, 'viewgrowingmembre'])->name('listgrowingcustomers');
Route::get('listprocustomers', [ListcustomerController::class, 'viewpromembre'])->name('listprocustomers');
Route::get('listelitecustomers', [ListcustomerController::class, 'viewelitemembre'])->name('listelitecustomers');
Route::get('listelitepluscustomers', [ListcustomerController::class, 'vieweliteplusmembre'])->name('listelitepluscustomers');

Route::get('listfreecustomers', [ListcustomerController::class, 'viewfreemembre'])->name('listfreecustomers');
Route::get('/updatemembership/{id}', [ListcustomerController::class, 'editmembership'])->name('update_membre');
Route::post('/submitupdatemembership/{id}', [ListcustomerController::class, 'updatemembership']);



Route::get('agritranding', [AgritrandingController::class, 'index'])->name('agri_tranding');
Route::post('/submitagritranding', [AgritrandingController::class, 'adddagritranding']);

Route::get('appraeltranding', [AppraeltrandingController::class, 'index'])->name('agpprael_tranding');
Route::post('/submitapprealtranding', [AppraeltrandingController::class, 'adddappraeltranding']);
Route::get('healthtranding', [HealthtrandingController::class, 'index'])->name('health_tranding');
Route::post('/submithealthtranding', [HealthtrandingController::class, 'addhealthtrandingtranding']);
Route::get('machinerytranding', [MachinerytrandingController::class, 'index'])->name('machinery_tranding');
Route::post('/submitmachinerytranding', [MachinerytrandingController::class, 'addmachinerytrandingtranding']);

Route::get('/searchsubnestedcategory', [SubcategorynestedController::class, 'search_subnastcat_data'])->name('searchsubnestedcategory');




Route::get('/leadlist/search', [LeadlistController::class, 'searchleaddatadetails'])->name('leadlist.search');
Route::get('addcategory', [AddcategoryController::class, 'index'])->name('add_category');

Route::get('/viewcategory', [AddcategoryController::class, 'viewcat']);
Route::delete('/deletel1category/{id}', [AddcategoryController::class, 'destroy'])->name('deletecategory');

Route::delete('/deletesubcategorynesteddata/{id}', [SubcategorynestedController::class, 'destroy'])->name('delete_subnestcategory');


Route::get('/inbox', [MailerController::class, 'email']);
Route::get('/viewsubcategory', [subcategoryController::class, 'viewsubcat']);
Route::get('/viewsubnestedcategory', [SubcategorynestedController::class, 'viewsubnastcat'])->name('view_cat');
Route::post('/submitaddcategory', [AddcategoryController::class, 'store']);

Route::get('addsubcategories', [subcategoryController::class, 'index'])->name('sub_category');
Route::post('/submitsubcategory', [subcategoryController::class, 'subcategory']);
Route::get('/editsubcategory/{id}', [subcategoryController::class, 'editsubcategoty']);
Route::post('/updatesubcategory/{id}', [subcategoryController::class, 'updatesubcategoty']);

Route::get('/editsubnestedcategory/{id}', [SubcategorynestedController::class, 'editsubnestedcategory'])->name('subnestedcat');
Route::post('/updatesubnestedcategory/{id}', [SubcategorynestedController::class, 'updatesubnestedcategory']);

Route::delete('/deletel3data/{id}', [subcategoryController::class, 'destroy'])->name('delete_subdata');



Route::delete('/deletecustomer/{id}', [ListcustomerController::class, 'destroy'])->name('deletecustomer');
Route::post('/updatecustomer/{id}', [ListcustomerController::class, 'updatecustomer']);

// Route::post('/updateuser/{id}', [ListcustomerController::class, 'updatecustomer'])->name('update_customer');
Route::get('/editlistcustomer/{id}', [ListcustomerController::class, 'editcustomer']);
Route::get('/viewproducts/{id}', [ListcustomerController::class, 'viewproduct']);


Route::get('/product/{subnestedCategoryName}', [SearchviewController::class, 'showProduct'])->name('product.show');

Route::get('addsubnestedcategory', [SubcategorynestedController::class, 'index'])->name('subnested_category');



Route::get('/sub', [HomecontentController::class, 'index']);
Route::get('/subn', [HomecontentController::class, 'getSubcategories']);
Route::get('/searchsubnestedcat', [SubcategorynestedController::class, 'searchsubnestedcat']);

Route::get('/subcatnam/{id}', [SubcategorynestedController::class, 'subcatname']);

Route::post('/submitsubnestedcategory', [SubcategorynestedController::class, 'subnestedcategory'])->name('submitsubnestedcategory');

Route::get('/addbanners', [BannerController::class, 'index'])->name('add_banner');
Route::post('/submitaddbanner', [BannerController::class, 'addbannerrs']);
Route::get('/viewbanner', [BannerController::class, 'viewbanner']);

Route::get("email", [MailerController::class, "email"])->name("email");

Route::post("send-email", [MailerController::class, "composeEmail"])->name("send-email");
Route::get('/enquiryform', [HeaderController::class, 'index'])->name("enquiry");
Route::post('/enquiry', [HeaderController::class, 'store']);

Route::get('/lead', [LeadlistController::class, 'index'])->name("lead_name");
Route::put('/savelead/{id}', [LeadlistController::class, 'update']);
Route::delete('/leaddelete/{id}', [LeadlistController::class, 'destroy']);
Route::get('/editlead/{id}', [LeadlistController::class, 'edit']);

Route::get('/categories', [HeaderController::class, 'allcat']);
Route::get('/searchsubcat', [subcategoryController::class, 'searchsubcat']);
Route::get('/searchsubdata', [subcategoryController::class, 'search'])->name('searchsubdata');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin/dashboard');
    })->name('dashboard');
});

});
Route::get('/suppliers', [HeaderController::class, 'supplier']);
Route::get('/products/search', [HeaderController::class, 'search'])->name('products.search');
// Route::get('/searchss', [HeaderController::class, 'searchdisplay']);
Route::get('/viewcategory/{slug}', [HeaderController::class, 'searchdisplay'])->name('category.search');
Route::get('/topsearch', [HomecontentController::class, 'topSearches'])->name('topsearch');


// customer panel route
Route::get('user', function () {
    return view('customer.dashboard');
});
// Route::get('company', function () {
//     return view('customer.editcompanyprofile');
// });

Route::get('/editpoints/{id}', [ListcustomerController::class, 'editpoints'])->name('editpoints');

Route::post('/savepoints/{id}', [ListcustomerController::class, 'savepoints']);

Route::post('/leadlist/updateMultiple', [LeadlistController::class, 'updateMultiple'])->name('leadlist.updateMultiple');
Route::get('/managelead', [LeadlistController::class, 'managelead'])->name("managelead");
Route::get('/company', [CustomerController::class, 'index'])->name("submitdetails");
Route::post('/submitcompanydetails', [CustomerController::class, 'comapanydetails']);
Route::get('/details', [CustomerController::class, 'contactdetails'])->name("details");
Route::post('/submitconnectdetails', [CustomerController::class, 'submitconnectdetails']);
Route::get('/importantdata', [CustomerController::class, 'importantdata'])->name("importantdata");
Route::post('/submitimportedetails', [CustomerController::class, 'submitimportedetails']);

Route::get('/profile', [CustomerController::class, 'profile'])->name("profile");
Route::post('/editprofile', [CustomerController::class, 'editprofile']);
Route::get('/Changepassword', [CustomerController::class, 'showChangePasswordForm'])->name('password.change');
Route::post('/passwordchanged/{id}', [CustomerController::class, 'ChangePasswordForm']);
Route::post('/change-password', [CustomerController::class, 'changePassword'])->name('password.update');
Route::get('/allUsers', [CustomerController::class, 'viewuser'])->name('all_user');
Route::get('/edituser/{id}', [CustomerController::class, 'edituser'])->name('edituser');
Route::delete('/deleteuser/{id}', [CustomerController::class, 'destroy']);
Route::get('/userseach', [CustomerController::class, 'userseach'])->name('userseach');
Route::post('/updateuser/{id}', [CustomerController::class, 'updateuser'])->name('updateuser');

//productdetails
Route::get('/addproduct', [ProductController::class, 'index'])->name('addproducts');
Route::post('/submitproduct', [ProductController::class, 'productlist']);
// Route::post('/submitproduct', [ProductController::class, 'productlist']);
Route::delete('/delete/{id}', [ProductController::class, 'destroy']);

Route::get('/addproduct/{id}', [ProductController::class, 'addproduct']);
Route::get('/addproductss/{id}', [ProductController::class, 'addproductss']);
Route::get('/viewproductlist', [ProductController::class, 'viewproduct'])->name('viewproductlist');

Route::get('feedback', [FeedbackController::class, 'index'])->name('add_feedback');
Route::post('/submitfeedback', [FeedbackController::class, 'store']);

Route::get('/', [HomecontentController::class, 'index']);
// website static page

Route::get('/categories', [HeaderController::class, 'allcat']);

Route::get('about', function () {
    return view('about');
});
Route::get('/companyabout', [CustomerController::class, 'companyabout'])->name('companyabout');
Route::post('/submitaboutcompany', [CustomerController::class, 'submitaboutcompany']);
Route::get('review', function () {
    return view('review');
});
Route::get('partners', function () {
    return view('partners');
});
Route::get('termandcondition', function () {
    return view('termandcondition');
});
Route::get('services', function () {
    return view('periumservices');
});
Route::post('/send-inquiry', [HomecontentController::class, 'send_Inquiry'])->name('send.inquiry');


//catlog
// Route::get('catlog', function () {
//     return view('catlog');
// });
Route::get('/catlog', [SearchviewController::class, 'catlog']);
Route::get('aboutcompany', function () {
    return view('aboutcatlog');
});
Route::get('aboutcompany', function () {
    return view('aboutcatlog');
});
Route::get('productcompany', function () {
    return view('productcatlog');
});
Route::get('contactcompany', function () {
    return view('contactcatlog');
});
Route::get('maintenance', function () {
    return view('maintenance');
});

Route::get('restriction', function () {
    return view('restriction');
});
Route::get('premiumservice', function () {
    return view('premiumservice');
});
Route::get('detailsmembreship', function () {
    return view('detailsmembership');
});
Route::get('Growingdetailsmembreship', function () {
    return view('Growingdetailsmembreship');
});
Route::get('Prodetailsmembreship', function () {
    return view('Prodetailsmembreship');
});
Route::get('Elitedetailsmembreship', function () {
    return view('Elitedetailsmembreship');
});
Route::get('Eliteplusdetailsmembreship', function () {
    return view('Eliteplusdetailsmembreship');
});

Route::get('adverties', function () {
    return view('advertieswithus');
});
Route::get('/ourrequirements', [LeadlistController::class, 'ourrequirement'])->name("lead_data");
Route::post('/addrequirement', [LeadlistController::class, 'addrequirement']);

Route::get('/searchview', [SearchviewController::class, 'index']);
Route::get('/viewcategory/{category}/{name}', [SearchviewController::class, 'searchview']);


Route::get('/productview/data/{id}', [SearchviewController::class, 'productview'])->name('productview');
Route::get('privacyPolicy', function () {
    return view('policy');
});
Route::get('refundPolicy', function () {
    return view('refundPolicy');
});
Route::get('Contactus', function () {
    return view('Contactus');
});
Route::get('/filter-by-country/{country}', [HeaderController::class, 'filterByCountry'])->name('filter.by.country');
Route::get('/viewlead', [LeadlistController::class, 'viewlead'])->name('viewlead');
Route::get('/searchviewlead', [LeadlistController::class, 'searchviewlead'])->name('searchviewlead');
Route::get('/leaddetails/{id}', [LeadlistController::class, 'leaddetails'])->name('leaddetails');
Route::get('/viewcompany/{name}', [SearchviewController::class, 'viewcompany'])->name('viewcompany');
Route::get('/viewproduct/{id}', [SearchviewController::class, 'viewproduct'])->name('viewproduct');
Route::get('/viewabout/{id}', [SearchviewController::class, 'viewabout'])->name('viewabout');
Route::get('/viewcontact/{id}', [SearchviewController::class, 'viewcontact'])->name('viewcontact');


Route::get('/seachdatacustomer', [ListcustomerController::class, 'seachdatacustomer'])->name('seachdatacustomer');

Route::get('/showlead', [LeadlistController::class, 'showlead']);

Route::get('/search-lead', [LeadlistController::class, 'searchLead'])->name('searchLead');
Route::get('/appraeldata', [AppraeltrandingController::class, 'apprael']);
Route::get('/editpaidmembership/{id}', [ListcustomerController::class, 'editpaidcustomer'])->name('editpaidmembership');
Route::post('/submitupdatepaidmembership/{id}', [ListcustomerController::class, 'updatepaidmembership']);
Route::get('/editproduct/{id}', [ProductController::class, 'editproduct'])->name('editproduct');
Route::post('/submitproductdetails/{id}', [ProductController::class, 'updateproduct'])->name('submitproductdetails');
Route::get('/paidmember', [ListcustomerController::class, 'paidmember'])->name('paidmember');
Route::get('/readmail', [MailerController::class, 'viewmail']);
Route::get('/searchmail', [MailerController::class, 'searchmail'])->name('searchmail');
Route::get('/showmail/{id}', [MailerController::class, 'maildetails'])->name('showmail');
Route::get('/item/{id}/{title}', [ProductController::class, 'showproduct'])->name('product.show');
Route::get('/seachdatalead', [LeadlistController::class, 'searchleaddata'])->name('seachdatalead');
Route::post('/requirement', [HomecontentController::class, 'requirement'])->name('requirement');
Route::get('/listrequirement', [HomecontentController::class, 'listrequirement'])->name('listrequirement');

// Route::get('/searchss/data/{name}', [SearchviewController::class, 'searchl3view']);
Route::get('/viewcategory/{categories}/{subcat}/{name}', [SearchviewController::class,  'searchl3view']);
Route::get('/showenquiry', [LeadlistController::class, 'showenquiry'])->name("showenquiry");
Route::get('/searchenquiry', [LeadlistController::class, 'searchenquiry'])->name("searchenquiry");
Route::get('comingsoon', function () {
    return view('comings');
});
Route::get('renewmembership', function () {
    return view('customer.membershiprenew');
});
Route::get('faq', function () {
    return view('faq');
});  
Route::get('addtofav', function () {
    return view('addtofav');
});  
Route::get('product-policy', function () {
    return view('product-policy');
}); 

Route::get('/addtofav/{lead_id}', [LeadlistController::class, 'favenquiryadd'])
    ->name('addtofav')
    ->middleware('auth'); // Ensures the user is authenticated

Route::post('/decrement-points', [LeadlistController::class, 'decrementPoints'])->name("decrement.points");