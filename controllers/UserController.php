<?php
class UserController
{
	public function actionIndex ()
	{
		
		require_once(ROOT.'/views/user/index.php');
		return true;
	}
	//Просмотр записей в таблице User
	public function actionView ()
	{
		$userList=array();
		$userList=User::spisok();
		require_once(ROOT.'/views/user/viewdb.php');
		return true;
	}
	//Регистрация
	public function actionRegister()
	
	{
		$fname='';
		$lname='';
		$login='';
		$pass='';
		$status='';
		$result=FALSE;
		if (isset($_POST['ok'])){
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$login=$_POST['login'];
		$pass=$_POST['pass'];
		
		$errors=FALSE;
		//Создание массива с ошибками
		if (!User::checkFname($fname)){
			$errors[]='Имя не должно быть меньше 2-х символов';
		}
		if (!User::checkLname($lname)){
			$errors[]='Фамилия не должно быть меньше 2-х символов';
		}
		if (!User::checkPass($pass)){
			$errors[]='Пароль не должен быть меньше 6-ти символов';
		}
		if (!User::checkLogin($login)){
			$errors[]='Логин не должен быть меньше 4-х символов';
		}
		if(User::checkLoginEx($login)){
			$errors[]='Логин занят!';
		}
		// если масив пустой, проводим регистрацию
		if ($errors==FALSE){
			$result=User::register($login,$fname,$lname,$pass, $status);
		}
	}
		require_once(ROOT.'/views/user/register.php');
		return TRUE;
	}
	// Аутентификация
	public function actionLogin()
	{
		$login='';
		$pass='';
		
		if (isset($_POST['ok'])){
			$login=$_POST['login'];
			$pass=$_POST['pass'];
	
		$errors=FALSE;
		if (!User::checkPass($pass)){
			$errors[]='Пароль не должен быть меньше 6-ти символов';
		}
		if (!User::checkLogin($login)){
			$errors[]='Логин не должен быть меньше 4-х символов';
		}
		$userId=User::checkUserData($login, $pass);
		if ($userId==FALSE){
			$errors[]='Не верные логин и пароль';
		}
		else {
			User::auth($userId);
			header("location:/st/main/");
		}
		}
	require_once(ROOT.'/views/user/auth.php');
		return TRUE;
	}
	
	
}
?>