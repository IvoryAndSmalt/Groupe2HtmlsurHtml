<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="" href="">
    <title>Balises Particulières : html</title>
    <link rel="stylesheet" href="stylepage.css">
</head>

<?php echo  "mon texte"?>

<body>
    <header>
        <h1>Initiation au html</h1>

        <ul>
            <li><a href="projet_groupe2.html">Accueil </a></li>
            <li><a>Balises Block</a>
                <ul>
                    <li><a href="balisediv.html">&#8249;div&#8250;</a></li>
                    <li><a href="baliseul.html">&#8249;ul&#8250;</a></li>
                    <li><a href="baliseli.html">&#8249;li&#8250;</a></li>
                    <li><a href="balisep.html">&#8249;p&#8250;</a></li>
                    <li><a href="baliseheader.html">&#8249;header&#8250;</a></li>
                    <li><a href="balisefooter.html">&#8249;footer&#8250;</a></li>
                    <li><a href="balisevideo.html">&#8249;video&#8250;</a></li>
                </ul>
            </li>
            <li><a>Balises Inline</a>
                <ul>
                    <li><a href="balisea.html">&#8249;a&#8250;</a></li>
                    <li><a href="baliseimg.html">&#8249;img&#8250;</a></li>
                    <li><a href="balisebutton.html">&#8249;button&#8250;</a></li>
                    <li><a href="balisetextarea.html">&#8249;textarea&#8250;</a></li>
                </ul>
            </li>
            <li><a>Balises Particulières</a>
                <ul>
                    <li><a href="balisehtml.html">&#8249;html&#8250;</a></li>
                    <li><a href="balisemeta.html">&#8249;meta&#8250;</a></li>
                    <li><a href="balisehead.html">&#8249;head&#8250;</a></li>
                    <li><a href="balisea.html">&#8249;body&#8250;</a></li>
                </ul>
            </li>
            <li><a>Contact</a>
                <ul>
                    <li><a href="contactform.html" target="contactform.html" onclick="contactform.html">Formulaire de
                            Contact</a></li>
                </ul>
            </li>
        </ul>
    </header>

    <div id="style_page">

        <div class="gauche">
            <!-- block gris foncé -->
        </div>

        <div class="contenu">
            <div class="titres">
                <h2>Balises Particulières : <span>balise &#8249;html&#8250;</span></h2>
            </div>
            <div class="def">
                <p>nom de la balise &#003C;html&#003E;</p>
                <p>Definition signification de l'abréviation</p>
                <p>type de balise (block ou inlines ou particulières)</p>
                <p>type de balise (par paire ou orphelines)</p>
                <p>où et quand dans le code (body...)</p>
                <p>sa fonction</p>
                <p>Décliner les attributs (nécessaires et optionels")</p>
                <br>
                <p id="txtavimg">Voici un exemple de la balise utilisée dans un script html :</p>
                <img class="capexemple" src="capturew3cmeta.PNG" alt="image provenant de w3c">
                <br>
                <a class="liensites" href="http://www.monsite.fr" target="http://www.monsite.fr" onclick="www.monsite.fr">mon site</a>
                <br>
            </div>

            <form class ="boutonsuivant" action="balisehtml.html">
                <input type="submit" value="Suivant" />
            </form>

        </div>
    </div>

    <footer>
        <div class="footer">

            <div class="donnees">

                <div class="text1">
                    <p> Promo Access Code School de Belfort 2018</p>
                </div>
                <br>
                <div class="text2">
                    <p> Groupe html 2 : Alexandra Moullet, Laura Vangrevenynghe et Lucas Van Den Berg</p>
                </div>
            </div>

            <div class="logo">
                <img src="mini_ACS.jpg" alt="Logo de l'Access code school"></div>
        </div>

    </footer>

</body>

</html>