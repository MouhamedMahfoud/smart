@extends('layoute')
@section('content')
<!-- Start home  -->
<section id="ACCUEIL" class="bg-cover hero-section">
    <div class="home-slider owl-carousel js-fullheight">
        <div class="slider-item js-fullheight" style="background-image: url(img/slideHome/ino.jpg)">
            <div class="overlay"></div>
            <div class="container-xl">
                <div class="row smartInovation no-gutters slider-text js-fullheight align-items-center justify-content-center">
                    <div class="inovationtext col-md-4 ftco-animate">
                        <div class="text w-100">
                            <div class=" inovationtext-h3">
                                <h3 class="h3">Authanticité</h3>
                                <h3 class="h3">Inspiration</h3>
                                <h3 class="h3">Innovation</h3>
                            </div>

                            <p class="text-start">Smart Communication est une équipe dynamique possédant une vision atypique et moderne</p>
                        </div>
                    </div>
                    <div class="col-md-4 divVide"></div>
                    <div class="col-md-4 ftco-animate">
                        <div class="logos">
                            <img class="logo-smart" src="{{URL::asset('img/smart_logo.png')}}" alt="smart communication" />
                            <p>think innovation thinkSmart</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item js-fullheight" style="background-image: url(img/slideHome/Branding1.jpg)">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                    <div class="col-md-12 ftco-animate">
                        <div class="text w-100 text-center">
                            <h2 class="mb-3">Branding & Graphisme</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item js-fullheight" style="background-image: url(img/slideHome/print.jpg)">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                    <div class="col-md-12 ftco-animate">
                        <div class="text w-100 text-center">
                            <h2 class="mb-3">Print & édition</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item js-fullheight" style="background-image: url(img/slideHome/coverPano.jpg)">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                    <div class="col-md-12 ftco-animate">
                        <div class="text w-100 text-center">
                            <h2 class="mb-3">Signalétique intérieur/extérieur</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item js-fullheight" style="background-image: url(img/slideHome/Réseauxsociaux.jpg)">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                    <div class="col-md-12 ftco-animate">
                        <div class="text w-100 text-center">
                            <h2 class="mb-3">Réseaux sociaux</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item js-fullheight" style="background-image: url(img/slideHome/ca1.jpg)">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                    <div class="col-md-12 ftco-animate">
                        <div class="text w-100 text-center">
                            <h2 class="mb-3">Goodies & Cadeaux</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item js-fullheight" style="background-image: url(img/slideHome/website1.jpg)">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                    <div class="col-md-12 ftco-animate">
                        <div class="text w-100 text-center">
                            <h2>Site web & référencement</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item js-fullheight" style="background-image: url(img/slideHome/smartEvent.jpg)">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                    <div class="col-md-12 ftco-animate">
                        <div class="text w-100 text-center">
                            {{-- <h2>Site web & référencement</h2> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item js-fullheight" style="background-image: url(img/slideHome/smartImpresion.jpg)">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                    <div class="col-md-12 ftco-animate">
                        <div class="text w-100 text-center">
                            {{-- <h2>Site web & référencement</h2> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End home -->
<!-- Start QUI SOMME-NOUS -->
<section id="SOMME-NOUS">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-intro text-center" data-aos="fade-up">
                <h1>Print & édition</h1>
                <div class="divider"></div>
                <div>
                    <p class="text-start">
                        Création sur mesure, contenu rédactionnel / graphique adapté aux besoins, aux supports et à votre univers Réalisation de BAT Conseils techniques et stratégiques Délais maîtrisés Fournisseurs locaux et labellisés Imprim’Vert Matières et papiers recyclé
                    </p>
                </div>

            </div>
        </div>
        <div class="row text-start"></div>
    </div>
</section>
<section id="SOMME-NOUS">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-intro" data-aos="fade-up">
                <h1>Dans notre domaine, c'est la première impression qui compte !</h1>

                <div class="divider"></div>
                <div>
                    <h1>Des impressions top qualité</h1>
                    <p class="text-start">
                        Tous nos travaux sont réalisés par des professionnels de l’imprimerie pour l’impression en offset comme pour l’impression numérique. La qualité est ainsi parfaitement maîtrisée et vérifiée tout au long du processus de fabrication.
                    </p>
                    <h1>Des prix bas et clairs pour toutes les impressions</h1>
                    <p class="text-start">
                        Nous mettons tous les moyens en oeuvre pour vous proposer des prix les plus compétitifs possibles et quels que soient vos travaux d’impression : brochures, plaquettes commerciales, affiches, flyers, tracts ou simples cartes de visite, enveloppes, chemises à rabat, menus pour restaurant... Nous sommes attentifs à la qualité de chaque projet d'impression et ceci quel que soit son prix !
                    </p>
                    <h1>Des délais respectés à J+5 maxi(1) livraison gratuite partout en France(2)</h1>
                    <p class="text-start">
                        Nous cherchons toujours à donner entière satisfaction à nos clients et vos délais sont aussi notre priorité. Selon la complexité du projet, les plannings de production et de fabrication... nous établirons le délai le plus juste possible et nous nous y tenons. Vous êtes pris par le temps ? Pas de panique. Nous trouverons des solutions pour réduire les délais de production et réaliser votre projet.
                    </p>

                </div>

            </div>
        </div>
        <div class="row text-start"></div>
    </div>
</section>
<section class="container">
    <iframe src="https://issuu.com/_exaprint/docs/catalogue_des_supports_de_communication__04_v3_hd_?fr=sYTdlOTE1MDQyMzA" scrolling="no" allowfullscreen="true" width="100%" height="600" frameborder="0"></iframe>
</section>

<!-- End QUI SOMME-NOUS -->
<!-- Start service -->
<section id="services" class="services color-seconde text-center bg-light">
    <div class="container">

        <div class="row g-4">
            <div class="col-md-6 " data-aos="fade-right">
                <div class="service">

                    <h2 class="mt-5 pt-4">Arrêtez d'être invisible !</h2>
                    <p class="text-start">
                        Nos experts en communication et en création graphique
                        sont à votre service pour rendre votre identité forte et percutante !
                    </p>
                    <p class="text-start">
                        Contactez-nous d'urgence
                    </p>
                </div>
            </div>

            <div class="col-md-6 " data-aos="fade-left">
                <div class="service">
                    <div class="service-img heigth-box">
                        <img class="plogo" src="img/agenceCommunication/ppp.png" alt="" />

                    </div>

                </div>
            </div>


        </div>
    </div>
</section>

<section id="SOMME-NOUS">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-intro text-center" data-aos="fade-up">
                <h1>Notre discours : en communication, il faut faire court et taper fort!</h1>
                <div class="divider"></div>
                <div>
                    <p class="text-start">
                        Synthétiser ou clarifier une information par une belle illustration est toujours plus évocateur que de longs discours. Le succès de nos interventions repose sur une écoute et une réflexion marketing globale en proposant des idées publicitaires innovantes, créatives, différenciantes et des supports de communication impactants saupoudrés d’un soupçon d'audace.
                    </p>
                    <p class="text-start">
                    Notre leitmotiv... faire toute la différence !
                    </p>
                    <p class="text-start">
                    Si tant d'entreprises nous sollicitent à titre d’expert pour tous leurs besoins en communication c’est qu’elles nous font confiance.
                    </p>
                </div>

            </div>
        </div>
        <div class="row text-start"></div>
    </div>
</section>

<section id="services" class="services color-seconde text-center bg-light">
    <div class="container">

        <div class="row g-4">
            <div class="col-md-6 " data-aos="fade-left">
                <div class="service">
                    <div class="service-img heigth-box">
                        <img class="plogo" src="img/agenceCommunication/ppp1.png" alt="" />

                    </div>

                </div>
            </div>

            <div class="col-md-6 " data-aos="fade-right">
                <div class="service">

                    <h2 class="mt-5 pt-4">Manque d'inspiration ?</h2>
                    <p class="text-start">
                        Notre studio de création graphique est là pour vous accompagner et pour vous conseiller au mieux tout au long du processus de conception de vos futurs projets publicitaires. N'hésitez pas à nous consulter ! La pré-maquette est SANS ENGAGEMENT !*
                    </p>
                    <p class="text-start">
                        Contactez-nous
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="SOMME-NOUS">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-intro text-center" data-aos="fade-up">
                <h1>La création du logo OFFERT* pour les créateurs d'entreprise ! </h1>
                <div class="divider"></div>
                <div>
                    <p class="text-start">
                       Communiquer pour une entreprise, c’est la faire vivre, la faire connaître et la faire prospérer. En prendre conscience et s'en préoccuper le plus tôt possible est décisif. De bons outils de communication permettent de se démarquer des concurrents et de performer ses commerciaux (ou soi-même) à la prospection (un beau logo, une belle enseigne commerciale, un marquage publicitaire sur véhicule original, une plaquette commerciale professionnelle, des cartes de visite qualitatives...).
                    </p>
                    <p class="text-start">
                    S’il est aujourd'hui facile pour un créateur d'entreprise d'être informé et conseillé en matière de financement, de business plan ou sur le plan juridique, il est souvent peu sensibilisé à la notion, pourtant capitale, de l'image de sa future entreprise.
                    </p>
                </div>


            </div>
            <div class="col-md-12 section-intro text-center" data-aos="fade-up">
               <h1>Valoriser votre image avec un logo unique </h1>
                <div class="divider"></div>
                <div>
                    <p class="text-start">
                       Valoriser votre image, mettre en place des actions de communication adaptées à vos problématiques, c’est ce à quoi nous tentons de répondre pour soutenir votre nouvelle activité.
                    </p>
                    <p class="text-start">
                    Choisir ID GRAPHIQUE comme partenaire communication, c'est mettre toutes les chances de votre côté pour réussir votre challenge ! Et c’est un privilège pour nous ! Et pour vous donner un petit coup de pouce dont chaque créateur d’entreprise a besoin, nous vous offrons la création de votre logo.
                    </p>
                </div>


            </div>
        </div>
        <div class="row text-start"></div>
    </div>
</section>
<section id="services" class="services color-seconde text-center bg-light">
    <div class="container">

        <div class="row g-4">
            <div class="col-md-6 " data-aos="fade-right">
                <div class="service">

                    <h2 class="mt-5 pt-4">Vous aider à grandir</h2>
                    <p class="text-start">
                        Valoriser votre image, mettre en place des actions de communication adaptées à vos problématiques, c’est ce à quoi nous tentons de répondre pour soutenir votre nouvelle activité.
                    </p>
                </div>
            </div>

            <div class="col-md-6 " data-aos="fade-left">
                <div class="service">
                    <div class="service-img heigth-box">
                        <img class="plogo" src="img/agenceCommunication/ppp2.png" alt="" />

                    </div>

                </div>
            </div>


        </div>
    </div>
</section>

<section id="services" class="services color-seconde text-center ">
    <div class="container">

        <div class="row g-4">
         <div class="col-md-6 " data-aos="fade-left">
                <div class="service">
                    <div class="service-img heigth-box">
                        <img class="plogo" src="img/agenceCommunication/ppp3.png" alt="" />

                    </div>

                </div>
            </div>

            <div class="col-md-6 " data-aos="fade-right">
                <div class="service">

                    <h2 class="mt-5 pt-4">Travaillons ensemble</h2>
                    <p class="text-start">
                        Venez à l'agence. Vous pourrez y travailler directement avec l’un de nos graphistes, peaufiner le moindre détail devant l’écran d’ordinateur, toucher les matières de certains produits, consulter d’autres exemples... Une méthode parfaitement adaptée et rodée pour avancer efficacement et en accord avec vos directives.
                    </p>
                    <p class="text-start">
                    Repartez ensuite avec votre devis et votre maquette.
                    </p>
                </div>
            </div>




        </div>
    </div>
</section>

<section id="services" class="services color-seconde text-center ">
    <div class="container">

        <div class="row g-4">
            <div class="col-md-6 " data-aos="fade-right">
                <div class="service">

                    <h2 class="mt-5 pt-4">Des solutions personnalisées ! </h2>
                    <p class="text-start">
                        Vous ne trouvez pas ce que vous cherchez ?
                     </p>
                    <p class="text-start">
                    Si vous ne trouvez pas ce dont vous avez besoin parmi les produits disponibles sur notre site, contactez-nous pour qu'un de nos conseillers vous propose un devis personnalisé. (produits hors catalogue, quantités sur-mesure, configurations personnalisées...)
                    </p>
                </div>
            </div>

            <div class="col-md-6 " data-aos="fade-left">
                <div class="service">
                    <div class="service-img heigth-box">
                        <img class="plogo" src="img/agenceCommunication/ppp4.png" alt="" />

                    </div>

                </div>
            </div>


        </div>
    </div>
</section>

<section class="studios color-seconde text-center bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 section-intro text-center" data-aos="fade-up">
                <h1>Exemples de réalisations</h1>
                <div class="divider"></div>
            </div>
        </div>
        <div class="row g-2">

            {{-- start fig--}}
            <div class="col-md-6 studio-img">
                <div class="studio image-popup">
                    <div class="service-img">
                        <img src="img/nosService/Branding1.jpg" id="myImg1" onclick="openModal('myImg1', 'myModal1');" alt="" />
                        <!-- The Modal -->
                        <div id="myModal1" class="modal">
                            <span class="close">&times;</span>
                            <img class="modal-content" id="img01">
                            <div id="caption"></div>
                        </div>
                        <div class="overlay11" id="myImg1" onclick="openModal('myImg1', 'myModal1');">
                            <div class="text11">
                                <span class="text">Hello World</span><br />
                                <span class="text">Hello World</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 ">
                <div class="row g-2">
                    <div class="col-md-6 ">
                        <div class="studio image-popup">
                            <div class="service-img">
                                <img src="img/nosService/Branding1.jpg" id="myImg2" onclick="openModal('myImg2', 'myModal2');" alt="" />
                                <!-- The Modal -->
                                <div id="myModal2" class="modal">
                                    <span class="close">&times;</span>
                                    <img class="modal-content" id="img01">
                                    <div id="caption"></div>
                                </div>
                                <div class="overlay11" id="myImg2" onclick="openModal('myImg2', 'myModal2');">
                                    <div class="text11">
                                        <span class="text">Hello World</span><br />
                                        <span class="text">Hello World</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="studio image-popup">
                            <div class="service-img">
                                <img src="img/nosService/Branding1.jpg" id="myImg3" onclick="openModal('myImg3', 'myModal3');" alt="" />
                                <!-- The Modal -->
                                <div id="myModal3" class="modal">
                                    <span class="close">&times;</span>
                                    <img class="modal-content" id="img01">
                                    <div id="caption"></div>
                                </div>
                                <div class="overlay11" id="myImg3" onclick="openModal('myImg3', 'myModal3');">
                                    <div class="text11">
                                        <span class="text">Hello World</span><br />
                                        <span class="text">Hello World</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="studio image-popup">
                            <div class="service-img">
                                <img src="img/nosService/Branding1.jpg" id="myImg4" onclick="openModal('myImg4', 'myModal4');" alt="" />
                                <!-- The Modal -->
                                <div id="myModal4" class="modal">
                                    <span class="close">&times;</span>
                                    <img class="modal-content" id="img01">
                                    <div id="caption"></div>
                                </div>
                                <div class="overlay11" id="myImg4" onclick="openModal('myImg4', 'myModal4');">
                                    <div class="text11">
                                        <span class="text">Hello World</span><br />
                                        <span class="text">Hello World</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="studio image-popup">
                            <div class="service-img">
                                <img src="img/nosService/Branding1.jpg" id="myImg5" onclick="openModal('myImg5', 'myModal5');" alt="" />
                                <!-- The Modal -->
                                <div id="myModal5" class="modal">
                                    <span class="close">&times;</span>
                                    <img class="modal-content" id="img01">
                                    <div id="caption"></div>
                                </div>
                                <div class="overlay11" id="myImg5" onclick="openModal('myImg5', 'myModal5');">
                                    <div class="text11">
                                        <span class="text">Hello World</span><br />
                                        <span class="text">Hello World</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end fig--}}
        </div>
         <div class="col-12 text-center">
            <a href="{{url('/studio-creation')}}" class="button">EN VOIR PLUS</a>
        </div>
    </div>
</section>

@endsection
