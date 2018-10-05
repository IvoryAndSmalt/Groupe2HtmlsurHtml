<?php 
    $pagetitle= 'Introduction au html : balise ul';
    include 'header.php';
?>

    <div id="style_page">

        <div class="gauche">
            <!-- block gris foncé -->
        </div>

        <div class="contenu">
            <div class="titres">
                <h2>Balises Particulières : <span>balise &#8249;ul&#8250;&#8249;/ul&#8250;</span></h2>
            </div>
            <div class="def">
                <p>&#8249;ul&#8250;&#8249;/ul&#8250;</p>
                <p>C'est une balise de type block, elle entoure un bloc de texte et provoque obligatoirement un retour à la ligne.</p>
                <p>Elle est dite de type paire.</p>
                <p>On l'insert dans les balises paticulières ou de type block.</p>
                <p>La balise ul délimite une liste sans notion d'ordre sous forme de puce. Il est possible de modifier les puces avec le CSS (Cascading Style Sheets), ainsi que l'indentation de la liste</p>
                <p>On l'associe avec la balise <span class="attributciter">&#8249;li&#8250;&#8249;/li&#8250;</span></p>
                <br>
                <p id="txtavimg">Voici un exemple de la balise utilisée dans un script html :</p>
                <img class="capexemple" src="ul.PNG" alt="image provenant de w3c">
                <br>
                <a class="liensites" href="https://www.w3schools.com/tags/tag_ul.asp" target="https://www.w3schools.com/tags/tag_ul.asp" onclick="www.monsite.fr">https://www.w3schools.com/tags/tag_ul.asp</a>
                <br>
                <a class="liensites" href="https://developer.mozilla.org/fr/docs/Web/HTML/Element/ul" target="https://developer.mozilla.org/fr/docs/Web/HTML/Element/ul" onclick="www.monsite.fr">https://developer.mozilla.org/fr/docs/Web/HTML/Element/ul</a>
                <a class="liensites" href="https://openclassrooms.com/fr/" target="https://openclassrooms.com/fr/" onclick="www.monsite.fr">https://openclassrooms.com/fr/</a>
                <br/>
            </div>

            <form class ="boutonsuivant" action="baliseli.php">
                <input type="submit" value="Suivant" />
            </form>

        </div>
    </div>

    <?php include 'footer.php';?>