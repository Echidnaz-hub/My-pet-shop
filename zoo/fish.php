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
                        Рыбкам
                    </div>
                    <div class="body__subtitle">
                        Товары:
                    </div>
                    <div class="body__listing">
                        <div class="body__category">
                            <a href="select_script.php?class=fish&category=food" class="body__href">Корм</a>
                        </div>
                        <div class="body__category">
                            <a href="select_script.php?class=fish&category=toy" class="body__href">Игрушки</a>
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