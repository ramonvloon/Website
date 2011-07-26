<?php
if(isset($_GET['delete']) && $_GET['delete']=='true') {
   unlink("fotos/".$_POST['fileToDelete']);
}
?>
<?php 
                $files = "";
if ($handle = opendir('fotos/')) {  
    while (false !== ($file = readdir($handle))) 
	{
        if ($file != "." && $file != ".." && is_dir('fotos/' . $file))
		{   
            if ($handle2 = opendir('fotos/' . $file)) {
                while (($file2 = readdir($handle2)) !== false) {
                    if ($file2 != "." && $file2 != ".." && !is_dir($file2)) {
                                    $files .= "'" . "fotos/" . $file . "/" . $file2 . "',";
                                    }}}
        }   
    }
    closedir($handle);
    }
			echo "<td><a href=".$files."><img src=".$files." width=\"70\" height=\"50\"></a></td>";
			
			echo "<form method=\"post\" name=\"deleteSomething\" action="?><?php echo $_SERVER['PHP_SELF'].'?delete=true';?><?php echo" >
			<input type=\"text\" name=\"fileToDelete\" value=".$files." >
			<input type=\"submit\" value=\"Delete\"></form>";
?>