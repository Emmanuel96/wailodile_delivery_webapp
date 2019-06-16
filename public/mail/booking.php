<?php
// // Check for empty fields
// if(empty($_POST['name'])      ||
//    empty($_POST['phone'])     ||
//    empty($_POST['message'])   ||
//    !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
//    {
//    echo "No arguments Provided!";
//    return false;
//    }
   
// $name = strip_tags(htmlspecialchars($_POST['name']));
// $phone = strip_tags(htmlspecialchars($_POST['phone']));
// $message = strip_tags(htmlspecialchars($_POST['message']));
   
// // Create the email and send the message
// $to = 'emmanuel.audu1@aun.edu.ng'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
// $email_subject = "Website Contact Form:  $name";
// $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
// $headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
// $headers .= "Reply-To: $name @gmail.com";   
// mail($to,$email_subject,$email_body,$headers);



//Besides sending an email, booking also sends a text message. 

//defining my API keys 
define("NEXMO_API_KEY", "eac448b7"); 
define("NEXMO_API_SECRET", "11a20cefae7a7a91"); 

//initializing the nexmo variables 
$basic  = new vendor\Nexmo\Client\Credentials\Basic(NEXMO_API_KEY, NEXMO_API_SECRET);
$client = new vendor\Nexmo\Client($basic);

$message = $client->message()->send([
    'to' => '+44759902112',
    'from' => 'AbleCraftsmen',
    'text' => 'This is just a text fam and its Emmanuel'
]);

echo 'Message sent'; 

//return true;         
?>