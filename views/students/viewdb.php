<?php include ROOT.'/views/All/header.php';?>
<div class="container theme-showcase" role="main">

<table style="margin-top: 20px" class="table table-striped">
	<tr>
	<th>Имя</th>
	<th>Фамилия</th>
	<th>Пол</th>
	<th>Возраст</th>
	<th>Группа</th>
	<th>Факультет</th>
	</tr>

	<?php foreach ($studentList as $list):?>
	<tr>
	<td><?php echo $list['first_name'];?></td>
	<td><?php echo $list['first_name'];?></td>
	<td><?php echo $list['sex'];?></td>
	<td><?php echo $list['age'];?></td>
	<td><?php echo $list['grupa'];?></td>
	<td><?php echo $list['faculty'];?></td>
	</tr>
<? endforeach;?>

</table>
</div>
<?php include ROOT.'/views/All/footer.php';?>
