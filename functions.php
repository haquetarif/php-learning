<?php



function fetchAllTasks($pdo)

{

	$statement = $pdo->prepare('select * from todos');

	$statement->execute();


	return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');


	
}

function dd($value) {

		
		echo '<pre>';

		die(var_dump($value));

		echo '</pre>';
	}

function checkAdulthood($age) {

	if($age >= 21) {
		
		echo 'Come on in!';
	
	} else {

		echo 'You are not old enough! Sorry!';


	}

}

?>