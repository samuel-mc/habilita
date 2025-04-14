<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
    <main>
        <!-- Seccion Quantia -->
        <section class="">
            <div class="grid--2cols gap--24 mw--1440 px-5 mx-auto py-5">
                <div class="bg--golden align-content-center justify-content-center p-5">
                    <div class="bg-white p-5 rounded-4">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="text-center">
                                        <div>
                                            <img src="<?php echo __ROOT__; ?>/public/img/login/opinion_foto.png" alt="Quantia Image" class="img-fluid">
                                        </div>
                                        <h2 class="text--lg">“Torem ipsum dolor sit amet”</h2>
                                        <p class="text--md text--grey dm-sans dm-sans--400 mt-4">
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit quibusdam reprehenderit beatae, quo cumque minima ullam dolorum laborum ea officia odit sunt corporis quaerat et ducimus numquam culpa repudiandae error.
                                        </p>
                                        <h3>Juan Piña</h3>
                                        <p style="color:#4A3AFF" class="text--sm dm-sans dm-sans--400 mt-4">México, MX</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="text-center">
                                        <div>
                                            <img src="<?php echo __ROOT__; ?>/public/img/login/opinion_foto.png" alt="Quantia Image" class="img-fluid">
                                        </div>
                                        <h2 class="text--lg">“Torem ipsum dolor sit amet”</h2>
                                        <p class="text--md text--grey dm-sans dm-sans--400 mt-4">
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit quibusdam reprehenderit beatae, quo cumque minima ullam dolorum laborum ea officia odit sunt corporis quaerat et ducimus numquam culpa repudiandae error.
                                        </p>
                                        <h3>Juan Piña</h3>
                                        <p style="color:#4A3AFF" class="text--sm dm-sans dm-sans--400 mt-4">México, MX</p>
                                    </div>

                                </div>
                                <div class="carousel-item">
                                    <div class="text-center">
                                        <div>
                                            <img src="<?php echo __ROOT__; ?>/public/img/login/opinion_foto.png" alt="Quantia Image" class="img-fluid">
                                        </div>
                                        <h2 class="text--lg">“Torem ipsum dolor sit amet”</h2>
                                        <p class="text--md text--grey dm-sans dm-sans--400 mt-4">
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit quibusdam reprehenderit beatae, quo cumque minima ullam dolorum laborum ea officia odit sunt corporis quaerat et ducimus numquam culpa repudiandae error.
                                        </p>
                                        <h3>Juan Piña</h3>
                                        <p style="color:#4A3AFF" class="text--sm dm-sans dm-sans--400 mt-4">México, MX</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <p>Trusted_by</p>
                        <div>
                            <img src="<?php echo __ROOT__; ?>/public/img/login/trusted_by.png" alt="Quantia Image" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="px-5 mx-auto py-5">

                <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active px-4 py-3" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                            <img src="<?php echo __ROOT__; ?>/public/img/login/icon_manos.png" alt="Quantia Image" class="img-fluid">
                            Registro inversionistas
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link px-4 py-3" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                            <img src="<?php echo __ROOT__; ?>/public/img/login/icon_empresas.png" alt="Quantia Image" class="img-fluid">
                            Registro empresa
                        </button>
                    </li>
                </ul>
                <div class="tab-content my-5" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <h2>Acceso como empresa</h2>
                        <p class="text--md text--grey dm-sans dm-sans--400 mt-4">Lorem ipsum dolor sit amet consectetur </p>
                        <form>
                            <div class="mb-3">
                                <div class="input-group">
                                    <input type="text" class="form-control py-2 rounded-start-4" id="nombreCompleto" placeholder="Nombre completo">
                                    <span class="input-group-text rounded-end-4"><i class="fa-solid fa-person"></i></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="input-group">
                                    <input type="email" class="form-control py-2 rounded-start-4" id="email" placeholder="Email">
                                    <span class="input-group-text rounded-end-4"><i class="fa-solid fa-person"></i></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="input-group">
                                    <input type="password" class="form-control py-2 rounded-start-4" id="password" placeholder="Password">
                                    <span class="input-group-text rounded-end-4"><i class="fa-solid fa-lock"></i></span>
                                </div>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="politica" />
                                <label class="form-check-label" for="politica">
                                    Lorem ipsum dolor sit amet <a href="#">Política de privacidad</a>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-registrar mt-3 w-100">Registrar</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                        <h2>Acceso como inversionistas</h2>
                        <p class="text--md text--grey dm-sans dm-sans--400 mt-4">Lorem ipsum dolor sit amet consectetur </p>
                        <form>
                            <div class="mb-3">
                                <div class="input-group">
                                    <input type="text" class="form-control py-2 rounded-start-4" id="nombreCompleto" placeholder="Nombre completo">
                                    <span class="input-group-text rounded-end-4"><i class="fa-solid fa-person"></i></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="input-group">
                                    <input type="email" class="form-control py-2 rounded-start-4" id="email" placeholder="Email">
                                    <span class="input-group-text rounded-end-4"><i class="fa-solid fa-person"></i></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="input-group">
                                    <input type="password" class="form-control py-2 rounded-start-4" id="password" placeholder="Password">
                                    <span class="input-group-text rounded-end-4"><i class="fa-solid fa-lock"></i></span>
                                </div>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="politica" />
                                <label class="form-check-label" for="politica">
                                    Lorem ipsum dolor sit amet <a href="#">Política de privacidad</a>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-registrar mt-3 w-100">Registrar</button>
                        </form>
                    </div>
                </div>


                </div>
            </div>

        </section>

    </main>
<?php include 'partials/footer.php'; ?>