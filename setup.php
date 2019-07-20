<?php


require_once 'include/google-api-php-client/apiClient.php';
require_once 'include/google-api-php-client/contrib/apiOauth2Service.php';
require_once 'include/idiorm.php';
require_once 'include/relativeTime.php';


session_name('nombre-sesion');
session_start();


$host = 'localhost';
$user = 'root';
$pass = 'seiter';
$database = 'login';

ORM::configure("mysql:host=$host;dbname=$database");
ORM::configure('username', $user);
ORM::configure('password', $pass);

ORM::configure('driver_options', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

//configuracion de google console api
$redirect_url = 'http://apilinkapp.com'; 
$client_id = '924025321212-t91c6dvb1rpric08s9r2238ksgg4kqn0.apps.googleusercontent.com';
$client_secret = 'NGKDGY2r0tcrhPF8qOwZ_e9-';
$api_key = '';
