Slimmed Down Symfony2 Framework Distribution
============================================

I like the coding practices of Symfony but not too happy with the amount of 
bloat that comes with it, so I am slowly taking out all the unnecessary parts, 
and create a simple distribution for small - medium sized projects. I only came up with this 
directory structure as it is easier to work with and don't need to go through 
a load of directories to reach the files you need to work with. Feel free to 
use this example and make changes as you please.

To get this working:

 * In terminal, navigate to the root dir of your project and run composer.phar install and composer.phar dump-autoload
 * Rename .env.example to .env
 * Update .env environment variables (SYMFONY_ENV=prod or dev, SYMFONY_DEBUG=1 to display debug bar)
 * Run ./console assets:install (add --symlink if on *nix systems) - make sure console is executable
 * change to web/ dir and run php -S localhost:8000