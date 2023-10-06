<?php
require __DIR__ . '/header.php'; //Linked to the html head where the css is connected
?>

<body>

    <h1> Welcome</h1>

    <div class="container">

        <div class="wrapper">
            <div class="team-names">
                <?php
                require __DIR__ . '/dataPrinter.php'; //Name of the teams
                ?>
            </div>
            <div class="city-values">
                <?php
                require __DIR__ . '/cityValues.php'; //All the unique city values are printed here
                ?>
            </div>
        </div>
        <div class="number-of-teams">
            <?php
            require __DIR__ . '/numberOfTeams.php'; //Echos the total number of teams
            ?>
        </div>
    </div>
</body>

</html>