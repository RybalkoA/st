<?php
class User
{
	//Регистрация пользователей 
	public static function register($login, $fname,$lname, $pass, $status){
		Admin::checkAdmin();
		$db=Db::getConnection();
		$sql = 'insert into user (login, fname,lname, pass, status)'.'values (:login, :fname,:lname, :pass, :status)';
		$result=$db->prepare($sql);
		$result->bindParam(':login',$login, PDO::PARAM_STR);
		$result->bindParam(':fname',$fname, PDO::PARAM_STR);
		$result->bindParam(':lname',$lname, PDO::PARAM_STR);
		$result->bindParam(':pass',$pass, PDO::PARAM_STR);
		$result->bindParam(':status',$status, PDO::PARAM_STR);
		
		return $result->execute();
	}
	// проверка количества введенных символов
	public static function checkLogin($login){
		if (strlen($login)>=4){
			return TRUE;
		}
	return FALSE;
	}	
	public static function checkFname($fname){
		if (strlen($fname)>=2){
			return TRUE;
		}
	return FALSE;
	}	
	public static function checkLname($lname){
		if (strlen($lname)>=2){
			return TRUE;
		}
		return FALSE;
	}
	public static function checkPass($pass){
		if (strlen($pass)>=6){
			return TRUE;
		}
	return FALSE;
	}
	//проверка на уже существующую запись в таблице пользователей
	public static function checkLoginEx($login)
	{
		$db=Db::getConnection();
		$sql = 'select count(*) from user where login = :login';
		
		$result=$db->prepare($sql);
		$result->bindParam(':login',$login, PDO::PARAM_STR);
		$result->execute();
		
		if ($result->fetchColumn())
	
			return TRUE;
		return FALSE;
		
	}
	//Проверка на существование записи в таблице пользователей 
	public static function checkUserData($login,$pass)
	{
		$db=Db::getConnection();
		$sql = 'select * from user where login = :login and pass = :pass';
		
		$result=$db->prepare($sql);
		$result->bindParam(':login',$login, PDO::PARAM_STR);
		$result->bindParam(':pass',$pass, PDO::PARAM_STR);
		$result->execute();
		$user=$result->fetch();
		if ($user){
			return $user['id'];
		}
	
		return FALSE;
	}
	//Запоминаем пользователя
	public static function auth($userId)
	{
		$_SESSION['user']=$userId;
	}
	
	//Выборка всей записей с таблици пользователей 
	public static function spisok()
	{
		$db=Db::getConnection();
		$usertList=array();
		$result=$db->query('SELECT*FROM `user`order by `id` desc');
		$i=0;
		while ($row=$result->fetch()){
			$usertList[$i]['id']=$row['id'];
			$usertList[$i]['fname']=$row['fname'];
			$usertList[$i]['lname']=$row['lname'];
			$usertList[$i]['login']=$row['login'];
			$usertList[$i]['pass']=$row['pass'];
			$usertList[$i]['status']=$row['status'];
			$i++;
		}
		return $usertList;
	}
	// выбираем пользователя по заданому id
	public static function UserById($id)
	{

		$db = Db::getConnection();

		$result = $db->prepare('SELECT * FROM user WHERE id=:id');

		$result->bindParam(':id', $id, PDO::PARAM_INT);

		$result->setFetchMode(PDO::FETCH_ASSOC);
	
		$result->execute();
			
		return $result->fetch();
	
    }
    public static function checkLogged()
    {
        // Если сессия есть, вернем идентификатор пользователя
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
             }
    }

}
?>