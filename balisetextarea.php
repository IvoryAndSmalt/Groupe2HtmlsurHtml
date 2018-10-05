<?php 
    $pagetitle= 'Introduction au html : balise textarea';
    include 'header.php';
?>

    <div id="style_page">

        <div class="gauche">
            <!-- block gris foncé -->
        </div>

        <div class="contenu">
            <div class="titres">
                <h2>Balises Inlines : <span>balise &#8249;textarea&#8250;</span></h2>
            </div>
            <div class="def">
                <p>nom de la balise &#8249;textarea&#8250;</p>
                <p>L'élement HTML &#8249;textarea&#8250; signifie en français la zone de texte.</p>
                <p>Elle représente donc un contrôle qui permet d'éditer du texte sur plusieurs lignes.
                C'est une balise de type inline car elle ne forme pas de block particulier lors de sa création. C'est une balise par paire.</p>
                <p>La balise textarea fait partie des éléments utilisés au sein des formulaires &#8249;form&#8250; afin de récupérer des informations clients.
                Contrairement à la balise &#8249;input type="text" /&#8250;, la balise textarea permet de contrôler la hauteur et l'apparence de la zone de texte grâce à ses attributs cols et rows notamment.</p>
                <p>Il est aussi possible de lui appliquer les styles CSS classiques de mise en forme du texte.</p> 
                <p>Elle peut supporter un nombre de caractères illimités et utilise généralement par défaut une police de caractère de taille fixe (courrier).</p>

                <br>

                <p>Voici quelques attributs optionnels pour la balise textarea :</p>
                <br> <ul>
                    <li>Cols : Détermine le nombre de caractères affichés par ligne dans le textarea</li>
                    <li>Disabled : Vérouille la zone de texte la rendant grisée et non saisissable</li>
                    <li>Readonly : Rend la zone non modifiable mais ne change pas son apparence</li>
                    <li>Rows: Indique le nombre de ligne visible de la textarea</li>
                    <li>Wrap : Détermine si les retours à la ligne se font automatiquement (hard / soft) ou si une scrollbar horizontale apparait en cas de dépassement (off)</li>
                    </ul>
                   
                <p id="txtavimg">Voici un exemple de la balise utilisée dans un script html :</p>
                <img class="capexemple" img src="capturetextarea.jpg" alt="image provenant de w3c textarea"> 
                <br>
                <p>Pour plus de détails et retrouver la liste compléte des propriétés textarea rendez-vous sur :</p>
                <a class="liensites" href="https://www.w3schools.com/tags/tag_textarea.asp" target="http://www.monsite.fr" 
                onclick="https://www.w3schools.com/tags/tag_textarea.asp">https://www.w3schools.com/tags/tag_textarea.asp
                <br>
            </div>

            <form class ="boutonsuivant" action="balisehtml.html">
                <input type="submit" value="Suivant">
            </form>

        </div>
    </div>

    <?php include 'footer.php';?>