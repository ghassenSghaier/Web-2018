<?php
require_once('jouet.php');
$j=new jouet();
$res=$j->listjouetcond('id',$_GET['id']);
 
?>
<form name = 'f1' method='post' action='modification.php'>
<table border='1'>
<tr>
<td>code</td>
<td><input type = "text" name = "id" value = "<?php echo $res['id'] ?>" readonly/></td></tr>
<tr><td>nom</td>
<td><input type = "text" name = "nom" value = "<?php echo $res['nom'] ?>"/></td></tr>
<tr>
      <td>Matiere principale </td>
      <td><input name="matprinc" type="text" id="matprinc" value = "<?php echo $res['matprinc'] ?>"/></td>
    </tr>
    <tr>
      <td>Prix jouet </td>
      <td><input name="prix" type="text" id="prix" value = "<?php echo $res['prix'] ?>"/></td>
    </tr>
    <tr>
      <td>Couleur jouet </td>
      <td><label>
        <select name="couleur" id="couleur">
		  <option> <?php echo $res['couleur'] ?> </option>
          <option>bleu </option>
          <option>vert</option>
          <option>rouge</option>
          <option>noir</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td>Date fabrication </td>
	  <?php
	  $datefab=$res['datefab'];
	  $annee=substr($datefab,0,4);
      $mois=substr($datefab,5,2);
      $jour=substr($datefab,8);
      $datefab=$jour.'/'.$mois.'/'.$annee;
	  ?>
      <td><input name="datefab" type="text" id="datefab" value = "<?php echo $datefab ?>"/></td>
    </tr>
<tr><td><input type = "submit" value= "modifier" name = "mod"/></td></tr>
</table></form>

