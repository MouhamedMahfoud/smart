@extends('layoute')
@section('content')
<!-- Start home  -->
<section id="ACCUEIL" class="bg-cover hero-section">
    <div class="home-slider owl-carousel js-fullheight">
        <div class="slider-item js-fullheight" style="background-image: url(img/logo/15.jpg)">
            <div class="overlay"></div>
        </div>
        <div class="slider-item js-fullheight" style="background-image: url(img/logo/17.jpg)">
            <div class="overlay"></div>
        </div>
        <div class="slider-item js-fullheight" style="background-image: url(img/logo/18.webp)">
            <div class="overlay"></div>
        </div>
        <div class="slider-item js-fullheight" style="background-image: url(img/logo/8.webp)">
            <div class="overlay"></div>
        </div>
        <div class="slider-item js-fullheight" style="background-image: url(img/logo/10.webp)">
            <div class="overlay"></div>
        </div>
        <div class="slider-item js-fullheight" style="background-image: url(img/logo/13.avif)">
            <div class="overlay"></div>
        </div>
    </div>
</section>


<!-- End home -->
<!-- Start QUI SOMME-NOUS -->
<section id="SOMME-NOUS">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-intro text-center" data-aos="fade-up">
                <h1>Création de logo professionnel - refonte d'identité Logotype - Illustration - Création unique et personnalisée</h1>
                <div class="divider"></div>
                <div>
                    <p class="text-center">
                        Création de logo gratuit en ligne - refonte d'identité - création de charte graphique - agence de pub - Hauts de france / 62
                    </p>
                </div>

            </div>
        </div>
        <div class="row text-start"></div>
    </div>
</section>
<!-- Button trigger modal -->

<!-- Modal1 -->
<div class="modal" id="detalModal1" tabindex="-1" aria-labelledby="detalModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="container">
                            <div class="mySlides  mySlidesModele1">
                                <img class="imgSlide" src="img/nosService/Branding1.jpg" style="width:100%">
                            </div>

                            <div class="mySlides  mySlidesModele1">
                                <img class="imgSlide" src="img/slideHome/ca1.jpg" style="width:100%">
                            </div>

                            <div class="mySlides  mySlidesModele1">
                                <img class="imgSlide" src="img/slideHome/coverPano.jpg" style="width:100%">
                            </div>

                            <div class="mySlides  mySlidesModele1">
                                <img class="imgSlide" src="img/slideHome/ino.jpg" style="width:100%">
                            </div>

                            <div class="mySlides  mySlidesModele1">
                                <img class="imgSlide" src="img/slideHome/print.jpg" style="width:100%">
                            </div>

                            <div class="mySlides  mySlidesModele1">
                                <img class="imgSlide" src="img/slideHome/website1.jpg" style="width:100%">
                            </div>




                            <div class="row">
                                <div class="column">
                                    <img class="cursor-pointer" class="imgSlide" class="demo cursor" src="img/nosService/Branding1.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
                                </div>
                                <div class="column">
                                    <img class="cursor-pointer" class="imgSlide" class="demo cursor" src="img/slideHome/ca1.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
                                </div>
                                <div class="column">
                                    <img class="cursor-pointer" class="imgSlide" class="demo cursor" src="img/slideHome/coverPano.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
                                </div>
                                <div class="column">
                                    <img class="cursor-pointer" class="imgSlide" class="demo cursor" src="img/slideHome/ino.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
                                </div>
                                <div class="column">
                                    <img class="cursor-pointer" class="imgSlide" class="demo cursor" src="img/slideHome/print.jpg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
                                </div>
                                <div class="column">
                                    <img class="cursor-pointer" class="imgSlide" class="demo cursor" src="img/slideHome/website1.jpg" style="width:100%" onclick="currentSlide(6,'mySlidesModele1')" alt="Snowy Mountains">
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6 ms-auto">
                        <h5>Création de logo</h5>
                        <h6>Pack éco</h6>
                        <hr class="border border-secondary-emphasis border-2 opacity-50">

                        <h5>Description</h5>
                        <h6>CREATION D'UN LOGO (PACK ECO)</h6>
                          <ul class="list-unstyled">
                            <li>Recherche / briefing / 2 pistes créatives / 1 débriefing / finalisation</li>
                            <li>Déclinaison du logo final en 2 versions, 1 CMJN (supports papiers) et 1 RVB (écrans)</li>
                            <li>Droits d'auteur et droits d'utilisation inclus. (client)</li>
                            <li>Logo livré sous 8 jours maxi.</li>
                        </ul>
                        <p>Infos : Logo offert pour les créateurs d'entreprises*</p>
                        <p>* voir conditions à l'agence</p>
                        <hr class="border border-secondary-emphasis border-2 opacity-50">
                        <h5>Infos produit</h5>
                        <p>Créateur d'entreprise : nous vous offrons la création de votre logo ! Choisir ID GRAPHIQUE pour la création de votre logotype, c'est la chance de pouvoir obtenir un logo professionnel gratuit et de qualité (pour toute commande supérieure à 200 euros HT). En plus, la pré-maquette est SANS engagement* ! (*voir conditions)</p>
                        <p>Pourquoi vous offrir ce logo ? C'est notre position de concepteur / fabricant qui nous donne plus d'aisance face aux agences de communications plus rigides qui ne pourraient se permettre ce genre de démarche.</p>
                        <p>Que de fonctions pour un logo ! Un logo a plus d’une fonction dans son sac et se doit d’être identifiable parmi tous.</p>
                        <p>Pour cela, Il doit avoir un impact fort, être une publicité à lui seul. Le logo doit être prêt à traverser les tendances et modes, être résolument contemporain et identifiable aujourd’hui comme dans 3, 6 ans voire beaucoup plus longtemps.</p>
                        <p>Le logo doit être le symbole de votre entreprise. Il doit clairement, séduire sa cible mais doit aussi imaginer de futurs changements d’orientation, de communication et de stratégie (on parle plus communément de relookage de logo). </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal2 -->
<div class="modal" id="detalModal2" tabindex="-1" aria-labelledby="detalModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="container">
                            <div class="mySlides mySlidesModele2">
                                <img class="imgSlide" src="img/nosService/Branding1.jpg" style="width:100%">
                            </div>

                            <div class="mySlides mySlidesModele2">
                                <img class="imgSlide" src="img/slideHome/ca1.jpg" style="width:100%">
                            </div>

                            <div class="mySlides mySlidesModele2">
                                <img class="imgSlide" src="img/slideHome/coverPano.jpg" style="width:100%">
                            </div>

                            <div class="mySlides mySlidesModele2">
                                <img class="imgSlide" src="img/slideHome/ino.jpg" style="width:100%">
                            </div>

                            <div class="mySlides mySlidesModele2">
                                <img class="imgSlide" src="img/slideHome/print.jpg" style="width:100%">
                            </div>

                            <div class="mySlides mySlidesModele2">
                                <img class="imgSlide" src="img/slideHome/website1.jpg" style="width:100%">
                            </div>




                            <div class="row">
                                <div class="column">
                                    <img class="cursor-pointer" class="imgSlide" class="demo cursor" src="img/nosService/Branding1.jpg" style="width:100%" onclick="currentSlide1(1)" alt="The Woods">
                                </div>
                                <div class="column">
                                    <img class="cursor-pointer" class="imgSlide" class="demo cursor" src="img/slideHome/ca1.jpg" style="width:100%" onclick="currentSlide1(2)" alt="Cinque Terre">
                                </div>
                                <div class="column">
                                    <img class="cursor-pointer" class="imgSlide" class="demo cursor" src="img/slideHome/coverPano.jpg" style="width:100%" onclick="currentSlide1(3)" alt="Mountains and fjords">
                                </div>
                                <div class="column">
                                    <img class="cursor-pointer" class="imgSlide" class="demo cursor" src="img/slideHome/ino.jpg" style="width:100%" onclick="currentSlide1(4)" alt="Northern Lights">
                                </div>
                                <div class="column">
                                    <img class="cursor-pointer" class="imgSlide" class="demo cursor" src="img/slideHome/print.jpg" style="width:100%" onclick="currentSlide1(5)" alt="Nature and sunrise">
                                </div>
                                <div class="column">
                                    <img class="cursor-pointer" class="imgSlide" class="demo cursor" src="img/slideHome/website1.jpg" style="width:100%" onclick="currentSlide1(6)" alt="Snowy Mountains">
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6 ms-auto">
                        <h5>Création de logo</h5>
                        <h6>Pack classique</h6>
                        <hr class="border border-secondary-emphasis border-2 opacity-50">

                        <h5>Description</h5>
                        <h6> CREATION D'UN LOGO (PACK CLASSIQUE)</h6>
                          <ul class="list-unstyled">
                            <li>Recherche / briefing / 4 pistes créatives / 2 débriefing / finalisation</li>
                            <li>Déclinaison du logo final en 3 versions, 1 CMJN (supports papiers) et 1 RVB (écrans) et vectoriel (eps, ai, pdf)</li>
                            <li>Droits d'auteur et droits d'utilisation inclus. (client)</li>
                            <li>Logo livré sous 8/10 jours maxi.</li>
                        </ul>
                        <hr class="border border-secondary-emphasis border-2 opacity-50">
                        <h5>Infos produit</h5>
                        <p>Ne négligez pas l'image de votre entreprise ! Avec notre pack classique, bénéficiez d'une création de logo sur mesure qui saura représenter au mieux votre société.</p>
                        <p>Le logo doit pouvoir vous représenter de la meilleure des manières. Pour cela, Il doit être impactant, être capable de traverser les tendances et les modes, être formellement contemporain et reconnaissable aujourd’hui comme dans 3, 6 ans voire bien plus longtemps. Il doit être en mesure de séduire sa cible mais doit aussi anticiper les futurs changements d’orientation, de communication et de stratégie (relookage de logo).</p>
                        <p>ID GRAPHIQUE met un point d'honneur à vous fournir un logo professionnel et de qualité. Votre nouvelle identité vous est délivrée sous forme de fichiers adaptés au web et à l'impression. Vous disposez également des droits d'auteur et d'utilisation complets des fichiers. </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal3 -->
<div class="modal" id="detalModal3" tabindex="-1" aria-labelledby="detalModal3Label" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="container">
                            <div class="mySlides mySlidesModele3">
                                <img class="imgSlide" src="img/nosService/Branding1.jpg" style="width:100%">
                            </div>

                            <div class="mySlides mySlidesModele3">
                                <img class="imgSlide" src="img/slideHome/ca1.jpg" style="width:100%">
                            </div>

                            <div class="mySlides mySlidesModele3">
                                <img class="imgSlide" src="img/slideHome/coverPano.jpg" style="width:100%">
                            </div>

                            <div class="mySlides mySlidesModele3">
                                <img class="imgSlide" src="img/slideHome/ino.jpg" style="width:100%">
                            </div>

                            <div class="mySlides mySlidesModele3">
                                <img class="imgSlide" src="img/slideHome/print.jpg" style="width:100%">
                            </div>

                            <div class="mySlides mySlidesModele3">
                                <img class="imgSlide" src="img/slideHome/website1.jpg" style="width:100%">
                            </div>




                            <div class="row">
                                <div class="column">
                                    <img class="cursor-pointer" class="imgSlide" class="demo cursor" src="img/nosService/Branding1.jpg" style="width:100%" onclick="currentSlide3(1)" alt="The Woods">
                                </div>
                                <div class="column">
                                    <img class="cursor-pointer" class="imgSlide" class="demo cursor" src="img/slideHome/ca1.jpg" style="width:100%" onclick="currentSlide3(2)" alt="Cinque Terre">
                                </div>
                                <div class="column">
                                    <img class="cursor-pointer" class="imgSlide" class="demo cursor" src="img/slideHome/coverPano.jpg" style="width:100%" onclick="currentSlide3(3)" alt="Mountains and fjords">
                                </div>
                                <div class="column">
                                    <img class="cursor-pointer" class="imgSlide" class="demo cursor" src="img/slideHome/ino.jpg" style="width:100%" onclick="currentSlide3(4)" alt="Northern Lights">
                                </div>
                                <div class="column">
                                    <img class="cursor-pointer" class="imgSlide" class="demo cursor" src="img/slideHome/print.jpg" style="width:100%" onclick="currentSlide3(5)" alt="Nature and sunrise">
                                </div>
                                <div class="column">
                                    <img class="cursor-pointer" class="imgSlide" class="demo cursor" src="img/slideHome/website1.jpg" style="width:100%" onclick="currentSlide3(6)" alt="Snowy Mountains">
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6 ms-auto">
                        <h5>Création de logo</h5>
                        <h6>Pack pro</h6>
                        <hr class="border border-secondary-emphasis border-2 opacity-50">

                        <h5>Description</h5>
                        <h6> CREATION D'UN LOGO PACK PRO</h6>
                          <ul class="list-unstyled">
                            <li>Recherche / briefing / 6 pistes créatives / 3 débriefing / finalisation </li>
                            <li>Réflexion globale et présentation de 6 pistes créative.</li>
                            <li>Optimisation d'un axe, finalisation et exécution.</li>
                            <li>Mise en scène / Mockup de présentation multiples</li>
                            <li>Création des supports de correspondance inclus : cartes commerciales, correspondance, enveloppe, entête de lettre, signature mail et module Facebook.</li>
                            <li>Déclinaison du logo final en 3 versions, 1 CMJN (supports papiers) et 1 RVB (écrans) et vectoriel (eps, ai, pdf)</li>
                            <li>Livraison du logo final au format de prévisualisation (pdf, jpg, eps, ai)</li>
                            <li>Livraison des supports de correspondance au format PDF HD.</li>
                            <li>Entretien personnalisé avec un designer de l'équipe (RDV agence ou Tel.)</li>
                            <li>Droits d'auteur et droits d'utilisation inclus. (client)</li>
                            <li>Logo et fichiers livrés sous 8/10 jours maxi. </li>
                        </ul>
                        <hr class="border border-secondary-emphasis border-2 opacity-50">
                        <h5>Infos produit</h5>
                        <p>Besoin de professionnaliser l'image de votre entreprise ? Bénéficiez dès à présent de notre pack pro / charte graphique !</p>
                        <p>La charte graphique permet de définir avec précision l’identité visuelle d’une marque ou d’une entreprise. Elle est donc indispensable pour rendre toutes les créations de vos nouveaux supports de communication pertinentes et cohérentes. Avec cette formule, nous vous proposons la création sur mesure de votre logo ainsi que la réalisation des supports de correspondances incontournables : carte de visite, en-tête de lettre, carte de correspondance, enveloppe, signature de mail, module Facebook.</p>
                        <p>Offrez ainsi à votre société une identité solide et cohérente, indispensable pour votre image et votre notoriété.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal4 -->
<div class="modal" id="detalModal4" tabindex="-1" aria-labelledby="detalModal4Label" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="container">
                            <div class="mySlides mySlidesModele4">
                                <img class="imgSlide" src="img/nosService/Branding1.jpg" style="width:100%">
                            </div>

                            <div class="mySlides mySlidesModele4">
                                <img class="imgSlide" src="img/slideHome/ca1.jpg" style="width:100%">
                            </div>

                            <div class="mySlides mySlidesModele4">
                                <img class="imgSlide" src="img/slideHome/coverPano.jpg" style="width:100%">
                            </div>

                            <div class="mySlides mySlidesModele4">
                                <img class="imgSlide" src="img/slideHome/ino.jpg" style="width:100%">
                            </div>

                            <div class="mySlides mySlidesModele4">
                                <img class="imgSlide" src="img/slideHome/print.jpg" style="width:100%">
                            </div>

                            <div class="mySlides mySlidesModele4">
                                <img class="imgSlide" src="img/slideHome/website1.jpg" style="width:100%">
                            </div>




                            <div class="row">
                                <div class="column">
                                    <img class="cursor-pointer" class="imgSlide" class="demo cursor" src="img/nosService/Branding1.jpg" style="width:100%" onclick="currentSlide4(1)" alt="The Woods">
                                </div>
                                <div class="column">
                                    <img class="cursor-pointer" class="imgSlide" class="demo cursor" src="img/slideHome/ca1.jpg" style="width:100%" onclick="currentSlide4(2)" alt="Cinque Terre">
                                </div>
                                <div class="column">
                                    <img class="cursor-pointer" class="imgSlide" class="demo cursor" src="img/slideHome/coverPano.jpg" style="width:100%" onclick="currentSlide4(3)" alt="Mountains and fjords">
                                </div>
                                <div class="column">
                                    <img class="cursor-pointer" class="imgSlide" class="demo cursor" src="img/slideHome/ino.jpg" style="width:100%" onclick="currentSlide4(4)" alt="Northern Lights">
                                </div>
                                <div class="column">
                                    <img class="cursor-pointer" class="imgSlide" class="demo cursor" src="img/slideHome/print.jpg" style="width:100%" onclick="currentSlide4(5)" alt="Nature and sunrise">
                                </div>
                                <div class="column">
                                    <img class="cursor-pointer" class="imgSlide" class="demo cursor" src="img/slideHome/website1.jpg" style="width:100%" onclick="currentSlide4(6)" alt="Snowy Mountains">
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6 ms-auto">
                        <h5>Refonte de logo</h5>
                        <h6>Pack refonte d'identité</h6>
                        <hr class="border border-secondary-emphasis border-2 opacity-50">

                        <h5>Description</h5>
                          <ul class="list-unstyled">
                            <li>Recherche créative à partir d'un brief / audit.</li>
                            <li>Réflexion globale et présentation de 2 nouvelles pistes créative.</li>
                            <li>Optimisation d'un axe, finalisation et exécution.</li>
                            <li> Mise en scène / Mockup de présentation multiples</li>
                            <li>Déclinaison du logo final en 3 versions, 1 CMJN (supports papiers) et 1 RVB (écrans) et vectoriel (eps, ai, pdf)</li>
                            <li>Livraison du logo final au format de prévisualisation (pdf, jpg, eps, ai)</li>
<li>Entretien personnalisé avec un designer de l'équipe (RDV agence ou Tel.)</li>
 <li> Droits d'auteur et droits d'utilisation inclus. (client)</li>
 <li> Logo livré sous 8/10 jours maxi.</li>

                        </ul>
                        <p>50% de remise pour toute commande supérieure ou égale à 650 euros HT. </p>
                        <hr class="border border-secondary-emphasis border-2 opacity-50">
                        <h5>Infos produit</h5>
                        <p>Grâce à notre pack refonte de logo et relookage d'identité, donnez un second souffle à votre entreprise.</p>
                        <p>Se mettre sans cesse à la page et dans l'évolution des tendances prouve à vos clients ou votre public que vous possédez une activité évolutive, tournée vers la modernité et la croissance. En Améliorant la communication par le biais d'une refonte de votre identité visuelle, vous augmentez incontestablement votre rentabilité et votre efficacité.</p>
                        <p>La refonte de votre logo est repensée en fonction de votre secteur d'activité et de votre cible. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Start service -->
<div class="services color-seconde bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 section-intro text-center" data-aos="fade-up">
                <h1>Découvrez notre gamme</h1>
                <div class="divider"></div>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-3" data-aos="zoom-in">
                <div class="service">
                    <img class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#detalModal1" src="img/nosService/Branding1.jpg" alt="" />

                    <h5 class="mt-3 text-start">Création de logo </h5>
                    <h6 class="text-start">Pack éco</h6>
                    <p class="mb-2">CREATION D'UN LOGO (PACK ECO)</p>
                    <ul>
                        <li>Recherche / briefing / 2 pistes créatives / 1 débriefing / finalisation</li>
                        <li>Déclinaison du logo final en 2 versions, 1 CMJN (supports papiers) et 1 RVB (écrans)</li>
                        <li>Droits d'auteur et droits d'utilisation inclus. (client)</li>
                        <li>Logo livré sous 8 jours maxi.</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3" data-aos="zoom-in">
                <div class="service">
                     <img class="cursor-pointer max-height-img" data-bs-toggle="modal" data-bs-target="#detalModal2" src="img/logo/1.jpg" alt="" />
                    <h5 class="mt-3 text-start">Création de logo </h5>
                    <h6 class="text-start">Pack classique</h6>
                    <p class="mb-2">CREATION D'UN LOGO (PACK CLASSIQUE)</p>
                    <ul>
                        <li>Recherche / briefing / 4 pistes créatives / 2 débriefing / finalisation </li>
                        <li>Déclinaison du logo final en 3 versions, 1 CMJN (supports papiers) et 1 RVB (écrans) et vectoriel (eps, ai, pdf)</li>
                        <li>Mise en scène / Mockup de présentation multiples</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3" data-aos="zoom-in">
                <div class="service">
                     <img class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#detalModal3" src="img/nosService/Branding1.jpg" alt="" />
                    <h5 class="mt-3 text-start">Création de logo </h5>
                    <h6 class="text-start">Pack pro</h6>
                    <p class="mb-2">CREATION D'UN LOGO PACK PRO</p>
                    <ul>
                        <li>Recherche / briefing / 6 pistes créatives / 3 débriefing / finalisation</li>
                        <li>Réflexion globale et présentation de 6 pistes créative.</li>
                        <li>Optimisation d'un axe, finalisation et exécution.</li>
                        <li>Mise en scène / Mockup de présentation</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3" data-aos="zoom-in">
                <div class="service">
                    <img class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#detalModal4" src="img/nosService/Branding1.jpg" alt="" />
                    <h5 class="mt-3 text-start">Refonte de logo</h5>
                    <h6 class="text-start">Pack éco</h6>
                    <p class="mb-2">Pack refonte d'identité</p>
                    <ul>
                        <li>Recherche créative à partir d'un brief / audit.</li>
                        <li> Réflexion globale et présentation de 2 nouvelles pistes créative.</li>
                        <li> Optimisation d'un axe, finalisation et exécution.</li>
                        <li> Mise en scène / Mockup de présentation multiples</li>
                        <li> Déclinaison du logo final en 3 versions, 1</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Service -->

<section id="SOMME-NOUS">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-intro text-center" data-aos="fade-up">
                <h1>Comprendre l’importance du logo d’entreprise</h1>
                <div class="divider"></div>
                <div>
                    <p class="text-start">
                        Nous pensons souvent, et à tort, que la communication humaine est essentiellement verbale. Ce n’est pas le cas. Nous sommes avant tout des créatures de formes et de sens, d’images, de langage corporel et non verbal.
                    </p>
                    <p class="text-start">
                        En tant qu’agence de communication, c’est notre métier de vous démontrer l’importance de la création d’un logo et de son impact sur l’identité de votre entreprise.
                    </p>
                    <p class="text-start">
                        Il s’agit de trouver le juste équilibre entre l’accroche et la transmission d’un message en adéquation avec ce que vous souhaitez exprimer pour communiquer efficacement avec vos clients. Le logo (ou encore logotype) représente autant un challenge qu’un outil extrêmement riche pour votre société et votre clientèle.
                    </p>
                    <p class="text-start">
                        Pour créer un logo d’entreprise, un ensemble de règles doivent être appliquées qui visent à s’assurer que le logo créé puisse être universellement applicable sur tous types de supports et assimilable à votre marque ou société.
                    </p>
                    <p class="text-start">
                        C’est pourquoi tout est réfléchi avec soins par notre équipe créative quant aux choix des couleurs et à leur signification, à leurs effets perçus et à leur composition avec leur entourage graphique...
                    </p>
                </div>
                <h1>Que de fonctions pour un logo !</h1>
                <div class="divider"></div>
                <div>
                    <p class="text-start">
                        Un logo a plus d’une fonction dans son sac et se doit d’être identifiable parmi tous.
                    </p>
                    <p class="text-start">
                        Pour cela, Il doit avoir un impact fort, être une publicité à lui seul. Le logo doit être prêt à traverser les tendances et modes, être résolument contemporain et identifiable aujourd’hui comme
                        dans 3, 6 ans voire beaucoup plus longtemps
                    </p>
                    <p class="text-start">
                        Le logo doit être le symbole de votre entreprise. Il doit clairement, séduire sa cible mais doit aussi imaginer de futurs changements d’orientation, de communication et de stratégie (on parle plus communément de relookage de logo).
                    </p>
                </div>

            </div>
        </div>
        <div class="row text-start"></div>
    </div>
</section>
<!-- End QUI SOMME-NOUS -->
<!-- Start service -->
<section id="services" class="services color-seconde text-center bg-light">
    <div class="container">

        <div class="row g-4">
            <div class="col-md-6 " data-aos="fade-right">
                <div class="service">

                    <h2 class="mt-5 pt-4">Manque d'inspiration ?</h2>
                    <p class="text-start">
                        Notre studio de création graphique est là pour vous accompagner et pour vous conseiller au mieux tout au long du processus de conception de vos futurs projets publicitaires. N'hésitez pas à nous consulter ! La pré-maquette est SANS ENGAGEMENT !*
                    </p>
                    <p class="text-start">
                        Contactez-nous d'urgence
                    </p>
                </div>
            </div>

            <div class="col-md-6 " data-aos="fade-left">
                <div class="service">
                    <div class="service-img heigth-box">
                        <img class="plogo" src="img/agenceCommunication/inspiration.png" alt="" />

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
                <h1>Les meilleurs logos sont inoubliables !</h1>
                <div class="divider"></div>
                <div>
                    <p class="text-start">
                        Les meilleurs logos sont inoubliables et fonctionnent dans divers environnements. Il sont faciles à redimensionner et à reproduire dans différents contextes.
                    </p>
                    <p class="text-start">
                        Si vous feuilletez un magazine, vous avez de grandes chances de tomber sur la virgule de Nike. Et si vous vous arrêtez devant un panneau d’affichage, vous n’échapperez sans doute pas au magnétisme des deux cercles de Mastercard. Vous connaissez ces marques ? Oui, bien sûr. Mais pourquoi leurs logos fonctionnent-ils ?
                    </p>
                    <p class="text-start">
                        Il faut d’abord bien comprendre qu’un logo n’est pas la seule composante d’une identité de marque. Tenez compte de tous les éléments qui forment votre identité, et réfléchissez à la manière dont vous pouvez les aligner visuellement avec votre logo pour créer une image de marque à la fois cohérente et efficace.
                    </p>
                    <p class="text-start">
                        Qu’il s’agisse de lancer une marque ou d’en redynamiser une que tout le monde connaît, il faut avant tout que le logo soit percutant. Si le contexte et le style peuvent varier d’une année à l’autre, les principes et bonnes pratiques en matière de création de logos sont toujours les mêmes.
                    </p>
                    <p class="text-start">
                        La création d’un logo unique en son genre n’est pas forcément compliquée. Avec quelques bons conseils et un soupçon d’inspiration, nous pourrons très facilement en élaborer un qui captivera votre public.
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
                        <img class="plogo" src="img/agenceCommunication/verh.png" alt="" />

                    </div>

                </div>
            </div>

            <div class="col-md-6 " data-aos="fade-right">
                <div class="service">

                    <h2 class="mt-5 pt-4">On vous pousse vers le haut !</h2>
                    <p class="text-start">
                        Notre motivation première : faire le maximum pour votre réussite. Parce que participer au bon fonctionnement de votre entreprise se répercute sur l'image de notre société, nous serons les premiers à vous soutenir et à vous pousser vers le haut !
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="services" class="services color-seconde text-center">
    <div class="container">

        <div class="row g-4">

            <div class="col-md-6 " data-aos="fade-right">
                <div class="service">

                    <h2 class="mt-5 pt-4">Refonte de votre identité</h2>
                    <p class="text-start">
                        En Améliorant la communication par le biais d'une refonte de votre identité visuelle, vous augmentez incontestablement votre rentabilité et votre efficacité.
                        Se mettre sans cesse à la page et dans l'évolution des tendances prouve à vos clients ou votre public que vous possédez une activité évolutive, tournée vers la modernité et la croissance.
                        <br />Formule refonte logo à partir de 329 euros HT
                    </p>
                </div>
            </div>

            <div class="col-md-6 " data-aos="fade-left">
                <div class="service">
                    <div class="service-img heigth-box">
                        <img class="plogo" src="img/agenceCommunication/refontid.png" alt="" />

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
                <h1>Créateur d'entreprise : nous vous offrons la création de votre logo!</h1>
                <div class="divider"></div>
                <div>
                    <p class="text-start">
                        Choisir ID GRAPHIQUE pour la création de votre logo, c'est la chance de pouvoir obtenir un logo professionnel gratuit et de qualité (pour toute commande d’impression supérieure à 650 euros HT). Nous avons pour habitude de travailler en étroite collaboration avec nos clients.
                    </p>
                    <p class="text-start">
                        C’est pourquoi nous vous proposons de passer un moment privilégié et totalement personnalisé au sein de notre agence avec un graphiste expérimenté pour affiner vos choix et goûts en terme de colorimétrie, de forme, d’esprit... Notre souhait final est de parvenir à un résultat abouti et correspondant à votre identité et à vos pleines attentes.
                    </p>
                </div>
                <h1>Pourquoi vous offrir ce logo ?</h1>
                <div class="divider"></div>
                <div>
                    <p class="text-start">
                        C'est notre position de concepteur / fabricant qui nous donne plus d'aisance face aux agences de communications plus rigides qui ne pourraient se permettre ce genre de démarche.
                    </p>
                    <p class="text-start">
                        Si nous sommes en mesure de vous offrir votre logo , c'est parce que nous estimons essentiel de donner un petit coup de pouce aux créateurs d’entreprise qui en ont aujourd’hui le plus besoin face à la conjoncture actuelle. Nous nous devons tous de faire des efforts.
                    </p>
                    <p class="text-start">
                        C’est aussi notre façon de vous remercier de votre confiance et de vous montrer notre reconnaissance pour nous avoir choisi comme partenaire graphique.
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
                        <img class="plogo" src="img/agenceCommunication/sympa.png" alt="" />

                    </div>

                </div>
            </div>

            <div class="col-md-6 " data-aos="fade-right">
                <div class="service">

                    <h2 class="mt-5 pt-4">et en + on est sympa !</h2>
                    <p class="text-start">
                        Discuter autour de votre projet est une étape importante dans le processus de création, alors n'hésitez pas à venir en discuter avec nous, cela nous aidera à mieux cerner vos besoins et à trouver la bonne direction pour l'ensemble de vos besoins.
                    </p>
                </div>
            </div>


        </div>
    </div>
</section>



<div class="studios color-seconde text-center bg-light">
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
                        <img  class="stidioIm" src="img/logo/8.webp" id="myImg1" onclick="openModal('myImg1', 'myModal1');" alt="" />
                        <!-- The Modal -->
                        <div id="myModal1" class="modal">
                            <img class="modal-contentimg" id="img01">
                            <div id="caption"></div>
                        </div>
                        <div class="overlay11" id="myImg1" onclick="openModal('myImg1', 'myModal1');">
                            <div class="text11">
                                <h2>Creation de Logo</h2><br />
                                {{-- <span class="text">Hello World</span> --}}
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
                                <img  class="stidioIm-min" src="img/logo/1.jpg" id="myImg2" onclick="openModal('myImg2', 'myModal2');" alt="" />
                                <!-- The Modal -->
                                <div id="myModal2" class="modal">
                                    <img class="modal-contentimg" id="img01">
                                    <div id="caption"></div>
                                </div>
                                <div class="overlay11" id="myImg2" onclick="openModal('myImg2', 'myModal2');">
                                    <div class="text11">
                                        <span class="text">création carte pour événementiel </span><br />
                                        {{-- <span class="text">création carte pour événementiel</span> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="studio image-popup">
                            <div class="service-img">
                                <img class="stidioIm-min" src="img/logo/3.jpg" id="myImg3" onclick="openModal('myImg3', 'myModal3');" alt="" />
                                <!-- The Modal -->
                                <div id="myModal3" class="modal">
                                    <img class="modal-contentimg" id="img01">
                                    <div id="caption"></div>
                                </div>
                                <div class="overlay11" id="myImg3" onclick="openModal('myImg3', 'myModal3');">
                                    <div class="text11">
                                        <span class="text">création Logo</span><br />
                                        {{-- <span class="text">Hello World</span> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="studio image-popup">
                            <div class="service-img">
                                <img class="stidioIm-min" src="img/logo/5.jpg" id="myImg4" onclick="openModal('myImg4', 'myModal4');" alt="" />
                                <!-- The Modal -->
                                <div id="myModal4" class="modal">
                                    <img class="modal-contentimg" id="img01">
                                    <div id="caption"></div>
                                </div>
                                <div class="overlay11" id="myImg4" onclick="openModal('myImg4', 'myModal4');">
                                    <div class="text11">
                                        <span class="text">création plaquette commerciale store </span><br />
                                        {{-- <span class="text">Hello World</span> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="studio image-popup">
                            <div class="service-img">
                                <img class="stidioIm-min" src="img/logo/6.jpg" id="myImg5" onclick="openModal('myImg5', 'myModal5');" alt="" />
                                <!-- The Modal -->
                                <div id="myModal5" class="modal">
                                    <img class="modal-contentimg" id="img01">
                                    <div id="caption"></div>
                                </div>
                                <div class="overlay11" id="myImg5" onclick="openModal('myImg5', 'myModal5');">
                                    <div class="text11">
                                        <span class="text">creation de carte design pour entreprise</span>
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
            <a href="{{url('/studio-logo')}}" class="button">EN VOIR PLUS</a>
        </div>
    </div>
</div>

@endsection
