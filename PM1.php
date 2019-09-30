<!DOCTYPE html>
<html>
<head>
<title>Party Menu</title>
<style>
.high	{
					font-family: Cambria;
					background-color: #dddddd;
					padding : 20px
					}
</style>
</head>
<body>
<h1 class="high" style = "align:center;color:rgba(10,70,174,0.3);font-size:60px;font-family:Cambria,sans-serif;">Party Menu</h1>
<form action = "PM2.php" method = "POST">
	<input name = "cs_name" type = "Text" placeholder="Your Name" required>
	<input name = "p_name" type = "Text" placeholder="Type Of Party" required>
	<input name = "nop"	type ="number"	placeholder="Number Of People" required>
	<input name = "p_date" type = "Date" placeholder="Date Of Party" required>
	<!--<input name = "cs_no" type = "number" placeholder="Your Contact Number" required>-->
	<h1>Select The Names Of Dishes You Want To Put In Your Party Menu</h1>
	<h2>Select Any Snacks : -</h2>
	<select name = 'snacks[]' multiple size = 3>
	<option value ="Chilly Paneer">Chilly Paneer</option>
	<option value = "Chowmin">Chowmin</option>
	<option value = "Fried Fish">Fried Fish</option>
	<option value = "Cheese Balls">Cheese Balls</option>
	</select>
	<h2>Select Any Main Course : -</h2>
	<select name = 'main[]' multiple size = 3>
	<option value="Paneer And Naan">Paneer And Naan</option>
	<option value="Chicken And Naan">Chicken And Naan</option>
	<option value="Veg Thali">Veg Thali</option>
	<option value="Non-Veg Thali">Non-Veg Thali</option>
	</select>
	<h2>Select Any Sweet Dishes : -</h2>
	<select name= 'sweet[]' multiple size = 3>
	<option value="Ice Cream">Ice Cream</option>
	<option value="Gulab Jamun">Gulab Jamun</option>
	<option value="Custurd">Custurd</option>
	<option value="Jalebi">Jalebi</option>
	</select>
	<input name = "SUBMIT" type = "submit" >
	<br><br><br><br><br>
	<h4>(Please Hold CTRL while Selecting Multiple Options)</h4>
	</form>
</body>
</html>
