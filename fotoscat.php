<?
echo "Tuinen:<br>";
$directory = 'fotos/tuinen';
if ($handle = opendir($directory)) {
    while (($file = readdir($handle)) !== false) {
		echo '<img style="height:200px; width:250px;" src="' . $directory . '/' . $file . '" alt="' . $file . '">';
    }
    closedir($handle);
}

echo "<br>Badkamers:<br>";
$directory1 = 'fotos/badkamers';
if ($handle1 = opendir($directory1)) {
    while (($file1 = readdir($handle1)) !== false) {
		echo '<img style="height:200px; width:250px;" src="' . $directory1 . '/' . $file1 . '" alt="' . $file1 . '">';
    }
    closedir($handle1);
}

echo "<br>Aanbouw:<br>";
$directory2 = 'fotos/aanbouw';
if ($handle2 = opendir($directory2)) {
    while (($file2 = readdir($handle2)) !== false) {
		echo '<img style="height:200px; width:250px;" src="' . $directory2 . '/' . $file2 . '" alt="' . $file2 . '">';
    }
    closedir($handle2);
}

echo "<br>Garages:<br>";
$directory3 = 'fotos/garages';
if ($handle3 = opendir($directory3)) {
    while (($file3 = readdir($handle3)) !== false) {
		echo '<img style="height:200px; width:250px;" src="' . $directory3 . '/' . $file3 . '" alt="' . $file3 . '">';
    }
    closedir($handle3);
}

echo "<br>Deuren:<br>";
$directory4 = 'fotos/deuren';
if ($handle4 = opendir($directory4)) {
    while (($file4 = readdir($handle4)) !== false) {
		echo '<img style="height:200px; width:250px;" src="' . $directory4 . '/' . $file4 . '" alt="' . $file4 . '">';
    }
    closedir($handle4);
}

echo "<br>Slaapkamers:<br>";
$directory5 = 'fotos/slaapkamers';
if ($handle5 = opendir($directory5)) {
    while (($file5 = readdir($handle5)) !== false) {
		echo '<img style="height:200px; width:250px;" src="' . $directory5 . '/' . $file5 . '" alt="' . $file5 . '">';
    }
    closedir($handle5);
}
?>
</style>