<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php require_once "navbar.php" ?>
    <title>USUARIOS</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">


    <script src="assets/js/modernizr.min.js"></script>
</head>

<body>

    <div class="container"><br>
        <div class="row justify-content-center">
            <div class="col-6 p-5 bg-white shadow-lg rounded">
                <h3>Nuevo Usuario</h3>
                <hr>
                <form method="post" id="guardar_usuario" name="gurdar_usuario" action="#">
                    <div class="form-group">
                        <label for="usuario">Nombre del Usuario</label>
                        <input id="usuario" class="form-control" type="text" name="usuario">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" class="form-control" type="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" class="form-control" type="password" name="password">
                    </div><br>
                    <button class="btn btn-primary" id="registro" name="registro" type="submit">Guardar</button>
                    <div id="resultado_ajax"></div>


                </form>
            </div>


        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script><!-- Libreia para ajax-->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/plugins/moment/moment.js"> </script>
</body>

</html>