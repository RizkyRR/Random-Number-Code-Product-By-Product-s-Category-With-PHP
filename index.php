<!DOCTYPE html>
<html>
<head>
	<title>Random Number Code Product By Product's Category With PHP</title>
</head>
<body>
	<h4>Add Product</h4>
	<form method="POST" action="add_act.php" enctype="multipart/form-data">
		<label>Product Name</label>
		<input type="text" name="nameprod">
		<br/>
		<label>Product Picture</label>
		<input type="file" name="foto" id="foto">
		<br/>
		<label>Category</label>
		<select name="cat" id="cat">
			<option value="1">Laptop</option>
			<option value="2">Smartphone</option>
			<option value="3">Camera</option>
			<option value="4">Accessoris</option>
		</select>
		<br/>
		<label>Description</label>
		<textarea name="desc" rows="2" maxlength="150"></textarea>
		<br/>
		<button type="button" data-dismiss="">Cancel</button>
		<input type="submit" name="Submit" value="Save">
	</form>
</body>
</html>