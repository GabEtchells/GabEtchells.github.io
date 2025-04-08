<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bokor&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Faculty+Glyphic&display=swap" rel="stylesheet">
    <title>Porto</title>
</head>

<body>
    <header>
        <nav class="nav justify-content-center">
            <a class="nav-link" href="../index.php" aria-current="page">Home</a>
            <a class="nav-link" href="projects.php">Projects</a>
            <a class="nav-link" href="about-me.php">About me</a>
            <a class="nav-link" href="contacts.php">Contact</a>
        </nav>

    </header>
    <main class="wrapper">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="../img/higher-lower.png" class="img-fluid rounded-start" alt="Card title" />
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title text-danger">Higher Lower</h5>
                        <p class="card-text text-danger">
                            A small fun project I worked on. It's a simple game with not that much complex code. It's a
                            fun time waster of a game.
                        </p>
                        <a href="projects/higher-lower/index.html">Click here to play the game!</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="../img/minesweeper.png" class="img-fluid rounded-start" alt="Card title" />
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title text-warning">Build-a-Game</h5>
                        <p class="card-text text-warning">
                            A game I made is Minesweeper. A tad bit complex and also very fun. Although I could not put
                            in all the functions, it still functions as a game and
                            is also very fun.
                        </p>
                        <a href="projects/minesweeper/ms-page.html">Click here to play the game!</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="Image Source" class="img-fluid rounded-start" alt="Card title" />
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Review Your Experience</h5>
                        <p class="card-text text-primary">
                            A small web shop, made to be functional and able to place reviews with an "account" of
                            sorts. It works with a MySQL database able to store data and
                            pull said data.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <style>
        * {
            margin: 0;
            padding: 0;
            background-color: black;
            box-sizing: border-box;
        }

        .wrapper {}

        nav {}

        a {
            text-decoration: none;
            color: lightblue;
            font-family: "Bokor", system-ui;
            font-size: xx-large;
        }

        a:hover {
            color: crimson;
        }

        h1 {
            font-family: "Bokor", system-ui;
        }

        p {
            font-family: "Faculty Glyphic", sans-serif;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
</body>

</html>