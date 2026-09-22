function adminlogin() {
    var aduser = document.getElementById("aduser");
    var pw = document.getElementById("pw");

    var f = new FormData();
    f.append("aduser", aduser.value);
    f.append("pw", pw.value);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var res = r.responseText;
            if (res == "success") {
                alert("Done");
                window.location = "student-payment.php"
            } else {
                alert(res);
            }
        }
    }
    r.open("POST", "process/adminlogin.php", true);
    r.send(f);
}