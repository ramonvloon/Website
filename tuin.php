<? session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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
<?php
include('layers.php');
?>

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
</body>
</html>
