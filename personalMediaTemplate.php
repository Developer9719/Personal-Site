<?php
/**
 * Template Name: Media Collection Page
*/
get_header();

// Upload Media Form Processor

?>

<h1 class="title"><?php echo get_the_title(); ?></h1>

<!-- Upload Media Form -->


<!-- Display current media -->

<?php 
$remotePath = '/home/dh_9mx6wk/funandpractice.dreamhosters.com/wp-content/themes/astra-child/Media';
$files = scandir('/home/dh_9mx6wk/funandpractice.dreamhosters.com/wp-content/themes/astra-child/Media'); 
foreach ($files as $file) {
  if(is_dir($file)) {
    echo '<a href="">' . $file . '</a>';
  } else {
    echo $file;
  }
}
?>

<?php
get_footer();
?>