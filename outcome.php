<?php
require_once "templates/header.php";

if (! playersRegistered()) {
    header("location: index.php");
}

resetBoard();
?>

<table class="wrapper" cellpadding="0" cellspacing="0">
    <tr>
        <td>

            <div class="welcome">

                <h1>
                    <?php
                    if ($_GET['player']) {
                        echo currentPlayer() . " a remporté la victoire !";
                    }
                    else {
                        echo "C'est un match nul !";
                    }
                    ?>
                </h1>

                <div class="player-name">
                Le score <?php echo playerName('x')?>: <b><?php echo score('x')?></b>
                </div>

                <div class="player-name">
                Le score <?php echo playerName('o')?>: <b><?php echo score('o')?></b>
                </div>

                <a href="player.php" class="replay-btn">Rejouer</a><br />

                <a href="index.php" class="reset-btn">Retour au début</a>
            </div>

        </td>
    </tr>
</table>

</body>
</html>

