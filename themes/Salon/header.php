<!DOCTYPE html>
<html lang="ru">
  <head>
  <?php wp_head(); ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.png" />
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.theme.css">
    <link href='https://fonts.googleapis.com/css?family=Lobster&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-19665200-57', 'auto');
  ga('send', 'pageview');

</script>

<script>
function startson(){
 var site='http://sonline.su/order_new2b/place_5725/theme_4';
 var css=document.createElement("link");
 css.setAttribute("rel", "stylesheet");
 css.setAttribute("type", "text/css");
 css.setAttribute("href", 'http://sonline.su/css/widget.css');
 document.getElementsByTagName("head")[0].appendChild(css);
 var url=site;
 if(window.innerHeight!=undefined){
  var iH=window.innerHeight,
    Yo=window.pageYOffset;
 }else{
  var d=document.documentElement,
    iH=d.clientHeight,
    Yo=d.scrollTop;
 }
 var h=iH/2+Yo-345;
 var popup=document.createElement("div");
 popup.innerHTML='<div class="conline-signup-popup-wrap" id="conline_signup_overlay"><div class="conline-overlay">&#160;</div><div class="conline-signup-popup-inner" style="top: '+h+'px"><span class="conline-popup-close" onclick="var po=document.getElementById(\'conline_signup_overlay\');po.parentNode.removeChild(po)">&nbsp;</span><iframe style="width:1024px; height:681px;" scrolling="no" src="'+url+'"></iframe></div></div>';
 document.getElementsByTagName("body")[0].appendChild(popup);
}
</script>
<script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
  </head>
  <body>
    <div class="wrap-big">
      <div class="wrap">
      <!--Шапка сайта-->
        <div class="header">
        <!--Мобильное меню-->
          <div class="m-menu">
          <!--Звонок мобильный-->
          <button type="button" class="main-mob-zvon right radius"  data-toggle="modal" data-target=".bs-example-modal-sm">
            <i class="fa fa-mobile fa-3x"></i>
          </button>
          <!--Звонок мобильный-->
            <div class="m-logo left">
              “СТИЛЯГИ”
            </div>

            <button type="button" class="main-mob right radius" data-toggle="collapse" data-target="#top-menu-m">
            <i class="fa fa-bars fa-2x"></i>
          </button>
          </div>

          <div class="top-menu-m" id="top-menu-m">
          <a href="/" class="home"><i class="fa fa-home fa-2x left"></i></a>
            <?php
              $args = array(
              'menu_id'=>'top',
              'theme_location'=>'top',
              'container'=>''
              );
              wp_nav_menu($args);
            ?>
          </div>
        <!--Меню сайта-->
        <!--Мобильное меню-->
        <div class="clear"></div>
        <div class="top-menu-new">
        <div class="top-menu" id="top-menu">
          <a href="/" class="home"><i class="fa fa-home fa-2x left"></i></a>
            <?php
              $args = array(
              'menu_id'=>'top',
              'theme_location'=>'top',
              'container'=>''
              );
              wp_nav_menu($args);
            ?>
            <!--Форма поиска-->
            <button type="button" class="right search-btn" id="seach-toggle-main" data-toggle="collapse" data-target="#main-search"><i class="fa fa-search"></i></button>
            <div class="search-wrap" id="main-search">
              <?php include (TEMPLATEPATH . "/searchform.php"); ?>
            </div>
            <!--Форма поиска-->
          </div>
          </div>
          <div class="clear"></div>
          <div class="header-logotype">
        <!--Логотип-->
          <a href="/"><div class="logo left"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt=""></div></a>
        <!--Логотип-->
        <!--Контакты-->
        <div class="cont left wow bounceInLeft">
          <img src="<?php bloginfo('template_url'); ?>/images/cont-bg.png" alt="">
        </div>
        <!--Контакты-->
        <!--Форма заказа-->
        <button type="button" class="btn btn-primary right" id="main-btn" data-toggle="modal" data-target=".callback">Обратный звонок</button>
        <div class="time-work">с 10:00 до 21:00</div>
          <div class="modal fade bs-example-modal-sm callback" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
              <div class="modal-content" id="main-modal">
                <div><?php echo do_shortcode('[contact-form-7 id="4" title="Контактная форма 1"]'); ?></div>
              </div>
            </div>
          </div>
          <div class="modal fade bs-example-modal-sm order-modal" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog modal-sm">
              <div class="modal-content" id="main-modal">
                <div><?php echo do_shortcode('[contact-form-7 id="1382" title="Записаться на услугу"]'); ?></div>
              </div>
            </div>
          </div>
        </div>
        <!--Форма заказа-->
        <div class="clear"></div>
        <!--Меню сайта-->
          <div class="top-menu " id="top-menu">
        
            <?php
              $args = array(
              'menu_id'=>'service',
              'theme_location'=>'service',
              'container'=>''
              );
              wp_nav_menu($args);
            ?>
            
          </div>
        <!--Меню сайта-->
        </div>
      <!--Шапка сайта-->
        <div class="clear"></div>
                  <!--Поиск моб-->
                <?php wp_nav_menu( array( 
                  'theme_location' => 'service',
                  'depth' => '1' 
                  ) ); ?>
          <!--Поиск моб-->