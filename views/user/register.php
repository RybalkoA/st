<?php include ROOT.'/views/All/header.php';?>

<div class="container theme-showcase" role="main">
		<?php if($result):?>
		<h3>Пользователь зарегистирован</h3>
		<?php else:?>
		<?php if(isset($errors) && is_array($errors)):?>
		<ul>
			<?php foreach ($errors as $error):?>
				<li> - <?php echo $error;?></li>
			<?php endforeach;?>
		</ul>
	<?php endif;?>
	<?php endif;?>
	<div>
		<h2>РЕГИСТРАЦИЯ</h2>
		<form action="" method="post">
		<div>
	<div class="input-group input-group-lg">
	  <span class="input-group-addon">Имя</span>
	  <input type="text" class="form-control" name="fname" value="<?php echo $fname;?>">
	</div>
	<div class="input-group input-group-lg">
	  <span class="input-group-addon">Фамилия</span>
	  <input type="text" class="form-control" name="lname" value="<?php echo $lname;?>">
	</div>
	<div class="input-group input-group-lg">
	  <span class="input-group-addon">Логин</span>
	  <input type="text" class="form-control" name="login" value="<?php echo $login;?>">
	</div>
	<div class="input-group input-group-lg">
	  <span class="input-group-addon">Пароль</span>
	  <input type="password" class="form-control" name="pass" value="<?php echo $pass;?>">
	</div>
	<div class="input-group input-group-lg">
	  <span class="input-group-addon">Статус</span>
	  <input type="text" class="form-control" name="status" value="user">
	</div>
	<div >
		<input class="btn btn-lg btn-primary" id="submit" type="submit" name="ok" value="Добавить"><br/>
	</div>
</div>	
		</form>
	</div>
	
</div>


<?php include ROOT.'/views/All/footer.php';?>
