<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <style type="text/css">
            <!--
            #imageviewer1 {
                position:relative;
                width:250px;
                height:250px;
                z-index:3;
                border: 2px solid blue;
            }
            #controlpanel1 {
                position:relative;
                width:250px;
                z-index:3;
                border-right: 2px solid blue;
                border-left: 2px solid blue;
                border-bottom: 2px solid blue;
            }
              -->
        </style>
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script type="text/javascript">
            var images = Array(
                <?php
                if ($_POST['categorien'] == "tuinen"){
                $directory = 'fotos/tuinen/';
                }
                if ($_POST['categorien'] == "badkamer"){
                $directory = 'fotos/badkamers/';
                }
                if ($_POST['categorien'] == "garages"){
                $directory = 'fotos/garages/';
                }
                if ($_POST['categorien'] == "slaapkamers"){
                $directory = 'fotos/slaapkamers/';
                }
                if ($_POST['categorien'] == "badkamer"){
                $directory = 'fotos/badkamers/';
                }
                if ($_POST['categorien'] == "deuren"){
                $directory = 'fotos/deuren/';
                }
                if ($_POST['categorien'] == "aanbouw"){
                $directory = 'fotos/aanbouw/';
                }

                $files = "";
                $handle = opendir($directory);
                if ($handle) {
                    while (($file = readdir($handle)) !== false) {
                        if ($file != "." && $file != ".." && is_dir($directory . $file)) {
                                        echo $file;
                            }
                            }
                }
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
                $('#Previous').attr('src', 'Buttons/terug.jpg');
                $('#Next').attr('src', 'Buttons/volgende.jpg'); 
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
                if ($('#ImageViewer').width() > 250) {
                    $('#ImageViewer').css('width', '100%');
                } else {
                    $('#ImageViewer').css('height', '100%');
                }
            }
            function pause() {
                $('#Pause').css('display', 'none');
                $('#Play').css('display', 'inline');
                $('#Previous').attr('src', 'Buttons/terug.jpg');
                $('#Next').attr('src', 'Buttons/volgende.jpg'); 
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
    <?php
    include('layers.php');
    ?>
            <div class="style2" id="inhoud" style="">
            <div id="imageviewer1">
                <img id="ImageViewer" src="Logo/refab_1.jpg" alt="ImageViewer" />
            </div>
            <div id="controlpanel1" align="center">
                <img src="Buttons/terug.jpg" id="Previous" alt="Previous" />
                <img src="Buttons/speel.jpg" id="Play" alt="Play" />            
                <img src="Buttons/pause.jpg" id="Pause" alt="Pause" />
                <img src="Buttons/volgende.jpg" id="Next" alt="Next" />
            </div>
            </div>
</body>
</html>