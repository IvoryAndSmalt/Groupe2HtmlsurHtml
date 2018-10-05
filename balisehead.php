<?php 
    $pagetitle= 'Introduction au html : balise head';
    include 'header.php';
?>

    <div id="style_page">

        <div class="gauche">
            <!-- block gris foncé -->
        </div>

        <div class="contenu">
            <div class="titres">
                <h2>Balises Particulières : <span>balise &#8249;head&#8250;</span></h2>
            </div>
            <div class="def">
                <p>nom de la balise &#8249;head&#8250;</p>
                <p>La balise headest une balise partculières.</p>
                <p>C'est une balise paire.</p>
                <p>Elle est située avant le body du document html.</p>
                <p>La balise &#8249;head&#8250; est un élément qui structure le document html, 
                elle contient des informations très importantes qui aideront au référencement de la page web. </p>
                <p>De plus la balise &#8249;head&#8250; contient d'autres informations, telles que les balises &#8249;meta&#8250;
                mais aussi les liens vers une feuille de style de CSS &#8249;link&#8250; les références aux javascript s&#8249;script&#8250; utilisés par le document
                et le titre &#8249;title&#8250; qui reste une saisie obligatoire pour tout document html et indispensable pour le navigateur.
                </p>
                <p>La balise &#8249;head&#8250; reste invisible sur le front-end de la page html.</p>
                <br>
                    <p id="txtavimg">Voici un exemple de la balise utilisée dans un script html :</p>
                    <img src="headtag.png" alt="image provenant de w3c montrant un exemple de code html avec la balise head">
                <br>
                <a class="liensites" href="https://www.w3schools.com/tags/tag_head.asp" 
                target="https://www.w3schools.com/tags/tag_head.asp" 
                onclick="https://www.w3schools.com/tags/tag_head.asp">
                https://www.w3schools.com/tags/tag_head.asp</a>
                <a class="liensites" href="http://www.startyourdev.com/html/tag-html-balise-header" 
                target="http://www.startyourdev.com/html/tag-html-balise-header" 
                onclick="http://www.startyourdev.com/html/tag-html-balise-header">
                http://www.startyourdev.com/html/tag-html-balise-header</a>
                <br>
            </div>

            <form class ="boutonsuivant" action="balisebody.php">
                <input type="submit" value="Suivant" />
            </form>
        </div>
    </div>

    <?php include 'footer.php';?>