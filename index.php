<html>
<head>
	<?php wp_head(); ?>
</head>
<body>
<!-- above this line: cut'n save as header.php - include via get_header() -->

<?php
// The Loop
// Make a better loop - @url: https://codex.wordpress.org/The_Loop
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
        the_title( '<h3>', '</h3>' );
        the_content(); // add markup before and after the content
    }
}
?>

<!-- below this line: cut'n save as footer.php - include via get_footer() -->
<?php wp_footer(); ?>
</body>
</html>
