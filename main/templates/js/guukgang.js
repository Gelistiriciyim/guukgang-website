$(document).ready(function() {
    $("#gun").load("/core/time/gun.php");
});

setInterval(function() {$("#gun").load('/core/time/gun.php');}, 60000);

$(document).ready(function() {
    $("#saat").load("/core/time/saat.php");
});

setInterval(function() {$("#saat").load('/core/time/saat.php');}, 30000);

$(document).ready(function() {
    $("#dakika").load("/core/time/dakika.php");
});

setInterval(function() {$("#dakika").load('/core/time/dakika.php');}, 5000);

