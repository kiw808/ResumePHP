<head>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/_header.css">
    <?php
    if (isset($style)) {
        echo '<link rel="stylesheet" href="css/' . $style . '.css">';
    }
    ?>
    <link rel="stylesheet" href="css/_footer.css">

    <title>
    <?php
    if (isset($title)) {
        echo $title;
    } else { ?>
        Mr. Bean - Resume
        <?php
    }
    ?>
    </title>
</head>
