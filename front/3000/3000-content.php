<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-3000">
    <div class="top-bar">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="social-icons">
                <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="promo-banner">
                <span class="promo-label">Promo!</span>
                Special Offer: 20% Off First-Time Repairs at MobiCare
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light border-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/Logo_mobicare.png" alt="MobiCare" title="Logo_mobicare">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" aria-expanded="false">Homepage</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Homepage 2</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" aria-expanded="false">About us</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Team</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" aria-expanded="false">Services</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Pricing plan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Project</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" aria-expanded="false">Pages</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/front/3000/3016.php">FAQS</a></li>
                            <li><a class="dropdown-item" href="#">Blog Archive</a></li>
                            <li><a class="dropdown-item" href="#">Single post</a></li>
                            <li><a class="dropdown-item" href="#">Error 404</a></li>
                        </ul>
                    </li>
                </ul>
                <button class="btn btn-book-now ms-lg-3">BOOK NOW!</button>
            </div>
        </div>
    </nav>
</div>
