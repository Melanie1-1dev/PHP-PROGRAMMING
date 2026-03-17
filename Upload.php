
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP File Upload</title>
</head>
<body>

<h2>Upload a File</h2>

<form method="POST" enctype="multipart/form-data">
    <input type="file" name="uploaded_file" required>
    <br><br>
    <button type="submit">Upload File</button>
</form>

<?php
if (isset($_FILES['uploaded_file'])) {

    $fileName = $_FILES['uploaded_file']['name'];
    $tmpName  = $_FILES['uploaded_file']['tmp_name'];
    $fileSize = $_FILES['uploaded_file']['size'];
    $uploadDir = "uploads/";

    // Create uploads folder if it doesn't exist
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Move file from temp location to uploads folder
    if (move_uploaded_file($tmpName, $uploadDir . $fileName)) {
        echo "<p style='color:green;'>File uploaded successfully!</p>";
        echo "<p>File name: $fileName</p>";
        echo "<p>File size: $fileSize bytes</p>";
    } else {
        echo "<p style='color:red;'>File upload failed.</p>";
    }
}
?>

</body>
</html>