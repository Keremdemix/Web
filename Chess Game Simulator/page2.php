<?php
// Check if number of players is valid
if (isset($_GET['num_players']) && ctype_digit($_GET['num_players'])) {
    $num_players = intval($_GET['num_players']);
} else {
    // If the number of players is not valid, show an error message and exit
    echo "Please enter a valid number of players";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>MZG Chess Game Simulator</title>
    <link rel="stylesheet" href="page2.css">
</head>
<body>
    <p>Kerem DEMİR 202003001028</p>
    <h1>MZG Chess Game Simulator</h1>
    <h2>Score table for chess competition HTML, CSS, Javascript, PHP</h2>
    <form method="POST" action="page3.php">
        <label for="num_players">The number of chess players:</label>
        <input type="number" id="num_players" name="num_players" value="<?php echo $num_players; ?>" readonly>
        <table>
            <tr>
                <th>Index</th>
                <th>Player Name</th>
            </tr>
            <?php
            for ($i = 1; $i <= $num_players; $i++) {
                echo '<tr><td>' . $i . '</td><td><input type="text" name="player[]" required></td></tr>';
            }
            ?>
        </table>
        <input type="submit" value="Generate Tournament">
    </form>
    <p class="footer">&copy; MZG 2023</p>
</body>
</html>
