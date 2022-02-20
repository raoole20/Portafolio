<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="build/css/app.css">
</head>
<body>

    <div class="header" id="pag-1">
        <div class="img"> </div>


        <div class="contenido">

            <nav class="navegacion">
                <ul class="navegacion_redes">
                    <li ><a href="#" class="link"><ion-icon name="logo-facebook"></ion-icon></a></li>
                    <li><a href="#" class="link"><ion-icon name="logo-instagram"></ion-icon></a></li>
                    <li><a href="#" class="link"><ion-icon name="logo-whatsapp"></ion-icon></a></li>
                </ul>
        
                <div class="barra_navegacion">
                    <ul class="navegacion_link ">
                        <li  class="boton" id="boton-1" ><a href="#pag-1" >Pincipal </a><span></span></li>
                        <li class="boton" id="boton-2"  ><a href="#pag-2">Nosotros</a><span></span></li>
                        <li class="boton" id="boton-3"  ><a href="#pag-3" >Portafolio</a><span></span></li>
                    </ul>
                </div>
            </nav>

            <div class="contenido_principal">
                <div class="logo"><img src="/build/img/web (1).png" alt="Logo"></div>
                <h1>Programador Web</h1>
                <p>Full-Stack</p>
            </div>

            <div class="flecha">  
                <ion-icon name="caret-down-outline" class="lado1"></ion-icon>
            </div>
        </div>
    </div>

    <!-- Acerca de  -->
    <section class="0-de" id="pag-2">

        <div class="sobre_mi">
            <h2>Sobre Mi</h2>
            <div class="lineas">
                <div class="linea-1"></div>
                <div class="linea-2"></div>
            </div>
            <p>Si deseas convertir tu idea de una pagina web en realidad, yo puedo hacerlo por tí. Mi nombre es Raúl Espina y soy un programador Web Jr. 
                Estudiante de Ingieneria, y dia a dia, con cada proyecto voy creciendo en ideas y aprendizaje. Mis ganas de aprender y mi amor hacia la tegnologia es principal 
                motivacion para dar lo mejor de mi en cada pagina WEB que realizo. <a href="#" id="contacto">Contacta me &raquo;</a>
            </p>
        </div>
        
        <div class="servicos">
            <h3>Mis servicios</h3>
            <p>Desarrollo Web Full-Stack</p>
            <div class="servcios_contenedor">
                <div class="servico_tecnoogia servicio-1"><ion-icon name="logo-html5"></ion-icon> <p>HTML5</p></div>
                <div class="servico_tecnoogia servicio-2"><ion-icon name="logo-css3"></ion-icon><p>CSS3</p></div>
                <div class="servico_tecnoogia servicio-3"><ion-icon name="logo-nodejs"></ion-icon><p>Javascript</p></div>
                <div class="servico_tecnoogia servicio-4 ">
                    <ion-icon name="server-outline"></ion-icon>
                  <p>MySQL & PHP</p>
                </div>
            </div>
        </div>
        
    </section>
    <!-- Acerca de - End -->

    <!-- Algunos de Mis proyectos -->
    <div class="contenedor2">
        <h2>proyectos</h2>
        <div class="galeria " id="pag-3">
            <div class="contenedor_img">
                <img src="/build/img/foto-01.PNG" class="imagen img-1">
                <div class="text">
                    <h3>Crow Hotel</h3>
                    <a href="https://crowhotel.netlify.app/" class= 'ver-mas'  target="_blank">Ver Más </a>
                </div>
            </div>
    
            <div class="contenedor_img">
                <img src="/build/img/foto-02.PNG" class="imagen img-1">
                <div class="text">
                    <h3>Furniture</h3>
                    <a href="https://mango-bajito.netlify.app/" class= 'ver-mas' target="_balnk">Ver Más </a>
                </div>
            </div>
    
            <div class="contenedor_img">
                <img src="/build/img/foto-03.PNG" class="imagen img-1">
                <div class="text">
                    <h3>Block de cafe</h3>
                    <a href="https://block-cafe.netlify.app/" class= 'ver-mas' target="_balnk" >Ver Más </a>

                </div>
            </div>
    
            <div class="contenedor_img">
                <img src="/build/img/pexels-christina-morillo-1181316.jpg" class="imagen img-1" onc>
                <div class="text">
                    <h3>En Construccion</h3>
                    <a href="#" class= 'ver-mas'>Ver Más </a>
                </div>
            </div>
    
            <div class="contenedor_img">
                <img src="/build/img/pexels-christina-morillo-1181316.jpg" class="imagen img-1">
                <div class="text">
                    <h3>En Construccion</h3>
                    <a href="#" class= 'ver-mas'>Ver Más </a>
                </div>
            </div>
    
            <div class="contenedor_img">
                <img src="/build/img/pexels-christina-morillo-1181316.jpg" class="imagen img-1">
                <div class="text">
                    <h3>En Construccion</h3>
                    <a href="#" class= 'ver-mas'>Ver Más </a>
                </div>
            </div>
            
        </div>
    </div>
    <!-- Algunos de Mis proyectos - End -->

    <!-- Footer -->
    <footer>
        <p>&copy; Derechos Recervados <span>Raul Espina</span></p>
        <p>Hecho con <span><ion-icon name="heart-outline"></ion-icon></span></p>
        
    </footer>
    <!-- Footer - End -->

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="build/js/app.js"></script>
</body>
</html>