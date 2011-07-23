<?
$directory = 'fotos/';
if ($handle = opendir($directory)) {
    while (($file = readdir($handle)) !== false) {
		echo '<img style="height:200px; width:250px;" src="' . $directory . '/' . $file . '" alt="' . $file . '">';
    }
    closedir($handle);
}
?>
</style>