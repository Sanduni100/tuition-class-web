function mark() {
    var index = document.getElementById("index");
    var marks = document.getElementById("marks");

    var f = new FormData();
    f.append("index", index.value);
    f.append("marks", marks.value);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var resp = r.responseText;
            if (resp == "success") {
                alert("Successfully Marked");
            } else {
                alert(resp);
            }
        }
    }
    r.open("POST", "process/wordpractice_process.php", true);
    r.send(f);
}

function sendmail() {
    var filepdf = document.getElementById("pdf");
    var f = new FormData();
    f.append("filepdf", filepdf.files[0]);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var res = r.responseText;
            if (res == "success") {
                alert("Done");
            } else {
                alert(res);
            }
        }
    }
    r.open("POST", "process/send_email.php", true);
    r.send(f);
}