<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Artisans à Proximité</title>
    <style>
    body {
        font-family: Arial, sans-serif;
    }

    .artisan {
        border: 1px solid #ddd;
        padding: 10px;
        margin: 10px 0;
    }

    #loadMore {
        margin: 20px 0;
        padding: 10px 20px;
        background-color: #007BFF;
        color: white;
        border: none;
        cursor: pointer;
    }
    </style>
</head>

<body>

    <h1>Artisans à Proximité</h1>
    <div id="artisanList"></div>
    <button id="loadMore">Voir plus</button>

    <script>
    let currentPage = 1;
    const userLatitude = 48.8566; // Remplacez par la latitude de l'utilisateur
    const userLongitude = 2.3522; // Remplacez par la longitude de l'utilisateur
    const radius = 1; // Rayon en kilomètres

    function loadArtisans(page) {
        fetch(`api/artisans.php?latitude=${userLatitude}&longitude=${userLongitude}&radius=${radius}&page=${page}`)
            .then(response => response.json())
            .then(data => {
                const artisanList = document.getElementById('artisanList');
                data.artisans.forEach(artisan => {
                    const artisanDiv = document.createElement('div');
                    artisanDiv.className = 'artisan';
                    artisanDiv.innerHTML = `
                    <strong>${artisan.nom_complet}</strong><br>
                    Métier : ${artisan.metier}<br>
                    Distance : ${Math.round(artisan.distance * 100) / 100} km
                `;
                    artisanList.appendChild(artisanDiv);
                });

                // Si tous les artisans ont été chargés, masquer le bouton "Voir plus"
                if (data.artisans.length < data.limit) {
                    document.getElementById('loadMore').style.display = 'none';
                }
            })
            .catch(error => {
                console.error('Erreur:', error);
            });
    }

    // Charger les artisans au chargement de la page
    loadArtisans(currentPage);

    // Gérer le clic sur le bouton "Voir plus"
    document.getElementById('loadMore').addEventListener('click', () => {
        currentPage++;
        loadArtisans(currentPage);
    });
    </script>

</body>

</html>