<?php
    include "./sidebar.php";
    include_once "config/connect_db.php";
?>
<head>
<style type="text/css">
            table{
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
            h1{
                text-align: center;
            }
            #button{
                float: right;
            }
        </style>
</head>
<body>
    <?php
        if (isset($_POST['update']))
            {
                
                $sql = "UPDATE project.order SET status = 'Đã giao hàng'  WHERE id = " . $_POST['up'];
                mysqli_query($conn,$sql);
                header('location:ship.php');
                
            }
    ?>
<div class="content">
  <table class="table ">
    <h2>Các đơn hàng</h2>
    <thead>
      <tr>
        <th>ID</th>
        <th>User</th>
        <th>Name</th>
        <th>Total Price</th>
        <th>Phone Number</th>
        <th>Address</th>
        <th>Date</th>
        <th>Status</th>
        <th>Action</th>
        

      </tr>
    </thead>
    <?php
      $sql = "select * from project.order";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0)
      {
          while($row = mysqli_fetch_assoc($result))
              
          {
              echo'
              <tr>
                  <td>'.$row['id'].'</td>
                  <td>'.$row['user_id'].'</td>
                  <td>'.$row['product_name'].'</td>
                  <td>'.$row['price'].'</td>
                  <td>'.$row['phone_number'].'</td>
                  <td>'.$row['address'].'</td>
                  <td>'.$row['date'].'</td>
                  <td>'.$row['status'].'</td>
                <td>
                <form method="POST" action="">
                    <input type="hidden" name="up" value="' . $row['id'] . '">
                    <button type="submit" name="update">Update</button>
                </form>
                </td>
                  
              </tr>';
          }
      }
    ?>
</body> 