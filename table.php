<?php
require __DIR__ . ('/data.php');
?>
<table>
    <?php foreach ($teams as $team) {
        echo "<tr>";
        foreach ($team as $column) {
            echo "<td>$column</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
