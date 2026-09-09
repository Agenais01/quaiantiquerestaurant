<header id="header" class="header-main bg-dark">
    <div>
        <nav class="navbar navbar-expand-sm bg-body-tertiary bg-dark" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="/img/QuaiAntiqueRestaurant.jpg" alt="Logo de QuaiAntiqueRestaurant" class="logo-picture" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Ouverture/fermeture du menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link<?php echo ($pageName == 'home' ? ' active' : ''); ?>" <?php if($pageName == 'home'): ?>aria-current="page"<?php else: ?>aria-disabled="false"<?php endif; ?> href="/">
                                <span>Accueil</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link<?php echo ($pageName == 'card' ? ' active' : ''); ?>" <?php if($pageName == 'card'): ?>aria-current="page"<?php else: ?>aria-disabled="false"<?php endif; ?> href="/carte.php">
                                <span>Notre carte</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link<?php echo ($pageName == 'contact' ? ' active' : ''); ?>" <?php if($pageName == 'contact'): ?>aria-current="page"<?php else: ?>aria-disabled="false"<?php endif; ?> href="/contact.php">
                                <span>Contact</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>




        <!--nav>
            <ul>
                <li>
                    <a href="carte.php">
                        <span>Notre carte</span>
                    </a>
                </li>
                <li>
                    <a href="contact.php">
                        <span>Contact</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span>Votre compte</span>
                    </a>
                    <ul>
                        <li>
                            <a href="">
                                <span>M'inscrire</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span>Me connecter</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="">
                        <span>Commander en ligne</span>
                    </a>
                </li>   
            </ul>
        </nav-->
    </div>
</header>