function urlValidate()
{
    if(document.urlshortner.url.value == "" || document.urlshortner.url.value == null)
    {
        alert ("Please enter URL. Cannot leave this field blank !")
        document.urlshortner.url.value = "";
        document.urlshortner.url.focus()
        return false;
    }
    return true
}

