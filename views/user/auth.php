<?php include ROOT.'/views/All/header.php';?>
<div class="container theme-showcase" role="main">
		<?php if(isset($errors) && is_array($errors)):?>
		<ul>
			<?php foreach ($errors as $error):?>
				<li> - <?php echo $error;?></li>
			<?php endforeach;?>
		</ul>
	<?php endif;?>

	<div>
		<h2>ВХОД</h2>
		
		<form action="#" method="post">
	<div class="input-group input-group-lg">
	  <span class="input-group-addon">Логин</span>
	  <input type="text" class="form-control" name="login" value="<?php echo $login;?>">
	</div>
	<div class="input-group input-group-lg">
	  <span class="input-group-addon">Пароль</span>
	  <input type="password" class="form-control" name="pass" value="<?php echo $pass;?>">
	</div>
	<div >
		<input class="btn btn-lg btn-primary" id="submit" type="submit" name="ok" value="Вход"><br/>
	</div>
		
	
		</form>
	</div>
	
</div>


<?php include ROOT.'/views/All/footer.php';?>