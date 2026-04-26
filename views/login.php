<?php
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $user = trim($_POST['user'] ?? '');
        $pass = trim($_POST['pass'] ?? '');

        if($user ==="tito" && $pass === "123"){
            header("Location: home.php");
            exit;
        }
        else{
            $mensaje ="Datos incorrectos, con php";
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index,follow">
    <meta name="description" content="Calculo del area y perimetro del cuadrado">
    <meta name="keywords" content="cuadrado, sistema, base de datos">
    <meta name="author" content="BC TECH">

    <link rel="icon" href="../imagenes/icono.png">
    <link rel="stylesheet" href="../assetes/css/style.css">

    <title>Cuadrado</title>
</head>
<body>
    <header>

    </header>
    <main>
        <div class="caja">
            <form action="" method="post" id="frmLogin">
                <img src="../imagenes/logo.png" alt="logo onstituciones">
                <input type="text" name="user" id="user" placeholder="Usuario">
                <input type="password" name="pass" id="pass" placeholder="Clave">
                <button type="" id="btnIngresar">Ingesar</button>
            </form>
            <?php  if(!empty($mensaje)) :  ?>
                <script>
                    alert("<?php echo $mensaje; ?>");
                </script>
            <?php   endif; ?>
        </div>
    </main>
    <footer>

    </footer>
    <script src="../assetes/js/app.js"></script>
</body>
</html>