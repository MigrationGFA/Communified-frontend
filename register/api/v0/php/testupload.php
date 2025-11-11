
<?php
$dataInfo = array();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    $files = $_FILES['file'];

    foreach ($files['name'] as $key => $name) {
        if ($files['error'][$key] === UPLOAD_ERR_OK) {
            $tmpName = $files['tmp_name'][$key];
            $newName = uniqid() . '_' . basename($name);
            $destination = realpath(__DIR__ . '/../../../../portal/uploads/files') . '/' . $newName;
            

            // Move the file to the desired directory
            if (move_uploaded_file($tmpName, $destination)) {
                $dataInfo[] = $newName;
            }
        }
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <h2>Upload Files</h2>
    
    <!-- Form for file upload -->
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file[]" multiple>
        <button type="submit">Upload</button>
    </form>

    <?php if (!empty($dataInfo)): ?>
        <h3>Uploaded Files:</h3>
        <ul>
            <?php foreach ($dataInfo as $filePath): ?>
                <li><?php echo htmlspecialchars($filePath); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>
</html>
