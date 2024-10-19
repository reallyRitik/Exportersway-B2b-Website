<?php

namespace App\Helpers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailHelper
{
    public static function sendMembershipUpdateMail($email, $name, $rank, $companyName, $companyLogo = null)
    {
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host       = 'smtp.hostinger.com';  // Set your SMTP server here
            $mail->SMTPAuth   = true;
            $mail->Username   = 'services@exportersway.com'; // SMTP username
            $mail->Password   = '#S#dl@9582#d';    // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;                      // SMTP port

            // Recipients
            $mail->setFrom('services@exportersway.com', $companyName);
            $mail->addAddress($email, $name);


            // Company logo
            $companyLogoUrl = 'https://exportersway.com/companylogo/exportersway-logo.png';

  $logoPath = $companyLogo ? asset('assets/images/companylogo/' . $companyLogo) : asset('path/to/default/logo.png');
            // Email Content
            $mail->isHTML(true);
            $mail->Subject = 'Your Membership Package Has Been Activated';

            $mail->Body    = "
                <div style='font-family: Arial, sans-serif;'>
                    

                    <p>Dear <strong>$name</strong>,</p>

                    <p>Congratulations! Your membership package has been successfully updated to the <strong>$rank</strong> package.</p>

                    <p>With this package, you now have access to a wide range of exclusive features and benefits designed to help you maximize your experience with us.</p>

                    <ul style='background-color: #f9f9f9; padding: 10px; border-left: 3px solid #4caf50;'>
                        <li>Priority customer support</li>
                        <li>Exclusive access to premium content</li>
                        <li>And much more!</li>
                    </ul>

                    <p>Thank you for choosing us and being a valued part of our community. We look forward to continuing to serve you with the best possible service.</p>

                    <p>If you have any questions or need further assistance, feel free to reply to this email, and our team will be happy to help.</p>

                    <p style='margin-top: 40px;'>Best regards,</p>
                   
                        <a href='https://exportersway.com'><img src='$companyLogoUrl' alt='Company Logo' style='max-width: 150px; margin-bottom: 20px;' /></a>
                  
                    
                </div>
            ";

            $mail->AltBody = "Dear $name, your membership package has been updated to the $rank package successfully.";

            $mail->send();
        } catch (Exception $e) {
            // Handle the error
            error_log("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
        }
    }
}
