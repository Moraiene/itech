const ajax = new XMLHttpRequest();

function get1() {
    let firstDate = document.getElementById("firstDate").value;
    let lastDate = document.getElementById("lastDate").value;
    ajax.onreadystatechange = update;
    ajax.open("GET", "/php/GamesPerPeriod.php?firstDate=" + firstDate + "&lastDate=" + lastDate);

    ajax.send(null);
}

function update() {
    if (ajax.readyState === 4) {
        if (ajax.status === 200) {
            var text = document.getElementById('text1');
            text.innerHTML = ajax.responseText;
        }
    }
}

function get2() {
    let player = document.getElementById("player").value;
    ajax.open("GET", "/php/Player.php?player=" + player, false);
    ajax.onreadystatechange = null;
    ajax.send();

    if (ajax.status === 200) {
        var text = document.getElementById('text2');
        var res = "";
        let games = ajax.responseXML.firstChild.children;
        for (var i = 0; i < games.length; i++) {
            res += "<tr>";
            res += "<td>" + games[i].children[0].firstChild.nodeValue + "</td>";
            res += "<tr>";
        }
        text.innerHTML = res;
    }
}

function get3() {
    let league = document.getElementById("league").value;
    ajax.onreadystatechange = update2;
    ajax.open("GET", "/php/ScoreTable.php?league=" + league);

    ajax.send(null);
}

function update2() {
    if (ajax.readyState === 4) {
        if (ajax.status === 200) {
            var text = document.getElementById('text3');
            var res = ajax.responseText;
            var resHtml = "";
            res = JSON.parse(res);
            resHtml += "<tr><td class='b-1'> Name </td><td class='b-1'> Points </td></tr>";
            res.forEach(game => {

                resHtml += "<tr><td class='b-1'>" + game.name + "</td><td class='b-1'>" + game.score + "</td> </tr>"
            });

            text.innerHTML = resHtml;
        }
    }
}