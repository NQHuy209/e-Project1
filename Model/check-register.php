<?php
require "connect_db.php";
    $addToUser = false;
    if (isset($_POST['register']) || isset($_POST['addUser']))
    {
        $temp = 0;
        $error = array();
        if (mb_strlen($_POST['fullname']) < 2 || mb_strlen($_POST['fullname']) > 50)
        {
            $error['fullname'] = 'Tên chỉ được phép chứa từ 2-50 ký tự';
            $temp = 1;
        }
        if (!preg_match("/^[a-zA-Z][A-Za-z0-9_]{2,14}$/", $_POST['username'], $matchs))
        {
            $error['username'] = 'Tên đăng nhập phải bắt đầu bằng chữ và có từ 3-15 ký tự. Các ký tự (a-z, A-Z, 0-9, _ ).';
            $temp = 1;
        }
        if (!preg_match("/^[A-Za-z0-9*+-]{6,30}$/", $_POST['password'], $matchs))
        {
            $error['password'] = 'Mật khẩu phải có từ 6-30 ký tự. Các ký tự (a-z, A-Z, 0-9, *, +, - ).';
            $temp = 1;
        }
        if (!preg_match("/^[A-Za-z0-9_.]{5,32}@([a-zA-Z0-9]{2,9})(.[a-zA-Z]{2,9})+$/", $_POST['email'], $matchs))
        {
            $error['email'] = 'Email không đúng định dạng';
            $temp = 1;
        }
        if (mb_strlen($_POST['phone_number']) != 10)
        {
            $error['phone_number'] = 'Số điện thoại phải có 10 số.';
            $temp = 1;
        }
        if (mb_strlen($_POST['address']) > 200)
        {
            $error['address'] = 'Vui lòng ghi địa chỉ ngắn gọn (200 ký tự)';
            $temp = 1;
        }

        $result = $conn->query("SELECT * FROM users");
        if ($result->num_rows > 0)
        {
            while ($row = $result->fetch_assoc())
            {
                if ($_POST['username'] == $row['username'])
                {
                    $error['username'] = 'Tên đăng nhập đã tồn tại.';
                    $temp = 1;
                }
                if ($_POST['email'] == $row['email'])
                {
                    $error['email'] = 'Email đã được sử dụng.';
                    $temp = 1;
                }
                if ($_POST['phone_number'] == $row['phone_number'])
                {
                    $error['phone_number'] = 'Số điện thoại đã được sử dụng.';
                    $temp = 1;
                }
            }
        }
        if ($temp == 0)
        {
            $sql = "INSERT INTO users ( username, password, fullname, phone_number, address, email, role_id) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssssssi", $user, $pass, $name, $phone, $address, $email, $role);
            if (isset($_POST['register']))
            {
                $role = 2;
            }
            if (isset($_POST['addUser']))
            {
                if ($_POST['role'] == 'admin')
                {
                    $role = 1;
                }
                if ($_POST['role'] == 'user')
                {
                    $role = 2;
                }
            }
            $name = $_POST['fullname'];
            $user = $_POST['username'];
            $pass = md5($_POST['password']);
            $mail = $_POST['email'];
            $phone = $_POST['phone_number'];
            $address = $_POST['address'];
            if ($stmt->execute())
            {
                header('location:login.php');
            }
            if (isset($_POST['register']))
            {
                $addToUser = true;
            }
            if (isset($_POST['addUser']))
            {
                header('');
            }
            $stmt->close();
        }
    }
?>