<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="/bulma/css/bulma.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title; ?></title>
    <link rel="stylesheet" href="/fontawesome-free-5.15.4-web/css/all.min.css">
</head>

<body>
    <!-- hero section -->
    <section class="hero is-primary">
        <div class="hero-body">
            <p class="title">
                Warung MaBar
            </p>
            <p class="subtitle">
                Tempat asik untuk makan dan bersantai~
            </p>
        </div>
    </section>
    <?= $this->renderSection('isi-halaman'); ?>
</body>

</html>