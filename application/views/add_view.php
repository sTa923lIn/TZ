<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Телефонная книга</title>
</head>
<body>

	<form method="POST" action="<?=base_url()?>index.php/start/DataValid">
		<p>Введите имя абонента - <input type="text" name="username" value="<?=set_value('username')?>" placeholder="Например : Сергей"/><?=form_error('username')?></p>
		<p>Введите номер телефона <input type="text" name="number" value="<?=set_value('number')?>" placeholder="Например : 380633641777"/><?=form_error('number')?></p>
		<p>Введите описание - <input type="text" name="userinfo" value="<?=set_value('userinfo')?>" placeholder="Например : Студент"/><?=form_error('userinfo')?></p>
		<input type="submit" name="add" value="Добавить запись"/>
		
		<input type="submit" name="revers" value="Вернуться к списку"/>
				</form>

</body>
</html>


 