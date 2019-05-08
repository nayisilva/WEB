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

        
        
    </head>
    <body>
        
        <div class="modal-dialog text-center">
        <div class="col-sm-10 main-section">
            <div class="modal-content">
                
           
        <!-- Default form  -->
                <form class="text-center border border-light p-5 ">

                    <p class="h4 mb-4">Crea Tarea</p>

                    <!-- Nombre -->
                    <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Nombre">

                    <!-- descripción -->
                    <div class="form-group">
                        <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Descripción"></textarea>
                    </div>


                    <!-- Prioridad -->
                    <label>Prioridad</label>
                    <select class="browser-default custom-select mb-4">
                        <option value="" selected="">Selecciona una Opción</option>
                        <option value="1">Alta</option>
                        <option value="2">Media</option>
                        <option value="3">Baja</option>

                    </select>


                    <!-- Send button -->
                    <button class="btn btn-info btn-block" type="submit">Crear</button>

                </form>
        
            </div>
<!-- Default form contact -->
        
        <?php
        // put your code here
        ?>
    </body>
</html>
