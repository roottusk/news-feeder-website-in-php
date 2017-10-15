<?php session_start();
$userid = $_POST["id"];
$password = $_POST["pass"];

if ($userid == "atrocks" && $password == "kencing@321"){
	$_SESSION["key"]=1;
	header("Location:makepost.html");
die();
}
else
echo "Wrong Credentials";


?>