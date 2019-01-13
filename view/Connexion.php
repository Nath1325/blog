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

    <!-- Custom fonts for this template -->
    <link href="style/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="style/css/clean-blog.min.css" rel="stylesheet">

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

<!-- Default form login -->
<div class="margeConnexion">
    <form class="text-center p-5 " method="post" action="index.php?action=login">

        <p class="h4 mb-4">Sign in</p>

        <!-- Email -->
        <input type="username" name="username" class="form-control mb-4" placeholder="Username">

        <!-- Password -->
        <input type="password" name="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">

        <div class="d-flex justify-content-around">
        </div>

        <!-- Sign in button -->
        <button type="submit" class="btn btn-primary">Connection</button>


    </form>
</div>
<!-- Default form login -->

<!---------------- Footer ------------------->

<footer class="page-footer font-small elegant-color-dark pt-4 fixed-bottom">
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
</body>
</html>