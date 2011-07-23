<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Refab.nl</title>
<style type="text/css">
<!--
#index_opgave {
	position:absolute;
	width:185px;
	height:214px;
	z-index:1;
	left: 13px;
	top: 195px;
}
#Layer1 {
	position:absolute;
	width:340px;
	height:156px;
	z-index:2;
	left: 231px;
	top: 5px;
}
#inhoud {
	position:absolute;
	width:531px;
	height:455px;
	z-index:3;
	left: 231px;
	top: 175px;
	visibility: inherit;
}
#Layer3 {
	position:absolute;
	width:155px;
	height:84px;
	z-index:4;
	left: 583px;
	top: 55px;
}
.style1 {
	color: #0040a1;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	color: #0040a1;
}
.style3 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #0040a1;
}
#Layer2 {	position:absolute;
	width:194px;
	height:23px;
	z-index:5;
	left: 13px;
	top: 457px;
}
-->
</style>
<script type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_nbGroup(event, grpName) { //v6.0
  var i,img,nbArr,args=MM_nbGroup.arguments;
  if (event == "init" && args.length > 2) {
    if ((img = MM_findObj(args[2])) != null && !img.MM_init) {
      img.MM_init = true; img.MM_up = args[3]; img.MM_dn = img.src;
      if ((nbArr = document[grpName]) == null) nbArr = document[grpName] = new Array();
      nbArr[nbArr.length] = img;
      for (i=4; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
        if (!img.MM_up) img.MM_up = img.src;
        img.src = img.MM_dn = args[i+1];
        nbArr[nbArr.length] = img;
    } }
  } else if (event == "over") {
    document.MM_nbOver = nbArr = new Array();
    for (i=1; i < args.length-1; i+=3) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = (img.MM_dn && args[i+2]) ? args[i+2] : ((args[i+1])? args[i+1] : img.MM_up);
      nbArr[nbArr.length] = img;
    }
  } else if (event == "out" ) {
    for (i=0; i < document.MM_nbOver.length; i++) {
      img = document.MM_nbOver[i]; img.src = (img.MM_dn) ? img.MM_dn : img.MM_up; }
  } else if (event == "down") {
    nbArr = document[grpName];
    if (nbArr)
      for (i=0; i < nbArr.length; i++) { img=nbArr[i]; img.src = img.MM_up; img.MM_dn = 0; }
    document[grpName] = nbArr = new Array();
    for (i=2; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = img.MM_dn = (args[i+1])? args[i+1] : img.MM_up;
      nbArr[nbArr.length] = img;
  } }
}
//-->
</script>
</head>

<body onload="MM_preloadImages('Buttons/home_over.png','Buttons/nieuwbouw_over.png','Buttons/aanbouw_over.png','Buttons/restauratie_over.png','Buttons/tuin_over.png','Buttons/interieur_over.png','Buttons/contact_over.png')">
<div id="index_opgave">
  <table border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td><a href="index.html" target="_top" onclick="MM_nbGroup('down','group1','Home','',1)" onmouseover="MM_nbGroup('over','Home','Buttons/home_over.png','',1)" onmouseout="MM_nbGroup('out')"><img src="Buttons/home_up.png" alt="" name="Home" width="190" height="20" border="0" id="Home" onload="" /></a></td>
    </tr>
    <tr>
      <td><a href="nieuwbouw.html" target="_top" onclick="MM_nbGroup('down','group1','Nieuwbouw','',1)" onmouseover="MM_nbGroup('over','Nieuwbouw','Buttons/nieuwbouw_over.png','',1)" onmouseout="MM_nbGroup('out')"><img src="Buttons/nieuwbouw_up.png" alt="" name="Nieuwbouw" border="0" id="Nieuwbouw" onload="" /></a></td>
    </tr>
    <tr>
      <td><a href="aanbouw.html" target="_top" onclick="MM_nbGroup('down','group1','Aanbouw','',1)" onmouseover="MM_nbGroup('over','Aanbouw','Buttons/aanbouw_over.png','',1)" onmouseout="MM_nbGroup('out')"><img src="Buttons/aanbouw_up.png" alt="" name="Aanbouw" border="0" id="Aanbouw" onload="" /></a></td>
    </tr>
    <tr>
      <td><a href="restauratie.html" target="_top" onclick="MM_nbGroup('down','group1','Restauratie','',1)" onmouseover="MM_nbGroup('over','Restauratie','Buttons/restauratie_over.png','',1)" onmouseout="MM_nbGroup('out')"><img src="Buttons/restauratie_up.png" alt="" name="Restauratie" border="0" id="Restauratie" onload="" /></a></td>
    </tr>
    <tr>
      <td><a href="tuin.html" target="_top" onclick="MM_nbGroup('down','group1','Tuin','',1)" onmouseover="MM_nbGroup('over','Tuin','Buttons/tuin_over.png','',1)" onmouseout="MM_nbGroup('out')"><img src="Buttons/tuin_up.png" alt="" name="Tuin" border="0" id="Tuin" onload="" /></a></td>
    </tr>
    <tr>
      <td><a href="interieur.html" target="_top" onclick="MM_nbGroup('down','group1','Interieur','',1)" onmouseover="MM_nbGroup('over','Interieur','Buttons/interieur_over.png','',1)" onmouseout="MM_nbGroup('out')"><img src="Buttons/interieur_up.png" alt="" name="Interieur" border="0" id="Interieur" onload="" /></a></td>
    </tr>
    <tr>
      <td><a href="contact.html" target="_top" onclick="MM_nbGroup('down','group1','Contact','',1)" onmouseover="MM_nbGroup('over','Contact','Buttons/contact_over.png','',1)" onmouseout="MM_nbGroup('out')"><img src="Buttons/contact_up.png" alt="" name="Contact" border="0" id="Contact" onload="" /></a></td>
    </tr>
  </table>
  <br />
</div>
<div id="Layer1">
  <div align="left"><a href="index.html"><img src="Logo/refab_1.jpg" alt="logo" width="322" height="136" border="0" /></a></div>
</div>
<div class="style2" id="inhoud" style="">
  <p><br />
    Voor vragen en/of opmerking kunt u het onderstaande webformulier invullen. Wij zullen zo spoedig mogelijk contact met u opnemen. </p>
  <p><?
$emailadres = "michel@refab.nl"; // wijzig dit indien niet uw email adres
$copyrigt = false; // Wijzig dit indien u een copyrigt wilt hebben
?>
<form method="POST" action="<? echo $PHP_SELF; ?>">
<table border="1" width="47%" cellspacing="0" cellpadding="0">
  <tr>
    <td width="28%">Naam</td>
    <td width="72%"><input type="text" name="naam" size="36"></td>
  </tr>
  <tr>
    <td width="28%">E-mail adres</td>
    <td width="72%"><input type="text" name="email" size="36"></td>
  </tr>
  <tr>
    <td width="28%">Onderwerp</td>
    <td width="72%"><input type="text" name="onderwerp" size="36"></td>
  </tr>
  <tr>
    <td width="28%" valign="top">Opmerking</td>
    <td width="72%" height="77" ><textarea rows="4" name="opmerking" cols="30"></textarea></td>
  </tr>
  <tr>
    <td width="100%" colspan="2">
      <p align="center"><input type="submit" value="Verzenden" name="verzenden"><input type="reset" value="Opnieuw" name="reset"></td>
  </tr>
</table>
</form>
<?
if($copyrigt == true)
{
    echo"©2003 <a href=\"mailto:info@refab.nl.nl\">Micra</a>";
}
$message = "".$_POST["naam"]." heeft een mailtje gestuurt via uw site.\n\n Als opmerking had hij: ".$_POST["opmerking"]."\n\nZijn email adres is: ".$_POST["email"].".\n\n Met vriendelijke groeten Refab.nl webformulier"; //bewerk dit naar je eigen message
if( isset($_POST[verzenden])){
    if($_POST["naam"] != "" && $_POST["email"] != "" && $_POST["onderwerp"] != "" && $_POST["opmerking"])
    {
        mail($emailadres,$_POST["onderwerp"],$message);
        echo"Mail is verstuurd en er zal zo snel mogenlijk gereageerd worden.";
    }
    else
    {
        echo"U heeft iets niet correct ingevult.";
    }
}
?> &nbsp;</p>
  <p>&nbsp;</p>
  <p></p>
</div>


<p>&nbsp;</p>
<div id="Layer3">
  <p class="style1">Oostzaan<br />
  Tel/Fax: 075-6844341<br />
  06-54 61 66 58<br />
  06-30 53 19 26<br />
  <a href="mailto:info@refab.nl">info@refab.nl</a></p>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<hr />
<div id="Layer2"><span class="style3">Website designed by <a href="mailto:michel.zondag@gmail.com">Michel Zondag &copy;</a></span></div>
<p>&nbsp;</p>
</body>
</html>
