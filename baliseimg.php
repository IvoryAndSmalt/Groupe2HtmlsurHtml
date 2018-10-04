<?php include 'introheader.php';?>
<title>Introduction au html : balise img</title>
<?php include 'header.php';?>

    <div id="style_page">

        <div class="gauche">
            <!-- block gris foncé -->
        </div>

        <div class="contenu">
            <div class="titres">
                <h2>Balises Inline : <span>balise &#8249;img&#8250;</span></h2>
            </div>
            <div class="def">
                <p>&#8249;img&#8250;</p>
                <p>La balise img est une balise inline.</p>
                <p>C'est une balise orpheline.</p>
                <p>Elle est située dans le body du document html.</p>
                <p>La balise img permet d'intégrer une image à du code html. Tous les navigateurs 
                    ne supportent pas nécessairement les mêmes formats d'image. Voici la liste les 
                    formats supportés par les navigateurs principaux.
                    <a href="https://en.wikipedia.org/wiki/Comparison_of_web_browsers#Image_format_support" 
                    target="https://en.wikipedia.org/wiki/Comparison_of_web_browsers#Image_format_support"
                    onclick="https://en.wikipedia.org/wiki/Comparison_of_web_browsers#Image_format_support"></a>
                </p>
                <p>l'attribut src="" est nécessaire pour spécifier la source, ainsi que l'attribut alt="", 
                    qui définit un texte de remplacement si le navigateur ne parvient pas à charger l'image.
                </p>
                <p id="txtavimg">Voici un exemple de la balise utilisée dans un script html :</p>
                <img src="imgtag.png" alt="image provenant de w3c montrant un exemple de code html avec la balise img">
                <br>
                <a class="liensites" href="https://www.w3schools.com/tags/tag_img.asp" 
                target="https://www.w3schools.com/tags/tag_img.asp" 
                onclick="https://www.w3schools.com/tags/tag_img.asp">
                w3schools.com/tags/tag_img.asp</a>
                <a class="liensites" href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/img" 
                target="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/img" 
                onclick="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/img">
                developer.mozilla.org/en-US/docs/Web/HTML/Element/img</a>
                <br>
            </div>

            <form class ="boutonsuivant" action="balisebutton.php">
                <input type="submit" value="Suivant" />
            </form>
        </div>
    </div>

    <?php include 'footer.php';?>