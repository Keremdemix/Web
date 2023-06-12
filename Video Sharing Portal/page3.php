<?php
require_once 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $link = $_POST['link'];
    $description = $_POST['description'];

    if (!empty($link) && !empty($description)) {
        $dateAdded = date('Y-m-d H:i:s');
        $isDeleted = 0;
        $query = "INSERT INTO video (link, description, date_added, is_deleted)
                  VALUES ('$link', '$description', '$dateAdded', '$isDeleted')";

        mysqli_query($conn, $query);

        header('Location: page2.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add New Video</title>
    <link rel="stylesheet" type="text/css" href="style_page3.css">
</head>
<body>
    <h2>Add New Video</h2>
    <form method="POST" action="">
        <label for="link">Video Link:</label>
        <input type="text" id="link" name="link" required><br><br>
        
        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea><br><br>
        
        <input type="submit" value="Kaydet">
        <button onclick="window.location.href='page2.php';">Vazgeç</button>
    </form>
</body>
</html>