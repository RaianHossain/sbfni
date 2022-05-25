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
  <x-frontend.layouts.partials.header/>

  {{--Carousel section--}}
  <div id="carouselExampleControls" class="carousel slide mt-3 mb-3" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('ui/frontend/images/slider/slide1.jpg') }}" class="d-block w-100" alt="..." style="height: 500px;">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('ui/frontend/images/slider/slide2.jpg') }}" class="d-block w-100" alt="..." style="height: 500px;">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('ui/frontend/images/slider/slide3.jpg') }}" class="d-block w-100" alt="..." style="height: 500px;">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  {{--Principal,CEO &  Chairman Section--}}
  <section class="mb-5">
    <div class="row">
      <div class="col-md-4 sec2col">
        <div class="media block-6 d-block text-center">
          <a href="#">
            <div class="box  d-flex justify-content-center align-items-center mt-5 mb-3">
              <img src="{{ asset('ui/frontend/images/SBF_p.jpeg') }}" class="d-block  mx-auto mt-2 " alt="..." style=" width:150px; height:150px;  border-radius:50%; border:2px solid #2828287a">
            </div>
          </a>
          <div class="title media-body p-2 mt-3">
            <h3 class="heading  mt-3" style="margin:0 auto; ">CEO</h3>
            <p class="text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae necessitatibus et unde molestiae exercitationem officia suscipit soluta reiciendis minus. Impedit sint quod, quos molestias alias soluta sequi nihil veniam aspernatur.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 sec2col">
        <div class="media block-6 d-block text-center">
          <a href="#">
            <div class="box  d-flex justify-content-center align-items-center mt-5 mb-3">
              <img src="{{ asset('ui/frontend/images/avatar.png') }}" class="d-block  mx-auto mt-2 " alt="..." style=" width:150px; height:150px;  border-radius:50%; border:2px solid #5F9EA0">
            </div>
          </a>
          <div class="title media-body p-2 mt-3">
            <h3 class="heading  mt-3" style="margin:0 auto; ">Chairman</h3>
            <p class="text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae necessitatibus et unde molestiae exercitationem officia suscipit soluta reiciendis minus. Impedit sint quod, quos molestias alias soluta sequi nihil veniam aspernatur.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 sec2col">
        <div class="media block-6 d-block text-center">
          <a href="#">
            <div class="box  d-flex justify-content-center align-items-center mt-5 mb-3">
              <img src="{{ asset('ui/frontend/images/SBF_AKB.png') }}" class="d-block  mx-auto mt-2 " alt="..." style=" width:150px; height:150px;  border-radius:50%; border:2px solid #2828287a">
            </div>
          </a>
          <div class="title media-body p-2 mt-3">
            <h3 class="heading  mt-3" style="margin:0 auto; ">Principal</h3>
            <p class="text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae necessitatibus et unde molestiae exercitationem officia suscipit soluta reiciendis minus. Impedit sint quod, quos molestias alias soluta sequi nihil veniam aspernatur.</p>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>



  {{--Different sections--}}
  <section>
    <div class="row">
      <div class="col-md-3 sec2col" style="background-color: 	#2828287a;">
        <div class="media block-6 d-block text-center">
          <a href="#">
            <div class="icon d-flex justify-content-center align-items-center">
              <img src="{{ asset('ui/frontend/images/fonticons/png/nurse.png') }}" class="d-block w-20 mx-auto mt-5 " alt="..." style="height: 100px;">
            </div>
          </a>
          <div class="media-body p-2 mt-3">
            <h3 class="heading text-white mt-3">Nursing</h3>
            <p class="text-white">We have students coming from different backgrounds, cultures, and nationalities as well.
              More than 500 international students are enrolled in various programs.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 sec2col" style="background-color: #5F9EA0;">
        <div class="media block-6 d-block text-center">
          <a href="#">
            <div class="icon d-flex justify-content-center align-items-center">
              <img src="{{ asset('ui/frontend/images/fonticons/png/admission.png') }}" class="d-block w-20 mx-auto mt-5 " alt="..." style="height: 100px;">
            </div>
          </a>
          <div class="media-body p-2 mt-3">
            <h3 class="heading text-white mt-3">Admission</h3>
            <p class="text-white">We have students coming from different backgrounds, cultures, and nationalities as well.
              More than 500 international students are enrolled in various programs.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 sec2col" style="background-color:#2828287a ;">
        <div class="media block-6 d-block text-center">
          <a href="#">
            <div class="icon d-flex justify-content-center align-items-center">
              <img src="{{ asset('ui/frontend/images/fonticons/png/tution.png') }}" class="d-block w-20 mx-auto mt-5 " alt="..." style="height: 100px;">
            </div>
          </a>
          <div class="media-body p-2 mt-3">
            <h3 class="heading text-white mt-3">Tution Fee</h3>
            <p class="text-white">We have students coming from different backgrounds, cultures, and nationalities as well.
              More than 500 international students are enrolled in various programs.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 sec2col" style="background-color:#5F9EA0 ;">
        <div class="media block-6 d-block text-center">
          <a href="#">
            <div class="icon d-flex justify-content-center align-items-center">
              <img src="{{ asset('ui/frontend/images/fonticons/png/scholarship.png') }}" class="d-block w-20 mx-auto mt-5 " alt="..." style="height: 95px;">
            </div>
          </a>
          <div class="media-body p-2 mt-3">
            <h3 class="heading text-white mt-3">Scholarship</h3>
            <p class="text-white">We have students coming from different backgrounds, cultures, and nationalities as well.
              More than 500 international students are enrolled in various programs.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{--what we offer section--}}
  <section class="mb-2 ">
    <div class="row">
      <div class="col-md-7 mb-5">
        <div style="padding-left: 70px; padding-right: 30px; padding-top: 70px">
          <h1 class="main "><b>What We Offer</b></h1>
          <p class="text-grey mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed in debitis commodi voluptatem! Vitae, aut!</p>
          <div>
            <div class="row">
              <div class="col-md-6">
                <div class="d-flex">
                  <div class="logo">
                    <div class="icon d-flex justify-content-center align-items-center" style="font-size: 30px; color:#2828287a;">
                      <i class="fa-solid fa-user-nurse"></i>
                    </div>
                  </div>
                  <div style="padding-left: 20px;">
                    <h1 class="second-main"><b>Accomodation</b></h1>
                    <p>We are providing a secure and convenient living facility for our students. DIU dormitories are a home away from home...</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="d-flex">
                  <div class="logo">
                    <div class="icon d-flex justify-content-center align-items-center" style="font-size: 30px; color:#2828287a;">
                      <i class="fa-solid fa-user-nurse"></i>
                    </div>
                  </div>
                  <div style="padding-left: 20px;">
                    <h1 class="second-main"><b>Accomodation</b></h1>
                    <p>We are providing a secure and convenient living facility for our students. DIU dormitories are a home away from home...</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="d-flex">
                  <div class="logo">
                    <div class="icon d-flex justify-content-center align-items-center" style="font-size: 30px; color:#5F9EA0;">
                      <i class="fa-solid fa-user-nurse"></i>
                    </div>
                  </div>
                  <div style="padding-left: 20px;">
                    <h1 class="second-main"><b>Accomodation</b></h1>
                    <p>We are providing a secure and convenient living facility for our students. DIU dormitories are a home away from home...</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="d-flex">
                  <div class="logo">
                    <div class="icon d-flex justify-content-center align-items-center" style="font-size: 30px; color:#5F9EA0; ">
                      <i class="fa-solid fa-user-nurse"></i>
                    </div>
                  </div>
                  <div style="padding-left: 20px;">
                    <h1 class="second-main"><b>Accomodation</b></h1>
                    <p>We are providing a secure and convenient living facility for our students. DIU dormitories are a home away from home...</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="d-flex">
                  <div class="logo">
                    <div class="icon d-flex justify-content-center align-items-center" style="font-size: 30px; color:#2828287a; ">
                      <i class="fa-solid fa-user-nurse"></i>
                    </div>
                  </div>
                  <div style="padding-left: 20px;">
                    <h1 class="second-main"><b>Accomodation</b></h1>
                    <p>We are providing a secure and convenient living facility for our students. DIU dormitories are a home away from home...</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="d-flex">
                  <div class="logo">
                    <div class="icon d-flex justify-content-center align-items-center" style="font-size: 30px; color:#2828287a;">
                      <i class="fa-solid fa-user-nurse"></i>
                    </div>
                  </div>
                  <div style="padding-left: 20px;">
                    <h1 class="second-main"><b>Accomodation</b></h1>
                    <p>We are providing a secure and convenient living facility for our students. DIU dormitories are a home away from home...</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="new col-md-5">
        <img src="{{ asset('ui/frontend/images/history/building.jpg') }}" alt="" style="width: 80%; height: 100%; border:1px solid white;">
      </div>
    </div>
  </section>

  {{--Our Skills Section--}}
  <section class="section  bg-cover section-70 section-md-114 bg-default" style="padding-top:80px;  padding-bottom:10px;">
    <div class="shell">
      <h1 class="main text-center"><b>Our Skills</b> </h1>
      <hr class="divider bg-madison">
      <div class="range range-50 range-xs-center offset-top-50 text-center">
        <div class="cell-sm-6 cell-md-3">
          <!-- Circle Progress bar-circle-->
          <div class="progress-bar-circle progress-bar-modern" data-value="0.98" data-gradient="#5F9EA0" data-thickness="10" data-empty-fill="#e5e5e5" data-size="130"><span></span></div>
          <div class="offset-top-20">
            <h6 class="text-bold">Lab</h6>
          </div>
        </div>
        <div class="cell-sm-6 cell-md-3">
          <!-- Circle Progress bar-circle-->
          <div class="progress-bar-circle progress-bar-modern" data-value="0.9" data-gradient="#2828287a" data-thickness="10" data-empty-fill="#e5e5e5" data-size="130"><span></span></div>
          <div class="offset-top-20">
            <h6 class="text-bold">Teachers</h6>
          </div>
        </div>
        <div class="cell-sm-6 cell-md-3">
          <!-- Circle Progress bar-circle-->
          <div class="progress-bar-circle progress-bar-modern" data-value="0.78" data-gradient="#5F9EA0" data-thickness="10" data-empty-fill="#e5e5e5" data-size="130"><span></span></div>
          <div class="offset-top-20">
            <h6 class="text-bold">Campus</h6>
          </div>
        </div>
        <div class="cell-sm-6 cell-md-3">
          <!-- Circle Progress bar-circle-->
          <div class="progress-bar-circle progress-bar-modern" data-value="0.95" data-gradient="#2828287a" data-thickness="10" data-empty-fill="#e5e5e5" data-size="130"><span></span></div>
          <div class="offset-top-20">
            <h6 class="text-bold">Library</h6>
          </div>
        </div>
      </div>
    </div>
  </section>


  {{--Event Section--}}
  <section class="mb-5" style="padding-top:80px;">
    <div class="shell-wide">
      <h1 class="main text-center"><b>Recent Events</b></h1>
      <p class="text-grey mb-5 text-center">Through a lot of meaningful and impactful events students get the opportunity to develop their skills and portfolio beyond the curriculam.</p>
      <hr class="divider bg-madison" />
      <div class="range range-50 offset-top-50 range-xs-center">
        @forelse ( $event as $event )
        <div class="cell-sm-6 cell-md-5 cell-xl-3">
          <article class="post-event">
            <div class="post-event-img-overlay">
              <img class="img-responsive" src="{{ 'storage/events/' . $event->img1 }}" alt="" style="height:420px; width:420px;" />
              <div class="post-event-overlay context-dark">
                <a class="btn btn-default" style="background-color:#2828287a;" href="{{ route('event_details', ['id'=>$event->id]) }}">Book Now</a>
                <div class="offset-top-20">
                  <a class="btn btn-default" href="{{ route('event_details', ['id'=>$event->id]) }}">More Details</a>
                </div>
              </div>
              <div class="post-event-meta text-center" style="background-color:#5F9EA0;">
                <div class="h3 text-bold reveal-inline-block reveal-lg-block">
                  {{ date("d", strtotime($event->date)) }}
                </div>
                <p class="reveal-inline-block reveal-lg-block">{{ date("F", strtotime($event->date)) }}</p>
                <span class="text-bold reveal-inline-block reveal-lg-block inset-left-10 inset-lg-left-0">{{ date('h:i A', strtotime($event->time)) }}</span>
              </div>
            </div>
            <div class="unit unit-lg unit-lg-horizontal">
              <div class="unit-body">
                <div class="post-event-body text-lg-left">
                  <h6><b>
                      <a href="{{ route('event_details', ['id'=>$event->id]) }}">{{ $event->title }}</a>
                    </b>
                  </h6>
                  <ul class="list-inline list-inline-xs">
                    <li>
                      <a href="team-member-profile.html"><span class="icon novi-icon icon-xxs mdi mdi-account-outline text-middle" style="color:#2828287a;"></span><span class="inset-left-10 text-dark text-middle">{{ $event->lecturer_name }}</span></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </article>
        </div>
        @break($loop->iteration == 4)
        @empty
        <p> No Events </p>
        @endforelse
        {{-- <div class="cell-sm-6 cell-md-5 cell-xl-3">
          <article class="post-event">
            <div class="post-event-img-overlay">
              <img class="img-responsive" src="{{asset('ui/frontend/images/events/images1.png') }}" alt="" style="height:420px; width:420px;" />
        <div class="post-event-overlay context-dark">
          <a class="btn btn-default" style="background-color:#2828287a;" href="#">Book Now</a>
          <div class="offset-top-20">
            <a class="btn btn-default" href="event-page.html">Learn More</a>
          </div>
        </div>
        <div class="post-event-meta text-center" style="background-color:#5F9EA0;">
          <div class="h3 text-bold reveal-inline-block reveal-lg-block">
            31
          </div>
          <p class="reveal-inline-block reveal-lg-block">September</p>
          <span class="text-bold reveal-inline-block reveal-lg-block inset-left-10 inset-lg-left-0">5:00pm</span>
        </div>
      </div>
      <div class="unit unit-lg unit-lg-horizontal">
        <div class="unit-body">
          <div class="post-event-body text-lg-left">
            <h6><b>
                <a href="event-page.html" style="color:black;">Spacewalking Conference</a>
              </b>
            </h6>
            <ul class="list-inline list-inline-xs">
              <li>
                <a href="team-member-profile.html"><span class="icon novi-icon icon-xxs mdi mdi-account-outline text-middle" style="color:#2828287a;"></span><span class="inset-left-10 text-dark text-middle">Walter Stanley</span></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      </article>
    </div>
    <div class="cell-sm-6 cell-md-5 cell-xl-3">
      <article class="post-event">
        <div class="post-event-img-overlay">
          <img class="img-responsive" src="{{asset('ui/frontend/images/events/images1.png') }}" alt="" style="height:420px; width:420px;" />
          <div class="post-event-overlay context-dark">
            <a class="btn btn-default" style="background-color:#2828287a;" href="#">Book Now</a>
            <div class="offset-top-20">
              <a class="btn btn-default" href="event-page.html">Learn More</a>
            </div>
          </div>
          <div class="post-event-meta text-center" style="background-color:#5F9EA0;">
            <div class="h3 text-bold reveal-inline-block reveal-lg-block">
              31
            </div>
            <p class="reveal-inline-block reveal-lg-block">September</p>
            <span class="text-bold reveal-inline-block reveal-lg-block inset-left-10 inset-lg-left-0">5:00pm</span>
          </div>
        </div>
        <div class="unit unit-lg unit-lg-horizontal">
          <div class="unit-body">
            <div class="post-event-body text-lg-left">
              <h6><b>
                  <a href="event-page.html" style="color:black;">Spacewalking Conference</a>
                </b>
              </h6>
              <ul class="list-inline list-inline-xs">
                <li>
                  <a href="team-member-profile.html"><span class="icon novi-icon icon-xxs mdi mdi-account-outline text-middle" style="color:#2828287a;"></span><span class="inset-left-10 text-dark text-middle">Walter Stanley</span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </article>
    </div>
    <div class="cell-sm-6 cell-md-5 cell-xl-3">
      <article class="post-event">
        <div class="post-event-img-overlay">
          <img class="img-responsive" src="{{asset('ui/frontend/images/events/images1.png') }}" alt="" style="height:420px; width:420px;" />
          <div class="post-event-overlay context-dark">
            <a class="btn btn-default" style="background-color:#2828287a;" href="#">Book Now</a>
            <div class="offset-top-20">
              <a class="btn btn-default" href="event-page.html">Learn More</a>
            </div>
          </div>
          <div class="post-event-meta text-center" style="background-color:#5F9EA0;">
            <div class="h3 text-bold reveal-inline-block reveal-lg-block">
              31
            </div>
            <p class="reveal-inline-block reveal-lg-block">September</p>
            <span class="text-bold reveal-inline-block reveal-lg-block inset-left-10 inset-lg-left-0">5:00pm</span>
          </div>
        </div>
        <div class="unit unit-lg unit-lg-horizontal">
          <div class="unit-body">
            <div class="post-event-body text-lg-left">
              <h6><b>
                  <a href="event-page.html" style="color:black;">Spacewalking Conference</a>
                </b>
              </h6>
              <ul class="list-inline list-inline-xs">
                <li>
                  <a href="team-member-profile.html"><span class="icon novi-icon icon-xxs mdi mdi-account-outline text-middle" style="color:#2828287a;"></span><span class="inset-left-10 text-dark text-middle">Walter Stanley</span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </article>
    </div> --}}
    <a class="btn btn-default btn-icon btn-icon-right justify-content-center" style="background-color:#2828287a;" href="{{ route('events') }}"><span class="icon fa-arrow-right"></span><span>View More Events</span></a>
    </div>
    </div>
  </section>


  {{--Recent News Section--}}
  <section class=" pb-5 bg-catskill" style="padding-top:80px;">
    <div class="shell isotope-wrap">
      <h1 class="main text-center"><b>Latest News</b></h1>
      <p class="text-grey mb-5 text-center">Through a lot of meaningful and impactful events students get the opportunity to develop their skills and portfolio beyond the curriculam.</p>
      <hr class="divider bg-madison" />
      <div class="row range-30 isotope offset-top-50 text-left">
        @forelse ( $news as $news )
        <div class="col-xs-12 col-sm-6 col-md-4 isotope-item">
          {{-- <article class="post-news">
            <a href="news-post-page.html"><img class="img-responsive" src="{{ asset('ui/frontend/images/blog/news-04-370x240.jpg') }}" alt="" width="370" height="240" /></a>
          <div class="post-news-body">
            <h6>
              <a href="news-post-page.html" style="color:#2828287a;">
                Ways Parents and Counselors</a>
            </h6>
            <div class="offset-top-20">
              <p>
                Securing scholarships can be stressful, but parents and
                counselors can serve as a resource.
              </p>
            </div>
            <div class="post-news-meta offset-top-20">
              <span class="icon novi-icon icon-xs mdi mdi-calendar-clock text-middle text-madison"></span><span class="text-middle inset-left-10 text-italic " style="color:#5F9EA0;">3 days ago</span>
            </div>
          </div>
          </article>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 isotope-item"> --}}
          <article class="post-news">
            <a href="{{ route('news_details', ['id' => $news->id]) }}"><img class="img-responsive" src="{{ 'storage/news/' . $news->img1 }}" alt="" width="370" height="240" /></a>
            <div class="post-news-body" style="height: 20rem">
              <h6>
                <a href="{{ route('news_details', ['id' => $news->id]) }}" style="color:#2828287a;">
                  {{ $news->title}}" </a>
              </h6>
              <div class="offset-top-20">
                <p>
                  {{ $news->author}}
                </p>
              </div>
              <div class="post-news-meta offset-top-20">
                <span class="icon novi-icon icon-xs mdi mdi-calendar-clock text-middle text-madison"></span><span class="text-middle inset-left-10 text-italic" style="color:#5F9EA0;">{{ $news->created_at->diffForHumans() }}</span>
              </div>
            </div>
          </article>
        </div>
        @break($loop->iteration == 4)
        @empty
        <p> No News </p>
        @endforelse

        {{-- <div class="col-xs-12 col-sm-6 col-md-4 isotope-item">
          <article class="post-news">
            <a href="news-post-page.html"><img class="img-responsive" src="{{ asset ('ui/frontend/images/blog/news-06-370x240.jpg') }}" alt="" width="370" height="240" /></a>
        <div class="post-news-body">
          <h6>
            <a href="news-post-page.html" style="color:#2828287a;">Studying in the United States</a>
          </h6>
          <div class="offset-top-20">
            <p>
              International students increasingly want to come to the
              United States for college or graduate school.
            </p>
          </div>
          <div class="post-news-meta offset-top-20">
            <span class="icon novi-icon icon-xs mdi mdi-calendar-clock text-middle text-madison"></span><span class="text-middle inset-left-10 text-italic" style="color:#5F9EA0;">2 days ago</span>
          </div>
        </div>
        </article>
      </div>
    </div> --}}
    <div class="range-xs-center" style="width:100%;">
      <a class="btn btn-default btn-icon btn-icon-right justify-content-center" style="background-color:#2828287a; margin-left:42%;" href="{{ route('news') }}"><span class="icon fa-arrow-right"></span><span>See More News</span></a>
    </div>
    </div>
  </section>

  {{--Alumni Section--}}
  <section class="mb-5" style="padding-top:80px;">
    <div class="shell-wide">
      <h1 class="main text-center"><b>Our Alumni</b></h1>
      <p class="text-grey mb-5 text-center">Through a lot of meaningful and impactful events students get the opportunity to develop their skills and portfolio beyond the curriculam.</p>
      <hr class="divider bg-madison" />
      <x-frontend.layouts.partials.alumni>
      </x-frontend.layouts.partials.alumni>
    </div>
  </section>

  {{--Ranking Section--}}
  <section class=" pb-5 bg-catskill" style="padding-top:80px;">
    <div class="shell isotope-wrap">
      <h1 class="main text-center"><b>Our Ranking</b></h1>
      <p class="text-grey mb-5 text-center">Through a lot of meaningful and impactful events students get the opportunity to develop their skills and portfolio beyond the curriculam.</p>
      <hr class="divider bg-madison" />
      <div class="container">
        <div class="row">
          @forelse ( $rankings as $ranking )
          <div class="col-3">
            <div class="card" style="width: 25rem;">
              <img src="{{ asset('storage/ranking/'.$ranking->img) }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="text-center" style="color:#2828287a">Ranking By: {{ $ranking->rank_name }}</h5>
                <h5 class="text-center" style="color:#5F9EA0">Our Position: {{ $ranking->rank_position }}</h5>
                <h6 class="text-center" style="color:#5F9EA0">Ranking Year: {{ $ranking->rank_year }}</h6>
                <p class="card-text">{{ $ranking->rank_description}}</p>
              </div>
            </div>
          </div>
          @empty
          <p> No Ranking </p>
          @endforelse
          {{-- <div class="col-3">
            <div class="card" style="width: 25rem;">
              <img src="{{ asset ('ui/frontend/images/ranking/images.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h4 class="text-center" style="color:#2828287a">Ranking</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card" style="width: 25rem;">
          <img src="{{ asset ('ui/frontend/images/ranking/images.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h4 class="text-center" style="color:#2828287a">Ranking</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card" style="width: 25rem;">
          <img src="{{ asset ('ui/frontend/images/ranking/images.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h4 class="text-center" style="color:#2828287a">Ranking</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div> --}}
    </div>
    </div>
    </div>
  </section>


  {{--What Visitors say about us section--}}
  {{-- <section class="quote" style="padding-top: 80px;">
    <h1 class="main text-center text-white"><b>Visitors Say About Us </b></h1>
    <p class="text-dark mb-5 text-center text-white mb-5">Through a lot of meaningful and impactful events students get the opportunity to develop their skills and portfolio beyond the curriculam.</p>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carbutton carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row">
            <div class="col-md-4">
              <div class="outerrr" style="padding-top: 20px;">
                <div class="outerrr-one">
                  <img src="{{ asset('ui/frontend/images/avatar.png') }}" alt="" class=" quote-img" style="margin-top: 10px;">
                  <p class="text-center">Ismat Farjana</p>
                </div>
                <p class="text-center">CFO</p>
              </div>
            </div>
            <div class="col-md-8">
              <div class="quote-text ">
                <div>
                  <p class="text-center quote-p"> <i class="fa fa-quote-left me-2" style="font-size:36px"></i> The align-items property specifies the default alignment for items inside the flexible container.
                    Tip: Use the align-self property of each item to override the align-items property bla bla bla bla.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-md-4">
              <div class="outerrr" style="padding-top: 20px;">
                <div class="outerrr-one">
                  <img src="{{ asset('ui/frontend/images/avatar.png') }}" alt="" class=" quote-img" style="margin-top: 10px;">
                  <p class="text-center">Ismat Farjana</p>
                </div>
                <p class="text-center">CFO</p>
              </div>
            </div>
            <div class="col-md-8">
              <div class="quote-text ">
                <div>
                  <p class="text-center quote-p"> <i class="fa fa-quote-left me-2" style="font-size:36px"></i> The align-items property specifies the default alignment for items inside the flexible container.
                    Tip: Use the align-self property of each item to override the align-items property bla bla bla bla.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-md-4">
              <div class="outerrr" style="padding-top: 20px;">
                <div class="outerrr-one">
                  <img src="{{ asset('ui/frontend/images/avatar.png') }}" alt="" class=" quote-img" style="margin-top: 10px;">
                  <p class="text-center">Ismat Farjana</p>
                </div>
                <p class="text-center">CFO</p>
              </div>
            </div>
            <div class="col-md-8">
              <div class="quote-text ">
                <div>
                  <p class="text-center quote-p"> <i class="fa fa-quote-left me-2" style="font-size:36px"></i> The align-items property specifies the default alignment for items inside the flexible container.
                    Tip: Use the align-self property of each item to override the align-items property bla bla bla bla.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section> --}}

  <x-frontend.layouts.partials.quot>
  </x-frontend.layouts.partials.quot>



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
                      <label class="form-label" for="form-email">Your e-mail</label><input class="form-control" id="form-email" type="email" name="email" data-constraints="@Required @Email" /><span class="input-group-btn"><button class="btn btn-default btn-sm" style="background-color:#2828287a" type="submit">
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
  <script src="https://kit.fontawesome.com/fb57673c61.js" crossorigin="anonymous"></script>
</body>

</html>