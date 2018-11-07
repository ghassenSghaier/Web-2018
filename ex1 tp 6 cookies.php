<?php 
if(isset($_COOKIE['Test12'])) //if there is a cookie stored 
{ 
$Test12=$_COOKIE['Test12']+1; //increase the value of $Test by 1 
SetCookie("Test12",$Test12, time()+3600000); //Set the cookie with the name 
} 
else //else if the cookie does not exist 
{ 
SetCookie("Test12",1, time()+3600000); //Create one with the value of 1 
} 
?>

Le script suivant permet d'afficher le nombre de passage par une page Web. 
<?php 
if(isset($_COOKIE['Test12'])) //if there is a cookie stored 
{ 
echo("Vous êtes passé "); //Disp]lay You have been here 
echo $Test12; //$Test 
echo (" fois sur ce site"); //times. This is all on one line 
}
?> 

