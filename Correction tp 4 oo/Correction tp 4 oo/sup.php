<?php
require_once('jouet.php');
$j=new jouet();
$j-> suppjouet($_GET['id']);
echo "supp effectuée";


?>
