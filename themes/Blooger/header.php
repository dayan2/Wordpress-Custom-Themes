<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-zrnmn8R8KkWl12rAZFt4yKjxplaDaT7/EUkKm7AovijfrQItFWR7O/JJn4DAa/gx" crossorigin="anonymous">

    <title>Blooger</title>

    <?php wp_head(); ?>
</head>
<body>

<nav class="nav">
    <div class="nav-menu flex-row">
        <div class="nav-brand">
            <a href="#" class="text-gray">Blooger</a>
        </div>

        <div class="toggle-collapse">
            <div class="toggle-icons"><i class="fas fa-bars"></i></div>
        </div>

        <div>
            <ul class="nav-items">
                <li class="nav-link">
                    <a href="#">Home</a>
                </li>
                <li class="nav-link">
                    <a href="#">Category</a>
                </li>
                <li class="nav-link">
                    <a href="#">Archive</a>
                </li>
                <li class="nav-link">
                    <a href="#">Pages</a>
                </li>
                <li class="nav-link">
                    <a href="#">Contact Us</a>
                </li>
            </ul>
        </div>

        <div class="social text-gray">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
    </div>
</nav>