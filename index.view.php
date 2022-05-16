<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	
	<title>Document</title>
	
	
</head>

<body>

	<ul>
		<?php foreach ($tasks as $task) : ?>

		<li> <?= $task->description; ?> </li>

	<?php endforeach; ?>

	</ul>



</body>

</html>