<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Main</title>
    <link href="/css/main.css" rel="stylesheet">
<body>

<div class="p-1">
    <form method="GET" action="/php/GamesPerPeriod.php">
        <label>
            First date:
            <input name="firstDate" type="date"><br>
        </label>
        <label>
            Last date:
            <input name="lastDate" type="date"><br>
        </label>
        <input type="submit" value="Ok">
    </form>
</div>

<div class="p-1">
    <form method="GET" action="/php/Player.php">
        <label>
            Player:
            <select name="player">
                <option>PNAME1</option>
                <option>PNAME2</option>
                <option>PNAME3</option>
                <option>PNAME4</option>
                <option>PNAME5</option>
            </select>
        </label><br>
        <input type="submit" value="OK">
    </form>
</div>

<div class="p-1">
    <form method="GET" action="/php/ScoreTable.php">
        <label>
            League:
            <select name="league">
                <option>LEAGUE1</option>
                <option>LEAGUE2</option>
            </select>
        </label><br>
        <input type="submit" value="OK">
    </form>
</div>

</body>
</html>