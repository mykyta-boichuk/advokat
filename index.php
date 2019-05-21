<?php
    require_once ("database.php");
?>



<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/html">

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Адвкокат</title>
        <link rel="stylesheet" href="style19.css">
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>


        <script type="text/javascript", src="js/jcarousellite_1.0.1.js"></script>
        <script type="text/javascript", src="js/shop-script.js"></script>
        <script type="text/javascript", src="js/search.js"></script>
        <script type="text/javascript", src="js/jquery.cookie.js"></script>
        <script type="text/javascript", src="js/jquery.maskedinput.js"></script>
        <script type="text/javascript", src="js/jquery.maskedinput.min.js"></script>
    <script>

$(function(){
    //2. Получить элемент, к которому необходимо добавить маску
    $("#password").mask("+380(999)999-999");
});
    </script>
    </HEAD>
    <body>
        <header>

        </header>

        <div class="content">
            <div class="top-content"><div class="top-content2"></div>
                <div class="block-info"></div>

                  <div class="logo">
                      <img src="images/logo1.png" class="logo-images" align="left">
                      <h1>УСЛУГИ АДВОКАТА И ЮРИДИЧЕСКАЯ ПОМОЩЬ</br>«ПИЛИГРИМ П.А. И ПАРТНЕРЫ»</h1>
                  </div>

              </div>
            <div class="menu" id="menu">
                <ul>
                    <li><a href="index.html" target="_blank">ГЛАВНАЯ</a></li>
                    <li><a href="#o-sebe" >О СЕБЕ</a></li>
                    <li><a href="index.html">УСЛУГИ</a></li>
                    <li><a href="index.html">КАК Я РАБОТАЮ</a></li>
                    <li><a href="index.html">КОНТАКТЫ</a></li>
                </ul>
            </div>

            <div class="block-content all">
            <div class="o-sebe  " id="o-sebe">
                <div class="content-left">
                    <h3>О СЕБЕ</h3>
                    <p>
                        Адвокатське бюро «Пілігрим П.А. і партнери »,
                        засноване в 2012 році адвокатом
                        Пілігримом Петром Олександровичем,
                        практикує більше 6 років компанією,
                        з надання професійних юридичних
                        послуг із захисту Ваших прав та інтересів
                        у всіх областях права:
                        Основними критеріями надання послуг є
                        вичерпна<b> БЕЗКОШТОВНА КОНСУЛЬТАЦІЯ КОЖНОМУ</b>,
                        максимальна відкритість, об'єктивна оцінка судової
                        (Позасудової) перспективи вирішення питання,
                        незмінний професіоналізм, бездоганна порядність
                    </p>

                </div>
                <div class="content-right">
                    <div class="block-news">
                        <h1 class="header-title"><b>НОВОСТИ</b></h1>
                        <center><img id="news-up" src="images/up.png"></center>
                        <div id="newsticker">

                            <ul>
                                <?php
                                foreach ($rows as $key) {?>
                                <li>
                                    <span><?=$key['date']?></span>
                                    <a href=""><?=$key['title']?></a>
                                    <p><?=$key['text_news']?></p>
                                </li>
                                <?php } ?>

                            </ul>

                        </div>
                        <center>  <img id="news-down" src="images/down.png"></center>

                    </div>
                </div>
            </div>

            <div class="services block-content">
                <h2>УСЛУГИ</h2>
                <div class="services-content">
                <div class="content-left">
                <div CLASS="list-services">
                <ul>
                    <li class="civil"> ГРАЖДАНСКОЕ
                        <div class="civil-text">
                            <ul>
                                <li >
                                    <p>- признание права собственности</p>
                                    <p>- выделение имущества из общей собственности</p>
                                    <p>- установление режима пользования имуществом</p>
                                    <p>- истребование имущества из чужого незаконного владения</p>
                                    <p>- взыскание ущерба</p>
                                    <p>- взыскание морального вреда</p>
                                    <p>- защита прав потребителей</p>
                                    <p>- установление факта (описки в документах, подтверждение обстоятельств из жизни и т.д.)</p>
                                    <p>- расторжение договоров</p>
                                    <p>- иное</p>

                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="land"> ЗЕМЕЛЬНОЕ
                        <div class="land-text civil-text">
                        <ul>
                            <li>
                                <p>- расторжение договоров аренды</p>
                                <p>- признание права собственности на пай</p>
                                <p>- установление границ смежных участков</p>
                                <p>- обязательство Геокадастра на предоставление разрешения на разработку/утверждение проекта землеустройства</p>
                                <p>- иное</p>


                            </li>
                        </ul>
                        </div>
                    </li>
                    <li class="family"> СЕМЕЙНОЕ
                        <div class="family-text civil-text">
                        <ul >
                            <li>
                                <p>- признание права собственности</p>
                                <p>- выделение имущества из общей собственности</p>
                                <p>- установление режима пользования имуществом</p>
                                <p>- истребование имущества из чужого незаконного владения</p>
                                <p>- взыскание ущерба</p>
                                <p>- взыскание морального вреда</p>
                                <p>- защита прав потребителей</p>
                                <p>- установление факта (описки в документах, подтверждение обстоятельств из жизни и т.д.)</p>
                                <p>- расторжение договоров</p>
                                <p>- иное</p>
                            </li>
                        </ul>
                        </div>
                    </li>
                    <li class="hereditary" > НАСЛЕДСТВЕННОЕ
                        <div class="hereditary-text civil-text">
                            <ul>
                                <li>
                                    <p>- восстановление сроков принятия наследства</p>
                                    <p>- признание права собственности на наследство</p>
                                    <p>- обязательная часть в наследстве</p>
                                    <p>- иное</p>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="labor"> ТРУДОВОЕ
                        <div class="labor-text civil-text">
                            <ul>
                                <li>
                                    <p>- компенсация при незаконном увольнении</p>
                                    <p>- восстановление на работе</p>
                                    <p>- снятие выговора</p>
                                    <p>- взыскание несвоевременно выплаченной зарплаты</p>
                                    <p>- восстановление утраченной трудовой книжки</p>
                                    <p>- увольнение работника согласно КЗоТ</p>
                                    <p>- взыскание ущерба причинённого работником</p>
                                    <p>- иное</p>
                                </li>
                            </ul>
                        </div>

                    </li>
                    <li class="banking"> БАНКОВСКОЕ
                        <div class="banking-text civil-text">
                            <ul>
                                <li>
                                    <p>- минимизация требований банка</p>
                                    <p>- споры с банковскими учреждениями</p>
                                    <p>- иное</p>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="insurance"> СТРАХОВОЕ
                        <div class="insurance-text civil-text">
                            <ul>
                                <li>
                                    <p>- возмещение материального вреда в ходе ДТП</p>
                                    <p>- взыскание со страховой компании не выплаченной части страхового возмещения</p>
                                    <p>- иное</p>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="khozyaystvennoye"> ХОЗЯЙСТВЕННОЕ
                        <div class="khozyaystvennoye-text civil-text">
                            <ul>
                                <li>
                                    <p>- разработка хозяйственных договоров</p>
                                    <p>- предоставление/изменение юридического адреса</p>
                                    <p>- регистрация/ликвидация предприятия</p>
                                    <p>- изменение Устава</p>
                                    <p>- изменение руководителя</p>
                                    <p>- продажа корпоративных прав</p>
                                    <p>- регистрация/ликвидация ФЛП</p>
                                    <p>- изменение организационной формы с АО на ООО</p>
                                    <p>- банкротство</p>
                                    <p>- иное</p>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="proizvodstvo"> ИСПОЛНИТЕЛЬНОЕ ПРОИЗВОДСТВО
<div class="proizvodstvo-text civil-text">
                            <ul>
                                <li>
                                    <p>- наложение/снятие ареста</p>
                                    <p>- наложение/снятие запрета на выезд</p>
                                    <p>- обжалование действий исполнителя</p>
                                    <p>- признание торгов недействительными</p>
                                    <p>- контроль за исполнительным производством</p>
                                    <p>- иное</p>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="corner"> УГОЛОВНОЕ
                        <div class="corner-text civil-text">
                            <ul>
                                <li>
                                    <p>- пресечение незаконных действий сотрудников полиции</p>
                                    <p>- защита на следствии в полиции</p>
                                    <p>- защита в суде</p>
                                    <p>- снятие ареста с авто</p>
                                    <p>- соглашение о примирении</p>
                                    <p>- соглашение со следствием</p>
                                    <p>- иное</p>
                                </li>
                            </ul>
                        </div>

                    </li>
                    <li class="housing"> ЖИЛИЩНОЕ
                        <div class="housing-text civil-text">
                            <ul>
                                <li>
                                    <p>- снятие с регистрации</p>
                                    <p>- выселение из жилья</p>
                                    <p>- иное</p>
                                </li>
                            </ul>
                        </div>

                    </li>
                    <li class="administrative"> АДМИНИСТРАТИВНОЕ
                        <div class="administrative-text civil-text">
                            <ul>
                                <li>
                                    <p>- споры с контролирующими органами</p>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="information"> ИНФОРМАЦИЯ
                        <div class="information-text civil-text">
                            <ul>
                                <li>
                                    <p>- реестры недвижимости</p>
                                    <p>- земельный реестр</p>
                                    <p>- реестр авто</p>
                                    <p>- реестр должников</p>
                                    <p>- реестр судебных решений</p>
                                    <p>- пенсионный фонд</p>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="escort"> СОПРОВОЖДЕНИЕ
                        <div class="escort-text civil-text">
                            <ul>
                                <li>
                                    <p>- адвокатские запросы</p>
                                    <p>- сделки с недвижимостью</p>
                                    <p>- принятие наследства у нотариуса</p>
                                    <p>- адвокатское хранение документов</p>
                                    <p>- изготовление цифровой подписи</p>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                </div>

                </div>

                <div class="content-right">

                    <div class="container">
                        <section id="content">
                            <form action="models/advice.php" method="post">
                                <h1>Запись<br> на бесплатную<br> консультацию</h1>
                                <div>
                                    <input type="text" placeholder="Имя" required="" id="username"  name="name"/>
                                </div>
                                <div>
                                    <input type="tel" placeholder="Номер телефона" required="" id="password" name="phone"/>
                                </div>
                                <div>
                                    <input type="submit" value="Записаться" />

                                </div>
                            </form><!-- form -->

                        </section><!-- content -->
                    </div><!-- container -->
                </div>
            </div>
            </div>
            <div class="work block-content">

                 <h2>КАК Я РАБОТАЮ</h2>
                <div class="content-left">
                    <p>
                        Прийом на консультацію проводиться за<br>
                        <b>ПОПЕРЕДНЬОЇ ЗАПИСИ</b>
                    </p>
                    <p>
                        Гарантією якості послуг є укладений договір, а також виключно позитивні<br>
                        рекомендації сотень вдячних клієнтів!
                    </p>
                    <p>
                        У багатьох бувають проблеми, але не багато допоможуть їх вирішити! Ваш вибір - ставити експерименти або звернутися до зарекомендували себе професіоналам!
                    </p>
                </div>
            </div>
            <div class="contact block-content">

                <p>
                    <b>Часы работы</b><br>
                    пн:	08:15–18:00<br>
                    вт:	08:15–18:00<br>
                    ср:	08:15–18:00<br>
                    чт:	08:15–18:00<br>
                    пт:	08:15–18:00<br>
                    сб:	Закрыто<br>
                    вс:	Закрыто
</p>
                <p>


                <b>Адрес</b><br>
ул. Щучки,113<br>
                Красноград<br>
                Kharkiv oblast<br>
                Украина<br>
                63304<br>
                </p>
                <p><b>Контакты</b><br>
                    095 353 5220<br>
                    067 528 2877<br>
                </p>
<div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2598.1744133480397!2d35.44330311569249!3d49.36777267934071!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d8f679ed8166fb%3A0x6c1d751f5bc41018!2z0KnRg9GH0LrQuCwgMTEzLCDQmtGA0LDRgdC90L7Qs9GA0LDQtCwg0KXQsNGA0YzQutC-0LLRgdC60LDRjyDQvtCx0LvQsNGB0YLRjCwgNjMzMDA!5e0!3m2!1suk!2sua!4v1551099890288" width="500" height="250" frameborder="0" style="border:0" allowfullscreen></iframe></div>
            </div>
            </div>

        </div>

      </body>
    <script>
        let menu = document.querySelector('.menu a');
        let widthMenu = menu.clientHeight
        let width = document.documentElement.clientHeight - widthMenu;

        document.querySelector('.top-content2').style.paddingTop = width + 'px';
        console.log(document.querySelector('.top-content2').style.paddingTop);
    </script>
  </html>