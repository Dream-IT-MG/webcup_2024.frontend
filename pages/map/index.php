<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <style>
        #map {
            width: 100vw;
            height: 100vh;
        }
    </style>
    <?php include("../../components/css.php"); ?>

</head>

<body>
    <?php include("../../components/navbar.php") ?>

    <div id="map"></div>
    <script type="module" src="./index.js"></script>
    <script src="https://cdn.botpress.cloud/webchat/v2/inject.js"></script>
    <script src="https://mediafiles.botpress.cloud/6a3ea07a-3923-4000-9191-62e9f4bfe1f9/webchat/v2/config.js"></script>
</body>

</html>