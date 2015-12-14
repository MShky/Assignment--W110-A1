	<?php
		require_once 'header.php';
	?>
	
	<div class="container">
	<div class="jumbotron">
			<div class="lead text-center">Step right up, step right up! Learn your creature-name in 3 short steps!</div>

			<h2 class="text-center">Step One: Information Gathering</h2>


	<form class="form-inline" method="post" action="step_two.php">
		<div class="form-group">
			<label for="user_name">Name</label>
			<input type="text" class="form-control" name="userName" id="userName" placeholder="Your name" >
		</div>
		<br>
		<br>
		<div class="radio">
		  	<label for="alien">
			<input type="radio" name="creatureType" id="alien" value="optionAlien" checked="" >
			Alien
		  </label>
		</div>
		<br>
		<br>
		<div class="radio">
		  	<label for="robot">
			<input type="radio" name="creatureType" id="robot" value="optionRobot">
			Robot
		  </label>
		</div>
		<br>
		<br>	
		<input type="submit" value="Go to step 2 (if you dare)" class="btn btn-danger" >
	</form>

	</div>
	</div>
	
	<script>
	jQuery("select, input:checkbox, input:radio, input:file, input:text, input:submit, textarea").uniform();
	</script>


	<?php
	require_once 'footer.php';
	?>
