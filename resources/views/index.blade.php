@extends('layouts.app')
@section('content')

    <!-- Home Banner -->
    <section class="home-one p-0 space-maintain-1">

        <!-- Hero Slide -->
        <div class="container-fluid px-0">
          <div class="row">
            <div class="col-lg-12">
              <div class="main-banner-wrapper home1_style">
                <div class="banner-style-one dots_none nav_none owl-theme owl-carousel">
                  <div class="slide slide-one" style="background-image: url({{asset('assets/images/home/home-1.jpg')}});"></div>
                  <div class="slide slide-one" style="background-image: url({{asset('assets/images/home/home-2.jpg')}});"></div>
                </div>
                <div class="carousel-btn-block banner-carousel-btn">
                  <span class="carousel-btn left-btn"><i class="fas fa-chevron-left left"></i></span>
                  <span class="carousel-btn right-btn"><i class="fas fa-chevron-right right"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="home1-banner-content">
          <div class="container">
            <div class="row">
              <div class="col-xl-10 col-xxl-7">
                <div class="position-relative">
                  <h3 class="banner-title">Trouver les meilleurs entreprises ou particuliers pour votre activité</h3>
                  <!-- <p class="banner-text text-white ff-heading mb25">Millions of people use freeio.com to turn their ideas into reality.</p> -->
                  <div class="advance-search-tab bgc-white bgct-sm p10 p0-md bdrs4 banner-btn position-relative zi9">
                    <div class="row">
                      <div class="col-md-5 col-lg-6 col-xl-6">
                        <div class="advance-search-field mb10-sm bdrr1 bdrn-sm">
                          <form class="form-search position-relative">
                            <div class="box-search">
                              <span class="icon far fa-magnifying-glass"></span>
                              <input class="form-control" type="text" name="search" placeholder="Quel est le service que vous rechercher ?">
                              <div class="search-suggestions">
                                <h6 class="fz14 ml30 mt25 mb-3">Recherches Populaire</h6>
                                <div class="box-suggestions">
                                  <ul class="px-0 m-0 pb-4">
                                    <li>
                                      <div class="info-product">
                                        <div class="item_title">mobile app development</div>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="info-product">
                                        <div class="item_title">mobile app builder</div>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="info-product">
                                        <div class="item_title">mobile legends</div>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="info-product">
                                        <div class="item_title">mobile app ui ux design</div>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="info-product">
                                        <div class="item_title">mobile game app development</div>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="info-product">
                                        <div class="item_title">mobile app design</div>
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                      <div class="col-md-4 col-lg-4 col-xl-4 d-none d-md-block">
                        <div class="bselect-style1">
                          <select class="selectpicker" data-width="100%">
                            <option>Choisissez La Catégorie</option>
                            <option data-tokens="Graphics&Design">Graphics & Design</option>
                            <option data-tokens="DigitlMarketing">Digital Marketing</option>
                            <option data-tokens="Writing&Translation">Writing & Translation</option>
                            <option data-tokens="Video&Animation">Video & Animation</option>
                            <option data-tokens="Music&Audio">Music & Audio</option>
                            <option data-tokens="Programming&Tech">Programming & Tech</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-3 col-lg-2 col-xl-2 ps-md-0">
                        <div class="text-center text-xl-end">
                          <button class="ud-btn btn-thm w-100 px-4" type="button">Rechercher</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

    </section>

    <!-- Browse talent by category -->
    <section class="pb40-md pb90">
        <div class="container">
          <div class="row align-items-center wow fadeInUp" data-wow-delay="300ms">
            <div class="col-lg-9">
              <div class="main-title2">
                <h2 class="title">Rechercher les services par catégorie</h2>
                <!-- <p class="paragraph">Get some Inspirations from 1800+ skills</p> -->
              </div>
            </div>
            <div class="col-lg-3">
              <div class="text-start text-lg-end mb-4 mb-lg-2">
                <a class="ud-btn2" href="#">Toutes les catégories<i class="fal fa-arrow-right-long"></i></a>
              </div>
            </div>
          </div>
          <div class="row d-none d-lg-flex wow fadeInUp">
            <div class="col-sm-6 col-lg-4 col-xl-3">
              <div class="iconbox-style1">
                <div class="icon"><span class="flaticon-developer"></span></div>
                <div class="details mt20">
                  <p class="text mb5">1.853 skills</p>
                  <h4 class="title">Development & IT</h4>
                  <p class="mb-0">Software Engineer, Web / Mobile Developer & More</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3">
              <div class="iconbox-style1">
                <div class="icon"><span class="flaticon-web-design-1"></span></div>
                <div class="details mt20">
                  <p class="text mb5">1.853 skills</p>
                  <h4 class="title">Design & Creative</h4>
                  <p class="mb-0">Software Engineer, Web / Mobile Developer & More</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3">
              <div class="iconbox-style1">
                <div class="icon"><span class="flaticon-digital-marketing"></span></div>
                <div class="details mt20">
                  <p class="text mb5">1.853 skills</p>
                  <h4 class="title">Digital Marketing</h4>
                  <p class="mb-0">Software Engineer, Web / Mobile Developer & More</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3">
              <div class="iconbox-style1">
                <div class="icon"><span class="flaticon-translator"></span></div>
                <div class="details mt20">
                  <p class="text mb5">1.853 skills</p>
                  <h4 class="title">Writing & Translation</h4>
                  <p class="mb-0">Software Engineer, Web / Mobile Developer & More</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3">
              <div class="iconbox-style1">
                <div class="icon"><span class="flaticon-microphone"></span></div>
                <div class="details mt20">
                  <p class="text mb5">1.853 skills</p>
                  <h4 class="title">Music & Audio</h4>
                  <p class="mb-0">Software Engineer, Web / Mobile Developer & More</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3">
              <div class="iconbox-style1">
                <div class="icon"><span class="flaticon-video-file"></span></div>
                <div class="details mt20">
                  <p class="text mb5">1.853 skills</p>
                  <h4 class="title">Video & Animation</h4>
                  <p class="mb-0">Software Engineer, Web / Mobile Developer & More</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3">
              <div class="iconbox-style1">
                <div class="icon"><span class="flaticon-ruler"></span></div>
                <div class="details mt20">
                  <p class="text mb5">1.853 skills</p>
                  <h4 class="title">Engineering & Architecture</h4>
                  <p class="mb-0">Software Engineer, Web / Mobile Developer & More</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3">
              <div class="iconbox-style1">
                <div class="icon"><span class="flaticon-goal"></span></div>
                <div class="details mt20">
                  <p class="text mb5">1.853 skills</p>
                  <h4 class="title">Finance & Accounting</h4>
                  <p class="mb-0">Software Engineer, Web / Mobile Developer & More</p>
                </div>
              </div>
            </div>
          </div>

          <div class="row d-block d-lg-none">
            <div class="col-lg-12">
              <div class="slider-outer-dib navi_pagi_top_right slider-5-grid owl-carousel owl-theme wow fadeInUp">
                <div class="item">
                  <div class="iconbox-style1">
                    <div class="icon"><span class="flaticon-developer"></span></div>
                    <div class="details mt20">
                      <p class="text mb5">1.853 skills</p>
                      <h4 class="title">Development & IT</h4>
                      <p class="mb-0">Software Engineer, Web / Mobile Developer & More</p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="iconbox-style1">
                    <div class="icon"><span class="flaticon-web-design-1"></span></div>
                    <div class="details mt20">
                      <p class="text mb5">1.853 skills</p>
                      <h4 class="title">Design & Creative</h4>
                      <p class="mb-0">Software Engineer, Web / Mobile Developer & More</p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="iconbox-style1">
                    <div class="icon"><span class="flaticon-digital-marketing"></span></div>
                    <div class="details mt20">
                      <p class="text mb5">1.853 skills</p>
                      <h4 class="title">Digital Marketing</h4>
                      <p class="mb-0">Software Engineer, Web / Mobile Developer & More</p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="iconbox-style1">
                    <div class="icon"><span class="flaticon-translator"></span></div>
                    <div class="details mt20">
                      <p class="text mb5">1.853 skills</p>
                      <h4 class="title">Writing & Translation</h4>
                      <p class="mb-0">Software Engineer, Web / Mobile Developer & More</p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="iconbox-style1">
                    <div class="icon"><span class="flaticon-microphone"></span></div>
                    <div class="details mt20">
                      <p class="text mb5">1.853 skills</p>
                      <h4 class="title">Music & Audio</h4>
                      <p class="mb-0">Software Engineer, Web / Mobile Developer & More</p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="iconbox-style1">
                    <div class="icon"><span class="flaticon-video-file"></span></div>
                    <div class="details mt20">
                      <p class="text mb5">1.853 skills</p>
                      <h4 class="title">Video & Animation</h4>
                      <p class="mb-0">Software Engineer, Web / Mobile Developer & More</p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="iconbox-style1">
                    <div class="icon"><span class="flaticon-ruler"></span></div>
                    <div class="details mt20">
                      <p class="text mb5">1.853 skills</p>
                      <h4 class="title">Engineering & Architecture</h4>
                      <p class="mb-0">Software Engineer, Web / Mobile Developer & More</p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="iconbox-style1">
                    <div class="icon"><span class="flaticon-goal"></span></div>
                    <div class="details mt20">
                      <p class="text mb5">1.853 skills</p>
                      <h4 class="title">Finance & Accounting</h4>
                      <p class="mb-0">Software Engineer, Web / Mobile Developer & More</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
    </section>

    <!-- Services tendance-->
    <section class="pb90 pb30-md bgc-thm3">
        <div class="container">
          <div class="row align-items-center wow fadeInUp">
            <div class="col-lg-9">
              <div class="main-title">
                <h2 class="title">Services tendance</h2>
                <p class="paragraph">Services les plus consultés actuellement</p>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="text-start text-lg-end mb-4 mb-lg-2">
                <a class="ud-btn2" href="/services">Tout les services<i class="fal fa-arrow-right-long"></i></a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="slider-outer-dib vam_nav_style dots_none slider-4-grid2 owl-carousel owl-theme wow fadeInUp" data-wow-delay="300ms">
                <div class="item">
                  <div class="listing-style1">
                    <div class="list-thumb">
                      <img class="w-100" src="{{asset('assets/images/listings/g-1.jpg')}}" alt="">
                      <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                    </div>
                    <div class="list-content">
                      <p class="list-text body-color fz14 mb-1">Web & App Design</p>
                      <h5 class="list-title"><a href="/services/details">I will design modern websites in figma or adobe xd</a></h5>
                      <div class="review-meta d-flex align-items-center">
                        <i class="fas fa-star fz10 review-color me-2"></i>
                        <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                      </div>
                      <hr class="my-2">
                      <div class="list-meta d-flex justify-content-between align-items-center mt15">
                        <a class="d-flex" href="#">
                          <span class="position-relative mr10">
                            <img class="rounded-circle wa" src="{{asset('assets/images/team/fl-s-1.png')}}" alt="Freelancer Photo">
                            <span class="online-badges"></span>
                          </span>
                          <span class="fz14">Wanda Runo</span>
                        </a>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="listing-style1">
                    <div class="list-thumb">
                      <img class="w-100" src="{{asset('assets/images/listings/g-2.jpg')}}" alt="">
                      <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                    </div>
                    <div class="list-content">
                      <p class="list-text body-color fz14 mb-1">Art & Illustration</p>
                      <h5 class="list-title"><a href="/services/details">I will create modern flat design illustration</a></h5>
                      <div class="review-meta d-flex align-items-center">
                        <i class="fas fa-star fz10 review-color me-2"></i>
                        <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                      </div>
                      <hr class="my-2">
                      <div class="list-meta d-flex justify-content-between align-items-center mt15">
                        <a class="d-flex" href="#">
                          <span class="position-relative mr10">
                            <img class="rounded-circle wa" src="{{asset('assets/images/team/fl-s-2.png')}}" alt="Freelancer Photo">
                            <span class="online-badges"></span>
                          </span>
                          <span class="fz14">Ali Tufan</span>
                        </a>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="listing-style1">
                    <div class="list-thumb">
                      <img class="w-100" src="{{asset('assets/images/listings/g-3.jpg')}}" alt="">
                      <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                    </div>
                    <div class="list-content">
                      <p class="list-text body-color fz14 mb-1">Design & Creative</p>
                      <h5 class="list-title line-clamp2"><a href="/services/details">I will build a fully responsive design in HTML,CSS, bootstrap, and javascript</a></h5>
                      <div class="review-meta d-flex align-items-center">
                        <i class="fas fa-star fz10 review-color me-2"></i>
                        <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                      </div>
                      <hr class="my-2">
                      <div class="list-meta d-flex justify-content-between align-items-center mt15">
                        <a class="d-flex" href="#">
                          <span class="position-relative mr10">
                            <img class="rounded-circle" src="{{asset('assets/images/team/fl-s-3.png')}}" alt="Freelancer Photo">
                            <span class="online-badges"></span>
                          </span>
                          <span class="fz14">Wanda Runo</span>
                        </a>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="listing-style1">
                    <div class="list-thumb">
                      <img class="w-100" src="{{asset('assets/images/listings/g-4.jpg')}}" alt="">
                      <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                    </div>
                    <div class="list-content">
                      <p class="list-text body-color fz14 mb-1">Web & App Design</p>
                      <h5 class="list-title line-clamp2"><a href="/services/details">I will do mobile app development for ios and android</a></h5>
                      <div class="review-meta d-flex align-items-center">
                        <i class="fas fa-star fz10 review-color me-2"></i>
                        <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                      </div>
                      <hr class="my-2">
                      <div class="list-meta d-flex justify-content-between align-items-center mt15">
                        <a class="d-flex" href="#">
                          <span class="position-relative mr10">
                            <img class="rounded-circle" src="{{asset('assets/images/team/fl-s-4.png')}}" alt="Freelancer Photo">
                            <span class="online-badges"></span>
                          </span>
                          <span class="fz14">Wanda Runo</span>
                        </a>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="listing-style1">
                    <div class="list-thumb">
                      <img class="w-100" src="{{asset('assets/images/listings/g-5.jpg')}}" alt="">
                      <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                    </div>
                    <div class="list-content">
                      <p class="list-text body-color fz14 mb-1">Web & App Design</p>
                      <h5 class="list-title"><a href="/services/details">I will design modern websites in figma or adobe xd</a></h5>
                      <div class="review-meta d-flex align-items-center">
                        <i class="fas fa-star fz10 review-color me-2"></i>
                        <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                      </div>
                      <hr class="my-2">
                      <div class="list-meta d-flex justify-content-between align-items-center mt15">
                        <a class="d-flex" href="#">
                          <span class="position-relative mr10">
                            <img class="rounded-circle" src="{{asset('assets/images/team/fl-s-1.png')}}" alt="Freelancer Photo">
                            <span class="online-badges"></span>
                          </span>
                          <span class="fz14">Wanda Runo</span>
                        </a>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="listing-style1">
                    <div class="list-thumb">
                      <img class="w-100" src="{{asset('assets/images/listings/g-6.jpg')}}" alt="">
                      <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                    </div>
                    <div class="list-content">
                      <p class="list-text body-color fz14 mb-1">Web & App Design</p>
                      <h5 class="list-title"><a href="/services/details">I will design modern websites in figma or adobe xd</a></h5>
                      <div class="review-meta d-flex align-items-center">
                        <i class="fas fa-star fz10 review-color me-2"></i>
                        <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                      </div>
                      <hr class="my-2">
                      <div class="list-meta d-flex justify-content-between align-items-center mt15">
                        <a class="d-flex" href="#">
                          <span class="position-relative mr10">
                            <img class="rounded-circle" src="{{asset('assets/images/team/fl-s-2.png')}}" alt="Freelancer Photo">
                            <span class="online-badges"></span>
                          </span>
                          <span class="fz14">Wanda Runo</span>
                        </a>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="listing-style1">
                    <div class="list-thumb">
                      <img class="w-100" src="{{asset('assets/images/listings/g-7.jpg')}}" alt="">
                      <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                    </div>
                    <div class="list-content">
                      <p class="list-text body-color fz14 mb-1">Design & Creative</p>
                      <h5 class="list-title line-clamp2"><a href="/services/details">I will build a fully responsive design in HTML,CSS, bootstrap, and javascript</a></h5>
                      <div class="review-meta d-flex align-items-center">
                        <i class="fas fa-star fz10 review-color me-2"></i>
                        <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                      </div>
                      <hr class="my-2">
                      <div class="list-meta d-flex justify-content-between align-items-center mt15">
                        <a class="d-flex" href="#">
                          <span class="position-relative mr10">
                            <img class="rounded-circle" src="{{asset('assets/images/team/fl-s-3.png')}}" alt="Freelancer Photo">
                            <span class="online-badges"></span>
                          </span>
                          <span class="fz14">Wanda Runo</span>
                        </a>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

    <!-- Need something -->
    <section class="our-features pb90">

        <div class="container wow fadeInUp">
          <div class="row">
            <div class="col-lg-12">
              <div class="main-title text-center">
                <h2>Vous êtes une entreprise et vous avez des services à proposer ?</h2>
                <!-- <p class="text">Most viewed and all-time top-selling services</p> -->
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="iconbox-style1 border-less p-0">
                  <div class="icon before-none"><span class="flaticon-cv"></span></div>
                  <div class="details">
                    <h4 class="title mt10 mb-3">Inscrivez-vous</h4>
                    <p class="text">Lorem ipsum dolor sit amet consectetur.</p>
                  </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="iconbox-style1 border-less p-0">
                <div class="icon before-none"><span class="flaticon-web-design"></span></div>
                <div class="details">
                  <h4 class="title mt10 mb-3">Lorem ipsum dolor sit amet consectetur</h4>
                  <p class="text">Lorem ipsum dolor sit amet consectetur.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="iconbox-style1 border-less p-0">
                <div class="icon before-none"><span class="flaticon-secure"></span></div>
                <div class="details">
                  <h4 class="title mt10 mb-3">Lorem ipsum dolor sit amet consectetur</h4>
                  <p class="text">Lorem ipsum dolor sit amet consectetur.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="iconbox-style1 border-less p-0">
                <div class="icon before-none"><span class="flaticon-customer-service"></span></div>
                <div class="details">
                  <h4 class="title mt10 mb-3">Lorem ipsum dolor sit amet consectetur</h4>
                  <p class="text">Lorem ipsum dolor sit amet consectetur.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

    </section>

    <!-- Our Testimonials -->
    <section class="our-testimonial">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 mx-auto wow fadeInUp" data-wow-delay="300ms">
              <div class="main-title text-center">
                <h2>Témoignages</h2>
                <p class="paragraph">Interdum et malesuada fames ac ante ipsum</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8 m-auto wow fadeInUp" data-wow-delay="500ms">
              <div class="testimonial-style2">
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade" id="pills-1st" role="tabpanel" aria-labelledby="pills-1st-tab">
                    <div class="testi-content text-md-center">
                      <span class="icon fas fa-quote-left"></span>
                      <h4 class="testi-text">"Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic. "</h4>
                      <h6 class="name">Ali Tufan</h6>
                      <p class="design">Product Manager, Apple Inc</p>
                    </div>
                  </div>
                  <div class="tab-pane fade show active" id="pills-2nd" role="tabpanel" aria-labelledby="pills-2nd-tab">
                    <div class="testi-content text-md-center">
                      <span class="icon fas fa-quote-left"></span>
                      <h4 class="testi-text">"Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic. "</h4>
                      <h6 class="name">Ali Tufan</h6>
                      <p class="design">Product Manager, Apple Inc</p>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="pills-3rd" role="tabpanel" aria-labelledby="pills-3rd-tab">
                    <div class="testi-content text-md-center">
                      <span class="icon fas fa-quote-left"></span>
                      <h4 class="testi-text">"Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic. "</h4>
                      <h6 class="name">Ali Tufan</h6>
                      <p class="design">Product Manager, Apple Inc</p>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="pills-4th" role="tabpanel" aria-labelledby="pills-4th-tab">
                    <div class="testi-content text-md-center">
                      <span class="icon fas fa-quote-left"></span>
                      <h4 class="testi-text">"Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic. "</h4>
                      <h6 class="name">Ali Tufan</h6>
                      <p class="design">Product Manager, Apple Inc</p>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="pills-5th" role="tabpanel" aria-labelledby="pills-5th-tab">
                    <div class="testi-content text-md-center">
                      <span class="icon fas fa-quote-left"></span>
                      <h4 class="testi-text">"Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic. "</h4>
                      <h6 class="name">Ali Tufan</h6>
                      <p class="design">Product Manager, Apple Inc</p>
                    </div>
                  </div>
                </div>
                <div class="tab-list position-relative">
                  <ul class="nav nav-pills justify-content-md-center" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link ps-0" id="pills-1st-tab" data-bs-toggle="pill" data-bs-target="#pills-1st" type="button" role="tab" aria-controls="pills-1st" aria-selected="true"><img src="{{asset('assets/images/testimonials/testi-1.png')}}" alt=""></button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="pills-2nd-tab" data-bs-toggle="pill" data-bs-target="#pills-2nd" type="button" role="tab" aria-controls="pills-2nd" aria-selected="false"><img src="{{asset('assets/images/testimonials/testi-2.png')}}" alt=""></button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-3rd-tab" data-bs-toggle="pill" data-bs-target="#pills-3rd" type="button" role="tab" aria-controls="pills-3rd" aria-selected="false"><img src="{{asset('assets/images/testimonials/testi-3.png')}}" alt=""></button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-4th-tab" data-bs-toggle="pill" data-bs-target="#pills-4th" type="button" role="tab" aria-controls="pills-4th" aria-selected="false"><img src="{{asset('assets/images/testimonials/testi-4.png')}}" alt=""></button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link pe-0" id="pills-5th-tab" data-bs-toggle="pill" data-bs-target="#pills-5th" type="button" role="tab" aria-controls="pills-5th" aria-selected="false"><img src="{{asset('assets/images/testimonials/testi-5.png')}}" alt=""></button>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

    <!-- About Section Area -->
    <section class="our-about bgc-thm2">
        <div class="container">
          <div class="row align-items-center">
            <h2 class="title">Pourquoi nous faire confiance ?</h2>

            <div class="col-xl-6">
              <div class="position-relative mb30-lg">
                <div class="iconbox-small1 at-home1 d-none d-md-block wow fadeInRight">
                  <span class="icon flaticon-review"></span>
                  <div class="details">
                    <h6>4.9/5</h6>
                    <p class="text fz13 mb-0">Clients rate professionals</p>
                  </div>
                </div>
                <div class="iconbox-small2 d-none d-md-block wow fadeInLeft">
                  <span class="icon flaticon-review"></span>
                  <div class="details">
                    <h6>+12M</h6>
                    <p class="text fz13 mb-0">Project Completed</p>
                  </div>
                </div>
                <div class="about-img wow fadeInRight" data-wow-delay="300ms">
                  <img class="w100" src="{{asset('assets/images/about/about-1.jpg')}}" alt="">
                </div>
                <div class="imgbox-1 default-box-shadow1 text-center wow fadeInUp">
                  <img class="img-1 bounce-y" src="{{asset('assets/images/about/happy-client.png')}}" alt="">
                </div>
              </div>
            </div>
            <div class="col-xl-5 offset-xl-1">
              <div class="position-relative wow fadeInLeft" data-wow-delay="300ms">
                <h2 class="text-white mb35">Join World's Best Marketplace <br class="d-none d-lg-block"> for Workers</h2>
                <p class="text text-white mb35">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                <div class="list-style2 light-style">
                  <ul class="mb30">
                    <li><i class="far fa-check"></i>Connect to freelancers with proven business experience</li>
                    <li><i class="far fa-check"></i>Get matched with the perfect talent by a customer success manager</li>
                    <li><i class="far fa-check"></i>Unmatched quality of remote, hybrid, and flexible jobs</li>
                  </ul>
                </div>
                <a href="#" class="ud-btn btn-thm">Find<i class="fal fa-arrow-right-long"></i></a>
              </div>
            </div>
          </div>
        </div>
    </section>

    <!-- Our Blog -->
    <section class="pb90 pb20-md">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="00ms">
              <div class="main-title">
                <h2 class="title">Blog</h2>
              </div>
            </div>
          </div>
          <div class="row wow fadeInUp" data-wow-delay="300ms">
            <div class="col-sm-6 col-xl-3">
              <div class="blog-style1">
                <div class="blog-img"><img class="w-100" src="{{asset('assets/images/blog/blog-1.jpg')}}" alt=""></div>
                <div class="blog-content">
                  <a class="date" href="#">December 2, 2022</a>
                  <h4 class="title mt-1"><a href="blog-details.html">Start an online business and work from home</a></h4>
                  <p class="text mb-0">A complete guide to starting a small business online</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-3">
              <div class="blog-style1">
                <div class="blog-img"><img class="w-100" src="{{asset('assets/images/blog/blog-2.jpg')}}" alt=""></div>
                <div class="blog-content">
                  <a class="date" href="#">December 2, 2022</a>
                  <h4 class="title mt-1"><a href="blog-details.html">Front becomes an official Instagram Marketing Partner</a></h4>
                  <p class="text mb-0">A complete guide to starting a small business online</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-3">
              <div class="blog-style1">
                <div class="blog-img"><img class="w-100" src="{{asset('assets/images/blog/blog-3.jpg')}}" alt=""></div>
                <div class="blog-content">
                  <a class="date" href="#">December 2, 2022</a>
                  <h4 class="title mt-1"><a href="blog-details.html">Engendering a culture of professional development</a></h4>
                  <p class="text mb-0">A complete guide to starting a small business online</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-3">
              <div class="blog-style1">
                <div class="blog-img"><img class="w-100" src="{{asset('assets/images/blog/blog-4.jpg')}}" alt=""></div>
                <div class="blog-content">
                  <a class="date" href="#">December 2, 2022</a>
                  <h4 class="title mt-1"><a href="blog-details.html">Increasing engagement with Instagram</a></h4>
                  <p class="text mb-0">A complete guide to starting a small business online</p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

    <!-- Our CTA -->
    <section class="our-cta bgc-thm4 pt90 pb90 pt60-md pb60-md mt100 mt0-lg">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-md-6 col-lg-7 col-xl-5 wow fadeInLeft">
              <div class="cta-style3">
                <h2 class="cta-title">Trouvez une entreprise / particulier pour mettre sur pied vos projets.</h2>
                <a href="" class="ud-btn btn-thm2">Les Entreprises <i class="fal fa-arrow-right-long"></i></a>
              </div>
            </div>
            <div class="col-md-6 col-lg-5 col-xl-5 position-relative wow zoomIn">
              <div class="cta-img">
                <img class="w-100" src="{{asset('assets/images/about/about-3.png')}}" alt="">
              </div>
            </div>
          </div>
        </div>
    </section>


@endsection