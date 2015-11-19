<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<link rel="stylesheet" type="text/css" href="orderf.css">
<script src="payv.js"></script>
<title>Do your Payments</title>
</head>

<body>


<p class="font" >Payment Form  </p>

<table height="340" class="form ">

<form action="Insert_Into_payment_Table.php" method="post" >

<tr>
	<td class="td"><label for="name">First Name: </label></td>
	<td class="td"><input type="text" name="fname" id="fname" size="30" onblur="name_check()"  ></td>
	<td class="td"><label for="name">Last Name: </label></td>
	<td class="td"><input type="text" name="lname" id="lname" size="30"  onblur="name_check1()"  ></td>
	
	
</tr>

<tr>
	<td class="td"><label for="nic">NIC NO: </label></td> 
	<td class="td"> <input type="text" name="nic" id="nic" onblur="NIC_check()" size="30"  ></td>
</tr>

<tr> 
	<td class="td"><label for="fitem">Food Item: </label></td>
	<td class="td"><select   class="drop_down_list" name="fitem" id="fitem"  >
  			<option>Select Category</option>
  			<option>Noodles</option>
			<option>Rice</option>
			<option>Other</option>
						
  		</select> </td>
		
	<td class="td"><label for="quantity">Quantity: </label></td>
	<td class="td"><input type="text" name="quantity" id="quantity" required onblur="q_check()" size="30"></td>
	
	<td class="td"><label for="amount">Amount: </label></td>
	<td class="td"><input type="text" name="amount" id="amount" required onblur="a_check()" size="30"   ></td>
</tr>

<tr>
	<td class="td"><label for="pitem">Payment Method: </label></td>
	<td class="td"><select   class="drop_down_list" name="pitem" id="pitem"  >
  			<option>Select Payment</option>
  			<option>Visa Card</option>
			<option>Master Card</option>
			<option>Credit Card</option>
			
			
  		</select> </td>
		<td class="td"><label for="card">Card No: </label></td>
	<td class="td"><input type="text" name="card" id="card" required onblur="c_check()" size="30"   ></td>
</tr>
<tr><td class="td" style="text-align:center"><input type="submit" value="Add Payment"></td></tr>

</form>
</table>



</body>
</html>
