<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include("../../components/css.php"); ?>
    <link rel="stylesheet" href="../news/assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="./style.css">

</head>

<body style="height: 100%; overflow: hidden;">

    <?php include("../../components/navbar.php") ?>
    <div id="slide-1" style="margin-top: 5em;">
        <canvas id="card-animation">

        </canvas>
        <div class="row">
            <div class="col-5">
            </div>
            <div class="col-7 p-5">
                <div class="tw-text-center tw-flex tw-self-center tw-text-white tw-border-0 tw-bg-gray-0 tw-rounded-md tw-bg-clip-padding tw-backdrop-filter tw-backdrop-blur-md tw-bg-opacity-5" id="question-card">
                    <div class="card-body tw-justify-center tw-content-center">
                        <h3 data-question class="tw-text-2xl tw-font-bold tw-uppercase">sdasd ?</h3>
                        <div>
                            <p data-result class="tw-h-5 tw-mb-10"></p>
                            <ul data-responses class="tw-grid tw-grid-cols-2">
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include("../../components/javascript.php") ?>


    <script src="./index.js" type="module"></script>
    <script src="./quiz.js"></script>

</body>

</html>