<?php include 'introheader.php';?>
<title>Introduction au html : balise video</title>
<?php include 'header.php';?>

    <div id="style_page">

        <div class="gauche">
            <!-- block gris foncé -->
        </div>

        <div class="contenu">
            <div class="titres">
                <h2>Balises Particulières : <span>balise &#8249;video&#8250;</span></h2>
            </div>
            <div class="def">
                <p>nom de la balise &#8249;video&#8250;</p>
                <p>La balise video est une balise block.</p>
                <p>Elle est composée d'une balise entrante et sortante</p>
                <p>Elle est située dans le body du document html.</p>
                <p>La balise video permet d'intégrer un fichier video à du code html. 
                    Actuellement, les formats video supportés sont mp4, WebM et ogg.
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