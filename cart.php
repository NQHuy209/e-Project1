<?php



require ("CreateDB.php");
require ("component.php");

$db = new CreateDB('project', 'product');

if (isset($_POST['remove'])){
  if ($_GET['action'] == 'remove'){
      foreach ($_SESSION['cart'] as $key => $value){
          if($value["product_id"] == $_GET['id']){
              unset($_SESSION['cart'][$key]);
              echo "<script>alert('Product has been Removed...!')</script>";
             
          }
      }
  }
}


?>


<!DOCTYPE html>
<html>

<head>
    <title>La Imperial</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="stylecart.css">

</head>

<body>
    
<?php require_once ("header.php"); ?>

    <section class="h-100 background-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12">
                    <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                        <div class="card-body p-0">
                            <div class="row g-0">
                                <div class="col-lg-8">
                                    <div class="p-5">
                                        <div class="d-flex justify-content-between align-items-center mb-5">
                                            <h1 class="fw-bold mb-0 text-black">SHOPPING CART</h1>

                                            <div class="mb-0 text-muted">
                                                <?php
                                                if (isset($_SESSION['cart'])){
                                                    $count  = count($_SESSION['cart']);
                                                    echo "<h6>($count items)</h6>";
                                                }else{
                                                    echo "<h6(0 items)</h6>";
                                                }
                                            ?>
                                            </div>

                                        </div>

                                        <hr class="my-4">

                                        <?php

                $total = 0;
                    if (isset($_SESSION['cart'])){
                        $product_id = array_column($_SESSION['cart'], 'product_id');

                        $result = $db->getData();
                        while ($row = mysqli_fetch_assoc($result)){
                            foreach ($product_id as $id){
                                if ($row['id'] == $id){
                                    cartElement($row['img'], $row['name'],$row['price'], $row['id']);
                                    $total = $total + (int)$row['price'];
                                }
                            }
                        }
                    }else{
                        echo "<h5>Empty</h5>";
                    }

                ?>


                                        <hr class="my-4">


                                        <div class="mb-4 pb-2">
                                            <h5 class="text-uppercase mb-3">SHIPPING</h5>

                                            <select class="select ">
                                                <option value="0"></option>
                                                <option value="1">Standard-Delivery- $5.0</option>
                                                <option value="2">Fast-Delivery- $12.0</option>
                                                <option value="3">Special-Delivery- $20.0</option>
                                            </select>
                                        </div>





                                        <div class="row">



                                            <button type="button" class="btn btn-dark btn-block btn-lg"
                                                data-mdb-ripple-color="dark"><a href="#!"
                                                    class="text-body"></a>Update</button>

                                            <div class="col p-3"></div>

                                        </div>



                                    </div>
                                </div>
                                <div class="col-lg-4 bg-grey">
                                    <div class="p-5">
                                        <h3 class="fw-bold mb-5 mt-2 pt-1">ORDER SUMMARY</h3>




                                        <div class="mb-3 mt-3">
                                            <label for="fname">NAME</label>
                                            <input type="text" class="form-control" id="fname" name="fullname">
                                        </div>

                                        <div class="mb-3">
                                            <label for="address">ADDRESS</label>
                                            <input type="text" class="form-control" id="address" name="address">
                                        </div>

                                        <div class="mb-3">
                                            <label for="paymet">PAYMENT METHOD</label>
                                            <select id="paymet" name="paymet">
                                                <option value="australia">Visa</option>
                                                <option value="canada">Napas</option>
                                                <option value="usa">Mastercard</option>
                                            </select>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="Card Number"
                                                    name="CN">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="CVV" name="cvv">
                                            </div>
                                        </div>


                                        <hr class="my-4">



                                        <div class="d-flex justify-content-between mb-4">
                                            <h5>3 items</h5>
                                            <h5>$ 132.0</h5>

                                        </div>

                                        <div class="d-flex justify-content-between mb-4">

                                            <h5>shipping</h5>
                                            <h5>$ 5.0</h5>
                                        </div>


                                        <div class="d-flex justify-content-between mb-4">

                                            <h5>discount</h5>
                                            <h5>- $ 0.0</h5>
                                        </div>

                                        <hr class="my-4">

                                        <div class="d-flex justify-content-between mb-5">
                                            <h5 class="text-uppercase">TOTAL PRICE</h5>
                                            <h6>$
                                                <?php
                                                echo $total;
                                                ?>
                                            </h6>
                                        </div>

                                        <div class="row">

                                            <button type="button" class="btn btn-dark btn-block btn-lg"
                                                data-mdb-ripple-color="dark">Purchase</button>

                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>