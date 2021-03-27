<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>検索結果</title>
</head>
<body>

<?php
$my_sea=htmlspecialchars($_POST["s"], ENT_QUOTES);
$db = new PDO("mysql:host=localhost;dbname=db","root","root");
echo "<p style='font-size:20pt'>「{$my_sea}」の検索結果</p>";
$ps=$db->query("SELECT * FROM tb WHERE mes like '%$my_sea%' ORDER BY ban DESC");
while ($r = $ps->fetch()){
      echo "{$r['ban']} {$r['nam']} {$r['dat']}<br>"
            .nl2br($r['mes'])."<hr>";
}
echo "<p><a href='index.php'>一覧表示へ</a></p>";
?>

</body>
</html>
