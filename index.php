<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmacia La Paz - Toma de pedidos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    
</head>
<body>
    <div class="container mt-3 ">
        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body bg-light">
                        <form action="" method="post" id="frm">
                            <div class="form-group ">
                                <label for="">Código</label>
                                <input type="text" name="codigo" id="codigo" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Cliente</label>
                                <input type="text" name="cliente" id="cliente" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Télefono</label>
                                <input type="text" name="telefono" id="telefono" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Producto</label>
                                <input type="text" name="producto" id="producto" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Cantidad</label>
                                <input type="text" name="cantidad" id="cantidad" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Precio</label>
                                <input type="text" name="precio" id="precio" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Seña</label>
                                <input type="text" name="seña" id="seña" class="form-control">                           
                            </div>
                            <div class="form-group">
                                <input type="button" value="Registrar" id="registrar" class="btn btn-warning btn-block">
                            </div>
                        </form>                    
                    </div>                
                </div>
            </div>
            <div class="col-lg-9">
                <table class="table table-hover table-responsive">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Cliente</th>
                            <th>Télefono</th>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th>Seña</th>
                            <th>Total</th>
                            <th>Saldo</th>
                            <th>Acciones</th>
                        </tr>                    
                    </thead>
                    <tbody id="resultado">
                        
                    </tbody>
                </table>
            
            </div>
        </div>
    </div>
    <script src="script.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>   
</body>
</html>