<?php 
    $pagetitle= 'Introduction au html : Accueil';
    include 'header.php';
?>

    <div id="style_page">

        <div class="gauche">
            <!-- block gris foncé -->
        </div>

        <div class="sujet">
            <h2><span class="attributciter">Les balises en paires &#8249;&#8250;&#8249;/&#8250;</span> </h2>
            <br>
            <p> Elles servent à délimiter un début et une fin. Ce sont des balises qui s’ouvrent et se ferment.</p>
            <br>
            <h2><span class="attributciter">Les balises orphelines &#8249;/&#8250; </span></h2>
            <br>
            <p> Elles servent à délimiter un début et une fin. Ce sont des balises qui s’ouvrent et se ferment.</p>
            <br/>
            <br/>
            <br/>
            <br/>
            <h2><span class="attributciter">Les balises block </span></h2>
            <br>
            <p> Elles sont utilisées pour regrouper des éléments sous forme de bloc et ainsi pouvoir les modifier en CSS (Cascading Style Sheets ou feuille de style). Elles provoquent obligatoirement un retour à la ligne.</p>
            <br>
            <h2><span class="attributciter">Les balises inline </span></h2>
            <br>
            <p>Signifie en ligne. Elles se trouvent obligatoirement dans une balise block et elles ne créent pas de retour à la ligne.</p>
            <br>
            <h2><span class="attributciter">Les balises particulières </span></h2>
            <br>
            <p> Elles apportent des informations sur la struture sémantique de la page html. Elles agissent comme des balises de type block.</p>
            <br/>
        </div>
    </div>

    <?php include 'footer.php';?>