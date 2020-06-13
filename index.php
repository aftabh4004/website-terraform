<pre>
<html>
<body>

<?php
$file = fopen("file.txt", "r");

if(!feof($file)) {
  $url = fgets($file);
}
$url = rtrim($url, "\r\n");

echo "<img src='http://$url/airplane.png'>";

fclose($file);
?>

</body>
</html>
</pre>
