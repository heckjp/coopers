<!DOCTYPE html>
<html>
    <head>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class();?>>

    <header>
        <div class="grid-container fluid">
            <div class="grid-x grid-margin-x align-center-middle">
                <div class="cell small-6">
                    <h1>
                    <?php
                    if ( function_exists( 'the_custom_logo' ) ) {
                        the_custom_logo();
                       };
                    ?>
                    </h1>
                </div>
                <div class="cell small-4  medium-offset-2 medium-2 ">
                       <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                </div>
                <div class="cell small-2 medium-2">
                <?php if (is_user_logged_in()) : ?>
                    <a href="<?php echo wp_logout_url(get_permalink()); ?> " class="button">Sair</a>
                <?php else : ?>
                    <a href="<?php echo wp_login_url(get_permalink()); ?>" class="button">Entrar</a>
                <?php endif;?>
                </div>
            </div>
        </div>
        <div class="grid-container fluid">
            <div class="grid-x grid-margin-x align-center-middle">
                <div class="cell small-12 medium-6">
                    <?php if( get_field('destaque') ): ?>
                        <h1 class="titulo"><?php the_field('destaque'); ?></h2>
                    <?php endif; ?>
                    <!-- <h1 class="titulo">Apareça</h1> -->
                    <?php if( get_field('subtitulo') ): ?>
                        <h2 class="subtitulo"><?php the_field('subtitulo'); ?></h2>
                    <?php endif; ?>
                    <h3 class="grey-text">Posição de destaque dentro do site</h3>
                    <h3><strong>Página sem concorrente ou publicidade</strong></h3>
                    <h3 class="grey-text">Autonomia para edição completa da página</h3>
                    <p><a href="#planos" class="button large premium-button">Conheça o premium</a> <a href="#" class="button large">Cadastro grátis</a></p>
                </div>
                <div class="cell small-12 medium-6 text-center">
                    <img src="<?php echo get_template_directory_uri(). '/img/02.jpg';?>">
                </div>
            </div>
        </div>
            
    </header>
    
    