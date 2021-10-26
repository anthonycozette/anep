<?php
while ($donnees = $req->fetch()) {
?>
    <div class="news">
        <h3>
            <?php echo htmlspecialchars($donnees['service']); ?>
        </h3>

        <p>
            <?php
            echo nl2br(htmlspecialchars($donnees['service']));
            ?>
            <br />
            <em><a href="#">Commentaires</a></em>
        </p>
    </div>
<?php
}
$req->closeCursor();
?>