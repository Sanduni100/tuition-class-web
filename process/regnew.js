function reg() {
    var name1 = document.getElementById("name");
    var fname = document.getElementById("fname");
    var mname = document.getElementById("mname");
    var fjob = document.getElementById("fjob");
    var email = document.getElementById("email");
    var gender = document.getElementById("gender").value;
    var dob = document.getElementById("dob");
    var rel = document.getElementById("rel").value;
    var clz = document.getElementById("class").value;
    var section = document.getElementById("section").value;
    var contact = document.getElementById("contact");
    var address = document.getElementById("address");
    var index = document.getElementById("know");
    // alert(name);



    var f = new FormData()
    f.append("name1", name1.value);
    f.append("fname", fname.value);
    f.append("mname", mname.value);
    f.append("fjob", fjob.value);
    f.append("email", email.value);
    f.append("gender", gender);
    f.append("dob", dob.value);
    f.append("rel", rel);
    f.append("clz", clz);
    f.append("section", section);
    f.append("contact", contact.value);
    f.append("address", address.value);
    f.append("index", index.value);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var res = r.responseText
            if (res == "success") {
                alert("Registration Success");
            } else {
                alert(res)
            }
        }
    }

    r.open("POST", "process/admit-form-new.php", true);
    r.send(f);
}