<!doctype html>
<html lang="en">
<head>

    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- CSS perso -->
    <link rel="stylesheet" href="css/navBar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/contact.css">

    <title>Mon CV</title>
</head>
<body>

<!-- Injection du header -->
<?php include("_header.php"); ?>

<div class="JK-container">

    <div class="description">
        <h2>Contact</h2>
        <h3>Mr Bean</h3>
        <div class="adresse">
            <p class="return">
                372-374 Seven Sisters Road
            </p>
            <p class="return">
                Highbury
            </p>
            <p class="return">
                London
            </p>
        </div>
        <div class="telNum">
            <p class="return">
                Tel: 123-456-789
            </p>
            <p class="return">
                Fax: 123-456-789
            </p>
        </div>
        <div class="socialMedia">
            <a href="https://www.facebook.com/"><img class="imgSocial" src="img/FaceBook.png" alt="Logo FaceBook"></a>
            <a href="https://twitter.com/"><img class="imgSocial" src="img/Twitter.png" alt="Logo Twitter"></a>
            <a href="https://www.instagram.com/"><img class="imgSocial" src="img/Insta.png" alt="Logo Instagram"></a>
        </div>
    </div>

    <!-- Injection du form -->
    <?php include("_form.php"); ?>

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