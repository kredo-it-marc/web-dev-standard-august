<?php
    session_start();
    include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Minimart Catalog | Sections</title>
</head>
<body class="bg-light">
    <?php include "navbar.php"; ?>
    <div class="container py-5">
        <?php
            if( isset($_POST["btn_add"]) )
            {
                //INPUT
                $title = $_POST["title"];
                            
                //process
                createSection($title);
            }
        ?>
        <form action="" method="post">
            <div class="row justify-content-center">
                <div class="col-3 text-end"><label for="title" class="form-label">Title</label></div>
                <div class="col-3"><input type="text" name="title" id="title" class="form-control" required></div>
                <div class="col-3 text-start"><input type="submit" value="Add" name="btn_add" class="btn btn-success"></div>
            </div>
        </form>
        <div class="mt-5 w-25 mx-auto">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- display the sections here -->
                    <?php
                        $sections = getSections();
                        
                        if($sections && $sections->num_rows>0)
                        {
                            while($row = $sections->fetch_assoc())
                            {
                                echo "<tr>";
                                echo "<td>".$row["id"]."</td>";
                                echo "<td>".$row["title"]."</td>";
                                echo "</tr>";
                            }
                        }
                        else
                        {
                            echo "<tr><td class='fst-italic text-center' colspan='2'>No sections to display.</td></tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
<?php
    function createSection($title)
    {
        $conn = connection();
        $sql = "INSERT INTO sections(title) VALUES('$title')";

        if( $conn->query($sql) )
        {
            header("Refresh:0"); //reload the page
        }
        else
        {
            //error message
            echo "<div class='alert alert-danger w-50 mx-auto text-center mb-3'>Failed to save the data. Kindly try again. <br><small>".$conn->error."</small></div>";
        }
    }

    function getSections()
    {
        $conn = connection();
        $sql = "SELECT * FROM sections";

        return $conn->query($sql);
    }
?>