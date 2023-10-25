/*
 * The jQuery() function waits until the page is loaded, then executes the
 * function inside it.
 *
 * This function doesn't need to have a name since we're not calling it anywhere
 * else, so we can declare it directly inside jQuery(). We're declaring it using
 * arrow notation, which is just a shorter way of declaring a function.
 *
 * Arrow statements can look like the following:
 * () => {}; An arrow function with no parameters.
 * a => {}; An arrow function with one parameter.
 * (a, b) => {}; An arrow function with multiple parameters.
 */
jQuery( $ => {
    // We can't use an arrow function here as we need access to the variable
    // 'this', which points to the button that's been clicked. 'this' isn't set
    // on arrow functions.
    $( '.button--ajax' ).on( 'click', async function(e) {
        // Stop the form from submitting the normal way.
        e.preventDefault();

        // Get the form itself. The closest() function looks for the closest
        // ancestor of the button with the class 'form'.
        const form = $(this).closest( '.form' );

        // Build a new FormData object from the form. This will contain the user's input.
        const formData = new FormData( form[0] );

        const url = 'https://demo.calumpairman.dev/ajax.php';

        try {
            // Here we're submitting ajax with the Fetch API. The fetch function
            // is asynchronous, i.e. the code doesn't wait for it to finish
            // unless we tell it to with the 'await' keyword.
            const response = await fetch( url, {
                method: "POST",
                body: formData
            } );

            // The response is encoded in JSON, so parse it into an object.
            const responseJson = await response.json();

            // Get the 'success' attribute of the object.
            const sentSuccessfully = responseJson.success;

            if ( sentSuccessfully ) {
                // If successful, display the text on the page.
                $( 'p.ajax-response' ).text( responseJson.text );
                $( 'div.ajax-response' ).slideDown( 300 );
            }
        } catch (error) {
            console.error(error);
        }
    } );
} );
