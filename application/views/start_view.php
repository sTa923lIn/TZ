<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Телефонная книга</title>

	<link rel="stylesheet" href="<?=base_url()?>css/bootstrap.css" />
	<link rel="stylesheet" href="<?=base_url()?>css/style.css" />

</head>
<body>

		<script src="<?=base_url()?>js/jquery-3.1.1.min.js"></script>
		<script src="<?=base_url()?>js/bootstrap.js"></script>


<div class="container">
	<form  action="<?=base_url()?>index.php/start/InsertData"> <!-- // передаем форму контроллеру start -->
			
			<p><input type="submit" value="Добавить новую запись"/></p> <!-- кнопка добавления новой записи -->

	</form>
</div>

<div>

	<table class="table table-bordered table-condensed table-striped " >

<tr>
			<th>#</th>
			<th>Имя</th>
			<th>Телефон</th>
			<th>Описание</th>
			<th></th>
			<th></th>
</tr>

<?php

foreach ($table as $i)
{
 echo '<tr>
						 <td>'.$i['id'].'</td>
						 <td>'.$i['name'].'</td>
						 <td>'.$i['number'].'</td>
						 <td>'.$i['info'].'</td>
						<td>
								<form  method="POST" action="'.base_url().'index.php/start/InsertDataId/?id='.$i['id'].'">
										<input type="submit" name="add"  value="Редактировать запись"/>
								</form>
						</td>
						<td>
							<!-- <form  method="POST" action="index.php/start/DataId/?id='.$i['id'].'"> -->
									<a href="#" class="btn btn-mini">Удалить</a>
									
							
						</td>
			</tr>';
}

	?>

	</table>
</div>


	</form>
</body>
</html>
