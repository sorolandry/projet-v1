<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once 'includes/head.php'; ?>
</head>
<body>
    <div id="container-body">
        <?php include_once 'includes/header.php'; ?>
        <main>
            <section id="profil">
                <h1 class="nom-profil">Mon Profil</h1>
                <?php if (!empty($error)): ?>
                    <div class="error-message"><?= htmlspecialchars($error) ?></div>
                <?php endif; ?>

                <?php if (!empty($success)): ?>
                    <div class="success-message"><?= htmlspecialchars($success) ?></div>
                <?php endif; ?>
                 
                <form action="index.php?page=profil" method="POST" enctype="multipart/form-data">
                    <div class="trans">
                        <div>
                            <label for="nom_complet">Nom Complet:</label>
                            <input type="text" id="nom_complet" name="nom_complet" value="<?= htmlspecialchars($user['nom_complet']) ?>" required>
                        </div>
                        <div>
                            <label for="numero">Numéro:</label>
                            <input type="text" id="numero" name="numero" value="<?= htmlspecialchars($user['numero']) ?>" required>
                        </div>
                        <div>
                            <label for="ville">Ville:</label>
                            <input type="text" id="ville" name="ville" value="<?= htmlspecialchars($user['ville']) ?>" required>
                        </div>
                    </div>
                    <div class="trans">
                        <div>
                            <label for="commune">Commune:</label>
                            <input type="text" id="commune" name="commune" value="<?= htmlspecialchars($user['commune']) ?>" required>
                        </div>
                        <div>
                            <label for="quartier">Quartier:</label>
                            <input type="text" id="quartier" name="quartier" value="<?= htmlspecialchars($user['quartier']) ?>" required>
                        </div>
                        <div>
                        <label for="mot_de_passe">Mot de Passe:</label>
                        <input type="password" id="mot_de_passe" name="mot_de_passe" placeholder="Laissez vide pour conserver l'ancien mot de passe">
                        </div>
                    </div>
                    <label for="url_image">Photo de Profil:</label>
                    <?php if (!empty($user['url_image'])): ?>
                        <img src="uploads/<?= htmlspecialchars($user['url_image']) ?>" alt="Photo de Profil" class="profil-image">
                    <?php else: ?>
                        <p>Aucune photo de profil</p>
                    <?php endif; ?>
                    <input type="file" id="url_image" name="url_image" accept="image/*">

                    <button type="submit">Mettre à jour</button>
                </form>
            </section>
        </main>
        <?php include_once 'includes/footer.php'; ?>
    </div>
</body>
</html>
