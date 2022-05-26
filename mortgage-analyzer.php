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
                        <h2 class="title" style="color: #fff;">Mortgage Analyzer</h2>
                        <p class="description">Calculate your mortgage payment. Create an amortization schedule. Discover what you will owe in 5 years.</p>
                    </div>
                </div>
            </div>
        </section>
        <section style="margin-top: 40px;">
            <div class="container">
                <div class="row">
            <form name="paymortcalc" role="form" onSubmit="amortonLink()">
            <input type="hidden" name="ExpDate">
            <div class="col-md-6">
            <div class="form-group">
                <div class="row mb-10">
                    <div class="col-xs-12">
                        <span class="label label-bgnone"><b>1</b>Mortgage Term</span>
                        <select class="form-control" name="desterm">
                            <option value=0 selected >PLEASE CHOOSE</option>
                            <option value=6>6 Months</option>
                            <option value=12>1 Year</option>
                            <option value=24>2 Years</option>
                            <option value=36>3 Years</option>
                            <option value=60>5 Years</option>
                            <option value=84>7 Years</option>
                            <option value=120>10 Years</option>
                        </select>
                    </div>
                </div>
            
                <div class="row mb-10">
                    <div class="col-xs-12">
                        <span class="label label-bgnone"><b>2</b>Payment Frequency</span>
                        <select class="form-control" name="PFREQ">
                            <option value=0 selected>PLEASE CHOOSE</option>
                            <option value=12>Monthly</option>
                            <option value=24>Semi-Monthly</option>
                            <option value=26>Bi-Weekly</option>
                            <option value=52>Weekly</option>
                        </select>
                    </div>
                </div>
            
                <div class="row mb-10">
                    <div class="col-xs-12">
                        <span class="label label-bgnone"><b>3</b>Amortization Period</span>
                        <div class="input-group">
                            <input type="text" class="form-control" name="NAMORT" onChange="computeField('3',this,1,40,'Amortization Period')"
                            placeholder="1 to 40" onFocus="this.select()>Year(s)">
                            <span class="input-group-addon">Years<span>
                        </div>
                    </div>
                </div>
            
                <div class="row mb-10">
                    <div class="col-xs-12">
                        <span class="label label-bgnone"><b>4</b>Mortgage Amount</span>
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <input type="text" class="form-control" name="mortamt" placeholder="10,000 to 1,000,000,000"
                            onChange="computeField('4',this,10000,1000000000,'Mortgage Amount')" onFocus=" this.select()">
                        </div>
                    </div>
                </div>
            
                <div class="row mb-10">
                    <div class="col-xs-12">
                        <span class="label label-bgnone"><b>5</b>Interest Rate</span>
                        <div class="input-group">
                                <input type="text" class="form-control" name="rate" placeholder="0.1 to 25" onFocus="this.select()"
                                onChange="computeField('5',this,.1,25,'Interest Rate')">
                                <span class="input-group-addon">%<span>
                        </div>
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-6">
                        <button type="button" name="calculate" class="btn btn-orange" onClick="javascript:payMortBal()" onMouseOver="self.status='Compute Payment & Balance Summary';return true;">Calculate</button>
                    </div>
                </div>
            
            </div><!--End of Form Group-->
        </div>
        <div class="col-md-6">
            
                <div class="well col-md-12">
                    <p>Your Mortgage Analysis:</p>
                    <div class="row">
            
                        <div class="col-xs-12 mb-10">
                            <span class="label label-orange">Mortgage Payment</span>
                            <input type="text" class="form-control" name="mainpay">
                        </div>
            
                        <div class="col-xs-12">
                            <span class="label label-orange">Mortgage Balance Remaining After</span>
                        </div>
            
                        <div class="input-group">
                        <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;1 Year</span>
                        <input type="text" class="form-control col-xs-12 col-sm-6" name="mainyr1">
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon">&nbsp;&nbsp;2 Years</span>
                            <input type="text" class="form-control col-xs-12 col-sm-6" name="mainyr2">
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon">&nbsp;&nbsp;3 Years</span>
                            <input type="text" class="form-control col-xs-12 col-sm-6" name="mainyr3">
                        </div>

                        <div class="input-group">
                        <span class="input-group-addon">&nbsp;&nbsp;5 Years</span>
                        <input type="text" class="form-control col-xs-12 col-sm-6" name="mainyr5">
                        </div>

                        <div class="input-group mb-10">
                        <span class="input-group-addon">10 Years</span>
                        <input type="text" class="form-control col-xs-12 col-sm-6" name="mainyr10">
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

        <script src="assets/js/mortgage-analyzer.js"></script>
        
<?php 
    include 'faqs.php';
    include 'footer-banner.php';
    include 'footer.php';
?>