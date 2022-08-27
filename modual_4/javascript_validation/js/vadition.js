function valid() {
    if (document.frm.fname.value == '') {
        document.getElementById("error").innerHTML = "plese fille your firstname";
        document.frm.fname.focus();
        return false;
    }
    var f = /^[A-Za-z]+$/;
    if (!f.test(document.frm.fname.value)) {
        document.getElementById("error").innerHTML = "plese fill your alphabatic charactor only";
        return false;
    }

    if (document.frm.lname.value == '') {
        document.getElementById("lname").innerHTML = "plese fille your lastname";
        document.frm.lname.focus();
        return false;
    }
    var f = /^[A-Za-z]+$/;
    if (!f.test(document.frm.lname.value)) {
        document.getElementById("lname").innerHTML = "plese fill your alphabatic charactor only";
        return false;
    }

    if (document.frm.pwd.value == '') {
        document.getElementById("pass").innerHTML = "plese fill your password";
        document.frm.pwd.focus();
        return false;
    }
    if (document.frm.con_pwd.value == '') {
        document.getElementById("con_pass").innerHTML = "plese fill your confirm password";
        document.frm.con_pwd.focus();
        return false;
    }

    if (document.frm.state.value == '1') {
        alert("plese select your state");
        document.frm.state.focus();
        return false;
    }

    if (document.frm.country.value == '1') {
        alert("plese select your country");
        document.frm.country.focus();
        return false;
    }
    if (document.frm.email.value == '') {
        alert('Please fill your email')
        document.frm.email.focus();
        return false;
    }
    var em = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    if (!em.test(document.frm.email.value)) {
        alert('Please fill your valid email address')
        document.getElementById("email").innerHTML = 'plese fill your email address';
        document.frm.email.focus();
        return false;
    }

}