<?
$file = $_POST['naamfoto'];
unlink($file)

if (unlink($file) == TRUE)
	{
	echo "bestand is verwijderd";
	}
	else
	{
	echo "bestand verwijderen is mislukt";
	}
?>
