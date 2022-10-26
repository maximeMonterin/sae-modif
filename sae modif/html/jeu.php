<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Playground</title>
    <link rel="icon" href="../assets/child-logo.ico">
    <link rel="stylesheet" href="../css/jeu_style.css">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="../js/script.js"></script>
</head>
<body>

    <main class="root" id="root">
        <div class="main-container">
            <div class="title-bar">
                <div class="top">
                    <div class="dot-container">
                        <a id="dot1" href="../index" class="dot"></a>
                        <span id="dot2" class="dot"></span>
                        <span id="dot3" class="dot"></span>
                    </div>

                    <input class="search-bar" type="text" value="https://dataplayground.com" readonly>

                    <div class="icons-container">
                        <button class="icons-btn"><img src="../assets/data.svg" class="icon" id="data-icon"></button>
                        <button class="icons-btn"><img src="../assets/addon.svg" class="icon" id="addon-icon"></button>
                    </div>
                </div>
                <div class="bottom-pages" id="bottom-pages">
                    <a class="page" id="page-selected" onclick="setPage(0)">Compte Doogle</a>
                    <a class="page" onclick="setPage(1)">Mes mails</a>
                    <a class="page" onclick="setPage(2)">Téléchargements</a>
                    <a class="page" onclick="setPage(3)">Streaming</a>
                    <a class="page" onclick="setPage(4)">Les défauts</a>
                    <a class="page" id="last-page"></a>
                </div>
            </div>


            <div class="contents" id="contents">
                <?php require "../pages/accueil/accueil.php" ?>
            </div>

        </div>
    </main>

    <div class="popup-container">
        <div class="popup" id="login-popup">
            <a class="button-popup-choose" onclick="changeLoginToSignup('signup')">Enregistrement</a>
            <a class="button-popup-choose" onclick="changeLoginToSignup('login')">Connexion</a>
            <img class="child-logo" src="../assets/child-logo.png">
            <p class="username-text" id="username-text">Vous pouvez renseigner un pseudo 2 fois pour pouvoir sauvegarder votre progression !</p>
            <input class="username-input" id="first-username-input" type="text" placeholder="Xx_Data_xX">
            <input class="username-input" id="second-username-input" type="text" placeholder="Xx_Data_xX">
            <button class="username-button" id="username-button" onclick="hideUsernamePopup()">Login</button>
        </div>
    </div>

    <div class="phone-landscape">
        <img src="../assets/turn-to-landscape.gif">
        <img src="../assets/child-logo.png">
        <p class="landscape-text">Pour une meilleur expérience, </p>
        <p class="landscape-text">Tournez votre téléphone à l'horizontale.</p>
    </div>

    <script>
        document.getElementById("second-username-input").addEventListener('input', verifyEqual);
        function verifyEqual() {
            let firstUsernameInput = document.getElementById("first-username-input").value;
            let secondUsernameInput = document.getElementById("second-username-input").value;
            if (firstUsernameInput.length > 0 && firstUsernameInput !== secondUsernameInput) {
                document.getElementById("second-username-input").style.borderBottom = "3px solid #cc0000";
            } else {
                document.getElementById("second-username-input").style.borderBottom = "2px solid #555555";
            }
        }
    </script>

</body>
</html>