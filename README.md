# Small project to try priming references with doctrine mongo odm

To try this project:

* clone it
* download composer.phar and run `php composer.phar install`
* run `php app/console khepin:yamlfixtures:load --purge-mongodb`
* visit /app_dev.php/posts
* Check the number of queries performed in the debug toolbar

## Problem:

If we reference the comments from the Blog Post with mapping them instead of holding
an array of references directly in the BlogPost document, the priming of references
is not applied.

There are 3 blog posts and even though the controller tries to prime the references
we still have 3 queries in order to find the comments (once for each blog post).