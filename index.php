<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inicio sesiòn</title>
        
        <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.0/css/mdb.min.css" rel="stylesheet">


<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.0/js/mdb.min.js"></script>

<!--Nuestro css-->
    <link rel="stylesheet" type="text/css" href="static/css/index.css" th:href="@{/css/index.css}">
    <link rel="stylesheet" type="text/css" href="static/css/fullcalendar.min.css" >
    <link rel="stylesheet" href="static/css/bootstrap-social.css">
    <link rel="stylesheet" href="static/css/font-awesome.css">
    
    
    
  
        

    </head>
    <body>
        <!-- NAVBAR
        <nav class="navbar navbar-expand-lg navbar-light bg-light">-->
            
        
            <nav class="navbar navbar-expand-lg navbar-dark blue">
            <a class="navbar-brand" href="#">Agenda</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
          <a class="nav-link" href="registro.php">Registrarse<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="tarea.php">Crear Tarea</a>
      </li>
      
      <li class="nav-item">
          <a class="nav-link" href="Horario.php">Ver Horario</a>
      </li>
      
      
    </ul>
      
     
  </div>
            
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
         <a href="?login=Google" class="btn btn-block btn-social btn-google">
             <span class="fa fa-google"></span> inicia sesion con GMAIL
         </a>
      </li>
      
     </ul>
   
  </div>
            
</nav>
    
        
            
       
        
    </body>
</html>
