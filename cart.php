<?php require_once ("header.php"); ?>

<section class="h-100 background-custom">
        <div class="container py-5 h-100">
            <form action="" method="post">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12">
                        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                            <div class="card-body p-0">
                                <div class="row g-0">
                                    <div class="col-lg-8">
                                        <div class="p-5">

                                            <?php
                                                $sum = 0;
                                                $total = 0;
                                                $nameOrder = null;
                                                if (isset($_SESSION['cart']))
                                                {
                                                    echo
                                                    '<div class="d-flex justify-content-between align-items-center mb-5">
                                                        <h1 class="fw-bold mb-0 text-black">SHOPPING CART</h1>
                                                        <h6 class="mb-0 text-muted">' . count($_SESSION['cart']) . ' items' . '</h6>
                                                    </div>
                                                    <hr class="my-4">';
                                                    for ($i = 0; $i < sizeof($_SESSION['cart']); $i++)
                                                    {
                                                        echo
                                                        '<div class="row mb-4 d-flex justify-content-between align-items-center">
                                                            <div class="col-md-2 col-lg-2 col-xl-2">
                                                                <img src="images/' . $_SESSION['cart'][$i]['img'] . '" class="img-fluid rounded-3" alt="Cotton T-shirt">
                                                            </div>
                                                            <div class="col-md-3 col-lg-3 col-xl-3">
                
                                                                <h6 class="text-black mb-0">' . $_SESSION['cart'][$i]['name'] . '</h6>
                                                            </div>
                                                            <div class="col-md-3 col-lg-3 col-xl-2" style="text-align: center;">' . $_SESSION['cart'][$i]['quantity'] . '</div>
                                                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                                <h6 class="mb-0">' . number_format($_SESSION['cart'][$i]['price']) . '</h6>
                                                            </div>
                                                            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                                <form action="" method="post">
                                                                    <input type="hidden" name="index" value="' . $i . '">
                                                                    <button type="submit" name="remove" style="border:none; background:none; padding:0; font-size:12px; color:red;">
                                                                        <i class="fas fa-times"></i>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                            
                                                        </div>
                                                        <hr class="my-4">';
                                                        $sum = $sum + $_SESSION['cart'][$i]['price'];
                                                        $nameOrder = $nameOrder . $_SESSION['cart'][$i]['name'] . ' x' . $_SESSION['cart'][$i]['quantity'] . '<br>';
                                                    }
                                                    echo
                                                    '<div class="mb-4 pb-2">
                                                        <h5 class="text-uppercase mb-3">SHIPPING</h5>
        
                                                        <select class="select " name="ship">
                                                            <option value="15000">Standard-Delivery: 15,000</option>
                                                            <option value="23000">Fast-Delivery: 23,000</option>
                                                            <option value="50000">Special-Delivery: 50,000</option>
                                                        </select>
                                                    </div>
        
                                                
        
        
        
                                                    <div class="row">
                                                            <button type="submit" class="btn btn-dark btn-block btn-lg"
                                                            data-mdb-ripple-color="dark"><a href="#!"
                                                                class="text-body"></a>Update</button>
                                                        <div class="col p-3"></div>
                                                    </div>
        
        
        
                                                </div>
                                            </div>
                                            <div class="col-lg-4 bg-grey">
                                                <div class="p-5">
                                                    <h3 class="fw-bold mb-5 mt-2 pt-1">ORDER SUMMARY</h3>
                                                    <hr class="my-4">';
                                                    $count = 0;
                                                    if (isset($_SESSION['cart'])){
                                                        $count = count($_SESSION['cart']);
                                                    }
                                                    if (isset($_POST['ship'])){
                                                        $total = $sum + $_POST['ship'];
                                                    }
                                                    else
                                                    {
                                                        $total = $sum + 15000;
                                                    }
                                                    echo
                                                    '<div class="d-flex justify-content-between mb-4">
                                                        <h5>' . $count . ' items</h5>
                                                        <h5>' . number_format($sum) . '</h5>

                                                    </div>

                                                    <div class="d-flex justify-content-between mb-4">

                                                        <h5>shipping</h5>
                                                        <h5>' . (isset($_POST['ship']) ? number_format($_POST['ship']) : '15,000') . '</h5>
                                                    </div>

                                                    <hr class="my-4">

                                                    <div class="d-flex justify-content-between mb-5">
                                                        <h5 class="text-uppercase">TOTAL PRICE</h5>
                                                        <h5>' . number_format($total) . '</h5>
                                                    </div>
                                                    <div class="row">
                                                        <input type="hidden" name="name" value="' . $nameOrder . '">
                                                        <input type="hidden" name="price" value="' . $total . '">
                                                        <button type="submit" name="push" class="btn btn-dark btn-block btn-lg"
                                                            data-mdb-ripple-color="dark">Purchase</button>
                                                    </div>';
                                                }
                                                else
                                                {
                                                    echo '<center><h1>Giỏ hàng trống</h1></center>';
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>

</html>