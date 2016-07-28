<?php 
/*
Template Name: Отзывы
 */

get_header(); ?>
<?php wp_head(); ?>
<!--Начало конткнта-->
<div class="content-m">
    <!--Вывод новости-->
  <h1 class="title"><?the_title();?></h1>
    <div id="content-l" class="columns">
        <?php $loop = new WP_Query( array( 'post_type' => 'otzyv','posts_per_page' => -1)); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <?php //while ( have_posts() ) : the_post(); ?>
        <div id="news" class="reviews">
                <a href="<?php 
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
    the_post_thumbnail_url( 'full' );
} 
?>" class="" rel="lightbox">
                    <?php the_post_thumbnail(); ?>
                </a>
             
        </div>
        
        <?php endwhile; //wp_reset_query(); ?>
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
