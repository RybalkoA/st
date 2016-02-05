<?php include ROOT.'/views/All/header.php';?>

<div class="container theme-showcase" role="main">
<form method="post"action="">
	<div class="input-group input-group-lg">
	  <span class="input-group-addon">Имя</span>
	  <input type="text" class="form-control" name="first_name" placeholder="">
	</div>
	<div class="input-group input-group-lg">
	  <span class="input-group-addon">Фамилия</span>
	  <input type="text" class="form-control" name="last_name" placeholder="">
	</div>
		<div class="input-group input-group-lg">
	  <span class="input-group-addon">Группа</span>
	  <input type="text" class="form-control" name="grupa" placeholder="">
	</div>
	<div class="input-group input-group-lg" >
	  <span class="input-group-addon">Факультет</span>
	  <input type="text" class="form-control" name="faculty" placeholder="">
	</div>
	<div >
		<input style="margin-top: 5px" class="btn btn-lg btn-primary"  id="sech" type="submit" name="sech" value="Искать"><br/>
	</div>

</form>

   <table style="margin-top: 20px" class="table table-striped">
	<tr>
		<th>Имя</th>
		<th>Фамилия</th>
		<th>Пол</th>
		<th>Возраст</th>
		<th>Группа</th>
		<th>Факультет</th>
	</tr>
<? if (isset($_POST['sech'])):?>
	<?php foreach ($studentList as $list):?>
	<tr>
	<td><?php echo $list['first_name'];?></td>
	<td><?php echo $list['first_name'];?></td>
	<td><?php echo $list['sex'];?></td>
	<td><?php echo $list['age'];?></td>
	<td><?php echo $list['grupa'];?></td>
	<td><?php echo $list['faculty'];?></td>
	
	<td><a href="/st/student/delete/<?php echo $list['id'];?>" </a>DEL</td>
	<td><a href="/st/student/update/<?php echo $list['id'];?>" </a>EDIT</td>

	</tr>
<? endforeach;?>

<? endif;?>
</table>
</div>


<footer class="footer"> &copy; 2016</footer>
<!-- jQuery (потрібно для JavaScript плагінів Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Підключення мінімізованої збірки всіх плагінів jQuery. Можна підключати додаткові плагіни, якщо потрібно -->
    <script src="http://localhost/st/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>