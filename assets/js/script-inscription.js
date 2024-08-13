function toggleChampsArtisan() {
    const champsArtisan = document.getElementById('champsArtisan');
    const typeArtisan = document.getElementById('typeArtisan');
  
    if (typeArtisan.checked) {
      champsArtisan.style.display = 'block';
    } else {
      champsArtisan.style.display = 'none';
    }
  }

  const image = document.querySelector('img');
  const inputImage = document.querySelector('input[type="file"]');

  inputImage.addEventListener('change', function(e){
    const file = e.target.files[0];
    image.src = URL.createObjectURL(e.target.files[0]);
  })

  document.getElementById('getLocationBtn').addEventListener('click', function() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;
            
            // Mettre à jour les inputs avec la latitude et la longitude
            document.getElementById('latitude').value = latitude;
            document.getElementById('longitude').value = longitude;
            
            // Appeler la fonction pour initialiser la carte Leaflet
            initMap(latitude, longitude);
            
        });
    }
});

function initMap(lat, lng) {
    // Initialiser la carte Leaflet
    var map = L.map('map').setView([lat, lng], 13);
    

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    }).addTo(map);
    
    // Ajouter un marqueur à la position actuelle
    L.marker([lat, lng]).addTo(map)
        .bindPopup('Votre position actuelle').openPopup();
}