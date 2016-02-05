<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>База судентов</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<link href="http://localhost/st/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>
<body role="document">
	<header>
	<div>LOGO</div>
	
	<nav class="navbar navbar-inverse" role="navigation">
  <div class="container">
  <ul class="nav navbar-nav">
   <li class="active"> <a href="/st/main/">Главная</a></li>
   
   <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Студенты <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="/st/student/view/">Все студенты</a></li>
            <li><a href="/st/student/search/">Поиск</a></li>
           	<li><a href="/st/student/insert/">Добавить</a></li>
          </ul>
   </li>

   <li class="dropdown">
          <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Пользователи<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="/st/user/view">Все пользователи</a></li>
            <li><a href="/st/user/register/">Регистрация</a></li>
            <li><a href="/st/user/login/">Авторизация</a></li>
          </ul>
   </li>
   <?php ?>
  </div>

	</nav>
	</header>