<?php
header("Location:/labs/labs.html");
?>
<?php
$file = "cek";
$ip = $_SERVER['REMOTE_ADDR'];

$handle = fopen($file, 'a');
fwrite($handle, "");
fwrite($handle, "\n");
fwrite($handle, "IP-");
fwrite($handle, "$ip");
fwrite($handle, "\n");
fclose($handle);

?>
