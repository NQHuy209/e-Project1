<?php
    include "./sidebar.php";
    include_once "config/connect_db.php";
?>
<div class="content">
  <table class="table ">
    <h2>Category Items</h2>
    <thead>
      <tr>
        <th>CategoriesID</th>
        <th>Tên Sản Phẩm</th>
        <th>Edit</th>
        <th>Delete</th>
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
                  <td><a href="controller/categories/deleteCategories?id='.$row['id'].'"> Delete</a></td>
                  <td><a href="controller/categories/editCategories?id='.$row['id'].'"> Edit</a></td>
              </tr>';
          }
      }
    ?>
    <tfoot>
      <td>
        <a href="controller/categories/addCategories.php"><button id="button">ADD</button></a>
      </td>
    </tfoot>
    
    
    
    