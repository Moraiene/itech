<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Main</title>
    <link href="/css/main.css" rel="stylesheet">
    <script src="/js/main.js"></script>

</head>
<body>
<div class="p-1">
    <form method="GET">
        <label>
            First date:
            <input id="firstDate" name="firstDate" type="date"><br>
        </label>
        <label>
            Last date:
            <input id="lastDate" name="lastDate" type="date"><br>
        </label>
        <input type="button" value="Ok" onclick="get1()">
    </form>
</div>

<div class="p-1">
    <table class="b-1">
        <tr>
            <th class="b-1">Game</th>
        </tr>
        <tbody  id="text1"></tbody>
    </table>
</div>


<div class="p-1">
    <form method="GET">
        <label>
            Player:
            <select id="player" name="player">
                <option>PNAME1</option>
                <option>PNAME2</option>
                <option>PNAME3</option>
                <option>PNAME4</option>
                <option>PNAME5</option>
            </select>
        </label><br>
        <input type="button" value="OK" onclick="get2()">
    </form>
</div>

<div class="p-1">
    <table class="b-1">
        <tr>
            <th class="b-1">Games</th>
        </tr>
        <tbody id="text2"></tbody>
    </table>
</div>


<div class="p-1">
    <form method="GET">
        <label>
            League:
            <select id="league" name="league">
                <option>LEAGUE1</option>
                <option>LEAGUE2</option>
            </select>
        </label><br>
        <input type="button" value="OK" onclick="get3()">
    </form>
</div>

<div class="p-1">
    <table class="b-1">
        <tr>
            <th class="b-1" colspan="2">Score table</th>
        </tr>
        <tbody id="text3"></tbody>
    </table>
</div>

</body>
</html>