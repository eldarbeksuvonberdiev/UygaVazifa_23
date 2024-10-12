<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
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
                    <a href="/login"><button class="btn btn-outline-success me-3" type="submit">Login</button></a>
                    <a href="/register"><button class="btn btn-outline-success me-3" type="submit">Register</button></a>
                    <!-- </form> -->
                </div>
            </div>
        </nav>
    </div>
    <div class="container mt-5">
        <h2>Login</h2>
        <?php
        if (isset($_SESSION['msg'])) {
            echo "<h3><span class='text-warning'>{$_SESSION['msg']}</span></h3>";
            unset($_SESSION['msg']);
        }
        ?>
        <form action="/login" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <label for="inputPassword5" class="form-label">Password</label>
            <input type="password" name="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
            <div id="passwordHelpBlock" class="form-text mb-4">
                Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
            </div>
            <button type="submit" name="ok" class="btn btn-success">Login</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>