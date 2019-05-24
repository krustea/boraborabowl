<?php
wp_footer() ?>
<footer class="page-footer">

    <div class="socialbtns">
        <ul>
        <?php if (have_rows('social_network')): ?>


            <?php while (have_rows('social_network')): the_row();

                $image = get_sub_field('social_image');
                ?>

                    <li><a class="btn-rs btn-fb" href="<?php the_sub_field('social_link'); ?>" title="Notre page Facebook" target="_blank"><img
                                    src="<?php echo $image['url']; ?>" alt=""></a></li>

            <?php endwhile; ?>


        <?php endif; ?>
            </ul>
        
    </div>





<div class="page-footer-inner container">

    <div class="page-footer-content">

        <!--                 <nav class="page-footer-nav">
            <ul>
                <li>
                    <a href="">Franchise</a>
                </li>
                <li>
                    <a href="">Les Bowls</a>
                </li>
                <li>
                    <a href="">A Propos</a>
                </li>
                <li>
                    <a href="">L'Equipe</a>
                </li>
                <li>
                    <a href="">Carrières</a>
                </li>
            </ul>
        </nav> -->

        <div class="brandb">
            <a href="index.html" title="Accueil">
                <img src="<?php echo bloginfo( 'template_url' ); ?>/images/logo-bowl.svg" alt="Logo" class="logob">
            </a>
        </div><!-- .brand -->

        <p class="adresse">30 rue Bowléro <br>
            35000 Rennes <br>
            02 99 56 73 45 <br>
            bowlicious@bowlicious.com <br>
            SIRET FR 345678920</p>

        <div class="end">
            <a href="">Mentions légales</a>
            <a href="">RGPD</a>
        </div>

    </div><!-- .page-footer-content -->

</div>



</footer>
<!-- FOOTER -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>

<!--<script src="jquery-3.3.1.min.js"></script>-->
<!--<script src="owl.carousel.min.js"></script>-->
<!--<script src="stellarnav.min.js"></script>-->
<!--<script src="scripts.js"></script>-->


</body>

</html>
