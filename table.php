<?php
require __DIR__ . ('/data.php');
?>
<table>
    <?php foreach ($teams as $key => $team) : ?>
        <tr>
            <th><?= $key ?></th>
            <td><?= $team['league']; ?></td>
            <td><?= $team['last-time-champions'] ?></td>
            <td><?= $team['city'] ?></td>
            <td><?php if (isset($team['nickname'])) {
                    echo $team['nickname'];
                } else {
                    echo "-";
                } ?></td>
            <td><?= $team['url'] ?></td>
        </tr>
    <?php endforeach;  ?>
</table>