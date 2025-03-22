<?php
header("Content-Type: application/javascript");
?>
function tampilkanTanggal() {
    var d = new Date();
    var weekday = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    var monthname = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

    var tanggalLengkap = weekday[d.getDay()] + " " + d.getDate() + ". " + monthname[d.getMonth()] + " " + d.getFullYear();
    
    document.getElementById("hasilTanggal").innerText = tanggalLengkap;
}
