<!DOCTYPE html>
<html>
<head>
<title>Facebook Login JavaScript Example</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body {
        background-image: url("img/background.jpg");
        background-repeat: repeat;
        background-size:  100%;
        background-position: center; /* Center the image */
        }
        </style>  

</head>
<body>
<div class="container-fluid">
    <div class="jumbotron">
        <h1>Yachay Exploradores</h1>
    </div>

    <div class="row">
    <div class="col-sm-1" ></div>    
    <div class="col-sm-5" >
        <div class="panel panel-default">
            <div class="panel-body">
                <h2>Docentes</h2>
  
              
                <form action="/action_page.php">
                    <div class="form-group">
                        <label for="user">Correo electronico</label>
                        <input type="text" class="form-control" id="user">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Contraseña</label>
                        <input type="password" class="form-control" id="pwd">
                    </div>

                    <button type="submit" class="btn btn-primary">Ingresar</button>
                </form>
            </div>
        
        </div>


    </div>
    <div class="col-sm-5" >
        <div class="panel panel-default">
                <div class="panel-body">
                    <h3>Aula</h3>
                    <div class="form-group">
                        <input type="text" class="form-control" id="user">
                    </div>
                    <h3>Invitados</h3>

                    <div class="form-group">
                        <input type="password" class="form-control" id="pwd">
                    </div>
                </div>
            </div>
    </div>
    <div class="col-sm-1" ></div> 
    </div>

    <div class="col-sm-1" ></div>
    <div class="col-sm-2" >
        <div class="panel panel-default" style="text-align:center;">
            <h3>Perfil</h3>    
        </div>
    </div>    
    <div class="col-sm-5" style="text-align:center;">
            <button type="button" class="btn btn-success">Datos Demograficos</button><br><br>
            <button type="button" class="btn btn-success">Encuestas</button>  
    </div>    
    <div class="col-sm-3" >
        <div class="panel panel-default" style="text-align:center;">
            <h3>JUGABILIDAD</h3>    
        </div>
    </div>  
    <div class="col-sm-1" ></div>  

</div>




</body>




</html>