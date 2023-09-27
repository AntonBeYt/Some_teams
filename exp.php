<?php require __DIR__ . ('/data.php'); ?>
<?php array_filter($teams) ?>
<table>
    <?php foreach ($teams as $key => $teamName) : ?>
        <th>
            <?php print_r($key) ?>
        </th>
    <?php endforeach; ?>
    <tr>
        <?php foreach ($teams as $team) : ?>
            <td>
                <?php echo $team['league'] ?>
            </td>
        <?php endforeach; ?>
    </tr>
    <tr>
        <?php foreach ($teams as $team) : ?>
            <td>
                <?php echo $team['last-time-champions'] ?>
            </td>
        <?php endforeach; ?>
    </tr>
    <tr>
        <?php foreach ($teams as $team) : ?>
            <td>
                <?php echo $team['city'] ?>
            </td>
        <?php endforeach; ?>
    </tr>
    <tr>
        <?php foreach ($teams as $team) : ?>
            <td>
                <?php echo $team['nickname'] ?>
            </td>
        <?php endforeach; ?>
    </tr>
    <tr>
        <?php foreach ($teams as $team) : ?>
            <td>
                <?php echo $team['url'] ?>
            </td>
        <?php endforeach; ?>
    </tr>
</table>





<!-- <table>
    <?php foreach ($teams as $team) : ?>
        <tr>
        <?php endforeach; ?>
        <?php foreach ($team as $column) : ?>
            <td><?= $column ?></td>
        </tr>
    <?php endforeach; ?>
</table> -->

<!-- <?php foreach ($actors as $actor) : ?>
    <article>
        <img src="<?php echo $actor['image']; ?>" alt="<?php echo $actor['name']; ?>">
        <h2><?php echo $actor['name'] ?></h2>
        <p><?php echo $actor['character']; ?></p>
    </article>
<?php endforeach; ?> -->