<?php
    require "connect_db.php";
    if (isset($_POST['login']))
    {
        $error = array();
        $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '" . $_POST['username'] . "'");
        if (mysqli_num_rows($result) == 1)
        {
            $row = mysqli_fetch_assoc($result);
            if (md5($_POST['password']) == $row['password'])
            {
                $_SESSION['user'] = array(
                    "id" => $row['id'],
                    "role_id" => $row['role_id'],
                    "full_name" => $row['fullname'],
                    "username" => $row['username'],
                    "email" => $row['email'],
                    "phone_number" => $row['phone_number'],
                    "address" => $row['address']
                );
                if ($_SESSION['user']['role_id'] == 1)
                {
                    header('location:Admin/index.php');
                }
                else
                {
                    header('location:index.php');
                }
            }
            else if (md5($_POST['password']) != $row['password'])
            {
                $error['password'] = 'Mật khẩu không chính xác.';
            }
        }
        else
        {
            $error['username'] = 'Tài khoản không tồn tại.';
        }
    }
?>