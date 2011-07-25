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
            var imageCounter = 0;
            $(function() {
                resizeImage();
                imageCounter = Math.floor(Math.random() * (images.length + 1));
                startLoop();
            });
            function startLoop() {
                if(myInterval > 0) {
                    clearInterval(myInterval);
                }
                myInterval = setInterval( "switchImage()", 5000 );
            }
            function switchImage() {
                if (imageCounter + 1 > images.length) {
                    imageCounter = 1;
                } else {
                    imageCounter++;
                }
                $('#ImageViewer').attr('src', images[imageCounter]);
                resizeImage();
                startLoop();
            }
            function resizeImage() {
                if ($('#ImageViewer').width() > 200) {
                    $('#ImageViewer').css('width', '100%');
                } else {
                    $('#ImageViewer').css('height', '100%');
                }
            }
        </script>
    </head>
    <body>
        <div id="index_opgave">
            <table border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td>
                        <a href="index.php" target="_top">
                            <img src="Buttons/home_up.png" alt="" name="Home" width="190" height="20" border="0" id="Home" />
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="nieuwbouw.php" target="_top">
                            <img name="Nieuwbouw" src="Buttons/nieuwbouw_up.png" border="0" alt="" />
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="aanbouw.php" target="_top">
                            <img name="Aanbouw" src="Buttons/aanbouw_up.png" border="0" alt="" />
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="restauratie.php" target="_top">
                            <img name="Restauratie" src="Buttons/restauratie_up.png" border="0" alt="" />
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="tuin.php" target="_top">
                            <img name="Tuin" src="Buttons/tuin_up.png" border="0" alt="" />
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="interieur.php" target="_top">
                            <img name="Interieur" src="Buttons/interieur_up.png" border="0" alt=""/>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="contact.php" target="_top">
                            <img name="Contact" src="Buttons/contact_up.png" border="0" alt="" />
                        </a>
                    </td>
                </tr>
                <?php if (!isset($_SESSION['username'])) { ?>
                    <tr>
                        <td>
                            <a href="login.php" target="_top">
                                <img src="Buttons/login_up.png" alt="" name="Login" border="0" id="Login" />
                            </a>
                        </td>
                    </tr> 
                <?php } else { ?>
                    <tr>
                        <td>
                            <a href="logout.php" target="_top">
                                <img src="Buttons/logout_up.png" alt="" name="Logout" border="0" id="Logout" />
                            </a>
                        </td>
                    </tr> 
                <?php } ?>
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