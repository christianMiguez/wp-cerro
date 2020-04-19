<section class="single">
    <div class="container">
        <div class="row py-5">
        
        <div class="col-10 offset-1">
            <?php 
            if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    
                
            <h2 class="font-weight-bold"><?php the_title(); ?></h2>

            <div class="content">
                <?php the_content(); ?>
            </div>


            <?php endwhile; else :  _e( 'Ups, nada encontrado por aca.', 'textdomain' );
            
            endif;
            ?>
            </div>
        </div>
    </div>
</section>