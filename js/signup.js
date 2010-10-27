function Validate()
{
    var firstName = document.signup.firstName;
    var lastName = document.signup.lastName;
    var username = document.signup.username;
    var password = document.signup.password;
    var repassword = document.signup.repassword;

    if(firstName.value == null || firstName.value.trim() == "")
    {
        alert ("Cannot leave First Name empty");
        firstName.value = "";
        firstName.focus();
        return false;
    }
    if(lastName.value == null || lastName.value.trim() == "")
    {
        alert ("Cannot leave Last Name empty");
        lastName.value = "";
        lastName.focus();
        return false;
    }
    if(username.value == null || username.value.trim() == "")
    {
        alert ("Cannot leave username empty");
        username.value = "";
        username.focus();
        return false;
    }
    if(password.value == null || password.value == "")
    {
        alert ("Cannot leave password field empty");
        password.value = "";
        password.focus();
        return false;
    }
    if(repassword.value == null || repassword.value == "")
    {
        alert ("Cannot leave re-password field empty");
        repassword.value = "";
        repassword.focus();
        return false;
    }
    if(password.value != repassword.value)
    {
        alert ("Password and repeat Password field does not match. Please retype    ");
        repassword.value = "";
        password.value = "";
        password.focus();
        return false;
    }
    return true;    
}
