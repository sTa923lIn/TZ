<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Редактирование записи</title>
</head>
<body>

  <form method="POST" action="<?=base_url()?>index.php/start/UpdateData/?id=<?=$row['id']?>">
    <p>Введите имя абонента - <input type="text" name="username" value="<?=set_value('username')?>"/><?=form_error('username')?></p>
    <p>Введите номер телефона <input type="text" name="number" value="<?=set_value('number')?>"/><?=form_error('number')?></p>
    <p>Введите описание - <input type="text" name="userinfo" value="<?=set_value('userinfo')?>"/><?=form_error('userinfo')?></p>
      

    <input type="submit" name="save" value="Сохранить"/>
    <input type="submit" name="revers" value="Вернуться к списку"/>




  </form>
<?php


?>

</body>
</html>
