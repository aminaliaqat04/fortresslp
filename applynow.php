<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $to = 'info@fortresslp.ca';
	$subject = 'Apply Now';
    $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT);
    $projecttype = filter_input(INPUT_POST, 'projecttype', FILTER_SANITIZE_SPECIAL_CHARS);
    $funding = filter_input(INPUT_POST, 'funding', FILTER_SANITIZE_SPECIAL_CHARS);
    $loanValue = filter_input(INPUT_POST, 'loan-value', FILTER_SANITIZE_SPECIAL_CHARS);
	
    
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $headers  = 'MIME-Version: 1.0' . "\r\n";
  		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";  
    	$headers .= "From:" . $email;
    
      	$message = '<html><body>';
      	$message .= '<table rules="all" style="width: 80%; border-color: #666;" cellpadding="10">';
        $message .= "<tr style='background: #d20000; color: #fff;'><th colspan='2'><h1>REQUEST A QUOTE</h1></th></tr>";
        $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" .$fname."</td></tr>";
        $message .= "<tr style='background: #fff;'><td><strong>Email:</strong> </td><td>" .$email."</td></tr>";
        $message .= "<tr style='background: #eee;'><td><strong>Phone:</strong> </td><td>" .$phone."</td></tr>";
        $message .= "<tr style='background: #fff;'><td><strong>Real Estate Project Type:</strong> </td><td>" .$projecttype."</td></tr>";
        $message .= "<tr style='background: #fff;'><td><strong>Funding Required:</strong> </td><td>" .$funding."</td></tr>";
        $message .= "<tr style='background: #fff;'><td><strong>Requested loan to value %:</strong> </td><td>" .$loanValue."</td></tr>";
		$message .= "</table>";
        $message .= '</body></html>';
      
        mail($to, $subject, $message, $headers);
       
      	echo '<script language="javascript">alert("Hello there! We have received your request and will get back to you soon");</script>';
        //echo '<script language="javascript">$("#mortgage-process").modal("show");</script>';
          /*echo "<script>\n
                window.location.href = 'index.html';\n
            </script>";*/
        
    } else {
        echo '<script language="javascript">alert("Oops, something went wrong. Please try again later");</script>';
        /*$errorMessage = 'Oops, something went wrong. Please try again later';
      	echo $errorMessage;
      	echo "<script>\n
                window.location.href = 'thank.html';\n
            </script>";*/
    }
}
?>