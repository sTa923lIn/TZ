<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Телефонная книга</title>
</head>
<body>

	<form method="POST" action="../start/InsertData">
		<p>Введите имя абонента - <input type="text" name="username"/></p>
		<p>Введите описание - <input type="text" name="userinfo"/></p>
			<p>Введите номер телефона <input type="text" name="number"/></p>

		<input type="submit" name="add" value="Добавить запись"/>




	</form>
<?php

foreach ($edit as $i)
{
    echo '<li> Айдишник : '.$i['id'].' |Имя: '.$i['name'].'| Описание :'.$i['info'].
		'| номер телефона :'.$i['number'].'</li>';

}

?>

</body>
</html>
