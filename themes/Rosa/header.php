<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-zrnmn8R8KkWl12rAZFt4yKjxplaDaT7/EUkKm7AovijfrQItFWR7O/JJn4DAa/gx" crossorigin="anonymous">
    <script src="https://unpkg.com/scrollreveal"></script>

    <title>The Rosa</title>

    <?php wp_head(); ?>
</head>
<body>
<header>
    <div class="container">
        <nav class="nav">
            <div class="menu-toggle">
                <i class="fas fa-bars"></i>
                <i class="fas fa-times"></i>
            </div>
            <a href="#" class="logo">
                <?php echo '<img src="'.wp_get_attachment_image_src(7, 'full', false, '')[0].'" >'; ?>
            </a>
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="#" class="nav-link active">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Menu</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Reservations</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">News</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Shop</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>
        </nav>
    </div>
</header>

