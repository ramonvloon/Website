<? session_start(); ?>
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
	height:238px;
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
.style3 {font-size: 10px}
.style4 {	font-family: Arial, Helvetica, sans-serif;
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
</script>

<script type="text/javascript">
function goImgWin(myImage,myWidth,myHeight,origLeft,origTop) {
myHeight += 24;
myWidth += 24;
TheImgWin = window.open(myImage,'image','height=' +
myHeight + ',width=' + myWidth +
',toolbar=no,directories=no,status=no,' +
'menubar=no,scrollbars=no,resizable=no');
TheImgWin.moveTo(origLeft,origTop);
TheImgWin.focus();
}
</script>
</head>
<body onload="MM_preloadImages('Buttons/home_over.png','Buttons/nieuwbouw_over.png','Buttons/aanbouw_over.png','Buttons/restauratie_over.png','Buttons/tuin_over.png','Buttons/interieur_over.png','Buttons/contact_over.png', 'Buttons/logout_over.png')">
<div id="index_opgave">
  <table border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td><a href="index.php" target="_top" onclick="MM_nbGroup('down','group1','Home','',1)" onmouseover="MM_nbGroup('over','Home','Buttons/home_over.png','',1)" onmouseout="MM_nbGroup('out')"><img src="Buttons/home_up.png" alt="" name="Home" width="190" height="20" border="0" id="Home" onload="" /></a></td>
    </tr>
    <tr>
      <td><a href="nieuwbouw.php" target="_top" onClick="MM_nbGroup('down','group1','Nieuwbouw','',1)" onMouseOver="MM_nbGroup('over','Nieuwbouw','Buttons/nieuwbouw_over.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="Nieuwbouw" src="Buttons/nieuwbouw_up.png" border="0" alt="" onLoad="" /></a></td>
    </tr>
    <tr>
      <td><a href="aanbouw.php" target="_top" onClick="MM_nbGroup('down','group1','Aanbouw','',1)" onMouseOver="MM_nbGroup('over','Aanbouw','Buttons/aanbouw_over.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="Aanbouw" src="Buttons/aanbouw_up.png" border="0" alt="" onLoad="" /></a></td>
    </tr>
    <tr>
      <td><a href="restauratie.php" target="_top" onClick="MM_nbGroup('down','group1','Restauratie','',1)" onMouseOver="MM_nbGroup('over','Restauratie','Buttons/restauratie_over.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="Restauratie" src="Buttons/restauratie_up.png" border="0" alt="" onLoad="" /></a></td>
    </tr>
    <tr>
      <td><a href="tuin.php" target="_top" onClick="MM_nbGroup('down','group1','Tuin','',1)" onMouseOver="MM_nbGroup('over','Tuin','Buttons/tuin_over.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="Tuin" src="Buttons/tuin_up.png" border="0" alt="" onLoad="" /></a></td>
    </tr>
    <tr>
      <td><a href="interieur.php" target="_top" onClick="MM_nbGroup('down','group1','Interieur','',1)" onMouseOver="MM_nbGroup('over','Interieur','Buttons/interieur_over.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="Interieur" src="Buttons/interieur_up.png" border="0" alt="" onLoad="" /></a></td>
    </tr>
    <tr>
      <td><a href="contact.php" target="_top" onClick="MM_nbGroup('down','group1','Contact','',1)" onMouseOver="MM_nbGroup('over','Contact','Buttons/contact_over.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="Contact" src="Buttons/contact_up.png" border="0" alt="" onLoad="" /></a></td>
    </tr>
	<? if (!isset($_SESSION['username'])){ ?>
	<tr>
      <td><a href="login.php" target="_top" onclick="MM_nbGroup('down','group1','Login','',1)" onmouseover="MM_nbGroup('over','Login','Buttons/login_over.png','',1)" onmouseout="MM_nbGroup('out')"><img src="Buttons/login_up.png" alt="" name="Login" border="0" id="Login" onload="" /></a></td>
    </tr> 
	<? }else{ ?>
	<tr>
      <td><a href="logout.php" target="_top" onclick="MM_nbGroup('down','group1','Logout','',1)" onmouseover="MM_nbGroup('over','Logout','Buttons/logout_over.png','',1)" onmouseout="MM_nbGroup('out')"><img src="Buttons/logout_up.png" alt="" name="Logout" border="0" id="Logout" onload="" /></a></td>
    </tr> 
	<? } ?>
  </table>
  <br />
</div>
<div id="Layer1">
  <div align="left"><a href="index.php"><img src="Logo/refab_1.jpg" alt="logo" width="322" height="136" border="0" /></a></div>
</div>
<div class="style2" id="inhoud" style="">
  <p align="justify"><br />
  <strong>Tuin aanleg </strong></p>
  <p align="left"><strong>We onderscheiden verschillende onderdelen in           de aanleg van een tuin. Dit is mede afhankelijk van uw wensen en het daaruit           voortgekomen ontwerp. De onderdelen van de aanleg van uw tuin staan allemaal           beschreven in de  offerte. En wij zorgen           ervoor dat alles volgens uw wensen wordt gerealiseerd.</strong></p>
  <p align="left">Onze aanpak           tijdens de aanleg van de tuin:<br />
      <br />
  Een degelijke aanpak van alle werkonderdelen is               standaard. Elk werk start met voorbereidend grondwerk, dat als basis               dient voor alle andere onderdelen. U kunt denken aan het leggen van               leidingen (drainage, grondkabel).</p>
  <p align="left">Belangrijke te handhaven elementen, zoals           mooie bomen of beelden behandelen we met zorg en beschermen we tijdens           de werkzaamheden. </p>
  <p>Een volgende fase van werkzaamheden in de aanleg           is: </p>
  <ul>
    <li>straatwerk van klinkers, tegels, natuursteen             en halfverharding (bv. grind) met kantopsluiting;</li>
    <li>plaatsen van erfafscheidingen, standaard met             houten schermen of volgens eigen ontwerp;</li>
    <li>vlonders, steigers en schoeiingen/damwand van  hardhout of             gerecycled kunststof;</li>
    <li>vijvers in strakke vorm of met een natuurlijke             uitstraling;</li>
    <li>watervallen en beeklopen;</li>
    <li>metselwerk van muurtjes, randen, terrassen,             trappen;</li>
    <li>diverse  bouwwerken zoals tuinhuisjes,             carport, pergola's ed.; </li>
    <li>beplanting en gazon;</li>
    <li>beregening, eventueel computer gestuurd;</li>
    <li>verlichting, eventueel volledig automatisch. </li>
  </ul>
  <p align="left">.<br />
  Na afronding van deze werkzaamheden, vindt de oplevering van de tuin plaats.</p>
  <p align="left">Hieronder vindt u een aantal voorbeelden van door ons gerealiseerde tuinen: </p>  <span class="style3">klik op de foto's voor een grotere weergave </span>
<p align="justify"><a href="fotos/tuin1_tumb.jpg" target="_blank"
onclick="goImgWin('fotos/tuin1.jpg',640,480,100,50);return false;"><img
src="fotos/tuin1_tumb.jpg"  border="1"
alt="Tuin met zwembad" align="left" /></a>
    
      <a href="fotos/tuin2_tumb.jpg" target="_blank"
onclick="goImgWin('fotos/tuin2.jpg',640,480,100,50);return false;"><img
src="fotos/tuin2_tumb.jpg"  border="1"
alt="Tuin met zwembad" align="left" /></a>
    
      <a href="fotos/tuin3_tumb.jpg" target="_blank"
onclick="goImgWin('fotos/tuin3.jpg',640,480,100,50);return false;"><img
src="fotos/tuin3_tumb.jpg"  border="1"
alt="Tuin met zwembad" align="left" /></a></p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  
        <a href="fotos/tuin4_tumb.jpg" target="_blank"
onclick="goImgWin('fotos/tuin4.jpg',640,480,100,50);return false;"><img
src="fotos/tuin4_tumb.jpg"  border="1"
alt="Nostalgische Tuin" align="left" /></a>
    
      <a href="fotos/tuin5_tumb.jpg" target="_blank"
onclick="goImgWin('fotos/tuin5.jpg',640,480,100,50);return false;"><img
src="fotos/tuin5_tumb.jpg"  border="1"
alt="Nostalgische Tuin" align="left" /></a></p>

  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <a href="fotos/tuin6_tumb.jpg" target="_blank"
onclick="goImgWin('fotos/tuin6.jpg',640,480,100,50);return false;"><img
src="fotos/tuin6_tumb.jpg"  border="1"
alt="Originele Engelse Tuin" align="left" /></a>
    
      <a href="fotos/tuin7_tumb.jpg" target="_blank"
onclick="goImgWin('fotos/tuin7.jpg',640,480,100,50);return false;"><img
src="fotos/tuin7_tumb.jpg"  border="1"
alt="Originele Engelse Tuin" align="left" /></a></p>
  
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
<p>&nbsp;</p>
</body>
</html>
