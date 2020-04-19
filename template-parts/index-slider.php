<section class="index-slider">
    <div class="container-fluid container-toped p-5">

        <div class="row" style="overflow:hidden;">
        

            <!-- nota1 -->
            <?php 
            
            global $post;

            $args = array( 'posts_per_page' => 1, 'tag' => 'nota1' );

            $myposts = get_posts( $args );
            foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                <!-- nota1 -->
            <div class="col-sm-12 p-0 col-md-6 col-lg-6">
                
                <a href="<?php echo get_the_permalink($post->ID); ?>">
                    <img class="card-img img-fluid" src="<?php echo get_the_post_thumbnail_url( $post->ID, 'medium' ); ?>" alt="">
                </a>
                    <div class="card-img-overlay d-flex linkfeat">
                    <a href="<?php echo get_the_permalink($post->ID); ?>" class="align-self-end text-white">
                        <span class="badge badge-primary"><?php echo 'categoria'; ?> </span> 
                        <h2 class="card-title font-weight-bold m-0"><?php echo $post->post_title; ?></h3>
                    </a>
                </div>
            </div> <!-- /end col-sm-12 -->

            <?php endforeach; 
            wp_reset_postdata(); ?> <!-- /end col-sm-12 -->

            <div class="col-6 p-0 d-lg-block"> <!-- start col-6 main -->

                <div class="row">

                <?php 
                
                    global $post;                
                    
                    $args = array( 'posts_per_page' => 1, 'tag' => 'nota2' );

                    $myposts = get_posts( $args );
                    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                        
                    <div class="col-6 p-0"> 
                        <div class="card bg-dark text-white">
                            <a href="<?php echo get_the_permalink($post->ID); ?>">
                                <img class="card-img img-fluid" src="<?php echo get_the_post_thumbnail_url( $post->ID, 'medium' ); ?>" alt="">
                            </a>
                            <div class="card-img-overlay d-flex linkfeat">
                                <a href="<?php echo get_the_permalink($post->ID); ?>" class="align-self-end text-white">
                                    <span class="badge badge-primary">Juveniles</span> 
                                    <h3 class="card-title m-0"><?php echo get_the_title($post->ID); ?></h3>
                                </a>
                            </div>
                        </div>
                    </div> <!-- /end col-6 -->

                    <?php endforeach; 
                    wp_reset_postdata();
                    
                    $args = array( 'tag' => 'nota3' );

                    $myposts = get_posts( $args );
                    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                        
                    <div class="col-6 p-0"> 
                        <div class="card bg-dark text-white">
                            <a href="<?php echo get_the_permalink($post->ID); ?>">
                                <img class="card-img img-fluid" src="<?php echo get_the_post_thumbnail_url( $post->ID, 'medium' ); ?>" alt="">
                            </a>
                            <div class="card-img-overlay d-flex linkfeat">
                                <a href="<?php echo get_the_permalink($post->ID); ?>" class="align-self-end text-white">
                                    <span class="badge badge-primary">Juveniles</span> 
                                    <h3 class="card-title m-0"><?php echo get_the_title($post->ID); ?></h3>
                                </a>
                            </div>
                        </div>
                    </div> <!-- /end col-6 -->

                    <?php endforeach; 
                    wp_reset_postdata();

                    $args = array( 'tag' => 'nota4' );

                    $myposts = get_posts( $args );
                    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                        
                    <div class="col-6 p-0"> 
                        <div class="card bg-dark text-white">
                            <a href="<?php echo get_the_permalink($post->ID); ?>">
                                <img class="card-img img-fluid" src="<?php echo get_the_post_thumbnail_url( $post->ID, 'medium' ); ?>" alt="">
                            </a>                            <div class="card-img-overlay d-flex linkfeat">
                                <a href="<?php echo get_the_permalink($post->ID); ?>" class="align-self-end text-white">
                                    <span class="badge badge-primary">Juveniles</span> 
                                    <h3 class="card-title m-0"><?php echo get_the_title($post->ID); ?></h3>
                                </a>
                            </div>
                        </div>
                    </div> <!-- /end col-6 -->

                    <?php endforeach; 
                    wp_reset_postdata();
                    
                    $args = array( 'posts_per_page' => 1, 'tag' => 'nota5' );

                    $myposts = get_posts( $args );
                    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                        
                    <div class="col-6 p-0"> 
                        <div class="card bg-dark text-white">
                            <a href="<?php echo get_the_permalink($post->ID); ?>">
                                <img class="card-img img-fluid" src="<?php echo get_the_post_thumbnail_url( $post->ID, 'medium' ); ?>" alt="">
                            </a>                            <div class="card-img-overlay d-flex linkfeat">
                                <a href="<?php echo get_the_permalink($post->ID); ?>" class="align-self-end text-white">
                                    <span class="badge badge-primary">Juveniles</span> 
                                    <h3 class="card-title m-0"><?php echo get_the_title($post->ID); ?></h3>
                                </a>
                            </div>
                        </div>
                    </div> <!-- /end col-6 -->

                    <?php endforeach; 
                    wp_reset_postdata(); ?>                 

            
                </div> <!-- /end row -->

            </div> <!-- /end col-6 main -->
        </div> <!-- /end row -->
    </div> <!-- /end container -->
</section>