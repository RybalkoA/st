<?php
//ЧПУ
return array(
'st/main'=>'main/index', // actionIndex в MainController

'st/student/search'=>'student/search',// actionSearch в StudentController
'st/student/update/([0-9]+)'=>'student/update/$1',// actionUpdate в StudentController
'st/student/delete/([0-9]+)'=>'student/delete/$1',// actionDelete в StudentController
'st/student/insert'=>'student/insert',// actionInsert в StudentController
'st/student/view'=>'student/view',// actionView в StudentController
'st/student'=>'student/index',// actionIndex в StudentController

'st/user/view'=>'user/view',//actionView в UserController
'st/user/login'=>'user/login',//actionLogin в UserController
'st/user/register'=>'user/register',////actionRegister в UserController
'st/user'=>'user/index',//actionIndex в UserController
'st'=>'user/login',//actionLogin в UserController
)
?>