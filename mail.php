<?php 
if(isset($_POST['submit'])){
    $to = "manojdbest1@gmail.com"; // this is your Email address
    $name = $_POST['fname']; // this is the sender's Email address
   // $lname = $_POST['lname']; // this is the sender's Email address
    //$first_name = $_POST['name'];
    $email = $_POST['email'];
    $subject = "Enquiry from www.evidyatoday.com ";
    $phone = $_POST['phone'];  
   	$message = $_POST['message'];
    $subject2 = "www.evidyatoday.com  - Copy of your form submission";
    $message = "www.evidyatoday.com  - Enquiry \n\n Name: " . $name . "\n\nEmail: " . $email . "\n\n Message: " . $message . "\n\n Phone:" . $phone;
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $message;
    $headers = "From:" . $name;
    $headers2 = "From:" . $to;
	if (mail($to,$subject,$message,$headers)){
		echo "Thank-you for contacting The evidyatoday. Your request has been submitted. Our team will get in touch with you shortly.";
	}else{
		$success = "Message Sending Failed, try again";
	}
    // mail($to,$subject,$message,$headers);
    //mail($email,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    //echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    //header('Location:http://smartstudenterp.com'); 
    // You cannot use header and echo together. It's one or the other.
    }
	
?>

