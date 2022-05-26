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
                        <h2 class="title" style="color: #fff;">Payment Analyzer</h2>
                        <p class="description">Calculate your mortgage payment for several different payment frequencies which include...weekly, bi-weekly, semi-monthly and monthly payment types.</p>
                    </div>
                </div>
            </div>
        </section>
        <section style="margin-top: 40px;">
            <div class="container">
                <div class="row">
            <form name="paycalc" role="form">
            <div class="col-md-6">
            <div class="form-group">
                <div class="row  mb-10">
                    <div class="col-xs-12">
                        <span class="label label-bgnone"><b>1</b>Mortgage Amount</span>
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <input type="text" class="form-control" placeholder="10,000 to 1,000,000,000" name="mtgamnt"
                            onChange="computeField('1',this,10000,1000000000,'Mortgage Amount')">
                        </div>
                    </div>
                </div>
            
                <div class="row  mb-10">
                    <div class="col-xs-12">
                        <span class="label label-bgnone"><b>2</b>Interest Rate</span>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="0.1 to 25" name="intrate"
                            onChange="computeField('2',this,.1,25,'Mortgage Interest Rate')">
                            <span class="input-group-addon">%</span>
                        </div>
                    </div>
                </div>
            
                <div class="row mb-10">
                    <div class="col-xs-12">
                        <span class="label label-bgnone"><b>3</b>Amortization Period</span>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="1 to 40" name="amortperiod"
                            onChange="computeField('3',this,1,40,'Amortization Period')">
                            <span class="input-group-addon">Years</span>
                        </div>
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-6">
                        <button type="button" name="calculate" class="btn btn-orange" onClick="javascript:compute()"
                        onMouseOver="self.status='Compute Results';return true;">Calculate</button>
                    </div>
                </div>
            
            </div><!--End of Form Group-->
        </div>
        <div class="col-md-6">
            
                <div class="well col-md-12">
                    <!-- <p>Your Mortgage Analysis:</p> -->
                    <div class="row">
            
                        <div class="col-xs-12">
                            <span class="label label-orange">Monthly Payments</span>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input type="text" class="form-control" name="payMonth">
                            </div>
                        </div>
                        <div class="col-xs-12 mb-10">
                            <span class="label label-default">Amortization</span>
                            <input type="text" class="form-control" name="Month">
                        </div>
            
                        <div class="col-xs-12">
                            <span class="label label-orange">Semi-Monthly Payments</span>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input type="text" class="form-control" name="paysemiMonth">
                            </div>

                        </div>
                        <div class="col-xs-12 mb-10">
                            <span class="label label-default">Amortization</span>
                            <input type="text" class="form-control" name="semiMonth">
                        </div>
            
                        <div class="col-xs-12">
                            <span class="label label-orange">Bi-Weekly Payments</span>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input type="text" class="form-control" name="payAccelBi">
                            </div>

                        </div>
                        <div class="col-xs-12  mb-10">
                            <span class="label label-default">Amortization</span>
                            <input type="text" class="form-control" name="AccelBi">
                        </div>
            
                        <div class="col-xs-12">
                            <span class="label label-orange">Weekly Payments</span>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input type="text" class="form-control" name="payAccelWeek">
                            </div>

                        </div>
                        <div class="col-xs-12 mb-10">
                            <span class="label label-default">Amortization</span>
                            <input type="text" class="form-control" name="AccelWeek">
                        </div>
                    </div>
                    <div class="row">
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

        
        <script src="assets/js/payment-analyzer.js"></script>
        
<?php 
    include 'faqs.php';
    include 'footer-banner.php';
    include 'footer.php';
?>