<header>

  <div id="divLogo">
        <img alt="Logo" id="logo" src="./assets/icon.png">
  </div>

    <nav>
        <ul id="menu">
            <li><a href="accueil.html">Accueil</a></li>
            <li><a href="autrepage.html">autrepage(temp)</a></li>
            <li><a href="possiblesousmenu.html">tempsousmenu</a>
                <ul class="sousMenuNR">
                    <li><a href="1.html">1</a></li>
                    <li><a href="2.html">2</a></li>
                    <li><a href="3.html">3</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <div id="burger">
        <img alt="burger" id="imgBurger" src="./assets/burger.png">
        <ul id="menuBurger">
            <li><a href="accueil.html">Accueil</a></li>
            <li><a href="autrepage.html">autrepage(temp)</a></li>
            <li><a href="possiblesousmenu.html">tempsousmenu</a>
              <ul class="sousMenuNR">
                  <li><a href="1.html">1</a></li>
                  <li><a href="2.html">2</a></li>
                  <li><a href="3.html">3</a></li>
                </ul>
            </li>
          </ul>
      </div>
</header>

<?php

$ROOT_FOLDER = __DIR__ . DIRECTORY_SEPARATOR;
require $ROOT_FOLDER . 'lib' . DIRECTORY_SEPARATOR . 'File.php';

error_reporting(E_ALL);
ini_set('display_errors', '1');

require File::build_path(array('controller', 'routeur.php'));
