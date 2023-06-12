<?php

require_once 'connection.php';

if (isset($_GET['id'])) {
    $videoId = $_GET['id'];

    $query = "SELECT * FROM video WHERE id = $videoId";
    $result = mysqli_query($conn, $query);
    $video = mysqli_fetch_assoc($result);


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $link = $_POST['link'];
        $description = $_POST['description'];

        if (!empty($link) && !empty($description)) {
            $query = "UPDATE video SET link = '$link', description = '$description' WHERE id = $videoId";
            mysqli_query($conn, $query);

            header('Location: page2.php');
            exit();
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Video</title>
    <link rel="stylesheet" type="text/css" href="style_page3.css">
</head>
<body>
    <h2>Update Video</h2>
    <form method="POST" action="">
        <label for="link">Video Link:</label>
        <input type="text" id="link" name="link" value="<?php echo $video['link']; ?>" required><br><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required><?php echo $video['description']; ?></textarea><br><br>

        <input type="submit" value="Kaydet">
        <button onclick="window.location.href='page2.php';">Vazgeç</button>
    </form>
</body>
</html>