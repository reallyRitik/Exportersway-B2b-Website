<?php

namespace App\Helpers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailHelper
{
    public static function sendMembershipUpdateMail($email, $name, $rank)
    {
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host       = 'smtp.hostinger.com';  // Set your SMTP server here
            $mail->SMTPAuth   = true;
            $mail->Username   = 'gaurav.s@exportersway.com'; // SMTP username
            $mail->Password   = 'Gaurav#$1234';    // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;                      // SMTP port

            // Recipients
            $mail->setFrom('gaurav.s@exportersway.com', 'Your Company Name');
            $mail->addAddress($email, $name);

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'Membership Updated Successfully';
            $mail->Body    = "
                <p>Dear $name,</p>
                <p>Your membership has been updated to the <b>$rank</b> package successfully!</p>
                <p>Thank you for staying with us.</p>
                <p>Best regards,<br>Your Company</p>";

            $mail->send();
        } catch (Exception $e) {
            // Handle the error
            error_log("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
        }
    }
}
