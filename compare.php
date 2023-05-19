<?php
    require "header.php"
?>
<head>
<style type="text/css">
            table{
                width: 800px;
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
<section class="bread-crumb">
	<span class="crumb-border"></span>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 a-left">
				<ul class="breadcrumb">					
					<li class="home">
						<a itemprop="url" ><span title="Trang chủ">Trang chủ</span></a>						
						<span class="mr_lr">&nbsp;/&nbsp;</span>
					</li>
					
					<li><strong ><span>So sánh</span></strong></li>
					
				</ul>
			</div>
		</div>
	</div>
</section>
<section class="page main-page">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="page-title category-title">
                <table>
                                <h1>So sánh sản phẩm</h1>
                                <?php    
                                if(isset($_SESSION['compare']))
                                {
                                echo'
                                <thead>
                                <th></th>';
                                    for ($i = 0; $i < sizeof($_SESSION['compare']); $i++)
                                    {
                                        echo'
                                            <th>' . $_SESSION['compare'][$i]['name'] . '</th>';
                                    }
                                echo'
                                </thead>';
                                echo'
                                <tbody>
                                    <tr>
                                    <td>Ảnh sp</td>';
                                        for ($i = 0; $i < sizeof($_SESSION['compare']); $i++)
                                        {       
                                        echo'
                                            <td><img src="images/' . $_SESSION['compare'][$i]['img'] . '" class="img-fluid rounded-3" alt="Cotton T-shirt"></td>';
                                        }
                                echo'
                                    </tr>
                                    <tr>
                                    <td>Giá</td>';
                                        for ($i = 0; $i < sizeof($_SESSION['compare']); $i++)
                                        {   
                                        echo'
                                            <td>' . $_SESSION['compare'][$i]['price'] . '</td>';
                                        }
                                echo'
                                    </tr>
                                    <tr>
                                    <td>Thương hiệu</td>';
                                        for ($i = 0; $i < sizeof($_SESSION['compare']); $i++)
                                        { 
                                        echo'
                                            <td>' . $_SESSION['compare'][$i]['brand'] . '</td>';
                                        }
                                echo'
                                    </tr>
                                    <tr>
                                    <td>Thông tin</td>';
                                        for ($i = 0; $i < sizeof($_SESSION['compare']); $i++)
                                        { 
                                        echo'
                                            <td>' . $_SESSION['compare'][$i]['information'] . '</td>';
                                        }
                                echo'
                                    </tr>
                                    <tr>
                                    <td>Thông số kỹ thuật</td>';
                                        for ($i = 0; $i < sizeof($_SESSION['compare']); $i++)
                                        { 
                                        echo'
                                        <td><iframe src="html/' . $_SESSION['compare'][$i]['html'] . '" width="100%" height="100%"></iframe></td>';
                                        }
                                echo'
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><button type="hidden" >Xóa</button></td>
                                        <td><button type="hidden" >Xóa</button></td>
                                    </tr>
                                </tbody>';
                                
                            }
                                ?>   
                </table>
                        
                         
                    
                     
				</div>
                    
                
				<div class="content-page rte">
					
				</div>
			</div>
		</div>
	</div>
</section>

<?php
    require "footer.php"
?>