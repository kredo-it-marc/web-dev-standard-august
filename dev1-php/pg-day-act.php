<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Days of the Week</title>
</head>
<body>
    <?php
        if( isset($_POST["btn_day"]) )
        {
            //INPUT
            $day = $_POST["btn_day"];

            //OUTPUT
            echo "<p>$day</p>";
        }
    ?>
    <form action="" method="post">
        <input type="submit" value="Monday" name="btn_day">
        <input type="submit" value="Tuesday" name="btn_day">
        <input type="submit" value="Wednesday" name="btn_day">
        <input type="submit" value="Thursday" name="btn_day">
        <input type="submit" value="Friday" name="btn_day">
    </form>
</body>
</html>