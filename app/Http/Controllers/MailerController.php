<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use App\Models\Mail;

class MailerController extends Controller {


    public function email() {
        return view("admin.email");
    }
    public function composeEmail(Request $request) {
        require base_path("vendor/autoload.php");
        $mail = new PHPMailer; 
 
// SMTP configurations 
$mail->isSMTP(); 
$mail->Host        = 'smtp.hostinger.com'; 
$mail->SMTPAuth = true; 
$mail->Username = 'enquiry@exportersway.com'; 
$mail->Password = '#Es@SiXit#dL@P&6';
$mail->SMTPSecure = 'tls'; 
$mail->Port        = 587; 

$email = $_POST["emailRecipient"];
$emailenquiry = $_POST["companyemail"];
$number = $_POST["number"];
$massage = nl2br($_POST["emailBody"]);
 
// Sender info  
$mail->setFrom('enquiry@exportersway.com', 'Enquiry'); 
$mail->addCC('enquiry@exportersway.com');  
 
// Add a recipient  
$mail->addAddress($email);  

  
 $mailheading = "Dear Sir/Madam,

<br>

Greetings For The Day!!!
<br>

kindly find the below detail of buying Inquiry .";
$mailend = '<strong>Regards,<br>Exportersway Team.</strong>';
// Email subject  
$mail->Subject =  'Inquiry from Exportersway'; 
$emailname= 'EMAIL : '.$emailenquiry;
$fullnumber= 'Mobile : '.$number;
  
// Set email format to HTML  
$mail->isHTML(true);  
  
// Email body content  
   $mailContent = $mailheading . '<br>'. '<br>' . $massage . '<br>'. $emailname .'<br>' . $fullnumber. '<br>' . $mailend;


$mail->Body = $mailContent;  
  

if ($mail->send()) {
   $email = $_POST["emailRecipient"];
$emailenquiry = $_POST["companyemail"];
$number = $_POST["number"];
$massage = nl2br($_POST["emailBody"]);
 
        $this->saveEmailToDatabase($email, $massage, $emailenquiry, $number);
        echo 'Message has been sent and data saved to the database.';
    } else {
        echo 'Failed to send the email. Error: ' . $mail->ErrorInfo;
    }
        
    }
private function saveEmailToDatabase($email, $massage, $emailenquiry, $number) // Corrected variable name
{
    try {
        // Create a new Mail instance
        $mail = new Mail;
        $mail->clientemail = $email;
        $mail->massage = $massage; // Corrected variable name
        $mail->enquiryemail = $emailenquiry;
        $mail->number = $number;
        $mail->save();
    } catch (\Exception $e) {
        echo 'An error occurred while saving email data to the database: ' . $e->getMessage();
    }





}
public function viewmail(Request $request){
    $allmail = Mail::orderBy('created_at', 'desc')->paginate(25);
    return view('admin.sendclientemail', compact('allmail'));
}
public function searchmail(Request $request)
{

$searchTerm = $request->input('search');
$allmail = Mail::query();
if ($searchTerm) {
    $allmail->where('clientemail', 'like', '%'.$searchTerm.'%');
}

$allmail = $allmail->orderBy('created_at', 'DESC')->paginate(20);

return response()->json($allmail);


    
}
public function maildetails($id)
{
    $data = Mail::findOrFail($id);

    return view('admin.showmail', ['data' => $data]);
}
}