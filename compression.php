
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Compress File</title>
    <style>
        body {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif
        }

        input,
        button {
            font-family: inherit;
            border-radius: 3px;
        }

        .container {
            max-width: 500px;
            margin: 200px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: rgb(218, 218, 218);
        }
    </style>
</head>

<body>
    <div>
        <h1>Group 4</h1>
        <h3>File Compression</h3>
        <img src="uploads/background.jpeg" alt="barca">
        <!-- Form with a button to trigger compression -->
        <form method="post">
            <input type="submit" name="compress" value="Compress">
        </form>
    </div>

    <?php
    if (isset($_POST['compress'])) { // Check if the button was pressed

        $sourceFile = "uploads/barca.png";
        $zipFile = "compressed/barca.zip";

        $zip = new ZipArchive();

        // Check source file first
        if (!file_exists($sourceFile)) {
            echo "<h5 style='color: red;'>Source file does not exist.</h5>";
        } else {
            // Try opening the ZIP
            $result = $zip->open($zipFile, ZipArchive::CREATE | ZipArchive::OVERWRITE);

            if ($result === TRUE) {
                $zip->addFile($sourceFile, basename($sourceFile));
                $zip->close();

                echo "<h5 style='color: green;'>File compressed successfully!</h5>";
                echo "File at 'compressed/barca.zip' on the server.";
            } else {
                echo "<h5 style='color: red;'>Failed to create ZIP file. Error code: " . $result . "</h5>";
            }
        }
    }
    ?>
</body>

</html>