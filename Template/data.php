<?php
	
		
		$target_table = "Coach";
		
		if(isset($_POST['submitted']) == 1){
			
			// insert data into table
			$target_table = $_POST['table'];
			
			
			$total = "(";
			$val = 0;
			$full = 0;
			while(isset($_POST['values'.$val]) == 1) {
				$l = $_POST['values'.$val];
				$total = $total.'"'.$l.'", ';
				$val = $val + 1;
				
				if (strlen($l) > 0) {
					$full = $full + 1;	
				}
			}
			
			$total = substr($total, 0, strlen($total) - 2);
			$total = $total.");";
			if ($full > 0) {
				$q = "INSERT INTO $target_table VALUES $total;";
				$r = mysqli_query($bbal_dbc, $q);
				
				//printing status
				if($r) {
					echo "<p>Page added successfully.</p>";
				} else {
					echo "<p>Page could not be added - ".mysqli_error($bbal_dbc);
					echo '<p>'.$q.'</p>';
				}	
			}
		}
		
	?>


<table class="table table-striped">
	<thead>
		<tr>
	<?php 
		
	// configure the table column names
		$q = "SHOW columns FROM $target_table";
		$result = mysqli_query($bbal_dbc, $q);
		//print the first row with the names for each column
		while($row = mysqli_fetch_assoc($result)) {
		    // do stuff
		    $total = "";
			$key = $row['Field'];
		    for ($i = 0; $i < strlen($key); $i++){
			    $chr = $key[$i];
				if (mb_strtolower($chr, "UTF-8") != $chr) {
					$total = $total." ";
				}
				$total = $total.$chr;
			}
			$total = mb_strtoupper($total[0]).mb_substr($total, 1, strlen($total));
		    echo '<th>'.$total.'</th>';
		}
	?>
	</tr>
		</thead>
	<tbody>
		
	<?php
		// inser the data into the table
		$q = "SELECT * FROM $target_table";
		$result = mysqli_query($bbal_dbc, $q);
		while ($row = mysqli_fetch_assoc($result)) {
			echo '<tr>';
			foreach ($row as $stat) {
				echo "<td>".$stat."</td>";
			}
			echo '</tr>';
		}
	?>
	</tbody>
</table>