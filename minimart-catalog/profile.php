<?php
    session_start();
    include "connection.php";

    $user_id = $_SESSION["user_id"];
    $user_details = getUser($user_id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Minimart Catalog | Profile</title>
</head>
<body class="bg-light">
    <?php include "navbar.php";?>
    <div class="container py-5">

        <?php
            if( isset($_POST["btn_upload"]) )
            {
                //INPUT
                // var_dump($_FILES["photo"]); =>display the contents of the uploaded file
                //"photo" is the name of the input field
                //use $_FILES when uploading a file
                $file_name = $_FILES["photo"]["name"]; //file name of the uploaded photo
                $temp_location = $_FILES["photo"]["tmp_name"]; //temp location of the uploaded photo


                //PROCESS
                updateProfilePhoto($user_id, $file_name, $temp_location);
                
            }
        ?>
        <div class="card w-25 mx-auto">
             <!-- display profile photo -->
            <?php
                if( $user_details["photo"] != NULL)
                {
            ?>
                    <img src="assets/images/<?= $user_details["photo"] ?>" alt="profile.jpg" class="card-img-top">
            <?php
                }
                else
                {
            ?>
                    <img src="assets/images/default.jpeg" alt="profile.jpg" class="card-img-top">
            <?php        
                }
            ?>
            <div class="card-body">
                <h1 class="card-title display-6"><?= $user_details["first_name"]." ".$user_details["last_name"] ?></h1>
                <h2 class="card-subtitle text-muted fst-italic h5 mb-5"><?= $user_details["username"] ?></h2>

                <form action="" method="post" enctype="multipart/form-data">
                    <input type="file" name="photo" id="photo" class="form-control mb-3" required>
                    <input type="submit" value="Upload" class="btn btn-success w-100" name="btn_upload">               
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php
    function getUser($user_id)
    {
        $conn = connection();
        $sql = "SELECT * FROM users WHERE id = $user_id";

        return $conn->query($sql)->fetch_assoc();
    }

    function updateProfilePhoto($user_id, $file_name, $temp_location)
    {
        $conn = connection();
        $sql = "UPDATE users SET photo = '$file_name' WHERE id = $user_id";

        if( $conn->query($sql) ) //run the sql statement
        {
            //move the file to the permanent storage. inside the images folder in your assets
            $destination = "assets/images/".$file_name;

            // move_uploaded_file(origin, destination);
            move_uploaded_file($temp_location, $destination); //move the photo from the temporary location to the permanent storage
            header("Refresh:0"); //reload page
        }
        else
        {
            //error message
            echo "<div class='alert alert-danger w-50 mx-auto text-center mb-3'>Failed to upload photo. Kindly try again. <br><small>".$conn->error."</small></div>";
        }
    }
?>