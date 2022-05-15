<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Add Form
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Year Input </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('year.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Add New</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>


    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Create Year Input <a class="btn btn-sm btn-info" href="{{ route('year.index') }}">List</a>
        </div>
        <div class="card-body">

           <x-backend.layouts.elements.errors :errors="$errors"/>

            <form action="{{ route('year.store') }}" enctype="multipart/form-data" method="post">
                @csrf

                <select name="year_name" class="form-control">
                    <option value="">Select Year</option>
                        <option value="1">First Year</option>
                        <option value="2">Second Year</option>
                        <option value="3">Third Year</option>
                </select>

                <br>

                <select name="course_name" class="form-control">
                    <option value="">Select Course</option>
                    @foreach($course as $courses)
                        <option value="{{ $courses->course_name }}">{{ $courses->course_name }}</option>
                    @endforeach
                </select>
                <br>

                {{-- checkbox --}}
                <div class="form-group">
                    <label for="mark_distribution_id">Mark Distribution Type</label>
                    <div class="form-check">
                        @forelse ($markdestribution as $markDistributions )
                        <input type="checkbox" name="mark_distribution_id[]" value="{{ $markDistributions->mark_distribution_name }}"> {{ $markDistributions->mark_distribution_name }}

                        @empty
                            <label class="form-check-label">No Mark Distribution Type Found</label>
                        @endforelse

                <br>
                <x-backend.form.button>Save</x-backend.form.button>
            </form>
        </div>
    </div>


</x-backend.layouts.master>