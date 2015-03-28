<?php

include('src/config.php');
$sql = 'select * from ' . DB_NAME . '.information';
$res1 = $dbh->query($sql . ' where id="4"')->fetch(PDO::FETCH_ASSOC);
$res2 = $dbh->query($sql . ' where id="5"')->fetch(PDO::FETCH_ASSOC);
$res3 = $dbh->query($sql . ' where id="6"')->fetch(PDO::FETCH_ASSOC);

$title = 'VACC - Karlsruhe - Über uns';
$content = 'VACC, Karlsruhe, Cimbria-Fidelitas, Cimfid, 1856, 1951, Landsmannschaft, Turnerschaft, Rhenania, Gotia-Zaringia';
include('header.php');
?>
<div id="main">
    <div id="wrapper">
        <div id="shadow">
        <div class="one">
            <?php $dsatz = $res1;
            include('src/box.php'); ?>
        </div>
        <div style="clear: both"></div>
        <div class="double">
            <?php $dsatz = $res2;
            include('src/box.php'); ?>
        </div>
        <div class="double last">
            <?php $dsatz = $res3;
            include('src/box.php'); ?>
        </div>
    </div>
        </div>
</div>

<?php include('footer.php');
$dbh = null;
?>
