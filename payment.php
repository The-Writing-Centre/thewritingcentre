<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>
<!doctype html>
<html lang="en">

<head>
    <title>Payment Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <!-- Will do form nicely later -->
    <!-- <div class="row mb-4">
        <div class="col-lg-8 mx-auto text-center">
            <h1 class="display-6">TWC Payment Forms</h1>
        </div>
    </div> 
    //End -->
    <p>
        <i class="fas fa-h1 fa-6x fa-fw"> Payment Pages</i>
    </p>
    <br>
    <form action="payment_process.php">

        <div>
            <p>Please select payment mode</p>
            <input type="radio" name="paymentMethod" id="visa" value="visa">
            <label for="visa">Visa</label>
            <br>
            <input type="radio" name="paymentMethod" id="momo" value="momo">
            <label for="momo">Momo</label>
            <br>

        </div>
        <br>
        <div>
            <input type="text" name="email" id="email" placeholder="Email">
            <br>
            
        </div>

        <!-- <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="paymentMethod" id="visa" value="visa"> Display value
            </label>
        </div> -->
        <!-- <div class="form-group">
            <section id="name">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="First name">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Last name">
                    </div>
                </div>
            </section>
            <br>
            <label for="payment">Example label</label>
            <br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="visa" value="visa">
                <label class="form-check-label" for="visa">Visa</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="momo" value="option2">
                <label class="form-check-label" for="momo">Momo</label>
            </div>

        </div>
 -->
    </form>
</body>

</html>