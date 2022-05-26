<?php
    include 'header.php';
?>
        
        <section style="margin-top: 100px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- <div class="iframe-holder d-flex justify-content-center">
                            <iframe src="http://www.roarmortgage.com/calculators/maximum_mortgage.html" style="width: 100%; height: 170vh"></iframe>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row apply-banner d-flex">
                    <div class="col-xs-1 d-flex justify-content-center align-items-center">
                        <a href="calculators.php" class="btn btn-bgnone">
                            <i class="fa fa-arrow-left" style="font-size: 4rem;"></i>
                        </a>
                    </div>
                    <div class="col-xs-11">
                        <h2 class="title" style="color: #fff;">See how much you can afford</h2>
                        <p class="description">Our affordability calculator helps you estimate how large of a mortgage you could afford and your potential payments.</p>
                    </div>
                </div>
            </div>
        </section>
        <section style="margin-top: 40px;">
            <div class="container">
                <div class="row">
            <form name="maxcalc" role="form">
            <div class="col-md-6">
            <div class="form-group">
                <div class="row">
                    <div class="col-xs-12">
                        <span class="label label-bgnone"><b>1</b>Annual Family Income</span>
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <input type="text" class="form-control" name="totinc" placeholder="10,000 to 2,500,000" onChange="computeField('1',this,10000,25000000,'Annual Family Income')">
                        </div>
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-xs-12">
                        <span class="label label-bgnone"><b>2</b>Annual Property Taxes (est.)</span>
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <input type="text" class="form-control" name="protax" placeholder="100 to 50,000" onChange="computeField('2',this,100,50000,'Annual Property Taxes')">
                        </div>
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-xs-12">
                        <span class="label label-bgnone"><b>3</b>Monthly Heating Costs/Condo Fees (est.)</span>
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <input type="text" class="form-control" name="proheat" placeholder="20 to 1,500" onChange="computeField('3',this,20,1500,'Condo and/or Heating Costs')">
                        </div>
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-xs-12">
                        <span class="label label-bgnone"><b>4</b>Min. Monthly Payments for Loans/Credit Cards</span>
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <input type="text" class="form-control" name="debt" placeholder="0 to 5000" onChange="computeField('4',this,0,5000,'Monthly Debt Payments')">
                        </div>
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-xs-12">
                        <span class="label label-bgnone"><b>5</b>Monthly Secondary Financing Payment</span>
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <input type="text" name="second" class="form-control" placeholder="0 to 5000" onChange="computeField('5',this,0,5000,'Secondary Financing Payment')">
                        </div>
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-xs-12">
                        <span class="label label-bgnone"><b>6 </b>Interest Rate</span>
                        <div class="input-group">
                            <input type="text" class="form-control" name="rate" placeholder="0.1% to 25%" onChange="computeField('6',this,.1,25.0,'Interest Rate')">
                            <span class="input-group-addon">%</span>
                        </div>
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-6">
                        <button type="button" name="calculate" class="btn btn-orange" onClick="javascript:calcMax()" onMouseOver="self.status='Compute Maximum Mortgage & Payment';return true;">Calculate</button>
                    </div>
                </div>
            
            </div><!--End of Form Group-->
        </div>
        <div class="col-md-6">
            
                <div class="well col-md-12">
                    <p>Your Maximum Mortage and Monthly Payment:</p>
                    <div class="row">
            
                        <div class="col-xs-12 text-center">
                            <span class="label label-orange">Maximum Mortgage</span>
                            <input type="text" class="form-control" name="amt" onChange="calcMax()" disabled>
                        </div>
            
                        <div class="col-xs-12 text-center">
                            <span class="label label-orange">Monthly Payment</span>
                               <input type="text" class="form-control" name="pay" onChange="calcMax()" disabled>
                        </div>
            
                        <div class="col-xs-12">
                            <span class="label label-default">NOTES</span>
                               <ul style="font-size:11px;">
                            <li>Calculations can vary by up to 10% on property type, interest rate type, and down payment amount</li>
                            <li>Contact your mortgage agent today to get an accurate estimate </li>
                            </ul>
                        </div>
            
            
                    </div>
            
            
            </div><!--End of Well Div-->
        </div>
            </form>
        </div>
            </div><!--End of Container Div-->
        </section>
        
        <script src="assets/js/affordability-calc.js"></script>
<?php 
    include 'footer-banner.php';
    include 'footer.php';
?>