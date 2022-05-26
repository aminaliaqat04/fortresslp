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



function compAmort(MORTGAGE,INRATE,PAYMENTt,FREQ){



var form=document.paycalc;

var MORTGAGE=form.mtgamnt.value;

var AMORT= form.amortperiod.value;

var INRATE= form.intrate.value/100;

var RATE= form.intrate.value;

var COMPOUND = 2;



if(FREQ==2){

var returnpay = PAYMENTt*2.0;}

if(FREQ==3){

var returnpay = PAYMENTt*2.0;}

if(FREQ==4){

var returnpay = PAYMENTt*4.0;}



var wholecom = findAmort(1,1,MORTGAGE,INRATE,COMPOUND,returnpay,FREQ);

var solvecom = findAmort(wholecom,.001,MORTGAGE,INRATE,COMPOUND,returnpay,FREQ);

if(FREQ==2){



form.semiMonth.value= roundPen(solvecom,2);



return form.semiMonth.value;

}

if(FREQ==3){



form.AccelBi.value= roundPen(solvecom,2);

return form.AccelBi.value;

}

if(FREQ==4){

form.AccelWeek.value= roundPen(solvecom,2);

return form.AccelWeek.value;

}

}



function findAmort(q,n,MORTGAGE,RATE,COMPOUND,PAYMENTAG,FREQ){

var compound = COMPOUND/12;

var yrRate = RATE/COMPOUND;

var rdefine    = Math.pow((1.0 + yrRate),compound)-1.0;

var newpay = 1000000000;



if (FREQ==2) {

var p=12;



}

if (FREQ==3) {

var p=13;



}

if (FREQ==4) {

var p=13;



}



for(i=q;newpay>=PAYMENTAG;i=i+n){



var monTime = i * p;

var comfact = Math.pow((1.0 + rdefine),monTime);

var newpay = (MORTGAGE*rdefine * comfact)/  (comfact - 1.0);

}

return i-n-n;

}


/** function compPay			*/

/**											*/

/** This function computes the mortgage payment */

/**											*/



function compPay(){

var form=document.paycalc;

var MORTGAGE=form.mtgamnt.value;

var AMORT= form.amortperiod.value;

var INRATE= form.intrate.value/100;



if (form.mtgamnt.value!="" && form.intrate.value!="" && form.amortperiod.value!="") {



var compound = 2/12;

var monTime = AMORT * 12;





var yrRate = INRATE/2;

var rdefine = Math.pow((1.0 + yrRate),compound)-1.0;

var comfact = Math.pow((1.0 + rdefine),monTime);


var PAYMNT = (MORTGAGE*rdefine * comfact)/  (comfact - 1.0);



		var rPAYMENT = PAYMNT;



		var rPAYMENT2 = PAYMNT/2.0;



		var rPAYMENT3 = PAYMNT/4.0;







	form.payMonth.value=Intl.NumberFormat().format(roundPen(rPAYMENT,2));

	form.paysemiMonth.value=Intl.NumberFormat().format(roundPen(rPAYMENT2,2));

	form.payAccelBi.value = Intl.NumberFormat().format(roundPen(rPAYMENT2,2));

	form.payAccelWeek.value = Intl.NumberFormat().format(roundPen(rPAYMENT3,2));



	form.Month.value= form.amortperiod.value*1.0;

	form.semiMonth.value= compAmort(MORTGAGE,INRATE,rPAYMENT2,2);

	form.AccelBi.value= compAmort(MORTGAGE,INRATE,rPAYMENT2,3);

	form.AccelWeek.value= compAmort(MORTGAGE,INRATE,rPAYMENT3,4);

	}

else {}

}



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



/** function roundPen */

/**						*/

/** This function rounds the payment to pennies */



function roundPen(n,num)

{

if(n > 0){

var nums = num*1.0;

if(num==2){

pennies = n*100;}

if(num==3){

pennies = n*1000;}



pennies = Math.round(pennies);

strPennies = "" + pennies;

len = strPennies.length;

return strPennies.substring(0, len - nums) + "." + strPennies.substring(len - nums, len);

}

else return 0;

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





/* VALIDATES ALL THE FIELDS AND CALCULATES VALUES TO BE ENTERED INTO THE TEXT BOXES AT THE BOTTOM OF THE PAGE WHEN THE USER CLICKS ON COMPUTE OR COMPUTE AMORTIZATION */

function compute(form){

var testNum=0;

if((document.paycalc.mtgamnt.value == null || document.paycalc.mtgamnt.value.length==0) || (document.paycalc.mtgamnt.value*1.0 < 10000 || document.paycalc.mtgamnt.value*1.0 > 1000000000)){

fixpro('Question 1: (Mortgage Amount)','Please enter a number between 10,000 and 1,000,000,000.');testNum=1; return;}

if((document.paycalc.intrate.value == null || document.paycalc.intrate.value.length == 0)|| (document.paycalc.intrate.value*1.0 < .1 || document.paycalc.intrate.value*1.0 > 25)){

fixpro('Question 2: (Mortgage Interest Rate)','Please enter a number between 0.1 and 25.0.');testNum=1; return;}

if((document.paycalc.amortperiod.value == null|| document.paycalc.amortperiod.value.length == 0)|| (document.paycalc.amortperiod.value*1.0 < 1|| document.paycalc.amortperiod.value*1.0 > 40) )

{fixpro('Question 3: (Amortization Period)','Please enter a number between 1 and 40.');testNum=1; return;}



if(testNum==0){compPay();}

}



function computeForm()

{

if(navigator.appVersion.substring(0,3) == 2.0 &&  navigator.appName.substring(0,8)=="Netscape" && navigator.appVersion.indexOf("Macintosh")>=0){

	setTimeout("compute(document.forms[0])",200);

}

else{compute(document.forms[0]);}

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

fix.document.write('<font size=2 face="tahoma,Arial, Helvetica" color=306798>'+n+'<p><FONT SIZE=2 FACE="tahoma,Arial, Helvetica">'+q+'<p>');

fix.document.write('<center><input type=button value=OK onClick=self.close()>');

fix.document.write('</center></form></body></html>');

fix.document.close();

}

else{bootbox.alert(n+'\n'+q)}

}