
        <!-- Footer -->
        <footer id="footer">
            <div class="container-fluid footer-block">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <p class="copyright">©2020 <a href="index.php" class="main-color">FORTRESS</a></p>
                    </div>
                    <div class="col-sm-6 col-xs-12 d-flex justify-content-end">
                        <div class="social-block text-primary">
                            <ul class="social-links">
                              <li><a href="#" class="instagram"><i class="bx bxl-instagram"></i></a></li>
                              <li><a href="#" class="youtube"><i class="bx bxl-youtube"></i></a></li>
                              <li><a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a></li>
                              <li><a href="#" class="facebook"><i class="bx bxl-facebook"></i></a></li>
                              <li><a href="#" class="twitter"><i class="bx bxl-twitter"></i></a></li>
                              <li><a href="#" class="tiktok"><i class="bx bxl-tiktok"></i></a></li>
                            </ul>
                          </div>
                    </div>
                </div>
            </div>

        </footer><!-- End Footer -->

        <!-- Mortgage Process -->
        <div class="modal fade popup-modal" id="mortgage-process" role="dialog">
            <div class="modal-dialog modal-holder" role="document">
                <div class="modal-content popup-content">
                    <div class="modal-header flex-column">
                        <button type="button" class="close popup-close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="bi bi-x-lg"></i></span>
                        </button>
                    </div>
                    <div class="modal-body popup-body" style="padding: 0 50px;">
                        <div class="conatainer-sm">
                            <div class="row">
                                <div class="col-md-12">
                                    <p><b>Items we need from you when it comes to the Mortgage Process</b></p>
                                    <p>Providing all of the required documentation ensures that we can efficiently process your mortgage application. We will advise which of the following you will need to provide:</p>
                                    <ul>
                                        <li>Agreement of Purchase and Sale</li>
                                        <li>MLS Listing</li>
                                        <li>Contact information for your lawyer: name, address, phone and fax numbers</li>
                                        <li>2 pieces of personal identification for all parties involved</li>
                                        <li>Income and employment verification</li>
                                        <li>Recent pay stub(s)</li>
                                        <li>Letter of employment</li>
                                        <li>T4(s)</li>
                                        <li>Notice of Assessment(s) if self employed (NOAs)</li>
                                        <li>Proof of Down Payment: 3-month history of savings/investments</li>
                                        <li>Gift letter with bank statement</li>
                                        <li>Void cheque</li>
                                        <li>Copy of home insurance policy</li>
                                    </ul>
                                    <p>An appraisal of the property may also be ordered. </p>
                                    <br>
                                    <p><b>What you can expect from our team</b></p>
                                    <p>We like to roll up our sleeves so we get to know each other better. We like to be completely clear on your needs today and your goals for the future. We will send your application to the lender (or lenders) that can best meet your needs. We deal with over 50 lending institutions, including major banks, credit unions, trusts and other national and regional lenders, which means we can put significant negotiating power to work for you. This wealth of product choice helps us find the best mortgage to fit your specific financial situation.</p>
                                    <p>After your mortgage closes, we will continue to stay in touch with ongoing communications, because life doesn’t stand still and your mortgage needs can change over time. As your needs and situation shift, we will tailor your mortgage plan so that it always fits your current goals.</p>
                                    <p>We appreciate any referrals - Thanks again</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Business Application-->
        <div class="modal fade popup-modal" id="apply-now" role="dialog">
            <div class="modal-dialog modal-holder" role="document">
                <div class="modal-content popup-content">
                    <div class="modal-header flex-column">
                        <button type="button" class="close popup-close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="bi bi-x-lg"></i></span>
                        </button>
                        <h2 class="modal-title popup-label">Let's get started with Real Estate Funding</h2>
                    </div>
                    <div class="modal-body popup-body">
                        <div class="container-sm">
                            <div class="row">
                                <div class="col-md-1 d-xs-none"></div>
                                <div class="col-md-10 col-sm-12">
                                <form class="d-flex flex-column" action="<?=$_SERVER['PHP_SELF'];?>" method="post" role="form">
                                    <div class="form-row">
                                    <div class="col-sm-6 col-xs-12 mb-3">
                                        <label for="validationDefault01">Name<span style="color: #cf0e07;">*</span></label>
                                        <input type="text" name="fname" class="form-control" id="validationDefault01" placeholder="Full Name" required>
                                    </div>
                                    <div class="col-sm-6 col-xs-12 mb-3">
                                        <label for="validationDefault02">Email Address<span style="color: #cf0e07;">*</span></label>
                                        <input type="text" name="email" class="form-control" id="validationDefault02" placeholder="Email Address" required>
                                    </div>
                                    </div>
                                    <div class="form-row">
                                    <div class="col-sm-6 col-xs-12 mb-3">
                                        <label for="validationDefault03">Phone</label>
                                        <input type="text" name="phone" class="form-control" id="validationDefault03" placeholder="Phone Number">
                                    </div>
                                    <div class="col-sm-6 col-xs-12 mb-3">
                                        <label for="validationDefault04">Type of Real Estate Project?<span style="color: #cf0e07;">*</span></label>
                                        <select class="form-control form-select" type="text" name="projecttype"  id="validationDefault04" placeholder="" required>
                                        <option selected>Select your type</option>
                                        <option value="Commercial-Construction">Commercial Construction</option>
                                        <option value="Commercial-Acquisition">Commercial Acquisition</option>
                                        <option value="Commercial-Refinance">Commercial Refinance</option>
                                        <option value="Residential-Acquisition">Residential Acquisition/Refinance</option>
                                        </select>
                                    </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-sm-6 col-xs-12 mb-3">
                                        <label for="validationDefault05">Funding Required?<span style="color: #cf0e07;">*</span></label>
                                        <select class="form-control form-select" type="text" name="funding"  id="validationDefault05" placeholder="" required>
                                            <option selected>Select your amount</option>
                                            <option value="Less-than-$1M">Less than $1M</option>
                                            <option value="$1M-$5M">$1M - $5M</option>
                                            <option value="$5M-$10M">$5M - $10M</option>
                                            <option value="$10M-and-above">$10M and above</option>
                                        </select>
                                        </div>
                                        <div class="col-sm-6 col-xs-12 mb-3">
                                            <label for="validationDefault06">Requested loan to value %<span style="color: #cf0e07;">*</span></label>
                                            <select class="form-control form-select" type="text" name="loan-value"  id="validationDefault06" placeholder="" required>
                                            <option selected>Select your value</option>
                                            <option value="Less-than-50%">Less than 50%</option>
                                            <option value="50%-65%">50% - 65%</option>
                                            <option value="65%-75%">65% - 75%</option>
                                            <option value="Above-75%">Above 75%</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-row">
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
          
        <?php
            include 'mortgage-application-modal.php';
        ?>


        <!-- Vendor JS Files -->
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/owlcarousel/js/owl.carousel.min.js"></script>
        <script src="assets/vendor/owlcarousel/js/popper.min.js"></script>
        <script src="assets/vendor/owlcarousel/js/carousel.js"></script>
        <script src="assets/vendor/slider/slider.js"></script>

         <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>
    </body>
</html>