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
	height:245px;
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
  Aanbouw</strong></p>
  <p>U wilt uw woning groter maken door                 een serre of een bijkeuken? Ook dan schakelt u Aannemingsbedrijf                  ReFab in. Wij hebben jarenlange ervaring                 en dat merkt u niet alleen aan het resultaat. Wij maken de bouwtekeningen                 en vragen de vergunningen aan. Wij zorgen dat uw plannen voor de                 aanbouw tot in de puntjes uitgevoerd wordt.</p>
  <p align="left">

  <a href="fotos/aanbouw_tumb.jpg" target="_blank"
onclick="goImgWin('fotos/aanbouw/aanbouw.jpg',640,480,100,50);return false;"><img
src="fotos/aanbouw_tumb.jpg"  border="1"
alt="Aanbouw" align="left" /></a>

  
  
  &nbsp;</p>
  <p align="left">&nbsp;</p>
  <p align="left">&nbsp;</p>
  <p><strong>Inpandige                 verbouwingen </strong></p>
  <p>Bij een verbouwing in uw woning komen                 vaak heel wat zaken kijken, waar u in eerste instantie niet bij                 stilstaat. Aannemingsbedrijf ReFab zorgt dat                 de complete verbouwing professioneel en effici&euml;nt uitgevoerd                 wordt. <br />
  Snel, degelijk en vakkundig.</p>
  <p><strong>Opbouw</strong></p>
  <p>Door de zolder tot een volwaardige                 kamer om te toveren is het vaak niet nodig om te verhuizen. Wel                 zo prettig. Aannemingsbedrijf Refab biedt                 u een scala aan mogelijkheden om met een dakkapel of opbouw van                 uw zolder een schitterende kamer te maken. Met veel ruimte en licht.</p>
  <p>En wat dacht u van een ruime opbouw                 op uw garage of schuur? Hier kunnen de kinderen lekker spelen en                 tenten bouwen. Of gebruikt u deze zolder liever zelf als hobbyruimte?</p>
  <p><strong>Garage's</strong></p>
  <p>Een garage biedt tegenwoordig veel                 meer mogelijkheden dan alleen de opslag van auto's en greedschap. Hier                 kunt u uw droombadkamer met sauna realiseren of misschien wilt u                 hier een knusse hobbyruimte of studio cre&euml;ren. <br />
  Vraag Aannemingsbedrijf                 ReFaB naar de mogelijkheden.</p>
  <p><a href="fotos/garages/garage.jpg" target="_blank"
onclick="goImgWin('fotos/garages/garage.jpg',640,480,100,50);return false;"><img
src="fotos/garage_tumb.jpg"  border="1"
alt="Verbouw garage" align="left" /></a>
    
    <a href="fotos/slaapkamers/slaapkamer.jpg" target="_blank"
onclick="goImgWin('fotos/slaapkamers/slaapkamer.jpg',640,480,100,50);return false;"><img
src="fotos/slaapkamer_tumb.jpg"  border="1"
alt="slaapkamer in garage" align="left" /></a>
    
    <a href="fotos/wandkast_tumb.jpg" target="_blank"
onclick="goImgWin('fotos/deuren/wandkast.jpg',640,480,100,50);return false;"><img
src="fotos/wandkast_tumb.jpg"  border="1"
alt="Wandkast in garage" align="left" /></a> &nbsp;
    </p>
  </p>
  <p align="justify">&nbsp;</p>
</div>
</body>
</html>