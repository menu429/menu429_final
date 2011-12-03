<?php

$this->load->view('header');
$this->load->view('sidebar');

if ($details) {
	?>
	
	<h2><?php echo $details['title']; ?> <cite><?php echo 'by: '.$details['creator']; ?></cite></h2>
		<img src='<?php echo $details['image_url']; ?>' /></br>
		<b>Description:</b> <?php echo $details['description']; ?>
		<br /><b>Time Estimate:</b> <?php echo $details['estimated_time']; ?>
		<br /><b>Difficulty:</b> <?php echo $details['difficulty']; ?>
		<br /><b>Dish Type:</b> <?php echo $details['category']; ?>
		
	</p>
	
	<div class="maininfo">
		<h2>Ingredients:</h2>
		<p><?php echo nl2br($details['ingredients']); ?></p>
		<h2>Directions: </h2>
		<p><?php echo nl2br($details['directions']); ?></p>
		<p>&nbsp;</p>
	</div>	
	
	<?php
}

else {
	
	echo '<p>Recipe not found.</p>';
	
}

$this->load->view('footer');
?>