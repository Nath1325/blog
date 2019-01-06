
<!---------------- Content ------------------->


<?php foreach ($articles as $a): ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-preview">
                    <a href="<?php echo WEBROOT;?>Acceuil/views/<?php echo $a['id_article']; ?>">
                        <h2 class="post-title"><?php echo $a['titre']; ?></h2>
                    </a>
                    <p class="post-meta"><?php echo $a['date_publication'] ?></p>
                </div>

            </div>
        </div>
    </div>
    <hr>
<?php endforeach ?>



