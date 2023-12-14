<?php
/*
Template Name: single
*/
// кастомний хедер 
get_header('polCon');
?>
<!-- це щоб розуміти звідки буде братись контент та тайтл  -->
<?php the_post(); ?>
<div class ="container">

<?php the_title(); ?>
<?php the_content(); ?>

    

</div>

<?php
get_footer();
?>