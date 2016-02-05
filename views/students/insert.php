<?php include ROOT.'/views/All/header.php';?>

<div class="container theme-showcase" role="main">
	<?php if($result):?>
		<h3>Запись добавлена</h3>
		<?php else:?>
		<?php if(isset($error)):?>
		<ul>
			
			<li> - <?php echo $error;?></li>
		
		</ul>
	<?php endif;?>
	<?php endif;?>
	<form action="" method="post" name="forma">
<div>
	<div class="input-group input-group-lg">
	  <span class="input-group-addon">Имя</span>
	  <input type="text" class="form-control" name="first_name" placeholder="">
	</div>
	<div class="input-group input-group-lg">
	  <span class="input-group-addon">Фамилия</span>
	  <input type="text" class="form-control" name="last_name" placeholder="">
	</div>
	<div class="input-group input-group-lg">
	  <span class="input-group-addon">Пол</span>
	  <input type="text" class="form-control" name="sex" placeholder="">
	</div>
	<div class="input-group input-group-lg">
	  <span class="input-group-addon">Возраст</span>
	  <input type="text" class="form-control" name="age" placeholder="">
	</div>
	<div class="input-group input-group-lg">
	  <span class="input-group-addon">Группа</span>
	  <input type="text" class="form-control" name="grupa" placeholder="">
	</div>
	<div class="input-group input-group-lg">
	  <span class="input-group-addon">Факультет</span>
	  <input type="text" class="form-control" name="faculty" placeholder="">
	</div>
	<div >
		<input class="btn btn-lg btn-primary" id="submit" type="submit" name="ok" value="Добавить"><br/>
	</div>
</div>
</form>
</div>


<?php include ROOT.'/views/All/footer.php';?>

