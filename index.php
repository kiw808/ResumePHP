<!doctype html>
<html lang="en">
<head>

    <!--Font perso-->

    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- CSS perso -->
    <link rel="stylesheet" href="css/navBar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/index.css">

    <title>Mon CV</title>
</head>
<body>

<!-- Injection du header -->
<?php include("_header.php"); ?>

<div class="JK-container">
    <img id="JK-mrBean" src="https://cdn.pixabay.com/photo/2015/03/13/00/54/mr-bean-671027_1280.jpg" alt="Photo de MrBean">

    <div class="JK-colum">
        <div class="JK-description">
            <p>
                <img id="JK-mrBeanRespon" src="https://cdn.pixabay.com/photo/2015/03/13/00/54/mr-bean-671027_1280.jpg" alt="Photo de MrBean">
                Le personnage principal excentrique un peu lourdaud, parfois ingénieux, et souvent égoïste mais qui sait aussi se montrer affectueux (en particulier envers son ours en peluche). Il vit à Highbury, dans le nord de Londres, où il occupe un petit appartement. Il porte généralement un costume marron en tweed, une cravate rouge, un pantalon marron trop court, qu'il échangera involontairement aux vestiaires avec un pantalon plus petit, et se retrouvera avec la braguette ouverte devant la Reine ou une policière. Mr Bean est peu loquace, et s'exprime généralement en grommelant des paroles plus ou moins compréhensibles. On ne connait ni son prénom ni son métier, mais il est à plusieurs reprises suggéré (sur des lettres notamment) que son prénom est tout simplement Mr. À partir du deuxième épisode, Mr Bean tombe du ciel durant le générique, tout d'abord sur un fond blanc, puis par la suite de nuit dans une rue. À la fin de deux épisodes, il est aspiré par un rayon dans cette même rue, laissant supposer qu'il est quelqu'un de différent comme le serait un extra-terrestre, parachuté dans un monde dont il ne comprend ni ne maîtrise tous les codes.
            </p>

        </div>

        <!--Caroussel-->
        <div id="carouselExampleCaptions" class="carousel slide JK-carousel" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="https://fr.wikipedia.org/wiki/Mini_(1959-2000)#Sacr%C3%A9e_%C2%AB_S_%C2%BB" target="_blank"><img src="https://cdn.pixabay.com/photo/2013/02/21/19/08/red-84593_1280.jpg" class="d-block w-100" alt="Photo d'une mini cooper rouge"></a>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>La voiture de mes rêves</h5>
                        <p>Une mini cooper S de 2000.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <a href="https://fr.wikipedia.org/wiki/Londres" target="_blank"><img src="https://cdn.pixabay.com/photo/2014/11/13/23/34/london-530055_1280.jpg" class="d-block w-100" alt="Photo du parlement du Royaume-Uni avec vue sur la Tamise et le pont de Westminster"></a>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Ma ville</h5>
                        <p>Londre, représentée par "Big Ben".</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <a href="https://fr.wikipedia.org/wiki/Mr_Bean#Teddy" target="_blank"><img src="https://cdn.pixabay.com/photo/2016/11/18/16/16/close-up-1835598_1280.jpg" class="d-block w-100" alt="Photo de Teddy l'ours en peluche"></a>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Mon meilleur ami</h5>
                        <p>Teddy, mon seul et unique ami.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

<!-- Injection du footer -->
<?php include("_footer.php"); ?>

<!-- Scripts perso -->
<script src="https://kit.fontawesome.com/1ef8454837.js" crossorigin="anonymous"></script>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>