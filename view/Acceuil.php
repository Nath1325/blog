
<!---------------- Header ------------------->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog - Start Bootstrap Theme</title>




    <!-- Bootstrap core CSS -->
    <link href="style/endor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Kalam|Londrina+Solid|Montserrat:700|Timmana" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="style/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="style/css/clean-blog.min.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>


    <!---------------- Materiel design for Bootstrap ------------------->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="style/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="style/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="style/css/style.css" rel="stylesheet">
    <link href="style/css/monCSS.css" rel="stylesheet">

</head>

<body>
<!---------------- Navigation ------------------->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">A propos</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
        </ul>
        <?php if(isset($_SESSION['login'])) {
            echo '<div class="dropdown">';
            echo '<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-left: 40px">';
            echo $_SESSION['login'];
            echo '</button>';
            echo '<div class="dropdown-menu dropdown-primary">';
            echo '<a class="dropdown-item" href="index.php?action=poster">Post new article</a>';
            echo '<a href="index.php?action=logout" class="dropdown-item" href="#">Logout</a>';
            echo'</div>';
            echo'</div>';
        }
        else {
            echo '<a href="index.php?action=connection">';
            echo '<button type="button" href="index.php?action=connection" class="btn btn-primary">Admin Connection</button>';
            echo '</a>';
        }
        ?>
    </div>
</nav>


<!---------------- Content ------------------->

<header class="position-relative overflow-hidden p-5 p-md-5 text-center " style="background-image: url(ressources/background.jpg); height: 100%; background-repeat: no-repeat; background-size: cover; background-position:65% 35% ;display::block;" >
    <div class="col-md-5 p-lg-5 mx-auto my-5 ">
        <h1 class="display-4 font-weight-normal" style="color: white" >Blog</h1>

    </div>
</header>

<div class="container" style="margin-top: 100px">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-preview">
                <?php foreach ($articles as $a): ?>
                    <a href="index.php?action=showArticle&article=<?php echo $a['id_article']; ?>">
                        <h2 class="post-title"><?php echo $a['titre']; ?></h2>
                    </a>

                    <p class="post-meta"><?php echo $a['date_publication']; ?></p>
                    <hr>
                <?php endforeach ?>
            </div>

        </div>
    </div>
</div>


<!---------------- Footer ------------------->

<footer class="page-footer font-small bg-dark pt-4" style="margin-top: 100px">
    <div class="container">
        <div class="footer-copyright text-center py-3"> created by :
            <a href="https://mdbootstrap.com/education/bootstrap/"> Nathan & Mehdi</a>
        </div>
</footer>

<script type="text/javascript" src="style/js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="style/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="style/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="style/js/mdb.min.js"></script>
<script src="js/clean-blog.min.js"></script>
</body>
</html>