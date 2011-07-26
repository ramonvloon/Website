<?php
				session_start();	
			if (isset($_POST['username']) && isset($_POST['password'])) {
				// Settings
				$host="localhost";
				$port=3306;
				$username="aprilrefab_refab";
				$password="refab";
				$db_name="aprilrefab_login";
				$tbl_name="members";
				// End of Settings
				
				$host = $host . ":" . $port;
				mysql_connect($host, $username, $password)or die("cannot connect    ".mysql_error());
				mysql_select_db($db_name)or die("cannot select DB");

				$mypassword = mysql_real_escape_string($_POST['password']);
				$myusername = mysql_real_escape_string($_POST['username']);
				
				$sql = "SELECT * FROM $tbl_name WHERE username='" . $myusername . "' and password='" . $mypassword . "';";
				$result=mysql_query($sql);
				
				if(mysql_num_rows($result) == 1){ //als hij uit de database een gebruikersnaam met een bijhorend wachtwoord vindt dan heeft hij dus 1 lijn(row) dan maakt hij een session aan
					$_SESSION['username'] = $myusername;
					$_SESSION['password'] = $mypassword;
				}else {
					echo "Verkeerde gebruikersnaam of wachtwoord.";
				}
				if (isset($_SESSION['username'])) {
                    echo '<script type="text/javascript" language="JavaScript">window.location="uploadbestand.php";</script>';
				}
			}
?>
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
    <?
    include('layers.php');
    
if (!isset($_SESSION['username'])) {
    ?>
<div class="style2" id="inhoud" style="">
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" onSubmit=return document.getElementById('login').disabled;>
                        <td>
                            <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
                                <tr>
                                    <td colspan="3"><strong>Login </strong></td>
                                </tr>
                                <tr>
                                    <td width="78">Gebruikersnaam</td>
                                    <td width="6">:</td>
                                    <td width="294"><input name="username" type="text" id="username"></td>
                                </tr>
                                <tr>
                                    <td>Wachtwoord</td>
                                    <td>:</td>
                                    <td><input name="password" type="password" id="password"></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td><input type="submit" name="button" value="Login" id="login"></td>
                                </tr>
                            </table>
                        </td>
                    </form>
			<? }else{ ?>
			<center> U bent al ingelogd
			<? } ?>
		</div>
</body>
</html>