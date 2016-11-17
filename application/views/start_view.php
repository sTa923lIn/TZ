<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Телефонная книга</title>

	<?php $this->load->helper('url');?>

	<link rel="stylesheet" href="../css/bootstrap.css" />
		<script src="../js/jquery-3.1.1.min.js"></script>
		<script src="../js/bootstrap.js"></script>

</head>
<body>



<div class="container">
	<form  action="start/InsertData"> <!-- // передаем форму контроллеру start -->
			
			<p><input type="submit" value="Добавить новую запись"/></p> <!-- кнопка добавления новой записи -->

	</form>
</div>

<div>

	<table class="table table-bordered table-condensed">


<?php

foreach ($table as $i)
{
 echo '<tr>
						 <td>'.$i['id'].'</td>
						 <td>'.$i['name'].'</td>
						 <td>'.$i['info'].'</td>
						 <td>'.$i['number'].'</td>
						<td>
								<form  method="POST" action="index.php/start/DataId/?id='.$i['id'].'">
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
