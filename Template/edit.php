
<form action="index.php" method="post" role="form">
	<div class = "form-group">
		<label for = "table">Table</label>
		<input class = "form-control" type="text" name="table" id="table" placeholder="Table">
	</div>
	<div class = "form-group">
		<label for = "values">Values</label>
		<input class = "form-control" type="text" name="values" id="values" placeholder="Values">
	</div>
	<button type="submit" class="btn btn-default">Submit</button>
	<input type="hidden" name="submitted" value="1">
</form>