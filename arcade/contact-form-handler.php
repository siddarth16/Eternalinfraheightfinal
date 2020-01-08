<?php
    $name = $_Post['name'];
    $visitor_email = $_Post['email'];
    $message = $_Post['message'];
    
    $email_from = 'soumyaupadhyay@eternalinfraheight.in';
    
    $email_subject = "New Query Form Submission from Website";
    
    $emai_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Message: $message.\n"; 
                        
    $to = "connect@eternalinfraheight.in";
    
    $header = "From: $email_from \r\n";
    
    $headers .= "Reply-To: $visitor_email \r\n";
    
    mail($to,$email_subject,$email_body,$headers);
                    
    header("Location: contact.html"); 
?>
<form class="contact-form" id="contact-form" method="post" action="contact-form-handler.php">
  <input name="name" type="text" class="contact-form" placeholder="Enter your name" required="">
    <input name="email" type="email" class="contact-form" placeholder="Enter your email address" required="">
      <textarea name="message" class="contact-form" placeholder="Message" required=""></textarea>
      <button class="site-btn sb-dark">Send</button>
    </form>