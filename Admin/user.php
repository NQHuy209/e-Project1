<?php
include "./sidebar.php";
include_once "config/connect_db.php";

?>
 <?php
    include_once "config/connect_db.php";

    if(isset($_GET['logout'])) {
      unset($_SESSION['user']);
      header('location:../index.php');
  }
  ?>

<head>
    <style type="text/css">
        table {
            width: 2000px;
            margin: auto;
            text-align: center;
            overflow: auto;
        }

        tr {
            border: 1px solid;
        }

        th {

            border: 1px solid;
        }

        td {
            border: 1px solid;
        }

        h1 {
            text-align: center;
        }

        #button {
            float: right;
        }
    </style>
</head>

<body style="background-color: #263238;
">
    <?php
    if (isset($_POST['update'])) {

        $sql = "UPDATE users SET role_id = '1'  WHERE id = " . $_POST['up'];
        mysqli_query($conn, $sql);
        header('location:user.php');
    }
    ?>
    <div id="viewport">
        <div id="content">
            <nav class="navbar navbar-default" style="border-left: none; border-right: none;border-radius: 0px; margin-bottom: 0;">
                <div class="container-fluid">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="?logout"><i class="zmdi zmdi-arrow-right" style="margin-right: 3px;"></i>Log out</a></li>
                    </ul>
                </div>
            </nav>
            <div class="container-fluid">
                <table class="table ">
                    <h1 style="text-align: center;">Account information</h1>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Password</th>
                            <th>Full Name</th>
                            <th>Phone Number</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th style="width: 10%">Action</th>


                        </tr>
                    </thead>
                    <?php
                    $sql = "select * from users";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '
              <tr>
                  <td>' . $row['id'] . '</td>
                  <td>' . $row['username'] . '</td>
                  <td>' . $row['password'] . '</td>
                  <td>' . $row['fullname'] . '</td>
                  <td>' . $row['phone_number'] . '</td>
                  <td>' . $row['address'] . '</td>
                  <td>' . $row['email'] . '</td>
                  <td>' . $row['role_id'] . '</td>
                  <td>
                    <form method="POST" action="">
                        <input type="hidden" name="up" value="' . $row['id'] . '">
                        <button class="btn btn-primary" type="submit" name="update">Update</button>
                    </form>
                  </td>
              </tr>';
                        }
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>