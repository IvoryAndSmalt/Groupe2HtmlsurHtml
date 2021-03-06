<?php 
    $pagetitle= 'Introduction au html : balise li';
    include 'header.php';
?>

    <div id="style_page">

        <div class="gauche">
            <!-- block gris foncé -->
        </div>

        <div class="contenu">
            <div class="titres">
                <h2>Balises Particulières : <span>balise &#8249;li&#8250;<span>balise &#8249;/li&#8250;</span></h2>
            </div>
            <div class="def">
                <p><span> &#8249;li&#8250;&#8249;/li&#8250;<span></p>
                <p>C'est une balise de type block, elle entoure un bloc de texte et provoque obligatoirement un retour à la ligne.</p>
                <p>Elle est dite de type paire.</p>
                <p>On l'insert dans les balises <span class="attributciter">&#8249;nav/nav&#8250;</span>, <span class="attributciter">&#8249;ul/ul&#8250;</span> ou <span class="attributciter">&#8249;ol/ol&#8250;</span></p>
                <p>Cette balise permet de structurer les informations sous forme de liste </p>
                <br/>
                <p id="txtavimg">Voici un exemple de la balise utilisée dans un script html :</p>
                <img class="capexemple" src="li.png" alt="image provenant de w3c">
                <br>
                <a class="liensites" href="https://www.w3schools.com/tags/tag_li.asp" target="https://www.w3schools.com/tags/tag_li.asp" onclick="www.monsite.fr">https://www.w3schools.com/tags/tag_li.asp</a><br/>
                <a class="liensites" href="https://developer.mozilla.org/fr/docs/Web/HTML/Element/li" target="https://developer.mozilla.org/fr/docs/Web/HTML/Element/li" onclick="www.monsite.fr">https://developer.mozilla.org/fr/docs/Web/HTML/Element/li</a>
                <a class="liensites" href="https://openclassrooms.com/fr/" target="https://openclassrooms.com/fr/" onclick="www.monsite.fr">https://openclassrooms.com/fr/</a>
                <br>
            </div>

            <form class ="boutonsuivant" action="balisehtml.html">
                <input type="submit" value="Suivant" />
            </form>

        </div>
    </div>

    <?php include 'footer.php';?>