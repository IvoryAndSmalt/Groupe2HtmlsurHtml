<?php include 'introheader.php';?>
<title>Introduction au html : balise button</title>
<?php include 'header.php';?>

    <div id="style_page">

        <div class="gauche">
            <!-- block gris foncé -->
        </div>

        <div class="contenu">
            <div class="titres">
                <h2>Balises Inline : <span>balise &#8249;button&#8250;</span></h2>
            </div>
            <div class="def">
                <p>&#8249;button&#8250;</p>
                <p>La balise button est une balise inline.</p>
                <p>C'est une balise orpheline.</p>
                <p>Elle est située dans le body du document html.</p>
                <p>La balise button permet de créer un bouton clickable sur la page html. Il est possible d'intégrer du texte 
                    ou une image dans un boutton, à la différence de la balise submit. Cette balise peut être utilisée pour des 
                    fonctionnalités simples comme dans un formulaire.
                </p>
                <p>Il est nécessaire d'utiliser l'attribut type (button, reset ou submit), car les navigateurs ne donnent pas le 
                    même type par défaut. D'autres attributs fréquemment utilisés sont name, et value.
                </p>
                <p id="txtavimg">Voici un exemple de la balise utilisée dans un script html :</p>
                <img src="buttontag.png" alt="image provenant de w3c montrant un exemple de code html avec la balise button">
                <br>
                <a class="liensites" href="https://www.w3schools.com/tags/tag_button.asp" 
                target="https://www.w3schools.com/tags/tag_button.asp" 
                onclick="https://www.w3schools.com/tags/tag_button.asp">
                w3schools.com/tags/tag_button.asp</a>
                <a class="liensites" href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/button" 
                target="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/button" 
                onclick="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/button">
                developer.mozilla.org/en-US/docs/Web/HTML/Element/button</a>
                <br>
            </div>

            <form class ="boutonsuivant" action="balisetextarea.php">
                <input type="submit" value="Suivant" />
            </form>
        </div>
    </div>

    <?php include 'footer.php';?>