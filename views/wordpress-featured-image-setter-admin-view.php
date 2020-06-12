<?php

// -- how many without
// select count(ID) from wp_posts where post_type='post' and ID not in (select post_id from wp_postmeta where meta_key = '_thumbnail_id');

// -- how many with
// select count(post_id) from wp_postmeta where meta_key = '_thumbnail_id'

?>
<h1>
<?php esc_html_e( 'Wordpress featured image setter.', 'wordpress-featured-image-setter'); ?>
</h1>

<p><a href="https://jonathansblog.co.uk">jonathansblog.co.uk</a>

<h2>
<?php esc_html_e('Posts Without Featured Image Set', 'wordpress-featured-image-setter'); ?>
</h2>
<?php
echo count_all_posts_without_featured_image_set();
?>

<h2>
<?php esc_html_e('Posts With Featured Image Set', 'wordpress-featured-image-setter'); ?>
</h2>
<?php
echo count_all_posts_with_featured_image_set();
?>
