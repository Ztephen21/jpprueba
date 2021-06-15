<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <!--css-->



    <link rel="stylesheet" href="css/bootstrap.min.css">

  
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/toastr.min.css">
    <link rel="stylesheet" href="css/toastr.css">
    <!--jss-->
    <script src="js/jquery.min.js"></script>
    <script src="js/toastr.min.js"></script>
    <script src="js/toastr.js"></script>
    
    <script src="js/ajax.js"></script>
  
    <script src="js/bootstrap.min.js"></script>
    <script src="js/objects.js"></script>
    <script src="js/jquery.validate.js"></script>

  







</head>

<body>
    <br>
    <div class="">

        <div class="row">
            <div class="card text-center">
                <div class="card-header">
                    Registro
                </div>
                <div class="card-body">

                    <div class="col-md-10 offset-md-1">

                        <form autocomplete="off" enctype="multipart/form-data"  method="post" id="formObjeto" name="formObjeto">
                            <div class="row">
                                <div class="col">
                                    <label for="code">Codigo</label>
                                    <input type="text" class="form-control" id="code" name="code" required>
                                </div>
                                <div class="col">
                                    <label for="name">Nombre</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>

                            </div>
                            <div class="row">

                                <div class="col">
                                    <label for="price">Precio Costo</label>
                                   
                                    <input type="number" class="form-control" id="price"  name="price"required>
                                </div>
                                <div class="col">
                                    <label for="quantity">Cantidad Disponible</label>
                                   
                                    <input type="number" class="form-control" id="quantity" name="quantity" required>
                                </div>
                            </div>

                           
                        </form>
                        <br>


                    </div>
                    <div class="col-md-10 offset-lg-6">
                        <div class="row row justify-content-end ">

                            <div class="col">
                                <button type="button" class="btn btn-secondary" id="btnCancelar" >Cancelar</button>
                                <button type="button" class="btn btn-primary" id="btnGuardar">Guardar</button>
                            </div>
                            <div class="col">

                            </div>

                        </div>


                    </div>
                </div>

            </div>









</body>

<script>
 const conf = {
        "progressBar": true,
        "closeButton": true,
        "positionClass": "toast-bottom-right"
    }
</script>


</html>