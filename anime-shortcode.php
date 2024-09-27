<?php
// Shortcode para mostrar los animes
function anime_viewer_shortcode() {
    $args = array(
        'post_type' => 'anime',
        'posts_per_page' => 10, // Número de animes a mostrar
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        $output = '<div class="anime-list">';
        while ($query->have_posts()) {
            $query->the_post();
            $output .= '<div class="anime-item">';
            $output .= '<h2>' . get_the_title() . '</h2>';
            if (has_post_thumbnail()) {
                $output .= get_the_post_thumbnail(get_the_ID(), 'medium');
            }
            $output .= '<p>' . get_the_excerpt() . '</p>';
            $output .= '<a href="' . get_permalink() . '">Ver Episodios</a>';
            $output .= '</div>';
        }
        $output .= '</div>';
        wp_reset_postdata();
        return $output;
    } else {
        return 'No se encontraron animes.';
    }
}
add_shortcode('anime_viewer', 'anime_viewer_shortcode');
