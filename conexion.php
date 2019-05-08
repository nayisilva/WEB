<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
     
    </head>
    <body>
        <?php
        class Db{
		private static $conexion=null;
		private function __construct(){}
 
		public static function conectar(){
			$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
			self::$conexion=new PDO('mysql:host=localhost;dbname=usuario','udem','root',$pdo_options);
			return self::$conexion;
		}
	}
        ?>
      
    </body>
</html>
