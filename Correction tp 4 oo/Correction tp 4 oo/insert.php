<?php
require_once('jouet.php');
$j=new jouet();
$j->id=$_GET['id'];
$j->nom=$_GET['nom'];
$j->matprinc=$_GET['matprinc'];
$j->prix=$_GET['prix'];
$j->couleur=$_GET['couleur'];
$j->datefab=$_GET['datefab'];
require_once('controle.php');
$c=new controle();

if(!$c->Verifnul($j->id)) echo "Num�ro jouet obligatoire <br>";
else
{
if(!$c->Verifalph($j->nom)) echo "Nom jouet doit �tre alphab�tique <br>";
else
{
if(!$c->Verifnum($j->prix)) echo "Prix jouet doit �tre num�rique <br>";
else
{
if(!$c->verifdat($j->datefab)) echo "Date invalide <br>";
{
$jour=substr($j->datefab,0,2);
$mois=substr($j->datefab,3,2);
$annee=substr($j->datefab,6);
$j->datefab=$annee.'/'.$mois.'/'.$jour;
$row=$j->rechjouet($j->id);
$n= $row->fetchColumn(0);
if($n==0)
	{
	$j->insertjouet();
	echo "Insertion effectu�e";
//header('location:index.php');
	}
	else
{
	echo "Jouet existe d�j� ";
}
}
}	
}
}
?>

