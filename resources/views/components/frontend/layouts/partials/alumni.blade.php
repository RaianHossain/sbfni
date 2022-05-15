<!-- Carousel wrapper -->
<div id="carouselMultiItemExample"
  class="carousel slide carousel-dark text-center"
  data-mdb-ride="carousel"
>
  <!-- Controls -->
  {{-- <div class="d-flex justify-content-center mb-4">
    <button
      class="carousel-control-prev position-relative"
      type="button"
      data-mdb-target="#carouselMultiItemExample"
      data-mdb-slide="prev"
    >
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button
      class="carousel-control-next position-relative"
      type="button"
      data-mdb-target="#carouselMultiItemExample"
      data-mdb-slide="next"
    >
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div> --}}
  <!-- Inner -->
  <div class="carousel-inner py-4">
    <!-- Single item -->
    <div class="carousel-item active">
      <div class="container">
        <div class="row">
           
                
                

          {{-- <div class="col-md-4 ">
            
            <div class="card">
              <img
                src="{{ asset('storage/alumni/'.$alumnis[0]->img) }}"
                class="card-img-top"
                alt="Waterfall"
              />
              <div class="card-body">
                <h5 class="card-title">{{ $alumnis[0]->name }}</h5>
                <p class="card-text">
                  {{$alumnis[0]->current_position}}
                </p>
                <a href="{{ route('home_alumni_details', ['alumni' =>$alumnis[0]->id]) }}" class="btn btn-primary">Batch:{{$alumnis[0]->passing_year }}</a>
              </div>
            </div>
          </div> --}}
          
@forelse($alumnis as $alumni) 

          <div class="col-lg-4 d-none d-lg-block">
              
            <div class="card">
                <img
                  src="{{ asset('storage/alumni/'.$alumni->img) }}"
                  class="card-img-top"
                  alt="Waterfall"
                />
                <div class="card-body">
                  <h5 class="card-title">{{ $alumni->name }}</h5>
                  <p class="card-text">
                    {{$alumni->current_position}}
                  </p>
                </div>
              </div>
          </div>
           @break($loop->iteration == 3)
         
                        @empty
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">No Alumni Found</h5>
        </div>
    </div>
</div>

@endforelse
 

        </div>
      </div><a class="btn btn-default btn-icon btn-icon-right justify-content-center" style="background-color:#9ACD32; padding:2%" href="{{ route('home_alumni') }}"><span class="icon fa-arrow-right"></span><span>View More Comments</span></a>
    </div>
 
    {{-- <!-- Single item -->
    <div class="carousel-item">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-12">
            <div class="card">
              <img
                src="https://mdbcdn.b-cdn.net/img/new/standard/nature/184.webp"
                class="card-img-top"
                alt="Fissure in Sandstone"
              />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk
                  of the card's content.
                </p>
                <a href="#!" class="btn btn-primary">Button</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <div class="card">
              <img
                src="https://mdbcdn.b-cdn.net/img/new/standard/nature/185.webp"
                class="card-img-top"
                alt="Storm Clouds"
              />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk
                  of the card's content.
                </p>
                <a href="#!" class="btn btn-primary">Button</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <div class="card">
              <img
                src="https://mdbcdn.b-cdn.net/img/new/standard/nature/186.webp"
                class="card-img-top"
                alt="Hot Air Balloons"
              />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk
                  of the card's content.
                </p>
                <a href="#!" class="btn btn-primary">Button</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
            <div class="card">
              <img
                src="https://mdbcdn.b-cdn.net/img/new/standard/nature/187.webp"
                class="card-img-top"
                alt="Peaks Against the Starry Sky"
              />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk
                  of the card's content.
                </p>
                <a href="#!" class="btn btn-primary">Button</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block">
            <div class="card">
              <img
                src="https://mdbcdn.b-cdn.net/img/new/standard/nature/188.webp"
                class="card-img-top"
                alt="Bridge Over Water"
              />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk
                  of the card's content.
                </p>
                <a href="#!" class="btn btn-primary">Button</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block">
            <div class="card">
              <img
                src="https://mdbcdn.b-cdn.net/img/new/standard/nature/189.webp"
                class="card-img-top"
                alt="Purbeck Heritage Coast"
              />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk
                  of the card's content.
                </p>
                <a href="#!" class="btn btn-primary">Button</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
  <!-- Inner -->
</div>
<!-- Carousel wrapper -->