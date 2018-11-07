<?php
	if(isset($_POST["submit1"])){
	$test=$_POST["code1"];
	echo "le code est $test";
	}else{if(isset($_POST["submit2"])){
	$test=$_POST["code2"];
	echo "le code est $test";
	}else{if(isset($_POST["submit3"])){
	$test=$_POST["code3"];
	echo "le code est $test";
	}}}
?>