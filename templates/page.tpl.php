<div class="menu">
    <div class="container clearfix">

        <?php if ($logo): ?>
            <div id="logo" class="grid_2">
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                </a>
            </div>
        <?php endif; ?>

        <div id="nav" class="grid_10 omega">
            <ul class="navigation">
                <?php print limaio_get_menu(); ?>              
            </ul>
        </div>
    </div>
</div>


<div class="slide" id="slide1" data-slide="1" data-stellar-background-ratio="0.5">
    <div class="container clearfix">
        <div id="content" class="grid_12">
            <h1>El futuro de las smart-cities ya viene pronto a tu ciudad</h1>      
            <p style="text-align: center;" > <img src="<?php print $logo; ?>" alt="<?php print t('Lima I/O'); ?>" /></p>
            <p>Lima I/O es la primera experimento start-up peruana de Internet de las Cosas para monitoreo e inteligencia del medio ambiente.</p>
        </div>
    </div>
</div>

<div class="slide" id="slide2" data-slide="2" data-stellar-background-ratio="0.5">
    <div class="container clearfix">
        <div id="content" class="grid_12">
            <h1>Nuestra Solución</h1>
            <p>Consiste en una red de dispositivos equipados con sensores de medio ambiente que, al ser colocados en distintas parte de una ciudad, reportan data 24x7 a nuestra plataforma en la nube; esta almacena, categoriza y geo-referenciada lo recibido.
                <br />
                La data se transforma en información y luego en conocimiento sobre el medio ambiente usando Big Data; y se resume en forma de reportes y gráficas en tiempo real, mapas de calor de estas variables, alertas y otros servicios para la ciudad.                
            </p>
            <img src="<?php print base_path() . "/sites/all/themes/limaio/images/image-comunication.gif" ?>"  />
        </div>
    </div>
</div>

<div class="slide" id="slide3" data-slide="3" data-stellar-background-ratio="0.5">
    <div class="container clearfix">
        <div id="content" class="grid_12">
            <h1>¿Como?</h1>

            <div>
                <div class="data-slide">


                    Tony Stark style: hardware hecho en casa

                    Diseñamos y construimos nuestro propio hardware basado en Arduino.<br />
                    Cada dispositivo cuenta con sensores medio ambientales de:<br />
                    <ul>
                        <li>Temperatura</li>
                        <li>Humedad</li>
                        <li>Nivel de radiación ultravioleta (UV)</li>
                        <li> Nivel de ruido ambiental</li>
                        <li> Concentración de partículas en el aire (ppm)</li>
                        <li>Concentración de gases nocivos (CO2, CO NH3, NH4, Benceno y alcohol)
                        </li>
                        </li>
                    </ul>
                    Ahora también ofrecemos:<br />
                    <ul>
                        <li>
                            Nivel de luminosidad</li>
                        <li>Coordenadas GPS</li>
                        <li>Presión barométrica</li>
                        <li>Alimentación por paneles solares + batería de larga duración</li>
                        <li>Almacenamiento off-line por meses</li>
                        <li>Comunicación por RF hasta a 10 km </li>
                    </ul>
                </div>
                <div class="image-slide">
                    <img src="<?php ?>" />
                </div>
            </div>

        </div>
    </div>
</div>

<div class="slide" id="slide4" data-slide="4" data-stellar-background-ratio="0.5">
    <div class="container clearfix">
        <div id="content" class="grid_12">
            <h1>¿Quienes?</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
    </div>
</div>

<div class="slide" id="slide5" data-slide="5" data-stellar-background-ratio="0.5">
    <div class="container clearfix">
        <div id="content" class="grid_12">
            <h1>¿Cúanto?</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
    </div>
</div>
