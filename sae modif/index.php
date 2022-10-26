<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DataBrowser</title>
    <link rel="icon" href="../assets/child-logo.ico">
    <link rel="stylesheet" href="css/index_style.css">
    <script src="js/script.js"></script>
</head>

<body>
    <main class="root" id="root" onmousedown="toggleFullScreen()">
        <img class="main-img" src="assets/backgroundStartImage/start-image.png" usemap="#image-map">
        <map name="image-map">
            <area coords="789,234,1094,412" shape="rect" onmouseover="replaceMainImage('start-image-screen')" onmouseout="replaceMainImage('start-image')" onmouseup="screenTransition()">
            <area href="html/contact.html" coords="412,32,628,2,690,371,492,397" shape="poly" onmouseover="replaceMainImage('start-image-poster')" onmouseout="replaceMainImage('start-image')">
            <area href="html/contact.html" coords="1287,483,1443,588" shape="rect" onmouseover="replaceMainImage('start-image-book')" onmouseout="replaceMainImage('start-image')">
        </map>
    </main>

    <div class="phone-landscape">
        <img src="../assets/turn-to-landscape.gif">
        <img src="../assets/child-logo.png">
        <p class="landscape-text">Pour une meilleur expérience, </p>
        <p class="landscape-text">Tournez votre téléphone à l'horizontale.</p>
    </div>

    <div class="video-content" id="video-content">
        <video id="video">
            <source src="assets/video.mp4" type="video/mp4">
        </video>
    </div>

<!--    <script src="../js/jquery.rwdImageMaps.min.js"></script>-->
<!--    <script>-->
<!--        (document).ready(function(e) {-->
<!--            ('img[usemap]').rwdImageMaps();-->
<!--        });-->
<!--    </script>-->

</body>
</html>