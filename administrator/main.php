<?php  
   session_start();
   ob_start();
?>  

<html>
  <head>
    <title>ElevenOne Foods - View products</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/main.css" media="screen" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style-portfolio.css">
    <link rel="stylesheet" href="../css/picto-foundry-food.css" />
    <link rel="stylesheet" href="../css/jquery-ui.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" href="../favicon-1.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/javascript" href="../js/bootstrap.min.js">
    <link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css" />

  </head>
  <body background="../images/landing_bg.jpg" style="background-attachment: fixed;">
	<div class="container">
		<div class="page-header" style="border-bottom:none;">
						<div id="userPanel" style="position:absolute; background:rgba(200,200,200, 0.8); padding:10px; border-radius=5px; margin-left: 400px;">
                            <?php 
                                echo "<strong style='font-size:1.3em;'>".@$_SESSION['username']."</strong>";
                                echo "<a href='../logout.php'><button class='text-center form-btn form-btn' style='width: 80px; height: 30px; padding: 5px; font-size: 0.7em; float: right;' >Logout</button></a>";
                            ?>
                        </div>
	    	<h1 style="background: rgba(200,200,200, 0.6); width: auto;"><small>Product Showcase </small> <a class="navbar-brand" href="#">ElevenOne Foods</a></h1>
	    	<div class="panel-body">
	    		<form role="form" method="POST" action="">
		    		<div class="input-group col-md-4">
	                        <input type="text" class="form-control" style="height:45px;"  name="keyword" id="keyword" placeholder="Enter Product Name" required>
	                        <span class="input-group-addon" style="background: rgba(255,255,255,0.8);">
	                        <input type="submit" name="submit" style="height:31px;" id="submit" value="Search" class="btn btn-success pull-right"></span>
	                </div> 
                </form>         	
	    	</div>
	    </div>
	    <div class="container">
	    	<div class="row">
		        <div class="col-lg-10 col-md-10">
		            <div class="panel panel-default" style="background: rgba(255,255,255,0.7);">
		                <div class="panel-heading">
		                    <h2	><small>List of Products</small></h2>
		                </div>
		                <div class="panel-body">
		                    <div id="grid" class="table-responsive">
		                    	<table class="table table-hover">
		                    		<thead>
		                    			<th>Product ID</th>
		                    			<th>Category</th>
		                    			<th>Product Name</th>
		                    			<th>Price(LKR)</th>
		                    			<th>Number of units available</th>
		                    		</thead>
		                    		<tbody>
										<?php 
											include 'dbConnect.php';
											
											$data = $conn -> query("SELECT * FROM product");

											if(@$_POST['submit']){
												$data = $conn -> query("SELECT * FROM product WHERE pName LIKE '%$_POST[keyword]%' or category LIKE '%$_POST[keyword]%'");
											}

											while($row = $data->fetch_assoc()){	
										 ?>
										 			<tr>
												        <td><?php echo $row['pID']?></td>
												        <td><?php echo $row['category']?></td>
												        <td><?php echo $row['pName']?></td>
												        <td><?php echo (double)$row['price'];?></td>
												        <td><?php echo $row['availableUnits']?></td>
												    </tr>
												        
										<?php } ?>
		                    		</tbody>

		                    	</table>
		                    </div>
		                </div>

		                <div class="panel-body">
		                	<input type="button" class="btn btn-success" value="Add Products" name="add" onclick="location.href= 'addProducts.php?flag=null'">
		                	<input type="button" class="btn btn-success" value="Update Products" name="add" onclick="location.href= 'updateProducts.php?flag=null'">
		                	<input type="button" class="btn btn-success" value="Delete Products" name="add" onclick="location.href= 'deleteProducts.php?flag=null'">
		                </div>
            </div>

        </div>
    </div>
    	</div>
    </div>
</div>
  </body>
</html>