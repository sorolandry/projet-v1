
    <header>
        <div class="logo">
            <img src="<?= $path ?>assets/images/logo1.png" alt="Logo-L artisanPro">
        </div>
        <?php if ($connect): ?>
        <nav class="navbar">
            <ul class="liste">
                <li><a href="index.php?page=home">Accueil</a></li>
                <li><a href="#Service">Services</a></li>
                <li><a href="#About">A propos</a></li>
                <li><a href="#Blog">Blogs</a></li>
            </ul>
        </nav>
        <?php else: ?>
        <nav class="navbar">
            <ul class="liste">
                <li><a href="#hero">Accueil</a></li>
                <li><a href="#Service">Services</a></li>
                <li><a href="#About">A propos</a></li>
                <li><a href="#Blog">Blogs</a></li>
            </ul>
        </nav>
        <?php endif; ?>
        <div class="button"></div>
        <div class="th">
            <?php if ($connect): ?>
                <div class="profil">
                    <img src="<?= htmlspecialchars($_SESSION['url_image']) ?>" alt="profil" class="user-pic" onclick="toggleMenu()" />
                    <div class="sub-menu-wrap" id="subMenu">
                        <div class="sub-menu">
                            <div class="user-info">
                                <img src="<?= htmlspecialchars($_SESSION['url_image']) ?>" alt="profil" class="user-pic" />
                                <h3><?= htmlspecialchars($_SESSION['nom_complet']) ?></h3>
                            </div>
                            <hr />
                            <a href="index.php?page=profil" class="sub-menu-link">
                                <i data-feather="user" class="icon"></i>
                                <p>Mon Profil</p>
                                <span> > </span>
                            </a>
                            <?php if ($_SESSION['id_profil_artisan']): ?>

                            <a href="index.php?page=packpublicitaire" class="sub-menu-link">
                                <i data-feather="package" class="icon"></i>
                                <p>Parck publicitaire</p>
                                <span> > </span>
                            </a>
                            <a href="index.php?page=publication" class="sub-menu-link">
                                <i data-feather="share-2" class="icon"></i>
                                <p>Publication</p>
                                <span> > </span>
                            </a>
                            <?php endif; ?>
                            <a href="index.php?page=deconnexion" class="sub-menu-link">
                                <i data-feather="log-out" class="icon"></i>
                                <p>Déconnexion</p>
                                <span> > </span>
                            </a>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <button class="btn-connexion"><a href="index.php?page=connexion">Connexion</a></button>
                <div class="profile-icon"><a href="index.php?page=connexion"><i class="fas fa-user"></i></a></div>
            <?php endif; ?>
        </div>
    </header>
