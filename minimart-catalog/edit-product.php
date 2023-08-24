<?php
    session_start();
    include "connection.php";

    $product_id = $_GET["product_id"]; //get the value of the URL variable
    $product_details = getProduct($product_id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Minimart Catalog | Edit Product</title>
</head>
<body class="bg-light">
    <?php include "navbar.php"; ?>
    <div class="container py-5">
        <div class="card w-50 mx-auto">
            <div class="card-header">
                <h1 class="card-title display-4 text-center">Edit Product</h1>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <label for="title" class="form=label">Title</label>
                    <input type="text" name="title" id="title" class="form-control mb-3" value="<?= $product_details["title"] ?>" required>
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control mb-3" required><?= $product_details["description"] ?></textarea>
                    <label for="price" class="form-label">Price</label>
                    <input type="number" name="price" id="price" class="form-control mb-3" value="<?= $product_details["price"] ?>" required>
                    <label for="section" class="form-label">Section</label>
                    <select name="section" id="section" class="form-select mb-3">
                        <?php
                            $sections = getSections();

                            if($sections && $sections->num_rows > 0)
                            {
                                echo "<option selected disabled>Select a section</option>";

                                while($row = $sections->fetch_assoc())
                                {
                                    if($product_details["section_id"] == $row["id"])
                                    {
                                        echo "<option value='".$row["id"]."' selected>".$row["title"]."</option>";
                                    }
                                    else
                                    {
                                        echo "<option value='".$row["id"]."'>".$row["title"]."</option>";
                                    }
                                }
                            }
                            else
                            {
                                echo "<option selected disabled>No sections to display</option>";
                            }
                        ?>
                    </select>
                    <input type="submit" value="Save" name="btn_save" class="btn btn-primary w-100">
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
<?php
    function getSections()
    {
        $conn = connection();
        $sql = "SELECT * FROM sections";
        return $conn->query($sql);
    }

    function getProduct($product_id)
    {
        $conn = connection();
        $sql = "SELECT * FROM products WHERE id = $product_id";

        return $conn->query($sql)->fetch_assoc(); //this returns the record as an associative array
    }
?>