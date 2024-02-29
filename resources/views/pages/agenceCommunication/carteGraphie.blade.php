@extends('layoute')
@section('content')
<!-- Start home  -->
<section id="ACCUEIL" class="bg-cover hero-section">
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
                        <h5>Création de charte graphique</h5>
                        <h6>Pack pro</h6>
                        <hr class="border border-secondary-emphasis border-2 opacity-50">

                        <h5>Description</h5>
                        <h6> CREATION D'UN LOGO PACK PRO</h6>
                          <ul class="list-unstyled">
                            <li>Recherche / briefing / 6 pistes créatives / 3 débriefing / finalisation</li>
                            <li>Réflexion globale et présentation de 6 pistes créative.</li>
                            <li>Optimisation d'un axe, finalisation et exécution.</li>
                            <li>Mise en scène / Mockup de présentation multiples</li>
                            <li>Création des supports de correspondance inclus : cartes commerciales, correspondance, enveloppe, entête de lettre, signature mail et module Facebook.</li>
                            <li> Déclinaison du logo final en 3 versions, 1 CMJN (supports papiers) et 1 RVB (écrans) et vectoriel (eps, ai, pdf)</li>
                            <li>Livraison du logo final au format de prévisualisation (pdf, jpg, eps, ai)</li>
                            <li>Livraison des supports de correspondance au format PDF HD.</li>
                            <li>Entretien personnalisé avec un designer de l'équipe (RDV agence ou Tel.)</li>
                            <li> Droits d'auteur et droits d'utilisation inclus. (client)</li>
                            <li>Logo et fichiers livrés sous 8/10 jours maxi.</li>
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
                        <h5>Refonte de charte graphique</h5>
                        <h6>Pack refonte de charte</h6>
                        <hr class="border border-secondary-emphasis border-2 opacity-50">

                        <h5>Description </h5>
                          <ul class="list-unstyled">
                            <li> Recherche créative à partir d'un brief / audit.</li>
                            <li>Réflexion globale et présentation de 2 nouvelles pistes créative.</li>
                            <li>Optimisation d'un axe, finalisation et exécution.</li>
                            <li>Mise en scène / Mockup de présentation multiples</li>
                            <li>Création des supports de correspondance inclus : (cartes commerciales, correspondance, enveloppe, entête de lettre, signature mail et module Facebook)</li>
                            <li> Déclinaison du logo final en 3 versions, 1 CMJN (supports papiers) et 1 RVB (écrans) et vectoriel (eps, ai, pdf)</li>
                            <li>Livraison du logo final au format de prévisualisation (pdf, jpg, eps, ai)</li>
                            <li>Livraison des supports de correspondance au format PDF HD</li>
                            <li>Entretien personnalisé avec un designer de l'équipe (RDV agence ou Tel.)</li>
                            <li>Prise en compte de 2 allers/retours pour les corrections / ajustements.</li>
                            <li>Droits d'auteur et droits d'utilisation inclus. (client)</li>
                            <li> Logo livré sous 8/10 jours maxi. </li>
                        </ul>
                        <hr class="border border-secondary-emphasis border-2 opacity-50">
                        <h5>Infos produit</h5>
                         <p>Grâce à notre pack refonte de logo et relookage d'identité, donnez un second souffle à votre entreprise.</p>
                         <p>Se mettre sans cesse à la page et dans l'évolution des tendances prouve à vos clients ou votre public que vous possédez une activité évolutive, tournée vers la modernité et la croissance. En Améliorant la communication par le biais d'une refonte de votre identité visuelle, vous augmentez incontestablement votre rentabilité et votre efficacité. De plus, toute votre papeterie suivra votre nouvelle charte et l'impact sur votre clientèle ne sera que plus important.</p>
                         <p>La refonte de votre identité est repensée en fonction de votre secteur d'activité et de votre cible. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End home -->
<!-- Start QUI SOMME-NOUS -->
<section id="SOMME-NOUS">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-intro text-center" data-aos="fade-up">
                <h1>Création de charte graphique professionnelle, Création de logo, refonte d'identité</h1>
                <div class="divider"></div>
                <div>
                    <p class="text-center">
                        Charte graphique d'entreprise - refonte d'identité - règles fondamentales d'utilisation
                    </p>
                </div>

            </div>
        </div>
        <div class="row text-start"></div>
    </div>
</section>
<!-- Start service -->
<section id="services" class="services color-seconde bg-light">
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
                    <img height="200px" class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#detalModal1" src="img/agenceCommunication/studio/cart1.jpg"  alt="" />

                    <h5 class="mt-3 text-start">Création de charte graphique</h5>
                    <h6 class="text-start">Pack pro</h6>
                    <p class="mb-2">CREATION D'UN LOGO PACK PRO</p>
                    <ul>
                        <li>Recherche / briefing / 6 pistes créatives / 3 débriefing / finalisation</li>
                        <li>Réflexion globale et présentation de 6 pistes créative.</li>
                        <li>Optimisation d'un axe, finalisation et exécution.</li>
                        <li>Mise en scène / Mockup de présentation </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3" data-aos="zoom-in">
                <div class="service">
                    <img height="200px" class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#detalModal2" src="img/nosService/Branding1.jpg" alt="" />

                    <h5 class="mt-3 text-start">Refonte de charte graphique </h5>
                    <h6 class="text-start">Pack refonte de charte</h6>
                    <ul>
                        <li> Recherche créative à partir d'un brief / audit.</li>
                        <li> Réflexion globale et présentation de 2 nouvelles pistes créative.</li>
                        <li> Optimisation d'un axe, finalisation et exécution.</li>
                        <li> Mise en scène / Mockup de présentation multiples.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Service -->
<section id="SOMME-NOUS">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-intro text-center" data-aos="fade-up">
                <h1>Comment se présente une charte graphique ?</h1>
                <div class="divider"></div>
                <div>
                    <p class="text-start">
                        La charte graphique regroupe l'ensemble des règles et normes graphiques qui régissent la communication d'une entreprise. Elle permet ainsi de définir les codes couleurs, polices de caractères, formes, mises en page, ou encore éléments graphiques à utiliser. C'est aussi le rôle de la charte graphique d'établir les différentes manières d'adapter et de décliner le logotype, en réglementant par exemple les différentes couleurs dans lesquelles il peut être utilisé, avec ou sans sa baseline, en version rectangulaire ou carré, etc.
                    </p>
                    <p class="text-start">
                        On trouve dans toute charte graphique complète les différentes règles d’insertion de chacun des éléments (logo, baseline, visuel, etc.), les marges ou encore le positionnement pour chacun des supports de communication : cartes de visite, papier à entête, dépliant, flyer, affiche, etc.
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



<section id="SOMME-NOUS">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-intro text-center" data-aos="fade-up">
                <h1>Pourquoi la charte graphique est-elle importante ?</h1>
                <div class="divider"></div>
                <div>
                    <p class="text-start">
                        La charte graphique est le support fondamental de la communication interne et externe d'une société. Véritable colonne vertébrale de l'identité de l'entreprise, elle est conçue pour traduire visuellement les valeurs et l'univers global de la société. C'est elle qui communique les notions de dynamisme, de performance, ou encore de professionnalisme à votre entreprise.
                    </p>
                    <p class="text-start">
                        La charte graphique permet également d'homogénéiser l'ensemble des supports de communication dont vous disposez ou disposerez à l'avenir. Elle vous garanti une cohérence graphique solide et durable. Elle peut enfin s'adapter et évoluer en fonction des changements entrepris au sein de l’entreprise.
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

                    <h2 class="mt-5 pt-4">Des solutions personnalisées !</h2>
                    <p class="text-start">
                        Vous ne trouvez pas ce que vous cherchez ?<br />
                        Si vous ne trouvez pas ce dont vous avez besoin parmi les produits disponibles
                        sur notre site, contactez-nous pour qu'un de nos conseillers vous propose un devis
                        personnalisé. (produits hors catalogue, quantités sur-mesure, configurations personnalisées...)
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

<section id="services" class="services color-seconde text-center ">
    <div class="container">

        <div class="row g-4">
            <div class="col-md-6 " data-aos="fade-left">
                <div class="service">
                    <div class="service-img heigth-box">
                        <img class="plogo" src="img/agenceCommunication/minspiration.jpg" alt="" />

                    </div>

                </div>
            </div>
            <div class="col-md-6 " data-aos="fade-right">
                <div class="service">

                    <h2 class="mt-5 pt-4">Manque d'inspiration ?</h2>
                    <p class="text-start">
                        Notre studio de création graphique est là pour vous accompagner et pour
                        vous conseiller au mieux tout au long du processus de conception de vos futurs
                        projets publicitaires. N'hésitez pas à nous consulter ! La pré-maquette est SANS ENGAGEMENT !
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
