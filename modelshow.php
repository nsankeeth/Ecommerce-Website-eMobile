<?php 
require 'opendb.php'; 
include 'search-function.php';


?> 
 <!DOCTYPE html>
<html>
<head>
	<title>Search Result</title>
<style>
th, td{
	width: 280px;
	text-align: center;
	font-size: 150%;
	height: 50px;
}

table {
	margin-left: 10px;
}
</style>
</head>
<body>
	<div style="position:absolute; color:white; text-align:center; padding-top:110px; padding-left:345px; text-shadow: 2px 2px #ff0000;font-size:35px;letter-spacing: 3px;"><b>Your Mobile Your Choice | eMobile</b></div>
	<a href="index.html"><img src="header.jpg" style="margin-left:145px;width: 980px; border-radius:10px;border-style: solid; border-width: 5px; border-color:#708090;"></a>
	<div id="page">
		<div align="right" >
			<a href="index.html">
            <input type="submit" style="border-radius:10px; width:100px; height:30px; color: white; background-color:#708090; " Value="Home"/>
            </a>
		</div>             
	</div>	
	<div style="width:980px;left:153px;border-radius:10px; position:absolute;height:500px;background-color:#708090;margin-top:5px; ">
		<div style="top:50px;left: 50px;height:400px;width:880px;border-radius: 10px; border:3px solid #000000;position: absolute;background-color:#E6E6FA; ">
		<table>
			<caption style="color: #00008B"><h2><B>Search Result</B></h2></caption>
			<tr>
			<th> Phone </th> 
			<th> Colour </th>
			<th> Price </th>
			</tr>
			<?php 

			$phoneMDL=$_POST['phoneMDL'];

			
				
			$result=mysqli_query($db, "SELECT* FROM phonemdl WHERE model = '$phoneMDL' ");
			while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
			?>
			 
			<tr> 
				<td> <?php echo $row['model']; ?> </td> 
				<td> <?php echo $row['color']; ?> </td> 
				<td> <?php echo $row['price']; ?> </td>
			</tr>
			<?php } ?>
			<tr> 
				<td>  </td> 
				<td>  </td> 
				<td> <a href="payment.html"><input type="submit" value="Purchase" style="width: 100px;height: 40px;background-color: #B0C4DE;border-radius:7px;color: #000000" /></a> </td>
			</tr>
		</table>
		</div>
	</div>
</body>
</html>