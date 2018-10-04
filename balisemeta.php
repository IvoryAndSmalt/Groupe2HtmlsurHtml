<?php 
    $pagetitle= 'Introduction au html : balise meta';
    include 'header.php';
?>

    <div id="style_page">

        <div class="gauche">
            <!-- block gris foncé -->
        </div>

        <div class="contenu">
            <div class="titres">
                <h2>Balises Particulières : <span>balise &#8249;meta&#8250;</span></h2>
            </div>
            <div class="def">
                <p>&#8249;meta&#8250;</p>
                <p>"meta" vient de metadata (métadonnées en français)</p>
                <p>Il s'agit d'une balise particulière, pas tout à fait un block ou inline.</p>
                <p>C'est une balise orpheline, donc sans balise sortante.</p>
                <p>Elle se situe dans la balise &#8249;head&#8250;</p>
                <p>La balise meta renseigne les métadonnées du document html qui ne sont pas déjà
                    définies par d'autres balises, comme &#8249;title&#8250;. Elle sert à renseigner
                    les moteurs de recherche et les navigateurs sur comment utiliser la page web.
                </p>
                <p>les attributs name="description" content="contenu", ou encore charset="utf-8" sont
                    des attributs fréquemment utilisés. <br>Pour une liste plus exhaustive, cliquez 
                    <a href="https://gist.github.com/kevinSuttle/1997924" target="https://gist.github.com/kevinSuttle/1997924"
                    class="liengithubmeta">ici</a>.
                </p>
                <br>
                <p id="txtavimg">Voici un exemple de la balise utilisée dans un script html :</p>
                <img class="capexemple" src="capturew3cmeta.PNG" alt="image provenant de w3c">
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