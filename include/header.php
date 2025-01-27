<?php
require __DIR__ . "/config.php";
require __DIR__ . "/db.php";
?>
<header id="header">
    <div class="header__top"> 
        <title>Blog IT Minimalism!</title>
        <div class="container">
            <div class="header__top__logo"></div>
            <nav class="header__top__menu">
                <ul>
                    <li><a href="/">home</a></li>
                    <li><a href="pages/About_me.php">About me</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <?php
        // getting data from categories
        $categories = mysqli_query($connection, "SELECT * FROM `articles_categories`");

        // cheking succesfully connection
        if ($categories === false) {
            echo "Ошибка получения категорий: " . mysqli_error($connection);
            exit();
        }
    ?>
    <div class="header__bottom">
        <div class="container">
            <nav>
                <ul>
                    <?php while ($cat = mysqli_fetch_assoc($categories)) { ?>
                        <li><a href="/categorie.php?id=<?php echo $cat['id']; ?>"><?php echo $cat['title']; ?></a></li>
                    <?php } ?>
                </ul>
            </nav>
        </div>
    </div>
</header>
