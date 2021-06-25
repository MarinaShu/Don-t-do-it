<?php 

    /**
     * Template Name: Main Page Template
     */
get_header(); ?>

    <section class="content">
        <div class="content__wrapper">
            <div class="content__title">
                <h1 class="content__text">Не <span class="colortext">делай</span> это</h1>
                <p class="content__text text"> Онлайн-курс для творческих людей, о том, как управлять своим временем </p>
                <button href="#popup" class="content__button button js-button">Записаться на курс</button>
            </div>
            <div class="content__img">
                <img src="<?= get_template_directory_uri(); ?> /img/done.svg" alt="">
            </div>
        </div>
    </section>
    <section class="box__black">
        <div class="box__wrapper">
            <div class="box__icons">
                <div class="box__icon time">
                    <img src="<?= get_template_directory_uri(); ?> /img/time.svg" alt="time">
                    <p>Для тех, у кого слишком много идей и слишком мало времени</p>
                </div>
                <div class="icon book">
                    <img src="<?= get_template_directory_uri(); ?> /img/book.svg" alt="book">
                    <p>Метод «списка не дел», который позволит успевать и реализовывать</p>
                </div>
                <div class="icon target">
                    <img src="<?= get_template_directory_uri(); ?> /img/target.svg" alt="target">
                    <p>Курс научит творческих людей сосредоточиваться</p>
                </div>
            </div>
        </div>
    </section>
    <section class="columns_wrapper">
        <section class="columns" id="animatedBlock">
            <div class="column">
                <img src="<?= get_template_directory_uri(); ?> /img/finances.svg" alt="image" class="column_img left">
                <div class="right">
                    <h2>Ты не успеешь</h2>
                    <p>Всех творческих людей объединяет одна проблема - отсутствие времени на реализацию идей. Как прибавить суткам часы, рассмотрим в нашем курсе.</p>
                </div>
            </div>
            <div class="column">
                <div class="left">
                    <h2>Опять дедлайн</h2>
                    <p>В мире, где столько всего интересного, когда же успевать жить?</p>
                </div>
                <img src="<?= get_template_directory_uri(); ?> /img/blowing.svg" alt="Mind blowing" class="column_img right">
            </div>
        </section>
    </section>
    <h2 id="box" class="box__subheading center">На курсе ты <span class="colortext">сможешь</span></h2>
    <section class="box__wrapper">
        <div class="box">
            <div class="box__cell">
                <img src="<?= get_template_directory_uri(); ?> /img/one.svg" alt="1">
                <p class="cell_text">Понять, что нужно делать, а что делать не стоит.</p>
            </div>
            <div class="box__cell">
                <img src="<?= get_template_directory_uri(); ?> /img/two.svg" alt="2">
                <p class="box_text">Перестать себя искусственно ограничивать.</p>
            </div>
            <div class="box__cell">
                <img src="<?= get_template_directory_uri(); ?> /img/three.svg" alt="3">
                <p class="box_text">Определить сильные стороны и начать использовать слабые.</p>
            </div>
            <div class="box__cell">
                <img src="<?= get_template_directory_uri(); ?> /img/four.svg" alt="4">
                <p class="box_text">Научиться достигать любой цели в 3 понятных шага.</p>
            </div>
            <div class="box__cell">
                <img src="<?= get_template_directory_uri(); ?> /img/five.svg" alt="5">
                <p class="box_text">Сотрудничать эффективно и с правильными людьми.</p>
            </div>
            <div class="box__cell">
                <img src="<?= get_template_directory_uri(); ?> /img/six.svg" alt="6">
                <p class="box_text">Оптимизировать общение с клиентами и проведение совещаний.</p>
            </div>
        </div>
    </section>
    <section id="questions" class="block">
        <h2 class="center">Всё, что вы хотели <span class="colortext">узнать</span></h2>
        <div class="block__down-menu">

            <?php
    $articles = [
        [
            'title' => 'Как проходит курс?',
            'text' => 'Каждую неделю на протяжении 3 месяцев, вам приходит новый урок на имейл. Проходить уроки, вы можете в комфортном для вас темпе.',
        ],
        [
            'title' => 'Можно получить все уроки сразу?',
            'text' => 'Каждую неделю на протяжении 3 месяцев, вам приходит новый урок на имейл. Проходить уроки, вы можете в комфортном для вас темпе.',
        ],
        [
            'title' => 'Если занятия не придут?',
            'text' => 'Каждую неделю на протяжении 3 месяцев, вам приходит новый урок на имейл. Проходить уроки, вы можете в комфортном для вас темпе.',
        ],
    ];
?>

            <?php foreach ($articles as $article): ?>
            <div class="block__list__one">
                <h3 class="block__item__middle middle"><?= $article['title'] ?></h3>
                <p class="block__item__text"><?= $article['text'] ?></p>
                <div class="block__item__line"></div>
            </div>
            <div class="block__item__plus plus"> </div>
            <?php endforeach; ?>
        </div>
    </section>
    <section class="box__black">
        <h2 class="box__text_big center">Единственное, что нужно <span class="colortext">сделать</span></h2>
        <div class="box__wrapper">
            <form action="/php/form_handler.php" method="post" class="forms">
                <section class="form">
                    <input type="text" name="name" placeholder="Ваше имя" class="frame__size size">
                    <input type="text" name="email" placeholder="Email" class="frame__size size email">
                    <select name="text" class="frame__size size">
                        <option value="hide" class="frame__size size">Деятельность</option>
                        <option value="programmer" class="box__list">Программист</option>
                        <option value="designer" class="box__list">Дизайнер</option>
                        <option value="marketer" class="box__list">Маркетолог</option>
                    </select>
                    <button href="#popup" type="submit" class="size button js-button">Записаться на курс</button>
                </section>
                <div class="form_checkbox">
                    <input type="checkbox" class="custom-checkbox" id="consent" name="consent" value="yes">
                    <label for="consent">Согласен получать информационные материалы о старте курса</label>
                </div>
            </form>
        </div>
    </section>
    <section id="author" class="about center">
        <img src="<?= get_template_directory_uri(); ?> /img/faсe.jpg" alt="photo" class="about__img">
        <h3 class="name">Дональд Рос</h3>
        <p class="">Типограф, творческий предприниматель и лектор Королевской академии искусств Нидерландов</p>
        <p class="about__text">Создаю титры к фильмам, шрифты, сложные интерфейсы для смартфонов. Автор собственных креативных проектов, в том числе системы тайм-менеджмента и приложения для смартфонов ToDon’tList.</p>
        <span class="about__networks">
            <a href="sample.html"><img src="<?= get_template_directory_uri(); ?> /img/instagram.png" alt="instagram"></a>
            <a class="about__networks_facebook" href="sample.html"><img src="<?= get_template_directory_uri(); ?> /img/facebook.png" alt="facebook"></a>
            <a href="sample.html"><img src="<?= get_template_directory_uri(); ?> /img/pinterest.png" alt="pinterest"></a>
        </span>
    </section>
    <a href="" id="buttonUp" class="arrow__up"><img src="<?= get_template_directory_uri(); ?> /img/vector.svg" alt=""></a>
    <div id="js_popup" class="popup">
        <div class="popup__body">
            <div class="popup__content">
                <span class="close">×</span>
                <div class="center"><img src="<?= get_template_directory_uri(); ?> /img/spase.svg" alt=""></div>
                <h3 class="popup__text center">Записаться на курс</h3>
                <form action="php/hander.php" method="get" class="popup__center">
                    <section class="popup__form">
                        <input type="text" name="name" placeholder="Ваше имя" class="popup__size size">
                        <input type="text" name="email" placeholder="Email" class="popup__size size">
                        <select name="text" class="popup__size size">
                            <option value="hide" class="popup__size size">Деятельность</option>
                            <option value="programmer" class="box__list">Программист</option>
                            <option value="designer" class="box__list">Дизайнер</option>
                            <option value="marketer" class="box__list">Маркетолог</option>
                        </select>
                        <div class="popup_checkbox">
                            <input type="checkbox" class="custom-checkbox" id="popup__consent" name="consent" value="yes">
                            <label for="consent">Согласен получать информационные материалы о старте курса</label>
                        </div>
                        <a href="#" type="submit" class="popup__size size button ">Записаться на курс</a>
                    </section>
                </form>
            </div>
        </div>
    </div>


<?php get_footer(); ?>
