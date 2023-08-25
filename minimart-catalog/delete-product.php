<?php
    session_start();
    include "connection.php";

    $product_id = $_GET["product_id"];
    $product_details = getProduct($product_id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Minimart Catalog | Delete Product</title>
</head>
<body class="bg-light">
    <?php include "navbar.php"; ?>
    <div class="container py-5">
        <?php
            if( isset($_POST["btn_delete"]) )
            {
                //INPUT
                $product_id = $_POST["product_id"];

                //PROCESS
                deleteProduct($product_id);
            }
        ?>
        <div class="card w-50 mx-auto">
            <div class="card-body">
                <h1 class="text-center card-title display-1"><i class="fa-solid fa-triangle-exclamation text-danger"></i></h1>
                <p class="mt-3 text-center">
                    Are you sure you want to delete <strong class='fst-italic'><?= $product_details["title"]?></strong>?
                </p>
                <div class="row justify-content-center">
                    <div class="col-3"><a href="products.php" class="btn btn-outline-secondary w-100">Cancel</a></div> 
                    <div class="col-3">
                        <form action="" method="post">
                            <input type="hidden" name="product_id" value="<?= $product_id?>">
                            <input type="submit" value="Delete" class="btn btn-danger w-100" name="btn_delete">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php
    function getProduct($product_id)
    {
        $conn = connection();
        $sql = "SELECT * FROM products WHERE id = $product_id";

        return $conn->query($sql)->fetch_assoc(); //this returns the record as an associative array
    }

    function deleteProduct($product_id)
    {
        $conn = connection();
        $sql = "DELETE FROM products WHERE id = $product_id";

        if( $conn->query($sql) )
        {
            header("Location:products.php");
        }
        else
        {
            echo "<div class='alert alert-danger w-50 mx-auto mb-3 text-center'>Failed to delete the product. Kindly try again. <br><small>".$conn->error."</small></div>";
        }
    }
?>