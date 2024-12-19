<?php get_header(); ?>

<main id="main-content">
    <section class="tainacan-collection">
        <header>
            <h1><?php the_title(); ?></h1>
            <div class="collection-description">
                <?php the_content(); ?>
            </div>
        </header>

        <div class="collection-items">
            <h2><?php _e('Items in this collection:', 'textdomain'); ?></h2>
            <?php
            // Recupera os itens associados à coleção atual
            $collection_id = get_the_ID();
            $args = array(
                'post_type'      => 'tainacan-item',
                'posts_per_page' => 10,
                'meta_query'     => array(
                    array(
                        'key'     => 'tainacan-collection-id',
                        'value'   => $collection_id,
                        'compare' => '='
                    )
                )
            );
            $items_query = new WP_Query($args);

            if ($items_query->have_posts()) :
                while ($items_query->have_posts()) : $items_query->the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <div class="item-excerpt">
                            <?php the_excerpt(); ?>
                        </div>
                    </article>
                <?php endwhile;
                wp_reset_postdata();
            else : ?>
                <p><?php _e('No items found in this collection.', 'textdomain'); ?></p>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
