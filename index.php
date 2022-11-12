<?php

use jcobhams\NewsApi\NewsApi;

require_once('vendor/autoload.php');
$newsapi = new NewsApi('4adb040e175e41f78bfd9518193773a7');
$data = $newsapi->getEverything("indonesia");

?>

<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <header id="header" class="p-3 bg-light">
        <div class="container">
            <h3><a href="index.php" class="text-dark font-weight-bold">News</a></h3>
        </div>
    </header>

    <main>
        <div class="w-100 text-center text-light position-absolute" style="background-color:#756a55; padding-top:10%; padding-bottom:25%;">
            <div class="container">
                <h1>News Portal</h1>
                <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
            </div>
        </div>
        <div class="container">
            <div class="row d-flex justify-content-between" style="padding-top:25em;">
                <?php
                $i = 0;
                foreach ($data->articles as $d) {
                    if ($i++ == 3) break; ?>
                    <div class="col-md-4 mb-5">
                        <a href="<?php echo $d->url; ?>" class="text-decoration-none">
                            <div class="card shadow" style="height:525px;">
                                <img src="<?php echo $d->urlToImage; ?>" height="200px" class="card-img-top" alt="images">
                                <div class="card-body">
                                    <h6 class="card-title text-dark font-weight-bold" style="height:50px"><?php echo $d->title; ?></h6>
                                    <p class="card-text text-dark" style="height:150px"><?php echo $d->description; ?></p>
                                    <a href="<?php echo $d->url; ?>" class="card-text text-dark text-decoration-none"><?php echo $d->url; ?></a>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>

    <footer class="text-center text-light p-4" style="background-color:#756a55; margin-top:10%;">
        <div class="copyright">
            &copy; Copyright <strong><span>News</span></strong>
        </div>
    </footer>
</body>

</html>