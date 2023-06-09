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
    <style>
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
        #content nav ul li a {
          color: #CFD8DC;
        }
       
    </style>
</head>
  <body style="background-color: #263238;">
    <div id="viewport" style="color:#CFD8DC">
      <div id="content">
        <nav class="navbar navbar-default" style="border-radius:0;margin-bottom: 0; background-color: #37474F;border:none">
          <div class="container-fluid">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="?logout"><i class="zmdi zmdi-arrow-right" style="margin-right: 3px;"></i>Log out</a></li>
            </ul>
          </div>
        </nav>
        <div class="container-fluid">
          <table class="table">
            <h1 style="text-align: center;">Category Items</h1>
            <thead>
              <tr>
                <th style="border-bottom: 1px solid #CFD8DC; text-align: center;width:5%">CategoriesID</th>
                <th style="border-bottom: 1px solid #CFD8DC; text-align: center;">Product name</th>
                <th style="border-bottom: 1px solid #CFD8DC; text-align: center;width:10%">Edit</th>
                <th style="border-bottom: 1px solid #CFD8DC; text-align: center;width:10%">Delete</th>
              </tr>
            </thead>
            <?php
            $sql = "select * from categories";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                echo '
                    <tr>
                        <td>' . $row['id'] . '</td>
                        <td>' . $row['name'] . '</td>
                        <td><a  class="btn btn-success" href="controller/categories/editCategories.php?id='. $row['id'] .'"> Edit</a></td>
                        <td><a  class="btn btn-danger" href="controller/categories/deleteCategories.php?id=' . $row['id'] . '"> Delete</a></td>
                    </tr>';
              }
            }
            ?>
            <tfoot>
              <td style="border-right: none;">
                <a href="controller/categories/addCategories.php"><button class="btn btn-outline-dark btn-add" style="float: left;" id="button">ADD</button></a>
              </td>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
    
  </body>
  </html>