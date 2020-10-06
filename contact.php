<?php
/*
 * Template Name: Contact Page
 */
the_post();
get_header();
?>


    <!-- s-content
    ================================================== -->
    <section class="s-content s-content--narrow s-content--no-padding-bottom">

        <article class="row format-standard">

            <div class="s-content__header col-full">
                <h1 class="s-content__header-title">
                    <?php the_title(); ?>
                </h1>
            </div> <!-- end s-content__header -->

            <div class="s-content__media col-full">
                <div id="">
                    <?php
                    if ( is_active_sidebar('contact-maps') ) {
                        dynamic_sidebar('contact-maps');
                    }
                    ?>
                </div>
            </div> <!-- end s-content__media -->

            <div class="col-full s-content__main">
                <?php the_content(); ?>

                <div class="row block-1-2 block-tab-full">
                    <?php
                    if ( is_active_sidebar('contact-information') ) {
                        dynamic_sidebar('contact-information');
                    }
                    ?>
                </div>
                <div class="row">
                    <h3>Say Hello.</h3>
                        <?php
                        $philosophy_contact_form_short_code = get_field('contact_form_shortcode');
                        if ( $philosophy_contact_form_short_code ){
                            echo do_shortcode($philosophy_contact_form_short_code);
                        }
                        ?>
                    </div>
                </div>
            </div> <!-- end s-content__main -->

        </article>

    </section> <!-- s-content -->


<?php get_footer(); ?>