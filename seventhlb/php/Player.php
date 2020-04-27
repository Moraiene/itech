<?php
header("Content-Type: text/xml");
header("Cache-Control: no-cache, must-revalidate");


$dbh = new PDO('mysql:host=127.0.0.1;dbname=test', "root", "");
$stmt = $dbh->prepare("SELECT * FROM (game INNER JOIN team ON FID_TEAM1 = ID_TEAM or FID_TEAM2 = ID_TEAM) INNER JOIN player on ID_TEAM = FID_TEAM WHERE player.NAME = ?");
$player = $_GET['player'];
$stmt->execute(array($player));
echo "<?xml version='1.0' encoding='utf-8'?>";
echo "<games>";

// print "<table border='1'><tr><caption> $player</caption><th>Game</th></tr>";


while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    print "<game><name>".$row['ID_GAME']."</name></game>";
}
echo "</games>";

?>
