// JavaScript Document
function subsel()
{
	var s=document.getElementById("excat").value;
	if(s=="gate")
	{
		document.getElementById("sub").innerHTML="<label><font color='#CCCCCC'>SELECT STREME<sup>*</sup>:</font></label><br /><select style='width:400px;height:25px' id='streme' onchange='f1()' name='bbb' onblur='ctc()'><option value='0'></option><option value='cs'>COMPUTER</option><option value='me'>MECHANICAL</option>   <option value='ce'>CIVIL</option><option value='el'>ELECTRICAL</option><option value='ec'>E.C.</option><option value='ch'>CHEMICAL</option></select>";	
	}
}
function monthsel()
{
		var mn=document.getElementById("month").value;
		var ykr=document.getElementById("year").value;
		if(mn==02 && ykr!=0)
		{
			if(ykr%4!="0")
			{
		document.getElementById("datt").innerHTML="<select style='width:50px;height:25px' name='bday' id='btdy' onchange='f9()' ><option value='00' ></option><option value='01'>1</option><option value='02'>2</option><option value='03'>3</option><option value='04'>4</option><option value='05'>5</option><option value='06'>6</option><option value='07'>7</option><option value='08'>8</option><option value='09'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option><option value='21'>21</option><option value='22'>22</option><option value='23'>23</option><option value='24'>24</option><option value='25'>25</option><option value='26'>26</option><option value='27'>27</option><option value='28'>28</option></select>";
			}
			else if(ykr%4=="0")
		{
		document.getElementById("datt").innerHTML="<select style='width:50px;height:25px' name='bday' id='btdy' onchange='f9()'><option value='00'></option><option value='01'>1</option><option value='02'>2</option><option value='03'>3</option><option value='04'>4</option><option value='05'>5</option><option value='06'>6</option><option value='07'>7</option><option value='08'>8</option><option value='09'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option><option value='21'>21</option><option value='22'>22</option><option value='23'>23</option><option value='24'>24</option><option value='25'>25</option><option value='26'>26</option><option value='27'>27</option><option value='28'>28</option><option value='29'>29</option></select>";		
		}
		}
		else if(mn==01 || mn==03 || mn==05 || mn==07 || mn==08 || mn==10 || mn==12)
		{
		document.getElementById("datt").innerHTML="<select style='width:50px;height:25px' name='bday' id='btdy' onchange='f9()'><option value='00'></option><option value='01'>1</option><option value='02'>2</option><option value='03'>3</option><option value='04'>4</option><option value='05'>5</option><option value='06'>6</option><option value='07'>7</option><option value='08'>8</option><option value='09'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option>	<option value='18'>18</option><option value='19'>19</option><option value='20'>20</option><option value='21'>21</option><option value='22'>22</option><option value='23'>23</option><option value='24'>24</option><option value='25'>25</option><option value='26'>26</option><option value='27'>27</option><option value='28'>28</option><option value='29'>29</option><option value='30'>30</option><option value='31'>31</option></select>";
		}
		else
		{
		document.getElementById("datt").innerHTML="<select style='width:50px;height:25px' name='bday' id='btdy' onchange='f9()'><option value='00'></option><option value='01'>1</option><option value='02'>2</option><option value='03'>3</option><option value='04'>4</option><option value='05'>5</option><option value='06'>6</option><option value='07'>7</option><option value='08'>8</option><option value='09'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option><option value='21'>21</option><option value='22'>22</option><option value='23'>23</option><option value='24'>24</option><option value='25'>25</option><option value='26'>26</option><option value='27'>27</option><option value='28'>28</option><option value='29'>29</option><option value='30'>30</option></select>";	
		}
}

function f1()
{
	var i= document.getElementById("excat").value;
	var j= document.getElementById("schcat").value;
	var k= document.getElementById("streme").value;
	if(i=="gate" && j=="mockdrill" && k=="cs")
	{
		document.getElementById("sp1").innerHTML="<br /><br /><label><font color='#CCCCCC'>SELECT SUBJECT<sup>*</sup>:</font></label><br /><select style='width:400px;height:25px' id='dy1' name='sb' onblur='xcd()'><option value='0'></option><option value='gcs1'>WAD</option><option value='gcs2'>SOFTWARE ENGINEERING</option><option value='gcs3'>THEORY OF COMPUTATION</option><option value='gcs4'>SYSTEM PROGRAMMING</option><option value='gcs5'>WEB APPLICATION</option><option value='gcs6'>DIGITAL LOGIC</option><option value='gcs7'>MICROPROCESSORS</option><option value='gcs8'>COMPUTER ARCHITECTURE</option><option value='gcs9'>DATASTRUCTURES & ALGORITHMS</option><option value='gcs10'>COMPUTER NETWORKS</option><option value='gcs11'>DBMS</option><option value='gc0'>MATHEMATICS</option><option value='gc1'>NUMERICAL APTITUDE</option><option value='gc3'>VERBAL APTITUDE</option></select><br />";
		document.getElementById("sp2").innerHTML="<br /><br /><label><font color='#CCCCCC'>SELECT WEIGHT<sup>*</sup>:</font></label><br /><select style='width:400px;height:25px' id='dy2' name='qw' onblur='xc()'><option value='0'></option><option value='1'>1 mark each</option><option value='2'>2 mark each</option><option value='3'>3 mark each</option><option value='4'>4 mark each</option></select><br />";
	}
	else if(i=="gate" && j=="mockdrill" && k=="me")
	{
		document.getElementById("sp1").innerHTML="<br /><br /><label><font color='#CCCCCC'>SELECT SUBJECT<sup>*</sup>:</font></label><br /><select style='width:400px;height:25px' id='dy1' name='sb' onblur='xcd()'><option value='0'></option><option value='gme1'>ENGINEERING MECHANICS</option><option value='gme2'>STRENGTH OF MATERIALS</option><option value='gme3'>THEORY OF MACHINES</option><option value='gme4'>VIBRATIONS</option><option value='gme5'>DESIGN</option><option value='gme6'>FLUID MECHANICS AND THERMAL SCIENCES</option><option value='gme7'>MANUFACTURING AND INDUSTRIAL ENGINEERING</option><option value='gc0'>MATHEMATICS</option><option value='gc1'>NUMERICAL APTITUDE</option><option value='gc3'>VERBAL APTITUDE</option></select><br />";
		document.getElementById("sp2").innerHTML="<br /><br /><label><font color='#CCCCCC'>SELECT WEIGHT<sup>*</sup>:</font></label><br /><select style='width:400px;height:25px' id='dy2' name='qw' onblur='xc()'><option value='0'></option><option value='1'>1 mark each</option><option value='2'>2 mark each</option><option value='3'>3 mark each</option><option value='4'>4 mark each</option></select><br />";
	}
	else if(i=="gate" && j=="mockdrill" && k=="ce")
	{
		document.getElementById("sp1").innerHTML="<br /><br /><label><font color='#CCCCCC'>SELECT SUBJECT<sup>*</sup>:</font></label><br /><select style='width:400px;height:25px' id='dy1' name='sb' onblur='xcd()'><option value='0'></option><option value='gce1'>STRUCTURAL ENGINEERING </option><option value='gce2'>GEOTECHNICAL ENGINEERING </option><option value='gce3'>WATER RESOURCES ENGINEERING </option><option value='gce4'>ENVIRONMENTAL ENGINEERING </option><option value='gce5'>TRANSPORTATION ENGINEERING </option><option value='gce6'>SURVEYING</option><option value='gc0'>MATHEMATICS</option><option value='gc1'>NUMERICAL APTITUDE</option><option value='gc3'>VERBAL APTITUDE</option></select><br />";
		document.getElementById("sp2").innerHTML="<br /><br /><label><font color='#CCCCCC'>SELECT WEIGHT<sup>*</sup>:</font></label><br /><select style='width:400px;height:25px' id='dy2' name='qw' onblur='xc()'><option value='0'></option><option value='1'>1 mark each</option><option value='2'>2 mark each</option><option value='3'>3 mark each</option><option value='4'>4 mark each</option></select><br />";
	}
	else if(i=="gate" && j=="mockdrill" && k=="el")
	{
		document.getElementById("sp1").innerHTML="<br /><br /><label><font color='#CCCCCC'>SELECT SUBJECT<sup>*</sup>:</font></label><br /><select style='width:400px;height:25px' id='dy1' name='sb' onblur='xcd()'><option value='0'></option><option value='gel1'>ELECTRIC CIRCUITS AND FIELDS</option><option value='gel2'>SIGNALS AND SYSTEMS</option><option value='gel3'>ELECTRICAL MACHINES</option><option value='gel4'>POWER SYSTEMS</option><option value='gel5'>CONTROL SYSTEMS</option><option value='gel6'>ELECTRICAL AND ELECTRONIC MEASUREMENTS </option><option value='gel7'>ANALOG AND DIGITAL ELECTRONICS</option><option value='gel8'>POWER ELECTRONICS AND DRIVES</option><option value='gc0'>MATHEMATICS</option><option value='gc1'>NUMERICAL APTITUDE</option><option value='gc3'>VERBAL APTITUDE</option></select><br />";
		document.getElementById("sp2").innerHTML="<br /><br /><label><font color='#CCCCCC'>SELECT WEIGHT<sup>*</sup>:</font></label><br /><select style='width:400px;height:25px' id='dy2' name='qw' onblur='xc()'><option value='0'></option><option value='1'>1 mark each</option><option value='2'>2 mark each</option><option value='3'>3 mark each</option><option value='4'>4 mark each</option></select><br />";
	}
	else if(i=="gate" && j=="mockdrill" && k=="ec")
	{
		document.getElementById("sp1").innerHTML="<br /><br /><label><font color='#CCCCCC'>SELECT SUBJECT<sup>*</sup>:</font></label><br /><select style='width:400px;height:25px' id='dy1' name='sb' onblur='xcd()'><option value='0'></option><option value='gec1'>NETWORKS</option><option value='gec2'>ELECTRONIC DEVICES</option><option value='gec3'>ANALOG CIRCUITS</option><option value='gec4'>DIGITAL CIRCUITS</option><option value='gec5'>SIGNALS AND SYSTEMS</option><option value='gec6'>CONTROL SYSTEMS</option><option value='gec7'>COMMUNICATIONS</option><option value='gec8'>ELECTROMAGNETICS</option><option value='gc0'>MATHEMATICS</option><option value='gc1'>NUMERICAL APTITUDE</option><option value='gc3'>VERBAL APTITUDE</option></select><br />";
		document.getElementById("sp2").innerHTML="<br /><br /><label><font color='#CCCCCC'>SELECT WEIGHT<sup>*</sup>:</font></label><br /><select style='width:400px;height:25px' id='dy2' name='qw' onblur='xc()'><option value='0'></option><option value='1'>1 mark each</option><option value='2'>2 mark each</option><option value='3'>3 mark each</option><option value='4'>4 mark each</option></select><br />";
	}
	else if(i=="gate" && j=="mockdrill" && k=="ch")
	{
		document.getElementById("sp1").innerHTML="<br /><br /><label><font color='#CCCCCC'>SELECT SUBJECT<sup>*</sup>:</font></label><br /><select style='width:400px;height:25px' id='dy1' name='sb' onblur='xcd()'><option value='0'></option><option value='gch1'>PROCESS CALCULATIONS AND THERMODYNAMICS</option><option value='gch2'>FLUID MECHANICS AND MECHANICAL OPERATIONS</option><option value='gch3'>HEAT TRANSFER</option><option value='gch4'>MASS TRANSFER</option><option value='gch5'>CHEMICAL REACTION ENGINEERING</option><option value='gch6'>INSTRUMENTATION AND PROCESS CONTROL</option><option value='gch7'>PLANT DESIGN AND ECONOMICS</option><option value='gch8'>CHEMICAL TECHNOLOGY</option><option value='gc0'>MATHEMATICS</option><option value='gc1'>NUMERICAL APTITUDE</option><option value='gc3'>VERBAL APTITUDE</option></select><br />";
		document.getElementById("sp2").innerHTML="<br /><br /><label><font color='#CCCCCC'>SELECT WEIGHT<sup>*</sup>:</font></label><br /><select style='width:400px;height:25px' id='dy2' name='qw' onblur='xc()'><option value='0'></option><option value='1'>1 mark each</option><option value='2'>2 mark each</option><option value='3'>3 mark each</option><option value='4'>4 mark each</option></select><br />";
	}
	else if(i=="gate" && j=="fullcourse")
	{
			document.getElementById("sp1").innerHTML="";
			document.getElementById("sp2").innerHTML="";
	}
}
function f2()
{
	var v1=document.getElementById("fnm").value;
	if(v1.length<=2)
	{
		document.getElementById("fn").innerHTML="MINIMUM 3 CHARACTERS NEEDED";
		document.getElementById("fn1").innerHTML="";
	}
	else
	{
	document.getElementById("fn").innerHTML="";	
	}
}
function f3()
{
	var v2=document.getElementById("lnm").value;
	if(v2.length<=2)
	{
		document.getElementById("ln").innerHTML="MINIMUM 3 CHARACTERS NEEDED";
		document.getElementById("ln1").innerHTML="";
	}
	else
	{
	document.getElementById("ln").innerHTML="";	
	}
}
function f4()
{
	var v3=document.getElementById("clg").value;
	if(v3.length<3)
	{
		document.getElementById("cg").innerHTML="MINIMUM 3 CHARACTERS NEEDED";
		document.getElementById("cg1").innerHTML="";
	}
	else
	{
	document.getElementById("cg").innerHTML="";	
	}
}
function f5()
{
	var v4=document.getElementById("unm").value;
	if(v4.length<6)
	{
		document.getElementById("un").innerHTML="MINIMUM 6 CHARACTERS NEEDED";
		document.getElementById("un1").innerHTML="";
	}
	else
	{
	document.getElementById("un").innerHTML="";	
	}
}
function f6()
{
	var v5=document.getElementById("pswd").value;
	if(v5.length<6)
	{
		document.getElementById("psw").innerHTML="MINIMUM 6 CHARACTERS NEEDED";
		document.getElementById("psw1").innerHTML="";
	}
	else
	{
	document.getElementById("psw").innerHTML="";	
	}
}
function f7()
{
	var v6=document.getElementById("pswd").value;
	var v7=document.getElementById("cnfpswd").value;
	if(v7!=v6)
	{
		document.getElementById("cnfpsw").innerHTML="PASSWORDS DO NOT MATCH PLEASE REENTER";
		document.getElementById("cnfpsw1").innerHTML="";
	}
	else
	{
	document.getElementById("cnfpsw").innerHTML="";	
	}
}
function f8()
{
	var v8=document.getElementById("month").selectedIndex;
	if(v8==00)
	{
		document.getElementById("bmn").innerHTML="INVALID";
		document.getElementById("bmn1").innerHTML="";
	}
	else
	{
		document.getElementById("bmn").innerHTML="";
	}
}
function f9()
{
	var v9=document.getElementById("btdy").selectedIndex;
	if(v9==00)
	{
		document.getElementById("bdt").innerHTML="INVALID";
		document.getElementById("btd1").innerHTML="";
	}
	else
	{
		document.getElementById("bdt").innerHTML="";
	}
}
function f10()
{
	var v10=document.getElementById("year").selectedIndex;
	if(v10==0)
	{
		document.getElementById("byr").innerHTML="INVALID";
		document.getElementById("byr1").innerHTML="";
	}
	else
	{
		document.getElementById("byr").innerHTML="";
	}
}
function f11()
{
	var v11=document.getElementById("gen").selectedIndex;
	if(v11==0)
	{
		document.getElementById("gndr").innerHTML="INVALID";
		document.getElementById("gndr1").innerHTML="";
	}
	else
	{
		document.getElementById("gndr").innerHTML="";
	}
}
function f12()
{
	var u3 = document.getElementById("eid").value;
if(u3.length<16)
{
	document.getElementById("mail").innerHTML="MINIMUM 16 CHARACTERS NEEDED";
	document.getElementById("mail1").innerHTML="";
}
else if(u3.indexOf("@")>u3.indexOf("."))
{
	document.getElementById("mail").innerHTML="INVALID";
	document.getElementById("mail1").innerHTML="";
}
else
{
	document.getElementById("mail").innerHTML="";
}
}
function f13()
{
var u10= document.getElementById("mob").value;
if(u10.length!=13)
{
	document.getElementById("mno").innerHTML="NOT LESS THEN 10 DIGITS";
	document.getElementById("mno1").innerHTML="";
}
else if(u10.indexOf("+")!=0)
{
	document.getElementById("mno").innerHTML="INVALID";
	document.getElementById("mno1").innerHTML="";
}
else
{
	document.getElementById("mno").innerHTML="";
}
}
function f14()
{
	var v=document.getElementById("con").value;
	if(v.length<3)
	{
		document.getElementById("ctry").innerHTML="MINIMUM 3 CHARACTERS NEEDED";
		document.getElementById("ctry1").innerHTML="";
	}
	else
	{
	document.getElementById("ctry").innerHTML="";	
	}
	
}
function f15()
{
	var vh=document.getElementById("st").value;
	if(vh.length<3)
	{
		document.getElementById("stt").innerHTML="MINIMUM 3 CHARACTERS NEEDED";
		document.getElementById("stt1").innerHTML="";
	}
	else
	{
	document.getElementById("stt").innerHTML="";	
	}
}
function f16()
{
	var vk=document.getElementById("ct").value;
	if(vk.length<3)
	{
		document.getElementById("cty").innerHTML="MINIMUM 3 CHARACTERS NEEDED";
		document.getElementById("cty1").innerHTML="";
	}
	else
	{
	document.getElementById("cty").innerHTML="";	
	}
}
function susel()
{
	var s=document.getElementById("ex1").value;
	if(s=="gate")
	{
		document.getElementById("streme").innerHTML="<label><font color='#CCCCCC'>SELECT STREME<sup>*</sup>:</font></label><br /><select style='width:400px;height:25px' id='stm' onblur='f17()' name='strm'><option value='0'></option><option value='cs'>COMPUTER</option><option value='me'>MECHANICAL</option>   <option value='ce'>CIVIL</option><option value='el'>ELECTRICAL</option><option value='ec'>E.C.</option><option value='ch'>CHEMICAL</option></select>";	
	document.getElementById("catg").innerHTML="";	
	}
	else if(s=="0")
	{
		document.getElementById("catg").innerHTML="SELECT VALID CATEGORY";	
	}
}
function f17()
{
	var s1=document.getElementById("ex1").value;	
	var s2=document.getElementById("stm").value;
	
	if(s1=="gate" && s2=="cs")
	{
			document.getElementById("sp1").innerHTML="<br /><br /><label><font color='#CCCCCC'>SELECT SUBJECT<sup>*</sup>:</font></label><br /><select style='width:400px;height:25px' id='dy1' onblur='f24()' name='brsub'><option value='0'></option><option value='gcs1'>WAD</option><option value='gcs2'>SOFTWARE ENGINEERING</option><option value='gcs3'>THEORY OF COMPUTATION</option><option value='gcs4'>SYSTEM PROGRAMMING</option><option value='gcs5'>WEB APPLICATION</option><option value='gcs6'>DIGITAL LOGIC</option><option value='gcs7'>MICROPROCESSORS</option><option value='gcs8'>COMPUTER ARCHITECTURE</option><option value='gcs9'>DATASTRUCTURES & ALGORITHMS</option><option value='gcs10'>COMPUTER NETWORKS</option><option value='gcs11'>DBMS</option><option value='gc0'>MATHEMATICS</option><option value='gc1'>NUMERICAL APTITUDE</option><option value='gc3'>VERBAL APTITUDE</option></select><br />";
		document.getElementById("sp2").innerHTML="<br /><br /><label><font color='#CCCCCC'>SELECT WEIGHT<sup>*</sup>:</font></label><br /><select style='width:400px;height:25px' id='dy2' onblur='f25()' name='brwt'><option value='0'></option><option value='1'>1 mark each</option><option value='2'>2 mark each</option><option value='3'>3 mark each</option><option value='4'>4 mark each</option></select><br />";
	document.getElementById("spx").innerHTML="";
	}
	else if(s1=="gate" && s2=="me")
	{
			document.getElementById("sp1").innerHTML="<br /><br /><label><font color='#CCCCCC'>SELECT SUBJECT<sup>*</sup>:</font></label><br /><select style='width:400px;height:25px' id='dy1' onblur='f24()' name='brsub'><option value='0'></option><option value='gme1'>ENGINEERING MECHANICS</option><option value='gme2'>STRENGTH OF MATERIALS</option><option value='gme3'>THEORY OF MACHINES</option><option value='gme4'>VIBRATIONS</option><option value='gme5'>DESIGN</option><option value='gme6'>FLUID MECHANICS AND THERMAL SCIENCES</option><option value='gme7'>MANUFACTURING AND INDUSTRIAL ENGINEERING</option><option value='gc0'>MATHEMATICS</option><option value='gc1'>NUMERICAL APTITUDE</option><option value='gc3'>VERBAL APTITUDE</option></select><br />";
		document.getElementById("sp2").innerHTML="<br /><br /><label><font color='#CCCCCC'>SELECT WEIGHT<sup>*</sup>:</font></label><br /><select style='width:400px;height:25px' id='dy2' onblur='f25()' name='brwt'><option value='0'></option><option value='1'>1 mark each</option><option value='2'>2 mark each</option><option value='3'>3 mark each</option><option value='4'>4 mark each</option></select><br />";	
	document.getElementById("spx").innerHTML="";
	}
	else if(s1=="gate" && s2=="ce")
	{
	document.getElementById("sp1").innerHTML="<br /><br /><label><font color='#CCCCCC'>SELECT SUBJECT<sup>*</sup>:</font></label><br /><select style='width:400px;height:25px' id='dy1' onblur='f24()' name='brsub'><option value='0'></option><option value='gce1'>STRUCTURAL ENGINEERING </option><option value='gce2'>GEOTECHNICAL ENGINEERING </option><option value='gce3'>WATER RESOURCES ENGINEERING </option><option value='gce4'>ENVIRONMENTAL ENGINEERING </option><option value='gce5'>TRANSPORTATION ENGINEERING </option><option value='gce6'>SURVEYING</option><option value='gc0'>MATHEMATICS</option><option value='gc1'>NUMERICAL APTITUDE</option><option value='gc3'>VERBAL APTITUDE</option></select><br />";
		document.getElementById("sp2").innerHTML="<br /><br /><label><font color='#CCCCCC'>SELECT WEIGHT<sup>*</sup>:</font></label><br /><select style='width:400px;height:25px' id='dy2' onblur='f25()' name='brwt'><option value='0'></option><option value='1'>1 mark each</option><option value='2'>2 mark each</option><option value='3'>3 mark each</option><option value='4'>4 mark each</option></select><br />";	
	document.getElementById("spx").innerHTML="";
	}
	else if(s1=="gate" && s2=="el")
	{
		document.getElementById("sp1").innerHTML="<br /><br /><label><font color='#CCCCCC'>SELECT SUBJECT<sup>*</sup>:</font></label><br /><select style='width:400px;height:25px' id='dy1' onblur='f24()' name='brsub'><option value='0'></option><option value='gel1'>ELECTRIC CIRCUITS AND FIELDS</option><option value='gel2'>SIGNALS AND SYSTEMS</option><option value='gel3'>ELECTRICAL MACHINES</option><option value='gel4'>POWER SYSTEMS</option><option value='gel5'>CONTROL SYSTEMS</option><option value='gel6'>ELECTRICAL AND ELECTRONIC MEASUREMENTS </option><option value='gel7'>ANALOG AND DIGITAL ELECTRONICS</option><option value='gel8'>POWER ELECTRONICS AND DRIVES</option><option value='gc0'>MATHEMATICS</option><option value='gc1'>NUMERICAL APTITUDE</option><option value='gc3'>VERBAL APTITUDE</option></select><br />";
		document.getElementById("sp2").innerHTML="<br /><br /><label><font color='#CCCCCC'>SELECT WEIGHT<sup>*</sup>:</font></label><br /><select style='width:400px;height:25px' id='dy2' onblur='f25()' name='brwt'><option value='0'></option><option value='1'>1 mark each</option><option value='2'>2 mark each</option><option value='3'>3 mark each</option><option value='4'>4 mark each</option></select><br />";
	document.getElementById("spx").innerHTML="";
	}
	else if(s1=="gate" && s2=="ec")
	{
		document.getElementById("sp1").innerHTML="<br /><br /><label><font color='#CCCCCC'>SELECT SUBJECT<sup>*</sup>:</font></label><br /><select style='width:400px;height:25px' id='dy1' onblur='f24()' name='brsub'><option value='0'></option><option value='gec1'>NETWORKS</option><option value='gec2'>ELECTRONIC DEVICES</option><option value='gec3'>ANALOG CIRCUITS</option><option value='gec4'>DIGITAL CIRCUITS</option><option value='gec5'>SIGNALS AND SYSTEMS</option><option value='gec6'>CONTROL SYSTEMS</option><option value='gec7'>COMMUNICATIONS</option><option value='gec8'>ELECTROMAGNETICS</option><option value='gc0'>MATHEMATICS</option><option value='gc1'>NUMERICAL APTITUDE</option><option value='gc3'>VERBAL APTITUDE</option></select><br />";
		document.getElementById("sp2").innerHTML="<br /><br /><label><font color='#CCCCCC'>SELECT WEIGHT<sup>*</sup>:</font></label><br /><select style='width:400px;height:25px' id='dy2' onblur='f25()' name='brwt'><option value='0'></option><option value='1'>1 mark each</option><option value='2'>2 mark each</option><option value='3'>3 mark each</option><option value='4'>4 mark each</option></select><br />";
	document.getElementById("spx").innerHTML="";
	}
	else if(s1=="gate" && s2=="ch")
	{
		document.getElementById("sp1").innerHTML="<br /><br /><label><font color='#CCCCCC'>SELECT SUBJECT<sup>*</sup>:</font></label><br /><select style='width:400px;height:25px' id='dy1' onblur='f24()' name='brsub'><option value='0'></option><option value='gch1'>PROCESS CALCULATIONS AND THERMODYNAMICS</option><option value='gch2'>FLUID MECHANICS AND MECHANICAL OPERATIONS</option><option value='gch3'>HEAT TRANSFER</option><option value='gch4'>MASS TRANSFER</option><option value='gch5'>CHEMICAL REACTION ENGINEERING</option><option value='gch6'>INSTRUMENTATION AND PROCESS CONTROL</option><option value='gch7'>PLANT DESIGN AND ECONOMICS</option><option value='gch8'>CHEMICAL TECHNOLOGY</option><option value='gc0'>MATHEMATICS</option><option value='gc1'>NUMERICAL APTITUDE</option><option value='gc3'>VERBAL APTITUDE</option></select><br />";
		document.getElementById("sp2").innerHTML="<br /><br /><label><font color='#CCCCCC'>SELECT WEIGHT<sup>*</sup>:</font></label><br /><select style='width:400px;height:25px' id='dy2' onblur='f25()' name='brwt'><option value='0'></option><option value='1'>1 mark each</option><option value='2'>2 mark each</option><option value='3'>3 mark each</option><option value='4'>4 mark each</option></select><br />";
		document.getElementById("spx").innerHTML="";
	}
	else if(s2=="0")
	{
		document.getElementById("spx").innerHTML="INVALID STREME";		
	}
}
function f19()
{
var hx=document.getElementById("que").value;
if(hx<6)
{
	document.getElementById("que1").innerHTML="MINIMUM 6 CHARACTERS NEEDED";	
}
else if(hx>239)
{
		document.getElementById("que1").innerHTML="LIMIT EXCEEDED";
}
else
{
	document.getElementById("que1").innerHTML="";	
}
}
function f20()
{
var ix=document.getElementById("a1").value;
if(ix<6)
{
	document.getElementById("a11").innerHTML="MINIMUM 6 CHARACTERS NEEDED";	
}
else if(ix>239)
{
		document.getElementById("a11").innerHTML="LIMIT EXCEEDED";
}
else
{
	document.getElementById("a11").innerHTML="";	
}
}
function f21()
{
var jx=document.getElementById("a2").value;
if(jx<6)
{
	document.getElementById("a22").innerHTML="MINIMUM 6 CHARACTERS NEEDED";	
}
else if(jx>239)
{
		document.getElementById("a22").innerHTML="LIMIT EXCEEDED";
}
else
{
	document.getElementById("a22").innerHTML="";	
}
}
function f22()
{
var kx=document.getElementById("a3").value;
if(kx<6)
{
	document.getElementById("a33").innerHTML="MINIMUM 6 CHARACTERS NEEDED";	
}
else if(kx>239)
{
		document.getElementById("a33").innerHTML="LIMIT EXCEEDED";
}
else
{
	document.getElementById("a33").innerHTML="";	
}
}
function f23()
{
var lx=document.getElementById("a4").value;
if(lx<6)
{
	document.getElementById("a44").innerHTML="MINIMUM 6 CHARACTERS NEEDED";	
}
else if(lx>239)
{
		document.getElementById("a44").innerHTML="LIMIT EXCEEDED";
}
else
{
	document.getElementById("a44").innerHTML="";	
}
}
function f24()
{
	var vl=document.getElementById("dy1").value;
	if(vl==0)
	{
		document.getElementById("spx1").innerHTML="INVALID SUBJECT CHOICE";	
	}
	else
	{
		document.getElementById("spx1").innerHTML="";	
	}
}
function ansel()
{
	var vs=document.getElementById("cans").value;
	if(vs==0)
	{
		document.getElementById("anx").innerHTML="INVALID CHOICE";	
	}
	else
	{
	
		document.getElementById("anx").innerHTML="";	
	
	}
}
function f25()
{
	var vl1=document.getElementById("dy2").value;
	if(vl1==0)
	{
		document.getElementById("spx2").innerHTML="INVALID WEIGHT CHOICE";	
	}
	else
	{
		document.getElementById("spx2").innerHTML="";	
	}
}
function incimg()
{
	var im = document.getElementById("imyn").value;
	if(im=="0")
	{
	document.getElementById("imm").innerHTML="INVALID";	
	}
	else if(im=="yes")
	{
		document.getElementById("imm").innerHTML="<input type='file' name='file' id='file' /><br />";
	}
	else if(im=="no")
	{
		document.getElementById("imm").innerHTML="OK NO ISSUE!!";
	}
}
function cct()
{
	var x=document.getElementById("excat").value;
	if(x=="0")
	{
		document.getElementById("cct1").innerHTML="INVALID EXAM CATEGORY";	
	}
	else
	{
		document.getElementById("cct1").innerHTML=" ";	
	}
}
function ccd()
{
	var x=document.getElementById("schcat").value;
	if(x=="0")
	{
		document.getElementById("ccd1").innerHTML="INVALID EXAM TYPE";	
	}
	else
	{
		document.getElementById("ccd1").innerHTML=" ";	
	}
}
function ctc()
{
	var x=document.getElementById("streme").value;
	if(x=="0")
	{
		document.getElementById("ctc1").innerHTML="INVALID STREME";	
	}
	else
	{
		document.getElementById("ctc1").innerHTML=" ";	
	}
}
function xcd()
{
	var x=document.getElementById("dy1").value;
	if(x=="0")
	{
		document.getElementById("xcd1").innerHTML="INVALID SUBJECT";	
	}
	else
	{
		document.getElementById("xcd1").innerHTML=" ";	
	}
}
function xc()
{
	var x=document.getElementById("dy2").value;
	if(x=="0")
	{
		document.getElementById("xc1").innerHTML="INVALID WEIGHT";	
	}
	else
	{
		document.getElementById("xc1").innerHTML=" ";	
	}
}
function ckrd1()
{
	
		document.getElementById("rr2").checked=false;
		document.getElementById("rr3").checked=false;
		document.getElementById("rr4").checked=false;
	
}
function ckrd2()
{
	
		document.getElementById("rr1").checked=false;
		document.getElementById("rr3").checked=false;
		document.getElementById("rr4").checked=false;
	
}
function ckrd3()
{
	
		document.getElementById("rr1").checked=false;
		document.getElementById("rr2").checked=false;
		document.getElementById("rr4").checked=false;
	
}
function ckrd4()
{
	
		document.getElementById("rr1").checked=false;
		document.getElementById("rr2").checked=false;
		document.getElementById("rr3").checked=false;
	
}
function ac1()
{
	document.getElementById("fm1").action="back.php";	
}
function ac2()
{
	document.getElementById("fm1").action="next.php";	
}
function ac3()
{
	document.getElementById("fm1").action="exsubmit.php";	
}
function ac4()
{
	document.getElementById("fm1").action="markreview.php";	
}
function ac5()
{
	document.getElementById("fm1").action="unmarkreview.php";	
}