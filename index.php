<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Comentarios</title>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/es.css" rel="stylesheet" />
    <link href="style_1.css" rel="stylesheet">
</head>

<body>

    <h1 id="titulo">PAN DE VIDA ETERNA</h1>

    <div id="menu-principal">
        <button class="inicial" onclick="toggleParagraph('oracionInicial')">ORACION INICIAL</button>
        <div id="oracionInicial" style="display: none;">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure rerum earum neque officiis nihil est. Quis
                officia velit atque deserunt placeat, porro id laborum debitis perferendis pariatur, aliquam similique
                eaque molestias? Voluptates nobis ipsa, accusamus cupiditate culpa itaque sunt earum quidem fugit ab
                possimus distinctio nisi porro minima vel sequi.</p>
        </div><br><br>

        <button class="evangelio" onclick="toggleParagraph('evangelioDelDia')">EVANGELIO DEL DIA</button>
        <div id="evangelioDelDia" style="display: none;">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur quasi fuga commodi vero temporibus
                nulla qui. Reprehenderit corporis ipsam voluptas omnis rerum incidunt iusto doloribus mollitia excepturi
                sed, natus obcaecati ut aperiam asperiores rem earum ratione deserunt nisi assumenda tempora iure nemo.
                Molestias animi, excepturi dolorum sint iure amet dolor!</p>
        </div><br><br>
        <div>
            <h4 class="reflexion">REFLEXIONES DEL EVANGELIO</h4>
        </div>

        <button class="lz" onclick="toggleVideo()">LUIS ZAZANO</button>
        <div id="videoContainer"></div>

        <button class="jh" onclick="toggleVideo1()">JESUS HIGUERAS</button>
        <div id="videoContainer1"></div>


        <button class="cancion" onclick="toggleVideo2()">CANCION</button>
        <div id="videoContainer2"></div>


        <button class="final" onclick="toggleParagraph('oracionFinal')">ORACION FINAL</button>
        <div id="oracionFinal" style="display: none;">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, magnam. Nam blanditiis dolores tempore
                facilis incidunt dolor corporis illo delectus, labore architecto rerum aperiam odit dignissimos
                temporibus exercitationem minus harum accusamus eius iure excepturi. Doloribus provident, obcaecati aut
                dicta expedita aliquid. Nihil ipsa, quod asperiores omnis quas saepe. Incidunt, ratione!.</p>
        </div>


        <form method="POST" action="./php/enviarcomentario.php" id="form">
            <section id="contact">
                <div class="container px-4">
                    <div class="row gx-4 justify-content-center">
                        <div class="col-lg-4">
                            <h2>Comentarios</h2>
                            <br>
                            <p class="lead">Haz un comentario</p>
                            <br>
                            <div class="col-xs-12">
                                <h3>¡Haz un Comentario!</h3>
                                <br>
                                <div class="form-group">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input class="form-control" name="nombre" type="text" id="nombre" placeholder="Escribe tu nombre" required>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="comentario" class="form-label">Comentario:</label>
                                    <textarea class="form-control" name="comentario" cols="30" rows="5" id="comentario" placeholder="Escribe tu comentario......" required></textarea>
                                </div>
                                <br>
                                <input class="btn btn-primary" type="submit" value="Enviar Comentario">
                                <br>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>


    </div>
    <!-- Comentario section-->



    <?php
    // Conexión a la base de datos
    $conexion = mysqli_connect("localhost", "root", "walter_hd", "ventas");

    // Verificar la conexión
    if (!$conexion) {
        die("Error de Conexión: " . mysqli_connect_error());
    }

    // Obtener comentarios
    $resultado = mysqli_query($conexion, "SELECT * FROM comentarios");

    // Verificar si hay resultados
    if (mysqli_num_rows($resultado) > 0) {
        while ($comentario = mysqli_fetch_object($resultado)) {
            // Depuración: Mostrar las propiedades del objeto
            // echo '<pre>';
            // print_r($comentario);
            // echo '</pre>';

            // Mostrar comentarios
            echo '<b>' . htmlspecialchars($comentario->nombre) . '</b> (' . htmlspecialchars($comentario->fecha) . ') dijo:';
            echo '<br />';
            echo htmlspecialchars($comentario->comentario);
            echo '<br />';
            echo '<hr />';
        }
    } else {
        echo "No hay comentarios.";
    }
    ?>

    <script src="script.js"></script>
</body>

</html>