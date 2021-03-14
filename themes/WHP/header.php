<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title>
    <?php  
        if (is_home() || is_front_page()) : bloginfo('name');
        elseif ( is_single()) : echo "post";
        elseif (is_page()) : echo "Página";
        endif;
    ?>
    </title>
    <meta name="Description" content="<?php bloginfo('description') ?>">
    <meta name="keywords" content="hp, Harry Potter, World of Harry Potter">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="ping-back" href="<?php echo bloginfo('pingback_url'); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

        <div class="TopFaixa"></div>

        <div class="Logomarca">
            <?php the_custom_logo(); ?>
        </div>

        <div class="BotaoMobile">
            <img src="<?php echo "http://www.costabravaclube.com.br/images/menu-black.png"; ?>" alt="::Botão Mobile::" title="Botão Mobile"> 
        </div>

        <div class="Busca">
            <form action="" name="formsearch" id="formsearch">
                <input type="text" id="s" name="s" placeholder="Procure sua mágica">
                <input type="submit" value="Search">
            </form>
        </div>

