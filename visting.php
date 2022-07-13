<?php
 $handle = fopen("visiting.txt", "r") or die("can't open the file");
 $count = fread($handle, 16);
 fclose($handle);
 $handle = fopen("visiting.txt", "w") or die("can't open the file");
 fwrite($handle, ++$count);
 fclose($handle);
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8" />
 <title>Visitor count</title>
 <style>
 h1, h2 {
 text-align: center;
 }
 </style>
</head>
<body>
 <h1>welcome to our website</h1>
 <h2>displaying Total Visitors : <?php echo $count ?></h2>
</body>
</html>