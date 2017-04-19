Mini WP Theme
=============

Here's the most simple theme that I can imagine. It is possible to make a theme without a *functions.php* file, but it's better practise to add the stylesheet and scripts as demonstrated here. The markup is very basic, but you can add a more elaborate loop, e.g.

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
// The Loop
// Make a better loop - @url: https://codex.wordpress.org/The_Loop
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
