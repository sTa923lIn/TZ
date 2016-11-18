<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Страница добавления</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
			
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<link rel='stylesheet' type='text/css' href='<?php echo base_url();?>css/style.css'/>

</head>
<body>
<h2><p> Страница добавления записи </h2></p>
<div class="container">
	<form method="POST" action="<?=base_url()?>index.php/start/DataValid">
		<p>Введите имя абонента - <input type="text" name="username" value="<?=set_value('username')?>" placeholder="Например : Сергей"/><?=form_error('username')?></p>
		<p>Введите номер телефона <input type="text" name="number" value="<?=set_value('number')?>" placeholder="Например : 380633641777"/><?=form_error('number')?></p>
		<p>Введите описание - <input type="text" name="userinfo" value="<?=set_value('userinfo')?>" placeholder="Например : Студент"/><?=form_error('userinfo')?></p>
		<input type="submit" name="add" value="Добавить запись"/>
		
		<input type="submit" name="revers" value="Вернуться к списку"/>
				</form>
</div>
</body>
</html>


 