<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner appear fade-in-down">
            <video class="banner_video" autoplay muted loop>
                <source src="<?php echo get_stylesheet_directory_uri() . '/assets/video/video.mp4'; ?>" type="video/mp4">
            </video>
            <img class="banner_logo" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
        </section>
        <section id="story" class="story">
            <h2><span class="animatetitle">L'histoire</span></h2>
            <article class="story__article appear fade-in-up">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
       <!-- /* place for characters /template parts -->
            <?php get_template_part('parts/characters');?>
            <article id="place" class="appear fade-in-up" >
                <div>
                    <h3 ><span class="animatetitle">Le Lieu</span> </h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                    <div class="cloud appear">
                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Nuages.png'; ?> " alt="Nuages" class="nuages">
                        
                    </div>
                    
                </div>

            </article>
        </section>


        <section id="studio" class="appear fade-in-down">
            <h2> Studio<span class="animatetitle appear fade-in-down-slow"> Koukaki</span></h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>

        <section id="oscars" class="oscars appear fade-in-down">
            <div class="oscars__title ">
                <img src="<?php echo get_theme_file_uri() . '/assets/images/fond_orange_oscars.png'; ?>" alt="fond du titre des nominations">
                <h3>Fleurs d’oranger & chats errants est nominé aux Oscars Short Film Animated de 2022 !</h3>
            </div>
            <div class="oscars__image">
                <img src="<?php echo get_theme_file_uri() . '/assets/images/oscars.png'; ?>" alt="Nomination aux Oscars 2022" ">
            </div>
        </section>
    </main><!-- #main -->

<?php
get_footer();
