<?php
$file = $_POST['naamfoto'];
if (unlink($file) == true) {
    echo "Bestand is verwijderd";
} else {
    echo "Bestand verwijderen is mislukt";
}
?>
