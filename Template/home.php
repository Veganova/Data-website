<h3>Get your most pressing questions answered:</h3>

<ul>
	<li><h4>What is the roster for:</h4>
		
		<form method = "post" action = "index.php">
			<div class = "form-group">
				<label for = "table">Team Name:</label>
				<input class = "form-control" type="text" name="team_name">
			</div>
			<button type="submit" class="btn btn-default">Find Out</button>
			<input type="hidden" name="submitted" value="1">
		</form>
	</li>
	<?php
	
		if(isset($_POST['submitted']) == 1){
			
			if(isset($_POST['team_name']) == 1) {
				$tn = $_POST['team_name'];
				// call procedure with this
				$q = "CALL get_roster('$tn');";
				$result = mysqli_query($bbal_dbc, $q);
				//print the first row with the names for each column
				
				while($row = mysqli_fetch_assoc($result)) {
					echo $row['firstName']." ".$row['lastName'].",  ";
				}
			}
		}
	?>
	
	
	
	
	<li><h4>How many points scored by the away team for the following game:</h4>
		<form method = "post" action = "index.php">
			<div class = "form-group">
				<label for = "table">Game Number:</label>
				<input class = "form-control" type="text" name="game_number">
			</div>
			<button type="submit" class="btn btn-default">Find Out</button>
			<input type="hidden" name="submitted" value="1">
		</form>
	</li>
	<?php
	
		if(isset($_POST['submitted']) == 1){
			
			if(isset($_POST['game_number']) == 1) {
				$tn = $_POST['game_number'];
				
				$q2 = "CALL sum_points_team('$tn', 'away');";
				$result2 = mysqli_query($bbal_dbc, $q2);
				//print the first row with the names for each column
				
				while($row2 = mysqli_fetch_assoc($result2)) {
					$total = " and ".'Away with a total score of - '.$row2['Points'];
				}
				
				echo $total;
			}
		}
	?>
	
	
	
	
	
	
	
	
</ul>