<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>書き込み</title>
</head>
<body>
<?php
$my_nam=htmlspecialchars($_POST["n"], ENT_QUOTES);
$my_mes=htmlspecialchars($_POST["m"], ENT_QUOTES);
$db = new PDO("mysql:host=localhost;dbname=db","root","root");
$db->query("INSERT INTO tb (ban,nam,mes,dat)
            VALUES (NULL,'$my_nam','$my_mes',NOW())");
echo "書き込みに成功！";
echo "<p><a href='index.php'>一覧表示へ</a></p>";
?>
</body>
</html>
