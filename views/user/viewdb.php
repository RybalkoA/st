<?php include ROOT.'/views/All/header.php';?>
<div class="container theme-showcase" role="main">
<table style="margin-top: 20px" class="table table-striped">
	<tr>
		<th>Фамилия</th>
		<th>Имя</th>
		<th>Логин</th>
		<th>Пароль</th>
		<th>Статус</th>
	</tr>

	<?php foreach ($userList as $list):?>
		<tr>
			<td><?php echo $list['fname'];?></td>
			<td><?php echo $list['lname'];?></td>
			<td><?php echo $list['login'];?></td>
			<td><?php echo $list['pass'];?></td>
			<td><?php echo $list['status'];?></td>
		</tr>
	<? endforeach;?>

</table>
</div>
<?php include ROOT.'/views/All/footer.php';?>