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
        
                 <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.0/css/mdb.min.css" rel="stylesheet">

  <!--  <link rel="stylesheet" type="text/css" href="static/css/index.css" th:href="@{/css/index.css}"> -->
        
    </head>
    <body>
        
            <!--
Es la clase de usuario con los campos id, correo, pass getters y setters.
-->
<?php 
	class Usuario{
		
		private $correo;
		private $pass;
                private $user;


		public function getCorreo(){
			return $this->correo;
		}

		public function setCorreo($correo){
			$this->correo = $correo;
		}

		public function getPass(){
			return $this->pass;
		}

		public function setPass($pass){
			$this->pass = $pass;
		}
                
                public function getUser(){
			return $this->user;
		}

		public function setUser($user){
			$this->user = $user;
		}
	}
?>
<!--
Contiene los métodos de insertar y buscar un usuario en la base de datos
-->
     <?php 
	require_once('conexion.php');
		
	class CrudUsuario{

		public function __construct(){}

                //busca el nombre del usuario si existe
                public function buscarUsuario($correo){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM USUARIOS WHERE correo=:correo');
			$select->bindValue('correo',$correo);
			$select->execute();
			$registro=$select->fetch();
			if($registro['correo']!=NULL){
				$usado=False;
			}else{
				$usado=True;
			}	
			return $usado;
		}
		//inserta los datos del usuario
                
		public function insertar($usuario){
			$db=DB::conectar();
			$insert=$db->prepare('INSERT INTO USUARIOS VALUES(:correo, :pass, :user)');
			$insert->bindValue('correo',$usuario->getCorreo());
                        $insert->bindValue('user',$usuario->getUser());
			//encripta la clave
			$pass=password_hash($usuario->getPass(),PASSWORD_DEFAULT);
			$insert->bindValue('pass',$pass);
			$insert->execute();
		}
		
	}
?>
<!--
Contiene el código que obtiene los campos desde la vista, para el formulariopara el de registro-->
            <?php
        session_start();
        require_once('conexion.php');

	
	$usuario=new Usuario();
	$crud=new CrudUsuario();
	//verifica si la variable registrarse está definida
	
	if (isset($_POST['registrarse'])) {
		$usuario->setCorreo($_POST['usuario']);
		$usuario->setPass($_POST['pas']);
                $usuario->setUser($_POST['user']);
		if ($crud->buscarUsuario($_POST['usuario'])) {
			$crud->insertar($usuario);
                        
                        echo 'El usuario fue creado exitosamente';
                        
		}else{
                    echo 'El nombre de usuario ya existe';
			
		}		
		
	}

        ?>
<header>

</header>
        

        
        
       
       
       <!-- Default formulario register -->
       
        <div class="modal-dialog text-center">
        <div class="col-sm-10 main-section">
            <div class="modal-content">
                
            
                <form class="text-center border border-light p-5" method="post">



                    <div class="col-22 mb-4">
                        <p class="h4 mb-4">Registro</p>
                       <div class="form-group">
                             Usuario 
                            <input type="text" name="user" class="form-control" placeholder="Usuario">
                        </div>
                        <div class="form-group">
                             E-mail 
                             <input type="text" name="usuario" class="form-control mb-4" placeholder="E-mail">
                        </div>

                             Password 
                    <input type="password" name="pas" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
                        </div>


                    <button class="btn btn-info my-4 btn-block" type="submit" name="registrarse">Guardar</button>
                    
                    <p><a href="index.php">Ahora no</a></p>

                     </div>

                    <hr>


                </form>
             </div>
<!-- Default form register -->
       
    </body>
</html>
