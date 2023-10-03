<?php
require __DIR__ . ('/header.php'); ?>
<div class="table-container">
    <h1>Some teams assignment</h1>
    <?php require __DIR__ . ('/table.php'); ?>
    <table>
        <tr>
            <th>
                <h3>Total number of teams:</h3>
            </th>
            <td>
                <?php require __DIR__ . ('/totalTeams.php'); ?>
            </td>
        </tr>
        <tr>
            <th>
                <h3>The cities affected by football are:</h3>
            </th>
            <td>
                <?php require __DIR__ . ('/cities.php') ?>
            </td>
        </tr>
    </table>
</div>


<?php require __DIR__ . ('/footer.php'); ?>