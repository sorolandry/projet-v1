<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once 'includes/head.php'; ?>
</head>
<body>
    <div id="container-body">
        <?php include_once 'includes/header.php'; ?>
        <main>
            <?php if ($_SESSION['typeUtilisateur'] == 'artisan'): ?>
                <section id="artisan-welcome">
                    <h1>Bienvenue, <?= htmlspecialchars($_SESSION['nom_complet']); ?>!</h1>
                    <p>Métier: <?= htmlspecialchars($artisan['metier']); ?></p>
                </section>
            <?php endif; ?>

            <section id="hero">
                <div class="main-hero">
                    <div class="banier">
                        <img src="<?= $path ?>assets/images/sectionHeronoire.jpg" alt="">
                   </div>
                   <div class="main-text-hero">
                        <h1>Trouvez les artisans qualifiés près de chez vous en un clic !</h1>
                        <p>
                            Nous sommes là pour vous aidez à trouver le professionnel qu'il vous faut, près de chez vous.
                        </p>
                        <button class="btn-demande"><a href="index.php?page=demandedeprestation">Demander une prestation</a></button>
                   </div>
                </div>
            </section>
            
            <?php if ($_SESSION['typeUtilisateur'] == 'artisan'): ?>
                <section id="dashboard">
                    <h1>Tableau de Bord</h1>
                    <div class="dashboard-content">
                        <p>Statistiques sur vos publications, demandes reçues, et évaluations.</p>
                        <!-- Ajouter des widgets de statistiques ici -->
                    </div>
                </section>
                <section id="publications">
                    <h1>Vos Publications</h1>
                    <div class="publications-content">
                        <button class="btn-publication"><a href="index.php?page=nouvellepublication">Nouvelle Publication</a></button>
                        <!-- Afficher les publications de l'artisan ici -->
                    </div>
                </section>
                <section id="demandes">
                    <h1>Demandes de Prestations</h1>
                    <div class="demandes-content">
                        <!-- Afficher les demandes reçues ici -->
                    </div>
                </section>
                <section id="profil">
                    <h1>Votre Profil</h1>
                    <div class="profil-content">
                        <!-- Formulaire pour mettre à jour les informations de l'artisan -->
                    </div>
                </section>
            <?php else: ?>
                <section id="comment-ça-marche">
                    <h1>Comment ça marche</h1>
                    <div class="conatiner-CCM">
                        <div class="myCard">
                            <div class="innerCard">
                                <div class="frontSide">
                                    <p class="title">Décrivez votre problème</p>
                                </div>
                                <div class="backSide">
                                    <p class="title">Décrivez votre problème</p>
                                    <p>Accédez à notre application conviviale et remplissez un formulaire simple pour décrire votre projet ou votre problème. Que ce soit pour une rénovation, une réparation ou une installation, nous sommes là pour vous aider.</p>
                                </div>
                            </div>
                        </div>
                        <div class="myCard">
                            <div class="innerCard">
                                <div class="frontSide">
                                    <p class="title">Trouvez les meilleurs artisans</p>
                                </div>
                                <div class="backSide">
                                    <p class="title">Trouvez les meilleurs artisans</p>
                                    <p>Une fois votre demande soumise, notre application intelligente vous retournera une liste d'artisans qualifiés, triés par proximité géographique. Cela vous permet de choisir celui qui convient le mieux à vos besoins.</p>
                                </div>
                            </div>
                        </div>
                        <div class="myCard">
                            <div class="innerCard">
                                <div class="frontSide">
                                    <p class="title">Sélectionnez l'artisan</p>
                                </div>
                                <div class="backSide">
                                    <p class="title">Sélectionnez l'artisan</p>
                                    <p>Sélectionnez l'artisan et contactez le via appel normal ou whatsapp. On vous laisse le choix!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="Service">
                    <h1>Nos services</h1>
                    <div class="grid-services">
                        <div class="contener-ass-services">
                            <img src="<?= $path ?>assets/images/icon/blanchisserie.png" alt="blanchisserie">
                            <h5>Blanchisserie</h5>
                        </div>
                        <div class="contener-ass-services">
                            <img src="<?= $path ?>assets/images/icon/maconnerie.png" alt="maconnerie">
                            <h5>Maconnerie</h5>
                        </div>
                        <div class="contener-ass-services">
                            <img src="<?= $path ?>assets/images/icon/mecanicien.png" alt="mecanicien">
                            <h5>Mecanicien</h5>
                        </div>
                        <div class="contener-ass-services">
                            <img src="<?= $path ?>assets/images/icon/menuisier.png" alt="menuisier">
                            <h5>Menuisier</h5>
                        </div>
                        <div class="contener-ass-services">
                            <img src="<?= $path ?>assets/images/icon/peintre.png" alt="menuisier">
                            <h5>Peintre</h5>
                        </div>
                        <div class="contener-ass-services">
                            <img src="<?= $path ?>assets/images/icon/plomberie.png" alt="plombier">
                            <h5>Plombier</h5>
                        </div>
                        <div class="contener-ass-services">
                            <img src="<?= $path ?>assets/images/icon/climatisation.png" alt="climatisation">
                            <h5>chambre froide</h5>
                        </div>
                        <div class="contener-ass-services">
                            <img src="<?= $path ?>assets/images/icon/fouet.png" alt="patisserie">
                            <h5>Pâtisserie</h5>
                        </div>
                        <div class="contener-ass-services">
                            <img src="<?= $path ?>assets/images/icon/couturiere.png" alt="couturier">
                            <h5>Couturier</h5>
                        </div>
                        <div class="contener-ass-services">
                            <img src="<?= $path ?>assets/images/icon/electricien.png" alt="electricien">
                            <h5>Electricien</h5>
                        </div>
                        <div class="contener-ass-services">
                            <img src="<?= $path ?>assets/images/icon/electronique.png" alt="electronique">
                            <h5>Electronicien</h5>
                        </div>
                    </div>
                </section>
                <section id="Apropos">
                    <div class="Galerie-Apropos">
                        <div class="border"><img src="<?= $path ?>assets/images/jean-baptiste.jpg" alt="" id="animation"></div>
                        <div class="border none"><img src="<?= $path ?>assets/images/nicolas-hoizey-2MuZ23gkFKo-unsplash.jpg" alt="" id="animation" class="none"></div>
                        <div class="border none"><img src="<?= $path ?>assets/images/couture.jpg" alt="" id="animation" class="none"></div>
                        <div class="border none"><img src="<?= $path ?>assets/images/roberto-sorin-uZYo1sIh2hQ-unsplash.jpg" alt="" id="animation" class="none"></div>
                        <div class="border none"><img src="<?= $path ?>assets/images/coufure.jpg" alt="" id="animation" class="none"></div>
                        <div class="hombre none"></div>
                    </div>
                    <div class="a-propos-de-nous-text noir">
                        <h1>A propos de nous</h1>
                        <p>Notre mission est de connecter les particuliers aux artisans qualifiés, tout en garantissant une expérience utilisateur fluide et sécurisée. Que vous soyez en quête de rénovations de grande envergure ou de simples réparations, nous nous engageons à vous offrir un service transparent et de qualité supérieure à chaque étape.</p>
                    </div>
                </section>
            <?php endif; ?>
        </main>
        <?php include_once 'includes/footer.php'; ?>
    </div>
</body>
</html>
