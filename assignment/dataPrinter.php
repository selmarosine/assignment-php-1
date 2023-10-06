<?php

require __DIR__ . '/data.php';

?>
<table border="1">
    <tr>
        <th>Teams</td>

            <?php
            foreach ($teams as $key => $value) {
                echo "<tr><td>" . $key . "</td></tr>";
            } ?>
</table>