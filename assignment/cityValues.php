<?php

require __DIR__ . '/data.php';

?>
<table border="1">
    <tr>
        <th>League</th>
        <th>Last time champions</th>
        <th>City</th>
        <th>Nickname</th>
        <th>Url</th>
    </tr>

    <?php

    foreach ($teams as $team) {
        echo "<tr><td>" . $team['league'] . "</td><td>";

        if ($team['last-time-champions'] == null) {
            echo "Have never won";
        }
        echo $team['last-time-champions'] . "</td><td>" . $team['city'] . "</td><td>";

        if ($team['nickname'] == null) {
            echo "-";
        }
        echo $team['nickname'] . "</td><td>";
    ?> <a href="<?php echo $team['url']; ?> "> <?php echo "Website" . "</td></tr>";
                                            }
                                                ?>
</table>