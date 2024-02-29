@extends('layoute')
@section('content')
<!-- Start home  -->
<section class="bg-cover hero-section">
    <div class="home-slider owl-carousel js-fullheight">
        <div class="slider-item js-fullheight" style="background-image: url(img/agenceCommunication/noterStrategie/1.jpg)">
            <div class="overlay"></div>
        </div>
        <div class="slider-item js-fullheight" style="background-image: url(img/agenceCommunication/noterStrategie/2.jpg)">
            <div class="overlay"></div>
        </div>
        <div class="slider-item js-fullheight" style="background-image: url(img/agenceCommunication/noterStrategie/3.jpg)">
            <div class="overlay"></div>
        </div>
        <div class="slider-item js-fullheight" style="background-image: url(img/agenceCommunication/noterStrategie/4.jpg)">
            <div class="overlay"></div>
        </div>
        <div class="slider-item js-fullheight" style="background-image: url(img/agenceCommunication/noterStrategie/5.jpg)">
            <div class="overlay"></div>
        </div>
        <div class="slider-item js-fullheight" style="background-image: url(img/agenceCommunication/noterStrategie/6.jpg)">
            <div class="overlay"></div>
        </div>
    </div>
</section>


<!-- End home -->
<!-- Start QUI SOMME-NOUS -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-intro text-center" data-aos="fade-up">
                <h1>Fabrication de panneaux publicitaires sur-mesure
                    affichage, signalétique de magasin, ...</h1>
                <div class="divider"></div>
                <div>
                    <p class="text-center">
                        Panneau signalétique - tarif panneau PVC - impression sur panneau - marquage industriel - panneau de chantier - affichage - immobilier - panneau pas cher
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
                        <h5>Panneau de chantier</h5>
                        <h6>Communiquez sur vos réalisations</h6>
                        <hr class="border border-secondary-emphasis border-2 opacity-50">

                        <h5>Description</h5>
                        <h6>CREATION D'UN LOGO (PACK ECO)</h6>
                          <ul class="list-unstyled">
                            <li>Support : PVC Akylux 3,5 mm 650g/m2</li>
                            <li>Usage : panneau de chantier / extérieur</li>
                            <li>Couleur du panneau : blanc</li>
                            <li>Impression quadri recto</li>
                            <li>Format : 60x40 cm ou 60x80 cm ou 80x120 cm</li>
                            <li>Finition : oeillets inclus à chaque coins</li>
                            <li>Avec ou sans vernis de protection anti U.V.</li>
                        </ul>
                        <hr class="border border-secondary-emphasis border-2 opacity-50">
                        <h5>Infos produit</h5>
                        <p>Le panneau de chantier Akylux est un panneau alliant rigidité du PVC alvéolaire et prix attractif. Idéal pour orienter, diriger, avertir, informer, sécuriser ou tout simplement pour indiquer par qui est réalisé le chantier, il saura à coup sûr mettre en avant l'image de votre société. Pour mieux répondre à vos besoins, nos panneaux de chantier se déclinent en trois formats : 60x40 cm, 60x80 cm ou 80x120 cm.</p>
                        <p>Gardez tout l'éclat de votre communication sur le long terme ! Nos panneaux de chantier peuvent être réalisés avec un vernis de protection anti U.V. afin d'assurer une meilleure tenue en extérieur.</p>
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
                        <h5>Panneau Immobilier</h5>
                        <h6>L'idéal pour communiquer sur un bien à vendre</h6>
                        <hr class="border border-secondary-emphasis border-2 opacity-50">

                        <h5>Description</h5>
                          <ul class="list-unstyled">
                            <li>Support : PVC Akylux 3,5 mm 650g/m2</li>
                            <li>Usage : panneau immobilier / extérieur</li>
                            <li>Couleur du panneau : blanc</li>
                            <li>Impression quadri recto</li>
                            <li>Format : 80x120 cm avec 3 plis</li>
                            <li>Finition : oeillets inclus à chaque coins et rainurage</li>
                            <li>Avec ou sans vernis de protection anti U.V.</li>
                        </ul>
                        <hr class="border border-secondary-emphasis border-2 opacity-50">
                        <h5>Infos produit</h5>
                        <p>Le panneau immobilier Akylux est un panneau alliant rigidité du PVC alvéolaire et prix attractif. Idéal pour orienter, diriger, avertir, informer, sécuriser ou tout simplement pour indiquer un bien à vendre, il saura à coup sûr mettre en avant l'image de votre société. Le rainurage permet des plis parfaits et transforme un panneau plat en volume, maximisant l'efficacité de votre message.</p>
                        <p>Gardez tout l'éclat de votre communication sur le long terme ! Nos panneaux immobilier peuvent être réalisés avec un vernis de protection anti U.V. afin d'assurer une meilleure tenue en extérieur.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal3 -->
{{-- <div class="modal" id="detalModal3" tabindex="-1" aria-labelledby="detalModal3Label" aria-hidden="true">
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
</div> --}}
<!-- Modal4 -->
{{-- <div class="modal" id="detalModal4" tabindex="-1" aria-labelledby="detalModal4Label" aria-hidden="true">
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
</div> --}}
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

                    <h5 class="mt-3 text-start">Panneau de chantier </h5>

                    <p class="mb-2">Communiquez sur vos réalisation</p>
                    <ul>
                        <li> Support : PVC Akylux 3,5 mm 650g/m2</li>
                        <li> Usage : panneau de chantier / extérieur</li>
                        <li>Couleur du panneau : blanc</li>
                        <li>Impression quadri recto</li>
                        <li>Format : 60x40 cm ou 60x80 cm ou 80x120 cm</li>
                        <li>Finition : oeillets inclus à chaque coins</li>
                        <li>Avec ou sans vernis de protection anti U.V.</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3" data-aos="zoom-in">
                <div class="service">
                     <img class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#detalModal2" src="img/nosService/Branding1.jpg" alt="" />
                    <h5 class="mt-3 text-start">Panneau Immobilier  </h5>
                    <p class="mb-2">L'idéal pour communiquer sur un bien à vendre</p>
                    <ul>
                        <li>Support : PVC Akylux 3,5 mm 650g/m2</li>
                        <li>Usage : panneau immobilier / extérieur</li>
                        <li>Couleur du panneau : blanc</li>
                        <li>Impression quadri recto</li>
                        <li>Format : 80x120 cm avec 3 plis</li>
                        <li>Finition : oeillets inclus à chaque coins et rainurage</li>
                        <li> Avec ou sans vernis de protection anti U.V.</li>
                    </ul>
                </div>
            </div>
            {{-- <div class="col-md-3" data-aos="zoom-in">
                <div class="service">
                     <img class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#detalModal3" src="img/nosService/Branding1.jpg" alt="" />
                    <h5 class="mt-3 text-start">Panneau Aludibond</h5>
                    <p class="mb-2">Rigide, durable & Léger</p>
                    <ul>
                        <li>Support : Aludibond 3 ou 5 mm</li>
                        <li>Usage : panneau intérieur ou extérieur, signalétique, décoration ...</li>
                        <li>Couleur du panneau : au choix</li>
                        <li>Impression quadri recto ou adhésif découpé</li>
                        <li>Format : sur mesure</li>
                        <li>Finition : entretoise ou perforation en option</li>
                    </ul>
                </div>
            </div> --}}
            {{-- <div class="col-md-3" data-aos="zoom-in">
                <div class="service">
                    <img class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#detalModal4" src="img/nosService/Branding1.jpg" alt="" />
                    <h5 class="mt-3 text-start">Panneau Forex</h5>
                    <p class="mb-2">PVC léger & résistant, idéal signalétique intérieure</p>
                    <ul>
                        <li>Support : PVC expansé Forex 3 ou 5 mm</li>
                        <li>Usage : panneau intérieur, signalétique, décoration ...</li>
                        <li>Couleur du panneau : au choix</li>
                        <li>Impression quadri recto ou adhésif découpé</li>
                        <li>Format : sur mesure ainsi que découpe à la forme</li>
                        <li>Finition : entretoise ou perforation en </li>
                    </ul>
                </div>
            </div> --}}
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
                        Vous venez de vous installer et vous avez besoin de faire connaître votre établissement. Enseigne, panneau publicitaire, panneau de chantier ou encore panneau immobilier... Quel que soit votre budget, il y a une solution pour votre demande. Nous pouvons vous créer une signalétique personnalisée à votre image et réaliser le lettrage et l’impression de vos panneaux de signalisation.
                    </p>
                </div>
                <h1>Pour ne pas tomber dans le panneau...</h1>
                <div class="divider"></div>
                <div>
                    <p class="text-start">
                        Nous mettons à votre disposition plusieurs qualités de matériaux pour vos panneaux publicitaires : .
                    </p>
                    <p class="text-start">l'akylux est une matière que nous recommandons pour des panneaux d'affichage à la fois très économiques et extrêmement rigides.</p>
                    <p class="text-start">le PVC, résistant, est idéal pour toute utilisation intérieure et extérieure et offre l’avantage de se travailler sur des petits comme des moyens formats. </p>
                    <p class="text-start">le Dibond qui est un matériau composite composé de deux plaques d’aluminium thermoliées à une plaque centrale de polyéthylène solide, garde une grande rigidité et une planéité à toute épreuve. Il est inoxydable, imputrescible, résistant à la corrosion, aux UV et aux chocs. Sa garantie est de 5 ans. C’est donc le matériau de choix par excellence ! </p>
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

                    <h2 class="mt-5 pt-4">Panneau immobilier sur-mesure !</h2>
                    <p class="text-start">
                        Panneau immobilier À VENDRE ou À LOUER
                        Impression sur PVC alvéolaire (akylux)
                        en quadri-numérique
                        Plusieurs formats disponibles (60x80 cm - 80x120 cm...)
                        À l'unité ou en série.
                    </p>
                    <p class="text-start">
                        Contactez-nous d'urgence
                    </p>
                </div>
            </div>

            <div class="col-md-6 " data-aos="fade-left">
                <div class="service">
                    <div class="service-img heigth-box">
                        <img class="plogo" src="img/pano.jpg" alt="" />

                    </div>

                </div>
            </div>


        </div>
    </div>
</section>


<section id="services" class="services color-seconde text-center">
    <div class="container">

        <div class="row g-4">
            <div class="col-md-6 " data-aos="fade-left">
                <div class="service">
                    <div class="service-img heigth-box">
                        <img class="plogo" src="img/pano1.png" alt="" />

                    </div>

                </div>
            </div>

            <div class="col-md-6 " data-aos="fade-right">
                <div class="service">

                    <h2 class="mt-5 pt-4">Panneau de chantier</h2>
                    <p class="text-start">
                        Panneau de chantier / permis de construire... <br>
                        Impression sur PVC alvéolaire (akylux) <br>
                        en quadri-numérique <br>
                        Plusieurs formats disponibles (60x40 cm - 60x80 cm...) <br>
                        À l'unité ou en série.
                     </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="services" class="services color-seconde text-center bg-light">
    <div class="container">

        <div class="row g-4">

            <div class="col-md-6 " data-aos="fade-right">
                <div class="service">

                    <h2 class="mt-5 pt-4">Panneau signalétique pour entreprise</h2>
                    <p class="text-start">
                        Panneau pour indiquer, diriger, afficher... <br>
                        Impression sur PVC ou Aludibond <br>
                        Intérieur ou extérieur <br>
                        en 1, 2, 3 ou 4 couleurs <br>
                        Tout format possible <br>
                        À l'unité ou en série.HT
                    </p>
                </div>
            </div>

            <div class="col-md-6 " data-aos="fade-left">
                <div class="service">
                    <div class="service-img heigth-box">
                        <img class="plogo" src="img/pano2.jpg" alt="" />

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
                        <img class="plogo" src="img/pano3.png" alt="" />

                    </div>

                </div>
            </div>

            <div class="col-md-6 " data-aos="fade-right">
                <div class="service">

                    <h2 class="mt-5 pt-4">Panneau menu restauration</h2>
                    <p class="text-start">
                        Panneau d'affichage menu pour la restauration <br>
                        Intérieur ou extérieur <br>
                        Impression sur PVC ou Aludibond <br>
                        toutes couleurs, tous formats
                     </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="SOMME-NOUS" class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-intro text-center" data-aos="fade-up">
                <h1>Nos panneaux publicitaires :
                    un excellent rapport qualité prix !</h1>
                <div class="divider"></div>
                <div>
                    <p class="text-start">
                        Tous les matériaux que nous utilisons pour la création de nos panneaux publicitaires sont résistants aux intempéries, au feu et sont classés. Afin de mieux faire ressortir vos visuels ou logos, il est possible de compléter la décoration des panneaux publicitaires d’aimants, d’autocollants ou encore de banderoles incluant l'impression couleurs. Les variantes et possibilités sont infinies. N’hésitez pas à nous consulter. Nous saurons vous aider.
                    </p>
                    <hr class="border border-secondary-emphasis border-2 opacity-50">
                    <p class="text-start">
                        Exemples de panneaux réalisables : panneau de chantier, panneau immobilier, panneau de signalétique, 4X3, pré-enseigne, panneau d'interdiction, panneau publicitaire, panneau bon marché, fabrication et pose, impression de panneau, publicité sur panneau, panneau à vendre, panneau à louer, enseigne, panneau enseigne, panneau PVC, permis de construire...
                    </p>
                </div>
            </div>
        </div>
        <div class="row text-start"></div>
    </div>
</section>
<section id="services" class="services color-seconde text-center ">
    <div class="container">

        <div class="row g-4">

            <div class="col-md-6 " data-aos="fade-left">
                <div class="service">
                    <div class="service-img heigth-box">
                        <img class="plogo" src="img/pano4.jpg" alt="" />

                    </div>

                </div>
            </div>

            <div class="col-md-6 " data-aos="fade-right">
                <div class="service">

                    <h2 class="mt-5 pt-4">Besoin d'aides ?</h2>
                    <p class="text-start">
                        Notre équipe est là pour vous accompagner et pour vous conseiller au mieux tout au long du processus de conception de vos futurs projets en panneaux publicitaires. N'hésitez pas à nous consulter ! La pré-maquette est SANS ENGAGEMENT !*
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
                        <img class="imp" src="img/agenceCommunication/studio/2.jpeg" id="myImg1" onclick="openModal('myImg1', 'myModal1');" alt="" />
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
                                <img src="img/agenceCommunication/studio/3.jpg" id="myImg2" onclick="openModal('myImg2', 'myModal2');" alt="" />
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
                                <img src="img/agenceCommunication/studio/4.jpg" id="myImg3" onclick="openModal('myImg3', 'myModal3');" alt="" />
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
                                <img src="img/agenceCommunication/studio/5.jpg" id="myImg4" onclick="openModal('myImg4', 'myModal4');" alt="" />
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
                                <img src="img/agenceCommunication/studio/13.jpg" id="myImg5" onclick="openModal('myImg5', 'myModal5');" alt="" />
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
            <a href="{{url('/studio-creation')}}" class="button">EN VOIR PLUS</a>
        </div>
    </div>
</div>

@endsection
