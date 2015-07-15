<?php
session_start();
function startdb(){
//Конфигурационный файл
$config = parse_ini_file('./config/conf.ini');
//Кодировка и локаль
setlocale(LC_ALL, 'ru_RU.UTF-8');
mb_internal_encoding('UTF-8');
//Устанавливаем соединение с БД
$db = new mysqli($config['host'],$config['user'],$config['pass'],$config['db']) or die('Нет подключения к $dbName');
	if ($db->connect_error){
		die('Connect Error:'. $db->connect_error);
	}
$db->query('SET NAMES utf8');
$db->query('SET CHARACTER SET utf8');


return $db;
}
?>