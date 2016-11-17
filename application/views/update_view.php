<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Телефонная книга</title>
</head>
<body>

	<form method="POST" action="<?=base_url()?>index.php/start/UpdateData">
		<p>Введите имя абонента - <input type="text" name="id" value="<?php echo $row['id'];?>"/></p>
		<p>Введите имя абонента - <input type="text" name="username" value="<?php echo $row['name'];?>"/></p>
		<p>Введите номер телефона <input type="text" name="number" value="<?php echo $row['number'];?>"/></p>
		<p>Введите описание - <input type="text" name="userinfo" value="<?php echo $row['info'];?>"/></p>
			

		<input type="submit" name="save" value="Сохранить"/>
		<input type="submit" name="revers" value="Вернуться к списку"/>




	</form>
<?php


?>

</body>
</html>
