Mini WP Theme
=============

Here's the most simple theme that I can imagine. It is possible to make a theme without a *functions.php* file, but it's better practise to add the stylesheet and scripts as demonstrated here. The markup is very basic, but you can add a more elaborate loop, e.g.

## Install the theme

1. Download the zip file.
2. Install the zip via the Dashoard > Themes > Add new.

## Add your own markup to any loop


```
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
```

Could be:

```
<main>
  <?php
  if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
      echo "<article class='someClass'>\n";
            the_title( '<h3>', '</h3>' );
            the_content(); 
      echo "</article>";
	    // on your own: try to add info like date, author, comments etc.
    }
  }
  ?>
<main>
```

Wrap the template tags in markup, and style the markup via the stylesheet.
