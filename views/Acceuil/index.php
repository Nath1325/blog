
<!---------------- Header ------------------->

<header style="background: lightgray" class="position-relative overflow-hidden p-5 p-md-5 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 font-weight-normal">Blog</h1>
        <p class="lead font-weight-normal"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis massa et sapien porta condimentum ut ut mauris. Donec quis eros metus. </p>
    </div>
</header>

<br>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-preview">
                <?php foreach ($articles as $a): ?>
                    <a href="<?php echo WEBROOT;?>Acceuil/views/<?php echo $a['id_article']; ?>">
                        <h2 class="post-title"><?php echo $a['titre']; ?></h2>
                    </a>
                    <p class="post-meta"><?php echo $a['date_publication'] ?></p>
                    <hr>
                <?php endforeach ?>
            </div>

        </div>
    </div>
</div>



