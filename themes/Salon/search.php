<?php get_header(); ?>
<?php wp_head(); ?>
        <!--Слайдер-->
        <div class="m-slide">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Индикаторы слайдера -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Слайдер wrap -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="<?php bloginfo('template_url'); ?>/images/slide1.jpg" alt="...">
              </div>
              <div class="item">
                <img src="<?php bloginfo('template_url'); ?>/images/slide2.jpg" alt="...">
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
        <!--Слайдер-->
        <!--Начало конткнта-->
          <div class="content-m">
          <!--Вывод новости-->
                <div id="content-l" class="left">
                <center><h3>Результаты поиска</h3></center>
                  <?php if(have_posts()) : ?>
                   <?php while(have_posts()) : the_post(); ?>
                      <div id="news">
                        <h2 class="title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><i class="fa fa-external-link"></i> <?php the_title(); ?></a></h2>
                         <div class="newsthumb left"><?php the_post_thumbnail(); ?></div>
                        <p><?php echo mb_substr( strip_tags( get_the_excerpt() ), 0, 300 ); ?></p>
                        <span class="left cat"><i class="fa fa-tags left"></i> <?php the_category(); ?></span>
                      <a href="<?php the_permalink(); ?>" class="other right"><i class="fa fa-eye"></i> Читать всю новость</a>
                      </div>
                      <div class="clear"></div>
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
