<?php /* Template Name: Gabarit contact */ ?>

<?php get_header(); ?>

<section id="franchise" class="franchise">

    <h1 class="titre">La Franchise Bora Bora Bowl</h1>

    <div class="bcg-middle">

        <p class="a">Rejoignez notre réseau de franchisés</p>
        <p class="b">Ethique, Indépendance, Liberté</p>
        <p class="c">Profitez de la forte expérience de nos enseignes ouvertes depuis 2018. Notre réseau
            d’entrepreneurs vous accompagnera dans la mise en place et le développement de votre restaurant.Nous
            mettons l’accent sur l’humain et la collaboration et nous réunissons régulièrement pour discuter des
            nouvelles opportunités et améliorations possibles.</p>
        <a href="#" class="btn btn-primary">En savoir Plus</a>

    </div>

</section>

<section class="joinus">

    <div class="container py-5">

        <h1 class="titre">Rejoignez nous</h1>

        <div class="row flex-md-row-reverse">

            <div class="col-md-6 mb-5 mb-md-0">
                <div class="card">
                    <div class="card-body">
                        <?php echo do_shortcode( '[contact-form-7 id="17" title="Formulaire de contact 1"]' ) ?>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <p>Pour plus d'informations sur les franchises, les restaurants, les menus, envoyez-nous vos messages à l'aide de ce formulaire. Nous vous répondrons dans les meilleurs délais.</p>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>

<?php get_footer() ?>

