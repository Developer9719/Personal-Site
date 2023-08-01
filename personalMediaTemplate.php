<?php
/**
 * Template Name: Media Collection Page
*/
get_header();

$errorMessages = [];

if(empty($_POST)) {
  array_push($errorMessages, 'Form not submitted.');
} 

if(!empty($errorMessages)) {
  foreach ($errorMessages as $error) {
    echo '<script>alert("' . $error . ', ")</script>';
  }
}
?>

<h1 class="title"><?php echo get_the_title(); ?></h1>

<form action="" method="post">
  <label>Upload Media: </label>
  <input type="file" multiple name="files[]"></input>
  <button type="submit">Upload Now</button>
<form>

<?php
get_footer();
?>