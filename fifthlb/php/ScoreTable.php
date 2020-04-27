<?php
$dbh = new PDO('mysql:host=127.0.0.1;dbname=test', "root", "");
$stmt = $dbh->prepare("SELECT * FROM game INNER JOIN team on FID_TEAM1 = ID_TEAM WHERE LEAGUE = ?");
$league = $_GET['league'];
$stmt->execute(array($league));
print "<table border='1'><tr><caption> $league</caption><th>Name</th><th>Points</th></tr>";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    print "<tr><td>$row[ID_GAME]</td><td>$row[SCORE]</td></tr>";
}
print "</table>";

?>
