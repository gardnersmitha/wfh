<?php 

/*
---------------
REQUIREMENTS
---------------
*/

require 'functions.php';

?>


<!-- /*
--------------
HTML PAGE
-------------- 

Build us some HTML to reflect the meme. 


 */ -->

<?php require 'views/header.php'; ?>

        <div class="main-container">
            <div class="main wrapper clearfix container">


            	<?php getMeme(); ?>

            </div> <!-- #main -->
        </div> <!-- #main-container -->

<?php require 'views/footer.php'; ?>
