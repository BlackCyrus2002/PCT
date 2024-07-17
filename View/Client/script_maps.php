<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
<script>
var map = L.map('maptest').setView([5.345317, -4.024429], 13); // Initial center

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '© 2024 Mon artisan'
}).addTo(map);

// Add geocoder search control
var geocoder = L.Control.Geocoder.nominatim();
L.Control.geocoder({
        geocoder: geocoder,
        defaultMarkGeocode: false
    })
    .on('markgeocode', function(e) {
        var lat = e.geocode.center.lat;
        var lon = e.geocode.center.lng;
        document.getElementById('lat').value = lat;
        document.getElementById('long').value = lon;

        if (marker) {
            map.removeLayer(marker);
        }

        marker = L.marker([lat, lon]).addTo(map)
            .bindPopup(e.geocode.name)
            .openPopup();

        map.setView([lat, lon], 13);
    })
    .addTo(map);

// Get user's location
if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
        var lat = position.coords.latitude;
        var lon = position.coords.longitude;
        document.getElementById('lat').value = lat;
        document.getElementById('long').value = lon;

    });
}

// Handle map clicks
var marker;
map.on('click', function(e) {
    var lat = e.latlng.lat;
    var lon = e.latlng.lng;
    document.getElementById('lat').value = lat;
    document.getElementById('long').value = lon;

    if (marker) {
        map.removeLayer(marker);
    }

    marker = L.marker([lat, lon]).addTo(map)
        .bindPopup('Emplacement sélectionné.')
        .openPopup();
});
</script>