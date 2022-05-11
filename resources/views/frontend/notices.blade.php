<x-frontend.layouts.master>
    @push('css')
    <style>
        .notice {
            height: 200px;
        }
    </style>
    @endpush
    <section class="section breadcrumb-modern context-dark parallax-container text-center" data-parallax-img="images/parallax-03.jpg">
        <div class="parallax-content section-30 section-sm-70">
            <div class="shell">
                <h2 class="veil reveal-sm-block">Notices</h2>
                <div class="offset-sm-top-35">
                    <ul class="list-inline list-inline-lg list-inline-dashed p">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Notices</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        @forelse($notice as $notice)
        <div class="card notice">
            <div class="card-body ">
                <h5 style="color:cadetblue;"><a href="{{ asset('storage/notices/'.$notice->pdf) }}" target="_blank"> {{ $notice->title }}</a></h5>
                <div class="dateSubject">
                    <p>{{ $notice->subject }}</p>
                    <p style="color:crimson"><i class="fa-solid fa-calendar" aria-hidden="true"> {{ $notice->date }}</i> </p>
                </div>
            </div>
        </div>
        @empty
        <h3>No Notice Found</h3>
        @endforelse
        <!-- /.row -->
    </div>
</x-frontend.layouts.master>