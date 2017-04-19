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
	    // add template tags see @url https://codex.wordpress.org/Template_Tags
	    // a few samples:
            the_title( '<h3>', '</h3>' );
            the_content(); // you can wrap the "template tags" in markup, like <article> or <div>
	    // on your own: try to add info like date, author, comments etc.
    }
}
?>

<!-- below this line: cut'n save as footer.php - include via get_footer() -->
<?php wp_footer(); ?>
</body>
</html>
