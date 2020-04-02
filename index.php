<!doctype html>
<html lang="en">

<!-- Head -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mr. Bean - Resume</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">

    <!-- CSS  -->
    <link rel="stylesheet" href="./src/css/style.css">
    <link rel="stylesheet" href="./src/css/sideMenu.css">
    <?php
    if (isset($_GET['page'])) {
        echo '<link rel="stylesheet" href="./src/css/' . $_GET['page'] . '.css">';
    }
    else {
        echo '<link rel="stylesheet" href="./src/css/intro.css">';
    }
    ?>
    <link rel="stylesheet" href="./src/css/footer.css" >

</head>


<body>
    <!-- Sidebar menu -->
    <?php require_once('./src/views/layout/sideMenu.php'); ?>

    <!-- Page content -->
    <div class="page-content">
        <!-- Main content -->
        <section class="main-content">
            <?php
            if (isset($_GET['page'])) {
                if ($_GET['page'] == 'intro') {
                    include ('./src/views/pages/intro.php');
                }
                elseif ($_GET['page'] == 'experience') {
                    include ('./src/views/pages/experience.php');
                }
                elseif ($_GET['page'] == 'hobbies') {
                    include ('./src/views/pages/hobbies.php');
                }
                else {
                    include ('./src/views/pages/contact.php');
                }
            }
            else {
                include ('./src/views/pages/intro.php');
            }
            ?>
        </section>

        <!-- Footer -->
        <?php require_once('./src/views/layout/footer.php'); ?>
    </div>

<!-- Scripts -->
<script src="https://kit.fontawesome.com/1ef8454837.js" crossorigin="anonymous"></script>
</body>
</html>