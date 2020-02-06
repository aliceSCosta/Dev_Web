<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
</head>
    <body <?php body_class();?>>
    <header class="sticky-top">
        <!--<div class="container">
            <div class="row">
                <div class="col">Esquerda</div>
                <div class="col">Direita</div>
            </div>
        </div>
        -->
        <?php wp_nav_menu(
            array(
                'theme_location' => 'top-menu'
            )
        );
        ?>
    </header>
    
