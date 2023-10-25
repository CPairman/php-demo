<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Example</title>

    <link rel="stylesheet" href="styles.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="scripts.js"></script>
</head>
<body>

<div class="container">
    <form name="form" method="post" class="form" action="output.php">
        <div class="row row--vertical">
            <label for="the-text">Text:</label>
            <input type="text" name="the_text" id="the-text" />
        </div>

        <div class="row row--buttons">
            <input type="submit" value="Submit" class="button" />
            <input type="submit" value="Submit with Ajax" class="button button--ajax" />
        </div>
    </form>

    <div class="row row--response ajax-response" style="display: none;">
        <p class="ajax-response"></p>
    </div>
</div>


</body>
</html>
