<?php
/*
 * PHP is designed to be mixed with HTML, so we mark PHP code with the special
 * tags <?php {your code} ?>.
 *
 * All of the PHP in this demo is written according to WordPress coding
 * standards. This isn't too important here, but it's a practice I like to
 * follow since we mostly work in WordPress.
 *
 * The require statement imports the file into this one so we can access its
 * class. You can also use the 'include' statement if the file is not necessary.
 *
 * There are also 'include_once' and 'require_once' statements. These will only
 * import the file if it hasn't already been imported. This is useful for
 * avoiding duplicates when you have a long chain of imported files.
 */
require 'class.demo.php';

// Declare a function. Functions don't have to state their return type, but it's recommended.
function foobar() : void {
    echo 'foobar';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Example</title>
    <link rel="stylesheet" href="styles.css" />
    <script src="scripts.js"></script>
</head>
<body>

<div class="container">
    <p>
        <?php
        // The text is sent via POST, so fetch it from the POST array. If it was
        // sent via GET, you would use the array '$_GET'
        $text = $_POST['the_text'];

        // The htmlspecialchars() function escapes any HTML in the text, to
        // prevent any kind of injection attack
        echo htmlspecialchars( $text );
        ?>
    </p>

    <?php
    // Below demonstrates how to create a new instance of a class, and access its methods.
    // The 'echo' statement is used to output variables into the HTML.
    ?>
    <?php $demo = new Demo(); ?>
    <p><?php echo $demo->foobar(); ?></p>
    <p><?php echo $demo->repeatText( 'Some text' ); ?></p>
    <p><?php echo $demo->repeatText( 'Some text ', 'with optional text' ); ?></p>
    <p><?php echo $demo->repeatText( 'Some text with another type ', 1 ); ?></p>

    <?php // Here we call the foobar() function we declared at the top ?>
    <p><?php foobar(); ?></p>
</div>

</body>
</html>
