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
	height:188px;
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
    <body>
    <?
    include('layers.php');
    ?>
<div class="style2" id="inhoud" style="">
  <p><strong><br />
    Renovatie en onderhoud
  </strong></p>
  <p>Onderhoud is het behoud van uw woning,                 maar het is niet leuk om al uw vrije tijd op te offeren aan herstel                 van de gootlijsten of het schilderwerk van uw woning. Aannemingsbedrijf ReFab neemt die lastige en tijdrovende klussen graag van                 u over. </p>
  <p><strong>Stijl herstellen</strong></p>
  <p>Vaak zijn oude woningen door de jaren                 heen op verschillende punten aangepast. Niet elke aanbouw of opbouw                 hoort bij de architectuur van het oorspronkelijke ontwerp. Ook voor het herstellen en/of vervangen van ramen, deuren en kozijnen. </p>
  <p>Wilt                 u uw woning weer de originele uitstraling geven? Schakel dan Aannemingsbedrijf ReFab in.</p>
  <a href="fotos/schuur.jpg" target="_blank"
onclick="goImgWin('fotos/schuur.jpg',640,480,100,50);return false;"><img
src="fotos/schuur_tumb.jpg" width="128" height="96" border="1"
alt="Schuur" align="left" /></a>
  <a href="fotos/schuur_open.jpg" target="_blank"
onclick="goImgWin('fotos/schuur_open.jpg',640,480,100,50);return false;"><img
src="fotos/schuur_open_tumb.jpg" width="128" height="96" border="1"
alt="Schuur Open" align="left" /></a>

<a href="fotos/openslaandedeuren1.jpg" target="_blank"
onclick="goImgWin('fotos/openslaandedeuren1.jpg',640,480,100,50);return false;"><img
src="fotos/openslaandedeuren1_tumb.jpg" width="128" height="96" border="1"
alt="Openslaande Deuren" align="left" /></a>
  <a href="fotos/openslaandedeuren2.jpg" target="_blank"
onclick="goImgWin('fotos/openslaandedeuren2.jpg',640,480,100,50);return false;"><img
src="fotos/openslaandedeuren2_tumb.jpg" width="128" height="96" border="1"
alt="Openslaande Deuren" align="left" /></a>
  <span class="style3">klik op de foto's voor een grotere weergave </span>
  <p align="justify">&nbsp;</p>
  <p align="justify">&nbsp;</p>
  <p align="justify">&nbsp;</p>
  <p align="justify">&nbsp;</p>
  <p align="justify">&nbsp;</p>
</div>
<p>&nbsp;</p>
</body>
</html>
