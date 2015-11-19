<?php 
	include'../dbConnect.php'; 
    
    if($_GET['flag']=='add'){
    	$sql = "INSERT INTO product (category, pName, description, price,availableUnits) VALUES ('$_POST[pCat]', '$_POST[pName]', '$_POST[descrp]', $_POST[price], '$_POST[nUnits]')";

	    if ($conn->query($sql) === FALSE) {
	    		header('Location: addProducts.php?flag=err');
	            	 }else{
	            header('Location: addProducts.php?flag=success');               
	            }

    }elseif ($_GET['flag']=='update') {
    	$data = $conn -> query("SELECT availableUnits FROM product WHERE pID ='$_POST[pID]'");
    	$data = (int)$data + (int)$_POST['nUnits'];

    	$sql = "UPDATE product SET category='$_POST[pCat]', pName='$_POST[pName]', description='$_POST[descrp]', price=$_POST[price], availableUnits='$data'  WHERE pID='$_POST[pID]'";

    	if ($conn->query($sql) === FALSE) {
	    		header('Location: updateProducts.php?flag=err');
	            	 }else{
	            header('Location: updateProducts.php?flag=success');               
	            }

    }elseif ($_GET['flag']=='delete') {
    	$sql = "DELETE FROM product WHERE pID='$_POST[pID]'";

    	if ($conn->query($sql) === FALSE) {
	    		header('Location: deleteProducts.php?flag=err');
	            	 }else{
	            header('Location: deleteProducts.php?flag=success');               
	            }
    }
    
    $conn->close();

 ?>