<?php

/**
 * Class declarations in PHP are fairly similar to Java. The biggest differences
 * are the name of the constructor function, and the use of '$this->' to access
 * properties and functions.
 */
class Demo {
    /**
     * We don't have to declare the variable type, but it's good practice.
     */
    private string $foobar;

    /**
     * This is a constructor in PHP.
     */
    function __construct() {
        $this->foobar = 'foobar';
    }

    /**
     * This function returns the parameter $foobar. Note that we have to access
     * it using '$this->foobar' instead of just '$foobar'.
     *
     * @return string The property $foobar.
     */
    function foobar() : string {
        return $this->foobar;
    }

    /**
     * This function demonstrates how we can have optional parameters, by giving
     * them a default value. In this case the default value is just a blank string.
     *
     * We can also declare a parameter as 'mixed' to allow any type of variable
     * to be passed. Alternatively, you can  just omit the type declaration to
     * allow this.
     *
     * The 'mixed' type has only been available since PHP 8, so if the site runs
     * on an older version of PHP, you just omit the type.
     *
     * Note that this function doesn't have a return type, which is perfectly
     * valid, though not the best practice.
     *
     * @param string $text The text to repeat.
     * @param mixed $optional Some optional text to append.
     *
     * @return string The text to repeat.
     */
    function repeatText( string $text, mixed $optional = '' ) {
        // Blank strings evaluate as false in PHP, whereas any other string
        // evaluates as true. So the if statement below just checks if there's 
        // anything in the string, and appends it if so.
        if ( $optional ) {
            $text .= $optional;
        }

        return $text;
    }
}
