<?php


require_once 'app/init.php';
$itemsQuery = $db->prepare("
SELECT id, name, done
FROM items
WHERE user = :user

");

itemsQuery->execute([
'user' => $_SESSION['user_id']

]);

$items = $itemsQuery->rowCount() ? $itemsQuery : [];
echo '<pre>', print_r($items, true), '</pre>';

?>

<html lang="en">
<head>
<meta charset="UTF-8">
<title>To do project fd8955 4996 WSU</title>


<meta name="viewport" content="width=device-width, initial-scale=1.0">



</head>

<body>



<div class="list">
		<h1> To Do FD8955. </h1>
		
		<ul>
		
		<li> 
		<span> Oh snap </span>
		<a href="#"> Mark as done</a>
		</li>
		

		
</ul>

<form class="add.php" method="post">

	<input type="text" name="" placeholder=" Type a new item here." autocomplete="off" required>
	<input type= "Submit" value="Add" class= "submit">



</body>
</html>

