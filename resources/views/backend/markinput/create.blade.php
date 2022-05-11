<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Add Form
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Mark Input </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('markinput.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Add New</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>


    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Create Mark Input <a class="btn btn-sm btn-info" href="{{ route('markinput.index') }}">List</a>
        </div>
        <div class="card-body">

           <x-backend.layouts.elements.errors :errors="$errors"/>

            <form action="{{ route('markinput.store') }}" enctype="multipart/form-data" method="post">
                @csrf

               
                <x-backend.form.input name="exam_name" type="text"/>

                <select name="section_id" class="form-control">
                    <option value="">Select Section</option>
                    @foreach($sections as $section)
                        <option value="{{ $section->id }}">{{ $section->section_name }}</option>
                    @endforeach
                </select>
                <br>
                <select name="year" class="form-control">
                    <option value="">Select Year</option>
                    @foreach($years as $year)
                        <option value="{{ $year->id }}">{{ $year->year_name }}</option>
                    @endforeach
                </select>
                <br>
                <select name="course_name" class="form-control">
                    <option value="">Select Course</option>
                    @foreach($courses as $course)
                        <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                    @endforeach
                </select>
                <br>
                <select name="student_reg_no" class="form-control">
                    <option value="">Select Student</option>
                    @foreach($students as $student)
                        <option value="{{ $student->id }}">{{ $student->student_reg_no }}</option>
                    @endforeach
                </select>
                <br>

                @php
                    // foreach($markdistributions as $markdistribution)
                    // {
                    //     echo '<input type="number" name="'.$markdistribution->mark_distribution_id.'" placeholder="'.$markdistribution->mark_distribution_id.'">';
                    // }
                    foreach($years as $year)
                    {
                        foreach($courses as $course)
                        {
                            foreach($sections as $section)
                            {
                                foreach($students as $student)
                                {
                                    foreach($markdistributions as $markdistribution)
                                    {
                                        echo '<input type="number" name="'.$markdistribution->mark_distribution_id.'_'.$year->id.'_'.$course->id.'_'.$section->id.'_'.$student->id.'" placeholder="'.$markdistribution->mark_distribution_id.'">';
                                    }
                                }
                            }
                        }
                    }
                @endphp

                {{-- <x-backend.form.input name="mark" type="number"/> --}}
                <br>

                <x-backend.form.button>Save</x-backend.form.button>
            </form>
        </div>
    </div>


</x-backend.layouts.master>