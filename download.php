<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Download File</title>

<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background:  #F5F5F5;
        min-height: 100vh;
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .container {
        background: #FFFFFF;
        max-width: 420px;
        width: 100%;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 40px 50px 70px rgba(122, 2, 2, 0.15);
        text-align: center;
    }

    h2 {
        margin-bottom: 20px;
        color: #333;
    }

    select {
        width: 100%;
        padding: 10px;
        font-size: 15px;
        border-radius: 6px;
        border: 1px solid #ccc;
        margin-bottom: 15px;
        cursor: pointer;
    }

    button {
        background: #fff;
        color: black;
        border: 1px solid black;
        padding: 12px 22px;
        font-size: 16px;
        border-radius: 6px;
        cursor: pointer;
        /* transition: all 0.3s ease; */
        width: 100%;
    }

    button:hover {
        background: #1565C0;
        transform: translateY(-2px);
        box-shadow: 0 5px 12px rgba(0, 0, 0, 0.2);
    }

    button:active {
        transform: translateY(0);
        box-shadow: none;
    }

    .message {
        margin-top: 15px;
        color: red;
        font-size: 14px;
    }
</style>
</head>

<body>
<div class="container">

<h2>Select a file to download</h2>

<form method="post">
    <select name="filename" required>
        <option value=""> Choose a file </option>

        <?php
        $dir = "uploads/";

        if (is_dir($dir)) {
            $files = scandir($dir);
            foreach ($files as $file) {
                if ($file != "." && $file != "..") {
                    echo "<option value=\"$file\">$file</option>";
                }
            }
        }
        ?>
    </select>

    <button type="submit" name="download">Download File</button>
</form>

<?php
if (isset($_POST['download'])) {

    $filename = basename($_POST['filename']); // security
    $filePath = "uploads/" . $filename;

    if (file_exists($filePath)) {

        if (ob_get_level()) ob_end_clean();

        header("Content-Type: application/octet-stream");
        header("Content-Disposition: attachment; filename=\"$filename\"");
        header("Content-Length: " . filesize($filePath));

        readfile($filePath);
        exit;
    } else {
        echo "<div class='message'>File not found.</div>";
    }
}
?>
</div>
</body>
</html>