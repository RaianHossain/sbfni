<link id="u-theme-google-font" rel="stylesheet" href="url('https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i') ">
<link id="u-page-google-font" rel="stylesheet" href="url('https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i')">

<script class="u-script" type="text/javascript" src="url('https://code.jquery.com/jquery-3.5.1.min.js')" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous" defer=""></script>
<link rel="stylesheet" href="{{ asset('css/nicepage.css') }}" media="screen">
<style>

.u-section-1 .u-sheet-1 {
  min-height: 563px;
}

.u-section-1 .u-slider-1 {
  margin-top: 63px;
  margin-bottom: 60px;
  min-height: 438px;
}

.u-section-1 .u-carousel-indicators-1 {
  position: absolute;
  bottom: 10px;
  width: auto;
  height: auto;
}

.u-section-1 .u-carousel-item-1 {
  background-image: linear-gradient(#f2f2f2, #72efe9);
}

.u-section-1 .u-container-layout-1 {
  padding: 30px 130px;
}

.u-section-1 .u-image-1 {
  width: 315px;
  height: 378px;
  margin: 0 auto 0 0;
}

.u-section-1 .u-text-1 {
  margin: -298px 0 0 347px;
}

.u-section-1 .u-text-2 {
  margin: 63px 0 0 347px;
}

.u-section-1 .u-carousel-control-1 {
  width: 65px;
  height: 65px;
  background-image: none;
}

.u-section-1 .u-carousel-control-2 {
  width: 65px;
  height: 65px;
  background-image: none;
}

@media (max-width: 1199px) {
  .u-section-1 .u-slider-1 {
    height: auto;
  }

  .u-section-1 .u-container-layout-1 {
    padding-left: 53px;
    padding-right: 53px;
  }

  .u-section-1 .u-image-1 {
    margin-left: 77px;
  }

  .u-section-1 .u-text-1 {
    width: auto;
    margin-top: -341px;
    margin-left: 400px;
  }

  .u-section-1 .u-text-2 {
    width: auto;
    margin-top: 106px;
    margin-left: 400px;
  }
}

@media (max-width: 991px) {
  .u-section-1 .u-container-layout-1 {
    padding-left: 85px;
    padding-right: 85px;
  }

  .u-section-1 .u-image-1 {
    margin-left: 10px;
  }

  .u-section-1 .u-text-1 {
    margin-right: 10px;
    margin-left: 217px;
  }

  .u-section-1 .u-text-2 {
    margin-top: 113px;
    margin-left: 227px;
  }
}

@media (max-width: 767px) {
  .u-section-1 .u-sheet-1 {
    min-height: 774px;
  }

  .u-section-1 .u-slider-1 {
    margin-top: 60px;
    min-height: 649px;
  }

  .u-section-1 .u-container-layout-1 {
    padding-left: 10px;
    padding-right: 10px;
  }

  .u-section-1 .u-text-1 {
    margin-top: -9px;
    margin-left: 44px;
    margin-right: 44px;
  }

  .u-section-1 .u-text-2 {
    margin-top: 10px;
    margin-left: 44px;
    margin-right: 44px;
  }
}

@media (max-width: 575px) {
  .u-section-1 .u-image-1 {
    margin-left: 5px;
  }

  .u-section-1 .u-text-1 {
    margin-right: 0;
    margin-left: 0;
  }

  .u-section-1 .u-text-2 {
    margin-right: 0;
    margin-left: 0;
  }
}

    </style>

<section class="u-clearfix u-section-1" id="carousel_7f76">
    <div class="u-clearfix u-sheet u-valign-middle-sm u-valign-middle-xs u-sheet-1"> 
        
      <div id="carousel-1a4b" data-interval="5000" data-u-ride="carousel" class="u-carousel u-expanded-width u-slider u-slider-1">
        <ol class="u-absolute-hcenter u-carousel-indicators u-carousel-indicators-1">
          <li data-u-target="#carousel-1a4b" class="u-active u-black" data-u-slide-to="0"></li>
        </ol>
       
        <div class="u-carousel-inner" role="listbox">
           
          <div class="u-active u-align-center-sm u-align-center-xs u-carousel-item u-container-style u-gradient u-slide u-carousel-item-1">
               @forelse ($quotation as $quotation )
            <div class="u-container-layout u-valign-top-md u-valign-top-sm u-valign-top-xs u-container-layout-1">
              <img class="u-image u-image-round u-radius-16 u-image-1" data-image-width="720" data-image-height="1080" src="{{ asset('storage/quotations/'.$quotation->img) }}">
              <blockquote class="u-custom-font u-font-merriweather u-text u-text-1"> {{ $quotation->quotation }}</blockquote>
              <h3 class="u-text u-text-2"><b> {{ $quotation->author_name }},</b><i>{{ $quotation->title }}</i>
              </h3>
            </div>
            @break($loop->iteration == 1)
             @empty
        <p> No Qutation Found </p>
      @endforelse 
          </div>
        
        </div>
        
        <a class="u-absolute-vcenter u-black u-carousel-control u-carousel-control-prev u-icon-circle u-spacing-17 u-text-body-alt-color u-carousel-control-1" href="#carousel-1a4b" role="button" data-u-slide="prev">
          <span aria-hidden="true">
            <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                  c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
          </span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="u-absolute-vcenter u-black u-carousel-control u-carousel-control-next u-icon-circle u-spacing-17 u-text-body-alt-color u-carousel-control-2" href="#carousel-1a4b" role="button" data-u-slide="next">
          <span aria-hidden="true">
            <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                  c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
          </span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>
  <script src="{{ asset('js/nicepage.js') }}"></script>