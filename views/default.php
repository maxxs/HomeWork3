<div>
    <h2>
        Welcome to URL Shortner!
    </h2>
    <p>
        Please sign up for our website if you would like to store your url shortening data for
        future purposes. If you do not wish to create account, please start below.
    </p>
    <br>
    <div class="centered">
        <form name = "urlshortner" method ="post" action = "controllers/lookup.php">
            <table>
                <tr>
                    <td>
                        url:
                    </td>
                    <td >
                        <input type="text" name="url" value="" size="20" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Name you want to give to URL.
                    </td>
                    <td>
                        <input type="text" name="url" value="" size="20" />
                    </td>
                <tr></tr>
                <tr>
                    <td align ="center" colspan ="2">
                        <input type="submit" value="Submit" onclick="return urlValidate()"/>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

