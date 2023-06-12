<!DOCTYPE html>
<html>
<head>
    <title>MZG Chess Game Simulator</title>
    <link rel="stylesheet" href="page3.css">
</head>
<body>
    <p>Kerem DEMİR 202003001028</p>
    <h1>MZG Chess Game Simulator</h1>
    <h2>Score table for chess competition HTML, CSS, Javascript, PHP</h2>
    <?php
        if(isset($_POST['num_players']) && isset($_POST['player'])){
            $num_players = $_POST['num_players'];
            $players = $_POST['player'];

            // Generate the table
            echo '<table>';
            echo '<tr><th>Matches</th><th>Player 1</th><th>Score</th><th>Player 2</th></tr>';
            $index = 1;
			for ($i = 0; $i < $num_players - 1; $i++) {
				for ($j = $i+1; $j < $num_players; $j++) {
					$player1 = $players[$i];
					$player2 = $players[$j];

					// Generate a random score
					$score = "";
					$rand_num = rand(1, 3);
					switch ($rand_num) {
						case 1:
							$score = "1-0";
							break;
						case 2:
							$score = "0-1";
							break;
						case 3:
							$score = "1/2-1/2";
							break;
					}

                    // Highlight the winner's name
                    $winner_class1 = "";
                    $winner_class2 = "";
                    if ($score == "1-0") {
                        $winner_class1 = "winner";
                    } elseif ($score == "0-1") {
                        $winner_class2 = "winner";
                    } elseif ($score == "1/2-1/2") {
                        $winner_class1 = "tie";
                        $winner_class2 = "tie";
                    }

                    echo '<tr><td>' . $index.'</td>';
                    echo '<td class="' . $winner_class1 . '">' . $player1 . '</td>';
                    echo '<td>' . $score . '</td>';
                    echo '<td class="' . $winner_class2 . '">' . $player2 . '</td></tr>';
                    $index++;
                }
            }
            echo '</table>';
        }
    ?>
    <p class="footer">&copy; MZG 2023</p>
</body>
</html>
