<?php 
    $pagetitle= 'Introduction au html : balise html';
    include 'header.php';
?>

    <div id="style_page">

        <div class="gauche">
            <!-- block gris foncé -->
        </div>

        <div class="contenu">
            <div class="titres">
                <h2>Balises Particulières : <span>balise &#8249;html&#8250;</span></h2>
            </div>
            <div class="def">
                <p>&#8249;html&#8250;</p>
                <p>HTML signifie HyperText Markup Language</p>
                <p>Il s'agit d'une balise particulière, pas tout à fait un block ou inline.</p>
                <p>Elle est composée d'une balise entrante et sortante</p>
                <p>Elle est située en-dessous de la définition du DOCTYPE, et englobe ‹head› et ‹body›</p>
                <p>La balise ‹html› est la racine d'un document html. les autres balises seront donc descendantes de celle-ci. 
                    Elle sert à délimiter le document html.
                </p>
                <p>Aucun attribut n'est nécessaire à cette balise. Elle supporte toutefois tous les attributs universels. On lui 
                    attribue habituellement l'attribut "lang". exemple : ‹html lang="fr"› 
                </p>
                <br>
                <p id="txtavimg">Voici un exemple de la balise utilisée dans un script html :</p>
                <img class="capexemple" src="Capturew3cbalisehtml.png" alt="image provenant de w3c">
                <br>
                <a class="liensites" href="https://www.w3schools.com/html/html_elements.asp" 
                target="https://www.w3schools.com/html/html_elements.asp" 
                onclick="https://www.w3schools.com/html/html_elements.asp">
                https://www.w3schools.com/html/html_elements.asp</a>
                <a class="liensites" href="https://developer.mozilla.org/fr/docs/Web/HTML/Element/html" 
                target="https://developer.mozilla.org/fr/docs/Web/HTML/Element/html" 
                onclick="https://developer.mozilla.org/fr/docs/Web/HTML/Element/html">
                developer.mozilla.org/fr/docs/Web/HTML/Element/html</a>
                <br>
            </div>

            <form class ="boutonsuivant" action="balisemeta.php">
                <input type="submit" value="Suivant" />
            </form>
        </div>
    </div>

    <?php include 'footer.php';?>