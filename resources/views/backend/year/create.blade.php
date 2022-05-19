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
                <label for="student_id">Select student</label>
                <select name="student_id" class="form-control" id="student_id">
                    <option value="">Select Year</option>
                    @foreach($students as $student)
                    <option value="{{ $student->id }}">{{ $student->name }}</option>
                    @endforeach
                </select>

                <br>
                <label for="course_year">Select Course Year</label>
                <select name="course_year" class="form-control" id="course_year">
                    <option value="">Select Course</option>
                    
                        <option value="1st">1st Year</option>
                        <option value="2md">2nd Year</option>
                        <option value="3rd">3rd Year</option>
                    
                </select>
                <br>

                <label for="section">Select Section</label>
                <select name="section" class="form-control" id="section">
                    <option value="">Select Course</option>
                    
                        <option value="A">A</option>
                        
                    
                </select>
                <br>
                <label for="year">Select Year</label>
                <select name="year" class="form-control" id="year">
                    <option value="">Select Year</option>
                   
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>    
                        <option value="2019">2019</option>             
                    
                </select>

                {{-- checkbox --}}
                <br>
                <x-backend.form.button>Save</x-backend.form.button>
                <!-- <button class="btn btn-primary">Save</button> -->
            </form>
        </div>
    </div>


</x-backend.layouts.master>