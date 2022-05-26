<?php
    $to = 'info@fortresslp.ca';
	$subject = 'Fortress Contact Form';

    $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_SPECIAL_CHARS);
    $from = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS);
    $details = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);
    
    if (filter_var($from, FILTER_VALIDATE_EMAIL)) {
        $headers  = 'MIME-Version: 1.0' . "\r\n";
  		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";  
    	$headers .= "From:" . $from;
    
      	$message = '<html><body>';
        $message .= '<span style="color:#f74747;font-size:18px;">Name:&nbsp;</span>'.$fname;
        $message .= '<span style="color:#f74747;font-size:18px;">Email:</span>'.$from;
        $message .= '<span style="color:#f74747;font-size:18px;">Phone:</span>'.$phone;
        $message .= '<span style="color:#f74747;font-size:18px;">Message:</span>'.$details;
        $message .= '</body></html>';
      
        mail($to, $subject, $message, $headers);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {
        die('Invalid address');
    }
?>