<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('ui/frontend/css/customstyle.css') }}">
  <link rel="stylesheet" href="{{ asset('ui/frontend/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('ui/frontend/css/novi.css') }}">
</head>

<body>
  <header>
    <div class="row" id="fiji-id">
      <div class="fiji col-md-4">
        <div class="d-flex mt-5">
          <div style="padding-right:7px;">
            <i class="fa-solid fa-phone" style="font-size:26px;"></i>
          </div>
          <div class="fiji-p" style="font-size:110%; width:70px;">
            <p>01716934024</p>
            <p>01716934024</p>
          </div>
        </div>
      </div>
      <div class="fiji col-md-4 mb-5">
        <div class="rd-navbar-brand"><a class="reveal-inline-block" href="{{ route('home') }}"><img src="{{ asset('ui/frontend/images/logo/sbf.png') }}" alt="" width="191" height="80"></a></div>
      </div>
      <div class="fiji col-md-4" style="margin-top:10px;">
        <div style="padding-right:7px;">
          <i class="fa fa-location-arrow" style="font-size:26px"></i>
        </div>
        <div class="fiji-p2">
          <p>SBF Nursing Institute,<br>Sonali Park, Jail Road,<br>Lalmonirhat-5500, Bangladesh.</p>
        </div>
      </div>
    </div>
    {{--nav start--}}
    <nav class="fiji-class">
      <div class="wrapper">
        <input type="radio" name="slider" id="menu-btn">
        <input type="radio" name="slider" id="close-btn">
        <ul class="nav-links">
          <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
          <li class="me-3 pt-1"><a href="{{ route('home') }}">Home</a></li>
          <li class="pt-1">
            <a href="{{ route('courses') }}" class="desktop-item me-3">Academics</a>
            <input type="checkbox" id="showMega">
            <label for="showMega" class="mobile-item">Academics</label>
            <div class="mega-box">
              <div class="content">
                <div class="row">
                  <img src="{{ asset ('ui/frontend/images/events/events.jpg')}}" alt="" style="width:100%;">
                </div>
                <div class="row">
                  <header>Teacher's Directory</header>
                  <ul class="mega-links">
                    <li><a href="{{ route('home_teachers') }} ">Teachers</a></li>
                    <li><a href="{{ route('home_teachers') }}">International Advisor</a></li>
                    <li><a href="{{ route('home_teachers') }}">Guest Teachers</a></li>
                  </ul>
                </div>
                <div class="row">
                  <header>Academics</header>
                  <ul class="mega-links">
                    <li><a href="{{ route('courses') }}">Courses</a></li>
                    <li><a href="{{ route('home_alumni') }}">Alumni</a></li>
                    <li><a href="{{ route('courses') }}">Lectures</a></li>
                  </ul>
                </div>
                <div class="row">
                  <header>Additional Info</header>
                  <ul class="mega-links">
                    <li><a href="{{ route('courses') }}">Laboratory</a></li>
                    <li><a href="{{ route('courses') }}">Campus</a></li>
                    <li><a href="{{ route('courses') }}">Ranking</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li class="pt-1">
            <a href="{{ route('admission_information') }}" class="desktop-item me-3">Admission</a>
            <input type="checkbox" id="showMega">
            <label for="showMega" class="mobile-item">Admission</label>
            <div class="mega-box">
              <div class="content">
                <div class="row">
                  <img src="{{ asset ('ui/frontend/images/history/building.jpg')}}" alt="" style="width:150%; height:100%">
                </div>
                <div class="row">
                  <header>Admission</header>
                  <ul class="mega-links">

                    <li><a href="{{ route('admission_procedure') }}">Admission Procedure</a></li>
                    <li><a href="{{ route('admission_procedure') }}">Admission Form</a></li>
                    <li><a href="#">Financial Aid & Scholarship</a></li>
                    <li><a href="{{ route('admission_information') }}">Information</a></li>
                  </ul>
                </div>
                <div class="row">
                  <header>Guidelines</header>
                  <ul class="mega-links">
                    <li><a href="{{ route('admission_information') }}">Admission Eligibility</a></li>
                    <li><a href="{{ route('admission_procedure') }}">Admission Guidelines</a></li>
                    <li><a href="{{ route('admission_procedure') }}">Admission Process</a></li>
                    <li><a href="{{ route('admission_information') }}">Information</a></li>
                  </ul>
                </div>

                <div class="row">
                  <header>Tution Fee & Scholarship</header>
                  <ul class="mega-links">
                    <li><a href="{{ route('admission_information') }}">Tution Fee</a></li>
                    <li><a href="{{ route('admission_information') }}">Payment Guidelines</a></li>
                    <li><a href="{{ route('admission_information') }}">Local Students</a></li>
                    <li><a href="{{ route('admission_information') }}">International Students</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li class="me-3 pt-1"><a href="{{ route('home_notices') }}">Notice</a></li>
          <li class="me-3 pt-1"><a href="{{ route('home_alumni') }}">Alumni</a></li>
          <li class="me-3 pt-1"><a href="{{ route('news') }}">News</a></li>
          <li class="me-3 pt-1"><a href="{{ route('events') }}">Events</a></li>
          <li class="me-3 pt-1"><a href="{{ route('about') }}">About</a></li>
          <li class="me-3 pt-1"><a href="{{ route('internship') }}">Internship</a></li>
          <li class="me-3 pt-1"><a href="{{ route('contact') }}">Contacts</a></li>
        </ul>
        <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
      </div>
    </nav>
    {{--nav end--}}
  </header>

  {{ $slot }}

  <!-- Messenger Chat Plugin Code -->
  <div id="fb-root">

  </div>

  <!-- Your Chat Plugin code -->
  <div id="fb-customer-chat" class="fb-customerchat">
  </div>

  <script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "102055982511840");
    chatbox.setAttribute("attribution", "biz_inbox");
  </script>

  <!-- Your SDK code -->
  <script>
    window.fbAsyncInit = function() {
      FB.init({
        xfbml: true,
        version: 'v13.0'
      });
    };

    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s);
      js.id = id;
      js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>

  <!-- Your Chat Plugin code -->
  {{--Footer Section--}}
  <footer class="section page-footer">
    <div class="novi-background bg-cover bg-default">
      <div class="shell-wide">
        <div class="hr bg-gray-light"></div>
      </div>
      <div class="section-60">
        <div class="shell">
          <div class="range range-50 range-lg-justify range-xs-center">
            <div class="cell-md-3 cell-lg-3">
              <a class="reveal-inline-block" href="index.html"><img src="images/logo-default-2-144x122-1.png" alt="" srcset="images/logo-default-2-144x122-1.png" /></a>
              <div class="offset-top-30 text-center">
                <ul class="list-inline list-inline-xs list-inline-madison">
                  <li>
                    <a class="icon novi-icon icon-xxs fa-facebook icon-circle icon-gray-light-filled" href="#"></a>
                  </li>
                  <li>
                    <a class="icon novi-icon icon-xxs fa-twitter icon-circle icon-gray-light-filled" href="#"></a>
                  </li>
                  <li>
                    <a class="icon novi-icon icon-xxs fa-google icon-circle icon-gray-light-filled" href="#"></a>
                  </li>
                  <li>
                    <a class="icon novi-icon icon-xxs fa-instagram icon-circle icon-gray-light-filled" href="#"></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="cell-xs-10 cell-md-5 cell-lg-4 text-lg-left">
              <h6 class="text-bold">Contact us</h6>
              <div class="text-subline mb-4"></div>
              <div class="offset-top-30">
                <ul class="list-unstyled contact-info list">
                  <li>
                    <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                      <div class="unit-left">
                        <span class="icon novi-icon mdi mdi-phone text-middle icon-xs text-madison"></span>
                      </div>
                      <div class="unit-body">
                        <a class="text-dark" href="tel:#">1-800-1234-567,</a><a class="reveal-block reveal-md-inline-block text-dark" href="tel:#">1-800-6547-321</a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                      <div class="unit-left">
                        <span class="icon novi-icon mdi mdi-map-marker text-middle icon-xs text-madison"></span>
                      </div>
                      <div class="unit-body text-left">
                        <a class="text-dark" href="#">2130 Fulton Street San Diego, CA 94117-1080
                          USA</a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                      <div class="unit-left">
                        <span class="icon novi-icon mdi mdi-email-open text-middle icon-xs text-madison"></span>
                      </div>
                      <div class="unit-body">
                        <a href="mailto:#" style="color:#5F9EA0;">info@demolink.org</a>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="cell-xs-10 cell-md-8 cell-lg-4 text-lg-left">
              <h6 class="text-bold">Newsletter</h6>
              <div class="text-subline mb-3"></div>
              <div class="offset-top-30 text-left">
                <p class="mb-3">
                  Enter your email address to get the latest University
                  news, special events and student activities delivered
                  right to your inbox.
                </p>
              </div>
              <div class="offset-top-10">
                <form class="rd-mailform form-subscribe" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                  <div class="form-group">
                    <div class="input-group input-group-sm">
                      <label class="form-label" for="form-email">Your e-mail</label><input class="form-control" id="form-email" type="email" name="email" data-constraints="@Required @Email" /><span class="input-group-btn"><button class="btn btn-default btn-sm" style="background-color:#9ACD32" type="submit">
                          Subscribe
                        </button></span>
                    </div>
                  </div>
                  <div class="form-output"></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-5 context-dark" style="background-color:#5F9EA0;">
        <div class="shell text-md-left">
          <p class="">
            © <span class="copyright-year">2022</span> All Rights Reserved
            Terms of Use and <a href="privacy.html">Privacy Policy.</a><span> Developed&nbsp;by Break-IT</span>
          </p>
        </div>
      </div>
    </div>
  </footer>





  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script>
    var height = $('#fiji-id').height();
    $(window).scroll(function() {
      if ($(this).scrollTop() > height) {
        $('.fiji-class').addClass('fixed');
      } else {
        $('.fiji-class').removeClass('fixed');
      }
    });
  </script>
  <script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
      let i;
      let slides = document.getElementsByClassName("fiji-slides");
      let dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {
        slideIndex = 1
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      setTimeout(showSlides, 3000); // Change image every 2 seconds
    }
  </script>

  <script src="{{ asset('ui/frontend/js/core.min.js') }}"></script>
  <script src="{{ asset('ui/frontend/js/script.js') }}"></script>

</body>

</html>