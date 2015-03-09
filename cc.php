<?php

include('src/config.php');
$dsatz = $dbh->query('select * from ' . DB_NAME . '.information where id="7"')->fetch(PDO::FETCH_ASSOC);

$title = 'VACC - Karlsruhe - Über uns';
$content = 'VACC, Karlsruhe, Cimbria-Fidelitas, Cimfid, 1856, 1951, Landsmannschaft, Turnerschaft, Rhenania, Gotia-Zaringia';
include('header.php');
?>
<div id="wrapper">
    <div class="box" id="shadow">
        <div class="one">
            <?php include('src/box.php'); ?>
        </div>
    </div>
</div>

<?php include('footer.php');
die($dbh);
?>
