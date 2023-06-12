<?php
require_once 'connection.php';

function deleteVideo($videoId)
{
    global $conn;

    $query = "UPDATE video SET is_deleted = 1 WHERE id = $videoId";
    mysqli_query($conn, $query);
}

$query = "SELECT * FROM video WHERE is_deleted = 0";
$result = mysqli_query($conn, $query);
$videos = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Video List</title>
    <link rel="stylesheet" type="text/css" href="style_page2.css">
</head>
<body>
    <h2>Video List</h2>

    <?php foreach ($videos as $video): ?>
        <div class="video-item">
            <a href="<?php echo $video['link']; ?>" target="_blank">
                <img class="video-thumbnail" src="https://img.youtube.com/vi/<?php echo $video['link']; ?>/default.jpg" alt="Thumbnail">
            </a>
                <h3><?php echo $video['description']; ?></h3>
                <div class="video-options">
                    <button onclick="window.location.href='page4.php?id=<?php echo $video['id']; ?>';">Güncelle</button>
                    <a href="deleteVideo.php?id=<?php echo $video['id']; ?>">
                        <img class="delete-button" src="redbuttonn.png" alt="Delete">
                    </a>
                </div>
            
        </div>
    <?php endforeach; ?>

    <button id="son" onclick="window.location.href='page3.php';">Yeni Video Ekle</button>
</body>
</html>
