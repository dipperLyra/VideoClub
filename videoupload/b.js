function valid() {
    var x = document.myform.email.value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    var passw = document.myform.pass.value;

    if (passw.length < 6) {
        alert("Password must be at least 6 characters long.");
        return false;
    } else if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
        alert("Not a valid e-mail address");
        return false;


    }
}