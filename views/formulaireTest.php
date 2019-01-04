<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link href="css/clean-blog.min.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!---------------- Materiel design for Bootstrap ------------------->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">

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
                    <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">A propos</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-sm btn-outline-white my-2 my-sm-0 " type="Search">Se connecter / S'inscrire</button>
            </form>
        </div>
    </nav>

<!---------------- Header ------------------->

    <header style="background-image: url('image/nebula.jpg')" class="position-relative overflow-hidden p-5 p-md-5 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 font-weight-normal text-white bg-dark">Blog</h1>
            <p class="lead font-weight-light text-black bg-white"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis massa et sapien porta condimentum ut ut mauris. Donec quis eros metus. </p>
        </div>
    </header>

<!---------------- Content ------------------->

<!-- Default form register -->


<form action="formulaireTest.php" method="POST">
    <p class="h4 mb-4">AJOUTER ARTICLE : </p>
    <p>Titre: <input type="text" name="titre" /></p>
    <p>Article: <input type="text" name="article" /></p>
    <p>Date: <input type="date" name="date" /></p>
    <p>Id Auteur: <input type="text" name="id_user" /></p>
    <p><input type="submit" value="OK"></p>
</form>

<br>
<br>
<p>ATTENTION PHP !</p>
<br>
<?php
echo $_POST['titre'];
echo $_POST['article'];
echo $_POST['date'];
echo $_POST['id_user'];
?>




<!--
<form class="text-center border border-light p-5">

        <p class="h4 mb-4">AJOUTER ARTICLE : </p>

    <div class="form-row mb-4">
        <div class="col">

            <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Titre">
        </div>
        <div class="col">
            <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Article :">
        </div>
    </div>
    <input type="date" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="Date">


    <input type="date" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="Id User">

    <button class="btn btn-info my-4 btn-block" type="submit">AJOUTER</button>




</form>
-->
<!-- Default form register -->



<!---------------- Footer ------------------->
    <br>
    <br>
    <br>
    <br>
    <footer class="page-footer font-small elegant-color-dark pt-4">
        <div class="container">
            <ul class="list-unstyled list-inline text-center">
                <li class="list-inline-item">
                    <a class="btn-floating btn-fb mx-3">
                        <i class="fa fa-facebook"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-tw mx-3">
                        <i class="fa fa-twitter"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-gplus mx-3">
                        <i class="fa fa-google-plus"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-li mx-3">
                        <i class="fa fa-linkedin"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-dribbble mx-3">
                        <i class="fa fa-dribbble"> </i>
                    </a>
                </li>
            </ul>
            <br>
            <br>
            <div class="footer-copyright text-center py-3"> created by :
                <a href="https://mdbootstrap.com/education/bootstrap/"> Nathan & Mehdi</a>
            </div>
    </footer>

</body>
</html>

