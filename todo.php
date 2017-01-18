<?php

require_once 'data/init.php';

$itemsQuery = $db->prepare("
SELECT id, name, done
FROM items
WHERE user = :user

");

$itemsQuery->execute([
'user' => $_SESSION['user_id']
]);

$items = $itemsQuery->rowCount() ? $itemsQuery : [];

foreach($items as $item){
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>To do project fd8955 4996 WSU</title>


<content="width=device-width, initial-scale=1.0">



</head>

<body>


		<h1> To Do FD8955. </h1>
		
		
		<?php if(!empty($items)): ?>		
<ul>
		<?php foreach($items as $item): ?>
		<li> 
			<span>	<?php echo ($item['name']); ?> </span>
			<a href="#"> Mark as done</a>
		</li>
		<?php endforeach; ?>
</ul>

		<?php else: ?>
<p> You haven't aded anything yet. </p>
		<?php endif;?>


<form class="add.php" method="post">

	<input type="text" name="" placeholder=" Type a new item here." autocomplete="off" required>
	<input type= "Submit" value="Add" class= "submit">



</body>
</html>

