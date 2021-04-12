function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    var option={weekday:'long',year:'numeric',month:'long',day:'numeric',hour:'numeric',minute:'numeric',second:'numeric'};
    var date=today.toLocaleString("en-US",option)
    //console.log(today.toLocaleString());
    m = checkTime(m);
    s = checkTime(s);
   //document.getElementById('txt').innerHTML =
   //h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
    $('#txt').html(date);  
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};
    return i;
}