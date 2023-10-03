<?php
require __DIR__ . ('/data.php');
?>
<table>
    <tr>
        <td class="t-head">Team</td>
        <td class="t-head">League</td>
        <td class="t-head">Last championship win</td>
        <td class="t-head">City</td>
        <td class="t-head">Nickname</td>
        <td class="t-head">Homepage</td>
    </tr>
    <?php foreach ($teams as $key => $team) : ?>
        <tr>
            <th><?= $key ?></th>
            <td><?= $team['league']; ?></td>
            <td><?= $team['last-time-champions'] ?></td>
            <td><?= $team['city'] ?></td>
            <td><?php if (isset($team['nickname'])) {
                    echo $team['nickname'];
                } else {
                    echo " ";
                } ?></td>
            <td><a href="<?= $team['url'] ?>"><?= $team['url'] ?></a> </td>
        </tr>
    <?php endforeach;  ?>
</table>