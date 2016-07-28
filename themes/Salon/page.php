<?php get_header(); ?>
<?php wp_head(); ?>

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
                      <br>
                      <br>
                      <br>
                    <button class="btn btn-danger more-btn" type="button" data-toggle="modal" data-target=".order-modal" style="top: 0;">Записаться на услугу</button>

                      <div class="clear"></div>
                      
                      <br>
                      <br>
                                      <center>
                  <h4><i class="fa fa-user-plus"></i> Поделись с друзьями</h4>
                  <div class="share42init" data-url="<?php the_permalink() ?>" data-title="<?php the_title() ?>"></div>
                  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/share42/share42.js"></script> 
                </center>

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
