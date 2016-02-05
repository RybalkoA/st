<?php
class StudentController 
{
	public function actionIndex ()
	{
		require_once(ROOT.'/views/students/index.php');
		return true;
	}
	
	public function actionView ()
	{
		$studentList=array();
		$studentList=Student::spisok('SELECT * FROM `students`order by `id` desc');
			
		require_once(ROOT.'/views/students/viewdb.php');
		return true;
	}
	public function actionInsert()
	{
		$first_name='';
		$last_name='';
		$sex='';
		$age='';
		$grupa='';
		$faculty='';
		$result=FALSE;
		if (isset($_POST['ok'])){
		$first_name=$_POST['first_name'];
		$last_name=$_POST['last_name'];
		$sex=$_POST['sex'];
		$age=$_POST['age'];
		$grupa=$_POST['grupa'];
		$faculty=$_POST['faculty'];
		
		$error=FALSE;
		//Если есть ошибки выводим их 
		if (!Student::check($first_name)){
			$error='Имя не заполнено';
		}
		//Если ошибок нету вставляем данные в табдицу
		if ($error==FALSE){
		$result=Student::insert($first_name, $last_name, $sex, $age, $grupa, $faculty, 'insert into students (first_name, last_name, sex, age, grupa, faculty)'.'values (:first_name, :last_name, :sex, :age, :grupa, :faculty)');
		}
		
		
	}
		require_once(ROOT.'/views/students/insert.php');
		return TRUE;
		
	}
	//поиск записей в таблице по полям с любым значениием
	public function actionSearch()
	{
		$studentList=array();
		$studentList=Student::spisok("SELECT * from `students` WHERE 
`first_name` LIKE '%". @$_POST['first_name']. "%'
AND `last_name` LIKE '%".@$_POST['last_name']. "%'
AND `grupa` LIKE '%". @$_POST['grupa']. "%'
AND `faculty` LIKE '%".@$_POST['faculty']. "%'");
	
		require_once(ROOT.'/views/students/search.php');
		return true;
	}
	//Удаление
	public function actionDelete($id)
	{
	Student::deleteStudent($id);
	//переадресация на страницу поиска
	header("location:/st/student/search");
	}
	//Редактирование
	public function actionUpdate($id)
	{
	$student=Student::StudentsById($id);
	
	if (isset ($_POST['ok'])){
		$data['first_name'] = $_POST['first_name'];
		$data['last_name'] = $_POST['last_name'];
		$data['sex'] = $_POST['sex'];
		$data['age'] = $_POST['age'];
		$data['grupa'] = $_POST['grupa'];
		$data['faculty'] = $_POST['faculty'];
		Student::updateStudent($id, $data);
	
	//переадресация на страницу поиска
		header("location:/st/student/search");
	}
	
	
	require_once(ROOT.'/views/students/update.php');
		return true;	
	}
}
?>