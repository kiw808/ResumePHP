<!doctype html>
<html lang="en">

<!-- Head -->
<?php
$style = 'contact';
$title = 'Contact';
$nav = 'contact';
require('_head.php');
?>
<body>

    <!-- Side menu -->
    <?php require("_header.php"); ?>

    <!-- Main content -->
    <div class="page-content">
        <section class="main-content">
            <!-- Form -->
            <?php include("_form.php"); ?>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['send-message'])) {
                include("formFeedback.php");
            }
            ?>
        </section>
        <!-- Footer -->
        <?php require("_footer.php"); ?>
    </div>

<!-- Scripts -->
<script src="https://kit.fontawesome.com/1ef8454837.js" crossorigin="anonymous"></script>

</body>
</html>