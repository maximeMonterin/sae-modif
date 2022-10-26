/* Met la page en plein écran" */
function toggleFullScreen() {
    document.body.style.zoom = 1.0;
    document.documentElement.requestFullscreen();
}

/* Permet de cacher la popup de Sign up / Login quand on a rempli notre pseudo
TODO Changer cette fonction pour vérifier si le pseudo est identique
TODO Lien avec la bd
 */
function hideUsernamePopup() {
    document.getElementById("login-popup").style.display = "none";
    document.getElementById("root").style.filter = "blur(0px)";
    toggleFullScreen();
}

/* Permet de changer l'image de fond sur l'index quand on passe sa souris sur un élément */
function replaceMainImage(link) {
    document.getElementsByClassName("main-img")[0].src = "../assets/backgroundStartImage/" + link + ".png";
}

/* Permet de faire la transition avec la vidéo
TODO Trouver un meilleur moyen
 */
function screenTransition() {
    document.getElementById("root").style.display = "none";
    document.getElementById("video-content").style.display = "block";
    document.getElementById("video").play();
    setTimeout(() => {window.location.href = "../html/jeu.php";}, 1300);
}

/* Permet de changer l'affichage des pages sur le jeu
TODO Ne pas l'autorisé quand on est en pleine tache
TODO Changer aussi la page de jeu quand il le faut
 */
function setPage(thisindex) {
    let childNodes = document.getElementById('bottom-pages').children;
    let id = "page-selected";

    document.getElementById("page-selected").removeAttribute("id");
    childNodes[thisindex].setAttribute("id", id);
}

/* Permet de passer de la popup de Sign up à la popup de Login et inversement */
function changeLoginToSignup(page) {
    let parentElement = document.getElementById("login-popup");
    let text = document.getElementById("username-text");

    if (page === "login" && text.innerText.startsWith('V')) {
        text.innerText = "Renseignez votre pseudo pour retourner sur votre sauvegarde !";
        parentElement.removeChild(document.getElementById("second-username-input"));
    }

    else if (page === "signup" && text.innerText.startsWith('R')) {
        document.location.reload();
    }
}

/* Permet de changer le contenu de la page principale où se joue le jeu */
function changePageOfGame(link) {
    $("#contents").load(link)
}