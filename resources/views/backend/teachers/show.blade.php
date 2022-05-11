<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Details
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Teachers </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('teachers.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Add New</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
           Teacher ID Details <a class="btn btn-sm btn-info" href="{{ route('teachers.index') }}">List</a>
        </div>
        <div class="card-body">
                <p>Name : <h3>{{$teacher->name }}</h3></p>
                <p>Designation : <h3>{{$teacher->designation }}</h3></p>
                <p>Qualification : <h3>{{$teacher->qualification }}</h3></p>
                <p>Description : <h3>{{$teacher->description }}</h3></p>
                <p>Email : <h3>{{$teacher->email }}</h3></p>
                <p>Phone : <h3>{{$teacher->phone }}</h3></p>
                <p>Knowledge : <h3>{{$teacher->knowledge }}</h3></p>
                <p>Experience : <h3>{{$teacher->experience }}</h3></p>
                <p>Communication : <h3>{{$teacher->communication }}</h3></p>
                <p>Leadership : <h3>{{$teacher->leadership }}</h3></p>
                <p>Image : <h3>
                    <img src="{{ asset('storage/teachers/'.$teacher->img) }}" alt="{{$teacher->name }}" width="100px" height="100px">
                </h3></p>      
        </div>
    </div>

</x-backend.layouts.master>