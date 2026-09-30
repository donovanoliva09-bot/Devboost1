<?php
session_start();
include("conexion.php");

// Verify if user is logged in
if (!isset($_SESSION['id_usuario'])) {
    header("Location: login.php");
    exit;
}

$id_usuario = $_SESSION['id_usuario'];

// Check if a file was uploaded
if (isset($_FILES['upload-photo']) && $_FILES['upload-photo']['error'] === UPLOAD_ERR_OK) {
    // File information
    $fileTmpPath = $_FILES['upload-photo']['tmp_name'];
    $fileName = $_FILES['upload-photo']['name'];
    $fileSize = $_FILES['upload-photo']['size'];
    $fileType = $_FILES['upload-photo']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));

    // Validate file extension
    $allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');
    if (in_array($fileExtension, $allowedExtensions)) {
        // Validate file size (max 2MB)
        $maxFileSize = 2 * 1024 * 1024; // 2MB
        if ($fileSize <= $maxFileSize) {
            // Directory where images will be saved
            $uploadFileDir = 'img/users/';
            // Create directory if it doesn't exist
            if (!file_exists($uploadFileDir)) {
                mkdir($uploadFileDir, 0755, true);
            }
            
            $newFileName = $id_usuario . '_' . time() . '.' . $fileExtension;
            $dest_path = $uploadFileDir . $newFileName;

            // Move uploaded file to destination
            if (move_uploaded_file($fileTmpPath, $dest_path)) {
                // Update database with new image
                $sql = "UPDATE usuarios SET img = '$dest_path' WHERE id_usuario = '$id_usuario'";
                if (mysqli_query($conex, $sql)) {
                    $_SESSION['success_message'] = "Profile picture updated successfully!";
                } else {
                    $_SESSION['error_message'] = "Database update failed.";
                    // Delete uploaded image if database update failed
                    unlink($dest_path);
                }
            } else {
                $_SESSION['error_message'] = "Error moving uploaded file.";
            }
        } else {
            $_SESSION['error_message'] = "File is too large. Maximum allowed size: 2MB.";
        }
    } else {
        $_SESSION['error_message'] = "Invalid file format. Only JPG, JPEG, PNG and GIF are allowed.";
    }
} else {
    $errorMsg = "File upload error.";
    switch ($_FILES['upload-photo']['error']) {
        case UPLOAD_ERR_INI_SIZE:
        case UPLOAD_ERR_FORM_SIZE:
            $errorMsg = "File is too large.";
            break;
        case UPLOAD_ERR_PARTIAL:
            $errorMsg = "The file was only partially uploaded.";
            break;
        case UPLOAD_ERR_NO_FILE:
            $errorMsg = "No file was selected.";
            break;
        case UPLOAD_ERR_NO_TMP_DIR:
            $errorMsg = "Missing temporary folder.";
            break;
        case UPLOAD_ERR_CANT_WRITE:
            $errorMsg = "Failed to write file to disk.";
            break;
        case UPLOAD_ERR_EXTENSION:
            $errorMsg = "A PHP extension stopped the file upload.";
            break;
    }
    $_SESSION['error_message'] = $errorMsg;
}

header("Location: profile.php");
exit;
?>