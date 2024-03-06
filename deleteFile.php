<?php
// Get the path from the URL parameter
if (isset($_GET['path']) && isset($_GET['filename'])) {
    $folderPath = $_GET['path'];
    $fileName = $_GET['filename'];
    if (!empty($folderPath) && !empty($fileName)) {
        deleteFileByName($folderPath, $fileName);
    } else {
        echo "no path found";
        exit;
    }
} else {
    echo "no path found";
    exit;
}


function deleteFileByName($folderPath, $fileName)
{
    if (is_dir($folderPath)) {
        if ($dirHandle = opendir($folderPath)) {
            while (($file = readdir($dirHandle)) !== false) {
                if ($file != '.' && $file != '..' && $file == $fileName) {
                    unlink($folderPath . '/' . $file);
                    echo "File - $file deleted successfully from - $folderPath";
                    break; // Stop after deleting the file
                }
            }
            closedir($dirHandle);
        }
    } else {
        echo "directory not found: $folderPath";
    }
}
