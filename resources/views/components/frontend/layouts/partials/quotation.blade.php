<section
  class="section novi-background bg-cover section-70 section-xl-100 section-xl-bottom-114 bg-madison context-dark position-relative"
  >
  <div
    class="owl-carousel owl-carousel-default veil-xl-owl-dots veil-owl-nav reveal-xl-owl-nav"
    data-items="1"
    data-nav="true"
    data-dots="true"
    data-nav-class='["owl-prev fa-angle-left", "owl-next fa-angle-right"]'
  >
    <div>
      <div class="shell">
         @forelse ($quotation as $quotation )
        <div class="range range-xs-center range-xs-middle">
         
          <div class="cell-sm-9 cell-sm-push-1">
            
            
            <div class="quote-classic-boxed text-center">
              <div class="quote-body">
                <q
                  >{{ $quotation->quotation }}</q
                >
                <div class="offset-top-30 text-center">
                  <cite class="font-accent">{{ $quotation->author_name }}</cite>
                  <div class="offset-top-5">
                    <p class="text-dark text-italic">
                      {{ $quotation->title }}
                    </p>
                  </div>
                </div>
              </div>
            </div>
              
            
          </div>
        </div>
      </div>
    </div>@empty
              <p> No Qutation Found </p>
            @endforelse
    {{-- <div>
      <div class="shell">
        <div class="range range-xs-center range-xs-middle">
          <div class="cell-sm-9 cell-sm-push-1">
            <div class="quote-classic-boxed text-center">
              <div class="quote-body">
                <q
                  >When I researched the programmes available I realized
                  that the University was offering exactly the type of
                  programme in international development that interested
                  me.</q
                >
                <div class="offset-top-30 text-center">
                  <cite class="font-accent">Steven Alvarez</cite>
                  <div class="offset-top-5">
                    <p class="text-dark text-italic">
                      Diploma for Graduates in International Development,
                      USA
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
  </div>
</section>