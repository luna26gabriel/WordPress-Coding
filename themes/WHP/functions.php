<?php

function my_login_logo()
{ ?>
    <style type="text/css">
        body.login {}

        body.login div#login {}

        body.login div#login h1 {}

        body.login div#login h1 a {}

        body.login div#login form#loginform {}

        body.login div#login form#loginform p {}

        body.login div#login form#loginform p label {}

        body.login div#login form#loginform input {}

        body.login div#login form#loginform input#user_login {}

        body.login div#login form#loginform input#user_pass {}

        body.login div#login form#loginform p.forgetmenot {}

        body.login div#login form#loginform p.forgetmenot input#rememberme {}

        body.login div#login form#loginform p.submit {}

        body.login div#login form#loginform p.submit input#wp-submit {}

        body.login div#login p#nav {}

        body.login div#login p#nav a {}

        body.login div#login p#backtoblog {}

        body.login div#login p#backtoblog a {}

        #login h1 a,
        .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/WHP.jpg);
            height: 169px;
            width: 284px;
            background-size: 284px 169px;
            background-repeat: no-repeat;
            padding-bottom: 30px;
        }
    </style>
<?php }
add_action('login_enqueue_scripts', 'my_login_logo');
