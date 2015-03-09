<?php
$your_email = '';// <<=== update to your email address

session_start();
$errors = '';
$name = '';
$visitor_email = '';
$user_message = '';

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $user_message = $_POST['message'];
    ///------------Do Validations-------------
    if (empty($name) || empty($visitor_email)) {
        $errors .= "\n Name and Email are required fields. ";
    }
    if (IsInjected($visitor_email)) {
        $errors .= "\n Bad email value!";
    }
    if (empty($_SESSION['6_letters_code']) ||
        strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0
    ) {
        //Note: the captcha code is compared case insensitively.
        //if you want case sensitive match, update the check above to
        // strcmp()
        $errors .= "\n The captcha code does not match!";
    }

    if (empty($errors)) {
        //send the email
        $to = $your_email;
        $subject = "New form submission";
        $from = $your_email;
        $ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';

        $body = "A user  $name submitted the contact form:\n" .
            "Name: $name\n" .
            "Email: $visitor_email \n" .
            "Message: \n " .
            "$user_message\n" .
            "IP: $ip\n";

        $headers = "From: $from \r\n";
        $headers .= "Reply-To: $visitor_email \r\n";

        mail($to, $subject, $body, $headers);

        header('location: thank-you.html');
    }
}

// Function to validate against any email injection attempts
function IsInjected($str)
{
    $injections = array('(\n+)',
        '(\r+)',
        '(\t+)',
        '(%0A+)',
        '(%0D+)',
        '(%08+)',
        '(%09+)'
    );
    $inject = join('|', $injections);
    $inject = "/$inject/i";
    if (preg_match($inject, $str)) {
        return true;
    } else {
        return false;
    }
}

if (!empty($errors)) {
    echo "<p class='err'>" . nl2br($errors) . "</p>";
}
$title = 'VACC - Karlsruhe';
$content = 'VACC, Karlsruhe, Cimbria-Fidelitas, Cimfid, 1856, 1951, Landsmannschaft, Turnerschaft, Rhenania, Gotia-Zaringia';
include('header.php');
?>

<div id="wrapper">
    <div class="box" id="shadow">
        <div class="double">
            <div class="blogtitle"><h3>Kontaktinformationen</h3></div>
            <div class="blog">
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                    et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                    et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
        <div class="double last">
            <div class="blogtitle"><h3><a href="regular.php">Stammtisch</a></h3></div>
            <div class="blog">
                <img src="img/cimfid-house.jpeg" alt=""/>
            </div>
        </div>
        <div style="clear: both"></div>
        <div class="one">
            <div class="blogtitle"><h3>Schick uns eine Nachricht</h3></div>
            <div class="blog">
                <div id="contactwarning"></div>
                <div id="contactajax"></div>
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" name="contact form"
                      id="contact_form">
                    <input name="contactformid" id="contactformid" type="hidden" value="1"/>

                    <div class="contacttextarea">
                        <fieldset>
                            <textarea class="contacttextarea" name="message" rows="5" cols="5" id="message"
                                      title="Deine Nachricht"
                                      onfocus="if (this.value == 'Nachricht') {this.value = '';}">Nachricht<?php echo htmlentities($user_message) ?></textarea>
                        </fieldset>
                    </div>
                    <div class="contacttextboxes">
                        <fieldset>
                            <input name="name" id="name" type="text" title="Dein Name"
                                   onfocus="if (this.value == 'Name') {this.value = '';}"
                                   value="Name<?php echo htmlentities($name) ?>" class="contacttextform"/>
                        </fieldset>

                        <fieldset>
                            <input name="email" id="email" type="text" title="Deine Emailaddresse"
                                   onfocus="if (this.value == 'Email') {this.value = '';}"
                                   value="Email<?php echo htmlentities($visitor_email) ?>" class="contacttextform"/>
                        </fieldset>

                        <img src="captcha/captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg'><br>
                        <label for='6_letters_code' class="contacttitle">Bitte den Code eingeben
                            !</label><br>
                        <input id="6_letters_code" name="6_letters_code" type="text" class="contacttextform"><br>
                        <small>Nicht lesbar? Klick <a href='javascript: refreshCaptcha();'
                                                      style="text-decoration: none;">hier</a> zum
                            erneuern
                        </small>

                        <fieldset>
                            <input type="submit" value="Send" name="submit" id="submit" class="contactformbutton"/>
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<script language="JavaScript">
    var frmvalidator = new Validator("contact_form");
    //remove the following two lines if you like error message box popups
    frmvalidator.EnableOnPageErrorDisplaySingleBox();
    frmvalidator.EnableMsgsTogether();

    frmvalidator.addValidation("name", "req", "Please provide your name");
    frmvalidator.addValidation("email", "req", "Please provide your email");
    frmvalidator.addValidation("email", "email", "Please enter a valid email address");
</script>
<script language='JavaScript' type='text/javascript'>
    function refreshCaptcha() {
        var img = document.images['captchaimg'];
        img.src = img.src.substring(0, img.src.lastIndexOf("?")) + "?rand=" + Math.random() * 1000;
    }
</script>

<?php include('footer.php'); ?>
