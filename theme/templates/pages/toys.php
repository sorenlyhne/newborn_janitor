<?php 
	global $IC;
	global $action;



	// print_r($action);
	// print_r($myItem);
	
	?>

<div class="scene">
	<h1>This is test2</h1>
	<div class="i:toys">The toys are not ready yet :(</div>
	<p>This is the view template.</p>
	<?php
		if (count($action)):
			$myItem = $IC->getItem([
				"sindex"=>$action[0],
				"extend"=>"true"
				]);
				?>
	<h2><?=$myItem["name"]?></h2>
	<p><?=$myItem["html"]?></p>
	<?php
		endif;
		?>
</div>

