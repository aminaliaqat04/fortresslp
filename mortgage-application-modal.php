<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $to = 'info@fortresslp.ca';
	$subject = 'Mortgage Quick Application';
    $firstname = filter_input(INPUT_POST, 'FirstNameReq', FILTER_SANITIZE_SPECIAL_CHARS);
    $lastname = filter_input(INPUT_POST, 'LastNameReq', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'EmailReq', FILTER_SANITIZE_EMAIL);
    $address = filter_input(INPUT_POST, 'AddressReq', FILTER_SANITIZE_SPECIAL_CHARS);
    $city = filter_input(INPUT_POST, 'CityReq', FILTER_SANITIZE_SPECIAL_CHARS);
    $province = filter_input(INPUT_POST, 'ProvinceReq', FILTER_SANITIZE_SPECIAL_CHARS);
    $postalcode = filter_input(INPUT_POST, 'PostalCodeReq', FILTER_SANITIZE_SPECIAL_CHARS);
    $LoanTypeReq = filter_input(INPUT_POST, 'LoanTypeReq', FILTER_SANITIZE_SPECIAL_CHARS);
    $PropertyTypeReq = filter_input(INPUT_POST, 'PropertyTypeReq', FILTER_SANITIZE_SPECIAL_CHARS);
    $PriceReq = filter_input(INPUT_POST, 'PriceReq', FILTER_SANITIZE_SPECIAL_CHARS);
    $DownPaymentReq = filter_input(INPUT_POST, 'DownPaymentReq', FILTER_SANITIZE_SPECIAL_CHARS);
    $BalanceReq = filter_input(INPUT_POST, 'BalanceReq', FILTER_SANITIZE_SPECIAL_CHARS);
    $BorrowReq = filter_input(INPUT_POST, 'BorrowReq', FILTER_SANITIZE_SPECIAL_CHARS);
    $CreditScoreReq = filter_input(INPUT_POST, 'CreditScoreReq', FILTER_SANITIZE_SPECIAL_CHARS);
    $ReferredByReq = filter_input(INPUT_POST, 'ReferredByReq', FILTER_SANITIZE_SPECIAL_CHARS);
    $Notes = filter_input(INPUT_POST, 'Notes', FILTER_SANITIZE_SPECIAL_CHARS);
	
    
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $headers  = 'MIME-Version: 1.0' . "\r\n";
  		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";  
    	$headers .= "From:" . $email;
    
      	$message = '<html><body>';
      	$message .= '<table rules="all" style="width: 80%; border-color: #666;" cellpadding="10">';
        $message .= "<tr style='background: #d20000; color: #fff;'><th colspan='2'><h1>MORTGAGE APPLICATION FORM</h1></th></tr>";
        $message .= "<tr style='background: #d20000; color: #fff;'><th colspan='2'><p><b>Personal Details</b></p></th></tr>";
        $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" .$firstname." ".$lastname."</td></tr>";
        $message .= "<tr style='background: #fff;'><td><strong>Email:</strong> </td><td>" .$email."</td></tr>";
        $message .= "<tr style='background: #eee;'><td><strong>Address:</strong> </td><td>" .$address."</td></tr>";
        $message .= "<tr style='background: #fff;'><td><strong>City:</strong> </td><td>" .$city."</td></tr>";
        $message .= "<tr style='background: #eee;'><td><strong>Province:</strong> </td><td>" .$province."</td></tr>";
        $message .= "<tr style='background: #fff;'><td><strong>Postal Code:</strong> </td><td>" .$postalcode."</td></tr>";
        $message .= "<tr style='background: #d20000; color: #fff;'><th colspan='2'><p><b>Loan Details</b></p></th></tr>";
        $message .= "<tr style='background: #eee;'><td><strong>Type of Loan:</strong> </td><td>" .$LoanTypeReq."</td></tr>";
        $message .= "<tr style='background: #fff;'><td><strong>Type of Property:</strong> </td><td>" .$PropertyTypeReq."</td></tr>";
        $message .= "<tr style='background: #eee;'><td><strong>Estimated Price/Value:</strong> </td><td>" .$PriceReq."</td></tr>";
        $message .= "<tr style='background: #fff;'><td><strong>Down Payment:</strong> </td><td>" .$DownPaymentReq."</td></tr>";
        $message .= "<tr style='background: #eee;'><td><strong>Mortgage Balance Owing:</strong> </td><td>" .$BalanceReq."</td></tr>";
        $message .= "<tr style='background: #fff;'><td><strong>How Much to Borrow</strong> </td><td>" .$BorrowReq."</td></tr>";
        $message .= "<tr style='background: #eee;'><td><strong>How is Your Credit Score?</strong> </td><td>" .$CreditScoreReq."</td></tr>";
        $message .= "<tr style='background: #fff;'><td><strong>How did You Hear About Us</strong> </td><td>" .$ReferredByReq."</td></tr>";
        $message .= "<tr style='background: #eee;'><td><strong>Additional Comments</strong> </td><td>" .$Notes."</td></tr>";
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

<!-- Mortgage Application Modal-->
<div class="modal fade popup-modal" id="mortgage-application-form" role="dialog">
    <div class="modal-dialog modal-holder" role="document">
        <div class="modal-content popup-content">
            <div class="modal-header flex-column">
                <button type="button" class="close popup-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="bi bi-x-lg"></i></span>
                </button>
                <h2 class="modal-title popup-label">Quick Application Form</h2>
            </div>
            <div class="modal-body popup-body">
                <div class="container-sm">
                    <div class="row">
                        <div class="col-md-1 d-xs-none"></div>
                        <div class="col-md-10 col-sm-12">
                        <form class="d-flex flex-column" action="<?=$_SERVER['PHP_SELF'];?>" method="post" role="form">
                            <div class="form-row">
                                <div class="col-xs-12"><p><b>Loan Details</b></p></div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-6 col-xs-12 mb-3">
                                    <select class="form-control form-select" name='LoanTypeReq' id='LoanType' required>
                                        <option value="">Type of Loan</option>
                                        <option value="New Mortgage">New Mortgage</option>
                                        <option value="Mortgage Renewal">Mortgage Renewal</option>
                                        <option value="Home Refinance">Home Refinance</option>
                                        <option value="Equity Takeout">Equity Takeout</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 col-xs-12 mb-3">
                                    <select class="form-control form-select" name='PropertyTypeReq' id='PropertyType' required>
                                        <option value="">Type of Property</option>
                                        <option value="Single Family">Single Family</option>
                                        <option value="Condo">Condo</option>
                                        <option value="Townhouse">Townhouse</option>
                                        <option value="Mobile House">Mobile House</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-6 col-xs-12 mb-3">
                                    <select class="form-control form-select" name="PriceReq" id="Price" required>
                                        <option value="">Estimated Price/Value</option>
                                        <option value="Less than $75,000">Less than $75,000</option>
                                        <option value="$75,000 - $100,000">$75,000 - $100,000</option>
                                        <option value="$100,000 - $150,000">$100,000 - $150,000</option>
                                        <option value="$150,000 - $200,000">$150,000 - $200,000</option>
                                        <option value="$200,000 - $250,000">$200,000 - $250,000</option>
                                        <option value="$250,000 - $300,000">$250,000 - $300,000</option>
                                        <option value="$300,000 - $350,000">$300,000 - $350,000</option>
                                        <option value="$350,000 - $400,000">$350,000 - $400,000</option>
                                        <option value="$400,000 - $450,000">$400,000 - $450,000</option>
                                        <option value="$450,000 - $500,000">$450,000 - $500,000</option>
                                        <option value="$500,000 - $600,000">$500,000 - $600,000</option>
                                        <option value="$600,000 - $700,000">$600,000 - $700,000</option>
                                        <option value="$700,000 - $800,000">$700,000 - $800,000</option>
                                        <option value="$800,000 - $900,000">$800,000 - $900,000</option>
                                        <option value="$900,000 - $1,000,000">$900,000 - $1,000,000</option>
                                        <option value="Over $1,000,000">Over $1,000,000</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 col-xs-12 mb-3">
                                    <select class="form-control form-select" name="DownPaymentReq"  id="DownPayment" required>
                                        <option value=''>Down Payment</option>
                                        <option value="$0.00">$0.00</option>
                                        <option value="$10,000">$10,000</option>
                                        <option value="$15,000">$15,000</option>
                                        <option value="$20,000">$20,000</option>
                                        <option value="$25,000">$25,000</option>
                                        <option value="$30,000">$30,000</option>
                                        <option value="$35,000">$35,000</option>
                                        <option value="$40,000">$40,000</option>
                                        <option value="$45,000">$45,000</option>
                                        <option value="$50,000">$50,000</option>
                                        <option value="$60,000">$60,000</option>
                                        <option value="$70,000">$70,000</option>
                                        <option value="$80,000">$80,000</option>
                                        <option value="$90,000">$90,000</option>
                                        <option value="$100,000">$100,000</option>
                                        <option value="$100,000">$100,000</option>
                                        <option value="$110,000">$110,000</option>
                                        <option value="$120,000">$120,000</option>
                                        <option value="$130,000">$130,000</option>
                                        <option value="$140,000">$140,000</option>
                                        <option value="$150,000">$150,000</option>
                                        <option value="$160,000">$160,000</option>
                                        <option value="$170,000">$170,000</option>
                                        <option value="$180,000">$180,000</option>
                                        <option value="$190,000">$190,000</option>
                                        <option value="$200,000">$200,000</option>
                                        <option value="$210,000">$210,000</option>
                                        <option value="$220,000">$220,000</option>
                                        <option value="$230,000">$230,000</option>
                                        <option value="$240,000">$240,000</option>
                                        <option value="$250,000+">$250,000</option>
                                        <option value="Over $250,000">Over $250,000</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-6 col-xs-12 mb-3">
                                <select class='form-control form-select' name='BalanceReq' id='Balance' required>
                                    <option value=''>Mortgage Balance Owing</option>
                                    <option value="$0 - $50,000">$0 - $50,000</option>
                                    <option value="$50,000 - $100,000">$50,000 - $100,000</option>
                                    <option value="$100,000 - $150,000">$100,000 - $150,000</option>
                                    <option value="$150,000 - $200,000">$150,000 - $200,000</option>
                                    <option value="$200,000 - $300,000">$200,000 - $300,000</option>
                                    <option value="$300,000 - $400,000">$300,000 - $400,000</option>
                                    <option value="$400,000 - $500,000">$400,000 - $500,000</option>
                                    <option value="$500,000 - $600,000">$500,000 - $600,000</option>
                                    <option value="$600,000 - $700,000">$600,000 - $700,000</option>
                                    <option value="$700,000 - $800,000">$700,000 - $800,000</option>
                                    <option value="$800,000 - $900,000">$800,000 - $900,000</option>
                                    <option value="$300,000 - $400,000">$900,000 - $1,000,000</option>
                                    <option value="Over $1,000,000">Over $1,000,000</option>
                                </select>
                                </div>
                                <div class="col-sm-6 col-xs-12 mb-3">
                                <select class='form-control form-select' name='BorrowReq' id='Borrow' required>
                                    <option value=''>How Much To Borrow</option>
                                    <option value="$0 - $50,000">$0 - $50,000</option>
                                    <option value="$50,000 - $100,000">$50,000 - $100,000</option>
                                    <option value="$100,000 - $150,000">$100,000 - $150,000</option>
                                    <option value="$150,000 - $200,000">$150,000 - $200,000</option>
                                    <option value="$200,000 - $300,000">$200,000 - $300,000</option>
                                    <option value="$300,000 - $400,000">$300,000 - $400,000</option>
                                    <option value="$400,000 - $500,000">$400,000 - $500,000</option>
                                    <option value="$500,000 - $600,000">$500,000 - $600,000</option>
                                    <option value="$600,000 - $700,000">$600,000 - $700,000</option>
                                    <option value="$700,000 - $800,000">$700,000 - $800,000</option>
                                    <option value="$800,000 - $900,000">$800,000 - $900,000</option>
                                    <option value="$300,000 - $400,000">$900,000 - $1,000,000</option>
                                    <option value="Over $1,000,000">Over $1,000,000</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-6 col-xs-12 mb-3">
                                <select class='form-control form-select' name='CreditScoreReq' id='CreditScore' required>
                                    <option value=''>How Is Your Credit Score</option>
                                    <option value="Excellent">Excellent</option>
                                    <option value="Good">Good</option>
                                    <option value="Some Problems">Some Problems</option>
                                    <option value="Major Problems">Major Problems</option>
                                </select>
                                </div>
                                <div class="col-sm-6 col-xs-12 mb-3">
                                <select class='form-control form-select' name='ReferredByReq' id='ReferredBy' required>
                                    <option value=''>How Did You Hear About Us</option>
                                    <option value="Radio/Print Advertising">Radio/Print Advertising</option>
                                    <option value="Internet">Internet</option>
                                    <option value="Realtor">Realtor</option>
                                    <option value="Friend">Friend</option>
                                    <option value="Other">Other</option>
                                </select>
                                </div>
                            </div><!-- End of Loan Details -->
                            
                            <!-- Personal Details -->
                            <div class="form-row">
                                <div class="col-xs-12"><p><b>Personal Details</b></p></div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-6 col-xs-12 mb-3">
                                    <input type='text' class='form-control' name='FirstNameReq' id='FirstNameReq' placeholder='First Name' required>
                                </div>
                                <div class="col-sm-6 col-xs-12 mb-3">
                                    <input type='text' class='form-control' name='LastNameReq' id='LastNameReq' placeholder='Last Name' required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-6 col-xs-12 mb-3">
                                    <input type='text' class='form-control' name='PhoneReq' id='PhoneReq' placeholder='Phone' required>
                                </div>
                                <div class="col-sm-6 col-xs-12 mb-3">
                                    <input type='email' class='form-control' name='EmailReq' id='EmailReq' placeholder='Email' required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-6 col-xs-12 mb-3">
                                    <input type='text' class='form-control' name='AddressReq' id='AddressReq' placeholder='Address' required>
                                </div>
                                <div class="col-sm-6 col-xs-12 mb-3">
                                    <input type='text' class='form-control' name='CityReq' id='CityReq' placeholder='City' required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-6 col-xs-12 mb-3">
                                    <input type='text' class='form-control' name='ProvinceReq' id='Province' placeholder='Province/State' required>
                                </div>
                                <div class="col-sm-6 col-xs-12 mb-3">
                                    <input type='text' class='form-control' name='PostalCodeReq' id='PostalCode' placeholder='Postal/Zip Code' required>
                                </div>
                            </div><!-- End of Personal Details -->
                            
                            <!-- Additional Comments -->
                            <div class="form-row">
                                <div class="col-xs-12"><p><b>Additional Comments</b></p></div>
                            </div>
                            <div class="form-row">
                                <div class="col-xs-12"><textarea class='form-control' name="Notes" id="Notes" rows="6"></textarea></div>
                            </div>

                            <div class="form-row" style="margin-top: 20px">
                                <div class="col-sm-12 col-xs-12 mb-3 text-center">
                                    <button class="btn btn-orange" type="submit">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="col-md-1 d-xs-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>