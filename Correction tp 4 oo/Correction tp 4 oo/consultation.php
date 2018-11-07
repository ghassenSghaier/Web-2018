<?php
require_once('jouet.php');
$j=new jouet();
$res=$j->listjouet();
echo "<table border=1>
<tr><td>Code jouet</td>
<td>Nom jouet</td>
<td>Modifier</td>
<td>Supprimer</td></tr>";
 foreach($res as $row)
{
echo "<tr><td>$row[id]</td>
<td>$row[nom]</td>
<td><a href ='modif.php?id=$row[id]'>Modifier</a></td>
<td><a href ='sup.php?id=$row[id]'>Supprimer</a></td> </tr>";
}
echo "</table>";

?>
