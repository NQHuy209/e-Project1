<?php
    include "./sidebar.php";
    include_once "config/connect_db.php";
    include "controller/QLCategories.php";
?>
<div class="content">
  <h3>Category Items</h3>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Category Name</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      $sql = "select * from categories";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0)
      {
          while($row = mysqli_fetch_assoc($result))
              
          {
              echo'
              <tr>
                  <td>'.$row['id'].'</td>
                  <td>'.$row['name'].'</td>
                  <td><a href="?id='.$row['id'].'"> Delete</a></td>
              </tr>';
          }
      }
    ?>
    