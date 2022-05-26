/*  THE FOLLOWING TWO FUNCTIONS CHECK THAT ALL NUMERIC VALUES ARE REAL NUMBER AND REMOVE DOUBLE DECIMALS */



function doSum(a){
    a.value = check(a.value);
 }
 function check(a)
 {
    var pest = 0;
    var b = "";
    for(i=0;i<=a.length;i++)
    {
    var u = a.charAt(i);
       if((u>="0"&&u<="9")||u==".")
       {
           if(u=="."){
           var pest = pest+1
           if(pest==2){break;}}
 var b = b + u;    	}}
 return b;
 }
 
 /* FUNCTION CONFIRMS THAT THE VALUE ENTERED INTO A FIELD FALLS WITHIN THE PRE-DETERMINED MINIMUM AND MAXIMUM VALUES */
 function checkNumber(quest,input, min, max, msg)
 {
 
     var str = input.value;
     for (var i = 0; i < str.length; i++) {
         var ch = str.substring(i, i + 1)
         if ((ch < "0" || "9" < ch) && ch != '.') {
             bootbox.alert(msg);
             return false;
         }
     }
     if(input.value!="")
     {
     var num = 0 + str
         if (num < min || max < num) {
          var sendn = "Question " + quest + ": ("+ msg + ")";
             var sendq = "You have entered " + input.value + ". Please enter a number between " + min + " and " + max + ".";
           fixpro(sendn,sendq);
         return false;
     }
     input.value = str;
     return true;
     }
 
 
 }
 
 
 /* CALLS UPON THE FUNCTIONS TO DETERMINE IF THE NUMBERS ENTERED ARE VALID AND TO CALCULATE THE RESULTS OF THE ENTERED DATA */
 function computeField(quest,input,min,max,msage)
 {
 doSum(input);
 checkNumber(quest,input,min,max,msage);
 }
 
 /* ROUNDS OFF MONETARY NUMBERS TO TWO DECIMALS (PENNIES) */
 function roundPen(n)
 {
 if(n > 0){
 pennies = n*100;
 pennies = Math.round(pennies);
 strPennies = "" + pennies;
 len = strPennies.length;
 
 return strPennies.substring(0, len - 2) + "." + strPennies.substring(len -2, len);
 }
 else return 0;
 }
 
 /* CALCULATES VALUES DISPLAYED WHEN COMPUTE IS CLICKED. FIRST CHECKS THAT THERE ARE VALUES IN ALL OF THE FIELDS. THE RESULTS ARE SENT TO THE TEXT BOXES - MAXIMUM MORTGAGE AND MONTHLY PAYMENT */
 
 function calcMax(){
 
 if((document.maxcalc.totinc.value == null || document.maxcalc.totinc.value.length == 0)|| (document.maxcalc.totinc.value < 10000 || document.maxcalc.totinc.value > 25000000)){
 fixpro('Question 1: (Annual Family Income)','Please enter a number between 10000 and 25000000.');return;}
 
 if((document.maxcalc.protax.value == null || document.maxcalc.protax.value.length == 0)|| (document.maxcalc.protax.value < 100 || document.maxcalc.protax.value > 50000)){
 fixpro('Question 2: (Annual Property Taxes)','Please enter a number between 100 and 50000.');return;}
 
 if((document.maxcalc.proheat.value == null || document.maxcalc.proheat.value.length == 0)|| (document.maxcalc.proheat.value < 20 || document.maxcalc.proheat.value > 1500)){
 fixpro('Question 3: (Monthly Heating Costs/Condo Fees)','Please enter a number between 20 and 1500.');return;}
 
 if((document.maxcalc.debt.value == null || document.maxcalc.debt.value.length == 0)|| (document.maxcalc.debt.value < 0 || document.maxcalc.debt.value > 5000)){
 fixpro('Question 4: (Monthly Debt Payments)','Please enter a number between 0 and 5000.');return;}
 
 if((document.maxcalc.second.value == null || document.maxcalc.second.value.length == 0)|| (document.maxcalc.second.value < 0 || document.maxcalc.second.value > 5000)){
 fixpro('Question 5: (Secondary Financing Payment)','Please enter a number between 0 and 5000.');return;}
 
 if((document.maxcalc.rate.value == null || document.maxcalc.rate.value.length == 0)|| (document.maxcalc.rate.value < .1 || document.maxcalc.rate.value > 25)){
 fixpro('Question 6: (Interest Rate)','Please enter a number between 2.0 and 25.0.');return;}
 //This field will actually accept anything between 0.1 and 25
 
 
 var RATE = document.maxcalc.rate.value/100;
 var income = document.maxcalc.totinc.value;
 var tax = document.maxcalc.protax.value;
 var heat = document.maxcalc.proheat.value*12;
 var debt = document.maxcalc.debt.value*12;
 var second = document.maxcalc.second.value*12;
 var compound = 2/12;
 var monTime = 25 * 12;
 var yrRate = RATE/2;
 var rdefine    = Math.pow((1.0 + yrRate),compound)-1.0;
 var purchcompound = Math.pow((1.0 + rdefine),monTime);
 
 
 var maxgdsr =.39;
 var maxtdsr =.44;
 
 
 var GDSPAY = (maxgdsr*income) - tax - heat - second;
 var TDSPAY = (maxtdsr*income) - tax - heat - second - debt;
 
 var PAYMENT = (GDSPAY<TDSPAY) ? GDSPAY/12 : TDSPAY/12;
 var MORTGAGE = (0 +((PAYMENT*(purchcompound-1.0))/rdefine))/purchcompound;
 
 
 document.maxcalc.amt.value = '$'+Intl.NumberFormat().format(roundPen(MORTGAGE));
 document.maxcalc.pay.value = '$'+Intl.NumberFormat().format(roundPen(PAYMENT));
 return;
 }
 
 /* TESTS VERSIONS FOR WHICH WILL SUPPORT POP UP WINDOWS */
 function versTest()
 {
 var one = '';
 var two = '';
 
 if (
 (navigator.appName.substring(0,8)=="Netscape" && (navigator.appVersion.substring(0,3) == "3.0" ||  navigator.appVersion.substring(0,3) =="4.0")))
 {var one='true';}
 if(
  (navigator.appName.substring(0,9) == "Microsoft" && navigator.appVersion.substring(0,3) == "3.0" && navigator.appVersion.indexOf("Macintosh")>=0))
 {var two='true';}
 
 if(one=='true' || two=='true' ||
 (navigator.appName.substring(0,9) == "Microsoft" && navigator.appVersion.indexOf("MSIE 3.0")>=0 &&
 navigator.appVersion.indexOf("Windows 3.1")>=0)
 )
 {return true;}
 else
 {return false;}
 
 
 }
 
 /* TESTS IF VERSION IS MSIE 3.0 FOR MAC */
 function msTest()
 {
 if(navigator.appName.substring(0,9) == "Microsoft" && 		(navigator.appVersion.substring(0,3) == "3.0" && navigator.appVersion.indexOf("Macintosh")>=0))
 {return true;}
 else
 {return false;}
 
 }
 
 
 function nineTest()
 {
 if(navigator.appName.substring(0,9) == "Microsoft" && (navigator.appVersion.substring(0,3)=="3.0" || navigator.appVersion.indexOf("MSIE 3.0")>=0) && (navigator.appVersion.indexOf("Macintosh")==-1 || navigator.appVersion.indexOf("Windows 3.1")== -1)
 )
 {return true;}
 else
 {return false;}
 }
 
 
 /* OPENS WINDOW FOR PRESENCE & DATA VALIDATION */
  function fixpro(n,q)
 {
     if(versTest() == true){
         if(msTest()==true){
             var winNam='';
         }
         else{
             var slash = location.href.lastIndexOf("https://www.roarmortgage.com/")+1;
             var filNam = location.href.substring(0,slash);
             var winNam = filNam+'maxem.asp?bid=JRMB500B001';
         }
 fix = window.open(winNam,'FIX','toolbar=no,location=no,directories=no,status=no,scrollbars=yes,resizable=no,copyhistory=no,width=300,height=100,outerWidth=350,outerHeight=150');
         if(navigator.appName.substring(0,8) == "Netscape"){
             fix.focus();
         }
 fix.document.write('<html><head><title>OME</title>');
 fix.document.write('</head><body bgcolor=ffffff><form name=fixer>');
 fix.document.write('<font size=2 face="tahoma,Arial, Helvetica" color=306798>'+n+'<p>'+q+'<p>');
 fix.document.write('<center><input type=button value=OK onClick=self.close()>');
 fix.document.write('</center></form></body></html>');
 fix.document.close();
 
     }
     else{
         bootbox.alert(n+'\n'+q);
     }
 }
 
 /* OPENS POP UP WINDOW TO DISPLAY HELP MESSAGES IN NETSCAPE 3.0 AND 4.0 */
 function winopen(name)
 {
 var linkit = "help/"+name;
 if(versTest() == true || nineTest()==true){
 maxMo=window.open(linkit,'helpscreen','toolbar=no,location=no,directories=no,status=no,scrollbars=yes,resizable=no,copyhistory=no,width=250,height=180,outerWidth=300,outerHeight=230');
 if(navigator.appName.substring(0,8) == "Netscape")
 {maxMo.focus();}
 }
 
 else{location.href=linkit;}
 
 }
 
 
 function StringArray(n)
 {
 this.length = n;
 for (var i = 1; i <= n; i++)
 this[i] = ''
 return this
 }
 
 
 maxtitle = new StringArray(9);
 maxtitle['A'] = 'Total Annual Income';
 maxtitle['B'] = 'Annual Property Taxes';
 maxtitle['C'] = 'Monthly Heating Costs';
 maxtitle['D'] = 'Other Monthly Debt Payments';
 maxtitle['E'] = 'Mortgage Term';
 maxtitle['F'] = 'Interest Rate';
 maxtitle['G'] = 'Special Circumstances';
 maxtitle['H'] = 'Second Mortgage Payments';
 maxtitle['I'] = 'Maintenance Fees';
 
 
 
 function browTest()
 {
 if((navigator.appVersion.substring(0,3) == 3.0 || navigator.appVersion.substring(0,3) == 4.0)&& navigator.appName.substring(0,8)=="Netscape"){
     return true;
 }
 else{
     return false;
 }
 }
 
 function makeImg()
 {
 if(browTest()==true){
 Img = new Image();
 Img.src = "graphics/back_on.html";
 document.images.Back_button.src=Img.src;
 }
 else{}
 }
 
 
 //These are not in use
 function clearImg()
 {
 if(browTest()==true){
 OrImg= new Image();
 OrImg.src="graphics/back_off.html";
 document.images.Back_button.src=OrImg.src;
 }
 else{}
 }
 
 function loadImg()
 {
 if(browTest()==true){
 Img = new Image();
 Img.src = "graphics/back_on.html"
 }
 else{}
 }