<html>
    
    <body>
        <h2>Sign Up</h2>

<style>
    h2{
        font-weight: bolder;
        text-align: center;
        color: blue;
    }
    fieldset{
        text-align: center;
        width: 50%;
    }
    div{
        margin-left: 16em;
    }
</style>

        <form action="create.php" method="post">
            <div>
            <fieldset>
                <legend>Personal information:</legend>
                ID: <br>
                <input type="number" name="id">
                <br>
                First Name: <br>
                <input type="text" name="firstname">
                <br>
                Last Name: <br>
                <input type="text" name="lastname">
                <br>
                Email: <br>
                <input type="email" name="email">
                <br>
                Password: <br>
                <input type="password" name="password">
                <br>
                <input type="submit" name="submit" value="submit" style="background-color: rgb(123, 123, 218); border-radius: 10px;">
            </div>
            </fieldset>

        </form>
    </body>
    <?php
    
$login = 'login.html';
echo "<p><a href=".$login.">Have an account? Login</a></p>";
    ?>
</html>
