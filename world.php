<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge"> <!-- For intranet testing only, remove in production. -->
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="link.css">
<link rel="stylesheet" type="text/css" href="slide.js">

</head>
<body bgcolour="black" face="Calibri"><br><br><br><br>
<div id="nav"><br><br><br>
<a href="index.html">Home</a><br>
<a href="latest.php">Latest</a><br>
<a href="politics.php">Politics</a><br>
<a href="tech.php">Technology</a><br>
<a href="sport.php">Sports</a><br>
<a href="bwood.php">B-Town</a><br>
<a href="world.php">World</a><br>
<a href="health.php">Health</a><br>
<a href="opinion.php">Opinion</a><br>


</div>
<font face="Calibri" color=white>
<?php
$file = fopen("fc.txt","r");
$fc=fread($file,"10");
fclose($file);


for($i=0;$i<=$fc;$i++)
{
	$file2=fopen("tag/".$i.".txt","r");
	$ctag=fread($file2,15);
if ($ctag=="world")
{
echo "<center><br><h2>";
readfile("title/".$i.".txt");
echo "</h2></center>";
echo "<p><br>";
readfile ("content/".$i.".txt");
echo "</p><br>";
}
else
{
	
}
fclose($file2);
}
?>
</font>
<div id="footer">
Copyright © AT News
</div>

</body>
</html>