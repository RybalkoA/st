<?php
class Admin
{

     //Проверка статуса пользователя

    public static function checkAdmin()
    {
        // Проверка авторизации
        $userId = User::checkLogged();
        
        //Получаем информацию о текущем пользователе
        $user = User::UserById($userId);
  
        // Если статус текущего пользователя "admin"-
        // будут доступны методы для управления базой данных
     
        if ($user['status'] == 'admin') {
            return true;
        }
        // Иначе завершаем работу с сообщением об закрытом доступе
        die('Нет доступа');
    }
}