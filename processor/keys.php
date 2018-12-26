<?php
$kwfinder = filter_var($_POST["key-kwfinder"],FILTER_SANITIZE_STRING);
$articleforge = filter_var($_POST["key-articleforge"],FILTER_SANITIZE_STRING);
$languagetoolplus = filter_var($_POST["key-languagetoolplus"],FILTER_SANITIZE_STRING);

    update_option("key-kwfinder",$kwfinder);
    update_option("key-articleforge",$articleforge);
    update_option("key-languagetoolplus",$languagetoolplus);
echo "<script>alert('Keys updated');</script>";

?>
