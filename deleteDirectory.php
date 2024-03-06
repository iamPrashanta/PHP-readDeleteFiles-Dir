<?php
// Get the path from the URL parameter
if (isset($_GET['path'])) {
    $folderPath = $_GET['path'];
    if (!empty($folderPath)) {
        deleteFolder($folderPath);
    } else {
        echo "no path found";
        exit;
    }
} else {
    echo "no path found";
    exit;
}

function deleteFolder($folderPath)
{
    if (is_dir($folderPath)) {
        // Open the folder
        if ($dirHandle = opendir($folderPath)) {
            // Loop through the folder
            while (($file = readdir($dirHandle)) !== false) {
                // Skip current and parent directory links
                if ($file != '.' && $file != '..') {
                    // Check if it's a file or directory
                    if (is_dir($folderPath . '/' . $file)) {
                        // Recursively delete subdirectories
                        deleteFolder($folderPath . '/' . $file);
                    } else {
                        // Delete the file
                        unlink($folderPath . '/' . $file);
                    }
                }
            }
            // Close directory handle
            closedir($dirHandle);
            // Remove the directory
            rmdir($folderPath);
            echo "Folder deleted successfully";
        }
    } else {
        echo "directory not found: $folderPath";
    }
}
