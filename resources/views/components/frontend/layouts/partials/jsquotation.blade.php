
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
            <link rel="stylesheet"
                href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>

            
            <div class="owl-carousel owl-theme mt-5">
              @forelse ($quotation as $quotation )
                <div class="owl-item">
                    <div class="card">
                        <div class="img-card">
                            <img src="https://images.pexels.com/photos/1222271/pexels-photo-1222271.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                alt="">
                        </div>
                        <div class="testimonial mt-4 mb-2">
                          {{ $quotation->quotation }}
                        </div>
                        <div class="name">
                          {{ $quotation->author_name }}<br>
                          {{ $quotation->title }}
                        </div>
                    </div>
                    @empty
              <p> No Qutation Found </p>
            @endforelse
                </div>
            </div>

            <style>
              /* Importing fonts from Google */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

/* Reseting */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

/* body {
    background: linear-gradient(to right, #101c81, #2a6ba3);
    min-height: 100vh;
} */

.owl-carousel .owl-item {
    transition: all 0.3s ease-in-out;
}

.owl-carousel .owl-item .card {
    padding: 30px;
    position: relative;
}

.owl-carousel .owl-stage-outer {
    overflow-y: auto !important;
    padding-bottom: 40px;
}

.owl-carousel .owl-item img {
    height: 200px;
    object-fit: cover;
    border-radius: 6px;
}

.owl-carousel .owl-item .card .name {
    position: absolute;
    bottom: -20px;
    left: 33%;
    color: #101c81;
    font-size: 1.1rem;
    font-weight: 600;
    background-color: aquamarine;
    padding: 0.3rem 0.4rem;
    border-radius: 5px;
    box-shadow: 2px 3px 15px #3c405a;
}

.owl-carousel .owl-item .card {
    opacity: 0.2;
    transform: scale3d(0.8, 0.8, 0.8);
    transition: all 0.3s ease-in-out;
}

.owl-carousel .owl-item.active.center .card {
    opacity: 1;
    transform: scale3d(1, 1, 1);
}

.owl-carousel .owl-dots {
    display: inline-block;
    width: 100%;
    text-align: center;
}

.owl-theme .owl-dots .owl-dot span {
    height: 20px;
    background: #2a6ba3 !important;
    border-radius: 2px !important;
    opacity: 0.8;
}

.owl-theme .owl-dots .owl-dot.active span,
.owl-theme .owl-dots .owl-dot:hover span {
    height: 13px;
    width: 13px;
    opacity: 1;
    transform: translateY(2px);
    background: #83b8e7 !important;
}

@media(min-width: 480.6px) and (max-width: 575.5px) {
    .owl-carousel .owl-item .card .name {
        left: 24%;
    }
}

@media(max-width: 360px) {
    .owl-carousel .owl-item .card .name {
        left: 30%;
    }}

    </style>

    <script>
      $(document).ready(function () {
    var silder = $(".owl-carousel");
    silder.owlCarousel({
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: false,
        items: 1,
        stagePadding: 20,
        center: true,
        nav: false,
        margin: 50,
        dots: true,
        loop: true,
        // responsive: {
        //     0: { items: 1 },
        //     480: { items: 2 },
        //     575: { items: 2 },
        //     768: { items: 2 },
        //     991: { items: 3 },
        //     1200: { items: 4 }
        // }
    });
});
      </script>

