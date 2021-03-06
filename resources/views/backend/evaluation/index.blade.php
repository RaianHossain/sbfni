<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Teachers-Evaluation
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Teachers </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('grade.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Teahers</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="card mb-4" style="width:100%">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Grade

            {{-- @can('create-category') --}}
            <a class="btn btn-sm btn-info" href="{{ route('grade.create') }}">Add New</a>
            {{-- @endcan --}}

        </div>
        <div class="card-body">

            <x-backend.layouts.elements.message :fmessage="session('message')" />

            <!-- <table id="datatablesSimple"> -->
            <form method="GET" action="{{ route('grade.index') }}">
                <x-backend.form.input style="width: 200px;" name='search' />

            </form>
            <table class="table">
                <thead>
                    <tr>
                        <th>Sl#</th>
                        <th>Teacher Name/th>
                        <th>Course Name</th>
                        <th>Course Code</th>
                        <th>Course Year</th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @php $sl=0 @endphp
                    @foreach ($currentcourses as $currentcourse)
                    <tr>
                        <td>{{ ++$sl }}</td>
                       
                        <td>{{ $currentcourse->teacher->name }}</td> 
                        
                        <td>{{ $currentcourse->course->course_name }}</td>

                        <td>{{ $currentcourse->course->course_code }}</td>

                        <td>{{ $currentcourse->course_year }}</td>

                        <td>
                            <a href="{{ route('teacher.evaluation.showteacherevaluation', ['teacher_id'=>$currentcourse->teacher->id, 'year'=>$currentcourse->year, 'currentcourse_id'=>$currentcourse->id]) }}" class="btn btn-info">Show</a>
                        </td>

                        
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

</x-backend.layouts.master>