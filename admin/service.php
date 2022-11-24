<?php
require('../Settings/core.php');
require('../Controllers/product_controller.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Services</title>
</head>

<body>
    <form action="../actions/add_service.php" method="POST">
        <input type="text" name="service_name" placeholder="service name">
        <!-- <input type="text" name="service_cat" placeholder="service category"> -->
        <input type="text" name="service_desc" placeholder="description">
        <input type="text" name="service_price" placeholder="price">
        <!-- <input type="file" name="service_image" placeholder="upload file"> -->
        <input type="text" name="service_keywords" placeholder="keywords">
        <!-- <input type="date" id="start" name="ddate"> -->
        <input type="file" name="service_image" id="service_image">
        <button type="submit" name="submit">Sign up</button>
    </form>
</body>

</html>