  
  
  <?php
  
  include 'includes/head.php'; ?>
  <body>
    <?php get_header(); 

    get_template_part('template-parts/index', 'slider');

    get_template_part('template-parts/carousel', 'players');
    
    get_template_part('template-parts/section', 'two_cols');

    get_template_part('template-parts/carousel', 'tienda');

    get_template_part('template-parts/section', 'three_cats');

    wp_footer(); ?>
    <script>
      $('.slick-jugadores').slick({
        dots: true,
        arrows: true, 
        infinite: false,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 2,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
      });

    </script>
  </body>
</html>