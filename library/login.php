<?php 
/* $username = $_POST["loginName"];
$userpass = $_POST["loginPass"];
echo $username."   ".$userpass;
 */
$DOCUMENT_ROOT=$_SERVER['DOCUMENT_ROOT'];
$fp=fopen("$DOCUMENT_ROOT/a.txt",'ab');
$putstring="xiewenjian";
fwrite($fp,$putstring,strlen($putstring));
if(!$fp)
{
	echo "<p><strong>Your file could not be processed at this time.Please try again later.</strong></p>";
	echo "$DOCUMENT_ROOT";
	exit;
}
fclose($fp);
?>
