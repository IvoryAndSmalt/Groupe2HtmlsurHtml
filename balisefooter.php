<?php 
    $pagetitle= 'Introduction au html : balise footer';
    include 'header.php';
?>

    <div id="style_page">

        <div class="gauche">
            <!-- block gris foncé -->
        </div>

        <div class="contenu">
            <div class="titres">
                <h2>Balises Block: <span>balise &#8249;footer&#8250;</span></h2>
            </div>
            <div class="def">
                <p>Nom de la balise &#8249;footer&#8250;</p>
                <p>La balise footer est une balise block.</p>
                <p>Elle correspond au pied de page d'un document ou d'une section.</p>
                <p>Elle est située dans le body du document html.</p>
                <p>La balise &#8249;footer&#8250; contient généralement plusieurs informations comme
                les informations sur l'auteur de la page html, les droits d'auteur, les informations de contact,
                le plan du site, les adresses et coordonnées, les retours aux liens plus haut et les documents connexes. </p>
                <p>
                On lui ajoute des propriétés sur une feuille de style CSS pour déterminer sa position, sa police d'écriture, son background..
                </p>
                <br>
                    <img src="suppbalisefooter.png" alt="support de footer sur chrome: 6.0   edge : 9.0   firefox : 4.0    safari :5.0    opera : 11.1">
                <br>
                    <p id="txtavimg">Voici un exemple de la balise utilisée dans un script html :</p>
                    <img src="footertag.png" alt="image provenant de w3c montrant un exemple de code html avec la header">
                <br>
                <a class="liensites" href="https://www.w3schools.com/tags/tag_footer.asp" 
                target="https://www.w3schools.com/tags/tag_footer.asp" 
                onclick="https://www.w3schools.com/tags/tag_footer.asp">
                https://www.w3schools.com/tags/tag_footer.asp</a>
                <a class="liensites" href="http://www.startyourdev.com/html/tag-html-balise-footer" 
                target="http://www.startyourdev.com/html/tag-html-balise-header" 
                onclick="http://www.startyourdev.com/html/tag-html-balise-footer">
                http://www.startyourdev.com/html/tag-html-balise-footer</a>
                <br>
            </div>

            <form class ="boutonsuivant" action="balisea.php">
                <input type="submit" value="Suivant" />
            </form>
        </div>
    </div>

    <?php include 'footer.php';?>