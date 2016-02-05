<?php
class Student{
	public static $sql = '';
	//Выбор студента по  id
	public static function StudentsById($id)
    {
        $id = intval($id);

        if ($id) {                        
            $db = Db::getConnection();
            
            $result = $db->query('SELECT * FROM students WHERE id=' . $id);
           
            $result->setFetchMode(PDO::FETCH_ASSOC);
            
            return $result->fetch();
            
        }
    }
    //Выбор записей в зависимости от $sql
   	public static function spisok($sql)
	{
		$db=Db::getConnection();
		$studentList=array();
		$result=$db->query($sql);
		$i=0;
		while ($row=$result->fetch()){
			$studentList[$i]['id']=$row['id'];
			$studentList[$i]['first_name']=$row['first_name'];
			$studentList[$i]['last_name']=$row['last_name'];
			$studentList[$i]['sex']=$row['sex'];
			$studentList[$i]['age']=$row['age'];
			$studentList[$i]['grupa']=$row['grupa'];
			$studentList[$i]['faculty']=$row['faculty'];
			$i++;
		}
		return $studentList;
		
	}
	//Добавление записей в таблицу студентов
public static function insert ($first_name, $last_name, $sex, $age, $grupa, $faculty, $sql){
		$adm = Admin::checkAdmin();
		$db=Db::getConnection();
		$result=$db->prepare($sql);
		$result->bindParam(':first_name',$first_name, PDO::PARAM_STR);
		$result->bindParam(':last_name',$last_name, PDO::PARAM_STR);
		$result->bindParam(':sex',$sex, PDO::PARAM_STR);
		$result->bindParam(':age',$age, PDO::PARAM_STR);
		$result->bindParam(':grupa',$grupa, PDO::PARAM_STR);
		$result->bindParam(':faculty',$faculty, PDO::PARAM_STR);
		
		
		return $result->execute();
	}
	
	// Проверка имени студента не меньше 1 символа
	public static function check($first_name){
		if (strlen($first_name)>=1){
			return TRUE;
		}
	return FALSE;
	}	
	// Удаление записей в таблице студентов
		public static function deleteStudent ($id){
			$adm = Admin::checkAdmin();
			$db=Db::getConnection();
			$sql='DELETE FROM students WHERE id=:id';
			$result=$db->prepare($sql);
			$result->bindParam(':id',$id, PDO::PARAM_INT);
			return $result->execute();
		}
	//Редактирование записей в таблице студентов
		public static function updateStudent ($id, $data){
			$adm = Admin::checkAdmin();
			$db=Db::getConnection();
			$sql='UPDATE  students set
			first_name=:first_name,
			last_name=:last_name,
			sex=:sex,
			age=:age,
			grupa=:grupa,
			faculty=:faculty
			 WHERE id=:id';
			$result=$db->prepare($sql);
		$result->bindParam(':id',$id, PDO::PARAM_INT);
		$result->bindParam(':first_name',$data['first_name'], PDO::PARAM_STR);
		$result->bindParam(':last_name',$data['last_name'], PDO::PARAM_STR);
		$result->bindParam(':sex',$data['sex'], PDO::PARAM_STR);
		$result->bindParam(':age',$data['age'], PDO::PARAM_STR);
		$result->bindParam(':grupa',$data['grupa'], PDO::PARAM_STR);
		$result->bindParam(':faculty',$data['faculty'], PDO::PARAM_STR);
		
		
		return $result->execute();
		}
}
?>