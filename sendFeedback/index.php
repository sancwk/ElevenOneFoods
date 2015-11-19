<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<link rel="stylesheet" type="text/css" href="feedbackf.css">
<script src="feedbackvalidate.js"></script>

</head>

<body>

<center>
<p class="font" > FEEDBACK  </p>
<p class="sub" >LET US KNOW ABOUT YOUR EXPERIENCE WITH ELEVENONEFOODS</p>


<table height="340" class="form">
<center>
<form action="Insert_Into_Feedback_Table.php" method="post" >

<tr> 
	<td class="td"><label for="sat">Satisfactory: </label></td>
			<td class="td">
  			<input type ="radio" name="sat" value=" I had an unsatisfactory experience"> I had an unsatisfactory experience<br>
  			<input type ="radio" name="sat" value=" I had a great experience"> I had a great experience<br>
  			</td>
</tr>

<tr><td class="td"></td></tr>
<tr><td class="td"></td></tr>
<tr><td class="td">           * I would like to share feedback about?</td> </tr>
<tr><td class="td"></td></tr>
<tr><td class="td"></td></tr>

<tr>
	<td class="td"><label for="fktitle">Feedback about: </label></td>
	<td class="td"><select   class="drop_down_list" name="fktitle" id="fktitle" onblur="show_rooms()" >
			<option>Select from the list below</option>
  			<option>Hygiene</option>
  			<option>Hospitality</option>
			<option>Accuracy</option>
			<option>Product quality</option>
			<option>Speed</option>
			<option>Call centre</option>
			<option>Order only</option>
			
			</select></td>
</tr>

<tr>
	<td class="td"><label for="name">Tell Us More: </label></td>
	<td class="td"><textarea name="in_detail" id="in_detail" size="30" rows= "6" required cols="32"  ></textarea></td>
</tr>
<tr>
	<td class="td"><label for="name">Name: </label></td>
	<td class="td"><input type="text" name="Cname" id="Cname" size="30" required onblur="name_check()"  ></td>
</tr>

<tr>
	<td class="td"><label for="email">Email: </label></td>
    <td class="td"><input type="email" name="email" id="email" size="30"   /></td>
</tr>
<tr>
	<td class="td"><label for="cno">Contact No: </label></td>
    <td class="td"><input type="text" name="cno" id="cno" pattern="[0-9]{10}" required title="Enter Valid Contact Number"  size="30"   /></td>
</tr>

<tr>
	<td class="td"><label for="O_date">Order Date: </label></td>
	<td class="td"><input type="date" name="O_date" required id="O_date" ></td>
	
</tr>
<tr>
	
	<td class="td"><label for="O_time">Order Time: </label></td>
	<td class="td"><input type="time" name="O_time" required id="O_time" ></td>
</tr>

<tr><td class="td" style="text-align:center"><input type="submit" value="Submit"></td></tr>
</form>
</center>
</table>

</center>

</body>
</html>
