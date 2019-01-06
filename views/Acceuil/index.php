

<?php foreach ($articles as $a): ?>
    <a href="<?php echo WEBROOT;?>Acceuil/views/<?php echo $a['id_article']; ?>">
        <h2 class="post-title"><?php echo $a['titre']; ?></h2>
    </a>
    <p class="post-meta"><?php echo $a['date_publication'] ?></p>
    <hr>
<?php endforeach ?>



