function urlValidate()
{
    if(document.urlshortner.url.value == "" || document.urlshortner.url.value == null)
    {
        alert ("Please enter URL. Cannot leave this field blank !")
        document.urlshortner.url.value = "";
        document.urlshortner.url.focus()
        return false;
    }
   /* else if(document.urlshortner.vanityName.value == "" || document.urlshortner.vanityName.value == null)
    {
        alert ("Please enter URL. Cannot leave this field blank !")
        document.urlshortner.vanityName.value = "";
        document.urlshortner.vanityName.focus()
        return false;
    }*/
    return true
}

