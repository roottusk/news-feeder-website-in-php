<?php session_start();
if($_SESSION["key"]==1)
{
$newstitle=$_POST["title"];
$ncontent=$_POST["content"];
$ctag=$_POST["tag"];



$directory = "title/";
$filecount = 0;
$files = glob($directory . "*");
if ($files){
 $filecount = count($files);
}
$filecount=$filecount++;
$handle1=fopen("title/".$filecount.".txt","w");
fwrite($handle1,$newstitle);
fclose($handle1);

$handle2=fopen("content/".$filecount.".txt","w");
fwrite($handle2,$ncontent);
fclose($handle2);

$handle3=fopen("tag/".$filecount.".txt","w");
fwrite($handle3,$ctag);
fclose($handle3);

$target_dir="images/";
$target_file=$target_dir.basename($_FILES["filetoupload"]["name"]);
$uploadOk=1;
$imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);

$handle4=fopen("fc.txt","w");
fwrite($handle4,$filecount);
fclose($handle4);





header("Location:makepost.html");
}
else
{
	header('Location:adminlogin.html');
}
?>