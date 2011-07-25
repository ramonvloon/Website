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
                width:201px;
                height:241px;
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
                background-image: url(fotos/achtergrond1.jpg);
            }
            #imageviewer {
                position:relative;
                float:right;
                margin-right:-400px;
                margin-top:-600px;
                width:200px;
                height:200px;
                z-index:3;
            }
            #Layer3 {
                position:absolute;
                width:155px;
                height:84px;
                z-index:4;
                left: 583px;
                top: 55px;
            }
            #ImageViewer {
                height:100%;
                vertical-align: middle;
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
            .style3 {
                font-family: Arial, Helvetica, sans-serif;
                font-size: 10px;
                color: #0040a1;
            }
            #Layer2 {
                position:absolute;
                width:194px;
                height:23px;
                z-index:5;
                left: 13px;
                top: 457px;
            }
            #Layer4 {
                position:absolute;
                width:152px;
                height:96px;
                z-index:6;
                left: 17px;
                top: 506px;
            }
            #Layer5 {
                position:absolute;
                width:104px;
                height:161px;
                z-index:7;
                left: 778px;
                top: 5px;
            }
            -->
        </style>
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script type="text/javascript">
            var images = Array(
                <?php
                $files = "";
                $handle = opendir('fotos/');
                if ($handle) {
                    while (($file = readdir($handle)) !== false) {
                        if ($file != "." && $file != ".." && is_dir('fotos/' . $file)) {
                            $handle2 = opendir('fotos/' . $file);
                            if ($handle2) {
                                while (($file2 = readdir($handle2)) !== false) {
                                    if ($file2 != "." && $file2 != ".." && !is_dir($file2)) {
                                        $files .= "'" . "fotos/" . $file . "/" . $file2 . "',";
                                    }
                                }
                            }
                        }
                    }
                    closedir($handle);
                    $files = substr($files, 0, strlen($files) - 1);
                }
                echo $files;
                ?>
            );
            var myInterval = 0;
            var photocounter = 0;
            $(function() {
                photocounter = Math.floor(Math.random() * (images.length + 1));
                startLoop();
            });
            function startLoop() {
                if(myInterval > 0) {
                    clearInterval(myInterval);
                }
                myInterval = setInterval( "switchPhoto()", 5000 );
            }
            function switchPhoto() {
                if (photocounter + 1 > images.length) {
                    photocounter = 1;
                } else {
                    photocounter++;
                }
                $('#ImageViewer').attr('src', images[photocounter]);
                startLoop();
            }
        </script>
        <script type="text/JavaScript">
            <!--
            function MM_preloadImages() { //v3.0
                var d=document;
                if (d.images) {
                    if (!d.MM_p) {
                        d.MM_p = new Array();
                    }
                    var i, j = d.MM_p.length, a = MM_preloadImages.arguments;
                    for (i = 0; i < a.length; i++) {
                        if (a[i].indexOf("#") != 0) {
                            d.MM_p[j] = new Image;
                            d.MM_p[j++].src = a[i];
                        }
                    }
                }

                function MM_findObj(n, d) { //v4.01
                    var p, i, x;
                    if (!d)
                        d = document;
                    if ((p = n.indexOf("?")) > 0 && parent.frames.length) {
                        d = parent.frames[n.substring(p+1)].document;
                        n = n.substring(0,p);
                    }
                    if (!(x = d[n]) && d.all) {
                        x = d.all[n];
                    }
                    for (i = 0; !x && i < d.forms.length; i++) {
                        x = d.forms[i][n];
                    }
                    for (i = 0; !x && d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
                    if (!x && d.getElementById) x=d.getElementById(n); return x;
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
                <? if (!isset($_SESSION['username'])) { ?>
                    <tr>
                        <td><a href="login.php" target="_top" onclick="MM_nbGroup('down','group1','Login','',1)" onmouseover="MM_nbGroup('over','Login','Buttons/login_over.png','',1)" onmouseout="MM_nbGroup('out')"><img src="Buttons/login_up.png" alt="" name="Login" border="0" id="Login" onload="" /></a></td>
                    </tr> 
                <? } else { ?>
                    <tr>
                        <td><a href="logout.php" target="_top" onclick="MM_nbGroup('down','group1','Logout','',1)" onmouseover="MM_nbGroup('over','Logout','Buttons/logout_over.png','',1)" onmouseout="MM_nbGroup('out')"><img src="Buttons/logout_up.png" alt="" name="Logout" border="0" id="Logout" onload="" /></a></td>
                    </tr> 
                <? } ?>
            </table>
            <br />
        </div>
        <div id="Layer1">
            <div align="left">
                <a href="index.php">
                    <img src="Logo/refab_1.jpg" alt="logo" width="322" height="136" border="0" />
                </a>
            </div>
        </div>
        <div class="style2" id="inhoud" style="">
            <p align="justify"><br />
                <strong>Welkom op de site van Aannemingsbedrijf                  ReFab.</strong></p>
            <p align="justify">Heeft u plannen voor een                  verbouwing, renovatie of nieuwbouw? Heeft u leuke idee&euml;n voor                 binnen of buiten? Of grootse plannen met uw woning? Bent u op zoek                 naar d&eacute; bouwkundige oplossing?</p>
            <p align="left">Dan bent u bij Aannemingsbedrijf ReFab aan het juiste adres. Want wij zorgen dat                 de renovatie, bouw of verbouw tot in de puntjes wordt uitgevoerd.<br />
                Van het begin tot het eind.</p>
            <p align="left">Aannemingsbedrijf ReFab heeft een professioneel team                  dat voor u klaarstaat.                  als het gaat om renovatie,
                nieuwbouw en verbouw van woningen,                  bedrijfsgebouwen en villa's.</p>
            <p align="justify"><strong><em>Aannemingsbedrijf ReFab: vakmanschap waar u op kunt bouwen!</em></strong></p>
            <p align="justify"><strong>Wat                 doen wij voor u</strong></p>
            <p align="left">Aannemingsbedrijf ReFab is een veelzijdig bedrijf. U kunt ons  team                 inschakelen vanaf het prille begin. Wij begeleiden en adviseren                 bij het uitwerken van de idee&euml;n en bouwplannen tot de complete                 afbouw. Precies zoals u dat wilt.</p>
            <p align="justify"><strong>Garanties</strong></p>
            <p>Aannemingsbedrijf ReFab geeft op   elk bouwkundig werk standaard de daarvoor geldende garantie.  Er   wordt voortdurend gelet op veiligheid en kwaliteit. En dat merkt u aan het   uitstekende resultaat, de superieure kwaliteit en klantgerichte service. </p>
            <p align="left"><strong>Indien u in samenwerking met uw buren hetzelfde project wilt laten uitvoeren met ons, kunnen wij u een zeer aantrekkelijke korting bieden! </strong></p>
            <p align="justify">&nbsp;</p>
            <div id="imageviewer">
                <img id="ImageViewer" src="Logo/refab_1.jpg" alt="ImageViewer" />
            </div>
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
        <div id="Layer4"> <!-- Begin Webstats4U code -->
            <!-- Title: ReFab.nl -->
            <!-- URL: http://www.refab.nl/ -->
            <script language="JavaScript" type="text/javascript"
                    src="http://m1.webstats4u.com/m.js">
            </script>
            <script language="JavaScript" type="text/javascript">
                    <!--
                    webstats4u("AD0BzQ/sdn4m5uJmb7Jygr4d1Afw", 0);
                    // -->
            </script>
            <noscript>
                <a target="_blank"
                   href="http://www.webstats4u.com/stats?AD0BzQ/sdn4m5uJmb7Jygr4d1Afw"><img
                        src="http://m1.webstats4u.com/n?id=AD0BzQ/sdn4m5uJmb7Jygr4d1Afw"
                        border="0" width="18" height="18"
                        alt="Webstats4U - Gratis web site statistieken
                        Eigen homepage website teller"></a><br>
                    <a target="_blank" href="http://www.webstats4u.com/">Gratis teller</a>
            </noscript>
            <!-- End Webstats4U code --></div>
    </body>
</html>