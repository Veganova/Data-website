<nav class = "navbar navbar-default" role = "navigation">
	<div class = "container">
		<ul class ="nav navbar-nav">	
			<?php
				
				$q = "SELECT * FROM pages";
				$r = mysqli_query($dbc, $q);
				
				while($nav = mysqli_fetch_assoc($r)) {
					echo '<li><a href="?page='.$nav['id'].'">'.$nav['title'].'</a></li>';
				}
			?>
		
		</ul>
	</div>
</nav><!-- NAV END-->
			
