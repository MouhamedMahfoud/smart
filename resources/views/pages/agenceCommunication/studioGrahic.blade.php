@extends('layoute')
@section('content')
<div class="studios studio-creation color-seconde text-center ">
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
                        <img class="stidioIm" src="img/chartgraphic/1.jpg" id="myImg1" onclick="openModal('myImg1', 'myModal1');" alt="" />
                        <!-- The Modal -->
                        <div id="myModal1" class="modal">

                            <img class="modal-contentimg" id="img01">
                            <div id="caption"></div>
                        </div>
                        <div class="overlay11" id="myImg1" onclick="openModal('myImg1', 'myModal1');">
                            <div class="text11">
                                <h2>Creation de Logo</h2>
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
                                <img class="stidioIm-min" src="img/chartgraphic/2.png" id="myImg2" onclick="openModal('myImg2', 'myModal2');" alt="" />
                                <!-- The Modal -->
                                <div id="myModal2" class="modal">

                                    <img class="modal-contentimg" id="img01">
                                    <div id="caption"></div>
                                </div>
                                <div class="overlay11" id="myImg2" onclick="openModal('myImg2', 'myModal2');">
                                    <div class="text11">
                                        <span class="text">création Logo</span><br />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="studio image-popup">
                            <div class="service-img">
                                <img class="stidioIm-min" src="img/chartgraphic/3.jpg" id="myImg3" onclick="openModal('myImg3', 'myModal3');" alt="" />
                                <!-- The Modal -->
                                <div id="myModal3" class="modal">

                                    <img class="modal-contentimg" id="img01">
                                    <div id="caption"></div>
                                </div>
                                <div class="overlay11" id="myImg3" onclick="openModal('myImg3', 'myModal3');">
                                    <div class="text11">
                                        <span class="text">création plaquette commerciale store</span><br />
                                        {{-- <span class="text">Hello World</span> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="studio image-popup">
                            <div class="service-img">
                                <img class="stidioIm-min" src="img/chartgraphic/4.jpg" id="myImg4" onclick="openModal('myImg4', 'myModal4');" alt="" />
                                <!-- The Modal -->
                                <div id="myModal4" class="modal">

                                    <img class="modal-contentimg" id="img01">
                                    <div id="caption"></div>
                                </div>
                                <div class="overlay11" id="myImg4" onclick="openModal('myImg4', 'myModal4');">
                                    <div class="text11">
                                        <span class="text">création de carte professionnelle design</span><br />
                                        {{-- <span class="text">Hello World</span> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="studio image-popup">
                            <div class="service-img">
                                <img class="stidioIm-min" src="img/chartgraphic/5.jpg" id="myImg5" onclick="openModal('myImg5', 'myModal5');" alt="" />
                                <!-- The Modal -->
                                <div id="myModal5" class="modal">

                                    <img class="modal-contentimg" id="img01">
                                    <div id="caption"></div>
                                </div>
                                <div class="overlay11" id="myImg5" onclick="openModal('myImg5', 'myModal5');">
                                    <div class="text11">
                                        <span class="text">creation de carte design pour entreprise</span><br />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end fig--}}
            {{-- start fig--}}
            <div class="col-md-6 studio-img">
                <div class="studio image-popup">
                    <div class="service-img">
                        <img class="stidioIm" src="img/chartgraphic/6.jpg" id="myImg6" onclick="openModal('myImg6', 'myModal6');" alt="" />
                        <!-- The Modal -->
                        <div id="myModal6" class="modal">

                            <img class="modal-contentimg" id="img01">
                            <div id="caption"></div>
                        </div>
                        <div class="overlay11" id="myImg6" onclick="openModal('myImg6', 'myModal6');">
                            <div class="text11">
                                <span class="text">projet et creation de charte graphique </span>
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
                                <img class="stidioIm-min" src="img/chartgraphic/7.jpg" id="myImg7" onclick="openModal('myImg7', 'myModal7');" alt="" />
                                <!-- The Modal -->
                                <div id="myModal7" class="modal">

                                    <img class="modal-contentimg" id="img01">
                                    <div id="caption"></div>
                                </div>
                                <div class="overlay11" id="myImg7" onclick="openModal('myImg7', 'myModal7');">
                                    <div class="text11">
                                        <span class="text">plaquette menu restaurant</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="studio image-popup">
                            <div class="service-img">
                                <img class="stidioIm-min" src="img/chartgraphic/8.png" id="myImg8" onclick="openModal('myImg8', 'myModal8');" alt="" />
                                <!-- The Modal -->
                                <div id="myModal8" class="modal">

                                    <img class="modal-contentimg" id="img01">
                                    <div id="caption"></div>
                                </div>
                                <div class="overlay11" id="myImg8" onclick="openModal('myImg8', 'myModal8');">
                                    <div class="text11">
                                        <span class="text">creation brochure entreprise</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="studio image-popup">
                            <div class="service-img">
                                <img class="stidioIm-min" src="img/chartgraphic/9.jpg" id="myImg9" onclick="openModal('myImg9', 'myModal9');" alt="" />
                                <!-- The Modal -->
                                <div id="myModal9" class="modal">

                                    <img class="modal-contentimg" id="img01">
                                    <div id="caption"></div>
                                </div>
                                <div class="overlay11" id="myImg9" onclick="openModal('myImg9', 'myModal9');">
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
                                <img class="stidioIm-min" src="img/chartgraphic/10.avif" id="myImg10" onclick="openModal('myImg10', 'myModal10');" alt="" />
                                <!-- The Modal -->
                                <div id="myModal10" class="modal">

                                    <img class="modal-contentimg" id="img01">
                                    <div id="caption"></div>
                                </div>
                                <div class="overlay11" id="myImg10" onclick="openModal('myImg10', 'myModal10');">
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
            {{-- start fig--}}
            <div class="col-md-6 studio-img">
                <div class="studio image-popup">
                    <div class="service-img">
                        <img class="stidioIm" src="img/chartgraphic/11.jpg" id="myImg11" onclick="openModal('myImg11', 'myModal11');" alt="" />
                        <!-- The Modal -->
                        <div id="myModal11" class="modal">

                            <img class="modal-contentimg" id="img01">
                            <div id="caption"></div>
                        </div>
                        <div class="overlay11" id="myImg11" onclick="openModal('myImg11', 'myModal11');">
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
                                <img class="stidioIm-min" src="img/chartgraphic/12.jpg" id="myImg12" onclick="openModal('myImg12', 'myModal12');" alt="" />
                                <!-- The Modal -->
                                <div id="myModal12" class="modal">

                                    <img class="modal-contentimg" id="img01">
                                    <div id="caption"></div>
                                </div>
                                <div class="overlay11" id="myImg12" onclick="openModal('myImg12', 'myModal12');">
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
                                <img class="stidioIm-min" src="img/chartgraphic/13.png" id="myImg13" onclick="openModal('myImg13', 'myModal13');" alt="" />
                                <!-- The Modal -->
                                <div id="myModal13" class="modal">

                                    <img class="modal-contentimg" id="img01">
                                    <div id="caption"></div>
                                </div>
                                <div class="overlay11" id="myImg13" onclick="openModal('myImg13', 'myModal13');">
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
                                <img class="stidioIm-min" src="img/chartgraphic/14.jpg" id="myImg14" onclick="openModal('myImg14', 'myModal14');" alt="" />
                                <!-- The Modal -->
                                <div id="myModal14" class="modal">

                                    <img class="modal-contentimg" id="img01">
                                    <div id="caption"></div>
                                </div>
                                <div class="overlay11" id="myImg14" onclick="openModal('myImg14', 'myModal14');">
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
                                <img class="stidioIm-min" src="img/chartgraphic/15.webp" id="myImg15" onclick="openModal('myImg15', 'myModal15');" alt="" />
                                <!-- The Modal -->
                                <div id="myModal15" class="modal">

                                    <img class="modal-contentimg" id="img01">
                                    <div id="caption"></div>
                                </div>
                                <div class="overlay11" id="myImg15" onclick="openModal('myImg15', 'myModal15');">
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
            {{-- start fig--}}
            <div class="col-md-6 studio-img">
                <div class="studio image-popup">
                    <div class="service-img">
                        <img class="stidioIm" src="img/chartgraphic/16.png" id="myImg16" onclick="openModal('myImg16', 'myModal16');" alt="" />
                        <!-- The Modal -->
                        <div id="myModal16" class="modal">

                            <img class="modal-contentimg" id="img01">
                            <div id="caption"></div>
                        </div>
                        <div class="overlay11" id="myImg16" onclick="openModal('myImg16', 'myModal16');">
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
                                <img class="stidioIm-min" src="img/chartgraphic/17.jpg" id="myImg17" onclick="openModal('myImg17', 'myModal17');" alt="" />
                                <!-- The Modal -->
                                <div id="myModal17" class="modal">

                                    <img class="modal-contentimg" id="img01">
                                    <div id="caption"></div>
                                </div>
                                <div class="overlay11" id="myImg17" onclick="openModal('myImg17', 'myModal17');">
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
                                <img class="stidioIm-min" src="img/chartgraphic/18.jpg" id="myImg18" onclick="openModal('myImg18', 'myModal18');" alt="" />
                                <!-- The Modal -->
                                <div id="myModal18" class="modal">

                                    <img class="modal-contentimg" id="img01">
                                    <div id="caption"></div>
                                </div>
                                <div class="overlay11" id="myImg18" onclick="openModal('myImg18', 'myModal18');">
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
                                <img class="stidioIm-min" src="img/chartgraphic/19.png" id="myImg19" onclick="openModal('myImg19', 'myModal19');" alt="" />
                                <!-- The Modal -->
                                <div id="myModal19" class="modal">

                                    <img class="modal-contentimg" id="img01">
                                    <div id="caption"></div>
                                </div>
                                <div class="overlay11" id="myImg19" onclick="openModal('myImg19', 'myModal19');">
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
                                <img class="stidioIm-min" src="img/chartgraphic/21.jpg" id="myImg20" onclick="openModal('myImg20', 'myModal20');" alt="" />
                                <!-- The Modal -->
                                <div id="myModal20" class="modal">

                                    <img class="modal-contentimg" id="img01">
                                    <div id="caption"></div>
                                </div>
                                <div class="overlay11" id="myImg20" onclick="openModal('myImg20', 'myModal20');">
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
    </div>
</div>

@endsection
