<?php

$category = 'fotos/';
$handle = opendir($category);
if ($handle) {
    while (($file = readdir($handle)) !== false) {
        if ($file != '.' && $file != '..' && is_file($category . '/' . $file)) {
            echo '<img style="height:200px; width:250px;" src="' . $category . '/' . $file . '" alt="' . $file . '">';
        }
    }
    closedir($handle);
}
?>