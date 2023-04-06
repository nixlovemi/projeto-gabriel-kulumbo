<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            <?php
            $title = (VIEW_TITLE !== '') ? VIEW_TITLE . ' | ': '';
            echo sprintf('%s%s', $title, SITENAME);
            ?>
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="<?= URLROOT; ?>css/bootstrap-4.0.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= URLROOT; ?>css/fontawesome-free-6.4.0-web/css/all.min.css">
        <link rel="stylesheet" href="<?= URLROOT; ?>/css/style.css">
    </head>
    <body>
        <?php #require APPROOT . '/views/inc/navbar.php'; ?>
        <div class="container">