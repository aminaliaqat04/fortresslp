
<?php
    include 'header.php';
?>
        <!-- Contact Section-->
        <section id="contact" class="img-text-section">
            <div class="container-fluid px-0">
                <div class="row no-gutters">
                    <div class="col-md-5 col-xs-12 img-wrapper">
                        <div class="img-wrap">
                            <img src="assets/img/contact/contact.jpg" width="100%"></div>
                    </div>
                    <div class="col-md-7 col-xs-12 d-flex flex-column justify-content-center">
                        <div class="">
                            <div class="row">
                              <div class="col-md-12 text-center text-holder"> 
                                <h1>Contact Us</h1>
                                <p>71 Judson St Toronto , ON M8Z 1A4</p>
                                <a href="tel:4162017088">416-201-7088</a>
                                <a href="mailto:info@fortresslp.ca">info@fortresslp.ca</a>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-1 d-xs-none"></div>
                              <div class="col-md-10 col-sm-12">
                                <form class="d-flex flex-column" action="forms/contactemail.php" method="post" role="form">
                                  <div class="form-row">
                                    <div class="col-sm-12 col-xs-12 mb-3">
                                      <label for="validationDefault01">Name<span style="color: #cf0e07;">*</span></label>
                                      <input type="text" name="fname" class="form-control" id="validationDefault01" placeholder="Full Name" required>
                                    </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="col-sm-6 col-xs-12 mb-3">
                                      <label for="validationDefault03">Email Address<span style="color: #cf0e07;">*</span></label>
                                      <input type="text" name="email" class="form-control" id="validationDefault03" placeholder="Email Address" required>
                                    </div>
                                    <div class="col-sm-6 col-xs-12 mb-3">
                                      <label for="validationDefault04">Phone</label>
                                      <input type="text" name="phone" class="form-control" placeholder="Phone" id="validationDefault04">
                                    </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                      <label for="validationDefault05">Tell Us How Can We Assist You<span style="color: #cf0e07;">*</span></label>
                                      <textarea type="text" name="message" class="form-control" id="validationDefault05" required></textarea>
                                    </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="col-md-12 mb-3 text-center">
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
        </section><!-- End Contact Section-->

<?php
    include 'footer.php';
?>