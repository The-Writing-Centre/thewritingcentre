<?php
include('../settings/core.php');
include('../actions/payment_functions.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payments</title>
</head>

<body>
    <!-- <div class="container">
        <form>
            <div class="form-group row">
                <label for="inputName" class="col-sm-1-12 col-form-label"></label>
                <div class="col-sm-1-12">
                    <input type="text" class="form-control" name="inputName" id="inputName" placeholder="">
                </div>
            </div>
            <fieldset class="form-group row">
                <legend class="col-form-legend col-sm-1-12">Group name</legend>
                <div class="col-sm-1-12">
                    
                </div>
            </fieldset>
            <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Action</button>
                </div>
            </div>
        </form>
    </div> -->
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Customer Payment</h2>
                    <p>Please fill this form to make payment to the application.</p>
                    <!-- Login Form -->
                    <form action="../actions//payment.js" method="POST" id="paymentForm">

                        <!-- Email field -->
                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" class="form-control" placeholder="Enter email..." required></textarea>
                            <span class="invalid-feedback"></span>
                        </div>

                        <!-- Password field -->
                        <div class="form-group">
                            <label>Password</label>
                            <input name="password" class="form-control" type="password" placeholder="Enter password..." required></textarea>
                            <span class="invalid-feedback"></span>
                        </div>

                        <div class="form-group">
                            <label for="Option">Option</label>
                            <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            <small id="helpId" class="text-muted">Help text</small>
                        </div>

                        <!-- <div class="form-group">
                            <label for="service">Service</label>
                            <!-- <select class="custom-select" name="service" id="service">
                                <!-- <option selected aria-placeholder="choose a service" value="">Choose a service</option> -->
                        <!-- </select>
                            <br>
                            <input type="checkbox" name="service" id="service" value="CV">
                        </div> -->
                        <div>
                            <label for="agree">
                                <input type="checkbox" name="checkbox" id="checkbox" value="">checkbox
                            </label>
                        </div>

                        <!-- Submit & cancel buttons -->
                        <input type="submit" class="btn btn-primary" value="Submit" name="login">
                        <!-- Redirects to register page -->
                        <a href="register.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>