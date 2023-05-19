<?php
session_start();
if (isset($_COOKIE['flag'])) {
    header('location: views/home.php');
} else {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Font Awesome CDN -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

        <link rel="stylesheet" href="views/css/styles.css">
        <link rel="stylesheet" href="views/css/load-game.css">

        <title>Welcome to Steam</title>
    </head>

    <body>
        <header id="header">
            <div class="brand-logo">
                <a href="index.php">
                    <img src="assets/images/Steam_icon_logo.svg.png" alt="Steam">
                </a>
            </div>

            <nav id="navbar">
                <ul>
                    <li><a href="index.php">Store</a></li>
                    <li><a href="views/community.html">Community</a></li>
                    <li><a href="views/about.html">About</a></li>
                    <li><a href="views/support.html">Support</a></li>
                </ul>
            </nav>
            <div class="log-reg">
                <a href="views/login.html">Login</a>
                <a href="views/registration.html">Register</a>
            </div>
        </header>
        <div class="search-nav">
            <form>
                <input type="search" name="search" id="search" placeholder="Search" autocomplete="off" onkeyup="searchGames()">
                <button type="submit" name="search" id="search-btn"><i class="fas fa-search"></i></button>
            </form>
        </div>
        <section>
            <div id="load-game">

            </div>
        </section>
        <!-- <footer>
            <div id="footer">
                <div>
                    <img src="assets/images/footerLogo_valve_new.png" alt="Valve logo">
                </div>
                <div>
                    © 2021 Valve Corporation. All rights reserved. All trademarks are property of their respective owners in the US and other countries.
                </div>
                <div>
                    <img src="assets/images/logo_steam_footer.png" alt="Steam logo">
                </div>
            </div>
        </footer> -->
    </body>
    <script>
        window.addEventListener('load', (event) => {
            $requestData = 'data';

            let xhttp = new XMLHttpRequest();
            xhttp.open('POST', 'controller/view-games.php', true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send('data=' + $requestData);

            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("load-game").innerHTML = this.responseText;
                }
            }
        });

        function searchGames() {
            let search = document.getElementById('search').value;
            let xhttp = new XMLHttpRequest();

            xhttp.open('POST', 'controller/search-games.php', true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send('name=' + search);
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("load-game").innerHTML = this.responseText;
                }
            }
        }
    </script>

    </html>
<?php
}
?>