<?php require 'index.php'; ?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Тестовое задание Webcompany</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href="style.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="js/jquery-1.1.3.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.min.js"></script>
        <script type="text/javascript" src="js/jquery.lavalamp.min.js"></script>
        <script type="text/javascript">
            $(function () {
                $("#1, #2, #3").lavaLamp({
                    fx: "backout",
                    speed: 700,
                    click: function (event, menuItem) {
                        return true;
                    }
                });
            });
        </script>
        <link href="lavalamp.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div id="wrap">
            <div id="topbg"> </div>
            <div id="wrap2">
                <div id="topbar">
                    <img style="float:left;margin:0 150px 0 20px;height:65px;" src="images/logo.svg" alt="logo"> 
                        <h1 id="sitename"><a href="index.html@page=2.html#">Тестовое задание</a> <span class="description"></span></h1>
                </div>
                <div id="header">
                    <div id="headercontent"> </div>
                    <div id="topnav">
                        <ul class="lavaLampWithImage" id="1">
                            <li  ><a href="index.html@page=1.php">Города</a></li>
                            <li class='current' ><a href="index.html@page=2.php">Пользователи</a></li>
                            <li  ><a href="index.html@page=3.php">Поиск</a></li>
                        </ul>
                    </div>
                </div>
                <div id="content">
                    <div id="left">   
                        <div class="post">
                            <div class="postheader"> </div>
                            <div class="postcontent"> 
                                <h2>Общее количество загрузок страницы = <b><?echo $counter?></b></h2>
                            </div>
                            <div class="postbottom">
                                <h3 style=" margin-left: 25px; ">Вы посещали эту страницу <b>
                                <?echo $counter?>                                  </b> раз</h3>
                            </div>
                        </div>
                        <div class="post">
    <div class="postheader"> </div>
    <div class="postcontent"> 
        <h2>Список Пользователей</h2> 
        <p><a name="top"></a></p>
                <!--Сортирвка-->
                            <h3><a href="index.html@page=2.php#down">Вниз</a></h3>
            <div style="display:inline-block">
                <form action="index.html@page=2.php" method="post" >
                    <input type="submit" name="ins2" value="Добавить" >
                                            <input type="submit" name="sort2" value="Сортировать" >
                                    </form>	
            </div>
            <!--Создадим выпадающий список "Города"-->
            <div class="filter">
                <form action="index.html@page=2.php" method="post">
                    <h3>Фильтр по Городам</h3>
                    <select size="1" name="selsity_2">
                        <option disabled>Выберите город</option>
                                                    <option  value="65">Минск</option>
                                                            <option  value="66">Гродно</option>
                                                    </select>
                    <input type="submit" name="sort_fc" onclick="hhh()" value="Показать">
                </form>
            </div>

                            <div class='users'>
                    <img width='100' src="pictures/RUBL.jpg" class='image' alt="Фотография">
                    <div class='userdan'>
                        <h4>Голавочев Василий</h4>
                        <p>Город: </p>


                        <form action="index.html@page=2.php" method="post" >
                            <input type="hidden" name="id" value="46" >
                            <input type="submit" name="del_fors_names" value="Удалить" onclick="return confirm('Вы действительно хотите удалить пользователя?')">
                        </form>	

                        <form action="index.html@page=2.php" method="post" >
                            <input type="hidden" name="id15" value="46" >
                            <input type="submit" name="edit_fors_names" value="Редактировать" >
                        </form>
                    </div>
                </div>
                                <div class='users'>
                    <img width='100' src="pictures/04234189d.jpg" class='image' alt="Фотография">
                    <div class='userdan'>
                        <h4>Бурцев Виктор</h4>
                        <p>Город: </p>


                        <form action="index.html@page=2.php" method="post" >
                            <input type="hidden" name="id" value="47" >
                            <input type="submit" name="del_fors_names" value="Удалить" onclick="return confirm('Вы действительно хотите удалить пользователя?')">
                        </form>	

                        <form action="index.html@page=2.php" method="post" >
                            <input type="hidden" name="id15" value="47" >
                            <input type="submit" name="edit_fors_names" value="Редактировать" >
                        </form>
                    </div>
                </div>
                                <div class='users'>
                    <img width='100' src="http://forprogers.webco.by/pictures/0_a97f6_850e2568_orig.jpg" class='image' alt="Фотография">
                    <div class='userdan'>
                        <h4>Злотников Роман</h4>
                        <p>Город: </p>


                        <form action="index.html@page=2.php" method="post" >
                            <input type="hidden" name="id" value="48" >
                            <input type="submit" name="del_fors_names" value="Удалить" onclick="return confirm('Вы действительно хотите удалить пользователя?')">
                        </form>	

                        <form action="index.html@page=2.html" method="post" >
                            <input type="hidden" name="id15" value="48" >
                            <input type="submit" name="edit_fors_names" value="Редактировать" >
                        </form>
                    </div>
                </div>
                                <div class='users'>
                    <img width='100' src="http://forprogers.webco.by/pictures/scientific-humor-42.jpg" class='image' alt="Фотография">
                    <div class='userdan'>
                        <h4>Злотников Роман</h4>
                        <p>Город: </p>


                        <form action="index.html@page=2.php" method="post" >
                            <input type="hidden" name="id" value="49" >
                            <input type="submit" name="del_fors_names" value="Удалить" onclick="return confirm('Вы действительно хотите удалить пользователя?')">
                        </form>	

                        <form action="index.html@page=2.php" method="post" >
                            <input type="hidden" name="id15" value="49" >
                            <input type="submit" name="edit_fors_names" value="Редактировать" >
                        </form>
                    </div>
                </div>
                                <div class='users'>
                    <img width='100' src="pictures/1244010m.jpg" class='image' alt="Фотография">
                    <div class='userdan'>
                        <h4>Тюрин Александр</h4>
                        <p>Город: </p>


                        <form action="index.html@page=2.php" method="post" >
                            <input type="hidden" name="id" value="50" >
                            <input type="submit" name="del_fors_names" value="Удалить" onclick="return confirm('Вы действительно хотите удалить пользователя?')">
                        </form>	

                        <form action="index.html@page=2.html" method="post" >
                            <input type="hidden" name="id15" value="50" >
                            <input type="submit" name="edit_fors_names" value="Редактировать" >
                        </form>
                    </div>
                </div>
                                <div class='users'>
                    <img width='100' src="pictures/atheist_symbol.gif" class='image' alt="Фотография">
                    <div class='userdan'>
                        <h4>Снегов Сергей</h4>
                        <p>Город: </p>


                        <form action="index.html@page=2.html" method="post" >
                            <input type="hidden" name="id" value="51" >
                            <input type="submit" name="del_fors_names" value="Удалить" onclick="return confirm('Вы действительно хотите удалить пользователя?')">
                        </form>	

                        <form action="index.html@page=2.html" method="post" >
                            <input type="hidden" name="id15" value="51" >
                            <input type="submit" name="edit_fors_names" value="Редактировать" >
                        </form>
                    </div>
                </div>
                                <div class='users'>
                    <img width='100' src="pictures/1376580116_80769803_syir-chelyabinskij.jpg" class='image' alt="Фотография">
                    <div class='userdan'>
                        <h4>Рыбаков Вячеслав</h4>
                        <p>Город: </p>


                        <form action="index.html@page=2.php" method="post" >
                            <input type="hidden" name="id" value="52" >
                            <input type="submit" name="del_fors_names" value="Удалить" onclick="return confirm('Вы действительно хотите удалить пользователя?')">
                        </form>	

                        <form action="index.html@page=2.php" method="post" >
                            <input type="hidden" name="id15" value="52" >
                            <input type="submit" name="edit_fors_names" value="Редактировать" >
                        </form>
                    </div>
                </div>
                                <div class='users'>
                    <img width='100' src="pictures/1364925936_2503132346506879.jpg" class='image' alt="Фотография">
                    <div class='userdan'>
                        <h4>Петров Захар</h4>
                        <p>Город: </p>


                        <form action="index.html@page=2.php" method="post" >
                            <input type="hidden" name="id" value="53" >
                            <input type="submit" name="del_fors_names" value="Удалить" onclick="return confirm('Вы действительно хотите удалить пользователя?')">
                        </form>	

                        <form action="index.html@page=2.php" method="post" >
                            <input type="hidden" name="id15" value="53" >
                            <input type="submit" name="edit_fors_names" value="Редактировать" >
                        </form>
                    </div>
                </div>
                                <div class='users'>
                    <img width='100' src="pictures/1347813178_40525625_pamyatka-zakazchiku.jpg" class='image' alt="Фотография">
                    <div class='userdan'>
                        <h4>Орлов Антон</h4>
                        <p>Город: </p>


                        <form action="index.html@page=2.php" method="post" >
                            <input type="hidden" name="id" value="54" >
                            <input type="submit" name="del_fors_names" value="Удалить" onclick="return confirm('Вы действительно хотите удалить пользователя?')">
                        </form>	

                        <form action="index.html@page=2.php" method="post" >
                            <input type="hidden" name="id15" value="54" >
                            <input type="submit" name="edit_fors_names" value="Редактировать" >
                        </form>
                    </div>
                </div>
                                <div class='users'>
                    <img width='100' src="http://forprogers.webco.by/pictures/101011.gif" class='image' alt="Фотография">
                    <div class='userdan'>
                        <h4>теста ТЕст</h4>
                        <p>Город: </p>


                        <form action="index.html@page=2.php" method="post" >
                            <input type="hidden" name="id" value="55" >
                            <input type="submit" name="del_fors_names" value="Удалить" onclick="return confirm('Вы действительно хотите удалить пользователя?')">
                        </form>	

                        <form action="index.html@page=2.php" method="post" >
                            <input type="hidden" name="id15" value="55" >
                            <input type="submit" name="edit_fors_names" value="Редактировать" >
                        </form>
                    </div>
                </div>
                                <div class='users'>
                    <img width='100' src="http://forprogers.webco.by/pictures/scientific-humor-42.jpg" class='image' alt="Фотография">
                    <div class='userdan'>
                        <h4>Поттер Гарри</h4>
                        <p>Город: </p>


                        <form action="index.html@page=2.phpl" method="post" >
                            <input type="hidden" name="id" value="57" >
                            <input type="submit" name="del_fors_names" value="Удалить" onclick="return confirm('Вы действительно хотите удалить пользователя?')">
                        </form>	

                        <form action="index.html@page=2.php" method="post" >
                            <input type="hidden" name="id15" value="57" >
                            <input type="submit" name="edit_fors_names" value="Редактировать" >
                        </form>
                    </div>
                </div>
                                <div class='users'>
                    <img width='100' src="http://forprogers.webco.by/pictures/" class='image' alt="Фотография">
                    <div class='userdan'>
                        <h4>L K</h4>
                        <p>Город: </p>


                        <form action="index.html@page=2.php" method="post" >
                            <input type="hidden" name="id" value="58" >
                            <input type="submit" name="del_fors_names" value="Удалить" onclick="return confirm('Вы действительно хотите удалить пользователя?')">
                        </form>	

                        <form action="index.html@page=2.php" method="post" >
                            <input type="hidden" name="id15" value="58" >
                            <input type="submit" name="edit_fors_names" value="Редактировать" >
                        </form>
                    </div>
                </div>
                                <div class='users'>
                    <img width='100' src="pictures/pricelist.xls" class='image' alt="Фотография">
                    <div class='userdan'>
                        <h4>fd f</h4>
                        <p>Город: </p>


                        <form action="index.html@page=2.php" method="post" >
                            <input type="hidden" name="id" value="59" >
                            <input type="submit" name="del_fors_names" value="Удалить" onclick="return confirm('Вы действительно хотите удалить пользователя?')">
                        </form>	

                        <form action="index.html@page=2.php" method="post" >
                            <input type="hidden" name="id15" value="59" >
                            <input type="submit" name="edit_fors_names" value="Редактировать" >
                        </form>
                    </div>
                </div>
                                <div class='users'>
                    <img width='100' src="pictures/city.png" class='image' alt="Фотография">
                    <div class='userdan'>
                        <h4>s ss</h4>
                        <p>Город: </p>


                        <form action="index.html@page=2.php" method="post" >
                            <input type="hidden" name="id" value="60" >
                            <input type="submit" name="del_fors_names" value="Удалить" onclick="return confirm('Вы действительно хотите удалить пользователя?')">
                        </form>	

                        <form action="index.html@page=2.php" method="post" >
                            <input type="hidden" name="id15" value="60" >
                            <input type="submit" name="edit_fors_names" value="Редактировать" >
                        </form>
                    </div>
                </div>
                                <div class='users'>
                    <img width='100' src="http://forprogers.webco.by/pictures/" class='image' alt="Фотография">
                    <div class='userdan'>
                        <h4>sds maxmax</h4>
                        <p>Город: </p>


                        <form action="index.html@page=2.php" method="post" >
                            <input type="hidden" name="id" value="61" >
                            <input type="submit" name="del_fors_names" value="Удалить" onclick="return confirm('Вы действительно хотите удалить пользователя?')">
                        </form>	

                        <form action="index.html@page=2.php" method="post" >
                            <input type="hidden" name="id15" value="61" >
                            <input type="submit" name="edit_fors_names" value="Редактировать" >
                        </form>
                    </div>
                </div>
                                <div class='users'>
                    <img width='100' src="http://forprogers.webco.by/pictures/" class='image' alt="Фотография">
                    <div class='userdan'>
                        <h4>alik assab</h4>
                        <p>Город: </p>


                        <form action="index.html@page=2.php" method="post" >
                            <input type="hidden" name="id" value="62" >
                            <input type="submit" name="del_fors_names" value="Удалить" onclick="return confirm('Вы действительно хотите удалить пользователя?')">
                        </form>	

                        <form action="index.html@page=2.php" method="post" >
                            <input type="hidden" name="id15" value="62" >
                            <input type="submit" name="edit_fors_names" value="Редактировать" >
                        </form>
                    </div>
                </div>
                                <div class='users'>
                    <img width='100' src="pictures/photo-1535224206242-487f7090b5bb.jpeg" class='image' alt="Фотография">
                    <div class='userdan'>
                        <h4>Poter1 Harry</h4>
                        <p>Город: </p>


                        <form action="index.html@page=2.php" method="post" >
                            <input type="hidden" name="id" value="63" >
                            <input type="submit" name="del_fors_names" value="Удалить" onclick="return confirm('Вы действительно хотите удалить пользователя?')">
                        </form>	

                        <form action="index.html@page=2.php" method="post" >
                            <input type="hidden" name="id15" value="63" >
                            <input type="submit" name="edit_fors_names" value="Редактировать" >
                        </form>
                    </div>
                </div>
                                <div class='users'>
                    <img width='100' src="http://forprogers.webco.by/pictures/" class='image' alt="Фотография">
                    <div class='userdan'>
                        <h4>Васильев Иван</h4>
                        <p>Город: </p>


                        <form action="index.html@page=2.php" method="post" >
                            <input type="hidden" name="id" value="67" >
                            <input type="submit" name="del_fors_names" value="Удалить" onclick="return confirm('Вы действительно хотите удалить пользователя?')">
                        </form>	

                        <form action="index.html@page=2.php" method="post" >
                            <input type="hidden" name="id15" value="67" >
                            <input type="submit" name="edit_fors_names" value="Редактировать" >
                        </form>
                    </div>
                </div>
                                <div class='users'>
                    <img width='100' src="pictures/contengbg.jpg" class='image' alt="Фотография">
                    <div class='userdan'>
                        <h4>Тестовый Тест</h4>
                        <p>Город: </p>


                        <form action="index.html@page=2.php" method="post" >
                            <input type="hidden" name="id" value="68" >
                            <input type="submit" name="del_fors_names" value="Удалить" onclick="return confirm('Вы действительно хотите удалить пользователя?')">
                        </form>	

                        <form action="index.html@page=2.php" method="post" >
                            <input type="hidden" name="id15" value="68" >
                            <input type="submit" name="edit_fors_names" value="Редактировать" >
                        </form>
                    </div>
                </div>
                            <a name="down"></a>
            <h3><a href="index.html@page=2.php#top">Наверх</a></h3>    </div>
    <div class="postbottom">
    </div>
</div>                    </div>
                    <div id="sidebar">
                        <h3> <b>Слева рабочая модель.</b></h3>
                        <h3>Описание тестового задания</h3>
                        <div class='zadanie'>
                            <h4>Общее для всех страниц</h4>
                            <ul>
                                <ol>1 Общий счетчик на сайт</ol>
                                <ol>2 Счетчик на каждую страницу</ol>
                            </ul>
                            <h4>Страница города</h4>
                            <ul>
                                <ol>1 Вывод всех городов</ol>
                                <ol>2 Добавление</ol>
                                <ol>3 Удаление</ol>
                                <ol>4 Редактирование</ol>
                                <ol><b>5 Сортировка</b></ol>
                                <ol>5.1 Выбор направления</ol>
                                <ol>5.2 Выбор поля</ol>
                            </ul>
                            <h4>Страница Пользователи</h4>
                            <ul>
                                <ol>1 Вывод всех Пользователей</ol>
                                <ol>2 Добавление</ol>
                                <ol>3 Удаление</ol>
                                <ol>4 Редактирование</ol>
                                <ol><b>5 Сортировка</b></ol>
                                <ol>5.1 Выбор направления</ol>
                                <ol>5.2 Выбор поля</ol>
                                <ol>6 Фильтр по городам</ol>
                            </ul>
                            <h4>Страница Поиск</h4>
                            <ul>
                                <ol>1 Форма поиска</ol>
                                <ol>2 Поиск по фамилии</ol>
                                <ol>3 Поиск по имени</ol>
                                <ol>4 Вывод результатов</ol>
                            </ul>
                            <h3>Описание связей</h3>
                            <p>
                                Если изменяем название города Орша На Орша1 
                                то у всех пользователей которые были выбрали Орша 
                                Станет так-же Орша1 и во всех списках выбора города будет уже Орша1
                            </p>
                            <h3>Требование при выполнении</h3>
                            <p>
                                <h4>Не использовать фреймворки!!!</h4>
                                <h4>Использовать разбитие кода на функции</h4>
                                <h4>Понятные названия переменных</h4>
                                <h4>Язык прогроммирования серверной части PHP</h4>
                                <h4>Использование $_COOKIE для счетчиков</h4>
                            </p>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div id="footer"> 
                    <div class="credit">Webcompany 2023г</div>
                </div>
            </div>
            <div id="btmbg"> </div>
        </div>
    </body>
</html>
