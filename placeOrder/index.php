<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<link rel="stylesheet" type="text/css" href="orderf.css">
<script src="orderformvalidate.js"></script>
<title>Place the order</title>
</head>

<body>


<p class="font" >Place Your Order...  </p>

<table height="340" class="form">

<form action="../payment" method="post" >

<tr> 
	<td class="td"><label for="hon">Honorfic: </label></td>
	<td class="td"><select   class="drop_down_list" name="hon" id="hon" onblur="show_rooms()" >
  			<option>Mr.</option>
  			<option>Mrs.</option>
			<option>Miss.</option>
			<option>Dr.</option>
			<option>Rev.</option>
			<option>Ms.</option>
			
  		</select> </td>
</tr>
<tr>
	<td class="td"><label for="name">First Name: </label></td>
	<td class="td"><input type="text" name="fname" id="fname" size="30" required onblur="name_check()"  ></td>
</tr>
<tr>
	<td class="td"><label for="name">Last Name: </label></td>
	<td class="td"><input type="text" name="lname" id="lname" size="30" required onblur="name_check1()"  ></td>
</tr>
<tr>
	<td class="td"><label for="nic">NIC NO: </label></td> 
	<td class="td"> <input type="text" name="nic" id="nic" onblur="NIC_check()" required size="30"  ></td>
</tr>

<tr> 
	<td class="td"><label for="fitem">Food Item: </label></td>
	<td class="td"><select   class="drop_down_list" name="fitem" id="fitem"  >
  			<option>Select Category</option>
  			<option>Noodles</option>
			<option>Fried Rice</option>
			<option>Chicken Curry</option>
			
			
  		</select> </td>
</tr>
<tr>
	<td class="td"><label for="quantity">Quantity: </label></td>
	<td class="td"><input type="text" name="quantity" id="quantity" required onblur="quantity()" size="30"   ></td>
</tr>
<tr>
	<td class="td"><label for="email">Email: </label></td>
    <td class="td"><input type="email" name="email" id="email" size="30"   /></td>
</tr>
<tr>
	<td class="td"><label for="cno">Contact No: </label></td>
    <td class="td"><input type="text" name="cno" id="cno" pattern="[0-9]{10}" required onblur="cno_check()" title="Enter Valid Contact Number"  size="30"   /></td>
</tr>
<tr>
	<td class="td"><label for="name">Address: </label></td>
	<td class="td"><textarea name="adr" id="adr" size="30" rows= "5" required cols="32" onblur="adr_check()"  ></textarea></td>
</tr>
<tr>
	<td class="td"><label for="r_date">Required Date: </label></td>
	<td class="td"><input type="date" name="r_date"  required id="r_date" ></td>
	
</tr>
<tr>
	
	<td class="td"><label for="r_time">Required Time: </label></td>
	<td class="td"><input type="time" name="r_time" required id="r_time" ></td>
</tr>
<tr><td class="td" style="text-align:center"><input type="submit" value="Place Order"></td></tr>

</form>
</table>



</body>
</html>
