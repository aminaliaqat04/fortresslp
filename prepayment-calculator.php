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
                        <h2 class="title" style="color: #fff;">Prepayment Analyzer</h2>
                        <p class="description">Discover how many years you will shorten your amortization and how much interest savings you will realize by making a lump sum payment on your mortgage.</p>
                    </div>
                </div>
            </div>
        </section>
        <section style="margin-top: 40px;">
            <div class="container">
                <div class="row">
                <form name="prpaycalc" role="form" onSubmit="amortonLink()">
                    <div class="col-sm-6">
                    <div class="form-group">
                        <div class="spacer">
                            <div class="row">
                                <div class="col-xs-12">
                                    <span class="label label-bgnone"><b>1</b>Mortgage Amount</span>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-sm-9 col-xs-8">
                                    <div class="input-group">
                                        <span class="input-group-addon">$</span>
                                        <input type="text" name="MORTAMT" class="form-control" placeholder="20,000 to 1,000,000" 
                                        onChange="computeField(this,20000,10000000,'Mortgage Amount')">
                                    </div>
                                </div>
                                <div class="col-sm-3 col-xs-4 nopadding">
                                    <button class="btn btn-orange btn-small" type="button" onClick="javascript:calcMortgage(0) "
                                    onMouseOver="self.status='Compute Mortgage Amount';return true">Calculate</button>
                                </div>
                            </div>
                        </div><!--Spacer-->
                    
                    <div class="spacer">
                        <div class="row">
                            <div class="col-xs-12">
                                <span class="label label-bgnone"><b>2</b>Interest Rate</span>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-9 col-xs-8">
                              <div class="input-group">
                                  <input type="text" name="RATE" class="form-control" placeholder="0.1 to 25"
                                  onChange="if(computeField(this,1,30,'Interest Rate')){this.value=(Math.round(this.value*1000)/1000)};">
                                  <span class="input-group-addon">%</span>
                              </div>
                        </div>
                        
                        <div class="col-sm-3 col-xs-4 nopadding">
                            <button class="btn btn-orange btn-small" type="button" onClick="javascript:calcMortgage(1) " 
                            onMouseOver="self.status='Compute Interest Rate';return true">Calculate</button>
                        </div>
                    </div>
                </div><!--Spacer-->
                    
                <div class="spacer">
                    <div class="row">
                        <div class="col-xs-12">
                                <span class="label label-bgnone"><b>3</b>Initial Amortization Period</span>
                        </div>
                    </div>
                        
                    <div class="row">
                        <div class="col-sm-9 col-xs-8">
                            <div class="input-group">
                                <input type="text" name="NAMORTY" class="form-control" placeholder="1 to 40" 
                                onChange="validAm(this,0,40,'Initial Amortization Period - Years')">
                                <span class="input-group-addon">Years&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            </div>
                        </div>
                    </div>
                        
                    <div class="row">
                        <div class="col-sm-9 col-xs-8">
                            <div class="input-group">
                                <input type="text" name="NAMORTM" class="form-control" value="0" onChange="validAm(this,0,11,'Initial Amortization Period - Months')">
                                <span class="input-group-addon">Months</span>
                            </div>
                        </div>
                        
                        <div class="col-sm-3 col-xs-4 nopadding">
                            <button class="btn btn-orange btn-small" type="button" onClick="javascript:calcMortgage(2) " 
                            onMouseOver="self.status='Compute Initial Amortization Period';return true">Calculate</button>
                        </div>
                    </div>
                </div><!--Spacer-->
                    
                    <div class="spacer">
                        <div class="row">
                            <div class="col-xs-12">
                                <span class="label label-bgnone"><b>4</b>Initial Mortgage Payment</span>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-9 col-xs-8">
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <input type="text" name="MAINPAY" class="form-control" onChange="doSum(this)">
                                </div>                        
                            </div>
            
                            <div class="col-sm-3 col-xs-4 nopadding">
                                <button class="btn btn-orange btn-small" type="button" onClick="javascript:calcMortgage(3) " 
                                onMouseOver="self.status='Compute Initial Mortgage Payment';return true">Calculate</button>
                            </div>
                        </div><!-- Row -->
                    </div><!-- Spacer Div -->
                    
                    <div class="spacer">
                        <div class="row">
                            <div class="col-sm-9 col-xs-8">
                                <span class="label label-bgnone"><b>5</b>Payment Frequency</span>
                                <select class="form-control" name="PFREQ">
                                        <option> Monthly</option>
                                        <option> Semi-Monthly</option> 
                                        <option> Bi-Weekly</option> 
                                        <option> Weekly</option>
                                </select>
                            </div>
                        
                        
                            <div class="col-sm-3 col-xs-4 nopadding">
                                <span class="label label-bgnone"><b>Accelerated?</b></span>
                                <select class="form-control" name="ACCSEL">
                                            <option> No </option>
                                            <option> Yes</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="spacer">
                        <div class="row">
                            <div class="col-sm-9 col-xs-8">
                                <span class="label label-bgnone"><b>6</b>Lump Sum Payment</span>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <input type="text" class="form-control" name="LUMPAMT" value="0" onChange="validLumps(this)"> 		
                                </div>
                            </div>
                        
                            <div class="col-sm-3 col-xs-4 nopadding">
                                <span class="label label-bgnone"><b>Period</b></span>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="LUMPYRS" value="1" onChange="computeField(this,0,40,'Number of Years');">
                                    <span class="input-group-addon">Years</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="spacer">     
                        <div class="row">
                            <div class="col-sm-9 col-xs-8">
                                <span class="label label-bgnone"><b>7</b>Mortgage Payment Increase</span>
                                <input type="text" class="form-control" name="INCPAY" value="0" onChange="doSum(this)">        
                            </div>
                            
                            <div class="col-sm-3 col-xs-4 nopadding">
                                <span class="label label-bgnone"><b>Type</b></span>
                                <select class="form-control" name="INCTYPE">
                                    <option> % </option>
                                    <option selected> $</option>
                                </select>	
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-9 col-xs-8">
                                <span class="label label-bgnone"><b>Period</b></span>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="INCYEARS" value="1" onChange="computeField(this,0,40,'Number of Years');">
                                    <span class="input-group-addon">Years</span>
                                </div>
                            </div>
                        </div>
                    </div>    
                    
                    <div class="row">
                        <div class="col-xs-5 pull-left">
                            <button class="btn btn-orange" type="button" name="mainCalculate" onClick="javascript:controlMortgage(1)" onMouseOver="self.status='Compute Results';return true">Calculate</button>
                        </div>
                    </div>
                    
                    
                    
                    
                </div><!-- End of Form Group Div -->    
                </div>
                <div class="col-sm-6">
                    <div class="well col-xs-12">
                        <strong style="font-size: 2rem; margin-bottom: 20px; display:block;">Your Prepayment Analysis:</strong>
                        <div class="row">
                            
                            <div class="col-xs-12">
                                <span class="label label-orange">Revised Amortization Period</span>
                                <div class="d-flex" style="margin-bottom: 40px">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="AMNEWY" onChange="controlMortgage(1)">
                                        <span class="input-group-addon">Years&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    </div>
                                    
                                    <div class="input-group">
                                    <input type="text" class="form-control" name="AMNEWM" onChange="controlMortgage(1)">
                                        <span class="input-group-addon">Months</span>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-xs-12"> 
                                <span class="label label-orange">Savings on Interest Costs</span>
                                <div class="input-group" style="margin-bottom: 40px">
                                    <span class="input-group-addon">$</span>
                                    <input type="text" class="form-control" name="AMINTSAVE" onChange="controlMortgage(1)">
                                </div>    
                            </div>
                            
                            
                    <div class="col-xs-12"> 
                            <span class="label label-default">NOTES</span>
                               <ul style="font-size:11px;">				
                            <li>Calculations can vary by up to 10% on property type, interest rate type, and down payment amount</li>
                            <li>Contact your mortgage agent today to get an accurate estimate </li>
                            </ul>
                        </div>
                    
                            
                                                    
                    </div>
                    
                    </div><!-- End of Well Div -->
                </div>
                
                </form>
            </div><!-- End of Row -->
            </div><!--End of Container Div -->
        </section>

        
        <script src="assets/js/prepayment-calc.js"></script>
<?php
    include 'faqs.php';
    include 'footer-banner.php';
    include 'footer.php';
?>