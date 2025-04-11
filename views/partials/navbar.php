<?php $title = isset($title) ? $title : 'Tanko';
?>

<!-- Desktop -->
<header class="px-4 py-3 d-none d-lg-block">
    <div class="d-flex justify-content-between align-content-center">
        <div>
            <a class="navbar-brand" href="<?php echo __ROOT__; ?>">
                <img src="<?php echo __ROOT__; ?>/public/img/logo.png" alt="Logo" width="145" height="72">
            </a>
        </div>
        <div>
            <nav>
                <ul class="d-flex list-unstyled align-items-center">
                    <li class="mx-3 px-1">
                        <a class="a--black dm-sans dm-sans--400" href="<?php echo __ROOT__; ?>/">Home</a>
                    </li>
                    <li class="mx-3 px-1">
                        <a class="a--black dm-sans dm-sans--400" href="<?php echo __ROOT__; ?>/portafolio">Portfolio</a>
                    </li>
                    <li class="mx-3 px-1">
                        <a class="a--black dm-sans dm-sans--400" href="<?php echo __ROOT__; ?>/contact">Contacto</a>
                    </li>
                    <li class="mx-3 px-1">
                        <a class="btn btn--golden rounded-5 py-3 px-4 dm-sans dm-sans--400"
                           href="<?php echo __ROOT__; ?>/login" style="min-width: max-content">Iniciar sesión</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<!-- Mobile -->
<header class="d-lg-none">
    <nav class="navbar navbar-expand-lg bg-whote">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo __ROOT__; ?>">
                <img src="<?php echo __ROOT__; ?>/public/img/logo.png" alt="Logo" width="145" height="72">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav py-2">
                    <li class="nav-item my-2">
                        <a class="nav-link active dm-sans dm-sans--400" aria-current="page"
                           href="<?php echo __ROOT__; ?>">Home</a>
                    </li>
                    <li class="nav-item my-2">
                        <a class="nav-link dm-sans dm-sans--400" href="<?php echo __ROOT__; ?>/portafolio">Portfolio</a>
                    </li>
                    <li class="nav-item my-2">
                        <a class="nav-link dm-sans dm-sans--400" href="<?php echo __ROOT__; ?>/contact">Contacto</a>
                    </li>
                    <li class="nav-item my-2 text-center">
                        <a class="btn btn--golden rounded-5 py-3 px-4 dm-sans dm-sans--400"
                           href="<?php echo __ROOT__; ?>/login" style="min-width: max-content">Iniciar sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>