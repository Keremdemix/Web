<?php

require_once 'connection.php';

function deleteVideo($videoId)
{
    global $conn;

    $query = "UPDATE video SET is_deleted = 1 WHERE id = $videoId";
    mysqli_query($conn, $query);
}

if (isset($_GET['id'])) {
    $videoId = $_GET['id'];


    deleteVideo($videoId);
}

header('Location: page2.php');
exit();
?>