<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div id="menu" class="contenedor_menu container-fluid">
        <div id="boton-mega-menu">
            <a id="boton-menu" class="boton-menu" href="#!">
                Categorias
            </a>
        </div>
        <nav id="menu-categorias" class="menu_categorias">
            <div class="row">
                <div class="col-md-2">
                    <ul id="menu-prpal">
                        <li data_id="cocina">
                            <a href="#!">cocina</a>
                        </li>

                        <li data_id="follaje_artificial">
                            <a href="#!">follaje artificial</a>
                        </li>

                        <li data_id="lamparas_decorativas">
                            <a href="#!">lamparas decorativas</a>
                        </li>

                        <li data_id="cojines">
                            <a href="#!">cojines</a>
                        </li>

                        <li data_id="relojes">
                            <a href="#!">relojes</a>
                        </li>

                        <li data_id="tapetes">
                            <a href="#!">tapetes</a>
                        </li>

                        <li data_id="cuadros">
                            <a href="#!">cuadros</a>
                        </li>

                        <li data_id="floreros">
                            <a href="#!">floreros</a>
                        </li>

                        <li data_id="relojes_decorativos">
                            <a href="#!">relojes decorativos</a>
                        </li>

                        <li data_id="mobiliario">
                            <a href="#!">mobiliario</a>
                        </li>

                        <li data_id="espejos">
                            <a href="#!">espejos</a>
                        </li>

                        <li data_id="elementos_decorativos">
                            <a href="#!">elementos decorativos</a>
                        </li>

                        <li data_id="portaretratos">
                            <a href="#!">portaretratos</a>
                        </li>

                        <li data_id="jardineria">
                            <a href="#!">jardineria</a>
                        </li>

                        <li data_id="apliques_de_pared">
                            <a href="#!">apliques de pared</a>
                        </li>
                    </ul>
                </div>
                <div id="render-mega-2" class="col-md-10">
                    <!-- render items menu -->
                </div>
            </div>
        </nav>
    </div>
    <div id="render"></div>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://raw.githubusercontent.com/Airtable/airtable.js/master/build/airtable.browser.js"></script>

    <script src="./main.js"></script>
</body>

</html>