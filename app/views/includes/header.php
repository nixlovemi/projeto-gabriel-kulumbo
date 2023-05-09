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

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cadastrar um CV</a>
                </li>
            </ul>
        </div>
    </nav>
        <?php #require APPROOT . '/views/inc/navbar.php'; ?>
        <div class="container">