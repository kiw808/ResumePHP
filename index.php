<!doctype html>
<html lang="en">

<!-- Head -->
<?php
$style = 'index';
$title = 'Resume Intro';
$nav = 'index';
require('_head.php');
?>

<body>
    <!-- Sidebar menu -->
    <?php require('_header.php'); ?>

    <!-- Main content -->
    <div class="page-content">
        <section class="main-content">
            <div class="trombi">
                <img src="img/mrBeanTrombi.jpg">
            </div>
            <div class="intro-title">
                <p>Hello, I'm</p>
                <h2>Rowan Atkinson</h2>
                <p>a.k.a. Mr. Bean</p>
            </div>
            <div class="intro content">
                <p>
                    Welcome to my resume, you are pleased to browse freely, and don't hesitate to write me a message indeed !
                </p>
                <p>To get news about me just subscribe in the field below.</p>
            </div>
            <div class="mail-sub content">
                <form class="sub-form" action="" method="post">
                    <label for="mail-sub" class="form-item">Subscribe for updates</label>
                    <input type="email" class="form-item" id="mail-sub" name="mail-sub" size="50" placeholder="Your e-mail">
                    <button type="submit" class="form-item">Submit</button>
                </form>
            </div>
        </section>

        <!-- Footer -->
        <?php require('_footer.php'); ?>
    </div>

<!-- Scripts -->
<script src="https://kit.fontawesome.com/1ef8454837.js" crossorigin="anonymous"></script>
</body>
</html>