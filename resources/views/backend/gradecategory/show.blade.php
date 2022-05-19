<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Details
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Grade Category </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('gradecategory.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Add New</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
           Grade Category Details <a class="btn btn-sm btn-info" href="{{ route('gradecategory.index') }}">List</a>
        </div>
        <div class="card-body">
                <p><h4>Grade Category Name  : </h4>{{ $show_gradecategory->gradecategory_name }}</p>
                <p><h4>Mark From  : </h4>{{ $show_gradecategory->mark }}</p>
        </div>
    </div>

</x-backend.layouts.master>