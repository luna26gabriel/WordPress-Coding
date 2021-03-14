<?php

#Tela de Login personalizada
function my_login_logo()
{ ?>
    <style type="text/css">
        body.login {
            background: url(<?php echo get_stylesheet_directory_uri(); ?>/images/hp_wallpaper.png)
        }

        body.login div#login h1 { 
            background: #000; 
            padding: 10px;
            border-radius: 10px 10px 0 0;
        }

        body.login div#login .message {
            margin-bottom: 20;
        }

        body.login div#login form#loginform {
            margin-top: 0;
            border-radius: 10px 10px;
        }
        body.login div#login p#nav {
            display: none;
        }

        body.login div#login form#loginform .button {
            background: #000;
            color: #d4af37;
        }

        body.login div#login p#backtoblog {
            display: none;
        }

        #login h1 a,
        .login h1 a {
            height: 169px;
            width: 284px;
            background-size: 284px 169px;
            background-repeat: no-repeat;
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/WHP.jpg)
        }

    </style>
<?php }
add_action('login_enqueue_scripts', 'my_login_logo');

#Ocultar a barra de ferramentas ADMIN da tela Inicial
function HiddenBar() {
    return false;
}
add_filter('show_admin_bar', 'HiddenBar');


#Adcionando suporte de logo marca no Tema
add_theme_support('custom-logo', array(
    'height' => 200,
    'width' => 400,
    'flex-height' => true,
    'flex-width' => true,
    'header-text' => array( 'site-title', 'site-description'),
));

#Adicionar background ao site
add_theme_support('custom-background');

#Link para conectar o CSS
wp_enqueue_style('style', get_stylesheet_uri());
