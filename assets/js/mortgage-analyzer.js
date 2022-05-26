qk = 'quickdata'; /* SAVING CALCULATOR DATA */
numDays       = 60;  /* DAYS UNTIL COOKIE EXPIRES (EG. 183 DAYS = 6 MONTHS) */

/*  THE FOLLOWING TWO FUNCTIONS CHECK THAT ALL NUMERIC VALUES ARE REAL NUMBER AND REMOVE DOUBLE DECIMALS */

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
      	var pest = pest+1;
      	if(pest==2){break;}}
var b = b + u;
}
}
return b;
}

function doSum(a){
   a.value = check(a.value);
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

/* OPENS POP UP WINDOW TO DISPLAY VALIDATION MESSAGES IN NETSCAPE 3.0 AND 4.0 */

function fixpro(n,q)

{

	if(versTest() == true){
		if(msTest()==true){
			var winNam='';
		}
		else{
			var slash = location.href.lastIndexOf("https://www.roarmortgage.com/")+1;
			var filNam = location.href.substring(0,slash);
			var winNam = filNam+'maxem.html';
		}
fix = window.open(winNam,'FIX','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,width=300,height=100');
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
else{bootbox.alert(n+'\n'+q)}
}

/* FUNCTION CONFIRMS THAT THE VALUE ENTERED INTO A FIELD FALLS WITHIN THE PRE-DETERMINED MINIMUM AND MAXIMUM VALUES, AND DISPLAYS AN ERROR MESSAGE WITH THE ALLOWABLE NUMERIC RANGE FOR THE FIELD DATA IN A POP UP VALIDATION WINDOW */
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

/* CALLS UPON THE FUNCTIONS TO DETERMINE IF THE NUMBERS ENTERED ARE VALID AND TO CALCULATE THE RESULTS OF THE ENTERED DATA FOR EXAMPLE - MORTGAGE PAYMENT, GDS AND TDS RATIOS, AND LOAN TO VALUE. THIS FUNCTION IS EXECUTED EVERYTIME A VALUE IS CHANGED IN A FIELD */
function computeField(quest,input,min,max,msage)
{
       doSum(input);
checkNumber(quest,input,min,max,msage);
}

/* RETURNS THE SELECTED INDEX VALUE OF SELECT LISTS IN THE CALCULATOR TO BE USED IN CALCULATIONS */
function getIndex(n){return n.selectedIndex;}

function calcRdefine(intrate,compound, freq){
 return Math.pow((1.0 + ((intrate/100)/compound)),(compound/freq))-1.0;}

function calcBal(mortgage,intrate,compound,freq,payment,term){
rdefine = calcRdefine(intrate,compound, freq);
return (mortgage*(Math.pow((1.0 + rdefine),(term)))) -  ((payment * ((Math.pow((1.0 + rdefine),(term))) - 1.0))/rdefine);
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

/* THIS FUNCTION CALCULATES THE LOAN TO VALUE RATIO */
function LTVcalc(MORTGAGE, MORTGAGE2, APPRAISE){
return (MORTGAGE/APPRAISE) + (MORTGAGE2/APPRAISE);
}


function Ratios(PAY1, PAY2, HEAT, TAX, DEBT, INCOME){
return (PAY1/INCOME)+(PAY2/INCOME)+(HEAT/INCOME)+(TAX/INCOME)+(DEBT/INCOME);
}

/* THIS FUNCTION CALCULATES THE MONTHLY MORTGAGE PAYMENT BASED ON THE USER'S INPUT */
function calcPay(MORTGAGE, AMORT, INRATE, COMPOUND, FREQ){
var compound = COMPOUND/12;
var monTime = AMORT * 12;
var RATE = (INRATE*1.0)/100;
var yrRate = RATE/COMPOUND;
var rdefine    = Math.pow((1.0 + yrRate),compound)-1.0;
var PAYMENT = (MORTGAGE*rdefine * (Math.pow((1.0 + rdefine),monTime)))/  ((Math.pow((1.0 + rdefine),monTime)) - 1.0);
if(FREQ==12){
return PAYMENT;}
if(FREQ==26||FREQ==24){
return PAYMENT/2.0;}
if(FREQ==52){
return PAYMENT/4.0;}
}

function retTerm(n){
if(n==0){return 0;}
if(n==1){return 6;}
if(n==2){return 12;}
if(n==3){return 24;}
if(n==4){return 36;}
if(n==5){return 60;}
if(n==6){return 84;}
if(n==7){return 120;}
}

function retFreq(n){
if(n==0){return 0;}
if(n==1){return 12;}
if(n==2){return 24;}
if(n==3){return 26;}
if(n==4){return 52;}
}
function calcTotal(MORTGAGE, LTV){
if(LTV>.75&&LTV<=.80){
return MORTGAGE*1.01;}
if(LTV>.80&&LTV<=.85){
return MORTGAGE*1.0175;}
if(LTV>.80){
return MORTGAGE*1.02;}
if(LTV<=.75){
return MORTGAGE}
}

/* SAVES COOKIE CONTAINING DATA TO BE USED IN AMORTIZATION SCHEDULE */
function quickCook(MTGAMT,AMORT,RATE,TERM,FREQ){

var expire = new Date ();
expire.setTime (expire.getTime() + (numDays * 24 * 3600000));/* 2 MONTHS */
var qkData = " " ;
qkData = qkData + '`' + MTGAMT + '`' + AMORT + '`' + RATE + '`' + TERM + '`' + FREQ;
document.cookie = qk +"=" + escape(qkData) +"; expires=" + expire.toGMTString()+"; path=/" ;
}

/* VALIDATES ALL THE FIELDS AND CALCULATES VALUES TO BE ENTERED INTO THE TEXT BOXES AT THE BOTTOM OF THE PAGE WHEN THE USER CLICKS ON COMPUTE OR COMPUTE AMORTIZATION */
function compute(form){

if(document.paymortcalc.desterm.selectedIndex == 0){
fixpro('Question 1: (Mortgage Term)','You have not answered this question, click on the PLEASE CHOOSE button to select your option.');return false;}

if(document.paymortcalc.PFREQ.selectedIndex == 0){
fixpro('Question 2: (Payment Frequency)','You have not answered this question, click on the PLEASE CHOOSE button to select your option.');return false;}

if((document.paymortcalc.NAMORT.value == null || document.paymortcalc.NAMORT.value.length == 0)|| (document.paymortcalc.NAMORT.value < 1 || document.paymortcalc.NAMORT.value > 40)){
fixpro('Question 3: (Amortization Period)','Please enter a number between 1 and 40.');return false;}

if((document.paymortcalc.mortamt.value == null|| document.paymortcalc.mortamt.value.length == 0)|| (document.paymortcalc.mortamt.value <10000|| document.paymortcalc.mortamt.value > 1000000000) )
{fixpro('Question 4: (Mortgage Amount)','Please enter a number between 10000 and 1000000000.');return false;}

if((document.paymortcalc.rate.value == null || document.paymortcalc.rate.value.length == 0)||(document.paymortcalc.rate.value < .1 || document.paymortcalc.rate.value > 25))
{fixpro('Question 5: (Interest Rate)','Please enter a number between 2.0 and 25.0.');return false;}

if(retTerm(document.paymortcalc.desterm.selectedIndex)/12>document.paymortcalc.NAMORT.value){
fixpro('Question 1: (Mortgage Term)','The selected mortgage term is greater than the amortization period entered.  Increase the amortization period or choose a shorter mortgage term.');return false;}

term = retTerm(document.paymortcalc.desterm.selectedIndex);
freq = retFreq(document.paymortcalc.PFREQ.selectedIndex);
amort = document.paymortcalc.NAMORT.value;
mortgage = document.paymortcalc.mortamt.value;
intrate = document.paymortcalc.rate.value;
var payment = calcPay(mortgage, amort, intrate, 2, freq);

form.mainpay.value = '$' + Intl.NumberFormat().format(roundPen(payment));
form.mainyr1.value = '$' + Intl.NumberFormat().format(roundPen(calcBal(mortgage,intrate,2,freq,payment,(12/(12/freq)))));
form.mainyr2.value = '$' + Intl.NumberFormat().format(roundPen(calcBal(mortgage,intrate,2,freq,payment,(24/(12/freq)))));
form.mainyr3.value = '$' + Intl.NumberFormat().format(roundPen(calcBal(mortgage,intrate,2,freq,payment,(36/(12/freq)))));
form.mainyr5.value = '$' + Intl.NumberFormat().format(roundPen(calcBal(mortgage,intrate,2,freq,payment,(60/(12/freq)))));
form.mainyr10.value = '$' + Intl.NumberFormat().format(roundPen(calcBal(mortgage,intrate,2,freq,payment,(120/(12/freq)))));

quickCook(mortgage,amort,intrate,term,freq);

return true;
}

/* OPENS WINDOW USED TO DISPLAY HELP MESSAGES WHEN THE USER CLICKS ON A HELP BUTTON. THE HELP MESSAGE DISPLAYED IS DETERMINED IN THE ARRAY WHICH IS REFERENCED ACCORDING TO THE HELP BUTTON WHICH WAS CLICKED */
function winopen(name)
{
var linkit = "help/"+name;
if(versTest() == true||nineTest()==true){
qc=window.open(linkit,'helpscreen','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,width=250,height=180');
if(navigator.appName.substring(0,8) == "Netscape")
{qc.focus();}

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

/* LOADS THE AMORTIZATION SCHEDULE FILE ONCE IT IS CERTAIN THAT ALL VALUES ENTERED INTO THE FORM ARE CORRECT. */
function amortLink()
{

if(navigator.appVersion.substring(0,3) == 2.0 &&  navigator.appName.substring(0,8)=="Netscape" && (navigator.appVersion.indexOf("Macintosh")>=0||navigator.appVersion.indexOf("PowerPC")>=0)){
var timere = compute(document.forms[0]);
if(timere==true){setTimeout("document.form2.submit()",100);}
}
else{
if(compute(document.forms[0])==true){document.form2.submit();}}
}

function amortonLink()
{

if(compute(document.forms[0])==true){document.form2.submit();return false;}
else{return false;}
}

function payMortBal()
{
if(navigator.appVersion.substring(0,3) == 2.0 &&  navigator.appName.substring(0,8)=="Netscape" && navigator.appVersion.indexOf("Macintosh")>=0){
	setTimeout("compute(document.forms[0])",200);
}
else{compute(document.forms[0]);}
}

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