var pw = document.getElementById("pw").value;

function admin() {
    if (pw == "admin2022") {
        window.location = "index1.php";
    }
}

function log() {
    var user2 = document.getElementById("user2");
    var index2 = document.getElementById("index2");

    var f = new FormData();
    f.append("user2", user2.value);
    f.append("index2", index2.value);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {

            var res = r.responseText;
            if (res == "success") {
                alert("FOnnnne");
                window.location = "student-details.php";
            } else {
                alert(res);
            }

        }
    }
    r.open("POST", "process/stsigninprocess.php", true);
    r.send(f);
}