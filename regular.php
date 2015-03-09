<?php

include('src/config.php');

$sql = 'select * from ' . DB_NAME . '.projects where';
$dsatz = $dbh->query($sql . ' id = "1"')->fetch(PDO::FETCH_ASSOC);

$title = 'VACC - Karlsruhe';
$content = 'VACC, Karlsruhe, Cimbria-Fidelitas, Cimfid, 1856, 1951, Landsmannschaft, Turnerschaft, Rhenania, Gotia-Zaringia';
include('header.php');
?>
<div id="wrapper">
    <div class="box" id="shadow">
        <div class="double-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2617.1536367003437!2d8.407588!3d49.007661999999996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47970647cfef3fd9%3A0x9aae5aeecfe77254!2sZum+kleinen+Ketterer!5e0!3m2!1sde!2sde!4v1425750476884"
                width="396" height="300" frameborder="0" style="border:0"></iframe>
        </div>
        <div class="double last">
            <?php
            include('src/box.php');
            ?>
        </div>
    </div>
</div>

<?php include('footer.php');
die($dbh);
?>
