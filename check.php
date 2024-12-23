<?php
$passcard='ab:cd:ef:01';//Set your Card ID here
$username='admin';//Set your username for [SESSION] here
session_start();
$card = $_POST['card'];
if(!($card)){
    echo '<script>
    alert("[Error]Card ID not sent");
    location = "login.htm";
    </script>
    ';
    exit;
}
if(!($card == $passcard)){
    echo '<script>
    alert("[Error]Wrong Card ID, try with another Card");
    location = "login.htm";
    </script>
    ';
    exit;
}
$_SESSION['username'] = $username;
session_write_close();
echo '<script>
alert("Welcome!");
location = ".";
</script>
';
exit;
