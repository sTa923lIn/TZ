<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Телефонная книга</title>
</head>
<body>

	<form method="POST" action="../start/InsertData">
		<p>Введите имя абонента - <input type="text" name="username" value="<?php echo $row['name'];?>"/></p>
		<p>Введите описание - <input type="text" name="userinfo" value="<?php echo $row['info'];?>"/></p>
			<p>Введите номер телефона <input type="text" name="number" value="<?php echo $row['number'];?>"/></p>

		<input type="submit" name="add" value="Сохранить"/>




	</form>
<?php


?>

</body>
</html>
