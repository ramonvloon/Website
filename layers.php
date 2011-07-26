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
                margin-top:-650px;
                width:250px;
                height:250px;
                z-index:3;
                border: 2px solid blue;
            }
            #controlpanel {
                position:relative;
                float:right;
                margin-right:-400px;
                margin-top:-390px;
                width:250px;
                z-index:3;
                border: 2px solid blue;
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
            .MenuItem {
                width:200px;
                text-align: center;
                font-weight: bold;
                background: #4162b8;
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#4162b8', endColorstr='#6f89cc');
                background: -webkit-gradient(linear, left top, left bottom, from(#4162b8), to(#6f89cc));
                background: -moz-linear-gradient(top,  #4162b8,  #6f89cc);
                border: 1px solid #4162b8;
                cursor: pointer;
            }
            .MenuItem:hover {
                background: #8aaaff;
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#8aaaff', endColorstr='#ccdaff');
                background: -webkit-gradient(linear, left top, left bottom, from(#8aaaff), to(#ccdaff));
                background: -moz-linear-gradient(top,  #8aaaff,  #ccdaff);
                border: 1px solid #d9e3ff;
            }
            .MenuItemText {
                color:white;
                text-decoration: none;
            }
            .MenuItem:hover .MenuItemText {
                color:black;
            }
            .MenuItemText:hover {
                color:black;
            }
            -->
        </style>        
        <div id="index_opgave">
            <table border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td class="MenuItem">
                        <a href="index.php" target="_top" class="MenuItemText">
                            Home
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="MenuItem">
                        <a href="nieuwbouw.php" target="_top" class="MenuItemText">
                            Nieuwbouw
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="MenuItem">
                        <a href="aanbouw.php" target="_top" class="MenuItemText">
                            Aanbouw
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="MenuItem">
                        <a href="restauratie.php" target="_top" class="MenuItemText">
                            Restauratie
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="MenuItem">
                        <a href="tuin.php" target="_top" class="MenuItemText">
                            Tuin
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="MenuItem">
                        <a href="interieur.php" target="_top" class="MenuItemText">
                            Interieur
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="MenuItem">
                        <a href="categorie.php" target="_top" class="MenuItemText">
                            Foto's
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="MenuItem">
                        <a href="contact.php" target="_top" class="MenuItemText">
                            Contact
                        </a>
                    </td>
                </tr>
                <?php if (!isset($_SESSION['username'])) { ?>
                    <tr>
                        <td class="MenuItem">
                            <a href="login.php" target="_top" class="MenuItemText">
                                Login
                            </a>
                        </td>
                    </tr> 
                <?php } else { ?>
                    <tr>
                        <td class="MenuItem">
                            <a href="logout.php" target="_top" class="MenuItemText">
                                Logout
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