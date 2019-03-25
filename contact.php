<?php
if($_POST["message"]) {
    mail("mrjustinfry@gmail.com", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>
