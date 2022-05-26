<?php
    include 'header.php';
?>
        
        <section style="margin-top: 100px;">
            <div class="container-fluid">
                <div class="row apply-banner d-flex">
                    <div class="col-xs-1 d-flex justify-content-center align-items-center">
                        <a href="calculators.php" class="btn btn-bgnone">
                            <i class="fa fa-arrow-left" style="font-size: 4rem;"></i>
                        </a>
                    </div>
                    <div class="col-xs-11">
                        <h2 class="title" style="color: #fff;">Rent vs. Buy Financial Comparison</h3>
                        <p class="description">Compare the financial advantage of renting and buying based on your current monthly rent, funds towards your down payment and your desired monthly payment if you purchased a home.</p>
                    </div>
                </div>
            </div>
        </section>
        <section style="margin-top: 40px;">
            <div class="container">
                <div class="row">
                    <form name="rentcalc" role="form">
                        <div class="form-group">
                            <div class="col-md-6">
                                <p class="title">If you buy:</p>
                                <div class="panel-body">
                                    <div class="row mb-10">
                                        <div class="col-xs-12">
                                            <span class="label label-bgnone"><b>1</b>Monthly Payment</span>
                                            <div class="input-group">
                                                <span class="input-group-addon">$</span>
                                                <input type="text" class="form-control" name="monpay" placeholder="200 to 10,000"
                                                onChange="computeField('1',this,200,10000,'Monthly Shelter Costs')">
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="row mb-10">
                                        <div class="col-xs-12">
                                            <span class="label label-bgnone"><b>2</b>Down Payment</span>
                                            <div class="input-group">
                                                <span class="input-group-addon">$</span>
                                            <input type="text" class="form-control" name="downp" placeholder="2000 to 1,000,000"
                                            onChange="computeField('2',this,2000,1000000,'Downpayment')">
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="row mb-10">
                                        <div class="col-xs-12">
                                            <span class="label label-bgnone"><b>3</b>Annual Property Taxes</span>
                                            <div class="input-group">
                                                <span class="input-group-addon">$</span>
                                            <input type="text" class="form-control" name="protax" placeholder="300 to 10,000"
                                            onChange="computeField('3',this,300,10000,'Annual Property Taxes')">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-10">
                                        <div class="col-xs-12">
                                            <span class="label label-bgnone"><b>4</b>Interest Rate</span>
                                            <div class="input-group">
                                            <input type="text" class="form-control" name="rate" placeholder="0.1 to 25"
                                            onChange="computeField('4',this,.1,25,'Interest Rate')">
                                                <span class="input-group-addon">%</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-10">
                                        <div class="col-xs-12">
                                            <span class="label label-bgnone"><b>5</b>Annual Increase in Home Value</span>
                                            <div class="input-group">
                                                <select class="form-control" name="incr">
                                                    <option value=0 selected>CHOOSE</option>
                                                    <option value=.00>0</option> 
                                                    <option value=.01>1</option>
                                                    <option value=.02>2</option> 
                                                    <option value=.03>3</option> 
                                                    <option value=.04>4</option> 
                                                    <option value=.05>5</option> 
                                                    <option value=.06>6</option> 
                                                </select>
                                                <span class="input-group-addon">%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--Panel Body -->  
                            </div>
                            <div class="col-md-6">
                                <p class="title">If you rent:</p>                
                                <div class="panel-body">
                                    <div class="row mb-10">
                                        <div class="col-xs-12">
                                            <span class="label label-bgnone"><b>6</b>Monthly Rent</span>
                                            <div class="input-group">
                                                <span class="input-group-addon">$</span>
                                                <input type="text" class="form-control" name="rent" placeholder="0 to 5000" 
                                                onChange="computeField('6',this,0,5000,'Monthly Rent')">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row mb-10">
                                        <div class="col-xs-12">
                                            <span class="label label-default"><b>7</b>Years of Comparison</span>
                                            <div class="input-group">
                                                <select class="form-control" name="compare">
                                                    <option value=0 selected>CHOOSE</option>
                                                    <option value=1>1</option> 
                                                    <option value=2>2</option> 
                                                    <option value=3>3</option> 
                                                    <option value=4>4</option>
                                                    <option value=5>5</option>
                                                    <option value=6>6</option> 
                                                    <option value=7>7</option> 
                                                    <option value=8>8</option> 
                                                    <option value=9>9</option> 
                                                    <option value=10>10</option> 
                                                </select> 
                                                <span class="input-group-addon">Years</span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Panel Body -->

                                <div class="row">
                                    <div class="col-xs-12 col-sm-8 col-md-6">
                                    <button type="button" name="mainCalculate" onClick="javascript:calcRBMax()" class="btn btn-orange">Calculate</button>
                                    </div>
                                </div>
                                
                            </div><!--End of Form Group-->
                        </div>
                    
                    </form>
                </div>
            </div><!--End of Container Div-->
        </section>

        <script src="assets/js/rent-buy-analyzer.js"></script>
        
<?php 
    include 'faqs.php';
    include 'footer-banner.php';
    include 'footer.php';
?>