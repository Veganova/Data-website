<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script>
      $(function () {

        $('#insertform').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'index.php?page=3',
            data: $('#insertform').serialize(),
            success: function () {
              alert('form was submitted');
            }
          });

        });

      });
</script>

<form id="insertform">
	<div class = "form-group">
		<label for = "table">Table</label>
		<input class = "form-control" type="text" name="table" id="table" placeholder="Table">
	</div>
	<div class = "form-group">
		<label for = "values">Values</label>
		<input class = "form-control" type="text" name="values" id="values" placeholder="Values">
	</div>
	<button id="submit" type="submit" class="btn btn-default">Submit</button>
	<input type="hidden" name="submitted" value="1">
</form>