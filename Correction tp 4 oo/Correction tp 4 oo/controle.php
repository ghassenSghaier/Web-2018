<?php
class controle
{
public function Verifnul($var)
{
if(!empty($var))
return true;
else
return false;
}

public function Verifalph($var)
{
if(ctype_alpha($var))
return true;
else
return false;
}

public function Verifnum($var) 
{
if(is_numeric($var))
return true;
else
return false;
}

public function Verifdat($var) 
{
$jour=substr($var,0,2);
$mois=substr($var,3,2);
$annee=substr($var,6);
if(checkdate($mois,$jour,$annee))
return true;
else
return false;
}

}
?>
