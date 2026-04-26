<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index,follow">
    <meta name="description" content="Calculo del area y perimetro del cuadrado">
    <meta name="keywords" content="cuadrado, sistema, base de datos">
    <meta name="author" content="BC TECH">

    <link rel="icon" href="../imagenes/icono.png">
    <link rel="stylesheet" href="../assetes/css/style_home.css">

    <title>cuadrado-principal</title>
</head>
<body>
    <header class="headeerHome">
        <div class="lineaSup">
            <div class="logo-links">
                <div class="logo">
                    <img src="../imagenes/logo.png" alt="">
                    <h1>Matemáticas</h1>
                </div>               
                <a href="">Quienes somos</a>
            </div>
            <div class="buscarHeader" >
                <form class="form1">
                    <img src="../imagenes/logo.png" alt="imagen de buscar">
                    <input type="text" name="txtBuscar" id="txtBuscar" placeholder="BUSCAR">
                </form>
            </div>
        </div>
        <div class="lineaInf">
            <nav class="menu">
                <li>
                    <a href="">Quienes somos</a>
                </li>
                <li>
                    <a href="">Nuestra hisotiria</a>
                </li>
                <li>
                    <a href="">Nuestros usuarios</a>
                </li>
            </nav>
        </div>
    </header>

    
    <main>
        <div class="datos">
            <div class="titulo">
                <h1>Calculo del area y perimetro del cuadrado</h1>
                <p>Ingrese los datos correspondientes </p>
            </div>
            <form action="post" method="post" class="form2" id="frmFormulario">
                <div class="inputs">
                    <label for="lado">Lado</label>
                    <input class="inputHome"type="text" name="txtLado" id="txtLado" placeholder="Lado">
                </div>
                <div class="inputs">
                    <label for="comentario">Comentario</label>
                    <input class="inputHome" type="text" placeholder="Opcional: Un comentario">
                </div>
                <div class="inputs">
                    <label for="area">Area</label>
                    <input class="inputHome" type="text" name="txtA" id="txtA" readonly placeholder="Area">
                </div>
                <div class="inputs">
                    <label for="area">Perímetro</label>
                    <input class="inputHome" type="text" name="txtP" id="txtP" readonly placeholder="Perimetro">
                </div>
                <div class="botones">
                    <button>Calcular</button>
                    <button>Cancelar</button>
                    <button>Guardar</button>
                </div>
            </form>
        </div>
        <div class="buscar">
            <form action="" id="frmBuscar">
                <img src="../imagenes/logo.png" alt="imagen de buscar">
                <button>Buscar</button>
                <input type="text" name="txtBuscar" id="txtBuscar" placeholder="Buscar por lado">
            </form>
        </div>

        <div class="tabla">
            <h1>Historial de los calculos</h1>
            <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>lado</th>
                        <th>Detalle</th>
                        <th>Area</th>
                        <th>Perimetro</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>Matematica es facil</td>
                        <td>4</td>
                        <td>4</td>
                    </tr>
                </tbody>
            </table>
            <div class="botones">
                <button>Eliminar</button>
                <button>Editar</button>
            </div>
        </div>
    </main>
</body>
</html>