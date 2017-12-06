<table class="table table-striped">
	<?php  
		$q = "SELECT * FROM team";
		$result = mysqli_query($bbal_dbc, $q);
		
		$array = mysqli_fetch_assoc($result);
	?>
	<thead>
		<tr>
	<?php 
		//print the first row with the names for each column
		foreach($array as $key=>$value) {
		    // do stuff
		    $total = "";
			
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
		
		$row = $array;
		do {
			echo '<tr>';
			foreach ($row as $stat) {
				echo "<td>".$stat."</td>";
			}
			echo '</tr>';
		}while ($row = mysqli_fetch_assoc($result));
		
	?>
	</tbody>
</table>