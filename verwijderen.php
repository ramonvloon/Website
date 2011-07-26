<?php
if (isset($_POST['fileToDelete'])) {
    unlink("fotos/" . $_POST['fileToDelete']);
}
$files = "";
$categories = "";
$handle = opendir('fotos/');
if ($handle) {
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != ".." && is_dir('fotos/' . $file)) {
            $handle2 = opendir('fotos/' . $file);
            if ($handle2) {
                while (($file2 = readdir($handle2)) !== false) {
                    if ($file2 != "." && $file2 != ".." && !is_dir($file2)) {
                        $files .= "fotos/" . $file . "/" . $file2 . ",";
                    }
                }
                $categories .= $file . ",";
            }
        }
    }
    closedir($handle);
    $files = substr($files, 0, strlen($files) - 1);
    $categories = substr($categories, 0, strlen($categories) - 1);
}
$files = explode(',', $files);
$categories = explode(',', $categories);
echo '
    <html>
        <head>
            <title>Verwijderscript</title>
        </head>
        <body>
            <form method="GET" action="' . $_SERVER['PHP_SELF'] . '">
                <select name="category" onChange="this.form.submit();">
';
foreach ($categories as $category) {
    if (isset($_GET['category'])) {
        if ($category == $_GET['category']) {
            echo '<option value="' . $category . '" selected>' . $category . '</option>';
        } else {
            echo '<option value="' . $category . '">' . $category . '</option>';
        }
    } else {
        echo '<option value="' . $category . '">' . $category . '</option>';
    }
}
echo '
                </select>
            </form>
            <div style="width:300px;height:300px;">
                <script type="text/javascript">
                    function submit(filename) {
                        if (confirm(\'Are you sure you want to delete\' + filename + \'?\')) {
                            document.getElementById(\'fileToDelete\').value=filename;
                            document.getElementById(\'fileDeletionForm\').submit();
                        }
                    }
                </script>
                <form id="fileDeletionForm" method="POST" action="' . $_SERVER['PHP_SELF'] . '">
                    <input type="hidden" id="fileToDelete" name="fileToDelete" />
';
foreach($files as $file) {
    if (isset($_GET['category'])) {
        if (strstr($file, $_GET['category']) != false) {
            echo '
                <img src="' . $file . '" alt="' . $file . '" style="width:200px;" onClick="submit(\'' . $file . '\');"/>
            ';
        }
    } else {
        echo '
            <img src="' . $file . '" alt="' . $file . '" style="width:200px;" onClick="submit(\'' . $file . '\');"/>
        ';
    }
}
echo '
                </form>
            </div>
        </body>
    </html>
';