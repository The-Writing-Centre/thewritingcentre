<?php

require('../settings/core.php');
require('../controllers/cart_controller.php');
check_login();
$customer_id = $_SESSION['user_id'];
$services = select_all_from_cart_controller($customer_id);
$amount = total_amount_controller($customer_id);

?>
<!doctype html>
<html lang="en">

<head>
    <title>TWC - Cart</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <section class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Service</th>
                                <th scope="col">Title</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($services as $service) {
                                echo "
                          <tr>
                              <td>
                                  <div class='col-md-4'>
                                      <div class='d-flex'>
                                          <img  src=../images/products/{$service['service_image']} width='100' height='100'>
                                      </div>
                                  </div>
                              </td>

                              <td>
                                <h5>{$service['service_name']}</h5>
                              </td>
                              <td>
                                  <h5>GHS {$service['service_price']}</h5>
                              </td>

                              <form method = 'post' action='../actions/update_quantity.php'>
                              <input type='hidden' name='service_id' value= {$service['service_id']} ?>	
                              
                              <td>
                                  <div class='product_count'>
                                      <input type='number'  id='qty' name='quantity' maxlength='12' value={$service['qty']}>
                                  </div>
                              </td>
                              <td>
                              <input class='btn btn-success' name = 'updateQty' type = 'submit'  value = 'Update Qty'>

                              </td>
                              </form>
                              <td>
                              <a class='btn btn-danger' href='../actions/remove_from_cart.php?service_id={$service['service_id']}'>Remove</a>

                              </td>
                              
                              <td>
                              </td>
                              
                          </tr>
                          
                          ";
                            }

                            echo "
                        <tr class='bottom_button'>
                        </tr>
                            <tr>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <h5>Subtotal</h5>
                                </td>
                                <td>
                                    <h5>GHS{$amount['Amount']}</h5>
                                </td>
                                <td></td>
                                
                            </tr>
                            <td>
                                <a class='btn btn-warning' href='cart.php'>Continue Shopping</a>
                        </td>
                        <td><a class='btn btn-primary' href='payment.php'>Proceed to Pay</a></td>
                    
                   
                          "; ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>