<?php
require_once "./templates/header.php";
?>

<form method="post" action="register-players.php">
    <div class="welcome">
        <h1>Commencez à jouer à Tic Tac Toe !</h1>
        <h2>Veuillez indiquer vos noms</h2>

        <div class="player-name">
            <label for="player-x">Premier joueur (X)</label>
            <input type="text" id="player-x" name="player-x" required />
        </div>

        <div class="player-name">
            <label for="player-o">Deuxième joueur (O)</label>
            <input type="text" id="player-o" name="player-o" required />
        </div>

        <button type="submit">Démarrer</button>
    </div>
</form>

<?php
require_once "./templates/footer.php";
