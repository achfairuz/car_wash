<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Map Integration</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
</head>

<body class="">
    <section class="dark:bg-gray-900 bg-white py-24">
        <div class="container flex flex-wrap justify-center dark:text-white gap-10 mx-auto">

            <div class="map-container mx-4 mt-10 lg:mt-0 md:mt-0">
                <div id="map" class="bg-black" style="height: 400px; width: 100%;">
                    Aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                </div>
            </div>
        </div>
    </section>

    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var map = L.map('map').setView([-7.7099996, 112.8044073], 16); // Set view to CUCI MOTOR FAIRUZ

            // Set OpenStreetMap tile layer
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);

            // Add a marker to the map
            L.marker([-7.7099996, 112.8044073]).addTo(map)
                .bindPopup('CUCI MOTOR FAIRUZ')
                .openPopup();
        });
    </script>
</body>

</html>
