<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Телефонная книга</title>
</head>
<body>

	<form action="index.php/start/InsertData"> <!-- // передаем форму контроллеру start -->
			
			<p><input type="submit" value="Добавить новую запись"/></p> <!-- кнопка добавления новой записи -->

	</form>

	<?php

echo '<ul>';
foreach ($table as $i)
{
    echo '<li><form  method="POST" action="index.php/start/UpdateData/?id='.$i['id'].'">
     Айдишник : '.$i['id'].' |Имя: '.$i['name'].'| Описание :'.$i['info'].
		'| номер телефона :'.$i['number'].'
			<input type="submit" name="add"  value="Редактировать"/>
		</form></li>';

}


echo '</ul>';


	?>




<!-- <?php
$this->load->helper('date');
$now = time();

echo '<br>Системное время : '.unix_to_human($now, TRUE, 'eu'); // Время в Европейском формате с секундами
?>
	<!-- <form method="POST" action="../index.php/start/InsertData">
		<p>Введите имя абонента - <input type="text" name="username"/></p>
		<p>Введите описание - <input type="text" name="userinfo"/></p>
			<p>Введите номер телефона <input type="text" name="number"/></p>

		<input type="submit" name="add" value="Добавить запись"/>
 -->
	</form>
</body>
</html>
