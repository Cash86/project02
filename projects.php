<?php

include('src/config.php');
$sql = 'select * from ' . DB_NAME . '.information';
$res1 = $dbh->query($sql . ' where id="3"')->fetch(PDO::FETCH_ASSOC);
$res2 = $dbh->query($sql . ' where id="2"')->fetch(PDO::FETCH_ASSOC);

$title = 'VACC - Karlsruhe - Veranstaltungen';
$content = 'VACC, Karlsruhe, Cimbria-Fidelitas, Cimfid, 1856, 1951, Landsmannschaft, Turnerschaft, Rhenania, Gotia-Zaringia';
include('header.php');
?>
<div id="main">
    <div id="wrapper">
        <div id="shadow">
            <div class="double">
                <?php $dsatz = $res1;
                include('src/box.php'); ?>
            </div>
            <div class="double last">
                <?php $dsatz = $res2;
                include('src/box.php'); ?>
            </div>
        </div>
        </div>
</div>

<?php include('footer.php');
$dbh = null;
?>
