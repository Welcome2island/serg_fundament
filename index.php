<!DOCTYPE html>
<head>

<meta name="description" content="Строительство домов, бань, дачных домиков и котеджей по Свердловской области">
<!--<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">-->
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
<title>Строительство фундаментов под ключ</title>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<!--<link rel="icon" href="http://sk-usadiba.ru/images/favicon.html" type="image/x-icon">-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script type="text/javascript" src="js/jquery.ankor.js"></script>
    <script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
    <script type="text/javascript" src="js/jquery.easytabs.min.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/jquery.mCustomScrollbar.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
    <script type="text/javascript" src="js/jquery.scrollTo.js"></script>
    <script type="text/javascript" src="js/jquery.touchcarousel-1.0.min.js"></script>
    <script type="text/javascript" src="js/fancybox/jquery.fancybox8cbb.js"></script>
    <script type="text/javascript" src="js/parsley.js"></script>




    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">-->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="js/fancybox/jquery.fancybox8cbb.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/fonts.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/normalize.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/carousel.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">


<?php
    $geo = $_GET['geo'];
    $geo_text = 'в Санкт-Петербурге и Ленинградской области';
    $type = $_GET['f_type'];
    $type_text = 'всех типов фундаментов';
    switch ($type) {
        case "svai":
            $type_text = 'свайных фундаментов';
            break;
        case "lenta":
            $type_text = 'ленточных фундаментов';
            break;
        case "bur":
            $type_text = 'буронабивных фундаментов';
            break;
        case "plita":
            $type_text = 'фундаментной плиты';
            break;
        case "s_podvalom":
            $type_text = 'фундаментов с подвалом';
            break;
        case "monolit":
            $type_text = 'монолитных фундаментов';
            break;
    }
    switch ($geo) {
        case "lomo":
            $geo_text = 'в Ломоносовском районе';
            break;
        case "kirov":
           $geo_text = 'в Кировском районе';
            break;
    }
    ?>


</head>
<body>

<div id="callback" class="modal callback">
    <div class="modal-box">
        <a class="modal_close"></a>
        <div class="modal-title">
            Заказать звонок
            <span>Заполните форму и мы Вам перезвоним в ближайшее время</span>
        </div>
        <form action='letter.php' method='POST' name='form'>
            <input type="text" id="name" name="name" value=""  class="input_name" data-placeholder="Имя" />
            <input type="text" id="nomer" name="nomer" value="" class="input_phone" data-placeholder="Телефон" />
            <input class="bttn" id="submit2" name="submit2" type="submit" value="Заказать звонок" />
        </form>
    </div>
</div>
<div id="makeorder" class="modal makeorder">
    <div class="modal-box">
        <a class="modal_close"></a>
        <div class="modal-title">
            Расчет стоимости
            <span>Заполните форму и мы свяжемся с Вами в ближайшее время</span>
        </div>
        <form action='letter.php' method='POST' name='form'>
            <input type="text" name="name" value=""  class="input_name" data-placeholder="Имя" />
            <input type="text" name="phone" value="" class="input_phone" data-placeholder="Телефон" />
            <input class="bttn" name="submit" type="submit" value="Оставить заявку" />
        </form>
    </div>
</div>
<div id="makeorder_design" class="modal makeorder">
    <div class="modal-box">
        <a class="modal_close"></a>
        <div class="modal-title">
            Заявка
            <span>Оставьте заявку на бесплатную консультацию по строительству</span>
        </div>
        <form action='letter.php' method='POST' name='form'>
            <input type="text" name="name" value=""  class="input_name" data-placeholder="Имя" />
            <input type="text" name="phone" value="" class="input_phone" data-placeholder="Телефон" />
            <input class="bttn" name="submit6" type="submit" value="Оставить заявку" />
        </form>
    </div>
</div>
<div id="question" class="modal question">
    <div class="modal-box">
        <a class="modal_close"></a>
        <div class="modal-title">
            Задать вопросы
            <span>Заполните форму и мы свяжемся с Вами в ближайшее время</span>
        </div>
        <form action='letter.php' method='POST' name='form'>
            <div class="form_left">
                <input type="text" name="name" value=""  class="input_name" data-placeholder="Имя" />
                <input type="text" name="email" value="" class="input_email" data-placeholder="E-mail" />

                <input type="text" name="phone" value="" class="input_phone" data-placeholder="Телефон" />
            </div>
            <div class="form_right">
                <textarea name="mess" data-placeholder="Ваш вопрос" ></textarea>
            </div>
            <div class="clear"></div>
            <input class="bttn" name="submit4" type="submit" value="Задать вопрос" />
        </form>
    </div>
</div>
<div id="test" class="modal test">
    <div class="modal-box">
        <a class="modal_close"></a>
        <div class="modal-title">
            Заказать звонок
            <span>Заполните форму и мы Вам перезвоним в ближайшее время</span>
        </div>
        <script type="text/javascript">
            $(function () {
                var $sections = $('.form-section');

                function navigateTo(index) {
                    // Mark the current section with the class 'current'
                    $sections
                        .removeClass('current')
                        .eq(index)
                        .addClass('current');
                    // Show only the navigation buttons that make sense for the current section:
                    $('.form-navigation .previous').toggle(index > 0);
                    var atTheEnd = index >= $sections.length - 1;
                    $('.form-navigation .next').toggle(!atTheEnd);
                    $('.form-navigation [type=submit]').toggle(atTheEnd);
                }

                function curIndex() {
                    // Return the current index by looking at which section has the class 'current'
                    return $sections.index($sections.filter('.current'));
                }

                // Previous button is easy, just go back
                $('.form-navigation .previous').click(function() {
                    navigateTo(curIndex() - 1);
                });

                // Next button goes forward iff current block validates
                $('.form-navigation .next').click(function() {
                    $('.demo-form').parsley().whenValidate({
                        group: 'block-' + curIndex()
                    }).done(function() {
                        navigateTo(curIndex() + 1);
                    });
                });

                // Prepare sections by setting the `data-parsley-group` attribute to 'block-0', 'block-1', etc.
                $sections.each(function(index, section) {
                    $(section).find(':input').attr('data-parsley-group', 'block-' + index);
                });
                navigateTo(0); // Start at the beginning
            });
        </script>
        <form class="demo-form">
            <div class="form-section">
                <label for="firstname">First Name:</label>
                <input type="text" class="form-control" name="firstname" required="">

                <label for="lastname">Last Name:</label>
                <input type="text" class="form-control" name="lastname" required="">
            </div>

            <div class="form-section">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" required="">
            </div>

            <div class="form-section">
                <label for="color">Favorite color:</label>
                <input type="text" class="form-control" name="color" required="">
            </div>

            <div class="form-navigation">
                <button type="button" class="previous btn btn-info pull-left">&lt; Previous</button>
                <button type="button" class="next btn btn-info pull-right">Next &gt;</button>
                <input type="submit" class="btn btn-default pull-right">
                <span class="clearfix"></span>
            </div>

        </form>
    </div>
</div>


<div class="page">
  <header>
      <div class="forlogo">
          <div class="logoblock">
            <div class="logotype">
            </div><div class="nazv">
                    <span style="display: block;font-size: 1.5em;height: 20px;"> МонтажСервис</span>
                    <span style="height: 15px;display: block;"> Работаем с 2009 года</span>
                </div>
          </div>
          <div class="tel">
          <a id="tel" href="tel:+78125554433">+7 (812) 555-44-33</a>
          </div>
          <div class="clbk">
              <a rel="leanModal" name="makeorder" href="#callback" class="btn-callback">Перезвоните мне!</a>
          </div>
      </div>
      <div class="formenu">
          <nav>
              <a href="#">Главная</a>
              <a href="#">О нас</a>
              <a href="#">Цены</a>
              <a href="#">Наши работы</a>
              <a href="#">Контакты</a>
              <div class="animation start-home"></div>
          </nav>
      </div>
  </header>

  <div class="counts" id="cifr">
    <div class="rotator">
        <div id="slider" class="nivoSlider">
            <img src="images/1.jpg" alt="" />
            <img src="images/4.jpg" alt="" />
            <img src="images/6.jpg" alt="" />
            <img src="images/7.jpg" alt="" />
        </div>
      </div>
	<div class="logo">
              <div class="quiz">
                  <!--<div class="btnphone">-->
                  <!--<a href="">-->
                  <!--<i class="Phon is-animating"></i>-->
                  <!--</a>-->
                  <!--</div>-->
                  <div class="offer-quiz">
                    <h1>Рассчитайте фундамент за 5 минут и получите скидку 10%!</h1>
                    <span>Ответьте на 5 вопросов, получите скидку, бесплатный выезд специалиста и предврительный расчет фундамента!</span>
                  </div><div class="pulse">
                    <a id="go" rel="leanModal" name="makeorder" href="#test" class="test">Нана!</a>
                  </div>
              </div>
        <div class="ttl_block">
            <h1>
<!--                <span>Производство теплых фундаментов</span>-->
                Строительство <b><?php echo $type_text; ?></b> под ключ
                <?php echo $geo_text; ?>

            </h1>
        </div>
    </div>

	<div class="wrap">
      <div class="count c1">
        <span>10 лет</span>
        на рынке<br />строительных<br />и ремонтных<br />услуг
      </div>
      <div class="count">
        <span>Более</br >1000</span>
        успешно<br />реализованных<br />проектов
      </div>
      <div class="count">
                                <span>10 лет<br />гарантия</span>
        <br />на фундаменты по договору<br />
      </div>
      <div class="count">
                                осуществляем все виды работ<br /><br />
        <span>круглый</br >год</span>
      </div>
      <div class="clear"></div>
    </div>
  </div>

<section class="offer" id="uslugi">
	<div class="wrap">
		<!--<h2>Какой фундамент выбрать?</h2>-->
		<!--<p align="justify">Правильный тип фундамента подбирается под особенности участка, учитываются грунтовые воды, рельеф, тип грунта, наличие валунов и т.п. Даже если у соседей стоит дом на винтовых сваях, нельзя на 100% быть уверенным, что они подойдут и у Вас. Мы установили более 1000 фундаментов в СПб и Ленинградской области, и наш опыт позволяет с высокой долей вероятности прогнозировать подходящий тип фундамента, исходя из местоположения Вашего участка. Если остались сомнения, то мы БЕСПЛАТНО приедем и сделаем анализ грунта!</p>-->
		<div class="offer_block" id="3">
			<div class="offer_one3 o1">
                <h3>Винтовые сваи</h3>
				<div class="offer_img">
				</div>
                <div class="offer_text">
				<a id="go" rel="leanModal" name="makeorder" href="#makeorder" class="bttn">Рассчитать стоимость</a>
				</div>
			</div>
			<div class="offer_one3 o2">
                <h3>Ленточный фундамент</h3>
				<div class="offer_img">
				</div>
			    <div class="offer_text">
					<a id="go" rel="leanModal" name="makeorder" href="#makeorder" class="bttn">Рассчитать стоимость</a>
				</div>
			</div>
			<div class="offer_one3 o6">
                <h3>Плитный фундамент</h3>
				<div class="offer_img">
				</div>
				<div class="offer_text">
					<a id="go" rel="leanModal" name="makeorder" href="#makeorder" class="bttn">Рассчитать стоимость</a>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="offer_block">
			<div class="offer_one o3">
                <h3>Утепленная лента</h3>
                <div class="offer_img">
				</div>
				<div class="offer_text">
					<a id="go" rel="leanModal" name="makeorder" href="#makeorder" class="bttn">Рассчитать стоимость</a>
				</div>
			</div>
			<div class="offer_one o5">
                <h3>Бетонные сваи</h3>
                <div class="offer_img">
				</div>
				<div class="offer_text">
				<a id="go" rel="leanModal" name="makeorder" href="#makeorder" class="bttn">Рассчитать стоимость</a>
				</div>
			</div>
			<div class="offer_one o4">
                <h3>Цокольный этаж</h3>
				<div class="offer_img">
				</div>
				<div class="offer_text">
        			<a id="go" rel="leanModal" name="makeorder" href="#makeorder" class="bttn">Рассчитать стоимость</a>
				</div>
			</div>        
			<div class="clear"></div>
		</div>

    </div>
  </section>

    <section class="done" id="gotovo">
        <div class="wrap">
            <h2>
                <em id="2">эти проекты</em>
                мы уже воплотили
            </h2>
        </div>
        <div class="done_one d1">
            <div class="done_ttl">
            </div>
            <div id="carousel-gallery" class="touchcarousel black-and-white wide-carousel">
                <ul class="touchcarousel-container">
                    <li class="touchcarousel-item">
                        <div class="grayscale">
                            <img src="images/fancy/7s.jpg" />
                        </div>
                        <a class="fancybox zoom" href="images/sdelano/1/7.jpg" data-fancybox-group="pr1" title="Август 2014"></a>
                        <img class="carousel-img" src="images/fancy/7.jpg" width="541" height="349" />
                    </li>
                    <li class="touchcarousel-item">
                        <div class="grayscale">
                            <img src="images/fancy/8s.jpg" />
                        </div>
                        <a class="fancybox zoom" href="images/sdelano/1/8.jpg" data-fancybox-group="pr1" title="Август 2014"></a>
                        <img class="carousel-img" src="images/fancy/8.jpg" width="606" height="349" />
                    </li>
                    <li class="touchcarousel-item">
                        <div class="grayscale">
                            <img src="images/fancy/9s.jpg" />
                        </div>
                        <a class="fancybox zoom" href="images/sdelano/1/9.jpg" data-fancybox-group="pr1" title="Июнь 2013"></a>
                        <img class="carousel-img" src="images/fancy/9.jpg" width="457" height="349" />
                    </li>
                    <li class="touchcarousel-item">
                        <div class="grayscale">
                            <img src="images/fancy/13s.jpg" />
                        </div>
                        <a class="fancybox zoom" href="images/sdelano/1/13.jpg" data-fancybox-group="pr1" title="Август 2012"></a>
                        <img class="carousel-img" src="images/fancy/13.jpg" width="530" height="349" />
                    </li>
                    <li class="touchcarousel-item">
                        <div class="grayscale">
                            <img src="images/fancy/14s.jpg" />
                        </div>
                        <a class="fancybox zoom" href="images/sdelano/1/14.jpg" data-fancybox-group="pr1" title="Май 2013"></a>
                        <img class="carousel-img" src="images/fancy/14.jpg" width="505" height="349" />
                    </li>
                    <li class="touchcarousel-item">
                        <div class="grayscale">
                            <img src="images/fancy/7s.jpg" />
                        </div>
                        <a class="fancybox zoom" href="images/sdelano/1/7.jpg" data-fancybox-group="pr1" title="Август 2014"></a>
                        <img class="carousel-img" src="images/fancy/7.jpg" width="541" height="349" />
                    </li>
                    <li class="touchcarousel-item">
                        <div class="grayscale">
                            <img src="images/fancy/8s.jpg" />
                        </div>
                        <a class="fancybox zoom" href="images/sdelano/1/8.jpg" data-fancybox-group="pr1" title="Август 2014"></a>
                        <img class="carousel-img" src="images/fancy/8.jpg" width="606" height="349" />
                    </li>
                    <li class="touchcarousel-item">
                        <div class="grayscale">
                            <img src="images/fancy/9s.jpg" />
                        </div>
                        <a class="fancybox zoom" href="images/sdelano/1/9.jpg" data-fancybox-group="pr1" title="Июнь 2013"></a>
                        <img class="carousel-img" src="images/fancy/9.jpg" width="457" height="349" />
                    </li>
                    <li class="touchcarousel-item">
                        <div class="grayscale">
                            <img src="images/fancy/3s.jpg" />
                        </div>
                        <a class="fancybox zoom" href="images/sdelano/1/3.jpg" data-fancybox-group="pr1" title="Июль 2014"></a>
                        <img class="carousel-img" src="images/fancy/3.jpg" width="606" height="349" />
                    </li>
                    <li class="touchcarousel-item">
                        <div class="grayscale">
                            <img src="images/fancy/1s.jpg" />
                        </div>
                        <a class="fancybox zoom" href="images/sdelano/1/1.jpg" data-fancybox-group="pr1" title="Май 2013"></a>
                        <img class="carousel-img" src="images/fancy/1.jpg" width="600" height="349" />
                    </li>
                    <li class="touchcarousel-item">
                        <div class="grayscale">
                            <img src="images/fancy/5s.jpg" />
                        </div>
                        <a class="fancybox zoom" href="images/sdelano/1/5.jpg" data-fancybox-group="pr1" title="Декабрь 2013"></a>
                        <img class="carousel-img" src="images/fancy/5.jpg" width="541" height="349" />
                    </li>
                    <li class="touchcarousel-item">
                        <div class="grayscale">
                            <img src="images/fancy/13s.jpg" />
                        </div>
                        <a class="fancybox zoom" href="images/sdelano/1/13.jpg" data-fancybox-group="pr1" title="Август 2012"></a>
                        <img class="carousel-img" src="images/fancy/13.jpg" width="530" height="349" />
                    </li>
                    <li class="touchcarousel-item">
                        <div class="grayscale">
                            <img src="images/fancy/14s.jpg" />
                        </div>
                        <a class="fancybox zoom" href="images/sdelano/1/14.jpg" data-fancybox-group="pr1" title="Май 2013"></a>
                        <img class="carousel-img" src="images/fancy/14.jpg" width="505" height="349" />
                    </li>
                </ul>
            </div>
        </div>
        <div class="done_one d2" id="studia">
            <div id="carousel-gallery2" class="touchcarousel black-and-white wide-carousel">
                <ul class="touchcarousel-container">
                    <li class="touchcarousel-item">
                        <div class="grayscale">
                            <img src="images/fancy/10s.jpg" />
                        </div>
                        <a class="fancybox zoom" href="http://sk-usadiba.ru/images/sdelano/2/10.jpg" data-fancybox-group="pr2" title="Апрель 2009"></a>
                        <img class="carousel-img" src="images/fancy/10.jpg" width="440" height="349" />
                    </li>
                    <li class="touchcarousel-item">
                        <div class="grayscale">
                            <img src="images/fancy/11s.jpg" />
                        </div>
                        <a class="fancybox zoom" href="http://sk-usadiba.ru/images/sdelano/2/11.jpg" data-fancybox-group="pr2" title="Ноябрь 2010"></a>
                        <img class="carousel-img" src="images/fancy/11.jpg" width="575" height="349" />
                    </li>
                    <li class="touchcarousel-item">
                        <div class="grayscale">
                            <img src="images/fancy/12s.jpg" />
                        </div>
                        <a class="fancybox zoom" href="http://sk-usadiba.ru/images/sdelano/2/12.jpg" data-fancybox-group="pr2" title="Ноябрь 2011"></a>
                        <img class="carousel-img" src="images/fancy/12.jpg" width="480" height="349" />
                    </li>
                    <li class="touchcarousel-item">
                        <div class="grayscale">
                            <img src="images/fancy/15s.jpg" />
                        </div>
                        <a class="fancybox zoom" href="http://sk-usadiba.ru/images/sdelano/2/15.jpg" data-fancybox-group="pr2" title="Июль 2012"></a>
                        <img class="carousel-img" src="images/fancy/15.jpg" width="600" height="349" />
                    </li>
                    <li class="touchcarousel-item">
                        <div class="grayscale">
                            <img src="images/fancy/2s.jpg" />
                        </div>
                        <a class="fancybox zoom" href="http://sk-usadiba.ru/images/sdelano/2/2.jpg" data-fancybox-group="pr2" title="Сентябрь 2012"></a>
                        <img class="carousel-img" src="images/fancy/2.jpg" width="606" height="349" />
                    </li>
                    <li class="touchcarousel-item">
                        <div class="grayscale">
                            <img src="images/fancy/4s.jpg" />
                        </div>
                        <a class="fancybox zoom" href="http://sk-usadiba.ru/images/sdelano/2/4.jpg" data-fancybox-group="pr2" title="Октябрь 2011"></a>
                        <img class="carousel-img" src="images/fancy/4.jpg" width="413" height="349" />
                    </li>
                    <li class="touchcarousel-item">
                        <div class="grayscale">
                            <img src="images/fancy/6s.jpg" />
                        </div>
                        <a class="fancybox zoom" href="http://sk-usadiba.ru/images/sdelano/2/6.jpg" data-fancybox-group="pr2" title="Октябрь 2010"></a>
                        <img class="carousel-img" src="images/fancy/6.jpg" width="474" height="349" />
                    </li>
                    <li class="touchcarousel-item">
                        <div class="grayscale">
                            <img src="images/fancy/10s.jpg" />
                        </div>
                        <a class="fancybox zoom" href="http://sk-usadiba.ru/images/sdelano/2/10.jpg" data-fancybox-group="pr2" title="Апрель 2009"></a>
                        <img class="carousel-img" src="images/fancy/10.jpg" width="440" height="349" />
                    </li>
                    <li class="touchcarousel-item">
                        <div class="grayscale">
                            <img src="images/fancy/11s.jpg" />
                        </div>
                        <a class="fancybox zoom" href="http://sk-usadiba.ru/images/sdelano/2/11.jpg" data-fancybox-group="pr2" title="Ноябрь 2010"></a>
                        <img class="carousel-img" src="images/fancy/11.jpg" width="575" height="349" />
                    </li>
                    <li class="touchcarousel-item">
                        <div class="grayscale">
                            <img src="images/fancy/12s.jpg" />
                        </div>
                        <a class="fancybox zoom" href="http://sk-usadiba.ru/images/sdelano/2/12.jpg" data-fancybox-group="pr2" title="Ноябрь 2011"></a>
                        <img class="carousel-img" src="images/fancy/12.jpg" width="480" height="349" />
                    </li>
                    <li class="touchcarousel-item">
                        <div class="grayscale">
                            <img src="images/fancy/15s.jpg" />
                        </div>
                        <a class="fancybox zoom" href="http://sk-usadiba.ru/images/sdelano/2/15.jpg" data-fancybox-group="pr2" title="Июль 2012"></a>
                        <img class="carousel-img" src="images/fancy/15.jpg" width="600" height="349" />
                    </li>
                </ul>
            </div>
        </div>

    </section>


    <section class="reasons">
    <div class="wrap">
      <h2>
        <br />Наши преимущества
        <em>благодаря которым мы гарантируем качество</em>
        <em>и комфорт в работе с нами</em>
      </h2>
      <div class="reasons_block">
        <div class="reason r1">
          <b>Справедливый договор</b><br />В договоре четко прописаны<br />сроки и стоимость строительства<br /><br />
        </div>
        <div class="reason r2">
          <b>Точная смета</b><br />обеспечит прозрачность расчетов<br />Вы знаете, сколько платите и за что<br /><br />
        </div>
        <div class="reason r3">
          <b>Поэтапная оплата</b><br />Вы будете платить только<br />по факту выполнения каждого<br />этапа работ
        </div>
        <div class="clear"></div>
        <div class="reason r4">
          <b>Качественные стройматериалы</b><br />Только качественная продукция<br />от проверенных поставщиков<br /><br />
        </div>
        <div class="reason r5">
          <b>Инженерный надзор</b><br />На каждом этапе работ<br />за работой бригады следит прораб.
        </div>
        <div class="reason r6">
          <b>Гарантийные обязательства</b><br />Мы уверены в надежности и качестве,<br />поэтому даем гарантию до 7 лет.
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </section>

<div class="new_form">
	<div class="new_form_wrapp">
		<div class="new_form_h1">Мы изготовили более 1000 фундаментов</div>
        <div class="new_form_h2">и готовы дать консультацию на Вашем участке во время <b>бесплатной пробы грунта</b></div>
        <div class="new_form_btn bttn">
            <a id="go" rel="leanModal" name="makeorder_design" href="#makeorder_design">Заказать выезд инженера</a>
        </div>
	</div>
</div>  
   
    
  
  


  

        <section class="hww" id="4">
    <div class="wrap">
      <h2 style="font-family: 'hel_light'">География реализованных объектов<em>Фундаменты в СПб и ЛО</em></h2>
                </div>
        </section>
<div id="map" style="width: 100%; height: 600px;">
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af3e00f713e47ee1026aba0d95730762ee87a1dc7ea96e64ac2c5b3c3a4dc1e5d&amp;width=100%25&amp;height=671&amp;lang=ru_RU&amp;"></script>
</div>
  <section class="any_q">
    <div class="wrap">
      <span>Остались <em>вопросы?</em></span>
      <a id="go" rel="leanModal" name="my" href="index.html#question">Задайте их менеджеру</a>
      <div class="clear"></div>
    </div>
  </section>
  <footer>
    <div class="wrap">
      <div class="f_phone">
        <em>+7 (906)</em> 815 76 46
        <a id="go" rel="leanModal" name="callback" href="index.html#callback" class="mc">заказать звонок</a>
      </div>      
      <div class="clear"></div>
    </div>
  </footer>
</div>

</body>
</html>

