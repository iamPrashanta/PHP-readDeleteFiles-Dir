notes about the PHP files and how to execute them, including examples of URL links:

---

### PHP Files Overview

1. **Delete Folder (`deleteFolder.php`):**
   - Deletes a folder and all its contents recursively.
   - Usage: `deleteFolder.php?path=folder_path`
   - Example: `deleteFolder.php?path=folder_to_delete`

2. **Delete File (`deleteFile.php`):**
   - Deletes a specific file from a folder.
   - Usage: `deleteFile.php?path=folder_path&filename=file_name`
   - Example: `deleteFile.php?path=folder&filename=file_to_delete.txt`

3. **List Files in Directory (`listFiles.php`):**
   - Lists all files and folders in a directory.
   - Default path: `../../../`
   - Usage: `listFiles.php?path=folder_path`
   - Example: `listFiles.php?path=directory_to_list`

---

### Execution Instructions

1. **Delete Folder (`deleteFolder.php`):**
   - Open the URL in your browser with the appropriate path parameter.
   - Example: `http://example.com/deleteFolder.php?path=folder_to_delete`

2. **Delete File (`deleteFile.php`):**
   - Open the URL in your browser with the folder path and file name parameters.
   - Example: `http://example.com/deleteFile.php?path=folder&filename=file_to_delete.txt`

3. **List Files in Directory (`listFiles.php`):**
   - Open the URL in your browser to list files in the default directory or specify a path parameter.
   - Example: `http://example.com/listFiles.php` or `http://example.com/listFiles.php?path=directory_to_list`

---
