<?php echo $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/") + 1); ?>

<nav class="navbar navbar-expand-md fixed-top rounded p-3 sticky-top">
    <a class="navbar-brand">Anouska Schellevis</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="bi bi-menu-button fs-2"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav" id="currentPage">
            <a class="nav-item nav-link <?= $page == 'index.php' ? 'active': '' ?>" href="index.php" id='home'>
                <i class="bi bi-house me-1"></i>
                Home
            </a>
            <a class="nav-item nav-link <?= $page == 'about.php' ? 'active': '' ?>" href="about.php" id='about'>
                <i class="bi bi-person-video2 me-1"></i>
                Over mij
            </a>
            <a class="nav-item nav-link <?= $page == 'projects.php' ? 'active': '' ?>" href="projects.php" id='projects'>
                <i class="bi bi-archive me-1"></i>
                Projecten
            </a>
            <a class="nav-item nav-link <?= $page == 'cv.php' ? 'active': '' ?>" href="cv.php" id='cv'>
                <i class="bi bi-body-text me-1"></i>
                CV
            </a>
        </div>
    </div>
</nav>
<hr></hr>