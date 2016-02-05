<?php include ROOT.'/views/All/header.php';?>

<div class="container theme-showcase" role="main">
	
<form action="" method="post" name="forma">

<div>
	<div class="input-group input-group-lg">
	  <span class="input-group-addon">Имя</span>
	  <input type="text" class="form-control" name="first_name" value="<?php echo $student['first_name'];?>">
	</div>
	<div class="input-group input-group-lg">
	  <span class="input-group-addon">Фамилия</span>
	  <input type="text" class="form-control" name="last_name" value="<?php echo $student['last_name'];?>">
	</div>
	<div class="input-group input-group-lg">
	  <span class="input-group-addon">Пол</span>
	  <input type="text" class="form-control" name="sex" value="<?php echo $student['age'];?>">
	</div>
	<div class="input-group input-group-lg">
	  <span class="input-group-addon">Возраст</span>
	  <input type="text" class="form-control" name="age" value="<?php echo $student['age'];?>">
	</div>
	<div class="input-group input-group-lg">
	  <span class="input-group-addon">Группа</span>
	  <input type="text" class="form-control" name="grupa" value="<?php echo $student['grupa'];?>">
	</div>
	<div class="input-group input-group-lg">
	  <span class="input-group-addon">Факультет</span>
	  <input type="text" class="form-control" name="faculty" value="<?php echo $student['faculty'];?>">
	</div>
	<div >
		<input class="btn btn-lg btn-primary" id="submit" type="submit" name="ok" value="Изменить"><br/>
	</div>
</div>

</form>



<?php include ROOT.'/views/All/footer.php';?>