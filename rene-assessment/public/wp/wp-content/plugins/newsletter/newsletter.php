<?php
/*
Plugin Name: Newsletter
Plugin URI: https://renesarsalejo.com
Description: A plugin that creates a pop-up form asking users to sign up for a newsletter.
Version: 1.0
Author: Rene Sarsalejo
Author URI: https://renesarsalejo.com
License: Open
*/

// Add the pop-up form to the footer of each page
function newsletter_popup() {
    // Your popup code goes here
    ?>
    <div id="newsletter-popup" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Sign up for our newsletter</h2>
            <form>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name"><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email"><br>

                <input type="submit" value="Submit">
            </form>
        </div>
    </div>

    <script type="text/javascript">
        // Your JavaScript code goes here
        document.addEventListener("DOMContentLoaded", function() {
            // Get the modal
            var modal = document.getElementById("newsletter-popup");

            // Get the button that opens the modal
            var btn = document.getElementById("newsletter-popup-btn");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks the button, open the modal 
            btn.onclick = function() {
                modal.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        });
    </script>
    <?php
}
add_action( 'wp_footer', 'newsletter_popup' );
