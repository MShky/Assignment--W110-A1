	<?php
		require_once 'header.php';
	
		// conditional verificator

		
		if(isset($_POST['userName']) && !empty($_POST['userName'])){
        $userName = $_POST['userName'];
        $userName = strip_tags($userName);
        $userName = htmlspecialchars($userName);
		
	?>
	
	<div class="container">
		<div class="jumbotron">
		<div class="lead text-center">One more step before the reveal!</div>

		<h2 class="text-center">Step Two: Generating your Creature</h2>

		<?php
			echo '<br><p>Thanks ' . $userName .' .</p>' ;
			echo '<p>Today is '.	date('l F jS ,Y'). ' and it’s been a busy day. But don’t worry!</p>';
		?>

		<p>We are just experiencing a red and yellow code... Just remain calm and patient!  </p>


			<p>Are you ready?</p>
			<p>When you are ready to see the results...</p>

		<button role="button" class="btn btn-success" id="btn_creature">Click Here and Discover Your Creature</button>

			<div id="creatureDisplay"></div>
	
		<?php
			
			//variables array
			$expected = ['name','creatureType'];
			$alienDesc = ['is coming from the forbidden planet.', 'is a telepatic alien.', 'can eat an elephant in 30 seconds.', 'is a martian.'];
			$robtDesc = ['is a dancing smart space robot.', 'is a transformer solar robot.', 'is a all terrain robot.', 'is a smart solar robot.'];
			
			// on the click
			
		
			//show the name
			$userName = $_POST['userName'];	
			$creatureName= 'Name'. $userName .'zilla';
			
			
			echo '<br><h2><p>Your creature name is = Ratta'. $userName .'zilla' .'</p></h2>' ;	
			
			// Picture condition
			
		if (isset($_POST['creatureType'])) {
			$typeOfCreature = $_POST['creatureType'];
						$minimum_number = 0;
				$maximum_number= 3; 
				$random_description= rand($minimum_number,$maximum_number);
			if ($typeOfCreature == "optionAlien"){
	
				echo '<img src="images/alien.png" width="158" height="228" alt="alien">';
				echo '<h3>Creature type = Alien</h3>';
				echo '<h3>Description:'.$userName.' '.$alienDesc[$random_description].'</h3>';
				
			}else{
				echo '<img src="imaes/robot.png" width="189" height="183" alt="robot">';
				echo '<h3>Creature type = Robot</h3>';
				echo '<h3>Description:'.$userName.' '.$robtDesc[$random_description].'</h3>';
					}  
		}      
		
			
	?>
	</div>
	</div>
	
	
	<?php
		} else {
			$user_name = '';
			echo '<h3>Please provide your name</h3>
		<a class="btn btn-default" href="step_one.php" role="button">Please Try Again</a>';
		};
	?>
	

	

	<?php
			
		require_once 'footer.php';
	?>
