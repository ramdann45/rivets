  @extends('template.main')

  @section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <div class="row container container-fluid">
        <div class="col m-auto">
          <img src="../../img/logo-rivets.png" class="img-fluid" alt="Logo-Target">
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero Section -->

<!-- ======= About Section ======= -->
<section id="about">
  <div class="container" data-aos="fade-up">
    <div class="row">
      <div class="col-lg-8 m-auto con">
        <h1>Rivets</h1>
        {{-- typed js --}}
        <h4 class="font-monospace fst-italic">
          <span id="typed" class="typed"></span>
        </h4>
        {{--  --}}
      </div>
      <div class="col-lg-4 text-center">
        <img src="img/target.png" alt="logo-rivets" width="230" height="230">
      </div>
    </div>
  </div>
</section>
<!-- End About Section -->

      <!-- ======= Catalog Section ======= -->
      <section id="catalogs" class="section-with-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>Best Seller</h2>
          </div>
  
          <div class="row" data-aos="fade-up" data-aos-delay="100">
  
            <div class="col-lg-4 col-md-6 col-6">
              <div class="catalog">
                <div class="catalog-img">
                  <img src="img/seller1.png" alt="catalog 1" class="img-fluid">
                </div>
                <h3>
                  <a href="#">Ozymandias</a>
                </h3>
                <p>100.000</p>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 col-6">
              <div class="catalog">
                <div class="catalog-img">
                  <img src="img/seller2.png" alt="catalog 2" class="img-fluid">
                </div>
                <h3><a href="#">Telex</a></h3>
                <p>120.000</p>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 col-6">
              <div class="catalog">
                <div class="catalog-img">
                  <img src="img/seller3.png" alt="catalog 3" class="img-fluid">
                </div>
                <h3><a href="#">Ikigai</a></h3>
                <p>150.000</p>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 col-6">
              <div class="catalog">
                <div class="catalog-img">
                  <img src="img/seller4.png" alt="catalog 3" class="img-fluid">
                </div>
                <h3><a href="#">Polyphia</a></h3>
                <p>150.000</p>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 col-6">
              <div class="catalog">
                <div class="catalog-img">
                  <img src="img/seller3.png" alt="catalog 3" class="img-fluid">
                </div>
                <h3><a href="#">Gorilaz</a></h3>
                <p>100.000</p>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 col-6">
              <div class="catalog">
                <div class="catalog-img">
                  <img src="img/seller3.png" alt="catalog 3" class="img-fluid">
                </div>
                <h3><a href="#">Lemillion</a></h3>
                <p>150.000</p>
              </div>
            </div>
  
          </div>
        </div>
  
      </section>
      <!-- End Catalogs Section -->
  
      <!-- ======= Gallery Section ======= -->
      <section id="gallery">
  
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>New Arrivals</h2>
          </div>
        </div>
  
        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a href="img/seller1.png" class="gallery-lightbox"><img src="img/seller1.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="img/seller2.png" class="gallery-lightbox"><img src="img/seller2.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="img/seller3.png" class="gallery-lightbox"><img src="img/seller3.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="img/seller4.png" class="gallery-lightbox"><img src="img/seller4.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="img/seller5.png" class="gallery-lightbox"><img src="img/seller5.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="img/seller2.png" class="gallery-lightbox"><img src="img/seller2.png" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
  
      </section>
      <!-- End Gallery Section -->
  @endsection
