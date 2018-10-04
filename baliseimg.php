<?php include 'introheader.php';?>
<title>Introduction au html : balise img</title>
<?php include 'header.php';?>

    <div id="style_page">

        <div class="gauche">
            <!-- block gris foncé -->
        </div>

        <div class="contenu">
            <div class="titres">
                <h2>Balises Particulières : <span>balise &#8249;img&#8250;</span></h2>
            </div>
            <div class="def">
                <p>nom de la balise &#8249;img&#8250;</p>
                <p>La balise video est une balise inline.</p>
                <p>C'est une balise orpheline.</p>
                <p>Elle est située dans le body du document html.</p>
                <p>La balise img permet d'intégrer une image à du code html. Tous les navigateurs 
                    ne supportent pas nécessairement les mêmes formats d'image. Voici la liste les 
                    formats supportés par les navigateurs principaux.
                    <a href="https://en.wikipedia.org/wiki/Comparison_of_web_browsers#Image_format_support" 
                    target="https://en.wikipedia.org/wiki/Comparison_of_web_browsers#Image_format_support"
                    onclick="https://en.wikipedia.org/wiki/Comparison_of_web_browsers#Image_format_support"></a>
                </p>
                <p>De la même manière que la balise img, il faut utiliser l'attribut src="" 
                    pour spécifier la source. les attributs width et height sont souvent
                    utilisés pour définir la taille de l'élément sur la page.Tout ce qui est 
                    écrit à l'intérieur des balises s'affichera si la video ne peut pas être lue 
                    par le navigateur. Voici la première version de chaque navigateur qui supporte 
                    la balise video:
                </p>
                <br>
                    <img src="suppbalisevideo.PNG" alt="chrome: 4.0   edge : 9.0   firefox : 3.5    safari : 4.0    opera : 10.5">
                <br>
                    <p id="txtavimg">Voici un exemple de la balise utilisée dans un script html :</p>
                    <img src="videotag.png" alt="image provenant de w3c montrant un exemple de code html avec la balise video">
                <br>
                <a class="liensites" href="https://www.w3schools.com/tags/tag_video.asp" 
                target="https://www.w3schools.com/tags/tag_video.asp" 
                onclick="https://www.w3schools.com/tags/tag_video.asp">
                w3schools.com/tags/tag_video.asp</a>
                <a class="liensites" href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/video" 
                target="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/video" 
                onclick="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/video">
                developer.mozilla.org/en-US/docs/Web/HTML/Element/video</a>
                <br>
            </div>

            <form class ="boutonsuivant" action="balisea.php">
                <input type="submit" value="Suivant" />
            </form>
        </div>
    </div>

    <?php include 'footer.php';?>