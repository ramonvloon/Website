<?php
session_start();
if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="nl" lang="nl">
    <head>
        <title>Admin paneel</title>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script type="text/javascript" src="bbcode.js"></script>
        <script type="text/javascript">
            $(function() {
                $('#formcontainer').css('height', screen.height * 0.8);
                $('#result').css('height', screen.height * 0.8);
                $('#buttons').css('height', screen.height * 0.8);
                $('#pagina').css('height', screen.height * 0.8);
                $('#buttons').css('left', $('#formcontainer').css('width'));
                $('#buttons').css('left', '+=' + 0.02 * screen.width);
                $('#pagina').change(function() {
                    refresh();
                });
                $('#pagina').keyup(function() {
                    refresh();
                });
                $('#result').html($('#pagina').val());
            });
            function refresh() {
                $('#result').html($('#pagina').val());
            }
            function promptRemoveBackups() {
                var remove = confirm("Weet u zeker dat u ALLE backups wilt verwijderen?");
                if (remove) {
                    window.location = "<?php echo $_SERVER['PHP_SELF']; ?>?removeBackups";
                } else {
                    return false;
                }
            }
        </script>
        <style type="text/css">
            body {
                background-color: black;
                color: white;
            }
            body a:visited {
                text-decoration: none;
                color: white;
            }
            body a:hover {
                text-decoration: underline;
                color: blue;
            }
        </style>
    </head>
    <body>
        <?php
        $username = 'refab';
        $password = 'refab';
        if (isset($_GET['pagename'])) {
            if (isset($_GET['logout'])) {
                $urlPieces = explode('&', $_SERVER['QUERY_STRING']);
                echo '<script type="text/javascript">window.location = \'' . $_SERVER['PHP_SELF'] . '?' . $urlPieces[0] . '\'</script>';
            }
            if (isset($_SESSION['password']) && isset($_SESSION['username'])) {
                if ($_SESSION['password'] == $password && $_SESSION['username'] == $username) {
                    $filename = $_GET['pagename'] . '.html';
                    if (is_file($filename)) {
                        if (isset($_POST['pagina'])) {
                            if (!is_dir('Backup')) {
                                mkdir('Backup');
                            }
                            if (is_dir('Backup')) {
                                $part1 = '';
                                $part2 = '';
                                $content = '';
                                $read1 = true;
                                $read2 = false;
                                $lines = file($filename);
                                foreach ($lines as $line) {
                                    if (stristr($line, "<div id='inhoud'>") !== false) {
                                        $read1 = false;
                                        $part1 .= $line;
                                    } else if (stristr($line, "<div id='right'>") !== false) {
                                        $read2 = true;
                                    }
                                    if ($read1) {
                                        $part1 .= $line;
                                    } else if ($read2) {
                                        $part2 .= $line;
                                    }
                                }
                                $_POST['pagina'] = str_replace('\\"', '"', $_POST['pagina']);
                                $_POST['pagina'] = str_replace("\\'", "'", $_POST['pagina']);
                                $content = $part1 . $_POST['pagina'] . $part2;
                                copy($filename, 'Backup/' . $_GET['pagename'] . '_' . time() . '.html');
                                unlink($filename);
                                $handle = fopen($filename, 'w') or die("Neem contact op met de administrator, het nieuwe bestand kan niet worden gemaakt...");
                                fwrite($handle, $content);
                                fclose($handle);
                                echo '
                                    Succesvol opgeslagen!<br/>
                                    <a href="' . $_SERVER['PHP_SELF'] . '?' . $_SERVER['QUERY_STRING'] . '">Terug naar vorige pagina.</a><br />
                                    <a href="http://www.refab.nl' . $filename . '">Bekijk het resultaat.</a><br />
                                    <a href="' . $_SERVER['PHP_SELF'] . '?' . $_SERVER['QUERY_STRING'] . '&logout">Log uit</a>
                                ';
                            } else {
                                die('Vraag de administrator om de backup map handmatig aan te maken... wijzigingen niet opgeslagen...');
                            }
                        } else {
                            $content = '';
                            $read = false;
                            $lines = file($filename);
                            foreach ($lines as $line) {
                                if (stristr($line, "<div id='inhoud'>") !== false) {
                                    $read = true;
                                } else if (stristr($line, "<div id='Layer3'>") !== false) {
                                    $read = false;
                                    break;
                                } else if ($read) {
                                    $content .= $line;
                                }
                            }
                            echo '
                                <div id="formcontainer" style="position:absolute; left:10px; width:45%;">
                                    <form method="POST" action="' . $_SERVER['PHP_SELF'] . '?' . $_SERVER['QUERY_STRING'] . '">
                                        <textarea name="pagina" id="pagina" style="width:99%; resize:none;">' . $content . '</textarea>
                                        <div style="position:relative; float:left;">
                                            <input type="button" onclick="bbcode_ins(\'pagina\', \'b\'); refresh();" value="B" style="width:40px; font-weight:bold;">
                                            <input type="button" onclick="bbcode_ins(\'pagina\', \'u\'); refresh();" value="_" style="width:40px; font-weight:bold;">
                                            <input type="button" onclick="bbcode_ins(\'pagina\', \'i\'); refresh();" value="I" style="width:40px; font-style:italic;">
                                            <input type="button" onclick="bbcode_ins(\'pagina\', \'img\'); refresh();" value="img" style="width:40px;">
                                            <input type="button" onclick="bbcode_ins(\'pagina\', \'url\'); refresh();" value="url" style="width:40px; color:blue;">
                                        </div>
                                        <div style="position:relative; float:right;">
                                            <input type="submit" value="Opslaan" />
                                            <input type="button" value="Reset" onClick="$(\'#reset\').click();refresh();" />
                                            <input id="reset" type="reset" value="Reset" style="visibility: hidden;" />
                                            <input type="button" value="Verwijder backups" onClick="return promptRemoveBackups();" />
                                        </div>
                                    </form>
                                </div>
                                <div id="result" style="position:absolute; right:10px; width:45%; overflow-x: hidden; background-color:white; color:black;">
                                </div>
                                <div style="position:absolute; right:10px; bottom:0px;">
                                    <a href="' . $_SERVER['PHP_SELF'] . '?' . $_SERVER['QUERY_STRING'] . '&logout" style="color:white; font-size:26px;">Log uit</a>
                                </div>
                            ';
                        }
                    } else {
                        die('Die pagina bestaat (nog) niet...<br /> Het aanmaken van pagina\'s wordt (nog) niet ondersteund.');
                    }
                } else {
                    die('Het in de sessie opgeslagen gebruikersnaam of wachtwoord is onjuist, neem contact op met de administrator.');
                }
            } else if (isset($_POST['username']) && isset($_POST['password'])) {
                if ($_POST['username'] == $username && $_POST['password'] == $password) {
                    $_SESSION['password'] = $_POST['password'];
                    $_SESSION['username'] = $_POST['username'];
                    echo '
                        Succesvol ingelogd!<br />
                        <p id="Countdown">
                            Over 5 seconden wordt de site getoond.
                        </p>
                        <script type="text/javascript">
                            setTimeout(function() {window.location = \'' . $_SERVER['PHP_SELF'] . "?" . $_SERVER['QUERY_STRING'] . '\';}, 5000);
                        </script>
                    ';
                } else {
                    die('Het ingevoerde gebruikersnaam of wachtwoord is onjuist.');
                }
            } else {
                echo '
                    <form id="login" method="POST" action="' . $_SERVER['PHP_SELF'] . '?' . $_SERVER['QUERY_STRING'] . '">
                        <table style="position:relative; margin:0px auto; width:300px;">
                            <tr>
                                <td>Gebruikersnaam:</td><td><input type="text" name="username" /></td>
                            </tr>
                            <tr>
                                <td>Wachtwoord:</td><td><input type="password" name="password" /></td>
                            </tr>
                            <tr>
                                <td></td><td><input type="submit" value="Login" /></td>
                            </tr>
                        </table>
                    </form>
                ';
            }
        } else if (isset($_GET['removeBackups'])) {
            $path = 'Backup';
            $handle = opendir($path);
            while ($file = readdir($handle)) {
                if ($file != '..' && $file != '.' && $file != '') {
                    unlink($path . "/" . $file);
                }
            }
            closedir($handle);
            echo '
                <p id="Countdown">
                    Over 5 seconden komt u weer terug bij de homepage
                </p>
                <script type="text/javascript">
                    setTimeout(function() { window.location = \'http://www.refab.nl/index.php\'; }, 5000);
                </script>
            ';
        } else {
            die("Fail");
        }
        ?>
    </body>
</html>