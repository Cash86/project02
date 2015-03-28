<?php

include('src/config.php');
$sql = 'select * from ' . DB_NAME . '.information where id < 4';
$res = $dbh->query($sql);

$title = 'VACC - Karlsruhe';
$content = 'VACC, Karlsruhe, Cimbria-Fidelitas, Cimfid, 1856, 1951, Landsmannschaft, Turnerschaft, Rhenania, Gotia-Zaringia';
include('header.php');
?>
<div id="main">
        <div id="wrapper">
    <div id="shadow">
            <div id="start">
                <img src="img/start-img.jpg" alt=""/>
            </div>
            <?php foreach ($res as $dsatz) { ?>
            <div class="triple">
                <?php include('src/box.php');
                echo '</div>';
                }; ?>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php');
$dbh = null;
?>
