<?php include 'introheader.php';?>
<title>Page type</title>
<?php include 'header.php';?>

    <div id="style_page">

        <div class="gauche">
            <!-- block gris foncé -->
        </div>

        <div class="contenu">
            <div class="titres">
                <h2>Balises Particulières : <span>balise &#8249;a&#8250;&#8249;/a&#8250;</span></h2>
            </div>
            <div class="def">
                <p>&#8249;a&#8250;&#8249;/a&#8250;</p>
                <p>a est l'abréviation pour ancre ou anchor en anglais.</p>
                <p>C'est une balise de type inline, elle se place en ligne dans une balise block et ne provoque pas de retour à la ligne.</p>
                <p>La balise a est dite de type paire.</p>
                <p>On l'insert dans les balises paticulières ou de type block.</p>
                <p>Cette balise permet de faire un lien entre les pages ou vers un autre site. Il existe 2 types de lien : le lien absolu et le lien relatif.</p>
                <p>On l'associe avec  l'attribut id et href pour récupérer une balise précise et créer un lien, target pour « forcer » l’ouverture d’un lien dans une nouvelle fenêtre ou title pour afficher une infobulle au survol du lien.</p>
                <br>
                <p id="txtavimg">Voici un exemple de la balise utilisée dans un script html :</p>
                <img class="capexemple" src="a.PNG" alt="image provenant de w3c">
                <br>
                <a class="liensites" href="https://www.w3schools.com/tags/tag_a.asp" target="https://www.w3schools.com/tags/tag_a.asp" onclick="www.monsite.fr">https://www.w3schools.com/tags/tag_a.asp</a>               
                <br>
                <a class="liensites" href="https://developer.mozilla.org/fr/docs/Web/HTML/Element/a" target="https://developer.mozilla.org/fr/docs/Web/HTML/Element/a" onclick="www.monsite.fr">https://developer.mozilla.org/fr/docs/Web/HTML/Element/a</a>
                <a class="liensites" href="https://openclassrooms.com/fr/" target="https://openclassrooms.com/fr/" onclick="www.monsite.fr">https://openclassrooms.com/fr/</a>
                <br/>
            </div>

            <form class ="boutonsuivant" action="balisehtml.html">
                <input type="submit" value="Suivant" />
            </form>

        </div>
    </div>

    <?php include 'footer.php';?>