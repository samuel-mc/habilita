<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
    <main>
        <!-- Seccion Hero -->
        <section class="bg--light-grey">
            <div class="grid--2cols gap--24 mw--1440 px-4 px-lg-5 mx-auto py-5">
                <div class="align-content-center">
                    <h2 class="text--2xl dm-sans dm-sans--700">Financiamiento hecho a la medida</h2>
                    <p class="text--md text--grey dm-sans dm-sans--400 my-4">
                        En Habilita Proyectos, no solo financiamos sueños; construimos relaciones de confianza y
                        colaboración que fomentan el desarrollo sostenible y la prosperidad compartida.
                    </p>
                    <a class="btn btn--golden rounded-5 py-3 px-4 dm-sans dm-sans--400"
                       href="<?php echo __ROOT__; ?>/portafolio">Descubre cómo podemos ayudarte</a>
                </div>
                <div class="p-4 p-lg-5">
                    <img src="<?php echo __ROOT__; ?>/public/img/home/hero.png" alt="Hero Image" class="img-fluid">
                </div>
            </div>
        </section>

        <!-- Seccion descubre -->
        <section class="bg--white">
            <div class="grid--2cols gap--24 mw--1440 px-4 px-lg-5 mx-auto py-5">
                <div class="p-4 p-lg-5">
                    <img src="<?php echo __ROOT__; ?>/public/img/home/discover.png" alt="Discover Image"
                         class="img-fluid">
                </div>
                <div class="align-content-center">
                    <h2 class="text--2xl dm-sans dm-sans--700">Descubre cómo es que trabajamos</h2>
                    <p class="text--md text--grey dm-sans dm-sans--400 mt-4 mb-5">
                        En Habilita Proyectos, impulsamos el crecimiento de negocios y emprendimientos a través de
                        soluciones financieras justas y personalizadas. Apoyamos a clientes que encuentran barreras para
                        acceder a financiamiento, brindando respaldo estratégico y confianza a largo plazo.
                    </p>
                    <a class="a--golden dm-sans dm-sans--400"
                       href="<?php echo __ROOT__; ?>/portafolio">
                        <span class="me-2">Conocer más </span><i class="fa-solid fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- Seccion Proyectos -->
        <section class="mw--1440 py-4 px-4 px-md-5">
            <?php
            $proyectos = [
                [
                    "imagen" => "proyecto1.png",
                    "titulo" => "Quantía",
                    "descripcion" => "Arquitectura y desarrollo integral en Puerto Escondido, con 8 proyectos finalizados y 9 en marcha.",
                    "categorias" => [
                        "Categoría 1",
                        "Categoría 2",
                        "Categoría 3"
                    ]
                ],
                [
                    "imagen" => "proyecto2.png",
                    "titulo" => "Padelstress",
                    "descripcion" => "Un innovador proyecto en Lerma que fusiona deporte, comercio y wellness para una experiencia única e integral.",
                    "categorias" => [
                        "Categoría 1",
                        "Categoría 2",
                        "Categoría 3"
                    ]
                ],
                [
                    "imagen" => "proyecto3.png",
                    "titulo" => "GYRA",
                    "descripcion" => "Soluciones inteligentes y sostenibles de respaldo de energía para hogares, negocios y hoteles.",
                    "categorias" => [
                        "Categoría 1",
                        "Categoría 2",
                        "Categoría 3"
                    ]
                ],
                [
                    "imagen" => "proyecto4.png",
                    "titulo" => "Pequeños emprendimientos",
                    "descripcion" => "Apoyamos a emprendedores con respaldo financiero flexible, permitiéndoles acceder a recursos cuando y como los necesiten.",
                    "categorias" => [
                        "Categoría 1",
                        "Categoría 2",
                        "Categoría 3"
                    ]
                ]
            ];
            ?>
            <div class="grid--2cols gap-4">
                <?php foreach ($proyectos as $proyecto): ?>
                    <div>
                        <div class="text-center"><img
                                    src="<?php echo __ROOT__; ?>/public/img/home/<?php echo $proyecto['imagen']; ?>"
                                    alt="<?php echo $proyecto['titulo']; ?>" class="w-100 mw--540"></div>
                        <div class="py-3">
                            <h3 class="text--24px dm-sans dm-sans--500"><?php echo $proyecto['titulo']; ?></h3>
                            <p class="text--sm text--grey dm-sans dm-sans--400 mt-2 mb-4">
                                <?php echo $proyecto['descripcion']; ?>
                            </p>
                            <ul class="list-unstyled d-flex flex-wrap gap-2">
                                <?php foreach ($proyecto['categorias'] as $categoria): ?>
                                    <li class="dm-sans dm-sans--500 text--xs bg-light rounded py-1 px-2 mx-2"><?php echo $categoria; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Seccions faqs -->
        <section class="bg-black">
            <div class="mw--1440 py-5 px-4 px-lg-5 grid--2cols">
                <div class="align-content-center">
                    <h2 class="text--xl text--white dm-sans dm-sans--700">
                        Tienes alguna duda que no está en nuestras preguntas frecuentes?
                    </h2>
                    <p class="text--lg text--white dm-sans dm-sans--400 mt-4 mb-5">
                        ¡No dudes en contactarnos, estamos aquí para ayudarte!
                    </p>
                </div>
                <div class="align-content-center">
                    <?php
                        $faqs = [
                            [
                                "id" => "1",
                                "pregunta" => "¿Quiénes pueden acceder a financiamiento con Habilita Proyectos?",
                                "respuesta" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                            ],
                            [
                                "id" => "2",
                                "pregunta" => "¿Cuál es el proceso para solicitar financiamiento?",
                                "respuesta" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                            ],
                            [
                                "id" => "3",
                                "pregunta" => "¿Qué tipos de proyectos financiamos?",
                                "respuesta" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                            ],
                            [
                                "id" => "4",
                                "pregunta" => "¿Cuáles son las condiciones y tasas de financiamiento? ¿Puedo asociarme con Habilita Proyectos para ayudar a más empresas?",
                                "respuesta" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                            ]
                        ];
                    ?>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <?php foreach ($faqs as $faq): ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading<?php echo $faq['id']; ?>">
                                    <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapse<?php echo $faq['id']; ?>"
                                            aria-expanded="false"
                                            aria-controls="collapse<?php echo $faq['id']; ?>">
                                        <?php echo $faq['pregunta']; ?>
                                    </button>
                                </h2>
                                <div id="collapse<?php echo $faq['id']; ?>" class="accordion-collapse collapse"
                                     aria-labelledby="heading<?php echo $faq['id']; ?>"
                                     data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <?php echo $faq['respuesta']; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php include 'partials/footer.php'; ?>