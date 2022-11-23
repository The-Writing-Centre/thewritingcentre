<?php
require('../settings/core.php');
require('../controllers/product_controller.php');

$service = select_one_product_controller($_GET['service_id']);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Service Details</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class='container' style="position:absolute; left:10%;  top:30%;">
        <div class="row">
            <div class="col-lg-6">
                <img src="../images/products/<?php echo htmlentities($service['service_image']); ?>" class="card-img-top" alt="..." style="height:300px; width:300px">
            </div>
            <div class="col-lg-6">
                <br>Title:<?php echo "{$service['service_name']}"; ?>
                <br>Price:<?php echo " GHS{$service['service_price']}"; ?>
                <br>Description: <?php echo "{$service['service_desc']}" ?>
                <form method="post" action='../actions/add_to_cart.php'>
                    <label>Specify the quantity you want</label>
                    <input class="form-control" type="num" name="quantity" value="1">
                    <input type="hidden" name="service_id" value=<?php echo $service['service_id'] ?>>
                    <br><button name="add_cart" type="submit" class='btn 
                  btn-success' ;>Add to cart</button>
            </div>

        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>