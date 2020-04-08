<?php
// if the url field is empty
if(isset($_POST['url']) && $_POST['url'] == ''){

     $youremail = 'aaronblac@gmail.com';

     $body = "This is the form that was just submitted:
Name:  $_POST[name]
E-Mail: $_POST[email]
Phone: $_POST[phone]
Message: $_POST[message]";

     // Use the submitters email if they supplied one
     // (and it isn't trying to hack your form).
     // Otherwise send from your email address.

     if( $_POST['email'] && !preg_match( "/[\r\n]/", $_POST['email']) ) {
         $headers = "From: $_POST[email]";
     } else {
         $headers = "From: $youremail";
     }

     // finally, send the message
     mail($youremail, 'Contact Form', $body, $headers ); } // otherwise, let the spammer think that they got their message through


     ?>
     <h1>Thanks</h1>
     <p>We'll get back to you as soon as possible</p>
