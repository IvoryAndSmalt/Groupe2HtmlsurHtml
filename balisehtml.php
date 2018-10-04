<?php include 'introheader.php';?>
<title>Introduction au html : balise html</title>
<?php include 'header.php';?>

    <div id="style_page">

        <div class="gauche">
            <!-- block gris foncé -->
        </div>

        <div class="contenu">
            <div class="titres">
                <h2>Balises Particulières : <span>balise &#8249;html&#8250;</span></h2>
            </div>
            <div class="def">
                <p>nom de la balise &#8249;html&#8250;</p>
                <p>HTML signifie HyperText Markup Language</p>
                <p>Il s'agit d'une balise particulière, pas tout à fait un block ou inline.</p>
                <p>Elle est composée d'une balise entrante et sortante</p>
                <p>Elle est située en-dessous de la définition du DOCTYPE, et englobe ‹head› et ‹body›</p>
                <p>La balise ‹html› est la racine d'un document html. les autres balises seront donc descendantes de celle-ci. 
                    Elle sert à délimiter le document html.
                </p>
                <p>Aucun attribut n'est nécessaire à cette balise. Elle supporte toutefois tous les attributs universels on lui 
                    attribue habituellement l'attribut "lang". exemple : ‹html lang="fr"› 
                </p>
                <br>
                <p id="txtavimg">Voici un exemple de la balise utilisée dans un script html :</p>
                <img class="capexemple" src="Capturew3cbalisehtml.PNG" alt="image provenant de w3c">
                <br>
                <a class="liensites" href="https://www.w3schools.com/tags/tag_meta.asp" target="https://www.w3schools.com/tags/tag_meta.asp" onclick="https://www.w3schools.com/tags/tag_meta.asp">w3schools.com/tags/tag_meta.asp</a>
                <a class="liensites" href="https://developer.mozilla.org/fr/docs/Web/HTML/Element/meta" target="https://developer.mozilla.org/fr/docs/Web/HTML/Element/meta" onclick="https://developer.mozilla.org/fr/docs/Web/HTML/Element/meta">developer.mozilla.org/fr/docs/Web/HTML/Element/meta</a>
                <br>
            </div>

            <form class ="boutonsuivant" action="balisehead.php">
                <input type="submit" value="Suivant" />
            </form>
        </div>
    </div>

    <?php include 'footer.php';?>