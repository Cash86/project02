<?php
include('src/config.php');
$res = $dbh->query('select * from ' . DB_NAME . '.projects where datum > curdate() and datum is not null');

$title = 'VACC - Karlsruhe - Veranstaltungen';
$content = 'VACC, Karlsruhe, Cimbria-Fidelitas, Cimfid, 1856, 1951, Landsmannschaft, Turnerschaft, Rhenania, Gotia-Zaringia';
include('header.php');
?>
<div id="wrapper">
    <div class="box" id="shadow">
        <?php
        foreach ($res as $dsatz) { ?>
        <div class="one">
            <?php include('src/box.php');
            echo '</div>';
            }
            ?>
        </div>
    </div>
</div>

<?php include('footer.php');
die($dbh);
?>
