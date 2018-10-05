<?php 
    $pagetitle= 'Introduction au html : balise div';
    include 'header.php';
?>



    <div id="style_page">

        <div class="gauche">
            <!-- block gris foncé -->
        </div>

        <div class="contenu">
            <div class="titres">
                <h2>Balises Particulières : <span>balise &#8249;div&#8250;</span></h2>
            </div>
            <div class="def">
                <p>&#8249;div&#8250;&#8249;/div&#8250;</p>
                <p>Div est l'abrévation de division.</p>
                <p>C'est une balise de type block, elle entoure un bloc de texte et provoque obligatoirement un retour à la ligne.<br/>
                Mais contrairement aux balises sémantiques de type block qui peuvent contenir seulement des balises inlines, la balise div,
                 peut contenir des balises inlines ou block. Son équivalent de type inline est la balise <span class="attributciter">&#8249;span&#8250;&#8249;/span&#8250;</span> </p>
                <p>La balise div est dite de type paire.</p>
                <p>Etant universelle, on peut l'insérer où l'on veut dans la page html. Elle doit être utilisée quand aucunes autres balises ne sont appropriées. </p>
                <p>Elle sert à délimiter un paragraphe pour l’identifier et changer son style.</p>
                <p>Pour pouvoir la cibler en CSS (Cascading Style Sheets ou feuille de style), on lui attribut un id (si l’élément est unique) ou un attribut class. </p>
                <br>
                <p id="txtavimg">Voici un exemple de la balise utilisée dans un script html :</p>
                <img class="capexemple" src="div.PNG" alt="image provenant de w3c">
                <br>
                <a class="liensites" href="https://www.w3schools.com/tags/tag_div.asp" target="https://www.w3schools.com/tags/tag_div.asp" onclick="www.monsite.fr">https://www.w3schools.com/tags/tag_div.asp</a>
                <br>
                <a class="liensites" href="https://developer.mozilla.org/fr/docs/Web/HTML/Element/div" target="https://developer.mozilla.org/fr/docs/Web/HTML/Element/div" onclick="www.monsite.fr">https://developer.mozilla.org/fr/docs/Web/HTML/Element/div</a>
                <a class="liensites" href="https://openclassrooms.com/fr/" target="https://openclassrooms.com/fr/" onclick="www.monsite.fr">https://openclassrooms.com/fr/</a>
                <br>
            </div>

            <form class ="boutonsuivant" action="baliseul.php">
                <input type="submit" value="Suivant" />
            </form>

        </div>
    </div>

    <?php include 'footer.php';?>