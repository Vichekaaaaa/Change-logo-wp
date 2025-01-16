<?php 
//change wordpress login page logo using snippet of code
add_action( 'login_enqueue_scripts', 'wpamit_login_logo_change' );
 
function wpamit_login_logo_change() {
   ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
           background-image: url(wp-content/uploads/2022/03/wpamit-logo-200px.svg);
           height: auto;
           width: 200px;
           background-size: contain;
           background-repeat: no-repeat;
           background-color: transparent;
      }
    </style>
   <?php
}