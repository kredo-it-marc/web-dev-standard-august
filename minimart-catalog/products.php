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
    <title>Minimart Catalog | Products</title>
</head>
<body class="bg-light">
    <?php include "navbar.php"; ?>
    <div class="container py-5">
        <div class="w-50 mx-auto">
            <div class="text-end">
                <a href="add-product.php" class="btn btn-outline-dark btn-sm"><i class="fa-solid fa-circle-plus"></i> Add Product</a>        
            </div>
            <table class="table table-bordered table-striped mt-3">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Section</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- display the products here -->
                    <?php
                        $products = getProducts(); //call the function

                        if($products && $products->num_rows > 0) //check if the sql statement runs successfully and if it has returned any records
                        {
                            while($row = $products->fetch_assoc())
                            {
                                echo "<tr>";
                                echo "<td>".$row["id"]."</td>";
                                echo "<td>".$row["title"]."</td>";
                                echo "<td>".$row["description"]."</td>";
                                echo "<td>".$row["price"]."</td>";
                                echo "<td>".$row["section_id"]."</td>";
                                echo "<td></td>";
                                echo "</tr>";
                            }
                        }
                        else
                        {
                            //if the conditions evaluate to false, either 1. the sql statement fails to run successfully or 2. there re no records returned by the sql statement
                            echo "<tr><td class='text-center fst-italic text-muted' colspan='6'>No products to display.</td></tr>";
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
    function getProducts()
    {
        $conn = connection(); //connect to the database
        $sql = "SELECT * FROM products";
        return $conn->query($sql); //run the sql statement and return its output
    }
?>