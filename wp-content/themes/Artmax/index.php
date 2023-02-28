
<?php

get_header();

?>
    <div class="container">
		<div class="promo__flex-wrapper">
			<div class="promo__virus-img">
			<img src="<?php bloginfo('template_url'); ?>/assets/img/virus.svg" alt="artmax">
			</div>
			<div class="promo__title">
					<img src="<?php bloginfo('template_url'); ?>/assets/img/artmax.svg" alt="artmax">
			</div>
			<div class="promo__subtitle">
					<img src="<?php bloginfo('template_url'); ?>/assets/img/internet-security.svg" alt="internet-security">
			</div>
			<div class="promo__text">
					Благодаря нашей многолетней практике, мы получили обширный опыт и можем предложить лучшие решения, которые работают в реальных условиях
			</div>
		</div>
		
    </div>
</section>
<section class="about">
    <div class="container">
        <div class="about__title">ArtMax IS — ведущая российская IT-компания и лидер в области защиты
        </div>
        <div class="about__wrapper">
		  		<div class="about__image">
					<img src="<?php bloginfo('template_url'); ?>/assets/img/programmer-rings.svg" alt="">
            </div>

            <div class="about__text-wrapper">
                <div class="about__bold-text">С 2004 года мы помогаем организациям по всему миру получить надежную защиту без лишней суеты.</div>
                <div class="about__norm-text">Благодаря нашей многолетней практике, мы получили обширный опыт и можем предложить лучшие решения, которые работают в реальных условиях</div>
                <div class="about__cards">

                    <div class="card-about">
                        <div class="card-about__wrapper">
									 <img class="card-about__green-stripe" src="<?php bloginfo('template_url'); ?>/assets/img/green-stripe.svg" alt="green-stripe">
									<div>
										<span class="card-about__number">12</span>
										<span class="card-about__thin-text">лет</span>
										<div>защиты сайтов и приложений</div>
									</div>

                        </div>
                    </div>

                    <div class="card-about">
                        <div class="card-about__wrapper">
									 <img class="card-about__green-stripe" src="<?php bloginfo('template_url'); ?>/assets/img/green-stripe.svg" alt="green-stripe">
                            <span class="card-about__number">300<sup>+</sup></span>
                            <span class="card-about__thin-text">проектов
								</span>
                            <div>по защите информации</div>
                        </div>
                    </div>

                </div>

                <div class="button about__button">
                    <a href="#form-anchor">Оставить заявку</a>
                </div>

            </div>
        </div>

    </div>
</section>
<section class="services">
    <div class="container">
        <h1 class="services__title">Услуги комплексной безопасности</h1>
        <div class="services__tabs">

				<div class="dropdown">
					<button onclick="myFunction()" class="dropbtn services__tab services__tab_active">Выпадающий</button>
						<div id="myDropdown" class="dropdown-content">
							<a href="#">Ссылка 1</a>
							<a href="#">Ссылка 2</a>
							<a href="#">Ссылка 3</a>
						</div>
				</div>

            <ul class="services__wrapper-tabs">

                <li class="services__tab services__tab_active">
                    <div class="services__image-tab">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/services__hand.svg" alt="">
                    </div>
                    <div class="services__text-tab">Защита от DDoS-атак</div>
                </li>
                <li class="services__tab">
                    <div class="services__image-tab">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/services__bot.svg" alt="">
                    </div>
                    <div class="services__text-tab">Защита от ботов
                    </div>
                </li>
                <li class="services__tab">
                    <div class="services__image-tab">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/services__wall.svg" alt="">
                    </div>
                    <div class="services__text-tab">Защита от взлома</div>
                </li>
            </ul>
        </div>

        <div class="services__blocks services__blocks_active">
            <div class="services__wrapper-blocks">

                <div class="services__content">
                    <div class="services__text">
						  Наши специалисты используют особую систему фильтрации, которая надежно защищает от DDoS-атак любой сложности, а воспользоваться услугой смогут как небольшие компании, так и крупные корпорации. Несмотря на то, что для нашей компании эта услуга считается новой, уже сейчас мы можем похвастаться некоторыми успешными внедрениями, которые обеспечивают высокий уровень защиты.<br><br>Кроме того, в нашей компании предусмотрена круглосуточная техническая поддержка, сотрудники которой оперативно предоставят помощь и консультации.
                    </div>
                </div>

                <div class="info-cards">
                    <div class="info-card">
                        <div class="info-card__wrapper">
                            <div class="info-card__title">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/shieldmark.svg" alt="shield">
                                <div>Защита от атак на всех уровнях ISO OSI, включая L7
                                </div>
                            </div>
                            <div class="info-card__text">
                                Блокируем масштабные атаки на сетевую инфраструктуру и точечные атаки на приложения
                            </div>
                        </div>
                    </div>
                    <div class="info-card">
                        <div class="info-card__wrapper">
                            <div class="info-card__title">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/shieldmark.svg" alt="shield">
                                <div>Прозрачность для легитимных пользователей
                                </div>
                            </div>
                            <div class="info-card__text">
                                Мы не используем CAPTCHA и прочие проверки, раздражающие пользователей приложения.
                            </div>
                        </div>
                    </div>
                    <div class="info-card">
                        <div class="info-card__wrapper">
                            <div class="info-card__title">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/shieldmark.svg" alt="shield">
                                <div>Легкая интеграция с мобильными приложениями
                                </div>
                            </div>
                            <div class="info-card__text">
                                Развитый API предоставляет большое количество возможностей
                            </div>
                        </div>
                    </div>
                    
                    <div class="info-card">
                        <div class="info-card__wrapper">
                            <div class="info-card__title">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/shieldmark.svg" alt="shield">
                                <div>Легкость подключения
                                </div>
                            </div>
                            <div class="info-card__text">
                                Предоставляем различные варианты подключения, включая DNS и BGP
                            </div>
                        </div>
                    </div>
                    
                </div>

            </div>
        </div>



		  <div class="services__blocks">
            <div class="services__wrapper-blocks">

                <div class="services__content">
                    <div class="services__text">
						  Боты могут использоваться злоумышленниками для парсинга, кражи паролей и других персональных данных пользователей. Из-за некачественной защиты от ботов падает авторитет компании, да и сам онлайн-бизнес может пострадать.<br><br>Мы предлагаем решения, которые позволяют качественно фильтровать трафик, вносить изменения в пользовательские настройки, а различные способы обнаружения ботов обеспечивают надежную защиту сайта.
                    </div>
                    
                </div>

                <div class="info-cards">

                    <div class="info-card">
                        <div class="info-card__wrapper">
                            <div class="info-card__title">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/shieldmark.svg" alt="shield">
                                <div>Гарантированный̆ уровень доступности
                                </div>
                            </div>
                            <div class="info-card__text">
                                Вы не платите за сервис, если уровень SLA не был соблюден
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

		  <div class="services__blocks">
            <div class="services__wrapper-blocks">

                <div class="services__content">
                    <div class="services__text">
						  Данная услуга считается комплексной, так как направлена не только на непрерывную защиту сайтов от кражи или изменения данных сайта, но и на оперативное обнаружение и устранение уязвимостей, которые могут в дальнейшем стать причиной взлома сайта.<br><br>Для качественной защиты от взлома мы используем современные технологии и облачные решения, которые позволяют тонко распознавать и блокировать любые уязвимости сайта.
                    </div>
                    
                </div>

                <div class="info-cards">
                    <div class="info-card">
                        <div class="info-card__wrapper">
                            <div class="info-card__title">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/shieldmark.svg" alt="shield">
                                <div>Защита от атак на всех уровнях ISO OSI, включая L7
                                </div>
                            </div>
                            <div class="info-card__text">
                                Блокируем масштабные атаки на сетевую инфраструктуру и точечные атаки на приложения
                            </div>
                        </div>
                    </div>
                    
                    <div class="info-card">
                        <div class="info-card__wrapper">
                            <div class="info-card__title">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/shieldmark.svg" alt="shield">
                                <div>Легкость подключения
                                </div>
                            </div>
                            <div class="info-card__text">
                                Предоставляем различные варианты подключения, включая DNS и BGP
                            </div>
                        </div>
                    </div>
                    <div class="info-card">
                        <div class="info-card__wrapper">
                            <div class="info-card__title">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/shieldmark.svg" alt="shield">
                                <div>Гарантированный̆ уровень доступности
                                </div>
                            </div>
                            <div class="info-card__text">
                                Вы не платите за сервис, если уровень SLA не был соблюден
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

		  <div class="button about__button services__button">
                        <a href="#form-anchor">Защитить сайт</a>
                    </div>

    </div>
</section>
<section id="form-anchor" class="form">
    <div class="container">
        <div class="form__title">
            Заполните форму ниже, и мы вскоре свяжемся с вами
        </div>
        <div class="feed-form">
            <?=do_shortcode('[contact-form-7 id="7" title="Контактная форма 1"]');?>
        </div>
		  <!-- <form class="feed-form" action="#">
		              <input class="feed-form__name" name='full-name' placeholder="ФИО" type="text">
		              <input class="feed-form__number" name='phone' placeholder="Телефон" type="number">
		              <input class="feed-form__email" name='email' placeholder="E-mail" type="email">
		                <div class="feed-form__checkbox">
		  
		                    <div class="form-group">
		                        <label>
		                            <input type="checkbox" name="coding-notes" class="real-checkbox">
		                            <span class="custom-checkbox"></span>
		                            <div class="label-text">Даю согласие на обработку моих персональных данных на условиях и для целей, определенных в
		                                Согласии на обработку персональных данных
		                            </div>
		  
		                        </label>
		                    </div>
		  
		                    <button class="button button_submit">Отправить</button>
		                </div>
		          </form> -->
    </div>
</section>

<script>
    $(document).ready(function(){
        $('span.custom-checkbox').click(function(){
            if( $('#form_original_checkbox')[0].checked == true ) $('#form_original_checkbox')[0].checked = false;
            else $('#form_original_checkbox')[0].checked = true;
        })
        $('div.label-text').click(function(){
            if( $('#form_original_checkbox')[0].checked == true ) $('#form_original_checkbox')[0].checked = false;
            else $('#form_original_checkbox')[0].checked = true;
        })
    })
    
</script>

<?php get_footer(); ?>