<?php            
    $conn = mysqli_connect('localhost', 'root', '12345678', 'project');
    session_start();
    
    if(isset($_POST['logout'])) {
        unset($_SESSION['user']);
        header('location:index.php');
    }

    
require ('./component.php');

if (isset($_POST['push'])) {
    $sql = "INSERT INTO project.order (user_id, product_name, price, phone_number, address, date, status) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isissss", $user_id, $product_name, $price, $phone_number, $address, $date, $status);
    $user_id = $_SESSION['user']['id'];
    $product_name = $_POST['name'];
    $price = $_POST['price'];
    $phone_number = $_SESSION['user']['phone_number'];
    $address = $_SESSION['user']['address'];
    $date = date('Y-m-d H:i:s');
    $status = 'Chờ xác nhận';
    if ($stmt->execute() === TRUE)
    {
        unset($_SESSION['cart']);
        header('location:user.php?type=1');
    }
    $stmt->close();
}


// add to cart
if (isset($_POST['add'])){
    if (isset($_SESSION['user'])){
        $temp = 0;
                if (isset($_SESSION['cart']))
                {
                    for ($i = 0; $i < sizeof($_SESSION['cart']); $i++)
                    {
                        if ($_SESSION['cart'][$i]["id"] == $_POST['id'])
                        {
                            $_SESSION['cart'][$i]["quantity"] += $_POST['quantity'];
                            $_SESSION['cart'][$i]["price"] *= $_SESSION['cart'][$i]["quantity"];
                            $temp = 1;
                            break;
                        }
                    }
                }
                if ($temp == 0)
                {
                    $_SESSION['cart'][] = array(
                        "id" => $_POST['id'],
                        "name" => $_POST['name'],
                        "quantity" => $_POST['quantity'],
                        "price" => $_POST['price'] * $_POST['quantity'],
                        "img" => $_POST['img']
                    );
                }
        }
        else
        {
            echo '<script>alert("Xin vui lòng đăng nhập để mua hàng ")</script>';
            header('location:login.php');
        }
}

//remove in cart
if (isset($_POST['remove'])){
    if (isset($_SESSION['cart'])) {
        for ($i = $_POST['index']; $i < sizeof($_SESSION['cart']); $i++) {
            $_SESSION['cart'][$i] = $_SESSION['cart'][$i+1];
        }
        unset($_SESSION['cart'][sizeof($_SESSION['cart']) - 1]);
        if (sizeof($_SESSION['cart']) == 0) {
            unset($_SESSION['cart']);
        }
    }
    header('location:cart.php');
}


// add to compare
if (isset($_POST['compare']))
    {
        $temp = 0;
        if (isset($_SESSION['compare']))
        {
            if (sizeof($_SESSION['compare']) >= 2)
            {
                echo '<script>alert("Chỉ được so sánh 2 sản phẩm")</script>';
                $temp = 1;
            }
        }

        if ($temp == 0)
        {
            

            $_SESSION['compare'][] = array(
                "id" => $_POST['id'],
                "categories_id" => $_POST['categories_id'],
                "img" => $_POST['img'],
                "name" => $_POST['name'],
                "price" => $_POST['price'],
                "brand" => $_POST['brand'],
                "information" => $_POST['information'],
                "html" => $_POST['html']
            );
        }

        if (isset($_SESSION['compare']))
        {
            for ($i = 1; $i < sizeof($_SESSION['compare']); $i++)
            {
                if ($_SESSION['compare'][0]['id'] == $_SESSION['compare'][$i]['id'])
                {
                    echo '<script>alert("Sản phẩm đã có trong danh sách so sánh")</script>';
                    unset($_SESSION['compare'][$i]);
                    break;
                }
                if ($_SESSION['compare'][0]['categories_id'] != $_SESSION['compare'][$i]['categories_id'])
                {
                    echo '<script>alert("Chỉ được so sánh 2 sản phẩm cùng loại")</script>';
                    unset($_SESSION['compare'][$i]);
                }
            }
        }
    }
// delete compare
                            if (isset($_POST['delete']))
                                {
                                    if (isset($_SESSION['compare']))
                                    {
                                        for ($i = $_POST['index']; $i < sizeof($_SESSION['compare']); $i++)
                                        {
                                            $_SESSION['compare'][$i] = $_SESSION['compare'][$i+1];
                                        }

                                        unset($_SESSION['compare'][sizeof($_SESSION['compare']) - 1]);
                                        if (sizeof($_SESSION['compare']) == 0)
                                        {
                                            unset($_SESSION['compare']);
                                        }

                                        header('location:compare.php');
                                    }
                                }
    
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
