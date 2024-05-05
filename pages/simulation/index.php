<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>KingKong Burnout Simulator</title>
  <base href=".">
  <?php include("../../components/css.php"); ?>


  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <?php include("../../components/navbar.php") ?>
  <canvas id="bg"></canvas>
  <script type="importmap">
    {
          "imports": {
            "three": "https://cdn.jsdelivr.net/npm/three@0.164.1/build/three.module.js",
            "three/examples/jsm/": "https://cdn.jsdelivr.net/npm/three@0.164.1/examples/jsm/"
          }
        }
    </script>

  <script src="./index.js" type="module"></script>
  <script src="https://cdn.botpress.cloud/webchat/v2/inject.js"></script>
  <script src="https://mediafiles.botpress.cloud/6a3ea07a-3923-4000-9191-62e9f4bfe1f9/webchat/v2/config.js"></script>
</body>

</html>