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
        <nav
            class="nav justify-content-center"
        >
            <a class="nav-link" href="../index.php" aria-current="page">Home</a>
            <a class="nav-link" href="projects.php">Projects</a>
            <a class="nav-link" href="about-me.php">About me</a>
            <a class="nav-link" href="contacts.php">Contact</a>
        </nav>
        
    </header>
    <main class="wrapper text-center justify-content-center">
        <h1>This is how you contact me!</h1>
        <div
            class="card text-white bg-primary"
        >
            <img class="card-img-top" src="holder.js/100px180/" alt="Title" />
            <div class="card-body">
                <h4 class="card-title">Contacts</h4>
                <p class="card-text">thisisarealemail@email.com <br>
                0612345678 <br>
            </p>
            <form action="post">
                <input class="text-white" type="text">
                <button class="text-primary">Send!</button>
            </form>
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
            color: skyblue;
            font-family: "Bokor", system-ui;
        }

        p {
            color: blue;
            font-family: "Faculty Glyphic", sans-serif;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
</body>

</html>