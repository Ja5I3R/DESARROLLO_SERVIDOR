<!DOCTYPE html>
<html>
<body>

<?php
echo "<style>body{background-color: rgb(".rand(0,255).", ".rand(0,255).", ".rand(0,255).");}</style>";
$a= rand(0,2);
$array= array("Primera frase","Segunda frase","Tercera frase");
echo $array[$a];
?>
</body>
</html> 