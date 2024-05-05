<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>💖 Hearth</title>
    <?php include("../../components/css.php"); ?>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="canvas-container">
        <canvas id="canvas3d"></canvas>
        <canvas id="canvas3dMusic"></canvas>
    </div>

    <?php include("../../components/navbar.php") ?>

    <div class="section" style="display: flex;">
        <div style="margin: 1rem; display: flex; flex-direction: column; justify-content: flex-end; align-items: center; width: 100%;">
            <h2 class="tw-text-8xl">Tu ne te sens pas bien ?</h2>
        </div>
    </div>
    <div id="part1" class="section" style="display: flex;">
        <div style="flex-basis: 50%;"></div>
        <div style="margin: 1rem; display: flex; flex-direction: column; justify-content: center; align-items: flex-start; flex-basis: 50%;">
            <h2 class="tw-text-6xl">Cette guerre interminable te tourmente l'esprit ?</h2>
        </div>
    </div>
    <div id="part2" class="section" style="display: flex;">
        <div style="margin: 1rem; display: flex; flex-direction: column; justify-content: center; align-items: flex-start; flex-basis: 50%;">
            <h2 class="tw-text-6xl"> Tu te sens pas bien ?</h2>
            <h2 class="tw-text-6xl"> Mange de la bonne glace ou écoute de la musique !</h2>
        </div>
        <div style="flex-basis: 50%;"></div>
    </div>

    <div id="part3" class="section" style="display: flex;">
        <div style="flex-basis: 50%;"></div>
        <div style="margin: 1rem; display: flex; flex-direction: column; justify-content: center; align-items: flex-start; flex-basis: 50%;">
            <h2 class="tw-text-6xl">et si tu veux te confier à quelqu'un</h2>
        </div>
    </div>

    <div id="part4" class="section" style="display: flex; flex-direction: row;">
        <div style="flex-basis: 50%;">
            <h2 class="tw-text-8xl">Je suis là pour parler !</h2>
        </div>
        <div style="flex-basis: 50%; width: 75%; background: #ffdb30; border-radius: 2em; margin: 1em; overflow: hidden;">
            <iframe style="border: none; width: 100%; height: 100%;" srcdoc="<body><script src='https://cdn.botpress.cloud/webchat/v0/inject.js'></script>
            <script>
              window.botpressWebChat.init({
                  'composerPlaceholder': 'Chat with us ....',
                  'botConversationDescription': 'Pour vous aider pendant cette crise ! 🔥',
                  'botName': 'Lapinou 💖',
                  'botId': '6a3ea07a-3923-4000-9191-62e9f4bfe1f9',
                  'hostUrl': 'https://cdn.botpress.cloud/webchat/v0',
                  'messagingUrl': 'https://messaging.botpress.cloud',
                  'clientId': '6a3ea07a-3923-4000-9191-62e9f4bfe1f9',
                  'enableConversationDeletion': true,
                  'showPoweredBy': true,
                  'className': 'webchatIframe',
                  'containerWidth': '100%25',
                  'layoutWidth': '100%25',
                  'hideWidget': true,
                  'showCloseButton': false,
                  'disableAnimations': true,
                  'closeOnEscape': false,
                  'showConversationsButton': false,
                  'enableTranscriptDownload': false,
                  'stylesheet':'https://webchat-styler-css.botpress.app/prod/code/3fcd3e4e-d5bc-4bf5-8699-14b621b3ada2/v31782/style.css'
              });
            window.botpressWebChat.onEvent(function () { window.botpressWebChat.sendEvent({ type: 'show' }) }, ['LIFECYCLE.LOADED']);
            </script></body>" width="100%" height="100%"></iframe>
        </div>
    </div>

    <!-- Gsap -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollToPlugin.min.js"></script>

    <!-- Lenis -->
    <script src="https://unpkg.com/lenis@1.0.45/dist/lenis.min.js"></script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <script type="module" src="./main.js"></script>

</body>

</html>