<div class="centered" id="registerForm">
    <form name="signup" method="POST" action="controllers/signup.php">
        <h3>
            Signup form. All fields are mandatory. Please no leading spaces !
        </h3>
        <table>
            <tr>
                <td>
                    First Name:
                </td>
                <td >
                    <input type="text" name="firstName" value="" size="20" />
                </td>
            </tr>
            <tr>
                <td>
                    Last Name:
                </td>
                <td>
                    <input type="text" name="lastName" value="" size="20" />
                </td>
            </tr>
            <tr>
                <td>
                    Desired Username:
                </td>
                <td>
                    <input type="text" name="username" value="" size="20"/>
                </td>
            </tr>
            <tr>
                <td>
                    Password:
                </td>
                <td>
                    <input type="password" name="password" value="" size="20"/>
                </td>
            </tr>
            <tr>
                <td>
                    Retype Password:
                </td>
                <td>
                    <input type="password" name="repassword" value="" size="20"/>
                </td>
            </tr>
            <tr></tr>
            <tr>
                <td align ="center" colspan ="2">
                    <input type="submit" value="Submit" onclick="return Validate()"/>
                </td>
            </tr>
        </table>
    </form>
</div>