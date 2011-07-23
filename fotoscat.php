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
?>

</style>