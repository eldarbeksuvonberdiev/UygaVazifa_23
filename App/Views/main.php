<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$action?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="background-color: grey;">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-bg-secondary">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Janrlar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/muallif">Mualliflar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/kitob">Kitoblar</a>
                        </li>
                    </ul>
                    <!-- <form class="d-flex"> -->
                    <?php
                    if (check()) { ?>
                        <a href="/login"><button class="btn btn-outline-success me-3" type="submit">Login</button></a>
                        <a href="/register"><button class="btn btn-outline-success me-3" type="submit">Register</button></a>
                    <?php } else { ?>
                        <a href="/logout"><button class="btn btn-outline-success me-3" type="submit">Logout</button></a>
                    <?php }
                    ?>
                    <!-- </form> -->
                </div>
            </div>
        </nav>
    </div>
    <div class="container mt-5">
        <?= $content ?>
    </div>
    <footer>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum dignissimos maxime, 
            dolores nihil vero, praesentium reprehenderit ea repudiandae error laboriosam mollitia sunt ratione iste. Aliquam rerum excepturi hic harum ducimus.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>