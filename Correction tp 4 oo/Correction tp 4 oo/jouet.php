<?php 
class jouet
{
private $id;
private $nom;
private $matprinc;
private $prix;
private $couleur;
private $datefab;


public function __construct()
{
}

public function __get($att) 
{
return $this->$att;
}
// set ajoute propriété et valeur
public function __set($prop, $val) 	
{
$this->$prop = $val;
}

public function modifier_prix($val) 	
{
echo "Affectation de la nouvelle valeur $val à la propriété prix <br /> ";
$this->prix = $val;
}

public function categorie($couleur)
{
switch($couleur)
{
case 'bleu': return 'bébé'; break;
case 'vert': return 'enfant'; break;
case 'rouge': return 'adolescent'; break;
case 'noir': return 'adulte'; break;
default : return 'non ciblé' ; break;
}
}

public function affichage()
{
foreach($this as $clé => $valeur)
echo"$clé => $valeur \n<br>";
}


function insertjouet()
 {
 require_once('config.php');
$cnx=new connexion();
$pdo=$cnx->CNXbase();
 $req="insert into jouet values ('$this->id','$this->nom','$this->matprinc','$this->prix','$this->couleur','$this->datefab')";
$pdo->exec($req);
 }
 
function listjouet()
{
require_once('config.php');
$cnx=new connexion();
$pdo=$cnx->CNXbase();
$req="SELECT * FROM jouet";
$res=$pdo->query($req);	
return $res; 
}

function listjouetcond($att,$val)
{
require_once('config.php');
$cnx=new connexion();
$pdo=$cnx->CNXbase();
$req="SELECT * FROM jouet where $att='$val'";
$res=$pdo->query($req);	
$row =$res->fetch()  ;
return $row;
}

function modifjouet($id,$nom, $matprinc, $prix, $couleur, $datefab)
{
require_once('config.php');
$cnx=new connexion();
$pdo=$cnx->CNXbase();
$req="UPDATE jouet SET nom='$nom', matprinc='$matprinc', prix='$prix', couleur='$couleur', datefab='$datefab' WHERE id='$id' ";
$pdo->exec($req);
}

function suppjouet($id)
{
require_once('config.php');
$cnx=new connexion();
$pdo=$cnx->CNXbase();
$req="DELETE FROM jouet WHERE id='$id'"; 
$pdo->exec($req);
}	

function rechjouet($id)
{
require_once('config.php');
$cnx=new connexion();
$pdo=$cnx->CNXbase();
$req= "SELECT count(*) FROM jouet WHERE id='$id' " ;
$res=$pdo->query($req);
return $res;
}

}
