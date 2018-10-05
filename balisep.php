<?php 
    $pagetitle= 'Introduction au html : balise p';
    include 'header.php';
?>

    <div id="style_page">

        <div class="gauche">
            <!-- block gris foncé -->
        </div>

        <div class="contenu">
            <div class="titres">
                <h2>Balises Particulières : <span>balise &#8249;p&#8250;&#8249;/p&#8250;</span></h2>
            </div>
            <div class="def">
                <p>&#8249;p&#8250;&#8249;/p&#8250;</p>
                <p>p est l'abréviation pour paragraphe.</p>
                <p>C'est une balise de type block, elle entoure un bloc de texte et provoque obligatoirement un retour à la ligne.Pour sauter une ligne on utilisera une balise orpheline &#8249;br/&#8250; qu’on ajoutera après la balise fermée &#8249;/p&#8250;</p>
                <p>Elle est dite de type paire.</p>
                <p>On l'insert dans les balises paticulières ou de type block et à chaque traitement de texte.</p>
                <p>Cette balise permet d’écrire le texte à l’intérieur et de le délimiter. Pour décaler le texte on utilisera ensuite le CSS.</p>
                <br>
                <p id="txtavimg">Voici un exemple de la balise utilisée dans un script html :</p>
                <img class="capexemple" src="p.PNG" alt="image provenant de w3c">
                <br>
                <a class="liensites" href="https://www.w3schools.com/tags/tag_p.asp" target="https://www.w3schools.com/tags/tag_p.asp" onclick="www.monsite.fr">https://www.w3schools.com/tags/tag_p.asp</a>               
                <br>
                <a class="liensites" href="https://developer.mozilla.org/fr/docs/Web/HTML/Element/p" target="https://developer.mozilla.org/fr/docs/Web/HTML/Element/p" onclick="www.monsite.fr">https://developer.mozilla.org/fr/docs/Web/HTML/Element/p</a>
                <a class="liensites" href="https://openclassrooms.com/fr/" target="https://openclassrooms.com/fr/" onclick="www.monsite.fr">https://openclassrooms.com/fr/</a>
                <br/>
            </div>

            <form class ="boutonsuivant" action="balisehtml.html">
                <input type="submit" value="Suivant" />
            </form>

        </div>
    </div>

    <?php include 'footer.php';?>