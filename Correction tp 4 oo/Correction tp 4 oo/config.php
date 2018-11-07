<?php

class connexion
{ 
public function CNXbase()
  {

   $dbc=new PDO('mysql:host=localhost;dbname=magasin','root',''); 
/*   $db_host='MALEK-PC\SQLEXPRESS';
    $db_user='sa';
    $db_password='sa';
    $db_database='personnel';
   $dbc=new PDO("mssql:host=".$db_host.";dbname=".$db_database.";", $db_user, $db_password); */                     
    return $dbc;
  }   


}
?>
