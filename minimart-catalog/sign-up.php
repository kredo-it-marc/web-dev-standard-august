<?php 
    include "connection.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Minimart Catalog | Sign Up</title>
</head>
<body>
    <div class="container py-5">

        <?php
            if( isset($_POST["btn_sign_up"]) )
            {
                //INPUT
                $first_name = $_POST["first_name"];
                $last_name = $_POST["last_name"];
                $username = $_POST["username"];
                $password = $_POST["password"];

                //PROCESS
                createUser($first_name, $last_name, $username, $password);
            }
        ?>
        <div class="card w-25 mx-auto">
            <div class="card-header">
                <h1 class="display-4 card-title text-center">Sign Up</h1>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <label for="first-name" class="form-label">First Name</label>
                    <input type="text" name="first_name" id="first-name" class="form-control mb-3" required>
                    <label for="last-name" class="form-label">Last Name</label>
                    <input type="text" name="last_name" id="last-name" class="form-control mb-3" required>
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" id="username" class="form-label mb-3" required>
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control mb-3" required>
                    <input type="submit" value="Sign up" class="btn btn-success w-100" name="btn_sign_up">
                </form>
            </div>
        </div>

    </div>
</body>
</html>
<?php
    function createUser($first_name, $last_name, $username, $password)
    {
        $conn = connection(); //connect to the database
        $encrypted_password = password_hash($password, PASSWORD_DEFAULT); //encrypt the password
        $sql = "INSERT INTO users(first_name, last_name, username, password) VALUES ('$first_name','$last_name','$username', '$encrypted_password')";
        $result = $conn->query($sql); //run the sql statement

        if($result) //check if the sql statement runs successfully
        {
            //if successful, redirect to login page
            header("Location:login.php");
        }
        else
        {
            //if NOT successful, display error message
            echo "<div class='alert alert-danger w-50 text-center mx-auto'>Sign up failed. Kindly try again. <br><small>".$conn->error."</small></div>";
            //$conn->error contains the error message from the database if there's any.
        }
    }
?>