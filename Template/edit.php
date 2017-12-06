<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
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
      
      
$(document).ready(function(){
	$( "#target" ).keypress(function( e ) {
		var table_names = ['Team', 'Coach', 'GameStats'];
		
		if(window.event) { // IE                    
	      keynum = e.keyCode;
	    } else if(e.which){ // Netscape/Firefox/Opera                   
	      keynum = e.which;
	    }
	    
	    curVal = String.fromCharCode(keynum);
			
    	var val = this.value + curVal;
			
    	console.log("You pressed a key inside the input field"+val);
    	for (var i = 0; i < table_names.length; i++) {
    		if (table_names[i] === val) {
    			console.log("match!");
    			var d = document.getElementById('edit');
    			d.innerHTML = "";
    		}
    	}
	});
});


</script>

<form id="insertform">
	<div class = "form-group">
		<label for = "table">Table</label>
		<input id="target" class = "form-control" type="text" name="table" id="table" placeholder="Table">
	</div>
	<div class = "form-group">
		<label for = "values">Values</label>
		<div id = "edit">
		<input class = "form-control" type="text" name="values" id="values" placeholder="Values">
		</div>
	</div>
	<button id="submit" type="submit" class="btn btn-default">Submit</button>
	<input type="hidden" name="submitted" value="1">
</form>

<iframe id="data_window" src="index.php?page=3&asthetic=0" height="200" width="1000" frameBorder="0"></iframe>