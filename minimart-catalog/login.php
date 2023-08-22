<?php
    include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Minimart Catalog | Login</title>
</head>
<body>
    <div class="container py-5">

        <?php
            if( isset($_POST["btn_login"]) )
            {
                //INPUT
                $username = $_POST["username"];
                $password = $_POST["password"];

                //PROCES
                login($username, $password);
            }
        ?>
        
        <div class="card w-25 mx-auto">
            <div class="card-header">
                <h1 class="card-title display-4 text-center">Login</h1>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" id="username" class="form-control mb-3" required>
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control mb-3" required>
                    <input type="submit" value="Login" name="btn_login" class="btn btn-success w-100">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php
    function login($username, $password)
    {
        $conn = connection(); //connect to the database
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = $conn->query($sql); //$conn->query() runs the sql statement
        
        // $result->num_rows returns how many records are returned by the sql statement
        if($result->num_rows == 1 ) //check if the SQL returns 1 record. It means the username exists in the database
        {

        }
        else
        {
            //the username doesn't exist from the database; display error message
            echo "<div class='alert alert-danger mx-auto text-center w-50'>Username doesn't exist. Kindly try again. <br><small>".$conn->error."</small></div>";
            //$conn->error contains the actual error message from the database

        }
    }

?>