<?php

include('src/config.php');

$sql = 'select * from ' . DB_NAME . '.projects where';
$dsatz = $dbh->query($sql . ' id = "1"')->fetch(PDO::FETCH_ASSOC);

$title = 'VACC - Karlsruhe';
$content = 'VACC, Karlsruhe, Cimbria-Fidelitas, Cimfid, 1856, 1951, Landsmannschaft, Turnerschaft, Rhenania, Gotia-Zaringia';
include('header.php');
?>
<div id="main">
    <div id="wrapper">
        <div id="shadow">
        <div class="one">
            <?php
            include('src/box.php');
            ?>
        </div>
        <div class="one">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2613.7503746105426!2d8.407496000000009!3d49.00757499999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47970647cfef3fd9%3A0x9aae5aeecfe77254!2sZum+kleinen+Ketterer!5e1!3m2!1sde!2s!4v1431609475614" width="850" height="400" frameborder="0" style="border:0"></iframe>
        </div>
    </div>
        </div>
</div>

<?php include('footer.php');
$dbh = null;
?>
