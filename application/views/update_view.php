<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Телефонная книга</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<link rel='stylesheet' type='text/css' href='<?php echo base_url();?>css/style.css'/>

</head>
<body>
<div class="container">

	<form method="POST" action="<?=base_url()?>index.php/start/UpdateData/?id=<?=$row['id']?>">
		<p>Введите имя абонента - <input type="text" name="username" value="<?=$row['name']?>"/><?=form_error('username')?></p>
		<p>Введите номер телефона <input type="text" name="number" value="<?=$row['number']?>"/><?=form_error('number')?></p>
		<p>Введите описание - <input type="textrea" name="userinfo" value="<?=$row['info']?>"/><?=form_error('userinfo')?></p>
			

		<input type="submit" name="save" value="Сохранить"/>
		<input type="submit" name="revers" value="Вернуться к списку"/>

</div>


	</form>
<?php


?>

</body>
</html>
