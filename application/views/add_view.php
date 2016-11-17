<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Телефонная книга</title>
</head>
<body>

	<form method="POST" action="<?=base_url()?>index.php/start/InsertData">
		<p>Введите имя абонента - <input type="text" name="username" placeholder="Ddtlbntkjnkb"/></p>
		<p>Введите описание - <input type="text" name="userinfo" placeholder="Ddtlbntkjnkb"/></p>
			<p>Введите номер телефона <input type="text" name="number" placeholder="Ddtlbntkjnkb"/></p>
		<input type="submit" name="add" value="Добавить запись"/>
		

			<input type="submit" name="revers" value="Вернуться к списку"/>
				</form>

</body>
</html>


 