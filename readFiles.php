<?php
// Get the path from the URL parameter
if (isset($_GET['path'])) {
    $folderPath = $_GET['path'];
} else {
    $folderPath = '../../../'; // Default path
}

// List all folders and files in the directory
listFolderContents($folderPath);

function listFolderContents($folderPath)
{
    if (is_dir($folderPath)) {
        if ($dirHandle = opendir($folderPath)) {
            echo "Files and folders in $folderPath:<br>";
            while (($file = readdir($dirHandle)) !== false) {
                echo $file . "<br>";
            }
            closedir($dirHandle);
        }
    } else {
        echo "directory not found: $folderPath";
    }
}
