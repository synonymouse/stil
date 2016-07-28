<?php
/*
Template Name: Главный шаблон.php
*/
?>
<?php get_header(); ?>
<?php wp_head(); ?>
        <!--Слайдер-->
        <div class="m-slide"> 
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="5000">
            <!-- Индикаторы слайдера -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1" ></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              <li data-target="#carousel-example-generic" data-slide-to="3"></li>
              <li data-target="#carousel-example-generic" data-slide-to="4"></li>
              <li data-target="#carousel-example-generic" data-slide-to="5"></li>
              <li data-target="#carousel-example-generic" data-slide-to="6"></li>
              <li data-target="#carousel-example-generic" data-slide-to="7"></li>
            </ol>

            <!-- Слайдер wrap -->
            <div class="carousel-inner" role="listbox">
            <!-- <div class="item active">
            <a href="/aktsii/den-krasoty/">
                <img src="<? //php bloginfo('template_url'); ?>/images/sotys-full.jpg" alt="...">
                </a>
              </div> -->
              <div class="item active">
              <a href="/aktsii/">
                <img src="<?php bloginfo('template_url'); ?>/images/slide9.jpg" alt="...">
                 </a>
              </div>
              <div class="item">
              <a href="/aktsii/">
                <img src="<?php bloginfo('template_url'); ?>/images/slide02.jpg" alt="...">
                 </a>
              </div>
              
              <div class="item">
            <a href="/krasivaya-vesna/">
                <img src="<?php bloginfo('template_url'); ?>/images/slide6.jpg" alt="...">
                </a>
              </div>
            
              <div class="item">
              <a href="/aktsii/kollageniarij-innovatsionnaya-svetovaya-terapiya/">
                <img src="<?php bloginfo('template_url'); ?>/images/slide8.jpg" alt="...">
                 </a>
              </div>
              <div class="item">
                <img src="<?php bloginfo('template_url'); ?>/images/slide7(1).jpg" alt="...">
              </div>
              <div class="item">
                <img src="<?php bloginfo('template_url'); ?>/images/slide2.jpg" alt="...">
              </div>
              <!-- <div class="item">
                <img src="<?php bloginfo('template_url'); ?>/images/slide3.jpg" alt="...">
              </div> -->
              <div class="item">
                <img src="<?php bloginfo('template_url'); ?>/images/slide4.jpg" alt="...">
              </div>
              <div class="item">
                <img src="<?php bloginfo('template_url'); ?>/images/slide5.jpg" alt="...">
              </div>
            </div>

            <!-- Контролеры -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <div class="clear"></div>
        <div class="wrap-big">
      <div class="wrap">
  <div class="features mobile-disable">

  <div class="col-md-2">
  <a href="/nashi-preimushhestva/">
    <img src="/wp-content/themes/Salon/images/feat-icon-1.png">
    <p>Чай, кофе всем гостям</p>
  </a>
  </div>
  <div class="col-md-2">
  <a href="/nashi-preimushhestva/">
    <img src="/wp-content/themes/Salon/images/feat-icon-2.png">
    <p>Принимаем пластиковые карты </p>
  </a>
  </div>
  <div class="col-md-2">
  <a href="/nashi-preimushhestva/">
    <img src="/wp-content/themes/Salon/images/feat-icon-3.png">
    <p>Бесплатный WIFI </p>
  </a>
  </div>
  <div class="col-md-2">
  <a href="/nashi-preimushhestva/">
    <img src="/wp-content/themes/Salon/images/feat-icon-4.png">
    <p>Безопасность всех процедур</p>
  </a>
  </div>
  <div class="col-md-2">
  <a href="/nashi-preimushhestva/">
    <img src="/wp-content/themes/Salon/images/feat-icon-5.png">
    <p>Детская комната </p>
  </a>
  </div>
  <div class="col-md-2">
  <a href="/nashi-preimushhestva/">
    <img src="/wp-content/themes/Salon/images/feat-icon-6.png">
    <p>Круглосуточный прием</p>
  </a>
  </div>
  </div>  
</div>
</div>
        <!--Слайдер-->
        <!--Начало конткнта-->
          <div class="content-m">
          <!--Вывод новости-->
                <div id="content-l" class="left">
                  <?php if(have_posts()) : ?>
                   <?php while(have_posts()) : the_post(); ?>
                      <div id="news">
                        <h1 class="title"><?php the_title(); ?></h1>
                         <p><?php the_content(); ?></p>
                      </div>
                  <?php endwhile; ?>
                  <?php endif; ?>
                </div>
            <!--Вывод новости-->
            <div class="sidebar right">
              <?php get_sidebar(); ?> 
            </div>
          </div>
        <!--Начало конткнта-->
      </div>
    </div>
    <?php get_footer(); ?>
