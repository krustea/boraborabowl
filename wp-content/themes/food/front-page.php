<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) :
        the_post(); ?>

        <main>

            <section class="bowls">

                <div class="bowls-content container">
                    <?php if (get_field('titre_bowls')): ?>
                        <h1 class=titre><?php the_field('titre_bowls'); ?></h1>
                    <?php endif; ?>
                    <div>


                        <div class="formules bowlmatin">
                            <div>
                                <?php
                                $image = get_field('image_bowlmorning'); ?>
                                <img class="formule" src="<?php echo $image['url']; ?>"/>
                            </div>
                            <div class="bm1content">
                                <?php if (get_field('titre_bowlmorning')): ?>
                                    <h2 class=titre><?php the_field('titre_bowlmorning'); ?></h2>
                                <?php endif; ?>

                                <?php if (get_field('description_bowlmorning')): ?>
                                    <p><?php the_field('description_bowlmorning'); ?></p>
                                <?php endif; ?>
                                <a class="more" href="#">Lire la suite</a>
                            </div>
                        </div>

                        <div class="formules bowllunch">
                            <div>
                                <?php
                                $image = get_field('image_bowllunch'); ?>
                                <img class="formule" src="<?php echo $image['url']; ?>"/>
                            </div>
                            <div class="bm2content">
                                <?php if (get_field('titre_bowllunch')): ?>
                                    <h2 class=titre><?php the_field('titre_bowllunch'); ?></h2>
                                <?php endif; ?>

                                <?php if (get_field('description_bowllunch')): ?>
                                    <p><?php the_field('description_bowllunch'); ?></p>
                                <?php endif; ?>
                                <a class="more " href="#">Lire la suite</a>
                            </div>
                        </div>


                        <div class="formules bowlnight">
                            <div>
                                <?php
                                $image = get_field('image_bowlnight'); ?>
                                <img class="formule" src="<?php echo $image['url']; ?>"/>
                            </div>
                            <div class="bm3content">
                                <?php if (get_field('titre_bowlnight')): ?>
                                    <h2 class=titre><?php the_field('titre_bowlnight'); ?></h2>
                                <?php endif; ?>

                                <?php if (get_field('description_bowlnight')): ?>
                                    <p><?php the_field('description_bowlnight'); ?></p>
                                <?php endif; ?>
                                <a class="more " href="#">Lire la suite</a>
                            </div>
                        </div>


                        <!-- .gallery-1 -->

                        <div id="bowlz" class="btngall">
                            <a href="#" class="btn">Tous nos Bowls</a>
                        </div>

                    </div><!-- .les3duhaut -->

                    <div class="les2dubas">
                        <?php if (get_field('titre_concept')): ?>
                            <h1 class=titre><?php the_field('titre_concept'); ?></h1>
                        <?php endif; ?>

                        <div class="formules">
                            <?php

                            $image = get_field('cb1_image'); ?>
                            <img class="formule" src="<?php echo $image['url']; ?>"/>

                            <div class="formules-content">
                                <?php if (get_field('cb1_titre')): ?>
                                    <h2 class=titre><?php the_field('cb1_titre'); ?></h2>
                                <?php endif; ?>

                                <!--                        <h2>Nos Bowls & formules</h2>-->
                                <?php if (get_field('cb1_description')): ?>
                                    <p><?php the_field('cb1_description'); ?></p>
                                <?php endif; ?>

                                <!--                        <p>Nous proposons uns sélection de Bowls sucrés et salés, frais et plein d'énergie.-->
                                <!--                            Le cocktail miracle pour démarrer une journée avec le plein de vitamines. <br>-->
                                <!--                            Nos bowls se déclinent en trois formats (petit, moyen, grand) pour s'adapter à vos fringales-->
                                <!--                            du momemt.-->
                                <!--                        </p>-->
                                <a class="more " href="#">Lire la suite</a>
                            </div>
                        </div>

                        <div class="crea">
                            <?php

                            $image = get_field('cb2_image'); ?>
                            <img class="dyi" src="<?php echo $image['url']; ?>"/>
                            <div class="dyi-content">
                                <?php if (get_field('cb2_titre')): ?>
                                    <h2><?php the_field('cb2_titre'); ?></h2>
                                <?php endif; ?>
                                <?php if (get_field('cb2_description')): ?>
                                    <p><?php the_field('cb2_description'); ?></p>
                                <?php endif; ?>
                                <a class="more " href="#">Lire la suite</a>
                            </div>
                        </div>


                    </div>

            </section>
            <!-- .bowls -->
            <?php if (get_field('titre_valeur')): ?>
                <h1 class=titre><?php the_field('titre_valeur'); ?></h1>
            <?php endif; ?>

            <section class="valeurs">

                <div class="background-content container">

                    <?php if (have_rows('valeur')): ?>


                        <?php while (have_rows('valeur')): the_row();

                            $image1 = get_sub_field('image_top_valeur');
                            $image2 = get_sub_field('image_bottom_valeur');

                            ?>

                            <div class="item">

                                <img src="<?php echo $image1['url']; ?>" alt="<?php echo $image['alt'] ?>"/>

                                <p class="caption"><?php the_sub_field('texte_valeur'); ?></p>
                                <img src="<?php echo $image2['url']; ?>" alt="<?php echo $image['alt'] ?>"/>

                            </div>


                        <?php endwhile; ?>


                    <?php endif; ?>


                </div>

            </section>

            <section id="resto" class="restos">

                <h1 class=titre>Trouvez nos Restaurants</h1>

                <div class="restoflex">

                    <div class="googlemap">
                        <div class="googlemap embed-wrapper">
                            <iframe class="gmap"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d42619.29325532891!2d-1.7235596705555718!3d48.11591020453313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480ede2fa7d69085%3A0x40ca5cd36e4ab30!2sRennes!5e0!3m2!1sen!2sfr!4v1554314769026!5m2!1sen!2sfr"
                                    width="800" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>

                </div>

            </section>

            <section id="commu" class="communaute">

                <h1 class="titre">La Bowli Communauté</h1>

                <p># Suivez-nous sur Instagram</p>

                <h3>nous rejoindre</h3>

                <div class="insta">
                    <ul>
                        <li><a class="btn-rs btn-ins" href="https://www.instagram.com/" title="Notre page Instagram"
                               target="_blank">Instagram</a><img
                                    src="<?php echo bloginfo('template_url'); ?>/images/icon-insta.png" alt=""></li>
                    </ul>
                </div>

                <img class=gallerie-insta src="<?php echo bloginfo('template_url'); ?>/images/galerie-insta.jpg" alt="">



            </section>


        </main>
        <!-- MAIN -->


    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>



