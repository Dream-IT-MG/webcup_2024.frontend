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
</body>

</html>