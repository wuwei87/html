<?php 
$username = $_POST["loginName"];
$userpass = $_POST["loginPass"];
echo $username."   ".$userpass;
$DOCUMENT_ROOT=$_SERVER["DOCUMENT_ROOT"];
$fp=fopen("$DOCUMENT_ROOT/html/library/a.txt","ab");
$putstring="你好"."\n";
fwrite($fp,$putstring,strlen($putstring));
if(!$fp)
{
	echo "<p><strong>Your file could not be processed at this time.Please try again later.</strong></p>";
	exit;
}
fclose($fp);
?>
<?php
$fp=fopen("$DOCUMENT_ROOT/html/library/a.txt","rb");
if(!$fp)
{
	echo "$DOCUMENT_ROOT failed to open";
	exit;
}
echo "<br/>";
while(!feof($fp))
{
	$str=fgets($fp,999);
	echo $str."<br/>";
}
fclose($fp);
$fp=fopen("$DOCUMENT_ROOT/html/library/a.txt","rb");
if(!$fp)
{
	echo "$DOCUMENT_ROOT failed to open";
	exit;
}
echo "<hr/>";
while(!feof($fp))
{
	$char=fgetc($fp);
	if(!feof($fp))
	{
		echo ($char=="\n"?"<br/>":$char);
	}
}
fclose($fp);
?>
