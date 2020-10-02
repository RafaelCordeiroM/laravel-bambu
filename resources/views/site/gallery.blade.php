@extends('site.components.layout')

@section('content')
        <style>
            .wave {
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center left;
                background-image: url('https://startbootstrap.com/assets/img/overlay.svg'), url('images/bg-wave.png');
            }
        </style>
        <!-- Featured photos-->
        <section class="well-lg-var-5  pb-0 wave">
            <div class="container ">
                <h2 class="text-center">Projetos</h2>
                <div class="divider divider-5"></div>
                <div class="row row-xs-center">
                    <div class="col-sm-8">
                        <div class="owl-carousel row row-xs-center text" data-nav="true" data-autoplay="9000">

                            <div class="col-sm-12 text-center"><img src="images/gallery-01.jpg" width="370" height="384" alt="">
                                <h6 class="text-secondary text-sbold">Petersham</h6>
                                <p>This house is in a superb position backing onto a park in a fashionable area of West London. The owners were keen to loose the suburban exterior.</p><a class="btn btn-dark btn-md offset-6 ml-0" href="gallery.html#">More</a>
                            </div>
                            <div class="col-sm-12 text-center"><img src="images/gallery-02.jpg" width="370" height="384" alt="">
                                <h6 class="text-secondary text-sbold">Pinner</h6>
                                <p>This was the plain house in a road full of lovely Edwardian detached houses. The house needed careful detailing to give it back the character features it needed.</p><a class="btn btn-dark btn-md offset-6 ml-0" href="gallery.html#">More</a>
                            </div>
                            <div class="col-sm-12 text-center"><img src="images/gallery-03.jpg" width="370" height="384" alt="">
                                <h6 class="text-secondary text-sbold">Leatherhead</h6>
                                <p>The owners of this house struggled to get permission to extend their house for 12 years and nearly resorted to selling.</p><a class="btn btn-dark btn-md offset-6 ml-0" href="gallery.html#">More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bottom-1 bottom mt-0">
            <div class="container">
                <div class="row row-md-reverse">
                    <div class="col-md-5 bg-secondary-var-1">
                        <h2 class="letter-spasing">ambientes internos <br class="d-none d-xl-block">e externos
                        </h2>
                        <p>
                            Queridinho dos decoradores e arquitetos, o bambu artificial se tornou uma ótima opção para decorar ambientes.
                        </p>
                    </div>
                    <div class="col-md-7 bg-images-8" ></div>
                </div>
            </div>
        </section>
        {{-- Paralax images --}}
        
        <style>
            .img-parallax{
                width:100%;
                height:100vh;
                background-attachment: fixed;
                background-size: cover;
                background-repeat: no-repeat;
            }
            .img-1{
                background-image:url('images/gallery-05_original.jpg');
            }
            .img-2{
                background-image:url('images/gallery-07_original.jpg');
            }
            .text-img-parallax{
                position: relative;
                top:50%;
                left:50%;
                text-decoration-color: white;
                text-decoration:underline;
            }
            .text-parallax{
                color:white;
                font-size:38px;
                font-weight: bold;
                text-shadow: 0 0 30px rgba(0, 0, 0);
      
            }

        </style>
        <section>
            {{-- <div id="img-slider-comparison">      
                  <img src="images/gallery-05_original.jpg" width="100%" >
                  <img src="images/gallery-07_original.jpg" width="100%"> 
              </div> --}}
            {{-- <div class="img-parallax img-1"> 
                <div class="text-img-parallax">
                    <h1 class="text-parallax">BAMBU ARTIFICIAL</h1>
                </div>
            </div>
            <div class="img-parallax img-2">
                <div class="text-img-parallax">
                    <h1 class="text-parallax">BAMBU ARTIFICIAL</h1>
                </div>
            </div> --}}

        </section>
        <!-- Gallery-->
        <section class="well-lg-var-4 bg-secondary-var-4">
            <div class="container text-center isotope-wrap">
                <h2>galeria</h2>
                <div class="divider divider-5"></div>
                <div class="isotope-filters text-center">
                    <button data-isotope-filter="type-1" data-isotope-group="gallery">Bambu Mossô</button>
                    <button class="preffix-1" data-isotope-filter="type-2" data-isotope-group="gallery">Bambusa 5 Hastes</button>
                    <button class="preffix-1" data-isotope-filter="type-3" data-isotope-group="gallery">Bambusa 7 Hastes</button>
                    <button class="preffix-1 active" data-isotope-filter="*" data-isotope-group="gallery">Tudo</button>
                </div>
                <div class="row row-30 isotope" data-lightgallery="group">

                    <div class=" col-sm-4 isotope-item" data-filter="type-3">
                        <!-- Magnific Popup Image-->
                        <a class="thumb" data-lightgallery="item" href="images/gallery-06_original.jpg"><img src="images/gallery-06.jpg" width="570" height="510" alt=""><span class="thumb__overlay fa fa-search"></span></a>
                    </div>
                    <div class="col-sm-4 isotope-item" data-filter="type-3">
                        <!-- Magnific Popup Image-->
                        <a class="thumb" data-lightgallery="item" href="images/gallery-05_original.jpg"><img src="images/gallery-05.jpg" width="600" height="510" alt=""><span class="thumb__overlay fa fa-search"></span></a>
                    </div>
                    <div class="col-sm-4 isotope-item" data-filter="type-2">
                        <!-- Magnific Popup Image-->
                        <a class="thumb" data-lightgallery="item" href="images/gallery-08_original.jpg"><img src="images/gallery-08.jpg" alt=""><span class="thumb__overlay fa fa-search"></span></a>
                    </div>
                    <div class="col-sm-4 isotope-item" data-filter="type-2">
                        <!-- Magnific Popup Image-->
                        <a class="thumb" data-lightgallery="item" href="images/gallery-07_original.jpg"><img src="images/gallery-07.jpg" alt=""><span class="thumb__overlay fa fa-search"></span></a>
                    </div>
                    <div class="col-sm-4 isotope-item" data-filter="type-1">
                        <!-- Magnific Popup Image-->
                        <a class="thumb" data-lightgallery="item" href="images/gallery-09_original.jpg"><img src="images/gallery-09.jpg" alt=""><span class="thumb__overlay fa fa-search"></span></a>
                    </div>
                    <div class="col-sm-4 isotope-item" data-filter="type-1">
                        <!-- Magnific Popup Image-->
                        <a class="thumb" data-lightgallery="item" href="images/gallery-10_original.jpg"><img src="images/gallery-10.jpg" alt=""><span class="thumb__overlay fa fa-search"></span></a>
                    </div>
                    <div class="col-sm-4 isotope-item" data-filter="type-4">
                        <!-- Magnific Popup Image-->
                        <a class="thumb" data-lightgallery="item" href="images/gallery-11_original.jpg"><img src="images/gallery-11.jpg" alt="">
                            <span class="thumb__overlay fa fa-search"></span></a>
                    </div>

                </div>
            </div>
        </section>
        @endsection
        