function valid(){
    var name=document.myform.firstName.value;
    var pass=document.myform.password.value;
    var secondname=document.myform.lastName.value;
    var secondpassword=document.myform.password2.value;
    var x=document.myform.Email.value;
    var atpos=x.indexOf("@");
    var dotpos=x.lastIndexOf(".");

    if (name==null || name==""){
        alert("Name can't be blank");
        return false;
    }else if(secondname==null || secondname==""){
       alert("type in last name");
        return false;}
    else if(pass.length<6){
        alert("Password must be at least 6 characters long.");
        return false;
    }else if(atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;


    }if(pass==secondpassword){
        return true;
    }
    else{
        alert("password must be same!");
        return false;
    }

}