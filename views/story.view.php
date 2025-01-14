<?php require "components/navbar.php"; ?>
<?php require "components/header.php"; ?>


<body>

<h1>Blogu revolūcija: populārās blogu platformas <em><?= $title ?> </em> stāsts</h1>

<p>Tā kā digitālās tehnoloģijas izplatās pa visu pasauli kā vēl nekad agrāk, blogošana kļuvusi par vēl būtiskāku veidu, kā dalīties ar stāstiem, idejām un atklājumiem. Tomēr, lai gan ir daudz blogošanas platformu, kas piedāvā dažādas funkcijas, lielākajā daļa no tām trūkst inovāciju un lietotājam draudzīgas pieredzes. Tas viss ir mainījies 2025. gadā, kad pasauli satricina <strong><?= $title?> </strong> - <strong>nākotnes blogu platforma</strong>!</p>

<p><?=$title ?>ir blogošanas platforma, kas pilnībā mainījusi veidu, kā mēs blogojam un patērējam saturu. <?=$title?> ne tikai izceļas ar vizuāli pievilcīgu, modernu un lietotājam draudzīgu interfeisu, bet piedāvā arī inovatīvas funkcijas, kas pārspēj esošo konkurenci. <?=$title?>ir vairāk nekā tikai blogošanas platforma - tā ir pilnīga kopiena.</p>

<p>Pateicoties programmētāju talantam un neatlaidībai, <?=$title ?>ļoti īsā laikā kļuvusi par Latvijā vadošo blogošanas platformu. Lietotāju skaits strauji pieaug, jo cilvēki no visas Latvijas novērtē iespējas, ko piedāvā <?=$title?>, un platformas radīto ciešo saikni starp rakstniekiem un lasītājiem.</p>

<!-- Annoying Random Moving Text -->
<div class="move-text" id="movingText">Šis ir pārsteidzoši traks teksts!</div>

<script>
    // Select the text element
    const movingText = document.getElementById('movingText');

    // Initialize position and velocity
    let posX = 100;  // Initial X position
    let posY = 100;  // Initial Y position
    let velocityX = 2;  // Speed in X direction
    let velocityY = 2;  // Speed in Y direction

    // Get screen dimensions
    const screenWidth = window.innerWidth;
    const screenHeight = window.innerHeight;

    // Update the position of the text on each frame
    function moveText() {
        // Update the position of the text element
        posX += velocityX;
        posY += velocityY;

        // Check if the text hits the screen edges and reverse direction
        if (posX + movingText.offsetWidth >= screenWidth || posX <= 0) {
            velocityX = -velocityX;
        }
        if (posY + movingText.offsetHeight >= screenHeight || posY <= 0) {
            velocityY = -velocityY;
        }

        // Set the new position of the text
        movingText.style.left = posX + 'px';
        movingText.style.top = posY + 'px';

        // Request a new frame to continue the animation
        requestAnimationFrame(moveText);
    }

    // Start the animation
    moveText();
</script>
<h1>Listen to the YouTube Audio</h1>

    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo 'DimSsvIA_hQ'; ?>" 
    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<?php require "components/footer.php"; ?>
