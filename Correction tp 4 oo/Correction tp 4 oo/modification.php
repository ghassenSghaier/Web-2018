<?php
require_once('jouet.php');
require_once('controle.php');
$j=new jouet();
$c=new controle();
if(!$c->Verifnul($_POST['id'])) echo "Numéro jouet obligatoire <br>";
else
{
if(!$c->Verifalph($_POST['nom'])) echo "Nom jouet doit être alphabétique <br>";
else
{
if(!$c->Verifnum($_POST['prix'])) echo "Prix jouet doit être numérique <br>";
else
{
if(!$c->verifdat($_POST['datefab'])) echo "Date invalide <br>";
else
{
$jour=substr($_POST['datefab'],0,2);
$mois=substr($_POST['datefab'],3,2);
$annee=substr($_POST['datefab'],6);
$datefab=$annee.'/'.$mois.'/'.$jour;
$j->modifjouet($_POST['id'],$_POST['nom'],$_POST['matprinc'],$_POST['prix'],$_POST['couleur'],$datefab);
echo "modification effectuée";
}
}
}
}
?>
