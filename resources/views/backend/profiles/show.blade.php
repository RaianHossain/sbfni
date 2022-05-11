<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Details
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Profiles </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('profiles.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Add New</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
           Profile ID Details <a class="btn btn-sm btn-info" href="{{ route('profiles.index') }}">List</a>
        </div>
        <div class="card-body">                
                
                <p>full_name : <p>{{$profile->full_name }}</p></p>
                <p>phone : <p>{{$profile->phone }}</p></p>
                <p>address : <p>{{$profile->address }}</p></p>
                <p>session : <p>{{$profile->session }}</p></p>
                <p>course_name : <p>{{$profile->course_name }}</p></p>
                <p>current_status : <p>{{$profile->current_status }}</p></p>
                <p>result : <p>{{$profile->result }}</p></p>
                <p>nid : <p>{{$profile->nid }}</p></p>
                <p>dob : <p>{{$profile->dob }}</p></p>
                <p>gender : <p>{{$profile->gender }}</p></p>
                <p>blood_group : <p>{{$profile->blood_group }}</p></p>
                <p>marital_status : <p>{{$profile->marital_status }}</p></p>
                <p>father_name : <p>{{$profile->father_name }}</p></p>
                <p>mother_name : <p>{{$profile->mother_name }}</p></p>
                <p>father_phone : <p>{{$profile->father_phone }}</p></p>
                <p>parent_address : <p>{{$profile->parent_address }}</p></p>
                <p>current_year : <p>{{$profile->current_year }}</p></p>
                <p>current_semester : <p>{{$profile->current_semester }}</p></p>
                <p>student_id : <p>{{$profile->student_id }}</p></p>
                <p>Image : <h3>
                    <img src="{{ asset('storage/profiles/'.$profile->img) }}" alt="{{$profile->name }}" width="100px" height="100px">
                </h3></p>      
        </div>
    </div>

</x-backend.layouts.master>