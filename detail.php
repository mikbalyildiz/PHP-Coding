<!--This content is code to help you edit the content of a post named "$detail" on your WordPress website.  -->

<?php
/*
 * Template Name: post named
 * Template Post Type: post, page
 * Coding: mikbalyildiz
 * Website: www.ikbalyildiz.com
 */

get_header();

if (have_posts()) :
    while (have_posts()) : the_post();
        ?>

        <article <?php post_class(); ?>>
            <h1 class="entry-title"><?php the_title(); ?></h1>

            <div class="entry-content">
                <?php
                $icerik = get_post_field('post_content', $post->ID);
                $duzenlenmis_icerik = preg_replace('/<img[^>]+>/', '', $icerik);
                echo $duzenlenmis_icerik;
                ?>
            </div>

        </article>

        <?php
    endwhile;
else :
    ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php
endif;

get_footer();
?>



