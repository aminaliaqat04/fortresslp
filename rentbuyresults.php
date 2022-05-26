
	<script language="javascript">
	<!--
	rb = 'rentbuydata';

	/* GET THE COOKIE REQUIRED FROM A LIST OF POSSIBLE COOKIES */
	function GetCookie (CookieName)
	{
	var cname = CookieName + "=";
	var i = 0;
	while (i < document.cookie.length) {
		var j = i + cname.length;
		if (document.cookie.substring(i, j) == cname){
			var leng = document.cookie.indexOf (";", j);
			if (leng == -1) leng = document.cookie.length;
				return unescape(document.cookie.substring(j, leng));
		}
		i = document.cookie.indexOf(" ", i) + 1;
		if (i == 0)
			break;
	}
	return " ";
	}


	/* PARSES THE COOKIE REQUIRED RETURNING THE REQUESTED VALUE - THE VALUE WHICH IS AT THE REQUESTED POSITION WITHIN THE SPECIFIED COOKIE */
	function parseCookie(cookieValue, citem)
	{
	var indx = 0, citemlen =0;
	if ( cookieValue == null )
		return " "/* DATA HAS EXPIRED OR NEVER ENTERED. */
	if ( cookieValue == " "  )
		return " "/* DATA HAS EXPIRED OR NEVER ENTERED. */
	for(var i=0; i < citem; i++) {
		indx = ( citem==0 )?0:cookieValue.indexOf("`", indx + 1)+1;
	}
	citemlen=(cookieValue.indexOf("`",indx)>0)
	?cookieValue.indexOf("`", indx+1):cookieValue.length;
	return cookieValue.substring(indx, citemlen);
	}

	function roundPen(n)
	{
		var val = 0;
		if(n > 0){
			pennies = n*100;
			pennies = Math.round(pennies);
			strPennies = "" + pennies;
			len = strPennies.length;

			val = strPennies.substring(0, len - 2) + "." + strPennies.substring(len -2, len);
		} else {
			val = 0;
		}
		return Intl.NumberFormat().format(val);
	}

	rbuyData = GetCookie(rb);

	//-->
	</script>

<div class="container">

<body bgcolor=ffffff link=306798 alink=306798 vlink=306798>

<script language="javascript">

var RATE = parseCookie(rbuyData,1)*1.0;
var downp = parseCookie(rbuyData,2)*1.0;
var tax = parseCookie(rbuyData,3)*1.0;
var incr = parseCookie(rbuyData,4)*1.0;
var monpay = parseCookie(rbuyData,5)*1.0;
var rent = parseCookie(rbuyData,6)*1.0;
var compare = parseCookie(rbuyData,7)*1.0;

var compound = 2/12;
var monTime = 25 * 12;
var yrRate = RATE/2;
var rdefine    = Math.pow((1.0 + yrRate),compound)-1.0;
var purchcompound = Math.pow((1.0 + rdefine),monTime);

var a1 = monpay - (tax/12);
var b1 = (0+((a1*(purchcompound-1.0))/rdefine))/purchcompound;
var c1 = downp+b1;
var res = (b1*(Math.pow((1.0 + rdefine),(12*compare)))) -  ((a1 * ((Math.pow((1.0 + rdefine),(12*compare))) - 1.0))/rdefine);
var d1 = b1-res;
var e1 = c1*((Math.pow((1+incr),compare))-1);
var f1 = monpay - rent;
var g1 = (downp+(f1*12))*(Math.pow((1.04),compare))-downp;
var h1 = d1+e1;

var decide =  (h1>g1) ? 'Buy' : 'Continue to Rent';
var words =  (h1>g1) ? 'greater' : 'less';

document.write('<center>');
if(self.name=="Results"){
	document.write('<table border=0 units=pixels width=100%><td>');
}
else{
	document.write('<table style="max-width: 600px" border=0><td>');
}
document.write('<font face="Arial, Helvetica"><h2>You Should <font color="#306798" >'+decide+'!</font></h2>');
document.write('<p><font size=3>It looks like you should <b><font color="#306798" >'+decide+'</font></b> based on the assumptions ');
document.write('you have given us.<p>Why? If you buy for <font color=306798>$'+roundPen(c1)+'</font> (the maximum you would qualify for) you will pay down your mortgage ');
document.write('of <font color=306798>$'+roundPen(b1));
document.write('</font> by <font color=306798>$'+roundPen(d1)+'</font> over '+compare+' year(s) with your Principal and Interest payments of <font color=306798>$'+roundPen(a1)+'</font> per month, plus your property ');

document.write('will increase in value by <font color=306798>$' +roundPen(e1)+'</font> for a total investment growth of ');

document.write('<font color=306798>$'+roundPen(h1)+'</font>.<p>This total is <font color=306798>'+words+'</font> than your total investment growth ');
document.write('from renting, which is approximately <font color=306798>$'+roundPen(g1));
document.write('</font> after '+compare+' year(s). This was calculated by growing the monthly savings from renting (<font color=306798>$'+roundPen(f1)+'</font>) plus your current downpayment');
document.write(' of <font color=306798>$'+roundPen(downp)+'</font> at a standard after-tax rate of 4% per annum.</font>');
document.write('<p class="notes">Calculations can vary by up to 10% on property type, interest rate type, and down payment amount<br>')
document.write('Contact your mortgage agent today to get an accurate estimate</p>')
document.write('<hr>');
document.write('</td><tr></table></center>');


document.write('<center><form>');

if(self.name=="Results"){
	document.write('<center><form>');
	document.write('<input type="button" value="Close" onClick="self.close()">');
	document.write('</form></center>');
}
else{
	document.write('<center>');
	document.write('<a href="javascript:history.back()"');
	document.write('onMouseOver="self.status=\'Back\';return true;">');
	document.write('<span class="label label-info back">Back</span>');
	document.write('</a></center>');
}
//-->
</script>

</div><!-- End of Container Div -->
