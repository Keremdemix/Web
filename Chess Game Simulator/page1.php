<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>MZG Chess Game Simulator</title>
	<link rel="stylesheet" type="text/css" href="page1.css">
</head>
<body>
	<p>Kerem DEMİR 202003001028</p>
	<div class="container">
		<h1>MZG Chess Game Simulator</h1>
		<p class="subtitle">Score table for chess competition HTML, CSS, Javascript, PHP</p>
		<form method="GET" action="page2.php" onsubmit="return validateForm()">
			<label for="num_players">Enter number of chess players:</label>
			<input type="text" id="num_players" name="num_players">
			<button type="submit" id="start_btn">Start</button>
		</form>
		<p class="footer">&copy; MZG 2023</p>
	</div>

	<script type="text/javascript">
		function validateForm() {
			let numPlayers = document.getElementById("num_players").value.trim();

			if (numPlayers === "" || isNaN(numPlayers) || numPlayers < 2) {
				alert("Please enter a valid number of players (at least 2).");
				return false;
			}

			return true;
		}
	</script>
</body>
</html>
