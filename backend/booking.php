<?php
$name=$_POST['name'];
$phone=$_POST['phone'];

header("Location: invoice.php?name=$name&phone=$phone");
?>