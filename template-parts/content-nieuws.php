<?php

$query = get_post(get_the_ID()); 
$content = apply_filters('the_content', $query->post_content);

echo $content;

?>

