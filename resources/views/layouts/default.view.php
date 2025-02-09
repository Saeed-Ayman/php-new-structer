<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta
            name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    >
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?= env('APP_NAME', 'app') ?></title>

    <link rel="stylesheet" href="/css/style.css" type="text/css">
</head>
<body>
<?php v('ui.header') ?>

<main class="bg-gray-800">
    <?= $main ?>
</main>

<?php //= $footer ?>
</body>
<?php //= $script ?>
</html>