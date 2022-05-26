rb = 'rentbuydata';
numDays = 60;  /* DAYS UNTIL COOKIE EXPIRES (EG. 183 DAYS = 6 MONTHS) */
//-----------------------------------
function loadImg()
{
if(browTest()==true){
Img = new Image();
Img.src = "graphics/back_on.html"
}
else{}
}
 
//------------------------------------
function doSum(a){ 
   a.value = check(a.value);
}
function check(a) {
   var b = "";
   for(i=0;i<=a.length;i++){
   var u = a.charAt(i);
      if((u>="0"&&u<="9")||u=="." ){ 
   var b = b + u;}
   }
return b;
}
 
//------------------------------------
 
 
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
 
//------------------------------------
function computeField(quest,input,min,max,msage)
{
// calls upon the function which calculates the results of the entered data.  
//For example - Mortgage Payment, GDS and TDS ratios, and Loan to 
//Value. This function
// is executed everytime a value is changed in a field.
       doSum(input);
           if (input.value != null && input.value.length != 0)
        input.value = "" + eval(input.value);
 checkNumber(quest,input,min,max,msage); 
   
}        
 
//------------------------------------
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
 
//------------------------------------
function calcRBMax(){
var error=0;
 
 
if((document.rentcalc.monpay.value == null || document.rentcalc.monpay.value.length == 0) || (document.rentcalc.monpay.value < 200 || document.rentcalc.monpay.value > 10000)){
error=1;
fixpro('Question 1: (Monthly Payment)','Please enter a number between 200 and 10000.');}
 
 
if (error==0) {
if ((document.rentcalc.downp.value == null || document.rentcalc.downp.value.length == 0) || (document.rentcalc.downp.value < 2000 || document.rentcalc.downp.value > 1000000)){
error=1;
fixpro('Question 2: (Downpayment)','Please enter a number between 2000 and 1000000.');}
 
 
}
if (error==0) {
if ((document.rentcalc.protax.value == null || document.rentcalc.protax.value.length == 0) || (document.rentcalc.protax.value < 300 || document.rentcalc.protax.value > 10000)){
var error=1;
fixpro('Question 3: (Property Taxes)','Please enter a number between 300 and 10000.');}
 
}
if (error==0) {
if ((document.rentcalc.rate.value == null || document.rentcalc.rate.value.length == 0) || (document.rentcalc.rate.value < .1  || document.rentcalc.rate.value > 25)){
var error=1;
fixpro('Question 4: (Interest Rate)','Please enter a number between 2 and 25.');}
}
 
if (error==0) {
 
if(document.rentcalc.incr.selectedIndex == 0){
var error=1;
fixpro('Question 5: (Home Value Increase)','You have not answered this question, click on the CHOOSE button to select your option.');}
 
}
 
if (error==0) {
if ((document.rentcalc.rent.value < 0  || document.rentcalc.rent.value.length == 0) || (document.rentcalc.rent.value < 0  || document.rentcalc.rent.value > 5000)){
var error=1;
fixpro('Question 6: (Monthly Rent)','Please enter a number between 0 and 5000.');}
 
}
 
if (error==0) {
if(document.rentcalc.compare.selectedIndex == 0){
var error=1;
fixpro('Question 7: (Years of Comparison)','You have not answered this question, click on the CHOOSE button to select your option.');}
 
}
 
if (error==0) {     
var RATE = document.rentcalc.rate.value/100;
var downp = document.rentcalc.downp.value*1.0;
var tax = document.rentcalc.protax.value;
var incr = document.rentcalc.incr[document.rentcalc.incr.selectedIndex].value;
var monpay = document.rentcalc.monpay.value;
var rent = document.rentcalc.rent.value;
var compare = document.rentcalc.compare[document.rentcalc.compare.selectedIndex].value;
 
var expire = new Date ();
expire.setTime (expire.getTime() + (numDays * 24 * 3600000));/* 2 MONTHS */
var rbData = " ";
var rbData = rbData + '`' + RATE + '`' + downp + '`' + tax + '`' + incr + '`' + monpay + '`' + rent + '`' + compare;
document.cookie = rb +"=" + escape(rbData) +"; expires=" + expire.toGMTString()+"; path=/" ;
 
if(versTest() == true||nineTest()==true){	
	sumW=window.open('rentbuyresults.php','Results','toolbar=no,location=no,directories=no,status=no,menubar=yes,scrollbars=yes,resizable=yes,width=550,height=300');
	if(navigator.appName.substring(0,8) == "Netscape"){
		sumW.focus();
	}
}
else{
	location.href='rentbuyresults.php';
}
 
}
else {}
}
 
//------------------------------------
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
 
//-----------------------------------
function StringArray(n)
{
this.length = n;
for (var i = 1; i <= n; i++)
this[i] = '' 
return this
}
 
//------------------------------------
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
 
//------------------------------------
/* TESTS IF VERSION IS MSIE 3.0 FOR MAC */
function msTest()
{
if(navigator.appName.substring(0,9) == "Microsoft" && (navigator.appVersion.substring(0,3) == "3.0" && navigator.appVersion.indexOf("Macintosh")>=0))
{return true;}
else
{return false;}
 
}
//------------------------------------
function nineTest()
{
if(navigator.appName.substring(0,9) == "Microsoft" && (navigator.appVersion.substring(0,3)=="3.0" || navigator.appVersion.indexOf("MSIE 3.0")>=0) && (navigator.appVersion.indexOf("Macintosh")==-1 || navigator.appVersion.indexOf("Windows 3.1")== -1)
)
{return true;}
else
{return false;}
}
//------------------------------------
function StringArray(n)
{
this.length = n;
for (var i = 1; i <= n; i++)
this[i] = '' 
return this
}
 
 
//------------------------------------
function browTest()
{
if((navigator.appVersion.substring(0,3) == 3.0 || navigator.appVersion.substring(0,3) == 4.0)&& navigator.appName.substring(0,8)=="Netscape"){
	return true;
}
else{
	return false;
}
}
 
//------------------------------------
function fixpro(n,q)
 
{
 
	if(versTest() == true){
		if(msTest()==true){
			var winNam='';
		}
		else{
			var slash = location.href.lastIndexOf("https://www.roarmortgage.com/")+1;
			var filNam = location.href.substring(0,slash);
			var winNam = filNam+'empty.html';
		}
fix = window.open(winNam,'FIX','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,width=300,height=100');
if(navigator.appName.substring(0,8) == "Netscape"){
			fix.focus();
		}
fix.document.write('<html><head><title>Calculators</title>');
fix.document.write('</head><body bgcolor=ffffff><form name=fixer>');
fix.document.write('<font size=2 face="Arial, Helvetica" color=306798>'+n+'<p>'+q+'<p>');
fix.document.write('<center><input type=button value=OK onClick=self.close()>');
fix.document.write('</center></form></body></html>');
fix.document.close();
}
else{bootbox.alert(n+'\n'+q)}
}