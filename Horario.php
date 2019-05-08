<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Horario</title>
        
        
   
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="static/js/jquery.min.js"></script>
        <script src="static/js/moment.min.js"></script>
        
        <!-- Full calendar  -->
        
        <link rel="stylesheet" href="static/css/fullcalendar.min.css">
        
        <script src="static/js/fullcalendar.min.js"></script>
        <!-- fondo de pantalla -->
     
      
        
    </head>
    <body>
        
                
                           
        <div class="container">
            <div class="row">
                <div class="col"></div>
                <div class="col-7"><div id="calendario"></div></div>
                <div class="col"></div>
                              
            </div>
                       
        </div>
                
               
        
        
        <script>
            $(document).ready(function(){
             $('#calendario').fullCalendar();   
            });
                
            
        </script>
        <?php
      
        // put your code here
        ?>
    </body>
</html>
