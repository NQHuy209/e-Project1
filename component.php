<?php

function component($name, $price, $img, $id){
    $element = "
    
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
                <form action=\"index.php\" method=\"post\">
                    <div class=\"card shadow\">
                        <div>
                            <img src=\"$img\" alt=\"Image1\" class=\"img-fluid card-img-top\">
                        </div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">$name</h5>
                            
                            <h5>
                                <small><s class=\"text-secondary\">$519</s></small>
                                <span class=\"price\">$$price</span>
                            </h5>

                            <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
                             <input type='hidden' name='product_id' value='$id'>
                        </div>
                    </div>
                </form>
            </div>
    ";
    echo $element;
}



function cartElement($img, $name, $price, $id){
    $element = '
    
    <form action=\"cart.php?action=remove&id=$id\" method=\"post\" class=\"cart-items\">


                        <div class="row mb-5 d-flex justify-content-between align-items-center">
                                        <div class="col-md-2 col-lg-2 col-xl-2">
                                            <img src="images/' . $img . '" class="img-fluid rounded-3" alt="image">
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-xl-3">
                                            <h6 class="text-black mb-0">' . $name . '</h6>
                                        </div>

                                        <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                            <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control form-control-sm" />
                                        </div>
                                        <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                            <h6 class="mb-0">' . $price . '</h6>
                                        </div>
                                        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                            <a type ="submit" name="remove" class="text-muted"><i class="fas fa-times"></i></a>
                                        </div>

                                        </div>

                                    </div>

        </form>
    
    ';
    echo  $element;
}


?>

