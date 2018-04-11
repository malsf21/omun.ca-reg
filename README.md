# omun.ca-reg

Here's the registration system that we used to use for OMUN (OMUN II and III). It's pretty poorly coded, so I wouldn't recommend that you use it. I ported it over from [worldaffairsconference/reg-old](https://github.com/worldaffairsconference/reg-old), so you can check that out as well.

If you do want to create your own instance of this reg system, you can do so pretty easily. This reg system runs on PHP and PHPMyAdmin (a PHP implementation of MySQL). We recommend downloading [MAMP](https://www.mamp.info/en/) or an OS equivalent to meet those standards. To get started, simply run `setup.sql`, and change the `$username` and `$password` fields in `common.php`; then, you're good to go!

## Credit

This reg system was originally developed by [Matthew Wang](https://matthewwang.me) (@malsf21) and [Jack Sarick](https://sarick.science) (@sarick). To build this reg system, we used [Bootstrap](https://getbootstrap.com), [jQuery](https://jquery.com), [Font Awesome 4](https://fontawesome.com), and the loving support from the OMUN team.

If you have any questions, please contact [Matthew Wang](https://matthewwang.me).
