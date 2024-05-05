<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive 3D Parallax Website</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

  <?php include("../../components/navbar.php") ?>

  <main>
    <div class="vignette hide"></div>
    <img src="img/background.png" data-rotation="0" data-speedx="0.3" data-speedy="0.38" data-speedz="0" alt="" class="parallax bg-img" data-distance="-200">
    <img src="img/fog_7.png" data-rotation="0" data-speedx="0.27" data-speedy="0.32" data-speedz="0" alt="" class="parallax fog-7" data-distance="950">
    <img src="img/mountain_10.png" data-rotation="0" data-speedx="0.195" data-speedy="0.305" data-speedz="0" alt="" class="parallax mountain-10" data-distance="1000">
    <img src="img/fog_6.png" alt="" data-rotation="0" data-speedx="0.25" data-speedy="0.28" data-speedz="0" class="parallax fog-6" data-distance="1100">
    <img src="img/mountain_9.png" data-rotation="0.02" data-speedx="0.125" data-speedy="0.155" data-speedz="0" alt="" class="parallax mountain-9" data-distance="1400">
    <img src="img/mountain_8.png" data-rotation="0.02" data-speedx="0.1" data-speedy="0.11" data-speedz="0.1" alt="" class="parallax mountain-8" data-distance="1700">
    <img src="img/fog_5.png" alt="" data-rotation="0" data-speedx="0.16" data-speedy="0.105" data-speedz="0" class="parallax fog-5" data-distance="1800">
    <img src="img/mountain_7.png" data-rotation="0.09" data-speedx="0.1" adata-speedy="0.1" data-speedz="0" lt="" class="parallax mountain-7" data-distance="1900">
    <div class="text parallax" data-rotation="0.11" data-speedx="0.07" data-speedy="0.007" data-speedz="0" data-distance="0">
      <h2>Godzilla</h2>
      <h1>King Kong</h1>
    </div>
    <img src="img/mountain_6.png" data-rotation="0.12" alt="" data-speedx="0.065" data-speedy="0.05" data-speedz="0.05" class="parallax mountain-6" data-distance="2300">
    <img src="img/fog_4.png" alt="" data-rotation="0" data-speedx="0.135" data-speedy="0.018" data-speedz="0" class="parallax fog-4" data-distance="2400">
    <img src="img/mountain_5.png" alt="" data-rotation="0" data-speedx="0.08" data-speedy="0.024" data-speedz="0.13" class="parallax mountain-5" data-distance="2550">
    <img src="img/fog_3.png" alt="" data-rotation="0.1" data-speedx="0.11" data-speedy="0.38" data-speedz="0" class="parallax fog-3" data-distance="2800">
    <img src="img/mountain_4.png" alt="" data-rotation="0.14" data-speedx="0.059" data-speedy="0.018" data-speedz="0" class="parallax mountain-4" data-distance="3200">
    <img src="img/mountain_3.png" alt="" data-rotation="0.05" data-speedx="0.04" data-speedy="0.0115" data-speedz="0.32" class="parallax mountain-3" data-distance="3400">
    <img src="img/fog_2.png" alt="" data-rotation="0" data-speedx="0.15" data-speedy="0.38" data-speedz="0" class="parallax fog-2" data-distance="3600">
    <img src="img/mountain_2.png" alt="" data-rotation="0.015" data-speedx="0.0235" data-speedy="0.013" data-speedz="0" class="parallax mountain-2" data-distance="3800">
    <img src="img/mountain_1.png" alt="" data-rotation="0.2" data-speedx="0.027" data-speedy="0.018" data-speedz="0.53" class="parallax mountain-1" data-distance="4000">
    <img src="img/sun_rays.png" alt="" class="sun-rays hide">
    <img src="img/black_shadow.png" alt="" class="black_shadow hide">
    <img src="img/fog_1.png" alt="" data-distance="4200" data-rotation="0" data-speedx="0.12" data-speedy="0.01" data-speedz="0" class="parallax fog-1">
    <img src="img/ground_grass.png" class="ground-plant">
  </main>
  <div class="page-content">
    <div id="slide-2">
      <div class="vertical__content">
        <div class="col col_left">
          <div class="canvas-container">
            <canvas id="canvas3d"></canvas>
          </div>

          <!-- <img src="img/kong.jpg" id="image_kong"> -->
        </div>

        <div class="col col_right">
          <div class="vertical__item">
            <h3>Smooth Scroll Lenis</h3>
            <p>
              Lenis is an open-source library built to standardize scroll experiences and sauce up
              websites
              with butter-smooth navigation, all while using the platform and keeping it accessible.
            </p>
          </div>
          <div class="vertical__item">
            <h3>Smooth Scroll Lenis</h3>
            <p>
              Lenis is an open-source library built to standardize scroll experiences and sauce up
              websites
              with butter-smooth navigation, all while using the platform and keeping it accessible.
            </p>
          </div>
          <div class="vertical__item">
            <h3>Smooth Scroll Lenis</h3>
            <p>
              Lenis is an open-source library built to standardize scroll experiences and sauce up
              websites
              with butter-smooth navigation, all while using the platform and keeping it accessible.
            </p>
          </div>

        </div>

      </div>

    </div>

    <section id="horizontal">
      <div class="container">
        <div class="horizontal__content">
          <div class="horizontal__item">
            <div class="horizontal__num">1</div>
            <p>
              Ne pas s'approcher demoins de 100m
            </p>
          </div>
          <div class="horizontal__item">
            <div class="horizontal__num">2</div>
            <p>
              Ne pas regarder dans les yeux
            </p>
          </div>
          <div class="horizontal__item">
            <div class="horizontal__num">3</div>
            <p>
              Ne pas essayer de fuir, plutôt se cacher
            </p>
          </div>
          <div class="horizontal__item">
            <div class="horizontal__num">4</div>
            <p>
              Ne pas porter de vêtements rouge
            </p>
          </div>
          <div class="horizontal__item">
            <div class="horizontal__num">5</div>
            <p>
              Avoir un sifflet avec soi
            </p>
          </div>
        </div>
      </div>
    </section>

    <div id="slide-4">
      <div class="vertical__content">
        <div class="col col_left">
          <div class="canvas-container">
            <canvas id="canvasGodzilla"></canvas>
            <canvas id="canvas3dMusic"></canvas>
          </div>
        </div>

        <div class="col col_right">
          <div class="vertical__item">
            <h3>Smooth Scroll Lenis</h3>
            <p>
              Lenis is an open-source library built to standardize scroll experiences and sauce up
              websites
              with butter-smooth navigation, all while using the platform and keeping it accessible.
            </p>
          </div>
          <div class="vertical__item">
            <h3>Smooth Scroll Lenis</h3>
            <p>
              Lenis is an open-source library built to standardize scroll experiences and sauce up
              websites
              with butter-smooth navigation, all while using the platform and keeping it accessible.
            </p>
          </div>
          <div class="vertical__item">
            <h3>Smooth Scroll Lenis</h3>
            <p>
              Lenis is an open-source library built to standardize scroll experiences and sauce up
              websites
              with butter-smooth navigation, all while using the platform and keeping it accessible.
            </p>
          </div>

        </div>

      </div>

    </div>
    <section id="overlaping-cards">
      <div class="cards">
        <div class="card card-1">
          <h2>01</h2>
          <p>
            Courir Vite
          </p>
        </div>
        <div class="card card-2">
          <h2>02</h2>
          <p>
            Nager Vite
          </p>
        </div>
        <div class="card card-3">
          <h2>03</h2>
          <p>
            Ne pas faire de bruit
          </p>
        </div>
        <div class="card card-4">
          <h2>04</h2>
          <p>
            Ne pas nager dans les eaux profondes
          </p>
        </div>
      </div>
    </section>
  </div>
  <script src="js/gsap.min.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script> -->
  <script src="js/app.js" defer></script>
  <script type="importmap">
    {
      "imports": {
        "three": "https://cdn.jsdelivr.net/npm/three@0.164.1/build/three.module.js",
        "three/examples/jsm/": "https://cdn.jsdelivr.net/npm/three@0.164.1/examples/jsm/"
      }
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollToPlugin.min.js"></script>


  <script src="https://unpkg.com/lenis@1.0.45/dist/lenis.min.js"></script>

  <script src="./scroll.js"></script>
  <script src="./script.js" type="module"></script>

  <script src="https://cdn.botpress.cloud/webchat/v2/inject.js"></script>
  <script src="https://mediafiles.botpress.cloud/6a3ea07a-3923-4000-9191-62e9f4bfe1f9/webchat/v2/config.js"></script>

</body>

</html>