<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

            #Play {
                display: none;
            }
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
            var timer = true;
            $(function() {
                resizeImage();
                imageCounter = Math.floor(Math.random() * (images.length + 1));
                $('.MenuItem').click(function(event) {
                    window.location = $(this).children().get(0);
                    event.preventDefault();
                });
                $('#Next').click(function(){
                    nextImage();
                });
                $('#Previous').click(function(){
                    previousImage();
                });
                $('#Pause').click(function(){
                    pause();
                });
                $('#Play').click(function(){
                    startLoop();
                });
                startLoop();
            });
            function startLoop() {
                if(myInterval > 0) {
                    clearInterval(myInterval);
                }
                myInterval = setTimeout("switchImage()", 5000);
                $('#Pause').css('display', 'inline');
                $('#Play').css('display', 'none');
                $('#Previous').attr('src', 'buttons/terugna.jpg');
                $('#Next').attr('src', 'buttons/volgendena.jpg');
                timer = true;
            }
            function switchImage() {
                if (imageCounter + 1 > images.length) {
                    imageCounter = 1;
                } else {
                    imageCounter++;
                }
                $('#ImageViewer').attr('src', images[imageCounter]);
                resizeImage();
                if (timer) {
                    startLoop();
                }
            }
            function resizeImage() {
                if ($('#ImageViewer').width() > 200) {
                    $('#ImageViewer').css('width', '100%');
                } else {
                    $('#ImageViewer').css('height', '100%');
                }
            }
            function pause() {
                $('#Pause').css('display', 'none');
                $('#Play').css('display', 'inline');
                $('#Previous').attr('src', 'buttons/terug.jpg');
                $('#Next').attr('src', 'buttons/volgende.jpg'); 
                timer = false;
            }
            function nextImage() {
                if (timer == false) {
                    switchImage();
                }
            }
            function previousImage() {
                if (timer == false) {
                    imageCounter -= 2;
                    switchImage();
                }
            }
         </script>
    </head>
    <body>
    <?
    include('layers.php');
    ?>           
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
            <div id="controlpanel">
                <img src="Buttons/terug.jpg" id="Previous" alt="Previous" />
                <img src="Buttons/speel.jpg" id="Play" alt="Play" />            
                <img src="Buttons/pause.jpg" id="Pause" alt="Pause" />
                <img src="Buttons/volgende.jpg" id="Next" alt="Next" />
            </div>
        </div>
    </body>
</html>