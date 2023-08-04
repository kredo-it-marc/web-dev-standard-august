<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
        if( isset($_POST["btn_submit"]) )
        {
            //INPUT
            $username = $_POST["username"];
            $password = $_POST["password"];

            //OUTPUT
            echo "<p>Username: $username</p>";
            echo "<p>Password: $password</p>";
        }
    ?>
    <form action="" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required>
        <br><br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
        <br><br>
        <input type="submit" value="Submit" name="btn_submit">
    </form>
    <!-- action is WHERE your data will be taken to when you click submit -->
    <!-- In this form, the data will be taken to login_action.php -->
    <!-- method is HOW your data will be taken to your action -->
    <!-- There are 2 possible methods: GET and POST -->
    <!-- GET method sends the data through the URL -->
    <!-- if there's no action, the data will be processed in this very same file -->
</body>
</html>