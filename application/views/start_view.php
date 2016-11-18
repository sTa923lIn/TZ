<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Телефонная книга</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

	<link rel='stylesheet' type='text/css' href='<?php echo base_url();?>css/style.css'/>


	<script type="text/javascript">

function conf(str)
{

var x = confirm("Точно удалить запись?");

	if (str=='' || x != true)
		 {
		 	document.getElementById('mes').innerHTML="";
		 	return;
		 }
			 var ao;

			 if (window.XMLHttpRequest) 
			 	{
			 		ao=new XMLHttpRequest();
			 	}
			 	else
			 	{
			 		ao=new ActiveObject('Microsoft.XMLHTTP');
			 	}
			 			 ao.onreadystatechange=function()
			 		{
			 			if (ao.readyState==4 && ao.status==200) 
			 				{
			 					document.getElementById('mes').innerHTML=ao.responseText;
			 				}	 		
			 		}

		 ao.open ('GET', '<?=base_url()?>index.php/start/DeleteData?id='+str, true);
		 ao.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		 ao.send ('id='+str);

		 

		 	jQuery('#del').remove();

		 
}

</script>
</head>
<body>
		


<div class="container">
	<form  action="<?=base_url()?>index.php/start/DataValid"> 
			
			<p><input type="submit" value="Добавить новую запись"/></p> 

	</form>
</div>

<div class="container">

	<table class="table table-bordered table-condensed table-striped phone-table" >

<tr id="th">

			<th >Имя</th>
			<th>Телефон</th>
			<th>Описание</th>
			<th></th>
			<th></th>
			
</tr>

<?php

foreach ($table as $i)
{
 echo '	<tr id="del">
						 <td>'.$i['name'].'</td>
						 <td>'.$i['number'].'</td>
						 <td>'.$i['info'].'</td>
						<td>
								<form  method="POST" action="'.base_url().'index.php/start/InsertDataId/?id='.$i['id'].'">
										<input class="btn btn-warning" type="submit" name="edit"  value="Редактировать запись"/>
								</form>
						</td>
						<td>
						
									<input class="btn btn-danger" type="button" value="Удалить" onclick="conf('.$i['id'].')" />
									
							
						</td>
					</tr>';
}

	?>
	<div id="mes"></div>

	</table>
</div>


	</form>
</body>
</html>
