<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $file = $_FILES['file'];

    // Directory where files will be uploaded
    $upload_dir = 'uploads/';
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    // Path of the uploaded file
    $upload_file = $upload_dir . basename($file['name']);

    if (move_uploaded_file($file['tmp_name'], $upload_file)) {
        echo "File has been uploaded successfully!";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
} else {
    echo "Invalid request method.";
}
?>
