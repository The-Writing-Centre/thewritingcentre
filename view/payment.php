<?php

require('../settings/core.php');
require('../controllers/cart_controller.php');
check_login();

$customer_id = $_SESSION['user_id'];
$email = $_SESSION['customer_email'];
$amount = total_amount_controller($customer_id);

?>
<!doctype html>
<html lang="en">

<head>
    <title>payment test</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Customer Payment</h2>
                    <!-- <p>Please fill this form to make payment to the application.</p> -->
                    <!-- Login Form -->
                    <form action="../js/payment.js" method="POST" id="paymentForm">

                        <!-- Name Input Section -->
                        <!-- <section>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="First name" name="fname" id="fname">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Last name" name="lname" id="lname">
                                </div>
                            </div>

                        </section> -->

                        <!-- Email field -->
                        <!-- <div class="form-group">
                            <label>Email</label>
                            <input name="email" class="form-control" placeholder="Enter email..." required></textarea>
                            <span class="invalid-feedback"></span>
                        </div> -->

                        <!-- Password field -->
                        <!-- <div class="form-group">
                            <label>Password</label>
                            <input name="password" class="form-control" type="password" placeholder="Enter password..." required></textarea>
                            <span class="invalid-feedback"></span>
                        </div> -->

                        <!-- <div class="form-group">
                            <label for="service">Service</label>
                            <!-- <select class="custom-select" name="service" id="service">
                                <!-- <option selected aria-placeholder="choose a service" value="">Choose a service</option> -->
                        <!-- </select>
                            <br>
                            <input type="checkbox" name="service" id="service" value="CV">
                        </div> -->


                        <!-- <div class="form-group">
                            <label for="service">Service Select</label>
                            <select class="custom-select" name="service" id="service">
                                <option selected>Select one</option>
                                <option value="3">Gen. consultation</option>
                                <option value="4">Cover Letter Writing</option>
                                <option value="5">Graduate Essay Writing</option>
                            </select>
                        </div> -->

                        <!-- <div class="form-group">
                          <label for="number">Number of Selection</label>
                          <input type="number"
                            class="form-control" name="number" id="number" aria-describedby="helpId" placeholder="Enter a number" min="1" step="1">
                          <small id="helpId" class="form-text text-muted">Help text</small>
                        </div> -->

                        <!-- Submit & cancel buttons -->
                        <!-- <input type="submit" class="btn btn-primary" value="Submit" name="login"> -->
                        <button type="button" class="btn btn-primary" onclick="payWithPaystack()">Pay</button>

                        <!-- Redirects to home page -->
                        <a href="../index.php" class="btn btn-secondary ml-2">Cancel</a>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- <script src="../js/payment.js"></script> -->
    <script src="https://js.paystack.co/v1/inline.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        < script >
            const paymentForm = document.getElementById('paymentForm');
        paymentForm.addEventListener("submit", payWithPaystack, false);

        // PAYMENT FUNCTION
        function payWithPaystack(e) {
            e.preventDefault();
            let handler = PaystackPop.setup({
                key: 'pk_live_bd5356607a881f3a0d6843b75d3172b74b9675cd', // Replace with your public key
                email: document.getElementById("email-address").value,
                amount: document.getElementById("amount").value * 100,
                currency: 'GHS',
                onClose: function() {
                    alert('Window closed.');
                },
                callback: function(response) {
                    window.location = `../actions/processing.php?email=${document.getElementById("email-address").value}&amount=${document.getElementById("amount").value}&reference=${response.reference}`
                    // alert("payment have been made"+ response.reference);
                    // $.ajax({
                    //   url:`../actions/processing?email=${document.getElementById("email-address").value}&amount=${document.getElementById("amount").value}&reference=${response.reference}`,
                    //   method:'GET',
                    //   success: function (response){
                    //     alert(response);
                }


            });
            //}
            // });
            handler.openIframe();
        }
    </script>
</body>


</html>