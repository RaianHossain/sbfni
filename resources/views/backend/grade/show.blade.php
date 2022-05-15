<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Details
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Grade </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('grade.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Add New</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
           Grade Details <a class="btn btn-sm btn-info" href="{{ route('grade.index') }}">List</a>
        </div>
        <div class="card-body">
                <p><h4>Grade Name  : </h4>{{ $show_grade->grade_name }}</p>
                <p><h4>Point  : </h4>{{ $show_grade->point }}</p>
                <p><h4>Point From  : </h4>{{ $show_grade->point_from }}</p>
                <p><h4>Point To  : </h4>{{ $show_grade->point_to }}</p>
                <p><h4>Mark From  : </h4>{{ $show_grade->mark_from }}</p>
                <p><h4>Mark Upto  : </h4>{{ $show_grade->mark_upto }}</p>
                <p><h4>Comment  : </h4>{{ $show_grade->comment }}</p>
                <p><h4>Grade Category  : </h4>{{ $show_grade->grade_category }}</p>
                
                

        </div>
    </div>

</x-backend.layouts.master>