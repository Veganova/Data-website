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
              	var iframe = document.getElementById('data_window');
				iframe.src = iframe.src;
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

<iframe id="data_window" src="index.php?page=3&asthetic=0" height="200" width="1000" frameBorder="0"></iframe>