<?php 
    $pagetitle= 'Introduction au html : balise body';
    include 'header.php';
?>

    <div id="style_page">

        <div class="gauche">
            <!-- block gris foncé -->
        </div>

        <div class="contenu">
            <div class="titres">
                <h2>Balises Block: <span>balise &#8249;body&#8250;</span></h2>
            </div>
            <div class="def">
                <p>Nom de la balise &#8249;body&#8250;</p>
                <p>La balise body est une balise block.</p>
                <p>Elle définit le corps du document..</p>
                <p>Elle est située dans le document html.</p>
                <p>La balise &#8249;body&#8250; contient généralement plusieurs balises comme
                les balises header, p ou footer</p>
                <p> On y retrouve du texte, des liens, des images, des tableaux, des listes, etc.
                Visuellement il correspond donc au cadre complet rendant l'affichage des pages du navigateur.</p>
                <br>
                <p>Il est possible de lui appliquer des styles de mise en forme, 
                les plus fréquents étant l'espacement par rapport à la bordure du cadre "margin", 
                l'image ou la couleur de fond ou encore la police de caractère à employer par défaut dans le document.</p> 

                <br>
                    <p id="txtavimg">Voici un exemple de la balise utilisée dans un script html :</p>
                    <img src="footertag.png" alt="image provenant de w3c montrant un exemple de code html avec la header">
                <br>
                <a class="liensites" href="https://www.w3schools.com/tags/tag_body.asp" 
                target="https://www.w3schools.com/tags/tag_body.asp" 
                onclick="https://www.w3schools.com/tags/tag_body.asp">
                https://www.w3schools.com/tags/tag_body.asp</a>
                <a class="liensites" href="http://www.startyourdev.com/html/tag-html-balise-body" 
                target="http://www.startyourdev.com/html/tag-html-balise-body" 
                onclick="http://www.startyourdev.com/html/tag-html-balise-body">
                http://www.startyourdev.com/html/tag-html-balise-body</a>
                <br>
            </div>

            <form class ="boutonsuivant" action="balisea.php">
                <input type="submit" value="Suivant" />
            </form>
        </div>
    </div>

    <?php include 'footer.php';?>