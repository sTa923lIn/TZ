<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Телефонная книга</title>
</head>
<body>

	<form method="POST" action="<?=base_url()?>index.php/start/UpdateData/?id=<?=$row['id']?>">
		<p>Введите имя абонента - <input type="text" name="username" value="<?=$row['name']?>"/><?=form_error('username')?></p>
		<p>Введите номер телефона <input type="text" name="number" value="<?=$row['number']?>"/><?=form_error('number')?></p>
		<p>Введите описание - <input type="textrea" name="userinfo" value="<?=$row['info']?>"/><?=form_error('userinfo')?></p>
			

		<input type="submit" name="save" value="Сохранить"/>
		<input type="submit" name="revers" value="Вернуться к списку"/>




	</form>
<?php


?>

</body>
</html>
