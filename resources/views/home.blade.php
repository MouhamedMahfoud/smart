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
        <div class="slider-item js-fullheight" style="background-image: url(img/slideHome/print.jpg)" >
          <div class="overlay"></div>
          <div class="container">
            <div
              class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
            >
              <div class="col-md-12 ftco-animate">
                <div class="text w-100 text-center">
                  <h2 class="mb-3">Print & édition</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          class="slider-item js-fullheight"
          style="background-image: url(img/slideHome/coverPano.jpg)"
        >
          <div class="overlay"></div>
          <div class="container">
            <div
              class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
            >
              <div class="col-md-12 ftco-animate">
                <div class="text w-100 text-center">
                  <h2 class="mb-3">Signalétique intérieur/extérieur</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          class="slider-item js-fullheight"
          style="background-image: url(img/slideHome/Réseauxsociaux.jpg)"
        >
          <div class="overlay"></div>
          <div class="container">
            <div
              class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
            >
              <div class="col-md-12 ftco-animate">
                <div class="text w-100 text-center">
                  <h2 class="mb-3">Réseaux sociaux</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          class="slider-item js-fullheight"
          style="background-image: url(img/slideHome/ca1.jpg)"
        >
          <div class="overlay"></div>
          <div class="container">
            <div
              class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
            >
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
            <div
              class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
            >
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
              <div
                class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
              >
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
              <div
                class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
              >
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
            <h1>NOUS SOMMES</h1>
            <div class="divider"></div>
            <div>
              <p class="text-start">
                Une Agence de Communication dynamique et créative après être
                présente sur le marché mauritanien sous sa dénomination SmartCom
                depuis 2011, vous accompagne tout au long de votre démarche de
                communication et peut intervenir à différents niveaux :
              </p>
              <ul class="text-start">
                <li>
                  Conseils et Stratégie : conseil en communication, conception
                  et mise en oeuvre de la stratégie
                </li>
                <li>
                  Identité visuelle et graphique : charte graphique, logotype,
                  packaging, tous supports imprimés (brochure, dépliant, PLV,
                  etc.)
                </li>
                <li>
                  Multimédia : spot publicitaire (TV et Radio), publi-reportage
                </li>
                <li>
                  Relation media : contact media, médiaplanning, achat d’espace
                  média et hors média, conférence de presse, suivi de retombées
                  médiatiques
                </li>
                <li>
                  Internet : site internet, marketing et référencement Internet,
                  hébergement web.
                </li>
                <li>
                  Communication évènementielle : soirée d’entreprise, lancement
                  de produits, animations commerciales
                </li>
              </ul>
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
        <div class="row">
          <div class="col-12 section-intro text-center" data-aos="fade-up">
            <h1>NOS SERVICES</h1>
            <div class="divider"></div>
          </div>
        </div>
        <div class="row g-4">
          <div class="col-md-4" data-aos="zoom-in">
            <div class="service">
              <div class="service-img">
                <img src="img/nosService/Branding1.jpg" alt="" />
                <div class="icon"><i class="icon-tools"></i></div>
              </div>
              <h5 class="mt-5 pt-4">Branding & Graphisme</h5>
              <p class="text-start">
                Études chromatiques, iconographiques et typographiques
                Réalisation planches de tendances Création graphique sur mesure
                dans les règles de l’art, conforme aux normes et exigences
                métier Mise en situation de votre identité sur différents
                supports (mockups) Mise à disposition de tous les droits légaux
                d’utilisation Élaboration d’un guide complet d’utilisation de
                votre charte graphique
              </p>
            </div>
          </div>
          <div class="col-md-4" data-aos="zoom-in">
            <div class="service">
              <div class="service-img">
                <img src="img/nosService/print.jpg" alt="" />
                <div class="icon"><i class="bx bx-printer"></i></div>
              </div>
              <h5 class="mt-5 pt-4">Print & édition</h5>
              <p class="text-start">
                Création sur mesure, contenu rédactionnel / graphique adapté aux
                besoins, aux supports et à votre univers Réalisation de BAT
                Conseils techniques et stratégiques Délais maîtrisés
                Fournisseurs locaux et labellisés Imprim’Vert Matières et
                papiers recyclés
              </p>
            </div>
          </div>
          <div class="col-md-4" data-aos="zoom-in">
            <div class="service">
              <div class="service-img">
                <img src="img/nosService/panoExt1.jpg" alt="" />
                <div class="icon"><i class='bx bx-border-radius'></i></div>
              </div>
              <h5 class="mt-5 pt-4">Signalétique intérieur/extérieur</h5>
              <p class="text-start">
                Graphisme harmonisé avec votre univers Propositions adaptées à
                votre budget et contraintes réglementaires Mockups réalisés
                d’après photo de votre local (simulation réaliste) Propositions
                de différentes alternatives techniques Gamme de produits
                fabrication de notre gamme de support de signalétique Gamme
                GREEN avec logo végétaux
              </p>
            </div>
          </div>

          <div class="col-md-4" data-aos="zoom-in">
            <div class="service">
              <div class="service-img">
                <img src="img/nosService/Réseauxsociaux.jpg" alt="" />
                <div class="icon"><i class="icon-rss"></i></div>
              </div>
              <h5 class="mt-5 pt-4">Réseaux sociaux</h5>
              <p class="text-start">
                Création et paramétrage des comptes Élaboration stratégie (ligne
                éditoriale, planning de publication, recherche mots clés
                #hashtags...) Création des visuels, animations, vidéos, et
                contenus rédactionnels Développement relations influenceurs,
                partenariats, liens croisés Gestion de communauté (réponses aux
                commentaires, messages et avis...) Organisation de concours Mise
                en place de campagnes de publicité
              </p>
            </div>
          </div>
          <div class="col-md-4" data-aos="zoom-in">
            <div class="service">
              <div class="service-img">
                <img src="img/nosService/Goodies4.jpg" alt="" />
                <div class="icon"><i class="bx bx-gift"></i></div>
              </div>
              <h5 class="mt-5 pt-4">Goodies & Cadeaux</h5>
              <p class="text-start">Cadeau de fin d'année</p>
            </div>
          </div>
          <div class="col-md-4" data-aos="zoom-in">
            <div class="service">
              <div class="service-img">
                <img src="img/nosService/website.jpg" alt="" />
                <div class="icon"><i class="bx bx-desktop"></i></div>
              </div>
              <h5 class="mt-5 pt-4">Site web & référencement</h5>
              <p class="text-start">
                Création de site internet avec référencement naturel
                Maintenance/sécurisation des données Gestion de campagnes de
                référencement payant Mise en place de boutique / vente en ligne
                / click and collect avec paiements sécurisés Module de demande
                de devis / réservations en ligne...
              </p>
            </div>
          </div>

          <div class="col-md-4" data-aos="zoom-in">
            <div class="service">
              <div class="service-img">
                <img src="img/nosService/productionEvenment.jpg" alt="" />
                <div class="icon"><i class='bx bx-image'></i></div>
              </div>
              <h5 class="mt-5 pt-4">La production événementielle</h5>
              <p class="text-start">
                nous vous accompagnons tout au long de la conception, la réalisation et l’organisation de vos événements professionnels. Que ce soit un séminaire, congrès, colloque, conférence, convention, lancement de produit, inauguration,stand ou salon
                Nos équipes imaginent et réalisent votre vision , à travers des concepts innovants et personnalisés.  Nous adhérons au cœur de votre stratégie marketing et communication et nous mettons à votre disposition nos ressources organisationnelles, techniques, logistiques, créatives, artistiques et humaines afin de réaliser l’événement le plus adapté et le plus impactant en fonction de votre problématique.
              </p>
            </div>
          </div>
          <div class="col-md-4" data-aos="zoom-in">
            <div class="service">
              <div class="service-img">
                <img src="img/nosService/Personnalisation.jpg" alt="" />
                <div class="icon"><i class='bx bxs-calendar-event'></i></div>
              </div>
              <h5 class="mt-5 pt-4">Personnalisation textile </h5>
              <p class="text-start">
                Découvrez avec smart un large choix de produits textile tels que des t-shirts,
                vestes et pantalons, tenues professionnelles, casquettes.
                Des vêtements qui sont destinés à être personnalisés.
                Choisissez de mettre votre logo, une photo, une impression numérique,
                une sérigraphie, un flocage ou une sublimation.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Service -->
    <!-- Start Features -->
    <section id="features" class="text-center">
      <div class="container owl-2-style">
        <div class="row">
          <div class="col-12 section-intro text-center" data-aos="fade-up">
            <h1>Nos partenaires</h1>
            <div class="divider"></div>
          </div>
        </div>
        <div class="row gx-4 gy-5 owl-carousel owl-2">
          <div class="media">
            <img src="{{URL::asset('img/NosPartenaires/logoM.png')}}" alt="Image" class="img-fluid" />
          </div>

          <div class="media">
            <img src="{{URL::asset('img/NosPartenaires/attm1.png')}}" alt="Image" class="img-fluid" />
          </div>

          <div class="media">
            <img src="{{URL::asset('img/NosPartenaires/caisseDepo.png')}}" alt="Image" class="img-fluid" />
          </div>

          <div class="media">
            <img src="{{URL::asset('img/NosPartenaires/bnm.png')}}" alt="Image" class="img-fluid" />
          </div>

          <div class="media">
            <img src="{{URL::asset('img/NosPartenaires/medipole3.jpg')}}" alt="Image" class="img-fluid" />
          </div>

          <div class="media">
            <img src="{{URL::asset('img/NosPartenaires/pc1.png')}}" alt="Image" class="img-fluid" />
          </div>
          <div class="media">
            <img src="{{URL::asset('img/NosPartenaires/onas.jpg')}}" alt="Image" class="img-fluid" />
          </div>
          <div class="media">
            <img src="{{URL::asset('img/NosPartenaires/orabank112.png')}}" alt="Image" class="img-fluid" />
          </div>
        </div>
      </div>
    </section>
    <!-- End Features -->
    <!-- Start Contact -->
    <section
      id="contact"
      class="contact bg-cover text-white"
      style="background-image: url(img/contact.jpg)"
    >
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
            {{-- data-aos="fade-up" --}}
          <div class="col-12 section-intro text-center" >
            <h1>CONTACT</h1>
            <div class="divider"></div>
          </div>
        </div>
        {{-- <iframe
          style="
            border-radius: 10px;
            border: 0;
            width: 100%;
            height: 300px;
            margin-bottom: 15px;
          "
          src="https://maps.google.com/maps"
          frameborder="0"
          allowfullscreen
        ></iframe> --}}
        <div class="row g-4">
          <div class="col-md-4">
            <div class="info">
              <div class="address">
                <i class="bx bxs-map"></i>
                <h4>Address:</h4>
                <p>Nkouakhott, Avenue Charles de Gaulle</p>
              </div>

              <div class="email">
                <i class="bx bx-envelope"></i>
                <h4>Email:</h4>
                <p>contact@smart-mr.net</p>
              </div>

              <div class="phone">
                <i class="bx bxs-phone"></i>
                <h4>Tel:</h4>
                <p>+222 34 22 22 76</p>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            @if(Session::has('success'))
                <div class="alert alert-info text-dark alert-dismissible fade show" style="background:#25aae1;border:none; position: fixed;left: 0px;top: 169px;z-index: 1;max-width:400px" role="alert">
                    {{Session::get('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
           @endif
            <form method="POST" action="{{ route('contact.us.store') }}"  class="row g-4">
              {{ csrf_field() }}
              <div class="form-group col-md-6">
                <input type="text" class="form-control" name="name" required placeholder="name" />
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control"  name="email" required placeholder="Email" />
              </div>
              <div class="form-group col-md-12">
                <input type="text" class="form-control" name="subject" required placeholder="Subject" />
              </div>
              <div class="form-group col-md-12">
                <textarea
                  class="form-control"
                  name="message"
                  id=""
                  cols="30"
                  rows="4"
                  required
                  placeholder="Message"
                ></textarea>
              </div>
              <div class="text-center">
                <button class="btn btn-main" type="submit">
                  Consulter Gratuitement
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact -->
@endsection
