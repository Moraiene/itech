<?php
$dbh = new PDO('mysql:host=127.0.0.1;dbname=test', "root", "");
$stmt = $dbh->prepare("SELECT * FROM game INNER JOIN team on FID_TEAM1 = ID_TEAM WHERE LEAGUE = ?");
$league = $_GET['league'];

$stmt->execute(array($league));

$result = [];

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

    $game = array(
        'name' => $row['ID_GAME'],
        'score' => $row['SCORE']
    );
    $game = (object)$game;
    array_push($result, $game);
}

echo json_encode($result);
?>