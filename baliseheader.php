<?php 
    $pagetitle= 'Introduction au html : balise header';
    include 'header.php';
?>

    <div id="style_page">

        <div class="gauche">
            <!-- block gris foncé -->
        </div>

        <div class="contenu">
            <div class="titres">
                <h2>Balises Block: <span>balise &#8249;header&#8250;</span></h2>
            </div>
            <div class="def">
                <p>nom de la balise &#8249;header&#8250;</p>
                <p>La balise header est une balise block.</p>
                <p>C'est une balise paire.</p>
                <p>Elle est située dans le body du document html.</p>
                <p>La balise &#8249;header&#8250; est utilisée pour décrire l'en tête d'un document ou d'une section et est censée contenir les titres, le logo, 
                et des informations importantes de la page. </p>
                <p>
                </p>
                <br>
                    <img src="suppbaliseheader.png" alt="support de header sur chrome: 6.0   edge : 9.0   firefox : 4.0    safari :5.0    opera : 11.1">
                <br>
                    <p id="txtavimg">Voici un exemple de la balise utilisée dans un script html :</p>
                    <img src="tagheader.png" alt="image provenant de w3c montrant un exemple de code html avec la header">
                <br>
                <a class="liensites" href="https://www.w3schools.com/tags/tag_header.asp" 
                target="https://www.w3schools.com/tags/tag_header.asp" 
                onclick="https://www.w3schools.com/tags/tag_header.asp">
                https://www.w3schools.com/tags/tag_header.asp</a>
                <a class="liensites" href="http://www.startyourdev.com/html/tag-html-balise-header" 
                target="http://www.startyourdev.com/html/tag-html-balise-header" 
                onclick="http://www.startyourdev.com/html/tag-html-balise-header">
                http://www.startyourdev.com/html/tag-html-balise-header</a>
                <br>
            </div>

            <form class ="boutonsuivant" action="balisea.php">
                <input type="submit" value="Suivant" />
            </form>
        </div>
    </div>

    <?php include 'footer.php';?>