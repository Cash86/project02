<?php
include('src/config.php');
$res1 = $dbh->query('select * from ' . DB_NAME . '.persons where function like "owner"')->fetch(PDO::FETCH_ASSOC);
$res2 = $dbh->query('select * from ' . DB_NAME . '.persons where function like "designer"')->fetch(PDO::FETCH_ASSOC);

$title = 'VACC - Karlsruhe';
$content = 'VACC, Karlsruhe, Cimbria-Fidelitas, Cimfid, 1856, 1951, Landsmannschaft, Turnerschaft, Rhenania, Gotia-Zaringia';
include('header.php');
?>
<div id="main">
    <div id="wrapper">
        <div id="shadow">
        <div class="one">
            <?php
            echo '<div class="blogtitle"><h3>Impressum</h3></div>
                <div class="imprint">
                <p>' . $res1["prefix"] . ' ' . $res1["fullname"] . '<br/>' . $res1["address"] . '<br/>' . $res1["plz"] . ' ' . $res1["city"] . '<br/>' . $res1["email"] . '<br/>' . $res1["phone"] . '<br/></p></div>';
            echo '<div class="blogtitle"><h3>Erstellung und Design</h3></div>
                <div class="imprint">
                <p>' . $res2["prefix"] . ' ' . $res2["fullname"] . '<br/>' . $res2["email"] . '</p></div>';
            ?>
            <div class="laws">
                <h3>Rechtliche Hinweise</h3><h4>1. Haftungsbeschränkung</h4>Die Inhalte dieser Website werden mit
                größtmöglicher Sorgfalt erstellt. Der Anbieter übernimmt jedoch keine Gewähr für die Richtigkeit,
                Vollständigkeit und Aktualität der bereitgestellten Inhalte. Die Nutzung der Inhalte der Website erfolgt
                auf eigene Gefahr des Nutzers. Namentlich gekennzeichnete Beiträge geben die Meinung des jeweiligen
                Autors und nicht immer die Meinung des Anbieters wieder. Mit der reinen Nutzung der Website des
                Anbieters kommt keinerlei Vertragsverhältnis zwischen dem Nutzer und dem Anbieter zustande.<h4>2.
                    Externe Links</h4>Diese Website enthält Verknüpfungen zu Websites Dritter ("externe Links"). Diese
                Websites unterliegen der Haftung der jeweiligen Betreiber. Der Anbieter hat bei der erstmaligen
                Verknüpfung der externen Links die fremden Inhalte daraufhin überprüft, ob etwaige Rechtsverstöße
                bestehen. Zu dem Zeitpunkt waren keine Rechtsverstöße ersichtlich. Der Anbieter hat keinerlei Einfluss
                auf die aktuelle und zukünftige Gestaltung und auf die Inhalte der verknüpften Seiten. Das Setzen von
                externen Links bedeutet nicht, dass sich der Anbieter die hinter dem Verweis oder Link liegenden Inhalte
                zu Eigen macht. Eine ständige Kontrolle der externen Links ist für den Anbieter ohne konkrete Hinweise
                auf Rechtsverstöße nicht zumutbar. Bei Kenntnis von Rechtsverstößen werden jedoch derartige externe
                Links unverzüglich gelöscht.<h4>3. Urheber- und Leistungsschutzrechte</h4>Die auf dieser Website
                veröffentlichten Inhalte unterliegen dem deutschen Urheber- und Leistungsschutzrecht. Jede vom deutschen
                Urheber- und Leistungsschutzrecht nicht zugelassene Verwertung bedarf der vorherigen schriftlichen
                Zustimmung des Anbieters oder jeweiligen Rechteinhabers. Dies gilt insbesondere für Vervielfältigung,
                Bearbeitung, Übersetzung, Einspeicherung, Verarbeitung bzw. Wiedergabe von Inhalten in Datenbanken oder
                anderen elektronischen Medien und Systemen. Inhalte und Rechte Dritter sind dabei als solche
                gekennzeichnet. Die unerlaubte Vervielfältigung oder Weitergabe einzelner Inhalte oder kompletter Seiten
                ist nicht gestattet und strafbar. Lediglich die Herstellung von Kopien und Downloads für den
                persönlichen, privaten und nicht kommerziellen Gebrauch ist erlaubt.<br><br>Die Darstellung dieser
                Website in fremden Frames ist nur mit schriftlicher Erlaubnis zulässig.<h4>4. Datenschutz</h4>Durch den
                Besuch der Website des Anbieters können Informationen über den Zugriff (Datum, Uhrzeit, betrachtete
                Seite) gespeichert werden. Diese Daten gehören nicht zu den personenbezogenen Daten, sondern sind
                anonymisiert. Sie werden ausschließlich zu statistischen Zwecken ausgewertet. Eine Weitergabe an Dritte,
                zu kommerziellen oder nichtkommerziellen Zwecken, findet nicht statt.<br><br>Der Anbieter weist
                ausdrücklich darauf hin, dass die Datenübertragung im Internet (z.B. bei der Kommunikation per E-Mail)
                Sicherheitslücken aufweisen und nicht lückenlos vor dem Zugriff durch Dritte geschützt werden
                kann.<br><br>Die Verwendung der Kontaktdaten des Impressums zur gewerblichen Werbung ist ausdrücklich
                nicht erwünscht, es sei denn der Anbieter hatte zuvor seine schriftliche Einwilligung erteilt oder es
                besteht bereits eine Geschäftsbeziehung. Der Anbieter und alle auf dieser Website genannten Personen
                widersprechen hiermit jeder kommerziellen Verwendung und Weitergabe ihrer Daten.<br><br><strong>Personenbezogene
                    Daten</strong><br>Sie können unsere Webseite ohne Angabe personenbezogener Daten besuchen. Soweit
                auf unseren Seiten personenbezogene Daten (wie Name, Anschrift oder E-Mail Adresse) erhoben werden,
                erfolgt dies, soweit möglich, auf freiwilliger Basis. Diese Daten werden ohne Ihre ausdrückliche
                Zustimmung nicht an Dritte weitergegeben. Sofern zwischen Ihnen und uns ein Vertragsverhältnis
                begründet, inhaltlich ausgestaltet oder geändert werden soll oder Sie an uns eine Anfrage stellen,
                erheben und verwenden wir personenbezogene Daten von Ihnen, soweit dies zu diesen Zwecken erforderlich
                ist (Bestandsdaten). Wir erheben, verarbeiten und nutzen personenbezogene Daten soweit dies erforderlich
                ist, um Ihnen die Inanspruchnahme des Webangebots zu ermöglichen (Nutzungsdaten). Sämtliche
                personenbezogenen Daten werden nur solange gespeichert wie dies für den geannten Zweck (Bearbeitung
                Ihrer Anfrage oder Abwicklung eines Vertrags) erforderlich ist. Hierbei werden steuer- und
                handelsrechtliche Aufbewahrungsfristen berücksichtigt. Auf Anordnung der zuständigen Stellen dürfen wir
                im Einzelfall Auskunft über diese Daten (Bestandsdaten) erteilen, soweit dies für Zwecke der
                Strafverfolgung, zur Gefahrenabwehr, zur Erfüllung der gesetzlichen Aufgaben der
                Verfassungsschutzbehörden oder des Militärischen Abschirmdienstes oder zur Durchsetzung der Rechte am
                geistigen Eigentum erforderlich ist.<p><strong>Auskunftsrecht</strong><br>Sie haben das jederzeitige
                    Recht, sich unentgeltlich und unverzüglich über die zu Ihrer Person erhobenen Daten zu erkundigen.
                    Sie haben das jederzeitige Recht, Ihre Zustimmung zur Verwendung Ihrer angegeben persönlichen Daten
                    mit Wirkung für die Zukunft zu widerrufen. Zur Auskunftserteilung wenden Sie sich bitte an den
                    Anbieter unter den Kontaktdaten im Impressum.</p><h4>5. Besondere Nutzungsbedingungen</h4>

                <p>Soweit besondere Bedingungen für einzelne Nutzungen dieser Website von den vorgenannten Nummern 1.
                    bis 4. abweichen, wird an entsprechender Stelle ausdrücklich darauf hingewiesen. In diesem Falle
                    gelten im jeweiligen Einzelfall die besonderen Nutzungsbedingungen.</p>
            </div>
        </div>
    </div>
        </div>
</div>

<?php include('footer.php');
$dbh = null;
?>
