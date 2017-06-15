@extends('site.templates.template')

@section('content')
<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-dark" data-bg-img="http://placehold.it/1920x1280">
        <div class="container pt-5 pb-5">
            <!-- Section Content -->
            <div class="section-content text-center">
                <div class="row"> 
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <h2 class="text-theme-colored font-36">Portfolio 4 Masonry Boxed Gutter Title</h2>
                        <ol class="breadcrumb text-center mt-10 white">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Pages</a></li>
                            <li class="active">Portfolio</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>      
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Works Filter -->
                    <div class="portfolio-filter font-alt align-center">
                        <a href="#" class="active" data-filter="*">All</a>
                        <a href="#branding" class="" data-filter=".branding">Branding</a>
                        <a href="#design" class="" data-filter=".design">Design</a>
                        <a href="#photography" class="" data-filter=".photography">Photography</a>
                    </div>
                    <!-- End Works Filter -->

                    <!-- Portfolio Gallery Grid -->
                    <div id="grid" class="gallery-isotope grid-4 masonry gutter clearfix">
                        <!-- Portfolio Item Start -->
                        <div class="gallery-item photography">
                            <div class="thumb">
                                <img class="img-fullwidth" src="http://placehold.it/450x250" alt="project">
                                <div class="overlay-shade"></div>
                                <div class="icons-holder">
                                    <div class="icons-holder-inner">
                                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                            <a data-lightbox="image" href="http://placehold.it/450x250"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <a class="hover-link" data-lightbox="image" href="http://placehold.it/450x250">View more</a>
                            </div>
                            <div class="portfolio-description">
                                <h5 class="title"><a href="#">Sample Portfolio Title</a></h5>
                                <span class="category"><span>Category Art</span></span>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item branding">
                            <div class="thumb">
                                <img class="img-fullwidth" src="http://placehold.it/450x500" alt="project">
                                <div class="overlay-shade"></div>
                                <div class="icons-holder">
                                    <div class="icons-holder-inner">
                                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                            <a href="#"><i class="fa fa-link"></i></a>
                                            <a href="#"><i class="fa fa-heart-o"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <a class="hover-link" data-lightbox="image" href="http://placehold.it/450x250">View more</a>
                            </div>
                            <div class="portfolio-description">
                                <h5 class="title"><a href="#">Sample Portfolio Title</a></h5>
                                <span class="category"><span>Category Art</span></span>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item design">
                            <div class="thumb">
                                <img class="img-fullwidth" src="http://placehold.it/450x250" alt="project">
                                <div class="overlay-shade"></div>
                                <div class="icons-holder">
                                    <div class="icons-holder-inner">
                                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                            <a href="#"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <a class="hover-link" data-lightbox="image" href="http://placehold.it/450x250">View more</a>
                            </div>
                            <div class="portfolio-description">
                                <h5 class="title"><a href="#">Sample Portfolio Title</a></h5>
                                <span class="category"><span>Category Art</span></span>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item photography">
                            <div class="thumb">
                                <img class="img-fullwidth" src="http://placehold.it/450x250" alt="project">
                                <div class="overlay-shade"></div>
                                <div class="icons-holder">
                                    <div class="icons-holder-inner">
                                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                            <a class="popup-youtube" href="http://www.youtube.com/watch?v=0O2aH4XLbto"><i class="fa fa-youtube-play"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <a class="hover-link" data-lightbox="image" href="http://placehold.it/450x250">View more</a>
                            </div>
                            <div class="portfolio-description">
                                <h5 class="title"><a href="#">Sample Portfolio Title</a></h5>
                                <span class="category"><span>Category Art</span></span>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item branding">
                            <div class="thumb">
                                <img class="img-fullwidth" src="http://placehold.it/450x250" alt="project">
                                <div class="overlay-shade"></div>
                                <div class="icons-holder">
                                    <div class="icons-holder-inner">
                                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                            <a class="popup-vimeo" href="https://vimeo.com/45830194"><i class="fa fa-play"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <a class="hover-link" data-lightbox="image" href="http://placehold.it/450x250">View more</a>
                            </div>
                            <div class="portfolio-description">
                                <h5 class="title"><a href="#">Sample Portfolio Title</a></h5>
                                <span class="category"><span>Category Art</span></span>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item design">
                            <div class="thumb">
                                <div class="flexslider-wrapper">
                                    <div class="flexslider">
                                        <ul class="slides">
                                            <li><a href="http://placehold.it/450x250" title="Portfolio Gallery - Photo 1"><img src="http://placehold.it/450x250" alt=""></a></li>
                                            <li><a href="http://placehold.it/450x250" title="Portfolio Gallery - Photo 2"><img src="http://placehold.it/450x250" alt=""></a></li>
                                            <li><a href="http://placehold.it/450x250" title="Portfolio Gallery - Photo 3"><img src="http://placehold.it/450x250" alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="overlay-shade"></div>
                                <div class="icons-holder">
                                    <div class="icons-holder-inner">
                                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                            <a href="#"><i class="fa fa-picture-o"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-description">
                                <h5 class="title"><a href="#">Sample Portfolio Title</a></h5>
                                <span class="category"><span>Category Art</span></span>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item photography">
                            <div class="thumb">
                                <img class="img-fullwidth" src="http://placehold.it/450x250" alt="project">
                                <div class="overlay-shade"></div>
                                <div class="icons-holder">
                                    <div class="icons-holder-inner">
                                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                            <a data-lightbox="image" href="http://placehold.it/450x250"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <a class="hover-link" data-lightbox="image" href="http://placehold.it/450x250">View more</a>
                            </div>
                            <div class="portfolio-description">
                                <h5 class="title"><a href="#">Sample Portfolio Title</a></h5>
                                <span class="category"><span>Category Art</span></span>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item design">
                            <div class="thumb">
                                <div class="flexslider-wrapper" data-direction="vertical">
                                    <div class="flexslider">
                                        <ul class="slides">
                                            <li><a href="http://placehold.it/450x250" title="Portfolio Gallery - Photo 1"><img src="http://placehold.it/450x250" alt=""></a></li>
                                            <li><a href="http://placehold.it/450x250" title="Portfolio Gallery - Photo 2"><img src="http://placehold.it/450x250" alt=""></a></li>
                                            <li><a href="http://placehold.it/450x250" title="Portfolio Gallery - Photo 3"><img src="http://placehold.it/450x250" alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="overlay-shade"></div>
                            <div class="icons-holder">
                                <div class="icons-holder-inner">
                                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                        <a href="#"><i class="fa fa-picture-o"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-description">
                                <h5 class="title"><a href="#">Sample Portfolio Title</a></h5>
                                <span class="category"><span>Category Art</span></span>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item photography design">
                            <div class="thumb">
                                <img class="img-fullwidth" src="http://placehold.it/450x250" alt="project">
                                <div class="overlay-shade"></div>
                                <div class="icons-holder">
                                    <div class="icons-holder-inner">
                                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                            <a data-lightbox="image" href="http://placehold.it/450x250"><i class="fa fa-plus"></i></a>
                                            <a href="#"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <a class="hover-link" data-lightbox="image" href="http://placehold.it/450x250">View more</a>
                            </div>
                            <div class="portfolio-description">
                                <h5 class="title"><a href="#">Sample Portfolio Title</a></h5>
                                <span class="category"><span>Category Art</span></span>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item photography branding">
                            <div class="thumb">
                                <img class="img-fullwidth" src="http://placehold.it/450x500" alt="project">
                                <div class="overlay-shade"></div>
                                <div class="icons-holder">
                                    <div class="icons-holder-inner">
                                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                            <a data-lightbox="image" href="http://placehold.it/450x500"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <a class="hover-link" data-lightbox="image" href="http://placehold.it/450x500">View more</a>
                            </div>
                            <div class="portfolio-description">
                                <h5 class="title"><a href="#">Sample Portfolio Title</a></h5>
                                <span class="category"><span>Category Art</span></span>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item photography">
                            <div class="thumb">
                                <img class="img-fullwidth" src="http://placehold.it/450x250" alt="project">
                                <div class="overlay-shade"></div>
                                <div class="icons-holder">
                                    <div class="icons-holder-inner">
                                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                            <a data-lightbox="image" href="http://placehold.it/450x250"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <a class="hover-link" data-lightbox="image" href="http://placehold.it/450x250">View more</a>
                            </div>
                            <div class="portfolio-description">
                                <h5 class="title"><a href="#">Sample Portfolio Title</a></h5>
                                <span class="category"><span>Category Art</span></span>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item branding">
                            <div class="thumb">
                                <img class="img-fullwidth" src="http://placehold.it/450x250" alt="project">
                                <div class="overlay-shade"></div>
                                <div class="icons-holder">
                                    <div class="icons-holder-inner">
                                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                            <a data-lightbox="image" href="http://placehold.it/450x250"><i class="fa fa-plus"></i></a>
                                            <a href="#"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <a class="hover-link" data-lightbox="image" href="http://placehold.it/450x250">View more</a>
                            </div>
                            <div class="portfolio-description">
                                <h5 class="title"><a href="#">Sample Portfolio Title</a></h5>
                                <span class="category"><span>Category Art</span></span>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item branding">
                            <div class="thumb">
                                <img class="img-fullwidth" src="http://placehold.it/450x250" alt="project">
                                <div class="overlay-shade"></div>
                                <div class="icons-holder">
                                    <div class="icons-holder-inner">
                                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                            <a data-lightbox="image" href="http://placehold.it/450x250"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <a class="hover-link" data-lightbox="image" href="http://placehold.it/450x250">View more</a>
                            </div>
                            <div class="portfolio-description">
                                <h5 class="title"><a href="#">Sample Portfolio Title</a></h5>
                                <span class="category"><span>Category Art</span></span>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item branding">
                            <div class="thumb">
                                <img class="img-fullwidth" src="http://placehold.it/450x250" alt="project">
                                <div class="overlay-shade"></div>
                                <div class="icons-holder">
                                    <div class="icons-holder-inner">
                                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                            <a data-lightbox="image" href="http://placehold.it/450x250"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <a class="hover-link" data-lightbox="image" href="http://placehold.it/450x250">View more</a>
                            </div>
                            <div class="portfolio-description">
                                <h5 class="title"><a href="#">Sample Portfolio Title</a></h5>
                                <span class="category"><span>Category Art</span></span>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item branding">
                            <div class="thumb">
                                <img class="img-fullwidth" src="http://placehold.it/450x250" alt="project">
                                <div class="overlay-shade"></div>
                                <div class="icons-holder">
                                    <div class="icons-holder-inner">
                                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                            <a data-lightbox="image" href="http://placehold.it/450x250"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <a class="hover-link" data-lightbox="image" href="http://placehold.it/450x250">View more</a>
                            </div>
                            <div class="portfolio-description">
                                <h5 class="title"><a href="#">Sample Portfolio Title</a></h5>
                                <span class="category"><span>Category Art</span></span>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item branding">
                            <div class="thumb">
                                <img class="img-fullwidth" src="http://placehold.it/450x250" alt="project">
                                <div class="overlay-shade"></div>
                                <div class="icons-holder">
                                    <div class="icons-holder-inner">
                                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                            <a data-lightbox="image" href="http://placehold.it/450x250"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <a class="hover-link" data-lightbox="image" href="http://placehold.it/450x250">View more</a>
                            </div>
                            <div class="portfolio-description">
                                <h5 class="title"><a href="#">Sample Portfolio Title</a></h5>
                                <span class="category"><span>Category Art</span></span>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item branding">
                            <div class="thumb">
                                <img class="img-fullwidth" src="http://placehold.it/450x250" alt="project">
                                <div class="overlay-shade"></div>
                                <div class="icons-holder">
                                    <div class="icons-holder-inner">
                                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                            <a data-lightbox="image" href="http://placehold.it/450x250"><i class="fa fa-plus"></i></a>
                                            <a href="#"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <a class="hover-link" data-lightbox="image" href="http://placehold.it/450x250">View more</a>
                            </div>
                            <div class="portfolio-description">
                                <h5 class="title"><a href="#">Sample Portfolio Title</a></h5>
                                <span class="category"><span>Category Art</span></span>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item branding">
                            <div class="thumb">
                                <img class="img-fullwidth" src="http://placehold.it/450x250" alt="project">
                                <div class="overlay-shade"></div>
                                <div class="icons-holder">
                                    <div class="icons-holder-inner">
                                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                            <a data-lightbox="image" href="http://placehold.it/450x250"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <a class="hover-link" data-lightbox="image" href="http://placehold.it/450x250">View more</a>
                            </div>
                            <div class="portfolio-description">
                                <h5 class="title"><a href="#">Sample Portfolio Title</a></h5>
                                <span class="category"><span>Category Art</span></span>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->
                    </div>
                    <!-- End Portfolio Gallery Grid -->
                </div>
            </div>
            
            <nav>
              <ul class="pagination">
                <li>
                  <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                  <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
            
        </div>
    </section>
    
</div>
@endsection