<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geologica:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">
    <title>Зоомагазин «Дружок»</title>
</head>
<body>
    <div class="wrapper">
        <div class="content">
            <header class="header">
                <navbar class="header__container">
                    <div class="navigation__info">
                        <div class="navigation__address">
                            <img src="images/address.png" alt="" class="navigation__icon">
                            <a href="contact.php" class="navigation__link">Адреса магазинов</a>
                        </div>
                        <div class="navigation__time">
                        <img src="images/time.png" alt="" class="navigation__icon time">
                            <span class="navigation__link">Ежедневно 9:00-20:00</span>
                        </div>
                    </div>
                    <div class="navigation__delivery">
                        <a href="delivery.php" class="navigation__link delivery">Доставка</a>
                    </div>
                    <?php
                    if (!$_SESSION['user']) {
                    ?>
                    <div class="navigation__register">
                        <a href="login.php" class="navigation__link">Войти&nbsp;|&nbsp;</a> 
                        <a href="register.php" class="navigation__link">Регистрация</a>
                    </div>
                    <?php 
                    } else {
                        ?>
                            <form action="cat.php" method="POST" class="header__line_button">
                                <img src="images/user.png" alt="" class="body__user">
                                <div class="header__hidden header__hidden_red">
                                    <div class="header__distance">
                                        <?php echo $_SESSION['user']['login']; ?>
                                    </div>
                                    <div class="header__distance">
                                        <a href="logout.php" class="header__type">Выйти</a>
                                    </div>
                                </div>
                            </form>
                        <?php
                    } ?>
                </navbar>
            </header>
            <div class="header__lower">
                <div class="header__logo">
                    <a href="index.php" class="header__name">
                        Дружок
                    </a>
                    <div class="header__label">
                        Интернет-каталог товаров для животных
                    </div>
                </div>
                <div class="header__info">
                    <div class="header__fields">
                        <div class="header__input">
                            <form action="search_script.php" method="POST">
                                <input type="text" class="header__search" name="finder" placeholder="Поиск...">
                                <button type="submit" class="header__link"><img src="images/find.png" alt="" class="header__loop"></button>
                            </form>
                        </div>
                        <div class="header__phone">
                            +7 (565) 221 84-85
                            <span class="header__deliver">Доставка товаров на дом</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header__category">
                <div class="header__container_low">
                    <form action="cat.php" method="POST" class="header__line_button">
                        <button type="submit" class="header__animal red">Кошкам</button>    
                        <div class="header__hidden header__hidden_red">
                            <div class="header__distance">
                                <a href="select_script.php?class=cat&category=food" class="header__type">Корм</a>
                            </div>
                            <div class="header__distance">
                                <a href="select_script.php?class=cat&category=toy" class="header__type">Игрушки</a>
                            </div>
                            <div class="header__distance">
                                <a href="select_script.php?class=cat&category=health" class="header__type">Гигиена</a>
                            </div>
                        </div>
                    </form>
                    <form action="dog.php" method="POST" class="header__line_button">
                        <button type="submit" class="header__animal blue">Собакам</button>    
                        <div class="header__hidden header__hidden_blue">
                            <div class="header__distance">
                                <a href="select_script.php?class=dog&category=food" class="header__type">Корм</a>
                            </div>
                            <div class="header__distance">
                                <a href="select_script.php?class=dog&category=toy" class="header__type">Игрушки</a>
                            </div>
                            <div class="header__distance">
                                <a href="select_script.php?class=dog&category=health" class="header__type">Гигиена</a>
                            </div>
                        </div>
                    </form>
                    <form action="rodent.php" method="POST" class="header__line_button">
                        <button type="submit" class="header__animal yellow">Грызунам</button>    
                        <div class="header__hidden header__hidden_yellow">
                            <div class="header__distance">
                                <a href="select_script.php?class=rodent&category=food" class="header__type">Корм</a>
                            </div>
                            <div class="header__distance">
                                <a href="select_script.php?class=rodent&category=toy" class="header__type">Игрушки</a>
                            </div>
                            <div class="header__distance">
                                <a href="select_script.php?class=rodent&category=health" class="header__type">Гигиена</a>
                            </div>
                        </div>
                    </form>
                    <form action="bird.php" method="POST" class="header__line_button">
                        <button type="submit" class="header__animal red">Птицам</button>    
                        <div class="header__hidden header__hidden_red">
                            <div class="header__distance">
                                <a href="select_script.php?class=bird&category=food" class="header__type">Корм</a>
                            </div>
                            <div class="header__distance">
                                <a href="select_script.php?class=bird&category=toy" class="header__type">Игрушки</a>
                            </div>
                        </div>
                    </form>
                    <form action="fish.php" method="POST" class="header__line_button">
                        <button type="submit" class="header__animal blue">Рыбкам</button>    
                        <div class="header__hidden header__hidden_blue">
                            <div class="header__distance">
                                <a href="select_script.php?class=fish&category=food" class="header__type">Корм</a>
                            </div>
                            <div class="header__distance">
                                <a href="select_script.php?class=fish&category=toy" class="header__type">Игрушки</a>
                            </div>
                        </div>
                    </form>
                    <form action="drug.php" method="POST" class="header__line_button">
                        <button type="submit" class="header__animal yellow">Препараты</button>    
                        <div class="header__hidden header__hidden_yellow">
                            <div class="header__distance">
                                <a href="select_script.php?class=drug&category=vital" class="header__type">Vital</a>
                            </div>
                            <div class="header__distance">
                                <a href="select_script.php?class=drug&category=animal" class="header__type">Animal+</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="body">
                <div class="body__container">
                    <div class="body__title">
                        <?php
                            $class = $_SESSION['class'];
                            $category = $_SESSION['category'];
                            if ($class == 'cat' && $category == 'food') {
                                echo 'Корм для кошек';
                            } else if ($class == 'cat' && $category == 'toy') {
                                echo 'Игрушки для кошек';
                            } else if ($class == 'cat' && $category == 'health') {
                                echo 'Гигиенические средства для кошек';
                            } else if ($class == 'dog' && $category == 'food') {
                                echo 'Корм для собак';
                            } else if ($class == 'dog' && $category == 'toy') {
                                echo 'Игрушки для собак';
                            } else if ($class == 'dog' && $category == 'health') {
                                echo 'Гигиенические средства для собак';
                            } else if ($class == 'rodent' && $category == 'food') {
                                echo 'Корм для грызунов';
                            } else if ($class == 'rodent' && $category == 'toy') {
                                echo 'Игрушки для грызунов';
                            } else if ($class == 'rodent' && $category == 'health') {
                                echo 'Гигиенические средства для грызунов';
                            } else if ($class == 'bird' && $category == 'food') {
                                echo 'Корм для птиц';
                            } else if ($class == 'bird' && $category == 'toy') {
                                echo 'Игрушки для птиц';
                            } else if ($class == 'fish' && $category == 'food') {
                                echo 'Корм для рыб';
                            } else if ($class == 'fish' && $category == 'toy') {
                                echo 'Игрушки для рыб';
                            } else if ($class == 'fish' && $category == 'food') {
                                echo 'Корм для рыб';
                            } else if ($class == 'fish' && $category == 'toy') {
                                echo 'Игрушки для рыб';
                            } else if ($class == 'drug' && $category == 'vital') {
                                echo 'Препараты vital';
                            } else if ($class == 'drug' && $category == 'animal') {
                                echo 'Препараты animal+';
                            }
                        ?>
                    </div>
                    <div class="body__page">
                        <div class="body__filter">
                            <div class="body__bar">
                                <span class="body__label">Фильтры</span>
                            </div>
                            <div class="body__form">
                                Бренды
                                <form action="filter_script.php" method="POST">
                                    <div class="body__point">
                                        <input type="radio" id="royal" name="checkbox" value="Royal canin" class="body__checkbox">
                                        <label for="ajo">Royal canin</label>
                                    </div>
                                    <div class="body__point">
                                        <input type="radio" id="proplan" name="checkbox" value="Pro plan" class="body__checkbox">
                                        <label for="alphapet">Pro plan</label>
                                    </div>
                                    <div class="body__point">
                                        <input type="radio" id="best_dinner" name="checkbox" value="sirius" class="body__checkbox">
                                        <label for="best_dinner">Sirius</label>
                                    </div>
                                    <div class="body__point">
                                        <input type="radio" id="catland" name="checkbox" value="triol" class="body__checkbox">
                                        <label for="catland">Triol</label>
                                    </div>
                                    <div class="body__point">
                                        <input type="radio" id="catland" name="checkbox" value="artemon" class="body__checkbox">
                                        <label for="catland">Artemon</label>
                                    </div>
                                    <div class="body__point">
                                        <input type="radio" id="catland" name="checkbox" value="kitty" class="body__checkbox">
                                        <label for="catland">Kitty</label>
                                    </div>
                                    <div class="body__point">
                                        <input type="radio" id="catland" name="checkbox" value="aroma" class="body__checkbox">
                                        <label for="catland">Aroma</label>
                                    </div>
                                    <div class="body__point">
                                        <input type="radio" id="catland" name="checkbox" value="fiory" class="body__checkbox">
                                        <label for="catland">Fiory</label>
                                    </div>
                                    <div class="body__activator">
                                        <button type="submit" class="body__show">
                                            Показать
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="body__catalog">
                            <div class="body__bar body__bar_bigger">
                                <span class="body__label">НАЙДЕНО <?php echo $_SESSION['length'] ?> ТОВАРОВ</span>
                            </div>
                            <div class="body__products">
                            <?php
                                $connect = mysqli_connect('localhost', 'root', '', 'zoo');
                                $tag = $_SESSION['tag'];
                                $class = $_SESSION['class'];
                                $result = mysqli_query($connect, "SELECT * FROM `product` WHERE `brand` = '$tag' AND `class` = '$class'");
                                while ($product = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <div class="body__element">
                                    <div class="body__graphic">
                                        <img src="media/<?php echo $product['image']?>.jpg" alt="" class="body__image_small">
                                    </div>
                                    <a href="product.php?id=<?= $product['id'] ?>" class="body__alias">
                                        <?php echo $product['title']; ?>
                                    </a>
                                    <div class="body__lower">
                                        <div class="body__price">
                                            <?php echo $product['price']; ?> ₽
                                        </div>
                                        <div class="body__add">
                                            <button type="submit" class="body__cart">В корзину</button>
                                        </div>
                                    </div>
                                </div>
                                    <?php
                                }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer"> 
            <div class="footer__container">
                <div class="footer__information">
                    <div class="footer__logo">
                        <div class="footer__phone">
                            +7 (565) 221 84-85<br>
                            <span class="footer__deliver">Доставка товаров на дом</span>
                        </div>
                        <div class="footer__name">
                            Дружок
                        </div>
                        <div class="footer__shop">
                            Интернет-магазин товаров для животных
                        </div>
                    </div>
                    <div class="footer__catalog">
                        <div class="footer__column">
                            <div class="footer__category">
                                Каталог
                            </div>
                            <div class="footer__list">
                                <a href="cat.php" class="footer__link">Кошкам</a>
                                <a href="dog.php" class="footer__link">Собакам</a>
                                <a href="rodent.php" class="footer__link">Грызунам</a>
                                <a href="bird.php" class="footer__link">Птицам</a>
                                <a href="fish.php" class="footer__link">Рыбкам</a>
                            </div>
                        </div>
                        <div class="footer__column">
                            <div class="footer__category">
                                О нас
                            </div>
                            <div class="footer__list">
                                <a href="team.php" class="footer__link">Команда</a>
                                <a href="contact.php" class="footer__link">Контакты</a>
                            </div>
                        </div>
                    </div>

                    <div class="footer__social">
                        <div class="footer__space">
                            <a href="https://vk.com/" class="footer__network">Вконтакте</a>
                        </div>
                        <div class="footer__space">
                            <a href="https://web.telegram.org/" class="footer__network">Телеграм</a>
                        </div>
                        <div class="footer__space">
                            <a href="https://ok.ru/" class="footer__network">Одноклассники</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>