<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/form.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Form data</title>
</head>
<body>
<div>
    <?php
        $formData = [];
        $formData = [
            'name' => $_GET['name'],
            'email' => $_GET['mail'],
            'tel' => $_GET['tel'],
            'msg' => $_GET['msg']
        ];
        var_dump($formData);
    ?>
</div>
</body>
</html>
