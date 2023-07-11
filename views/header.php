<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/all.css">
</head>
<body>
<header class="pt-0">
    <section class="">
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <a href="action.php?page=home"><img src="assets/img/logo.jpg" alt="" class="mt-0" height="200"></a>
                </div>
            </div>
        </div>
    </section>
    <nav class="navbar navbar-expand pt-0 bg-info">
        <div class="container-fluid">
            <div class="row mx-auto">
                <div class="col">
                    <ul class="navbar-nav">
                        <?php foreach ($categories as $category) { ?>
                            <li><a href="action.php?page=category&id=<?php echo $category['id']; ?>" class="nav-link"><?php echo $category['name']; ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>